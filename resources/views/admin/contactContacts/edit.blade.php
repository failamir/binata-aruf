@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.contactContact.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.contact-contacts.update", [$contactContact->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="contact_first_name">{{ trans('cruds.contactContact.fields.contact_first_name') }}</label>
                <input class="form-control {{ $errors->has('contact_first_name') ? 'is-invalid' : '' }}" type="text" name="contact_first_name" id="contact_first_name" value="{{ old('contact_first_name', $contactContact->contact_first_name) }}" required>
                @if($errors->has('contact_first_name'))
                    <span class="text-danger">{{ $errors->first('contact_first_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.contact_first_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="contact_name">{{ trans('cruds.contactContact.fields.contact_name') }}</label>
                <input class="form-control {{ $errors->has('contact_name') ? 'is-invalid' : '' }}" type="text" name="contact_name" id="contact_name" value="{{ old('contact_name', $contactContact->contact_name) }}" required>
                @if($errors->has('contact_name'))
                    <span class="text-danger">{{ $errors->first('contact_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.contact_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="tempat_tanggal_lahir">{{ trans('cruds.contactContact.fields.tempat_tanggal_lahir') }}</label>
                <input class="form-control date {{ $errors->has('tempat_tanggal_lahir') ? 'is-invalid' : '' }}" type="text" name="tempat_tanggal_lahir" id="tempat_tanggal_lahir" value="{{ old('tempat_tanggal_lahir', $contactContact->tempat_tanggal_lahir) }}" required>
                @if($errors->has('tempat_tanggal_lahir'))
                    <span class="text-danger">{{ $errors->first('tempat_tanggal_lahir') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.tempat_tanggal_lahir_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="alamat_asal">{{ trans('cruds.contactContact.fields.alamat_asal') }}</label>
                <input class="form-control {{ $errors->has('alamat_asal') ? 'is-invalid' : '' }}" type="text" name="alamat_asal" id="alamat_asal" value="{{ old('alamat_asal', $contactContact->alamat_asal) }}" required>
                @if($errors->has('alamat_asal'))
                    <span class="text-danger">{{ $errors->first('alamat_asal') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.alamat_asal_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="domisili_saat_ini">{{ trans('cruds.contactContact.fields.domisili_saat_ini') }}</label>
                <input class="form-control {{ $errors->has('domisili_saat_ini') ? 'is-invalid' : '' }}" type="text" name="domisili_saat_ini" id="domisili_saat_ini" value="{{ old('domisili_saat_ini', $contactContact->domisili_saat_ini) }}" required>
                @if($errors->has('domisili_saat_ini'))
                    <span class="text-danger">{{ $errors->first('domisili_saat_ini') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.domisili_saat_ini_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="pekerjaan">{{ trans('cruds.contactContact.fields.pekerjaan') }}</label>
                <input class="form-control {{ $errors->has('pekerjaan') ? 'is-invalid' : '' }}" type="text" name="pekerjaan" id="pekerjaan" value="{{ old('pekerjaan', $contactContact->pekerjaan) }}" required>
                @if($errors->has('pekerjaan'))
                    <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.pekerjaan_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.contactContact.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\ContactContact::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $contactContact->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="suku">{{ trans('cruds.contactContact.fields.suku') }}</label>
                <input class="form-control {{ $errors->has('suku') ? 'is-invalid' : '' }}" type="text" name="suku" id="suku" value="{{ old('suku', $contactContact->suku) }}" required>
                @if($errors->has('suku'))
                    <span class="text-danger">{{ $errors->first('suku') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.suku_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="tinggi_badan">{{ trans('cruds.contactContact.fields.tinggi_badan') }}</label>
                <input class="form-control {{ $errors->has('tinggi_badan') ? 'is-invalid' : '' }}" type="number" name="tinggi_badan" id="tinggi_badan" value="{{ old('tinggi_badan', $contactContact->tinggi_badan) }}" step="1" required>
                @if($errors->has('tinggi_badan'))
                    <span class="text-danger">{{ $errors->first('tinggi_badan') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.tinggi_badan_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="berat_badan">{{ trans('cruds.contactContact.fields.berat_badan') }}</label>
                <input class="form-control {{ $errors->has('berat_badan') ? 'is-invalid' : '' }}" type="number" name="berat_badan" id="berat_badan" value="{{ old('berat_badan', $contactContact->berat_badan) }}" step="1" required>
                @if($errors->has('berat_badan'))
                    <span class="text-danger">{{ $errors->first('berat_badan') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.berat_badan_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="warna_kulit">{{ trans('cruds.contactContact.fields.warna_kulit') }}</label>
                <input class="form-control {{ $errors->has('warna_kulit') ? 'is-invalid' : '' }}" type="text" name="warna_kulit" id="warna_kulit" value="{{ old('warna_kulit', $contactContact->warna_kulit) }}" required>
                @if($errors->has('warna_kulit'))
                    <span class="text-danger">{{ $errors->first('warna_kulit') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.warna_kulit_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nomor_handphone">{{ trans('cruds.contactContact.fields.nomor_handphone') }}</label>
                <input class="form-control {{ $errors->has('nomor_handphone') ? 'is-invalid' : '' }}" type="number" name="nomor_handphone" id="nomor_handphone" value="{{ old('nomor_handphone', $contactContact->nomor_handphone) }}" step="1" required>
                @if($errors->has('nomor_handphone'))
                    <span class="text-danger">{{ $errors->first('nomor_handphone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.nomor_handphone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nomor_whats_app">{{ trans('cruds.contactContact.fields.nomor_whats_app') }}</label>
                <input class="form-control {{ $errors->has('nomor_whats_app') ? 'is-invalid' : '' }}" type="number" name="nomor_whats_app" id="nomor_whats_app" value="{{ old('nomor_whats_app', $contactContact->nomor_whats_app) }}" step="1" required>
                @if($errors->has('nomor_whats_app'))
                    <span class="text-danger">{{ $errors->first('nomor_whats_app') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.nomor_whats_app_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="alamat_email">{{ trans('cruds.contactContact.fields.alamat_email') }}</label>
                <input class="form-control {{ $errors->has('alamat_email') ? 'is-invalid' : '' }}" type="text" name="alamat_email" id="alamat_email" value="{{ old('alamat_email', $contactContact->alamat_email) }}" required>
                @if($errors->has('alamat_email'))
                    <span class="text-danger">{{ $errors->first('alamat_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.alamat_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="akun_instagram">{{ trans('cruds.contactContact.fields.akun_instagram') }}</label>
                <input class="form-control {{ $errors->has('akun_instagram') ? 'is-invalid' : '' }}" type="text" name="akun_instagram" id="akun_instagram" value="{{ old('akun_instagram', $contactContact->akun_instagram) }}" required>
                @if($errors->has('akun_instagram'))
                    <span class="text-danger">{{ $errors->first('akun_instagram') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.akun_instagram_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="akun_facebook">{{ trans('cruds.contactContact.fields.akun_facebook') }}</label>
                <input class="form-control {{ $errors->has('akun_facebook') ? 'is-invalid' : '' }}" type="text" name="akun_facebook" id="akun_facebook" value="{{ old('akun_facebook', $contactContact->akun_facebook) }}">
                @if($errors->has('akun_facebook'))
                    <span class="text-danger">{{ $errors->first('akun_facebook') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.akun_facebook_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="akun_telegram">{{ trans('cruds.contactContact.fields.akun_telegram') }}</label>
                <input class="form-control {{ $errors->has('akun_telegram') ? 'is-invalid' : '' }}" type="text" name="akun_telegram" id="akun_telegram" value="{{ old('akun_telegram', $contactContact->akun_telegram) }}">
                @if($errors->has('akun_telegram'))
                    <span class="text-danger">{{ $errors->first('akun_telegram') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.akun_telegram_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="akun_twitter">{{ trans('cruds.contactContact.fields.akun_twitter') }}</label>
                <input class="form-control {{ $errors->has('akun_twitter') ? 'is-invalid' : '' }}" type="text" name="akun_twitter" id="akun_twitter" value="{{ old('akun_twitter', $contactContact->akun_twitter) }}">
                @if($errors->has('akun_twitter'))
                    <span class="text-danger">{{ $errors->first('akun_twitter') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.akun_twitter_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="akun_tiktok">{{ trans('cruds.contactContact.fields.akun_tiktok') }}</label>
                <input class="form-control {{ $errors->has('akun_tiktok') ? 'is-invalid' : '' }}" type="text" name="akun_tiktok" id="akun_tiktok" value="{{ old('akun_tiktok', $contactContact->akun_tiktok) }}">
                @if($errors->has('akun_tiktok'))
                    <span class="text-danger">{{ $errors->first('akun_tiktok') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.akun_tiktok_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="web">{{ trans('cruds.contactContact.fields.web') }}</label>
                <input class="form-control {{ $errors->has('web') ? 'is-invalid' : '' }}" type="text" name="web" id="web" value="{{ old('web', $contactContact->web) }}">
                @if($errors->has('web'))
                    <span class="text-danger">{{ $errors->first('web') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contactContact.fields.web_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection