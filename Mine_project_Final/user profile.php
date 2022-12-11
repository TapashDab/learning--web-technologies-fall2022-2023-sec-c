<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <div>
        <table>

            <tr>
                <th>Id</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>USER TYPE</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($status)) {

            ?>

            <tr>

                <td>
                    <?php echo $row['userId']; ?>
                </td>
            </tr>
            <tr>
                <td>Tapash</td>
            </tr>
            <tr>

                <td>
                    <?php echo $row['id']; ?>
                </td>
            </tr>
            <tr>

                <td> admin</td>
            </tr>
            <tr>
                <td>
                </td>
                <td><a href="admin.php"></a></td>
            </tr>
            <?php


            }


            ?>
        </table>

    </div>


</body>

</html>