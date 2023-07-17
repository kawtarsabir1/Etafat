@section("breadcrumb")
    

<div class="mb-1 d-flex justify-content-between">


<nav aria-label="breadcrumb">
    @if(@isset($breadcrumbs))
    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)

        <li class="breadcrumb-item @if(!isset($breadcrumb['url'])) active @endif">
          @if(isset($breadcrumb['url']))
              <a href="{{ $breadcrumb['url'] == 'javascript:void(0)' ? $breadcrumb['url']:url($breadcrumb['url']) }}">
          @endif
                  {{$breadcrumb['title']}}
          @if(isset($breadcrumb['url']))
              </a>
          @endif
      </li>
      @endforeach
     
    @endisset
  </nav>

  <div>
    {{$slot}}
  </div>
</div>
@endsection
