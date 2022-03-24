<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="footerWrapper" class="" >
	<div class="map" id="footerGoogleMapHoursContainer" >
		<iframe width="100%" height="400" frameborder="0" style="border:0" class="lazyload"
				data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11193.398546474606!2d-73.6191778!3d45.4627603!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb989455422d246b9!2sSean%20Auto%20Sales!5e0!3m2!1sen!2sca!4v1612111482072!5m2!1sen!2sca" allowfullscreen></iframe><div class="wrapper" style="padding-bottom:0px;">
<!--			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11193.398546474606!2d-73.6191778!3d45.4627603!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb989455422d246b9!2sSean%20Auto%20Sales!5e0!3m2!1sen!2sca!4v1612111482072!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
			<div class="map_open_hours" id="map_open_hours" style="background-color:#eeeeee;color:#444444;right:15%;">
				<h2><?=$this->lang->line('business_hours')?></h2>
				<ul><li>
	<span class="map_open_hours_expand ">
		<span class="fa fa-clock" aria-hidden="true"></span>
		<span style="padding-left: 10px;"><?=$this->lang->line('hours_sales')?></span>
		<span class="map_open_hours_expand_arrow fa fa-angle-down"></span>
	</span>
						<div class="expandable_content" style="display:none;">
							<div>
								<span><?=$this->lang->line('monday')?></span>
								<span><?=$this->lang->line('timmings')?></span>
							</div>
							<div>
								<span><?=$this->lang->line('tuesday')?></span>
								<span><?=$this->lang->line('timmings')?></span>
							</div>
							<div>
								<span><?=$this->lang->line('wednesday')?></span>
								<span><?=$this->lang->line('timmings')?></span>
							</div>
							<div>
								<span><?=$this->lang->line('thursday')?></span>
								<span><?=$this->lang->line('timmings')?></span>
							</div>
							<div>
								<span><?=$this->lang->line('friday')?></span>
								<span><?=$this->lang->line('timmings')?></span>
							</div>
							<div>
								<span><?=$this->lang->line('saturday')?></span>
								<span><?=$this->lang->line('closed')?></span>
							</div>
							<div>
								<span><?=$this->lang->line('sunday')?></span>
								<span><?=$this->lang->line('closed')?></span>
							</div>

							<div class="visitContactHeader" style="display:none;">
								<div class="visitContactCTAContainer"><a  href="javascript:void(0);"  class="visitContactButton btn-default "     ><span class="animated-triangle">
					<i class="fa fa-exclamation-triangle"></i>
				</span> <?=$this->lang->line('coming')?></a></div>
								<div class="visitContactFormContainer">
									<form class="visitContactForm" data-mailid="ContactVisitRequest">
										<input type="text" class="visitContactName required" name="name" aria-label="Name" title="Name" placeholder="Name">
										<input type="text" class="visitContactEmail required" name="email" aria-label="Email" title="Email" placeholder="Email">
										<input type="text" class="visitContactPhone phone required" name="phone" aria-label="Phone" title="Phone" placeholder="Phone">
										<div class="visitContactDateDiv"><input id="visitContactFormData_footerUsed" type="text" readonly="readonly" class="visitContactDate required" name="date" aria-label="Date and Time" title="Date and Time" placeholder="Date and Time"><span class="fa fa-calendar"></span></div>
										<textarea class="visitContactComment" name="comment" aria-label="Message" title="Message" placeholder="Message"></textarea>

										<input type="submit"   class="visitContactFormSubmit btn-default "    value="I will be there">

										<input type='hidden' value='sales@eleganceleasing.com' class='textSendToEmail'/>
										<input type='hidden' value='' class='textSendToEmailAdf'/>
										<input type='hidden' value='USED' class='visitContactFormDep'/>
										<input type='hidden' id='textMONTH_1' value='January'/><input type='hidden' id='textMONTH_10' value='October'/><input type='hidden' id='textMONTH_11' value='November'/><input type='hidden' id='textMONTH_12' value='December'/><input type='hidden' id='textMONTH_2' value='February'/><input type='hidden' id='textMONTH_3' value='March'/><input type='hidden' id='textMONTH_4' value='April'/><input type='hidden' id='textMONTH_5' value='May'/><input type='hidden' id='textMONTH_6' value='June'/><input type='hidden' id='textMONTH_7' value='July'/><input type='hidden' id='textMONTH_8' value='August'/><input type='hidden' id='textMONTH_9' value='September'/>
										<input id="SundaySchedule" type="hidden" value="closed" /><input id="MondaySchedule" type="hidden" starthour="10" startmin="00" endhour="19" endmin="00" /><input id="TuesdaySchedule" type="hidden" starthour="10" startmin="00" endhour="19" endmin="00" /><input id="WednesdaySchedule" type="hidden" starthour="10" startmin="00" endhour="19" endmin="00" /><input id="ThursdaySchedule" type="hidden" starthour="10" startmin="00" endhour="19" endmin="00" /><input id="FridaySchedule" type="hidden" starthour="10" startmin="00" endhour="19" endmin="00" /><input id="SaturdaySchedule" type="hidden" starthour="11" startmin="00" endhour="15" endmin="00" />
										<div style='display:none'>
											<div class='emailSubjectDef_VisitContact' style='display:none'>Lead: Request for contact Sales - Used</div>
											<div class='emailBodyDef_VisitContact' style='display:none'>Hello,<br /><br />A potential client visiting your website has completed the contact form:<br /><br /><u>Visitor information</u>:<br />Name: <strong>{$NAME}</strong><br />Email: <strong><a href="mailto:{$EMAIL}">{$EMAIL}</a></strong><br />Phone: <strong><a href="tel:{$EMAILPHONE}">{$EMAILPHONE}</a></strong> {$PHONE_VALIDATION_ATTEMPTS}<br />Date: <strong>{$DATE}</strong><br /><br /><u>Visitor message</u>:<br /><strong>{$COMMENT}</strong><br /><br /><div style="##SEOBLOCKDISPLAY##">Media Source: <strong>{$UTMDETAILS}</strong><br />Browser: <strong>{$USERAGENT}</strong><br />Browsing History: <strong><a href="%7b%24UULINK%7d.html" style="color:black; text-decoration: none;">Click here</a></strong></div><br />{$DEALER_SENDTO}<p>Consent: <strong>{$CONSENT_DETAILS}</strong>{$PURCHASE_INTENT}</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</li><li>
	<span class="map_open_hours_expand ">
		<span class="fa fa-clock" aria-hidden="true"></span>
		<span style="padding-left: 10px;"><?=$this->lang->line('hours_service')?></span>
		<span class="map_open_hours_expand_arrow fa fa-angle-down"></span>
	</span>
						<div class="expandable_content" style="display:none;">
							<div>
								<span><?=$this->lang->line('monday')?></span>
								<span><?=$this->lang->line('timmings')?></span>
							</div>
							<div>
								<span><?=$this->lang->line('tuesday')?></span>
								<span><?=$this->lang->line('timmings')?></span>
							</div>
							<div>
								<span><?=$this->lang->line('wednesday')?></span>
								<span><?=$this->lang->line('timmings')?></span>
							</div>
							<div>
								<span><?=$this->lang->line('thursday')?></span>
								<span><?=$this->lang->line('timmings')?></span>
							</div>
							<div>
								<span><?=$this->lang->line('friday')?></span>
								<span><?=$this->lang->line('timmings')?></span>
							</div>
							<div>
								<span><?=$this->lang->line('saturday')?></span>
								<span><?=$this->lang->line('closed')?></span>
							</div>
							<div>
								<span><?=$this->lang->line('sunday')?></span>
								<span><?=$this->lang->line('closed')?></span>
							</div>


						</div>
					</li></ul>
			</div></div>
	</div>
	<div class="wrapper container clr -pt10 MainBoxLayer" id='footerDiv'>
		<div id="footer" class="dealer-position-right dealer-align-right">
			<div class="viv" style='width:760px;'><?=$this->lang->line('live_experience')?></div>
			<div class="social-sharing" >
				<div class="social">
					<div id="fblike-container">
						<div id="fb-root"></div>
						<div
							class="fb-share-button"
							data-href=""
							data-layout="button_count"
							data-size="small"
							data-mobile-iframe="true">
							<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
						</div>
					</div>
				</div>
				<div class="social">
					<a href="https://twitter.com/share"
					   class="twitter-share-button"
					   data-lang="en">Tweet</a>
				</div>
			</div>
			<div class="divSpan divSpan9 footer-lists">
				<div class="divSpan divSpan4 pageno" style="visibility: hidden">
					<ul>
						<li><span>Useful buying tools</span></li>
						<li ><a href="requests/price-used.html" rel="nofollow">Request price</a></li>
						<li ><a href="our-services.html" rel="nofollow">After sales service</a></li>



						<li id="Footer_FINANCE"><a href="requests/credit.html" >Auto Credit and Financing</a></li>
						<li id="Footer_SELLCAR"><a href="sell-your-car.html" >Sell us your Car!</a></li>


					</ul>


					<!-- BLOGS/BLOGUES -->


				</div>
				<div class="divSpan divSpan4 pageno" style="visibility: hidden;">
					<ul>
						<li><span>Additional information</span></li>



						<li><a href="communication-preferences.html" rel="nofollow">Communication Preferences</a></li>


					</ul>




				</div>
				<div class="divSpan divSpan4 pageno" style="visibility: hidden">
					<ul>

						<!--<a href="/used/search.html">-->
						<li>
							<span>Our top 10 used vehicles</span>
						</li>
						<!--</a>-->
						<li><a href='used/2016-Ford-Escape.html'>2016 Ford Escape</a></li><li><a href='used/2016-Mercedes_Benz-C_Class.html'>2016 Mercedes-Benz C-CLASS</a></li><li><a href='used/2015-Nissan-Pathfinder.html'>2015 Nissan Pathfinder</a></li><li><a href='used/2020-Mercedes_Benz-AMG%20GT.html'>2020 Mercedes-Benz AMG GT</a></li><li><a href='used/2019-Lamborghini-Urus.html'>2019 Lamborghini Urus</a></li><li><a href='used/2019-Subaru-Forester.html'>2019 Subaru Forester</a></li><li><a href='used/2018-Acura-RDX.html'>2018 Acura RDX</a></li><li><a href='used/2018-Audi-A4.html'>2018 Audi A4</a></li><li><a href='used/2018-Audi-Q5.html'>2018 Audi Q5</a></li><li><a href='used/2018-BMW-3%20Series.html'>2018 BMW 3 Series</a></li>
					</ul>

				</div></div>
			<div class="divSpan divSpan3 add -text-right" >
				<span class="fn org" style='font-size: 22px;'>Sean Auto Sales</span>
				<div style="font-size: 14px;" class="adr">

					<span class="street-address"  itemprop="streetAddress">6290 Rue Saint-Jacques</span><br>
					<span class="locality"  itemprop="addressLocality">Montr&eacute;al</span>,
					<span class="region"  itemprop="addressRegion">QC</span>,
					<span class="postal-code"  itemprop="postalCode">H4B 1T6</span>

				</div>
				<div>
					<meta itemprop="latitude" content="45.4633700000" />
					<meta itemprop="longitude" content="-73.6180800000" />
				</div>

				<div class=" icon-text" style="font-size: 14px;">

					<div style="display:inline-block">
						<span style="padding-right:5px;" class="fa fa-envelope" aria-hidden="true"></span>
						<span itemprop="telephone" class='extendedPhoneTrigger notrigger'>
								<a href='mailto:seanautosales@bellnet.ca' class='phone-link'>seanautosales@bellnet.ca</a></span>
					</div>
					<br>
					<div style="display:inline-block">
						<span style="padding-right:5px;" class="fa fa-fax" aria-hidden="true"></span>
						<span itemprop="telephone" class='extendedPhoneTrigger notrigger'>
								<a href='fax:514 486-5670' class='phone-link'>514 486-5670</a></span>

					</div>
					<br>
					<div style="display:inline-block">
						<span style="padding-right:5px;" class="fa fa-phone" aria-hidden="true"></span> <span itemprop="telephone" class='extendedPhoneTrigger notrigger'><a href='tel:514 951-0646' class='phone-link'>514 951-0646</a></span>
						<div class="extendedPhone" style="display: none;">
							<div><label>Sales: <span class="tel -ml10"><a href='tel:514 951-0646' class='phone-link'>514 951-0646</a> <br></span></label></div><div><label>Service: <span class="tel -ml10"><a href='tel:514 951-0646' class='phone-link'>514 951-0646</a> <br></span></label></div>
							<div class="phoneNote"></div>
							<!-- OO::5c673958f30d6f595743d33c376b5204 -->
						</div>
					</div>




				</div>


				<div class="icon-text" style="font-size: 14px; ">
<!--					<a href="https://m.eleganceleasing.com/"  style="color:inherit; text-decoration:none;">-->
<!--						<span class="fa fa-mobile" aria-hidden="true"></span>-->
<!--						Mobile version-->
<!--					</a>-->
				</div>
			</div>

			<div class='social-media-icons divSpan divSpan3 -text-right'></div>
			<div class="clr"></div>
			<div class="conditionsFooter -w50p">

			</div>
			<div class="clr"></div>
			<div class="conditions--container">
				<div class="conditions">
<!--					&copy; 2000-2021 <a target='_blank' href='https://www.d2cmedia.ca/en/'>D2C Media</a> All rights reserved.&nbsp;D2C Media <a target='_blank' href='https://www.d2cmedia.ca/products-services/sites-web-automobiles/'>dealer website</a> solutions<br/>-->
<!--					See <a rel='nofollow' target='_blank' href='terms-and-conditions.html'>terms and conditions</a> and <a rel='nofollow' target='_blank' href='privacy-policy.html'>privacy policy</a> of Sean Auto Sales<br/>-->
					<?=$this->lang->line('copyrights')?>
			</div>
			<div class="clr"></div>
		</div>
	</div>
</div>

