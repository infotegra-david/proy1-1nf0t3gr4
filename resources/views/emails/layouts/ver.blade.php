
<?php
    if (isset($dataEmail)) {
        $to = json_decode($dataEmail[0]->to);
        $cc = json_decode($dataEmail[0]->cc);
        $bcc = json_decode($dataEmail[0]->bcc);
        $replyto = json_decode($dataEmail[0]->replyto);
    }

    
?>
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }
 
            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>
<div class="ver_email cuerpo">
    <div class="wrapper">
    @if(isset($dataEmail))
        <table class="table text-left" width="100%" cellpadding="0" cellspacing="0">
            <!--
            <tr>
                <td>
                    <strong>De:</strong> { {  Config::get('mail.from.name') }} - { { Config::get('mail.from.address') }}
                </td>
            </tr>
            -->
            @if( count($to) )
            <tr>
                <td>
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            <strong>Para:</strong> {{ join(', ', array_map(
                                    function ($first, $last) { return $first .' - '. $last; },
                                    array_column($to, 'name'),
                                    array_column($to, 'email')
                                )) }}
                        </div>
                    </div>
                </td>
            </tr>
            @endif
            @if( count($cc) )
            <tr>
                <td>
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            <strong>Cc:</strong> {{ join(', ', array_map(
                                    function ($first, $last) { return $first .' - '. $last; },
                                    array_column($cc, 'name'),
                                    array_column($cc, 'email')
                                )) }}
                        </div>
                    </div>
                </td>
            </tr>
            @endif
            @if( count($bcc) && 1==2)
            <!-- no ingresa a esta opcion -->
            <tr>
                <td>
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            <strong>Bcc:</strong> {{ join(', ', array_map(
                                    function ($first, $last) { return $first .' - '. $last; },
                                    array_column($bcc, 'name'),
                                    array_column($bcc, 'email')
                                )) }}
                        </div>
                    </div>
                </td>
            </tr>
            @endif
            @if( count($replyto) )
            <tr>
                <td>
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            <strong>Reply to:</strong> {{ join(', ', array_map(
                                    function ($first, $last) { return $first .' - '. $last; },
                                    array_column($replyto, 'name'),
                                    array_column($replyto, 'email')
                                )) }}
                        </div>
                    </div>
                </td>
            </tr>
            @endif
            <tr>
                <td>
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            <strong>Asunto:</strong>  {{ $dataEmail[0]->subject }}
                        </div>
                    </div>
                </td>
            </tr>
        </table>
            <hr>
    @endif
        <table class="table text-left" width="100%" cellpadding="0" cellspacing="0">
            <!-- Email header -->
            @if(isset($dataEmail))
                <tr>
                    <td class="header ">
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                <h1 class="text-center">{{  Config::get('app.name') }}</h1>
                            </div>
                        </div>
                    </td>
                </tr>
                <!-- Body content -->
                <tr>
                    <td class="content-cell">
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                <h1>Cordial saludo</h1>
                            </div>
                        </div>
                    </td>
                </tr>
                
                @yield('msj_header')
            @endif
            
            <tr>
                <td >
                    <div class="datos_proceso" width="" cellpadding="0" cellspacing="0">
                        
                        @yield('data')

                    </div>
                </td>
            </tr>
            @if(isset($dataEmail))
                <tr>
                    <td class="panel-item" style="background-color: rgba(237, 239, 242, 0.21);padding:16px;">
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                @yield('email_content')
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>

                </tr>
                <tr>
                    <td class="content-cell" >
                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                Gracias,<br>
                                {{ config('app.name') }}
                                @yield('email_footer')
                                <br>
                                <br>
                            </div>
                        </div>
                    </td>
                </tr>
            @endif
        </table>
            <hr>
        
    {{ Form::hidden('enviar', true) }}
    @if(isset($dataEmail))
        {{ Form::hidden('tokenemail', $dataEmail[0]->tokenemail) }}
    @endif
    </div>
</div>

@yield('scripts')

<script type="text/javascript">
    $(document).ready(function() {
        $('.datos_proceso div').removeClass('form-group').removeClass('input-group').removeClass('form-control').removeClass('table-hover').removeClass('panel');
        $('.datos_proceso .collapseProceso').removeClass('hide');
        // $('.datos_proceso #collapseDataAlianza').addClass('collapse');
    });
</script>