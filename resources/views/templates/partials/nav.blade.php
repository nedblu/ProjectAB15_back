		<nav class="navbar navbar-default navbar-static-top navbar-inverse">
			
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">

					<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
						MENU
					</button>

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="{{ route('Home::index') }}"> AlphaBeta CMS </a>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<ul class="nav navbar-nav navbar-right">
						<li><a href="http://www.alphabeta.com.mx/" target="_blank">Visualizar el Sitio</a></li>
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								Cuenta Master
								<span class="caret"></span></a>

								<ul class="dropdown-menu" role="menu">
									<li class="dropdown-header">CONFIGURACIONES</li>
									<li class=""><a href="#">Usuarios</a></li>
									<li class="divider"></li>
									<li><a href="{{ route('Auth::logout') }}">Logout</a></li>
								</ul>

						</li>
					</ul>
					
				</div><!-- /.navbar-collapse -->

			</div><!-- /.container-fluid -->

		</nav>