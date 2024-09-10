<?php 


namespace App\Repository;

class CategoriesRepository {

    public static function getAllCategories() 
    {
        $categories = [
            [ "image"=>"category_img_01.jpg", "name"=>"Watches" ],
            [ "image"=>"category_img_02.jpg", "name"=>"Shoes" ],
            [ "image"=>"category_img_03.jpg", "name"=>"Accessories" ],
        ];

        return $categories;
    }

}