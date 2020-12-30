<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($banner as $banners)
            @if($banners->status == 1)
                <li data-target="#carousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'status' : '' }}"></li>
            @else($banners->status == 0)
            
            @endif
        @endforeach
    </ol>
    
    <div class="carousel-inner" role="listbox">
        @foreach($banner as $banners)
            @if($banners->status == 1)
                <div class="item {{ $loop->first ? 'active' : '' }}">
                    <img class="img-responsive" src="{{ URL::asset('uploads/banners/' . $banners->avatar) }}" alt="First slide">
                </div>
            @else($banners->status == 0)
            
            @endif
        @endforeach
    </div>
 
    <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div> 