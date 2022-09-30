window.addEventListener('load', function(){
    const formLogin=document.querySelector('.form-login')
    
    let arrayUser=[];
    // formLogin.addEventListener('submit', function(e){
    //     e.preventDefault();
    //     let infoUser=[];
    //     arrayUser=JSON.parse(window.localStorage.getItem('user')) || [];
    //     console.log(arrayUser);
    //     let valueemail= this.querySelector('.email').value 
    //     let valuepwd= this.querySelector('.pwd').value 
    //     let islogin=false;
    //     const mess=document.querySelector('.mess')
       

        
    //     //email
    //     if(arrayUser.length>0){
    //         arrayUser.forEach(item=>{
    //             if(valueemail==item.email && valuepwd==item.pwd){
    //                 islogin=true;
    //                let login={
    //                    name:item.name,
    //                     email: item.email,
    //                     sdt: item.sdt,
    //                     address: item.address
    //                }
    //                infoUser.push(login);
    //                window.localStorage.setItem('infoUser',JSON.stringify(infoUser));
    //                window.location.href='./trangchu.html'
    //             }
    //             else{
    //                 islogin=false
                    
    //             }
            
    //         })
            
    //     }
    //     if(!islogin){
    //         mess.textContent='Tài khoản không tồn tại'
    //         mess.style.padding='8px'
    //     }
    //    else{

    //     mess.style.padding='0 '
    //    }
    // })


})