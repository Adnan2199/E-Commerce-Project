var x=document.getElementById("l");
var y=document.getElementById("s");
var z=document.getElementById("b");
function signup() {
    x.style.left="-300px";
    y.style.left="0px";//contols the horizontal movement
    z.style.left="160px";
}
function login() {
    x.style.left="10px";
    y.style.left="450px";
    z.style.left="0";
}

// This is validation at client side i.e Browser

function seterror(id,error){
    //sets error inside tag of id
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
}
function validateForm(){
    var returnval = true;//assuming it as true
    var name = document.forms['loginF']["fname"].value;
    var pass= document.forms['loginF']['fpass'].value;
    // if(name.length<3){
    //     seterror("name","*");
    //     console.log('Hello');
    //     returnval = false;
    // }

    if(pass.length!=8){
        seterror("pass","*Password should be of 8 characters");
        returnval = false;
    }

    if(name.length<3){
        seterror("name","*Length of name is too short");
        returnval = false;
    }
    if(pass[0]!=pass[0].toUpperCase())
    {
        seterror("pass","*First letter should be capital");
        returnval = false;
    }

    return returnval;
}