@extends('layouts.app')

<!-- @extends('layout.layout') -->

@section('content')

<div id="product-app">
    <product-component></product-component>
    <router-view></router-view> 
</div>


@endsection
