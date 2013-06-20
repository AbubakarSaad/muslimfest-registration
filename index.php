<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="jquery-2.0.2.min.js"></script>
	<script type="text/javascript" src="js/validator.js"></script>
</head>
<body>
	<div id="page" class="container">
		<div class="row">
			<div id="logo" class="span12">
				<img src="img/muslimfest_logo_mississauga2.png" width="232" height="69">
			</div>
		</div>

		<div id="form">

		<div class="row">
			<h3 class="span12">Volunteer Registration</h3>
			<hr class="span12">
		</div>
		
		<div class="row">
			<div class="span6">
				<p>First Name* <br/> <input type="text" name="first-name" id="first-name"/></p>
			</div>

			<div class="span6 error"></div>
		</div>
		
		<div class="row">
			<div class="span6">
				<p>Last Name*<br/><input type="text" name="last-name"  id="last-name"/></p>
			</div>

			<div class="span6 error"></div>
		</div>
		
		<div class="row">
			<div class="span6">
				<p>Gender <br/>
				<select>
					<option>select</option>
					<option>Male</option>
					<option>Female</option>
				</select>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="span6">
				<p>City <br/><input type="text" name="city" id="city" /></p>
			</div>

			<div class="span6 error"></div>
		</div>

		<div class="row">
			<div class="span6">
				<p>Phone* <br /><input type="number" name="numbers" id="numbers" ></p>
			</div>

			<div class="span6 error"></div>
		</div>

		<div class="row">
			<div class="span6">
				<p>Email* <br /><input type="email" name="email" id="email" ></p>
			</div>

			<div class="span6 error"></div>
		</div>

		<div class="row">
			<div class="span6">
				<p>Birthday* <br /><input type="date" name="bday" id="bday" ></p>
			</div>

			<div class="span6 error"></div>
		</div>
		
		<div class="row">
			<div class="span6">
				<p>T-Shirt size* <br/>
					<select>
						<option>select</option>
						<option>Small</option>
						<option>Medium</option>
						<option>Large</option>
						<option>x-Large</option>
						<option>xx-Large</option>
					</select>
				</p> <!-- end of form header -->
			</div>

			<div class="span6 error"></div>
		</div>
		
		<div id="Voluteer-Areas"> <!-- Voluteer Area start here-->
			<div class="row">
				<h3 class="span12">Volunteer Areas</h3>
				<hr class="span12">
			</div>
			
			<div class="row">
				<div class="span6">
					<p>First Choice* <br/>
						<select>
							<option>select</option>
							<option>Technical</option>
							<option>Marketing</option>
							<option>Media</option>
							<option>Working With People</option>
							<option>Working with Business</option>
							<option>Working With Logistics</option>
							<option>Working With Childern/Youth</option>
							<option>Enviroment</option>
							<option>Show Prodcution</option>
						</select>
					</p>
				</div>
				
				<div class="span6 error"></div>
			</div>
			
			<div class="row">
				<div class="span6">
					<p>Second Choice* <br/>
						<select>
							<option>select</option>
							<option>Technical</option>
							<option>Marketing</option>
							<option>Media</option>
							<option>Working With People</option>
							<option>Working with Business</option>
							<option>Working With Logistics</option>
							<option>Working With Childern/Youth</option>
							<option>Enviroment</option>
							<option>Show Prodcution</option>
						</select>
					</p>
				</div>
				
				<div class="span6 error"></div>
			</div>

			<div class="row">
				<div class="span6">
					<p>Third Choice* <br/>
						<select>
							<option>select</option>
							<option>Technical</option>
							<option>Marketing</option>
							<option>Media</option>
							<option>Working With People</option>
							<option>Working with Business</option>
							<option>Working With Logistics</option>
							<option>Working With Childern/Youth</option>
							<option>Enviroment</option>
							<option>Show Prodcution</option>
						</select>
					</p>
				</div>
				
				<div class="span6 error"></div>
			</div>
		</div><!-- ends here -->

		<div id="Emergency-Contact">
			<div class="row">
				<h3 class="span12">Emergency Contact</h3>
				<hr class="span12">
			</div>

			<div class="row">
				<div class="span6">
					<p>Contact Name* <br/> 
						<input type="text" name="contact-name" id="contact-name"/>
					</p>
				</div>

				<div class="span6 error"></div>
			</div>
			
			<div class="row">
				<div class="span6">
					<p>Phone Number* <br/> 
						<input type="number" name="phone-number" id="phone-number"/>
						<p>(separate multiple phone numbers with a comma)</p>
					</p>
				</div>

				<div class="span6 error"></div>
			</div>
			
			<div class="row">
				<div class="span6">
					<p>Contact Name* <br/> 
						<input type="text" name="contact-name" id="contact-name"/>
					</p>
				</div>

				<div class="span6 error"></div>
			</div>
			
			<div class="row">
				<div class="span6">
					<p>Phone Number* <br/> 
						<input type="number" name="phone-number" id="phone-number"/>
						<p>(optional contact))</p>
					</p>
				</div>

				<div class="span6 error"></div>
			</div>
		</div>

		<!--Work Schedule-->
		<div id="Work Schedule">
			<div class="row">
				<h3 class="span12">Work Schedule</h3>
				<hr class="span12">
			</div>
			
			<div class="row">
				<div class="span6">
					<p>July 23rd* <br/>
						<select>
							<option>select</option>
							<option>7am to 11am</option>
							<option>11am to 3pm</option>
							<option>3pm to 7pm</option>
							<option>7pm to 11pm</option>
						</select>
					</p>
				</div>

				<div class="span6 error"></div>
			</div>
			
			<div class="row">
				<div class="span12">
					<p>July 24th* <br/>
					<select>
						<option>select</option>
						<option>7am to 11am</option>
						<option>11am to 3pm</option>
						<option>3pm to 7pm</option>
						<option>7pm to 11pm</option>
					</select>
					</p>
				</div>
				
				<div class="span6 error"></div>
			</div>
			
		</div>

		<!--Interview Date -->
		<div id="interview Date">
			<div class="row">
				<h3 class="span12">Interview Date</h3>
				<hr class="span12">
			</div>

			<div class="row">
				<div class="span6">
					<p>Date* <br/>
						<select>
							<option>select</option>
							<option>June 17, 2013</option>
							<option>June 24, 2013</option>
							<option>July 7, 2013</option>
							<option>July 8, 2013</option>
							<option>July 13, 2013</option>
							<option>July 14, 2013</option>
							<option>July 15, 2013</option>
							<option>July 22, 2013</option>
							<option>July 29, 2013</option>
						</select>
					</p>
				</div>

				<div class="span6 error"></div>
			</div>
			
			<div class="row">
				<div class="span6">
					<p>Time Slot <i>(once you have chosen a timeslot, that option will become unavailable for others)</i><br/>
						<select>
							<option>Slots</option>
						</select>
					</p>
				</div>

				<div class="span6 error"></div>
			</div>

			<div class="row">
				<div class="span12">
					<p><input type="checkbox"/> I authorize MuslimFest and its authorized representatives to contact me by email with information regarding my volunteer tasks.</p>
				</div>
			</div>

			<div class="row">
				<div class="span12">
					<p><input type="checkbox"/> I would like to receive the MuslimFest, Dawanet and SoundVisions email newsletters.</p>
				</div>
			</div>

			<div class="row">
				<div class="span12">
					<p><input type="checkbox"/> I authorize MuslimFest to send me some promotional offers by email.</p>
				</div>
			</div>
			
				
		</div>
		<div>
			<p><input type="button" value="Submit" class="btn btn-success"></p>
		</div>
		</div>
	</div>
</body>
</html>