@extends('layout')
@section('title', 'Disciplina - Conexo')
@section('content')

<div class="flex flex-col justify-center items-center gap-2 pt-4 grow">

    <h1 class="font-bold text-4xl text-violet-500 mb-4 capitalize">
        Gerenciar disciplina
    </h1>

    @if($errors->any())
    <div class="flex justify-center items-center">
        <div>
            <div
                class="rounded-lg border p-4 [&>svg~*]:pl-7 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4 border-red-500/50 text-red-500  [&>svg]:text-red-500 w-full">
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

    @if($disciplina->id)
    <form action="{{ route('disciplinaupdate', ['id' =>$disciplina->id]) }}" method="POST" class="mx-auto">
        <input type="hidden" name="_method" value="PUT">
        @else
        <form action="{{ route('disciplinainsert') }}" method="POST">
            @endif
            {{ csrf_field()}}

            <fieldset class="flex flex-col  p-10 w-[40rem] gap-4">
                <input type="hidden" name="id" value='{{ $disciplina->id }}'>

                <div class="flex flex-col gap-y-1">
                    <label for="nome" class="label capitalize">Nome</label>
                    <input type="text" id="nome" name="nome" value='{{ $disciplina->nome }}' class="input">
                </div>

                <div class="flex flex-col gap-y-1">

                    <label for="professor_id" class="label capitalize">Professor</label>
                    <select id="professor_id" name="professor_id" class="input">
                        @foreach($professores as $professor)
                        <option value='{{$professor->id}}' {{$professor->id == $disciplina->professor_id ? "selected" :
                            ""}}>{{$professor->nome}} </option>
                        @endforeach
                    </select>
                </div>

            </fieldset>

            <div class="flex items-center gap-x-2 justify-center">
                <a href="{{ route('disciplinas') }}"
                    class="btn-link flex items-center mt-4 justify-center self-baseline">
                    Cancelar
                </a>

                <button type="submit" class="btn-primary flex items-center mt-4 justify-center self-baseline spin">
                    <span>Salvar</span>
                    <div class="btn-loader hidden"></div>
                </button>
            </div>

        </form>

</div>
@endsection

@section('scripts')
@vite(['resources/js/app.js'])