<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-aqua">
    <div class="inner">
      <h3>{{ count($proposal) }}</h3>

      <p>Propuestas</p>
    </div>
    <div class="icon">
      <i class="ion ion-cube"></i>
    </div>
    <!-- <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a> -->
  </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
      <h3>{{ count($approved) }}<sup style="font-size: 20px"></sup></h3>

      <p>Propuestas finalizadas</p>
    </div>
    <div class="icon">
      <i class="ion ion-checkmark"></i>
    </div>
    <!-- <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a> -->
  </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
      <h3>{{ count($proposals_in_process) }}</h3>

      <p>Propuestas en proceso</p>
    </div>
    <div class="icon">
      <i class="ion ion-help"></i>
    </div>
    <!-- <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a> -->
  </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-red">
    <div class="inner">
      <h3>{{ count($pending_proposals) }}</h3>

      <p>Propuestas pendientes</p>
    </div>
    <div class="icon">
      <i class="ion ion-close"></i>
    </div>
    <!-- <a href="#" class="small-box-footer">Más información <i class="fa fa-arrow-circle-right"></i></a> -->
  </div>
</div>
<!-- ./col -->