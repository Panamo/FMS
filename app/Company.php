<?php

namespace FMS;

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
 * @property string $type
 * @property string $address
 * @property array $phones
 *
 */

class Company extends Model
{
    protected $fillable = ['name', 'type', 'address', 'phones'];
}
