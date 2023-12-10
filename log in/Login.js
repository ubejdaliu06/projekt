
function validateForm(){
  let UserName = document.getElementById('UserName');
  let password = document.getElementById('password');
  
  
  

let UserNameRegex = /^[a-z A-Z]+[0-9]$/;
let passwordRegex = /^[a-z A-Z]+[0-9]+$/;

if(!UserNameRegex.test(UserName)){
  alert('Type another Username include numbers!');
  return;
}

if(!passwordRegex.test(password)){
 alert =('Try another password including numbers');  
  return ;
}
if(password < 8){
  passError.innerText=('minimun length of a password is 8');
  return;  
}
alert('Your loged in with Success');
}