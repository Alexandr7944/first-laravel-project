@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <h3>Привет, {{ $user->name }}!</h3>
                        <span>id: {{ $user->id }}</span>
                        <br>
                        <span>email: {{ $user->email }}</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
