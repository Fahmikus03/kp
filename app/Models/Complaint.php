<?php

namespace App\Models;

use App\Models\Type_of_complaint;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Complaint extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Type_of_complaint(){
        return $this->belongsTo(Type_of_complaint::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
