
                            <div class="form-group  mb-1">
                                <label class="form-label" for="{{ $name }}">{{ trans($label) }} @if ($required)
                                        <span class="text-red">*</span>
                                    @endif </label>
                                <select
                                    class="form-select  @if ($select2) select2 @endif {{ $errors->has('roles') ? 'is-invalid' : '' }}" data-allow-clear="true"
                                    name="{{ $name }}@if ($multiple)[]@endif"
                                    id="{{ $name }}"
                                    @if ($multiple) multiple @endif
                                    @if ($required) required @endif>

                                    @if($emptyoption)
                                    <option></option>
                                    @endif
                                    
                                    {{-- @foreach ($options as $id => $option)
                                        @if(is_array($value))
                                            <option value="{{ $id }}" {{ in_array($id,$value) ? 'selected' : '' }}>{{ $option }}</option>
                                        @else
                                            <option value="{{ $id }}" {{ $value == $id ? 'selected' : '' }}>{{ $option }}</option>
                                        @endif
                                    @endforeach --}}
                                </select>
                                @if ($errors->has($name))
                                    <div class="invalid-feedback">
                                        {{ $errors->first($name) }}
                                    </div>
                                @endif
                                @if (!empty($help))
                                    <span class="help-block">{{ $help }}</span>
                                @endif

                            </div>



                            @push('component-script')

                            <script>
                                $('#{{$dom}}').on('change',()=>{
                                    $("#{{ $name }}").empty();
                                    let value = $("#{{$dom}}").val();
                                    $.post("{{route('api.getdata')}}",{table:'{{$table}}',field:'{{$field}}',condition:'{{$condition}}' + value}).then(data=>{
                                        data.forEach(d=>{
                                            $("#{{ $name }}").append("<option value='" + d.id + "'>" + d.{{$field}} + "</option>")
                                        });
                                    });
                                })
                            </script>
                            @endpush