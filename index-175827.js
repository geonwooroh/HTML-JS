
feather.replace();

            function Chagecolor(color){
                // var $circles=$("circle");
                // var $header =$('header');
                ///var color = ['#FF3B30', 'blue', '#34C759', 'black'];
                         
                if($("#project_h1"))  $("#project_h1").css("color",color); 
                if($("#leave_a_message")) $("#leave_a_message").css("color",color);
                $("#contact_h1,#skill_h1,#education_h1").css("color",color)
                $("#instagram,#linkedln,#twitter,#button_1,#button_2,#button_3,header").css("background-color",color);
                          
                
            }

            function Change_light(index){
                
                var bgc=(index ===0)?'rgba(229, 229, 234, 1)':'rgba(28, 28, 30, 1)';
                var txc=(index ===0)?'rgba(28, 28, 30, 1)':'rgba(229, 229, 234, 1)';

                

                $('main,body').css({"background-color":bgc,"color":txc });
                
                // if(index === 0){
                //     $('main,body').css("background-color","color").css(color[0],color[1])
                //     console.log(index)
                // }else{
                //     $('main,body').css("background-color","color").css(color[1],color[0])
                // }
                


                
            }
          