@extends('site.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/index.css') }}">
@endsection

@section('title', 'SineklikCi - Modern Sineklik Çözümleri')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-text">
                    <h1 class="mb-3">{{$siteSettings->title}}</span></h1>
                    <p class="mb-4">{{$siteSettings->desc}}</p>
                    <div class="hero-btns">
                        <a href="{{route('contact')}}" class="btn btn-primary me-3">Hemen Teklif Al</a>
                        <a href="{{route('products')}}" class="btn btn-outline-light">Ürünlerimiz</a>
                    </div>
                </div>
                <div class="col-lg-6 hero-img">
                    <img src="{{asset('storage/'.$siteSettings->image)}}" alt="Modern Fly Screen" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="hero-shape"></div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">{{$counter_settings->title}}</h2>
                    <p class="section-subtitle">{{$counter_settings->desc}}</p>
                </div>
            </div>
            <div class="row mt-5 stats-row">
                @foreach($counters as $counter)
                    <div class="col-md-4 text-center">
                        <div class="stat-item">
                            <i class="{{$counter->icon}}"></i>
                            <h3>{{$counter->number}}<span>+</span></h3>
                            <p>{{$counter->title}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="section-title">{{$product_settings->title}}</h2>
                        <p class="section-subtitle">{{$product_settings->desc}}</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-3">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="product-card">
                            <div class="product-icon">
                                <i class="{{$product->icon}}"></i>
                            </div>
                            <h3>{{$product->title}}</h3>
                            <p>{{$product->desc}}</p>
                            <a href="{{route('product-detail', $product->slug)}}" class="btn-link">Detaylı Bilgi <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section id="why-us" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="section-title">{{$feature_settings->title}}</h2>
                        <p class="section-subtitle">{{$feature_settings->desc}}</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-3">
                @foreach($features as $feature)
                    <div class="col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="{{$feature->icon}}"></i>
                            </div>
                            <div class="feature-content">
                                <h3>{{$feature->title}}</h3>
                                <p>{{$feature->desc}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section id="videos" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="section-title">{{$video_settings->title}}</h2>
                        <p class="section-subtitle">{{$video_settings->desc}}</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($videos as $video)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <div class="ratio ratio-16x9">
                                {!! $video->video_url !!}
                            </div>
                        </div>
                        <div class="video-content">
                            <h3 class="video-title">{{$video->title}}</h3>
                            <p class="video-description">{{$video->description}}</p>
                            <div class="video-meta">
                                <div class="video-date">
                                    <i class="far fa-calendar-alt"></i>
                                    {{$video->created_at->format('d.m.Y')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="{{route('videos')}}" class="btn btn-primary">Tüm Videoları İzle</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section-padding testimonials-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="section-title">{{$comment_settings->title}}</h2>
                        <p class="section-subtitle">{{$comment_settings->desc}}</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <div class="swiper testimonialSwiper">
                            <div class="swiper-wrapper">
                                <!-- Testimonial 1 -->
                                @foreach($comments as $comment)
                                    <div class="swiper-slide">
                                        <div class="testimonial-card">
                                            {{-- <div class="testimonial-avatar">
                                                <img src="" alt="Customer Avatar">
                                            </div> --}}
                                            <div class="testimonial-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p class="testimonial-text">"{{$comment->desc}}"</p>
                                            <div class="testimonial-author">
                                                <h4>{{$comment->name}}</h4>
                                                <p>{{$comment->location}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Pagination -->
                            <div class="swiper-pagination" style="position: relative;"></div>
                        </div>
                        <!-- Navigation buttons -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Examples Section -->
    <section id="examples" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="section-title">{{$product_settings->title}}</h2>
                        <p class="section-subtitle">{{$product_settings->desc}}</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-4">
                @foreach($products->take(4) as $product)
                    <div class="col-md-6 col-lg-3">
                        <div class="example-card">
                            <div class="example-category">{{$product->title}}</div>
                            <div class="example-img">
                                <img src="{{asset('storage/'.$product->image)}}" alt="Before" class="img-fluid">
                            </div>
                            <div class="example-content">
                                <h4>{{$product->title}}</h4>
                                <p>{{$product->desc}}</p>
                                <a href="{{route('product-detail', $product->slug)}}" class="btn-link mt-2">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-5">
                <a href="{{route('products')}}" class="btn btn-primary">Tüm Projelerimizi Görüntüle</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="section-padding faq-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="section-title">{{$question_settings->title}}</h2>
                        <p class="section-subtitle">{{$question_settings->desc}}</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        @foreach($questions as $question)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{$question->id}}">
                                    <button class="accordion-button {{$loop->first ? '' : 'collapsed'}}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$question->id}}" aria-expanded="{{$loop->first ? 'true' : 'false'}}" aria-controls="collapse{{$question->id}}">
                                        <i class="{{$question->icon}}"></i> {{$question->title}}
                                    </button>
                                </h2>
                                <div id="collapse{{$question->id}}" class="accordion-collapse collapse {{$loop->first ? 'show' : ''}}" aria-labelledby="heading{{$question->id}}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        {{$question->desc}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="faq-cta mt-5">
                        <div class="faq-cta-card">
                            <i class="fas fa-question-circle"></i>
                            <h4>Sorunuzu bulamadınız mı?</h4>
                            <p>Merak ettiğiniz diğer sorular için bize ulaşın.</p>
                            <a href="{{route('contact')}}" class="btn btn-primary">Hemen İletişime Geçin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="section-padding cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="cta-title">Hemen bizi arayın, <span>eviniz için ücretsiz teklif alın!</span></h2>
                    <p class="cta-text">Profesyonel ekibimiz, ihtiyaçlarınıza en uygun sineklik çözümlerini sunmak için hazır. Ücretsiz keşif ve fiyat teklifi için hemen bizi arayın.</p>
                    <div class="cta-buttons">
                        <a href="tel:{{$contact->telephone}}" class="btn btn-light me-3"><i class="fas fa-phone-alt me-2"></i> Hemen Ara</a>
                        <a href="https://wa.me/{{$contact->telephone}}" class="btn btn-outline-light"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="contact-form-card">
                        <h3>İletişim Formu</h3>
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Adınız Soyadınız" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" name="phone" class="form-control" placeholder="Telefon Numaranız" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="E-posta Adresiniz" required>
                            </div>
                            <div class="mb-3">
                                <textarea name="message" class="form-control" rows="4" placeholder="Mesajınız" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('site-assets/js/index.js') }}"></script>
@endsection
