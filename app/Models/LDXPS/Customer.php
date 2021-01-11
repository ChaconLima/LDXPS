<?php

namespace App\Models\LDXPS;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class Customer extends Model
{
    use Uuid;
    use HasFactory,Notifiable;

    protected $table = 'customers';
    protected $primaryKey = 'CDCL';

    protected $fillable = [
        'DSNOME',
        'IDTIPO',
        'DSLIM',
        'CDVEND',
        'created_at',
        'updated_at',
    ];

    //===============Por Padrão PF ===========================
    public function setIDTIPOAttribute($value)
    {
        $this->attributes["IDTIPO"] = $value;
        if($this->attributes["IDTIPO"]=="" or $this->attributes["IDTIPO"]==null)
        {
            $this->attributes["IDTIPO"] = "PF";
        }

    }

    //===============Geração GUID ===========================
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

    //=============== Relacionamento de tabela ===========================
    public function vendor(){
        return $this->belongsTo(Vendor::class, 'CDVEND' , 'CDVEND' );
    }
}
