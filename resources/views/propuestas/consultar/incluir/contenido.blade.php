<div class="container margin-top10">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom: 0!important;">
            <h4><i class="fa fa-check"></i> Confirmación de solicitud:</h4>
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="alert alert-info" role="alert">
        <h4><i class="fa fa-info"></i> Nota:</h4>
        <p>Los datos aquí mostrados, solo podrán ser con fines de consulta en relación a la propuesta emitida por el ciudadano, los mismos no podrán ser utilizados para otros fines quedando bajo la Ley No. 172-13.</p>
    </div>
    <div class="row">
        @if (Route::has('login'))
            @if (Auth::check())
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Mis propuestas</h3>
                    </div>                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="text-align: center">No.</th>
                                <th>Propuesta #</th>
                                <th>ID Registro</th>
                                <th>Título</th>
                                <th style="text-align: center">Fecha solicitud</th>
                                <th style="text-align: center">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $propuestas)
                                @if(Auth::user()->id)
                                    <tr class="active">
                                        <td align="center" width="5px">{{ ++$i }}</td>
                                        <td>
                                            {{ $propuestas->prefix }}{{ $propuestas->id }}{{ $propuestas->created_at->setTimezone('America/Santo_Domingo')->format('dmY') }}
                                        </td>
                                        <td>{{ $propuestas->order }}</td>
                                        <td>{{ $propuestas->title }}</td>
                                        <td align="center">{{ $propuestas->created_at->format('d-m-Y') }}</td>
                                        <td align="center">
                                            @if ($propuestas->status == '1')
                                                <span class="label label-success">Finalizada</span>
                                            @elseif ($propuestas->status == '2')
                                                <span class="label label-primary">En proceso</span>
                                            @else ($propuestas->status == '3')
                                                <span class="label label-warning">Pendiente</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>                             
                    </table>
                    <div class="input-group pull-right">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
            @endif
        @endif
    </div>
</div>

