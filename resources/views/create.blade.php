@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            Create new user
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">
                        <strong>
                            Name:
                        </strong>
                    </label>
                    <input type="text" class="form-control" name="name" value="">
                </div>
                <div class="form-group">
                    <label for="name">
                        <strong>
                            Phone Number:
                        </strong>
                    </label>
                    <input type="text" class="form-control" name="phone" value="">
                </div>
                <div class="form-group">
                    <label for="name">
                        <strong>
                            Email:
                        </strong>
                    </label>
                    <input type="text" class="form-control" name="email" value="">
                </div>
                <div class="row">
                    <button class="btn btn-primary" type="submit">Create user</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
