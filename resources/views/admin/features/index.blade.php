@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <!-- Feature Settings Form -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Özellik Ayarları</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.feature-settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $featureSettings->title ?? old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="desc">Açıklama</label>
                            <textarea name="desc" id="desc" class="form-control" rows="3" required>{{ $featureSettings->desc ?? old('desc') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Ayarları Kaydet
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Features List -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Özellikler</h3>
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addFeatureModal">
                        <i class="fas fa-plus"></i> Yeni Özellik Ekle
                    </button>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.features.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="features-container">
                            @foreach($features as $index => $feature)
                            <div class="feature-item mb-4 p-3 border rounded">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Başlık</label>
                                            <input type="text" name="features[{{ $index }}][title]" class="form-control" value="{{ $feature->title }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Açıklama</label>
                                            <textarea name="features[{{ $index }}][desc]" class="form-control" required>{{ $feature->desc }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>İkon</label>
                                            <input type="text" name="features[{{ $index }}][icon]" class="form-control" value="{{ $feature->icon }}" required>
                                            <small class="form-text text-muted">Örnek: fas fa-check</small>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-end">
                                        <a href="{{ route('admin.features.destroy', $feature->id) }}" 
                                           class="btn btn-danger btn-sm" 
                                           title="Sil" 
                                           onclick="return confirm('Bu özelliği silmek istediğinize emin misiniz?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <input type="hidden" name="features[{{ $index }}][id]" value="{{ $feature->id }}">
                            </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Özellikleri Güncelle
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Feature Modal -->
<div class="modal fade" id="addFeatureModal" tabindex="-1" aria-labelledby="addFeatureModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.features.store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFeatureModalLabel">Yeni Özellik Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="desc" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>İkon</label>
                        <input type="text" name="icon" class="form-control" required>
                        <small class="form-text text-muted">Örnek: fas fa-check</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                    <button type="submit" class="btn btn-primary">Ekle</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection 