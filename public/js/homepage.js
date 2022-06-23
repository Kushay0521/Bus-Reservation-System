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

let places=document.getElementsByClassName('form-select');
        for(let place of places){
            place.addEventListener('change',verify);
        }
        function verify(){
            if(places[0].value==places[1].value){
                places[1].classList.add('is-invalid');
                document.getElementById('search').classList.add('disabled');
            }
            else{
                places[1].classList.remove('is-invalid');
                document.getElementById('search').classList.remove('disabled');
            }
        }