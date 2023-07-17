
            <div class="form-group mb-1">
                <label class="form-label" for="{{$name}}">{{trans($label)}} @if($required) <span class="text-red">*</span> @endif</label>
                <input   {{ $errors->has($name) ? 'is-invalid' : '' }}" type="text" class="form-control flatpickr-basic" placeholder="DD-MM-YYY" name="{{$name}}" id="{{ $name }}"  @if(!empty($value)) value="{{ old($name,$value)  }}" @else value="{{ old($name,'') }}" @endif @if($required) required @endif>
                @if($errors->has($name))
                    <div class="invalid-feedback">
                        {{ $errors->first($name) }}
                    </div>
                @endif
                @if(!empty($help))
                <span class="help-block">{{ trans($help) }}</span>
                @endif
            </div>
