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


	function checkGradeAlpha($stu_cgpa) {

		if ($stu_cgpa >= 0 && $stu_cgpa < 1) {
			# code...
			$grade_alpha = 'F';

		} elseif ($stu_cgpa >= 1 && $stu_cgpa < 2) {
			# code...
			$grade_alpha = 'D';

		}elseif ($stu_cgpa >= 2 && $stu_cgpa < 3) {
			# code...
			$grade_alpha = 'C';

		}elseif ($stu_cgpa >= 3 && $stu_cgpa < 3.5) {
			# code...
			$grade_alpha = 'B';

		}elseif ($stu_cgpa >= 3.5 && $stu_cgpa < 4) {
			# code...
			$grade_alpha = 'A-';

		}elseif ($stu_cgpa >= 4 && $stu_cgpa < 5) {
			# code...
			$grade_alpha = 'A';

		}elseif ($stu_cgpa == 5 ) {
			# code...
			$grade_alpha = 'A+';

		}else{
			$grade_alpha = 'Invalid';
		}
		
		return $grade_alpha;
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



	function checkResultExist($stu_roll, $reg, $conn) {

		$sql = "SELECT * FROM students_results WHERE roll= '$stu_roll' AND reg='$reg'";
		$data = $conn  -> query($sql);

		return $data -> num_rows;

	}


 ?>