<?php 

    require_once "../../models/sectionModel.php";

    $con = getConnection();
    $sql = "select * from all_course_admin";
    $status = mysqli_query($con, $sql);
	
	$json =$_POST['data'];
    $jsearch= json_decode($json);
	
	$Fsearch= $jsearch->search;
	$data = Search($Fsearch);
	$courseSearch = $data['course'];
    $id = $data['id'];
	$course = $data['course'];
	$time = $data['time'];

    if($Fsearch == $courseSearch)
	{
?>
<html>
<body>
                <table cellpadding="7px" border="2px" cellspacing="0px">
                    <tr>
                        <th>NUMBER</th>
                        <th>COURSE</th>
                        <th>TIME</th>
                        <th></th>

                    </tr>
                    <tr>
                        <td><?php echo $id ?></td>

                        <td><?php echo $course ?></td>

                        <td><?php echo $time ?></td>

                    </tr>

</body>

</html>

<?php

			
	}
  
?>