<x-layout method="GET">

    <label class="form-question" for="pergunta">Por favor, selecione uma unidade para iniciar o sistema:</label>
    <div class="form-search">
        <input type="text" class="input-search" name="searchUnidade">
        <button type="submit" class="submit-search">
            <img class="find" src="{{ asset('assets/img/find.png') }}">
        </button>
    </div>
    <div class="form-result">
        @foreach ($unidades as $unidade)
            <a class="unidade" href="{{ route('feedback.create', $unidade->id) }}">{{ $unidade->no_unidade }}</a>
        @endforeach
    </div>

</x-layout>
