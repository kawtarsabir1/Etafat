<?php

namespace App\Http\Requests;

use App\Models\File;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFileRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('file_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'size' => [
                'numeric',
            ],
            'mime_type' => [
                'string',
                'nullable',
            ],
            'ocr_content' => [
                'string',
                'nullable',
            ],
            'associated_to' => [
                'string',
                'nullable',
            ],
            'type_id' => [
                'required',
                'integer',
            ],
            'site_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
