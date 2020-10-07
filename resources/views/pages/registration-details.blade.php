<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="sector">Which Sector are you currently working in?</label>
										<input type="text" name="sector" id="sector" value="" placeholder="Enter your work sector" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="employer">Name of Employer?</label>
										<input type="text" name="employer" id="employer" value="" placeholder="Enter your employer name" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="salary">Are you a Salaried Employee with Payslip evidence?</label>
										<div class="form-group">
						                    <select name="salary" class="select-css" required="">
		            							<option value="None">Select Answer</option>
		            							<option value="Yes">Yes</option>
		            							<option value="No">No</option>
			            					</select>
					                    </div>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="amount">How much would you need monthly for your Salary advance?</label>
										<div class="form-group">
						                    <select name="amount" class="select-css" required="">
		            							<option value="None">Select Answer</option>
		            							<option value="1000 - 10000">KES 1,000 - 10,000</option>
		            							<option value="10000 - 20000">KES 10,000 - 20,000</option>
		            							<option value="20000 - 30000">KES 20,000 - 30,000</option>
		            							<option value="31000 and above">KES 31,000 and above</option>
					              
					            			</select>
					                    </div>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="ready">Is your organization ready to sign up for Salary advances?</label>
										<div class="form-group">
						                    <select name="ready" class="select-css" required="">
		            							<option value="None">Select Answer</option>
		            							<option value="Yes">Yes</option>
		            							<option value="No">No</option>
		            							<option value="Maybe">Maybe</option>
					            			</select>
					                    </div>
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="idnumber">Kindy assist us with your ID number</label>
										<input type="text" name="idnumber" id="idnumber" value="" placeholder="Enter your ID Number" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="krapin">Kindy assist us with your KRA PIN</label>
										<input type="text" name="krapin" id="krapin" value="" placeholder="Enter your KRA PIN" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="nssf">Kindy assist us with your NSSF number</label>
										<input type="text" name="nssf" id="nssf" value="" placeholder="Enter your NSSF Number" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="nhif">Kindy assist us with your NHIF number</label>
										<input type="text" name="nhif" id="nhif" value="" placeholder="Enter your NHIF Number" required="">
									</div>
									

									

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="phone">Upload you copy of ID (Size should be less than 2MB): </label>
										<input type="file" name="id_document" id="id_document" value="" placeholder="Upload your ID Document" required="">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<label for="file">Upload a copy of your latest payslip (Size should be less than 2MB): </label>
										<input type="file" name="payslip_document" id="payslip_document" value="" placeholder="Upload your Payslip Document" required="">
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
			                            <span class="button-checkbox">
			                                <!-- <button type="button" class="btn" data-color="info" tabindex="7" value="0" name="agreement">I Agree</button> -->
			                                <input type="checkbox" name="checkbox" id="checkbox" value="1">
			                            </span>
			                            I agree to Salohub's <a href="{!! route('terms') !!}">Terms and Conditions</a> and <a href="{!! route('privacy') !!}">Privacy Policy</a> by filling this form.
				                    </div>