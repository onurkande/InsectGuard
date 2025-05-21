@extends('site.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/products.css') }}">
@endsection

@section('title', 'Ürünler')

@section('content')
    <!-- Page Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-hero-content">
                        <h1 class="page-hero-title">{{$product_settings->title}}</h1>
                        <p class="page-hero-subtitle">{{$product_settings->desc}}</p>
                        <a href="{{route('contact')}}" class="btn btn-primary">Hemen Teklif Alın</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="product-grid">
        <div class="container">
            <!-- Products Grid -->
            <div class="row product-container">
                <!-- Product 1 -->
                @foreach ($products as $product)
                <div class="col-md-6 col-lg-4 product-item">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="{{asset('storage/'.$product->image)}}" alt="{{$product->title}}">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">{{$product->title}}</h3>
                            <p class="product-desc">{{$product->desc}}</p>
                            <!--<div class="product-features">
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Kolay açılıp kapanma</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Yüksek dayanıklılık</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Farklı renk seçenekleri</span>
                                </div>
                            </div>-->
                            <div class="product-action">
                                <a href="{{route('product-detail', $product->slug)}}" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            {{-- <div class="row">
                <div class="col-12">
                    <div class="pagination-container">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    <!-- Mini CTA Section -->
    <section class="mini-cta">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mini-cta-title">Size en uygun sineklik hangisi?</h2>
                    <p class="mini-cta-text">İhtiyaçlarınıza en uygun sineklik modelini seçmek için bizimle iletişime geçin. Uzman ekibimiz, en doğru çözümü birlikte belirlesin.</p>
                    <a href="index.html#contact" class="btn btn-light">Hemen İletişime Geçin</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('site-assets/js/products.js') }}"></script>
@endsection
