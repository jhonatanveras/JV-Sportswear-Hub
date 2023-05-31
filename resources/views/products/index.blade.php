@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4">Lista de Produtos</h1>
        <form action="{{ route('products.search') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Pesquisar" name="search">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </form>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Detalhes</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary">Editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
