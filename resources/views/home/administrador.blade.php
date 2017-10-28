@extends('layouts.app')

@section('requires')

	<?php

	//require_once(base_path()."/resources/views/inc/...");
	
	?>

@endsection

@section('styles')

@endsection



@section('head_vars')

	<?php
	/*---------------- PHP Custom Scripts ---------

	YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
	E.G. $page_title = "Custom Title" */

	$pagetitle = "Administrador";

	/* ---------------- END PHP Custom Scripts ------------- */

	//include header
	//you can add your custom css in $page_css array.
	//$your_style = 'bootstrap-select.min.css,your_style.css';
	$your_style = 'your_style.css';
	$your_script = '/js/smartwidgets/jarvis.widget.min.js';

	//include left panel (navigation)
	//follow the tree in inc/config.ui.php

	$page_nav = 1;
	$menu="dashboard";
	$submenu1="Administrador";
	//$submenu2='';
	?>

@endsection

@section('content')

<!-- ==========================CONTENT STARTS HERE ========================== -->

	<!-- MAIN CONTENT -->
	<div id="contenido">

		<div id="flash-msg">
            @include('flash::message')
        </div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
			  <h1 class="page-title txt-color-blueDark"><em class="fa-fw fa fa-home"></em> Inicio <span>&gt; Administrador</span></h1>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8"> </div>
		</div>
		<!-- widget grid -->
		<section id="widget-grid" class="">

			<!-- row -->
			<div class="row">
				<article class="col-sm-12">
					<!-- new widget -->
					<div class="jarviswidget" id="wid-id-0" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"

						-->
						<!-- widget div-->
						<div class="no-padding">
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
							</div>
							<!-- end widget edit box -->

                                        
					

						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->

				</article>
			</div>

			<!-- end row -->

			<!-- row -->

			<div class="row">

				<article class="col-sm-12 col-md-12 col-lg-6">

					

					<!-- new widget -->
					<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-3" data-widget-colorbutton="false">

						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"

						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-calendar"></i> </span>
							<h2> Eventos </h2>
							<div class="widget-toolbar">
								<!-- add: non-hidden - to disable auto hide -->
								<div class="btn-group">
									<button class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown">
										Showing <i class="fa fa-caret-down"></i>
									</button>
									<ul class="dropdown-menu js-status-update pull-right">
										<li>
											<a href="javascript:void(0);" id="mt">Month</a>
										</li>
										<li>
											<a href="javascript:void(0);" id="ag">Agenda</a>
										</li>
										<li>
											<a href="javascript:void(0);" id="td">Today</a>
										</li>
									</ul>
								</div>
							</div>
						</header>

						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">

								<input class="form-control" type="text">

							</div>
							<!-- end widget edit box -->

							<div class="widget-body no-padding">
								<!-- content goes here -->
								<div class="widget-body-toolbar">

									<div id="calendar-buttons">

										<div class="btn-group">
											<a href="javascript:void(0)" class="btn btn-default btn-xs" id="btn-prev"><i class="fa fa-chevron-left"></i></a>
											<a href="javascript:void(0)" class="btn btn-default btn-xs" id="btn-next"><i class="fa fa-chevron-right"></i></a>
										</div>
									</div>
								</div>
								<div id="calendar"></div>

								<!-- end content -->
							</div>

						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
					<!-- new widget -->
					<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false" data-widget-fullscreenbutton="false">

						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"

						-->

						<header>
							<span class="widget-icon"> <i class="fa fa-comments txt-color-white"></i> </span>
							<h2> SmartChat </h2>
							<div class="widget-toolbar">
								<!-- add: non-hidden - to disable auto hide -->

								<div class="btn-group">
									<button class="btn dropdown-toggle btn-xs btn-success" data-toggle="dropdown">
										Status <i class="fa fa-caret-down"></i>
									</button>
									<ul class="dropdown-menu pull-right js-status-update">
										<li>
											<a href="javascript:void(0);"><i class="fa fa-circle txt-color-green"></i> Online</a>
										</li>
										<li>
											<a href="javascript:void(0);"><i class="fa fa-circle txt-color-red"></i> Busy</a>
										</li>
										<li>
											<a href="javascript:void(0);"><i class="fa fa-circle txt-color-orange"></i> Away</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="javascript:void(0);"><i class="fa fa-power-off"></i> Log Off</a>
										</li>
									</ul>
								</div>
							</div>
						</header>

						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<div>
									<label>Title:</label>
									<input type="text" />
								</div>
							</div>
							<!-- end widget edit box -->

							<div class="widget-body widget-hide-overflow no-padding">
								<!-- content goes here -->

								<!-- CHAT CONTAINER -->
								<div id="chat-container">
									<span class="chat-list-open-close"><i class="fa fa-user"></i><b>!</b></span>

									<div class="chat-list-body custom-scroll">
										<ul id="chat-users">
											<li>
												<a href="javascript:void(0);"><img src="{{URL::asset('img/avatars/5.png')}}" alt="">Robin Berry <span class="badge badge-inverse">23</span><span class="state"><i class="fa fa-circle txt-color-green pull-right"></i></span></a>
											</li>
											<li>
												<a href="javascript:void(0);"><img src="{{URL::asset('img/avatars/male.png')}}" alt="">Mark Zeukartech <span class="state"><i class="last-online pull-right">2hrs</i></span></a>
											</li>
											<li>
												<a href="javascript:void(0);"><img src="{{URL::asset('img/avatars/male.png')}}" alt="">Belmain Dolson <span class="state"><i class="last-online pull-right">45m</i></span></a>
											</li>
											<li>
												<a href="javascript:void(0);"><img src="{{URL::asset('img/avatars/male.png')}}" alt="">Galvitch Drewbery <span class="state"><i class="fa fa-circle txt-color-green pull-right"></i></span></a>
											</li>
											<li>
												<a href="javascript:void(0);"><img src="{{URL::asset('img/avatars/male.png')}}" alt="">Sadi Orlaf <span class="state"><i class="fa fa-circle txt-color-green pull-right"></i></span></a>
											</li>
											<li>
												<a href="javascript:void(0);"><img src="{{URL::asset('img/avatars/male.png')}}" alt="">Markus <span class="state"><i class="last-online pull-right">2m</i></span> </a>
											</li>
											<li>
												<a href="javascript:void(0);"><img src="{{URL::asset('img/avatars/juan.png')}}" alt="">Sunny <span class="state"><i class="last-online pull-right">2m</i></span> </a>
											</li>
											<li>
												<a href="javascript:void(0);"><img src="{{URL::asset('img/avatars/male.png')}}" alt="">Denmark <span class="state"><i class="last-online pull-right">2m</i></span> </a>
											</li>
										</ul>
									</div>
									<div class="chat-list-footer">

										<div class="control-group">

											<form class="smart-form">

												<section>
													<label class="input">
														<input type="text" id="filter-chat-list" placeholder="Filter">
													</label>
												</section>

											</form>

										</div>

									</div>

								</div>

								<!-- CHAT BODY -->
								<div id="chat-body" class="chat-body custom-scroll">
									<ul>
										<li class="message">
											<img src="{{URL::asset('img/avatars/5.png')}}" class="online" alt="">
											<div class="message-text">
												<time>
													2014-01-13
												</time> <a href="javascript:void(0);" class="username">Sadi Orlaf</a> Hey did you meet the new board of director? He's a bit of an geek if you ask me...anyway here is the report you requested. I am off to launch with Lisa and Andrew, you wanna join?
												<p class="chat-file row">
													<b class="pull-left col-sm-6"> <!--<i class="fa fa-spinner fa-spin"></i>--> <i class="fa fa-file"></i> report-2013-demographic-report-annual-earnings.xls </b>
													<span class="col-sm-6 pull-right"> <a href="javascript:void(0);" class="btn btn-xs btn-default">cancel</a> <a href="javascript:void(0);" class="btn btn-xs btn-success">save</a> </span>
												</p>
												<p class="chat-file row">
													<b class="pull-left col-sm-6"> <i class="fa fa-ok txt-color-green"></i> tobacco-report-2012.doc </b>
													<span class="col-sm-6 pull-right"> <a href="javascript:void(0);" class="btn btn-xs btn-primary">open</a> </span>
												</p> </div>
										</li>
										<li class="message">
											<img src="{{URL::asset('img/avatars/juan.png')}}" class="online" alt="">
											<div class="message-text">
												<time>
													2014-01-13
												</time> <a href="javascript:void(0);" class="username">John Doe</a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> 
											</div>
										</li>
									</ul>

								</div>

								<!-- CHAT FOOTER -->
								<div class="chat-footer">

									<!-- CHAT TEXTAREA -->
									<div class="textarea-div">

										<div class="typearea">
											<textarea placeholder="Write a reply..." id="textarea-expand" class="custom-scroll"></textarea>
										</div>

									</div>

									<!-- CHAT REPLY/SEND -->
									<span class="textarea-controls">
										<button class="btn btn-sm btn-primary pull-right">
											Reply
										</button> <span class="pull-right smart-form" style="margin-top: 3px; margin-right: 10px;"> <label class="checkbox pull-right">
												<input type="checkbox" name="subscription" id="subscription">
												<i></i>Press <strong> ENTER </strong> to send </label> </span> <a href="javascript:void(0);" class="pull-left"><i class="fa fa-camera fa-fw fa-lg"></i></a> </span>

								</div>

								<!-- end content -->
							</div>

						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->
				</article>

				<article class="col-sm-12 col-md-12 col-lg-6">

					<!-- new widget -->
					<div class="jarviswidget" id="wid-id-2" data-widget-colorbutton="false" data-widget-editbutton="false">

						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"

						-->

						<header>
							<span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
							<h2>Mapa interchange</h2>
							<div class="widget-toolbar hidden-mobile">
								<span class="onoffswitch-title"><i class="fa fa-location-arrow"></i> En vivo</span>
								<span class="onoffswitch">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" checked="checked" id="myonoffswitch">
									<label class="onoffswitch-label" for="myonoffswitch"> <span class="onoffswitch-inner" data-swchon-text="YES" data-swchoff-text="NO"></span> <span class="onoffswitch-switch"></span> </label> </span>
							</div>
						</header>

						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<div>
									<label>Title:</label>
									<input type="text" />
								</div>
							</div>
							<!-- end widget edit box -->

							<div class="widget-body no-padding">
								<!-- content goes here -->

								<div id="vector-map" class="vector-map"></div>
								<div id="heat-fill">
									<span class="fill-a">0</span>

									<span class="fill-b">5,000</span>
								</div>

								<table class="table table-striped table-hover table-condensed">
									<thead>
										<tr>
											<th>Country</th>
											<th>Visits</th>
											<th class="text-align-center">User Activity</th>
											<th class="text-align-center hidden-xs">Online</th>
											<th class="text-align-center">Demographic</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><a href="javascript:void(0);">USA</a></td>
											<td>4,977</td>
											<td class="text-align-center">
											<div class="sparkline txt-color-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
												2700, 3631, 2471, 1300, 1877, 2500, 2577, 2700, 3631, 2471, 2000, 2100, 3000
											</div></td>
											<td class="text-align-center hidden-xs">143</td>
											<td class="text-align-center">
											<div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
												17,83
											</div>
											<div class="btn-group display-inline pull-right text-align-left hidden-tablet">
												<button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-cog fa-lg"></i>
												</button>
												<ul class="dropdown-menu dropdown-menu-xs pull-right">
													<li>
														<a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
													</li>
													<li>
														<a href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
													</li>
													<li class="divider"></li>
													<li class="text-align-center">
														<a href="javascript:void(0);">Cancel</a>
													</li>
												</ul>
											</div></td>
										</tr>
										<tr>
											<td><a href="javascript:void(0);">Colombia</a></td>
											<td>4,873</td>
											<td class="text-align-center">
											<div class="sparkline txt-color-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
												1000, 1100, 3030, 1300, -1877, -2500, -2577, -2700, 3631, 2471, 4700, 1631, 2471
											</div></td>
											<td class="text-align-center hidden-xs">247</td>
											<td class="text-align-center">
											<div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
												22,88
											</div>
											<div class="btn-group display-inline pull-right text-align-left hidden-tablet">
												<button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-cog fa-lg"></i>
												</button>
												<ul class="dropdown-menu dropdown-menu-xs pull-right">
													<li>
														<a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
													</li>
													<li>
														<a href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
													</li>
													<li class="divider"></li>
													<li class="text-align-center">
														<a href="javascript:void(0);">Cancel</a>
													</li>
												</ul>
											</div></td>
										</tr>
										<tr>
											<td><a href="javascript:void(0);">India</a></td>
											<td>3,671</td>
											<td class="text-align-center">
											<div class="sparkline txt-color-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
												3631, 1471, 2400, 3631, 471, 1300, 1177, 2500, 2577, 3000, 4100, 3000, 7700
											</div></td>
											<td class="text-align-center hidden-xs">373</td>
											<td class="text-align-center">
											<div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
												10,90
											</div>
											<div class="btn-group display-inline pull-right text-align-left hidden-tablet">
												<button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-cog fa-lg"></i>
												</button>
												<ul class="dropdown-menu dropdown-menu-xs pull-right">
													<li>
														<a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
													</li>
													<li>
														<a href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
													</li>
													<li class="divider"></li>
													<li class="text-align-center">
														<a href="javascript:void(0);">Cancel</a>
													</li>
												</ul>
											</div></td>
										</tr>
										<tr>
											<td><a href="javascript:void(0);">Brazil</a></td>
											<td>2,476</td>
											<td class="text-align-center">
											<div class="sparkline txt-color-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
												2700, 1877, 2500, 2577, 2000, 3631, 2471, -2700, -3631, 2471, 1300, 2100, 3000,
											</div></td>
											<td class="text-align-center hidden-xs ">741</td>
											<td class="text-align-center">
											<div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
												34,66
											</div>
											<div class="btn-group display-inline pull-right text-align-left hidden-tablet">
												<button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-cog fa-lg"></i>
												</button>
												<ul class="dropdown-menu dropdown-menu-xs pull-right">
													<li>
														<a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
													</li>
													<li>
														<a href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
													</li>
													<li class="divider"></li>
													<li class="text-align-center">
														<a href="javascript:void(0);">Cancel</a>
													</li>
												</ul>
											</div></td>
										</tr>
										<tr>
											<td><a href="javascript:void(0);">Turkey</a></td>
											<td>1,476</td>
											<td class="text-align-center">
											<div class="sparkline txt-color-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
												1300, 1877, 2500, 2577, 2000, 2100, 3000, -2471, -2700, -3631, -2471, 2700, 3631
											</div></td>
											<td class="text-align-center hidden-xs">123</td>
											<td class="text-align-center">
											<div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
												75,25
											</div>
											<div class="btn-group display-inline pull-right text-align-left hidden-tablet">
												<button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-cog fa-lg"></i>
												</button>
												<ul class="dropdown-menu dropdown-menu-xs pull-right">
													<li>
														<a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
													</li>
													<li>
														<a href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
													</li>
													<li class="divider"></li>
													<li class="text-align-center">
														<a href="javascript:void(0);">Cancel</a>
													</li>
												</ul>
											</div></td>
										</tr>
										<tr>
											<td><a href="javascript:void(0);">Canada</a></td>
											<td>146</td>
											<td class="text-align-center">
											<div class="sparkline txt-color-orange text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
												5, 34, 10, 1, 4, 6, -9, -1, 0, 0, 5, 6, 7
											</div></td>
											<td class="text-align-center hidden-xs">23</td>
											<td class="text-align-center">
											<div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
												50,50
											</div>
											<div class="btn-group display-inline pull-right text-align-left hidden-tablet">
												<button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-cog fa-lg"></i>
												</button>
												<ul class="dropdown-menu dropdown-menu-xs pull-right">
													<li>
														<a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
													</li>
													<li>
														<a href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
													</li>
													<li class="divider"></li>
													<li class="text-align-center">
														<a href="javascript:void(0);">Cancel</a>
													</li>
												</ul>
											</div></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan=5>
											<ul class="pagination pagination-xs no-margin">
												<li class="prev disabled">
													<a href="javascript:void(0);">Previous</a>
												</li>
												<li class="active">
													<a href="javascript:void(0);">1</a>
												</li>
												<li>
													<a href="javascript:void(0);">2</a>
												</li>
												<li>
													<a href="javascript:void(0);">3</a>
												</li>
												<li class="next">
													<a href="javascript:void(0);">Next</a>
												</li>
											</ul></td>
										</tr>
									</tfoot>
								</table>

								<!-- end content -->

							</div>

						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->

					<!-- new widget -->
					<div class="jarviswidget jarviswidget-color-blue" id="wid-id-4" data-widget-editbutton="false" data-widget-colorbutton="false">

						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"

						-->

						<header>
							<span class="widget-icon"> <i class="fa fa-check txt-color-white"></i> </span>
							<h2> ToDo's </h2>
							<!-- <div class="widget-toolbar">
							add: non-hidden - to disable auto hide

							</div>-->
						</header>

						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<div>
									<label>Title:</label>
									<input type="text" />
								</div>
							</div>
							<!-- end widget edit box -->

							<div class="widget-body no-padding smart-form">
								<!-- content goes here -->
								<h5 class="todo-group-title"><i class="fa fa-warning"></i> Critical Tasks (<small class="num-of-tasks">1</small>)</h5>
								<ul id="sortable1" class="todo">
									<li>
										<span class="handle"> <label class="checkbox">
												<input type="checkbox" name="checkbox-inline">
												<i></i> </label> </span>
										<p>
											<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
											<span class="date">Jan 1, 2014</span>
										</p>
									</li>
								</ul>
								<h5 class="todo-group-title"><i class="fa fa-exclamation"></i> Important Tasks (<small class="num-of-tasks">3</small>)</h5>
								<ul id="sortable2" class="todo">
									<li>
										<span class="handle"> <label class="checkbox">
												<input type="checkbox" name="checkbox-inline">
												<i></i> </label> </span>
										<p>
											<strong>Ticket #1347</strong> - Inbox email is being sent twice <small>(bug fix)</small> [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="date">Nov 22, 2013</span>
										</p>
									</li>
									<li>
										<span class="handle"> <label class="checkbox">
												<input type="checkbox" name="checkbox-inline">
												<i></i> </label> </span>
										<p>
											<strong>Ticket #1314</strong> - Call customer support re: Issue <a href="javascript:void(0);" class="font-xs">#6134</a><small>(code review)</small>
											<span class="date">Nov 22, 2013</span>
										</p>
									</li>
									<li>
										<span class="handle"> <label class="checkbox">
												<input type="checkbox" name="checkbox-inline">
												<i></i> </label> </span>
										<p>
											<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
											<span class="date">Jan 1, 2014</span>
										</p>
									</li>
								</ul>

								<h5 class="todo-group-title"><i class="fa fa-check"></i> Completed Tasks (<small class="num-of-tasks">1</small>)</h5>
								<ul id="sortable3" class="todo">
									<li class="complete">
										<span class="handle" style="display:none"> <label class="checkbox state-disabled">
												<input type="checkbox" name="checkbox-inline" checked="checked" disabled="disabled">
												<i></i> </label> </span>
										<p>
											<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
											<span class="date">Jan 1, 2014</span>
										</p>
									</li>
								</ul>

								<!-- end content -->
							</div>

						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->

				</article>

			</div>

			<!-- end row -->

		</section>
		<!-- end widget grid -->

	</div>
	<!-- END MAIN CONTENT -->


<!-- ==========================CONTENT ENDS HERE ========================== -->


@endsection



@section('scripts')
	<!-- PAGE RELATED PLUGIN(S) 
	<script src="..."></script>-->
	<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->


	<!-- <script src="{{URL::asset('/js/plugin/flot/jquery.flot.cust.min.js')}}"></script> -->
	<!-- <script src="{{URL::asset('/js/plugin/flot/jquery.flot.resize.min.js')}}"></script> -->
	<!-- <script src="{{URL::asset('/js/plugin/flot/jquery.flot.time.min.js')}}"></script> -->
	<!-- <script src="{{URL::asset('/js/plugin/flot/jquery.flot.tooltip.min.js')}}"></script> -->

	<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
	{{ Html::script('/js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js') }}
	{{ Html::script('/js/plugin/vectormap/jquery-jvectormap-world-mill-en.js') }}


	{{ Html::script('/js/plugin/sparkline/jquery.sparkline.min.js') }}

	<!-- Full Calendar -->
	{{ Html::script('/js/plugin/moment/moment.min.js') }}
	{{ Html::script('/js/plugin/fullcalendar/jquery.fullcalendar.min.js') }}

	<script type="text/javascript">

		$(document).ready(function() {

			/*
			 * PAGE RELATED SCRIPTS
			 */

			$(".js-status-update a").click(function() {
				var selText = $(this).text();
				var $this = $(this);
				$this.parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
				$this.parents('.dropdown-menu').find('li').removeClass('active');
				$this.parent().addClass('active');
			});

			/*
			* TODO: add a way to add more todo's to list
			*/

			// initialize sortable
			$(function() {
				$("#sortable1, #sortable2").sortable({
					handle : '.handle',
					connectWith : ".todo",
					update : countTasks
				}).disableSelection();
			});

			// check and uncheck
			$('.todo .checkbox > input[type="checkbox"]').click(function() {
				var $this = $(this).parent().parent().parent();

				if ($(this).prop('checked')) {
					$this.addClass("complete");

					// remove this if you want to undo a check list once checked
					//$(this).attr("disabled", true);
					$(this).parent().hide();

					// once clicked - add class, copy to memory then remove and add to sortable3
					$this.slideUp(500, function() {
						$this.clone().prependTo("#sortable3").effect("highlight", {}, 800);
						$this.remove();
						countTasks();
					});
				} else {
					// insert undo code here...
				}

			})
			// count tasks
			function countTasks() {

				$('.todo-group-title').each(function() {
					var $this = $(this);
					$this.find(".num-of-tasks").text($this.next().find("li").size());
				});

			}


			data_array = {
				"US" : 4977,
				"CO" : 4873,
				"IN" : 3671,
				"BR" : 2476,
				"TR" : 1476,
				"CN" : 146,
				"CA" : 134,
				"BD" : 100
			};

			$('#vector-map').vectorMap({
				map : 'world_mill_en',
				backgroundColor : '#fff',
				regionStyle : {
					initial : {
						fill : '#c4c4c4'
					},
					hover : {
						"fill-opacity" : 1
					}
				},
				series : {
					regions : [{
						values : data_array,
						scale : ['#85a8b6', '#4d7686'],
						normalizeFunction : 'polynomial'
					}]
				},
				onRegionLabelShow : function(e, el, code) {
					if ( typeof data_array[code] == 'undefined') {
						e.preventDefault();
					} else {
						var countrylbl = data_array[code];
						el.html(el.html() + ': ' + countrylbl + ' visits');
					}
				}
			});

			/*
			 * FULL CALENDAR JS
			 */

			if ($("#calendar").length) {
				var date = new Date();
				var d = date.getDate();
				var m = date.getMonth();
				var y = date.getFullYear();

				var calendar = $('#calendar').fullCalendar({

					editable : true,
					draggable : true,
					selectable : false,
					selectHelper : true,
					unselectAuto : false,
					disableResizing : false,
					height: "auto",

					header : {
						left : 'title', //,today
						center : 'prev, next, today',
						right : 'month, agendaWeek, agenDay' //month, agendaDay,
					},

					select : function(start, end, allDay) {
						var title = prompt('Event Title:');
						if (title) {
							calendar.fullCalendar('renderEvent', {
								title : title,
								start : start,
								end : end,
								allDay : allDay
							}, true // make the event "stick"
							);
						}
						calendar.fullCalendar('unselect');
					},

					events : [{
						title : 'All Day Event',
						start : new Date(y, m, 1),
						description : 'long description',
						className : ["event", "bg-color-greenLight"],
						icon : 'fa-check'
					}, {
						title : 'Long Event',
						start : new Date(y, m, d - 5),
						end : new Date(y, m, d - 2),
						className : ["event", "bg-color-red"],
						icon : 'fa-lock'
					}, {
						id : 999,
						title : 'Repeating Event',
						start : new Date(y, m, d - 3, 16, 0),
						allDay : false,
						className : ["event", "bg-color-blue"],
						icon : 'fa-clock-o'
					}, {
						id : 999,
						title : 'Repeating Event',
						start : new Date(y, m, d + 4, 16, 0),
						allDay : false,
						className : ["event", "bg-color-blue"],
						icon : 'fa-clock-o'
					}, {
						title : 'Meeting',
						start : new Date(y, m, d, 10, 30),
						allDay : false,
						className : ["event", "bg-color-darken"]
					}, {
						title : 'Lunch',
						start : new Date(y, m, d, 12, 0),
						end : new Date(y, m, d, 14, 0),
						allDay : false,
						className : ["event", "bg-color-darken"]
					}, {
						title : 'Birthday Party',
						start : new Date(y, m, d + 1, 19, 0),
						end : new Date(y, m, d + 1, 22, 30),
						allDay : false,
						className : ["event", "bg-color-darken"]
					}, {
						title : 'Smartadmin Open Day',
						start : new Date(y, m, 28),
						end : new Date(y, m, 29),
						className : ["event", "bg-color-darken"]
					}],


					eventRender : function(event, element, icon) {
						if (!event.description == "") {
							element.find('.fc-title').append("<br/><span class='ultra-light'>" + event.description + "</span>");
						}
						if (!event.icon == "") {
							element.find('.fc-title').append("<i class='air air-top-right fa " + event.icon + " '></i>");
						}
					}
				});

			};

			/* hide default buttons */
			$('.fc-toolbar .fc-right, .fc-toolbar .fc-center').hide();

			// calendar prev
			$('#calendar-buttons #btn-prev').click(function() {
				$('.fc-prev-button').click();
				return false;
			});

			// calendar next
			$('#calendar-buttons #btn-next').click(function() {
				$('.fc-next-button').click();
				return false;
			});

			// calendar today
			$('#calendar-buttons #btn-today').click(function() {
				$('.fc-button-today').click();
				return false;
			});

			// calendar month
			$('#mt').click(function() {
				$('#calendar').fullCalendar('changeView', 'month');
			});

			// calendar agenda week
			$('#ag').click(function() {
				$('#calendar').fullCalendar('changeView', 'agendaWeek');
			});

			// calendar agenda day
			$('#td').click(function() {
				$('#calendar').fullCalendar('changeView', 'agendaDay');
			});

			/*
			 * CHAT
			 */

			$.filter_input = $('#filter-chat-list');
			$.chat_users_container = $('#chat-container > .chat-list-body')
			$.chat_users = $('#chat-users')
			$.chat_list_btn = $('#chat-container > .chat-list-open-close');
			$.chat_body = $('#chat-body');

			/*
			* LIST FILTER (CHAT)
			*/

			// custom css expression for a case-insensitive contains()
			jQuery.expr[':'].Contains = function(a, i, m) {
				return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
			};

			function listFilter(list) {// header is any element, list is an unordered list
				// create and add the filter form to the header

				$.filter_input.change(function() {
					var filter = $(this).val();
					if (filter) {
						// this finds all links in a list that contain the input,
						// and hide the ones not containing the input while showing the ones that do
						$.chat_users.find("a:not(:Contains(" + filter + "))").parent().slideUp();
						$.chat_users.find("a:Contains(" + filter + ")").parent().slideDown();
					} else {
						$.chat_users.find("li").slideDown();
					}
					return false;
				}).keyup(function() {
					// fire the above change event after every letter
					$(this).change();

				});

			}

			// on dom ready
			listFilter($.chat_users);

			// open chat list
			$.chat_list_btn.click(function() {
				$(this).parent('#chat-container').toggleClass('open');
			})

			$.chat_body.animate({
				scrollTop : $.chat_body[0].scrollHeight
			}, 500);

		});

	</script>

@endsection