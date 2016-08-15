<?php

namespace FMS;

use Jenssegers\Mongodb\Eloquent\Model as Model;

/**
 * Vhip
 * The Vhip Model
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property string letter_code
 * @property \Carbon\Carbon submit_date
 * @property \Carbon\Carbon expire_date
 * @property int total_amount
 * @property string tracking_code
 *
 */

class Vhip extends Model
{
    protected $fillable = ['letter_code', 'submit_date', 'expire_date', 'total_amount', 'tracking_code', 'companies'];
    protected $dates = ['submit_date', 'expire_date'];
}
