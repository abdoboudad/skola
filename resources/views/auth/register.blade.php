@extends('platform.layouts.layout')

@section('content')
<div class="container mb-11">
    <div class="row gx-0">
        <div class="col-md-7 col-xl-4 mx-auto">
            <!-- Login -->
            <h3 class="mb-6">Sign Up to Skola now!</h3>
            @if ($errors->any())
            <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Form Login -->
            <form class="mb-5" action="{{ route('register') }}" method="POST">
                @csrf
                <!-- Email -->
                <div class="form-group mb-5">
                    <label for="modalSigninEmail1">
                        Username 
                    </label>
                    <input type="text" name="name" class="form-control" id="modalSigninEmail1" placeholder="creativelayers">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-5">
                    <label for="modalSigninEmail1">
                        Email
                    </label>
                    <input type="email" name="email" class="form-control" id="modalSigninEmail1" placeholder="creativelayers">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-group mb-5">
                    <label for="modalSigninPassword1">
                        Password
                    </label>
                    <input type="password" name="password" class="form-control" id="modalSigninPassword1" placeholder="**********">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="d-flex align-items-center mb-5 font-size-sm">
                    <div class="form-check">
                        <input class="form-check-input text-gray-800" type="checkbox" id="autoSizingCheck1">
                        <label class="form-check-label text-gray-800" for="autoSizingCheck1">
                            Remember me
                        </label>
                    </div>
                </div>

                <!-- Submit -->
                <button class="btn btn-block btn-primary" type="submit">
                    SUBMIT
                </button>
            </form>

            <!-- Text -->
            <p class="mb-0 font-size-sm text-center">
                You have an account? <a class="text-underline" href="{{ route('login') }}">Login</a>
            </p>
        </div>
    </div>
</div>
@endsection
