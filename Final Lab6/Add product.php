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
                        <td><input type="checkbox"> Display</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="SAVE"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    
</body>
</html>
