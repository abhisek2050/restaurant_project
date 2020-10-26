$(document).ready(function(){

    $(".mobile__menu").click(function(){
        $(".main__nav").slideToggle(700);
    });

    $(".list").click(function(){
        $(".list").removeClass("active");
        $(this).addClass("active");

        var attribute = $(this).attr("data-food");
        $(".all").hide();
        $("." + attribute).fadeIn(500);

    });

    // testimonial slider update

    $('.carousel').carousel({
        interval: 100,
        pause: true
    });

});

var insertVal= document.getElementsByTagName("input");
var errorMsg= document.getElementsByTagName("p");
var textExp=/^([a-zA-Z]+)$/;
var numExp=/^([0-9])$/;
var mailExp=/^([a-zA-Z0-9\.-]+)([@])([a-zA-z0-9-]+)([\.])([a-z]{2,5})([\.])?([a-z]{2,8})?$/;



function validation(){

    function error(index){
       var indexNum=index;
        insertVal[indexNum].style.border= "1px solid red";
    }

    if(insertVal[0].value== "" && insertVal[1].value=="" && insertVal[2].value=="" && insertVal[3].value== ""){
       
        errorMsg[0].innerText="the field should not be empty";
        error(0);
        errorMsg[1].innerText="the field should not be empty";
        error(1);
        errorMsg[2].innerText="the field should not be empty";
        error(2);
        errorMsg[3].innerText="the field should not be empty";
        error(3);
        return false;

    }else if(insertVal[1].value=="" && insertVal[2].value=="" && insertVal[3].value==""){

        errorMsg[1].innerText="this field should not be empty";
        error(1);
        errorMsg[2].innerText="this field should not be empty";
        error(2);
        errorMsg[3].innerText="this field should not be empty";
        error(3);
        return false;

   
    }else if(insertVal[2].value=="" && insertVal[3].value=="" && insertVal[0].value==""){

        errorMsg[2].innerText="this field should not be empty";
        error(2);
        errorMsg[3].innerText="this field should not be empty";
        error(3);
        errorMsg[0].innerText="this field should not be empty";
        error(0);
        return false;

    }else if(insertVal[3].value=="" && insertVal[0].value=="" && insertVal[1].value==""){

        errorMsg[3].innerText="this field should not be empty";
        error(3);
        errorMsg[0].innerText="this field should not be empty";
        error(0);
        errorMsg[1].innerText="this field should not be empty";
        error(1);
        return false;


    }else if(insertVal[0].value=="" && insertVal[1].value=="" && insertVal[2].value==""){
        
        errorMsg[0].innerText="this field should not be empty";
        error(0);
        errorMsg[1].innerText="this field should not be empty";
        error(1);
        errorMsg[2].innerText="this field should not be empty";
        error(2);
        return false;
    }

    // user name

    if(insertVal[0].value==""){
        error(0);
        errorMsg[0].innerText="this field should not be empty";
        return false;
    }

    if(!textExp.test(insertVal[0].value)){
        errorMsg[0].innerText="value should be text only";
        return false;
    }
     // password

     
    if(insertVal[2].value==""){
        error(2);
        errorMsg[2].innerText="this field should not be empty";
        return false;
    }

    
     
    if(insertVal[3].value==""){
        error(3);
        errorMsg[3].innerText="this field should not be empty";
        return false;
    }

    if(insertVal[2].value !== insertVal[3].value){
        errorMsg[3].innerText="the same password you should be enter here";
        return false;
    }
    else{
    return true;
    }
}


    
      