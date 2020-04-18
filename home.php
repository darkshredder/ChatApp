<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div id="main">
        <h1>
            <?php echo $_SESSION['name'] ?>Online</h1>
        <div class="output">
            <?php 
            $sql="SELECT * FROM posts ";
            include 'dbh.php';
            $result = $conn->query($sql);
            if($result->num_rows > 0 ){
                while($row = $result->fetch_assoc()){
                    echo "" . $row["name"]." ".":".$row['msg']."--"."<br>";
                    echo "<br>";
                }
            }
               
            ?>



        </div>
        <form action="send.php" method="post">

            <textarea name="msg" placeholder="Type your msg here" class="form-control"></textarea><br>
            <input type="Submit" value="send">

        </form>
        <form action="logout.php">
            <input type="Submit" value="Logout">
        </form>
    </div>




</body>

</html>