<html>
        <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "livres";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        ?>
        <form method="GET">
        <p>id du livre a chercher</p>
        <input id="id" name="id">
        </form>

        if(isset($_GET["id"]){
                $sql = "SELECT * FROM livre where id='". $_GET["id"] + "'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo $row;
                }
                } else {
                echo "0 results";
                }

        }
        $conn->close();
        ?>
</html>
