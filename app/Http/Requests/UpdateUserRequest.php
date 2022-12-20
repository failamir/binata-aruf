<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_edit');
    }

    public function rules()
    {
        return [
            'email' => [
                'required',
                'unique:users,email,' . request()->route('user')->id,
            ],
            'name' => [
                'string',
                'required',
            ],
            'nama_panggilan' => [
                'string',
                'required',
            ],
            'umur' => [
                'string',
                'required',
            ],
            'approved' => [
                'required',
            ],
            'roles.*' => [
                'integer',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'tempt_tanggal_lahir' => [
                'string',
                'required',
            ],
            'alamat_asal' => [
                'string',
                'required',
            ],
            'domisili' => [
                'string',
                'required',
            ],
            'pekerjaan' => [
                'string',
                'required',
            ],
            'status' => [
                'required',
            ],
            'suku' => [
                'string',
                'required',
            ],
            'tinggi_badan' => [
                'required',
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'berat_badan' => [
                'required',
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'warna_kulit' => [
                'string',
                'required',
            ],
            'nomor' => [
                'string',
                'required',
            ],
            'no_wa' => [
                'string',
                'required',
            ],
            'alamat_email' => [
                'required',
            ],
            'akun_instagram' => [
                'string',
                'required',
            ],
            'akun_facebook' => [
                'string',
                'required',
            ],
            'telegram' => [
                'string',
                'nullable',
            ],
            'twiter' => [
                'string',
                'required',
            ],
            'tik_tok' => [
                'string',
                'nullable',
            ],
            'web' => [
                'string',
                'nullable',
            ],
        ];
    }
}
