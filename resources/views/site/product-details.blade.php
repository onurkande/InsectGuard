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
                        <h1 class="product-hero-title">Kedi Sinekliği – Evcil Dostlarınız İçin Güvenli ve Dayanıklı Çözüm</h1>
                        <p class="product-hero-subtitle">Evcil hayvan sahipleri için özel olarak geliştirilen dayanıklı sineklik sistemi hakkında her şey.</p>
                        <div class="product-meta">
                            <div class="product-meta-item">
                                <i class="far fa-calendar-alt"></i>
                                <span>19 Mayıs 2025</span>
                            </div>
                            <div class="product-meta-item">
                                <i class="far fa-clock"></i>
                                <span>3 dakikalık okuma</span>
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
                        <img src="https://www.istanbulkedisinekligi.com/public/uploads/pliselikedisineklii.jpg" alt="Kedi Sinekliği" class="img-fluid">
                        
                        <h2>Kedi Sinekliği Nedir?</h2>
                        <p>Kedi sinekliği, evcil dostlarınızın rahatça giriş çıkış yapabilmesine olanak sağlarken, aynı zamanda evinizi haşerelerden koruyan özel tasarlanmış bir sineklik çözümüdür. Standart sinekliklerden farklı olarak, kedilerin geçişine uygun bir kapak veya açıklık içerir ve bu sayede kediler istedikleri zaman içeri girip çıkabilirler.</p>
                        
                        <p>Kedi sineklikleri, özellikle yaz aylarında hem evinizi serin tutmak hem de böceklerin girmesini engellemek isteyen ancak kedilerinin özgürce dolaşmasını da kısıtlamak istemeyen evcil hayvan sahipleri için ideal bir çözümdür.</p>
                        
                        <h2>Kedi Sinekliğinin Avantajları</h2>
                        <ul>
                            <li><strong>Özgür Hareket:</strong> Kediler istedikleri zaman içeri girip çıkabilir, bu da onların doğal davranışlarını sergilemelerine olanak tanır.</li>
                            <li><strong>Böcek Koruması:</strong> Evinizi sinekler, sivrisinekler ve diğer haşerelerden korur.</li>
                            <li><strong>Dayanıklılık:</strong> Özel olarak güçlendirilmiş malzemeler kullanılarak, kedilerin tırmalama ve ısırma davranışlarına dayanıklı olacak şekilde tasarlanmıştır.</li>
                            <li><strong>Kolay Kullanım:</strong> Kediler kısa sürede kullanmayı öğrenir, herhangi bir eğitim gerektirmez.</li>
                            <li><strong>Estetik Görünüm:</strong> Modern tasarımı ile evinizin dekoruna uyum sağlar.</li>
                        </ul>
                        
                        <h2>Kedi Sinekliği Çeşitleri</h2>
                        
                        <h3>1. Menteşeli Kedi Sinekliği</h3>
                        <p>Menteşeli kedi sineklikleri, klasik bir kapı gibi açılıp kapanır. Kedinin geçişi için alt kısımda özel bir bölüm bulunur. Bu model, hem dayanıklı hem de kullanımı kolaydır.</p>
                        
                        <h3>2. Manyetik Kedi Sinekliği</h3>
                        <p>Manyetik kedi sineklikleri, mıknatıslar yardımıyla otomatik olarak kapanır. Kedi geçtikten sonra sineklik kendiliğinden kapanarak böceklerin içeri girmesini engeller.</p>
                        
                        <h3>3. Sürgülü Kedi Sinekliği</h3>
                        <p>Sürgülü kedi sineklikleri, yatay olarak açılır ve kedinin geçişi için yeterli alan sağlar. Bu model, özellikle balkon kapıları için idealdir.</p>
                        
                        <blockquote>
                            <p>"Kedi sinekliği taktırdıktan sonra, hem evimiz serinliyor hem de kedim istediği zaman dışarı çıkıp içeri girebiliyor. Artık sineklerle uğraşmak zorunda değiliz!"</p>
                            <p>- Ayşe K., Ankara</p>
                        </blockquote>
                        
                        <h2>Kedi Sinekliği Nasıl Seçilir?</h2>
                        <p>Kedi sinekliği seçerken dikkat etmeniz gereken bazı faktörler şunlardır:</p>
                        
                        <h3>Kedinizin Boyutu</h3>
                        <p>Kedinizin rahatça geçebileceği bir boyutta olmalıdır. Çok küçük bir sineklik, kedinizin sıkışmasına veya geçmek istememesine neden olabilir.</p>
                        
                        <h3>Montaj Yapılacak Alan</h3>
                        <p>Sinekliğin takılacağı kapı veya pencere türüne uygun bir model seçilmelidir. Bazı modeller sadece belirli kapı türleri için uygundur.</p>
                        
                        <h3>Malzeme Kalitesi</h3>
                        <p>Dayanıklı ve uzun ömürlü malzemelerden yapılmış olmalıdır. Kediler sineklikleri tırmalayabilir veya ısırabilir, bu nedenle dayanıklı malzemeler tercih edilmelidir.</p>
                        
                        <h3>Kullanım Kolaylığı</h3>
                        <p>Kedinizin kolayca öğrenebileceği ve kullanabileceği bir model olmalıdır. Bazı kediler karmaşık mekanizmaları kullanmakta zorlanabilir.</p>
                        
                        <h2>Kedi Sinekliği Bakımı</h2>
                        <p>Kedi sinekliğinizin uzun ömürlü olması için düzenli bakım yapmanız önemlidir:</p>
                        <ul>
                            <li>Düzenli olarak nemli bir bezle temizleyin.</li>
                            <li>Menteşeleri ve hareketli parçaları yağlayın.</li>
                            <li>Hasarlı parçaları hemen değiştirin.</li>
                            <li>Sineklik filesini düzenli olarak kontrol edin ve gerekirse yenileyin.</li>
                        </ul>
                        
                        <h2>Neden Bizden Kedi Sinekliği Almalısınız?</h2>
                        <p>SineklikCi olarak, evcil hayvan sahiplerinin ihtiyaçlarını en iyi şekilde karşılamak için özel olarak tasarlanmış kedi sineklikleri sunuyoruz. Ürünlerimiz:</p>
                        <ul>
                            <li>Yüksek kaliteli malzemelerden üretilmiştir.</li>
                            <li>Kedilerin tırmalama ve ısırma davranışlarına dayanıklıdır.</li>
                            <li>Kolay montaj ve kullanım sağlar.</li>
                            <li>Modern tasarımı ile evinizin dekoruna uyum sağlar.</li>
                            <li>2 yıl garanti ile sunulur.</li>
                        </ul>
                        
                        <p>Ücretsiz keşif hizmetimizle, evinize en uygun kedi sinekliği modelini belirleyebilir ve profesyonel montaj ekibimizle hızlı ve sorunsuz bir şekilde kurulumunu gerçekleştirebiliriz.</p>
                        
                        <div class="tags-share">
                            <div class="tags-container">
                                <h4 class="tag-title">Etiketler</h4>
                                <div class="tags">
                                    <a href="#" class="tag">#kedi-sinekligi</a>
                                    <a href="#" class="tag">#evcil-hayvan</a>
                                    <a href="#" class="tag">#dayanikli</a>
                                    <a href="#" class="tag">#modern</a>
                                    <a href="#" class="tag">#sineklik-cozumleri</a>
                                </div>
                            </div>
                            <div class="share-container">
                                <h4 class="share-title">Paylaş</h4>
                                <div class="share-buttons">
                                    <a href="#" class="share-button"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="share-button"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="share-button"><i class="fab fa-whatsapp"></i></a>
                                    <a href="#" class="share-button"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="share-button"><i class="far fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-summary">
                        <h3>Ürün Özeti</h3>
                        <img src="https://www.istanbulkedisinekligi.com/public/uploads/pliselikedisineklii.jpg" alt="Kedi Sinekliği" class="product-summary-img">
                        <p>Evcil dostlarınızın rahatça giriş çıkış yapabilmesine olanak sağlarken, aynı zamanda evinizi haşerelerden koruyan özel tasarlanmış sineklik çözümü.</p>
                        <div class="product-specs">
                            <div class="product-spec-item">
                                <span class="product-spec-label">Malzeme</span>
                                <span class="product-spec-value">Alüminyum + Fiberglas</span>
                            </div>
                            <div class="product-spec-item">
                                <span class="product-spec-label">Boyutlar</span>
                                <span class="product-spec-value">Özel Ölçü</span>
                            </div>
                            <div class="product-spec-item">
                                <span class="product-spec-label">Renk Seçenekleri</span>
                                <span class="product-spec-value">Beyaz, Kahverengi, Siyah</span>
                            </div>
                            <div class="product-spec-item">
                                <span class="product-spec-label">Garanti</span>
                                <span class="product-spec-value">2 Yıl</span>
                            </div>
                            <div class="product-spec-item">
                                <span class="product-spec-label">Montaj</span>
                                <span class="product-spec-value">Ücretsiz</span>
                            </div>
                        </div>
                        <a href="index.html#contact" class="btn btn-primary w-100">Teklif Alın</a>
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
                <div class="col-md-6 col-lg-3">
                    <div class="related-product-card">
                        <div class="related-product-img">
                            <img src="https://www.tahtakaletoptanticaret.com/image/cache/catalog/product/24242400787/miknatisli-kapi-sinekligi-3-800x800.jpg" alt="Köpek Sinekliği">
                        </div>
                        <div class="related-product-content">
                            <h3 class="related-product-title">Köpek Sinekliği</h3>
                            <p class="related-product-desc">Büyük evcil hayvanlarınız için özel tasarlanmış dayanıklı sineklik.</p>
                            <a href="#" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="related-product-card">
                        <div class="related-product-img">
                            <img src="https://banergrup.com/wp-content/uploads/2021/05/dizayn-plus-plise-sineklik-03.jpg" alt="Pileli Sineklik">
                        </div>
                        <div class="related-product-content">
                            <h3 class="related-product-title">Pileli Sineklik</h3>
                            <p class="related-product-desc">Modern tasarımı ve kolay kullanımıyla öne çıkan pileli sineklik.</p>
                            <a href="#" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="related-product-card">
                        <div class="related-product-img">
                            <img src="https://ankaracankayasineklik.com/wp-content/uploads/2022/05/surgulu-kapi-sinekligi.jpg" alt="Kapı Sinekliği">
                        </div>
                        <div class="related-product-content">
                            <h3 class="related-product-title">Kapı Sinekliği</h3>
                            <p class="related-product-desc">Kapılarınız için özel üretilmiş, dayanıklı ve estetik sineklik çözümleri.</p>
                            <a href="#" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="related-product-card">
                        <div class="related-product-img">
                            <img src="https://www.emsasineklik.com/wp-content/uploads/2020/12/icten-takma-pileli-sineklik.jpg" alt="Pencere Sinekliği">
                        </div>
                        <div class="related-product-content">
                            <h3 class="related-product-title">Pencere Sinekliği</h3>
                            <p class="related-product-desc">Her türlü pencere için özel tasarlanmış, estetik ve fonksiyonel sineklik çözümleri.</p>
                            <a href="#" class="btn-link">İncele <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('site-assets/js/product-details.js') }}"></script>
@endsection
