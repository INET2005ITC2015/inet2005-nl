<?php
require('isLoggedIn.php');
checkLogin();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>View Records</title>
    <div class="topCorner"><input type='button' value='Click me to Logout' onClick="location.href='logout.php'" /></div>
</head>
<body>

<?php
    $query='';
    if(!empty($_POST['query'])){
        $query = $_POST['query'];
    }

    echo "<center><h1>Display Employee Records</h1></center>";
    echo "<form action='index.php' method='POST'>";
    echo "<fieldset>
            <legend><h2>Enter Text to Search:</h2></legend>";
    echo "<input type='text' name='query' value='$query'/>";
    echo "<br/>";
    echo "<input type='submit' id='searchName' value='Search Name' onclick='return hideLink(this);'/>";
    echo "</fieldset></form>";

    echo "<table>";
    echo "<tr>  <th>Employee ID</a></th>
                <th><a href='index.php?order_by=fName'>First Name</a></th>
                <th><a href='index.php?order_by=lName'>Last Name</a></th>
                <th><a href='index.php?order_by=bDate'>Birth Date</a></th>
                <th>Hire Date</th>
                <th>Gender</th>
                <th>Edit</th>
                <th>Delete</th>
    </tr>";    // number of results to show in each page

    //connect to the database
    require_once('database_connection.php');
    $db = getDBConnection();

    // find out how many rows are in the table
    $sql = "SELECT COUNT(*) FROM employees";
    $result = mysqli_query($db, $sql);
    $r = mysqli_fetch_row($result);
    $numrows = $r[0];

    // number of rows to show per page
    $rowsperpage = 25;
    // find out total pages
    $totalpages = ceil($numrows / $rowsperpage);

    // get the current page or set a default
    if (!empty($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
        // cast var as int
        $currentpage = (int) $_GET['currentpage'];
    } else {
        // default page num
        $currentpage = 1;
    } // end if

    // if current page is greater than total pages...
    if ($currentpage > $totalpages) {
        // set current page to last page
        $currentpage = $totalpages;
    } // end if
    // if current page is less than first page...
    if ($currentpage < 1) {
        // set current page to first page
        $currentpage = 1;
    } // end if

    // the offset of the list, based on current page
    $offset = ($currentpage - 1) * $rowsperpage;
    $sql_stmt = "SELECT * FROM employees";

    if(!empty($query)){
        $sql_stmt =  $sql_stmt . " WHERE first_name LIKE '%$query%' OR last_name LIKE '%$query%'";
    }

    if(!empty($_GET['order_by']))
    {
        switch($_GET['order_by'])
        {
            case 'lName':
                $sql_stmt .= " ORDER BY last_name ASC";
                break;
            case 'fName':
                $sql_stmt .= " ORDER BY first_name ASC";
                break;
            case 'bDate':
                $sql_stmt .= " ORDER BY birth_date ASC";
                break;
            default:
                $sql_stmt .= " ORDER BY emp_no ASC";
                 break;
        }
    }
    $sql_stmt =  $sql_stmt . " LIMIT $offset, $rowsperpage";

    $result = mysqli_query($db, $sql_stmt);

    // display data in table
    if(!$result){
        die('Could not retrieve records from the Employees Database: ' . mysqli_error($db));
    }
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['emp_no'] . "</td> ";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['birth_date'] . "</td>";
        echo "<td>" . $row['hire_date'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo '<td><a href="update.php?emp_no=' . $row['emp_no'] . '"><img src="edit.png" alt="Edit"></a></td>';
        echo '<td><a href="delete.php?emp_no=' . $row['emp_no'] . '" onClick="return confirmDelete(this);">
        <img src="delete1.jpg" alt="Delete"></a></td>';
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";

    /******  build the pagination links ******/
    // range of num links to show
    $range = 50;

    // if not on page 1, don't show back links
    if ($currentpage > 1) {
        // show << link to go back to page 1
        echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a>";
        // get previous page num
        $prevpage = $currentpage - 1;
        // show < link to go back to 1 page
        echo "<a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
    } // end if

    // loop to show links to range of pages around current page
    for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
        // if it's a valid page number...
        if (($x > 0) && ($x <= $totalpages)) {
            // if we're on current page...
            if ($x == $currentpage) {
                // 'highlight' it but don't make a link
                echo " [<b>$x</b>] ";
                // if not current page...
            } else {
                // make it a link
                echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
            } // end else
        } // end if
    } // end for

    // if not on last page, show forward and last page links
    if ($currentpage != $totalpages) {
        // get next page
        $nextpage = $currentpage + 1;
        // echo forward link for next page
        echo "<a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>></a>";
        // echo forward link for lastpage
        echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a>";
    } // end if
    /****** end build pagination links ******/?>
    <p><div class="add"><a href="add.php">Add a new record</a></div></p>


<script>
    function confirmDelete(link) {
        if (confirm("Are you sure, you want to delete this record?")) {
            doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
        }
        return false;
    }

    function hildeLink(){
        document.getElementById('next').style.display = 'none';
        return true;
    }

</script>


</body>
<footer div class="footer">Copyright Reserved to Nayeema Lail.&copy;2015</div></footer>
</html>