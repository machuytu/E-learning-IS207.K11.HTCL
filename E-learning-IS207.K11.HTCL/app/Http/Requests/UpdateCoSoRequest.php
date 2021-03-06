<?php

namespace App\Http\Requests;

use App\CoSo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateCoSoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('co_so_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ten_cs' => [
                'required',
            ],
        ];
    }
}
