@extends('site.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/index.css') }}">
@endsection

@section('title', 'SineklikCi - Modern Fly Screen Solutions')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-text">
                    <h1 class="mb-3">Ankara Sineklikçi & <span>Sineklik İmalat</span></h1>
                    <p class="mb-4">Sineklikler, evinizi ve yaşam alanlarınızı böceklerden korurken ferah bir ortam sağlar. Modern tasarımlarımız ve kaliteli malzemelerimizle, her türlü kapı ve pencere için özel çözümler sunuyoruz.</p>
                    <div class="hero-btns">
                        <a href="#contact" class="btn btn-primary me-3">Hemen Teklif Al</a>
                        <a href="#products" class="btn btn-outline-light">Ürünlerimiz</a>
                    </div>
                </div>
                <div class="col-lg-6 hero-img">
                    <img src="https://sinax.com.tr/wp-content/uploads/2024/11/code-5-5-1-1024x614.webp" alt="Modern Fly Screen" class="img-fluid">
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
                    <h2 class="section-title">Sineklik'çi, Piyasa İçi Dekorasyonun <span>uzmanıdır</span></h2>
                    <p class="section-subtitle">Yıllardır ev ve iş yerlerinize sunduğumuz sineklik çözümlerimizle kullanıcı memnuniyetini en üst seviyede tutuyoruz. Profesyonel ekibimiz ve kaliteli malzemelerimizle hizmetinizdeyiz.</p>
                </div>
            </div>
            <div class="row mt-5 stats-row">
                <div class="col-md-4 text-center">
                    <div class="stat-item">
                        <i class="fas fa-calendar-check stat-icon"></i>
                        <h3>2<span>+</span></h3>
                        <p>Yıllık Deneyim</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="stat-item">
                        <i class="fas fa-project-diagram stat-icon"></i>
                        <h3>600<span>+</span></h3>
                        <p>Tamamlanan Proje</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="stat-item">
                        <i class="fas fa-shield-alt stat-icon"></i>
                        <h3>2<span>+</span></h3>
                        <p>Yıl Garanti</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="section-title">Evinizin Konforu, <span>Sineklikle Başlar</span></h2>
                        <p class="section-subtitle">Farklı ihtiyaçlarınız için özel çözümler</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-3">
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-icon">
                            <i class="fas fa-cat"></i>
                        </div>
                        <h3>Kedi Sinekliği</h3>
                        <p>Evcil dostlarınız için özel tasarlanmış, dayanıklı ve kullanımı kolay sineklik çözümleri.</p>
                        <a href="#" class="btn-link">Detaylı Bilgi <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-icon">
                            <i class="fas fa-door-open"></i>
                        </div>
                        <h3>Kapı Sinekliği</h3>
                        <p>Kapılarınız için özel üretilmiş, dayanıklı ve estetik sineklik çözümleri.</p>
                        <a href="#" class="btn-link">Detaylı Bilgi <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-icon">
                            <i class="fas fa-window-maximize"></i>
                        </div>
                        <h3>Pileli Sineklik</h3>
                        <p>Modern tasarımı ve kolay kullanımıyla pencereleriniz için ideal sineklik çözümü.</p>
                        <a href="#" class="btn-link">Detaylı Bilgi <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-icon">
                            <i class="fas fa-window-restore"></i>
                        </div>
                        <h3>Sürüklü Sineklik</h3>
                        <p>Geniş pencereler için ideal, kolay kullanımlı ve dayanıklı sineklik çözümleri.</p>
                        <a href="#" class="btn-link">Detaylı Bilgi <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-icon">
                            <i class="fa-brands fa-windows"></i>
                        </div>
                        <h3>Pencere Sinekliği</h3>
                        <p>Her türlü pencere için özel tasarlanmış, estetik ve fonksiyonel sineklik çözümleri.</p>
                        <a href="#" class="btn-link">Detaylı Bilgi <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="product-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3>Özel Çözümler</h3>
                        <p>İhtiyaçlarınıza özel tasarlanmış, yenilikçi ve dayanıklı sineklik çözümleri.</p>
                        <a href="#" class="btn-link">Detaylı Bilgi <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section id="why-us" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="section-title">Haşerelere Son, <span>Konfora Merhaba!</span></h2>
                        <p class="section-subtitle">Neden bizi tercih etmelisiniz?</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-3">
                <div class="col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Ankara Sineklik Hizmetleri</h3>
                            <p>Ankara'nın tüm ilçelerine hızlı ve güvenilir hizmet sağlıyoruz.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Hızlıca Özel Tasarım</h3>
                            <p>İhtiyaçlarınıza özel, hızlı ve profesyonel çözümler sunuyoruz.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Ücretsiz Keşif - Kaliteli Malzeme</h3>
                            <p>Ücretsiz keşif hizmeti ve en kaliteli malzemelerle çalışıyoruz.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Uygun Fiyat - Kaliteli Hizmet</h3>
                            <p>Ekonomik fiyatlarla kaliteli hizmet sunuyoruz.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Kolay ve Hızlı Montaj</h3>
                            <p>Profesyonel ekibimizle hızlı ve sorunsuz montaj hizmeti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="feature-content">
                            <h3>7/24 Müşteri Desteği</h3>
                            <p>Her zaman yanınızda olan müşteri destek ekibimiz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section id="videos" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="section-title">Video <span>Galerimiz</span></h2>
                        <p class="section-subtitle">Sineklik çözümlerimizi video ile keşfedin</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-lg-6">
                    <div class="video-wrapper">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/qRedtz_UJTY" title="Sineklik Tanıtım Videosu" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-content">
                        <h3 class="mb-4">Profesyonel Sineklik Çözümleri</h3>
                        <p class="mb-4">Videolarımızda sineklik çözümlerimizin kalitesini ve montaj sürecini yakından görebilirsiniz. Her video, müşterilerimizin memnuniyetini ve işimizin profesyonelliğini yansıtmaktadır.</p>
                        <div class="video-features">
                            <div class="feature-item d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-3"></i>
                                <span>Profesyonel Montaj Süreci</span>
                            </div>
                            <div class="feature-item d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-3"></i>
                                <span>Kaliteli Malzeme Kullanımı</span>
                            </div>
                            <div class="feature-item d-flex align-items-center mb-3">
                                <i class="fas fa-check-circle text-primary me-3"></i>
                                <span>Müşteri Memnuniyeti</span>
                            </div>
                        </div>
                        <a href="videos.html" class="btn btn-primary mt-4">Tüm Videoları İzle</a>
                    </div>
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
                        <h2 class="section-title">Müşterilerimiz <span>Ne Diyor?</span></h2>
                        <p class="section-subtitle">Hizmetlerimizden memnun kalan müşterilerimizin yorumları</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <div class="swiper testimonialSwiper">
                            <div class="swiper-wrapper">
                                <!-- Testimonial 1 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="testimonial-avatar">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Customer Avatar">
                                        </div>
                                        <div class="testimonial-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="testimonial-text">"Sineklikçi ekibi çok profesyonel çalıştı. Evimizin tüm pencerelerine sineklik taktırdık, çok memnun kaldık. Hızlı ve kaliteli iş yapıyorlar."</p>
                                        <div class="testimonial-author">
                                            <h4>Ahmet Y.</h4>
                                            <p>Ankara, Çankaya</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial 2 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="testimonial-avatar">
                                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Customer Avatar">
                                        </div>
                                        <div class="testimonial-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="testimonial-text">"Kedim için özel sineklik yaptırdım, hem kaliteli hem de uygun fiyatlı. Kedim de ben de çok memnunuz. Teşekkürler Sineklikçi!"</p>
                                        <div class="testimonial-author">
                                            <h4>Ayşe K.</h4>
                                            <p>Ankara, Keçiören</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial 3 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="testimonial-avatar">
                                            <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Customer Avatar">
                                        </div>
                                        <div class="testimonial-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <p class="testimonial-text">"Balkonumuza pileli sineklik yaptırdık. Hem görünüşü güzel hem de kullanımı çok kolay. Fiyat/performans açısından çok memnun kaldık."</p>
                                        <div class="testimonial-author">
                                            <h4>Mehmet S.</h4>
                                            <p>Ankara, Etimesgut</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial 4 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="testimonial-avatar">
                                            <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Customer Avatar">
                                        </div>
                                        <div class="testimonial-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="testimonial-text">"Pencerelerimize sineklik taktırdık ve sonuçtan çok memnunuz. Montaj ekibi çok titiz çalıştı ve her şey tam istediğimiz gibi oldu. Kesinlikle tavsiye ederim."</p>
                                        <div class="testimonial-author">
                                            <h4>Zeynep B.</h4>
                                            <p>Ankara, Yenimahalle</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial 5 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="testimonial-avatar">
                                            <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="Customer Avatar">
                                        </div>
                                        <div class="testimonial-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p class="testimonial-text">"İş yerimiz için özel tasarım sineklikler yaptırdık. Hem görünüş hem de işlevsellik açısından beklentilerimizin üzerinde bir sonuç aldık. Teşekkürler!"</p>
                                        <div class="testimonial-author">
                                            <h4>Ali R.</h4>
                                            <p>Ankara, Kızılay</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>
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
                        <h2 class="section-title">İşlerimizden <span>Örnekler</span></h2>
                        <p class="section-subtitle">Müşterilerimiz için yaptığımız çalışmalardan bazıları</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-md-6 col-lg-3">
                    <div class="example-card">
                        <div class="example-category">Kapı Sinekliği</div>
                        <div class="example-img">
                            <img src="https://productimages.hepsiburada.net/s/416/375-375/110000445137367.jpg" alt="Before" class="img-fluid">
                            <img src="https://productimages.hepsiburada.net/s/416/375-375/110000445137367.jpg" alt="After" class="img-fluid after-img">
                            <div class="example-overlay">
                                <span>Öncesi / Sonrası</span>
                            </div>
                        </div>
                        <div class="example-content">
                            <h4>Kapı Sinekliği</h4>
                            <p>Ankara, Çankaya</p>
                            <a href="#" class="btn-link mt-2">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="example-card">
                        <div class="example-category">Pencere Sinekliği</div>
                        <div class="example-img">
                            <img src="https://m.media-amazon.com/images/I/61DnWDepHsL._AC_UF1000,1000_QL80_.jpg" alt="Before" class="img-fluid">
                            <img src="https://m.media-amazon.com/images/I/61DnWDepHsL._AC_UF1000,1000_QL80_.jpg" alt="After" class="img-fluid after-img">
                            <div class="example-overlay">
                                <span>Öncesi / Sonrası</span>
                            </div>
                        </div>
                        <div class="example-content">
                            <h4>Pencere Sinekliği</h4>
                            <p>Ankara, Keçiören</p>
                            <a href="#" class="btn-link mt-2">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="example-card">
                        <div class="example-category">Pileli Sineklik</div>
                        <div class="example-img">
                            <img src="https://www.cinardusakabin.com/cloud/643.jpg" alt="Before" class="img-fluid">
                            <img src="https://www.cinardusakabin.com/cloud/643.jpg" alt="After" class="img-fluid after-img">
                            <div class="example-overlay">
                                <span>Öncesi / Sonrası</span>
                            </div>
                        </div>
                        <div class="example-content">
                            <h4>Pileli Sineklik</h4>
                            <p>Ankara, Etimesgut</p>
                            <a href="#" class="btn-link mt-2">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="example-card">
                        <div class="example-category">Kedi Sinekliği</div>
                        <div class="example-img">
                            <img src="https://www.istanbulkedisinekligi.com/public/uploads/pliselikedisineklii.jpg" alt="Before" class="img-fluid">
                            <img src="https://www.istanbulkedisinekligi.com/public/uploads/pliselikedisineklii.jpg" alt="After" class="img-fluid after-img">
                            <div class="example-overlay">
                                <span>Öncesi / Sonrası</span>
                            </div>
                        </div>
                        <div class="example-content">
                            <h4>Kedi Sinekliği</h4>
                            <p>Ankara, Mamak</p>
                            <a href="#" class="btn-link mt-2">Detaylı İncele <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary">Tüm Projelerimizi Görüntüle</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="section-padding faq-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="section-title">Sineklikler Hakkında <span>Merak Edilenler</span></h2>
                        <p class="section-subtitle">Sizin için tüm sorulara cevap bulduk!</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-tools me-3"></i> Sineklik hangi malzemeden yapılır ve ömrü ne kadardır?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sineklikler genellikle alüminyum çerçeve ve fiberglas file kullanılarak yapılır. Doğru bakım ve kullanımla 5-10 yıl arasında kullanılabilir. Kullanılan malzemenin kalitesi ve bakımı ömrünü etkiler.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-money-bill-wave me-3"></i> Sineklik fiyatları neye göre değişir?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sineklik fiyatları; ölçüye, modele, kullanılan malzemeye ve montaj zorluğuna göre değişiklik gösterir. Kesin fiyat için ücretsiz keşif hizmetimizden yararlanabilirsiniz.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-clock me-3"></i> Sineklik takılması ne kadar sürer?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sineklik montajı genellikle 1-2 saat içinde tamamlanır. Ancak bu süre, sineklik modeline, sayısına ve montaj yapılacak alanın durumuna göre değişebilir.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fas fa-broom me-3"></i> Sineklikler nasıl temizlenir?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sineklikleri temizlemek için yumuşak bir fırça veya elektrikli süpürge kullanabilirsiniz. Daha derin temizlik için, ılık su ve sabun kullanarak nazikçe silebilirsiniz. Sert kimyasallar kullanmaktan kaçının.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fas fa-calendar-alt me-3"></i> Sineklik taktırmak için en uygun mevsim hangisidir?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sineklik taktırmak için en uygun zaman ilkbahar başlangıcıdır. Böylece yaz gelmeden önce hazırlıklı olursunuz. Ancak, sineklikler her mevsim takılabilir ve yıl boyunca fayda sağlar.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-cta mt-5">
                        <div class="faq-cta-card">
                            <i class="fas fa-question-circle"></i>
                            <h4>Sorunuzu bulamadınız mı?</h4>
                            <p>Merak ettiğiniz diğer sorular için bize ulaşın.</p>
                            <a href="#contact" class="btn btn-primary">Hemen İletişime Geçin</a>
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
                        <a href="tel:+905001234567" class="btn btn-light me-3"><i class="fas fa-phone-alt me-2"></i> Hemen Ara</a>
                        <a href="https://wa.me/905001234567" class="btn btn-outline-light"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="contact-form-card">
                        <h3>İletişim Formu</h3>
                        <form id="contactForm">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Adınız Soyadınız" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" placeholder="Telefon Numaranız" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="E-posta Adresiniz">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Mesajınız" required></textarea>
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
