@extends('layout')
@section('title', 'Palavra - Conexo')
@section('content')

<div class="flex flex-col justify-center items-center gap-2 pt-4 grow">

    <h1 class="font-bold text-4xl text-violet-500 mb-4 capitalize">
        Gerenciar palavra
    </h1>

    <section class="flex justify-stretch items-stretch gap-2 grow px-10 py-4">

        <main
            class="flex flex-col items-center w-3/5 min-h-[95%] h-fit rounded-xl bg-violet-100 dark:bg-neutral-800">

            <h2 class="p-4 text-2xl font-bold tracking-tight text-violet-500">Editar palavra</h2>

            @if($palavra->id)
            <form action="{{ route('palavraupdate' , ['id' =>$palavra->id]) }}" method="POST" class="w-auto">
                <input type="hidden" name="_method" value="PUT">
                @endif
                {{ csrf_field()}}

                <fieldset class="flex flex-col items-stretch gap-4 p-6 pt-1">
                    <input type="hidden" name="id" value='{{ $palavra->id }}'>

                    <div class="flex flex-col gap-y-1">
                        <label for="nome" class="label">Palavra</label>
                        <input type="text" id="nome" name="nome" value='{{ $palavra->nome }}' class="input">
                        @if ($errors->has('nome'))
                            <x-error-message>
                                {{ $errors->first('nome') }}
                            </x-error-message>
                        @endif
                    </div>

                </fieldset>

                <div class="flex items-center gap-x-2 justify-center">
                    <a href="{{ route('palavras') }}"
                        class="btn-link flex items-center mt-4 justify-center self-baseline">
                        Cancelar
                    </a>

                    <button type="submit" class="btn-primary flex items-center mt-4 justify-center self-baseline spin">
                        <span>Salvar</span>
                        <svg id="spinner" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="animate-spin hidden">
                            <path d="M21 12a9 9 0 1 1-6.219-8.56" />
                        </svg>
                    </button>
                </div>
            </form>
        </main>

        @if($palavra->id)
        <aside
            class="flex flex-col gap-4 rounded-xl bg-violet-100 dark:bg-neutral-800 p-6 min-h-[95%] h-fit flex-auto">
            <div class="flex flex-col mx-auto gap-y-4">
                <div>
                    <h3 class="text-2xl font-bold tracking-tight text-violet-500">Grupos</h3>
                    <p>Grupos que contém a palavra <strong class="font-bold">{{$palavra->nome}}</strong></p>
                </div>

                <input type="hidden" name="_method" value="PUT">
                <div class="flex items-stretch justify-stretch flex-col w-fit gap-y-2 h-fit">
                    @foreach($grupos_palavras as $grupo_palavra)
                    <div
                        class="inline-flex justify-between items-center w-auto grow transicao hover:bg-violet-300 dark:hover:bg-neutral-500 bg-violet-200 dark:bg-neutral-700 rounded-2xl px-4 py-2 ml-0 gap-x-2">

                        <h4>{{ App\Models\Grupo::find($grupo_palavra->grupo_id)->nome }}</h4>

                        <div class="inline-flex gap-x-2 mr-0">
                            <x-edit-button link="{{ route('grupopalavraform', ['id' => $grupo_palavra->id]) }}">
                            </x-edit-button>
                            <x-delete-button></x-delete-button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </aside>
        @endif

    </section>

</div>

@endsection
@vite(['resources/js/eventos.js'])
@vite(['resources/js/script.js'])