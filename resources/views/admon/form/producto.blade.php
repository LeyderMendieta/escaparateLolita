@extends('admon.layouts.principal')

@section('titulo')
<title>Nuevo Producto - Administración Escaparate</title>
@endsection

@section('css')
<!--Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
<!-- Time picker css-->
<link href="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.css')}}" rel="stylesheet" />
<!-- Date Picker css-->
<link href="{{URL::asset('assets/plugins/date-picker/date-picker.css')}}" rel="stylesheet" />
<!-- File Uploads css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileuploads.css')}}" rel="stylesheet" type="text/css" />
<!--Mutipleselect css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/multipleselect/multiple-select.css')}}">
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Nuevo Producto</h1>
						</div>
						<!-- End page-header -->
@endsection
@section('content')
						
						
							<div class="row" id="App_Admon_Add_Product">
								
							</div>
							<!-- <div class="col-lg-12">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-xl-6">
													<div class="form-group">
														<label class="form-label">Nombre</label>
														<input type="text" class="form-control" name="example-text-input" placeholder="Text..">
													</div>
												</div>
												<div class="col-xl-6">

												</div>
											</div>
											<div class="row">
												<div class="col-xl-12">
													<div class="form-group">
														<label class="form-label">Descripción</label>
														<textarea class="form-control" id="ex" rows="3" placeholder="Escribe la descripción del producto"></textarea>
													</div>												
												</div>
											</div>
											<div class="row">
												<div class="col-xl-6">
													<div class="form-group">
														<label class="form-label">Precio Antes</label>
														<div class="input-group">
															<input type="number" class="form-control">
															<span class="input-group-append">
																<button class="btn btn-primary" type="button">$</button>
															</span>
														</div>
													</div>
												</div>
												<div class="col-xl-6">
													<div class="form-group">
														<label class="form-label">Precio Ahora</label>
														<div class="input-group">
															<input type="number" class="form-control">
															<span class="input-group-append">
																<button class="btn btn-primary" type="button">$</button>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="card shadow">
														<div class="card-header">
															<div>
																<h3 class="card-title">Imagen Principal <u class='small ml-3'>Tamaño: 300X410</u></h3>
															</div>
															<div class="card-options">
																<span class="col-auto align-self-center">
																	<span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>Se recomienda usar el tamaño adecuado en las imagenes para una visibilidad nitida dentro del app</p>
																	<p class='mb-0'><a href='https://www.iloveimg.com/resize-image'>URL para redimensionar imagenes</a></p>
																	" data-original-title="" title="">?</span>
																</span>
															</div>
														</div>
														<div class="card-body">
															<input type="file" accept="image/*" class="dropify" />
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="card shadow">
														<div class="card-header">
															<div>
															<h3 class="card-title">Imagen Secundaria <u class='small ml-3'>Tamaño: 300X410</u></h3>
															</div>
															<div class="card-options">
															<span class="col-auto align-self-center">
																<span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>Se recomienda usar el tamaño adecuado en las imagenes para una visibilidad nitida dentro del app</p>
																	<p class='mb-0'><a href='https://www.iloveimg.com/resize-image'>URL para redimensionar imagenes</a></p>
																	" data-original-title="" title="">?</span>
																</span>
															</div>
														</div>
														<div class="card-body">
															<input type="file" accept="image/*" class="dropify" data-default-file="{{URL::asset('assets/images/photos/1.jpg')}}"  />
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="card shadow">
														<div class="card-header">
															<div>
																<h3 class="card-title">Imagen(1) Pequeña <u class='small ml-3'>Tamaño: 180x180</u></h3>
															</div>
															<div class="card-options">
																<span class="col-auto align-self-center">
																	<span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>Se recomienda usar el tamaño adecuado en las imagenes para una visibilidad nitida dentro del app</p>
																	<p class='mb-0'><a href='https://www.iloveimg.com/resize-image'>URL para redimensionar imagenes</a></p>
																	" data-original-title="" title="">?</span>
																</span>
															</div>
														</div>
														<div class="card-body">
															<input type="file" accept="image/*" class="dropify" />
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="card shadow">
														<div class="card-header">
															<div>
															<h3 class="card-title">Imagen(1) Grande <u class='small ml-3'>Tamaño: 960x1286</u></h3>
															</div>
															<div class="card-options">
															<span class="col-auto align-self-center">
																<span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>Se recomienda usar el tamaño adecuado en las imagenes para una visibilidad nitida dentro del app</p>
																	<p class='mb-0'><a href='https://www.iloveimg.com/resize-image'>URL para redimensionar imagenes</a></p>
																	" data-original-title="" title="">?</span>
																</span>
															</div>
														</div>
														<div class="card-body">
															<input type="file" accept="image/*"  class="dropify" />
														</div>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="card shadow">
														<div class="card-header">
															<div>
																<h3 class="card-title">Imagen(2) Pequeña <u class='small ml-3'>Tamaño: 180x180</u></h3>
															</div>
															<div class="card-options">
																<span class="col-auto align-self-center">
																	<span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>Se recomienda usar el tamaño adecuado en las imagenes para una visibilidad nitida dentro del app</p>
																	<p class='mb-0'><a href='https://www.iloveimg.com/resize-image'>URL para redimensionar imagenes</a></p>
																	" data-original-title="" title="">?</span>
																</span>
															</div>
														</div>
														<div class="card-body">
															<input type="file" accept="image/*" class="dropify" />
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="card shadow">
														<div class="card-header">
															<div>
															<h3 class="card-title">Imagen(2) Grande <u class='small ml-3'>Tamaño: 960x1286</u></h3>
															</div>
															<div class="card-options">
															<span class="col-auto align-self-center">
																<span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>Se recomienda usar el tamaño adecuado en las imagenes para una visibilidad nitida dentro del app</p>
																	<p class='mb-0'><a href='https://www.iloveimg.com/resize-image'>URL para redimensionar imagenes</a></p>
																	" data-original-title="" title="">?</span>
																</span>
															</div>
														</div>
														<div class="card-body">
															<input type="file" accept="image/*" class="dropify" />
														</div>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="card shadow">
														<div class="card-header">
															<div>
																<h3 class="card-title">Imagen(3) Pequeña <u class='small ml-3'>Tamaño: 180x180</u></h3>
															</div>
															<div class="card-options">
																<span class="col-auto align-self-center">
																	<span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>Se recomienda usar el tamaño adecuado en las imagenes para una visibilidad nitida dentro del app</p>
																	<p class='mb-0'><a href='https://www.iloveimg.com/resize-image'>URL para redimensionar imagenes</a></p>
																	" data-original-title="" title="">?</span>
																</span>
															</div>
														</div>
														<div class="card-body">
															<input type="file" accept="image/*" class="dropify" />
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="card shadow">
														<div class="card-header">
															<div>
															<h3 class="card-title">Imagen(3) Grande <u class='small ml-3'>Tamaño: 960x1286</u></h3>
															</div>
															<div class="card-options">
															<span class="col-auto align-self-center">
																<span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>Se recomienda usar el tamaño adecuado en las imagenes para una visibilidad nitida dentro del app</p>
																	<p class='mb-0'><a href='https://www.iloveimg.com/resize-image'>URL para redimensionar imagenes</a></p>
																	" data-original-title="" title="">?</span>
																</span>
															</div>
														</div>
														<div class="card-body">
															<input type="file" accept="image/*" class="dropify" />
														</div>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="card shadow">
														<div class="card-header">
															<div>
																<h3 class="card-title">Imagen(4) Pequeña <u class='small ml-3'>Tamaño: 180x180</u></h3>
															</div>
															<div class="card-options">
																<span class="col-auto align-self-center">
																	<span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>Se recomienda usar el tamaño adecuado en las imagenes para una visibilidad nitida dentro del app</p>
																	<p class='mb-0'><a href='https://www.iloveimg.com/resize-image'>URL para redimensionar imagenes</a></p>
																	" data-original-title="" title="">?</span>
																</span>
															</div>
														</div>
														<div class="card-body">
															<input type="file" accept="image/*" class="dropify" />
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="card shadow">
														<div class="card-header">
															<div>
															<h3 class="card-title">Imagen(4) Grande <u class='small ml-3'>Tamaño: 960x1286</u></h3>
															</div>
															<div class="card-options">
															<span class="col-auto align-self-center">
																<span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>Se recomienda usar el tamaño adecuado en las imagenes para una visibilidad nitida dentro del app</p>
																	<p class='mb-0'><a href='https://www.iloveimg.com/resize-image'>URL para redimensionar imagenes</a></p>
																	" data-original-title="" title="">?</span>
																</span>
															</div>
														</div>
														<div class="card-body">
															<input type="file" accept="image/*" class="dropify" />
														</div>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="form-group m-0">
														<label class="form-label">Select Color</label>
														<div class="row gutters-xs">
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="checkbox" value="negro" class="colorinput-input" checked />
																	<span class="colorinput-color bg_negro"></span>
																</label>
															</div>
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="checkbox" value="blanco" class="colorinput-input"  />
																	<span class="colorinput-color bg_blanco colorinput-colorwhite"></span>
																</label>
															</div>
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="checkbox" value="rojo" class="colorinput-input"  />
																	<span class="colorinput-color bg_rojo"></span>
																</label>
															</div>
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="checkbox" value="lima" class="colorinput-input"  />
																	<span class="colorinput-color bg_lima"></span>
																</label>
															</div>
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="checkbox" value="azul" class="colorinput-input"  />
																	<span class="colorinput-color bg_azul"></span>
																</label>
															</div>
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="checkbox" value="amarillo" class="colorinput-input"  />
																	<span class="colorinput-color bg_amarillo"></span>
																</label>
															</div>
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="checkbox" value="verde" class="colorinput-input"  />
																	<span class="colorinput-color bg_verde"></span>
																</label>
															</div>
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="checkbox" value="verdeClaro" class="colorinput-input"  />
																	<span class="colorinput-color bg_verdeClaro"></span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="form-group">
														<label>Seleccionar Talla</label>
														<select multiple="multiple" class="multi-select">
															<option value="XS">XS</option>
															<option value="S">S</option>
															<option value="M">M</option>
															<option value="L">L</option>
															<option value="XL">XL</option>
														</select>
													</div>
												</div>
											</div>

											<div class="row my-5 text-center">
												<button class="btn btn-success mx-auto">Guardar</button>
											</div>

										</div>
									</div>
								</div> -->

					</div>
@endsection
@section('js')
<!-- File uploads js -->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileuploads.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileuploads-demo.js')}}"></script>
<!--Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!-- Timepicker js -->
<script src="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
<script src="{{URL::asset('assets/plugins/time-picker/toggles.min.js')}}"></script>
<!-- Datepicker js -->
<script src="{{URL::asset('assets/plugins/date-picker/date-picker.js')}}"></script>
<script src="{{URL::asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
<script src="{{URL::asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>
<!--MutipleSelect js-->
<script src="{{URL::asset('assets/plugins/multipleselect/multiple-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/multipleselect/multi-select.js')}}"></script>
<!-- Elements js-->
<script src="{{URL::asset('assets/js/elements.js')}}"></script>
@endsection