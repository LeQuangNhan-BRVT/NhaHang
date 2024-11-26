<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel Shop :: Tạo tài khoản Admin</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('admin-assets/plugins/fontawesome-free/css/all.min.css') }}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('admin-assets/css/adminlte.min.css') }}">
		<link rel="stylesheet" href="{{ asset('admin-assets/css/custom.css') }}">
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			@include('admin.message')
			<div class="card card-outline card-primary">
			  	<div class="card-header text-center">
					<a href="#" class="h3">Tạo tài khoản Admin</a>
			  	</div>
			  	<div class="card-body">
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul class="mb-0">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form method="POST" action="{{ route('admin.store') }}">
						@csrf
						<div class="form-group">
							<div class="input-group mb-3">
								<input type="text" name="name" class="form-control" placeholder="Tên" value="{{ old('name') }}">
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-user"></span>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="input-group mb-3">
								<input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-envelope"></span>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="input-group mb-3">
								<input type="password" name="password" class="form-control" placeholder="Mật khẩu">
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-lock"></span>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="input-group mb-3">
								<input type="password" name="password_confirmation" class="form-control" placeholder="Xác nhận mật khẩu">
								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-lock"></span>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-8">
								<a href="{{ route('admin.login') }}" class="btn btn-success">
									<i class="fas fa-arrow-left"></i> Quay lại đăng nhập
								</a>
							</div>
							<div class="col-4">
								<button type="submit" class="btn btn-primary btn-block">Tạo mới</button>
							</div>
						</div>
					</form>
			  	</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="{{ asset('admin-assets/plugins/jquery/jquery.min.js') }}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset('admin-assets/js/adminlte.min.js') }}"></script>
	</body>
</html>