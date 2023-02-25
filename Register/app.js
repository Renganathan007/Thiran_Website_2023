console.log("syed");
let syed = document.getElementById("show");
console.log(syed.options[syed.selectedIndex].text);
let p1name = document.getElementById('p1name');
let p1roll = document.getElementById('p1roll');
let p1mail = document.getElementById('p1mail');
let p1phone = document.getElementById('p1phone');
let department = document.getElementById('department');
let  year= document.getElementById('year');




p1name.onblur=()=>{
    let n= p1name.value;
    let regex = /^[a-zA-Z ]+$/;
    let regex2 = /^[a-zA-Z]+ [a-zA-Z]+$/;

    if(!regex2.test(n) && (!regex.test(n))){
        alert("invalid name");
        p1name.value=""
    }
  
}

p1roll.onchange=()=>{
    let n= p1roll.value;
    let regex = /^[a-zA-Z0-9]+$/;
    if(!regex.test(n)){
        alert("invalid roll number");
        p1roll.value=""
        
    }
    
}

p1mail.onchange=()=>{
    let n= p1mail.value;
    let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!regex.test(n)){
        alert("invalid Email");
        p1mail.value=""
    }
    
}

p1phone.onchange=()=>{
    let n= p1phone.value;
    let regex = /^[0-9]{10}$/;
    if(!regex.test(n)){
        alert("invalid mobile number");
        p1phone.value=""
    }
    
}

department.onchange=()=>{
    let n= department.value;
    let regex = /^[A-Za-z]+$/;
    let regex2 = /^[a-zA-Z]+ [a-zA-Z]+$/;
    if(!regex2.test(n) && (!regex.test(n))){
        alert("invalid Department");
        department.value=""
    }
    
}

year.onchange=()=>{
    let n= year.value;
    let regex = /^[0-9]{1}$/;
    if(!regex.test(n)){
        alert("invalid year");
        year.value=""

    }
    
}

syed.onchange=()=>
{
    let s=syed.options[syed.selectedIndex].text;
    let show=document.getElementById("hide")
    let shows=document.getElementById("hide2")
    console.log(s);
    if(s=="event2"){
        console.log("click");
        show.style.display="block";
        shows.style.display="block";
    }
    else if(s!="event2"){
        show.style.display = "none";
        shows.style.display = "none";
    }

}
let hide=document.getElementById("hidee2")
hide.onblur=()=>{
    let p1roll=document.getElementById("p1roll")
    console.log(hide.value)

    if(p1roll.value == hide.value)
    {
        console.log("errrofkdjslfk")
    }
}