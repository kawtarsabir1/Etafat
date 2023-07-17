<div class="row" id="table-hover-row">
    <div class="col-12">
      <div class="card">  
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                @foreach($theme->champs as $c)
                <th>{{$c->label}}</th>
                @endforeach
                <th>Actions</th>
              </tr>
            </thead>
            <tbody> 
                @foreach($rows as $row)
            
                <tr>
                    <td><a id="show-related" href="#">{{$row->id}}</a></td>
                    @foreach($theme->champs as $c)
                    @php $column = 'c_'.$c->id @endphp
                    <td>{{$row->$column}}</td>
                    @endforeach
                
                    <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                        <i data-feather="more-vertical"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">
                            <i data-feather="edit-2" class="me-50"></i>
                            <span>{{__('gloabl.edit')}}</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i data-feather="trash" class="me-50"></i>
                            <span>{{__('gloabl.delete')}}</span>
                        </a>
                        </div>
                    </div>
                    </td>
                </tr>
                <tr  style="display: none;">
                    <td>
                        <div class=row>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        @foreach($theme->champs as $c)
                                        <th>{{$c->label}}</th>
                                        @endforeach
                                        <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        @foreach($rows as $row)
                                    
                                        <tr>
                                            <td><a onclick="showrelated({{$row->id}})" href="#">{{$row->id}}</a></td>
                                            @foreach($theme->champs as $c)
                                            @php $column = 'c_'.$c->id @endphp
                                            <td>{{$row->$column}}</td>
                                            @endforeach
                                        
                                            <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    <i data-feather="edit-2" class="me-50"></i>
                                                    <span>{{__('gloabl.edit')}}</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <i data-feather="trash" class="me-50"></i>
                                                    <span>{{__('gloabl.delete')}}</span>
                                                </a>
                                                </div>
                                            </div>
                                            </td>
                                        </tr>
                                        <div class=row>
                                            <div class="col-md-12">
                        
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  @push('component-script')
  <script>
      $("#show-related").parent().parent().next().show();
  </script>
  @endpush