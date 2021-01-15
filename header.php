<!DOCTYPE html>
<html lang="ko">
<head>
    <title>morip | Jason Travel Service</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no"> <!-- 부팅 사이즈(초기값), 최소값, 최대값, 손가락 확대 현상 막음  -->
   <!-- 폼요소 선택(포커스)시 확대 현상을 재거 user-scalable=no 필수로 써줘야함-->
    <meta name="Title" content="Jason Travel Service">
    <meta name="Publisher" content="Lee yoona">
    <meta name="Author-date" content="2021-01-05">
    <meta name="Author" content="Jason Travel Service">
    <meta name="Copyright" content="Jason Travel Service">
    <meta name="Keywords" content="Jason Travel Service,여행,관광,JTS">
    <meta name="Description" content="Jason Travel Service는 전문 여행사 입니다.">
    <meta name="Robots" content="index,follow">
    
    <!-- 파비콘 -->
    <link rel="shortcut icon" href="./img/favicon.png">
    <link rel="apple-touch-icon" href="./img/favicon.png">

    <!-- 오픈 아이콘 -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" type="text/css" href="./css/fonts.css">
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/response.css">
    

    <!-- 오픈소스 -->   
    <script src="./js/lib/jquery-1.12.4.min.js"></script>    
    <script src="./js/lib/jquery.touchSwipe.js"></script>
    <script src="./js/lib/prefixfree.min.js"></script>
    <script src="./js/lib/jquery.easing.1.3.js"></script>



    <!-- 조건 주석문 익스프롤러 하위 IE9 IE8 IE7 폴리필 -->
    <!-- 스크립트 스타일 -->
    
    <!--[if lte IE 9]>
        <script src="./js/lib/IE9.js"></script>
    <![endif]-->
    
    <!--[if lte IE 8]>
        <script src="./js/lib/html5shiv.min.js"></script>    
        <script src="./js/lib/jqPIE.js"></script>    
        <script src="./js/lib/PIE.js"></script> 
        <link rel="stylesheet" type="text/css" href="./css/ie8.css">   
    <![endif]-->
    
    <!--[if lte IE 7]>    
       <link rel="stylesheet" type="text/css" href="./css/ie7.css">
    <![endif]-->    
    

    
</head>
<body id="intro">
<ul id="skip">
    <li><a href="#header" title="메뉴바로가기">메뉴바로가기</a></li>
    <li><a href="#main" title="메인바로가기">메인바로가기</a></li>
    <li><a href="#footer" title="하단바로가기">하단바로가기</a></li>
</ul>
<div id="wrap">
    <header id="header" class=""> <!-- 높이 124px fixed bg fff transparent -->
        <div class="wrap"> <!-- width: 1570px -->
            <div class="header-gap"> <!-- margin:0 20px -->
                <div class="container">
                    <ul class="clearfix">
                        <li> <!-- 가운데 -->
                            <a href="./index.php" class="logo-btn">
                                <img src="./img/logo_color.png" class="color" alt="">
                                <img src="./img/logo_white.png" class="white"  alt="">
                            </a>
                        </li>
                        <li> <!-- 왼쪽 -->
                            <a href="#" class="menu-bar" title="Menu">
                                <span class="line-box">
                                    <i class="line line1"></i>
                                    <i class="line line2"></i>
                                    <i class="line line3"></i>
                                </span>
                                <span class="text">
                                    Menu
                                </span>
                            </a>
                        </li>
                        <li> <!-- 오른쪽 -->
                            <ul>
                                <li><span><a href="./login.php" class="login-btn">LOGIN</a></span></li>
                                <li><span><i></i></a></span></li>
                                <li><span><a href="./join.php" class="join-btn">JOIN</a></span></li>
                                <li><span><a href="./confirm.php" class="confirm-btn"><span>견적<br>문의</span></a></span></li>
                                <li><span><a href="#" class="search-btn"><img src="./img/search_i.png" alt="" class="black_"><img src="./img/search_i_01.png" alt="" class="white_"></a></span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <nav id="nav">
        <div class="wrap">
            <div class="gap">
                <div class="container">
                    <ul>
                        <li>
                            <a href="./main1-1.php" class="mainBtn">여행테마</a>
                            <div class="sub sub1">
                                <div class="sub-wrap">
                                    <div class="sub-gap">
                                        <ul>
                                            <li><a href="./main1-1.php" class="subBtn">배트남 / 발리 / 태국</a></li>
                                            <li><a href="./main1-2.php" class="subBtn">몰디브 및 특수지역</a></li>
                                            <li><a href="./main1-3.php" class="subBtn">유럽</a></li>
                                            <li><a href="./main1-4.php" class="subBtn">그 외 지역</a></li>
                                            <li><a href="./main1-5.php" class="subBtn">아만리조트</a></li>
                                            <li><a href="./main1-6.php" class="subBtn">럭셔리</a></li>
                                            <li><a href="./main1-7.php" class="subBtn">가족</a></li>
                                            <li><a href="./main1-8.php" class="subBtn">허니문</a></li>
                                            <li><a href="./main1-9.php" class="subBtn">태교여행</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="./main2.php" class="mainBtn">프로모션</a></li>
                        <li><a href="./main3.php" class="mainBtn">JTS소식</a></li>
                        <li><a href="./main4.php" class="mainBtn">여행후기</a></li>
                        <li>
                            <a href="./main5-1.php" class="mainBtn">여행문의</a>
                            <div class="sub sub2">
                                <div class="sub-wrap">
                                    <div class="sub-gap">
                                        <ul>
                                            <li><a href="./main5-1.php" class="subBtn">일반여행문의</a></li>
                                            <li><a href="./main5-2.php" class="subBtn">단체여행문의</a></li>
                                            <li><a href="./main5-3.php" class="subBtn">리조트견적요청</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="./main6-1.php" class="mainBtn">회사소개</a>
                            <div class="sub sub3">
                                <div class="sub-wrap">
                                    <div class="sub-gap">
                                        <ul>
                                            <li><a href="./main6-1.php" class="subBtn">About Us</a></li>
                                            <li><a href="./main6-2.php" class="subBtn">회사연혁</a></li>
                                            <li><a href="./main6-3.php" class="subBtn">오시는길</a></li>
                                            <li><a href="./main6-4.php" class="subBtn">공지사항</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>