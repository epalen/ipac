<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Preguntas frecuentes</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <ul class="preguntas">
                    <li>
                        <a href="{{ url('preguntas-frecuentes') }}/#pregunta1">
                            <span class="typcn typcn-info-large"></span>
                            ¿Qué es Iniciativa Participativa Anticorrupción (IPAC)?
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('preguntas-frecuentes') }}/#pregunta2">
                            <span class="typcn typcn-info-large"></span>
                            ¿A causa de qué nace la Iniciativa Participativa Anticorrupción (IPAC)?
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('preguntas-frecuentes') }}/#pregunta3">
                            <span class="typcn typcn-info-large"></span>
                            ¿Por quienes estará conformado el Portal de Iniciativa Participativa Anticorrupción?
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="preguntas">
                    <li>
                        <a href="{{ url('preguntas-frecuentes') }}/#pregunta4">
                            <span class="typcn typcn-info-large"></span>
                            ¿Cuáles mesas estarán identificadas en el portal de (IPAC)?
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('preguntas-frecuentes') }}/#pregunta5">
                            <span class="typcn typcn-info-large"></span>
                            ¿Cómo puedo realizar una propuesta?
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('preguntas-frecuentes') }}/#pregunta6">
                            <span class="typcn typcn-info-large"></span>
                            ¿Cuál será el plazo para dar respuestas a las propuestas hechas?
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@include('includes.complementos.enlaces')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="derechos">
                <ul class="imagenes">
                    <li><img src="imagenes/LogoPie.png" alt="DIGEIG" title="DIGEIG"></li>
                    <li><img src="imagenes/RepublicaDominicanaPie.png" alt="República Dominicana" title="República Dominicana"></li>
                </ul>
                <h3 class="derechos-titulo">Dirección General de Ética e Integridad Gubernamental <span>DIGEIG</span></h3>
                <div class="direccion">
                    Ave. Mexico # 419, Esq. Leopoldo Navarro # 12, Edificio de Oficinas Gubernamentales Juan Pablo Duarte, Gazcue, Distrito Nacional, R.D.
                </div>
                <div class="telefonos">
                    <span class="typcn typcn-phone-outline"></span>
                    Tel.: <a href="tel:8096857135">809-685-7135</a>
                    <span class="typcn typcn-device-phone"></span>
                    Whatsapp.: <a href="tel:8292597244">829-259-7244</a>
                </div>
                <div class="correo">
                    <a href="mailto:comunicaciones@digeig.gob.do">comunicaciones@digeig.gob.do</a>
                </div>
                <ul class="botones">
                    <li>
                        <a href="{{ url('terminos-de-uso') }}">Términos de uso</a>
                    </li>
                    <li>
                        <a href="{{ url('politicas-de-privacidad') }}">Políticas de privacidad</a>
                    </li>
                    <li>
                        <a href="{{ url('marco-legal') }}">Marco Legal</a>
                    </li>
                </ul>
                <div class="texto">
                    © DIGEIG - Todos los derechos reservados.
                </div>
            </div>
        </div>
    </div>
</div>