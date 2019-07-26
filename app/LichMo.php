<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichMo extends Model
{
    protected $table='lich_mos';
    protected $fillable=['stt','ngay','tenbenhnhan','tuoi','khoa','chandoan','ppphauthuat','bsphauthuat','ppvocamvagiamdau','bsgayme','giomodukien','trangthaicuabenhnhan'];
}
