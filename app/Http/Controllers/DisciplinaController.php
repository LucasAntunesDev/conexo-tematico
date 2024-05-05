<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Disciplina;
use App\Models\Professor;
use App\Http\Controllers\Controller;

class DisciplinaController extends Controller {

    public function index() {
        $disciplinas = Disciplina::all();
        // return $diciplinas->professor_id;
        // $professores = Professor::all();

        return view('disciplinas', [
            'disciplinas' => $disciplinas
        ]);
    }

    public function create() {
        $disciplina = new Disciplina();

        return view('disciplina', [
            'disciplina' => $disciplina
        ]);
    }

    public function edit($id) {
        $disciplina = Disciplina::find($id);

        return view('disciplina', [
            'disciplina' => $disciplina
        ]);
    }

    public function store(Request $request) {

        $messages = [
            'nome.required' => 'O campo título deve ser preenchido',
            'professor_id.required' => 'O id da disciplina deve ser preenchido'
        ];

        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'professor_id' => 'required'
        ], $messages);

        if ($validator->fails()) return redirect()->route('disciplinanovo')->withErrors($validator)->withInput();
        else {
            $disciplina = new Disciplina();
            $disciplina->nome = $request->input('nome');
            $disciplina->professor_id = $request->input('professor_id');
            $disciplina->save();

            return redirect()->route('disciplinas');
        }
    }

    public function update($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'professor_id' => 'required'
        ]);

        if ($validator->fails()) return redirect()->route('disciplinanovo')->withErrors($validator)->withInput();
        else {
            $disciplina = Disciplina::find($id);
            $disciplina->nome = $request->input('nome');
            $disciplina->id = $request->input('id');
            $disciplina->save();

            return redirect()->route('disciplinas');
        }
    }

    public function destroy($id) {
        $disciplina = Disciplina::find($id);
        // return $disciplina->id;
        $disciplina->delete();

        return redirect()->route('disciplinas');
    }
}
