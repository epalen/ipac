<div class="container formulario">
    <div class="row">        
        <div class="col-md-12"><br>
            <div class="alert alert-info" role="alert">
                <h4><i class="fa fa-info"></i> Nota:</h4>
                <p>Los datos aquí mostrados, solo podrán ser con fines de consulta en relación a la propuesta emitida por el ciudadano, los mismos no podrán ser utilizados para otros fines quedando bajo la Ley No. 172-13.</p>
            </div>
            @if (Route::has('login'))
                @if (Auth::check())
                    <h2>
                        Formulario de la propuesta
                    </h2>
                    <p>
                        Todos los campos con el <span class="text-danger">*</span> son obligatorios.
                    </p>
                    <h3>Información de la propuesta</h3>   
                    @if ($errors->any())                 
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <h4><i class="icon fa fa-ban"></i> Aviso!</h4>                            
                                @foreach ($errors->all() as $error)
                                    <div>{{$error}}</div>
                                @endforeach                            
                        </div>
                    @endif
                    @if (Route::has('login'))
                        @if (Auth::check())                            
                            {!! Form::open(array('route' => 'propuestas.guardar', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'files' => true)) !!}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="container">
                                            <div class="col-md-12">
                                                <div class="stepwizard">
                                                    <div class="stepwizard-row setup-panel">
                                                        <div class="stepwizard-step">
                                                            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                                            <p>Paso 1</p>
                                                        </div>
                                                        <div class="stepwizard-step">
                                                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                                            <p>Paso 2</p>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>  
                                        </div>
                                        @include('propuestas.proponer.incluir.steps.formulario')
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        @endif
                    @endif                  
                @else
                    <h3>Información del usuario</h3>                
                    @include('propuestas.proponer.incluir.usuario')
                @endif
            @endif            
        </div>
    </div>
</div>


