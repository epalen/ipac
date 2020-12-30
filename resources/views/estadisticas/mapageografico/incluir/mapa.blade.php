<div id="info-box"></div>
<?xml version="1.0" encoding="utf-8"?>
<svg 
    id="rd-map" 
    mapsvg:geoViewBox="-72.004173 19.932499 -68.322347 17.470139"
    width="792.71484"
    height="556.42358" 
    enable-background="new 174 100 959 593" 
    xml:space="preserve">
    <sodipodi:namedview 
        bordercolor="#666666" 
        objecttolerance="10" 
        pagecolor="#ffffff" 
        borderopacity="1" 
        gridtolerance="10" 
        guidetolerance="10" 
        inkscape:cx="509.19152" 
        inkscape:cy="282.2353" 
        inkscape:zoom="1.2137643" 
        showgrid="false" 
        inkscape:current-layer="g5" 
        inkscape:window-maximized="1" 
        inkscape:window-y="-8" 
        inkscape:window-x="-8" 
        inkscape:pageopacity="0" 
        inkscape:window-height="1017" 
        inkscape:window-width="1920" 
        inkscape:pageshadow="2">
    </sodipodi:namedview>
    <g id="g5">
    
    @foreach($datacount as $dt)
        <path
            data-info="<div><b>Provincia:</b> {{ $dt->prname }}</div><div><b>Propuestas:</b> {{ $dt->total }}</div>"
            class="enabled" fill="rgb(32, 65, 154)" stroke="#FFFFFF" stroke-width="0.75"
            d="{{ $dt->prdefine }}"
            title="{{ $dt->prname }}"
            id="{{ $dt->prcode }}" />
    @endforeach

</svg>