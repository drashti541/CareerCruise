<div class="modal fade" id="myModal">
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
                        <div class="progress" id="progress">  </div>
                        <div class="progress-step process-active" data-title="Accreditation"></div>
                        <div class="progress-step" data-title="Investment Goals"></div>
                        <div class="progress-step" data-title="Past Experience"></div>
                        <div class="progress-step" data-title="Submit"></div>
                    </div>

                    <form method="post" action="" class="row p-3 form form-active">
                        <h4 class="col-md-12 text-center p-3">Accreditation</h4>
                        <div class="col-md-12 p-3">
                        <label class="text-align-centered" for="label">Where is your full legal name?</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="What is your full legal name?">
                        </div>
                        <div class="col-md-12 p-3">
                        <label class="text-align-centered" for="label">Where is your legal place of residence?</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Where is your legal place of residence?">
                        </div>
                        <div class="col-md-12 p-3">
                            <label class="text-align-centered p-2" for="label">How are you accredited?</label>
                            <div class="form-check">
                                <input class="form-check-input p-2" type="radio" name="RadioOptions" id="Radio1" value="option1">
                                <label class="form-check-label p-2 text-align-centered" for="Radio1">I have, either on my own or with my spouse, more than ₹8.25cr of net tangible assets (excluding my primary residence)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input p-2" type="radio" name="RadioOptions" id="Radio2" value="option2">
                                <label class="form-check-label p-2 text-align-centered" for="Radio2">I want to make investments via AngelList India only. I do not meet the above criteria. However, I hereby declare that I have more than ₹2cr of net tangible assets (excluding my primary residence)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input p-2" type="radio" name="RadioOptions" id="Radio3" value="option3">
                                <label class="form-check-label p-2 text-align-centered" for="Radio3">I'm not accredited yet</label>
                            </div>
                        </div>
                        <div class="col-md-12 footer text-align-centered">
                            <a href="#" class="btn btn-next d-block m-auto">Next</a>
                        </div>
                    </form>

                    <form method="post" action="" class="row p-3 form ">
                        <h4 class="col-md-12 text-center p-3">Investment Goals</h4>
                            <label class="text-align-centered" for="label"><strong><u>Tell us more about why you want to invest on Career Cruise</strong></u></label>

                        <div class="col-md-12 p-3">
                            <label class="text-align-centered p-2" for="label"><strong>Which of the following investment strategies (or products) best match your preferences?</strong></label>
                            <label class="text-align-centered p-2" for="label">Choose all that apply</label>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check1" name="option1">
                                <label class="form-check-label p-2" for="check1">Picking companies to invest in (Career Cruise Syndicates)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check2" name="option2">
                                <label class="form-check-label p-2" for="check2">Investing in funds that broadly index venture, such as Career Cruise Access Fund (Career Cruise Managed Funds)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3" name="option3">
                                <label class="form-check-label p-2" for="check3">Investing behind Fund Managers who pick companies to invest in (Career Cruise Rolling or Venture Funds)</label>
                            </div>
                        </div>

                        <div class="col-md-12 p-3">
                            <label class="text-align-centered p-2" for="label"><strong>How much are you hoping to allocate (in USD) to startups using Career Cruise over the next 12 months?</strong></label>
                            <label class="text-align-centered p-2" for="label">This will help us match you with the products that best fit your goals</label>

                            <div class="form-check">
                                <input class="form-check-input p-2" type="radio" name="RadioOptions" id="ins1" value="option1">
                                <label class="form-check-label p-2 text-align-centered" for="Radio1">Up to $20,000</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input p-2" type="radio" name="RadioOptions" id="ins2" value="option2">
                                <label class="form-check-label p-2 text-align-centered" for="Radio2">Up to $50,000</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input p-2" type="radio" name="RadioOptions" id="ins3" value="option3">
                                <label class="form-check-label p-2 text-align-centered" for="Radio3">Up to $100,000</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input p-2" type="radio" name="RadioOptions" id="ins4" value="option4">
                                <label class="form-check-label p-2 text-align-centered" for="Radio4">Up to $250,000</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input p-2" type="radio" name="RadioOptions" id="ins5" value="option5">
                                <label class="form-check-label p-2 text-align-centered" for="Radio5">Up to $500,000</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input p-2" type="radio" name="RadioOptions" id="ins6" value="option6">
                                <label class="form-check-label p-2 text-align-centered" for="Radio6">More than $500,000</label>
                            </div>

                        </div>
                        <div class="col-md-12 p-3">
                            <label class="text-align-centered p-2" for="label"><strong>What percentage of your net worth do you want to allocate to investing in startups?</strong></label>
                            <div class="form-check">
                                <input class="form-check-input p-2" type="radio" name="RadioOptions" id="invest1" value="option1">
                                <label class="form-check-label p-2 text-align-centered" for="Radio1">Up to 5%</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input p-2" type="radio" name="RadioOptions" id="invest2" value="option2">
                                <label class="form-check-label p-2 text-align-centered" for="Radio2">Up to 10%</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input p-2" type="radio" name="RadioOptions" id="invest3" value="option3">
                                <label class="form-check-label p-2 text-align-centered" for="Radio3">Up to 15%</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input p-2" type="radio" name="RadioOptions" id="invest4" value="option4">
                                <label class="form-check-label p-2 text-align-centered" for="Radio4">More than 15%</label>
                            </div>
                        </div>
                        <div class="col-md-12 p-3">
                            <label class="text-align-centered p-2" for="label"><strong>What are your main reasons for choosing Career Cruise?</strong></label>
                            <br><label class="text-align-centered p-2" for="label">Choose all that apply</label>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check4" name="option4">
                                <label class="form-check-label p-2" for="check4">Generating financial returns for your portfolio</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check5" name="option5">
                                <label class="form-check-label p-2" for="check5">Meeting new people to expand your network</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check6" name="option6">
                                <label class="form-check-label p-2" for="check6">Accessing dealflow you can’t get anywhere else</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check7" name="option7">
                                <label class="form-check-label p-2" for="check7">Learning more about tech and startups</label>
                            </div>
                        </div>
                        <div class="col-md-12 p-3">
                            <div class="form-check">
                                <label class="form-check-label p-2" for="check7"><strong>How are you hoping to use Career Cruise?</strong></label>
                                <textarea class="form-control p-2" id="exampleFormControlTextarea1" rows="10" placeholder="  How are you hoping to use Career Cruise?  " ></textarea>
                            </div>
                        </div>

                        <div class="col-md-6 footer text-align-centered">
                            <a href="#" class="btn btn-prev d-block m-auto">Previous</a>
                        </div>
                        <div class="col-md-6 footer text-align-centered">
                            <a href="#" class="btn btn-next d-block m-auto">Next</a>
                        </div>
                    </form> 
                    <form method="post" action="" class="row p-3 form ">
                        <h4 class="col-md-12 text-center p-3">Past Experience</h4>
                        <label class="text-align-centered p-2" for="label"><strong>Your goals and past experience can help unlock access to investment opportunities</strong></label>
                        <div class="col-md-12 p-3">
                            <label class="text-align-centered p-2" for="label"><strong>LinkedIn Profile</strong></label>
                            <label class="text-align-centered p-2" for="label">Providing a LinkedIn profile helps us determine your eligibility. If you don’t have one, leave this field blank.</label>
                            <input type="text" class="form-control" id="formGroupid" placeholder="User ID">
                        </div>

                        <div class="col-md-12 p-3">
                            <label class="text-align-centered p-2" for="label"><strong>What is your experience investing in venture-backed tech startups or venture capital funds?</strong></label>
                            <label class="text-align-centered p-2" for="label">Choose all that apply</label>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_1" name="option3_1">
                                <label class="form-check-label p-2" for="check3_1">I invested in a startup directly or through a single-purpose vehicle (SPV)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_2" name="check3_2">
                                <label class="form-check-label p-2" for="check3_2">I invested in startups indirectly through a venture fund</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_3" name="check3_3">
                                <label class="form-check-label p-2" for="check3_3">I work or worked at a venture capital or investment firm</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_4" name="check3_4">
                                <label class="form-check-label p-2" for="check3_4">I represent or represented a family office or Registered Investment Advisor (RIA)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_5" name="check3_5">
                                <label class="form-check-label p-2" for="check3_5">None of the above</label>
                            </div>
                        </div>

                        <div class="col-md-12 p-3">
                            <label class="text-align-centered p-2" for="label"><strong>What is your experience working with tech startups?</strong></label>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_6" name="option3_6">
                                <label class="form-check-label p-2" for="check3_6">I work or worked at a tech startup</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_7" name="check3_7">
                                <label class="form-check-label p-2" for="check3_7">I advise or advised a tech startup</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_9" name="check3_9">
                                <label class="form-check-label p-2" for="check3_9">I am or was a tech startup founder</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_9" name="check3_9">
                                <label class="form-check-label p-2" for="check3_9">None of the above</label>
                            </div>
                        </div>

                        <div class="col-md-12 p-3">
                            <label class="text-align-centered p-2" for="label"><strong>How did you hear about AngelList?</strong></label>
                            <br><label class="text-align-centered p-2" for="label">Choose all that apply</label>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_10" name="option3_10">
                                <label class="form-check-label p-2" for="check3_10">Google search</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_11" name="check3_11">
                                <label class="form-check-label p-2" for="check3_11">Newsletter/Media Site (TechCrunch, etc.)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_12" name="check3_12">
                                <label class="form-check-label p-2" for="check3_12">Twitter</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_13" name="check3_13">
                                <label class="form-check-label p-2" for="check3_13">Friend or Connection</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_14" name="check3_14">
                                <label class="form-check-label p-2" for="check3_14">Career Cruise Syndicate Lead or Fund Manager</label>
                            </div>
                        </div>

                        <div class="col-md-12 p-3">
                            <label class="text-align-centered p-2" for="label"><strong>Please carefully review the information below before submitting your application:</strong></label>
                            <ol class="list-group list-group-numbered p-2">
                                <li class="list-group-item">I understand that most investments in startups result in a complete loss.</li>
                                <li class="list-group-item">I understand that AngelList does not verify information on the site, and I am responsible for my own diligence.</li>
                                <li class="list-group-item">I promise to hold AngelList harmless against any damage that may happen to myself as a result of my use of AngelList.</li>
                                <li class="list-group-item">If I invest, I will comply with securities laws and consult my own attorney and professional advisors where I need advice.</li>
                                <li class="list-group-item">I understand that I will be permanently banned from AngelList and that I may face legal consequences if I falsely represent my accreditation status.</li>
                                <li class="list-group-item">I declare that I am resident of India</li>
                            </ol>
                            <div class="form-check">
                                <input type="checkbox p-2" class="form-check-input" id="check3_15" name="option3_15">
                                <label class="form-check-label p-2" for="check3_15">I agree to the terms and conditions, as well as the terms above.</label>
                            </div>
                        </div>

                        <div class="col-md-6 footer text-align-centered">
                            <a href="#" class="btn btn-prev d-block m-auto">Previous</a>
                        </div>
                        <div class="col-md-6 footer text-align-centered">
                            <a href="#" class="btn btn-next d-block m-auto">Next</a>
                        </div>
                    </form>
                    <form method="post" action="profile.php" class="row p-3 form">
                        <h1 class="col-md-12 text-center p-3">Are You Sure to Submit?</h1>
                        <div class="col-md-6 footer text-align-centered">
                            <a href="#" class="btn btn-prev d-block m-auto">Previous</a>
                        </div>
                        <div class="col-md-6 footer text-align-centered">
                            <button type="submit" name="submitdate" class="btn btn-submit d-block m-auto">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>