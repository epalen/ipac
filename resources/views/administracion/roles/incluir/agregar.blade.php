<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
	            <div class="box-header with-border">
	              <h3 class="box-title">Formulario registro de rol</h3>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	            {!! Form::open(array('route' => 'roles.store','method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
		            <div class="col-xs-12">
	                    <div class="row">
	                    	<div class="col-xs-3">
								<div class="form-group">
									<strong>Nombre:</strong>
									{!! Form::text('name', null, array('placeholder' => 'Ingresar nombre de rol','class' => 'form-control')) !!}
								</div>
							</div>
							<div class="col-xs-3">
								<div class="form-group">
									<strong>Nombre de rol a mostrar:</strong>
									{!! Form::text('display_name', null, array('placeholder' => 'Ingresar nombre a mostrar del rol','class' => 'form-control')) !!}
								</div>
							</div>							
							<div class="col-xs-3">
								<div class="form-group">
									<strong>Descripción:</strong>
									{!! Form::textarea('description', null, array('class' => 'form-control', 'size' => '30x3')) !!}
								</div>
							</div>
							<div class="col-xs-3">
								<strong>Permisos:</strong>
								<div class="form-group">									
									@foreach($permission as $value)
										<label class="checkbox-inline">{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
										{{ $value->display_name }}</label>
										<br/>
									@endforeach
								</div>
							</div>
	                    </div>
	                </div>
	              	<!-- /.box-body -->
	              	<div class="box-footer">
		                <div class="col-xs-12 col-sm-12 col-md-12">
							<div class="pull-right">
								<a class="btn btn-warning" href="{{ url('admin/roles') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar"><i class="fa fa-arrow-left"></i></a>
								<button type="submit" class="btn btn-success" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Actualizar"><i class="fa fa-save"></i>
								</button>
							</div>                      
	                    </div>
	              	</div>
	              <!-- /.box-footer -->
	           	{!! Form::close() !!}
	        </div>
		</div>
	</div>
</section>