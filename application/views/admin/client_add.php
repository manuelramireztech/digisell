<?php include('partials_admin/header.php'); ?>
<div class="row">
	<div class="col-md-12">
			<?php if ($this->session->flashdata('message')):?>
                <div class="alert alert-info">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <?php echo $this->session->flashdata('message');?>
                </div>
           <?php endif;?>
           <?php if ($this->session->flashdata('error')):?>
                <div class="alert alert-danger">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     <?php echo $this->session->flashdata('error');?>
                </div>
           <?php endif;?>
		<div class="panel">
		  	<div class="panel-heading">
			    <h3 class="panel-title">
			    	Add New Client   
			    	<span class="panel-options">
						<a href="#" class="panel-minimize">
							<i class="fa fa-chevron-up"></i>
						</a>
						<a href="#" class="panel-close">
							<i class="fa fa-times"></i>
						</a>
					</span>
			    </h3>
		  	</div>
		  	<form action="<?php echo base_url('index.php').'/admin_client/save/' ?>" id="edit" method="post">
		  	<div class="panel-body">
				<div class="col-md-5">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td class='active col-md-4'>Accessible Profiles:&nbsp;<input type="checkbox" id="selecctall" name="selectall" /></td>
									<td>
										<?php
											foreach ($profiles as $profile) 
											{
												$data = array(
	    														'name'        => 'prf[]',
	    														'id'		  => 'prf',
	    														'value'       => $profile->profile_id,
	    														'checked'     => false,
	    														'class'       => 'cb1',
				    											 );
												echo form_checkbox($data).$profile->profile_name.br(1);
											}
										?>
									</td>
								</tr>
								<tr>
									<td class='active col-md-4'>First Name:</td>
									<td>
										<?php
											$data	= array('name'=>'first_name',  'class'=>'form-control');
											echo form_input($data); ?>
									</td>
								</tr>
								<tr>
									<td class='active col-md-4'>Last Name:</td>
									<td>
										<?php
											$data	= array('name'=>'last_name',  'class'=>'form-control');
											echo form_input($data); ?>
									</td>
								</tr>
								<tr>
									<td class='active col-md-4'>Organization:</td>
									<td>
										<?php
											$data	= array('name'=>'org',  'class'=>'form-control');
											echo form_input($data); ?>
									</td>
								</tr>
								<tr>
									<td class='active col-md-4'>Address:</td>
									<td>
										<?php
											$data	= array('name'=>'address_1',  'class'=>'form-control');
											echo form_input($data); ?>
									</td>
								</tr>
								<tr>
									<td class='active col-md-4'>City:</td>
									<td>
										<?php
											$data	= array('name'=>'city',  'class'=>'form-control');
											echo form_input($data); ?>
									</td>
								</tr>
								<tr>
									<td class='active col-md-4'>USA State:</td>
									<td>
										<select name="state" id="state" class="form-control drp">
											<option value="" >* No state required</option>
											<option value="AE" >AE-APO</option>
											<option value="AL" >Alabama</option>
											<option value="AK" >Alaska</option>
											<option value="AZ" >Arizona</option>
											<option value="AR" >Arkansas</option>
											<option value="CA" >California</option>
											<option value="CO" >Colorado</option>
											<option value="CT" >Connecticut</option>
											<option value="DE" >Delaware</option>
											<option value="DC" >District of Columbia</option>
											<option value="FL" >Florida</option>
											<option value="GA" >Georgia</option>
											<option value="HI" >Hawaii</option>
											<option value="ID" >Idaho</option>
											<option value="IL" >Illinois</option>
											<option value="IN" >Indiana</option>
											<option value="IA" >Iowa</option>
											<option value="KS" >Kansas</option>
											<option value="KY" >Kentucky</option>
											<option value="LA" >Louisiana</option>
											<option value="ME" >Maine</option>
											<option value="MD" >Maryland</option>
											<option value="MA" >Massachusetts</option>
											<option value="MI" >Michigan</option>
											<option value="MN" >Minnesota</option>
											<option value="MS" >Mississippi</option>
											<option value="MO" >Missouri</option>
											<option value="MT" >Montana</option>
											<option value="NE" >Nebraska</option>
											<option value="NV" >Nevada</option>
											<option value="NH" >New Hampshire</option>
											<option value="NJ" >New Jersey</option>
											<option value="NM" >New Mexico</option>
											<option value="NY" >New York</option>
											<option value="NC" >North Carolina</option>
											<option value="ND" >North Dakota</option>
											<option value="OH" >Ohio</option>
											<option value="OK" >Oklahoma</option>
											<option value="OR" >Oregon</option>
											<option value="PA" >Pennsylvania</option>
											<option value="RI" >Rhode Island</option>
											<option value="SC" >South Carolina</option>
											<option value="SD" >South Dakota</option>
											<option value="TN" >Tennessee</option>
											<option value="TX" >Texas</option>
											<option value="UT" >Utah</option>
											<option value="VT" >Vermont</option>
											<option value="VA" >Virginia</option>
											<option value="WA" >Washington</option>
											<option value="WV" >West Virginia</option>
											<option value="WI" >Wisconsin</option>
											<option value="WY" >Wyoming</option>
										</select>
									</td>
								</tr>
								<tr>
									<td class='active col-md-4'>Non USA Province:</td>
									<td>
										<?php
											$data	= array('name'=>'province',  'class'=>'form-control');
											echo form_input($data); ?>
									</td>
								</tr>
								<tr>
									<td class='active col-md-4'>ZIP / Postal Code:</td>
									<td>
										<?php
											$data	= array('name'=>'zip',  'class'=>'form-control');
											echo form_input($data); ?>
									</td>
								</tr>
								<tr>
									<td class='active col-md-4'>Country:</td>
									<td>
										<?php
											$country = array(
												"" => "Select Country",
												"AF" => "Afghanistan",
												"AL" => "Albania",
												"DZ" => "Algeria",
												"AS" => "American Samoa",
												"AD" => "Andorra",
												"AO" => "Angola",
												"AI" => "Anguilla",
												"AQ" => "Antarctica",
												"AG" => "Antigua and Barbuda",
												"AR" => "Argentina",
												"AM" => "Armenia",
												"AW" => "Aruba",
												"AU" => "Australia",
												"AT" => "Austria",
												"AZ" => "Azerbaijan",
												"BS" => "Bahamas",
												"BH" => "Bahrain",
												"BD" => "Bangladesh",
												"BB" => "Barbados",
												"BY" => "Belarus",
												"BE" => "Belgium",
												"BZ" => "Belize",
												"BJ" => "Benin",
												"BM" => "Bermuda",
												"BT" => "Bhutan",
												"BO" => "Bolivia",
												"BA" => "Bosnia and Herzegowina",
												"BW" => "Botswana",
												"BV" => "Bouvet Island",
												"BR" => "Brazil",
												"IO" => "British Indian Ocean Territory",
												"BN" => "Brunei Darussalam",
												"BG" => "Bulgaria",
												"BF" => "Burkina Faso",
												"BI" => "Burundi",
												"KH" => "Cambodia",
												"CM" => "Cameroon",
												"CA" => "Canada",
												"CV" => "Cape Verde",
												"KY" => "Cayman Islands",
												"CF" => "Central African Republic",
												"TD" => "Chad",
												"CL" => "Chile",
												"CN" => "China",
												"CX" => "Christmas Island",
												"CC" => "Cocos (Keeling) Islands",
												"CO" => "Colombia",
												"KM" => "Comoros",
												"CG" => "Congo",
												"CK" => "Cook Islands",
												"CR" => "Costa Rica",
												"CI" => "Cote D'Ivoire",
												"HR" => "Croatia",
												"CU" => "Cuba",
												"CY" => "Cyprus",
												"CZ" => "Czech Republic",
												"DK" => "Denmark",
												"DJ" => "Djibouti",
												"DM" => "Dominica",
												"DO" => "Dominican Republic",
												"TL" => "East Timor",
												"EC" => "Ecuador",
												"EG" => "Egypt",
												"SV" => "El Salvador",
												"GQ" => "Equatorial Guinea",
												"ER" => "Eritrea",
												"EE" => "Estonia",
												"ET" => "Ethiopia",
												"FK" => "Falkland Islands (Malvinas)",
												"FO" => "Faroe Islands",
												"FJ" => "Fiji",
												"FI" => "Finland",
												"FR" => "France",
												"FX" => "France, Metropolitan",
												"GF" => "French Guiana",
												"PF" => "French Polynesia",
												"TF" => "French Southern Territories",
												"GA" => "Gabon",
												"GM" => "Gambia",
												"GE" => "Georgia",
												"DE" => "Germany",
												"GH" => "Ghana",
												"GI" => "Gibraltar",
												"GR" => "Greece",
												"GL" => "Greenland",
												"GD" => "Grenada",
												"GP" => "Guadeloupe",
												"GU" => "Guam",
												"GT" => "Guatemala",
												"GN" => "Guinea",
												"GW" => "Guinea-bissau",
												"GY" => "Guyana",
												"HT" => "Haiti",
												"HM" => "Heard and Mc Donald Islands",
												"HN" => "Honduras",
												"HK" => "Hong Kong",
												"HU" => "Hungary",
												"IS" => "Iceland",
												"IN" => "India",
												"ID" => "Indonesia",
												"IR" => "Iran (Islamic Republic of)",
												"IQ" => "Iraq",
												"IE" => "Ireland",
												"IL" => "Israel",
												"IT" => "Italy",
												"JM" => "Jamaica",
												"JP" => "Japan",
												"JO" => "Jordan",
												"KZ" => "Kazakhstan",
												"KE" => "Kenya",
												"KI" => "Kiribati",
												"KP" => "Korea, Democratic People's Republic of",
												"KR" => "Korea, Republic of",
												"KW" => "Kuwait",
												"KG" => "Kyrgyzstan",
												"LA" => "Lao People's Democratic Republic",
												"LV" => "Latvia",
												"LB" => "Lebanon",
												"LS" => "Lesotho",
												"LR" => "Liberia",
												"LY" => "Libyan Arab Jamahiriya",
												"LI" => "Liechtenstein",
												"LT" => "Lithuania",
												"LU" => "Luxembourg",
												"MO" => "Macau",
												"MK" => "Macedonia, The Former Yugoslav Republic of",
												"MG" => "Madagascar",
												"MW" => "Malawi",
												"MY" => "Malaysia",
												"MV" => "Maldives",
												"ML" => "Mali",
												"MT" => "Malta",
												"MH" => "Marshall Islands",
												"MQ" => "Martinique",
												"MR" => "Mauritania",
												"MU" => "Mauritius",
												"YT" => "Mayotte",
												"MX" => "Mexico",
												"FM" => "Micronesia, Federated States of",
												"MD" => "Moldova, Republic of",
												"MC" => "Monaco",
												"MN" => "Mongolia",
												"MS" => "Montserrat",
												"MA" => "Morocco",
												"MZ" => "Mozambique",
												"MM" => "Myanmar",
												"NA" => "Namibia",
												"NR" => "Nauru",
												"NP" => "Nepal",
												"NL" => "Netherlands",
												"AN" => "Netherlands Antilles",
												"NC" => "New Caledonia",
												"NZ" => "New Zealand",
												"NI" => "Nicaragua",
												"NE" => "Niger",
												"NG" => "Nigeria",
												"NU" => "Niue",
												"NF" => "Norfolk Island",
												"MP" => "Northern Mariana Islands",
												"NO" => "Norway",
												"OM" => "Oman",
												"PK" => "Pakistan",
												"PW" => "Palau",
												"PA" => "Panama",
												"PG" => "Papua New Guinea",
												"PY" => "Paraguay",
												"PE" => "Peru",
												"PH" => "Philippines",
												"PN" => "Pitcairn",
												"PL" => "Poland",
												"PT" => "Portugal",
												"PR" => "Puerto Rico",
												"QA" => "Qatar",
												"RE" => "Reunion",
												"RO" => "Romania",
												"RU" => "Russian Federation",
												"RW" => "Rwanda",
												"KN" => "Saint Kitts and Nevis",
												"LC" => "Saint Lucia",
												"VC" => "Saint Vincent and the Grenadines",
												"WS" => "Samoa",
												"SM" => "San Marino",
												"ST" => "Sao Tome and Principe",
												"SA" => "Saudi Arabia",
												"SN" => "Senegal",
												"SC" => "Seychelles",
												"SL" => "Sierra Leone",
												"SG" => "Singapore",
												"SK" => "Slovakia (Slovak Republic)",
												"SI" => "Slovenia",
												"SB" => "Solomon Islands",
												"SO" => "Somalia",
												"ZA" => "South Africa",
												"GS" => "South Georgia and the South Sandwich Islands",
												"ES" => "Spain",
												"LK" => "Sri Lanka",
												"SH" => "St. Helena",
												"PM" => "St. Pierre and Miquelon",
												"SD" => "Sudan",
												"SR" => "Suriname",
												"SJ" => "Svalbard and Jan Mayen Islands",
												"SZ" => "Swaziland",
												"SE" => "Sweden",
												"CH" => "Switzerland",
												"SY" => "Syrian Arab Republic",
												"TW" => "Taiwan",
												"TJ" => "Tajikistan",
												"TZ" => "Tanzania, United Republic of",
												"TH" => "Thailand",
												"TG" => "Togo",
												"TK" => "Tokelau",
												"TO" => "Tonga",
												"TT" => "Trinidad and Tobago",
												"TN" => "Tunisia",
												"TR" => "Turkey",
												"TM" => "Turkmenistan",
												"TC" => "Turks and Caicos Islands",
												"TV" => "Tuvalu",
												"UG" => "Uganda",
												"UA" => "Ukraine",
												"AE" => "United Arab Emirates",
												"GB" => "United Kingdom",
												"US" => "United States",
												"UM" => "United States Minor Outlying Islands",
												"UY" => "Uruguay",
												"UZ" => "Uzbekistan",
												"VU" => "Vanuatu",
												"VA" => "Vatican City State (Holy See)",
												"VE" => "Venezuela",
												"VN" => "Viet Nam",
												"VG" => "Virgin Islands (British)",
												"VI" => "Virgin Islands (U.S.)",
												"WF" => "Wallis and Futuna Islands",
												"EH" => "Western Sahara",
												"YE" => "Yemen",
												"RS" => "Serbia",
												"CD" => "The Democratic Republic of Congo",
												"ZM" => "Zambia",
												"ZW" => "Zimbabwe",
												"JE" => "Jersey",
												"BL" => "St. Barthelemy",
												"XU" => "St. Eustatius",
												"XC" => "Canary Islands",
												"ME" => "Montenegro"
											);
						 					echo form_dropdown('country', $country, '', 'class="form-control drp"'); 
						 
										?>
									</td>
								</tr>
								<tr>
									<td class="active">Phone:</td>
									<td>
										<?php
											$data	= array('name'=>'phone',  'class'=>'form-control');
											echo form_input($data); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Fax:</td>
									<td>
										<?php
											$data	= array('name'=>'fax',  'class'=>'form-control');
											echo form_input($data); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Email:</td>
									<td>
										<?php
											$data	= array('name'=>'email',  'class'=>'form-control');
											echo form_input($data); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Password:</td>
									<td>
										<?php
											$data	= array('name'=>'password', 'id'=>'password', 'value'=>'', 'type'=>'password', 'class'=>'form-control');
											echo form_input($data); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Confirm Password:</td>
									<td>
										<?php
											$data	= array('name'=>'confirm_password', 'id'=>'confirm_password', 'value'=>'', 'type'=>'password', 'class'=>'form-control');
											echo form_input($data); ?>
									</td>
								</tr>
								<tr>
									<td class="active">Client Notes</td>
									<td class="active">
										<?php
											$data	= array('name'=>'client_notes',  'class'=>'form-control', 'rows'=>5);
											echo form_textarea($data);
											?>
									</td>
								</tr>
								<tr>
									<td class="active">Admin Notes</td>
									<td class="active">
										<?php
											$data	= array('name'=>'admin_notes',  'class'=>'form-control', 'rows'=>5);
											echo form_textarea($data);
											?>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<p class="pull-right">
						<input type="submit" id="submit" value="Save Changes" class='btn btn-success'>
					</p>
				</div>
		  	</div>
		</div>
	</div>
</div>
</form>
<?php include('partials_admin/footer.php'); ?>
<script type="text/javascript">
	
	$(document).ready(function(){
				$('#selecctall').click(function() {  //on click 
			        if(this.checked) { // check select status
			            $('.cb1').each(function() { //loop through each checkbox
			                this.checked = true;  //select all checkboxes with class "cb1"               
			            });
			        }else{
			            $('.cb1').each(function() { //loop through each checkbox
			                this.checked = false; //deselect all checkboxes with class "cb1"                       
			            });         
			        }
			    });

	});
</script>