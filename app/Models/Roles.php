<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'name',
    ];

    /**
     * The roles that belong to the Roles
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
public function User(){
    return $this->belongsToMany(User::class);
}
}
