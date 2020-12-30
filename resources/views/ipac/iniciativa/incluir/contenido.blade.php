<div class="container margin-top10">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/') }}"><i class="typcn typcn-home"></i> Inicio</a>
                </li>
                <li class="active">
                    <a href="{{ url('iniciativa') }}"><i class="typcn typcn-document-text"></i> Iniciativa</a>
                </li>
            </ol>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            @include('ipac.iniciativa.incluir.iniciativa')
        </div>
    </div>
</div>