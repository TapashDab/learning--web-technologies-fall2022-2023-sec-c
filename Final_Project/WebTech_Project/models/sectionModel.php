<?php
    require_once('db.php');

    function Search($course)
	{
		$conn = getConnection();
		$sql = "select * from all_course_admin where course='{$course}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            while($row = mysqli_fetch_assoc($result)) {
				$data = [
							'id' => $row['id'],
							'course' => $row['course'],
							'time' => $row['time'],
						];
					return $data;
		}
        }else{
            echo "No data found..!!";
        }
	}

?>