
<div class="modal fade " id="myModal">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content popup">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">

                                    <div class="progressbar">

                                        <div class="progress" id="progress">

                                        </div>

                                        <div class="progress-step process-active" data-title="Basic Details"></div>
                                        <div class="progress-step" data-title="Candidate Requirement"></div>
                                        <div class="progress-step" data-title="Interview Information"></div>
                                        <div class="progress-step" data-title="Submit"></div>
                                    </div>

                                    <form method="post" class="row p-3 form form-active" enctype="multipart/form-data">
                                        <form class="row p-3 form form-active">
                                            <h4 class="col-md-12 text-center p-3">Basic Details</h4>
                                            <div class="col-md-12 p-3">
                                                <input type="text" name="cname" class="form-control" id="formGroupExampleInput" placeholder="Company Name" required>
                                            </div>
                                            <div class="col-md-6 p-3">
                                                <input type="text" name="jrole" class="form-control" id="formGroupExampleInput1" placeholder="Job Role" required>
                                            </div>
                                            <div class="col-md-6 p-3">
                                                <input type="text" name="experience" class="form-control" id="inputexperience" placeholder="Experienced" required>
                                            </div>
                                            <div class="col-md-4 p-3">
                                                <input type="number" name="ctc" class="form-control" id="NumberInput" placeholder="CTC" required>
                                            </div>
                                            <div class="col-md-4 p-3">
                                                <input type="number" name="stip" class="form-control" id="NumberInput1" placeholder="Stipend during internship" required>
                                            </div>
                                            <div class="col-md-4 p-3">
                                                <input type="text" name="location" class="form-control" id="inputcity" placeholder="Location" required>
                                                <!-- <select name="location" class="form-control mb-3 js-example-basic-multiple" required>
                                                    ?php 
                                                       $con = mysqli_connect("localhost","root","","pu_career-cruisedb");
                                                       $cate_query = "SELECT * FROM locations";
                                                       $query_run = mysqli_query($con, $cate_query);
                                                       if(mysqli_num_rows($query_run) > 0)
                                                       {
                                                          foreach($query_run as $cate)
                                                          {
                                                             ?>
                                                             <option value="<= $cate["name"];?>">?= $cate["name"];?></option>
                                                             ?php
                                                          }
                                                       }
                                                       else{
                                                          echo "No Record Found";
                                                       }
                                                    ?>
                                           </select> -->
                                            </div>
                                            <div class="col-md-12 footer text-align-centered">
                                                <a href="#" class="btn btn-next d-block m-auto">Next</a>
                                            </div>
                                        </form>
                                        <form class="row p-3 form ">
                                            <h4 class="col-md-12 text-center p-3">Candidate Requirement</h4>
                                            <div class="col-md-12 p-3">
                                                <input type="text" name="ecrit" class="form-control" id="Inputcriteria" placeholder="Eligibility Criteria" required>
                                            </div>
                                            <div class="col-md-12 p-3">
                                                <input type="text" name="ecour" class="form-control" id="Inputcourses" placeholder="Eligibility Courses" required>
                                            </div>
                                            <div class="col-md-12 p-3">
                                                <input type="text" name="odetails" class="form-control" id="Inputdetails" placeholder="Other Details" required>
                                            </div>
                                            <div class="col-md-6 footer text-align-centered">
                                                <a href="#" class="btn btn-prev d-block m-auto">Previous</a>
                                            </div>
                                            <div class="col-md-6 footer text-align-centered">
                                                <a href="#" class="btn btn-next d-block m-auto">Next</a>
                                            </div>
                                        </form>
                                        <form class="row p-3 form ">
                                            <h4 class="col-md-12 text-center p-3">Interview Information</h4>
                                            <div class="col-md-12 p-3">
                                                <input type="text" name="selepro" class="form-control" id="Inputprocess" placeholder="Selection Process" required>
                                            </div>
                                            <div class="col-md-12 p-3">
                                                <input type="url" name="aboutorg" id="typeURL" class="form-control" placeholder="About Organization" required>
                                            </div>
                                            <div class="col-md-4 p-3">
                                                <input type="text" name="contpername" class="form-control" id="Inputname" placeholder="Contact Person Name" required>
                                            </div>
                                            <div class="col-md-4 p-3">
                                                <input type="text" name="contpernumber" class="form-control" id="NumberInput" placeholder="Contact Person Number" required>
                                            </div>
                                            <div class="col-md-4 p-3">
                                                <input type="email" name="contperemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Person Email-ID" required>
                                            </div>
                                            <div class="col-md-6 footer text-align-centered">
                                                <a href="#" class="btn btn-prev d-block m-auto">Previous</a>
                                            </div>
                                            <div class="col-md-6 footer text-align-centered">
                                                <a href="#" class="btn btn-next d-block m-auto">Next</a>
                                            </div>
                                        </form>
                                        <form class="row p-3 form">
                                            <h1 class="col-md-12 text-center p-3">Are You Sure to Submit?</h1>
                                            <div class="col-md-6 footer text-align-centered">
                                                <a href="#" class="btn btn-prev d-block m-auto">Previous</a>
                                            </div>
                                            <div class="col-md-6 footer text-align-centered">
                                                <button type="submit" name="subjobpost" class="btn btn-submit d-block m-auto">Submit</button>
                                            </div>
                                        </form>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>