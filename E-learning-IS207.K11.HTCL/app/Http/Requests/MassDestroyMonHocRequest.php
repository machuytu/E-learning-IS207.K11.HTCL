<?php

namespace App\Http\Requests;

use App\MonHoc;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMonHocRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('mon_hoc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:mon_hocs,id',
        ];
    }
}
