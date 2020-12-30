<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
<form role="form" id="forms">
    <div class="row setup-content" id="step-1">
        <div class="col-md-12">
            <h4>
                <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Las mesas se relacionan con las instituciones que trabajan con su propuesta."></span>
                <strong>Mesas</strong>
                <span class="text-danger">*</span>
            </h4>
            <ul class="mesas">
                <li data-mesa="1">
                    <div>
                        <input type="checkbox" name="tables" id="mesa1" value="Compras y contrataciones" >
                        Compras y Contrataciones
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.
                    </p>
                </li>
                <li data-mesa="2">
                    <div>
                        <input type="checkbox" name="tables" id="mesa2" value="Servicio civil">
                        Servicio Civil
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.
                    </p>
                </li>
                <li data-mesa="3">
                    <div>
                        <input type="checkbox" name="tables" id="mesa3" value="Gestión financiera">
                        Gestión Financiera
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.
                    </p>
                </li>
                <li data-mesa="4">
                    <div>
                        <input type="checkbox" name="tables" id="mesa4" value="Acceso a la información">
                        Acceso a la Información
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.
                    </p>
                </li>
                <li data-mesa="5">
                    <div>
                        <input type="checkbox" name="tables" id="mesa5" value="Infraestructura">
                        Infraestructura
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.
                    </p>
                </li>
                <li data-mesa="6">
                    <div>
                        <input type="checkbox" name="tables" id="mesa6" value="Salud">
                        Salud
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.
                    </p>
                </li>
                <li data-mesa="7">
                    <div>
                        <input type="checkbox" name="tables" id="mesa7" value="Educación">
                        Educación
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.
                    </p>
                </li>
                <li data-mesa="8">
                    <div>
                        <input type="checkbox" name="tables" id="mesa8" value="Energía">
                        Energía
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.
                    </p>
                </li>
                <li data-mesa="9">
                    <div>
                        <input type="checkbox" name="tables" id="mesa9" value="Agua">
                        Agua
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.
                    </p>
                </li>
                <li data-mesa="10">
                    <div>
                        <input type="checkbox" name="tables" id="mesa10" value="Organismos de control">
                        Organismos de control
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam mi quam, fermentum congue purus ultricies ut. Vivamus ultrices urna.
                    </p>
                </li>
            </ul>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Siguiente</button>
        </div>
    </div>
</form>
<div class="row setup-content" id="step-2">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="input-group">
                    <label>
                        <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Provincia relacionada con la propuesta."></span>
                        Provincia
                        <span class="text-danger">*</span>
                    </label>
                    <select name="provinces" id="provinces" class="form-control">
                        <option value="0">Seleccione la provincia</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group">
                    <label>
                        <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Municipio relacionado con la propuesta."></span>
                        Municipio
                        <span class="text-danger">*</span>
                    </label>
                </div>
            </div>

            <div class="col-md-4">
                <div class="input-group">
                    <label>
                        <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Dirección de la propuesta."></span>
                        Dirección
                    </label>
                    <input type="text" name="address" id="address" placeholder="Escriba su dirección" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 margin-top10">
                <div class="form-group">
                    <label>
                        <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Descripción de la propuesta."></span>
                        Propuesta <span class="text-danger">*</span>
                    </label>
                    <textarea name="description" id="description" placeholder="Escriba su propuesta" class="form-control" maxlength="1000" draggable="false"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="submit" >Siguiente</button>
            </div>
        </div>
    </div>
</div>
<div class="row setup-content" id="step-3">
    <div class="col-xs-12">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 margin-top10">
                    <div class="input-group">
                        <label>
                            <span class="glyphicon glyphicon-info-sign ayuda" data-toggle="tooltip" title="Puede anexar documentos con un máximo de 10 MB por documento."></span>
                            Anexar documentación
                        </label>
                        <br>
                    </div>
                </div>

                <div class="col-md-12 margin-top10">
                    {!! Form::button('Enviar', array('type' => 'submit', 'class' => 'btn btn-success', 'data-toggle' => 'tooltip', 'title' => 'Enviar',)) !!}
                </div>
            </div>
        </div>
    </div>
</div>



