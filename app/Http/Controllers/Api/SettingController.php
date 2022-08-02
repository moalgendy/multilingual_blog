<?php

namespace App\Http\Controllers\Api;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SettingResource;

class SettingController extends Controller
{
    public function index()
    {
        $settings = SettingResource::make(Setting::checkSettings());
        return response()->json(['data'=>$settings , 'error'=>''] , 200) ;
    }
}
