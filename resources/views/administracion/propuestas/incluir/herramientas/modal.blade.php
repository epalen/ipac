@extends('adminlte::page')
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        {!! Form::model($propuestas, ['method' => 'PATCH','route' => ['propuestas.cerrar-proceso', $propuestas->id]]) !!}
            <input name="status" value="1" type="hidden">
            <input type="hidden" name="admins" value="{{ auth::guard('admin')->id() }}">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Cierre de propuesta</h4>
                </div>				
                <div class="modal-body">
                    <div class="callout callout-info">
                        <h4>Cierre de propuesta!</h4>

                        <p>Al cerrar el proceso de evaluación de propuesta, la misma no podrá ser editada y solo estará en estado para fines de revisión.</p>
                    </div>
                    <p>Describa los procesos para el cierre de la propuesta.</p>
                    {!! Form::textarea('comments', null, array('class' => 'form-control', 'size' => '30x3')) !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar ventana</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>