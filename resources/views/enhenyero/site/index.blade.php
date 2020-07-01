@extends(env('THEME').'.layouts.site')

@section('header')
    @include(env('THEME').'.site.header')
@endsection

@section('content')
    @include(env('THEME').'.site.content')
@endsection