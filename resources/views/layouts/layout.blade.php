<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>@yield('title')</title>

		<!-- Bootstrap core CSS -->
		<link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

		<!-- Optional Css -->
		@yield('css')

	</head>

	<body>

		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container">
				<a class="navbar-brand" href="{{ route('home') }}">Blog Laravel</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="{{ route('home') }}">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						@auth
						<li class="nav-item active">
							<a class="nav-link" href="{{ route('admin.index') }}">Dashboard
							</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="{{ route('logout') }}">Logout
							</a>
						</li>
						@endauth
						@guest
						<li class="nav-item active">
							<a class="nav-link" href="{{ route('login') }}">Login
							</a>
						</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>

		<!-- Page Content -->
		<div class="container">

				<div class="row">
	
					<!-- Blog Entries Column -->
					<div class="col-md-8">
	
						@yield('content')
	
					</div>
	
					<!-- Sidebar Widgets Column -->
					<div class="col-md-4">
	
						<!-- Categories Widget -->
						<div class="card my-4">
							<h5 class="card-header">Categories</h5>
							<div class="card-body">
								<div class="row">
									@php
										$contador = 0;    
									@endphp
									@foreach ($categorias as $categoria)
											@if($contador==0)
											<div class="col-lg-6">
														<ul class="list-unstyled mb-0">              
											@endif
											@php
												$contador++;    
											@endphp
																<li>
																		<a href="{{ route('categoria',$categoria->nombre) }}">{{ ucwords($categoria->nombre) }}</a>
																</li>
											@if($contador==2)
														</ul>
											</div>
											@php
												$contador=0;    
											@endphp
											@endif
									@endforeach
									@if($contador < 2)
												</ul>
										</div>
									@endif
								</div>
							</div>
						</div>
	
						<!-- Side Widget -->
						<div class="card my-4">
							<h5 class="card-header">Santos Osmin Urrutia</h5>
							<div class="card-body">
								Creador de este blog, programador para <a href="https:\\bolsainmobiliaria.pe">Bolsa Inmobiliaria</a>,
								me gusta estudiar constantemente y aprender cosas nuevas.
							</div>
						</div>
	
					</div>
	
				</div>
				<!-- /.row -->
	
			</div>
			<!-- /.container -->

		<!-- Footer -->
		<footer class="py-5 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">urrutia96</p>
			</div>
			<!-- /.container -->
		</footer>

		<!-- Bootstrap core JavaScript -->
		<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
		
		@yield('scripts')

	</body>

</html>
