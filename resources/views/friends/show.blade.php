@extends('layouts.app')

@section('title', 'Cobaaaaaa')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>NAMA TEMAN : {{ $friend['nama'] }}</h3>
            <h3>NO TLP TEMAN : {{ $friend['no_tlp'] }}</h3>
            <h3>ALAMAT TEMAN : {{ $friend['alamat'] }}</h3>
            <h3>Groups Yang diikuti:@if ($friend->groups_id != 0) {{ $friend->groups->name }} @else Belummasuk groups @endif </h3>
            group yg pernah diikuti :
        </div>
    </div>

@endsection
