let books=document.getElementsByClassName('book');
    let seats=document.getElementById('seats');
    let pay=document.getElementById('pay');
    let fare;
    let available_seat;
    for(let book of books){
        book.addEventListener('click',(e)=>{
            document.getElementById('busid').value=e.target.value;
            available_seat=e.target.parentElement.parentElement.previousElementSibling.firstElementChild.firstElementChild.firstElementChild.lastElementChild.innerHTML;            
            fare=e.target.parentElement.parentElement.previousElementSibling.firstElementChild.firstElementChild.lastElementChild.previousElementSibling.lastElementChild.innerHTML;          
            calculate_fare();
        });
        };
    seats.addEventListener('input',()=>{
        let x=parseInt(seats.value);
        if(x<=0 || x>available_seat){
            seats.classList.add('is-invalid');
            pay.classList.add('disabled');
        }
        else{
            seats.classList.remove('is-invalid');
            pay.classList.remove('disabled');
        }
        calculate_fare();
    });
    function calculate_fare(){
        document.getElementById('fare').value=fare*seats.value;
    }