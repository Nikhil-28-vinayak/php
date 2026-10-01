<html>
    <body>
        <h2>Feedback form</h2>

         <form method="post">
        Name:
        <input type = "text" name = "name"><br><br>

        Feedback
        <textarea name = "feedback"></textarea><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["name"];
        $feedback = $_POST["feedback"];

        echo"<h3> Your Feedback</h3>";
        echo"Name: ".$name."br";
        echo"Feedback: ".$feedback;
     }
     
     ?>
    </body>
   
</html>