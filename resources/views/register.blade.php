@extends('layout', ['activePage' => 'login', 'titlePage' => 'Login'])

@section('content')
    
   
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex justify-content-center py-4">
            <h4 class="">Kayne West Quotes</h4>
        </div>
        <div class="card mb-3 text-start">
            <div class="card-body">
                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                    

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                </div>
                <form action="{{route('registerStore')}}" method="POST" class="row g-3 needs-validation">
                    @csrf
                    <div class="col-12">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="username" class="form-label">Your Email</label>
                        <input type="email" id="username" name="email" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">Create Account</button>
                    </div>
                    <div class="col-12">
                        <p class="small">Already have an account? <a href="{{route('loginPage')}}">Log in</a></p>
                    </div>
                </form> 
            </div>
        </div>
    </div>
@endsection