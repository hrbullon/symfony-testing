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
    
    public static function getAllCategoriesByShop() 
    {
        $categories = [
            [ 
                "name"=>"Gender", 
                "subcategory"=>[ 
                    [ "name" => "Men", "path" => "" ], 
                    [ "name" => "Women", "path" => "" ] 
                ], 
                "path" => "#" 
            ],
            [ 
                "name"=>"Sale", 
                "subcategory"=>[ 
                    [ "name" => "Sport", "path" => "" ], 
                    [ "name" => "Luxury", "path" => "" ] 
                ], 
                "path" => "#" 
            ],
            [ 
                "name"=>"Product", 
                "subcategory"=>[ 
                    [ "name" => "Bag", "path" => "" ], 
                    [ "name" => "Sweather", "path" => "" ],
                    [ "name" => "Sunglass", "path" => "" ] 
                ], 
                "path" => "#" 
            ],
        ];

        return $categories;
    }

}