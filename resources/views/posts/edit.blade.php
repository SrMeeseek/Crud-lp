@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a href="/posts">< Regresar</a>
            <div class="card">
                <div class="card-header">Editar Producto</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nombre del producto</label>
                            <input type="text" name="title" class="form-control" required value="{{ old('title', $post->title) }}">
                        </div>
                        <br>
                        <div class="form-gropu">
                            <label>Sube una imagen del producto *</label>
                        </div>
                        <div class="form-group">
                            <input type="file" name="file" class="form-control-file" required>                  
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Descripcion del producto *</label>
                            <textarea name="body" rows="6" class="form-control" required>{{ old('body', $post->body) }}</textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Precio del producto *</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="number" name="price" class="form-control" placeholder="Sin puntos ni comas" required value="{{ old('price', $post->price) }}">
                        </div>
                        <br>
                        <div class="form-group">
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Actualizar Producto" class="btn btn-sm btn-outline-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
