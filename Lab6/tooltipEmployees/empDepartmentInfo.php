<h5>Employee Department Information:</h5>
<ul>
    <?php
        // Insert php code here
        require_once('dbConn.php');
        $db = getDBConnection();

        $currentFilm = $_GET['empID'];

        /* remove the "film" from the front of the id */
        $currentFilmId = str_replace ("emp", "", $currentFilm);

    // inner join    WHERE e.emp_no = 200000 group by d.dept_no

        $sqlStatement = " SELECT CONCAT(e.first_name,' ', e.last_name) as full_name, t.title, d.dept_name FROM employees as e ";
        $sqlStatement .= " INNER JOIN titles as t ON e.emp_no = t.emp_no ";
        $sqlStatement .= " inner join dept_emp as de ON t.emp_no = de.emp_no ";
        $sqlStatement .= " inner join departments as d ON de.dept_no = d.dept_no ";
        $sqlStatement .= " WHERE t.title NOT LIKE 'Engineer' AND e.emp_no = $currentFilmId";

        $result = mysqli_query($db,$sqlStatement);
        if(!$result)
        {
            die('Could not retrieve records from the Employees Database: ' . mysqli_error($db));
        }


        while ($row = mysqli_fetch_assoc($result)):
    ?>

            <li><?php echo "Title - " . $row['title'];?></li>
            <li><?php echo " Department Name - " . $row['dept_name'];?></li>
    <?php
        endwhile;

        mysqli_close($db);
    ?>
</ul>