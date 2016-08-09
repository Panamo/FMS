<?php

namespace FSM;

use Jenssegers\Mongodb\Eloquent\Model as Model;

/**
 * Company
 * The Company Model
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property string $name
 * @property string $address
 * @property array $phones
 *
 */

class Vhip extends Model
{
    protected $fillable = ['name', 'address', 'phones'];
}
