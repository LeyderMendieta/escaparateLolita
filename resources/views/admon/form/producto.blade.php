@extends('admon.layouts.principal')

@section('titulo')
<title>Nuevo Producto - Administración Escaparate</title>
@endsection

@section('css')
<!-- Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Nuevo Producto</h1>
						</div>
						<!-- End page-header -->
@endsection
@section('content')
						

						

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Different Input Style Forms</h3>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fe fe-more-horizontal fs-20"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="fe fe-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a></li>
												<li><a href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a></li>
												<li><a href="#"><i class="fe fe-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group">
													<label class="form-label">Text</label>
													<input type="text" class="form-control" name="example-text-input" placeholder="Text..">
												</div>

												<div class="form-group">
													<label class="form-label">Country</label>
													<select name="country" id="select-countries" class="form-control custom-select">
														<option value="br" data-data="{&quot;image&quot;: &quot;{{URL::asset('assets/images/flag/flags/br.svg')}}&quot;}">Brazil</option>
														<option value="cz" data-data="{&quot;image&quot;: &quot;{{URL::asset('assets/images/flag/flags/cz.svg')}}&quot;}">Czech Republic</option>
														<option value="de" data-data="{&quot;image&quot;: &quot;{{URL::asset('assets/images/flag/flags/de.svg')}}&quot;}">Germany</option>
														<option value="pl" data-data="{&quot;image&quot;: &quot;{{URL::asset('assets/images/flag/flags/pl.svg')}}&quot;}" selected="">Poland</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Input group</label>
													<div class="input-group">
														<input type="text" class="form-control" placeholder="Search for...">
														<span class="input-group-append">
															<button class="btn btn-primary" type="button">Go!</button>
														</span>
													</div>
												</div>
												<div class="form-group mb-0">
													<label class="form-label">Input group buttons</label>
													<div class="input-group">
														<input type="text" class="form-control">
														<div class="input-group-append">
															<button type="button" class="btn btn-primary">Action</button>
															<button data-toggle="dropdown" type="button" class="btn btn-primary dropdown-toggle"></button>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0)">News</a>
																<a class="dropdown-item" href="javascript:void(0)">Messages</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="javascript:void(0)">Edit Profile</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="form-group">
													<label class="form-label">Separated inputs</label>
													<div class="row gutters-xs">
														<div class="col">
															<input type="text" class="form-control" placeholder="Search for...">
														</div>
														<span class="col-auto">
															<button class="btn btn-primary" type="button"><i class="fe fe-search"></i></button>
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="form-label">ZIP Code</label>
													<div class="row gutters-sm">
														<div class="col">
															<input type="text" class="form-control" placeholder="Search for...">
														</div>
														<span class="col-auto align-self-center">
															<span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>ZIP Code must be US or CDN format. You can use an extended ZIP+4 code to determine address more accurately.</p>
															<p class='mb-0'><a href=''>USP ZIP codes lookup tools</a></p>
															" data-original-title="" title="">?</span>
														</span>
													</div>
												</div>
												<div class="form-group">
													<div class="form-label">Bootstrap's Custom File Input</div>
													<div class="custom-file">
														<input type="file" class="custom-file-input" name="example-file-input-custom">
														<label class="custom-file-label">Choose file</label>
													</div>
												</div>
												<div class="form-group m-0">
													<label class="form-label">Date of birth</label>
													<div class="row gutters-xs">
														<div class="col-5">
															<select name="user[month]" class="form-control custom-select select2">
																<option value="">Month</option>
																<option value="1">January</option>
																<option value="2">February</option>
																<option value="3">March</option>
																<option value="4">April</option>
																<option value="5">May</option>
																<option selected="selected" value="6">June</option>
																<option value="7">July</option>
																<option value="8">August</option>
																<option value="9">September</option>
																<option value="10">October</option>
																<option value="11">November</option>
																<option value="12">December</option>
															</select>
														</div>
														<div class="col-3">
															<select name="user[day]" class="form-control custom-select select2">
																<option value="">Day</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
																<option value="11">11</option>
																<option value="12">12</option>
																<option value="13">13</option>
																<option value="14">14</option>
																<option value="15">15</option>
																<option value="16">16</option>
																<option value="17">17</option>
																<option value="18">18</option>
																<option value="19">19</option>
																<option selected="selected" value="20">20</option>
																<option value="21">21</option>
																<option value="22">22</option>
																<option value="23">23</option>
																<option value="24">24</option>
																<option value="25">25</option>
																<option value="26">26</option>
																<option value="27">27</option>
																<option value="28">28</option>
																<option value="29">29</option>
																<option value="30">30</option>
																<option value="31">31</option>
															</select>
														</div>
														<div class="col-4">
															<select name="user[year]" class="form-control custom-select select2">
																<option value="">Year</option>
																<option value="2014">2014</option>
																<option value="2013">2013</option>
																<option value="2012">2012</option>
																<option value="2011">2011</option>
																<option value="2010">2010</option>
																<option value="2009">2009</option>
																<option value="2008">2008</option>
																<option value="2007">2007</option>
																<option value="2006">2006</option>
																<option value="2005">2005</option>
																<option value="2004">2004</option>
																<option value="2003">2003</option>
																<option value="2002">2002</option>
																<option value="2001">2001</option>
																<option value="2000">2000</option>
																<option value="1999">1999</option>
																<option value="1998">1998</option>
																<option value="1997">1997</option>
																<option value="1996">1996</option>
																<option value="1995">1995</option>
																<option value="1994">1994</option>
																<option value="1993">1993</option>
																<option value="1992">1992</option>
																<option value="1991">1991</option>
																<option value="1990">1990</option>
																<option selected="selected" value="1989">1989</option>
																<option value="1988">1988</option>
																<option value="1987">1987</option>
																<option value="1986">1986</option>
																<option value="1985">1985</option>
																<option value="1984">1984</option>
																<option value="1983">1983</option>
																<option value="1982">1982</option>
																<option value="1981">1981</option>
																<option value="1980">1980</option>
																<option value="1979">1979</option>
																<option value="1978">1978</option>
																<option value="1977">1977</option>
																<option value="1976">1976</option>
																<option value="1975">1975</option>
																<option value="1974">1974</option>
																<option value="1973">1973</option>
																<option value="1972">1972</option>
																<option value="1971">1971</option>
																<option value="1970">1970</option>
																<option value="1969">1969</option>
																<option value="1968">1968</option>
																<option value="1967">1967</option>
																<option value="1966">1966</option>
																<option value="1965">1965</option>
																<option value="1964">1964</option>
																<option value="1963">1963</option>
																<option value="1962">1962</option>
																<option value="1961">1961</option>
																<option value="1960">1960</option>
																<option value="1959">1959</option>
																<option value="1958">1958</option>
																<option value="1957">1957</option>
																<option value="1956">1956</option>
																<option value="1955">1955</option>
																<option value="1954">1954</option>
																<option value="1953">1953</option>
																<option value="1952">1952</option>
																<option value="1951">1951</option>
																<option value="1950">1950</option>
																<option value="1949">1949</option>
																<option value="1948">1948</option>
																<option value="1947">1947</option>
																<option value="1946">1946</option>
																<option value="1945">1945</option>
																<option value="1944">1944</option>
																<option value="1943">1943</option>
																<option value="1942">1942</option>
																<option value="1941">1941</option>
																<option value="1940">1940</option>
																<option value="1939">1939</option>
																<option value="1938">1938</option>
																<option value="1937">1937</option>
																<option value="1936">1936</option>
																<option value="1935">1935</option>
																<option value="1934">1934</option>
																<option value="1933">1933</option>
																<option value="1932">1932</option>
																<option value="1931">1931</option>
																<option value="1930">1930</option>
																<option value="1929">1929</option>
																<option value="1928">1928</option>
																<option value="1927">1927</option>
																<option value="1926">1926</option>
																<option value="1925">1925</option>
																<option value="1924">1924</option>
																<option value="1923">1923</option>
																<option value="1922">1922</option>
																<option value="1921">1921</option>
																<option value="1920">1920</option>
																<option value="1919">1919</option>
																<option value="1918">1918</option>
																<option value="1917">1917</option>
																<option value="1916">1916</option>
																<option value="1915">1915</option>
																<option value="1914">1914</option>
																<option value="1913">1913</option>
																<option value="1912">1912</option>
																<option value="1911">1911</option>
																<option value="1910">1910</option>
																<option value="1909">1909</option>
																<option value="1908">1908</option>
																<option value="1907">1907</option>
																<option value="1906">1906</option>
																<option value="1905">1905</option>
																<option value="1904">1904</option>
																<option value="1903">1903</option>
																<option value="1902">1902</option>
																<option value="1901">1901</option>
																<option value="1900">1900</option>
																<option value="1899">1899</option>
																<option value="1898">1898</option>
																<option value="1897">1897</option>
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

					</div>
@endsection
@section('js')
<!-- Data tables js-->
<script src="{{URL::asset('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/datatable.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
@endsection