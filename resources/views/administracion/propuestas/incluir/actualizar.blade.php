<div id="content-wrapper" style="min-height: 800px;">
  <section class="content">
    <div class="row">
      @if (count($errors) > 0)
          <div class="alert alert-danger alert-dismissible"">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Whoops!</strong> Hubo un inconveniente en el registro, verifica los campos del formulario e intenta nuevamente.<br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <div class="row">
        <!-- Datos del proponente -->
        <div class="col-xs-12">
          <div class="text-justify">
            <div class="box box-danger">
              <div class="panel-heading">
                <h4 class="box-title">Datos del proponente</h4>
              </div>
              <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="col-xs-12">
                        <div class="form-group">
                          <p>Los datos aquí mostrados, solo podran ser con fines de consulta en relación a la propuesta emitida por el ciudadano, los mismos no podran ser utilizados para otros fines quedando bajo la Ley No. 172-13.</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                        <div class="col-xs-3">
                          <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $propuestas->userid->name }}
                          </div>
                        </div>
                        <div class="col-xs-3">
                          <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $propuestas->userid->lastname }}
                          </div>
                        </div>
                        <div class="col-xs-3">
                          <div class="form-group">
                            <strong>Tipo de documento:</strong>
                            {{ $propuestas->userid->doc_type }}
                          </div>
                        </div>
                        <div class="col-xs-3">
                          <div class="form-group">
                            <strong>Número documento:</strong>
                            {{ substr_replace(substr_replace($propuestas->userid->doc_number,'-',3,0),'-',11,0) }}
                          </div>
                        </div>                        
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="col-xs-3">
                          <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ substr_replace(substr_replace($propuestas->userid->phone,'-',3,0),'-',7,0) }}
                          </div>
                          </div>
                          <div class="col-xs-3">
                          <div class="form-group">
                            <strong>Teléfono trabajo:</strong>
                            {{ substr_replace(substr_replace($propuestas->userid->phone_work,'-',3,0),'-',7,0) }}
                          </div>
                          </div>
                          <div class="col-xs-3">
                          <div class="form-group">
                            <strong>Teléfono celular:</strong>
                            {{ substr_replace(substr_replace($propuestas->userid->phone_mobile,'-',3,0),'-',7,0) }}
                          </div>
                          </div>
                          <div class="col-xs-3">
                          <div class="form-group">
                            <strong>Email:</strong>
                            {{ $propuestas->userid->email }}
                          </div>
                          </div>                        
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="col-xs-3">
                            <div class="form-group">
                              <strong>Provincia:</strong>
                              {{ $propuestas->provinceId->name }}
                            </div>
                          </div>
                          <div class="col-xs-3">
                            <div class="form-group">
                              <strong>Municipio:</strong>
                              {{ $propuestas->municipalityId->name }}
                            </div>
                          </div>
                          <div class="col-xs-3">
                            <div class="form-group">
                              <strong>Dirección:</strong>
                              {{ $propuestas->address }}
                            </div>
                          </div>                             
                        </div>
                      </div>
                    </div>               
                  </div>              
              </div>
            </div>
          </div>
        </div>
        <!-- Datos de la propuesta -->
        {!! Form::model($propuestas, ['method' => 'PATCH','route' => ['propuestas.update', $propuestas->id], 'enctype' => 'multipart/form-data', 'files' => true]) !!}
          <input type="hidden" name="status" value="2">
          <input type="hidden" name="prefix" value="PR">
          <input type="hidden" name="admins" value="{{ auth::guard('admin')->id() }}">
          <input type="hidden" name="document_type" value="Interno">
          <div class="col-xs-12">            
            <div class="box box-warning">
              <div class="panel-heading">
                  <h4 class="box-title">Selección de las mesas</h4>
              </div>
              <div class="box-body no-padding">
                <div class="row">
                  <div class="col-xs-12">
                      <div class="form-group">   
                                                 
                          @include('administracion.propuestas.incluir.herramientas.checkboxes')
                      </div>           
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12">            
            <div class="box box-success">
              <div class="panel-heading">
                  <h4 class="box-title">Información y detalle de la propuesta</h4>
              </div>
              <div class="box-body no-padding">                
                  <div class="col-xs-12">
                    <div class="row">
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="col-xs-5">
                            <div class="form-group">
                              <strong>Título:</strong>
                              {!! Form::text('title', null, array('placeholder' => 'Nombre','class' => 'form-control', 'disabled' => 'disabled')) !!}
                            </div>
                            @if(Auth::user()->hasRole(['institutional_analyst','manager']))
                              <div class="form-group">
                                <strong>Asignar institución</strong>
                                {!! Form::select('institution_id', ['' => 'Seleccionar institución']+$instituciones, null,['class' => 'form-control']) !!}
                              </div>
                              <div class="form-group">
                                <strong>Asignar analista</strong>
                                {!! Form::select('admin_id', ['' => 'Seleccionar analista'], null,['class' => 'form-control']) !!}
                              </div>                              
                            @else(Auth::user()->hasRole(['analyst']))
                              <div class="form-group">
                                <strong>Institución asignada:</strong>
                                @isset($propuestas->institutionId->name)
                                  <input type="text" name="institution_id" id="institution_id" value="{{ old('institution_id', $propuestas->institutionId->name) }}" class="form-control" disabled="disabled">
                                @endisset

                                @empty($propuestas->institutionId->name)
                                  <input class="form-control" id="institution_id" type="text" placeholder="No tiene institución asignada" disabled>
                                @endisset
                              </div>
                              <div class="form-group">
                                <strong>Analista asignado:</strong>
                                @isset($propuestas->institutionId->name)
                                  <input type="text" name="admin_id" id="admin_id" value="{{ old('admin_id', $propuestas->adminId->name) }} {{ old('admin_id', $propuestas->adminId->lastname) }}" class="form-control" disabled="disabled">
                                @endisset

                                @empty($propuestas->institutionId->name)
                                  <input class="form-control" id="institution_id" type="text" placeholder="No tiene analista asignado" disabled>
                                @endisset
                              </div>
                            @endif                         
                          </div>  
                          <div class="col-xs-7">
                            <div class="form-group">
                              <strong>Descripción de la propusesta:</strong>
                              {!! Form::textarea('description', null, array('class' => 'form-control', 'disabled' => 'disabled', 'size' => '30x8')) !!}
                            </div>
                          </div>               
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="col-xs-12">
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
                            @if(Auth::user()->hasRole(['analyst_institutions']))
                              <div class="form-group">
                                <input id="avatar[]" name="avatar[]" type="file" class="file" data-browse-on-zone-click="true" multiple>
                              </div>
                            @endif
                            @if(Auth::user()->hasRole(['manager', 'institutional_analyst', 'analyst_institutions']))
                              <div class="form-group">
                                <strong>Agregar descripción:</strong>
                                {!! Form::textarea('comments', null, array('class' => 'form-control', 'size' => '30x3')) !!}
                              </div>
                            @endif                            
                          </div>                                          
                        </div>
                      </div>  
                      <div class="box-footer">                                 
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="pull-right">
                            <a class="btn btn-warning" href="{{ url('admin/propuestas') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar"><i class="fa fa-arrow-left"></i></a>
                            @if ($propuestas->status == 1 )
                              <button type="submit" class="btn btn-success" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Proceso cerrado no puede guardar" disabled="disabled"><i class="fa fa-save"></i>
                              </button>
                            @elseif ($propuestas->status == 2)
                              <button type="submit" class="btn btn-success" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Guardar"><i class="fa fa-save"></i>
                              </button>
                            @else ($propuestas->status == 3)
                              <button type="submit" class="btn btn-success" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Guardar"><i class="fa fa-save"></i>
                              </button>
                            @endif                            
                          </div>                      
                        </div>
                      </div>
                    </div>             
                  </div>   
                
              </div>
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </div><!--End Row-->
  </section><!-- End Section-->    
</div><!--End Wrap-->

<script>
    $("#input-pr").fileinput({
        language: "es",
        allowedFileExtensions: ["jpg", "png", "gif"]
    });
</script>