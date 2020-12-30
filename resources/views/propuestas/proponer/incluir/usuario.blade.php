<ul class="nav nav-tabs" id="user_nav">
    <li class=""><a data-toggle="tab" href="#registro">Registro</a></li>
    <li><a data-toggle="tab" href="#iniciar_sesion">Iniciar sesión</a></li>
</ul>
<div class="tab-content">    
    <div id="registro" class="tab-pane fade margin-top10">
        <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="row">
                
                    <div class="col-md-12 margin-top10">
                        <div class="col-md-4">
                            <div class="input-group">
                                <label>
                                    <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" title="Tipo de documento que representa al usuario."></span>
                                    Tipo de documento
                                    <span class="text-danger">*</span>
                                </label>
                                <select name="doc_type" id="doc_type" class="form-control">
                                    <!-- <option selected="selected">Seleccione el tipo de documento</option> -->
                                    <option value="Cédula" data-format="999-9999999-9">Cédula</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="RNC">RNC</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group">
                                <label>
                                    <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Número de documento en relación al tipo de documento."></span>
                                    Número de documento
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="doc_number" id="doc_number" placeholder="Escriba su documento de identidad" maxlength="30" class="form-control" value="{{ old('doc_number') }}"> 
                            </div>
                            @if ($errors->has('doc_number'))
                                <span class="text-danger">{{ $errors->first('doc_number') }}</span>
                            @endif
                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <label>
                                    <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Primer y segundo nombre"></span>
                                    Nombres
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="name" id="name" placeholder="Escriba nombres" class="form-control" value="{{ old('name') }}">
                            </div>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <label>
                                    <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Primer y segundo apellido."></span>
                                    Apellidos
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="lastname" id="lastname" placeholder="Escriba apellidos" class="form-control" value="{{ old('lastname') }}">
                            </div>
                            @if ($errors->has('lastname'))
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            @endif
                        </div>
                    </div>                
                    
                    <div class="col-md-12 margin-top10">
                        <div class="col-md-4">
                            <div class="input-group">
                                <label>
                                    <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Teléfono de la casa para contacto."></span>
                                    Teléfono casa
                                </label>
                                <input type="text" name="phone" id="phone" placeholder="Digite el teléfono de la casa" class="form-control" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <label>
                                    <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Teléfono del trabajo para contacto."></span>
                                    Teléfono del trabajo
                                </label>
                                <input type="text" name="phone_work" id="phone_work" placeholder="Digite teléfono del trabajo" class="form-control" value="{{ old('phone_work') }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <label>
                                    <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Teléfono móvil para contacto."></span>
                                    Teléfono móvil
                                </label>
                                <input type="text" name="phone_mobile" id="phone_mobile" placeholder="Digite número" class="form-control" value="{{ old('phone_mobile') }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <label>
                                    <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" title="Género del usuario."></span>
                                    Género
                                </label>
                                <select name="gender" id="gender" class="form-control">
                                    <option></option><!-- <option selected="selected">Seleccione género</option> -->
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 margin-top10">
                        <div class="col-md-4">
                            <div class="input-group">
                                <label>
                                    <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Correo electrónico para el acceso al portal."></span>
                                    Correo electrónico
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="email" id="email" placeholder="Escriba su correo electrónico" class="form-control" value="{{ old('email') }}">
                            </div>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <label>
                                    <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Contraseña para el acceso al portal."></span>
                                    Contraseña
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="password" name="password" id="password" placeholder="Escriba su contraseña" class="form-control">
                            </div>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <label>
                                    <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Por seguridad se solicita que se repita la contraseña."></span>
                                    Repetir contraseña
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repita su contraseña" class="form-control">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row margin-top20">

                    <div class="col-md-12">
                        <div class="input-group">
                            <button type="submit" class="btn btn-primary">
                                Registrarse
                            </button>
                        </div> 
                    </div>

                </div>  

            </form>
        </div>
    </div>
    <div id="iniciar_sesion" class="tab-pane fade margin-top10">
        <div class="col-md-12">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        
                        <div class="col-md-4">
                            <div class="input-group">
                                <label>
                                    <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Correo electrónico para el acceso al portal."></span>
                                    Correo electrónico
                                    <span class="text-danger">*</span>
                                </label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Escriba su correo electrónico" autofocus>
                            </div>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <div class="input-group">
                                <label>
                                    <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Contraseña para el acceso al portal."></span>
                                    Contraseña
                                    <span class="text-danger">*</span>
                                </label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Escriba su contraseña" required>
                            </div>
                        </div>

                    </div>
                    
                </div>

                <div class="row margin-top20">

                    <div class="col-md-12">
                        <div class="input-group">
                            <button type="submit" class="btn btn-primary">
                                Iniciar sesión
                            </button>
                        </div> 
                    </div>
                    
                </div> 
                
            </form>
        </div>
    </div>
</div>

<!-- Control de navegacion tab para el nav -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
<script>
    window.location.hash == "#iniciar_sesion"? $(function (){$('#user_nav li:last-child a').tab('show')}) : $(function (){$('#user_nav li:first-child a').tab('show')})
</script>
