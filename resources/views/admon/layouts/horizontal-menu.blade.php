<!--Horizontal-main -->
				<div class="sticky">
					<div class="horizontal-main hor-menu clearfix">
						<div class="horizontal-mainwrapper container clearfix">
							<!--Nav-->
							<nav class="horizontalMenu clearfix">
								<ul class="horizontalMenu-list">
									<li aria-haspopup="true"><a href="{{ url('/' . $page='admon/') }}"><i class="fe fe-airplay"></i> Dashboard</a>									
									</li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='admon/productos') }}" class=""><i class="fe fe-codepen"></i> Productos</a></li>

									<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-bar-chart-2"></i> Parametrización <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="{{ url('/' . $page='admon/categorias') }}">Categorias</a></li>
											<li aria-haspopup="true"><a href="{{ url('/' . $page='admon/tags') }}">Tags</a></li>
											<li aria-haspopup="true"><a href="{{ url('/' . $page='admon/galeria') }}">Galeria</a></li>
											<li aria-haspopup="true"><a href="{{ url('/' . $page='admon/brands') }}">Brands</a></li>
										</ul>
									</li>
								</ul>
							</nav>
							<!--Nav-->
						</div>
					</div>
				</div>
<!--Horizontal-main -->
