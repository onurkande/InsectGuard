@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <!-- About Settings Form -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hakkımızda Ayarları</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.about-settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $aboutSettings->title ?? old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="desc">Açıklama</label>
                            <textarea name="desc" id="desc" class="form-control" rows="3" required>{{ $aboutSettings->desc ?? old('desc') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Ayarları Kaydet
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- About Content Form -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hakkımızda İçeriği</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.abouts.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $about->title ?? '') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="desc">Açıklama</label>
                            <textarea name="desc" id="desc" class="form-control" rows="3" required>{{ old('desc', $about->desc ?? '') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="our_story">Hikayemiz</label>
                            <textarea name="our_story" id="our_story" class="form-control" required>{{ old('our_story', $about->our_story ?? '') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="our_vision">Vizyonumuz</label>
                            <textarea name="our_vision" id="our_vision" class="form-control" required>{{ old('our_vision', $about->our_vision ?? '') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="our_mission">Misyonumuz</label>
                            <textarea name="our_mission" id="our_mission" class="form-control" required>{{ old('our_mission', $about->our_mission ?? '') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="content">İçerik</label>
                            <textarea name="content" id="content" class="form-control" required>{{ old('content', $about->content ?? '') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Görsel</label>
                            @if(isset($about) && $about->image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $about->image) }}" alt="Mevcut Görsel" class="img-thumbnail" style="max-height: 200px;">
                                </div>
                            @endif
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                                <label class="custom-file-label" for="image">Dosya seçin</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Kaydet
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
    CKEDITOR.replace('our_story');
    CKEDITOR.replace('our_vision');
    CKEDITOR.replace('our_mission');

    // Dosya seçildiğinde input label'ını güncelle
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
</script>
@endsection 