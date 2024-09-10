<?php 


namespace App\Repository;

class ProductsRepository {

    public static function getFeaturedProducts()
    {
        $featuredProducts = [
            [ "name"=>"Gym Weight", "price"=>"$240.00", "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.", "image"=>"feature_prod_01.jpg", "reviews"=> 24, "rate" => 3 ],
            [ "name"=>"Cloud Nike Shoes", "price"=>"$480.00", "description"  => "Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.", "image"=>"feature_prod_02.jpg", "reviews"=>48, "rate" => 3 ],
            [ "name"=>"Summer Addides Shoes", "price"=>"$360.00", "description" => "Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et scelerisque ipsum lobortis nec.", "image"=>"feature_prod_03.jpg", "reviews"=>74, "rate" => 5 ]
        ];

        return $featuredProducts;
    }

}