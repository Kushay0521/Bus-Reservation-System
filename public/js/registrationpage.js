let pass=document.getElementById('password');
let pass2=document.getElementById('cpassword');
let email=document.getElementById('email');
let phone=document.getElementById('mobile');
let uname=document.getElementById('uname');
let age=document.getElementById('age');
let check=document.getElementById('invalidCheck');
$validpass=false;
$validpass2=false;
$validemail=false;
$validphone=false;
$validuname=false;
$validage=false;
uname.addEventListener('blur',()=>{
    if(uname.value.length<5){
        uname.classList.add('is-invalid');
        $validuname=false;
    }
    else{
        uname.classList.remove('is-invalid');
        $validuname=true;
    }
    checkbox();
});
pass.addEventListener('blur',()=>{
    let regx=/^[a-zA-Z0-9]+[0-9]+?([a-zA-Z0-9]+)[@#$%^&]+([a-zA-Z0-9]+)$/;
    if(!pass.value.match(regx)){
        pass.classList.add('is-invalid');
        $validpass=false;
    }
    else{
        pass.classList.remove('is-invalid');
        $validpass=true;
    }
    PasswordCheck();
    // checkbox();
});
pass2.addEventListener('blur',()=>{
    PasswordCheck();
    // if(pass2.value!=pass.value){
    //     pass2.classList.add('is-invalid');
    //     $validpass2=false;
    // }
    // else{
    //     pass2.classList.remove('is-invalid');
    //     $validpass2=true;
    // }
    // checkbox();
});
function PasswordCheck(){
    if(pass2.length!=0){
    if(pass2.value!=pass.value){
        pass2.classList.add('is-invalid');
        $validpass2=false;
    }
    else{
        pass2.classList.remove('is-invalid');
        $validpass2=true;
    }
    }
    checkbox();
}
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
    checkbox();
});
phone.addEventListener('blur',()=>{
    let regx=/^[0-9]{10}$/;
    if(!phone.value.match(regx)){
        phone.classList.add('is-invalid');
        $validphone=false;
    }
    else{
        phone.classList.remove('is-invalid');
        $validphone=true;
    }
    checkbox();
});
age.addEventListener('blur',()=>{
    if(age.value<15){
        age.classList.add('is-invalid');
        $validage=false;
    }
    else{
        age.classList.remove('is-invalid');
        $validage=true;
    }
    checkbox();
});
function checkbox(){
    if(!$validage || !$validemail || !$validphone || !$validuname || !$validpass || !$validpass2)
        check.setAttribute('disabled');
    else
    check.removeAttribute('disabled');
}
check.addEventListener('click',()=>{
    if(!check.checked)
        document.getElementById('register').classList.add('disabled');
    else
        document.getElementById('register').classList.remove('disabled');
});
        
