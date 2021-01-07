<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
				<link  href="{{  URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
				<link href="{{  URL::asset('css/login.css') }}"  rel="stylesheet">
    </head>
    <body>
				<div class="container"><!--start container-->
					<div class="col d-flex justify-content-center pt-5"><!--start flex-->
						<div class="card-style">
						<div class="card"><!--start card-->
								<img class="card-img-top" src="{{ URL::asset('images/login.png') }}" alt="Card image cap">
								<div class="card-header text-md-center">
								<h5 class="card-title">Login</h5>
								</div>
								<div class="card-body">
								{!! $errors->first('credencialsFail', '<span class="help-block" style="color: red;">:message</span>') !!}
									<form action="{{ route('goLogin')}}" method="POST">
										@csrf
										<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}" >
											<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" value="{{old('email')}}">
											{!! $errors->first('email', '<span class="help-block" style="color: red;">:message</span>') !!}
										</div>
										<div class="form-group pt-1 {{ $errors->has('password') ? 'has-error' : ''}}">
											<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
											{!! $errors->first('password', '<span class="help-block" style="color: red;">:message</span>') !!}
										</div>
										<div class="text-center pt-2">
											<button type="submit" class="btn btn-primary" style="width: 50%;">Entrar</button>
										</div>
									</form>
								</div>
						</div><!--end card-->
						</div>
					</div><!--end flex-->
        </div><!--end container-->
    </body>
</html>
