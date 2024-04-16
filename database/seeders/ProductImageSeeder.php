<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{

    public function run()
    {
        $productImages = [
            [ //iphone 13 promax
                'product_id' => '1',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/250728/Slider/vi-vn-iphone-13-pro-max-1tb--(1).jpg',
            ],
            [ //iphone 13 promax
                'product_id' => '1',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/250728/Slider/vi-vn-iphone-13-pro-max-1tb--(13).jpg',
            ],
            [ //iphone 13 promax
                'product_id' => '1',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/250728/Slider/vi-vn-iphone-13-pro-max-1tb--(12).jpg',
            ],
            [ //iphone 13 promax
                'product_id' => '1',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/250728/Slider/vi-vn-iphone-13-pro-max-1tb--(11).jpg',
            ],
            [ //iphone 12
                'product_id' => '2',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/228736/Slider/iphone-12-128gb-281120-1020380.jpg',
            ],
            [ //iphone 12
                'product_id' => '2',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/228736/Slider/iphone-12-slider-thiet-ke-780x433.jpg',
            ],
            [ //iphone 12
                'product_id' => '2',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/228736/Slider/iphone-12-128gb-281120-1020412.jpg',
            ],
            [ //iphone 12
                'product_id' => '2',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/228736/Slider/iphone-12-128gb-281120-1020465.jpg',
            ],
            [ //Samsung Galaxy S20 FE
                'product_id' => '3',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/224859/Slider/samsung-galaxy-s20-fan-edition-tongquan-780x433-1.jpg',
            ],
            [ //Samsung Galaxy S20 FE
                'product_id' => '3',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/224859/Slider/vi-vn-samsung-galaxy-s20-fan-edition-manhinh.jpg',
            ],
            [ //Samsung Galaxy S20 FE
                'product_id' => '3',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/224859/Slider/vi-vn-samsung-galaxy-s20-fan-edition-camera.jpg',
            ],
            [ //Samsung Galaxy S20 FE
                'product_id' => '3',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/224859/Slider/samsung-galaxy-s20-fan-edition-rom-780x433.jpg',
            ],
            [ //Samsung Galaxy S22 Ultra 5G 128GB
                'product_id' => '4',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/235838/Slider/2.ButSpen-1020x570.jpg',
            ],
            [ //Samsung Galaxy S22 Ultra 5G 128GB
                'product_id' => '4',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/235838/Slider/3.Trainghiemthigiac-1020x570.jpg',
            ],
            [ //Samsung Galaxy S22 Ultra 5G 128GB
                'product_id' => '4',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/235838/Slider/8.Matthanbongdem-1020x570.jpg',
            ],
            [ //Samsung Galaxy S22 Ultra 5G 128GB
                'product_id' => '4',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/235838/Slider/6.Dungluongpin-1020x570.jpg',
            ],
            [ //Xiaomi Redmi Note 11
                'product_id' => '5',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/245261/Slider/note-11-1020x570.jpeg',
            ],
            [ //Xiaomi Redmi Note 11
                'product_id' => '5',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/245261/Slider/SLIDE5-1020x570.jpg',
            ],
            [ //Xiaomi Redmi Note 11
                'product_id' => '5',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/245261/Slider/SLIDE4new-1020x570.jpg',
            ],
            [ //Xiaomi Redmi Note 11
                'product_id' => '5',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/245261/Slider/tongquan-1020x570.jpg',
            ],
            [ //Xiaomi Redmi Note 11S
                'product_id' => '6',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/267871/Slider/Artboard1-1020x570.jpg',
            ],
            [ //Xiaomi Redmi Note 11S
                'product_id' => '6',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/267871/Slider/Artboard4-1020x570.jpg',
            ],
            [ //Xiaomi Redmi Note 11S
                'product_id' => '6',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/267871/Slider/Artboard2-1020x570.jpg',
            ],
            [ //Xiaomi Redmi Note 11S
                'product_id' => '6',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/267871/Slider/Artboard6-1020x570.jpg',
            ],
            [ //OPPO Reno8 Pro 5G
                'product_id' => '7',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/260546/Slider/oppo-reno8-pro---1--1020x570.jpg',
            ],
            [ //OPPO Reno8 Pro 5G
                'product_id' => '7',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/260546/Slider/oppo-reno8-pro---1--1020x570.jpg',
            ],
            [ //OPPO Reno8 Pro 5G
                'product_id' => '7',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/260546/Slider/oppo-reno8-pro---6--1020x570.jpg',
            ],
            [ //OPPO Reno8 Pro 5G
                'product_id' => '7',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/260546/Slider/oppo-reno8-pro---6--1020x570.jpg',
            ],
            [ // OPPO A55
                'product_id' => '8',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/249944/Slider/oppo-a55-4g637701573072514668.jpg',
            ],
            [ // OPPO A55
                'product_id' => '8',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/249944/Slider/oppo-a55-slider-man-hinh-1020x570.jpg',
            ],
            [ // OPPO A55
                'product_id' => '8',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/249944/Slider/oppo-a55-slider-man-hinh-1020x570.jpg',
            ],
            [ // OPPO A55
                'product_id' => '8',
                'image' => 'https://cdn.tgdd.vn/Products/Images/42/249944/Slider/oppo-a55-slider-camera-1020x570.jpg',
            ],
            [ //Laptop Dell Gaming G15 5511 i5 11400H/8GB/256GB/4GB RTX3050/120Hz/OfficeHS/Win11
                'product_id' => '9',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/264354/Slider/dell-gaming-g15-5511-i5-70266676-fix-ab-01-1020x570-2.jpg',
            ],
            [ //Laptop Dell Gaming G15 5511 i5 11400H/8GB/256GB/4GB RTX3050/120Hz/OfficeHS/Win11
                'product_id' => '9',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/264354/Slider/vi-vn-dell-gaming-g15-5511-i5-70266676-2.jpg',
            ],
            [ //Laptop Dell Gaming G15 5511 i5 11400H/8GB/256GB/4GB RTX3050/120Hz/OfficeHS/Win11
                'product_id' => '9',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/264354/Slider/vi-vn-dell-gaming-g15-5511-i5-70266676-5.jpg',
            ],
            [ //Laptop Dell Gaming G15 5511 i5 11400H/8GB/256GB/4GB RTX3050/120Hz/OfficeHS/Win11
                'product_id' => '9',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/264354/Slider/vi-vn-dell-gaming-g15-5511-i5-70266676-4.jpg',
            ],
            [ //Laptop Dell Vostro 3510 i5 1135G7/8GB/512GB/2GB MX350/OfficeHS/Win11
                'product_id' => '10',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/266280/Slider/vi-vn-dell-vostro-3510-i5-p112f002bbl-1.jpg',
            ],
            [ //Laptop Dell Vostro 3510 i5 1135G7/8GB/512GB/2GB MX350/OfficeHS/Win11
                'product_id' => '10',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/266280/Slider/vi-vn-dell-vostro-3510-i5-p112f002bbl-2.jpg',
            ],
            [ //Laptop Dell Vostro 3510 i5 1135G7/8GB/512GB/2GB MX350/OfficeHS/Win11
                'product_id' => '10',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/266280/Slider/vi-vn-dell-vostro-3510-i5-p112f002bbl-3.jpg',
            ],
            [ //Laptop Dell Vostro 3510 i5 1135G7/8GB/512GB/2GB MX350/OfficeHS/Win11
                'product_id' => '10',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/266280/Slider/vi-vn-dell-vostro-3510-i5-p112f002bbl-5.jpg',
            ],
            [ //Laptop Asus TUF Gaming FX506LHB i5 10300H/8GB/512GB/4GB GTX1650/144Hz/Win11
                'product_id' => '11',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/279259/Slider/vi-vn-asus-tuf-gaming-fx506lhb-i5-hn188w-1.jpg',
            ],
            [ //Laptop Asus TUF Gaming FX506LHB i5 10300H/8GB/512GB/4GB GTX1650/144Hz/Win11
                'product_id' => '11',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/279259/Slider/vi-vn-asus-tuf-gaming-fx506lhb-i5-hn188w-2.jpg',
            ],
            [ //Laptop Asus TUF Gaming FX506LHB i5 10300H/8GB/512GB/4GB GTX1650/144Hz/Win11
                'product_id' => '11',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/279259/Slider/vi-vn-asus-tuf-gaming-fx506lhb-i5-hn188w-2.jpg',
            ],
            [ //Laptop Asus TUF Gaming FX506LHB i5 10300H/8GB/512GB/4GB GTX1650/144Hz/Win11
                'product_id' => '11',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/279259/Slider/vi-vn-asus-tuf-gaming-fx506lhb-i5-hn188w-4.jpg',
            ],
            [ //Laptop Asus VivoBook 15X OLED A1503ZA i5 12500H/8GB/512GB/Win11
                'product_id' => '12',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/284257/Slider/vi-vn-asus-vivobook-15x-oled-a1503za-i5-l1290w-1.jpg',
            ],
            [ //Laptop Asus VivoBook 15X OLED A1503ZA i5 12500H/8GB/512GB/Win11
                'product_id' => '12',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/284257/Slider/vi-vn-asus-vivobook-15x-oled-a1503za-i5-l1290w-2.jpg',
            ],
            [ //Laptop Asus VivoBook 15X OLED A1503ZA i5 12500H/8GB/512GB/Win11
                'product_id' => '12',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/284257/Slider/vi-vn-asus-vivobook-15x-oled-a1503za-i5-l1290w-3.jpg',
            ],
            [ //Laptop Asus VivoBook 15X OLED A1503ZA i5 12500H/8GB/512GB/Win11
                'product_id' => '12',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/284257/Slider/vi-vn-asus-vivobook-15x-oled-a1503za-i5-l1290w-3.jpg',
            ],
            [ //Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU
                'product_id' => '13',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/239552/Slider/vi-vn-apple-macbook-air-m1-2020-z124000de-1.jpg',
            ],
            [ //Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU
                'product_id' => '13',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/239552/Slider/vi-vn-apple-macbook-air-m1-2020-z124000de-2.jpg',
            ],
            [ //Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU
                'product_id' => '13',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/239552/Slider/apple-macbook-air-m1-2020-z124000de-4-1-1-1020x570.jpeg',
            ],
            [ //Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU
                'product_id' => '13',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/239552/Slider/vi-vn-apple-macbook-air-m1-2020-z124000de-5.jpg',
            ],
            [ //Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU
                'product_id' => '14',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/282828/Slider/vi-vn-apple-macbook-pro-13-inch-m2-2022-01.jpg',
            ],
            [ //Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU
                'product_id' => '14',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/282828/Slider/vi-vn-apple-macbook-pro-13-inch-m2-2022-02.jpg',
            ],
            [ //Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU
                'product_id' => '14',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/282828/Slider/vi-vn-apple-macbook-pro-13-inch-m2-2022-02.jpg',
            ],
            [ //Laptop Apple MacBook Pro M2 2022 8GB/256GB/10-core GPU
                'product_id' => '14',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/282828/Slider/vi-vn-apple-macbook-pro-13-inch-m2-2022-05.jpg',
            ],
            [ //Laptop Lenovo Yoga Duet 7 13ITL6 i7 1165G7/16GB/1TB SSD/Touch/Pen/Win10
                'product_id' => '15',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/279450/Slider/vi-vn-lenovo-yoga-duet-7-13itl6-i7-82ma003uvn-2.jpg',
            ],
            [ //Laptop Lenovo Yoga Duet 7 13ITL6 i7 1165G7/16GB/1TB SSD/Touch/Pen/Win10
                'product_id' => '15',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/279450/Slider/vi-vn-lenovo-yoga-duet-7-13itl6-i7-82ma003uvn-3.jpg',
            ],
            [ //Laptop Lenovo Yoga Duet 7 13ITL6 i7 1165G7/16GB/1TB SSD/Touch/Pen/Win10
                'product_id' => '15',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/279450/Slider/vi-vn-lenovo-yoga-duet-7-13itl6-i7-82ma003uvn-5.jpg',
            ],
            [ //Laptop Lenovo Yoga Duet 7 13ITL6 i7 1165G7/16GB/1TB SSD/Touch/Pen/Win10
                'product_id' => '15',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/279450/Slider/vi-vn-lenovo-yoga-duet-7-13itl6-i7-82ma003uvn-4.jpg',
            ],
            [ //Laptop Lenovo Ideapad 3 15IAU7 i3 1215U/8GB/256GB/Win11 (82RK005LVN)
                'product_id' => '16',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/287769/Slider/vi-vn-lenovo-ideapad-3-15iau7-i3-82rk005lvn-1.jpg',
            ],
            [ //Laptop Lenovo Ideapad 3 15IAU7 i3 1215U/8GB/256GB/Win11 (82RK005LVN)
                'product_id' => '16',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/287769/Slider/vi-vn-lenovo-ideapad-3-15iau7-i3-82rk005lvn-2.jpg',
            ],
            [ //Laptop Lenovo Ideapad 3 15IAU7 i3 1215U/8GB/256GB/Win11 (82RK005LVN)
                'product_id' => '16',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/287769/Slider/vi-vn-lenovo-ideapad-3-15iau7-i3-82rk005lvn-3.jpg',
            ],
            [ //Laptop Lenovo Ideapad 3 15IAU7 i3 1215U/8GB/256GB/Win11 (82RK005LVN)
                'product_id' => '16',
                'image' => 'https://cdn.tgdd.vn/Products/Images/44/287769/Slider/vi-vn-lenovo-ideapad-3-15iau7-i3-82rk005lvn-3.jpg',
            ],
            [ // iPad Pro M1 11 inch WiFi Cellular 1TB (2021) 
                'product_id' => '17',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/269329/Slider/ipad-pro-m1-11-inch-wifi-cellular-1tb-2021-1-780x433-1.jpeg'
            ],
            [ // iPad Pro M1 11 inch WiFi Cellular 1TB (2021) 
                'product_id' => '17',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/269329/Slider/vi-vn-ipad-pro-m1-11-inch-wifi-cellular-1tb-2021-2.jpeg'
            ],
            [ // iPad Pro M1 11 inch WiFi Cellular 1TB (2021) 
                'product_id' => '17',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/269329/Slider/vi-vn-ipad-pro-m1-11-inch-wifi-cellular-1tb-2021-3.jpeg'
            ],
            [ // iPad Pro M1 11 inch WiFi Cellular 1TB (2021) 
                'product_id' => '17',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/269329/Slider/vi-vn-ipad-pro-m1-11-inch-wifi-cellular-1tb-2021-4.jpg'
            ],
            [ //iPad Pro M1 12.9 inch WiFi Cellular 128GB
                'product_id' => '18',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/237699/Slider/ipad-pro-m1-129-inch-wifi-128gb-2021-240521-04200510.jpg'
            ],
            [ //iPad Pro M1 12.9 inch WiFi Cellular 128GB

                'product_id' => '18',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/237699/Slider/ipad-pro-m1-129-inch-wifi-2021-9-780x433.jpeg'
            ],
            [ //iPad Pro M1 12.9 inch WiFi Cellular 128GB

                'product_id' => '18',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/237699/Slider/ipad-pro-m1-129-inch-wifi-128gb-2021-240521-0420043.jpg'
            ],
            [ //iPad Pro M1 12.9 inch WiFi Cellular 128GB

                'product_id' => '18',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/237699/Slider/ipad-pro-m1-129-inch-wifi-128gb-2021-240521-04200511.jpg'
            ],
            [ //Máy tính bảng Samsung Galaxy Tab A7 Lite
                'product_id' => '19',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/237325/Slider/vi-vn-samsung-galaxy-tab-a7-lite-tongquan.jpg'
            ],
            [ //Máy tính bảng Samsung Galaxy Tab A7 Lite
                'product_id' => '19',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/237325/Slider/vi-vn-samsung-galaxy-tab-a7-lite-camera.jpg'
            ],
            [ //Máy tính bảng Samsung Galaxy Tab A7 Lite
                'product_id' => '19',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/237325/Slider/vi-vn-samsung-galaxy-tab-a7-lite-kichthuoc.jpg'
            ],
            [ //Máy tính bảng Samsung Galaxy Tab A7 Lite
                'product_id' => '19',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/237325/Slider/vi-vn-samsung-galaxy-tab-a7-lite-bonho.jpg'
            ],
            [ //Máy tính bảng Samsung Galaxy Tab S8 Ultra 5G 
                'product_id' => '20',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/247513/Slider/vi-vn-samsung-galaxy-tab-s8-ultra-1.jpg'
            ],
            [ //Máy tính bảng Samsung Galaxy Tab S8 Ultra 5G 
                'product_id' => '20',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/247513/Slider/samsung-galaxy-tab-s8-ultra637896720092658298.jpg'
            ],
            [ //Máy tính bảng Samsung Galaxy Tab S8 Ultra 5G
                'product_id' => '20',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/247513/Slider/samsung-galaxy-tab-s8-ultra637896720094288231.jpg'
            ],
            [ //Máy tính bảng Samsung Galaxy Tab S8 Ultra 5G 
                'product_id' => '20',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/247513/Slider/vi-vn-samsung-galaxy-tab-s8-ultra-5.jpg'
            ],
            [ //Máy tính bảng Lenovo Tab M10 (Gen 3) 3GB/32GB
                'product_id' => '21',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/285039/Slider/slide-1020x570.jpg'
            ],
            [ //Máy tính bảng Lenovo Tab M10 (Gen 3) 3GB/32GB
                'product_id' => '21',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/285039/Slider/vi-vn-lenovo-tab-m10-gen-3--(3).jpg'
            ],
            [ //Máy tính bảng Lenovo Tab M10 (Gen 3) 3GB/32GB
                'product_id' => '21',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/285039/Slider/vi-vn-lenovo-tab-m10-gen-3--(7).jpg'
            ],
            [ //Máy tính bảng Lenovo Tab M10 (Gen 3) 3GB/32GB
                'product_id' => '21',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/285039/Slider/vi-vn-lenovo-tab-m10-gen-3--(5).jpg'
            ],
            [ //Máy tính bảng Lenovo Tab P11 Plus    
                'product_id' => '22',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/244684/Slider/vi-vn-lenovo-tab-p11-plus-slider-tong-quan.jpg'
            ],
            [ //Máy tính bảng Lenovo Tab P11 Plus    
                'product_id' => '22',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/244684/Slider/vi-vn-lenovo-tab-p11-plus-slider-pin.jpg'
            ],
            [ //Máy tính bảng Lenovo Tab P11 Plus    
                'product_id' => '22',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/244684/Slider/vi-vn-lenovo-tab-p11-plus-slider-helio-g90t.jpg'
            ],
            [ //Máy tính bảng Lenovo Tab P11 Plus    
                'product_id' => '22',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/244684/Slider/vi-vn-lenovo-tab-p11-plus-slider-bao-mat.jpg'
            ],
            [ //Máy tính bảng Masstel Tab 10A 
                'product_id' => '23',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/260139/Slider/vi-vn-masstel-tab-10a-tonqquan-slider.jpg'
            ],
            [ //Máy tính bảng Masstel Tab 10A 
                'product_id' => '23',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/260139/Slider/vi-vn-masstel-tab-10a-thietke-slider.jpg'
            ],
            [ //Máy tính bảng Masstel Tab 10A 
                'product_id' => '23',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/260139/Slider/vi-vn-masstel-tab-10a-pin-slider.jpg'
            ],
            [ //Máy tính bảng Masstel Tab 10A 
                'product_id' => '23',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/260139/Slider/vi-vn-masstel-tab-10a-manhinh-slider.jpg'
            ],
            [ //Máy tính bảng Masstel Tab 10S 
                'product_id' => '24',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/259939/Slider/vi-vn-masstel-tab-10s-tongquan-slider.jpg'
            ],
            [ //Máy tính bảng Masstel Tab 10S 
                'product_id' => '24',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/259939/Slider/vi-vn-masstel-tab-10s-camera-slider.jpg'
            ],
            [ //Máy tính bảng Masstel Tab 10S 
                'product_id' => '24',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/259939/Slider/vi-vn-masstel-tab-10s-cauhinh-slider.jpg'
            ],
            [ //Máy tính bảng Masstel Tab 10S 
                'product_id' => '24',
                'image' => 'https://cdn.tgdd.vn/Products/Images/522/259939/Slider/vi-vn-masstel-tab-10s-pin-slider.jpg'
            ],
            [ // Apple Watch Ultra LTE 49mm 
                'product_id' => '25',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/289823/Slider/apple-watch-ultra-trail-m-l-esim-48-1020x570.jpg'
            ],
            [ // Apple Watch Ultra LTE 49mm 
                'product_id' => '25',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/289823/Slider/apple-watch-ultra-trail-m-l637985873955566010.jpg'
            ],
            [ // Apple Watch Ultra LTE 49mm 
                'product_id' => '25',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/289823/apple-watch-ultra-49mm-day-trail-m-l-black-gray-1.jpg',
            ],
            [ // Apple Watch Ultra LTE 49mm 
                'product_id' => '25',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/289823/apple-watch-ultra-49mm-day-trail-m-l-black-gray-3.jpg'
            ],
            [ //Apple Watch Series 7 GPS 45mm
                'product_id' => '26',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/250638/apple-watch-s7-45mm-2-2.jpg'
            ],
            [ //Apple Watch Series 7 GPS 45mm
                'product_id' => '26',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/250638/apple-watch-s7-45mm-4-2.jpg'
            ],
            [ //Apple Watch Series 7 GPS 45mm
                'product_id' => '26',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/250638/apple-watch-s7-45mm-6-2.jpg'
            ],
            [ //Apple Watch Series 7 GPS 45mm
                'product_id' => '26',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/250638/apple-watch-s7-45mm-7-2.jpg'
            ],
            [ //Samsung Galaxy Watch5 LTE 40mm 
                'product_id' => '27',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/285264/Slider/samsung-galaxy-watch-5-lte637968625595399732.jpg'
            ],
            [ //Samsung Galaxy Watch5 LTE 40mm 
                'product_id' => '27',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/285264/Slider/samsung-galaxy-watch-5-lte637968625599099730.jpg'
            ],
            [ //Samsung Galaxy Watch5 LTE 40mm 
                'product_id' => '27',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/285264/Slider/samsung-galaxy-watch-5-lte637968625601689808.jpg'
            ],
            [ //Samsung Galaxy Watch5 LTE 40mm 
                'product_id' => '27',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/285264/Slider/samsung-galaxy-watch-5-lte637968625602509806.jpg'
            ],
            [ //Samsung Galaxy Watch5 LTE 44mm
                'product_id' => '28',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/286033/Slider/vi-vn-samsung-galaxy-watch5-lte-44mm-1.jpg'
            ],
            [ //Samsung Galaxy Watch5 LTE 44mm
                'product_id' => '28',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/286033/Slider/vi-vn-samsung-galaxy-watch5-lte-44mm-3.jpg'
            ],
            [ //Samsung Galaxy Watch5 LTE 44mm
                'product_id' => '28',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/286033/Slider/vi-vn-samsung-galaxy-watch5-lte-44mm-5.jpg'
            ],
            [ //Samsung Galaxy Watch5 LTE 44mm
                'product_id' => '28',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/286033/Slider/vi-vn-samsung-galaxy-watch5-lte-44mm-7.jpg'
            ],
            [ //Đồng hồ thông minh Amazfit GTR 3 45.8mm
                'product_id' => '29',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/264485/Slider/vi-vn-amazfit-gtr-3-4.jpg'
            ],
            [ //Đồng hồ thông minh Amazfit GTR 3 45.8mm
                'product_id' => '29',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/264485/Slider/vi-vn-amazfit-gtr-3-3.jpg'
            ],
            [ //Đồng hồ thông minh Amazfit GTR 3 45.8mm
                'product_id' => '29',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/264485/Slider/vi-vn-amazfit-gtr-3-6.jpg'
            ],
            [ //Đồng hồ thông minh Amazfit GTR 3 45.8mm
                'product_id' => '29',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/264485/Slider/vi-vn-amazfit-gtr-3-7.jpg'
            ],
            [ //Đồng hồ thông minh Amazfit GTS 4 mini 41.8mm
                'product_id' => '30',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/287737/Slider/vi-vn-amazfit-gts-4-mini-3.jpg'
            ],
            [ //Đồng hồ thông minh Amazfit GTS 4 mini 41.8mm
                'product_id' => '30',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/287737/amazfit-gts-4-mini-hong-4-2.jpg'
            ],
            [ //Đồng hồ thông minh Amazfit GTS 4 mini 41.8mm
                'product_id' => '30',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/287737/amazfit-gts-4-mini-hong-9-2.jpg'
            ],
            [ //Đồng hồ thông minh Amazfit GTS 4 mini 41.8mm
                'product_id' => '30',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/287737/amazfit-gts-4-mini-hong-11-2.jpg'
            ],
            [ //Đồng hồ thông minh Garmin Forerunner 955 46.5mm
                'product_id' => '31',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/283209/Slider/vi-vn-garmin-forerunner-955-day-silicone-1.jpg'
            ],
            [ //Đồng hồ thông minh Garmin Forerunner 955 46.5mm
                'product_id' => '31',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/283209/Slider/vi-vn-garmin-forerunner-955-day-silicone-2.jpg'
            ],
            [ //Đồng hồ thông minh Garmin Forerunner 955 46.5mm
                'product_id' => '31',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/283209/Slider/vi-vn-garmin-forerunner-955-day-silicone-3.jpg'
            ],
            [ //Đồng hồ thông minh Garmin Forerunner 955 46.5mm
                'product_id' => '31',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/283209/Slider/vi-vn-garmin-forerunner-955-day-silicone-7.jpg'
            ],
            [ //Đồng hồ thông minh Garmin Fenix 7 Sapphire 47mm
                'product_id' => '32',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/283634/Slider/dong-ho-thong-minh-garmin-fenix-7-sapphire-vien-titanium637929234519806035.jpeg'
            ],
            [ //Đồng hồ thông minh Garmin Fenix 7 Sapphire 47mm
                'product_id' => '32',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/283634/Slider/dong-ho-thong-minh-garmin-fenix-7-sapphire-vien-titanium637929234524806075.jpeg'
            ],
            [ //Đồng hồ thông minh Garmin Fenix 7 Sapphire 47mm
                'product_id' => '32',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/283634/Slider/dong-ho-thong-minh-garmin-fenix-7-sapphire-vien-titanium637929234525876019.jpeg'
            ],
            [ //Đồng hồ thông minh Garmin Fenix 7 Sapphire 47mm
                'product_id' => '32',
                'image' => 'https://cdn.tgdd.vn/Products/Images/7077/283634/fenix-7-saphhire-den-3.jpg'
            ],

        ];

        foreach ($productImages as $key => $value) {
            ProductImage::create($value);
        }
    }
}
