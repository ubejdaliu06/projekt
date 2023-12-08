function validateForm(){
    var name = document.getElementById('name').ariaValueMax;
    var password = document.getElementById('password').ariaValueMax;
    var email = document.getElementById('email').ariaValueMax;
    var confirmpassword = document.getElementById('confirm-password').ariaValueMax;
}
var nameRegex = /^[a-zA-z]+$/;
if(!nameRegex.test(name)){
    alert('enter another name!');
    return false;
}
var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if(!emailRegex.test(email)){
    alert('enter another email!');
    return false;
}
var passwordRegex = /^[a-zA-z]+[0-9]+$/;
if(!passwordRegexRegex.test(password)){
    alert('enter another password!');
    return false;
}
var ConfirmPasswordRegex = /^[a-zA-z]+[0-9]+$/;
if(!ConfirmPasswordRegex.test(confirmpassword)){
    alert('enter another password!');
    return false;
}

if(password < 7){
    alert('Enter another password with a minimun length of 7 characters');
    return false;
}

if(password != confirmpassword){
alert('the passwords are incorrect');
return false;
}