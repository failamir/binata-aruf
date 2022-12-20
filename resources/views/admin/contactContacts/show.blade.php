@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contactContact.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.contact-contacts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.id') }}
                        </th>
                        <td>
                            {{ $contactContact->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.contact_first_name') }}
                        </th>
                        <td>
                            {{ $contactContact->contact_first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.contact_name') }}
                        </th>
                        <td>
                            {{ $contactContact->contact_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.tempat_tanggal_lahir') }}
                        </th>
                        <td>
                            {{ $contactContact->tempat_tanggal_lahir }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.alamat_asal') }}
                        </th>
                        <td>
                            {{ $contactContact->alamat_asal }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.domisili_saat_ini') }}
                        </th>
                        <td>
                            {{ $contactContact->domisili_saat_ini }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.pekerjaan') }}
                        </th>
                        <td>
                            {{ $contactContact->pekerjaan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\ContactContact::STATUS_SELECT[$contactContact->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.suku') }}
                        </th>
                        <td>
                            {{ $contactContact->suku }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.tinggi_badan') }}
                        </th>
                        <td>
                            {{ $contactContact->tinggi_badan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.berat_badan') }}
                        </th>
                        <td>
                            {{ $contactContact->berat_badan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.warna_kulit') }}
                        </th>
                        <td>
                            {{ $contactContact->warna_kulit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.nomor_handphone') }}
                        </th>
                        <td>
                            {{ $contactContact->nomor_handphone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.nomor_whats_app') }}
                        </th>
                        <td>
                            {{ $contactContact->nomor_whats_app }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.alamat_email') }}
                        </th>
                        <td>
                            {{ $contactContact->alamat_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.akun_instagram') }}
                        </th>
                        <td>
                            {{ $contactContact->akun_instagram }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.akun_facebook') }}
                        </th>
                        <td>
                            {{ $contactContact->akun_facebook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.akun_telegram') }}
                        </th>
                        <td>
                            {{ $contactContact->akun_telegram }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.akun_twitter') }}
                        </th>
                        <td>
                            {{ $contactContact->akun_twitter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.akun_tiktok') }}
                        </th>
                        <td>
                            {{ $contactContact->akun_tiktok }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactContact.fields.web') }}
                        </th>
                        <td>
                            {{ $contactContact->web }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.contact-contacts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection