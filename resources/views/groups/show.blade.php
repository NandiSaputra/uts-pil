@extends('layouts.app')

@section('title', 'Cobaaaaaa')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>NAMA TEMAN : {{ $group['name'] }}</h3>
            <h3>NO TLP TEMAN : {{ $group['description'] }}</h3>
            <h3>Jumlah Member : {{ $group->friends_count }}</h3>
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
