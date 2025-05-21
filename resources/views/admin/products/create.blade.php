@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Yeni Ürün Ekle</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Geri Dön
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="desc">Açıklama</label>
                            <textarea name="desc" id="desc" class="form-control" rows="3" required>{{ old('desc') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="content">İçerik</label>
                            <textarea name="content" id="content" class="form-control" required>{{ old('content') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="material">Materyal</label>
                            <textarea name="material" id="material" class="form-control" required>{{ old('material') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="dimensions">Boyutlar</label>
                            <textarea name="dimensions" id="dimensions" class="form-control" required>{{ old('dimensions') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="color_options">Renk Seçenekleri</label>
                            <textarea name="color_options" id="color_options" class="form-control" required>{{ old('color_options') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="guarantee">Garanti</label>
                            <textarea name="guarantee" id="guarantee" class="form-control" required>{{ old('guarantee') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="montaj">Montaj</label>
                            <textarea name="montaj" id="montaj" class="form-control" required>{{ old('montaj') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="tags">Etiketler</label>
                            <input type="text" name="tags" id="tags" class="form-control" value="{{ old('tags') }}" placeholder="Etiketleri virgülle ayırın">
                            <small class="form-text text-muted">Örnek: ahşap, metal, plastik</small>
                        </div>

                        <div class="form-group">
                            <label for="image">Görsel</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" accept="image/*" required>
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
    /*CKEDITOR.replace('material');
    CKEDITOR.replace('dimensions');
    CKEDITOR.replace('color_options');
    CKEDITOR.replace('guarantee');
    CKEDITOR.replace('montaj');*/

    // Dosya seçildiğinde input label'ını güncelle
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
</script>
@endsection 