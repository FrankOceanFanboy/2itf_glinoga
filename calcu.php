<!DOCTYPE html>
<html>

<head>
    <title> an average tax calculator. </title>
    <style type="text/css">
        h1 {
            text-align: center;
            font-size: 35px;
        }

        body {
            font-family: Comic Sans MS;
            color: #F6EEE0;
            background-color: #154c79;
            font-size: 23px;
            text-align: center;
        }

        
    </style>
</head>

<body>

    <?php

    if (isset($_POST['submit'])) {
        $income = $_POST['salary'];
        $type = $_POST['type'];
        $AnnualSalary = $income * 12;
        
        
            if ($_POST['type'] == "bi-Monthly") {
                $income = $income * 2;
                $income = $income;
                if ($income <= 250000) {
                    $finalsalary = 0;
                    $AnnualTax = $finalsalary * 12;
                }
                else if ($income <= 400000 && $income > 250000) {
                    $finalsalary = $income * 0.2;
                    $AnnualTax = $finalsalary * 12;
                }
                else if ($income <= 800000 && $income > 400000) {
                    $finalsalary = $income * 0.25 - 30000;
                    $AnnualTax = $finalsalary * 12;
                }
                else if ($income <= 2000000 && $income > 800000) {
                    $finalsalary = $income * 0.3 - 130000;
                    $AnnualTax = $finalsalary * 12;
                }
                else if ($income <= 8000000 && $income > 2000000) {
                    $finalsalary = $income * 0.32 - 490000;
                    $AnnualTax = $finalsalary * 12;
                }
                else if ($income > 8000000) {
                    $finalsalary = $income * 0.35 - 2410000;
                    $AnnualTax = $finalsalary * 12;
                }  

                echo "Monthly Salary: " . $income . "<br>"; 
                echo "Monthly Tax: ". $finalsalary . "<br>";
                echo "Annual Salary: " . $AnnualSalary . "<br>";
                echo "Annual Tax: " . $AnnualTax . "<BR>";


            } else if ($_POST['type'] == "monthly") {
                $income = $income;
                if ($income <= 250000) {
                    $finalsalary = 0;
                    $AnnualTax = $finalsalary * 12;
                }
                else if ($income <= 400000 && $income > 250000) {
                    $finalsalary = $income * 0.2;
                    $AnnualTax = $finalsalary * 12;
                }
                else if ($income <= 800000 && $income > 400000) {
                    $finalsalary = $income * 0.25 - 30000;
                    $AnnualTax = $finalsalary * 12;
                }
                else if ($income <= 2000000 && $income > 800000) {
                    $finalsalary = $income * 0.3 - 130000;
                    $AnnualTax = $finalsalary * 12;
                }
                else if ($income <= 8000000 && $income > 2000000) {
                    $finalsalary = $income * 0.32 - 490000;
                    $AnnualTax = $finalsalary * 12;
                }
                else if ($income > 8000000) {
                    $finalsalary = $income * 0.35 - 2410000;
                    $AnnualTax = $finalsalary * 12;
                }  

                echo "Monthly Salary: " . $income . "<br>"; 
                echo "Monthly Tax: ". $finalsalary . "<br>";
                echo "Annual Salary: " . $AnnualSalary . "<br>";
                echo "Annual Tax: " . $AnnualTax . "<BR>";
            }
        
    }     
    ?>

    <center>
        <h1>an average tax calculator</h1>
        <form method="post">

            <center> <img src="https://i2.wp.com/governmentph.com/wp-content/uploads/2018/12/2020-Revised-Withholding-Tax-Table.jpg?fit=1200%2C628&ssl=1" ; width="450" height="250" ; border="5" id="img"> </center>

            <p>Salary:
                <input type="text" id="salary" name="salary" size="30">
            </p>

            <p>Type:
                <input type="Radio" id="bi-monthly" name="type" value="bi-Monthly">
                <label for="bi-monthly">Bi-Monthly</label>
                <input type="Radio" id="monthly" name="type" value="monthly">
                <label for="monthly">Monthly</label>
            </p>

            <input type="submit" value="submit" name="submit">
            


        </form>
        </table>
</body>

</html>