<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table="orders";
    protected $fillable = [
        'date_ord', 
        'table_id', 
        'staff_id', 
        'payment_id',
        // otros campos que necesites
    ];
    public $timestamps = false;

    public function tables() {
        return $this->belongsTo(Tables::class, 'table_id');
    }
    
    public function staff() {
        return $this->belongsTo(Staff::class);
    }
    
    public function payment() {
        return $this->belongsTo(Payment::class);
    }
    
}
