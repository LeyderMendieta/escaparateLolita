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
							<h1 class="page-title">Typography</h1>
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
											<h3 class="card-title">Default Heading Text</h3>
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
										<div class="example">
											<div class="text-wrap">
												<p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
												<h1>h1. Heading</h1>
												<h2>h2. Heading</h2>
												<h3>h3. Heading</h3>
												<h4>h4. Heading</h4>
												<h5>h5. Heading</h5>
												<h6>h6. Heading</h6>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo1"><pre><code class="language-markup"><script type="html-demo/script"><h1>h1. Heading</h1>
<h2>h2. Heading</h2>
<h3>h3. Heading</h3>
<h4>h4. Heading</h4>
<h5>h5. Heading</h5>
<h6>h6. Heading</h6></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Heading with color Text</h3>
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
										<div class="example">
											<div class="text-wrap">
												<p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
												<h1 class="text-primary">h1. Heading</h1>
												<h2  class="text-secondary">h2. Heading</h2>
												<h3  class="text-success">h3. Heading</h3>
												<h4  class="text-danger">h4. Heading</h4>
												<h5  class="text-info">h5. Heading</h5>
												<h6  class="text-warning">h6. Heading</h6>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo2"><pre><code class="language-markup"><script type="html-demo/script"><h1 class="text-primary">h1. Heading</h1>
<h2  class="text-secondary">h2. Heading</h2>
<h3  class="text-success">h3. Heading</h3>
<h4  class="text-danger">h4. Heading</h4>
<h5  class="text-info">h5. Heading</h5>
<h6  class="text-warning">h6. Heading</h6></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Heading-Inverse</h3>
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
										<div class="example">
											<div class="text-wrap">
												<p>Examples using <code>heading-inverse</code> css</p>
												<h1 class="heading-inverse">h1. Heading</h1>
												<h2 class="heading-inverse">h2. Heading</h2>
												<h3 class="heading-inverse">h3. Heading</h3>
												<h4 class="heading-inverse">h4. Heading</h4>
												<h5 class="heading-inverse">h5. Heading</h5>
												<h6 class="heading-inverse">h6. Heading</h6>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo3"><pre><code class="language-markup"><script type="html-demo/script"><h1 class="heading-inverse">h1. Heading</h1>
<h2 class="heading-inverse">h2. Heading</h2>
<h3 class="heading-inverse">h3. Heading</h3>
<h4 class="heading-inverse">h4. Heading</h4>
<h5 class="heading-inverse">h5. Heading</h5>
<h6 class="heading-inverse">h6. Heading</h6></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Heading primary to danger</h3>
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
										<div class="example">
											<div class="text-wrap">
												<p>Examples using <code>heading-primary</code> to <code>heading-danger</code> css</p>
												<h1 class="heading-primary">h1. Heading</h1>
												<h2 class="heading-secondary">h2. Heading</h2>
												<h3 class="heading-success">h3. Heading</h3>
												<h4 class="heading-info">h4. Heading</h4>
												<h5 class="heading-warning">h5. Heading</h5>
												<h6 class="heading-danger">h6. Heading</h6>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo4"><pre><code class="language-markup"><script type="html-demo/script"><h1 class="heading-primary">h1. Heading</h1>
<h2 class="heading-secondary">h2. Heading</h2>
<h3 class="heading-success">h3. Heading</h3>
<h4 class="heading-info">h4. Heading</h4>
<h5 class="heading-warning">h5. Heading</h5>
<h6 class="heading-danger">h6. Heading</h6></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo4"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row-->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Paragraph Text</h3>
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
										<div class="example">
											<div class="text-wrap">
												<p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.</p>
												<p class="lead">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid. The former case isn’t worth discussing here, but the latter requires a closer look.</p>
												<p>You can use the mark tag to <mark>highlight</mark> text.</p>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo5"><pre><code class="language-markup"><script type="html-demo/script"><p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.</p>
<p class="lead">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid. The former case isn’t worth discussing here, but the latter requires a closer look.</p>
<p>You can use the mark tag to <mark>highlight</mark> text.</p></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo5"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
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
											<h3 class="card-title">Text alignment</h3>
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
											<p>Easily realign text to components with text alignment classes.</p>
											<div class="example">
												<p class="text-left">Left aligned text on all viewport sizes.</p>
												<p class="text-center">Center aligned text on all viewport sizes.</p>
												<p class="text-right">Right aligned text on all viewport sizes.</p>
												<p class="text-justify m-0">Both aligned text on all viewport sizes. Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus.</p>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo6"><pre><code class="language-markup"><script type="html-demo/script"><p class="text-left">Left aligned text on all viewport sizes.</p>
<p class="text-center">Center aligned text on all viewport sizes.</p>
<p class="text-right">Right aligned text on all viewport sizes.</p>
<p class="text-justify m-0">Both aligned text on all viewport sizes. Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus.</p>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo6"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Text transform</h3>
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
											<p>Transform text in components with text capitalization classes.</p>
											<div class="example">
												<p class="text-lowercase">Lowercased text.</p>
												<p class="text-uppercase">Uppercased text.</p>
												<p class="text-capitalize m-0">Capitalized text.</p>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo7"><pre><code class="language-markup"><script type="html-demo/script"><p class="text-lowercase">Lowercased text.</p>
<p class="text-uppercase">Uppercased text.</p>
<p class="text-capitalize m-0">Capitalized text.</p></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo7"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Letter spacing</h3>
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
											<p>Utilities for controlling the tracking (letter spacing) of an element.</p>
											<div class="example">
												<p class="tracking-tight">Lorem ipsum dolor sit amet. Tight letter spacing.</p>
												<p class="tracking-normal">Lorem ipsum dolor sit amet. Normal letter spacing.</p>
												<p class="tracking-wide m-0">Lorem ipsum dolor sit amet. Wide letter spacing.</p>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo8"><pre><code class="language-markup"><script type="html-demo/script"><p class="tracking-tight">Lorem ipsum dolor sit amet. Tight letter spacing.</p>
<p class="tracking-normal">Lorem ipsum dolor sit amet. Normal letter spacing.</p>
<p class="tracking-wide m-0">Lorem ipsum dolor sit amet. Wide letter spacing.</p></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo8"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Line Height</h3>
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
											<p>Utilities for controlling the leading (line height) of an element.</p>
											<div class="example">
												<p class="leading-none">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
												<p class="leading-tight">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
												<p class="leading-normal">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
												<p class="leading-loose m-0">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo9"><pre><code class="language-markup"><script type="html-demo/script"><p class="leading-none">Lorem ipsum dolor sit amet.<br />
	Dolor sit amet.
</p>
<p class="leading-tight">Lorem ipsum dolor sit amet.<br />
	Dolor sit amet.
</p>
<p class="leading-normal">Lorem ipsum dolor sit amet.<br />
	Dolor sit amet.
</p>
<p class="leading-loose m-0">Lorem ipsum dolor sit amet.<br />
	Dolor sit amet.
</p></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo9"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Text-styles</h3>
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
									<div class="card-body pl-5 pr-5">
										<div class="example">
											<p>You can use the mark tag to
												<mark>highlight</mark> text.
											</p>
											<p>
												<del>This line of text is meant to be treated as deleted text.</del>
											</p>
											<p>
												<s>This line of text is meant to be treated as no longer accurate.</s>
											</p>
											<p>
												<ins>This line of text is meant to be treated as an addition to the document.</ins>
											</p>
											<p><u>This line of text will render as underlined</u></p>
											<p>
												<small>This line of text is meant to be treated as fine print.</small>
											</p>
											<p><strong>This line rendered as bold text.</strong></p>
											<p><em>This line rendered as italicized text.</em></p>
											<p><b>This line rendered as italicized text.</b></p>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="typo10"><pre><code class="language-markup"><script type="html-demo/script"><p>You can use the mark tag to
	<mark>highlight</mark> text.
</p>
<p>
	<del>This line of text is meant to be treated as deleted text.</del>
</p>
<p>
	<s>This line of text is meant to be treated as no longer accurate.</s>
</p>
<p>
	<ins>This line of text is meant to be treated as an addition to the document.</ins>
</p>
<p><u>This line of text will render as underlined</u></p>
<p>
	<small>This line of text is meant to be treated as fine print.</small>
</p>
<p><strong>This line rendered as bold text.</strong></p>
<p><em>This line rendered as italicized text.</em></p>
<p><b>This line rendered as italicized text.</b></p></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#typo10"><i class="ti-clipboard"></i></div>
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