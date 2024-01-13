var menu_toggle = document.querySelector('.menu_toggle');
var menu = document.querySelector('.menu');
var menu_toggle_span = document.querySelector('.menu_toggle span');

menu_toggle.onclick = function(){
    menu_toggle.classList.toggle('active');
    menu_toggle_span.classList.toggle('active');
    menu.classList.toggle('responsive') ;
}
try{
    if(error == 'error'){
        document.getElementById('error').innerHTML = 'invalid informations';
        document.getElementById('useremail').style.border = '1px solid red';
        document.getElementById('password').style.border = '1px solid red';
    }else if(error == 'already'){
        document.getElementById('error').innerHTML = 'the email or username are already taken';
        document.getElementById('firstName').style.border = '1px solid red';
        document.getElementById('lastName').style.border = '1px solid red';
        document.getElementById('password').style.border = '1px solid red';
        document.getElementById('email').style.border = '1px solid red';
        document.getElementById('username').style.border = '1px solid red';
        document.getElementById('confirmPassword').style.border = '1px solid red';
    }else if(error =='dontmatch'){
        document.getElementById('error').innerHTML = 'the passwords dont match';
        document.getElementById('username').style.border = '1px solid red';
        document.getElementById('firstName').style.border = '1px solid red';
        document.getElementById('lastName').style.border = '1px solid red';
        document.getElementById('password').style.border = '1px solid red';
        document.getElementById('email').style.border = '1px solid red';
        document.getElementById('confirmPassword').style.border = '1px solid red';
    }
    else if(error == "error2"){
        document.getElementById('error').innerHTML = 'please fill all the fields';
        document.getElementById('username').style.border = '1px solid red';
        document.getElementById('firstName').style.border = '1px solid red';
        document.getElementById('lastName').style.border = '1px solid red';
        document.getElementById('password').style.border = '1px solid red';
        document.getElementById('email').style.border = '1px solid red';
        document.getElementById('confirmPassword').style.border = '1px solid red';
    }
}catch(err){
    console.log(err);
}