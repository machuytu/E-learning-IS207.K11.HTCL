<?php

namespace App\Http\Requests;

use App\BaiHoc;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateBaiHocRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('bai_hoc_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'lop_id'         => [
                'required',
            ],
            'ten_bai_hoc'    => [
                'required',
            ],
            'vi_tri_bai_hoc' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
