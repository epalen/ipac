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

@include('administracion.banners.incluir.herramientas')

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
			  	<h3 class="box-title">Listado de banners publicados</h3>

				<div class="box-tools">
				{!! Form::open(['route' => 'banners.inicio', 'method' => 'GET']) !!}
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
				    
				    <tbody>

					    <tr>
					      <th>#</th>
					      <th>Imagen</th>			      
					      <th>Título</th>
						  <th>Publicado por</th>		
					      <th style="text-align: center">Fecha publicación</th>		   
						  <th style="text-align: center">Estado</th> 					      
					      <th style="text-align: center">Acción</th>
					    
					    </tr>
					    
					    @foreach ($data as $banner)
							
							<tr>
								<td>{{ ++$i }}</td>
								<td width="15%">
									<a class="thumbnail">
										<img class="thumbnail d-block w-100" src="{{ URL::asset('uploads/banners/' . $banner->avatar) }}">	
									</a>				
								</td>
								<td>{{ $banner->name }}</td>
								<td>{{ $banner->admins->name }}
								<td align="center">{{ $banner->created_at->format('d-m-Y') }}</td>
								<td align="center">
								@if ($banner->status == '1')
									<span class="label label-success">Activo</span>
								@else ($banner->status == '0')
									<span class="label label-danger">Inactivo</span>
								@endif
								</td>
								<!--INICIO BOTONES EDICION-->
		                        <td align="center">
		                        	<a class="btn btn-default" href="{{ route('banner.editar', $banner->id) }}" data-toggle="tooltip" data-placement="top" title="Editar banner">
		                        		<i class="fa fa-edit"></i> 
		                        	</a>
		                        	<a class="btn btn-default" href="{{ route('banner.eliminar', $banner->id) }}" data-toggle="tooltip" data-placement="top" title="Eliminar banner">
		                        		<i class="fa fa-trash"></i> 
		                        	</a>
		                        </td>
		                        <!--FINAL BOTONES EDICION-->   
							</tr>

					    @endforeach

				  	</tbody>

				</table>

			</div>
			<!-- /.box-body -->

			<div class="box-footer clearfix">
					
				<ul class="pagination pagination-sm no-margin pull-right">
					{!! $data->setPath('')->render() !!}
				</ul>
			
			</div>
			<!-- /.box-pagination -->

		</div>
		<!-- /.box -->

	</div>

</div>