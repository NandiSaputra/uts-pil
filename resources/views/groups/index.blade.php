@extends('layouts.app')

@section('title', 'Groups')

@section('content')
    <a href="/groups/create" class="btn btn-success">Tambah Groups</a>
    <div class="mb-3"></div>
    @foreach ($groups as $group)

        <div class="card text-dark bg-info mb-3" style="width: 18rem;">
            <h5 class="card-header"><a href="/groups/{{ $group['id'] }}" style="color:black">{{ $group['name'] }}</a>
            </h5>
            <div class="card-body">
                <p class="card-text">{{ $group['description'] }}</p>
                <p>
                <h3>Jumlah Member : {{ $group->friends_count }}</h3>
                </p>
                <hr>
                <a href="/groups/addmember/{{ $group['id'] }}" class="btn btn-success">Tambah Anggota</a>
                <hr>
                <ul class="list-group">
                    @foreach ($group->friends as $friend)

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $friend->nama }}
                            <form action="/groups/deleteaddmember/{{ $friend->id }}" method="POSt">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger">x</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
                <hr>
                <form action="/groups/{{ $group['id'] }}" method="POSt">
                    <a href="/groups/{{ $group['id'] }}/edit" class="btn btn-warning">Edit Group</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete Group</button>
                </form>
            </div>
        </div>

    @endforeach
    <div>
        {{ $groups->links() }}
    </div>
@endsection
