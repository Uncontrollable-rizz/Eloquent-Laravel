<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\College;
use App\Models\Program;

class Department extends Model
{

    protected $primaryKey = 'deptid';

    public function college()
    {
        return $this->belongsTo(College::class, 'deptcollid', 'collid');
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'progcolldeptid', 'deptid');
    }

}

