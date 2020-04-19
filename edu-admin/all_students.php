<?php 

    require_once "template/header.php"; 


 ?>
                                    
                                    
                                    <!-- ADMIN PANEL SECTION -->
      <div class="row">
                                        
        <div class="col-md-10" style="margin: 50px 20px 50px 50px;">
             <section class="panel b-a" style="min-height: 400px;">
                
                <div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">All Students Information</a> </div>

                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Student SL</th>
                                    <th>Student Name</th>
                                    <th>Student Roll</th>
                                    <th>Registration No</th>
                                    <th>Board</th>
                                    <th>Institute</th>
                                    <th>Student Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                                    
                            <tbody>


                                <?php 

                                    $sql = "SELECT * FROM students_info";
                                    $data = $conn -> query($sql);

                                    $i = 1;
                                    while ( $all_students_data = $data -> fetch_assoc() ): 


                                 ?>


                                <tr>
                                    <th><?php echo $i; $i++; ?></th>
                                    <th><?php echo $all_students_data['stu_name']; ?></th>
                                    <th><?php echo $all_students_data['stu_roll']; ?></th>
                                    <th><?php echo $all_students_data['reg']; ?></th>
                                    <th><?php echo $all_students_data['board']; ?></th>
                                    <th><?php echo $all_students_data['institute']; ?></th>
                                    <th><img style="width: 50px; height: 50px;" src="students_pic/<?php echo $all_students_data['stu_pic']; ?>" alt=""></th>


                                    <?php 


                                        $result_num = checkResultExist($all_students_data['stu_roll'], $all_students_data['reg'], $conn);

                                        if($result_num == 0) :


                                     ?>


                                    <th><a class="btn btn-info" href="add_result.php?sl=<?php echo $all_students_data['stu_sl']; ?>">Add Result</a></th>

                                        <?php 

                                            else : 


                                            $sql = "SELECT * FROM students_results";
                                            $result = $conn -> query($sql);

                                            
                                            $single_result = $result -> fetch_assoc();




                                         ?>

                                         <th><a class="btn btn-success" href="update_result.php?sl=<?php echo $single_result['result_sl']; ?>">Update Result</a></th>

                                            <?php 

                                                endif ;

                                             ?>


                                </tr>

                                <?php 

                                    endwhile; 


                                 ?>

                                
                               
                            </tbody>
                        </table>
                    </div>
                </div>


    
                    </div>
                    
                  </div>






                                               


                            

        <?php 


        require_once "template/footer.php";


    ?>