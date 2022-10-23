@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a href="/posts">< Regresar</a>
            <div class="card">
                <div class="card-header">Crear Producto</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('posts.store') }}" 
                    method="POST"
                    enctype="multipart/form-data"
                    >
                        <div class="form-group">
                            <label>Nombre de producto *</label>
                            <input type="text" name="title" class="form-control" required>
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
                            <textarea name="body" rows="6" class="form-control" required></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Precio del producto *</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="number" name="price" class="form-control" placeholder="Sin puntos ni comas" required>
                        </div>
                        <br>
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Crear Producto" class="btn btn-sm btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
