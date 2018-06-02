<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model
{
    protected $fillable = [
        'thrombocyte_quantity',
        'plasma_quantity',
        'red_blood_cells_quantity',
        'blood_type',
        'rh',
        'urgency_level',
        'address',
    ];

    protected $appends = ['thrombocyteContainersLeft'];

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function containers()
    {
        return $this->hasMany(BloodContainer::class);
    }

    public function thrombocyteContainers()
    {
        return $this->containers()->where('type', BloodContainerType::THROMBOCYTE);
    }

    public function getThrombocyteContainersLeftAttribute()
    {
        return $this->thrombocyte_quantity - count($this->thrombocyteContainers);
    }

}
