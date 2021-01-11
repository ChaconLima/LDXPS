<?php

namespace App\Models\LDXPS;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class Vendor extends Model
{
    use Uuid;
    use HasFactory,Notifiable;

    protected $table = 'vendors';
    protected $primaryKey = 'CDVEND';

    protected $fillable = [
        'DSNOME',
        'CDTAB',
        'DTNASC',
        'created_at',
        'updated_at',
    ];
    //============= transformação da data =================
    public function setDTNASCAttribute($value)
    {
        $this->attributes["DTNASC"] =date('Y-m-d H:i:s',strtotime($value));
    }
    //============= Geração GUID=================
    protected $guarded = [];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->{$post->getKeyName()} = (string) Str::uuid();
        });
    }
    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    public function customers(){
        return $this->hasMany(Customer::class, 'CDVEND' , 'CDVEND' );
    }
    
}
