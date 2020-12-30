@if(Auth::user()->hasRole(['manager', 'institutional_analyst']))
    <div class="col-xs-12">
        <div class="form-group">
            @foreach($allTopics as $tpc)
                <div class="checkbox">
                    <label>
                    {!! Form::checkbox('Topic_id[]', $tpc->name, $proposalTopics->firstWhere('name', $tpc->name)? true : false) !!} {{ $tpc->name }}       
                    </label>
                </div>
            @endforeach
        </div>
    </div>    
@endif

        

        

        