<?php

namespace App\Http\Requests;

use App\TheLoai;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreTheLoaiRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('the_loai_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ten_tl' => [
                'required',
            ],

            'loai_tl' => [
                'required',
            ],
        ];
    }
}
