@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <!-- Counter Settings Form -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sayaç Ayarları</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.counter-settings.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $counterSettings->title ?? old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="desc">Açıklama</label>
                            <textarea name="desc" id="desc" class="form-control" rows="3" required>{{ $counterSettings->desc ?? old('desc') }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Ayarları Kaydet
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Counters List -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Sayaçlar</h3>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addCounterModal">
                        <i class="fas fa-plus"></i> Yeni Sayaç Ekle
                    </button>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.counters.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="counters-container">
                            @foreach($counters as $index => $counter)
                            <div class="counter-item mb-4 p-3 border rounded">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Başlık</label>
                                            <input type="text" name="counters[{{ $index }}][title]" class="form-control" value="{{ $counter->title }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Sayı</label>
                                            <input type="number" name="counters[{{ $index }}][number]" class="form-control" value="{{ $counter->number }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>İkon</label>
                                            <input type="text" name="counters[{{ $index }}][icon]" class="form-control" value="{{ $counter->icon }}" required>
                                            <small class="form-text text-muted">Örnek: fas fa-users</small>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex align-items-end">
                                        <a href="{{ route('admin.counters.destroy', $counter->id) }}" class="btn btn-danger btn-sm" title="Sil" onclick="return confirm('Bu sayacı silmek istediğinize emin misiniz?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <input type="hidden" name="counters[{{ $index }}][id]" value="{{ $counter->id }}">
                            </div>

                            @endforeach
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save"></i> Sayaçları Kaydet
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Counter Modal -->
<div class="modal fade" id="addCounterModal" tabindex="-1" aria-labelledby="addCounterModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.counters.store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCounterModalLabel">Yeni Sayaç Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Sayı</label>
                        <input type="number" name="number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>İkon</label>
                        <input type="text" name="icon" class="form-control" required>
                        <small class="form-text text-muted">Örnek: fas fa-users</small>
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