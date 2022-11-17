@extends('_layouts.app')

@section('content')
<section class="py-5">
    <div class="container" style="border-radius: 20px;">
        <div class="row my-5">
            <div class="col-md-6 mt-md-0 mt-4">
                <p>Selamat kamu telah menjadi member EXO-L indonesia ID <br> Berikut kartu membermu:</p>
                <div class="card">
                    <div class="card-header d=flex justify-content-start">
                        <img>
                        <p class="mb-0 ms-3 d-flex align-items-center" style="letter-spacing: 1px">
                             KARTU MEMBER
                        </p>
                    </div>
                    <div>
                            <h2><b>{{ $user->name}}</b></h2>
                            <p class="text-secondary mb-0">{{ $user->email}}</p>
                            <hr class="text-secondary">
                            <small class="text-secondary mb-0">Bergabung sejak <b> {{ $user->created_at }}</b></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</section>
@endsection