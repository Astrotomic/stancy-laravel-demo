@extends('master')

@section('content')
    <div class="row">
        @foreach(collect($posts)->sortByDesc('date') as $post)
            <div class="col-12 col-md-4 col-xl-3">
                <div class="card">
                    <img src="{{ url($post->image) }}" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">{{ $post->title }}</h3>
                        <div><small>{{ $post->date->format('Y-m-d H:i') }}</small></div>
                        <div class="card-text mb-3">{!! Illuminate\Support\Str::words(strip_tags($post->contents), 20) !!}</div>
                        <a href="{{ route('blog.post', ['post' => $post->slug]) }}" class="btn btn-primary">open post</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
