@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Site Ayarları</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.site-settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Site Başlığı</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $settings->title ?? '') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="desc">Site Açıklaması</label>
                            <textarea name="desc" id="desc" class="form-control" rows="3" required>{{ old('desc', $settings->desc ?? '') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="logo">Logo</label>
                            @if(isset($settings) && $settings->logo)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $settings->logo) }}" alt="Logo" class="img-thumbnail" style="max-height: 100px;">
                                </div>
                            @endif
                            <input type="file" name="logo" id="logo" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <label for="favicon">Favicon</label>
                            @if(isset($settings) && $settings->favicon)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $settings->favicon) }}" alt="Favicon" class="img-thumbnail" style="max-height: 50px;">
                                </div>
                            @endif
                            <input type="file" name="favicon" id="favicon" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <label for="image">Arkaplan Görseli</label>
                            @if(isset($settings) && $settings->image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $settings->image) }}" alt="Background Image" class="img-thumbnail" style="max-height: 200px;">
                                </div>
                            @endif
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <label for="instagram_url">Instagram URL</label>
                            <input type="url" name="instagram_url" id="instagram_url" class="form-control" value="{{ old('instagram_url', $settings->instagram_url ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="facebook_url">Facebook URL</label>
                            <input type="url" name="facebook_url" id="facebook_url" class="form-control" value="{{ old('facebook_url', $settings->facebook_url ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="youtube_url">YouTube URL</label>
                            <input type="url" name="youtube_url" id="youtube_url" class="form-control" value="{{ old('youtube_url', $settings->youtube_url ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="twitter_url">Twitter URL</label>
                            <input type="url" name="twitter_url" id="twitter_url" class="form-control" value="{{ old('twitter_url', $settings->twitter_url ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="bottom_desc">Alt Açıklama</label>
                            <textarea name="bottom_desc" id="bottom_desc" class="form-control" rows="3">{{ old('bottom_desc', $settings->bottom_desc ?? '') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="bottom_content">Alt İçerik</label>
                            <textarea name="bottom_content" id="bottom_content" class="form-control" rows="3">{{ old('bottom_content', $settings->bottom_content ?? '') }}</textarea>
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