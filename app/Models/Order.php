<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'order_status',
    ];

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }
    public function order_detail(){
        return $this->hasOne(OrderDetail::class,'order_id');
    }
    public function payment(){
        return $this->hasOne(Payment::class,'order_id');
    }
}
