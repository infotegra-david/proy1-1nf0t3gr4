@extends('layouts.app')

@section('head_vars')

    <?php
    /*---------------- PHP Custom Scripts ---------

    YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
    E.G. $page_title = "Custom Title" */

    $pagetitle = "Ver Documento Institución";

    /* ---------------- END PHP Custom Scripts ------------- */

    //include header
    //you can add your custom css in $page_css array.
    //$your_style = 'bootstrap-select.min.css,your_style.css';
    $your_style = 'your_style.css';

    //include left panel (navigation)
    //follow the tree in inc/config.ui.php

    $page_nav = 1;
    $page_nav_route[ "InterAdmin" ]["sub"][ "InstitutionSettings" ]["sub"][ "InstitutionsSettings" ]["active"] = true;
    //$submenu2='';
    ?>

@endsection


@section('content')
    <section class="content-header">
        <h1>
            Documentos Institucion
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.documentos_institucion.show_fields')
                    <a href="{!! route('admin.documentosInstitucion.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
