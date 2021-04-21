@extends('layout.app')

@section("header")
    <div class="page-container">
        <div class="layout-container">
            <div class="nav-v2 nav-visitor top-nav-visitor-ia">
                @include('inc.outside.nav-nav')
                @include('inc.outside.categories')
            </div>
        </div>
    </div>
@endsection