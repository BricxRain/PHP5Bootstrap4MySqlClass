<?php
include_once("../config/config.php");

class MySqlClass {
    
	function getData($query) {
        global $con;
        $result = mysqli_query($con,$query);
        if ($result-> num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $data[] = $row;
            }
        } else {
            $data = "No Data";
        }
        return $data;
    }
    
    function executeQuery($query) {
        global $con;
        $result = mysqli_query($con, $query);
        if ($result) {
            $data = "True";
        } else {
            $data = "False";
        }
        return $data;
    }

    function fetchQuery($query) {
        global $con;
        $result = mysqli_query($con, $query);
        return $data;
    }

}

?>