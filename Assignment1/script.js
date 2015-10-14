/**
 * Created by inet2005 on 9/30/15.
 */
function checkForm()
{

    if(document.forms["myForm"].firstName.value.length == 0){
      document.forms["myForm"].firstName.style.borderColor = "red";
      return false;
    }

    if(document.forms["myForm"].lastName.value.length == 0){
      document.forms["myForm"].lastName.style.borderColor = "red";
      return false;
    }

    if(document.forms["myForm"].bDate.value.length==0)
    {
       document.forms["myForm"].lastName.style.borderColor = "red";
       return false;
    }
    if(document.forms["myForm"].hDate.value.length==0)
    {
        alert("You Need to enter a date");
        document.forms["myForm"].hDate.style.borderColor = "red";
        return false;
    }

    if(document.getElementById("genderMale").checked==false && document.getElementById("genderFemale").checked==false)
    {
        document.getElementById('radioButtonError').style.color = "red";
        document.getElementById('radioButtonError').innerHTML = "Must accept any of the Genders.";
        return false;
    }
}


function anyText(field,messageText,target)
{
    var targetSpan = document.getElementById(target);
    if(targetSpan != null)
    {
        if(field.value.length ==0)
        {
            targetSpan.innerHTML = messageText;
            return false;
        }
        else {
            targetSpan.innerHTML = "";
            return true;
        }
    }

}
