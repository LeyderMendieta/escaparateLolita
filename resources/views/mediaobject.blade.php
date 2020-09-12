@extends('layouts.master')
@section('css')
<!-- Custom scroll bar css-->
<link href="{{URL::asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />
<!-- Prism css -->
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Mediaobject</h1>
							<div class="mr-auto">
								<div class="input-group">
									<a  class="btn btn-primary btn-icon text-white ml-2"  id="daterange-btn" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Calendar">
										<span>
											<i class="fe fe-calendar"></i>
										</span>
									</a>
									<a href="#" class="btn btn-secondary btn-icon ml-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Rating">
										<span>
											<i class="fe fe-star"></i>
										</span>
									</a>
									<a href="#" class="btn btn-success btn-icon ml-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Email">
										<span>
											<i class="fe fe-mail"></i>
										</span>
									</a>
									<a href="#" class="btn btn-warning btn-icon ml-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Chat">
										<span>
											<i class="fe fe-message-square"></i>
										</span>
									</a>
									<a href="#" class="btn btn-info btn-icon ml-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Add New">
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
						<!-- Row -->
						<div class="row">
							<div class="col-12">
								<div class="card Relatedpost nested-media">
									<div class="card-header">
										<div>
											<h4 class="card-title">Default Mediaobject</h4>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fe fe-more-horizontal fs-20"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-left" role="menu">
												<li><a href="#">View<i class="fe fe-eye ml-2"></i></a></li>
												<li><a href="#">Add<i class="fe fe-plus-circle ml-2"></i></a></li>
												<li><a href="#">Remove<i class="fe fe-trash-2 ml-2"></i></a></li>
												<li><a href="#">Download<i class="fe fe-download-cloud ml-2"></i></a></li>
												<li><a href="#">More<i class="fe fe-settings ml-2"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="media media-lg mt-0">
												<img class="ml-3" src="{{URL::asset('assets/images/photos/media1.jpg')}}" alt="Generic placeholder image">
												<div class="media-body">
													<h5 class="mt-0">Media heading</h5>
													Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="mediaobj1"><pre><code class="language-markup"><script type="html-demo/script"><div class="media media-lg mt-0">
	<img class="ml-3" src="../../assets/images/photos/media1.jpg" alt="Generic placeholder image">
	<div class="media-body">
		<h5 class="mt-0">Media heading</h5>
		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#mediaobj1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

                        <!-- Row -->
						<div class="row">
							<div class="col-12">
								<div class="card Relatedpost nested-media overflow-hidden">
									<div class="card-header">
										<div>
											<h4 class="card-title">Nesting Mediaobject</h4>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fe fe-more-horizontal fs-20"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-left" role="menu">
												<li><a href="#">View<i class="fe fe-eye ml-2"></i></a></li>
												<li><a href="#">Add<i class="fe fe-plus-circle ml-2"></i></a></li>
												<li><a href="#">Remove<i class="fe fe-trash-2 ml-2"></i></a></li>
												<li><a href="#">Download<i class="fe fe-download-cloud ml-2"></i></a></li>
												<li><a href="#">More<i class="fe fe-settings ml-2"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="card-body overflow-hidden">
										<div class="example">
											<div class="media media-lg mt-0">
												<img class="ml-3" src="{{URL::asset('assets/images/photos/media2.jpg')}}" alt="Generic placeholder image">
												<div class="media-body overflow-hidden">
													<h5 class="mt-0">Media heading</h5>
													Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
													<div class="media media-lg mt-3">
														<img class="ml-3" src="{{URL::asset('assets/images/photos/media3.jpg')}}" alt="Generic placeholder image">
														<div class="media-body overflow-hidden">
															<h5 class="mt-0">Media heading</h5>
															Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
														</div>
													</div>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="mediaobj2"><pre><code class="language-markup"><script type="html-demo/script"><div class="media media-lg mt-0">
	<img class="ml-3" src="../../assets/images/photos/media2.jpg" alt="Generic placeholder image">
	<div class="media-body overflow-hidden">
		<h5 class="mt-0">Media heading</h5>
		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
		<div class="media media-lg mt-3">
			<img class="ml-3" src="../../assets/images/photos/media3.jpg" alt="Generic placeholder image">
			<div class="media-body overflow-hidden">
				<h5 class="mt-0">Media heading</h5>
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#mediaobj2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

                        <!-- Row -->
						<div class="row">
							<div class="col-12">
								<div class="card Relatedpost nested-media">
									<div class="card-header">
										<div>
											<h4 class="card-title">List Mediaobject</h4>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fe fe-more-horizontal fs-20"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-left" role="menu">
												<li><a href="#">View<i class="fe fe-eye ml-2"></i></a></li>
												<li><a href="#">Add<i class="fe fe-plus-circle ml-2"></i></a></li>
												<li><a href="#">Remove<i class="fe fe-trash-2 ml-2"></i></a></li>
												<li><a href="#">Download<i class="fe fe-download-cloud ml-2"></i></a></li>
												<li><a href="#">More<i class="fe fe-settings ml-2"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="example">
											<ul class="list-unstyled">
												<li class="media media-lg mt-0">
													<img class="ml-3" src="{{URL::asset('assets/images/photos/media4.jpg')}}" alt="Generic placeholder image">
													<div class="media-body">
														<h5 class="mt-0 mb-1">Media heading 01</h5>
														Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
													</div>
												</li>
												<li class="media media-lg my-4">
													<img class="ml-3" src="{{URL::asset('assets/images/photos/media5.jpg')}}" alt="Generic placeholder image">
													<div class="media-body">
														<h5 class="mt-0 mb-1">Media heading 02</h5>
														Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
													</div>
												</li>
												<li class="media media-lg">
													<img class="ml-3" src="{{URL::asset('assets/images/photos/media1.jpg')}}" alt="Generic placeholder image">
													<div class="media-body">
														<h5 class="mt-0 mb-1">Media heading 03</h5>
														Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
													</div>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="mediaobj3"><pre><code class="language-markup"><script type="html-demo/script"><ul class="list-unstyled">
	<li class="media media-lg mt-0">
		<img class="ml-3" src="../../assets/images/photos/media4.jpg" alt="Generic placeholder image">
		<div class="media-body">
			<h5 class="mt-0 mb-1">Media heading 01</h5>
			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
		</div>
	</li>
	<li class="media media-lg my-4">
		<img class="ml-3" src="../../assets/images/photos/media5.jpg" alt="Generic placeholder image">
		<div class="media-body">
			<h5 class="mt-0 mb-1">Media heading 02</h5>
			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
		</div>
	</li>
	<li class="media media-lg">
		<img class="ml-3" src="../../assets/images/photos/media1.jpg" alt="Generic placeholder image">
		<div class="media-body">
			<h5 class="mt-0 mb-1">Media heading 03</h5>
			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
		</div>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#mediaobj3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

                        <!-- Row -->
						<div class="row">
							<div class="col-12">
								<div class="card Relatedpost nested-media">
									<div class="card-header">
										<div>
											<h4 class="card-title">Alignments Mediaobject</h4>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fe fe-more-horizontal fs-20"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-left" role="menu">
												<li><a href="#">View<i class="fe fe-eye ml-2"></i></a></li>
												<li><a href="#">Add<i class="fe fe-plus-circle ml-2"></i></a></li>
												<li><a href="#">Remove<i class="fe fe-trash-2 ml-2"></i></a></li>
												<li><a href="#">Download<i class="fe fe-download-cloud ml-2"></i></a></li>
												<li><a href="#">More<i class="fe fe-settings ml-2"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="media media-lg mt-0">
												<img class="align-self-start ml-3" src="{{URL::asset('assets/images/photos/media2.jpg')}}" alt="Generic placeholder image">
												<div class="media-body">
													<h5 class="mt-0">Top-aligned media</h5>
													<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.</p>
													<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
											<div class="media media-lg">
												<img class="align-self-center ml-3" src="{{URL::asset('assets/images/photos/media3.jpg')}}" alt="Generic placeholder image">
												<div class="media-body">
													<h5 class="mt-0">Center-aligned media</h5>
													<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.</p>
													<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
											<div class="media media-lg">
												<img class="align-self-end ml-3" src="{{URL::asset('assets/images/photos/media4.jpg')}}" alt="Generic placeholder image">
												<div class="media-body">
													<h5 class="mt-0">Bottom-aligned media</h5>
													<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.</p>
													<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="mediaobj4"><pre><code class="language-markup"><script type="html-demo/script"><div class="media media-lg mt-0">
	<img class="align-self-start ml-3" src="../../assets/images/photos/media2.jpg" alt="Generic placeholder image">
	<div class="media-body">
		<h5 class="mt-0">Top-aligned media</h5>
		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	</div>
</div>
<div class="media media-lg">
	<img class="align-self-center ml-3" src="../../assets/images/photos/media3.jpg" alt="Generic placeholder image">
	<div class="media-body">
		<h5 class="mt-0">Center-aligned media</h5>
		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	</div>
</div>
<div class="media media-lg">
	<img class="align-self-end ml-3" src="../../assets/images/photos/media4.jpg" alt="Generic placeholder image">
	<div class="media-body">
		<h5 class="mt-0">Bottom-aligned media</h5>
		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
		<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#mediaobj4"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!-- Row -->

                        <!-- Row -->
						<div class="row">
							<div class="col-12">
								<div class="card Relatedpost nested-media ">
									<div class="card-header">
										<div>
											<h4 class="card-title">Order  Mediaobject</h4>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fe fe-more-horizontal fs-20"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-left" role="menu">
												<li><a href="#">View<i class="fe fe-eye ml-2"></i></a></li>
												<li><a href="#">Add<i class="fe fe-plus-circle ml-2"></i></a></li>
												<li><a href="#">Remove<i class="fe fe-trash-2 ml-2"></i></a></li>
												<li><a href="#">Download<i class="fe fe-download-cloud ml-2"></i></a></li>
												<li><a href="#">More<i class="fe fe-settings ml-2"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="example">
											<div class="media media-lg mt-0">
												<div class="media-body mt-0">
													<h5 class="mt-0 mb-4">Media object</h5>
													Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
												</div>
												<img class="ml-2 mt-3 mb-3" src="{{URL::asset('assets/images/photos/media5.jpg')}}" alt="Generic placeholder image">
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="mediaobj5"><pre><code class="language-markup"><script type="html-demo/script"><div class="media media-lg mt-0">
	<div class="media-body mt-0">
		<h5 class="mt-0 mb-4">Media object</h5>
		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
	</div>
	<img class="ml-2 mt-3 mb-3" src="../../assets/images/photos/media5.jpg" alt="Generic placeholder image">
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#mediaobj5"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
<!-- Custom scroll bar js-->
<script src="{{URL::asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Clipboard js -->
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Prism js -->
<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection