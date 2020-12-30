<div class="container margin-top10">
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger" style="display:none">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="alert alert-success" style="display:none">
                <h4><i class="fa fa-check"></i> Confirmación de envío:</h4>
            </div>
            <div class="alert alert-info" role="alert">
                <h4><i class="fa fa-info"></i> Nota:</h4>
                <p>Los datos aquí mostrados, solo podrán ser con fines de consulta en relación a la propuesta emitida por el ciudadano, los mismos no podrán ser utilizados para otros fines quedando bajo la Ley No. 172-13.</p>
            </div>            
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Formulario de contacto</div>
                    <div class="panel-body">  
                        <div class="alert alert-warning" role="alert">
                            <h4><i class="fa fa-info"></i> Información:</h4>
                            <p>Los campos marcados con (*), son considerados como requidos por lo cual deben ser completados.</p>
                        </div>                  
                        <form route="contacto.guardar" method="post" enctype="multipart/form-data" id="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">
                                            <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" title="Nombres de quien está llenando el formulario."></span>
                                            Nombre
                                            <span class="text-danger">*</span>                                        
                                        </label>
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" placeholder="Nombres" class="form-control is-valid" required>
                                            <span class="text-danger">
                                                <strong id="name-error"></strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">
                                            <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" title="Correo electrónico de quien está llenando el formulario."></span>
                                            Correo electrónico
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" placeholder="Email" class="form-control is-valid" required>
                                            <span class="text-danger">
                                                <strong id="email-error"></strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">
                                            <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" title="Teléfono de quien está llenando el formulario."></span>
                                            Teléfono
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone" placeholder="Teléfono" class="form-control is-valid" required>
                                            <span class="text-danger">
                                                <strong id="phone-error"></strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">
                                            <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" title="Descripción breve del mensaje."></span>
                                            Asunto
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" name="subject" id="subject" placeholder="Asunto" class="form-control is-valid" required>
                                            <span class="text-danger">
                                                <strong id="subject-error"></strong>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="subject">
                                            <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" title="Contenido del mensaje."></span>
                                            Contenido
                                        </label>
                                        <textarea name="content" id="content" class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <button class="btn btn-success nextBtn btn-lg pull-right btn-contact-submit" type="button" >Enviar</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    
                </div>                
            </div>
        </div>
    </div>
</div>

