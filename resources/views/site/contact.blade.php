@extends('site.layouts.master')

@section('title', 'İletişim')

@section('css')
    <link rel="stylesheet" href="{{ asset('site-assets/css/contact.css') }}">
@endsection

@section('content')
    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-hero-content">
                        <h1 class="contact-hero-title">İletişim</h1>
                        <p class="contact-hero-subtitle">Her türlü soru, yorum ve teklif talepleriniz için bizimle iletişime geçebilirsiniz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form + Map Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form-card">
                        <h3>İletişim Formu</h3>
                        <form id="contactForm">
                            <div class="form-group">
                                <label for="name" class="form-label">Adınız Soyadınız</label>
                                <div class="input-icon">
                                    <input type="text" class="form-control" id="name" placeholder="Adınız Soyadınız" required>
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">E-posta Adresiniz</label>
                                <div class="input-icon">
                                    <input type="email" class="form-control" id="email" placeholder="E-posta Adresiniz" required>
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Telefon Numaranız</label>
                                <div class="input-icon">
                                    <input type="tel" class="form-control" id="phone" placeholder="Telefon Numaranız" required>
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="form-label">Mesajınız</label>
                                <div class="input-icon">
                                    <textarea class="form-control" id="message" rows="5" placeholder="Mesajınız" required></textarea>
                                    <i class="fas fa-comment-alt"></i>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Gönder</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-container">
                        <div class="map-overlay">
                            <h3 class="map-title">Ofisimiz Burada</h3>
                        </div>
                        <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195884.62107686027!2d32.62759462500001!3d39.90304055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d347d520732db1%3A0xbdc57b0c0842b8d!2sAnkara%2C%20T%C3%BCrkiye!5e0!3m2!1str!2str!4v1653042689032!5m2!1str!2str" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="contact-info-title">Adres</h3>
                        <p class="contact-info-text">Ankara, Türkiye</p>
                        <a href="https://goo.gl/maps/1JjQqJVzXZXGQvSS6" target="_blank" class="contact-info-link">Yol Tarifi Al <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3 class="contact-info-title">Telefon</h3>
                        <p class="contact-info-text">Bize hemen ulaşın</p>
                        <a href="tel:+905001234567" class="contact-info-link">+90 500 123 45 67</a>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="contact-info-title">E-posta</h3>
                        <p class="contact-info-text">7/24 e-posta desteği</p>
                        <a href="mailto:info@sineklikci.com" class="contact-info-link">info@sineklikci.com</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="contact-info-title">Çalışma Saatleri</h3>
                        <p class="contact-info-text">Pazartesi - Cumartesi</p>
                        <span class="contact-info-link">09:00 - 18:00</span>
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
                    <p class="cta-text">Sizin için de aynısını yapabiliriz. Profesyonel ekibimiz, ihtiyaçlarınıza en uygun sineklik çözümlerini sunmak için hazır. Ücretsiz keşif ve fiyat teklifi için hemen bizi arayın.</p>
                    <div class="cta-buttons">
                        <a href="tel:+905001234567" class="btn btn-light me-3"><i class="fas fa-phone-alt me-2"></i> Hemen Ara</a>
                        <a href="https://wa.me/905001234567" class="btn btn-outline-light"><i class="fab fa-whatsapp me-2"></i> WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('site-assets/js/contact.js') }}"></script>
@endsection
