


<?php 

    require_once "template/header.php"; 


 ?>
                                    
                                    
                                    <!-- ADMIN PANEL SECTION -->
      <div class="row">
                                        
        <div class="col-md-10" style="margin: 50px 20px 50px 50px;">
             <section class="panel b-a" style="min-height: 400px;">
                
                <div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Please, fill the form</a> </div>


    <?php 


        if ( isset($_GET['sl']) ) {
                # code...
                $SL = $_GET['sl'];
            } else {
                $SL = '';
            }

            $sql = "SELECT * FROM students_results WHERE result_sl='$SL' ";
            $result= $conn -> query($sql);

            $single_result = $result -> fetch_assoc();

            $stu_name = $single_result['name'];
            $stu_roll = $single_result['roll'];
            $reg = $single_result['reg'];
            $board = $single_result['board'];
            $institute = $single_result['institute'];
            $stu_pic = $single_result['stu_pic'];
            $ban = $single_result['b_m'];
            $ban_grade = $single_result['b_g'];
            $ban_Gpa = $single_result['b_c'];
            $en = $single_result['e_m'];
            $en_grade = $single_result['e_g'];
            $en_Gpa = $single_result['e_c'];
            $mat = $single_result['m_m'];
            $mat_grade = $single_result['m_g'];
            $mat_Gpa = $single_result['m_c'];
            $sci = $single_result['s_m'];
            $sci_grade = $single_result['s_g'];
            $sci_Gpa = $single_result['s_c'];
            $ss = $single_result['ss_m'];
            $ss_grade = $single_result['ss_g'];
            $ss_Gpa = $single_result['ss_c'];
            $religion = $single_result['r_m'];
            $religion_grade = $single_result['r_g'];
            $religion_Gpa = $single_result['r_c'];
            $grade_alpha = $single_result['grade_alpha'];
            $stu_cgpa_round = $single_result['cgpa'];
            $result = $single_result['result'];

        if ( isset($_POST['submit']) ) {
                        # code...

        

        //, , , , , , , , , , , , , , , , , , , , , , , , , , 

        //$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$', '$'

        
        
        
       


       

            //Bangla
            $ban = $_POST['ban'];
            $ban_grade = checkGrade($ban);
            $ban_Gpa = checkGpa($ban);

            $en = $_POST['en'];
            $en_grade = checkGrade($en);
            $en_Gpa = checkGpa($en);

            $mat = $_POST['mat'];
            $mat_grade = checkGrade($mat);
            $mat_Gpa = checkGpa($mat);

            $sci = $_POST['sci'];
            $sci_grade = checkGrade($sci);
            $sci_Gpa = checkGpa($sci);

            $ss = $_POST['ss'];
            $ss_grade = checkGrade($ss);
            $ss_Gpa = checkGpa($ss);

            $religion = $_POST['religion'];
            $religion_grade = checkGrade($religion);
            $religion_Gpa = checkGpa($religion);



            $stu_cgpa = checkCgpa($ban_Gpa, $en_Gpa, $mat_Gpa, $sci_Gpa, $ss_Gpa, $religion_Gpa);

            $stu_cgpa_round = round($stu_cgpa, 2);

            $grade_alpha = checkGradeAlpha($stu_cgpa);

            $result = checkResult($ban_Gpa, $en_Gpa, $mat_Gpa, $sci_Gpa, $ss_Gpa, $religion_Gpa);
            

            if (empty($ban) || empty($en) || empty($mat) || empty($sci) || empty($ss) || empty($religion) ) {
                # code...
                $mess = "<p class='alert alert-danger'> Please, fill the form properly!<button class='close' data-dismiss='alert'>&times;</button></p>";

            } else {
                # code...
                // $a = "";
                // $b = "";  


                $sql = "UPDATE students_results SET name='$stu_name', roll='$stu_roll', reg='$reg', board='$board', institute='$institute', stu_pic='$stu_pic', b_m='$ban', b_g='$ban_grade', b_c='$ban_Gpa', e_m='$en', e_g='$en_grade', e_c='$en_Gpa', m_m='$mat', m_g='$mat_grade', m_c='$mat_Gpa', s_m='$sci', s_g='$sci_grade', s_c='$sci_Gpa', ss_m='$ss', ss_g='$ss_grade', ss_c='$ss_Gpa', r_m='$religion', r_g='$religion_grade', r_c='$religion_Gpa', grade_alpha='$grade_alpha', cgpa='$stu_cgpa_round', result='$result' WHERE result_sl='$SL' " ;
                $conn -> query($sql);

                $mess = "<p class='alert alert-success'> Congartualtions, marks are added successfully!<button class='close' data-dismiss='alert'>&times;</button></p>";



            }
            

        }
                        


        ?>

        <div class="mess">
                    <?php  

                        if( isset($mess) ){
                        echo $mess;
                        
                        }

                    ?>
                </div>


                    <div class="card" style="padding: 30px;">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>?sl=<?php echo $SL; ?>" method="POST">

                            <div class="form-group">
                                <label for="">Bangla</label>
                                <input name="ban" class="form-control" type="text" value="<?php echo $single_result['b_m']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="">English</label>
                                <input name="en" class="form-control" type="text" value="<?php echo $single_result['e_m']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Math</label>
                                <input name="mat" class="form-control" type="text" value="<?php echo $single_result['m_m']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Science</label>
                                <input name="sci" class="form-control" type="text" value="<?php echo $single_result['s_m']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Social Science</label>
                                <input name="ss" class="form-control" type="text" value="<?php echo $single_result['ss_m']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Religion</label>
                                <input name="religion" class="form-control" type="text" value="<?php echo $single_result['r_m']; ?>">
                            </div>

                            <div class="form-group">
                                
                                <input name="submit" class="btn btn-success" type="submit" value="Submit">
                            </div>

                        </form>
                    </div>
                    
                  </div>




                                               


                </section>
            </div>




                                       
        </div>
                                

        <?php 


        require_once "template/footer.php";


    ?>