@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4">Resultados da Pesquisa</h1>

        <!-- Barra de Pesquisa -->
        <form action="{{ route('products.search') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Pesquisar produtos...">
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </div>
        </form>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach($products as $product)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Preço: R$ {{ $product->price }}</p>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Detalhes</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
