<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'name',
        'type_id',
        'slots',
        'positions',
        'job_desc',
        'expires_at',
    ];

    protected $dates = ['expires_at'];

    public function type()
    {
        return $this->belongsTo(VacancyType::class, 'type_id');
    }

    public function skills()
    {
        return $this->belongsToMany(VacancySkill::class, 'vacancy_to_skill', 'vacancy_id', 'skill_id');
    }
}