@extends( $peticion == "normal" ? 'layouts.app' : 'layouts.empty' )

@section('requires')

	<?php

	//require_once(base_path()."/resources/views/inc/...");
	
	?>

@endsection

@section('styles')
	<style type="text/css">

		#bootstrap-wizard-1 > div.form-bootstrapWizard > ul > li{
			height: 80px;
		}

	</style>

@endsection

@section('head_vars')

	<?php
	/*---------------- PHP Custom Scripts ---------

	YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
	E.G. $page_title = "Custom Title" */

	$pagetitle = __('messages.interchange.'.strtolower($tipoInterChange).'.map.title.pagetitle');

	/* ---------------- END PHP Custom Scripts ------------- */

	//include header
	//you can add your custom css in $page_css array.
	$your_style = 'your_style.css';
	//$your_style = 'bootstrap-select.min.css';
	//$your_script = 'js/my_functions.js';

	//include left panel (navigation)
	//follow the tree in inc/config.ui.php

	$page_nav = 1;
	$page_nav_route[ "InterChange" ]["sub"][ $tipoInterChange ]["sub"][ $tipoInterChange."Map" ]["active"] = true;
	//$submenu2='';
	?>

@endsection

@section('content')


	<!-- MAIN CONTENT -->
	<div id="contenido">

		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">

			  <h1><em></em> InterChange &gt; {{ __('messages.interchange.'.strtolower($tipoInterChange).'.map.title.module') }}</h1>

			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8"> </div>
		</div>
		<!-- widget grid -->
		<section id="widget-grid" class="">

			
			<!-- row -->

			<div class="row">
				<article class="col-sm-12 col-md-12 col-lg-12">

				<!-- new widget -->
					<div class="jarviswidget" id="wid-id-2" data-widget-colorbutton="false" data-widget-editbutton="false">

						<!-- widget options:""
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
							<h2>{{ __('messages.interchange.'.strtolower($tipoInterChange).'.map.title.module') }} InterChange</h2>
							&nbsp;&nbsp;&nbsp;
							<div class="btn-group">
								{{ Form::select('periodo', [null => __('messages.interchange.'.strtolower($tipoInterChange).'.map.form.controls.periodo.placeholder')] + $periodo + ['*' => 'Total'], $periodo_filtrado ?? old('periodo'), ['class' => 'button-icon dropdown-toggle btn btn-default form-control input-md', 'id' => 'select_filter', 'target' => '', 'url' => route('interchanges.'.strtolower($tipoInterChange).'.map')]) }}
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
								<!-- <div id="map1" style="width: 600px; height: 400px"></div> -->
								<div id="heat-fill">
									<span class="fill-a">0</span>

									<span class="fill-b">5,000</span>
								</div>

								<table id="lista_paises" class="table table-striped table-hover table-condensed">
									<thead>
										<tr>
											<th></th>
											<th>{{ __('messages.interchange.'.strtolower($tipoInterChange).'.map.form.country') }}</th>
											<th>{{ __('messages.interchange.'.strtolower($tipoInterChange).'.map.form.inscription') }}</th>
											<th class="text-align-center">{{ __('messages.interchange.'.strtolower($tipoInterChange).'.map.form.activity') }}</th>
											<th class="text-align-center">{{ __('messages.interchange.'.strtolower($tipoInterChange).'.map.form.demographic') }}</th>
										</tr>
									</thead>
									<tbody>
										@foreach($paisesInscripciones as $paises)
										<tr>
											<td></td>
											<td><a href="javascript:void(0);">{{ $paises->nombre }}</a></td>
											<td>{{ $paises->conteo_total }}</td>
											<td class="text-align-center">
											<div class="sparkline txt-color-orange text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
												5, 4, 10, 1, 4, 6, -9, -6, 0, 0, 5, 6, 7
											</div></td>
											<td class="text-align-center">
											<div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
												25,75
											</div>
											<div class="btn-group display-inline pull-right text-align-left hide-tablet">
												<button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-cog fa-lg"></i>
												</button>
												<ul class="dropdown-menu dropdown-menu-xs pull-right">
													<li>
														<a href="docs/Presentación.pdf" target="_blank"><i class="fa fa-file fa-lg fa-fw txt-color-redLight"></i> <u>P</u>DF</a>
													</li>
													<li>
														<a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>E</u>xcel</a>
													</li>
													<li>
														<a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-orange"></i> P<u>o</u>werPoint</a>
													</li>
												</ul>
											</div></td>
										</tr>
						            	@endforeach
									</tbody>
								</table>

								<!-- end content -->

							</div>

						</div>
						<!-- end widget div -->
					</div>
					<!-- end widget -->

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


	<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
	{{ Html::style('/js/plugin/vectormap/jquery-jvectormap-2.0.3.css') }}
	{{ Html::script('/js/plugin/vectormap/jquery-jvectormap-2.0.3.min.js') }}
	{{ Html::script('/js/plugin/vectormap/jquery-jvectormap-world-mill-en.js') }}
		<!-- SPARKLINES -->
	{{ Html::script('js/plugin/sparkline/jquery.sparkline.min.js') }}
	{{ Html::script('js/smartwidgets/jarvis.widget.min.js') }}
	{{ Html::script('/js/plugin/datatables/jquery.dataTables.min.js') }}
	{{ Html::script('/js/plugin/datatables/dataTables.bootstrap.min.js') }}


	<script>
		$(document).ready(function() {

			/*SI SE CARGA EL SCRIPT my_funcions.js ELIMINAR ESTA FUNCION*/
			/*SI SE CARGA EL SCRIPT my_funcions.js ELIMINAR ESTA FUNCION*/
			/*SI SE CARGA EL SCRIPT my_funcions.js ELIMINAR ESTA FUNCION*/

			/*los select con el id select_filter al cambiar recarga la pagina*/

		    $(document).on('change','select#select_filter',function(){
		        $urlRoute = $(this).attr('url');
		        $urlRoute = $urlRoute + '?filter=' + $(this).val();
		        window.location.href = $urlRoute;
		    });


			/*SI SE CARGA EL SCRIPT my_funcions.js ELIMINAR ESTA FUNCION*/
			/*SI SE CARGA EL SCRIPT my_funcions.js ELIMINAR ESTA FUNCION*/
			/*SI SE CARGA EL SCRIPT my_funcions.js ELIMINAR ESTA FUNCION*/
			
			/*
			 * VECTOR MAP
			 */

			data_array = {
		              @foreach($paisesInscripciones as $paises)
		              	"{{ $paises->codigo_ref }}": {{ $paises->conteo_total }},
		              @endforeach
		            };

			$('#vector-map').vectorMap({
				map : 'world_mill_en',
		        focusOn: {
		          x: 0.5,
		          y: 1,
		          scale: 1.2,
		          animate: true
		        },
				backgroundColor : '#fff',
				regionStyle : {
					initial : {
						fill : '#c4c4c4'
					}
				},
				series : {
					regions : [{
						values : data_array,
						scale : ['#99FFFF', '#009999'],
						normalizeFunction : 'polynomial'
					}]
				},
				onRegionTipShow : function(e, el, code) {
					if ( typeof data_array[code] == 'undefined') {
						e.preventDefault();
					} else {
						el.html(el.html() + ': ' + data_array[code] + ' inscripciones');
					}
				}
			});




			// clears the variable if left blank
		    var table = $('#lista_paises').DataTable( {
		    	"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hide-xs-down'l>r>"+
					"t"+
					"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hide-xs-down'i><'col-xs-12 col-sm-6'p>>",
		        "bDestroy": true,
		        "iDisplayLength": 15,
		        "oLanguage": {
				    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				}
			});







/*


			$('#map1').vectorMap({
		        map: 'world_mill_en',
		        panOnDrag: true,
		        focusOn: {
		          x: 0.5,
		          y: 0.5,
		          scale: 2,
		          animate: true
		        },
		        series: {
		          regions: [{
		            scale: ['#C8EEFF', '#0071A4'],
		            normalizeFunction: 'polynomial',
		            values: {
		              "AF": 16.63,
		              "AL": 11.58,
		              "DZ": 158.97,
		              "AO": 85.81,
		              "AG": 1.1,
		              "AR": 351.02,
		              "AM": 8.83,
		              "AU": 1219.72,
		              "AT": 366.26,
		              "AZ": 52.17,
		              "BS": 7.54,
		              "BH": 21.73,
		              "BD": 105.4,
		              "BB": 3.96,
		              "BY": 52.89,
		              "BE": 461.33,
		              "BZ": 1.43,
		              "BJ": 6.49,
		              "BT": 1.4,
		              "BO": 19.18,
		              "BA": 16.2,
		              "BW": 12.5,
		              "BR": 2023.53,
		              "BN": 11.96,
		              "BG": 44.84,
		              "BF": 8.67,
		              "BI": 1.47,
		              "KH": 11.36,
		              "CM": 21.88,
		              "CA": 1563.66,
		              "CV": 1.57,
		              "CF": 2.11,
		              "TD": 7.59,
		              "CL": 199.18,
		              "CN": 5745.13,
		              "CO": 283.11,
		              "KM": 0.56,
		              "CD": 12.6,
		              "CG": 11.88,
		              "CR": 35.02,
		              "CI": 22.38,
		              "HR": 59.92,
		              "CY": 22.75,
		              "CZ": 195.23,
		              "DK": 304.56,
		              "DJ": 1.14,
		              "DM": 0.38,
		              "DO": 50.87,
		              "EC": 61.49,
		              "EG": 216.83,
		              "SV": 21.8,
		              "GQ": 14.55,
		              "ER": 2.25,
		              "EE": 19.22,
		              "ET": 30.94,
		              "FJ": 3.15,
		              "FI": 231.98,
		              "FR": 2555.44,
		              "GA": 12.56,
		              "GM": 1.04,
		              "GE": 11.23,
		              "DE": 3305.9,
		              "GH": 18.06,
		              "GR": 305.01,
		              "GD": 0.65,
		              "GT": 40.77,
		              "GN": 4.34,
		              "GW": 0.83,
		              "GY": 2.2,
		              "HT": 6.5,
		              "HN": 15.34,
		              "HK": 226.49,
		              "HU": 132.28,
		              "IS": 12.77,
		              "IN": 1430.02,
		              "ID": 695.06,
		              "IR": 337.9,
		              "IQ": 84.14,
		              "IE": 204.14,
		              "IL": 201.25,
		              "IT": 2036.69,
		              "JM": 13.74,
		              "JP": 5390.9,
		              "JO": 27.13,
		              "KZ": 129.76,
		              "KE": 32.42,
		              "KI": 0.15,
		              "KR": 986.26,
		              "KW": 117.32,
		              "KG": 4.44,
		              "LA": 6.34,
		              "LV": 23.39,
		              "LB": 39.15,
		              "LS": 1.8,
		              "LR": 0.98,
		              "LY": 77.91,
		              "LT": 35.73,
		              "LU": 52.43,
		              "MK": 9.58,
		              "MG": 8.33,
		              "MW": 5.04,
		              "MY": 218.95,
		              "MV": 1.43,
		              "ML": 9.08,
		              "MT": 7.8,
		              "MR": 3.49,
		              "MU": 9.43,
		              "MX": 1004.04,
		              "MD": 5.36,
		              "MN": 5.81,
		              "ME": 3.88,
		              "MA": 91.7,
		              "MZ": 10.21,
		              "MM": 35.65,
		              "NA": 11.45,
		              "NP": 15.11,
		              "NL": 770.31,
		              "NZ": 138,
		              "NI": 6.38,
		              "NE": 5.6,
		              "NG": 206.66,
		              "NO": 413.51,
		              "OM": 53.78,
		              "PK": 174.79,
		              "PA": 27.2,
		              "PG": 8.81,
		              "PY": 17.17,
		              "PE": 153.55,
		              "PH": 189.06,
		              "PL": 438.88,
		              "PT": 223.7,
		              "QA": 126.52,
		              "RO": 158.39,
		              "RU": 1476.91,
		              "RW": 5.69,
		              "WS": 0.55,
		              "ST": 0.19,
		              "SA": 434.44,
		              "SN": 12.66,
		              "RS": 38.92,
		              "SC": 0.92,
		              "SL": 1.9,
		              "SG": 217.38,
		              "SK": 86.26,
		              "SI": 46.44,
		              "SB": 0.67,
		              "ZA": 354.41,
		              "ES": 1374.78,
		              "LK": 48.24,
		              "KN": 0.56,
		              "LC": 1,
		              "VC": 0.58,
		              "SD": 65.93,
		              "SR": 3.3,
		              "SZ": 3.17,
		              "SE": 444.59,
		              "CH": 522.44,
		              "SY": 59.63,
		              "TW": 426.98,
		              "TJ": 5.58,
		              "TZ": 22.43,
		              "TH": 312.61,
		              "TL": 0.62,
		              "TG": 3.07,
		              "TO": 0.3,
		              "TT": 21.2,
		              "TN": 43.86,
		              "TR": 729.05,
		              "TM": 0,
		              "UG": 17.12,
		              "UA": 136.56,
		              "AE": 239.65,
		              "GB": 2258.57,
		              "US": 14624.18,
		              "UY": 40.71,
		              "UZ": 37.72,
		              "VU": 0.72,
		              "VE": 285.21,
		              "VN": 101.99,
		              "YE": 30.02,
		              "ZM": 15.69,
		              "ZW": 5.57
		            }
		          }]
		        }
		    });*/

		});

	</script>

@endsection