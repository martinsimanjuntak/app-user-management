
@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="container mt-5">
            <div class="row justify-content-center align-items-center">
                <div class="card" style="width: 24rem;">
                    <div class="card-header">
                    Edit User
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/profile/edit/{{$user->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>                    
                            <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" aria-describedby="name" >                
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>                    
                            <input type="text" name="email" class="form-control" id="email" value="{{ $user->email }}" aria-describedby="email">                
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Foto</label>
                            <input class="form-control" name="image"  type="file" id="image">
                          </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
