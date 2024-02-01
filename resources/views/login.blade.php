@extends('layout', ['activePage' => 'login', 'titlePage' => 'Login'])

@section('content')
    
   
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex justify-content-center py-4">
            <h4 class="">Kayne West Quotes</h4>
        </div>
        <div class="card mb-3">
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
                        <label for="username" class="form-label">Username</label>
                        <input type="email" id="username" name="email" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection