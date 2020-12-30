<div class="row">
    <div class="col-lg-12 col-md-12">
            
    </div>
</div>

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@include('administracion.propuestas.incluir.herramientas')

<br>

<div class="row">
        
	<div class="col-xs-12">
		@if ($message = Session::get('success'))
			<div class="alert callout callout-success alert-dismissible" role="alert" style="margin-bottom: 0!important;">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4><i class="fa fa-check"></i> Confirmación de cambios:</h4>
				<p>{{ $message }}</p>
			</div>
		@endif
	  
		<div class="box">

			<div class="box-header">
			  	<h3 class="box-title">Listado de propuestas</h3>			  	

				<div class="box-tools">

					{!! Form::open(['route' => 'propuestas.index', 'method' => 'GET']) !!}
						<div class="input-group input-group-sm" style="width: 250px;">
							<input type="text" name="criteria" class="form-control pull-right" placeholder="Buscar...">
							<div class="input-group-btn">
								<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
							</div>
						</div>
					{!! Form::close() !!}

				</div>

			</div>
			<!-- /.box-header -->

			<div class="box-body table-responsive no-padding">
				
				<table class="table table-hover">
					<div class="col-xs-12">
						@if (count($data) === 1)
						    
						@elseif (count($data) > 1)
						    
						@else
							<div class="alert alert-warning alert-dismissible callout callout-warning">
				            	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				            	Actualmente no existen registros asociados...
				            </div>				
						@endif
					</div>
				    
				    <tbody>
					    <tr>
					      <th>#</th>			      
					      <th>Tipo de propuesta</th>
					      <th>Mesa / categoría</th>
					      <th>Província</th>
					      <th style="text-align: center">Fecha de recepción</th>
					      <th style="text-align: center">Días restantes</th>				     
					      <th style="text-align: center">Estado</th>
					      <th style="text-align: center">Acción</th>					    
					    </tr>	
						
					    @foreach ($data as $propuestas)
							@if(Auth::user()->hasRole(['institutional_analyst','manager']))
								<tr>								
									<td>{{ ++$i }}</td>
									<td style="width: 25%">{{ $propuestas->title }}</td>
									<td style="width: 15%">
									@foreach($propuestas->topics as $topic)
										<span class="label label-info">{{$topic->name}}</span>
									@endforeach
									</td>
									<td>{{ $propuestas->provinceId->name }}</td>		
									<td align="center">{{ $propuestas->created_at->format('d-m-Y') }}</td>	
									<td align="center">
										@if (Carbon\Carbon::parse($propuestas->created_at)->addDays(15))
											<span class="label label-success">
												Vence {{ Carbon\Carbon::parse($propuestas->created_at)->addDays(15) }}
											</span>
										@elseif (Carbon\Carbon::parse($propuestas->created_at)->addDays(10))
											<span class="label label-warning">
												Vence {{ Carbon\Carbon::parse($propuestas->created_at)->addDays(10) }}
											</span>
										@else (Carbon\Carbon::parse($propuestas->created_at)->addDays(5))
											<span class="label label-danger">
												Vence {{ Carbon\Carbon::parse($propuestas->created_at)->addDays(5) }}
											</span>
										@endif
									</td>
									<td align="center">
										@if ($propuestas->status == '1')
											<span class="label label-success">Finalizada</span>
										@elseif ($propuestas->status == '2')
											<span class="label label-primary">En proceso</span>
										@else ($propuestas->status == '3')
											<span class="label label-warning">Pendiente</span>
										@endif
									</td>													
									<!--INICIO BOTONES EDICION-->
									<td align="center">
										
										<a class="btn btn-default" href="{{ route('propuestas.show', $propuestas->id) }}" data-toggle="tooltip" data-placement="top" title="Ver detalle de propuesta">
											<i class="fa fa-search"></i> 
										</a>
										@if($propuestas->status == 1 )
											<a class="btn btn-default" href="#" data-toggle="tooltip" data-placement="top" title="No puede editar propuesta" disabled>
												<i class="fa fa-edit"></i> 
											</a>
										@elseif($propuestas->status < 3)
											<a class="btn btn-default" href="{{ route('propuestas.edit', $propuestas->id) }}" data-toggle="tooltip" data-placement="top" title="Editar propuesta">
												<i class="fa fa-edit"></i> 
											</a>
										@else($propuestas->status < 2)
											<a class="btn btn-default" href="{{ route('propuestas.edit', $propuestas->id) }}" data-toggle="tooltip" data-placement="top" title="Editar propuesta">
												<i class="fa fa-edit"></i> 
											</a>
										@endif
										@if(Auth::user()->hasRole(['manager']))
											@if($propuestas->status == 1)
												<button type="button" class="btn btn-default" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Proceso cerrado" disabled="disabled"><i class="fa fa-lock"></i></button>
											@elseif($propuestas->status < 3)
												<a class="btn btn-default" href="{{ route('propuestas.cerrar-propuesta', $propuestas->id) }}" data-toggle="tooltip" data-placement="top" title="Editar propuesta">
													<i class="fa fa-lock-open"></i> 
												</a>
											@else($propuestas->status < 2)
												<button type="button" class="btn btn-default" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Proceso cerrado" disabled="disabled"><i class="fa fa-lock"></i></button>
											@endif										
										@endif	
										
									</td>
									<!--FINAL BOTONES EDICION-->   
								</tr>
							@endif

							@if(Auth::user()->hasRole(['analyst_institutions']))
								@if($propuestas->status == 1)
								
								@else($propuestas->status < 2)
									<tr>								
										<td>{{ ++$i }}</td>
										<td style="width: 25%">{{ $propuestas->title }}</td>
										<td style="width: 15%">
											@foreach($propuestas->topics as $topic)
												<span class="label label-info">{{$topic->name}}</span>
											@endforeach
										</td>
										<td>{{ $propuestas->provinceId->name }}</td>		
										<td align="center">{{ $propuestas->created_at->format('d-m-Y') }}</td>	
										<td align="center">
											@if (Carbon\Carbon::parse($propuestas->created_at)->addDays(15)->diffForHumans())
												<span class="label label-success">
													Vence {{ Carbon\Carbon::parse($propuestas->created_at)->addDays(15)->diffForHumans() }}
												</span>
											@elseif (Carbon\Carbon::parse($propuestas->created_at)->addDays(10)->diffForHumans())
												<span class="label label-warning">
													Vence {{ Carbon\Carbon::parse($propuestas->created_at)->addDays(10)->diffForHumans() }}
												</span>
											@else (Carbon\Carbon::parse($propuestas->created_at)->addDays(5)->diffForHumans())
												<span class="label label-danger">
													Vence {{ Carbon\Carbon::parse($propuestas->created_at)->addDays(5)->diffForHumans() }}
												</span>
											@endif
										</td>
										<td align="center">
											@if ($propuestas->status == '1')
												<span class="label label-success">Finalizada</span>
											@elseif ($propuestas->status == '2')
												<span class="label label-primary">En proceso</span>
											@else ($propuestas->status == '3')
												<span class="label label-warning">Pendiente</span>
											@endif
										</td>													
										<!--INICIO BOTONES EDICION-->
										<td align="center">
											
											<a class="btn btn-default" href="{{ route('propuestas.show', $propuestas->id) }}" data-toggle="tooltip" data-placement="top" title="Ver detalle de propuesta">
												<i class="fa fa-search"></i> 
											</a>
											@if($propuestas->status == 1 )
												<a class="btn btn-default" href="#" data-toggle="tooltip" data-placement="top" title="No puede editar propuesta" disabled>
													<i class="fa fa-edit"></i> 
												</a>
											@elseif($propuestas->status < 3)
												<a class="btn btn-default" href="{{ route('propuestas.edit', $propuestas->id) }}" data-toggle="tooltip" data-placement="top" title="Editar propuesta">
													<i class="fa fa-edit"></i> 
												</a>
											@else($propuestas->status < 2)
												<a class="btn btn-default" href="{{ route('propuestas.edit', $propuestas->id) }}" data-toggle="tooltip" data-placement="top" title="Editar propuesta">
													<i class="fa fa-edit"></i> 
												</a>
											@endif
											@if(Auth::user()->hasRole(['manager']))
												@if($propuestas->status == 1)
													<button type="button" class="btn btn-default" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Proceso cerrado" disabled="disabled"><i class="fa fa-lock"></i></button>
												@elseif($propuestas->status < 3)
													<a class="btn btn-default" href="{{ route('propuestas.cerrar-propuesta', $propuestas->id) }}" data-toggle="tooltip" data-placement="top" title="Editar propuesta">
														<i class="fa fa-lock-open"></i> 
													</a>
												@else($propuestas->status < 2)
													<button type="button" class="btn btn-default" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Proceso cerrado" disabled="disabled"><i class="fa fa-lock"></i></button>
												@endif										
											@endif	
											
										</td>
										<!--FINAL BOTONES EDICION-->   
									</tr>
								@endif	
							@endif					
					    @endforeach

				  	</tbody>

				</table>

			</div>
			<!-- /.box-body -->			 

			<div class="box-footer clearfix">
				<div class="col-md-3">	                
	                @if (count($data) === 1)
					    <div class="input-group">
		                    <div class="btn-toolbar" role="toolbar">
		                        {!! $data->count() !!} propuesta de {!! $data->total() !!}
		                    </div>              
		                </div>
					@elseif (count($data) > 1)
					    <div class="input-group">
		                    <div class="btn-toolbar" role="toolbar">
		                        {!! $data->count() !!} propuestas de {!! $data->total() !!}
		                    </div>              
		                </div>
					@else
					    <div class="input-group">
		                    <div class="btn-toolbar" role="toolbar">
		                        No existen propuestas registradas
		                    </div>              
		                </div>
					@endif
	            </div>
				<div class="col-md-3 pull-right">
					<ul class="pagination pagination-sm no-margin pull-right">
						{!! $data->setPath('')->render() !!}
					</ul>
				</div>
			</div>
			<!-- /.box-pagination -->

		</div>
		<!-- /.box -->

	</div>

</div>

