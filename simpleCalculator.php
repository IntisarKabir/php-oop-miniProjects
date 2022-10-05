
<!DOCTYPE html>  
<head>  
<title> Using class  
</title>  
</head>  
<?php  
class MyCalculator {  
private $Number_no_1, $Number_no_2;  
public function __construct( $Value1, $Value2 ) {  
$this->Number_no_1 = $Value1;  
$this->Number_no_2 = $Value2;  
}  
public function Addition() {  
return $this->Number_no_1 + $this->Number_no_2;  
}  
public function Subtraction() {  
return $this->Number_no_1 - $this->Number_no_2;  
}  
public function Multiplication() {  
return $this->Number_no_1 * $this->Number_no_2;  
}  
public function Division() {  
return $this->Number_no_1 / $this->Number_no_2;  
}  
}  
$mycalc = new MyCalculator(6, 3);   
echo $mycalc-> Addition()."\n"; // Displays 9   
echo $mycalc-> Multiplication()."\n"; // Displays 18  
echo $mycalc-> Subtraction()."\n"; // Displays 3  
echo $mycalc-> Division()."\n"; // Displays 2  
?>  
  
<body>  
<div id="page-wrap">  
<h1>Calculator by Nirnay</h1>  
<form action="" method="post" id="quiz-form">  
<p>  
<input type="number" name="Number_no_1" id="Number_no_1" required="required" value="<?php echo $Number_no_1; ?>" /> <b>First Number</b>  
</p>  
<p>  
<input type="number" name="Number_no_2" id="Number_no_2" required="required" value="<?php echo $Number_no_2; ?>" /> <b>Second Number</b>  
</p>  
<p>  
<input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>"> <b>CalculatorResult</b>  
</p>  
<input type="submit" name="operator_specified" value="Sum" />  
<input type="submit" name="operator_specified" value="Subtraction" />  
<input type="submit" name="operator_specified" value="Multiplication" />  
<input type="submit" name="operator_specified" value="Division" />  
</form>  
</div>  
</body>  
</html>  
