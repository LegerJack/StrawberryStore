@extends('web.app')
@section('content')
    <div class="container">
        <h2>{{ $category->name }}</h2>
        <x-block.products-list :products="$products"/>
    </div>
@endsection
