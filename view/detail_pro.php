<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "./view/header.php";
?>

<div class="flex w-[70%] mx-auto pt-10">
    <div class="basis-2/5">
        <img class="w-full" src="image/adidas-giay-response-super-2-0-h02020-01.webp" alt="">
    </div>
    <div class="basis-3/5">
        <div class="ml-8">
            <h1 class="text-[24px] font-[600]"><?=$name_pro?></h1>
            <div class="flex items-center">
                <div class="flex mt-5">
                    <p class="font-[500]">Thương hiệu:</p>
                    <p class="font-[500] hover:text-[#EA2F38] text-blue-600 ml-1">Adidas</p>
                </div>
            </div>
            <div class="flex items-end gap-x-5">
                <p class="text-[24px] font-[600] text-[#EA2F38] mt-2"><?=$pr?></p>
                <p class="text-[#8d90a6] mb-1 line-through"><?=$pr2?></p>
            </div>
            <p class="text-[#EA2F38] text-[15px] font-[600] mt-2">Hàng xách tay Nhật, Fullbox, Cam
                kết 100% chính hãng, Phát hiện hàng giả xin đền 10 lần tiền.</p>
            <p class="text-[15px] font-[600] mt-1">Ship COD toàn quốc | Miễn phí đổi size, đổi mẫu
                trong 1 tuần !!!</p>
            <p class="text-blue-600 text-[15px] font-[600] mt-1">Showroom : Tầng 3, TTTM PCC1 Mỹ
                Đình Plaza 2, Số 2 Nguyễn Hoàng, Hà Nội</p>
            <div>
                <p class="font-[600] mt-1">Số lượng :</p>
                <div class="flex mt-1">
                    <button class="border px-2">-</button>
                    <p class="border px-2">1</p>
                    <button class="border px-2">+</button>
                </div>
            </div>
            <div>
                <button
                    class="border w-[50%] h-[40px] border-[#EA2F38] bg-[#EA2F38] text-white font-[600] hover:bg-white hover:text-[#EA2F38] mt-3">Mua
                    ngay</button>
            </div>
        </div>
    </div>
</div>
<!-- end product info short -->

<!-- detail -->
<div class="w-[80%] mx-auto py-10">
    <p><?=$detail?></p>
</div>
<div class="w-[80%] mx-auto py-10">
    <h1 class="text-center py-5 text-[22px] font-[500] hover:text-[#EA2F38]"><a href="#">SẢN PHẨM
            LIÊN QUAN</a></h1>
    <div class="grid-cols-4 grid gap-5">
        <div>
            <a href="#">
                <div class="overflow-hidden">
                    <div class="">
                        <img class="w-full"
                            src="image/adidas-giay-response-super-2-0-h02020-01.webp" alt="">
                    </div>
                    <div class="text-center ">
                        <p class="text-[15px] font-[400] hover:text-[#EA2F38]">adidas</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex flex-col">
                            <p class="text-[14px] font-[600] text-[#EA2F38]">100.000<u>đ</u></p>
                            <p class="text-[13px] font-[500] line-through">100.000<u>đ</u></p>
                        </div>
                        <div>
                            <button
                                class="border border-[#EA2F38] bg-[#EA2F38] text-white text-[14px] hover:border-white hover:bg-white hover:text-[#EA2F38] p-[1px]">Chi
                                tiết</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <a href="#">
                <div class="overflow-hidden">
                    <div class="">
                        <img class="w-full"
                            src="image/adidas-giay-response-super-2-0-h02020-01.webp" alt="">
                    </div>
                    <div class="text-center ">
                        <p class="text-[15px] font-[400] hover:text-[#EA2F38]">adidas</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex flex-col">
                            <p class="text-[14px] font-[600] text-[#EA2F38]">100.000<u>đ</u></p>
                            <p class="text-[13px] font-[500] line-through">100.000<u>đ</u></p>
                        </div>
                        <div>
                            <button
                                class="border border-[#EA2F38] bg-[#EA2F38] text-white text-[14px] hover:border-white hover:bg-white hover:text-[#EA2F38] p-[1px]">Chi
                                tiết</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <a href="#">
                <div class="overflow-hidden">
                    <div class="">
                        <img class="w-full"
                            src="image/adidas-giay-response-super-2-0-h02020-01.webp" alt="">
                    </div>
                    <div class="text-center ">
                        <p class="text-[15px] font-[400] hover:text-[#EA2F38]">adidas</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex flex-col">
                            <p class="text-[14px] font-[600] text-[#EA2F38]">100.000<u>đ</u></p>
                            <p class="text-[13px] font-[500] line-through">100.000<u>đ</u></p>
                        </div>
                        <div>
                            <button
                                class="border border-[#EA2F38] bg-[#EA2F38] text-white text-[14px] hover:border-white hover:bg-white hover:text-[#EA2F38] p-[1px]">Chi
                                tiết</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <a href="#">
                <div class="overflow-hidden">
                    <div class="">
                        <img class="w-full"
                            src="image/adidas-giay-response-super-2-0-h02020-01.webp" alt="">
                    </div>
                    <div class="text-center ">
                        <p class="text-[15px] font-[400] hover:text-[#EA2F38]">adidas</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex flex-col">
                            <p class="text-[14px] font-[600] text-[#EA2F38]">100.000<u>đ</u></p>
                            <p class="text-[13px] font-[500] line-through">100.000<u>đ</u></p>
                        </div>
                        <div>
                            <button
                                class="border border-[#EA2F38] bg-[#EA2F38] text-white text-[14px] hover:border-white hover:bg-white hover:text-[#EA2F38] p-[1px]">Chi
                                tiết</button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<hr class="border-[#FD3C57] w-[80%] mx-auto">
<div class="w-[80%] mx-auto pt-3 pb-10 border border-[#F5F5F5] bg-[#F5F5F5]">
    <h1 class=" py-5 text-[22px] font-[500] hover:text-[#EA2F38] ml-10"><a href="#">ĐÁNH GIÁ SẢN
            PHẨM</a></h1>
    <div class="ml-14">
        <div class="flex">
            <img class="rounded-full w-10" src="image/avatar-mac-dinh-1.png" alt="">
            <p class="text-[16px] ml-5">Trường</p>
        </div>
        <p class="ml-3 mt-2 text-gray-400 text-[13px]">2022-07-13</p>
        <p class="mt-2 w-[65%]">Hàng chính hãng … nhưng dùng A0 quen rồi ! Đổi loại mới này ko biết
            thế nào . Nhưng mùi và vị ko bằng A0 nhe</p>
    </div>
    <hr class="border-gray-600 w-[95%] mx-auto my-5">
    <div class="ml-14">
        <div class="flex">
            <img class="rounded-full w-10" src="image/avatar-mac-dinh-1.png" alt="">
            <p class="text-[16px] ml-5">Trường</p>
        </div>
        <p class="ml-3 mt-2 text-gray-400 text-[13px]">2022-07-13</p>
        <p class="mt-2 w-[65%]">Sua dam vi, sanh dac, hoi nhieu mui huong lieu, mong be</p>
    </div>
    <hr class="border-gray-600 w-[95%] mx-auto my-5">
    <div class="ml-14">
        <div class="flex">
            <img class="rounded-full w-10" src="image/avatar-mac-dinh-1.png" alt="">
            <p class="text-[16px] ml-5">Trường</p>
        </div>
        <p class="ml-3 mt-2 text-gray-400 text-[13px]">2022-07-13</p>
        <p class="mt-2 w-[65%]">Sữa thơm, rất ngọt, mình phải pha nhiều hơn hưownhs dẫn mà vẫn thấy
            ngọt, bé hợp tác</p>
    </div>
    <hr class="border-gray-600 w-[95%] mx-auto my-5">
    <div class="ml-14">
        <div class="flex">
            <img class="rounded-full w-10" src="image/avatar-mac-dinh-1.png" alt="">
            <p class="text-[16px] ml-5">Trường</p>
        </div>
        <p class="ml-3 mt-2 text-gray-400 text-[13px]">2022-07-13</p>
        <p class="mt-2 w-[65%]">Mua pro 2. Cho bé trên 6 tháng
            Mà ko hiểu sao lại nhầm thành pro 1...thôi ko sao cho bé uống tạm vậy.</p>
    </div>
    <hr class="border-gray-600 w-[95%] mx-auto my-5">
    <div class="ml-14">
        <div class="flex">
            <img class="rounded-full w-10" src="image/avatar-mac-dinh-1.png" alt="">
            <p class="text-[16px] ml-5">Trường</p>
        </div>
        <p class="ml-3 mt-2 text-gray-400 text-[13px]">2022-07-13</p>
        <p class="mt-2 w-[65%]">Da nhan duoc hang roi nhe shop mình thấy sữa này có mùi chuối sao í
            hjxhjx bé có vẻ chưa thích</p>
    </div>
    <hr class="border-gray-600 w-[95%] mx-auto my-5">
    <h1 class=" py-5 text-[22px] font-[500] hover:text-[#EA2F38] ml-10"><a href="#">Bình luận</a>
    </h1>
    <textarea class="mx-auto w-[80%] ml-10 py-[0.5%] px-[10px]" name="comment" rows="8"
        maxlength="65525" required=""></textarea>
    <br>
    <button
        class="mt-10 ml-10 border-2 border-[#FD3C57] bg-[#FD3C57] text-white text-[17px] px-4 py-1 font-[400] rounded-[6px] hover:bg-white hover:text-[#FD3C57]">Phản
        hồi</button>
</div>
<?php include "./view/footer.php"; ?>