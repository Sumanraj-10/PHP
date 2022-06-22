<?php
	echo"<h2>Hello world </h2>";
	$number;
	$num1 = 7;
	$num2 = 8;
	echo"$num1<br>";
    echo"Hi", " ", "I am fine!<br>";
	echo $num1."**".$num2;
	echo"<br>";
	echo $num1+$num2;
	echo"<br>";
	$num1 += $num2;
	echo "$num1";
	print"<br>print<br>";
	define("my_const", "It is a constant!");
	print(my_const);
	echo"<br>";
	echo gettype(my_const);
	echo"<br>";
	settype($num1,"string");
	echo gettype($num1);
	$num1 = (integer)$num1;
	echo"<br>";
	echo "$num1";
	echo"<br>";
	$marks = 90;
	$result = "";
	
	($marks > 50) ? $result = "Pass" : $result = "Fail";
	echo "$result";
	echo"<br>";
	
	function sum($num = 11) {
		return $num + 4;	
	}
	echo sum();
	echo"<br>";
	
	$title = "Mr";
	
	function printName() {
		$fname = "Marko";
		$lname = "Royce";
		global $title;
		print("$title $fname $lname");
	}
	
	printName();
	echo"<br>";
	
	$x = 8;
	$y = 9;
	
	function add() {
		$x = 5;
		static $sum = 0;
		$sum += $x;
		return $sum;
	}
	
	echo add(),"<br>";
	echo add(),"<br>";
	echo add(),"<br>";
	
	$even =0;
	$odd =0;
	for($i = 0; $i < 31; $i++){
		global $even ;
		global $odd ;
		$even += 2*$i;
		$odd += (2*$i-1);
	}
	
	print ("$even $odd");
	echo"<br>";
	
	function loop(){
		for($i = 0; $i <= 50; $i++){
			if ($i%3==0 && $i%5==0){
				echo "FizzBuzz<br>";
			}else if ($i%3==0){
				echo "Fizz<br>";
			}else if($i%5==0){
				echo"Buss<br>";
			}
		}
	}
	loop();
	
	
	
?>