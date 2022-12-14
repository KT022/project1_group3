<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "./view/header.php";
?>

<div class="flex w-[70%] mx-auto pt-10">
    <div class="basis-2/5">
        <img class="w-full max-h-[30em]" src="./upload/<?= $img_pro?>" alt="">
    </div>
    <div class="basis-3/5">
        <div class="ml-8">
            <h1 class="text-[24px] font-[600]">
                <?= $name_pro?>
            </h1>
            <!-- <div class="flex items-center">
                <div class="flex mt-5">
                    <p class="font-[500]">Thương hiệu:</p>
                    <p class="font-[500] hover:text-[#EA2F38] text-blue-600 ml-1">Adidas</p>
                </div>
            </div> -->
            <div class="flex items-end gap-x-5">
                <p class="text-[24px] font-[600] text-[#EA2F38] mt-2">$
                    <?= $pr?>
                </p>
                <p class="text-[#8d90a6] mb-1 line-through">
                    <?= $pr2?>
                </p>
            </div>
            <!-- <p class="text-[#EA2F38] text-[15px] font-[600] mt-2">Hàng xách tay Nhật, Fullbox, Cam
                kết 100% chính hãng, Phát hiện hàng giả xin đền 10 lần tiền.</p> -->
            <!-- <p class="text-[15px] font-[600] mt-1">Ship COD toàn quốc | Miễn phí đổi size, đổi mẫu
                trong 1 tuần !!!</p> -->
            <p class="text-blue-600 text-[15px] font-[600] mt-1">
                <?= $detail_pro_short?>
            </p>
            <div>
                <p class="font-[600] mt-1">Quanity :</p>
                <div class="flex mt-1">
                    <button class="border px-2">-</button>
                    <p class="border px-2">1</p>
                    <button class="border px-2">+</button>
                </div>
            </div>
            <div>
                <button
                    class="border w-[50%] h-[40px] border-[#EA2F38] bg-[#EA2F38] text-white font-[600] hover:bg-white hover:text-[#EA2F38] mt-3">Add
                    to cart</button>
            </div>
        </div>
    </div>
</div>
<!-- end product info short -->

<!-- detail -->
<div class="w-[80%] mx-auto py-10">
    <p>
        <?= $detail?>
    </p>
</div>
<div class="w-[80%] mx-auto py-10">
    <h1 class="text-center py-5 text-[22px] font-[500] hover:text-[#EA2F38]"><a href="#">Related
            products</a></h1>
    <div class="grid-cols-4 grid gap-5">
        <?php
foreach ($pro_same_cate as $product) {
    extract($product);
    $name_pro_short = (strlen($name_pro) < 20) ? substr($name_pro, 0, 20) : (substr($name_pro, 0, 20) . '...');
    echo '
            <!-- product -->       
            <div>
                  <a href="index.php?opt=detail_pro&id_pro=' . $id_pro . '">               
                        <img class="w-full max-h-64" src="./upload/' . $img_pro . '" alt="">           
                        <div class="text-center my-2">
                            <p class="text-2xl font-[400] hover:text-[#EA2F38]">' . $name_pro_short . '</p>
                        </div>
                        <div class="flex items-center justify-between max-w-full px-3 ">
                            <div class="flex flex-col">
                                <p class="text-xl font-[600] text-[#EA2F38]">$' . $pr . '</p>
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

    </div>
</div>
</div>
<hr class="border-[#FD3C57] w-[80%] mx-auto">
<div class="w-[80%] mx-auto pt-3 pb-10 border border-[#F5F5F5] bg-[#F5F5F5]">
    <h1 class=" py-5 text-[22px] font-[500] hover:text-[#EA2F38] ml-10"><a href="#">comments</a>
    </h1>
    <div class="ml-14">
        <div class="flex">
            <img class="w-10" src="./view/images/ava.jpg" alt="">
            <p class="text-[16px] ml-1">Trường</p>
        </div>
        <p class="ml-3 mt-2 text-gray-400 text-[13px]">2022-07-13</p>
        <p class="mt-2 w-[65%]">Hàng chính hãng … nhưng dùng A0 quen rồi ! Đổi loại mới này ko biết
            thế nào . Nhưng mùi và vị ko bằng A0 nhe</p>
    </div>
    <hr class="border-gray-600 w-[95%] mx-auto my-5">

    <div class="ml-14">
        <div class="flex">
            <img class="w-10" src="./view/images/ava.jpg" alt="">
            <p class="text-[16px] ml-2">Trường</p>
        </div>
        <p class="ml-3 mt-2 text-gray-400 text-[13px]">2022-07-13</p>
        <p class="mt-2 w-[65%]">Mua pro 2. Cho bé trên 6 tháng
            Mà ko hiểu sao lại nhầm thành pro 1...thôi ko sao cho bé uống tạm vậy.</p>
    </div>
    <hr class="border-gray-600 w-[95%] mx-auto my-5">
    <div class="ml-14">
        <div class="flex">
            <img class="w-10" src="./view/images/ava.jpg" alt="">
            <p class="text-[16px] ml-2">Trường</p>
        </div>
        <p class="ml-3 mt-2 text-gray-400 text-[13px]">2022-07-13</p>
        <p class="mt-2 w-[65%]">Da nhan duoc hang roi nhe shop mình thấy sữa này có mùi chuối sao í
            hjxhjx bé có vẻ chưa thích</p>
    </div>
    <hr class="border-gray-600 w-[95%] mx-auto my-5">
    <h1 class=" py-5 text-[22px] font-[500] hover:text-[#EA2F38] ml-10"><a href="#">Comments</a>
    </h1>
    <textarea class="mx-auto w-[80%] ml-10 py-[0.5%] px-[10px]" name="comment" rows="8"
        maxlength="65525" required=""></textarea>
    <br>
    <button
        class="mt-10 ml-10 border-2 border-[#FD3C57] bg-[#FD3C57] text-white text-[17px] px-4 py-1 font-[400] rounded-[6px] hover:bg-white hover:text-[#FD3C57]">Post</button>
</div>
<?php include "./view/footer.php"; ?>