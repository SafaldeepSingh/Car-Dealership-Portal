<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
	div.social-icons .fab {
		font-size: 28px;
		color: #8c1319;
	}
	.languageBar a.desktop_lang_button {
		color: #8c1319;
	}
	.ctabox--cell__11,.ctabox--cell__12,.ctabox--cell__13 {
		/*color: #ffffff;*/
		background: #8c1319;
	}
	.ctabox--cell__11 .ctabox--button a
	,.ctabox--cell__12 .ctabox--button a
	,.ctabox--cell__13 .ctabox--button a {
		color: #ffffff;
		background: #8c1319;
		border-color: #ffffff;
	}
	.caroussel ul li div a span.price{color: #8c1319!important;}
	.up_menu ul#nav li:hover > a, .up_menu ul#nav li.isOpen > a{background: #8c1319}
	.ctabox--cell__11:hover,.ctabox--cell__12:hover,.ctabox--cell__13:hover {
		color: #8c1319;
	}
	.ctabox--cell__11:hover .ctabox--button a
	,.ctabox--cell__12:hover .ctabox--button a
	,.ctabox--cell__13:hover .ctabox--button a{
		color: #8c1319;
		border-color: #8C1319;
	}
</style>
<style>
	.desktop_lang_button.active{
		background: #8C1319!important;
		color: white!important;
	}
</style>
<style>
	.menu-address-desc {
		padding: 20px;
	}
</style>
<div class="mainDiv-wrapper">
	<div id="mainDiv" class="wrapper MainBoxLayer container">
		<input type='hidden' id='textLang' value='ENGLISH'/>
		<input type='hidden' value='1' id='new_translated_titles'/>
		<input type='hidden' value='ENGLISH' id='activesitelanguage'/>
		<div class='languageBar ' id='languageChangerDiv'>
			<div>
				<ul class='idNav1'>
					<li class='top' style='z-index: 99;'>
						<a href="#" onclick="loadLang('french')"
						   class="desktop_lang_button <?php if($this->session->userdata('lang')=='french') echo 'active' ?>" title="FR">
							<span class="desktop_lang_button_text">FR</span>
						</a>
						<a href="#" onclick="loadLang('english')"
						   class="desktop_lang_button <?php if($this->session->userdata('lang')!='french') echo 'active' ?>" title="FR">
<!--							<span class="desktop_lang_button active" title="EN">-->
	                        <span class="desktop_lang_button_text">EN</span>
                    </span>
						</a>
					</li>
				</ul>
			</div>
			<div id='social_media_icons_div'>
				<a href="https://www.facebook.com/1468703890051730/" target="_blank" rel="nofollow"
				   class="social-link -pr0"
				   aria-label="Facebook" data-tooltip="Facebook">
					<div class="social-icons">
						<span class="fab fa-facebook" aria-hidden="true"></span>
					</div>
				</a><a href="https://instagram.com/seanautosales2018?igshid=jb56cwn3taex" target="_blank" rel="nofollow"
					   class="social-link -pr0"
					   aria-label="Instagram" data-tooltip="Instagram">
					<div class="social-icons">
						<span class="fab fa-instagram" aria-hidden="true"></span>
					</div>
				</a></div>
		</div>
		<!-- HOMEPAGE_ENG => / || HOMEPAGE FRE => /fr/ -->

		<div class="v-card top_bg " style="background:none;">
			<div class="header-section">
				<div class="header-image-wrapper">
					<a href="<?= base_url() ?>" style="text-decoration: none;">
						<img alt='Sean Auto Sales' class="liveload photo image-padding" id="dealer_logo"
							 src="<?= base_url() ?>assets/images/logo.jpg"/>
					</a>
				</div>
			</div>


			<div class="header-section">
				<div>

					<div class="phone phone_right " style="color: #8C1319;">
						<div class="fn org" style='font-size: 22px;color: #000000;'>Sean Auto Sales</div>
						<div style="font-size: 14px;" class="adr">
							<a href="https://www.google.com/maps/place/Sean+Auto+Sales/@45.4627603,-73.6191778,15z/data=!4m5!3m4!1s0x0:0xb989455422d246b9!8m2!3d45.4627603!4d-73.6191778"
							   target="_blank" style="text-decoration:none;color:#8C1319;">
								<span class="street-address" itemprop="streetAddress">6290 Rue Saint-Jacques</span>,
								<span class="locality" style="margin-left:5px" itemprop="addressLocality">Montr&eacute;al</span>,
								<span class="region" style="margin-left:5px" itemprop="addressRegion">QC</span>,
								<span class="postal-code" style="margin-left:5px" itemprop="postalCode">H4B 1T6</span>
							</a>
						</div>
						<div>
							<!--							<meta itemprop="latitude" content="45.4633700000" />-->
							<!--							<meta itemprop="longitude" content="-73.6180800000" />-->
						</div>

						<div class="phone_text icon-text" style="color: #8C1319;font-size: 14px;">
							<div style="display:inline-block">
								<span style="padding-right:5px;" class="fa fa-envelope" aria-hidden="true"></span>
								<span class=' '>
									<a href='mailto:seanautosales@bellnet.ca' class='phone-link'>
										seanautosales@bellnet.ca
									</a>
								</span>
							</div>
						</div>
						<div class="phone_text icon-text" style="color: #8C1319;font-size: 14px;">

							<div style="display:inline-block">
								<span style="padding-right:5px;" class="fa fa-phone" aria-hidden="true"></span> <span
										itemprop="telephone" class='extendedPhoneTrigger '><a href='tel:514 951-0646'
																							  class='phone-link'>514 951-0646</a></span>
								<div class="extendedPhone" style="display: none;">
									<div><label><?=$this->lang->line('sales')?>: <span class="tel -ml10"><a href='tel:514 951-0646'
																				  class='phone-link'>514 951-0646</a> <br></span></label>
									</div>
									<div><label><?=$this->lang->line('service')?>: <span class="tel -ml10"><a href='tel:514 951-0646'
																					class='phone-link'>514 951-0646</a> <br></span></label>
									</div>
									<div><label>Fax: <span class="tel -ml10"><a href='fax:514 486-5670'
																				class='phone-link'>514 486-5670</a> <br></span></label>
									</div>
									<div class="phoneNote"></div>
									<!-- OO::5c673958f30d6f595743d33c376b5204 -->
								</div>
							</div>
							<span style="font-size:16px;" class="fa fa-caret-down" aria-hidden="true"></span>


						</div>


					</div>

				</div>
			</div>


		</div>
		<div class="clr"></div>
		<div class="clr"></div>
		<div style="" class="up_menu  ENGLISH img_menu menu5 full_width">
			<div style="" class='S100PercentWidth'>
				<div id="fullWidthMenuBar"
					 style="height:100%;position:absolute;bottom:0;background:inherit;z-index:-1;"></div>
				<ul id="nav" class="">
					<div id="menu-specs-template" class="menu-tech-specs">
						<div class="menu-specs-title"><span class="arrow arrow-large arrow-right mr-15"></span></div>
						<ul class="menu-specs-list">
							<li><a href="#" class="menu-spec-link"> <span class="arrow arrow-right mr-15"></span>Technical
									Specs </a></li>
							<li class="divider"></li>
							<li><strong>Price</strong> <br/><span class="menu-spec-price">$99,999</span></li>
							<li><strong>Power</strong> <br/><span class="menu-spec-hp">999 hp @ 9999 rpm</span></li>
							<li><strong>Displacement</strong> <br/><span class="menu-spec-power">9.9 L/99</span></li>
							<li><strong>Fuel Consumption</strong> <br>City: <span
										class="menu-spec-fuel-city">99 mpg</span> <br>Highway: <span
										class="menu-spec-fuel-highway">99 mpg</span></li>
							<li><strong>Drive train</strong> <br/><span class="menu-spec-drivetrain">999 kph</span></li>
						</ul>
					</div>
					<li data-id="GP_yjexnzqzmezjgmja" id="MainMenu_GP_yjexnzqzmezjgmja" class="top lastMenu"><a
								class="top_link" href="<?= base_url() ?>insurance"><?=$this->lang->line('insurance')?></a></li>
					<li data-id="CONTACT" id="MainMenu_CONTACT" class="top hasItems">
						<a class="top_link" href="<?= base_url() ?>contactus"><?=$this->lang->line('contact_us')?></a>
						<ul class="sub contactus-form">
							<li data-id="600ac7323a9ee" id="MainMenu_600ac7323a9ee"
								class="contact-container black-text">
								<div style="width: 50%" class="col-third">
									<h5 class="title"><?=$this->lang->line('our_location')?></h5> <a href="#footerWrapper"
																							  id="menu-map-link"
																							  aria-label="Google Maps">
										<iframe width="100%" height="400" frameborder="0" style="border:0"
												src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11193.398546474606!2d-73.6191778!3d45.4627603!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb989455422d246b9!2sSean%20Auto%20Sales!5e0!3m2!1sen!2sca!4v1612111482072!5m2!1sen!2sca"
												allowfullscreen></iframe>
									</a></div>
								<div class="col-third express-form" style="display: none">
									<form id="quickEmailForm" class="col-md-3 menu hideOnPreLoad" action="#"><input
												type='hidden' id='expressSelectRequired' value="1"/> <input
												type='hidden' id='expressPhoneRequired' value="1"/> <input type="hidden"
																										   id="textSaveMailID"
																										   name="textSaveMailID"
																										   value="menuContactUs"/>
										<input type="hidden" id="textQuickEmailInfo" name="textQuickEmailInfo"
											   value="Information on {$LINKYEAR} {$LINKMAKE} {$LINKMODEL}"/> <input
												type='hidden' id='expresscartrim' value=''/> <input type='hidden'
																									id='expresscarvin'
																									value=''/> <input
												type='hidden' id='expresscarprice' value=''/> <input type='hidden'
																									 id='expresscarid'
																									 value=''/> <input
												type='hidden' id='expresscarmake' value=''/> <input type='hidden'
																									id='expresscarmodel'
																									value=''/> <input
												type='hidden' id='expresscaryear' value='0'/> <input type='hidden'
																									 id='expressstocknumber'
																									 value=''/> <input
												type='hidden' id='expressSendToEmail'
												value='sales@eleganceleasing.com'/> <input type='hidden'
																						   id='expressSendToEmailNEW'
																						   value=''/> <input
												type='hidden' id='expressSendToEmailADF' value=''/> <input type='hidden'
																										   id='expressSendToEmailADFNEW'
																										   value=''/>
										<input type='hidden' id='expressSendToEmailADFSERVICE' value=''/> <input
												type='hidden' id='expressInDemo' value='{$EXPRESSINDEMO}'/> <input
												type='hidden' id='printFlag' value='0'/> <input type='hidden'
																								id='expressDepartmentEmail_used'
																								value='sales@eleganceleasing.com'/><input
												type='hidden' id='expressDepartmentEmail_service'
												value='sales@eleganceleasing.com'/><input type='hidden'
																						  id='expressDepartmentEmail_parts'
																						  value='sales@eleganceleasing.com'/><input
												type='hidden' id='expressDepartmentEmail_finance'
												value='sales@eleganceleasing.com'/> <!-- PLACE 1-A -->
										<div>
											<div class="-pl20 -pr20">
												<div class="widget_express_mail_phone_title">514 951-0646</div>
												<div class="Recherche22 "><?=$this->lang->line('express_request')?></div>
												<table>
													<tr>
														<td><label for="quickEmailName" class="sr-only"><?=$this->lang->line('name')?></label>
															<input type='text' style='width:246px' id='quickEmailName'
																   name="name" placeholder='<?=$this->lang->line('name')?>'/></td>
													</tr>
													<tr>
														<td><label for="quickEmailTel" class="sr-only"><?=$this->lang->line('telephone')?></label>
															<input class="phone required" type='tel' style='width:246px'
																   id='quickEmailTel' name="tel"
																   placeholder='<?=$this->lang->line('telephone')?>'/></td>
													</tr>
													<tr>
														<td><label for="quickEmailAddr" class="sr-only"><?=$this->lang->line('email')?></label>
															<input type='email' style='width:246px' id='quickEmailAddr'
																   name="email" placeholder='<?=$this->lang->line('email')?>'/></td>
													</tr>
													<tr>
														<td><label for="quickEmailDepartment"
																   class="sr-only">Select</label> <select
																	style='width:226px' id="quickEmailDepartment">
																<option value='' selected><?=$this->lang->line('select')?></option>
																<option value='used'><?=$this->lang->line('sales_used')?></option>
																<option value='service'><?=$this->lang->line('service')?></option>
																<option value='finance'><?=$this->lang->line('financing')?></option>
															</select></td>
													</tr>
													<tr>
														<td><label for="quickEmailMsg" class="sr-only"><?=$this->lang->line('message')?></label>
															<textarea id='quickEmailMsg'
																	  class='textAreaQM -ml4 -fs13 -h32'
																	  style='width:258px;' rows='2' cols='20'
																	  placeholder='<?=$this->lang->line('message')?>'></textarea></td>
													</tr>
												</table>
												<div class="-pos-rel">
													<div style="display: none;"
														 class="-pos-abs MissingValidationMsg errorMsg"> Please complete
														all required fields
													</div>
													<div class="button_boxS2 __n" align='left'><input type="button"
																									  class="sendQuickEmail btn-default "
																									  value="<?=$this->lang->line('send')?>">
													</div>
												</div>
											</div>
										</div>
										<div id="menuContactUsDef" style="display:none">
											<div id="emailSubjectDef_menuContactUs" style="display:none">Lead: Request
												for contact
											</div>
											<div id="emailBodyDef_menuContactUs" style="display:none">Hello,<br/><br/>A
												potential client visiting your website has completed the contact
												form:<br/><br/><u>Visitor information</u>:<br/>Name:
												<strong>{$NAME}</strong><br/>Email: <strong><a href="mailto:{$EMAIL}">{$EMAIL}</a></strong><br/>Phone:
												<strong><a href="tel:{$EMAILPHONE}">{$EMAILPHONE}</a></strong>
												{$PHONE_VALIDATION_ATTEMPTS}<br/>City:
												<strong>{$EMAILCITY}</strong><br/><br/>Last vehicle viewed: <strong>{$LASTVEHICLEVIEWED}</strong><br/>Last
												vehicle configured: <strong>{$EMAILBUILDANDPRICE}</strong><br/><br/>Department:
												<strong>{$DEPARTMENT2}</strong><br/><br/><u>Visitor
													message</u>:<br/><strong>{$MESSAGE}</strong><br/><br/>
												<div style="##SEOBLOCKDISPLAY##">Media Source:
													<strong>{$UTMDETAILS}</strong><br/>Browser:
													<strong>{$USERAGENT}</strong><br/>Browsing History: <strong><a
																href="%7b%24UULINK%7d.html"
																style="color:black; text-decoration: none;">Click
															here</a></strong></div>
												<br/>{$DEALER_SENDTO}<p>Consent: <strong>{$CONSENT_DETAILS}</strong>{$PURCHASE_INTENT}
											</div>
										</div>
									</form>
								</div>
								<div style="width: 50%" class="col-third address">
									<div class="menu-address"><h5 class="title"><?=$this->lang->line('coordinates')?></h5>
										<div class="menu-address-desc"><span class="fa fa-map-marker"
																			 aria-hidden="true"></span>
											<div class="menu-address-wrapper"> Sean Auto Sales <br/> 6290 Rue
												Saint-Jacques <br/> Montreal, QC <br/> H4B 1T6 <br/></div>
											<div class="menu-phones">
												<div class="phone-wrapper">
													<span class="first">
														<span class="fa fa-envelope" aria-hidden="true"></span>
														Email:
													</span>
													<span class="second">
														<a href='mailto:seanautosales@bellnet.ca' class='phone-link'>seanautosales@bellnet.ca</a>
													</span>
													<br/>
													<span class="first">
														<span class="fa fa-phone" aria-hidden="true"></span>
														<?=$this->lang->line('sales')?>:
													</span>
													<span class="second">
														<a href='tel:514 951-0646' class='phone-link'>514 951-0646</a>
													</span>
													<br/>
													<span class="first">
														<span class="fa fa-phone" aria-hidden="true"></span><?=$this->lang->line('service')?>:
													</span>
													<span class="second">
														<a href='tel:514 951-0646' class='phone-link'>514 951-0646<br></a>
													</span>
													<br/>
													<span class="first">
														<span class="fa fa-fax" aria-hidden="true"></span>Fax:
													</span>
													<span class="second">
														<a href='fax:514 486-5670' class='phone-link'>514 486-5670<br></a>
													</span>
												</div>
											</div>
										</div>
										<div class="-fs10 -right" style="margin-right: 10px;"></div>
									</div>
									<ul>
										<li data-id="CONTACTUS" id="MainMenu_CONTACTUS"><a
													href="<?= base_url() ?>contactus"><?=$this->lang->line('more_details')?></a></li>
									</ul>
								</div>
							</li>
						</ul>
					</li>
					<li data-id="SERVICE" id="MainMenu_SERVICE" style="display: none" class="top hasItems">
						<a class="top_link" href="#"><?=$this->lang->line('service')?></a>
						<ul class="sub service-form">
							<li data-id="600ac7323a9cb" id="MainMenu_600ac7323a9cb">
								<div class="menu-service-wrapper">
									<div class="service-left"><h5 class="service-form-title">Book a Service Appointment
											now!</h5>
										<form action="#" class="short-service-form" data-form="menuService">
											<div style="width: 334px;">
												<div class="mailwidget--form-row -mb0">
													<div class="mailwidget--input-group"><label for="service__name"
																								class="mailwidget--label sr-only">Name</label>
														<input type="text" id="service__name" name="name"
															   class="required require-with-watermark ssf-name"
															   style="width: 330px"></div>
												</div>
												<div class="mailwidget--form-row -mb0">
													<div class="mailwidget--input-group"><label for="service__email"
																								class="mailwidget--label sr-only">Email</label>
														<input type="text" id="service__email"
															   class="required require-with-watermark email ssf-email"
															   style="width: 330px"></div>
												</div>
												<div class="mailwidget--form-row -mb0">
													<div class="mailwidget--input-group"><label for="service__phone"
																								class="mailwidget--label sr-only">Phone</label>
														<input type="text" id="service__phone" name="phone"
															   class="required required-phone require-with-watermark ssf-phone"
															   style="width: 330px"></div>
												</div>
												<div class="mailwidget--form-row -mb0">
													<div class="mailwidget--input-group"><label for="ssf-date"
																								class="mailwidget--label sr-only">Date
															and Time</label> <input type="text" id="ssf-date"
																					name="date1"
																					class="required require-with-watermark ssf-date"
																					style="width: 330px"> <span
																class="ssf-date-calendar fa fa-calendar"></span></div>
												</div>
												<div class="mailwidget--form-row -mb0">
													<div class="mailwidget--input-group"><label
																for="service__waitingonsite"
																class="mailwidget--label sr-only">Stay on site during
															appointment</label> <select name="waitingonsite"
																						id="service__waitingonsite"
																						style="width: 302px;">
															<option value="">Stay on site during appointment</option>
															<option value="Yes">Yes</option>
															<option value="No">No</option>
														</select></div>
												</div>
												<div class="mailwidget--form-row -mb0">
													<div class="mailwidget--input-group"><label for="service__mmy"
																								class="mailwidget--label sr-only">Make,
															Model and Year</label> <input type="text" id="service__mmy"
																						  class="required require-with-watermark ssf-vehicle"
																						  style="width: 330px"></div>
												</div>
												<div class="mailwidget--form-row -mb0">
													<div class="mailwidget--input-group"><label for="service__vin"
																								class="mailwidget--label sr-only">Vehicle
															Identification Number</label> <input type="text"
																								 id="service__vin"
																								 class="vin ssf-vin"
																								 maxlength="17"
																								 style="width: 330px">
													</div>
												</div>
												<div class="mailwidget--form-row -mb0">
													<div class="mailwidget--input-group"><label for="service__comment"
																								class="mailwidget--label sr-only">
															Work to be done </label> <textarea type="text"
																							   id="service__comment"
																							   class="required require-with-watermark ssf-comment"
																							   rows='3'
																							   style="width: 334px"></textarea>
													</div>
												</div>
											</div>
											<div class="ssf-submit"><input type="submit" class="btn-default "
																		   value="Book my appointment now!"></div>
											<input type='hidden' value='sales@eleganceleasing.com'
												   class='textSendToEmail'/>
											<input type='hidden' id='textMONTH_1' value='January'/><input type='hidden'
																										  id='textMONTH_10'
																										  value='October'/><input
													type='hidden' id='textMONTH_11' value='November'/><input
													type='hidden' id='textMONTH_12' value='December'/><input
													type='hidden' id='textMONTH_2' value='February'/><input
													type='hidden' id='textMONTH_3' value='March'/><input type='hidden'
																										 id='textMONTH_4'
																										 value='April'/><input
													type='hidden' id='textMONTH_5' value='May'/><input type='hidden'
																									   id='textMONTH_6'
																									   value='June'/><input
													type='hidden' id='textMONTH_7' value='July'/><input type='hidden'
																										id='textMONTH_8'
																										value='August'/><input
													type='hidden' id='textMONTH_9' value='September'/>
											<input id="SundaySchedule" type="hidden" value="closed"/><input
													id="MondaySchedule" type="hidden" starthour="09" startmin="00"
													endhour="17" endmin="30"/><input id="TuesdaySchedule" type="hidden"
																					 starthour="09" startmin="00"
																					 endhour="17" endmin="30"/><input
													id="WednesdaySchedule" type="hidden" starthour="09" startmin="00"
													endhour="17" endmin="30"/><input id="ThursdaySchedule" type="hidden"
																					 starthour="09" startmin="00"
																					 endhour="17" endmin="30"/><input
													id="FridaySchedule" type="hidden" starthour="09" startmin="00"
													endhour="17" endmin="30"/><input id="SaturdaySchedule" type="hidden"
																					 starthour="11" startmin="00"
																					 endhour="16" endmin="00"/>
											<input id="textClosed" type="hidden" value="Closed">
											<input id="textRdv" type="hidden" value="By appointment">
											<input id="textVisit" type="hidden" value="Visit dealer">
											<input id="allowToday" type="hidden" value="">
											<input id="minStartDays" type="hidden" value="0">
											<div style='display:none'>
												<div id='emailSubjectDef_menuService' style='display:none'>Lead: Service
													appointment request
												</div>
												<div id='emailBodyDef_menuService' style='display:none'>Hello,<br/><br/>A
													potential client visiting your website would like to take an
													appointment with the service department:<br/><br/><u>Vehicle
														information</u>:<br/>Brand: <strong>{$EMAILMAKE} {$EMAILMODEL}
														{$EMAILYEAR}</strong><br/>Color ext:
													<strong>{$COLOR}</strong><br/>VIN: <strong>{$VIN}</strong><br/>Plates:
													<strong>{$PLATES}</strong><br/>Kilometers:
													<strong>{$KM}</strong><br/><br/><u>Visitor message</u>:<br/><strong>{$QUESTIONS}</strong><br/><br/><u>Available
														dates for appointment</u>:<br/>1st choice:
													<strong>{$DATE1}</strong><br/>2nd choice: <strong>{$DATE2}</strong>{$SELECTEDSERVICES}<br/>Waiting
													on site : <strong>{$WAITINGONSITE}</strong><br/><br/><u>Visitor
														information</u>:<br/>Name: <strong>{$FNAME}
														{$LNAME}</strong><br/>Email: <strong><a href="mailto:{$EMAIL}">{$EMAIL}</a></strong><br/>Telephone:
													<strong><a href="tel:{$EMAILPHONE}">{$EMAILPHONE}</a></strong>
													{$PHONE_VALIDATION_ATTEMPTS}<br/><br/><u>Dealership</u> :<br/>Name :
													<strong>{$DEALERNAME}</strong><br/><br/>
													<div style="##SEOBLOCKDISPLAY##">Media Source:
														<strong>{$UTMDETAILS}</strong><br/>Browser:
														<strong>{$USERAGENT}</strong><br/>Browsing History: <strong><a
																	href="%7b%24UULINK%7d.html"
																	style="color:black; text-decoration: none;">Click
																here</a></strong></div>
													<br/>{$DEALER_SENDTO}<p>Consent: <strong>{$CONSENT_DETAILS}</strong>{$PURCHASE_INTENT}
												</div>
											</div>
										</form>
									</div>
									<div class="service-divider"></div>
									<div class="service-right"><h5 class="service-form-title">Quick Links</h5>
										<ul>
											<li data-id="APPOINT" id="MainMenu_APPOINT"><a
														href="requests/service-appointment.html">Request an
													appointment</a></li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li data-id="FINANCE" id="MainMenu_FINANCE" class="top"><a class="top_link"
																			   href="<?= base_url() ?>finance"><?= $this->lang->line('finance') ?></a>
					</li>
					<li data-id="USED" id="MainMenu_USED" class="top hasItems">
						<a class="top_link"
						   href="<?= base_url() ?>vehicles"><?= $this->lang->line('used_vehicles') ?></a>
						<ul class="sub slim-submenu">
							<li data-id="USED_SEARCHES" id="MainMenu_USED_SEARCHES" style="width: 33%"
								class="top firstMenu hasItems isBold">
								<a class="top_link isBold notClickable"
								   onclick="return false;" href="#"><?=$this->lang->line('quick_links')?></a>
								<ul class="sub slim-submenu">
									<li data-id="USED_ALLINV" id="MainMenu_USED_ALLINV" class="firstItem"><a
												href="<?= base_url() ?>vehicles">Full inventory (<span
													id="full-inventory-count"></span>)</a></li>
									<!--									<li data-id="USED_CERTIFIED_CARS" id="MainMenu_USED_CERTIFIED_CARS"><a href="used/certified.html">Certified vehicles (68)</a></li>-->
									<li data-id="USED_LESS15K" id="MainMenu_USED_LESS15K"><a
												href="<?= base_url() ?>vehicles?f=lt15">Under $15,000 (<span
													id="under-15k-count"></span>)</a></li>
									<li data-id="USED_LESS10K" id="MainMenu_USED_LESS10K"><a
												href="<?= base_url() ?>vehicles?f=lt10">Under $10,000 (<span
													id="under-10k-count"></span>)</a></li>
									<li data-id="USED_CAT_CAR" id="MainMenu_USED_CAT_CAR"><a
												href="<?= base_url() ?>vehicles?f=cars">Car (<span
													id="car-count"></span>)</a></li>
									<li data-id="USED_CAT_SUV" id="MainMenu_USED_CAT_SUV"><a
												href="<?= base_url() ?>vehicles?f=suv">SUV (<span id="suv-count"></span>)</a>
									</li>
									<li data-id="USED_CAT_HYBRID" id="MainMenu_USED_CAT_HYBRID"><a
												href="<?= base_url() ?>vehicles?f=hybrid">Hybrid (<span
													id="hybrid-count"></span>)</a></li>
									<li data-id="USED_CAT_CONVERTIBLE" id="MainMenu_USED_CAT_CONVERTIBLE"><a
												href="<?= base_url() ?>vehicles?f=convertible">Convertibles (<span
													id="convertible-count"></span>)</a></li>
									<!--									<li data-id="USED_OTHER" id="MainMenu_USED_OTHER" class="lastItem"><a href="used/search.html">Other models</a></li>-->
								</ul>
							</li>
							<li data-id="USED_SEARCHES" id="MainMenu_USED_SEARCHES" style="width: 33%"
								class="top firstMenu hasItems isBold">
								<a class="top_link isBold notClickable"
								   onclick="return false;" href="#"><?=$this->lang->line('our_top_brands')?></a>
								<ul class="sub slim-submenu" id="our-top-makes">
									<li data-id="USED_ALLINV" id="MainMenu_USED_ALLINV" class="firstItem"><a
												href="<?= base_url() ?>vehicles">Full inventory (<span
													id="full-inventory-count"></span>)</a></li>
									<li data-id="USED_LESS15K" id="MainMenu_USED_LESS15K"><a
												href="<?= base_url() ?>vehicles?f=lt15">Under $15,000 (<span
													id="under-15k-count"></span>)</a></li>
									<li data-id="USED_LESS10K" id="MainMenu_USED_LESS10K"><a
												href="<?= base_url() ?>vehicles?f=lt10">Under $10,000 (<span
													id="under-10k-count"></span>)</a></li>
									<li data-id="USED_CAT_CAR" id="MainMenu_USED_CAT_CAR"><a
												href="<?= base_url() ?>vehicles?f=cars">Car (<span
													id="car-count"></span>)</a></li>
									<li data-id="USED_CAT_SUV" id="MainMenu_USED_CAT_SUV"><a
												href="<?= base_url() ?>vehicles?f=suv">SUV (<span id="suv-count"></span>)</a>
									</li>
									<li data-id="USED_CAT_HYBRID" id="MainMenu_USED_CAT_HYBRID"><a
												href="<?= base_url() ?>vehicles?f=hybrid">Hybrid (<span
													id="hybrid-count"></span>)</a></li>
									<li data-id="USED_CAT_CONVERTIBLE" id="MainMenu_USED_CAT_CONVERTIBLE"><a
												href="<?= base_url() ?>vehicles?f=convertible">Convertibles (<span
													id="convertible-count"></span>)</a></li>
									<!--									<li data-id="USED_OTHER" id="MainMenu_USED_OTHER" class="lastItem"><a href="used/search.html">Other models</a></li>-->
								</ul>
							</li>
							<li data-id="USED_SEARCHES" id="MainMenu_USED_SEARCHES" style="width: 33%"
								class="top firstMenu hasItems isBold">
								<a class="top_link isBold notClickable"
								   onclick="return false;" href="#"><?=$this->lang->line('our_top_models')?></a>
								<ul class="sub slim-submenu" id="our-top-models">
									<li data-id="USED_ALLINV" id="MainMenu_USED_ALLINV" class="firstItem"><a
												href="<?= base_url() ?>vehicles">Full inventory (<span
													id="full-inventory-count"></span>)</a></li>
									<!--									<li data-id="USED_CERTIFIED_CARS" id="MainMenu_USED_CERTIFIED_CARS"><a href="used/certified.html">Certified vehicles (68)</a></li>-->
									<li data-id="USED_LESS15K" id="MainMenu_USED_LESS15K"><a
												href="<?= base_url() ?>vehicles?f=lt15">Under $15,000 (<span
													id="under-15k-count"></span>)</a></li>
									<li data-id="USED_LESS10K" id="MainMenu_USED_LESS10K"><a
												href="<?= base_url() ?>vehicles?f=lt10">Under $10,000 (<span
													id="under-10k-count"></span>)</a></li>
									<li data-id="USED_CAT_CAR" id="MainMenu_USED_CAT_CAR"><a
												href="<?= base_url() ?>vehicles?f=cars">Car (<span
													id="car-count"></span>)</a></li>
									<li data-id="USED_CAT_SUV" id="MainMenu_USED_CAT_SUV"><a
												href="<?= base_url() ?>vehicles?f=suv">SUV (<span id="suv-count"></span>)</a>
									</li>
									<li data-id="USED_CAT_HYBRID" id="MainMenu_USED_CAT_HYBRID"><a
												href="<?= base_url() ?>vehicles?f=hybrid">Hybrid (<span
													id="hybrid-count"></span>)</a></li>
									<li data-id="USED_CAT_CONVERTIBLE" id="MainMenu_USED_CAT_CONVERTIBLE"><a
												href="<?= base_url() ?>vehicles?f=convertible">Convertibles (<span
													id="convertible-count"></span>)</a></li>
									<!--									<li data-id="USED_OTHER" id="MainMenu_USED_OTHER" class="lastItem"><a href="used/search.html">Other models</a></li>-->
								</ul>
							</li>
							<li data-id="USED_CARS" style="display: none" id="MainMenu_USED_CARS"
								class="top lastMenu hasItems d-none isBold inventory">
								<a class="top_link isBold notClickable" onclick="return false;" href="#">Our Top
									Models</a>
								<ul class="sub slim-submenu">
									<li data-id="USED_CARS_G0" id="MainMenu_USED_CARS_G0"
										class="top firstMenu hasItems isBold"><span class="top_link isBold"></span>
										<ul class="sub slim-submenu">
											<li data-id="USED1" id="MainMenu_USED1" class="firstItem"><a
														href="used/Audi-Q5.html">Audi Q5 (4)</a></li>
											<li data-id="USED2" id="MainMenu_USED2"><a
														href="used/Mercedes_Benz-C_Class.html">Mercedes-Benz C-Class
													(4)</a></li>
											<li data-id="USED3" id="MainMenu_USED3"><a href="used/Subaru-Forester.html">Subaru
													Forester (4)</a></li>
											<li data-id="USED4" id="MainMenu_USED4"><a href="used/Ford-Escape.html">Ford
													Escape (3)</a></li>
											<li data-id="USED5" id="MainMenu_USED5"><a href="used/Acura-RDX.html">Acura
													RDX (2)</a></li>
											<li data-id="USED6" id="MainMenu_USED6"><a href="used/Audi-A4.html">Audi A4
													(2)</a></li>
											<li data-id="USED7" id="MainMenu_USED7"><a href="used/Audi-Q3.html">Audi Q3
													(2)</a></li>
											<li data-id="USED8" id="MainMenu_USED8"><a href="used/Audi-S5.html">Audi S5
													(2)</a></li>
											<li data-id="USED9" id="MainMenu_USED9"><a href="used/Ford-Explorer.html">Ford
													Explorer (2)</a></li>
											<li data-id="USED10" id="MainMenu_USED10" class="lastItem"><a
														href="used/Ford-Fusion.html">Ford Fusion (2)</a></li>
										</ul>
									</li>
									<li data-id="USED_CARS_G1" id="MainMenu_USED_CARS_G1" class="top hasItems isBold">
										<span class="top_link isBold"></span>
										<ul class="sub slim-submenu">
											<li data-id="USED11" id="MainMenu_USED11" class="firstItem"><a
														href="used/Nissan-Pathfinder.html">Nissan Pathfinder (2)</a>
											</li>
											<li data-id="USED12" id="MainMenu_USED12"><a href="used/Nissan-Rogue.html">Nissan
													Rogue (2)</a></li>
											<li data-id="USED13" id="MainMenu_USED13"><a href="used/Audi-A5.html">Audi
													A5 (1)</a></li>
											<li data-id="USED14" id="MainMenu_USED14"><a href="used/Audi-A6.html">Audi
													A6 (1)</a></li>
											<li data-id="USED15" id="MainMenu_USED15"><a href="used/Audi-A7.html">Audi
													A7 (1)</a></li>
											<li data-id="USED16" id="MainMenu_USED16"><a href="used/Audi-Q7.html">Audi
													Q7 (1)</a></li>
											<li data-id="USED17" id="MainMenu_USED17"><a href="used/Audi-S3.html">Audi
													S3 (1)</a></li>
											<li data-id="USED18" id="MainMenu_USED18"><a
														href="used/BMW-3%20Series.html">BMW 3 Series (1)</a></li>
											<li data-id="USED19" id="MainMenu_USED19"><a
														href="used/BMW-5%20Series.html">BMW 5 Series (1)</a></li>
											<li data-id="USED20" id="MainMenu_USED20" class="lastItem"><a
														href="used/BMW-X5.html">BMW X5 (1)</a></li>
										</ul>
									</li>
									<li data-id="USED_CARS_G2" id="MainMenu_USED_CARS_G2"
										class="top lastMenu hasItems isBold"><span class="top_link isBold"></span>
										<ul class="sub slim-submenu">
											<li data-id="USED21" id="MainMenu_USED21" class="firstItem"><a
														href="used/BMW-X6.html">BMW X6 (1)</a></li>
											<li data-id="USED22" id="MainMenu_USED22"><a
														href="used/Chevrolet-Equinox.html">Chevrolet Equinox (1)</a>
											</li>
											<li data-id="USED23" id="MainMenu_USED23"><a href="used/Ford-Edge.html">Ford
													Edge (1)</a></li>
											<li data-id="USED24" id="MainMenu_USED24"><a href="used/Honda-CR_V.html">Honda
													CR-V (1)</a></li>
											<li data-id="USED25" id="MainMenu_USED25"><a href="used/Honda-FIT.html">Honda
													FIT (1)</a></li>
											<li data-id="USED26" id="MainMenu_USED26"><a href="used/Infiniti-Q50.html">Infiniti
													Q50 (1)</a></li>
											<li data-id="USED27" id="MainMenu_USED27"><a href="used/Jaguar-F_Pace.html">Jaguar
													F-Pace (1)</a></li>
											<li data-id="USED28" id="MainMenu_USED28"><a
														href="used/Lamborghini-Urus.html">Lamborghini Urus (1)</a></li>
											<li data-id="USED29" id="MainMenu_USED29"><a
														href="used/Land%20Rover-Range%20Rover%20Sport.html">Land Rover
													Range Rover Sport (1)</a></li>
											<li data-id="USED30" id="MainMenu_USED30" class="lastItem"><a
														href="used/Land%20Rover-Range%20Rover%20Velar.html">Land Rover
													Range Rover Velar (1)</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li data-id="HOME" id="MainMenu_HOME" class="top firstMenu"><a class="top_link isImage"
																				   aria-label="Home"
																				   href="<?= base_url() ?>"><em
									class="fa fa-home" style="font-size: 1.3em;"></em></a></li>
				</ul>
			</div>
		</div>
		<div class="clr"></div>
		<input type='hidden' id='topreferer' name='topreferer' value=''/>
		<input type='hidden' id='topsiteid' name='topsiteid' value='907'/>
		<input type='hidden' id='topcarid' name='topcarid' value=''/>
		<input type='hidden' id='topcaridMultistepForm' name='topcaridMultistepForm' value=''/>
		<input type='hidden' id='eModel' name='eModel' value=''/>
		<input type='hidden' id='styleid' name='' value='0'/>
		<input type='hidden' id='popupmake' name='popupmake' value=''/>
		<input type='hidden' id='popupmakeMultistepForm' name='popupmakeMultistepForm' value=''/>
		<input type='hidden' id='popupmodel' name='popupmodel' value=''/>
		<input type='hidden' id='popupmodelMultistepForm' name='popupmodelMultistepForm' value=''/>
		<input type='hidden' id='popupyear' name='popupyear' value='0'/>
		<input type='hidden' id='popupyearMultistepForm' name='popupyearMultistepForm' value='0'/>
		<input type='hidden' id='popuptrim' name='popuptrim' value='{$POPUPTRIM}'/>
		<input type='hidden' id='popupstocknumber' name='popupstocknumber' value=''/>
		<input type='hidden' id='popupstocknumberMultistepForm' name='popupstocknumberMultistepForm' value=''/>
		<input type='hidden' id='lastviewedmake' name='lastviewedmake' value=''/>
		<input type='hidden' id='lastviewedmodel' name='lastviewedmodel' value=''/>
		<input type='hidden' id='lastviewedyear' name='lastviewedyear' value='0'/>
		<input type='hidden' id='lastviewedstocknumber' name='lastviewedstocknumber' value=''/>
		<input type='hidden' id='topdeploymenttype' name='topdeploymenttype' value='live'/>
		<input type='hidden' id='serviceEmail' name='serviceEmail' value='sales@eleganceleasing.com'/>
		<input type='hidden' id='serviceAdfEmail' name='serviceAdfEmail' value=''/>

		<!-- TRADE IN BAR DISABLED -->

	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
	function loadLang(lang){
		var item= $(this);
		$.ajax({
			url: '<?=base_url()?>language',
			type: 'POST',
			dataType: 'JSON',
			data:{language: lang},
			success: function (data) {
				console.log(data);
				location.reload();
				// item.addClass('active');
			}
		});
	}
	$(document).ready(function () {
		$.ajax({
			url: '<?=base_url()?>vehicles/getCounts',
			method: 'GET',
			dataType: 'JSON',
			success: function (data) {
				// console.log(data);
				$('#full-inventory-count').html(data.inventory_count);
				$('#under-15k-count').html(data.under15k_count);
				$('#under-10k-count').html(data.under10k_count);
				$('#car-count').html(data.car_count);
				$('#suv-count').html(data.suv_count);
				$('#convertible-count').html(data.convertible_count);
				$('#hybrid-count').html(data.hybrid_count);
				$('#our-top-makes').html(data.makes);
				$('#our-top-models').html(data.models);
			}
		})
	});
</script>
