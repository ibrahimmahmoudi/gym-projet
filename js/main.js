var likebtn = document.getElementById("likebtn") ;
var dislikebtn = document.getElementById('dislikebtn') ;
var counter1 = document.getElementById('counter1');
var counter2 = document.getElementById('counter2') ;
var iconlike = document.getElementById('iconlike') ;
var icondis = document.getElementById('iconsdis');
var signup = document.getElementById('signup') ;
var btnsignup = document.getElementById('btnsignup')
var iconclose = document.getElementById('icon-close') ;
var wrapper = document.getElementById('wrapper') ;
var contact = document.getElementById('contact') ;
var win = document.getElementById('winn') ;
var loader = document.getElementById('loader') ;


var height = document.getElementById('height') ;
var weight  = document.getElementById('weight') ; 
var age = document.getElementById('age') ;
var gender = document.getElementById('gender') ;
var activitee = document.getElementById('activitee') ;
var male = document.getElementById('male') ;
var female = document.getElementById('female');

var errheight = document.getElementById('errheight') ;
var errage= document.getElementById('errage')
var errweight = document.getElementById('errweight')
var errgender = document.getElementById('errgender')
var erractivite = document.getElementById('erractiv');

// start formulaire signup

var email = document.getElementById('email') ;
var password = document.getElementById('password');
var ersignup = document.getElementById('erlogin') ;

const login= (j)=>{
if(email.value == "" || password.value=="" ){
    ersignup.innerHTML="The information is incorrect" ;
}else{
    const formi = document.querySelectorAll('form')[0];
    formi.submit() ;
} ;
};



// end formulaire signup 


var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
function progressSim(){
	diff = ((al / 100) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 17;
	ctx.fillStyle = '#ff9045';
	ctx.strokeStyle = "#ff9045";
	ctx.textAlign = "center";
	ctx.font="28px monospace";
	ctx.fillText(al+'%', cw*.52, ch*.5+5, cw+12);
	ctx.beginPath();
	ctx.arc(100, 100, 75, start, diff/10+start, false);
	ctx.stroke();
	if(al >= 100){
		clearTimeout(sim);
	    // Add scripting here that will run when progress completes
	}
	al++;
    
}



const send = (e)=>{
    // if(height.value == "" || weight.value == "" || age.value == "" ||  activitee.selected ||gender.checked){
    //     alert("please enter all fields") ;
    // }
    if(height.value == "" ){
        errheight.innerHTML="Please enter your height from 50 to 300cm" ;
        height.addEventListener('keyup' ,function(){
            errheight.remove() ;
        })
        
    } 
    else if(age.value == "" ) {
        errage.innerHTML = "Please enter your age from 1 to 100years" ;
        age.addEventListener('keyup' ,function(){
            errage.remove() ;
        })
        
        
    }else if(weight.value == "" ) {
        errweight.innerHTML="Please enter your weight from 1 to 200kg" ;
        weight.addEventListener('keyup' ,function(){
            errweight.remove() ;
        })
    }else if(document.getElementById('activite').value == ''){
        erractivite.innerHTML = "Please enter your activite" ;
        document.getElementById('activite').addEventListener('change' ,function(event){
            if(event.target.value == ""){
                erractivite.innerHTML = "Please enter your activite" ;
            }else{
                erractivite.remove() ;
            }
            
        })
        
    }else if(gender.checked){
        errgender.innerHTML = "Please enter your gender" ;
        gender.addEventListener('keyup' ,function(){
                errgender.remove() ;
            })
    }
    else{
        setInterval(progressSim, 50)
        loader.style.display='block' ;
        setTimeout(()=>{
            const form = document.querySelectorAll('form')[1];
            loader.style.display='none' ;
            form.submit() ;
        }, 5000);
} ;

}

var menu = document.getElementById("menu") ;
var linksmenu = document.getElementById("linksmenu")
var clicmenu = false
menu.addEventListener('click',()=>{
    clicmenu=!clicmenu;
    if(!clicmenu){
        linksmenu.style.display='flex' ;
        linksmenu.style.flexDirection='column' ;
        linksmenu.style.position='absolute' ;
        linksmenu.style.top='4%' ;
        linksmenu.style.right='3%' ;
        linksmenu.style.backgroundColor='#24272e' ;
        linksmenu.style.padding='10px' ;
    }else{
        linksmenu.style.display='none'
    }
})






var liked = false ;

likebtn.addEventListener('click',()=>{
    if(!liked){
        counter1.value=parseInt(counter1.value)+1; 
        counter1.style.color='#ff9045' ;
        iconlike.style.color='#ff9045' ;
        liked = true ;
        likebtn.disabled= true ;   
    }

})
dislikebtn.addEventListener('click',()=>{
    if(!liked){
        counter2.value = parseInt(counter2.value)+1 ;
        counter2.style.color ='#ff9045' ;
        icondis.style.color='#ff9045' ;
        liked = true ;
        dislikebtn.disabled= true ;   
    }
})

btnsignup.addEventListener('click',()=>{
    signup.style.display='block' ;
    contact.style.display='none' ;
    wrapper.style.transition='1.5s' ;
    
})
iconclose.addEventListener('click', ()=>{
    signup.style.display='none' ;
    contact.style.display='block' ;
}
)
