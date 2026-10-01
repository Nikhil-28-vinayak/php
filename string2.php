<html>
    <body>
        <h2>
            Replace word
        </h2>
        <form method="post">
           Enter Message:
           <input type = "text" name="message">
           <br><br>
           Word to replace:
           <input type="text" name = "old">
           <br><br>
           New Word:
           <input type="text" name = "new">
           <br><br>
           <button type="submit">Replace</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $message = $_POST["message"];
        $old = $_POST["old"];
        $new = $_POST["new"];

        $result = str_replace($old, $new, $message);
        echo "Result: ".$result;
    }
       ?>
    </body>
   
</html>