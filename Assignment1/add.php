<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Insert Into the Employees</title>
    <script src="script.js"></script>
</head>
<body>
<form id="myForm" name="myForm" method="post" action="insert.php" onsubmit="return checkForm()">
    <p><label>First Name: <input type="text" name="firstName" id="firstName" size="20" onblur="anyText(this,'You must enter a first name please','firstNameWarning')"/> </label> &nbsp;&nbsp;<span id="firstNameWarning"></span><br /></p>
    <p><label>Last Name : <input type="text" name="lastName" id="lastName" size="20" onblur="anyText(this,'You must enter a last name please','lastNameWarning')"/></label>&nbsp;&nbsp;<span id="lastNameWarning"></span><br /></p>
    <p><label>Birth Date: <input type="date" name="bDate" id="bDate" onblur="anyText(this,'You must enter your birth date please','birthDateWarning')"/></label>&nbsp;&nbsp;<span id="birthDateWarning"></span><br /></p>
    <p><label>Hire Date: <input type="date" name="hDate" id="hDate" onblur="anyText(this,'You must enter your hire date please','hireDateWarning')"/></label>&nbsp;&nbsp;<span id="hireDateWarning"></span><br /></p>
    <p><label>Gender   : <input type="radio" name="gender" id="genderFemale"value="F">Female<input type="radio" name="gender"  id="genderMale" value="M">Male</label>&nbsp;&nbsp;<span id="radioButtonError"></span></p>
    <p> <input type="submit" name="submit" id="submit" value="Submit" />  </p>
</form>
</body>
</html>



