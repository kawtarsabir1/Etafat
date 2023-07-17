
    {{trans($label)}}
    @foreach($options as $key=>$option)
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="{{$name}}" id="{{$name.$option}}" value="{{$option}}"
            {{$value == $option ? 'checked' : ''}} />
        <label class="form-check-label" for="{{$name.$option}}">{{$key}}</label>
    </div>
    @endforeach
