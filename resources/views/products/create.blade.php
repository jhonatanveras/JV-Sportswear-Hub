@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4">Criar Produto</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="form-group">
                <label for="name">Nome do Produto</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="description">Descrição do Produto</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Preço do Produto</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#price').mask('000.000.000.000.000.00', { reverse: true });
        });
    </script>
@endsection
