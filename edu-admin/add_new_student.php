<?php 

    require_once "template/header.php"; 


 ?>
                                    
                                    
                                    <!-- ADMIN PANEL SECTION -->
      <div class="row">
                                        
        <div class="col-md-10" style="margin: 50px 20px 50px 50px;">
             <section class="panel b-a" style="min-height: 400px;">
                
                <div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Please, fill the form</a> </div>


    <?php 

        if ( isset($_POST['submit']) ) {
                        # code...

            // data
            $stu_name = $_POST['stu_name'];
            $stu_roll = $_POST['stu_roll'];
            $reg = $_POST['reg'];
            $board = $_POST['board'];
            $institute = $_POST['institute'];

            //file
            $stu_pic = $_FILES['stu_pic']['name'];
            $stu_tpic = $_FILES['stu_pic']['tmp_name'];

            //make unique pic name
            $array_pic = explode('.', $stu_pic);
            $ext = end($array_pic);
            $upname = md5(time().rand().$stu_pic).'.'.strtolower($ext);

            if (empty($stu_name) || empty($stu_roll) || empty($reg) || empty($board) || empty($institute) || empty($stu_pic) ) {
                # code...
                $mess = "<p class='alert alert-danger'> Please, fill the form properly!<button class='close' data-dismiss='alert'>&times;</button></p>";

            } else {
                # code...
                $sql = "INSERT INTO students_info (stu_name, stu_roll, reg, board, institute,   stu_pic) VALUES ('$stu_name','$stu_roll','$reg','$board','$institute', '$upname')";
                $conn -> query($sql);

                move_uploaded_file($stu_tpic, 'students_pic/'.$upname);

                $mess = "<p class='alert alert-success'>The information is added successfully, Congratulations!<button class='close' data-dismiss='alert'>&times;</button></p>";

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
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="">Student Name</label>
                                <input name="stu_name" class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">Student Roll</label>
                                <input name="stu_roll" class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">Registration No</label>
                                <input name="reg" class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">Board</label>
                                <input name="board" class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">Institute</label>
                                <input name="institute" class="form-control" type="text">
                            </div>

                            <div class="form-group">
                                <label for="">Student Photo</label>
                                <input name="stu_pic" class="" type="file">
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




  