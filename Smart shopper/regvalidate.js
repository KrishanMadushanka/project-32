function confirmForm(form){

    var patt1 = /^[a-zA-Z]{2,}$/;
    if(!patt1.test(form.firstname.value)) {
    //if(!(form.first.value.match(/^[a-zA-Z]{2,}$/))) {
        alert("Invalid First Name");
        form.firstname.focus();
            return false;
    }
    
     var patt2 = /^[a-zA-Z]{2,}$/;
    if(!patt2.test(form.lastname.value)) {
//    if(!(form.last.value.match(/^[a-zA-Z]{2,}$/))) {
        alert("Invalid Last Name");
        form.lastname.focus();
        return false;
    }
    var patt3 = /^\w.+\@+[a-z]+\.[a-z]{2,7}$/;
    if(!patt3.test(form.email.value)) {
        alert("Invalid Email");
        form.email.focus();
        return false;
    } 

    var patt4 = /^[0-9]{10}$/;
    if(!patt4.test(form.contact.value)) {
    
        alert("Invalid Contact Number");
        form.contact.focus
        return false
    }


    /*var patt5 = /^\w{5,}$/;
    if(!patt5.test(form.password.value)) {
    
        alert("Invalid Password");
        form.password.focus();
        return false;
    }*/
    
    if(!(form.confirm_password.value == form.password.value)){
        alert("Password must be the same");
        form.confirm_password.focus();
        return false;
    }else {
        return true;
    }
}