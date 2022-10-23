@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/posts">< Regresar</a>
            <div class="card mb-4">
                <div class="card-body">
                    <div>
                        <img src="{{ $post->get_image }}" class="card-img-top">
                    </div>
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="card-text">
                        {{ $post->body }}
                    </p>
                    <h5 class="card-subtitle">Precio: $ {{ $post->price }}</h5>
                    <br>
                    <p class="text-muted mb-0">
                        <em>
                            &ndash; {{ $post->user->name }} {{ $post->created_at->format('d M Y') }}
                        </em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
