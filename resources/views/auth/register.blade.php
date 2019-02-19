@section('title', 'Register')

@extends('layouts.app')

@section('content')
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-6 col-lg-4">
            <div class="card shadow-lg">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="full_name">Full Name</label>

                            <input id="full_name" type="text" class="form-control{{ $errors->has('full_name') ? ' is-invalid' : '' }}" name="full_name" value="{{ old('full_name') }}" placeholder="Your Name" required autofocus>

                            @if ($errors->has('full_name'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('full_name') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="city">City</label>

                            <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" placeholder="Current City" required>

                            @if ($errors->has('city'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('city') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+62</span>
                                </div>
                                <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" placeholder="8xxxxxxxxxx" required>

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        {{ $errors->first('phone_number') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="city">Gender</label>

                            <select name="gender" id="gender" class="custom-select form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" required>
                                <option value="">Choose Your Gender</option>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : ''}}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : ''}}>Female</option>
                                <option value="other" {{ old('gender') == 'other' ? 'selected' : ''}}>Rather Not Say</option>
                            </select>

                            @if ($errors->has('gender'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('gender') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="date_of_birth">Date of Birth</label>

                            <input id="date_of_birth" type="text" class="datepicker bg-transparent form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" name="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="Select Your Date of Birth" required>

                            @if ($errors->has('date_of_birth'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('date_of_birth') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>

                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="you@example.com" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>

                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Pick a Password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>

                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Your Password" required>
                        </div>

                        <hr>
                        
                        <p class="small text-center">By registering, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></p>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fas fa-paper-plane"></i> Register
                            </button>
                        </div>
                    </form>
                    <p class="small text-center mb-0">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
