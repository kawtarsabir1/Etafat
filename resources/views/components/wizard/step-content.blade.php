<div id="{{ $id }}" class="content" role="tabpanel" aria-labelledby="{{ $id }}-trigger">
    <div class="content-header">
        <h5 class="mb-0">{{ $title }}</h5>
    </div>
    {{ $slot }}




    <div class="d-flex justify-content-between">
        <a class="btn btn-outline-secondary btn-prev" @if($type!="start") disabled @endif>
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">{{__('global.previous')}}</span>
        </a>
        @if($type!="end")
        <a class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">{{__('global.next')}}</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
        </a>
        @else
        <button type="submit" class="btn btn-success">{{__('global.submit')}}</button>
        @endif
    </div>


</div>
