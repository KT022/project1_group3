<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "./view/header.php";
?>
<!-- banner -->
<div class="bg-center" style="background-image: url('./view/images/ccss-bg.png')">
    <div class="w-[80%] mx-auto">
        <h1 class="pt-24 text-[3em] font-[500] text-[#202938]">Bring Jesus Into Your Family
        </h1>
        <p class="mt-5 text-[18px] font-[400] text-gray-500 w-[75%]">What good will it be for
            you to gain the world, yet forfeit your soul? <br>Or what can you give in exchange for
            your soul? Matthew 6:26</p>
        <button
            class="mt-10 mb-32 border-2 border-[#FD3C57] bg-[#FD3C57] text-white text-[17px] px-5 py-3 font-[400] rounded-[6px] hover:bg-white hover:text-[#FD3C57]">SHOP
            NOW</button>
    </div>
</div>
<!-- banner end -->

<!-- 3 boxes -->
<section class="w-[70%] mx-auto">
    <div class="w-[80%] mx-auto grid grid-cols-3 gap-x-9 mt-16">
        <div class="flex items-center justify-center border-2 border-[#FD3C57] py-2">
            <img class="max-w-7 p-3" src="./view/images/delivery-van.svg" alt="">
            <div class="ml-3">
                <p class="text-[18px] font-[500]">Free Shipping</p>
                <p class="text-[#8696A3]">Order over $200</p>
            </div>
        </div>
        <div class="flex items-center justify-center border-2 border-[#FD3C57]">
            <img class="max-w-7 p-3" src="./view/images/money-back.svg" alt="">
            <div class="ml-3">
                <p class="text-[18px] font-[500]">Money Returns</p>
                <p class="text-[#8696A3]">30 Days money return</p>
            </div>
        </div>
        <div class="flex items-center justify-center border-2 border-[#FD3C57]">
            <img class="max-w-7 p-3" src="./view/images/service-hours.svg" alt="">
            <div class="ml-3">
                <p class="text-[18px] font-[500]">24/7 Support</p>
                <p class="text-[#8696A3]">Customer support</p>
            </div>
        </div>
    </div>
    <!-- 3 boxes end -->

    <div class="bg-white mt-10">
        <h1 class="text-center py-5 text-[2em] font-[500] uppercase"><a href="#">new arrival</a>
        </h1>

        <!-- products list-->
        <div class="grid-cols-1 grid gap-12 md:grid-cols-2 lg:grid-cols-4">
            <?php
foreach ($list_product_new as $product) {
    extract($product);
    $name_pro_short = (strlen($name_pro) < 20) ? substr($name_pro, 0, 20) : (substr($name_pro, 0, 20) . '...');
    $pr2 = (isset($price_sale)) ? ('$' . $price) : "";
    $pr = (isset($price_sale)) ? $price_sale : $price;
    echo '
            <!-- product -->       
            <div>
                  <a href="index.php?opt=detail_pro&id_pro='.$id_pro.'">               
                        <img class="w-full max-h-64" src="./upload/' . $img_pro . '" alt="">           
                        <div class="text-center my-2">
                            <p class="text-2xl font-[400] hover:text-[#EA2F38]">' . $name_pro_short . '</p>
                        </div>
                        <div class="flex items-center justify-between max-w-full px-3 ">
                            <div class="flex flex-col">
                                <p class="text-xl font-[600] text-[#EA2F38]">$' . $price . '</p>
                                <p class="text-xl line-through font-light">' . $pr2 . '</p>
                            </div>
                            <div>
                                <button class="border border-[#EA2F38] bg-[#EA2F38] text-white  hover:border-white hover:bg-black px-8 py-3">Detail</button>
                            </div>
                        </div>
                     </a>
                </div>          
            <!-- product end-->
            ';
}
?>
            <!-- products list end -->
        </div>
    </div>

    <!-- banner2 -->
    <div class="bg-red-100 my-20">
        <img src="./view/images//offer1.png" class="max-h-60 mx-auto">
    </div>
    <!-- banner2 end -->

    <div>
        <a href="#">
            <p class=" text-[2em] text-center pb-6 font-[500] uppercase">
                best seller
            </p>
        </a>
        <!-- products list-sale-->
        <div class="grid-cols-4 grid gap-12">
            <?php
foreach ($list_product_best as $product) {
    extract($product);
    $name_pro_short = (strlen($name_pro) < 20) ? substr($name_pro, 0, 20) : (substr($name_pro, 0, 20) . '...');
    $pr2 = (isset($price_sale)) ? ('$' . $price_sale) : "";
    echo '
    <!-- product -->       
    <div>
          <a href="index.php?opt=detail_pro&id_pro='.$id_pro.'">               
                <img class="w-full max-h-64" src="./upload/' . $img_pro . '" alt="">           
                <div class="text-center my-2">
                    <p class="text-2xl font-[400] hover:text-[#EA2F38]">' . $name_pro_short . '</p>
                </div>
                <div class="flex items-center justify-between max-w-full px-3 ">
                    <div class="flex flex-col">
                        <p class="text-xl font-[600] text-[#EA2F38]">$' . $price . '</p>
                        <p class="text-xl line-through font-light">' . $pr2 . '</p>
                    </div>
                    <div>
                        <button class="border border-[#EA2F38] bg-[#EA2F38] text-white  hover:border-white hover:bg-black px-8 py-3">Detail</button>
                    </div>
                </div>
             </a>
        </div>
    
    <!-- product end-->
            ';
}
?>
            <!-- products list end -->
        </div>
    </div>
</section>
<?php include "./view/footer.php"; ?>