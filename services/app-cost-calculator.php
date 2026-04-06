<?php
require_once __DIR__ . '/../includes/config.php';
$page_title = 'Mobile App Development Cost Calculator | Free Estimate — ArtisticWebServices';
$page_description = 'Use our free mobile app development cost calculator to estimate your project budget. Get accurate insights based on features, complexity, platform (iOS/Android), and team size.';
$page_keywords = 'mobile app development cost calculator, app development cost estimate, how much does app development cost, app budget calculator, iOS Android app cost, software development cost USA';
$page_canonical = 'https://artisticwebservices.com/services/app-cost-calculator';
$page_og_image = 'https://artisticwebservices.com/assets/images/resources/artisticwebservice w.png';
$page_breadcrumbs = [['name' => 'Services', 'url' => 'https://artisticwebservices.com/services.php'], ['name' => 'App Cost Calculator', 'url' => 'https://artisticwebservices.com/services/app-cost-calculator.php']];
require_once __DIR__ . '/../includes/head.php';
$B = defined('SITE_BASE') ? SITE_BASE : '';
?>

<style>
       .calculator-hero {
    min-height: 70vh;
    display: flex;
    align-items: center;
    background: #17161a;
}


        .checkbox-wrapper-16 *,
        .checkbox-wrapper-16 *:after,
        .checkbox-wrapper-16 *:before {
            box-sizing: border-box;
        }

        .checkbox-wrapper-16 .checkbox-input {
            clip: rect(0 0 0 0);
            -webkit-clip-path: inset(100%);
            clip-path: inset(100%);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }

        .checkbox-wrapper-16 .checkbox-input:checked+.checkbox-tile {
            border-color: #dd0429;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            color: #dd0429;
        }

        .checkbox-wrapper-16 .checkbox-input:checked+.checkbox-tile:before {
            transform: scale(1);
            opacity: 1;
            background-color: #dd0429;
            border-color: #dd0429;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #dd0429 !important;
        }

        .checkbox-wrapper-16 .checkbox-input:checked+.checkbox-tile .checkbox-icon,
        .checkbox-wrapper-16 .checkbox-input:checked+.checkbox-tile .checkbox-label {
            color: #dd0429;
        }

        .checkbox-wrapper-16 .checkbox-input:focus+.checkbox-tile {
            border-color: #dd0429;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1), 0 0 0 4px #b5c9fc;
        }

        .checkbox-wrapper-16 .checkbox-input:focus+.checkbox-tile:before {
            transform: scale(1);
            opacity: 1;
        }

        .checkbox-wrapper-16 .checkbox-tile {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 10rem;
            min-height: 7rem;
            border-radius: 0.5rem;
            border: 2px solid #b5bfd9;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            transition: 0.15s ease;
            cursor: pointer;
            position: relative;
        }

        .checkbox-wrapper-16 .checkbox-tile:before {
            content: "";
            position: absolute;
            display: block;
            width: 0.75rem;
            height: 0.75rem;
            border: 2px solid #b5bfd9;
            background-color: #fff;
            border-radius: 50%;
            top: 0.25rem;
            left: 0.25rem;
            opacity: 0;
            transform: scale(0);
            transition: 0.25s ease;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='://www.w3.org/2000/svg' width='192' height='192' fill='%23FFFFFF' viewBox='0 0 256 256'%3E%3Crect width='256' height='256' fill='none'%3E%3C/rect%3E%3Cpolyline points='216 72.005 104 184 48 128.005' fill='none' stroke='%23FFFFFF' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'%3E%3C/polyline%3E%3C/svg%3E");
            background-size: 12px;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }

        .checkbox-wrapper-16 .checkbox-tile:hover {
            border-color: #dd0429;
        }

        .checkbox-wrapper-16 .checkbox-tile:hover:before {
            transform: scale(1);
            opacity: 1;
        }

        .checkbox-wrapper-16 .checkbox-icon {
            transition: 0.375s ease;
            color: #494949;
        }

        .checkbox-wrapper-16 .checkbox-icon img {
            width: 3rem;
            height: 3rem;
        }

        .checkbox-wrapper-16 .checkbox-label {
            color: #707070;
            transition: 0.375s ease;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            font-size: small;
        }

        .radio-inputs {
            max-width: 350px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .radio-input:checked+.radio-tile {
            border-color: #dd0429;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            color: #dd0429;
        }

        .radio-input:checked+.radio-tile:before {
            transform: scale(1);
            opacity: 1;
            background-color: #dd0429;
            border-color: #dd0429;
        }

        .radio-input:checked+.radio-tile .radio-icon svg {
            fill: #dd0429;
        }

        .radio-input:checked+.radio-tile .radio-label {
            color: #dd0429;
        }

        .radio-input:focus+.radio-tile {
            border-color: #dd0429;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1), 0 0 0 4px #b5c9fc;
        }

        .radio-input:focus+.radio-tile:before {
            transform: scale(1);
            opacity: 1;
        }

        .radio-tile {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 10rem;
            min-height: 7rem;
            border-radius: 0.5rem;
            border: 2px solid #b5bfd9;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            transition: 0.15s ease;
            cursor: pointer;
            position: relative;
        }

        .radio-tile:before {
            content: "";
            position: absolute;
            display: block;
            width: 0.75rem;
            height: 0.75rem;
            border: 2px solid #b5bfd9;
            background-color: #fff;
            border-radius: 50%;
            top: 0.25rem;
            left: 0.25rem;
            opacity: 0;
            transform: scale(0);
            transition: 0.25s ease;
        }

        .form-control {
            border: 2px solid #b5bfd9 !important;
            padding: 20px 15px !important;
        }

        .radio-tile:hover {
            border-color: #dd0429;
        }

        .radio-tile:hover:before {
            transform: scale(1);
            opacity: 1;
        }

        .radio-icon img {
            width: 3rem;
            height: 3rem;
        }

        .radio-label {
            color: #707070;
            transition: 0.375s ease;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            font-size: small;
        }

        .radio-input {
            clip: rect(0 0 0 0);
            -webkit-clip-path: inset(100%);
            clip-path: inset(100%);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }

        .swiper-wrapper {
            width: 90% !important;
            margin: 0 auto !important;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 25px;
        }

        @media screen and (max-width: 550px) {
            .checkbox-wrapper-16 {
                display: flex;
                justify-content: center;
                margin-left: -50px;
            }

            .platform-card .radio-inputs {
                display: flex;
                justify-content: center;
            }
        }

        #header-4,
        #header-4.fixed {
            box-shadow: -3px 14px 43px 0 rgba(170, 170, 171, 0.15);
            background: #fff;
            z-index: 99999999;
        }

        .sec-01 {
            padding: 140px 0 50px;
        }

        .sec-01 .container {
            position: relative;
            z-index: 99;
        }

        .sec-01:after {
            content: "";
            width: 1310px;
            height: 412px;
            display: block;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top right;
            position: absolute;
            right: 0;
            top: 0;
        }

        .sec-01 .subtitle {
            font-size: 15px;
            color: #ef5123;
            line-height: 20px;
            font-family: Gilroy-Medium;
            text-transform: uppercase;
            letter-spacing: 1px;
            height: 50px;
            position: relative;
            margin-bottom: 30px;
        }

        .sec-01 .subtitle:after {
            content: "";
            background: #ef5123;
            width: 20px;
            height: 2px;
            display: block;
            margin-top: 30px;
        }

        .sec-01 p:before {
            content: "";
            /*background: #ef5123;*/
            /*width: 20px;*/
            /*height: 2px;*/
            /*display: block;*/
            /*margin-bottom: 30px*/
        }

        .sec-03 {
            padding: 0px 0 50px;
            background: #fff;
            position: relative;
        }

        .sec-03 .subtitle {
            font-size: 15px;
            color: #ef5123;
            line-height: 20px;
            font-family: Gilroy-Medium;
            text-transform: uppercase;
            letter-spacing: 1px;
            height: 50px;
            position: relative;
            margin-bottom: 30px;
        }

        .sec-03 .subtitle:after {
            content: "";
            background: #ef5123;
            width: 20px;
            height: 2px;
            display: block;
            margin-top: 30px;
        }

        .sec-03:after {
            content: "";
            background-image: url("<?= $B ?>/assets/images-new/services/web/cricle.webp");
            width: 1310px;
            height: 412px;
            display: block;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top right;
            position: absolute;
            right: 0;
            top: 0;
        }

        .sec-04 {
            background: #1a1a1a;
            padding: 50px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .sec-04:before {
            content: "";
            background-image: url("<?= $B ?>/assets/images-new/services/web/cricle-full.webp");
            width: 1310px;
            height: 1050px;
            display: block;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top left;
            position: absolute;
            left: 0;
            top: -300px;
            opacity: 0.1;
        }

        .sec-04:after {
            content: "";
            background-image: url("<?= $B ?>/assets/images-new/services/web/dot.webp");
            width: 185px;
            height: 125px;
            display: block;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top left;
            position: absolute;
            right: 250px;
            top: 180px;
            opacity: 0.7;
        }

        .sec-04 .subtitle {
            font-size: 15px;
            color: #ef5123;
            line-height: 20px;
            font-family: Gilroy-Medium;
            text-transform: uppercase;
            letter-spacing: 1px;
            height: 50px;
            position: relative;
            margin-bottom: 30px;
        }

        .sec-04 .subtitle:after {
            content: "";
            background: #ef5123;
            width: 20px;
            height: 2px;
            display: block;
            margin-top: 30px;
        }

        .sec-04 h4 {
            font-family: Gilroy-Medium;
            line-height: 32px;
            font-size: 22px;
            color: #fff;
        }

        .sec-12 h4 {
            font-family: Gilroy-Medium;
            line-height: 32px;
            font-size: 22px;
            color: #fff;
        }

        .sec-04 h3 {
            color: #fff;
            margin-bottom: 30px;
        }

        .sec-04 p {
            color: #fff;
        }

        .list-point {
            padding: 0 100px 0 20px;
            margin: 0;
            list-style: none;
        }

        .list-point li {
            color: #fff;
            font-size: 20px;
            position: relative;
            font-family: Gilroy-Light;
            line-height: 32px;
            margin-bottom: 5px;
            padding-left: 15px;
        }

        .list-point li:before {
            content: "";
            background: #ffa20a;
            background: linear-gradient(40deg, #ffa20a 0, #fd4b0f 100%);
            width: 7px;
            height: 7px;
            display: inline-block;
            position: absolute;
            left: -9px;
            top: 12px;
            border-radius: 50%;
        }

        .list-point li:after {
            content: "";
            width: 17px;
            height: 17px;
            display: inline-block;
            position: absolute;
            left: -14px;
            border: 1px solid #ef5123;
            top: 7px;
            border-radius: 50%;
        }

        .sec-05 {
            padding: 0 0;
        }

        .sec-06 {
            padding: 100px 0;
            background: #d8410e;
            background: linear-gradient(145deg, #090b7a 0, #158dce 100%);
            position: relative;
        }

        .sec-06:after {
            content: "";
            background-image: url("<?= $B ?>/assets/images-new/services/web/web-design-development.webp");
            width: 100%;
            height: 100%;
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            background-size: 40%;
            background-position: top right;
            background-repeat: no-repeat;
        }

        .sec-06 h3 {
            color: #fff;
            margin-bottom: 30px;
        }

        .sec-06 p {
            color: #fff;
            margin-bottom: 20px;
        }

        .sec-06 .btns-arrow {
            position: relative;
            z-index: 99;
        }

        .sec-06 .btns-arrow a {
            font-family: Gilroy-Semibold;
            font-size: 18px;
            color: #fff !important;
            text-decoration: none;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sec-06 .btns-arrow a svg {
            position: relative;
            top: 3px;
            left: 5px;
        }

        .sec-06 .btns-arrow a svg path {
            fill: #fff;
        }

        .sec-06 .subtitle {
            font-size: 15px;
            color: #fff;
            line-height: 20px;
            font-family: Gilroy-Medium;
            text-transform: uppercase;
            letter-spacing: 1px;
            height: 50px;
            position: relative;
            margin-bottom: 30px;
        }

        .sec-06 .subtitle:after {
            content: "";
            background: #fff;
            width: 20px;
            height: 2px;
            display: block;
            margin-top: 30px;
        }

        .sec-07 {
            padding: 50px 0;
            position: relative;
        }

        .sec-07:after {
            content: "";
            background-image: url("<?= $B ?>/assets/images-new/services/web/dot.webp");
            width: 185px;
            height: 125px;
            display: block;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top left;
            position: absolute;
            right: 250px;
            top: 30px;
        }

        .sec-07 .subtitle {
            font-size: 15px;
            color: #ef5123;
            line-height: 20px;
            font-family: Gilroy-Medium;
            text-transform: uppercase;
            letter-spacing: 1px;
            height: 50px;
            position: relative;
            margin-bottom: 30px;
        }

        .sec-07 .subtitle:after {
            content: "";
            background: #ef5123;
            width: 20px;
            height: 2px;
            display: block;
            margin-top: 30px;
        }

        .morelink {
            position: absolute;
            bottom: 20px;
        }

        .morelink a {
            color: #ef5123;
            font-family: Gilroy-Regular;
            text-transform: uppercase;
            font-size: 14px;
            text-decoration: none;
            cursor: pointer;
            letter-spacing: 1px;
        }

        .sec-09 {
            padding: 100px 0 100px;
            background: #1f1e1d;
            position: relative;
        }

        .sec-09:before {
            content: "";
            background-image: url("<?= $B ?>/assets/images-new/services/web/black-bg.webp");
            width: 1050px;
            height: 1050px;
            display: block;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top left;
            position: absolute;
            left: -250px;
            top: 230px;
        }

        .sec-09 .ser-feature {
            position: sticky;
            top: 120px;
        }

        .sec-09 .subtitle {
            font-size: 15px;
            color: #ef5123;
            line-height: 20px;
            font-family: Gilroy-Medium;
            text-transform: uppercase;
            letter-spacing: 1px;
            height: 50px;
            position: relative;
            margin-bottom: 30px;
        }

        .sec-09 .subtitle:after {
            content: "";
            background: #ef5123;
            width: 20px;
            height: 2px;
            display: block;
            margin-top: 30px;
        }

        .sec-09 h2,
        .sec-09 p {
            color: #fff;
        }

        .service-list {
            margin-bottom: 50px;
        }

        .service-list .number {
            font-size: 30px;
            font-family: Gilroy-Bold;
            color: #fff;
            margin: 10px 15px;
        }

        .service-list h5 {
            color: #fff;
            font-size: 24px;
            margin-bottom: 20px;
            font-family: Gilroy-SemiBold;
        }

        .ser-item::-webkit-scrollbar {
            width: 0;
        }

        .ser-item::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .ser-item::-webkit-scrollbar-thumb {
            background: #888;
        }

        .ser-item::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .sec-10 {
            background: #fff;
            position: relative;
        }

        .sec-10 .passion {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .sec-10:after {
            content: "";
            background-image: url("<?= $B ?>/assets/images-new/services/web/performing-result.webp");
            width: 100%;
            height: 100%;
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            background-size: 40%;
            background-position: top left;
            background-repeat: no-repeat;
        }

        .sec-10 h3 {
            color: #282526;
            margin-bottom: 30px;
        }

        .sec-10 p {
            color: #282526;
            margin-bottom: 20px;
        }

        .sec-10 .btns-arrow a {
            font-family: Gilroy-SemiBold;
            font-size: 18px;
            color: #ef5123 !important;
            text-decoration: none;
            cursor: pointer;
            position: relative;
            z-index: 99;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sec-10 .btns-arrow a svg {
            position: relative;
            top: 3px;
            left: 5px;
        }

        .sec-10 .btns-arrow a svg path {
            fill: #ef5123;
        }

        .sec-10 .subtitle {
            font-size: 15px;
            color: #ef5123;
            line-height: 20px;
            font-family: Gilroy-Medium;
            text-transform: uppercase;
            letter-spacing: 1px;
            height: 50px;
            position: relative;
            margin-bottom: 30px;
        }

        .sec-10 .subtitle:after {
            content: "";
            background: #ef5123;
            width: 20px;
            height: 2px;
            display: block;
            margin-top: 30px;
        }

        .sec-11 {
            background: #f84525;
            padding: 100px 0;
            position: relative;
        }

        .sec-11:after {
            content: "";
            background-image: url("<?= $B ?>/assets/images-new/services/web/dot.webp");
            width: 185px;
            height: 125px;
            display: block;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top left;
            position: absolute;
            right: 100px;
            top: 100px;
        }

        .sec-11 .subtitle {
            font-size: 15px;
            color: #fff;
            line-height: 20px;
            font-family: Gilroy-Medium;
            text-transform: uppercase;
            letter-spacing: 1px;
            height: 50px;
            position: relative;
            margin-bottom: 30px;
        }

        .sec-11 .subtitle:after {
            content: "";
            background: #fff;
            width: 20px;
            height: 2px;
            display: block;
            margin-top: 30px;
        }

        .sec-11 h3,
        .sec-11 p {
            color: #fff;
        }

        .sec-12 {
            background: #1f1e1d;
            padding: 100px 0;
        }

        .sec-12 .subtitle {
            font-size: 15px;
            color: #ef5123;
            line-height: 20px;
            font-family: Gilroy-Medium;
            text-transform: uppercase;
            letter-spacing: 1px;
            height: 50px;
            position: relative;
            margin-bottom: 30px;
        }

        .sec-12 .subtitle:after {
            content: "";
            background: #ef5123;
            width: 20px;
            height: 2px;
            display: block;
            margin-top: 30px;
        }

        .sec-12 h3 {
            color: #fff;
            margin-bottom: 30px;
        }

        .sec-12 p {
            color: #fff;
        }

        .sec-12 h3 span.color {
            color: #fff;
            display: block;
        }

        .solution-content {
            width: 35%;
            display: inline-block;
            vertical-align: top;
            padding-right: 50px;
        }

        .solution-content .subtitle {
            font-size: 19px;
            color: #fff;
            line-height: 20px;
            font-family: Gilroy-Medium;
            text-transform: uppercase;
            letter-spacing: 1px;
            height: 50px;
            position: relative;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .solution-content .subtitle:after {
            content: "";
            background: #ef5123;
            width: 20px;
            height: 2px;
            display: block;
            margin-top: 15px;
        }

        .solution-img {
            width: 35%;
            display: inline-block;
            vertical-align: top;
        }

        .solution-img img {
            text-align: center;
        }

        .solution-menu {
            width: 28%;
            display: inline-block;
        }

        .solution-menu ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .solution-menu ul li {
            text-align: center;
            margin: 0 0 0;
            cursor: pointer;
        }

        .solution-menu ul li:after {
            content: "";
            background-image: url("<?= $B ?>/assets/images-new/services/web/Shape.webp");
            width: 1px;
            height: 50px;
            margin: 10px auto;
            display: block;
        }

        .solution-menu ul li:last-child:after {
            display: none;
        }

        .solution-menu ul li {
            font-family: Gilroy-Medium;
            font-size: 16px;
            color: #d3d3d3;
            text-decoration: none;
        }

        .solution-menu ul li.current,
        .solution-menu ul li:hover {
            color: #ef5123;
        }

        .solution-content h4 {
            color: #fff;
            font-size: 25px;
            margin-bottom: 20px;
            font-family: Gilroy-SemiBold;
            padding-right: 40px;
            line-height: 34px;
        }

        .solution-content h4 span {
            font-family: Gilroy-Light;
        }

        .solution-content,
        .solution-img {
            display: none;
        }

        .sec-13 {
            padding: 50px 0;
        }

        .sec-13 p {
            font-size: 20px;
            font-family: Gilroy-SemiBold;
            margin: 30px 0;
        }

        @media (min-width: 1200px) and (max-width: 1520px) {
            .item-intro {
                padding-left: 0;
                position: relative;
                /*left: -150px*/
            }

            .test-review:after {
                width: 25%;
            }

            .sec-06:after {
                right: -120px;
                background-size: 50%;
            }

            .sec-06,
            .sec-10 {
                overflow: hidden;
            }

            .sec-10:after {
                left: -180px;
                background-size: 55%;
            }

            .sec-09:before {
                background-size: 70%;
                left: -250px;
                top: 250px;
            }

            .sec-03:after {
                display: none;
            }

            .case-studies .case-text p {
                width: 100%;
                font-size: 15px;
                line-height: 20px;
            }

            .case-studies .case-text img {
                width: 150px;
                height: 45px;
            }

            .case-studies .case-text {
                position: absolute;
                bottom: 10px;
                width: 90%;
                left: 5%;
            }

            .case-studies .case-text a {
                margin: 15px 0 15px;
                font-size: 12px;
            }

            .case-studies .case-text:before {
                top: 60px;
            }

            .sec-04:before {
                background-size: 70%;
                left: -200px;
                top: 0;
            }

            .sec-04:after {
                right: 50px;
            }

            .sec-01:after {
                content: "";
                width: 185px;
                height: 125px;
                display: block;
                background-repeat: no-repeat;
                background-size: contain;
                background-position: top left;
                position: absolute;
                right: 30px;
                top: 100px;
            }

            .sec-11:after {
                right: 30px;
                top: 20px;
            }
        }

        @media (min-width: 1200px) and (max-width: 1365px) {
            .sec-01 {
                height: 670px;
                background-position: 96% 59%;
            }
        }

        @media (min-width: 901px) and (max-width: 1199px) {
            .sec-01 {
                height: 670px;
                background-position: 96% 59%;
            }

            .case-studies .case-text p {
                width: 100%;
                font-size: 15px;
                line-height: 20px;
            }

            .case-studies .case-text img {
                width: 150px;
                height: 45px;
            }

            .case-studies .case-text {
                position: absolute;
                bottom: 10px;
                width: 90%;
                left: 5%;
            }

            .case-studies .case-text a {
                margin: 15px 0 15px;
                font-size: 12px;
            }

            .case-studies .case-text:before {
                top: 60px;
            }

            .sec-06:after {
                right: -220px;
                background-size: 63%;
            }

            .sec-06,
            .sec-10 {
                overflow: hidden;
            }

            .sec-10:after {
                left: -280px;
                background-size: 68%;
            }

            .item-intro {
                padding-left: 20px;
                padding-right: 20px;
            }

            .testimonial-item .test-content {
                padding: 30px 15px;
            }

            .testimonial-item .designation {
                padding: 20px 15px 0;
            }

            .test-review:after {
                width: 25%;
            }

            .testimonial-item .designation .name-auther {
                left: 110px;
                width: 100%;
            }

            video {
                width: 100%;
            }
        }

        @media (min-width: 568px) and (max-width: 900px) {
            .side-nav span {
                background: #000;
            }

            .navbar-light .navbar-nav .active>.nav-link,
            .navbar-light .navbar-nav .nav-link.active,
            .navbar-light .navbar-nav .nav-link.show,
            .navbar-light .navbar-nav .show>.nav-link,
            .sidepanel .navbar-nav .nav-link {
                color: #fff;
            }

            .sec-01 {
                padding: 80px 0 50px;
                height: 670px;
                background-position: 96% 59%;
            }

            .sec-01:after,
            .sec-03:after,
            .sec-04:after,
            .sec-04:before,
            .sec-06:after,
            .sec-09:before,
            .sec-10:after,
            .sec-11:after,
            .test-review:after {
                display: none;
            }

            .item-intro {
                padding-left: 15px;
            }

            .case-studies .case-text p {
                width: 100%;
                font-size: 15px;
                line-height: 20px;
            }

            .case-studies .case-text img {
                width: 150px;
                height: 45px;
            }

            .case-studies .case-text {
                position: absolute;
                bottom: 10px;
                width: 90%;
                left: 5%;
            }

            .case-studies .case-text a {
                margin: 15px 0 15px;
                font-size: 12px;
            }

            .case-studies .case-text:before {
                top: 60px;
            }

            .solution-img {
                display: none !important;
            }

            .solution-content,
            .solution-menu {
                width: 50% !important;
                padding-right: 0;
            }

            .sec-13 .btns {
                margin-bottom: 40px;
            }

            .solution-menu ul li:after {
                height: 20px;
            }

            video {
                width: 100%;
            }
        }

        @media (min-width: 320px) and (max-width: 567px) {
            .sec-09 .ser-feature {
                position: unset;
                margin-bottom: 40px;
            }

            .list-point li {
                font-size: 18px;
            }

            .sec-01 p {
                padding-top: 20px;
            }

            .sec-01 p:before {
                display: none;
            }

            .side-nav span {
                background: #000;
            }

            .navbar-light .navbar-nav .active>.nav-link,
            .navbar-light .navbar-nav .nav-link.active,
            .navbar-light .navbar-nav .nav-link.show,
            .navbar-light .navbar-nav .show>.nav-link,
            .sidepanel .navbar-nav .nav-link {
                color: #fff;
            }

            .sec-01 {
                padding: 80px 0 30px;
                background: #fff;
            }

            p {
                font-size: 15px;
                line-height: 24px;
            }

            .sec-01:after,
            .sec-03:after,
            .sec-04:after,
            .sec-04:before,
            .sec-06:after,
            .sec-09:before,
            .sec-10:after,
            .sec-11:after,
            .test-review:after {
                display: none;
            }

            .sec-03,
            .sec-04,
            .sec-06,
            .sec-09,
            .sec-12 {
                padding: 50px 0;
            }

            .list-point {
                padding: 0 0 0 20px;
            }

            .item-intro {
                padding-left: 15px;
            }

            .test-intro,
            .test-review {
                padding: 50px 0;
            }

            .testimonial-item .designation,
            .testimonial-item .test-content {
                padding: 15px;
                height: auto;
            }

            .testimonial-item .test-content:before {
                left: 10px;
            }

            .testimonial-item .designation .name-auther {
                left: 100px;
                top: 30px;
                width: 100%;
            }

            .testimonial-item .test-content:after {
                bottom: 0;
                right: 10px;
            }

            .morelink {
                position: relative;
                bottom: 0;
            }

            .case-studies .case-text p {
                width: 100%;
                font-size: 15px;
                line-height: 20px;
            }

            .case-studies .case-text img {
                width: 150px;
                height: 45px;
            }

            .case-studies .case-text {
                position: absolute;
                bottom: 10px;
                width: 90%;
                left: 5%;
            }

            .case-studies .case-text a {
                margin: 15px 0 15px;
                font-size: 12px;
            }

            .solution-img,
            .solution-menu {
                display: none !important;
            }

            .solution-content {
                width: 100% !important;
                padding-right: 0;
                display: block !important;
            }

            .sec-13 .btns {
                margin-bottom: 40px;
            }

            video {
                width: 100%;
            }
        }

        ul.dropdown-menu.mad-third-level,
        ul.dropdown-menu.wad-third-level {
            display: none;
        }

        ul.dropdown-menu.mad-third-level.show,
        ul.dropdown-menu.wad-third-level.show {
            width: auto;
            display: block;
            top: auto;
            left: 0px;
            margin-left: 236px !important;
            margin-top: -33px !important;
            min-width: 15em;
            max-width: 1000px;
        }

        a#navbarDropdown2,
        a#navbarDropdown3 {
            border-bottom: 1px solid rgba(150, 150, 150, 0.15);
            padding: 8px 15px !important;
            color: #fff;
        }

        a#navbarDropdown2::after,
        a#navbarDropdown3::after {
            transform: rotate(-90deg);
        }

        a#navbarDropdown2:hover:before,
        a#navbarDropdown3:hover:before {
            height: 0px;
        }

        a#navbarDropdown2:hover,
        a#navbarDropdown3:hover {
            color: #fdb913;
        }

        @media (max-width: 900px) {
            ul.dropdown-menu.mad-third-level.show {
                margin-left: 0px !important;
                margin-top: 0px !important;
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu a.dropdown-item {
                padding: 8px 17px !important;
            }

            a#navbarDropdown2,
            a#navbarDropdown3 {
                background: #111111;
                border-bottom: 0px;
            }
        }

        .slick-slide img {
            display: inline-block !important;
        }

        .btns {
            margin-top: 20px;
        }

        .services-content {
            padding: 0px 0 0 0px;
        }

        .services-list01 .servics-item {
            flex-basis: 32%;
            background: #fff;
            padding: 50px 40px 50px;
            margin-bottom: 20px;
        }

        .services-list01 {
            top: 0px;
        }

        .cma-our-services-section {
            padding: 50px 0 50px;
            background: #282526;
            color: #ffff;
            z-index: 9;
            position: relative;
        }

        .services-content p {
            text-align: center;
        }

        .servics-item a {
            width: 100%;
        }

        .cma-item {
            width: 100px;
            height: 100px;
            margin: 0 auto;
        }

        .seritem_img01 {
            background: url(<?= $B ?>/assets/images-new/iphone.webp);
        }

        .seritem_img02 {
            background: url(<?= $B ?>/assets/images-new/android.webp);
        }

        .seritem_img03 {
            background: url(<?= $B ?>/assets/images-new/ipad.webp);
        }

        .seritem_img04 {
            background: url(<?= $B ?>/assets/images-new/website.webp);
        }

        .seritem_img05 {
            background: url(<?= $B ?>/assets/images-new/enterprise.webp);
        }

        .seritem_img06 {
            background: url(<?= $B ?>/assets/images-new/marketing.webp);
        }

        .mobitem_img01 {
            background: url(<?= $B ?>/assets/images-new/mobile-application.webp);
        }

        .mobitem_img02 {
            background: url(<?= $B ?>/assets/images-new/Android-Application.webp);
        }

        .mobitem_img03 {
            background: url(<?= $B ?>/assets/images-new/iOS-application.webp);
        }

        .mobitem_img04 {
            background: url(<?= $B ?>/assets/images-new/Windows-Application.webp);
        }

        .Ourtacitem_img01 {
            background: url(<?= $B ?>/assets/images-new/Approach.webp);
        }

        .Ourtacitem_img02 {
            background: url(<?= $B ?>/assets/images-new/QA1.webp);
        }

        .Ourtacitem_img03 {
            background: url(<?= $B ?>/assets/images-new/Promotion.webp);
        }

        .services-list01 .servics-item.ser-col:hover {
            background: #ffffff;
        }

        .services-list01 .servics-item.ser-col.mob-app {
            flex-basis: 50%;
            margin-bottom: 0px;
            padding: 0px 40px 0px;
        }

        .services-list01 .servics-item.ser-col:hover a,
        .services-list01 .servics-item.ser-col:hover h4,
        .services-list01 .servics-item.ser-col:hover p {
            color: #000;
        }

        section.ourtactic01 {
            background: #1f1e1d;
            padding: 50px 0 50px;
        }

        h2.tti-top.mob-app-head,
        p.mob-app-title {
            color: #fff;
        }

        .servics-item h4 a {
            margin: 20px 0 0px;
        }

        .servics-item.ser-col.mob-app h4,
        .servics-item.ser-col.ser-col h4 {
            margin: 20px 0px 10px 0px;
        }

        /**/

        .services-list01 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            position: relative;
            top: 0px;
        }

        .tech_circle {
            position: relative;
            height: 117px;
            width: 117px;
            background: linear-gradient(180deg, #2c4597 0, #1592d1 100%);
            border-radius: 100%;
            margin: 0 auto;
            border: 5px solid #d0daf9;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tech_icon {
            display: inline-flex;
            background-color: #fff;
            border-radius: 100%;
            height: 75%;
            width: 75%;
            align-items: center;
            justify-content: center;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .servics-item:hover .tech_icon {
            background-color: #2c4597bf;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .servics-item:hover .tech_icon {
            background-color: #2c4597bf;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .servics-item:hover img {
            filter: brightness(100);
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .technologies01 {
            background: #fff;
            padding: 50px 0;
        }

        .services-list02 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            position: relative;
            top: 0px;
        }

        .services-list02 .servics-item {
            flex-basis: 32%;
            background: #fff;
            padding: 50px 40px 50px;
            margin-bottom: 20px;
        }

        .services-list02 {
            top: 0px;
        }

        .services-list02 .servics-item.ser-col:hover {
            background: #ffffff;
        }

        /*.services-list02 .servics-item.ser-col.mob-app{
    flex-basis: 49%;
    margin-bottom: 20px;
    padding: 40px 40px 40px;
    box-shadow: 0px 1px 10px 0px rgb(0 0 0 / 20%);
    -webkit-box-shadow: 0px 1px 10px 0px rgb(0 0 0 / 20%);

    }*/

        .services-list02 .servics-item.ser-col:hover a,
        .services-list02 .servics-item.ser-col:hover h4,
        .services-list02 .servics-item.ser-col:hover p {
            color: #000;
        }

        .services-list03 {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            position: relative;
            top: 0px;
        }

        .services-list03 .servics-item {
            flex-basis: 32%;
            background: #fff;
            padding: 50px 40px 50px;
            margin-bottom: 20px;
        }

        .services-list03 {
            top: 0px;
        }

        .services-list03 .servics-item.ser-col:hover {
            background: #ffffff;
        }

        .services-list03 .servics-item.ser-col.mob-app {
            flex-basis: 50%;
            margin-bottom: 20px;
            padding: 0px 40px 0px;
        }

        .services-list03 .servics-item.ser-col:hover a,
        .services-list03 .servics-item.ser-col:hover h4,
        .services-list03 .servics-item.ser-col:hover p {
            color: #000;
        }

        @media (min-width: 0px) and (max-width: 567px) {
            .services-list03 .servics-item {
                flex-basis: 100% !important;
                background: #fff;
                padding: 50px 40px 50px;
                margin-bottom: 20px;
            }
        }

        .review-card {
            background: #fff;
            border: 1px solid #007bff;
            padding: 20px 10px;
            margin: 20px;
        }

        .review-icon img {
            width: 100px;
            height: 40px;
            object-fit: contain;
        }

        .stars i {
            color: #007bff;
        }

        .checkbox-wrapper-16 .checkbox-input:focus+.checkbox-tile,
        .radio-input:focus+.radio-tile,
        .form-control:focus {
            box-shadow: none;
        }
    </style>
<body>
<div class="page-wrapper" onmousedown="return false;" onselectstart="return false;">
<!--Header-Main Start-->
<?php require_once __DIR__ . '/../includes/header.php'; ?>
<!--Header-Main End-->


<div class="calculator-hero">
        <div class="container">
            <div class="row align-items-center pt-5 mt-5">
                <div class="col-lg-6 text-white">
                    <h1 class="text-white">Mobile App Cost Calculator</h1>
                    <p>Estimate The Cost Of Your Mobile App Development With Just a Few Clicks! </p>
                </div>
                <div class="col-lg-6">
                    <img src="<?= $B ?>/assets/images/calculator-img/cost-calculator.webp" alt="Cost Calculator" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <form action="/submit-calculator" method="get" id="calculatorForm" onsubmit="return validateForm()">
        <input type="hidden" name="host" value="ArtisticWebServices">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h4 class="mb-4">1. Choose the desired platform</h4>
                    <div class="swiper mySwiperPlatform">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="platform-card">
                                    <div class="checkbox-wrapper-16">
                                        <label class="checkbox-wrapper">
                                            <input class="checkbox-input" type="checkbox" name="platforms[]"
                                                value="Android App" form="calculatorForm">
                                            <span class="checkbox-tile">
                                                <span class="checkbox-icon">
                                                    <img src="<?= $B ?>/assets/images/calculator-img/androidicon.webp"
                                                        class="img-fluid" alt="androidicon">
                                                </span>
                                                <span class="checkbox-label">Android App</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="platform-card">
                                    <div class="platform-card">
                                        <div class="checkbox-wrapper-16">
                                            <label class="checkbox-wrapper">
                                                <input class="checkbox-input" type="checkbox" name="platforms[]"
                                                    value="iOS App">
                                                <span class="checkbox-tile">
                                                    <span class="checkbox-icon">
                                                        <img src="<?= $B ?>/assets/images/calculator-img/apple-app-development.webp"
                                                            class="img-fluid" alt="Apple App">
                                                    </span>
                                                    <span class="checkbox-label">IOS App</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="platform-card">
                                    <div class="platform-card">
                                        <div class="checkbox-wrapper-16">
                                            <label class="checkbox-wrapper">
                                                <input class="checkbox-input" type="checkbox" name="platforms[]"
                                                    value="Android & iOS">
                                                <span class="checkbox-tile">
                                                    <span class="checkbox-icon">
                                                        <img src="<?= $B ?>/assets/images/calculator-img/mobile-app-development.webp"
                                                            class="img-fluid" alt="Mobile App">
                                                    </span>
                                                    <span class="checkbox-label">Both</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="platform-card">
                                    <div class="checkbox-wrapper-16">
                                        <label class="checkbox-wrapper">
                                            <input class="checkbox-input" type="checkbox" name="platforms[]"
                                                value="Web App">
                                            <span class="checkbox-tile">
                                                <span class="checkbox-icon">
                                                    <img src="<?= $B ?>/assets/images/calculator-img/web-app-development.webp"
                                                        class="img-fluid" alt="calculator">
                                                </span>
                                                <span class="checkbox-label">Web App</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <h4 class="mb-4">2. What type of project do you need?</h4>
                </div>
                <div class="swiper mySwiperProject">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="project-type" value="E-Commerce">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/shopping-cart.webp"
                                                    class="img-fluid" alt="Shoping Cart">
                                            </span>
                                            <span class="radio-label">E Commerce</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="project-type"
                                            value="Social Networking">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/social-media.webp"
                                                    class="img-fluid" alt="">
                                            </span>
                                            <span class="radio-label">Social Networking</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="project-type"
                                            value="Entertainment">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/entertaintment.webp"
                                                    class="img-fluid" alt="">
                                            </span>
                                            <span class="radio-label">Entertainment</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="project-type"
                                            value="Health and Fitness">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/healthandfitness.webp"
                                                    class="img-fluid" alt="">
                                            </span>
                                            <span class="radio-label">Health and Fitness</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="project-type" value="Travel">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/travel.webp" class="img-fluid"
                                                    alt="">
                                            </span>
                                            <span class="radio-label">Travel</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="project-type" value="Finance">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/finance.webp" class="img-fluid"
                                                    alt="">
                                            </span>
                                            <span class="radio-label">Finance</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="project-type" value="Sports">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/sports.webp" class="img-fluid"
                                                    alt="">
                                            </span>
                                            <span class="radio-label">Sports</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="project-type"
                                            value="Event Management">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/eventmanagement.webp"
                                                    class="img-fluid" alt="">
                                            </span>
                                            <span class="radio-label">Event Management</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="project-type" value="Booking">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/booking.webp" class="img-fluid"
                                                    alt="">
                                            </span>
                                            <span class="radio-label">Booking</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="project-type"
                                            value="Ride Sharing">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/ride-sharing.webp"
                                                    class="img-fluid" alt="">
                                            </span>
                                            <span class="radio-label">Ride Sharing</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="project-type" value="Education">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/education-app.webp"
                                                    class="img-fluid" alt="">
                                            </span>
                                            <span class="radio-label">Education</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="project-type" value="other">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/other.webp" class="img-fluid"
                                                    alt="">
                                            </span>
                                            <span class="radio-label">Other</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <h4 class="mb-4">3. What type of UI do you need?</h4>
                </div>
                <div class="swiper mySwiperUi">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="ui-type" value="Minimalist UI">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/basic-ui.webp" class="img-fluid"
                                                    alt="">
                                            </span>
                                            <span class="radio-label">Minimalist UI</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="ui-type" value="Advanced UI">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/basic-ui-design.webp"
                                                    class="img-fluid" alt="">
                                            </span>
                                            <span class="radio-label">Advanced UI</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="ui-type" value="other">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/other.webp" class="img-fluid"
                                                    alt="">
                                            </span>
                                            <span class="radio-label">Other</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <h4 class="mb-4">4. How would you like your users to sign-up?</h4>
                    <div class="swiper mySwiperSignup">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="platform-card">
                                    <div class="checkbox-wrapper-16">
                                        <label class="checkbox-wrapper">
                                            <input class="checkbox-input" type="checkbox" name="signup-types[]"
                                                value="By Email">
                                            <span class="checkbox-tile">
                                                <span class="checkbox-icon">
                                                    <img src="<?= $B ?>/assets/images/calculator-img/email.webp" class="img-fluid"
                                                        alt="">
                                                </span>
                                                <span class="checkbox-label">By Email</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="platform-card">
                                    <div class="checkbox-wrapper-16">
                                        <label class="checkbox-wrapper">
                                            <input class="checkbox-input" type="checkbox" name="signup-types[]"
                                                value="By social">
                                            <span class="checkbox-tile">
                                                <span class="checkbox-icon">
                                                    <img src="<?= $B ?>/assets/images/calculator-img/social-login.webp"
                                                        class="img-fluid" alt="">
                                                </span>
                                                <span class="checkbox-label">By Social Login</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="platform-card">
                                    <div class="checkbox-wrapper-16">
                                        <label class="checkbox-wrapper">
                                            <input class="checkbox-input" type="checkbox" name="signup-types[]"
                                                value="By number">
                                            <span class="checkbox-tile">
                                                <span class="checkbox-icon">
                                                    <img src="<?= $B ?>/assets/images/calculator-img/phone.webp" class="img-fluid"
                                                        alt="">
                                                </span>
                                                <span class="checkbox-label">Number</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="platform-card">
                                    <div class="checkbox-wrapper-16">
                                        <label class="checkbox-wrapper">
                                            <input class="checkbox-input" type="checkbox" name="signup-types[]"
                                                value="All">
                                            <span class="checkbox-tile">
                                                <span class="checkbox-icon">
                                                    <img src="<?= $B ?>/assets/images/calculator-img/all-login.webp"
                                                        class="img-fluid" alt="">
                                                </span>
                                                <span class="checkbox-label">All</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <h4 class="mb-4">5. Total Number of Screens. Throw a wild guess if not sure of it?</h4>
                </div>
                <div class="swiper mySwiperScreen">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="number-of-screens" value="5+">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/screens.webp" class="img-fluid"
                                                    alt="">
                                            </span>
                                            <span class="radio-label">5+</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="number-of-screens" value="10+">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/screens.webp" class="img-fluid"
                                                    alt="">
                                            </span>
                                            <span class="radio-label">10+</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="number-of-screens" value="15+">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/screens.webp" class="img-fluid"
                                                    alt="">
                                            </span>
                                            <span class="radio-label">15+</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="platform-card">
                                <div class="radio-inputs">
                                    <label>
                                        <input class="radio-input" type="radio" name="number-of-screens" value="20+">
                                        <span class="radio-tile">
                                            <span class="radio-icon">
                                                <img src="<?= $B ?>/assets/images/calculator-img/screens.webp" class="img-fluid"
                                                    alt="">
                                            </span>
                                            <span class="radio-label">> 20</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="scrollable-grid">
                <div class="col-12">
                    <h4 class="mb-4">6. What set of functionalities you want in your app?</h4>
                    <div class="scroll-container">
                        <div class="swiper mySwiperFunctionality">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="platform-card">
                                        <div class="checkbox-wrapper-16">
                                            <label class="checkbox-wrapper">
                                                <input class="checkbox-input" type="checkbox" name="functionalities[]"
                                                    value="In-app purchase">
                                                <span class="checkbox-tile">
                                                    <span class="checkbox-icon">
                                                        <img src="<?= $B ?>/assets/images/calculator-img/inapppurchase.webp"
                                                            class="img-fluid" alt="">
                                                    </span>
                                                    <span class="checkbox-label">In-App Purchase</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="platform-card">
                                        <div class="checkbox-wrapper-16">
                                            <label class="checkbox-wrapper">
                                                <input class="checkbox-input" type="checkbox" name="functionalities[]"
                                                    value="User Authentication">
                                                <span class="checkbox-tile">
                                                    <span class="checkbox-icon">
                                                        <img src="<?= $B ?>/assets/images/calculator-img/userauth.webp"
                                                            class="img-fluid" alt="">
                                                    </span>
                                                    <span class="checkbox-label">User Authentication</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="platform-card">
                                        <div class="checkbox-wrapper-16">
                                            <label class="checkbox-wrapper">
                                                <input class="checkbox-input" type="checkbox" name="functionalities[]"
                                                    value="Onboarding">
                                                <span class="checkbox-tile">
                                                    <span class="checkbox-icon">
                                                        <img src="<?= $B ?>/assets/images/calculator-img/onboarding.webp"
                                                            class="img-fluid" alt="">
                                                    </span>
                                                    <span class="checkbox-label">Onboarding</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="platform-card">
                                        <div class="checkbox-wrapper-16">
                                            <label class="checkbox-wrapper">
                                                <input class="checkbox-input" type="checkbox" name="functionalities[]"
                                                    value="Chat">
                                                <span class="checkbox-tile">
                                                    <span class="checkbox-icon">
                                                        <img src="<?= $B ?>/assets/images/calculator-img/chat.webp"
                                                            class="img-fluid" alt="">
                                                    </span>
                                                    <span class="checkbox-label">Chat</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="platform-card">
                                        <div class="checkbox-wrapper-16">
                                            <label class="checkbox-wrapper">
                                                <input class="checkbox-input" type="checkbox" name="functionalities[]"
                                                    value="Push Notification">
                                                <span class="checkbox-tile">
                                                    <span class="checkbox-icon">
                                                        <img src="<?= $B ?>/assets/images/calculator-img/notification.webp"
                                                            class="img-fluid" alt="">
                                                    </span>
                                                    <span class="checkbox-label">Push Notifications</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="platform-card">
                                        <div class="checkbox-wrapper-16">
                                            <label class="checkbox-wrapper">
                                                <input class="checkbox-input" type="checkbox" name="functionalities[]"
                                                    value="Customer Support">
                                                <span class="checkbox-tile">
                                                    <span class="checkbox-icon">
                                                        <img src="<?= $B ?>/assets/images/calculator-img/support.webp"
                                                            class="img-fluid" alt="">
                                                    </span>
                                                    <span class="checkbox-label">Customer Support</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="platform-card">
                                        <div class="checkbox-wrapper-16">
                                            <label class="checkbox-wrapper">
                                                <input class="checkbox-input" type="checkbox" name="functionalities[]"
                                                    value="Analytics & Reporting">
                                                <span class="checkbox-tile">
                                                    <span class="checkbox-icon">
                                                        <img src="<?= $B ?>/assets/images/calculator-img/analytics.webp"
                                                            class="img-fluid" alt="">
                                                    </span>
                                                    <span class="checkbox-label">Analytics & Reporting</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="platform-card">
                                        <div class="checkbox-wrapper-16">
                                            <label class="checkbox-wrapper">
                                                <input class="checkbox-input" type="checkbox" name="functionalities[]"
                                                    value="Third Party API Integration">
                                                <span class="checkbox-tile">
                                                    <span class="checkbox-icon">
                                                        <img src="<?= $B ?>/assets/images/calculator-img/api-integration.webp"
                                                            class="img-fluid" alt="">
                                                    </span>
                                                    <span class="checkbox-label">Third Party API Integration</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="platform-card">
                                        <div class="radio-inputs">
                                            <label>
                                                <input class="radio-input" type="radio" name="project-type"
                                                    name="functionalities[]" value="other">
                                                <span class="radio-tile">
                                                    <span class="radio-icon">
                                                        <img src="<?= $B ?>/assets/images/calculator-img/other.webp"
                                                            class="img-fluid" alt="">
                                                    </span>
                                                    <span class="radio-label">Other</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <h4 class="mb-4">7. Describe your app in own words</h4>
                    <div class="row">
                        <div class="col-12">
                            <textarea autocomplete="off" required rows="5" class="form-control" name="app-description"
                                placeholder="Describe your app......."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <h4 class="mb-4">8. Provide your details, so we can reach you</h4>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <input autocomplete="off" required type="text" class="form-control" placeholder="Name"
                                name="username">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input autocomplete="off" required type="email" class="form-control" placeholder="Email"
                                name="user-email">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input autocomplete="off" required type="text" id="phone" maxlength="14"
                                class="form-control" placeholder="Contact number" name="user-number">
                        </div>
                    </div>
                </div>
            </div>
            <div class="g-recaptcha" data-callback="validateRecaptcha"
                data-sitekey="6LfmrPgZAAAAABpYsoRK9gKdF3d0RqJ1jVtfSuIv"></div>
            <p id="frm-result" class="text-danger" style="margin: 8px 0 0 8px;"></p>
        </div>
        
        <div class="container pb-5">
            <button type="submit" id="submit_btn" class="btn btn-lg" style="background-color: #dd0429; color: #fff;">Get
                Estimated Price</button>
        </div>
    </form>
    <div class="container mb-5">
        <h2>What Is An App Cost Calculator? </h2>
        <p>The app cost calculator is a tool that helps you roughly estimate the final overall cost you need to pay to
            develop your mobile app. This calculator is the perfect tool to attain the phase-by-phase cost breakdown of
            your mobile app development - so that you know what you are paying for! </p>
        <p>The development of your mobile app depends on the integration of different features and functionality within
            the app. The cost calculator asks you to enlist the features and functionalities you want in your app.
            Analyzing your input, the cost calculator will generate a rough estimation of your app development cost.
        </p>
        <p>After getting the cost breakdown, discuss it with our professionals, who can help reduce the cost for you!
        </p>
        <h2>How can the app cost calculator help you?</h2>
        <p>An app cost calculator can prove to be beneficial for you in the following manners: </p>
        <ul>
            <li>Telling you the specific cost of integrating each feature</li>
            <li>Helps you estimate the overall cost of your mobile app development</li>
            <li>Provides you with a rough time estimation to get your mobile app developed.</li>
        </ul>
        <p>Please acknowledge the fact that there's no perfect way of estimating the accurate overall cost of your
            mobile app development. Each app comprises it's own unique requirements. Thus, it's advised to get in touch
            with our professional team to know more about your app development cost. </p>
        <b>Find Out The Cost Of Your Future Application Now! </b>
    </div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</div><!-- /.page-wrapper -->
</body>
</html>
