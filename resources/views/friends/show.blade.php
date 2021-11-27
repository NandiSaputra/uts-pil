@extends('layouts.app')

@section('title', 'Detail Friends')

@section('content')
    <div class="card" style="max-width: 25rem;">
        <div class="card-header">
            Detail Teman
        </div>
        <div class="card-body">
            <h5 class="card-title">Nama Teman : {{ $friend['nama'] }}</h5>
            <h5 class="card-text">Nomor Telepon : {{ $friend['no_tlp'] }}</h5>
            <h5 class="card-text">ALamat : {{ $friend['alamat'] }}</h5>
            <h5 class="card-text">Group yag sedang diikuti :
                @if ($friend->groups_id != 0)
                    {{ $friend->groups->name }}
                @else Belum masuk groups
                @endif
            </h5>
            <h5 class="card-text">Group yag pernah diikuti : </h5>
        </div>
    </div>


@endsection
