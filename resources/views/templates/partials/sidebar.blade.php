	<div class="col-md-2 sidebar">
		<div class="row">
			<div class="side-menu">
				<nav class="navbar navbar-default" role="navigation">
					<!-- Main Menu -->
					<div class="side-menu-container">
						<ul class="nav navbar-nav">
							<li><a href="{{ route('Slides::index') }}"><i class="fa fa-picture-o"></i>Slider</a></li>

							<!-- Dropdown-->
							@role('support|owner|admin|editor')
							<li class="panel panel-default" id="dropdown">
								<a data-toggle="collapse" href="#dropdown-lvl1">
									<i class="fa fa-book"></i>Catálogo <span class="caret"></span>
								</a>

								<!-- Dropdown level 1 -->
								<div id="dropdown-lvl1" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="nav navbar-nav">
											<li><a href="{{ route('Products::index') }}"><i class="fa fa-cubes"></i>Productos</a></li>
											<li><a href="{{ route('Colors::index') }}"><i class="fa fa-tint"></i>Recurso de colores</a></li>
										</ul>
									</div>
								</div>
							</li>
							@endrole

							<li><a href="{{ route('Techniques::index') }}"><i class="fa fa-briefcase"></i>Técnicas</a></li>
							<li><a href="{{ route('Recipients::index') }}"><i class="fa fa-envelope"></i>Destinatarios</a></li>
							
							@role('support')
							<li><a href="{{ route('Categories::index') }}"><i class="fa fa-code-fork"></i>Categorías</a></li>
							@endrole
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>