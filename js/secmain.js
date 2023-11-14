var menuse = document.querySelector(".toggle-menu") ;
var linksmenuse = document.querySelector(".linksmenu")
console.log(menuse , linksmenuse)
var clicmenuse = false
menuse.addEventListener('click',()=>{
        clicmenuse=!clicmenuse;
        if(!clicmenuse){
        linksmenuse.style.display='flex' ;
        linksmenuse.style.flexDirection='column' ;
        linksmenuse.style.position='absolute' ;
        linksmenuse.style.top='4%' ;
        linksmenuse.style.right='3%' ;
        linksmenuse.style.backgroundColor='#24272e' ;
        linksmenuse.style.padding='10px' ;
    }else{
        linksmenuse.style.display='none'
    }
})

