<?php

$html = <<<HTML
<h1 id="contact_h1">Contact</h1>
<ul class="contact">
    <li> <i data-feather="home"></i><span class="home" onclick="location.href ='index.php'">www.google.com</span></li>
    <li> <i data-feather="mail"></i><a class="mail" href="mailto:gwooroh23@gmail.com">gwooroh23@gmail.com</a></li>
    <li> <i data-feather="phone"></i><a class="phone" href="tel:010-3655-6338">(010)-3655-6338</a></li>
    <li> <i data-feather="message-square"></i><span class="message_square" onclick="location.href ='leave_a_message.php'">Leave a message</span></li>
</ul>
<h1 id="skill_h1">Skill</h1>
<ul class="skill">
    <li class="skill_gray"><span>Tools</span></li>
    <li class="adobe"><span>Adobe Creative Suite</span></li>
    <li class="sketch"><span>Sketch</span></li>
    <li class="figma"><span>Figma</span></li>
    <li class="invision"><span>InVision</span></li>
    <li class="skill_gray"><span>Language</span></li>
    <li class="html"><span>HTML, CSS, Python, Javascript, SQL</span></li>
</ul>
<h1 id="education_h1">Education</h1>
<ul class="education">
    <li><strong>서울대학교</strong></li>
    <li>응용소프트웨어전공</li>
    <li>2014년 졸업</li>
    <li class="education_gray"><span class="seoul">Seoul, Republic of Korea</span></li>
</ul>
HTML;

// HTML 문자열을 파싱하여 DOMDocument 객체 생성
$dom = new DOMDocument();
$dom->loadHTML($html);

// ul 태그 목록을 선택
$ulList = $dom->getElementsByTagName('ul');

$data = [];

// 각 ul 태그의 내용을 JSON으로 변환
foreach ($ulList as $ul) {
    $items = [];
    foreach ($ul->getElementsByTagName('li') as $li) {
        $items[] = trim($li->nodeValue);
    }
    $data[] = $items;
}

// JSON 출력
echo json_encode($data);

?>

1.먼저, 여러 줄의 HTML 코드를 $html 변수에 할당합니다. 이 HTML 코드에는 <ul> 태그와 그 안에 포함된 <li> 태그들이 있습니다.

2.DOMDocument 클래스를 사용하여 HTML을 파싱합니다. 이를 통해 HTML을 DOM(Document Object Model) 구조로 변환합니다.

3.getElementsByTagName() 메서드를 사용하여 DOM에서 모든 <ul> 태그를 선택합니다.

4.각 <ul> 태그에 대해 getElementsByTagName() 메서드를 다시 사용하여 그 안에 있는 모든 <li> 태그를 선택합니다.

5.<li> 태그의 내용을 배열에 추가하고, 마지막으로 해당 배열을 $data 배열에 추가합니다. 이 과정을 모든 <ul> 태그에 대해 반복합니다.

6.최종적으로 $data 배열을 json_encode() 함수를 사용하여 JSON 형식으로 변환하고 출력합니다.