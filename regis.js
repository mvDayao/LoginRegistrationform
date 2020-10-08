function ValidateAll() {
    'use strict'; 
    
}
function myFunction() {
    'use strict'; 
    var lastname = document.getElementById("lname").value;
    var firstnamee = document.getElementById("fname").value;

    if (document.getElementById("lname").value === " ") {
        return true;
    } else {
        alert('Enter Last Name');
        document.getElementById("lname").focus();
            return false;
    }
    
    if (!/^[a-zA-Z]*$/g.test(document.getElementById("lname").value)) {
            return true;
    }
    else {
            alert('Invalid characters');
            document.getElementById("lname").focus();
            return false;
        }
}
if (myFunction) {
    document.form.submit();
}
