<div class="pad margin no-print">
  <div class="callout callout-info" style="margin-bottom: 0!important;">
    <h4><i class="fa fa-info"></i> Nota:</h4>
    <p>Los datos aquí mostrados, solo podran ser con fines de consulta en relación a la propuesta emitida por el ciudadano, los mismos no podran ser utilizados para otros fines quedando bajo la Ley No. 172-13.</p>
  </div>
</div>

<section class="invoice">
  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="page-header">
        Iniciativa Participativa Anti Corrupción - IPAC
        <small class="pull-right">Fecha: {{ $propuestas->created_at->setTimezone('America/Santo_Domingo')->now()->format('d-m-Y') }}</small>
      </h2>
    </div>
    <!-- /.col -->
  </div>
  <!-- info row -->
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      Proponente
      <address>
        <strong>{{ $propuestas->userid->name }} {{ $propuestas->userid->lastname }}</strong><br>
        {{ $propuestas->address }}<br>
        {{ $propuestas->provinceId->name }}, {{ $propuestas->municipalityId->name }}<br>
        Teléfono: {{ substr_replace(substr_replace($propuestas->userid->phone,'-',3,0),'-',7,0) }}<br>
        Email: {{ $propuestas->userid->email }}
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-5 invoice-col">
      Analista asignado
      <address>
        <strong>
          @isset($propuestas->adminId->name)
            {{ $propuestas->adminId->name }} {{ $propuestas->adminId->lastname }}
          @endisset

          @empty($propuestas->adminId->name)
            <span class="label label-warning">No tiene analista asociado</span>
          @endempty
        </strong>
        <br>
          @isset($propuestas->institutionId->name)
            {{ $propuestas->institutionId->name }}
          @endisset

          @empty($propuestas->institutionId->name)
            No tiene institución asociada
          @endempty        
        <br>
        @isset($propuestas->adminId->phone)
          Teléfono: {{ substr_replace(substr_replace($propuestas->adminId->phone,'-',3,0),'-',7,0) }} Ext. {{ $propuestas->adminId->extension }}
        @endisset

        @empty($propuestas->adminId->phone)
          Se requiere asociar un analista para mostrar número de teléfono
        @endempty
        <br>
        @isset($propuestas->adminId->email)
          Email: {{ $propuestas->adminId->email }}
        @endisset

        @empty($propuestas->adminId->email)
          Se requiere asociar un analista para mostrar correo asociado
        @endisset
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-3 invoice-col">
      <b>Propuesta #{{ $propuestas->prefix }}{{ $propuestas->id }}{{ $propuestas->created_at->setTimezone('America/Santo_Domingo')->format('dmY') }}</b><br>
      <br>
      <b>ID Registro:</b> {{ $propuestas->order }}<br>
      <b>Fecha de recepción:</b> {{ $propuestas->created_at->setTimezone('America/Santo_Domingo')->format('d-m-Y') }}
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- Table row -->
  <div class="row">
    <div class="col-xs-12 table-responsive">
      <table class="table table-striped">
        <thead>
        <tr>
          <th>Mesa</th>
          <th>Tema</th>
          <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>
            @include('administracion.propuestas.incluir.herramientas.declaraciones')
          </td>
          <td>{{ $propuestas->title }}</td>
          <td>
            @if ($propuestas->status == '1')
                <span class="label label-success">Finalizada</span>
            @elseif ($propuestas->status == '2')
                <span class="label label-primary">En proceso</span>
            @else ($propuestas->status == '3')
                <span class="label label-warning">Pendiente</span>
            @endif
          </td>
        </tr>
        </tbody>
      </table>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <!-- accepted payments column -->
    <div class="col-xs-12">
      <p class="lead">Descripción y detalle de la propuesta:</p>
      
      <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
        {{ $propuestas->description }}
      </p>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="form-group">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title">Documentos externos</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
          <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre archivo</th>
                  <th style="text-align: center">Tamaño <small>(bytes)</small></th>
                  <th style="text-align: center">Tipo</th>
                  <th style="text-align: center">Creado por</th>
                  <th style="text-align: center">Fecha</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($userdocs as $docs)
                  <tr>
                    <td>{{ $docs->docname}}</td>
                    <td align="center">{{ number_format(File::size('uploads/propuestas/' . $docs->docname, 2, '.', '')) }}</td>
                    <td align="center">{{ $docs->doctype }}</td>
                    <td align="center">{{ $docs->username }}</td>
                    <td align="center">{{ Carbon\Carbon::parse($docs->docdate)->format('d-m-Y') }}</td>
                    <td align="center">
                      <a class="btn btn-default" href="{{ URL::asset('uploads/propuestas/' . $docs->docname) }}" data-toggle="tooltip" data-placement="top" title="Descargar archivo de propuesta">
                        <i class="fa fa-download"></i> 
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
      </div>
      <!-- /.box-body -->
    </div>
  </div>

  <div class="form-group">
    <div class="box">
      <div class="box-header">
          <h3 class="box-title">Documentos internos</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
          <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre archivo</th>
                  <th style="text-align: center">Tamaño <small>(bytes)</small></th>
                  <th style="text-align: center">Tipo</th>
                  <th style="text-align: center">Creado por</th>
                  <th style="text-align: center">Fecha</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($admindocs as $docs)
                  <tr>
                    <td>{{ $docs->docname}}</td>
                    <td align="center">{{ number_format(File::size('uploads/propuestas/' . $docs->docname, 2, '.', '')) }}</td>
                    <td align="center">{{ $docs->doctype }}</td>
                    <td align="center">{{ $docs->adminname }}</td>
                    <td align="center">{{ Carbon\Carbon::parse($docs->docdate)->format('d-m-Y') }}</td>
                    <td align="center">
                      <a class="btn btn-default" href="{{ URL::asset('uploads/propuestas/' . $docs->docname) }}" data-toggle="tooltip" data-placement="top" title="Descargar archivo de propuesta">
                        <i class="fa fa-download"></i> 
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
      </div>
      <!-- /.box-body -->
    </div>
  </div>

  @isset($pcomments)
    <div class="form-group">
      <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Historíco de eventos</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <ul class="timeline">
            @foreach($proposalcomments as $comments)
              <!-- timeline time label -->
              <li class="time-label">
                  <span class="bg-red">
                  {{ Carbon\Carbon::parse($comments->pcca)->format('d-m-Y') }}
                  </span>
              </li>
              <!-- /.timeline-label -->

              <!-- timeline item -->
              <li>
                  <!-- timeline icon -->
                  <i class="fa fa-user bg-aqua"></i>
                  <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($comments->pcca)->format('h:i:s a') }}</span>

                  <h3 class="timeline-header">
                    <a href="#">
                      {{ $comments->adname }} {{ $comments->adlastname }} <small>{{ $comments->in }}</small>
                    </a>
                  </h3>

                      <div class="timeline-body">
                          {{ $comments->pcc }}
                      </div>
                  </div>
              </li>
              <!-- END timeline item -->
            @endforeach
          </ul>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  @endisset

  @empty($pcomments)
    
  @endempty

  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a class="btn btn-warning" href="{{ url('admin/propuestas') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar"><i class="fa fa-arrow-left"></i> Retornar</a>
      <button type="button" class="btn btn-default pull-right"><i class="fa fa-print"></i> Imprimir
      </button>
      <!--<button type="button" class="btn btn-success pull-right" style="margin-right: 5px;">
        <i class="fa fa-download"></i> Generar XLS
      </button>-->
      <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
        <i class="fa fa-download"></i> Generar PDF
      </button>
    </div>
  </div>
</section>