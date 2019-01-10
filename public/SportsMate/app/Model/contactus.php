<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    protected $table    = 'contactus';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
