<?php

namespace App\Http\Requests;

use App\Models\ContactContact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreContactContactRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_contact_create');
    }

    public function rules()
    {
        return [
            'contact_first_name' => [
                'string',
                'required',
            ],
            'contact_name' => [
                'string',
                'required',
            ],
            'tempat_tanggal_lahir' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'alamat_asal' => [
                'string',
                'required',
            ],
            'domisili_saat_ini' => [
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
            'nomor_handphone' => [
                'required',
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'nomor_whats_app' => [
                'required',
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'alamat_email' => [
                'string',
                'required',
            ],
            'akun_instagram' => [
                'string',
                'required',
            ],
            'akun_facebook' => [
                'string',
                'nullable',
            ],
            'akun_telegram' => [
                'string',
                'nullable',
            ],
            'akun_twitter' => [
                'string',
                'nullable',
            ],
            'akun_tiktok' => [
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
