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
                        <h1 class="about-hero-title">Biz Kimiz?</h1>
                        <p class="about-hero-subtitle">Yılların deneyimi, kaliteli işçilik ve müşteri memnuniyeti ile sineklik çözümlerinde öncü bir markayız. Ankara'nın tüm ilçelerinde profesyonel hizmet sunuyoruz.</p>
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
                        <p>SineklikCi, 2023 yılında Ankara'da kurulmuş, sineklik sistemleri konusunda uzmanlaşmış bir firmadır. Kurulduğumuz günden bu yana, kaliteli malzeme ve işçilik ile müşteri memnuniyetini en üst seviyede tutmayı hedefledik.</p>
                        <p>Başlangıçta küçük bir ekip olarak yola çıktık, ancak kısa sürede müşterilerimizin güveni ve memnuniyeti sayesinde hızla büyüdük. Bugün Ankara'nın tüm ilçelerinde hizmet veren, alanında uzman bir ekibe sahibiz.</p>
                        <p>Sineklik sistemleri konusundaki uzmanlığımız ve yenilikçi çözümlerimizle, müşterilerimizin yaşam alanlarını daha konforlu hale getirmeye devam ediyoruz.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row h-100">
                        <div class="col-md-12 mb-4">
                            <div class="story-card">
                                <i class="fas fa-eye story-icon"></i>
                                <h3>Vizyonumuz</h3>
                                <p>Sineklik sistemleri alanında Türkiye'nin lider markası olmak ve yenilikçi çözümlerimizle sektöre yön vermek.</p>
                                <p>Müşterilerimizin yaşam kalitesini artıran, çevre dostu ve estetik sineklik çözümleri sunarak, her evde ve iş yerinde tercih edilen marka olmayı hedefliyoruz.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="story-card">
                                <i class="fas fa-bullseye story-icon"></i>
                                <h3>Misyonumuz</h3>
                                <p>Kaliteli malzeme, profesyonel işçilik ve müşteri odaklı hizmet anlayışımızla, müşterilerimizin ihtiyaçlarına en uygun sineklik çözümlerini sunmak.</p>
                                <p>Her projede müşteri memnuniyetini en üst seviyede tutarak, güvenilir ve uzun ömürlü ürünler sağlamak için çalışıyoruz.</p>
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
                        <h2 class="about-content-title">Neden SineklikCi?</h2>
                        <p>SineklikCi olarak, müşterilerimize en kaliteli sineklik çözümlerini sunmak için çalışıyoruz. Kurulduğumuz günden bu yana, kaliteli malzeme, profesyonel işçilik ve müşteri memnuniyeti odaklı hizmet anlayışımızla sektörde fark yaratıyoruz.</p>
                        
                        <div class="about-content-img">
                            <img src="https://sinax.com.tr/wp-content/uploads/2024/11/code-5-5-1-1024x614.webp" alt="SineklikCi Atölyesi" class="img-fluid">
                        </div>
                        
                        <p>Sineklikler, evinizi ve yaşam alanlarınızı böceklerden korurken ferah bir ortam sağlar. Modern tasarımlarımız ve kaliteli malzemelerimizle, her türlü kapı ve pencere için özel çözümler sunuyoruz. Ürünlerimiz, estetik görünümleri ve dayanıklılıklarıyla öne çıkıyor.</p>
                        
                        <p>Ankara'nın tüm ilçelerinde hizmet veren profesyonel ekibimiz, ücretsiz keşif hizmeti ile ihtiyaçlarınızı belirliyor ve size en uygun çözümü sunuyor. Montaj ekibimiz, işlerinde uzman ve deneyimli kişilerden oluşuyor.</p>
                        
                        <blockquote>
                            <p>"Kalite asla tesadüf değildir; her zaman akıllı bir çabanın sonucudur."</p>
                            <p>- SineklikCi Ekibi</p>
                        </blockquote>
                        
                        <h3>Hizmet Anlayışımız</h3>
                        <p>SineklikCi olarak, müşteri memnuniyetini en üst seviyede tutmak için şu ilkeleri benimsiyoruz:</p>
                        <ul>
                            <li>Kaliteli malzeme kullanımı</li>
                            <li>Profesyonel işçilik</li>
                            <li>Zamanında teslimat</li>
                            <li>Uygun fiyat politikası</li>
                            <li>Satış sonrası destek</li>
                            <li>2 yıl garanti</li>
                        </ul>
                        
                        <p>Sineklik sistemleri konusundaki uzmanlığımız ve yenilikçi çözümlerimizle, müşterilerimizin yaşam alanlarını daha konforlu hale getirmeye devam ediyoruz. Her projede, müşterilerimizin ihtiyaçlarını en iyi şekilde anlamak ve bu ihtiyaçlara en uygun çözümü sunmak için çalışıyoruz.</p>
                        
                        <p>SineklikCi olarak, sadece bir ürün satmıyoruz; aynı zamanda bir yaşam kalitesi sunuyoruz. Sinekliklerimiz, evinizi ve iş yerinizi böceklerden korurken, ferah bir ortam sağlıyor ve enerji tasarrufu yapmanıza yardımcı oluyor.</p>
                        
                        <div class="about-content-img">
                            <img src="https://www.istanbulkedisinekligi.com/public/uploads/pliselikedisineklii.jpg" alt="Kedi Sinekliği" class="img-fluid">
                        </div>
                        
                        <h3>Ürün Yelpazemiz</h3>
                        <p>SineklikCi olarak, geniş bir ürün yelpazesi sunuyoruz:</p>
                        <ul>
                            <li>Kapı Sineklikleri</li>
                            <li>Pencere Sineklikleri</li>
                            <li>Pileli Sineklikler</li>
                            <li>Kedi Sineklikleri</li>
                            <li>Sürme Sineklikler</li>
                            <li>Özel Tasarım Sineklikler</li>
                        </ul>
                        
                        <p>Her ürünümüz, kaliteli malzemelerden üretiliyor ve profesyonel ekibimiz tarafından monte ediliyor. Ürünlerimiz, uzun ömürlü ve dayanıklı olacak şekilde tasarlanıyor.</p>
                        
                        <p>SineklikCi olarak, müşterilerimizin memnuniyeti bizim için en önemli başarı göstergesidir. Bu nedenle, her projede en iyi hizmeti sunmak için çalışıyoruz.</p>
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
                    <h2 class="cta-title">Çözümlerimizi beğendiniz mi?</h2>
                    <p class="cta-text">Sizin için de aynısını yapabiliriz. Ücretsiz keşif ve fiyat teklifi için hemen bize ulaşın.</p>
                    <a href="index.html#contact" class="btn btn-light">Hemen Teklif Alın</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('site-assets/js/about.js') }}"></script>
@endsection
