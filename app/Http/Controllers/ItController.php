<?php

namespace App\Http\Controllers;

use App\Models\MerchantModel;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserPermissionModel;
use App\Models\Leads;


class ItController extends Controller
{

    public function UpdateLeadsData()
    {
        $em="abcdefghijklmnopqrstuvwxyz";
        $leads = Leads::get();
        foreach($leads as $lead)
        {
            $email= substr(str_shuffle($em),0,10);
            $number = mt_rand();
            $update = Leads::where('id',$lead->id)->first();
            $update->email= $email.'@gmail.com';
            $update->phone = $number;
            $update->save();
        }
        dd('yes');
    }
}
