<?php

namespace App\Http\Requests;

use App\ThongBao;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreThongBaoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('thong_bao_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
        ];
    }
}
