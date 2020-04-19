<?php 

		require_once "edu-admin/libs/function.php";


		if ( isset($_POST['submit']) ) {
			# code...
			$board = $_POST['board'];
			$roll = $_POST['roll'];
			$reg = $_POST['reg'];


			$sql = "SELECT * FROM students_results WHERE board='$board' AND roll='$roll' AND reg='$reg' " ;
			$data = $conn -> query($sql);

			$show_result = $data -> fetch_assoc();

			


		}else{
			header("location:index.php");
		}
		




 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Education Board Bangladesh</title>
	<link rel="stylesheet" href="assets/css/syle.css">

	<link rel="shortcut icon" type="" href="">
</head>
<body>
	

	<div class="wraper">
		<div class="w-top">
			<div class="logo">
				<img src="assets/images/bd_logo.png" alt="">
			</div>
			<div class="banner">
				<h3>Ministry of Education</h3>
				<hr>
				<h4>Intermediate and Secondary Education Boards Bangladesh</h4>
			</div>
		</div>
		<div class="w-main">


				<div class="student-info">
					<div class="student-photo">
						<img src="edu-admin/students_pic/<?php echo $show_result['stu_pic']; ?>" alt="">
					</div>
					<div class="student-details">
						<table>
							<tr>
								<td>Name</td>
								<td><?php echo $show_result['name']; ?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td><?php echo $show_result['roll']; ?></td>
							</tr>
							<tr>
								<td>Reg.</td>
								<td><?php echo $show_result['reg']; ?></td>
							</tr>
							<tr>
								<td>Board</td>
								<td><?php echo $show_result['board']; ?></td>
							</tr>
							<tr>
								<td>Institute</td>
								<td><?php echo $show_result['institute']; ?></td>
							</tr>
							<tr>
								<td>Result</td>

								<?php 

									if($show_result['result'] == 'Passed') :

								 ?>
								<td><span style="color:green;font-weight:bold;">Passed<span></td>

									<?php 

								else : 
									?>

								<td><span style="color:red;font-weight:bold;">Failed<span></td>	

								
								<?php endif ; ?>	 

									 
							</tr>
						</table>
					</div>

				</div>

				<div class="student-result">
					<table>
						<tr>
							<td>Subject</td>
							<td>Marks</td>
							<td>Grade</td>
							<td>GPA</td>
							<td>CGPA</td>
						</tr>


<!-- 					















 -->



						<tr>
							<td>Bangla</td>
							<td><?php echo $show_result['b_m']; ?></td>
							<td><?php echo $show_result['b_g']; ?></td>
							<td><?php echo $show_result['b_c']; ?></td>
							<td rowspan="6"><?php echo $show_result['cgpa']; ?></td>
						</tr>
						<tr>
							<td>English</td>
							<td><?php echo $show_result['e_m']; ?></td>
							<td><?php echo $show_result['e_g']; ?></td>
							<td><?php echo $show_result['e_c']; ?></td>
						</tr>
						<tr>
							<td>Math</td>
							<td><?php echo $show_result['m_m']; ?></td>
							<td><?php echo $show_result['m_g']; ?></td>
							<td><?php echo $show_result['m_c']; ?></td>
						</tr>
						<tr>
							<td>Science</td>
							<td><?php echo $show_result['s_m']; ?></td>
							<td><?php echo $show_result['s_g']; ?></td>
							<td><?php echo $show_result['s_c']; ?></td>
						</tr>
						<tr>
							<td>Social Science</td>
							<td><?php echo $show_result['ss_m']; ?></td>
							<td><?php echo $show_result['ss_g']; ?></td>
							<td><?php echo $show_result['ss_c']; ?></td>
						</tr>
						<tr>
							<td>Religion</td>
							<td><?php echo $show_result['r_m']; ?></td>
							<td><?php echo $show_result['r_g']; ?></td>
							<td><?php echo $show_result['r_c']; ?></td>
						</tr>
					</table>
				</div>




		</div>
		
	</div>
	

	

	
</body>
</html>
