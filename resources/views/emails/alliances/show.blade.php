@extends( 'emails.layouts.ver' )

<?php
    $content = json_decode($dataMail[0]->content, true);
    //print_r($content);
?>

@section('msj_header')
    <tr>
        <td class="content-cell">
            <div class="col-sm-12">
                <div class="col-sm-12">
                    {!! $content[0]['header'] !!}
                </div>
            </div>
        </td>
    </tr>
@endsection


@section('data')
    
    @include('InterAlliance.show_fields')

@endsection

@section('mail_content')
    {!! $content[0]['footer'] !!}
@endsection


@section('email_footer')
    <br>
    @php $emailCoordinador = $dataUsers[$keyCoordExterno]['coordinador_email']; @endphp
    E-mail del coordinador: {{ $emailCoordinador }}
@endsection