@extends('layout.master', ['title' => 'Shop'])

@section('content')
    <form action="{{ route('forgot-password.request') }}" method="post">
        @csrf
        @if ($errors->any())
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="w-50 mx-auto pb-xl-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email"
                   placeholder="Enter your email">
        </div>

        <div class="col-lg-12 text-center">
            <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
        </div>
    </form>
@endsection
