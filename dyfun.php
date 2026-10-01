<html>
    <body>
        <h2>Calculator</h2>

        <form method="post">
            Number1:
            <input type="number" name="no1"><br><br>

            Number2:
            <input type="number" name="no2"><br><br>
            
            Operation:
            <input type="text" name="operation"><br><br>

            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = $_POST["no1"];
            $number2 = $_POST["no2"];
            $operation = strtolower($_POST["operation"]); 

            function add($no1, $no2) {
                echo "Sum is: " . ($no1 + $no2);
            }
            function subtract($no1, $no2) {
                echo "Subtract is: " . ($no1 - $no2);
            }
            function multiply($no1, $no2) {
                echo "Multiply is: " . ($no1 * $no2);
            }
            function divide($no1, $no2) {
             
               echo "Divide is: " . ($no1 / $no2);
               
            }
            switch ($operation) {
                case "add":
                    add($number1, $number2);
                    break;
                case "subtract":
                    subtract($number1, $number2);
                    break;
                case "multiply":
                    multiply($number1, $number2);
                    break;
                case "divide":
                    divide($number1, $number2);
                    break;
                default:
                    echo "invalid operation";
            }
        }
        ?>
    </body>
</html>
