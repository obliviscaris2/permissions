<?php
namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\History;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class UtilityFunctions{
   static function getUserIP() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    static function getRole(){
        if (User::isSuperAdmin()) {
            $role = Role::with('permissions')->whereNotIn('id', [1])->get();
        } else {
            $role = Role::with('permissions')->whereNotIn('id', [1, 2])->get();
        }
        return $role;
    }

    static function createHistory($message, $type)
    {
        History::create([
            'description' => $message,
            'user_id' => Auth::user()->id,
            'type' => $type,
            'ip_address' => UtilityFunctions::getUserIP(),
        ]);
    }

    static function getEmptyName($input)
    {
        return (!isset($input) || trim($input) === '') ? null : $input;
    }

    static function customPaginate($currentPage,$array,$perPage,$request){
        $itemCollection = collect($array);
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
        $paginatedItems->setPath($request->url());
        return $paginatedItems;
    }


}