/**
 * Created by inet2005 on 9/30/15.
 */
function checkForm()
{
    if(document.forms["myForm"].firstName.value.length == 0){
        document.forms["myForm"].firstName.style.borderColor = "red";
        //document.getElementById('firstNameError').style.color = "red";
        //document.getElementById('firstNameError').innerHTML = "You must enter a first name";
        alert("You must enter a first name");
        return false;
    }

    if(document.forms["myForm"].lastName.value.length == 0)
    {
        alert("You must enter a last name");
        document.forms["myForm"].lastName.style.borderColor = "red";
        //document.getElementById('lastNameError').style.color = "red";
        //document.getElementById('lastNameError').innerHTML = "You must enter a last name";

        return false;
    }
    if(document.forms["myForm"].address1.value.length ==0)
    {
        alert("You must enter an address");
        document.forms["myForm"].address1.style.borderColor = "red";
        //document.getElementById('address1Error').style.color = "red";
        //document.getElementById('address1Error').innerHTML = "You must enter a valid address";

        return false;
    }
    if(document.forms["myForm"].address2.value.length ==0)
    {
        alert("You must enter an address");
        document.forms["myForm"].address2.style.borderColor = "red";
        //document.getElementById('address2Error').style.color = "red";
        //document.getElementById('address2Error').innerHTML = "You must enter a valid address";

        return false;
    }
    if(document.forms["myForm"].emailAddress.value.length==0)
    {
        alert("You must enter an email address");
        document.forms["myForm"].emailAddress.style.borderColor = "red";
        //document.getElementById('emailError').style.color = "red";
        //document.getElementById('emailError').innerHTML = "You must enter a valid email address";

        return false;
    }
    if(checkEmail(document.forms["myForm"].emailAddress.value)==false)
    {
        alert("You must enter an email address");
        document.forms["myForm"].emailAddress.style.borderColor = "red";
        //document.getElementById('emailError').style.color = "red";
        //document.getElementById('emailError').innerHTML = "You must enter a valid email address";

        return false;
    }
    if(document.forms["myForm"].chkBox.checked == false)
    {
        //alert("You must check the checkbox");
        document.getElementById('checkBoxError').style.color = "red";
        document.getElementById('checkBoxError').innerHTML = "Must accept terms and conditions.";
        return false;
    }

    //else
    //{
      //  alert("The form is valid. Would go to server now.");
        //return true;
    //}
}



function checkEmail(email) {
    if(email.length > 0) {
        if (email.indexOf(' ') >= 0)
            alert("email addresses cannot have spaces in them");
        else
        if (email.indexOf('@') == -1)
            alert("a valid email address must have an @ in it");
    }
}


function labelTextUnderlined(labelID){
    var myFormItem = document.getElementById(labelID);

    //if(myFormItem != null)
   // {
        myFormItem.style.textDecoration="underline";
    //}

}

function labelTextNormal(labelID){
    var myFormItem = document.getElementById(labelID);

//    if(myFormItem != null)
  //  {
        myFormItem.style.textDecoration="none";
    //}
}

function italicTextAndChangeBackground(fieldID)
{
    var myFormItem = document.getElementById(fieldID);

    //var x = document.getElementById(labelID);

    if(myFormItem != null)
    {
        myFormItem.style.fontStyle = "italic";
        myFormItem.style.backgroundColor = "yellow";
        myFormItem.style.borderColor = "white";
      //  x.style.textDecoration="underline";
    }
}

function normalTextAndChangeBackground(fieldID)
{
    var myFormItem = document.getElementById(fieldID);
    if(myFormItem != null)
    {
        myFormItem.style.fontStyle = "normal";
        myFormItem.style.backgroundColor = "white";
        myFormItem.style.borderColor = "white";
    }
}

