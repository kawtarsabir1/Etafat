            <div class="form-group">
                <label  class="form-label" for="{{$name}}">{{trans($label)}} @if($required) <span class="text-red">*</span> @endif </label>
                <textarea class="form-control {{ $errors->has($name) ? 'is-invalid' : '' }}" name="{{$name}}" id="{{$name}}">{{$value}}</textarea>
                @if($errors->has($name))
                    <div class="invalid-feedback">
                        {{ $errors->first($name) }}
                    </div>
                @endif
                @if(!empty($help))
                    <span class="help-block">{{trans($help)}}</span>
                @endif
            </div>
