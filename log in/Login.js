
function validateForm(){
  let UserName = document.getElementById('UserName');
  let password = document.getElementById('password');
  let UserNameError = document.getElementById('');
  let passError = document.getElementById('passwordError');
  
  nameError.innerText = ' ';
  passError.innerText = ' ';

let UserNameRegex = /^[a-zA-z]+[0-9]$/;
let passwordRegex = /^[a-z A-Z]+[0-9]+$/;
if(!UsernameRegex.test(UserName)){
  alert('shtypeni nje UserName tjeter!');
  return;
}



if(!passwordRegexRegex.test(password)){
 nameError.innerText ='shtypeni nje password qe permban nje numer minimum';
  return ;
}
if(password < 8){
  passError.innerText='passwordi duhet te jet ma i gjat se 8 karaktere';
  return;  
}
alert('Jeni Loguar Me Sukses!');
}