@extends('site.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/videos.css') }}">
@endsection

@section('title', 'Videolar')

@section('content')
    <!-- Video Hero Section -->
    <section class="video-hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-hero-content">
                        <h1 class="video-hero-title">{{$video_settings->title}}</h1>
                        <p class="video-hero-subtitle">{{$video_settings->desc}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Gallery Section -->
    <section class="video-gallery">
        <div class="container">
            
            <div class="row">
                <!-- Video 1 -->
                @foreach($videos as $video)
                    <div class="col-md-6 col-lg-4">
                        <div class="video-card">
                            <div class="video-thumbnail">
                                <img src="{{$video->extractYoutubeThumbnail($video->video_url)}}" alt="Sineklik Montaj Videosu">
                                <a href="#" class="video-play-btn" data-bs-toggle="modal" data-bs-target="#videoModal{{$video->id}}">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <div class="video-content">
                                <h3 class="video-title">{{$video->title}}</h3>
                                <p class="video-description">{{$video->desc}}</p>
                                <div class="video-meta">
                                    <div class="video-date">
                                        <i class="far fa-calendar-alt"></i>
                                        <span>{{$video->created_at->format('d M Y')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Video CTA Section -->
    <section class="video-cta">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="video-cta-title">Çözümlerimizi Beğendiniz mi?</h2>
                    <p class="video-cta-text">Sizin için de aynısını yapabiliriz. Profesyonel ekibimiz, ihtiyaçlarınıza en uygun sineklik çözümlerini sunmak için hazır. Ücretsiz keşif ve fiyat teklifi için hemen bizi arayın.</p>
                    <a href="{{route('contact')}}" class="btn btn-light">Hemen Teklif Alın</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Modals -->
    <!-- Video Modal 1 -->
    @foreach($videos as $video)
    <div class="modal fade video-modal" id="videoModal{{$video->id}}" tabindex="-1" aria-labelledby="videoModal{{$video->id}}Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        {!! $video->video_url !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection

@section('js')
    <script src="{{ asset('site-assets/js/videos.js') }}"></script>
@endsection
