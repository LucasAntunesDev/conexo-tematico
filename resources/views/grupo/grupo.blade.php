@extends('layout')
@section('title', 'Grupo - Conexo')
@section('content')

<div class="flex flex-col justify-center items-center gap-2 pt-4 grow">

    <h1 class="font-bold text-4xl text-violet-500 mb-4 capitalize">
        Gerenciar grupo
    </h1>

    @if($errors->any())
    <div class="flex justify-center items-center">
        <div>
            <div
                class="rounded-lg border p-4 [&>svg~*]:pl-7 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4 border-red-500/50 text-red-500 dark:border-red-500 [&>svg]:text-red-500 w-full">
                <ul>
                    <div class="inline-flex gap-x-2 items-center font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                        </svg>

                        Erro
                    </div>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class="inline-flex items-center gap-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="w-4 h-4">
                                <path
                                    d="M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z" />
                            </svg>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
            </div>
        </div>
    </div>
    @endif

    @if($grupo->id)
    <form action="{{ route('grupoupdate', ['id' =>$grupo->id]) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        @else
        <form action="{{ route('grupoinsert') }}" method="POST">
            @endif
            {{ csrf_field()}}

            <fieldset class="flex flex-col  p-10 w-[40rem] gap-4">
                <input type="hidden" name="id" value='{{ $grupo->id }}'>

                <div class="flex flex-col gap-y-1">
                    <label for="nome" class="label capitalize">Nome</label>
                    <input type="text" id="nome" name="nome" value='{{ $grupo->nome }}'
                        class="rounded-lg border-none py-3 px-8 outline-none focus:ring focus:ring-violet-500 bg-violet-100 dark:bg-neutral-800">
                </div>

                <div class="flex flex-col gap-y-1">
                    <label for="disciplina_id" class="label capitalize">Disciplina</label>
                    <select id="disciplina_id" name="disciplina_id"
                        class="rounded-lg border-none py-3 px-8 outline-none focus:ring focus:ring-violet-500 bg-violet-100 dark:bg-neutral-800">
                        @foreach($disciplinas as $disciplina)
                        <option value='{{$disciplina->id}}' {{$disciplina->id == $grupo->disciplina_id ? "selected" :
                            ""}}>{{$disciplina->nome}} </option>
                        @endforeach
                    </select>
                    {{-- <input type="text" id="disciplina_id" name="disciplina_id" value='{{ $grupo->disciplina_id }}'
                        class="rounded-lg border-none py-3 px-8 outline-none focus:ring focus:ring-violet-500 bg-violet-100 dark:bg-neutral-800">
                    --}}
                </div>

            </fieldset>

            <div class="flex items-center gap-x-2 justify-center">
                <a href="{{ route('grupos') }}"
                    class="btn-link flex items-center mt-4 justify-center self-baseline">
                    Cancelar
                </a>

                <button type="submit"
                    class="btn-primary flex items-center mt-4 justify-center self-baseline spin">
                    <span>Salvar</span>
                    <svg id="spinner" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="animate-spin hidden">
                        <path d="M21 12a9 9 0 1 1-6.219-8.56" />
                    </svg>
                </button>
            </div>

        </form>
</div>
@endsection

@section('scripts')
@vite(['resources/js/app.js'])