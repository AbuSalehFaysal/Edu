<?php 

	session_start();
	require_once "config.php";

	function checkGrade($mark){

		if ($mark >= 0 && $mark <= 32) {
			# code...
			$grade = 'F';
		}elseif ($mark >= 33 && $mark <= 39) {
			# code...
			$grade = 'D';
		}elseif ($mark >= 40 && $mark <= 49) {
			# code...
			$grade = 'C';
		}elseif ($mark >= 50 && $mark <= 59) {
			# code...
			$grade = 'B';
		}elseif ($mark >= 60 && $mark <= 69) {
			# code...
			$grade = 'A-';
		}elseif ($mark >= 70 && $mark <= 79) {
			# code...
			$grade = 'A';
		}elseif ($mark >= 80 && $mark <= 100) {
			# code...
			$grade = 'A+';
		}
		else{
			$grade = 'Invalid Mark';
		}

		return $grade;

	}


	function checkGpa ($mark) {
		if ($mark >= 0 && $mark <= 32) {
			# code...
			$grade = '0';
		}elseif ($mark >= 33 && $mark <= 39) {
			# code...
			$grade = '1';
		}elseif ($mark >= 40 && $mark <= 49) {
			# code...
			$grade = '2';
		}elseif ($mark >= 50 && $mark <= 59) {
			# code...
			$grade = '3';
		}elseif ($mark >= 60 && $mark <= 69) {
			# code...
			$grade = '3.5';
		}elseif ($mark >= 70 && $mark <= 79) {
			# code...
			$grade = '4';
		}elseif ($mark >= 80 && $mark <= 100) {
			# code...
			$grade = '5';
		}
		else{
			$grade = 'Invalid Mark';
		}

		return $grade;
	}


	function checkCgpa($ban_Gpa, $en_Gpa, $mat_Gpa, $sci_Gpa, $ss_Gpa, $religion_Gpa){
		$total_gpa = $ban_Gpa + $en_Gpa + $mat_Gpa + $sci_Gpa + $ss_Gpa + $religion_Gpa;
		$cgpa = $total_gpa / 6 ;
		return $cgpa;
	}


	function checkResult($ban_Gpa, $en_Gpa, $mat_Gpa, $sci_Gpa, $ss_Gpa, $religion_Gpa){

		if ($ban_Gpa == 0 || $en_Gpa == 0 || $mat_Gpa == 0 || $sci_Gpa == 0 || $ss_Gpa == 0 || $religion_Gpa == 0 ) {
			# code...
			$result = "Failed";
		} else {
			# code...
			$result = "Passed";
		}

		return $result;
		
	}


 ?>