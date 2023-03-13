function validate(){
    let uname = document.getElementById("uname").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;

    let uname_reg = /^christ-/;
    let email_reg = /^[a-zA-Z\.-\d]+@[a-zA-Z]+\.[a-z]{3}$/;
    let phone_reg = /^[6-9]\d{9}$/;
    document.getElementById("uname").style = "border: 1px solid black";
    document.getElementById("email").style = "border: 1px solid black";
    document.getElementById("phone").style = "border: 1px solid black";
    
    if(!uname_reg.test(uname)){
        document.getElementById("uname").style = "border: 2px solid red;";
        alert("Username not in proper format");
        return false;
    }
    else if(!email_reg.test(email)){
        document.getElementById("email").style = "border: 2px solid red;";
        alert("Email not in proper format");
        return false;
    }
    else if(!phone_reg.test(phone)){
        document.getElementById("phone").style = "border: 2px solid red;";
        alert("Phone number not in proper format");
        return false;
    }
    alert("Submitted successfully!");
    return true;
}