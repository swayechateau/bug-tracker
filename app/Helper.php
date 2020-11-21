<?php
namespace App;

use Illuminate\Support\Str;

class Helper {
    public static function RandOrgCode($name = '') {
        if($name) {
            $code = substr($name, -2);
        } else {
            $code = Str::random(2);
        }
        $code = $code.'-'.Str::random(4).'-'.Str::random(3);
        return $code;
    }

    public static function joinOrg($user, $joinCode) {

    }
    public static function addUserOrg($user, $org) {

    }

}