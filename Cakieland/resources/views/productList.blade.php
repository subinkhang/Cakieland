<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product List</title>

        @vite(['resources/css/productList.css', 'resources/js/app.js', 'resource/css/header-footer/css/all.min.css', 'resource/css/header-footer/css/bootstrap.css'])
    </head>
    <body>
    <div class="col-8">
        <div class="row">
            <div class="col-4">	
                <div class="pr-i3">
                    <img src="../header-footer/img/product.png" alt="" class="w-100 productList_image">
                    <div class="container_information">
                        <a href="#" class="pr-i2-name">Slim</a>
                        <ul class="pr-i2-rating d-flex">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <div class="text_product">
                            Taque earum rerum hic tenetur a sapiente maiores alias consequatur aut perferendis doloribus asperiores...
                        </div>
                        <div class="row productList_price">
                            <div class="col-6"><p class="old-price">$134.00</p></div>
                            <div class="col-6 text-end"><p class="new-price">$112.00</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
