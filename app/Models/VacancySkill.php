<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VacancySkill extends Model 
{
    protected $fillable = ['skill'];

    public function vacancies()
    {
        return $this->belongsToMany(Vacancy::class, 'vacancy_to_skill', 'skill_id', 'vacancy_id');
    }
}
