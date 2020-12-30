<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Formulario de registro de usuario</h3>
					@if ($errors->any())                 
						<div class="alert alert-danger alert-dismissible" role="alert">
							<h4><i class="icon fa fa-ban"></i> Aviso!</h4>                            
							@foreach ($errors->all() as $error)
									<div>{{$error}}</div>
							@endforeach                            
						</div>
					@endif
				</div>
				<!-- /.box-header -->							
				<!-- form start -->
				{!! Form::open(array('route' => 'banner.guardar','method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
					<input type="hidden" name="status" value="1">
					<input type="hidden" name="admin_id" value="{{ auth::guard('admin')->id() }}">
					<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-4">
								<div class="form-group">
									<label>
										<span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Titulo para el banner a publicar."></span>
										Título
										<span class="text-danger">*</span>
									</label>
									@if ($errors->has('name'))
										<div class="form-group has-error">
											<input type="text" name="name" id="name" placeholder="Escriba un título para el banner" class="form-control is-valid" required>
										</div>
									@else
										<input type="text" name="name" id="name" placeholder="Escriba un título para el banner" class="form-control is-valid">
									@endif
									@if ($errors->has('name'))
										{!! $errors->first('name', '<label class="control-label" style="color:red">:message</label>') !!}
									@endif
								</div>	
								<div class="form-group">
									<label>
										<span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Titulo para el banner a publicar."></span>
										Fecha de inicio
										<span class="text-danger">*</span>
									</label>
									@if ($errors->has('starting_at'))
										<div class="form-group has-error">
											{!! Form::date('starting_at', null, array('class' => 'form-control', 'placeholder' => 'Fecha de inicio'), \Carbon\Carbon::now()) !!}
										</div>
									@else
										{!! Form::date('starting_at', null, array('class' => 'form-control', 'placeholder' => 'Fecha de inicio'), \Carbon\Carbon::now()) !!}
									@endif
									@if ($errors->has('starting_at'))
										{!! $errors->first('starting_at', '<label class="control-label" style="color:red">:message</label>') !!}
									@endif
								</div>
								<div class="form-group">
									<label>
										<span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Titulo para el banner a publicar."></span>
										Fecha final
										<span class="text-danger">*</span>
									</label>
									@if ($errors->has('ending_at'))
										<div class="form-group has-error">
											{!! Form::date('ending_at', null, array('class' => 'form-control', 'placeholder' => 'Fecha final'), \Carbon\Carbon::now()) !!}
										</div>
									@else
										{!! Form::date('ending_at', null, array('class' => 'form-control', 'placeholder' => 'Fecha final'), \Carbon\Carbon::now()) !!}
									@endif
									@if ($errors->has('ending_at'))
										{!! $errors->first('ending_at', '<label class="control-label" style="color:red">:message</label>') !!}
									@endif
								</div>							
							</div>
							<div class="col-xs-8">
								<div class="form-group">
									<label>
										<span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Debe agregar una imagen para el banner a publicar."></span>
										Agregar imagen:
										<span class="text-danger">*</span>
									</label>
									@if ($errors->has('avatar'))
										<div class="form-group has-error">
											<input id="input-upload" name="avatar" type="file" class="file" data-browse-on-zone-click="true" required>
										</div>
									@else
										<input id="input-upload" name="avatar" type="file" class="file" data-browse-on-zone-click="true">
									@endif
									@if ($errors->has('avatar'))
										{!! $errors->first('avatar', '<label class="control-label" style="color:red">:message</label>') !!}
									@endif									
								</div>												
							</div>
						</div>
					</div>

					<div class="box-footer">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="pull-right">
								<a class="btn btn-warning" href="{{ url('admin/banners') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar"><i class="fa fa-arrow-left"></i></a>
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