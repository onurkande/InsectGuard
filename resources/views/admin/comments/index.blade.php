@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <!-- Comment Settings Form -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Yorum Ayarları</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.comment-settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $commentSettings->title ?? old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="desc">Açıklama</label>
                            <textarea name="desc" id="desc" class="form-control" rows="3" required>{{ $commentSettings->desc ?? old('desc') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Ayarları Kaydet
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Comments List -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Yorumlar</h3>
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addCommentModal">
                        <i class="fas fa-plus"></i> Yeni Yorum Ekle
                    </button>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.comments.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="comments-container">
                            @foreach($comments as $index => $comment)
                            <div class="comment-item mb-4 p-3 border rounded">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Görsel</label>
                                            @if($comment->image)
                                                <img src="{{ asset('storage/' . $comment->image) }}" alt="Current Image" class="img-thumbnail mb-2" style="max-height: 100px;">
                                            @endif
                                            <input type="file" name="comments[{{ $index }}][image]" class="form-control-file">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>İsim</label>
                                            <input type="text" name="comments[{{ $index }}][name]" class="form-control" value="{{ $comment->name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Konum</label>
                                            <input type="text" name="comments[{{ $index }}][location]" class="form-control" value="{{ $comment->location }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Yorum</label>
                                            <textarea name="comments[{{ $index }}][desc]" class="form-control" required>{{ $comment->desc }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-end">
                                        <a href="{{ route('admin.comments.destroy', $comment->id) }}" 
                                           class="btn btn-danger btn-sm" 
                                           title="Sil" 
                                           onclick="return confirm('Bu yorumu silmek istediğinize emin misiniz?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <input type="hidden" name="comments[{{ $index }}][id]" value="{{ $comment->id }}">
                            </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Yorumları Güncelle
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Comment Modal -->
<div class="modal fade" id="addCommentModal" tabindex="-1" aria-labelledby="addCommentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.comments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCommentModalLabel">Yeni Yorum Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Görsel</label>
                        <input type="file" name="image" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label>İsim</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Konum</label>
                        <input type="text" name="location" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Yorum</label>
                        <textarea name="desc" class="form-control" required></textarea>
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