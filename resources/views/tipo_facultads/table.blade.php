<table class="table table-responsive" id="tipoFacultads-table">
    <thead>
        <th>Nombre</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoFacultads as $tipoFacultad)
        <tr>
            <td>{!! $tipoFacultad->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoFacultads.destroy', $tipoFacultad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoFacultads.show', [$tipoFacultad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoFacultads.edit', [$tipoFacultad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>