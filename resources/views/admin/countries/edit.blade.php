@extends('layouts.app')

@section('content')
<div id="pais" class="contenido">

    <div class="contenedor">

        <div class="panel panel-default">
            <div class="panel-heading">
                Editar País
                <i id="buton_help" class="glyphicon glyphicon-info-sign" data-toggle="collapse" data-target="#collapseExample"></i>
            </div>
            <div class="panel-body">

                <div class="collapse" id="collapseExample">
                    <div class="help well">
                        <h5>¿Como editar un País?</h5>
                       <ul>
                            <li>Puede editar el nombre del País desde el campo 'País'.</li>
                            <li>Puede editar el código de referencia desde el campo 'Código Ref'.</li>
                            <li>De click en el botón “Guardar”.</li>
                            <a href="#">Para obetener una guia detallada de este formulario consulte el manual en este link</a>

                        </ul>     
                    </div>
                </div>

                @include('adminlte-templates::common.errors')

                <div class="row">
                    {!! Form::model($country, ['route' => ['admin.countries.update', $country->id], 'method' => 'patch']) !!}

                        @include('admin.countries.fields')

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
     </div>

</div>

@endsection