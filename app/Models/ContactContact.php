<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactContact extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const STATUS_SELECT = [
        'gadis'   => 'Gadis',
        'janda'   => 'Janda',
        'perjaka' => 'Perjaka',
        'duda'    => 'Duda',
    ];

    public $table = 'contact_contacts';

    public static $searchable = [
        'tempat_tanggal_lahir',
    ];

    protected $dates = [
        'tempat_tanggal_lahir',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'contact_first_name',
        'contact_name',
        'tempat_tanggal_lahir',
        'alamat_asal',
        'domisili_saat_ini',
        'pekerjaan',
        'status',
        'suku',
        'tinggi_badan',
        'berat_badan',
        'warna_kulit',
        'nomor_handphone',
        'nomor_whats_app',
        'alamat_email',
        'akun_instagram',
        'akun_facebook',
        'akun_telegram',
        'akun_twitter',
        'akun_tiktok',
        'web',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getTempatTanggalLahirAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setTempatTanggalLahirAttribute($value)
    {
        $this->attributes['tempat_tanggal_lahir'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
