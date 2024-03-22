<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"/>
    <link rel='stylesheet' href='https://websfont.github.io/scoreDream/scoreDream.css' />
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="/assets/style.css">
    <title>php dark</title>

<body>
<!--헤더 시작-->
<header>
    <?php
        include 'common/html_header.php';
    ?>       
</header>

<!--헤더 끝-->

<!--메인 시작-->
<main>
    
            <div class="main_box">
                <!--sns 시작-->
                <div class="spare">
                <?php
                         include 'common/html_main_sns.php';
                ?> 
                <!--sns 끝-->
                </div>
                <!--메인 공통 메뉴 시작-->
                <div class="sub_left">
                <?php
                         include 'common/html_main_menu.php';
                ?> 
                </div>
                <!--메인 공통 메뉴 끝-->

                <!--프로젝트 시작-->
                <div class="sub_right">
                <?php
                         include 'control/project.php';
                ?> 
                </div>
                <!--프로젝트 끝-->
            </div>
          
</main>
<!--메인 끝-->


<!--푸터 시작-->
<footer>
    <?php
        include 'common/html_footer.php';
    ?>    
</footer>
<!--푸터 끝-->
</body>
<script src="/assets/index.js"></script>
</head>
</html>





