<?php 

namespace App\Repository;

class ServicesRepository 
{
    public static function getAllServices() 
    {
        $services = [
            [ "icon"=>"fa fa-truck fa-lg", "name"=>"Delivery Service" ],
            [ "icon"=>"fas fa-exchange-alt", "name"=>"Shipping & Return" ],
            [ "icon"=>"fa fa-percent", "name"=>"Promotion" ],
            [ "icon"=>"fa fa-user", "name"=>"24 Hours Service" ]
        ];

        return $services;
    }
}
