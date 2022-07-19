@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            {{ $user->name }}'s Profile
        </div>
        <div class="card-body">
            @csrf
            <div class="form-group">
                <label for="name">
                    <strong>
                        Name:
                    </strong>
                </label>
                <input type="text" class="form-control" value="{{ $user->name }}" disabled>
            </div>
            <div class="form-group">
                <label for="name">
                    <strong>
                        Phone Number:
                    </strong>
                </label>
                <input type="text" class="form-control" value="{{ $user->phone }}" disabled>
            </div>
            <div class="form-group">
                <label for="name">
                    <strong>
                        Email:
                    </strong>
                </label>
                <input type="text" class="form-control" value="{{ $user->email }}" disabled>
            </div>
            <div class="row">
                <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary">Edit</a>
                <form method="POST" action="{{ route('users.destroy', ['user' => $user->id]) }}">
                    @csrf
                    @method('DELETE')
                    <a href="#" id="form" class="btn btn-danger">Delete</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
