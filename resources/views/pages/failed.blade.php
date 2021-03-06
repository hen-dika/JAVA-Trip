@extends('layouts.success')

@section('title', 'JAVA-Trip|Failed')

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <a href="{{ url('/') }}"><img src="{{ url('images/ic_mail.png') }}" alt="" /></a>
            <h1>Oops! Sorry</h1>
            <p>
                Your transaction is failed
                <br />
                please contact our representative if this problem occurs
            </p>
            <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
                Home Page
            </a>
        </div>
    </div>
</main>
@endsection