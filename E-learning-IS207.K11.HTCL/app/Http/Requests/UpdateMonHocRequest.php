<?php

namespace App\Http\Requests;

use App\MonHoc;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateMonHocRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('mon_hoc_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
        ];
    }
}
