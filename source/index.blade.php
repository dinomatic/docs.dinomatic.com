@extends('_layouts.main')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')

    @include('_layouts._docs')
    @include('_layouts._demos')
    @include('_layouts._links')
@endsection
