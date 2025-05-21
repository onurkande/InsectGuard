@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <!-- Question Settings Form -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Soru Ayarları</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.question-settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $questionSettings->title ?? old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="desc">Açıklama</label>
                            <textarea name="desc" id="desc" class="form-control" rows="3" required>{{ $questionSettings->desc ?? old('desc') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Ayarları Kaydet
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Questions List -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Sorular</h3>
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addQuestionModal">
                        <i class="fas fa-plus"></i> Yeni Soru Ekle
                    </button>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.questions.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="questions-container">
                            @foreach($questions as $index => $question)
                            <div class="question-item mb-4 p-3 border rounded">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Başlık</label>
                                            <input type="text" name="questions[{{ $index }}][title]" class="form-control" value="{{ $question->title }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>İkon</label>
                                            <input type="text" name="questions[{{ $index }}][icon]" class="form-control" value="{{ $question->icon }}" required>
                                            <small class="form-text text-muted">Font Awesome ikon kodu (örn: fa-user)</small>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Açıklama</label>
                                            <textarea name="questions[{{ $index }}][desc]" class="form-control" required>{{ $question->desc }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-end">
                                        <a href="{{ route('admin.questions.destroy', $question->id) }}" 
                                           class="btn btn-danger btn-sm" 
                                           title="Sil" 
                                           onclick="return confirm('Bu soruyu silmek istediğinize emin misiniz?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <input type="hidden" name="questions[{{ $index }}][id]" value="{{ $question->id }}">
                            </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Soruları Güncelle
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Question Modal -->
<div class="modal fade" id="addQuestionModal" tabindex="-1" aria-labelledby="addQuestionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.questions.store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addQuestionModalLabel">Yeni Soru Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>İkon</label>
                        <input type="text" name="icon" class="form-control" required>
                        <small class="form-text text-muted">Font Awesome ikon kodu (örn: fa-user)</small>
                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
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