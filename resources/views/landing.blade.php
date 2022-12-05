
    @extends('layouts.app')

    @section('title')
        Landing Page
    @endsection

    @section('links')
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @endsection

    @section('content')
        <div class="landing-page">
                <h1>Welcome To My Application</h1>  
        </div>
        <div class="deskripsi">
            <h3>Deskripsi</h3>
            <p>Aplikasi ini adalah aplikasi aplikasi management user. Aplikasi prototype untuk aplikasi mengatur user.
                Aplikasi ini dibuat dengan 3 jenis user , yaitu user , operasional dan super admin.
            </p>
        </div>
    @endsection
