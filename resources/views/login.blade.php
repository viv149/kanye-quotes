@extends('layout', ['activePage' => 'login', 'titlePage' => 'Login'])

@section('content')
    
   
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex justify-content-center py-4">
            <h4 class="">Kayne West Quotes</h4>
        </div>
        <div class="card mb-3 text-start">
            <div class="card-body">
                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center">Login to your account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                    
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    
                    @endif
                    
                </div>
                <form action="{{route('login')}}" method="POST" class="row g-3 needs-validation">
                    @csrf
                    <div class="col-12">
                        <label for="username" class="form-label">Your Email</label>
                        <input type="email" id="username" name="email" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                    <div class="col-12">
                        <p class="small">Don't have account? <a href="{{route('registerView')}}">Create an account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection