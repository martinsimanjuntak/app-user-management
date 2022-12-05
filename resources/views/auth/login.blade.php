@extends('layouts.app')
@section('title','Login')
@section('content')
<div class="container">
    <div class="register-header">
        <h1>Masuk</h1>
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('loginError'))
        <div class="alert alert-danger" role="alert">
            {{session('loginError')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="/login" method="POST">
        @csrf
            <div class="form-group">
                <label>Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password"  />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Masuk</button>
                <a class="btn btn-danger" href="/">Kembali</a>
            </div>
      </form>
</div>
@endsection
