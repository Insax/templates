<?php
namespace App\Helpers;
use DB;

class Elements
{
    public static function NavStart()
    {
        $message = 'Get Shrekd';
        return $message;
    }

    public static function Preloader()
    {
        $message = '<div class="page-preloader preloader-wrapp"><img src="assets/images/logo.png" alt=""><div class="preloader"></div></div>';
        return $message;
    }

    public static function Header($type)
    {
        switch($type)
        {
            case 'home':  $message = '<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">@yield(\'title\')<meta name="description" content=""><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="icon" type="image/png" href="assets/images/icon.png"><link href="http://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css"><link rel="stylesheet" type="text/css" href="{{asset(\'css/bootstrap.min.css\')}}" /><link rel="stylesheet" type="text/css" href="{{asset(\'css/font-awesome.min.css\')}}" /><link rel="stylesheet" type="text/css" href="{{asset(\'css/youplay.min.css\')}}" /><link rel="stylesheet" type="text/css" href="{{asset(\'css/settings.css\')}}" /><!--[if lt IE 9]><script src="{{asset(\'js/html5shiv.min.js\')}}"></script><![endif]--></head>';
        }
        return $message;
    }
}