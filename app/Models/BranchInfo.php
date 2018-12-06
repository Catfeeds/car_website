<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchInfo extends Model
{
    public function goods()
    {
    	return $this->hasMany(Good::class,'branch_id');
    }
}
