@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4">Detalhes do Produto</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text"><strong>Detalhe do Produto:</strong> {{ $product->description }}</p>
                <p class="card-text"><strong>Preço:</strong> <span class="text-primary">R$ {{ $product->price }}</span></p>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
@endsection
