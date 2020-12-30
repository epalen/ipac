<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h4>Mapa de sitio</h4></div>
  <div class="panel-body">
    <ul style="list-style-type:none;">
      <li><a href="{{ url('/') }}"><strong>Inicio</strong></a></li>   
      <li><strong>Propuestas</strong></li>
      <ul>
        <li style="list-style-type:none;"><a href="{{ url('propuestas') }}">Proponer</a></li>
        <li style="list-style-type:none;"><a href="{{ url('proteccion-personal') }}">Protección Personal</a></li>
      </ul>
      <li><strong>Estadísticas</strong></li>
      <ul>
        <li style="list-style-type:none;"><a href="{{ url('mapa-geografico') }}">Mapa Geográfico</a></li>
        <li style="list-style-type:none;"><a href="{{ url('eje-tematico') }}">Eje Temático</a></li>
        <li style="list-style-type:none;"><a href="{{ url('respuestas-pendientes') }}">Estado Propuestas</a></li>
      </ul>
      <li><a href="{{ url('contacto') }}"><strong>Contacto</strong></a></li>
    </ul>  
  </div>
</div>