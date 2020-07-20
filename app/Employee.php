<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Employee extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'phone',
        'sector',
        'employer',
        'salary',
        'amount',
        'ready',
        'id_number',
        'id_card_doc',
        'pay_slip_doc',
        'status'
    ];

}
