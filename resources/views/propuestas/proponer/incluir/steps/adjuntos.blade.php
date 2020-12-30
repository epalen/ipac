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
        <button class="btn btn-success btn-lg pull-right" type="submit" >Enviar</button>
        {!! Form::button('Enviar', array('type' => 'submit', 'class' => 'btn btn-primary', 'data-toggle' => 'tooltip', 'title' => 'Enviar',)) !!}
    </div>
</div>