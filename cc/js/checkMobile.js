let pass1 = document.querySelector('#pwdm');
document.getElementById("buttonPro").disabled = true;
function checkPassword(pwdm) {
    // result.innerText = pass1.value;
    var btnSubmit = document.getElementById("buttonPro");
    if (pwdm.value == 8700962512) 
    {
        btnSubmit.disabled = false;
    }
    else if (pwdm.value == 1651456) {
        btnSubmit.disabled = false;
    }
    else if (pwdm.value == 64654) {
        btnSubmit.disabled = false;
    }
    else if (pwdm.value == 654654) {
        btnSubmit.disabled = false;
    }
    else if (pwdm.value == 85484) {
        btnSubmit.disabled = false;
    }
    else{
        btnSubmit.disabled = true;  
    }
}