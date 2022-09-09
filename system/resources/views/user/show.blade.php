@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Detail Data User
                <div class="card-body">
                    <h3>nama : {{ $user->nama }}</h3>
                    <p>
                        {{ '@' . $user->username }}|
                        email {{ $user->email }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
