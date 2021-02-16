@extends('layouts.master')
@section('css')
<!-- Accordion Css -->
<link href="{{URL::asset('assets/plugins/accordion/accordion.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Accordion</h1>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Sample Accordions</h3>
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
										<div id="accordion" class="w-100 ">
											<div class="accor bg-primary br-tl-3 br-tr-3" id="headingOne">
												<h5 class="m-0">
													<a href="#collapseOne" class="text-white" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
													   Accordions #1
													</a>
												</h5>
											</div>
											<div id="collapseOne" class="collapse border show" aria-labelledby="headingOne" data-parent="#accordion">
												<div class="">
													I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful
												</div>
											</div>
											<div class="accor  bg-primary br-tl-3 br-tr-3" id="headingTwo">
												<h5 class="m-0">
													<a href="#collapseTwo" class="collapsed text-white" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
														Accordions #2
													</a>
												</h5>
											</div>
											<div id="collapseTwo" class="collapse border b-b0" aria-labelledby="headingTwo" data-parent="#accordion">
												<div class="">
													sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
												</div>
											</div>
											<div class="accor  bg-primary br-tl-3 br-tr-3" id="headingThree">
												<h5 class="m-0">
													<a href="#collapseThree" class="collapsed text-white" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
														Accordions #3
													</a>
												</h5>
											</div>
											<div id="collapseThree" class="collapse b-b0 border" aria-labelledby="headingThree" data-parent="#accordion">
												<div class="">
													so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Buttons Accordions</h3>
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
										<div class="pb-3">
											<p><a class="btn btn-primary" role="button" data-toggle="collapse"
												  href="#collapseExample" aria-expanded="false"
												  aria-controls="collapseExample"> Button Link </a>
												<button class="btn btn-secondary" type="button" data-toggle="collapse"
														data-target="#collapseExample" aria-expanded="false"
														aria-controls="collapseExample"> Button-target
												</button>
											</p>
											<div class="collapse show" id="collapseExample">
												<div class="well"> "Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
													suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
													Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
													nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"<br>
													Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione  But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. voluptatem sequi nesciunt.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Closed Accordion</h3>
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
										<!-- Accordion begin -->
										<ul class="demo-accordion accordionjs m-0" data-active-index="false">

											<!-- Section 1 -->
											<li>
												<div><h3>Section 1</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>

											<!-- Section 2 -->
											<li>
												<div><h3>Section 2</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>

											<!-- Section 3 -->
											<li>
												<div><h3>Section 3</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Accordion Style 3</h3>
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
										<ul class="demo-accordion accordionjs m-0">
											<li>
												<div><h3>Section 1</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 2</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 3</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
											<li>
												<div><h3>Section 4</h3></div>
												<div>
													<!-- Your text here. For this demo, the content is generated automatically. -->
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Accordion style</h3>
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
										<div class="panel-group1" id="accordion1">
											<div class="panel panel-default mb-4">
												<div class="panel-heading1 ">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false">Section 1</a>
													</h4>
												</div>
												<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
													<div class="panel-body">
														<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading1">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false">Section 2</a>
													</h4>
												</div>
												<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
													<div class="panel-body">
														<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words </p>
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise</p>
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
<!---Accordion js-->
<script src="{{URL::asset('assets/plugins/accordion/accordion.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/accordion/accordions.js')}}"></script>
@endsection