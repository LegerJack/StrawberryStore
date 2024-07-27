@extends('web.app')
@section('content')
    <div class="container">
        {{ Breadcrumbs::render('category', $category) }}
        <h2>{{ $category->name }}</h2>
        <x-block.products-list :products="$products"/>
    </div>
@endsection
