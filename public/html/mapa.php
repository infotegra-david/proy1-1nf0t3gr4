<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Dashboard";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["dashboard"]["sub"]["analytics"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">

		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
			  <h1><em></em> InterChange &gt; Mapa</h1>
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

                                        <div id="updating-chart" class="chart-large txt-color-blue" style="display:none"></div>
					

						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->

				</article>
			</div>

			<!-- end row -->

			<!-- row -->

			<div class="row">
<article class="col-sm-12 col-md-12 col-lg-11">

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
						<!-- widget div-->						<!-- end widget div -->
					</div>
					<!-- end widget -->

				</article>

			</div>

			<!-- end row -->

		</section>
		<!-- end widget grid -->

	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php
	include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>

<!-- PAGE RELATED PLUGIN(S) 
<script src="..."></script>-->
<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.cust.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.tooltip.min.js"></script>

<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/vectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- Full Calendar -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/moment/moment.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/fullcalendar/jquery.fullcalendar.min.js"></script>

<script>
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

		/*
		* RUN PAGE GRAPHS
		*/

		/* TAB 1: UPDATING CHART */
		// For the demo we use generated data, but normally it would be coming from the server

		var data = [], totalPoints = 200, $UpdatingChartColors = $("#updating-chart").css('color');

		function getRandomData() {
			if (data.length > 0)
				data = data.slice(1);

			// do a random walk
			while (data.length < totalPoints) {
				var prev = data.length > 0 ? data[data.length - 1] : 50;
				var y = prev + Math.random() * 10 - 5;
				if (y < 0)
					y = 0;
				if (y > 100)
					y = 100;
				data.push(y);
			}

			// zip the generated y values with the x values
			var res = [];
			for (var i = 0; i < data.length; ++i)
				res.push([i, data[i]])
			return res;
		}

		// setup control widget
		var updateInterval = 1500;
		$("#updating-chart").val(updateInterval).change(function() {

			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				$(this).val("" + updateInterval);
			}

		});

		// setup plot
		var options = {
			yaxis : {
				min : 0,
				max : 100
			},
			xaxis : {
				min : 0,
				max : 100
			},
			colors : [$UpdatingChartColors],
			series : {
				lines : {
					lineWidth : 1,
					fill : true,
					fillColor : {
						colors : [{
							opacity : 0.4
						}, {
							opacity : 0
						}]
					},
					steps : false

				}
			}
		};

		var plot = $.plot($("#updating-chart"), [getRandomData()], options);

		/* live switch */
		$('input[type="checkbox"]#start_interval').click(function() {
			if ($(this).prop('checked')) {
				$on = true;
				updateInterval = 1500;
				update();
			} else {
				clearInterval(updateInterval);
				$on = false;
			}
		});

		function update() {
			if ($on == true) {
				plot.setData([getRandomData()]);
				plot.draw();
				setTimeout(update, updateInterval);

			} else {
				clearInterval(updateInterval)
			}

		}

		var $on = false;

		/*end updating chart*/

		/* TAB 2: Social Network  */

		$(function() {
			// jQuery Flot Chart
			var twitter = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]], data = [{
				label : "Twitter",
				data : twitter,
				lines : {
					show : true,
					lineWidth : 1,
					fill : true,
					fillColor : {
						colors : [{
							opacity : 0.1
						}, {
							opacity : 0.13
						}]
					}
				},
				points : {
					show : true
				}
			}, {
				label : "Facebook",
				data : facebook,
				lines : {
					show : true,
					lineWidth : 1,
					fill : true,
					fillColor : {
						colors : [{
							opacity : 0.1
						}, {
							opacity : 0.13
						}]
					}
				},
				points : {
					show : true
				}
			}];

			var options = {
				grid : {
					hoverable : true
				},
				colors : ["#568A89", "#3276B1"],
				tooltip : true,
				tooltipOpts : {
					//content : "Value <b>$x</b> Value <span>$y</span>",
					defaultTheme : false
				},
				xaxis : {
					ticks : [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"], [13, "JAN+1"]]
				},
				yaxes : {

				}
			};

			var plot3 = $.plot($("#statsChart"), data, options);
		});

		// END TAB 2

		// TAB THREE GRAPH //
		/* TAB 3: Revenew  */

		$(function() {

			var trgt = [[1354586000000, 153], [1364587000000, 658], [1374588000000, 198], [1384589000000, 663], [1394590000000, 801], [1404591000000, 1080], [1414592000000, 353], [1424593000000, 749], [1434594000000, 523], [1444595000000, 258], [1454596000000, 688], [1464597000000, 364]], prft = [[1354586000000, 53], [1364587000000, 65], [1374588000000, 98], [1384589000000, 83], [1394590000000, 980], [1404591000000, 808], [1414592000000, 720], [1424593000000, 674], [1434594000000, 23], [1444595000000, 79], [1454596000000, 88], [1464597000000, 36]], sgnups = [[1354586000000, 647], [1364587000000, 435], [1374588000000, 784], [1384589000000, 346], [1394590000000, 487], [1404591000000, 463], [1414592000000, 479], [1424593000000, 236], [1434594000000, 843], [1444595000000, 657], [1454596000000, 241], [1464597000000, 341]], toggles = $("#rev-toggles"), target = $("#flotcontainer");

			var data = [{
				label : "Target Profit",
				data : trgt,
				bars : {
					show : true,
					align : "center",
					barWidth : 30 * 30 * 60 * 1000 * 80
				}
			}, {
				label : "Actual Profit",
				data : prft,
				color : '#3276B1',
				lines : {
					show : true,
					lineWidth : 3
				},
				points : {
					show : true
				}
			}, {
				label : "Actual Signups",
				data : sgnups,
				color : '#71843F',
				lines : {
					show : true,
					lineWidth : 1
				},
				points : {
					show : true
				}
			}]

			var options = {
				grid : {
					hoverable : true
				},
				tooltip : true,
				tooltipOpts : {
					//content: '%x - %y',
					//dateFormat: '%b %y',
					defaultTheme : false
				},
				xaxis : {
					mode : "time"
				},
				yaxes : {
					tickFormatter : function(val, axis) {
						return "$" + val;
					},
					max : 1200
				}

			};

			plot2 = null;

			function plotNow() {
				var d = [];
				toggles.find(':checkbox').each(function() {
					if ($(this).is(':checked')) {
						d.push(data[$(this).attr("name").substr(4, 1)]);
					}
				});
				if (d.length > 0) {
					if (plot2) {
						plot2.setData(d);
						plot2.draw();
					} else {
						plot2 = $.plot(target, d, options);
					}
				}

			};

			toggles.find(':checkbox').on('change', function() {
				plotNow();
			});
			plotNow()

		});

		/*
		 * VECTOR MAP
		 */

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

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>