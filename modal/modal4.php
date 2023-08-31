<div class="modal fade " id="myModal1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content popup">
            <div class="modal-header">
                <div class="actionBtns">
                    <button class="actionBtn signupBtn">
                        Signup
                    </button>
                    <button class="actionBtn loginBtn">
                        Login
                    </button>
                    <button class="moveBtn">
                        signup
                    </button>
                </div>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <form method="post" action="resume.php" class="row p-3 form signup signupForm">
                        <div class="col-md-6 p-3 inputgroup">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6 p-3 inputgroup">
                            <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Last Name" required>
                        </div>
                                            <div class="col-md-6 p-3 inputgroup">
                                                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email-ID" required>
                                            </div>
                                            <div class="col-md-6 p-3 inputgroup">
                                            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" required>
                                            </div>
                                            <div class="col-md-6 p-3 inputgroup">
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" required>
                                            </div>
                                            <div class="col-md-6 p-3 inputgroup">
                                                <input type="text" class="form-control" id="inputZip" placeholder="PinCode" required>
                                            </div>
                                            <div class="col-md-12 p-3 inputgroup">
                                                <input type="textarea" class="form-control" id="inputAddress" placeholder="Address" required>
                                            </div>
                                            <div class="col-md-6 p-3 inputgroup">
                                                <input type="text" class="form-control" id="NumbersInput" placeholder="Contact Number" required>
                                            </div>
                                            <div class="col-md-6 p-3 inputgroup">
                                                <input type="text" class="form-control" id="NumberInput" placeholder="Alternate Contact Number" optional>
                                            </div>
                                            <div class="col-md-4 p-3 inputgroup">
                                                <input type="text" class="form-control" id="Country" placeholder="Country" required>
                                            </div>
                                            <div class="col-md-4 p-3 inputgroup">
                                                <input type="text" class="form-control" id="inputState" placeholder="State" required>
                                            </div>
                                            <div class="col-md-4 p-3 inputgroup">
                                                <input type="text" class="form-control" id="inputCity" placeholder="City">
                                            </div>
                                            <div class="col-md-12 p-3">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label text-align-centered" for="inlineRadio1">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label text-align-centered" for="inlineRadio2">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                    <label class="form-check-label text-align-centered" for="inlineRadio3">Other</label>
                                                </div>
                                            </div>
                                            <div class="footer text-align-centered">
                                                <button type="submit" name="submitdate" class="btn d-block m-auto">SignUp</button>
                                            </div>
                                    </form>
                                    <form method="post" action="resume.php" class="row p-3 form login">
                                            <div class="col-md-12 p-3 inputgroup">
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email-ID" required>
                                            </div>
                                            <div class="col-md-12 p-3 inputgroup">
                                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                            </div>
                                            <div class="footer text-align-centered">
                                                <button type="submit" name="submitdate" class="btn d-block m-auto">Login</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>