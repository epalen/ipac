<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
	            <div class="box-header with-border">
	              <h3 class="box-title">Formulario de registro de usuario</h3>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	            {!! Form::model($admins, ['method' => 'PATCH', 'route' => ['usuarios.actualizar', $admins->id], 'enctype' => 'multipart/form-data']) !!}
		            <div class="col-xs-12">
	                    <div class="row">
							<div class="col-xs-4">
								<div class="form-group">
									<strong>Nombres:</strong>
									{!! Form::text('name', null, array('placeholder' => 'Ingresar nombres','class' => 'form-control')) !!}
									@if ($errors->has('name'))
                  	{!! $errors->first('name', '<label class="control-label" style="color:red">:message</label>') !!}
                	@endif
								</div>
							</div> 
							<div class="col-xs-4">
								<div class="form-group">
									<strong>Apellidos:</strong>
									{!! Form::text('lastname', null, array('placeholder' => 'Ingresar apellidos','class' => 'form-control')) !!}
									@if ($errors->has('lastname'))
                  	{!! $errors->first('lastname', '<label class="control-label" style="color:red">:message</label>') !!}
                	@endif
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<strong>Email:</strong>
									{!! Form::text('email', null, array('placeholder' => 'Ingresar correo institucional','class' => 'form-control')) !!}
									@if ($errors->has('email'))
                  	{!! $errors->first('email', '<label class="control-label" style="color:red">:message</label>') !!}
                	@endif
								</div>
							</div>
	                    </div>
	                    <div class="row">
	                    	<div class="col-xs-4">
								<div class="form-group">
									<strong>Institución:</strong>
									{!! Form::select('institution_id', $data, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar institución']) !!}
									@if ($errors->has('institution_id'))
                  	{!! $errors->first('institution_id', '<label class="control-label" style="color:red">:message</label>') !!}
                	@endif
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<strong>Area:</strong>
									{!! Form::text('area', null, array('placeholder' => 'Ingresar Area laboral','class' => 'form-control')) !!}
									@if ($errors->has('area'))
                  	{!! $errors->first('area', '<label class="control-label" style="color:red">:message</label>') !!}
                	@endif
								</div>
							</div>
	                    	<div class="col-xs-4">
								<div class="form-group">
									<strong>Posición:</strong>
									{!! Form::text('job_title', null, array('placeholder' => 'Ingresar posición de area laboral','class' => 'form-control')) !!}
									@if ($errors->has('job_title'))
                  	{!! $errors->first('job_title', '<label class="control-label" style="color:red">:message</label>') !!}
                	@endif
								</div>
							</div>
							<div class="col-xs-3">
								<div class="form-group">
									<strong>Género:</strong>
									<select name="gender" id="gender" class="form-control">
	                                    <option></option>
	                                    <option value="Femenino">Femenino</option>
	                                    <option value="Masculino">Masculino</option>
	                                </select>
								</div>
							</div>							 
							<div class="col-xs-3">
								<div class="form-group">
									<strong>Teléfono:</strong>
									{!! Form::text('phone', null, array('placeholder' => 'Ingresar número de telefono','class' => 'form-control')) !!}
									@if ($errors->has('phone'))
                  	{!! $errors->first('phone', '<label class="control-label" style="color:red">:message</label>') !!}
                	@endif
								</div>
							</div>
							<div class="col-xs-3">
								<div class="form-group">
									<strong>Extensión:</strong>
									{!! Form::text('extension', null, array('placeholder' => 'Ingresar número','class' => 'form-control')) !!}
									@if ($errors->has('extension'))
                  	{!! $errors->first('extension', '<label class="control-label" style="color:red">:message</label>') !!}
                	@endif
								</div>
							</div>	
							<div class="col-xs-3">
								<div class="form-group">
									<strong>Flota:</strong>
									{!! Form::text('movil', null, array('placeholder' => 'Ingresar número de flota','class' => 'form-control')) !!}
									@if ($errors->has('movil'))
                  	{!! $errors->first('movil', '<label class="control-label" style="color:red">:message</label>') !!}
                	@endif
								</div>
							</div>				
	                    </div>
	                    <div class="row">
						<div class="col-xs-4">
								<div class="form-group">
									{{ Form::label('avatar', 'Imagen de perfil') }}
									{!! Form::file('avatar', null, array('class' => 'form-control')) !!}
									@if ($errors->has('avatar'))
                  	{!! $errors->first('avatar', '<label class="control-label" style="color:red">:message</label>') !!}
                	@endif
								</div>
							</div>
	                    	<div class="col-xs-2">
								<div class="form-group">
									<strong>Contraseña:</strong>
									<input type="password" id="password" name="password" class="form-control" placeholder="Ingrese contraseña" >
									@if ($errors->has('password'))
                  	{!! $errors->first('password', '<label class="control-label" style="color:red">:message</label>') !!}
                	@endif
								</div>
							</div>	
							<div class="col-xs-2">
								<div class="form-group">
									<strong>Confirmar contraseña:</strong>
									<input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirmar contraseña">
								</div>
							</div>
	                    	<div class="col-xs-4 pull-right">	
	                    		<strong>Asignar rol:</strong>
								<div class="form-group">					
								  {!! Form::select('roles[]', $roles,$adminRole, array('class' => 'form-control', 'size' => '5x5', 'multiple')) !!}
									@if ($errors->has('roles'))
                  	{!! $errors->first('roles', '<label class="control-label" style="color:red">:message</label>') !!}
                	@endif
								</div>
							</div>
	                    </div>
	                </div>
	              	<!-- /.box-body -->
	              	<div class="box-footer">
		                <div class="col-xs-12 col-sm-12 col-md-12">
							<div class="pull-right">
								<a class="btn btn-warning" href="{{ url('admin/usuarios') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar"><i class="fa fa-arrow-left"></i></a>
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