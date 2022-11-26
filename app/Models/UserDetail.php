<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'user_id',
        'NameSei',
        'NameMei',
        'NameSeiKana',
        'NameMeiKana',
        'birthdayY',
        'birthdayM',
        'birthdayD',
        'sex',
        'zip',
        'pref',
        'addr1',
        'addr2',
        'addr3',
        'addr4',
    ];


}
