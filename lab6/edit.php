<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Add product</title>
</head>
<body>
<form method="post" action="update.php">
            <fieldset>
                <legend>EDIT PRODUCT</legend>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'product_db');
                 $product_id =$_GET['Id'];
                $sql = "SELECT Id,Name,Buying_price,Selling_price FROM products WHERE Id={$product_id}";
                $status = mysqli_query($con, $sql);

                 if(mysqli_num_rows($status)>0){
                    while($row= mysqli_fetch_assoc($status))
                    { 
                ?>
                <table cellpadding ="7px">
                    <tr>
                        <td>Name</td>
                        <input type="hidden" name="Id" value="<?php echo $row['Id'];?>">
                        <td><input type="text" name="name" value="<?php echo $row['Name'];?>"></td>
                    </tr>
                    <tr>
                        <td>Buying Price</td>
                        <td><input type="text" name="buying_price" value="<?php echo $row['Buying_price'];?>"></td>
                    </tr>
                    <tr>
                        <td>Selling Pirce</td>
                        <td><input type="text" name="selling_price" value="<?php echo $row['Selling_price'];?>"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"> Display</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="UPDATE"></td>
                    </tr>
                    <?php
                    
                }
            }
                ?>
                </table>
            </fieldset>
        </form>
    
</body>
</html>
