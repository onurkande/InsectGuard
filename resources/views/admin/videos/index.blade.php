@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <!-- Video Settings Form -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Video Ayarları</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.video-settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $videoSettings->title ?? old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="desc">Açıklama</label>
                            <textarea name="desc" id="desc" class="form-control" rows="3" required>{{ $videoSettings->desc ?? old('desc') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Ayarları Kaydet
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Videos List -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Videolar</h3>
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addVideoModal">
                        <i class="fas fa-plus"></i> Yeni Video Ekle
                    </button>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.videos.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="videos-container">
                            @foreach($videos as $index => $video)
                            <div class="video-item mb-4 p-3 border rounded">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Başlık</label>
                                            <input type="text" name="videos[{{ $index }}][title]" class="form-control" value="{{ $video->title }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Açıklama</label>
                                            <textarea name="videos[{{ $index }}][desc]" class="form-control" required>{{ $video->desc }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Video URL</label>
                                            <input type="text" name="videos[{{ $index }}][video_url]" class="form-control" value="{{ $video->video_url }}" required>
                                            <small class="form-text text-muted">YouTube video URL'si</small>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-end">
                                        <a href="{{ route('admin.videos.destroy', $video->id) }}" 
                                           class="btn btn-danger btn-sm" 
                                           title="Sil" 
                                           onclick="return confirm('Bu videoyu silmek istediğinize emin misiniz?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <input type="hidden" name="videos[{{ $index }}][id]" value="{{ $video->id }}">
                            </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Videoları Güncelle
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Video Modal -->
<div class="modal fade" id="addVideoModal" tabindex="-1" aria-labelledby="addVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.videos.store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addVideoModalLabel">Yeni Video Ekle</h5>
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
                        <label>Video URL</label>
                        <input type="text" name="video_url" class="form-control" required>
                        <small class="form-text text-muted">YouTube video URL'si</small>
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