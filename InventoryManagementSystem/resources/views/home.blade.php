@extends('layouts.app')
<body style="background-image:url('https://cloud360accounting.com/wp-content/uploads/2014/11/xero-background-750x300.jpg'); background-size:cover">
    
</body>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    {{--<a href="/assets" class="btn btn-primary" style="width: 27%;">Add Asset/Stock/Inventory</a>
                    <a href="/change" class="btn btn-primary">Change password</a>--}}
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
