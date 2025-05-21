@extends('admin.layouts.master')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">İletişim Mesajları</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Ad Soyad</th>
                                    <th>E-posta</th>
                                    <th>Telefon</th>
                                    <th>Mesaj</th>
                                    <th>Tarih</th>
                                    <th>Durum</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($messages as $message)
                                    <tr class="{{ $message->is_read ? '' : 'table-warning' }}">
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->phone }}</td>
                                        <td>{{ Str::limit($message->message, 50) }}</td>
                                        <td>{{ $message->created_at->format('d.m.Y H:i') }}</td>
                                        <td>
                                            @if($message->is_read)
                                                <span class="badge bg-success">Okundu</span>
                                            @else
                                                <span class="badge bg-warning">Okunmadı</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if(!$message->is_read)
                                                <a href="{{ route('admin.contact-messages.mark-as-read', $message->id) }}" 
                                                   class="btn btn-info btn-sm" 
                                                   title="Okundu İşaretle">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            @endif
                                            <a href="{{ route('admin.contact-messages.destroy', $message->id) }}" 
                                               class="btn btn-danger btn-sm" 
                                               title="Sil"
                                               onclick="return confirm('Bu mesajı silmek istediğinize emin misiniz?');">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Henüz mesaj bulunmuyor.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 