 
        @if (!empty($title))
        <h4 class="card-title">{{ $title }}</h4>
    @endif 
    <table class="table table-hover">
        <tbody>
            @foreach ($items as $key => $value)
            <tr>
                <td>
                    {{ trans($key) }}
                </td>
                <td>
                    {{-- @if(is_array($value))
                        @foreach ($value as $k => $v)
                            
                            <span class="badge bg-primary">{{$v}}</span>
                        @endforeach
                    @else
                        {{ $value }}
                    @endif --}}
                    @if(is_array($value))
                        @if($value["type"]=="preview" && !empty($value["id"]))
                        <a href="#" onclick="preview('{{ route($value['route'],[$value['id'] ])}}')">{{$value['data']}}</a>
                        @elseif($value["type"]="chips")
                        @if(!empty($value["data"]))
                            @foreach ($value["data"] as $k => $v)
                                <span class="badge bg-primary">{{$v}}</span>
                            @endforeach
                            @endif
                        @endif
                    @else
                        {{ $value }}
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
