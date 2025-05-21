@extends('site.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/product-details.css') }}">
@endsection

@section('title', 'Ürün Detayı')

@section('content')
    <!-- Product Hero Section -->
    <section class="product-hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-hero-content">
                        <h1 class="product-hero-title">{{$product->title}}</h1>
                        <p class="product-hero-subtitle">{{$product->desc}}</p>
                        <div class="product-meta">
                            <div class="product-meta-item">
                                <i class="far fa-calendar-alt"></i>
                                <span>{{$product->created_at->format('d M Y')}}</span>
                            </div>
                            <div class="product-meta-item">
                                <i class="far fa-clock"></i>
                                <span>{{$product->reading_time}} dakikalık okuma</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="product-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product-content-inner">
                        <img src="{{asset('storage/'.$product->image)}}" alt="{{$product->title}}" class="img-fluid">
                        
                        <h2>{{$product->title}}</h2>
                        <p>{{$product->desc}}</p>
                        
                        <p>{!!$product->content!!}</p>
                        
                        
                        <div class="tags-share">
                            <div class="tags-container">
                                <h4 class="tag-title">Etiketler</h4>
                                <div class="tags">
                                    @if($product->tags)
                                        @foreach(explode(',', $product->tags) as $tag)
                                            <a href="#" class="tag">#{{ trim($tag) }}</a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="share-container">
                                <h4 class="share-title">Paylaş</h4>
                                <div class="share-buttons">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="share-button"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}" target="_blank" class="share-button"><i class="fab fa-twitter"></i></a>
                                    <a href="https://api.whatsapp.com/send?text={{ urlencode(url()->current()) }}" target="_blank" class="share-button"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}" target="_blank" class="share-button"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="mailto:?subject={{ urlencode($product->title) }}&body={{ urlencode(url()->current()) }}" class="share-button"><i class="far fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-summary">
                        <h3>Ürün Özeti</h3>
                        <img src="{{asset('storage/'.$product->image)}}" alt="{{$product->title}}" class="product-summary-img">
                        <p>{{$product->desc}}</p>
                        <div class="product-specs">
                            <div class="product-spec-item">
                                <span class="product-spec-label">Malzeme</span>
                                <span class="product-spec-value">{{$product->material}}</span>
                            </div>
                            <div class="product-spec-item">
                                <span class="product-spec-label">Boyutlar</span>
                                <span class="product-spec-value">{{$product->dimensions}}</span>
                            </div>
                            <div class="product-spec-item">
                                <span class="product-spec-label">Renk Seçenekleri</span>
                                <span class="product-spec-value">{{$product->color_options}}</span>
                            </div>
                            <div class="product-spec-item">
                                <span class="product-spec-label">Garanti</span>
                                <span class="product-spec-value">{{$product->guarantee}}</span>
                            </div>
                            <div class="product-spec-item">
                                <span class="product-spec-label">Montaj</span>
                                <span class="product-spec-value">{{$product->montaj}}</span>
                            </div>
                        </div>
                        <a href="{{route('contact')}}" class="btn btn-primary w-100">Teklif Alın</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products Section -->
    <section class="related-products">
        <div class="container">
            <h2 class="related-products-title">İlginizi Çekebilecek Diğer Ürünler</h2>
            <div class="row g-4">
                @foreach($related_products as $related_product)
                    <div class="col-md-6 col-lg-3">
                        <div class="related-product-card">
                            <div class="related-product-img">
                                <img src="{{asset('storage/'.$related_product->image)}}" alt="{{$related_product->title}}">
                            </div>
                            <div class="related-product-content">
                                <h3 class="related-product-title">{{$related_product->title}}</h3>
                                <p class="related-product-desc">{{$related_product->desc}}</p>
                                <a href="{{route('product-detail', $related_product->slug)}}" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('site-assets/js/product-details.js') }}"></script>
@endsection
