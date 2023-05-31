@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4">Editar Produto</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Detalhes do Produto</h5>
                <p class="card-text">Nome: {{ $product->name }}</p>
                <p class="card-text">Preço: R$ {{ $product->price }}</p>
                <p class="card-text">Descrição: {{ $product->description }}</p>
                <hr>
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome do Produto</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição do Produto</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Preço do Produto</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-secondary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
