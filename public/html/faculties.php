<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Facultades";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["InterAdmin"]["sub"]["Settings"]["sub"]["FacultiesSettings"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>InterAdmin</li><li>Parámetros</li><li>Facultades</li>
				</ol>
				<!-- end breadcrumb -->

				<!-- You can also add more buttons to the
				ribbon for further usability

				Example below:

				<span class="ribbon-button-alignment pull-right">
				<span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
				<span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
				<span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
				</span> -->

			</div>
			<!-- END RIBBON -->
			
			

			<!-- MAIN CONTENT -->
			<div id="content">

				<!-- row -->
				<div class="row">
					
					<!-- col -->
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
						<h1 class="page-title txt-color-blueDark">
							
							<!-- PAGE HEADER -->
							<i class="fa-fw fa fa-file-text-o"></i> 
								InterAdmin 
							<span>>  
								Parámetros
							</span>
							<span>>  
								Facultades
							</span>
						</h1>
					</div>
					<!-- end col -->
					
					
				</div>
				<!-- end row -->
				
				<!--
					The ID "widget-grid" will start to initialize all widgets below 
					You do not need to use widgets if you dont want to. Simply remove 
					the <section></section> and you can use wells or panels instead 
					-->
				
				<!-- widget grid -->
				<section id="widget-grid" class="">

					<!-- row -->
					<div class="row">
						
						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<div class="alert alert-info">
								<strong>NOTE:</strong> All the data is loaded from a seperate JSON file
							</div>

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget well" id="wid-id-0">
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
									<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
									<h2>Widget Title </h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">	
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body no-padding">
										
										<table id="example" class="display projects-table table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									        <thead>
									            <tr>
									                <th></th><th>Facultad</th>
									                <th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Progreso</th>
									                <th>Revisores</th>
									                <th>Archivo</th>
									                <th>Actividad: &nbsp;<i class="fa fa-circle txt-color-darken font-xs"></i> Objetivo/ <i class="fa fa-circle text-danger font-xs"></i> Actual</th>
									                <th><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Inicio</th>
									                <th><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Final</th>
									                <th>Estado</th>
									            </tr>
									        </thead>
									    </table>

									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

						</article>
						<!-- WIDGET END -->
						
					</div>

					<!-- end row -->

					<!-- row -->

					<div class="row">

						<!-- a blank row to get started -->
						<div class="col-sm-12">
							<!-- your contents here -->
						</div>
							
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
	// include page footer
	include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>

<!-- PAGE RELATED PLUGIN(S) 
<script src="<?php echo ASSETS_URL; ?>/js/plugin/YOURJS.js"></script>-->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatable-responsive/datatables.responsive.min.js"></script>

<script type="text/javascript">

	$(document).ready(function() {
		
		/* Formatting function for row details - modify as you need */
		function format ( d ) {
		    // `d` is the original data object for the row
		    return '<table cellpadding="5" cellspacing="0" border="0" class="table table-hover table-condensed">'+
		        '<tr>'+
		            '<td style="width:100px">Alianzas - Institución:</td>'+
		            '<td>'+d.name+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Fecha Final:</td>'+
		            '<td>'+d.ends+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Informacion extra:</td>'+
		            '<td>And any further details here (images etc)...</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Comentarios:</td>'+
		            '<td>'+d.comments+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Acciones:</td>'+
		            '<td>'+d.action+'</td>'+
		        '</tr>'+
		    '</table>';
		}

		// clears the variable if left blank
	    var table = $('#example').DataTable( {
	    	"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
				"t"+
				"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
	        "ajax": "data/dataList.json",
	        "bDestroy": true,
	        "iDisplayLength": 15,
	        "oLanguage": {
			    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
			},
	        "columns": [
	            {
	                "class":          'details-control',
	                "orderable":      false,
	                "data":           null,
	                "defaultContent": ''
	            },
	            { "data": "name" },
	            { "data": "est" },
	            { "data": "contacts" },
	            { "data": "status" },
	            { "data": "target-actual" },
	            { "data": "starts" },
	            { "data": "ends" },
	            { "data": "tracker" },
	        ],
	        "order": [[1, 'asc']],
	        "fnDrawCallback": function( oSettings ) {
		       runAllCharts()
		    }
	    } );


	     
	    // Add event listener for opening and closing details
	    $('#example tbody').on('click', 'td.details-control', function () {
	        var tr = $(this).closest('tr');
	        var row = table.row( tr );
	 
	        if ( row.child.isShown() ) {
	            // This row is already open - close it
	            row.child.hide();
	            tr.removeClass('shown');
	        }
	        else {
	            // Open this row
	            row.child( format(row.data()) ).show();
	            tr.addClass('shown');
	        }
	    });

	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>