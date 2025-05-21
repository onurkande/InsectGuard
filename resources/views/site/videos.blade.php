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
                        <h1 class="video-hero-title">Sineklik Sistemlerini Tanıyın</h1>
                        <p class="video-hero-subtitle">Özel çözümlerimizi tanıtan videoları izleyerek bilgi edinin. Gerçek işler, gerçek sonuçlar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Gallery Section -->
    <section class="video-gallery">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="section-title">Video <span>Galerimiz</span></h2>
                        <p class="section-subtitle">Sineklik çözümlerimizi, montaj süreçlerini ve müşteri deneyimlerini anlatan videolarımızı keşfedin.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Video 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <div class="video-category">Montaj</div>
                            <img src="https://i.ytimg.com/vi/qRedtz_UJTY/maxresdefault.jpg" alt="Sineklik Montaj Videosu">
                            <a href="#" class="video-play-btn" data-bs-toggle="modal" data-bs-target="#videoModal1">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="video-content">
                            <h3 class="video-title">Kapı Sinekliği Montaj Süreci</h3>
                            <p class="video-description">Bu videoda, profesyonel ekibimizin kapı sinekliği montaj sürecini adım adım görebilirsiniz. Kaliteli malzeme ve uzman işçilik ile sorunsuz bir montaj.</p>
                            <div class="video-meta">
                                <div class="video-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>15 Mayıs 2025</span>
                                </div>
                                <div class="video-duration">
                                    <i class="far fa-clock"></i>
                                    <span>4:32</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <div class="video-category">Ürün Tanıtımı</div>
                            <img src="https://i.ytimg.com/vi/dQw4w9WgXcQ/maxresdefault.jpg" alt="Pileli Sineklik Tanıtımı">
                            <a href="#" class="video-play-btn" data-bs-toggle="modal" data-bs-target="#videoModal2">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="video-content">
                            <h3 class="video-title">Pileli Sineklik Sistemleri</h3>
                            <p class="video-description">Modern tasarımı ve kullanım kolaylığı ile öne çıkan pileli sineklik sistemlerimizi yakından tanıyın. Farklı renk ve boyut seçenekleri ile her mekana uygun çözümler.</p>
                            <div class="video-meta">
                                <div class="video-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>2 Mayıs 2025</span>
                                </div>
                                <div class="video-duration">
                                    <i class="far fa-clock"></i>
                                    <span>3:45</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <div class="video-category">Müşteri Deneyimi</div>
                            <img src="https://i.ytimg.com/vi/jNQXAC9IVRw/maxresdefault.jpg" alt="Müşteri Deneyimi">
                            <a href="#" class="video-play-btn" data-bs-toggle="modal" data-bs-target="#videoModal3">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="video-content">
                            <h3 class="video-title">Müşteri Memnuniyeti Hikayeleri</h3>
                            <p class="video-description">Memnun müşterilerimizin sineklik deneyimlerini ve memnuniyetlerini anlattıkları röportajlar. Gerçek müşteriler, gerçek deneyimler.</p>
                            <div class="video-meta">
                                <div class="video-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>28 Nisan 2025</span>
                                </div>
                                <div class="video-duration">
                                    <i class="far fa-clock"></i>
                                    <span>5:18</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <div class="video-category">Özel Çözümler</div>
                            <img src="https://i.ytimg.com/vi/9bZkp7q19f0/maxresdefault.jpg" alt="Kedi Sinekliği">
                            <a href="#" class="video-play-btn" data-bs-toggle="modal" data-bs-target="#videoModal4">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="video-content">
                            <h3 class="video-title">Kedi Sinekliği Çözümleri</h3>
                            <p class="video-description">Evcil dostlarınız için özel tasarlanmış kedi sinekliği çözümlerimizi keşfedin. Hem kedileriniz özgürce dolaşsın hem de eviniz haşerelerden korunsun.</p>
                            <div class="video-meta">
                                <div class="video-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>20 Nisan 2025</span>
                                </div>
                                <div class="video-duration">
                                    <i class="far fa-clock"></i>
                                    <span>4:05</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <div class="video-category">Bakım</div>
                            <img src="https://i.ytimg.com/vi/kJQP7kiw5Fk/maxresdefault.jpg" alt="Sineklik Bakımı">
                            <a href="#" class="video-play-btn" data-bs-toggle="modal" data-bs-target="#videoModal5">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="video-content">
                            <h3 class="video-title">Sineklik Bakım ve Temizliği</h3>
                            <p class="video-description">Sinekliklerinizin ömrünü uzatmak için doğru bakım ve temizlik yöntemlerini öğrenin. Basit adımlarla sinekliklerinizi ilk günkü gibi temiz tutun.</p>
                            <div class="video-meta">
                                <div class="video-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>12 Nisan 2025</span>
                                </div>
                                <div class="video-duration">
                                    <i class="far fa-clock"></i>
                                    <span>3:22</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <div class="video-category">Proje</div>
                            <img src="https://i.ytimg.com/vi/pRpeEdMmmQ0/maxresdefault.jpg" alt="Büyük Proje">
                            <a href="#" class="video-play-btn" data-bs-toggle="modal" data-bs-target="#videoModal6">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="video-content">
                            <h3 class="video-title">Büyük Ölçekli Projelerimiz</h3>
                            <p class="video-description">Otel, restoran ve iş yerleri için gerçekleştirdiğimiz büyük ölçekli sineklik projelerimizi inceleyin. Profesyonel çözümler, kusursuz uygulama.</p>
                            <div class="video-meta">
                                <div class="video-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>5 Nisan 2025</span>
                                </div>
                                <div class="video-duration">
                                    <i class="far fa-clock"></i>
                                    <span>6:14</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video 7 -->
                <div class="col-md-6 col-lg-4">
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <div class="video-category">Ürün Tanıtımı</div>
                            <img src="https://i.ytimg.com/vi/fJ9rUzIMcZQ/maxresdefault.jpg" alt="Sürme Sineklik">
                            <a href="#" class="video-play-btn" data-bs-toggle="modal" data-bs-target="#videoModal7">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="video-content">
                            <h3 class="video-title">Sürme Sineklik Sistemleri</h3>
                            <p class="video-description">Geniş açıklıklar için ideal olan sürme sineklik sistemlerimizi tanıyın. Kolay kullanım, şık tasarım ve uzun ömürlü çözümler.</p>
                            <div class="video-meta">
                                <div class="video-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>28 Mart 2025</span>
                                </div>
                                <div class="video-duration">
                                    <i class="far fa-clock"></i>
                                    <span>4:42</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video 8 -->
                <div class="col-md-6 col-lg-4">
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <div class="video-category">Montaj</div>
                            <img src="https://i.ytimg.com/vi/JGwWNGJdvx8/maxresdefault.jpg" alt="Pencere Sinekliği Montajı">
                            <a href="#" class="video-play-btn" data-bs-toggle="modal" data-bs-target="#videoModal8">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="video-content">
                            <h3 class="video-title">Pencere Sinekliği Montajı</h3>
                            <p class="video-description">Pencere sinekliği montaj sürecini adım adım izleyin. Profesyonel ekibimizin hızlı ve titiz çalışmasıyla kusursuz sonuçlar elde edin.</p>
                            <div class="video-meta">
                                <div class="video-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>20 Mart 2025</span>
                                </div>
                                <div class="video-duration">
                                    <i class="far fa-clock"></i>
                                    <span>3:58</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video 9 -->
                <div class="col-md-6 col-lg-4">
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <div class="video-category">Özel Çözümler</div>
                            <img src="https://i.ytimg.com/vi/OPf0YbXqDm0/maxresdefault.jpg" alt="Özel Tasarım Sineklikler">
                            <a href="#" class="video-play-btn" data-bs-toggle="modal" data-bs-target="#videoModal9">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                        <div class="video-content">
                            <h3 class="video-title">Özel Tasarım Sineklikler</h3>
                            <p class="video-description">Standart dışı pencere ve kapılar için özel tasarladığımız sineklik çözümlerimizi keşfedin. Her mekana uygun, özel üretim sineklikler.</p>
                            <div class="video-meta">
                                <div class="video-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>15 Mart 2025</span>
                                </div>
                                <div class="video-duration">
                                    <i class="far fa-clock"></i>
                                    <span>5:27</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <a href="index.html#contact" class="btn btn-light">Hemen Teklif Alın</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Modals -->
    <!-- Video Modal 1 -->
    <div class="modal fade video-modal" id="videoModal1" tabindex="-1" aria-labelledby="videoModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/qRedtz_UJTY" title="Kapı Sinekliği Montaj Süreci" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal 2 -->
    <div class="modal fade video-modal" id="videoModal2" tabindex="-1" aria-labelledby="videoModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Pileli Sineklik Sistemleri" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal 3 -->
    <div class="modal fade video-modal" id="videoModal3" tabindex="-1" aria-labelledby="videoModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/jNQXAC9IVRw" title="Müşteri Memnuniyeti Hikayeleri" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal 4 -->
    <div class="modal fade video-modal" id="videoModal4" tabindex="-1" aria-labelledby="videoModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/9bZkp7q19f0" title="Kedi Sinekliği Çözümleri" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal 5 -->
    <div class="modal fade video-modal" id="videoModal5" tabindex="-1" aria-labelledby="videoModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/kJQP7kiw5Fk" title="Sineklik Bakım ve Temizliği" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal 6 -->
    <div class="modal fade video-modal" id="videoModal6" tabindex="-1" aria-labelledby="videoModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/pRpeEdMmmQ0" title="Büyük Ölçekli Projelerimiz" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal 7 -->
    <div class="modal fade video-modal" id="videoModal7" tabindex="-1" aria-labelledby="videoModal7Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/fJ9rUzIMcZQ" title="Sürme Sineklik Sistemleri" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal 8 -->
    <div class="modal fade video-modal" id="videoModal8" tabindex="-1" aria-labelledby="videoModal8Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/JGwWNGJdvx8" title="Pencere Sinekliği Montajı" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal 9 -->
    <div class="modal fade video-modal" id="videoModal9" tabindex="-1" aria-labelledby="videoModal9Label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/OPf0YbXqDm0" title="Özel Tasarım Sineklikler" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('site-assets/js/videos.js') }}"></script>
@endsection
