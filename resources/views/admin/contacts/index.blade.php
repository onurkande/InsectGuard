@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">İletişim Bilgileri</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.contacts.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="title">Başlık</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $contact->title ?? old('title') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="desc">Açıklama</label>
                            <textarea name="desc" id="desc" class="form-control" rows="3" required>{{ $contact->desc ?? old('desc') }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="iframe">Google Maps Iframe Kodu</label>
                            <textarea name="iframe" id="iframe" class="form-control" rows="3" required>{{ $contact->iframe ?? old('iframe') }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Adres</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{ $contact->address ?? old('address') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="telephone">Telefon</label>
                            <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $contact->telephone ?? old('telephone') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">E-posta</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email ?? old('email') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="working_hours">Çalışma Saatleri</label>
                            <input type="text" name="working_hours" id="working_hours" class="form-control" value="{{ $contact->working_hours ?? old('working_hours') }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Kaydet
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 