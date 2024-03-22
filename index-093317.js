feather.replace();
function Chagecolor(index){
    //각 동그란 버튼의 이름 가져오기
    var circle = document.getElementsByClassName("circle");
    //header는 전체 하나에 주는 거니까 하나만 가져오자
    var header = document.querySelector("header");
    
    var contact_h1 = document.getElementById("contact_h1");
    var skill_h1 = document.getElementById("skill_h1");
    var education_h1 = document.getElementById("education_h1");
    var education_h1= document.getElementById("education_h1");

    var instagram = document.getElementById("instagram");
    var linkedln = document.getElementById("linkedln");
    var twitter = document.getElementById("twitter");
    

    
    //숫자 위에서 지정
    const color = ['#FF3B30', 'blue', '#34C759', 'black'];
    for(i=0; i <=4; i++){
        if(index === i){
        header.style.backgroundColor = color[i];

        contact_h1.style.color = color[i];
        skill_h1.style.color = color[i];
        education_h1.style.color = color[i];
        project_h1.style.color = color[i];
        instagram.style.backgroundColor = color[i];
        linkedln.style.backgroundColor = color[i];
        twitter.style.backgroundColor = color[i];
        
    }
    }
}
function Change_light(index){
    var main = document.querySelector("main");
    var body = document.querySelector("body");
    const color = [' rgba(229, 229, 234, 1)	','rgba(28, 28, 30, 1)','rgba(28, 28, 30, 1)',' rgba(229, 229, 234, 1)'];

    if(index === 0){
        // main.style.backgroundColor = color[0];
        // main.style.color = color[1];
        body.style.backgroundColor = color[0];
        body.style.color = color[1];
    }else if(index === 1){
        body.style.backgroundColor = color[2];
        body.style.color = color[3];
    }
}