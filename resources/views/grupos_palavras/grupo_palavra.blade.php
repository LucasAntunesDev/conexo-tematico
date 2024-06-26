@extends('layout')
@section('title', 'Grupos de Palavras - Conexo')
@section('content')

<div class="flex flex-col justify-center items-center gap-2 pt-4 grow">

    <h1 class="font-bold text-4xl text-violet-500 mb-4 capitalize">
        Adicionar palavra a um grupo
    </h1>

    @if($grupo_palavra->id)
    <form action="{{ route('grupopalavraupdate', ['id' =>$grupo_palavra->id]) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        @else
        <form action="{{ route('grupopalavrainsert') }}" method="POST">
            @endif
            {{ csrf_field()}}

            <fieldset class="flex flex-col p-10 w-[40rem] gap-4 bg-violet-50 rounded-2xl">
                <input type="hidden" name="id" value='{{ $grupo_palavra->id }}'>

                <div class="flex flex-col gap-y-1">
                    @if($grupo_palavra->palavra_id)
                    <input type="hidden" id="palavra_id" name="palavra_id" value='{{$grupo_palavra->palavra_id}}'>

                    <label for="nome" class="label capitalize">Palavra</label>
                    <input type="text" id="nome" name="nome"
                        value='{{App\Models\Palavra::find($grupo_palavra->palavra_id)->nome }}' class="input">
                    @if ($errors->has('nome'))
                    <x-error-message>
                        {{ $errors->first('nome') }}
                    </x-error-message>
                    @endif

                    @else
                    <label for="nome" class="label capitalize">Palavra</label>
                    <select id="palavra_id" name="palavra_id" class="text-gray-700 input">
                        @foreach($palavras as $palavra)
                        <option value='{{$palavra->id}}' {{$palavra->id == $_GET['id'] ? "selected" :
                            ""}}>{{$palavra->nome}} </option>
                        @endforeach
                    </select>
                    @endif
                </div>

                <div class="flex flex-col gap-y-1">
                    <label for="grupo_id" class="label capitalize">grupo</label>
                    <select id="grupo_id" name="grupo_id" class="text-gray-700 input">
                        @foreach($grupos as $grupo)
                        <option value='{{$grupo->id}}' {{$grupo->id == $grupo_palavra->grupo_id ? "selected" :
                            ""}}>{{$grupo->nome}} </option>
                        @endforeach
                    </select>
                </div>

            </fieldset>

            <div class="flex items-center gap-x-2 justify-center">
                @if($grupo_palavra->palavra_id)
                <a href="{{ route('palavraform', ['id'=> App\Models\Palavra::find($grupo_palavra->palavra_id)->id]) }}"
                    class="btn-link flex items-center mt-4 justify-center self-baseline">
                    Cancelar
                </a>
                @else
                <a href="{{ route('palavras') }}" class="btn-link flex items-center mt-4 justify-center self-baseline">
                    Cancelar
                </a>
                @endif

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