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

					<a class="navbar-brand" href="{{ route('Home::index') }}">{{ env('SYSTEM_NAME','SYSTEM_NAME') }}</a>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{ env('SYSTEM_URL','SYSTEM_URL') }}" target="_blank">Visualizar el Sitio&nbsp;&nbsp;<i class="fa fa-television"></i></a></li>
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}&nbsp;&nbsp;
								<span class="caret"></span></a>

								<ul class="dropdown-menu" role="menu">
									<li class="dropdown-header">CONFIGURACIONES</li>
									<li class=""><a href="{{ route('Accounts::profile') }}"><i class="fa fa-user"></i> Perfil</a></li>

								@role('support|owner')
						    		<li><a href="{{ route('Accounts::index') }}"><i class="fa fa-users"></i> Cuentas</a></li>
						    		<li><a href="{{ route('Accounts::notice') }}"><i class="fa fa-bullhorn"></i> Publicar aviso</a></li>
								@endrole
									
								@role('support')
									<li class="divider"></li>
									<li class="dropdown-header">SOPORTE</li>
						    		<li><a href="{{ route('Recipients::index') }}"><span class="glyphicon glyphicon-envelope"></span> Support</a></li>
								@endrole

									<li class="divider"></li>
									<li><a href="{{ route('Auth::logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
								</ul>

						</li>
					</ul>
					
				</div><!-- /.navbar-collapse -->

			</div><!-- /.container-fluid -->

		</nav>