<div class="might-like-section">
    <div class="container">
        <h2>Rekomendasi produk lainya</h2>
        <div class="might-like-grid">
            @foreach ($mightAlsoLike as $product)
                <div class="might-box">
                <a href="{{ route('shop.show', $product->slug) }}" class="might-like-product">
                <div class="might-image">
                <img src="{{ productImage($product->image) }}" alt="product">
                </div>
                <div class="might-names">
                <div class="might-like-product-name">{{ $product->name }}</div>
                <div class="might-like-product-price">{{ $product->presentPrice() }}</div>
                </a>
                </div>
</div>
            @endforeach

        </div>
    </div>
</div>
