<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);

    }

    protected $fillable = ['event_id','full_name','year_level','address'] ;

    public static function list() {

        $students = Student::orderByRaw('id')->get();
        $list = [];
        foreach ($students as $student) {
            $list[$student->id] = $student->full_name;
        }
        return $list;
    }
}
