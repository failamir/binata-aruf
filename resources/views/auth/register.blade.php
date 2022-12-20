@extends('layouts.app')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <div class="login-logo">
            <a href="#">
                {{ trans('panel.site_title') }}
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">{{ trans('global.register') }}</p>
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.user_name') }}" value="{{ old('name', null) }}">
                        @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                        @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="required" for="password">{{ trans('cruds.user.fields.password') }}</label>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
                        @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="required" for="password">Password Confirmation</label>
                        <input type="password" name="password_confirmation" class="form-control" required placeholder="{{ trans('global.login_password_confirmation') }}">
                    </div>
                </div>
                <!-- <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
            </div> -->
                <div class="form-group">
                    <label class="required" for="nama_panggilan">{{ trans('cruds.user.fields.nama_panggilan') }}</label>
                    <input class="form-control {{ $errors->has('nama_panggilan') ? 'is-invalid' : '' }}" type="text" name="nama_panggilan" id="nama_panggilan" value="{{ old('nama_panggilan', '') }}" required>
                    @if($errors->has('nama_panggilan'))
                    <span class="text-danger">{{ $errors->first('nama_panggilan') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.nama_panggilan_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="umur">{{ trans('cruds.user.fields.umur') }}</label>
                    <input class="form-control {{ $errors->has('umur') ? 'is-invalid' : '' }}" type="text" name="umur" id="umur" value="{{ old('umur', '18') }}" required>
                    @if($errors->has('umur'))
                    <span class="text-danger">{{ $errors->first('umur') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.umur_helper') }}</span>
                </div>
                <div class="form-group">
                    <div class="form-check {{ $errors->has('approved') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="checkbox" name="approved" id="approved" value="1" required {{ old('approved', 0) == 1 ? 'checked' : '' }}>
                        <label class="required form-check-label" for="approved">{{ trans('cruds.user.fields.approved') }}</label>
                    </div>
                    @if($errors->has('approved'))
                    <span class="text-danger">{{ $errors->first('approved') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.approved_helper') }}</span>
                </div>

                <div class="form-group">
                    <label class="required" for="tempt_tanggal_lahir">{{ trans('cruds.user.fields.tempt_tanggal_lahir') }}</label>
                    <input class="form-control {{ $errors->has('tempt_tanggal_lahir') ? 'is-invalid' : '' }}" type="text" name="tempt_tanggal_lahir" id="tempt_tanggal_lahir" value="{{ old('tempt_tanggal_lahir', '') }}" required>
                    @if($errors->has('tempt_tanggal_lahir'))
                    <span class="text-danger">{{ $errors->first('tempt_tanggal_lahir') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.tempt_tanggal_lahir_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="alamat_asal">{{ trans('cruds.user.fields.alamat_asal') }}</label>
                    <input class="form-control {{ $errors->has('alamat_asal') ? 'is-invalid' : '' }}" type="text" name="alamat_asal" id="alamat_asal" value="{{ old('alamat_asal', '') }}" required>
                    @if($errors->has('alamat_asal'))
                    <span class="text-danger">{{ $errors->first('alamat_asal') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.alamat_asal_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="domisili">{{ trans('cruds.user.fields.domisili') }}</label>
                    <input class="form-control {{ $errors->has('domisili') ? 'is-invalid' : '' }}" type="text" name="domisili" id="domisili" value="{{ old('domisili', '') }}" required>
                    @if($errors->has('domisili'))
                    <span class="text-danger">{{ $errors->first('domisili') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.domisili_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="pekerjaan">{{ trans('cruds.user.fields.pekerjaan') }}</label>
                    <input class="form-control {{ $errors->has('pekerjaan') ? 'is-invalid' : '' }}" type="text" name="pekerjaan" id="pekerjaan" value="{{ old('pekerjaan', '') }}" required>
                    @if($errors->has('pekerjaan'))
                    <span class="text-danger">{{ $errors->first('pekerjaan') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.pekerjaan_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required">{{ trans('cruds.user.fields.status') }}</label>
                    <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Models\User::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('status'))
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.status_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="suku">{{ trans('cruds.user.fields.suku') }}</label>
                    <input class="form-control {{ $errors->has('suku') ? 'is-invalid' : '' }}" type="text" name="suku" id="suku" value="{{ old('suku', '') }}" required>
                    @if($errors->has('suku'))
                    <span class="text-danger">{{ $errors->first('suku') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.suku_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="tinggi_badan">{{ trans('cruds.user.fields.tinggi_badan') }}</label>
                    <input class="form-control {{ $errors->has('tinggi_badan') ? 'is-invalid' : '' }}" type="number" name="tinggi_badan" id="tinggi_badan" value="{{ old('tinggi_badan', '') }}" step="1" required>
                    @if($errors->has('tinggi_badan'))
                    <span class="text-danger">{{ $errors->first('tinggi_badan') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.tinggi_badan_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="berat_badan">{{ trans('cruds.user.fields.berat_badan') }}</label>
                    <input class="form-control {{ $errors->has('berat_badan') ? 'is-invalid' : '' }}" type="number" name="berat_badan" id="berat_badan" value="{{ old('berat_badan', '') }}" step="1" required>
                    @if($errors->has('berat_badan'))
                    <span class="text-danger">{{ $errors->first('berat_badan') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.berat_badan_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="warna_kulit">{{ trans('cruds.user.fields.warna_kulit') }}</label>
                    <input class="form-control {{ $errors->has('warna_kulit') ? 'is-invalid' : '' }}" type="text" name="warna_kulit" id="warna_kulit" value="{{ old('warna_kulit', '') }}" required>
                    @if($errors->has('warna_kulit'))
                    <span class="text-danger">{{ $errors->first('warna_kulit') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.warna_kulit_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="nomor">{{ trans('cruds.user.fields.nomor') }}</label>
                    <input class="form-control {{ $errors->has('nomor') ? 'is-invalid' : '' }}" type="text" name="nomor" id="nomor" value="{{ old('nomor', '') }}" required>
                    @if($errors->has('nomor'))
                    <span class="text-danger">{{ $errors->first('nomor') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.nomor_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="no_wa">{{ trans('cruds.user.fields.no_wa') }}</label>
                    <input class="form-control {{ $errors->has('no_wa') ? 'is-invalid' : '' }}" type="text" name="no_wa" id="no_wa" value="{{ old('no_wa', '') }}" required>
                    @if($errors->has('no_wa'))
                    <span class="text-danger">{{ $errors->first('no_wa') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.no_wa_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="alamat_email">{{ trans('cruds.user.fields.alamat_email') }}</label>
                    <input class="form-control {{ $errors->has('alamat_email') ? 'is-invalid' : '' }}" type="email" name="alamat_email" id="alamat_email" value="{{ old('alamat_email') }}" required>
                    @if($errors->has('alamat_email'))
                    <span class="text-danger">{{ $errors->first('alamat_email') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.alamat_email_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="akun_instagram">{{ trans('cruds.user.fields.akun_instagram') }}</label>
                    <input class="form-control {{ $errors->has('akun_instagram') ? 'is-invalid' : '' }}" type="text" name="akun_instagram" id="akun_instagram" value="{{ old('akun_instagram', '') }}" required>
                    @if($errors->has('akun_instagram'))
                    <span class="text-danger">{{ $errors->first('akun_instagram') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.akun_instagram_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="akun_facebook">{{ trans('cruds.user.fields.akun_facebook') }}</label>
                    <input class="form-control {{ $errors->has('akun_facebook') ? 'is-invalid' : '' }}" type="text" name="akun_facebook" id="akun_facebook" value="{{ old('akun_facebook', '') }}" required>
                    @if($errors->has('akun_facebook'))
                    <span class="text-danger">{{ $errors->first('akun_facebook') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.akun_facebook_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="telegram">{{ trans('cruds.user.fields.telegram') }}</label>
                    <input class="form-control {{ $errors->has('telegram') ? 'is-invalid' : '' }}" type="text" name="telegram" id="telegram" value="{{ old('telegram', '') }}">
                    @if($errors->has('telegram'))
                    <span class="text-danger">{{ $errors->first('telegram') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.telegram_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="twiter">{{ trans('cruds.user.fields.twiter') }}</label>
                    <input class="form-control {{ $errors->has('twiter') ? 'is-invalid' : '' }}" type="text" name="twiter" id="twiter" value="{{ old('twiter', '') }}" required>
                    @if($errors->has('twiter'))
                    <span class="text-danger">{{ $errors->first('twiter') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.twiter_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="tik_tok">{{ trans('cruds.user.fields.tik_tok') }}</label>
                    <input class="form-control {{ $errors->has('tik_tok') ? 'is-invalid' : '' }}" type="text" name="tik_tok" id="tik_tok" value="{{ old('tik_tok', '') }}">
                    @if($errors->has('tik_tok'))
                    <span class="text-danger">{{ $errors->first('tik_tok') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.tik_tok_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="web">{{ trans('cruds.user.fields.web') }}</label>
                    <input class="form-control {{ $errors->has('web') ? 'is-invalid' : '' }}" type="text" name="web" id="web" value="{{ old('web', '') }}">
                    @if($errors->has('web'))
                    <span class="text-danger">{{ $errors->first('web') }}</span>
                    @endif
                    <span class="help-block">{{ trans('cruds.user.fields.web_helper') }}</span>
                </div>
                <div class="row">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ trans('global.register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection