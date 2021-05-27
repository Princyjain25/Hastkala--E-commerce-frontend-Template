var login_email=document.getElementById('email_login');
var login_password=document.getElementById('pass_login');
var emailb=false;
var passwordlb=false;
login_email.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$");
    if(!regex.test(val)){
        login_email.classList.add("wrong");
        alert("Invalid Email Address.")
    }else{
        emailb=true;
        login_email.classList.remove("wrong")
    }
})
login_password.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$");
    if(!regex.test(val)){
        login_password.classList.add("wrong");
        alert("Required.")
    }else{
        passwordlb=true;
        login_password.classList.remove("wrong")
    }
})
var old_pass= document.getElementById('firstname');
var new_pass=document.getElementById('');
var retype_pass=document.getElementById('');
var password=false;
old_pass.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$");
    if(!regex.test(val)){
        old_pass.classList.add("wrong");
    }else{
        password=true;
        old_pass.classList.remove("wrong")
    }
})
new_pass.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$");
    if(!regex.test(val)){
        new_pass.classList.add("wrong");
    }else{
        password=true;
        new_pass.classList.remove("wrong")
    }
})
retype_pass.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$");
    if(!regex.test(val)){
        retype_pass.classList.add("wrong");
    }else{
        password=true;
        retype_pass.classList.remove("wrong")
    }
})

var firstname = document.getElementById('fullname_personal');
var lastname = document.getElementById('lastname_personal');
var company = document.getElementById('company_personal');
var email = document.getElementById('emailaddress_personal');
var address = document.getElementById('Address_personal');
var city = document.getElementById('city_personal');
var pincode = document.getElementById('zip_personal');
var number=document.getElementById('phonenumber_personal');
var submit = document.getElementById('save_changes');

var lnb=false;
var emailb=false;
var pincodeb=false;
var citylb=false;
var numberb=false;
var addresslb=false;
var companylb=false;

submit.addEventListener("submit",function(){
    if(fnb&&lnb&&citylb&&emailb&&pincodeb&&numberb){
        return true;
    } else{
        return false;
    }
 })

 firstname.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^[A-Z][a-z]*$");
    if(!regex.test(val)){
        lastname.classList.add("wrong");
        alert("First Name must be in the form of \".firstname\"")
    }else{
        firstname.classList.remove("wrong");
        fnb=true;
    }
})
lastname.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^[A-Z]+([ '-][a-zA-Z]+)*$");
    if(!regex.test(val)){
        lastname.classList.add("wrong");
        alert("Last Name must be in the form of \".lastname\"")
    }else{
        lastname.classList.remove("wrong");
        lnb=true;
    }
})
city.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^[a-zA-Z',.\s-]{1,25}$");
    if(!regex.test(val)){
        city.classList.add("wrong");
        alert("City Name is not valid.")
    }else{
        city.classList.remove("wrong");
        citylb=true;
    }
})
address.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp(" ^[#.0-9a-zA-Z\s,-]+$");
    if(!regex.test(val)){
        address.classList.add("wrong");
        alert("Address is not valid.")
    }else{
        address.classList.remove("wrong");
        addresslb=true;
    }
})
company.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp(" ^[#.0-9a-zA-Z\s,-]+$");
    if(!regex.test(val)){
        company.classList.add("wrong");
        alert("Address is not valid.")
    }else{
        address.classList.remove("wrong");
        companylb=true;
    }
})
email.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$");
    if(!regex.test(val)){
        email.classList.add("wrong");
        alert("E-mail is not valid")
    }else{
        emailb=true;
        email.classList.remove("wrong")
    }
})
number.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$");
    if(!regex.test(val)){
        number.classList.add("wrong");
        alert("Phone no not valid")
    }else{
        numberb=true;      
        number.classList.remove("wrong")
    }
})
pincode.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^[1-9][0-9]{5}$");
    if(!regex.test(val)){
        pincode.classList.add("wrong");
        alert("Entered Wrong Value")
    }else{
        pincodeb=true;
        pincode.classList.remove("wrong")
    }
})




var firstname = document.getElementById('firstname');
var lastname = document.getElementById('lastname');
var email = document.getElementById('email');
var number = document.getElementById('number');
var address = document.getElementById('address');
var dob = document.getElementById('dob');
var gender = document.getElementById('gender');
var address = document.getElementById('address');
var inc = document.getElementById('inc');
var state = document.getElementById('state');
var city = document.getElementById('city');
var pincode = document.getElementById('pincode');
var age = document.getElementById('age');
var submit = document.getElementById('submit');

var ln=false;
var dobb=false;
var emailb=false;
var pincodeb=false;
var numberb=false;


console.log(firstname);
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
var test = false;

today = yyyy + '-' + mm + '-' + dd;
dob.max = today;

submit.addEventListener("submit",function(){
   if(ln&&dobb&&emailb&&pincodeb&&numberb){
       return true;
   } else{
       return false;
   }
})
lastname.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^([.][A-Z])*$");
    if(!regex.test(val)){
        lastname.classList.add("wrong");
        alert("Last Name must be in the form of \".lastname\"")
    }else{
        lastname.classList.remove("wrong");
        lnb=true;
    }
})
email.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$");
    if(!regex.test(val)){
        email.classList.add("wrong");
        alert("E-mail id must be an gmail id")
    }else{
        emailb=true;
        email.classList.remove("wrong")
    }
})
number.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("[1-9]{1}[0-9]{9}");
    if(!regex.test(val)){
        number.classList.add("wrong");
        alert("Entered Wrong Value")
    }else{
        numberb=true;      
        number.classList.remove("wrong")
    }
})
pincode.addEventListener("change",function(e){
    var val = e.target.value;
    var regex = new RegExp("^[1-9][0-9]{5}$");
    if(!regex.test(val)){
        pincode.classList.add("wrong");
        alert("Entered Wrong Value")
    }else{
        pincodeb=true;
        pincode.classList.remove("wrong")
    }
})
dob.addEventListener("change",function(e){
    var date =(e.target.value)
    age.value=_calculateAge(date)
})
function _calculateAge(DOB) { // birthday is a date
    var today = new Date();
    var birthDate = new Date(DOB);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age = age - 1;
    }
    return age;
}

                                    var firstname = document.getElementById('fullname_personal');
                                    var lastname = document.getElementById('lastname_personal');
                                    var company = document.getElementById('company_personal');
                                    var email = document.getElementById('emailaddress_personal');
                                    var address = document.getElementById('Address_personal');
                                    var city = document.getElementById('city_personal');
                                    var pincode = document.getElementById('zip_personal');
                                    var number=document.getElementById('phonenumber_personal');
                                    var submit = document.getElementById('save_changes');

                                    var lnb=false;
                                    var emailb=false;
                                    var pincodeb=false;
                                    var citylb=false;
                                    var numberb=false;
                                    var addresslb=false;
                                    var companylb=false;

                                    submit.addEventListener("submit",function(){
                                        if(fnb&&lnb&&citylb&&emailb&&pincodeb&&numberb){
                                            return true;
                                        } else{
                                            return false;
                                        }
                                    })

                                    firstname.addEventListener("change",function(e){
                                        var val = e.target.value;
                                        var regex = new RegExp("^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$");
                                        if(!regex.test(val)){
                                            lastname.classList.add("wrong");
                                            alert("Please enter valid name")
                                        }else{
                                            firstname.classList.remove("wrong");
                                            fnb=true;
                                        }
                                    })
                                    lastname.addEventListener("change",function(e){
                                        var val = e.target.value;
                                        var regex = new RegExp("^[A-Z]+([ '-][a-zA-Z]+)*$");
                                        if(!regex.test(val)){
                                            lastname.classList.add("wrong");
                                            alert("Please enter valid name")
                                        }else{
                                            lastname.classList.remove("wrong");
                                            lnb=true;
                                        }
                                    })
                                    city.addEventListener("change",function(e){
                                        var val = e.target.value;
                                        var regex = new RegExp("^[a-zA-Z',.\s-]{1,25}$");
                                        if(!regex.test(val)){
                                            city.classList.add("wrong");
                                            alert("City Name is not valid.")
                                        }else{
                                            city.classList.remove("wrong");
                                            citylb=true;
                                        }
                                    })
                                    address.addEventListener("change",function(e){
                                        var val = e.target.value;
                                        var regex = new RegExp(" ^[#.0-9a-zA-Z\s,-]+$");
                                        if(!regex.test(val)){
                                            address.classList.add("wrong");
                                            alert("Address is not valid.")
                                        }else{
                                            address.classList.remove("wrong");
                                            addresslb=true;
                                        }
                                    })
                                    company.addEventListener("change",function(e){
                                        var val = e.target.value;
                                        var regex = new RegExp(" ^[#.0-9a-zA-Z\s,-]+$");
                                        if(!regex.test(val)){
                                            company.classList.add("wrong");
                                            alert("Address is not valid.")
                                        }else{
                                            address.classList.remove("wrong");
                                            companylb=true;
                                        }
                                    })
                                    email.addEventListener("change",function(e){
                                        var val = e.target.value;
                                        var regex = new RegExp("^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$");
                                        if(!regex.test(val)){
                                            email.classList.add("wrong");
                                            alert("E-mail is not valid")
                                        }else{
                                            emailb=true;
                                            email.classList.remove("wrong")
                                        }
                                    })
                                    number.addEventListener("change",function(e){
                                        var val = e.target.value;
                                        var regex = new RegExp("^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$");
                                        if(!regex.test(val)){
                                            number.classList.add("wrong");
                                            alert("Phone no not valid")
                                        }else{
                                            numberb=true;      
                                            number.classList.remove("wrong")
                                        }
                                    })
                                    pincode.addEventListener("change",function(e){
                                        var val = e.target.value;
                                        var regex = new RegExp("^[1-9][0-9]{5}$");
                                        if(!regex.test(val)){
                                            pincode.classList.add("wrong");
                                            alert("Entered Wrong Value")
                                        }else{
                                            pincodeb=true;
                                            pincode.classList.remove("wrong")
                                        }
                                    })



                             