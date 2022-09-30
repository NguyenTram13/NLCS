window.addEventListener('load', function(){
    let infoUser= JSON.parse(window.localStorage.getItem('infoUser'))|| [];
    const navbarLog = document.querySelector('.navbar-log');
    const nameUser=document.querySelector('.name-user');
    const hello=document.querySelector('.hello');
    const exit=document.querySelector('.exit');
   const name=document.querySelector('.name')
   const nameEmail=document.querySelector('.name-email')
   const nameSdt=document.querySelector('.name-phone')
   const nameAdd=document.querySelector('.name-address')
   const modileExit = document.querySelector('.mobile-exit');
    const deleteLog = document.querySelectorAll('.delete-log');
    const mobileHello = document.querySelector('.mobile-hello');
    console.log(infoUser);
    if(infoUser.length>0){
        navbarLog?.classList.add('none');
        deleteLog[0]?.classList.add('none');
        deleteLog[1]?.classList.add('none');

        hello?.classList.remove('none');
        modileExit?.classList.remove('none');
        mobileHello?mobileHello.textContent = "Chào! "+infoUser[0].name:null;
        nameUser?nameUser.textContent=infoUser[0].name:null;
        name?name.textContent=infoUser[0].name:null;
        nameEmail?nameEmail.textContent=infoUser[0].email:null;
        nameSdt?nameSdt.textContent=infoUser[0].sdt:null;
        nameAdd?nameAdd.textContent=infoUser[0].address:null;


        }
    else{
        modileExit?.classList.add('none');

        navbarLog?.classList.remove('none');
        hello?.classList.add('none');


    }

    modileExit?.addEventListener('click',function(){
        window.localStorage.setItem('infoUser',JSON.stringify([]))

    })

    exit?.addEventListener('click',function(){
        window.localStorage.setItem('infoUser',JSON.stringify([]))
        
    })

})