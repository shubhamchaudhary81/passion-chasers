<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VacancyType extends Model
{
     protected $fillable = ['name', 'img'];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class, 'type_id');
    }
}
