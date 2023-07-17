<?php

namespace App\Http\Requests;

use App\Models\FileType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFileTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('file_type_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                // 'unique:file_types',
            ],
            'nomenclature' => [
                'string',
                'nullable',
            ],
            'parent' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'module'=>[
                'nullable',
                'string', 
            ],
            'theme_id'=>[
                'nullable',
                'integer',
            ],
            'filetypes'=>[
                'nullable',
                'string',
            ],
            'maxfiles'=>[
                'nullable',
                'integer', 
            ],
            'maxsize'=>[
                'nullable',
                'integer'
            ],
        ];
    }
}
