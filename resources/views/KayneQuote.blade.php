@extends('layout', ['activePage' => 'login', 'titlePage' => 'Login'])

@section('content')
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        <div class="card mb-3">
            <h5 class="card-header">
                Kanye West Quotes
            </h5>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    
                    @foreach ( $randomQuotes as $quote )
                    <li class="list-group-item">
                        <p class="card-text">{{ $quote }}</p>
                    </li>    
                    @endforeach
                </ul>
                <a href="#" onclick="refreshPage()" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M19.91 15.51h-4.53a1 1 0 0 0 0 2h2.4A8 8 0 0 1 4 12a1 1 0 0 0-2 0a10 10 0 0 0 16.88 7.23V21a1 1 0 0 0 2 0v-4.5a1 1 0 0 0-.97-.99M15 12a3 3 0 1 0-3 3a3 3 0 0 0 3-3m-4 0a1 1 0 1 1 1 1a1 1 0 0 1-1-1m1-10a10 10 0 0 0-6.88 2.77V3a1 1 0 0 0-2 0v4.5a1 1 0 0 0 1 1h4.5a1 1 0 0 0 0-2h-2.4A8 8 0 0 1 20 12a1 1 0 0 0 2 0A10 10 0 0 0 12 2"/></svg> Refresh</a>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function refreshPage(){
            location.reload();
        }
    </script>
@endpush