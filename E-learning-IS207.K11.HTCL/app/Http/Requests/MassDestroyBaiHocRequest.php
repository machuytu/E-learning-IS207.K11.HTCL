<?php

namespace App\Http\Requests;

use App\BaiHoc;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyBaiHocRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('bai_hoc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:bai_hocs,id',
        ];
    }
}
