<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Edit Record</title>
</head>
<body>
<?php
function editForm($emp_no, $birth_date, $first_name, $last_name, $hire_date, $gender, $error){
    // if there are any errors, display them
    if ($error != ''){
        echo '<div style="padding:4px; border:1px; color:red;">'.$error.'</div>';
    }
    ?>
    <form action="" method="post">
	<FIELDSET>
		<LEGEND><b>Employee Information</b></LEGEND>
        <input type="hidden" name="emp_no" value="<?php echo $emp_no; ?>"/>

            <p><strong>Employee ID:</strong> <?php echo $emp_no; ?></p>
            <p><strong>Birth Date: *</strong> <input type="date" name="birth_date" value="<?php echo $birth_date; ?>"/><br/></p>
            <p><strong>First Name: *</strong> <input type="text" name="first_name" value="<?php echo $first_name; ?>"/><br/></p>
            <p><strong>Last Name: *</strong> <input type="text" name="last_name" value="<?php echo $last_name; ?>"/><br/></p>
            <p><strong>Hire Date: *</strong> <input type="date" name="hire_date" value="<?php echo $hire_date; ?>"/><br/></p>
            <p><strong>Gender: *</strong>
                <input type="radio" name="gender" value="F"<?php if (isset($gender) && $gender=="F") echo "checked"; ?>/>F
                <input type="radio" name="gender" value="M" <?php if (isset($gender) && $gender=="M") echo "checked"; ?>/>M</p>
            <p>* Required</p>
            <p><input type="submit" name="submit" value="Submit"></p>
	</fieldset>
    </form>
	<footer div class="footer">Copyright Reserved to Nayeema Lail.&copy;2015</div></footer>
    </body>
    </html>
<?php
}

//connect to the database
include('database_connection.php');

// check if the form has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit'])){
    // confirm that the 'emp_no' value is a valid integer
    if (is_numeric($_POST['emp_no'])){
        // get form data
        $emp_no = $_POST['emp_no'];
        $first_name = mysql_real_escape_string(htmlspecialchars($_POST['first_name']));
        $last_name = mysql_real_escape_string(htmlspecialchars($_POST['last_name']));
        $birth_date =$_POST['birth_date'];
        $hire_date = $_POST['hire_date'];
        $gender = $_POST['gender'];

        // check all the fields ar filled in or not
        if ($first_name == '' || $last_name == '' || $birth_date=='' || $hire_date==''){

            $error = 'ERROR: Please fill in all required fields!';
            //error, display form
            editForm($emp_no, $birth_date, $first_name, $last_name, $hire_date, $gender, $error);
        }
        else{
            // save the data to the database
           $result = mysql_query("UPDATE employees SET birth_date='$birth_date', first_name='$first_name', last_name='$last_name', hire_date='$hire_date', gender='$gender'
	 WHERE emp_no='$emp_no'") or die(mysql_error());

            // once saved, back to the main page
            header("Location: index.php");
        }
    }
    else{
        // if the 'emp_no' isn't valid emp_no, display an error
        echo 'Error!';
    }
}
else // if the form hasn't been submitted, get the data from the database and display the form
{
    // get the valid 'emp_no' value and checking that it is numeric/larger than 0
    if (isset($_GET['emp_no']) && is_numeric($_GET['emp_no']) && $_GET['emp_no'] > 0){
        // query db
        $emp_no = $_GET['emp_no'];
        $result = mysql_query("SELECT * FROM employees WHERE emp_no='$emp_no'")  or die(mysql_error());
        $row = mysql_fetch_array($result);

        // check that the 'emp_no' matches up with a row in the database
        if($row){
            $emp_no = $row['emp_no'];
            // get data from db
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $birth_date = $row['birth_date'];
            $hire_date = $row['hire_date'];

            // show form
            editForm($emp_no, $birth_date, $first_name, $last_name, $hire_date, $row['gender'], '');
        }
        else
            // if no match, display result
        {
            echo "No results!";
        }
    }
    else
        // if the 'emp_no' in the URL isn't valid, or if there is no 'emp_no' value, display an error
    {
        echo 'Error!';
    }
}
?>