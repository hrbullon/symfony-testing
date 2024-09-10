<?php 

namespace App\Repository;

class BrandsRepository 
{
    public static function getAllBrands() 
    {
        $brands = [
            [ "logo"=>"brand_01.png", "alt"=>"Levi's" ],
            [ "logo"=>"brand_02.png", "alt"=>"Adidas" ],
            [ "logo"=>"brand_03.png", "alt"=>"Nike" ],
            [ "logo"=>"brand_04.png", "alt"=>"H&M" ]
        ];

        return $brands;
    }
}
