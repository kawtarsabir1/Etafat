
<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
          @foreach ($columns as $c)
          <th>{{__($lang.$c)}}</th>
          @endforeach
          <th></th>
        
      </tr>
    </thead>
    <tbody>
      @if(!empty($items))
      @foreach ($items as $item)
          <tr>
              @foreach ($columns as $c)
                  <td>{{$item->$c}}</td>
              @endforeach
              <td>


                <div class="btn-group" id="dropdown-icon-demo">
                  <button
                    type="button"
                    class="btn btn-outline-secondary dropdown-toggle"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="ti ti-menu-2 ti-xs me-1"></i> 
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="{{route($route.".show",[$item->id])}}" class="dropdown-item d-flex align-items-center"
                        ><i class="ti ti-chevron-right scaleX-n1-rtl"></i><span>{{__("global.show")}}</span></a
                      >
                    </li>
                    <li>
                      <a href="{{route($route.".edit",[$item->id])}}" class="dropdown-item d-flex align-items-center"
                        ><i class="ti ti-chevron-right scaleX-n1-rtl"></i>{{__("global.edit")}}</a
                      >
                    </li> 
                    <form action="{{route($route.'.destroy', $item->id)}}" method="POST" style="display: inline-block;" id="form-delete-{{$route}}-{{$item->id}}">
                      @csrf
                      @method('DELETE')
                      <a class="dropdown-item d-flex align-items-center" href="#" onclick="submitForm('form-delete-{{$route}}-{{$item->id}}')" title="{{trans('global.delete')}}" data-bs-toggle="tooltip" data-bs-placement="top">
                        <i class="ti ti-chevron-right scaleX-n1-rtl"></i>
                        {{__("global.delete")}}
                      </a>
                  </form>
                  </ul>
                </div>

 
              </td>
          </tr>  
      @endforeach
      @endif
      
      
    </tbody>
  </table><br><br><br><br><br><br><br><br>
</div>

{{-- @push("component-script")

@endpush


@push("component-style")

@endpush --}}
