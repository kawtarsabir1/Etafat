<div class="btn-group float-end">
    <button class="btn btn-secondary buttons-collection dropdown-toggle btn-label-primary me-2" data-bs-toggle="dropdown" aria-expanded="false">

        <span><i class="ti ti-file-export me-sm-1"></i>
            <span class="d-none d-sm-inline-block"> {{ __('global.datatables.export') }}</span>
        </span>
        <span class="dt-down-arrow"></span>

    </button>
    <ul class="dropdown-menu" style="">
          <li><a class="dropdown-item" data-id_action="0" href="javascript:void(0);"><i class="ti ti-printer "></i>
            {{ __('global.datatables.print') }}</a></li>
            <li><a class="dropdown-item" data-id_action="1" href="javascript:void(0);"><i class="ti ti-file-spreadsheet"></i>
              {{ __('global.datatables.excel') }}</a></li>
            <li><a class="dropdown-item"  data-id_action="2" href="javascript:void(0);"><i class="ti ti-file-description me-1"></i>
            {{ __('global.datatables.pdf') }}</a></li>
        </ul>


</div>

 