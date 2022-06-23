let closes=document.getElementsByClassName('btn-close');
  for(let closed of closes){
        closed.addEventListener('click',()=>{
        location.href='/userpage';
        });
  };