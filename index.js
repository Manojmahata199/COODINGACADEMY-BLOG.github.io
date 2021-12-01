function myweb(){
    let name1=document.form1.name.value;
    let email1=document.form1.email.value;
    let atpos=email1.indexOf("@");
    var dotpos=email1.lastIndexOf(".");

    if(name1==""){
        document.getElementById('nameerror').innerHTML="!Name is required";
        return false;

        
    }
    if(atpos<1||dotpos<atpos+2||dotpos+2>=email1.length){
        document.getElementById('emailerror').innerHTML="!Email Is invalid";
        return false;
    }
    if(email1==""){
        document.getElementById('emailerror').innerHTML="!Email  is required";
        return false;
        
        
    }
    
    
        
     
} 