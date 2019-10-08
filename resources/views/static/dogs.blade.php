@extends('master')

@section('content')
    <div class="row">
        @foreach(collect($dogs)->sortByDesc('slug') as $dog)
            <div class="col-12 col-md-4 col-xl-3">
                <div class="card">
                    <img src="{{ url(collect($dog->images)->first()) }}" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">{{ $dog->slug }}</h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
