<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>upload result</title>
</head>
<body>
<form method="post" action="product_check.php">
            <fieldset>
                <legend>upload result</legend>
                <?php 

    $con = mysqli_connect('localhost', 'root', '', 'upload result');

    // if($con){
    //     echo "success";
    // }else{
    //     echo "DB connection error!";
    // }

    $sql ="select * from product";
    $result = mysqli_query($con, $sql);
    echo mysqli_num_rows($result);

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }

?>
                <table cellpadding ="7px">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value=""></td>
                    </tr>
                    <tr>
                        <td>Id</td>
                        <td><input type="text" name="Id" value=""></td>
                    </tr>
                    <tr>
                        <td>mark</td>
                        <td><input type="text" name="mark" value=""></td>
                    </tr>
                   
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="submit"></td>
                        <td><input type="submit" name="submit" value="edit"></td>
                    </tr>
                    <from>
                    <label for="Subject">Subject:</label>
                            <select id="Subject" name="subject">
                               <option value="COMPUTER ORGANIZATION AND ARCHITECTURE">COMPUTER ORGANIZATION AND ARCHITECTURE</option>
                               <option value="COMPUTER NETWORKS">COMPUTER NETWORKS</option>
                               <option value="SOFTWARE REQUIREMENT ENGINEERING">SOFTWARE REQUIREMENT ENGINEERING</option>
                               <option value="WEB TECHNOLOGIES">WEB TECHNOLOGIES</option>
                            </select>
                           
                            <label for="section">Section:</label>
                            <select id="section" name="section">
                               <option value="A">A</option>
                               <option value="B">B</option>
                               <option value="C">C</option>
                               <option value="D">D</option>
                            </select>
</from>
                </table>
            </fieldset>
        </form>
    
</body>
</html>
