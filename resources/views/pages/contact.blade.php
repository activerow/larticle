@section('title', 'Contact')

@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.messages')

    <h1>Contact Us</h1>
    <div class="card-deck">
        <div class="card bg-light shadow">
            <div class="card-body">
                <p>Please fill out the quick form and we will be in touch with lightening speed.</p>
                <form action="{{ action('ContactUsController@contactPost') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <textarea name="user_message" id="user_message" class="form-control" placeholder="Message" cols="30" rows="10" required>{{ old('user_message') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Submit
                    </button>
                </form>
            </div>
        </div>

        <div class="card bg-warning text-light border border-0 shadow-lg">
            <div class="card-body">
                <p class="lead">Operational Office</p>
                <p class="card-text">
                    Jl. Meruya Ilir Utara no. 21, Kembangan, Jakarta Barat 11610 <br>
                    T. +62 21 586 5619 <br>
                    P. +62 878 8368 3918 <br>
                    E. activerow@gmail.com <br>    
                </p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.499494314775!2d106.7574085496168!3d-6.197637359012021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7684edaff65%3A0xc3c45a6c219bce83!2sPT+Panorama+Mitra+Sarana!5e0!3m2!1sen!2sid!4v1545367616813" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
@endsection