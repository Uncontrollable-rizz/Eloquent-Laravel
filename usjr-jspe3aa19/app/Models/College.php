<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Department;
use App\Models\Program;

class College extends Model
{
    protected $primaryKey = 'collid';

    public function students()
    {
        return $this->hasMany(Student::class, 'studcollid', 'collid');
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'progcollid', 'collid');
    }

    public function departments()
    {
        return $this->hasMany(Department::class, 'deptcollid', 'collid');
    }
}
