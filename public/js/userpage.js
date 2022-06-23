let todaydate=new Date();
let todayyear=todaydate.getFullYear();
let todaymonth=todaydate.getMonth()+1;
if(todaymonth<10)
    todaymonth="0"+todaymonth;
let todayday=todaydate.getDate();
if(todayday<10)
    todayday="0"+todayday;
let mindate=todayyear+'-'+todaymonth+'-'+todayday;
document.getElementById('date').setAttribute('min',mindate);


let showprofile=document.getElementById('showprofile');
let profile=document.getElementById('profile');
window.onclick=function(event){
        if(event.target!=showprofile)
            profile.classList.add('d-none');
    }
showprofile.addEventListener('click',function showprofile(e)
{
    if(profile.className.includes('d-none'))
        profile.classList.remove('d-none');
    else
        profile.classList.add('d-none');
});
let pass=document.getElementById('password');
let pass2=document.getElementById('cpassword');
let checkbtn=document.getElementById('change');
$validpass=false;
$validpass2=false;
function check(){
    if(!$validpass || !$validpass2)
    checkbtn.classList.add('disabled');
    else
    checkbtn.classList.remove('disabled');
}
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
    check();
});
pass2.addEventListener('blur',()=>{
    if(pass2.value!=pass.value){
        pass2.classList.add('is-invalid');
        $validpass2=false;
    }
    else{
        pass2.classList.remove('is-invalid');
        $validpass2=true;
    }
    check();
});
let places=document.getElementsByClassName('place');
for(let place of places){
place.addEventListener('change',verify);
}
function verify(){
    console.log('hiii');
    if(places[0].value==places[1].value){
        places[1].classList.add('is-invalid');
        document.getElementById('search').classList.add('disabled');
    }
    else{
        places[1].classList.remove('is-invalid');
        document.getElementById('search').classList.remove('disabled');
    }
}
