<?php
/**
 * Created by PhpStorm.
 * User: T0ny
 * Date: 12/9/18
 * Time: 8:04 PM
 */

namespace App\Models;

use App\Models\Auth\User;
use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'url',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
