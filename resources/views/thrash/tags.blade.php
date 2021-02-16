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
							<h1 class="page-title">Tags</h1>
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
						<!-- Row -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Default tag</h3>
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
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag">First tag</span>
													<span class="tag">Second tag</span>
													<span class="tag">Third tag</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tags1"><pre><code class="language-markup"><script type="html-demo/script"><div class="tags">
	<span class="tag">First tag</span>
	<span class="tag">Second tag</span>
	<span class="tag">Third tag</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tags1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Link tag</h3>
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
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<a href="#" class="tag">First tag</a>
													<a href="#" class="tag">Second tag</a>
													<a href="#" class="tag">Third tag</a>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tags2"><pre><code class="language-markup"><script type="html-demo/script"><div class="tags">
	<a href="#" class="tag">First tag</a>
	<a href="#" class="tag">Second tag</a>
	<a href="#" class="tag">Third tag</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tags2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Rounded tag</h3>
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
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag tag-rounded">First tag</span>
													<span class="tag tag-rounded">Second tag</span>
													<span class="tag tag-rounded">Third tag</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tags3"><pre><code class="language-markup"><script type="html-demo/script"><div class="tags">
	<span class="tag tag-rounded">First tag</span>
	<span class="tag tag-rounded">Second tag</span>
	<span class="tag tag-rounded">Third tag</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tags3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Color tag</h3>
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
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag tag-blue">Blue tag</span>
													<span class="tag tag-azure">Azure tag</span>
													<span class="tag tag-indigo">Indigo tag</span>
													<span class="tag tag-purple">Purple tag</span>
													<span class="tag tag-pink">Pink tag</span>
													<span class="tag tag-red">Red tag</span>
													<span class="tag tag-orange">Orange tag</span>
													<span class="tag tag-yellow">Yellow tag</span>
													<span class="tag tag-lime">Lime tag</span>
													<span class="tag tag-green">Green tag</span>
													<span class="tag tag-teal">Teal tag</span>
													<span class="tag tag-cyan">Cyan tag</span>
													<span class="tag tag-gray">Gray tag</span>
													<span class="tag tag-gray-dark">Dark gray tag</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tags4"><pre><code class="language-markup"><script type="html-demo/script"><div class="tags">
	<span class="tag tag-blue">Blue tag</span>
	<span class="tag tag-azure">Azure tag</span>
	<span class="tag tag-indigo">Indigo tag</span>
	<span class="tag tag-purple">Purple tag</span>
	<span class="tag tag-pink">Pink tag</span>
	<span class="tag tag-red">Red tag</span>
	<span class="tag tag-orange">Orange tag</span>
	<span class="tag tag-yellow">Yellow tag</span>
	<span class="tag tag-lime">Lime tag</span>
	<span class="tag tag-green">Green tag</span>
	<span class="tag tag-teal">Teal tag</span>
	<span class="tag tag-cyan">Cyan tag</span>
	<span class="tag tag-gray">Gray tag</span>
	<span class="tag tag-gray-dark">Dark gray tag</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tags4"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">List of tags</h3>
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
										<div class="text-wrap">
											<p>You can create a list of tags with the <code class="highlighter-rouge">.tags</code> container.</p>
											<div class="example">
												<div class="tags">
													<span class="tag">First tag</span>
													<span class="tag">Second tag</span>
													<span class="tag">Third tag</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tags9"><pre><code class="language-markup"><script type="html-demo/script"><div class="tags">
	<span class="tag">First tag</span>
	<span class="tag">Second tag</span>
	<span class="tag">Third tag</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tags9"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
											<p class="mt-4">If the list is very long, it will automatically wrap on multiple lines, while keeping all tags evenly spaced.</p>
											<div class="example">
												<div class="tags">
													<span class="tag">One</span>
													<span class="tag">Two</span>
													<span class="tag">Three</span>
													<span class="tag">Four</span>
													<span class="tag">Five</span>
													<span class="tag">Six</span>
													<span class="tag">Seven</span>
													<span class="tag">Eight</span>
													<span class="tag">Nine</span>
													<span class="tag">Ten</span>
													<span class="tag">Eleven</span>
													<span class="tag">Twelve</span>
													<span class="tag">Thirteen</span>
													<span class="tag">Fourteen</span>
													<span class="tag">Fifteen</span>
													<span class="tag">Sixteen</span>
													<span class="tag">Seventeen</span>
													<span class="tag">Eighteen</span>
													<span class="tag">Nineteen</span>
													<span class="tag">Twenty</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tags5"><pre><code class="language-markup"><script type="html-demo/script"><div class="tags">
	<span class="tag">One</span>
	<span class="tag">Two</span>
	<span class="tag">Three</span>
	<span class="tag">Four</span>
	<span class="tag">Five</span>
	<span class="tag">Six</span>
	<span class="tag">Seven</span>
	<span class="tag">Eight</span>
	<span class="tag">Nine</span>
	<span class="tag">Ten</span>
	<span class="tag">Eleven</span>
	<span class="tag">Twelve</span>
	<span class="tag">Thirteen</span>
	<span class="tag">Fourteen</span>
	<span class="tag">Fifteen</span>
	<span class="tag">Sixteen</span>
	<span class="tag">Seventeen</span>
	<span class="tag">Eighteen</span>
	<span class="tag">Nineteen</span>
	<span class="tag">Twenty</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tags5"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Avatar tag</h3>
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
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag">
														<span class=""><img src="{{URL::asset('assets/images/users/female/6.jpg')}}" class="tag-avatar avatar" alt="img"></span>
														Victoria
													</span>
													<span class="tag">
														<span class=""><img src="{{URL::asset('assets/images/users/male/4.jpg')}}" class="tag-avatar avatar" alt="img"></span>
														Nathan
													</span>
													<span class="tag">
														<span class=""><img src="{{URL::asset('assets/images/users/female/1.jpg')}}" class="tag-avatar avatar" alt="img"></span>
														Alice
													</span>
													<span class="tag">
														<span class=""><img src="{{URL::asset('assets/images/users/female/8.jpg')}}" class="tag-avatar avatar" alt="img"></span>
														Rose
													</span>
													<span class="tag">
														<span class=""><img src="{{URL::asset('assets/images/users/male/6.jpg')}}" class="tag-avatar avatar" alt="img"></span>
														Peter
													</span>
													<span class="tag">
														<span class=""><img src="{{URL::asset('assets/images/users/male/2.jpg')}}" class="tag-avatar avatar" alt="img"></span>
														Wayne
													</span>
													<span class="tag">
														<span class=""><img src="{{URL::asset('assets/images/users/female/7.jpg')}}" class="tag-avatar avatar" alt="img"></span>
														Michelle
													</span>
													<span class="tag">
														<span class=""><img src="{{URL::asset('assets/images/users/female/5.jpg')}}" class="tag-avatar avatar" alt="img"></span>
														Debra
													</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tags6"><pre><code class="language-markup"><script type="html-demo/script"><div class="tags">
	<span class="tag">
		<span class=""><img src="{{URL::asset('assets/images/users/female/6.jpg')}}" class="tag-avatar avatar" alt="img"></span>
		Victoria
	</span>
	<span class="tag">
		<span class=""><img src="{{URL::asset('assets/images/users/male/4.jpg')}}" class="tag-avatar avatar" alt="img"></span>
		Nathan
	</span>
	<span class="tag">
		<span class=""><img src="{{URL::asset('assets/images/users/female/1.jpg')}}" class="tag-avatar avatar" alt="img"></span>
		Alice
	</span>
	<span class="tag">
		<span class=""><img src="{{URL::asset('assets/images/users/female/8.jpg')}}" class="tag-avatar avatar" alt="img"></span>
		Rose
	</span>
	<span class="tag">
		<span class=""><img src="{{URL::asset('assets/images/users/male/6.jpg')}}" class="tag-avatar avatar" alt="img"></span>
		Peter
	</span>
	<span class="tag">
		<span class=""><img src="{{URL::asset('assets/images/users/male/2.jpg')}}" class="tag-avatar avatar" alt="img"></span>
		Wayne
	</span>
	<span class="tag">
		<span class=""><img src="{{URL::asset('assets/images/users/female/7.jpg')}}" class="tag-avatar avatar" alt="img"></span>
		Michelle
	</span>
	<span class="tag">
		<span class=""><img src="{{URL::asset('assets/images/users/female/5.jpg')}}" class="tag-avatar avatar" alt="img"></span>
		Debra
	</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tags6"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Tag remove</h3>
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
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<span class="tag">
														One
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag">
														Two
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag">
														Three
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
													<span class="tag">
														Four
														<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
													</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tags7"><pre><code class="language-markup"><script type="html-demo/script"><div class="tags">
	<span class="tag">
		One
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag">
		Two
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag">
		Three
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag">
		Four
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tags7"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Tag addons</h3>
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
										<div class="text-wrap">
											<div class="example">
												<div class="tags">
													<div class="tag">
														npm
														<a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
													</div>
													<div class="tag tag-danger">
														npm
														<span class="tag-addon"><i class="fe fe-activity"></i></span>
													</div>
													<div class="tag">
														bundle
														<span class="tag-addon tag-success">passing</span>
													</div>
													<span class="tag tag-dark">
														CSS gzip size
														<span class="tag-addon tag-warning">20.9 kB</span>
													</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tags8"><pre><code class="language-markup"><script type="html-demo/script"><div class="tags">
	<div class="tag">
		npm
		<a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
	</div>
	<div class="tag tag-danger">
		npm
		<span class="tag-addon"><i class="fe fe-activity"></i></span>
	</div>
	<div class="tag">
		bundle
		<span class="tag-addon tag-success">passing</span>
	</div>
	<span class="tag tag-dark">
		CSS gzip size
		<span class="tag-addon tag-warning">20.9 kB</span>
	</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tags8"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div><!-- col end -->
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