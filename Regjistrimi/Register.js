
function validateForm(){
  let UserName = document.getElementById('User');
  let Name = document.getElementById('Emri');
  let Surname = document.getElementById('Mbiemri');
  let Email = document.getElementById('Email');
  let Password = document.getElementById('password');
  let confirmPassword = document.getElementById('confirm-password');
  let Mashkull = document.getElementById('Mashkull');
  let Femer = document.getElementById('Femer');

  

  let Vitilindjes = document.getElementById('Vitilindjes');
 

let UserNameRegex = /^[a-z A-Z]+[0-9]+$/;
let NameRegex = /^[a-z A-z]+$/;
let SurNameRegex = /^[a-z A-z]+$/;
let passwordRegex = /^[a-z A-Z]+[0-9]+$/;
let EmailRegex =  /^[a-zA-Z.-_]+@+[a-z]+\.+[a-z]+$/;
let MashkullRegex = /^[Mashkull]+$/;
let FemerRegex = /^[Femer]+$/;


if( Emri.value.trim() = '' || !NameRegex.test(Name)){
  alert('This Name isnt valid!');
  return;
}
if(!UserNameRegex.test(UserName)){
  alert('This UserName isnt valid (inlcude Numbers)');
  return;
}

if( Mbiemri.value.trim() = ''||!SurNameRegex.test(Surname)){
  alert('This SurName isnt valid!');
  return;
}
if(!passwordRegex.test(Password)){
  alert('This password isnt valid min. 8 characters!');
  return;
}
if(!EmailRegex.test(Email)){
  alert('This Email isnt valid!');
  return;
}


if(Password != confirmPassword){
  alert('The Passwords arent matching!');
  return;
}
if(MashkullRegex != Mashkull){
  if(FemerRegex != Femer){
    alert("You must choose a gender!");
  }
  return;
}
const today = new Date();
if(Vitilindjes != null){
  alert('Choose your Birthdate!');
}else{
const AGE = Vitilindjes - today;
}

if(AGE < 18){
  alert('You must be 18 years old!');
  return false;
}




alert('Jeni Loguar Me Sukses!');
}