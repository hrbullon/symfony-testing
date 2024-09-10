<?php 


namespace App\Repository;


class CarouselRepository {

    public static function getCarouselHome()
    {
        $items = [
            [ 
                "title" => "Zay eCommerce", 
                "subtitle" => "Tiny and Perfect eCommerce Template", 
                "image" => "banner_img_01.jpg",
                "text" => "Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1). This template is 100% free provided by TemplateMo" 
            ],
            [ 
                "title" => "Proident occaecat", 
                "subtitle" => "Aliquip ex ea commodo consequat", 
                "image" => "banner_img_02.jpg",
                "text" => "You are permitted to use this Zay CSS template for your commercial websites. You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites." 
            ],
            [ 
                "title" => "Repr in voluptate", 
                "subtitle" => "Ullamco laboris nisi ut", 
                "image" => "banner_img_03.jpg",
                "text" => "We bring you 100% free CSS templates for your websites. If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you."
            ]
        ];

        return $items;
    }
}