<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notification;
use App\User;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function getNotifications($type)
    {
        if($type == "5bb7b7a44c2f02464d807231f0083f0f1c221011")
        {
            $notifications = DB::table("notifications")->orderByDesc("id")->limit(100)->get();
            $pendiente = DB::table("notifications")->where("visto",0)->orderByDesc("id")->limit(100)->get();
            return response()->json(["notifications" => $notifications,"pending" => count($pendiente)]);
        }
        else return response()->json(["error" => "parameters"]);
    }

    public function updateNotifySeen($type,$id)
    {
        if($type == "5bb7b7a44c2f02464d807231f0083f0f1c221011")
        {
           $notification = notification::where("id",$id)->first();
           if($notification)
           {
                $userkey = 0;
                if(isset($_COOKIE["USADM-OAUTH"]))
                {
                        $user = User::where(["api_token" => $_COOKIE["USADM-OAUTH"],"graphDomain" => "Administrador"])->first();
                        $userkey = $user->id;                    
                }
                $notification->visto = 1;
                $notification->id_usuario_lectura = $userkey;
                $notification->fecha_lectura = DB::raw('now()');
                $notification->save();
                return response()->json(["success" => "done"]);
           }
           else return response()->json(["error" => "nofound"]);
        }
        else return response()->json(["error" => "parameters"]);
    }
}
