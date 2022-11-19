
<?php

$con = mysqli_connect('localhost', 'root', '', 'product_db');
if(isset($_POST['search']))
{
    $search = ($_POST['search']);
    $sql = "SELECT * FROM products WHERE name LIKE '$search'";
    $status = mysqli_query($con, $sql);

 if(mysqli_num_rows($status)>0){
    $data=mysqli_fetch_assoc($status);
    $product_name=$data['Name'];
    $product_profit=$data['Selling_price']-$data['Buying_price'];
 }
}

    ?>
    <form method="post" action="search.php">
        <fieldset>
            <legend>SEARCH</legend> 
            <input type="text" placeholder="Search data" name="search" value="">
            <button name="submit">Search by name</button>

            <table cellpadding="5px" border="1">
                <thead>
                    
                    <th>Name</th>
                    <th>Profit</th>
                </thead>
                <tr>
                    <td><?php echo $product_name ?></td>
                    <td><?php echo $product_profit?> </td>
                    <td><a href="edit.php?Id=<?php echo $row['Id']; ?>">Edit</a>  <a href="delete.php?Id=<?php echo $row['Id']; ?>">Delete</a></td>
                    
                </tr>      
            </table>  
        </fieldset>
    </form>






