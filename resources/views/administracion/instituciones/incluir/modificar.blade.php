<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
	            <div class="box-header with-border">
	              <h3 class="box-title">Formulario edición de institución</h3>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	            {!! Form::model($instituciones, ['method' => 'PATCH', 'route' => ['institucion.actualizar', $instituciones->id], 'enctype' => 'multipart/form-data']) !!}
		            <div class="col-xs-12">
	                    <div class="row">
	                    	<div class="col-xs-2">
								<div class="form-group">
									<strong>Acronimo o sigla:</strong>
									{!! Form::text('acronym', old('acronym'), array('placeholder' => 'Ingresar acronimo o sigla','class' => 'form-control')) !!}
									@if ($errors->has('acronym'))
										{!! $errors->first('acronym', '<label class="control-label" style="color:red">:message</label>') !!}
									@endif
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<strong>Nombre institución:</strong>
									{!! Form::text('name', old('name'), array('placeholder' => 'Ingresar nombre institución','class' => 'form-control')) !!}
									@if ($errors->has('name'))
										{!! $errors->first('name', '<label class="control-label" style="color:red">:message</label>') !!}
									@endif
								</div>
							</div>
							<div class="col-xs-2">
								<strong>Provincia:</strong>
								{!! Form::select('province_id', $provinces, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar provincia']) !!}
								@if ($errors->has('province_id'))
										{!! $errors->first('province_id', '<label class="control-label" style="color:red">:message</label>') !!}
								@endif
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<strong>Categoría:</strong>
									{!! Form::text('category', old('category'), array('placeholder' => 'Ingresar categoría','class' => 'form-control')) !!}
									@if ($errors->has('category'))
										{!! $errors->first('category', '<label class="control-label" style="color:red">:message</label>') !!}
									@endif
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<strong>Dirección:</strong>
									{!! Form::text('address', old('address'), array('placeholder' => 'Ingresar dirección','class' => 'form-control')) !!}
									@if ($errors->has('address'))
										{!! $errors->first('address', '<label class="control-label" style="color:red">:message</label>') !!}
									@endif
								</div>
							</div>
							<div class="col-xs-2">
								<div class="form-group">
									<strong>Número:</strong>
									{!! Form::text('number', old('number'), array('placeholder' => 'Ingresar número','class' => 'form-control')) !!}
									<!-- @if ($errors->has('number'))
										{!! $errors->first('number', '<label class="control-label" style="color:red">:message</label>') !!}
									@endif -->
								</div>
							</div>
	                    </div>
	                </div>
	              	<!-- /.box-body -->
	              	<div class="box-footer">
		                <div class="col-xs-12 col-sm-12 col-md-12">
							<div class="pull-right">
								<a class="btn btn-warning" href="{{ url('admin/instituciones') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar"><i class="fa fa-arrow-left"></i></a>
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