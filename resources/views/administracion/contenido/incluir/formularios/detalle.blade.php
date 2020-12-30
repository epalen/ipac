<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-default">
	            <div class="box-header with-border">
	              	<h3 class="box-title">Constructor de contenido</h3>
	              	{!! Form::open(array('route' => 'contenido.guardar','method' => 'POST')) !!}
						<div class="col-xs-12">
						    <div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<strong>Detalle formulario de propuesta:</strong>
										<textarea name="detail_proposed_form" id="detail_proposed_form" rows="5" cols="165"></textarea>
									</div>
								</div>
						    </div>
						</div>
							<!-- /.box-body -->
							<div class="box-footer">
						    <div class="col-xs-12 col-sm-12 col-md-12">
								<div class="pull-right">
									<a class="btn btn-warning" href="{{ url('admin/contenido') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar"><i class="fa fa-arrow-left"></i></a>
									<button type="submit" class="btn btn-success" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Actualizar"><i class="fa fa-save"></i>
									</button>
								</div>                      
						    </div>
							</div>
						<!-- /.box-footer -->
					{!! Form::close() !!}	              	             	
	            </div>
	            <!-- /.box-header -->	            	
	        </div>
		</div>
	</div>
</section>