<?php

namespace App\Models;

use App\Models\Complaint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type_of_complaint extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Complaint(){
        return $this->hasMany(Complaint::class);
    }
}
