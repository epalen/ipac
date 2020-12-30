<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
	            <div class="box-header with-border">
	              <h3 class="box-title">Formulario registro de permisos</h3>
	            </div>
	            {!! Form::model($permission, ['method' => 'PATCH','route' => ['permiso.actualizar', $permission->id]]) !!}
		            <div class="col-xs-12">
	                    <div class="row">
	                    	<div class="col-xs-3">
								<div class="form-group">
									<strong>Nombre permiso:</strong>
									{!! Form::text('name', null, array('placeholder' => 'Nombre permiso','class' => 'form-control')) !!}
								</div>
							</div>
							<div class="col-xs-3">
								<div class="form-group">
									<strong>Nombre de permiso a mostrar:</strong>
									{!! Form::text('display_name', null, array('placeholder' => 'Nombre permiso a mostrar','class' => 'form-control')) !!}
								</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group">
									<strong>Descripción:</strong>
									{!! Form::textarea('description', null, array('placeholder' => 'Descripción','class' => 'form-control', 'size' => '30x3')) !!}
								</div>
							</div>
	                    </div>
	                </div>
					<div class="box-footer">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="pull-right">
								<a class="btn btn-warning" href="{{ url('admin/permisos') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar"><i class="fa fa-arrow-left"></i></a>
								<button type="submit" class="btn btn-success" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Actualizar"><i class="fa fa-save"></i>
								</button>
							</div>                      
						</div>
					</div>
	           	{!! Form::close() !!}
	        </div>
		</div>
	</div>
</section>