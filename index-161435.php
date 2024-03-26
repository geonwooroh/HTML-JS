<!--헤드 시작-->
<?php
$d=$_SERVER[DOCUMENT_ROOT];
    include 'common/html_head.php';
?>
<!--헤드 끝-->
<body>
<!--헤더 시작-->
<header>
    <?php
        include ("$d/common/html_header.php");
    ?>       
</header>

<!--헤더 끝-->

<!--메인 시작-->
<main>
    
            <div class="main_box">
                <!--sns 시작-->
                <div class="spare">
                <?php
                         include ("$d/common/html_main_sns.php");
                ?> 
                <!--sns 끝-->
                </div>
                <!--메인 공통 메뉴 시작-->
                <div class="sub_left">
                <?php
                         include ("$d/common/html_main_menu.php");
                ?> 
                </div>
                <!--메인 공통 메뉴 끝-->

                <!--프로젝트 시작-->
                <div class="sub_right">
                <?php          
                    $vm= $_GET['vm'];
                    // echo $vm;
                    if(($vm)){
                        $is_file_exist = file_exists("$d/control/$vm.php");
                        if($is_file_exist){
                        include "$d/control/$vm.php";//파일 디렉토리를 추적해서 project면 project, message면 message출력
                        }else{
                            echo "파일없음";
                        }
                    }else{
                       include "$d/control/project.php"; //만약 vm이라는 값이 없다면 project.php를 호출하도록
                    }
                ?> 
                </div>
                <!--프로젝트 끝-->
            </div>
</main>
<!--메인 끝-->

<!--푸터 시작-->
<footer>
    <?php
        include ("$d/common/html_footer.php");
    ?>    
</footer>
<!--푸터 끝-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script src="/assets/index.js"></script>
</body>


</html>
