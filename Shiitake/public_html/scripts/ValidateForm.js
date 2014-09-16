phone = false;
function phonenumber(inputphone){ 
var phoneReg = /^[0-9\-\ \+]{9,15}$/;  
    if((inputphone.value.match(phoneReg)))  {
        document.getElementById("errorPhone").innerHTML = "";
        return true;
    } else{
        document.getElementById("errorPhone").innerHTML = "Моля въведете правилен номер";
    } 
}
function timeValidate(inputtime){ 
    document.getElementById("format").innerHTML = "";
var timeReg = /^[0-9\:\;\ \+]{5}$/;  
    if((inputtime.value.match(timeReg)))  {
        document.getElementById("errorTime").innerHTML = "";
        
    } else{
        document.getElementById("errorTime").innerHTML = "Часът трябва да е въведен във формат: hh:mm";
    } 
}
function dataValidate(inputdata){ 
    document.getElementById("formatData").innerHTML = "";
var timeReg = /^[0-9\:\;\ \.\+]{10}$/;  
    if((inputdata.value.match(timeReg)))  {
        document.getElementById("errorData").innerHTML = "";
        
    } else{
        document.getElementById("errorData").innerHTML = "Датата трябва да е въведен във формат: dd.mm.yyyy";
    } 
}
function emptyName(){
   if (document.getElementById("firstName").value == "") {
        document.getElementById("errorName").innerHTML = "Моля въведете име";
    } else{
        document.getElementById("errorName").innerHTML = "";
    }
}
function emptyFamily(){
    if (document.getElementById("family").value == "") {
        document.getElementById("errorFamily").innerHTML = "Моля въведете Фамилия";
    } else{
        document.getElementById("errorFamily").innerHTML = "";
    }
}
function submitForm(){
    var name = false;
    var family = false;
    if (document.getElementById("firstName").value == "") {
        document.getElementById("errorName").innerHTML = "Името не може да е празно";
    } else{
        name = true;
    }
    if (document.getElementById("family").value == "") {
        document.getElementById("errorFamily").innerHTML = "Фамилията не може да е празна";
    } else{
        family = true;
    }
    
    
    if (name == true && family == true) {
        formReservation.submit();
    }
}
