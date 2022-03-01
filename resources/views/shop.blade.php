@extends('layout')

@section('title', 'Products')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection




    <style>
body {
  background-image: url('/ecommerce-example/public/img/logback.png');
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;  
}

</style> 
@section('content')

    <div class="products-section">
        <div class="sidebar">
            
        @component('components.breadcrumbs')
        <a href="http://localhost/ecommerce-example/public">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span><a href="{{ route('shop.index') }}">Featured</a></span>
        @endcomponent
        <div class="categorys"> 
            <div class="categorys-top"> 
        <h3>Semua Kategori </h3>
        </div>  
        <div class="categorys-select">
            <ul>
                @foreach ($categories as $category)
                    <li class="{{ setActiveCategory($category->slug) }}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
</div>
        </div> <!-- end sidebar -->
</div>
        <div class="form-product">
            <div class="products-header">
                <h1 class="stylish-heading">{{ $categoryName }}</h1>
                <div>
                    <strong>Price: </strong>
                    <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'low_high']) }}">Low to High</a> |
                    <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'high_low']) }}">High to Low</a>

                </div>
            </div>

            <div class="products text-center">
                @forelse ($products as $product)
                    <div class="product">
                    <div class="product-image">
                        <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                        </div>
                        <div class="product-names">
                        <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product->presentPrice() }}</div>
                        </div>
                    </div>
                @empty
                    <div style="text-align: left">No items found</div>
                @endforelse
            </div> <!-- end products -->

            <div class="spacer"></div>
            {{ $products->appends(request()->input())->links() }}
        </div>
    </div>

@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection
