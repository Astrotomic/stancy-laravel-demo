@extends('master')

@section('content')
<img src="{{ url($image) }}" class="img-fluid">
<h1 class="">{{ $title }}</h1>
{!! $contents !!}
@endsection
