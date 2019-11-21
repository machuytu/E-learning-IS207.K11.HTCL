<?php

namespace App\Http\Requests;

use App\PhongHoc;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePhongHocRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('phong_hoc_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
        ];
    }
}
