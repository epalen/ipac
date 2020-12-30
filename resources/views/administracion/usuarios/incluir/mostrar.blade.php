<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Perfíl de usuario</h3>

        </div>
        <!--/ .box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-xs-12">
              <div class="row">
                <div class="col-md-8 col-xs-8 col-sm-8 col-lg-8">
                  <h2>{{ $admins->name }}</h2>
                  <p><b> {{ $admins->job_title }}</b></p>
                  <p><b> Rol:
                    @if(!empty($admins->roles))
                      @foreach($admins->roles as $v)
                        <label class="label label-info">{{ $v->display_name }}</label>
                      @endforeach
                    @endif
                  </b></p>
                  <p><b> Registrado desde {{ $admins->created_at->setTimezone('America/Santo_Domingo')->format('d-m-Y') }}</b></p>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6 col-lg-2 pull-right">
                @if(!empty($admins->avatar) && file_exists(public_path('uploads/avatars/') . $admins->avatar))
                    <img alt="User Pic" src="{{ URL::asset('uploads/avatars/' . $admins->avatar) }}" id="profile-image1" class="img-circle img-responsive">
                  @else
                    <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">
                @endif
                </div>
              </div>
              <div class="row">
                <div class="col-xs-2">
                  <div class="form-group">
                    <strong>Nombres:</strong>
                    <p>{{ $admins->name }}<p>
                  </div>
                </div>
                <div class="col-xs-5">
                  <div class="form-group">
                    <strong>Institución:</strong>
                    <p>{{ $admins->institutionId->name }}</p>
                  </div>
                </div>
                
                <div class="col-xs-2">
                  <div class="form-group">
                    <strong>Posición:</strong>
                    <p>{{ $admins->job_title }}</p>
                  </div>
                </div>                
              </div>
              <div class="row">
                <div class="col-xs-2">
                  <div class="form-group">
                    <strong>Apellidos:</strong>
                    <p>{{ $admins->lastname }}</p>
                  </div>
                </div>
                <div class="col-xs-5">
                  <div class="form-group">
                    <strong>Area:</strong>
                    <p>{{ $admins->area }}</p>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                    <strong>Teléfono:</strong>
                    <p>{{ substr_replace(substr_replace($admins->phone,'-',3,0),'-',7,0) }} Extensión {{ $admins->extension }}</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-2">
                  <div class="form-group">
                    <strong>Género:</strong>
                    <p>{{ $admins->gender }}</p>
                  </div>
                </div>
                <div class="col-xs-5">
                  <div class="form-group">
                    <strong>Email:</strong>
                    <p>{{ $admins->email }}</p>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                    <strong>Número de flota:</strong>
                    <p>{{ substr_replace(substr_replace($admins->movil,'-',3,0),'-',7,0) }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box-footer clear-fix">
          <a class="btn btn-warning pull-right" href="{{ url('admin/usuarios') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar"><i class="fa fa-arrow-left"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>