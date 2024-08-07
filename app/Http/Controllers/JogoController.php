<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Jogo;
use App\Models\Grupo;
use App\Models\GrupoPalavra;
use App\Models\GrupoJogo;
use App\Models\GrupoDisciplina;
use App\Models\Palavra;
use App\Models\Disciplina;
use App\Http\Controllers\Controller;

class JogoController extends Controller {

    public function __construct(
        protected Jogo $jogosRepository,
        protected GrupoJogo $gruposJogosRepository,
        protected GrupoDisciplina $gruposDisciplinasRepository,
        protected GrupoPalavra $gruposPalavrasRepository,
        protected Palavra $palavrasRepository,
        protected Grupo $gruposRepository
    ) {
    }

    public function index(Request $request) {
        $query = Jogo::query();

        $disciplinas = Disciplina::all();

        if ($request->filled('nome')) $query->where('nome', 'like', '%' . $request->nome . '%');
        if ($request->filled('data')) $query->where('data', $request->data);

        $jogos = $query->paginate(16);

        return view('jogos.jogos', [
            'jogos' => $jogos,
            'disciplinas' => $disciplinas
        ]);
    }

    public function jogo() {
        return view('conexo');
    }

    public function edit($id) {
        $jogo = Jogo::find($id);

        return view('jogos.editar_jogo', [
            'jogo' => $jogo,
        ]);
    }

    public function api() {
        $id = isset($_GET['id']) ? (int) $_GET['id'] : (int) 1;
        $jogo = Jogo::where('id', $id)->first();

        for ($i = 1; $i <= 4; $i++) {
            $grupo_id = $jogo["grupo_{$i}_id"];
            $grupo_nome = Grupo::find($grupo_id)->nome;

            $grupos_nomes[] = [
                'grupo' => $grupo_nome,
            ];
        }

        return [
            'id' => $jogo->id,
            'nome' => $jogo->nome,
            'grupo_1_id' => $jogo->grupo_1_id,
            'grupo_2_id' => $jogo->grupo_2_id,
            'grupo_3_id' => $jogo->grupo_3_id,
            'grupo_4_id' => $jogo->grupo_4_id,
            'grupo_1_nome' => $grupos_nomes[0]['grupo'],
            'grupo_2_nome' => $grupos_nomes[1]['grupo'],
            'grupo_3_nome' => $grupos_nomes[2]['grupo'],
            'grupo_4_nome' => $grupos_nomes[3]['grupo'],
            'grupo_1_palavras' => $jogo->grupo_1_palavras,
            'grupo_2_palavras' => $jogo->grupo_2_palavras,
            'grupo_3_palavras' => $jogo->grupo_3_palavras,
            'grupo_4_palavras' => $jogo->grupo_4_palavras,
            'data' => $jogo->data,
        ];
    }

    public function store(Request $request) {

        $messages = [
            'nome.required' => 'Você deve preencher o campo com algum nome',
            'disciplina_id.required' => 'O jogo deve ter alguma disciplina',
        ];

        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'disciplina_id' => 'required'
        ], $messages);

        if ($validator->fails()) return back()->withErrors($validator)->withInput();
        else {
            $disciplina_id = $request->input('disciplina_id');
            $data = request()->has('dataJogo') ? request()->get('dataJogo') : now()->toDateString();
            $grupos_ids = $this->gruposDisciplinasRepository->where('disciplina_id', $disciplina_id)->pluck('grupo_id')->toArray();
            $palavras_ids = $this->palavrasRepository->join('grupos_palavras', 'palavras.id', '=', 'palavra_id')->whereIn('grupo_id', $grupos_ids)->pluck('palavra_id')->toArray();

            $palavras_repetidas = array_count_values($palavras_ids);
            uksort($palavras_repetidas, function () {
                return rand() > rand();
            });

            $grupos_inseridos_ids = [];
            $palavras_inseridas_ids = [];
            $jogo = [];
            $grupos_ids = [];
            $grupos_palavras = [];

            foreach ($palavras_repetidas as $id => $palavra_repetida) {
                $grupos = $this->gruposPalavrasRepository->where('palavra_id', $id)->get()->toArray();

                shuffle($grupos);

                foreach ($grupos as $grupo) {
                    if (in_array($grupo['grupo_id'], $grupos_inseridos_ids)) continue;
                    $grupos_inseridos_ids[] = $grupo['grupo_id'];
                    $palavras_do_grupo = $this->gruposPalavrasRepository
                        ->join('palavras', 'palavra_id', '=', 'palavras.id')
                        ->where('grupo_id', $grupo['grupo_id'])
                        ->get(['palavras.id', 'palavras.nome', 'grupo_id'])
                        ->toArray();

                    shuffle($palavras_do_grupo);

                    $grupo_palavras = [];
                    for ($contador = 0; $contador < count($palavras_do_grupo); $contador++) {
                        if (in_array($palavras_do_grupo[$contador]['id'], $palavras_inseridas_ids)) continue;

                        $palavras_inseridas_ids[] = $palavras_do_grupo[$contador]['id'];
                        $nome_do_grupo = $this->gruposRepository->where('id', $grupo['grupo_id'])->pluck('nome')[0];
                        $palavras_do_grupo[$contador]['grupos_nome'] = $nome_do_grupo;
                        $jogo[] = $palavras_do_grupo[$contador];
                        $grupo_palavras[] = $palavras_do_grupo[$contador]['nome'];

                        if (count($jogo) % 4 == 0) break;
                    }

                    $grupos_ids[] = $grupo['grupo_id'];
                    $grupos_palavras[] = $grupo_palavras;
                    $grupos_nomes[] = $nome_do_grupo;
                }
            }

            $jogo = Jogo::create([
                'nome' => $request->input('nome'),
                'grupo_1_id' => $grupos_ids[0] ?? null,
                'grupo_2_id' => $grupos_ids[1] ?? null,
                'grupo_3_id' => $grupos_ids[2] ?? null,
                'grupo_4_id' => $grupos_ids[3] ?? null,
                'grupo_1_nome' => $grupos_nomes[0] ?? null,
                'grupo_2_nome' => $grupos_nomes[1] ?? null,
                'grupo_3_nome' => $grupos_nomes[2] ?? null,
                'grupo_4_nome' => $grupos_nomes[3] ?? null,
                'grupo_1_palavras' => implode(",", $grupos_palavras[0]) ?? [],
                'grupo_2_palavras' => implode(",", $grupos_palavras[1]) ?? [],
                'grupo_3_palavras' => implode(",", $grupos_palavras[2]) ?? [],
                'grupo_4_palavras' => implode(",", $grupos_palavras[3]) ?? [],
                'data' => $data
            ]);

            $jogo->save();
            return back()->with('success', 'Jogo salvo com sucesso!');
        }
    }


    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
        ]);

        if ($validator->fails()) return back()->withErrors($validator)->withInput();
        else {
            $jogo = Jogo::find($id);
            $jogo->nome = $request->input('nome');
            $jogo->save();

            return redirect()->route('jogos');
        }
    }

    public function destroy($id) {
        $jogo = Jogo::find($id);
        $jogo->delete();

        return back()->with('delete', 'Jogo deletado com sucesso!');
    }
}
