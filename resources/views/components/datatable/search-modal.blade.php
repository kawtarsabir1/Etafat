<button type="button" class="float-end btn  btn-label-primary waves-effect" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#search-modal">
 

        <span><i class="ti ti-search me-sm-1"></i>
            <span class="d-none d-sm-inline-block"> {{ trans('global.advanced_search') }}</span>
        </span>

</button>
<div class="modal fade effect-scale" id="search-modal"  aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">recherche</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="search-form">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="tab-menu-heading tab-menu-heading-boxed">
                                <div class="tabs-menu-boxed">
                                    <ul class="nav nav-tabs" role="tablist">
                                        @foreach ($searchAttributes as $key => $att)
                                            <li class="nav-item"><a class="nav-link @if ($loop->first) active @endif" data-bs-toggle="tab" href="#tab_{{$key}}">{{$att["name"]}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                    @foreach ($searchAttributes as $key => $att)
                                        <div class="tab-pane @if ($loop->first) active @endif" id="tab_{{$key}}">
                                            @foreach($att["inputs"] as $input)
                                                @if($input["type"]=="text")
                                                    <x-forms.input :id="$input['dom']" :required="false" :name="$input['data']" :label="$input['title']" :type="'text'"></x-forms.input>
                                                @elseif($input["type"]=="select")
                                                    <x-forms.select :id="$input['dom']" :options="$input['values']" :required="false" :name="$input['data']" :label="$input['title']" :select2="true"></x-forms.select>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('global.close')}}</button>
                <button type="button" class="btn btn-primary" onclick="search()">{{__('global.search')}}</button>
            </div>
        </div>
    </div>
</div>






@push("component-script")
    <script>
        function search(){
            let data = [];
            @foreach ($searchAttributes as $key => $att)
                @foreach($att["inputs"] as $input)
                data["{{$input['data']}}"] = $("#{{$input['dom']}}").val();
                @endforeach
            @endforeach

                let ret =[]
            for (let d in data){
                if(data[d])
                    ret.push(encodeURIComponent(d) + '=' + encodeURIComponent(data[d]));
                }
            let rs = ret.join('&');
            console.log(rs);
            {{ $var }}.ajax.url("{{$url}}?"+rs);
            {{ $var }}.ajax.reload();
            $("#search-modal").modal("hide");
        }
    </script>
@endpush
