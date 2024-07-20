// G.M.M.Dissanayake 

function checkPwd(){
    var pwd = document.getElementById('newpwd').value;
    var cnfmpwd = document.getElementById('cnfmpwd').value;
    var msg = document.getElementById('pwdStat');
    var submitbtn = document.getElementById('submitBtn');
    
    if(cnfmpwd == '' ) {
        msg.innerHTML = "";
        msg.style.color = "";
        submitbtn.disabled = true;
    }else if(pwd != cnfmpwd){
        msg.innerHTML = "Password Doesn't Matched!!";
        msg.style.color = "red";
        submitbtn.disabled = true;
    }else {
        msg.innerHTML = "Password Matched!!";
        msg.style.color = "green";
        submitbtn.disabled = false;
    }
}
