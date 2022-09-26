@extends('layout.master', ['title' => 'Shop'])

@section('content')

    <form action="{{ route('password.update') }}" method="post">
        @csrf
        <div class="w-50 mx-auto pb-xl-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                   placeholder="Enter your email" >
        </div>

        <div class="col-lg-12 text-center">
            <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
        </div>
    </form>
@endsection
