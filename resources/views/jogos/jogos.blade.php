@extends('layout')
@section('title', 'Jogos - Conexo')

@section('content')

<section class="flex flex-col gap-x-2 items-center mx-auto my-4">
    <div class="flex gap-x-4 items-center mb-4">
        <a href="{{ route('index')}}" class="inline-block hover:bg-violet-200 rounded-full p-1 size-fit">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z"
                    clip-rule="evenodd" />
            </svg>
        </a>

        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
            class="btn-primary rounded-3xl p-4 flex items-center justify-center font-semibold" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            Criar jogo
        </button>
    </div>

    <form method="GET" action="{{ url('/jogos') }}" class="flex items-center gap-x-2 m-0">
        <input type="text" name="nome" placeholder="Buscar jogo" value="{{ request('nome') }}" class="input">
        <input type="date" name="data" placeholder="Data do jogo" value="{{ request('data') }}" class="input">
        <button type="submit" class="btn-secundary inline-flex items-center gap-x-2 py-3 px-8 ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                <path fill-rule="evenodd"
                    d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z"
                    clip-rule="evenodd" />
            </svg>
            Buscar
        </button>
    </form>


</section>

<main class="flex flex-col gap-2 w-screen justify-center items-center grow">

    @auth('web')

    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full appear">
        <div class="relative p-4 w-full max-w-md max-h-full">

            <div class="relative bg-violet-50 rounded-2xl shadow">

                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t-2xl">
                    <h3 class=" text-lg font-semibold ">
                        Criar jogo
                    </h3>
                    <button type="button"
                        class="text-violet-400 bg-transparent hover:text-violet-700 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>

                <form action="{{ route('jogoinsert') }}" method="POST" class="p-4 md:p-5">
                    {{ csrf_field()}}
                    <div class="flex flex-col gap-y-1">
                        <label for="nome" class="label capitalize">Nome</label>
                        <input type="text" id="nome" name="nome" value='' class="input">
                    </div>

                    <div class="flex flex-col gap-y-1">
                        <label for="disciplina_id" class="label capitalize">Disciplina</label>
                        <select id="disciplina_id" name="disciplina_id" class="input">
                            @foreach($disciplinas as $disciplina)
                            <option value='{{$disciplina->id}}'>{{$disciplina->nome}} </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn-primary flex items-center mt-4 justify-center self-baseline spin">
                        <span>Criar</span>
                        <div class="btn-loader hidden"></div>
                    </button>
                </form>
            </div>
            @endif
        </div>
    </div>

    </div>


    <div class="grid grid-cols-4 grid-rows-4 gap-2 p-4 justify-items-center">
        @foreach ($jogos as $jogo)

        <div id="edit-modal{{$jogo->id}}" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full appear">
            <div class="relative p-4 w-full max-w-md max-h-full">

                <div class="relative bg-violet-50 rounded-2xl shadow">

                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t-2xl">
                        <h3 class=" text-lg font-semibold ">
                            Editar jogo
                        </h3>
                        <button type="button"
                            class="text-violet-400 bg-transparent hover:text-violet-700 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center "
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>

                    <form action="{{ route('jogoupdate', ['id' =>$jogo->id]) }}" method="POST" class="p-4 md:p-5">
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field()}}
                        <div class="flex flex-col gap-y-1">
                            <label for="nome" class="label capitalize">Nome</label>
                            <input type="text" id="nome" name="nome" value='{{$jogo->nome}}' class="input">
                        </div>

                        <button type="submit"
                            class="btn-primary flex items-center mt-4 justify-center self-baseline spin">
                            <span>Salvar</span>
                            <div class="btn-loader hidden"></div>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="bg-violet-50 w-fit p-6 rounded-xl h-auto lista-item">

            <a href="{{ route('jogo', ['id' => $jogo->id]) }}"
                class="flex text-violet-900  font-semibold w-56 text-lg lista-titulo">
                {{ $jogo->nome}}
            </a>
            <time class="text-gray-500 font-medium text-sm">
                {{$jogo->formatarData($jogo->data)}}
            </time>

            @auth('web')
            <form method="POST" action="{{ route('jogodelete', ['id'=> $jogo->id]) }}" class="w-auto mx-auto pt-4">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field()}}
                <div class="flex gap-x-2 px-14 justify-between items-center">
                    <x-edit-button link="{{ route('jogoform', ['id' => $jogo->id]) }}"></x-edit-button>
                    <x-delete-button></x-delete-button>
                </div>
            </form>
            @endif

        </div>

        @endforeach

    </div>

    {{ $jogos->links('includes.pagination') }}
    </div>



</main>
</div>
@endsection

@section('scripts')
@vite(['resources/js/app.js'])