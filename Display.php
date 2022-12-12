<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Records</title>
    <?php include 'links.php' ?>
    
    <style>
        table, th, td {
        border:1px solid black;
        margin-left: 60px;
        }
    </style>
</head>
<body>
    <h1>Records of the class</h1>
    <div class="center-div">
        <div class="table-responsive">
        <table  style="width:60% ">
        <thead>

            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>BRANCH</th>
                <th>EMAIL</th>
                <th>MARKS</th>
                <th colspan="3">OPERATIONS</th>
                
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connection.php';
            $selectQuery= "select * from record";
            $query=mysqli_query($con,$selectQuery);
            $nums=mysqli_num_rows($query);

            $res = mysqli_fetch_array($query);

            while($res = mysqli_fetch_array($query))
            {
                ?>
                <tr>
                        <td><?php echo $res['ID'] ?></td>
                        <td><?php echo $res['Name'] ?></td>
                        <td><?php echo $res['Branch'] ?></td>
                        <td><?php echo $res['Email'] ?></td>
                        <td><?php echo $res['Marks'] ?></td>
                        <td><i class="fa-solid fa-pen"></i></td>
                        <td><i class="fa-thin fa-pen"></i></td>
                        <td><i class="fa-solid fa-trash-can"></i></td>
                        
                    </tr>
                <?php 
                echo "<br>";
            
            }

?>
        </tbody>
        
        

    </table>
        </div>
    </div>
    
</body>
</html>

