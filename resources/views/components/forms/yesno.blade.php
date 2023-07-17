                            <div class="form-group  mb-1">
                                <label class="form-label" for="{{ $name }}">{{ trans($label) }} @if ($required)
                                        <span class="text-red">*</span>
                                    @endif </label>
                                <select class="form-control {{ $errors->has('roles') ? 'is-invalid' : '' }}"
                                    name="{{ $name }}" id="{{ $name }}"
                                    @if ($required) required @endif>
                                    <option></option>
                                    <option value="oui" {{ $value == 'oui' ? 'selected' : '' }}>Oui</option>
                                    <option value="non" {{ $value == 'non' ? 'selected' : '' }}>Non</option>
                                </select>
                                @if ($errors->has($name))
                                    <div class="invalid-feedback">
                                        {{ $errors->first($name) }}
                                    </div>
                                @endif
                                @if (!empty($help))
                                    <span class="help-block">{{ trans($help) }}</span>
                                @endif

                            </div>
