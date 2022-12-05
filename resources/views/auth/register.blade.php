@extends('layouts.app')
@section('title','Tambah User')
@section('content')
<div class="container">
    @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
     @endif
    <div class="register-header">
        <h1>Daftar User</h1>
    </div>
    <form action="/register" method="POST">
        @csrf
            <div class="form-group">
                <label>Name </label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
            </div>
            <div class="form-group">
                <label>Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
            </div>
            <div class="form-group">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="/">Kembali</a>
            </div>
      </form>
</div>
@endsection
