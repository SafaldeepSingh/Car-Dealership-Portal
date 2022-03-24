<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang='en'>
<head>
	<title>Sean Auto Sales- Car Dealer in Montreal</title>
	<?php include 'shared/head.php'?>
</head>
<body  style=" background-color: #ffffff;"  class="isPageFullWidthEnabled isPageFullWidthEnabled template1 isFullWidthPage ENGLISH">
<?php include  'shared/header.php'?>
<!--- MAIN SLIDER IMAGE -->
<div class="clearfix">
	<div id="homepage-banner" class="banner">
		<input type="hidden" id="responsive-slider" value="1">

		<div class="slider-wrapper theme-default">
			<div id="slider"  class="nivoSlider noshadow hideOnPreLoad">

				<a href="<?=base_url()?>finance"   >
					<img alt="Sean Auto-banner1" class='hideOnPreLoad liveload' data-pause='5000'
						 src="<?=base_url() ?>assets/images/banner1/slider-1.jpg" title="" /></a>

<!--				<a href="--><?//=base_url()?><!--insurance"   ><img alt="Elegance Leasing-banner2" class="hidden lazyload" data-pause='5000' data-src="--><?//=base_url() ?><!--assets/images/banner2/elangance-leasing-slider2c-en.jpg" title="" /></a>-->

				<a href="<?=base_url()?>contactus"   ><img alt="Sean Auto-banner3" class="hidden lazyload" data-pause='5000' data-src="<?=base_url() ?>assets/images/banner2/slider-2.jpg" title="" /></a>

			</div>
		</div>
	</div>
</div>

<div id="homepage-content" class="clearfix" >




</div>

<div id="AfterCarousel" class="clearfix "  >
	<div class="container clr homepage -pb0 clearfix">

	</div> <div class='ctabox--wrapper'><table class='ctabox--table'><tbody><tr><td class='ctabox--cell ctabox--cell__3 ctabox--cell__11' onclick="window.location.assign('<?=base_url()?>vehicles')">
					<div class="ctabox--container">
						<div class="ctabox--icon ctabox--icon__top ">
							<span class="fa fa-automobile"></span>
						</div>
						<div class="ctabox--title">
							<?=$this->lang->line('inventory')?>
						</div>
						<div class="ctabox--description">
							<?=$this->lang->line('inventory_sub_heading')?>
						</div>
						<div class="ctabox--button ">
							<a href="<?=base_url()?>vehicles" class="btn-default" target="_self">
								<?=$this->lang->line('click_here')?>
							</a>
						</div>
					</div>
				</td><td class='ctabox--cell ctabox--cell__3 ctabox--cell__12' onclick="window.location.assign('requests/credit.html')">
					<div class="ctabox--container">
						<div class="ctabox--icon ctabox--icon__top ">
							<span class="fa fa-usd"></span>
						</div>
						<div class="ctabox--title">
							<?=$this->lang->line('financing')?>
						</div>
						<div class="ctabox--description">
							<?=$this->lang->line('financing_sub_heading')?>
						</div>
						<div class="ctabox--button ">
							<a href="<?=base_url()?>finance" class="btn-default" target="_self">
								<?=$this->lang->line('click_here')?>
							</a>
						</div>
					</div>
				</td><td class='ctabox--cell ctabox--cell__3 ctabox--cell__13' onclick="window.location.assign('contactus.html')">
					<div class="ctabox--container">
						<div class="ctabox--icon ctabox--icon__top ">
							<span class="fa fa-phone"></span>
						</div>
						<div class="ctabox--title">
							<?=$this->lang->line('contact_us')?>
						</div>
						<div class="ctabox--description">
							<?=$this->lang->line('contact_us_sub_heading')?>
						</div>
						<div class="ctabox--button ">
							<a href="<?=base_url()?>contactus" class="btn-default" target="_self">
								<?=$this->lang->line('click_here')?>
							</a>
						</div>
					</div>
				</td></tr></tbody></table></div>
</div>
</div>

<div id="home_ActionFullHTML" class="clearfix" >
	<div class="wrapper -pb0 clearfix">

	</div>
</div>

<div id="home_AfterActionBox" class="clearfix"  >
	<div class="-pb0 clearfix">


	</div>
</div>
<?php //if(count($vehicles)>5):?>
<div class="caroussel fullwidth">
	<stack-lc class="align-center --space-xl">

		<h3 class="carouselTitle txt-upper -fs-xxl">
			<span><?=$this->lang->line('featured_heading')?></span>
		</h3>

		<div class="container">
			<div class="rows">
				<div class="cols arrows">
					<div class="arrow-left">
						<a class="mycarousel_prev arrow">
							<span class="fa fa-angle-left"></span>
						</a>
					</div>
				</div>
				<div class="cols slider">
					<div class="vehicleCarousel jCarouselLite" id='mycarousel'>
						<ul>
							<?php foreach ($vehicles as $vehicle) {
							?>
							<li>
								<div class="wboxes">
										<a href="<?=base_url()?>vehicles/details/<?=$vehicle['id']?>" rel="nofollow"
													   title="<?=$vehicle['name']?> ">
											<?php if(count($vehicle['photos'])):?>
											<span class="image">
											<img class="lazyload"
													data-src="<?=base_url()?>admin/<?=$vehicle['photos'][0]['path']?>"
													alt="<?=$vehicle['name']?> ">
											</span>
											<?php else: ?>
											<span class="image" style="background: #eeeeee">
											<img class="lazyload"  style="background: #eeeeee"
													 data-src="<?=base_url()?>assets/images/usedsrp2/car-bg-image-white.png"
													 alt="<?=$vehicle['name']?> ">
											</span>
											<?php endif ?>
										<span class="make"><?=$vehicle['make']?> <?=$vehicle['model']?></span>
										<span class="model"><?=$vehicle['year']?></span>
										<span
												class="price ">$<?=number_format($vehicle['price'])?></span></a></div>
							</li>
							<?php } ?>
						</ul>
						<input type="hidden" value="10" id="carouselVehiclesToShow"/>
					</div>
				</div>
				<div class="cols arrows">
					<div class="arrow-right">
						<a class="mycarousel_next arrow">
							<span class="fa fa-angle-right"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="rows">
				<div class="cols button">
					<a href="<?=base_url()?>vehicles" class="btn-default btn-bg-same black"><?=$this->lang->line('browse_our_full_inventory')?></a>
				</div>
			</div>
		</div>
	</stack-lc>
</div>
<?php //endif?>

<div id="home_Phone" class="clearfix">
	<div class="wrapper  -pb0 clearfix">

	</div>
</div>

<div id="home_EventTrackingWidget" class="clearfix">
	<div class="wrapper -pb0 clearfix">
		<!-- OO::e1c43ecb703cab848111864fc89c5e9a -->
	</div>
</div>

<div id="home_AfterDisplayVehicle" class="clearfix"  >
	<div class="clearfix -pb0">


	</div>
</div>

<div id="home_fullWidth_businessDesc" class="clearfix -pt35 -pb25 homepage--business-description">
	<div class="row wrapper clearfix">
		<div class="-w960 col-md-12 -left desc">
			<div class="border_box -p5">
				<div class="-mt5 -ml10 -mr10" >
					<div ><h1 class="-fs23 normal -line-h1" >Sean Auto Sales: Car dealership in Montr&eacute;al</h1></div>
					<div class="-fs15 -mt5"><!-- OPEN RESPONSIVE EDITOR -->
						<div class='ckeditorWrapper responsive-editor'><p>
								<strong>Sean Auto Sales</strong>, <?=$this->lang->line('business_desc1')?>
								</p>
							<p>&nbsp;</p>
							<p><?=$this->lang->line('at')?> Sean Auto Sales, <?=$this->lang->line('business_desc2')?></p>
						</div><!-- CLOSE RESPONSIVE EDITOR --></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="home_afterDescription" class="clearfix"  >
	<div class="row clearfix -pb0">


	</div>
</div>

<div id="home_fullWidth_actionButtons" style="display: none" class="clearfix -pt40 -pb25">
	<div class="row wrapper clearfix">
		<div class="col-md-12 -left">
			<div class="bottom4boxes">
				<table style="margin-bottom: 10px;width: 100%;table-layout: fixed;"><tbody><tr>
						<td class=" -overflow-hidden">
							<div class="actionbox--container__default actionbox--container__priceactionbox" style="background-color:#8C1319; color:#ffffff;"
								 targetURI='<?=base_url()?>vehicles' action='https://www.eleganceleasing.com/PriceActionBox' folder="/requests/price-used/"
								 onclick='location.href = "requests/price-used.html";'>
								<span class="fas fa-dollar-sign actionbox--icon"></span>
								<div class="actionbox--title__first">price request</div>
								<div class="actionbox--title__second">used vehicles</div>
							</div>
						</td>
						<td class="-pl10 -overflow-hidden">
							<div class="actionbox--container__default actionbox--container__financeactionbox" style="background-color:#8C1319; color:#ffffff;"
								 targetURI='<?=base_url()?>finance' action='https://www.eleganceleasing.com/FinanceActionBox' folder="/requests/credit/"
								 onclick='location.href = "requests/credit.html";'>
								<span class="fa fa-file-alt actionbox--icon"></span>
								<div class="actionbox--title__first">apply for</div>
								<div class="actionbox--title__second">financing</div>
							</div>
						</td>
						<td class="-pl10 -overflow-hidden">
							<div class="actionbox--container__default actionbox--container__testdriveactionbox" style="background-color:#8C1319; color:#ffffff;"
								 targetURI='/requests/test-drive-used.html' action='https://www.eleganceleasing.com/TestDriveActionBox' folder="/requests/test-drive-used/"
								 onclick='location.href = "requests/test-drive-used.html";'>
								<span class="fas fa-car actionbox--icon"></span>
								<div class="actionbox--title__first">test drive</div>
								<div class="actionbox--title__second">used vehicles</div>
							</div>
						</td>
						<td class="-pl10 -overflow-hidden">
							<div class="actionbox--container__default actionbox--container__evalactionbox" style="background-color:#8C1319; color:#ffffff;"
								 targetURI='/requests/trade-in-used.html' action='https://www.eleganceleasing.com/EvalActionBox' folder="/requests/trade-in-used/"
								 onclick='location.href = "requests/trade-in-used.html";'>
								<span class="fa fa-sync-alt actionbox--icon"></span>
								<div class="actionbox--title__first">estimate value of</div>
								<div class="actionbox--title__second">your trade-in vehicle</div>
							</div>
						</td>
					</tr></tbody></table>
			</div>

		</div>
	</div>
</div>

<div id="home_AfterGenericNews" class="clearfix"  >
	<div class="clearfix -pb0 ">


	</div>
</div>

<div id="home_AfterFacebookNews" class="clearfix" >
	<div class="clearfix -pb0">


	</div>
</div>

<div id="specialScheduleContent"></div>

<div id="d2c_vars"><input type="hidden" value="NEW" id="so7yuqaj4dwcc8s" data-forvar="SITE_CAR_SECTION_TYPE" />
	<input type="hidden" value="live" id="2ejhbc0yyog0www" data-forvar="DEPLOYMENTTYPE" />
	<input type="hidden" value="" id="5l56aukyq64g8kw" data-forvar="MAKE" />
	<input type="hidden" value="" id="42clshyrqdq8gcg" data-forvar="MODEL" />
	<input type="hidden" value="0" id="r82zfkxa2dwss00" data-forvar="YEAR" />
	<input type="hidden" value="" id="i3gsaxgs5jk8wck" data-forvar="REFERER" />
</div>

<script type="text/javascript" data-compiler="inline">
	/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
	(function(w){"use strict";var loadCSS=function(href,before,media){var doc=w.document;var ss=doc.createElement("link");var ref;if(before){ref=before}
	else{var refs=(doc.body||doc.getElementsByTagName("head")[0]).childNodes;ref=refs[refs.length-1]}
		var sheets=doc.styleSheets;ss.rel="stylesheet";ss.href=href;ss.media="only x";function ready(cb){if(doc.body){return cb()}
			setTimeout(function(){ready(cb)})}
		ready(function(){ref.parentNode.insertBefore(ss,(before?ref:ref.nextSibling))});var onloadcssdefined=function(cb){var resolvedHref=ss.href;var i=sheets.length;while(i--){if(sheets[i].href===resolvedHref){return cb()}}
			setTimeout(function(){onloadcssdefined(cb)})};function loadCB(){if(ss.addEventListener){ss.removeEventListener("load",loadCB)}
			ss.media=media||"all"}
		if(ss.addEventListener){ss.addEventListener("load",loadCB)}
		ss.onloadcssdefined=onloadcssdefined;onloadcssdefined(loadCB);return ss};if(typeof exports!=="undefined"){exports.loadCSS=loadCSS}
	else{w.loadCSS=loadCSS}}(typeof global!=="undefined"?global:this))
	loadCSS('<?= base_url() ?>assets/css/home.css');
</script>

<!-- ##ENDOFPAGE## -->
<?php include 'shared/footer.php' ?>
<div id="ios_fixed_bg" ></div>

<div id="HIDDEN_INPUTS">
	<!-- bundling hidden inputs to please Google -->
	<div class="hi____1">
		<input type='hidden' id='currentItemType' value='car' />
		<input type='hidden' id='currentItemTypeURLSafeEN' value='' />
		<input type='hidden' id='currentStatus' value='used' />
		<input type='hidden' id='txtUserAgent' value='Windows  ' />
		<input type='hidden' id='currentCarPrice' value='0' />
		<input type='hidden' id='txtBuildAndPriceEmailLink' value="Last configured vehicle (Build & Price module) on {$BANPLINK}"/>
		<input type='hidden' id='txtBuildAndPriceFolderPath' value="/build-and-price/"/>
		<input type='hidden' id='TXTMONTH1' value="January"/>
		<input type='hidden' id='TXTMONTH2' value="February"/>
		<input type='hidden' id='TXTMONTH3' value="March"/>
		<input type='hidden' id='TXTMONTH4' value="April"/>
		<input type='hidden' id='TXTMONTH5' value="May"/>
		<input type='hidden' id='TXTMONTH6' value="June"/>
		<input type='hidden' id='TXTMONTH7' value="July"/>
		<input type='hidden' id='TXTMONTH8' value="August"/>
		<input type='hidden' id='TXTMONTH9' value="September"/>
		<input type='hidden' id='TXTMONTH10' value="October"/>
		<input type='hidden' id='TXTMONTH11' value="November"/>
		<input type='hidden' id='TXTMONTH12' value="December"/>
		<input type='hidden' id='ffdL1' value="d0b187698f6faf378282208f4c88c0d2c3a99305" />
		<input type='hidden' id='isAVGMarketPriceActive' value="0" />
		<input type='hidden' id='isAVGMarketPriceActiveClearance' value="0" />
		<input type='hidden' id='showOnlyReducedPriceClearance' value="0" />
		<input type='hidden' id='hasMultipleDealers' value="0" />
		<input type='hidden' id='sendEmailToAllDealers' value="0" />
		<input type='hidden' id='searchedVehicle' value="  0" />
		<input type='hidden' id='searchedquerymake' name='searchedquerymake' value='' />
		<input type='hidden' id='searchedquerymodel' name='searchedquerymodel' value='' />
		<input type='hidden' id='searchedqueryyear' name='searchedqueryyear' value='' />
		<input type='hidden' id='imgsvrpoolactive' name='imgsvrpoolactive' value='TRUE' />
		<input type='hidden' id='sitecompileid' name='sitecompileid' value="600ac72ab6eca" />
		<input type='hidden' id='disablePopups' name='disablePopups' value='0' />
		<input type='hidden' id='serviceEnabled' name='serviceEnabled' value='1' />
	</div>
	<div class="hi____2">
		<input type='hidden' id='ADMIN_GENERAL_BLOCK_FR_DOMAIN_CHECK' name='ADMIN_GENERAL_BLOCK_FR_DOMAIN_CHECK' value="1" />
		<input type='hidden' id='newSectionnabled' name='newSectionnabled' value='' />
		<input type='hidden' id='usedSectionnabled' name='newSectionnabled' value='1' />
		<input type='hidden' id='financeSectionnabled' name='financeSectionnabled' value='1' />
		<input type='hidden' id='serviceSectionnabled' name='serviceSectionnabled' value='1' />
		<input type='hidden' id='promoSectionnabled' name='promoSectionnabled' value='' />
		<input type="hidden" id="targetPage" name="targetPage" value="HOMEPAGE"/>
		<input type="hidden" id="DiscountPopupOtherPages" name="DiscountPopupOtherPages" value="HOMEPAGE"/>
		<input type="hidden" id="DiscountPopupDelayShowOther" name="DiscountPopupDelayShowOther" value=""/>
		<input type="hidden" id="DiscountPopupDelayShow" name="DiscountPopupDelayShow" value=""/>
		<input type="hidden" id="DiscountPopupDelayShowNew" name="DiscountPopupDelayShowNew" value="1"/>
		<input type="hidden" id="SHOW_POPUP_AUTO" name="SHOW_POPUP_AUTO" value="percent" />
		<input type="hidden" id="SHOW_POPUP_AUTO_USED" name="SHOW_POPUP_AUTO_USED" value="delay" />
		<input type="hidden" id="SHOW_POPUP_AUTO_NEW" name="SHOW_POPUP_AUTO_NEW" value="delay" />
		<input type="hidden" id="AUTO_PERCENT_POPUP" name="AUTO_PERCENT_POPUP" value="75"/>
		<input type="hidden" id="AUTO_PERCENT_POPUP_USED" name="AUTO_PERCENT_POPUP_USED" value="75"/>
		<input type="hidden" id="AUTO_PERCENT_POPUP_NEW" name="AUTO_PERCENT_POPUP_NEW" value="75"/>
		<input type="hidden" id="GENERAL_USED_PAGE_POPUP_SELECT" name="GENERAL_USED_PAGE_POPUP_SELECT" value="INCLUDING"/>
		<input type="hidden" id="GENERAL_NEW_PAGE_POPUP_SELECT" name="GENERAL_NEW_PAGE_POPUP_SELECT" value="INCLUDING"/>
		<input type="hidden" id="USED_LOGO_ON_CHECK" name="USED_LOGO_ON_CHECK" value=""/>
		<input type='hidden' id='SEM_BOOSTER_ACTIVE' name='SEM_BOOSTER_ACTIVE' value='0' />
		<input type='hidden' id='PAGEID' name='PAGEID' value='homepage.html' />
		<input type='hidden' id='CRM_WSS_ACTIVE' name='CRM_WSS_ACTIVE' value='no' />
		<input type='hidden' id='REQUEST_SENT' name='REQUEST_SENT' value='Your request has been sent!' />
		<input type='hidden' id='DEALERBRAND' name='DEALERBRAND' value='' />
		<input type='hidden' id='ISVM' name='ISVM' value='' />
		<input type='hidden' id='GRWL' name='GRWL' value='b2e350b71c1646b7eeec9e1af6c854b13cb1db51;ba6b8611cba1178031b17fa7e350acf2ce135aa5;09c35807ba47a82592ef88e5d6304ea699b8cbe2' />
		<!-- <input type='hidden' value="/requests/price-used/" id='priceRequestFolder'/>
				<input type='hidden' value="/requests/test-drive-used/" id='ScheduleTestDriveFolder'/>
				<input type='hidden' value="/requests/credit/" id='FinanceFolder'/> -->
		<input type='hidden' value="/requests/offer-used/" id='textMakeOfferFolder'/>
		<input type='hidden' value="0" id='hasVBDCEnabled'/>
	</div>
</div>
<div id="confirm_forms"></div>

<div id='asPopUp' class='reveal-modal medium'>
	<form class="jqtransform">
		<div class="asTitle">
			PLEASE CONFIRM
		</div>

		<div style='height:140px;'>
			In order to comply with the Canadian Anti-Spam Law. we are asking you to confirm that you wish to receive communications from us such as rebates, promotions, offers and future private sales.
		</div>

		<div class="">
			<a  id="emailConsentExplicit" href="javascript:void(0);"  class=" -uppercase -left -mr40 black btn-default "   style="margin-left: 85px;"   >YES</a>
		</div>
		<div class="">
			<a  id="emailConsentImplicit" href="javascript:void(0);"  class=" -uppercase no btn-default "     >NO</a>
		</div>

		<input type='hidden' id='mandatoryOptIn' value='0' />
		<input type='hidden' id='lastConsentPop' value='' />
	</form>
</div>
<input type='hidden' id='siteID' value='907' />
<input type='hidden' id='hiddenSiteID' value='907'>
<input type='hidden' id='hiddenSkipOnloadPrintscreen' value='##DONT_SKIP_ONLOAD##'>
<input type='hidden' id='hiddenPrintscreenKey' value='##PRINTSCREEN_KEY##'>
<input type='hidden' id='hiddenDealerName' value='Elegance Leasing'>
<input type="hidden" name="CBBCheckUser" value="MTQyLjExNy4xNTguMTI0">
<div style='position:absolute;top:0px;width:1px;height:1px;overflow:hidden;'>



</div>

<div id="conversionTagsWrapper"></div>

<div id="emailSuccessMessage" class="reveal-modal email-consent-box" >
	<div class="icon-title">
		<!-- <span class="title-icon success -ml0"></span> -->
		<span class="title-txt">Your request was sent successfully!</span>
	</div>
	<p><br/>Elegance Leasing wants to thank you for your request. Someone will contact you shortly.</p>
	<!-- <a class="close-reveal-modal">&#215;</a> -->
	<div class="email-consent-btns -pt20 -right ampConsentResponseSendDismiss">
		<a  href="#"  class="confirm_successContinue  btn-default "     >Close</a>
	</div>
	<form id="emailmsgfrm" class="confirm_html" target="iframe" method="post" action="https://www.eleganceleasing.com/confirmation.html">
		<input type="hidden" name="label" class="labelemail" value="" />
		<input type="hidden" name="section" class="labelsection" value="Occasion" />
		<input type="hidden" name="brand" class="brandemail" value="" />
		<input type="hidden" name="model" class="modelemail" value="" />
		<input type="hidden" name="year" class="yearemail" value="0" />
		<input type="hidden" name="googleid" value="UA-158727174-1" />
		<input type="hidden" name="googleidd2cmedia" value="UA-105238240-286" />
		<input type="hidden" name="adwordsconid" value="" />
		<input type="hidden" name="adwordslabelid" value="" />
		<input type="hidden" name="bingconid" value="" />
		<input type="hidden" name="bingactionid" value="" />
		<input type="hidden" name="bingdomainid" value="" />

		<input type="hidden" name="adrollAdv" value="" />
		<input type="hidden" name="adrollPix" value="" />

		<input type="hidden" name="facebookConId" value="" />

		<input type="hidden" name="domain" value="eleganceleasing.com" />
		<input type="hidden" name="referrer" value="" />
		<input type="hidden" name="department" value="USED" />
		<input type="hidden" name="lead_department" value="" />
		<input type="hidden" name="isexpress" class='isexpress' value="0" />
		<input type="hidden" name="ispromo" value="0" />
		<input type="hidden" name="ishomepage" value="0" />
		<input type="hidden" name="testmode" class="testmode" value="0" />

		<input type="hidden" name="leadType" value="" />
		<input type="hidden" name="pageID" value="" />
		<input type="hidden" name="currentURL" value="" />
		<input type="hidden" name="isConfirmPopup" value="" />

		<input type="hidden" name="isFullWidth" value="" />
		<input type="hidden" name="dealerName" value="" />
		<input type="hidden" name="buttonPosition" value="" />
		<input type="hidden" name="isMobileNewVDP" value="0" />
		<input type="hidden" name="fromAutoAubaine" value="" />

		<input type='hidden' value='NEW' name='textCarSectionType' style='display:none;'/>
		<input type="hidden" name="lang" value="fr" />
	</form>
	<iframe width='1' height='1' name="iframe" frameborder="0" ></iframe>
</div>

<div id="emailFailMessage" class="reveal-modal email-consent-box" >
	<span class='fail' >An error occurred submitting your message</span>
	<p>We were unable to send your message. Please refresh and try again</p>
	<a class="close-reveal-modal"><em class="fa fa-times-circle"></em></a>
	<div class="-pt20 -right ampConsentResponseSendDismiss">
		<a  href="#"  class="confirm_failContinue  btn-default "     >Close</a>
	</div>
</div>

<div id="outdated">
	<p>It looks like you are using a deprecated browser, which might encounter problems properly displaying this site. For the best browsing experience, we recommend switching to <a href="https://www.google.com/intl/en_ca/chrome/">Google Chrome</a>.</p>
	<p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>
	<a style="display:none;" id="btnUpdateBrowser"></a>
</div>
<script type="text/javascript" async="true"
		src="<?= base_url() ?>assets/js/home.js"></script>

<input type="hidden" value="USED" id="defaultDepartment" />
</body>

</html>
