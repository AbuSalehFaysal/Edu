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

        if ( isset($_POST['submit']) ) {
                        # code...

        $sql = "SELECT * FROM students_info WHERE stu_sl='$SL' ";
        $data = $conn -> query($sql);

        $single_data = $data -> fetch_assoc();

        $stu_name = $single_data['stu_name'];
        $stu_roll = $single_data['stu_roll'];
        $reg = $single_data['reg'];
        $board = $single_data['board'];
        $institute = $single_data['institute'];
        $stu_pic = $single_data['stu_pic'];
       


       

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


                $sql = "INSERT INTO students_results (name, roll, reg, board, institute, stu_pic, b_m, b_g, b_c, e_m, e_g, e_c, m_m, m_g, m_c, s_m, s_g, s_c, ss_m, ss_g, ss_c, r_m, r_g, r_c, grade_alpha, cgpa, result) VALUES ('$stu_name', '$stu_roll', '$reg', '$board', '$institute', '$stu_pic', '$ban', '$ban_grade', '$ban_Gpa', '$en', '$en_grade', '$en_Gpa', '$mat', '$mat_grade', '$mat_Gpa', '$sci', '$sci_grade', '$sci_Gpa', '$ss', '$ss_grade', '$ss_Gpa', '$religion', '$religion_grade', '$religion_Gpa', '$grade_alpha', '$stu_cgpa_round', '$result')";
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
                                <input name="ban" class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">English</label>
                                <input name="en" class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">Math</label>
                                <input name="mat" class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">Science</label>
                                <input name="sci" class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">Social Science</label>
                                <input name="ss" class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">Religion</label>
                                <input name="religion" class="form-control" type="text">
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