<?php

namespace App\Http\Requests;

use App\TheLoai;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTheLoaiRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('the_loai_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:the_loais,id',
        ];
    }
}
