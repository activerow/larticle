@section('title', 'Dashboard')

@extends('layouts.app')

@section('content')
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @include('partials.messages')
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
