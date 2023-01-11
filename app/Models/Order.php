<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone_no', 'service_id', 'waktu', 'timestamp'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class,'service_id','id');
    }
}
