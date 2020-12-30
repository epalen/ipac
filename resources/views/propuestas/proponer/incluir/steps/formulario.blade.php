<input type="hidden" value="<?php echo mt_rand(100000, 999999);?>" id="order" name="order" />
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
<input type="hidden" name="status" value="3">
<input type="hidden" name="prefix" value="PR">
<input type="hidden" name="document_type" value="Externo">
<form role="form" id="forms">
    <div class="row setup-content" id="step-1">
        <div class="col-md-12">
            <h4>
                <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Las mesas se relacionan con las instituciones que trabajan con su propuesta."></span>
                <strong>Mesas</strong>
                <span class="text-danger">*</span>
            </h4>
            <ul class="mesas">
                <li data-mesa="purchases">
                    <!--<div>
                        <input type="checkbox" name="topic_id[]" id="topic_id[]" value="1" >
                        Compras y Contrataciones
                    </div>
                    <p>
                        Es el proponente o contratista de bienes, servicios, incluyendo el servicio de construcción de obras.
                    </p>-->

                    <div for="purchases">
                        <input type="checkbox" name="topic_id[]" id="purchases" value="1" title="Compras y Contrataciones" @if(is_array(old('topic_id')) && in_array(1, old('topic_id'))) checked @endif />
                        <label for="purchases">Compras y Contrataciones</label>
                        <h6>
                            <label for="purchases" align="justify">
                                Es el proponente o contratista de bienes, servicios, incluyendo el servicio de construcción de obras.
                            </label>
                        </h6>
                    </div>
                </li>
                <li data-mesa="civil_services">
                    <!--<div>
                        <input type="checkbox" name="topic_id[]" id="topic_id[]" value="5">
                        Servicio Civil
                    </div>
                    <p>
                        Servicio público descentralizado, con personalidad jurídica y patrimonio propio.
                    </p>-->

                    <div for="civil_services">
                        <input type="checkbox" name="topic_id[]" id="civil_services" value="5" title="Servicio Civil" @if(is_array(old('topic_id')) && in_array(5, old('topic_id'))) checked @endif />
                        <label for="civil_services">Servicio Civil</label>
                        <h6>
                            <label for="civil_services" align="justify">
                                Servicio público descentralizado, con personalidad jurídica y patrimonio propio.
                            </label>
                        </h6>
                    </div>
                </li>
                <li data-mesa="financial_management">
                    <!--<div>
                        <input type="checkbox" name="topic_id[]" id="topic_id[]" value="8">
                        Gestión Financiera
                    </div>
                    <p>
                        Una de las funciones del buen gobierno, forma parte integral del proceso de desarrollo en todas las operaciones financiadas por el Banco Mundial y las iniciativas de fortalecimiento de las instituciones de los países.
                    </p>-->

                    <div for="financial_management">
                        <input type="checkbox" name="topic_id[]" id="financial_management" value="8" title="Gestión Financiera" @if(is_array(old('topic_id')) && in_array(8, old('topic_id'))) checked @endif />
                        <label for="financial_management">Gestión Financiera</label>
                        <h6>
                            <label for="financial_management" align="justify">
                                Una de las funciones del buen gobierno, forma parte integral del proceso de desarrollo en todas las operaciones financiadas por el Banco Mundial y las iniciativas de fortalecimiento de las instituciones de los países.
                            </label>
                        </h6>
                    </div>
                </li>
                <li data-mesa="access_information">
                    <!--<div>
                        <input type="checkbox" name="topic_id[]" id="topic_id[]" value="2">
                        Acceso a la Información
                    </div>
                    <p>
                        Derecho fundamental que tenemos los ciudadanos de solicitar al gobierno información pública y de obtener respuesta satisfactoria en un tiempo razonable.
                    </p>-->
                    <div for="access_information">
                        <input type="checkbox" name="topic_id[]" id="access_information" value="2" title="Acceso a la Información" @if(is_array(old('topic_id')) && in_array(2, old('topic_id'))) checked @endif />
                        <label for="access_information">Acceso a la Información</label>
                        <h6>
                            <label for="access_information" align="justify">
                                Derecho fundamental que tenemos los ciudadanos de solicitar al gobierno información pública y de obtener respuesta satisfactoria en un tiempo razonable.
                            </label>
                        </h6>
                    </div>
                </li>
                <li data-mesa="infrastructure">
                    <!--<div>
                        <input type="checkbox" name="topic_id[]" id="topic_id[]" value="6">
                        Infraestructura
                    </div>
                    <p>
                        Base material de una sociedad y la que determinará la estructura social, el desarrollo y el cambio social de la misma.
                    </p>-->
                    <div for="infrastructure">
                        <input type="checkbox" name="topic_id[]" id="infrastructure" value="6" title="Infraestructura" @if(is_array(old('topic_id')) && in_array(6, old('topic_id'))) checked @endif />
                        <label for="infrastructure">Infraestructura</label>
                        <h6>
                            <label for="infrastructure" align="justify">
                                Base material de una sociedad y la que determinará la estructura social, el desarrollo y el cambio social de la misma.
                            </label>
                        </h6>
                    </div>
                </li>
                <li data-mesa="health">
                    <!--<div>
                        <input type="checkbox" name="topic_id[]" id="topic_id[]" value="9">
                        Salud
                    </div>
                    <p>
                        Debe ocuparse de mejorar la salud de su población pero también de ejecutar diversas acciones que eliminen o traten aquellas enfermedades y afecciones que causan mortalidad en la población en general.
                    </p>-->
                    <div for="health">
                        <input type="checkbox" name="topic_id[]" id="health" value="9" title="Salud" @if(is_array(old('topic_id')) && in_array(9, old('topic_id'))) checked @endif />
                        <label for="health">Salud</label>
                        <h6>
                            <label for="health">
                                Debe ocuparse de mejorar la salud de su población pero también de ejecutar diversas acciones que eliminen o traten aquellas enfermedades y afecciones que causan mortalidad en la población en general.
                            </label>
                        </h6>
                    </div>
                </li>
                <li data-mesa="education">
                    <!--<div>
                        <input type="checkbox" name="topic_id[]" id="topic_id[]" value="3">
                        Educación
                    </div>
                    <p>
                        Estructura de enseñanza integrada por un conjunto de instituciones y organismos que regulan, financian y prestan servicios para el ejercicio de la educación según políticas, relaciones, estructuras y medidas dictadas por el Estado de un país.
                    </p>-->
                    <div for="education">
                        <input type="checkbox" name="topic_id[]" id="education" value="3" title="Educación" @if(is_array(old('topic_id')) && in_array(3, old('topic_id'))) checked @endif />
                        <label for="education">Educación</label>
                        <h6>
                            <label for="education">
                                Estructura de enseñanza integrada por un conjunto de instituciones y organismos que regulan, financian y prestan servicios para el ejercicio de la educación según políticas, relaciones, estructuras y medidas dictadas por el Estado de un país.
                            </label>
                        </h6>
                    </div>
                </li>
                <li data-mesa="energy">
                    <!--<div>
                        <input type="checkbox" name="topic_id[]" id="topic_id[]" value="7">
                        Energía
                    </div>
                    <p>
                        Mejoras en temas de energía, como alumbrado de calles, entre otros.
                    </p>-->
                    <div for="energy">
                        <input type="checkbox" name="topic_id[]" id="energy" value="7" title="Energía" @if(is_array(old('topic_id')) && in_array(7, old('topic_id'))) checked @endif />
                        <label for="energy">Energía</label>
                        <h6>
                            <label for="energy">
                                Mejoras en temas de energía, como alumbrado de calles, entre otros.
                            </label>
                        </h6>
                    </div>
                </li>
                <li data-mesa="water">
                    <!--<div>
                        <input type="checkbox" name="topic_id[]" id="topic_id[]" value="10">
                        Agua
                    </div>
                    <p>
                        Contar con un suministro adecuado de agua potable y saneamiento para la población donde este servicio sea escaso.
                    </p>-->
                    <div for="water">
                        <input type="checkbox" name="topic_id[]" id="water" value="10" title="Agua" @if(is_array(old('topic_id')) && in_array(10, old('topic_id'))) checked @endif />
                        <label for="water">Agua</label>
                        <h6>
                            <label for="water">
                                Contar con un suministro adecuado de agua potable y saneamiento para la población donde este servicio sea escaso.
                            </label>
                        </h6>
                    </div>
                </li>
                <li data-mesa="watchdogs">
                    <!--<div>
                        <input type="checkbox" name="topic_id[]" id="topic_id[]" value="4">
                        Organismos de Control
                    </div>
                    <p>
                        Mejoras en la gestión de instituciones públicas que pertenezcan al Sistema Nacional de Control de la República Dominicana, como la Cámara de Cuentas y la Contraloría General de la República.
                    </p>-->
                    <div for="watchdogs">
                        <input type="checkbox" name="topic_id[]" id="watchdogs" value="4" title="Organismos de Control" @if(is_array(old('topic_id')) && in_array(4, old('topic_id'))) checked @endif/>
                        <label for="watchdogs">Organismos de Control</label>
                        <h6>
                            <label for="watchdogs">
                                Mejoras en la gestión de instituciones públicas que pertenezcan al Sistema Nacional de Control de la República Dominicana, como la Cámara de Cuentas y la Contraloría General de la República.
                            </label>
                        </h6>
                    </div>
                </li>
            </ul>
            
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Siguiente</button>
        </div>
    </div>
</form>
<div class="row setup-content" id="step-2">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <div class="input-group">
                    <label>
                        <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Titulo de la propuesta."></span>
                        Título
                        <span class="text-danger">*</span>
                    </label>
                    @if ($errors->has('title'))
                        <div class="form-group has-error">
                            <input type="text" name="title" id="title" placeholder="Escriba un título para la propuesta" class="form-control is-valid">
                        </div>
                    @else
                        <input type="text" name="title" id="title" placeholder="Escriba un título para la propuesta" class="form-control is-valid" value="{{ old('title') }}">
                    @endif
                    @if ($errors->has('title'))
                        {!! $errors->first('title', '<label class="control-label" style="color:red">:message</label>') !!}
                    @endif
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <label>
                        <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Provincia relacionada con la propuesta."></span>
                        Provincia
                        <span class="text-danger">*</span>
                    </label>
                    @if ($errors->has('province_id'))
                        <div class="form-group has-error">
                            {!! Form::select('province_id', ['' => 'Seleccionar provincia']+$provinces, null,['class' => 'form-control select2 select2-hidden-accessible']) !!}
                        </div>
                    @else
                        {!! Form::select('province_id', ['' => 'Seleccionar provincia']+$provinces, null,['class' => 'form-control select2 select2-hidden-accessible']) !!}
                    @endif
                    @if ($errors->has('province_id'))
                        {!! $errors->first('province_id', '<label class="control-label" style="color:red">:message</label>') !!}
                    @endif
                </div>
            </div>

            <div class="col-md-3">
                <div class="input-group">
                    <label>
                        <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Municipio relacionado con la propuesta."></span>
                        Municipio
                        <span class="text-danger">*</span>
                    </label>
                    @if ($errors->has('municipalities'))
                        <div class="form-group has-error">
                            {!! Form::select('municipalities', ['' => 'Seleccionar municipio'], null,['class' => 'form-control']) !!}
                        </div>
                    @else
                        {!! Form::select('municipalities', ['' => 'Seleccionar municipio'], null,['class' => 'form-control']) !!}
                    @endif
                    @if ($errors->has('municipalities'))
                        {!! $errors->first('municipalities', '<label class="control-label" style="color:red">:message</label>') !!}
                    @endif
                </div>
            </div>

            <div class="col-md-3">
                <div class="input-group">
                    <label>
                        <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Dirección de la propuesta."></span>
                        Dirección
                    </label>
                    <input type="text" name="address" id="address" placeholder="Escriba su dirección" class="form-control" value="{{ old('address') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 margin-top10">
                <div class="form-group">
                    <label>
                        <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Descripción de la propuesta."></span>
                        Descripción de la propuesta <span class="text-danger">*</span>
                    </label>
                    @if ($errors->has('description'))
                        <div class="form-group has-error">
                            <textarea name="description" id="description" placeholder="Describa brevemente su propuesta" class="form-control" maxlength="1000" draggable="false"></textarea>
                        </div>
                    @else
                        <textarea name="description" id="description" placeholder="Describa brevemente su propuesta" class="form-control" maxlength="1000" draggable="false">{{{ Input::old('description') }}}</textarea>
                    @endif
                    @if ($errors->has('description'))
                        {!! $errors->first('description', '<label class="control-label" style="color:red">:message</label>') !!}
                    @endif
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 margin-top10">
                <div class="input-group">
                    <label>
                        <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Puede anexar documentos con un máximo de 10 MB por documento."></span>
                        Anexar documentación
                    </label>
                    @if ($errors->has('avatar'))
                        <div class="form-group has-error">
                            <input type="file" name="avatar[]" class="text-center center-block well well-sm" multiple>
                        </div>
                    @else
                        <input type="file" name="avatar[]" class="text-center center-block well well-sm" multiple value="{{ old('avatar') }}">
                    @endif
                    @if ($errors->has('avatar'))
                        {!! $errors->first('avatar', '<label class="control-label" style="color:red">:message</label>') !!}
                    @endif
                    <br>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-success nextBtn btn-lg pull-right" type="submit" >Enviar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

         jQuery(document).ready(function(){
            jQuery('#submit').click(function(e){
               e.preventDefault();
               jQuery.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ url('/propuestas') }}",
                  method: 'post',
                  data: {
                     name: jQuery('#footballername').val(),
                     type: jQuery('#club').val(),
                     price: jQuery('#country').val()
                  },
                  success: function(data){
                  		jQuery.each(data.errors, function(key, value){
                  			jQuery('.alert-danger').show();
                  			jQuery('.alert-danger').append('<p>'+value+'</p>');
                  		});
                	}
                    
                  });
               });
            });
</script>



