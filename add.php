<!DOCTYPE HTML>
<html>  
    <head>

    <?php

    if(isset($_POST['submit'])){
        $first=$_POST['firstnumber'];
        $second=$_POST['secondnumber'];
        $operator=$_POST['operator'];
        $result="";

        switch($operator){
            case "+":
                $result=($first+$second);
                echo "The sum of numbers is:". $result;
                break;
            case "-":
                $result=($first-$second);
                echo "The difference of numbers is:".$result;
                break;
            case "*":
                $result=($first*$second);
                echo  "The sum of number is:".$result;
                break;
            case "/":
                $result=($first/$second);
                echo "The difference of numbers is:".$result;
                break;

        }
    }
    ?>
    </head>
<body>
    <center>
    <h1>calculate two number</h1>

<form action="" method="POST">
    <label>first number:</label>
 <input type="number" name="firstnumber" ><br>
 <label>second number:</label>
 <input type="number" name="secondnumber"><br>
  <select name="operator">
    <option  name="+">+</option>
    <option  name="-">-</option>
    <option  name="*">*</option>
    <option  name="/">/</option>
  </select>
  <button type="submit" name="submit" value="submit">submit</button>
</form>
</center>

</body>
</html>