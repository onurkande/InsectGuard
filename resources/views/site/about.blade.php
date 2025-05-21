@extends('site.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/about.css') }}">
@endsection

@section('title', 'Hakkımızda')

@section('content')
    <!-- About Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-hero-content">
                        <h1 class="about-hero-title">{{$aboutSettings->title}}</h1>
                        <p class="about-hero-subtitle">{{$aboutSettings->desc}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Story Section -->
    <section class="company-story section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="story-card">
                        <i class="fas fa-book-open story-icon"></i>
                        <h3>Hikayemiz</h3>
                        <p>{!!$about->our_story!!}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row h-100">
                        <div class="col-md-12 mb-4">
                            <div class="story-card">
                                <i class="fas fa-eye story-icon"></i>
                                <h3>Vizyonumuz</h3>
                                <p>{!!$about->our_vision!!}</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="story-card">
                                <i class="fas fa-bullseye story-icon"></i>
                                <h3>Misyonumuz</h3>
                                <p>{!!$about->our_mission!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Content Section -->
    <section class="about-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="about-content-inner">
                        <h2 class="about-content-title">{{$aboutSettings->title}}</h2>
                        <p> {{$about->desc}}</p>
                        
                        <div class="about-content-img">
                            <img src="{{asset('storage/'.$about->image)}}" alt="SineklikCi Atölyesi" class="img-fluid">
                        </div>
                        
                        {!!$about->content!!}
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="cta-title">{{$aboutSettings->title}}</h2>
                    <p class="cta-text">{{$aboutSettings->desc}}</p>
                    <a href="{{route('contact')}}" class="btn btn-light">Hemen Teklif Alın</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('site-assets/js/about.js') }}"></script>
@endsection
