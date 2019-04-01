
@extends('layouts.app')
<head>
	<title>User Log In</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                      <br>

                </div>
            </div>

            <div>
              <br>
            	<a href="{{route('log')}}" class="btn3">Submit the numbers</a>
            	<a href="{{route('index')}}" class="btn4">Home</a>
            </div>

						<div>

							<a href="{{route('data')}}" class="btn5">View the result</a>
						</div>

        </div>


    </div>


</div>
@endsection
