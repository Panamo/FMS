<?php

namespace FMS;

use Jenssegers\Mongodb\Eloquent\Model as Model;

/**
 * Sell
 * The Sell Model
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property integer company
 *
 */

class Vhip extends Model
{
    protected $fillable = ['company'];
    protected $dates = [];
}
