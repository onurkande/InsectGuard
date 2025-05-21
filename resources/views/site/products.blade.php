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
                        <h1 class="page-hero-title">Tüm Sineklik Modellerimizi Keşfedin</h1>
                        <p class="page-hero-subtitle">Eviniz ve iş yeriniz için en uygun, kaliteli sineklik çözümleri. İhtiyaçlarınıza göre filtreleyip, size en uygun modeli hemen bulun.</p>
                        <a href="#contact" class="btn btn-primary">Hemen Teklif Alın</a>
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
                <div class="col-md-6 col-lg-4 product-item" data-category="door">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://productimages.hepsiburada.net/s/416/375-375/110000445137367.jpg" alt="Menteşeli Kapı Sinekliği">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Menteşeli Kapı Sinekliği</h3>
                            <p class="product-desc">Klasik ve dayanıklı tasarımıyla kapılarınız için ideal çözüm.</p>
                            <div class="product-features">
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
                            </div>
                            <div class="product-action">
                                <a href="product-detail.html" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-6 col-lg-4 product-item" data-category="door">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://ankaracankayasineklik.com/wp-content/uploads/2022/05/surgulu-kapi-sinekligi.jpg" alt="Sürgülü Kapı Sinekliği">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Sürgülü Kapı Sinekliği</h3>
                            <p class="product-desc">Yer tasarrufu sağlayan, modern tasarımlı sürgülü kapı sinekliği.</p>
                            <div class="product-features">
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Sessiz çalışma mekanizması</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Kolay montaj</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Şık görünüm</span>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="product-detail.html" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-6 col-lg-4 product-item" data-category="window">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://www.emsasineklik.com/wp-content/uploads/2020/12/icten-takma-pileli-sineklik.jpg" alt="Sabit Pencere Sinekliği">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Sabit Pencere Sinekliği</h3>
                            <p class="product-desc">Ekonomik ve pratik çözüm sunan sabit pencere sinekliği.</p>
                            <div class="product-features">
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Ekonomik fiyat</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Kolay temizlik</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Uzun ömürlü kullanım</span>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="product-detail.html" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-md-6 col-lg-4 product-item" data-category="window">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://avrupasineklik.com/img/urun/Ice-Acilir-Sineklik-Kedi-Sinekligi-7347.jpg" alt="Açılır Pencere Sinekliği">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Açılır Pencere Sinekliği</h3>
                            <p class="product-desc">Kolay açılıp kapanabilen, pratik pencere sinekliği.</p>
                            <div class="product-features">
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Kolay kullanım</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Dayanıklı malzeme</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Çeşitli boyut seçenekleri</span>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="product-detail.html" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col-md-6 col-lg-4 product-item" data-category="pleated">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://banergrup.com/wp-content/uploads/2021/05/dizayn-plus-plise-sineklik-03.jpg" alt="Pileli Sineklik">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Pileli Sineklik</h3>
                            <p class="product-desc">Modern tasarımı ve kolay kullanımıyla öne çıkan pileli sineklik.</p>
                            <div class="product-features">
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Şık görünüm</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Kolay açılıp kapanma</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Uzun ömürlü kullanım</span>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="product-detail.html" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-md-6 col-lg-4 product-item" data-category="pet">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://www.istanbulkedisinekligi.com/public/uploads/pliselikedisineklii.jpg" alt="Kedi Sinekliği">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Kedi Sinekliği</h3>
                            <p class="product-desc">Evcil dostlarınızın rahatça giriş çıkış yapabileceği özel tasarım.</p>
                            <div class="product-features">
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Kedi geçişine uygun</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Dayanıklı malzeme</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Kolay montaj</span>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="product-detail.html" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-md-6 col-lg-4 product-item" data-category="special">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://www.penguencam.com/wp-content/uploads/2024/02/stor-sineklik.jpeg" alt="Stor Sineklik">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Stor Sineklik</h3>
                            <p class="product-desc">Perde gibi açılıp kapanabilen, kullanışlı stor sineklik modeli.</p>
                            <div class="product-features">
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Kolay kullanım</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Yer tasarrufu</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Modern tasarım</span>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="product-detail.html" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col-md-6 col-lg-4 product-item" data-category="special">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://sinax.com.tr/wp-content/uploads/2023/02/2023-tuba-tek.jpg" alt="Sürme Sineklik">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Sürme Sineklik</h3>
                            <p class="product-desc">Geniş alanlar için ideal, yatay olarak açılıp kapanan sineklik.</p>
                            <div class="product-features">
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Geniş açıklıklar için uygun</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Sessiz çalışma</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Kolay kullanım</span>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="product-detail.html" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="col-md-6 col-lg-4 product-item" data-category="pet">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://www.tahtakaletoptanticaret.com/image/cache/catalog/product/24242400787/miknatisli-kapi-sinekligi-3-800x800.jpg" alt="Köpek Sinekliği">
                        </div>
                        <div class="product-content">
                            <h3 class="product-title">Köpek Sinekliği</h3>
                            <p class="product-desc">Büyük evcil hayvanlarınız için özel tasarlanmış dayanıklı sineklik.</p>
                            <div class="product-features">
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Ekstra dayanıklı malzeme</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Kolay geçiş</span>
                                </div>
                                <div class="product-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Çeşitli boyut seçenekleri</span>
                                </div>
                            </div>
                            <div class="product-action">
                                <a href="product-detail.html" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="row">
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
            </div>
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
