@extends('layouts.app')
@section('title')
    Categories
    @if(isset($category) && $showBreadCrumbs) - {{ $category->name }} @endif
    @if(isset($subcategory)) - {{ $subcategory->name }} @endif
@endsection
@section('data-page-id', 'categories')

@section('content')
    <div class="home">

        <section class="display-products row" data-token="{{ $token }}" data-urlParams="{{ $urlParams }}" id="root">
            @if(isset($category) && $showBreadCrumbs)
                <div class="grid-x cell">
                    <nav aria-label="You are here:" role="navigation">
                        <ul class="breadcrumbs">
                            <li><a href="/products/category/{{ $category->slug }}">
                                    {{ $category->name }}</a>
                            </li>
                           @if(isset($subcategory))
                                <li><a href="/products/category/ {{ $category->slug }} /  {{ $subcategory->slug }}">
                                        {{ $subcategory->name }}</a>
                                </li>
                           @endif
                        </ul>
                    </nav>
                </div>
                @else
                    <h2 class="row">Categories</h2>
            @endif

            <div class="grid-x grid-padding-x medium-up-2 large-up-4 row">
                <div class="small-12 column" v-cloak v-for="product in products">
                    <a :href="'/product/' + product.id">
                        <div class="card" data-equalizer-watch>
                            <div class="card-section">
                                <img :src="'/' + product.image_path" width="100%" height="200">
                            </div>
                            <div class="card-section">
                                <p>
                                    @{{ stringLimit(product.name, 18) }}
                                </p>
                                <a :href="'/product/' + product.id" class="button more expanded">
                                    See More
                                </a>
                                <button v-if="product.quantity > 0" @click.prevent="addToCart(product.id)" class="button cart expanded">
                                    $@{{ product.price }} - Add to cart
                                </button>
                                <button v-else class="button warning expanded" disabled>
                                    Out of Stock
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
                <h2 v-if="products.length === 0">No product in this category.</h2>
            </div>
            
            <div class="text-center">
                <img v-show="loading" src="/images/loading.gif" style="padding-bottom: 3rem;
                position: fixed; top: 60%; bottom: 20%;">
            </div>
        </section>
    </div>
@stop