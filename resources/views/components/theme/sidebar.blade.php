@php
        $relations = \Modules\Processus\Entities\Theme\Relationship::where("to_model",$model)->count() > 0 ? \Modules\Processus\Entities\Theme\Relationship::where("to_model",$model)->get() : [];
@endphp

<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" aria-controls="home" role="tab" aria-selected="true">{{$title}}</a>
    </li> 
    @if(!empty($relations))
    @foreach($relations as $relation)
    <li class="nav-item">
      <a class="nav-link" id="{{$relation->from->name}}-tab" data-bs-toggle="tab" href="#{{$relation->from->name}}" aria-controls="{{$relation->from->name}}" role="tab" aria-selected="true">{{$relation->from->nom}}</a>
    </li> 
    @endforeach
    @endif
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
    {{$slot}}
  </div> 

  @if(!empty($relations))
  @foreach($relations as $relation)
  <div class="tab-pane" id="{{$relation->from->name}}" aria-labelledby="{{$relation->from->name}}-tab" role="tabpanel">
    @if($relation->type=="n_1")
      <x-theme.table :theme="$relation->from" :relation="$relation" :id="$id"></x-theme.table>
    @elseif($relation->type=="1_n")
      <x-theme.one :theme="$relation->from"></x-theme.one>
    @endif
  </div> 
  @endforeach
  @endif

</div>