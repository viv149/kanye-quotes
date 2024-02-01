@extends('layout', ['activePage' => 'login', 'titlePage' => 'Login'])

@section('content')
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        <div class="card mb-3">
            <h5 class="card-header">
                Kanye West Quotes
            </h5>
            <div class="card-body">
                <a href="#" onclick="refreshPage()" class="btn btn-primary">Refresh</a>
                <ul class="list-group list-group-flush">

                    @foreach ( $randomQuotes as $quote )
                        <li class="list-group-item">
                            <p class="card-text">{{ $quote }}</p>
                        </li>    
                    @endforeach
                </ul>
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