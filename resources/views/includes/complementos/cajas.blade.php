<div class="col-lg-3 col-xs-6">
  <div class="info-box bg-aqua">
    <span class="info-box-icon"><i class="fa fa-building"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Instituciones</span>
      <span class="info-box-number">{{ count($institutions) }}</span>

      <div class="progress">
        <div class="progress-bar" style="width: 100%"></div>
      </div>
          <span class="progress-description">
            Instituciones registradas
          </span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
  <div class="info-box bg-green">
    <span class="info-box-icon"><i class="fa fa-group"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Analistas</span>
      <span class="info-box-number">{{ count($admins) }}</span>

      <div class="progress">
        <div class="progress-bar" style="width: 100%"></div>
      </div>
          <span class="progress-description">
            Analistas registrados
          </span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
  <div class="info-box bg-yellow">
    <span class="info-box-icon"><i class="fa fa-users"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Ciudadanos</span>
      <span class="info-box-number">{{ count($user) }}</span>

      <div class="progress">
        <div class="progress-bar" style="width: 100%"></div>
      </div>
          <span class="progress-description">
            Usuarios registrados
          </span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>