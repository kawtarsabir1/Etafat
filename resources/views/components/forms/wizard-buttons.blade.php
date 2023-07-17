<div class="d-flex justify-content-between ">
    @if ($type == 'start' || $type == 'end')
        <div></div>
    @else
        <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
        </button>
    @endif
    <button type="submit" class="btn btn-success">{{ __('global.submit') }}</button>
</div>
