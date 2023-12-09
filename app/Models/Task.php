<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // 1. now these fields are mass-assignable, when creating or updating tasks. via crud operations
    // 2. not all fields should be mass-assignable for security reasons, this protects against error or malicious actions
    // 3. mass-assignable = ability to update multiple fields during a single crud action (create,read, update,delete)
    // 4. other fields, like id and timestamps will not be freely changeable, which protects integrity of the records
    protected $fillable = ['name', 'priority'];
}
