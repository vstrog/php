//Miles/Fuel calc

<?php	
$answer; //global variable
function calc()
	{
   		$miles = $_POST['mileage'];
		$fuel = $_POST['fuel']; 
		global $answer;
		$answer = $miles / $fuel;
		echo $answer;
	}
?>
<form name="form1" method="post" action="fuel_calc.php">
<p>Enter mileage:<input name="mileage" type="text" /><br/><br/>
   Enter fuel used (gallons): <input name="fuel" type="text" />
</p>
<p><input type="submit" name="submit" value="Submit" /><br/></p>
<p><input type="text" name="answer" value="<?php if (isset($_POST["submit"])){calc();}?>" />
</p>
</form>
<?php if (isset($_POST["submit"])){echo "Your fuel consumption is "."$answer"." miles per gallon";} ?>