@extends('login.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
        @if (session()->has('LoginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('LoginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lable="Close"></button>
        </div>
        @endif
        <main class="form-signin">
            <form action="/admin" method="post">
            @csrf
            {{-- <img class="mb-4" src="" alt="" width="72" height="57"> --}}
            <h1 class="h3 mb-3 fw-normal text-center">LOGIN ADMIN</h1>
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email')}}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
        </main>
    </div>
</div>
@endsection