let name=document.getElementById("name");
let nerror=document.getElementById("nerror");
let mob=document.getElementById("mob");
let merror=document.getElementById("merror");
let email=document.getElementById("email");
let eerror=document.getElementById("eerror");
let username=document.getElementById("username");
let uerror=document.getElementById("uerror");
let pass=document.getElementById("pass");
let perror=document.getElementById("perror");
let forms=document.getElementById("form");
let submit=document.getElementById("submit");
console.log("helloooo");

forms.addEventListener('submit',function (e){
    e.preventDefault();

    console.log(name.value);
    if(name.value.match(/^[A-Za-z]+$/))
    {
        console.log("correct format");
    }
    else{
        console.log("wrong format");
        let msg="Name should contain only alphabets"
        nerror.innerHTML=msg;
        nerror.style.color="red";
    
    }
    if(mob.value.match(/^[0-9]+$/ ) && mob.value.length==10)
    {
        console.log("correct format");
    }
    else{
        console.log("wrong format");
        
        merror.innerHTML="mobile should be 10 digit number";
        merror.style.color="red";
    
    }
    if(email.value.match(/^\w+([\.-]?\w+)@\w+(\.\w{2,3})+$/))
    {
        console.log("correct format");
    }
    else{
        console.log("wrong format");
        
        eerror.innerHTML="wrong email format";
        eerror.style.color="red";
    
    }
    if(pass.value.match(/^\w+([\.-]?\w+)+\W+\w+$/) && pass.value.length>=10)
    {
        console.log("correct format");
    }
    else{
        console.log("wrong format");
        
        perror.innerHTML="wrong email format";
        perror.style.color="red";
    
    }

})
console.log("helloooo");


