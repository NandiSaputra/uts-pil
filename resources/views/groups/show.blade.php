@extends('layouts.app')

@section('title', 'Detail Groups')

@section('content')
    <div class="card" style="max-width: 25rem;">
        <div class="card-header">
            Detail Teman
        </div>
        <div class="card-body">
            <h5 class="card-title">Nama Groups : {{ $group['name'] }}</h5>
            <h5 class="card-text">Deskripsi : {{ $group['description'] }}</h5>
            <h5 class="card-text">Jumlah Anggota : {{ $group->friends_count }}</h5>
            <ul class="list-group">
                @foreach ($group->friends as $friend)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $friend->nama }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
