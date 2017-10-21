<?php

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
	"Home" => APP_URL
);

/*navigation array config

ex:
"dashboard" => array(
	"title" => "Display Title",
	"url" => "http://yoururl.com",
	"url_target" => "_self",
	"icon" => "fa-home",
	"label_htm" => "<span>Add your custom label/badge html here</span>",
	"sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(
	"dashboard" => array(
		"title" => "Inicio",
		"icon" => "fa-home",
		"sub" => array(
			"Administrador" => array(
				"icon" => "fa-gear",
				"title" => "Administrador",
				"url" => APP_URL."/dashboard.php"
			),
			"Estudiante" => array(
				"title" => "Estudiante",
				"icon" => "fa-graduation-cap",
				"url" => APP_URL."/estudiante_home.php"
			),
			"Validador" => array(
				"title" => "Validador",
				"icon" => "fa-search",
				"url" => APP_URL."/validador_home.php"
			),
			"Coordinador_ext" => array(
				"title" => "Coordinador Ext.",
				"icon" => "fa-user-circle-o",
				"url" => APP_URL."/coordinador_home.php"
			)
		)
	),
	"InterChange" => array(
		"title" => "InterChange",
		"icon" => "fa-exchange txt-color-white",
		"sub" => array(
			 "InterOutMap" => array(
		        "title" => "InterOutMap",
		        "icon" => "fa-map",
		        "url" => APP_URL."/interout-map.php"
		    ),
			"InterOut" => array(
				"title" => "InterOut",
				"icon" => "fa-arrow-up",
				"url" => APP_URL."/interout.php"
			),
			"InterInMap" => array(
				"title" => "InterInMap",
				"icon" => "fa-map-o",
				"url" => APP_URL."/interin-map.php"
			),
		    "InterIN" => array(
		        "title" => "InterIN",
		        "icon" => "fa-arrow-down",
		        "url" => APP_URL."/interin.php"
		    )
		   
		)
	),
	"InterAlliance" => array(
		"title" => "InterAlliance",
		"icon" => "fa-handshake-o txt-color-white",
		"sub" => array(
			"InterAllianceMap" => array(
		        "title" => "InterAllianceMap",
		        "icon" => "fa-map-marker",
		        "url" => APP_URL."/interalliance-map.php"
		    ),
		    "Alliances" => array(
		        "title" => "Mis alianzas",
		        "icon" => "fa-list-ul",
				//"url" => APP_URL."/projects.php",
				"url" => APP_URL."/alliances.php",
				"label_htm" => '<span class="badge bg-color-greenLight pull-right inbox-badge">3</span>'
		    ),
			"SubscribeAlliance" => array(
				"title" => "Subscribir alianza",
				"icon" => "fa-handshake-o",
				"url" => "../interalliances/subscribe/origin"
			)
		    
		)
	),
	
	"InterActions" => array(
		"title" => "interActions",
		"icon" => "fa-globe txt-color-white",
		"sub" => array(
		    "InterActionsMap" => array(
		        "title" => "InterActionsMap",
		        "icon" => "fa-flag",
		        "url" => APP_URL."/interactions-map.php"
		    ),
			"Opportunities" => array(
				"title" => "Oportunidades",
				"icon" => "fa-child",
				"url" => APP_URL."/opportunities.php"
			),
		    "InterIniciative" => array(
		        "title" => "Enviar inicativa",
		        "icon" => "fa-lightbulb-o",
		        "url" => APP_URL."/initiative.php"
		    )
		)
	)	,
	"InterIndicators" => array(
		"title" => "interIndicators",
		"icon" => "fa-line-chart txt-color-white",
		"sub" => array(
			"Indicators" => array(
				"title" => "Indicadores",
				"icon" => "fa-bar-chart",
				"url" => APP_URL."/indicators.php"
			)
		)
	)	,
	"InterAdmin" => array(
		"title" => "InterAdmin",
		"icon" => "fa-cog txt-color-white",
		"sub" => array(
			"Users" => array(
				"title" => "Usuarios",
				"icon" => "fa-users",
				"url" => "../admin/users" 
			),
			"Roles" => array(
				"title" => "Roles",
				"icon" => "fa-users",
				"url" => "../admin/roles" 
			),
			"Logs" => array(
				"title" => "Logs",
				"icon" => "fa-users",
				"url" => "../admin/logs" 
			),
		    "Settings" => array(
		        "title" => "Parametros",
		        "icon" => "fa-cogs",
		        "sub" => array(
                    "InstitutionSettings" => array(
                        "title" => "Institucion",
                        "icon" => "fa-cogs",
                        "sub" => array(
		                    "InstitutionsSettings" => array(
		                        "title" => "Instituciones",
		                        "icon" => "fa-university",
		                        "url" => "../admin/institutions"
		                    ),
		                    "CampusSettings" => array(
		                        "title" => "Campus",
		                        "icon" => "fa-university",
		                        "url" => "../admin/campus"
		                    ),
		                    "FacultiesSettings" => array(
		                        "title" => "Facultades",
		                        "icon" => "fa-building-o",
		                        "url" => "../admin/faculties"
		                    ),
		                    "ProgramsSettings" => array(
		                        "title" => "Programas",
		                        "icon" => "fa-graduation-cap",
		                        "url" => "../admin/programs"
		                    ),
		                    "SubjectsSettings" => array(
		                        "title" => "Asignaturas",
		                        "icon" => "fa-book",
		                        "url" => "../admin/subjects"
		                    )
                        )
                    ),
                    "LocationSettings" => array(
                        "title" => "Localización",
                        "icon" => "fa-cogs",
                        "sub" => array(
		                    "CountriesSettings" => array(
		                        "title" => "Países",
		                        "icon" => "fa-flag",
		                        "url" => "../admin/countries"
		                    ),
		                    "StatesSettings" => array(
		                        "title" => "Departamentos / Estados",
		                        "icon" => "fa-flag-o",
		                        "url" => "../admin/states"
		                    ),
		                    "CitiesSettings" => array(
		                        "title" => "Ciudades",
		                        "icon" => "fa-flag-o",
		                        "url" => "../admin/cities"
		                    )
                        )
                    ),

                    "UserSettings" => array(
                        "title" => "Usuarios template",
                        "icon" => "fa-user-plus",
                        "url" => APP_URL."/users.php"
                    )

				)
		    )
		)
	)		
	
);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and index.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>