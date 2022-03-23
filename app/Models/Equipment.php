<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $fillable = ['name','note_id','price','manufacturer_id','type_id','invoice_id','processor','screen_size','battery'];
    protected $table = "equipments";

    function manufacturer() {
        return $this->belongsTo(Manufacturer::class);// manufacturer
    }
    function note() {
        return $this->belongsTo(Note::class); //employee ID 
    }
    function type() {
        return $this->belongsTo(Type::class); // category 
    }
    
}
