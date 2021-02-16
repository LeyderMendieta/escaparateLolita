@extends('layouts.master')
@section('css')
<!-- WYSIWYG Editor css -->
<link href="{{URL::asset('assets/plugins/wysiwyag/richtext.css')}}" rel="stylesheet" />
<!--Summernote css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/summernote/summernote-bs4.css')}}">
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Form Editor</h1>
							<div class="ml-auto">
								<div class="input-group">
									<a  class="btn btn-primary btn-icon text-white mr-2"  id="daterange-btn" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Calendar">
										<span>
											<i class="fe fe-calendar"></i>
										</span>
									</a>
									<a href="#" class="btn btn-secondary btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Rating">
										<span>
											<i class="fe fe-star"></i>
										</span>
									</a>
									<a href="#" class="btn btn-success btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Email">
										<span>
											<i class="fe fe-mail"></i>
										</span>
									</a>
									<a href="#" class="btn btn-warning btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Chat">
										<span>
											<i class="fe fe-message-square"></i>
										</span>
									</a>
									<a href="#" class="btn btn-info btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Add New">
										<span>
											<i class="fe fe-plus"></i>
										</span>
									</a>
									<a href="#" class="btn btn-danger btn-icon" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Support">
										<span>
											<i class="fe fe-help-circle"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
						<!-- End page-header -->
@endsection
@section('content')
						<!--Row-->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Summernote</h3>
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
										<div id="summernote"></div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!--Row-->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Wysiwing Editor</h3>
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
										<form method="post">
											<textarea id="elm1" name="area">Hello!....</textarea>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

						<!-- Row  -->
						<div class="row row-cards">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">WYSIWYG Editor</h3>
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
										<textarea class="content" name="example"></textarea>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
<!-- WYSIWYG Editor js -->
<script src="{{URL::asset('assets/plugins/wysiwyag/jquery.richtext.js')}}"></script>
<script src="{{URL::asset('assets/plugins/wysiwyag/richText1.js')}}"></script>
<!--Summernote js-->
<script src="{{URL::asset('assets/plugins/summernote/summernote-bs4.js')}}"></script>
<script src="{{URL::asset('assets/js/summernote.js')}}"></script>
<!--ckeditor js-->
<script src="{{URL::asset('assets/plugins/tinymce/tinymce.min.js')}}"></script>
<script src="{{URL::asset('assets/js/formeditor.js')}}"></script>
@endsection