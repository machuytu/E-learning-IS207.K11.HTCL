<?php

namespace App\Http\Requests;

use App\Lop;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateLopRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('lop_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ten_lop_hoc'  => [
                'required',
            ],
            'thgian_bd'    => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'thgian_kt'    => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'ten_link'     => [
            ],
            'mo_ta'        => [
            ],
            'mo_hoc_id'    => [
                'required',
            ],
            'the_loai_id'  => [
                'required',
                'integer',
            ],
            'giao_vien_id' => [
                'required',
                'integer',
            ],
            'phong_hoc_id' => [
                'required',
                'integer',
            ],
            'hoc_viens.*'  => [
                'integer',
            ],
            'hoc_viens'    => [
                'array',
            ],
        ];
    }
}
