<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Bid extends Model
{
    use HasFactory;
    protected $fillable = [
        'Charge', 
        'Months',
        'user_id',
        'OrgId'
    ];
    public function Users()
    {
        return $this->hasOne(User::class, "id");
    }
}
