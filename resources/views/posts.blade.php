@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-body">
                    <div>
                        <a href="{{ route('post', $post) }}">
                            <img src="{{ $post->get_image }}" class="card-img-top">
                        </a>
                    </div>
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="card-text">
                        {{ $post->get_excerpt }}...
                    </p>
                    <h5 class="card-subtitle">Precio: $ {{ $post->price }}</h5>
                    <a href="{{ route('post', $post) }}">Ver producto</a>
                </div>
            </div>
            @endforeach
            {{ $posts->links("pagination::bootstrap-4") }}
        </div>
    </div>
</div>
@endsection
