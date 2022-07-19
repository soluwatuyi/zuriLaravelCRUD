@extends('layouts.app')

@section('content')
@foreach ($users as $user)
<div class="card col-6">
    <div class="card-header">
        {{ $user->name }}
    </div>
    <div class="card-body">
        <p><strong>Email:</strong> {{ $user->email }} </p>
        <p><strong>Phone:</strong> {{ $user->phone }} </p>
    </div>
    <div class="card-footer">
        <div class="row">
            <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary mx-1">Edit</a>
            <form method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}">
                @csrf
                @method('DELETE')
                <a href="#" id="form" class="btn btn-danger mx-1">Delete</a>
            </form>
        </div>
    </div>
</div>
@endforeach
<div class="row">
{{ $users->onEachSide(0)->links() }}
</div>
@endsection
