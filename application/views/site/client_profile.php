<?php include('partials_front/header.php'); ?>
<div class="row">
  <form action="<?php echo base_url('index.php').'/client_profile/save/'.$client_info->client_id ?>" id="edit" method="post">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
				<?php if ($this->session->flashdata('message')):?>
	                <div class="alert alert-success">
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
			<div class="panel col-md-12">
			  	<div class="panel-heading">
				    <h3 class="panel-title">
				    	<b>Manage Client</b>&nbsp; <i class='ion-chevron-right'></i>&nbsp; <?php echo '<span class="text-info">'.$client_info->first_name.' '.$client_info->last_name.'</span>'; ?>
				    	
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
			  	<div class="panel-body">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td class='active col-md-4'>Last Logged In:</td>
										<?php $date_format = $this->Config->get_data(); ?>
										<td><?php echo date($date_format->date_format,$client_info->last_logged); ?></td>
									</tr>
									
									<tr>
										<td class='active col-md-4'>First Name:</td>
										<td>
											<?php
												$data	= array('name'=>'first_name', 'value'=>set_value('first_name', $client_info->first_name), 'class'=>'form-control');
												echo form_input($data); ?>
										</td>
									</tr>
									<tr>
										<td class='active col-md-4'>Last Name:</td>
										<td>
											<?php
												$data	= array('name'=>'last_name', 'value'=>set_value('last_name', $client_info->last_name), 'class'=>'form-control');
												echo form_input($data); ?>
										</td>
									</tr>
									<tr>
										<td class='active col-md-4'>Organization:</td>
										<td>
											<?php
												$data	= array('name'=>'org', 'value'=>set_value('org', $client_info->org), 'class'=>'form-control');
												echo form_input($data); ?>
										</td>
									</tr>
									<tr>
										<td class='active col-md-4'>Address:</td>
										<td>
											<?php
												$data	= array('name'=>'address_1', 'value'=>set_value('address_1', $client_info->address_1), 'class'=>'form-control');
												echo form_input($data); ?>
										</td>
									</tr>
									<tr>
										<td class='active col-md-4'>City:</td>
										<td>
											<?php
												$data	= array('name'=>'city', 'value'=>set_value('city', $client_info->city), 'class'=>'form-control');
												echo form_input($data); ?>
										</td>
									</tr>
									<tr>
										<td class='active col-md-4'>USA State:</td>
										<td>
											<select name="state" id="state" class="form-control drp">
												<option value="" <?php echo set_select('state', '', ($client_info->state == '')); ?> >* No state required</option>
												<option value="AE" <?php echo set_select('state', 'AE', ($client_info->state == 'AE')); ?> >AE-APO</option>
												<option value="AL" <?php echo set_select('state', 'AL', ($client_info->state == 'AL')); ?> >Alabama</option>
												<option value="AK" <?php echo set_select('state', 'AK', ($client_info->state == 'AK')); ?> >Alaska</option>
												<option value="AZ" <?php echo set_select('state', 'AZ', ($client_info->state == 'AZ')); ?> >Arizona</option>
												<option value="AR" <?php echo set_select('state', 'AR', ($client_info->state == 'AR')); ?> >Arkansas</option>
												<option value="CA" <?php echo set_select('state', 'CA', ($client_info->state == 'CA')); ?> >California</option>
												<option value="CO" <?php echo set_select('state', 'CO', ($client_info->state == 'CO')); ?> >Colorado</option>
												<option value="CT" <?php echo set_select('state', 'CT', ($client_info->state == 'CT')); ?> >Connecticut</option>
												<option value="DE" <?php echo set_select('state', 'DE', ($client_info->state == 'DE')); ?> >Delaware</option>
												<option value="DC" <?php echo set_select('state', 'DC', ($client_info->state == 'DC')); ?> >District of Columbia</option>
												<option value="FL" <?php echo set_select('state', 'FL', ($client_info->state == 'FL')); ?> >Florida</option>
												<option value="GA" <?php echo set_select('state', 'GA', ($client_info->state == 'GA')); ?> >Georgia</option>
												<option value="HI" <?php echo set_select('state', 'HI', ($client_info->state == 'HI')); ?> >Hawaii</option>
												<option value="ID" <?php echo set_select('state', 'ID', ($client_info->state == 'ID')); ?> >Idaho</option>
												<option value="IL" <?php echo set_select('state', 'IL', ($client_info->state == 'IL')); ?> >Illinois</option>
												<option value="IN" <?php echo set_select('state', 'IN', ($client_info->state == 'IN')); ?> >Indiana</option>
												<option value="IA" <?php echo set_select('state', 'IA', ($client_info->state == 'IA')); ?> >Iowa</option>
												<option value="KS" <?php echo set_select('state', 'KS', ($client_info->state == 'KS')); ?> >Kansas</option>
												<option value="KY" <?php echo set_select('state', 'KY', ($client_info->state == 'KY')); ?> >Kentucky</option>
												<option value="LA" <?php echo set_select('state', 'LA', ($client_info->state == 'LA')); ?> >Louisiana</option>
												<option value="ME" <?php echo set_select('state', 'ME', ($client_info->state == 'ME')); ?> >Maine</option>
												<option value="MD" <?php echo set_select('state', 'MD', ($client_info->state == 'MD')); ?> >Maryland</option>
												<option value="MA" <?php echo set_select('state', 'MA', ($client_info->state == 'MA')); ?> >Massachusetts</option>
												<option value="MI" <?php echo set_select('state', 'MI', ($client_info->state == 'MI')); ?> >Michigan</option>
												<option value="MN" <?php echo set_select('state', 'MN', ($client_info->state == 'MN')); ?> >Minnesota</option>
												<option value="MS" <?php echo set_select('state', 'MS', ($client_info->state == 'MS')); ?> >Mississippi</option>
												<option value="MO" <?php echo set_select('state', 'MO', ($client_info->state == 'MO')); ?> >Missouri</option>
												<option value="MT" <?php echo set_select('state', 'MT', ($client_info->state == 'MT')); ?> >Montana</option>
												<option value="NE" <?php echo set_select('state', 'NE', ($client_info->state == 'NE')); ?> >Nebraska</option>
												<option value="NV" <?php echo set_select('state', 'NV', ($client_info->state == 'NV')); ?> >Nevada</option>
												<option value="NH" <?php echo set_select('state', 'NH', ($client_info->state == 'NH')); ?> >New Hampshire</option>
												<option value="NJ" <?php echo set_select('state', 'NJ', ($client_info->state == 'NJ')); ?> >New Jersey</option>
												<option value="NM" <?php echo set_select('state', 'NM', ($client_info->state == 'NM')); ?> >New Mexico</option>
												<option value="NY" <?php echo set_select('state', 'NY', ($client_info->state == 'NY')); ?> >New York</option>
												<option value="NC" <?php echo set_select('state', 'NC', ($client_info->state == 'NC')); ?> >North Carolina</option>
												<option value="ND" <?php echo set_select('state', 'ND', ($client_info->state == 'ND')); ?> >North Dakota</option>
												<option value="OH" <?php echo set_select('state', 'OH', ($client_info->state == 'OH')); ?> >Ohio</option>
												<option value="OK" <?php echo set_select('state', 'OK', ($client_info->state == 'OK')); ?> >Oklahoma</option>
												<option value="OR" <?php echo set_select('state', 'OR', ($client_info->state == 'OR')); ?> >Oregon</option>
												<option value="PA" <?php echo set_select('state', 'PA', ($client_info->state == 'PA')); ?> >Pennsylvania</option>
												<option value="RI" <?php echo set_select('state', 'RI', ($client_info->state == 'RI')); ?> >Rhode Island</option>
												<option value="SC" <?php echo set_select('state', 'SC', ($client_info->state == 'SC')); ?> >South Carolina</option>
												<option value="SD" <?php echo set_select('state', 'SD', ($client_info->state == 'SD')); ?> >South Dakota</option>
												<option value="TN" <?php echo set_select('state', 'TN', ($client_info->state == 'TN')); ?> >Tennessee</option>
												<option value="TX" <?php echo set_select('state', 'TX', ($client_info->state == 'TX')); ?> >Texas</option>
												<option value="UT" <?php echo set_select('state', 'UT', ($client_info->state == 'UT')); ?> >Utah</option>
												<option value="VT" <?php echo set_select('state', 'VT', ($client_info->state == 'VT')); ?> >Vermont</option>
												<option value="VA" <?php echo set_select('state', 'VA', ($client_info->state == 'VA')); ?> >Virginia</option>
												<option value="WA" <?php echo set_select('state', 'WA', ($client_info->state == 'WA')); ?> >Washington</option>
												<option value="WV" <?php echo set_select('state', 'WV', ($client_info->state == 'WV')); ?> >West Virginia</option>
												<option value="WI" <?php echo set_select('state', 'WI', ($client_info->state == 'WI')); ?> >Wisconsin</option>
												<option value="WY" <?php echo set_select('state', 'WY', ($client_info->state == 'WY')); ?> >Wyoming</option>
											</select>
										</td>
									</tr>
									<tr>
										<td class='active col-md-4'>Non USA Province:</td>
										<td>
											<?php
												$data	= array('name'=>'province', 'value'=>set_value('province', $client_info->province), 'class'=>'form-control');
												echo form_input($data); ?>
										</td>
									</tr>
									<tr>
										<td class='active col-md-4'>ZIP / Postal Code:</td>
										<td>
											<?php
												$data	= array('name'=>'zip', 'value'=>set_value('zip', $client_info->zip), 'class'=>'form-control');
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
							 					echo form_dropdown('country', $country, $client_info->country, 'class="form-control drp"'); 
							 
											?>
										</td>
									</tr>
									<tr>
										<td class="active">Phone:</td>
										<td>
											<?php
												$data	= array('name'=>'phone', 'value'=>set_value('phone', $client_info->phone), 'class'=>'form-control');
												echo form_input($data); ?>
										</td>
									</tr>
									<tr>
										<td class="active">Fax:</td>
										<td>
											<?php
												$data	= array('name'=>'fax', 'value'=>set_value('fax', $client_info->fax), 'class'=>'form-control');
												echo form_input($data); ?>
										</td>
									</tr>
									<tr>
										<td class="active">Email:</td>
										<td>
											<?php
												$data	= array('name'=>'email', 'disabled'=>'true', 'value'=>set_value('email', $client_info->email), 'class'=>'form-control');
												echo form_input($data); ?>
										</td>
									</tr>
									<tr>
										<td class="active">Client Notes</td>
										<td class="active">
											<?php
												$data	= array('name'=>'client_notes', 'value'=>set_value('client_notes', $client_info->staff_notes), 'class'=>'form-control', 'rows'=>5);
												echo form_textarea($data);
												?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						
						<p class="text-center">
							<input type="submit" id="submit" value="Save Changes" class='btn btn-success'>
						</p>
					</div>
			  	</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</form>
</div>
<?php include('partials_front/footer.php'); ?>