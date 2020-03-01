<html>
    <head>
        <link rel="stylesheet" type="text/css" href="nav.css">
        <title>Groenteboer Full Color</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="layout">
            <div class="bar">
                <center> <img src="bar/logo.png" class="logo">   </center>
             </div>
             <div class="navigatie">
             <center>
                <a href="home.html" class="navButton"><img src="bar/rodehome.png" class="appelBar"></a>
                <a href="assortiment.html" class="navButton"><img src="bar/rodeassortiment.png" class="appelBar"></a>
                <a href="contact.php" class="navButton"><img src="bar/rodecontact.png" class="appelBar"></a>
                <a href="overons.html" class="navButton"><img src="bar/rodeons.png" class="appelBar"></a>
             </center>
             </div>
             <?php
                    include_once 'connection.php';
                    $result = mysqli_query($conn,"SELECT * FROM `table 1` WHERE GivenName LIKE 'jan'");

                    if (mysqli_num_rows($result) > 0) {

                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <center>
                    <tr>
                    <td><?php echo $row["GivenName"]; ?></td>
                    <td><?php echo $row["Midname"]; ?></td>
                    <td><?php echo $row["Surname"]; ?></td><br>
                    <td><?php echo $row["StreetAddress"]; ?></td><br>
                    <td><?php echo $row["City"]; ?></td><br>
                    <td><?php echo $row["ZipCode"]; ?></td><br>
                    <td><?php echo $row["EmailAddress"]; ?></td><br>
                    <td><?php echo $row["TelephoneNumber"]; ?></td>
                    </tr>
                    </center>
                    <?php
                    $i++;
                    }
                    ?>
                </table>
                <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>
        </div>
    </body>
</html>