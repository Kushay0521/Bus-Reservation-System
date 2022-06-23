let email=document.getElementById('email');
let checkbtn=document.getElementById('check');
let $validemail=false;
email.addEventListener('blur',()=>{
let regx=/^[a-zA-Z0-9_]+@[a-zA-z0-9_]+\.[a-z]{2,4}$/;
if(!email.value.match(regx)){
email.classList.add('is-invalid');
$validemail=false;
}
else{
email.classList.remove('is-invalid');
$validemail=true;
}
check();
});
function check(){
if(!$validemail)
checkbtn.classList.add('disabled');
else
checkbtn.classList.remove('disabled');
}