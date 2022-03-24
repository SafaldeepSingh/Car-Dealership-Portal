<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script type="application/ld+json">
	{
		"@context": "https://schema.org/",
		"@type": "AutomotiveBusiness",
		"url": "https://www.eleganceleasing.com",
		"name":"Elegance Leasing",
		"image": "https://www.eleganceleasing.com/images/Logo/logo-fr-ca.png",
		"logo": "https://www.eleganceleasing.com/images/Logo/logo-fr-ca.png",
		"sameAs": [
			"https://www.facebook.com/GroupElegance/","https://twitter.com/eleganceleasing"
		],
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": 45.463737,
			"longitude": -73.617653
		},
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "6225A, St-Jacques Ouest",
			"addressLocality": "Montr�al",
			"addressRegion": "Quebec",
			"postalCode": "H4B 1T8",
			"addressCountry": "CA"
		},
		"telephone":"514-482-4500",
		"priceRange":"7495$ - 338000$",
		"openingHoursSpecification": [ [{"@type":"OpeningHoursSpecification","dayOfWeek":"http:\/\/schema.org\/Monday","opens":"09:00","closes":"21:00"},{"@type":"OpeningHoursSpecification","dayOfWeek":"http:\/\/schema.org\/Tuesday","opens":"09:00","closes":"21:00"},{"@type":"OpeningHoursSpecification","dayOfWeek":"http:\/\/schema.org\/Wednesday","opens":"09:00","closes":"21:00"},{"@type":"OpeningHoursSpecification","dayOfWeek":"http:\/\/schema.org\/Thursday","opens":"09:00","closes":"21:00"},{"@type":"OpeningHoursSpecification","dayOfWeek":"http:\/\/schema.org\/Friday","opens":"09:00","closes":"21:00"}] ]
	}
</script>

<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "WebSite",
		"url": "https://www.eleganceleasing.com/",
		"potentialAction": {
			"@type": "SearchAction",
			"target": "https://www.eleganceleasing.com/used/search.html?q={search_term_string}",
			"query-input": "required name=search_term_string"
		}
	}
</script>

<script type="text/javascript" data-compiler="inline">
	(function(){
		var lastWidth = 0;
		var firstRun = 1;
		var timeout = false;
		try{

			function hideme(el)
			{
				if( typeof el.classList === 'undefined' ) return;// console.log( el, el.classList );
				el.classList.add('hideme');
			}

			function showme(el)
			{
				if( typeof el.classList === 'undefined' ) return;// console.log( el, el.classList );
				el.classList.remove('hideme');
			}

			var responsiveSite = function(event)
			{
				var width  = document.body.offsetWidth ? document.body.offsetWidth : window.outerWidth;
				var height = document.body.offsetHeight ? document.body.offsetHeight : window.outerHeight;
				var version = ( document.body.offsetWidth < 960 ) ? 'mobile':'desktop';
				var els = document.querySelectorAll('body > *');
				var iframe = document.getElementById('mobileSite');

				// console.log( 'version', version );
				for( i in els )
				{
					switch( version )
					{
						case 'mobile':
							if( els[i] === iframe ) showme( els[i] );
							else hideme( els[i] );

							if (iframe) {
								if( iframe.src == 'about:blank')
								{
									iframe.setAttribute('src', iframe.dataset['src']);
								}

								iframe.setAttribute('style', [
									'top: ' + 0,
									'display: block',
									'height: ' + (height ? (( height*1 ) +'px') : '100%'),
									'width: '  + (width ? (( width*1 ) +'px') : '100%'),
									'left: ' + 0,
									'position: absolute',
									''
								].join(';'));
							}
							break;
						case 'desktop':
							if( els[i] === iframe ) hideme( els[i] );
							else showme( els[i] );

							if (iframe) {
								iframe.setAttribute('style', [
									'display: none',
									''
								].join(';'));
							}
							break;
					}
				}

				if( version == 'desktop' )
				{
					if( lastWidth == width ) return;
					setTimeout(function(){
						if( typeof jQuery !== 'undefined') jQuery(window).trigger('resize');
					}, 500 );
				}
				lastWidth = width;
			}

			window.addEventListener( "resize", function(){
				clearTimeout( timeout );
				timeout = setTimeout(responsiveSite, 200)
			});

			window.addEventListener("DOMContentLoaded", function(){

				var s = document.createElement('style');
				s.setAttribute('type', 'text/css');
				s.innerHTML = '.hideme { display: none !important; } #mobileSite { display: none; }';
				document.body.appendChild( s );

				var i = document.createElement('iframe');
				var tgt = 'https://m.eleganceleasing.com/?nfr=1'.replace(/%2F/ig, 'index.html')
				tgt += (( tgt.indexOf('?') === -1 ) ? '?' : '&')+'nfr=1';
				i.setAttribute('data-src', tgt );
				i.setAttribute('src', 'about:blank');
				i.setAttribute('id',  'mobileSite');
				document.body.appendChild( i );

				responsiveSite();
			});
			setTimeout( responsiveSite, 1000 );
		} catch ( e )
		{
			console.log( e );
		}

	})();
</script>

<script type='text/javascript' data-compiler="inline">
	/*<![CDATA[*/
	(function() {
		"use strict";

		var STORAGE_KEY = 'onerror',
			storage = [],
			errorCollections = [],
			pixelAddress = '/en/ajax/logError';

		var startTime = new Date();

		getStoredErrors();

		/**
		 * Not to be used directly, should use getPixelFragment() instead
		 * @type {Node}
		 */
		var pixelFragment = undefined;
		/**
		 * create pixel fragment
		 * @returns {Node}
		 */
		function getPixelFragment() {
			if (pixelFragment !== undefined) return pixelFragment.cloneNode(true);
			var frag = document.createDocumentFragment();
			var img = document.createElement('img');

			frag.appendChild(img);

			//set our cached fragment by copying current fragment
			pixelFragment = frag.cloneNode(true);

			return frag;
		}

		/**
		 * Checks to see if this pixel already exists on the page
		 */
		function hasPixel(data) {
			return !!document.querySelector('img[data-line="' + data.line + '"][data-msg="' + data.msg + '"]');
		}

		function createPixel(data) {

			//No need to create same pixel more than once
			if (hasPixel(data)) return true;

			var fragment = getPixelFragment();
			var img = fragment.querySelector('img');
			var internal = isFileInternal(data.file) ? 1 : 0;

			var query = '?msg=' + encodeURIComponent(data.msg);
			//query += '&line=' + line;
			query += '&agent=' + encodeURIComponent(navigator.userAgent);
			query += '&url=' + encodeURIComponent(window.location.href);
			query += '&internal=' + internal;
			query += '&uid=' + getUID();
			query += '&top=' + ( (new Date()).getTime() - startTime.getTime() ); //time on page milliseconds
			query += '&mouseOver=' + encodeURIComponent( getCurrentMouseOverElement() );

			var src = pixelAddress + query;

			img.setAttribute('src', src);
			img.setAttribute('data-msg', data.msg);
			img.setAttribute('data-line', data.line);

			document.body.appendChild(fragment);
		}

		/**
		 * Get a string value of the current element the mouse is hovering over
		 * Does not include elements child elements if any
		 * @returns string
		 */
		function getCurrentMouseOverElement() {
			var hover = document.querySelectorAll(':hover');

			if (hover === undefined || hover.length === 0) {
				return 'none';
			}
			//cloning is an easy way to not include child elements
			hover = hover[hover.length-1].cloneNode();
			return hover.outerHTML;
		}

		/**
		 * determines if the file belongs to us (d2c)
		 */
		function isFileInternal(file) {
			return (file.indexOf(window.location.hostname) > -1);
		}

		function getUID() {
			if (typeof activeUserProfileMng !== 'undefined') {
				return activeUserProfileMng.uid;
			}
			return '';
		}

		function getStoredErrors() {
			if (typeof sessionStorage !== 'undefined') {
				if (sessionStorage.getItem(STORAGE_KEY)) {
					storage = JSON.parse(sessionStorage.getItem(STORAGE_KEY));
				}
			}

			return storage;
		}

		/**
		 * Determine if this error has shown up in this session
		 */
		function hasSessionErrorShown(msg) {
			getStoredErrors();

			return hasErrorShown(msg);
		}

		/**
		 * Find out if this error has been logged
		 */
		function hasErrorShown(msg) {
			if (storage === undefined) return false;

			for (var i = 0; i < storage.length; i++) {
				if (storage[i] === msg) {
					return true;
				}
			}

			return false;
		}

		window.onerror = function(msg, file, line, col, error) {
			console.log('onerror raised!');

			if (!hasSessionErrorShown(msg)) {
				//On page load, iterate over this and create pixels
				errorCollections.push({msg: msg, line: line, file: file});
				storage.push(msg);

				if (sessionStorage !== undefined) {
					sessionStorage.setItem(STORAGE_KEY, JSON.stringify(storage));
				}
			}

			if (document['body'] !== null && document['body'] !== undefined) {
				addPixelsToDom();
			}

			//throw error;
		};

		if (/WebKit/i.test(navigator.userAgent)) { // sniff
			var _timer = setInterval(function() {
				if (/loaded|complete/.test(document.readyState)) {
					clearInterval(_timer);
					onload(); // call the onload handler
				}
			}, 10);
		}

		// for Internet Explorer (using conditional comments), don't remove this block
		/*@cc_on @*/
		/*@if (@_win32)
				document.write("<"+"script id=__ie_onload defer src=javascript:void(0)><\/script>");
				var script = document.getElementById("__ie_onload");
				script.onreadystatechange = function() {
				  if (this.readyState == "complete") {
					onload(); // call the onload handler
				  }
				};
			/*@end @*/

		function addPixelsToDom() {
			for(var i = 0; i < errorCollections.length; i++) {
				createPixel(errorCollections[i]);
			}
		}

		function onload() {
			addPixelsToDom();
		}

		//Unused for now
		/*
			function errorWrap(func) {
				// Ensure we only wrap the function once.
				if (!func._wrapped) {
					func._wrapped = function () {
						try{
							func.apply(this, arguments);
						} catch(e) {
							console.log("errorWrap raised!");
							console.log("exception:");
							console.log(e);
							// send data to server
							// sendError(data);
							throw e;
						}
					}
				}
				return func._wrapped;
			}
			*/

		//Intercept event listener to wrap our error wrapper and log errors that are happening
		//This will be useful in the future if we want to catch Exception object using errorWrap()
		/*
			var addEventListener = window.EventTarget.prototype.addEventListener;
			window.EventTarget.prototype.addEventListener = function (event, callback, bubble) {
				addEventListener.call(this, event, errorWrap(callback), bubble);
			}

			var removeEventListener = window.EventTarget.prototype.removeEventListener;
			window.EventTarget.prototype.removeEventListener = function (event, callback, bubble) {
				removeEventListener.call(this, event, callback._wrapped || callback, bubble);
			}
			*/


		//Suite of tests that you can run to trigger different types of errors
		function _createScript(text) {
			var s = document.createElement('script');
			s.append(text);
			return s;
		}

		window.errorTests = {
			syntax: function() {
				var script = _createScript('}');
				document.body.append(script);
			},
			ofNull: function() {
				var text = 'var a = null; var b = a.what;';
				var script = _createScript(text);
				document.body.append(script);
			},
			invalidAssignment: function() {
				var script = _createScript('1 = func();');
				document.body.append(script);
			}
		};

		window.trackConversion = function() {
			if( typeof gtag == 'undefined') return -1;
			if( !window.d2c_awcId || !window.d2c_awcLabel ) return -3;
			if( deploymentType.toLowerCase() == 'live'){
				gtag('event','conversion', { 'send_to': d2c_awcId+'/'+d2c_awcLabel });
			}else{
				console.log("gtag('event','conversion', { 'send_to': "+d2c_awcId+'/'+d2c_awcLabel+" });");
			}
		}

	})();
	/*]]>*/
</script>

<style type="text/css" data-rl="1">
	/** /css/css.css **/

	/* =Reset default browser CSS. Based on work by Eric Meyer: https://meyerweb.com/eric/tools/css/reset/index.html
-------------------------------------------------------------- */
	html, body, div, span, applet, object, iframe,
	h1, h2, h3, h4, h5, h6, p, blockquote, pre,
	abbr, acronym, address, big, cite, code,
	del, dfn, em, font, img, ins, kbd, q, s, samp,
	small, strike, strong, sub, sup, tt, var,
	b, u, i, center,
	dl, dt, dd, ol, ul, li,
	fieldset, form, label, legend,
	table, caption, tbody, tfoot, thead, tr, th, td {
		border: 0;
		margin: 0;
		padding:0;
	}

	body {
		padding:0;
		margin-left: 0px;
		margin-top: 0;
		margin-right: 0px;
		margin-bottom: 0px;
		font-size: 14px;
		font-family: Montserrat;
		background:#ffffff url('<?= base_url()?>assets/images/blank.gif')  top center no-repeat;

	}

	input, textarea, select, button {
		font-family: Montserrat;
	}


	#nav li a.top_link,
	.up_menu ul#nav ul.sub li a.subtitle,
	.img_menu.up_menu ul#nav #MainMenu_NEW>ul.sub li>ul.sub>li.hasSub li a,
	body .wrapper .up_menu #nav{
		font-family: Montserrat;
	}

	h1{
		font-family: Montserrat;
		clear:both;
	}

	input[type=button],
	button.jqTransformButton span span,
	.button_1 a,
	.button_2 a,
	.button_3 a,
	.button_under a,
	.button_cmp_left a,
	.button_cmp_right a,
	.button_cmp_act a,
	.pullouts a,
	.idNav1 li a.top_link1,
	.cta_price.alt,
	.cta_credit.alt,
	.cta_testDrive,
	.cta_eval.alt,
	.cta_service.alt,
	.cta_parts.alt,
	.cta_tires.alt,
	.cta_svcpromo.alt,
	.box15 h2 a,
	.box19 h2 a,
	.box27 a,
	.vior,
	.btn-default, .btn-sm, .btn-lg
	{
		font-family: Montserrat;
	}


	h2,h3,h4,h5,h6{
		font-family: Montserrat;
	}


	strong{
		font-weight:900 !important;
	}

	/*
ul {
  padding: 13px 40px;
} */

	#mainDiv.wrapper {
		padding: 40px 0 0 0;
	}
	#mainDiv.wrapper .top_bg{
		max-height: 250px;
		min-height: 115px;
		/*padding-bottom: 5px;*/
	}

	.header-image-wrapper img.image-padding {
		padding-bottom: 5px;
	}

	.ckeditorWrapper h2 {
		margin-left: 0px !important;
		margin-right: 0px !important;
		margin-top: 15px !important;
		margin-bottom: 15px !important;
	}

	.ckeditorWrapper a {
		float:none !important;
		margin-left: 0px !important;
		font-size:100% !important;
	}


	.ckeditorWrapper p {
		float:none !important;
	}

	.ckeditorWrapper p:empty {
		margin-bottom: 1rem;
	}

	.clr{ clear:both;}

	.fleft{ float: left; }


	/* SHARED CSS */
	.icon-heading span.fa{
		font-size: inherit;
		width: 2rem;
		padding: 0.3rem;
		height: 2rem;
		text-align: center;
		border-radius: 50%;
		border: 1px solid var(--tab-text-color);
		color: var(--tab-text-color);
		background-color: var(--tab-color);
	}


	.icon-heading .secondaryText{
		color:#757575;
	}



	/*removes red box shadow for invalid inputs in FF*/
	input:invalid{box-shadow: none; -moz-box-shadow: none;}

	.conditions--container {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
	}

	.conditions--container .conditions {
		flex-grow: 2;
		font-size: 13px;
		line-height: 18px;
		color:#eeeeee;
	}

	.conditionsFooter{
		float: left;
		font-size: 13px;
		text-decoration: none;
		font-weight: normal;
		line-height: 18px;
		text-transform: none;
		text-align: left;
		margin-left: 5px;
		margin-top: 25px;
		color:#eeeeee;
	}

	.conditions--container a,
	.conditionsFooter a {
		text-decoration: underline;
		cursor: pointer;
		font-size: 13px;
		color:#eeeeee;
		font-weight: normal;
	}


	a{color: #303030;}

	.extendedPhoneTrigger a{
		color: inherit;
	}

	.languageBar{ margin: -20px auto 5px; height: 28px; padding:0; width:960px; text-align:top}
	.header-section .languageBar { margin: 0 auto 2.75rem; width: inherit; }
	.header-section .languageBar + .phone { margin-bottom: 0.5rem; }
	.languageBar div{ width:auto; float:right; margin-right:7px;  font-size:14px; color:#666666; text-decoration:none; text-align:right;}
	.languageBar div:first-of-type{margin-right:0;}
	.languageBar a{padding-right:35px; width:auto;  font-size:14px; color:#666666; text-decoration:underline; text-align:right;}
	.languageBar a:hover{padding-right:35px; width:auto;  font-size:14px; color:#666666; text-decoration:underline; text-align:right;}
	.languageBar a:visited{padding-right:35px; width:auto;  font-size:14px; color:#666666; text-decoration:underline; text-align:right;}
	.languageBar.languageBar-zero {
		height: 0;
		padding: 0;
		/*margin-top: -60px;*/
	}
	#mainDiv.wrapper.no-icons {
		padding-top: 0;
	}
	.wrapper{ margin:0 auto; padding:0; width:960px; padding-bottom:10px;text-align:top; position: relative;}
	.top_rou{ width:960px; height:4px; float:left; }
	.top_bg{ width:960px; max-height:250px; float:left; background:url(images/top_logo_bg.png) repeat-x;}
	.logo{ /*max-width:50%;*//*float:left;*/ padding:14px 0px 0px 9px;}
	.logoNoPadding img{ width:100%;}

	.languageBar a.desktop_lang_button{
		position: relative;
		display: inline-block;
		font-size: 12px;
		width: 28px;
		height: 26px;
		background-color: #ffffff;
		padding: 0;
		text-align: center;
		text-decoration: none;
		vertical-align: top;
		border: 1px solid #B6B7B9;
		color: #B6B7B9;
		color: #b39b6d;
	}
	.languageBar span.desktop_lang_button.active, .languageBar a.desktop_lang_button:hover{
		position: relative;
		display: inline-block;
		font-size: 12px;
		width: 30px;
		height: 28px;
		padding: 0;
		text-align: center;
		text-decoration: none;
		color: #ffffff;
		color: #ffffff;
		vertical-align: top;
		border: 0px;
		background-color: #b39b6d;
	}
	.languageBar span.desktop_lang_button:nth-child(even), .languageBar a.desktop_lang_button:nth-child(even){
		margin-left:2px;
	}
	.languageBar a.desktop_lang_button span.desktop_lang_button_text, .languageBar span.desktop_lang_button span.desktop_lang_button_text{
		position: absolute;
		top: 50%;
		transform: translate(-50%, -50%);
	}


	.logoNoPadding{ max-width:50%; float:left; margin-top:-4px;}

	.v-card.top_bg {
		display: flex;
		justify-content: space-between;
		align-items: center;
		margin-top: 10px;
	}

	.header-section {
		display: flex;
		/*width: 25%;*/
		vertical-align: middle;
		/*padding-bottom: 20px;*/
		align-content: space-between;
		align-items: center;
	}
	.header-image-wrapper {
		min-height: 97px;
	}
	.header-section.image {
		width: 25%;
	}
	.header-section.image > .header-image-wrapper img {
		max-height: 250px;
	}
	.header-section > div {
		display: inline-block;
	}
	.header-section .phone {
		width: auto;
		/*height: 70px;*/
		/*margin: 25px 10px 15px 5px;*/
		font-size: 14px;
		color: #525252;
		text-decoration: none;
		text-align: right;
	}
	.header-section:nth-child(2).image {
		text-align: right;
	}
	.header-section .phone.phone_right{
		text-align: right;
	}
	.header-section .phone.phone_left {
		text-align: left;
	}
	.header-section > .v-card {
		/*min-height: 90px;*/
	}
	.top_bg table tbody td:nth-child(2) .header-section {
		width: 100%;
	}
	.top_bg.divTable .header-section:nth-child(2) {
		text-align: right;
	}
	.top_bg table td .header-section {
		display: inline-block;
	}

	.phone h2{  font-size:22px; color:#525252; font-weight:bold; text-decoration:none;}
	.phone h1{  font-size:25px; color:#525252; font-weight:bold; text-decoration:none;}
	.phone div.org{  font-size:22px; color:#525252; font-weight:bold; text-decoration:none;}
	.phone_text   { color:#b39b6d; text-decoration:none; padding-left:2px; padding-top:2px;}
	.phone_text a{ color:#b39b6d; text-decoration:none; }
	.phone_text a:hover{ font-size:13px; color:#00579c; text-decoration:none; }

	a.phone-link {
		display         : inline-block !important;
		padding         : 0 !important;
		color           : inherit;
		text-decoration : none;
	}
	a.phone-link:hover { color: inherit; text-decoration: none; }

	#slider{ width: 960px; margin-left: 0px; box-shadow: none;  }

	.centered {position: absolute; left:50%; top: 50%;}

	.up_menu{ width:960px; height:31px; z-index:1111; float:right;white-space:nowrap; }
	.banner{ width:960px; height:301px; float:left; margin-left:2px; margin-bottom:6px;}
	.me_top{ width:967px; height:8px; float:left;}
	.me_bg{ width:967px; height:auto; float:left; background:url(images/me_bg_rou.png) left top repeat-y;}
	.me_desc{margin:0px;height:auto;font-size:14px; overflow:hidden;padding:5px 15px}
	.me_bou{ width:967px; height:9px; float:left;}
	.one{ width:225px; height: auto; float:left; margin-left:10px; margin-top:8px;}
	.two{ width:225px; height: auto; float:left; margin-left:14px; margin-top:8px;}
	.three{ width:225px; height: auto; float:left; margin-left:14px; margin-top:8px;}
	.four{ width:225px; height: auto; float:left; margin-left:4px; margin-top:4px;}
	.Vous{ font-size:17px; color:#000000; text-decoration:none; padding-bottom:2px;}
	.class{ font-size:13px; color:#575757; text-decoration:none; padding-bottom:0px; padding-top:6px;}
	.class1{ font-size:13px; color:#575757; text-decoration:none; height:157px; margin-top:6px;}
	.border{border:1px solid #d3d3d3; width:218px;}
	.box{ width:75px; height:73px; text-align:center; padding-top:10px; margin:0 auto;}
	.ca{height:143px;}
	.sub{height:193px;}
	.box225{ width:225px; float:left;  font-size:13px; color:#575757; text-decoration:none; padding-bottom:3px;}
	.box224{ width:225px; float:left; padding-bottom:6px;}
	.box223{ width:225px; float:left; padding-top:3px;}
	.nos{ width:710px; height:100%; margin-top:5px; float:left;  margin-right: 5px;}
	.nos_top{ width:716px; height:9px; float:left;}
	.nos_bg{ width:716px; height:auto; float:left; background:url(images/nos_bg.png) left top repeat-y;}
	.nos_bou{ width:716px; height:9px; float:left;}
	.nos_text{height:30px; font-size:18px; color:#575757; text-decoration:none; text-align:center;}
	.arow{ width:695px; height:160px; float:left;   margin-left: 4px;}
	.con{ font-size:13px; color:#3c3c3c;}

	.desc {width: 710px; float: left; margin-right: 5px;}
	.desc_bg {width: 100%; height: 248px; float: left; background: url("images/nos_bg.png") repeat-y scroll left top transparent;}
	.addr{margin-top:25px;}
	.addr_mid{background:url(images/me_bg_rou.png) left top repeat-y;}
	.hidden{display:none !important;}

	.hours_rem { text-align: right;line-height: 18px; float: right;padding-right: 15px; }
	.hours_rem a{ font-size: 11px; text-decoration: none; }
	#l{width:60px; float:left;}

	/*#g{width:140px; float:left;}*/

	.der{width:460px; height:255px; margin-top:1px; float:left;}
	.der_top{ width:464px; height:8px; float:left;}
	.der_bg{ width:444px; height:226px; float:left; background:url(images/der_bg.png) left top repeat-y; padding:6px 10px 10px 10px;}
	.der_bou{ width:464px; height:8px; float:left;}
	.dem{width:495px; height:255px; margin-top:3px; float:left; margin-left:5px;margin-bottom:6px;}
	.sbox1{ width:240px; height:123px; float:left; padding:0 5px 10px 5px}
	.sbox2{ width:240px; height:123px; float:left; padding:0 5px 10px 5px}
	.sbox3{ width:240px; height:123px; float:left; padding:0 5px 10px 5px}
	.sbox4{ width:240px; height:123px; float:left; padding:0 5px 10px 5px}

	.bottom4boxes{float:left;width:100%;padding:0;}
	.bottom4boxes * {box-sizing: border-box;}
	.bottom4boxes > .box245{float:left;width:25%;max-width:245px;}
	.bottom4boxes > .box241{float:left;margin:10px 6px;}
	.bottom4boxes > .box241:first-child{margin-left:0px;}
	.bottom4boxes > .box241:last-child{margin-right:0px;}

	@media only screen and (max-width: 1024px) {
		.bottom4boxes table {
			padding: 0 10px;
		}
	}

	.sboxUsed{ float:left; }
	.sbox_top{ width:247px; height:5px; float:left;}
	.sbox_bg{ width:247px; height:107px; float:left; background:url(images/sbox_bg.png) left top repeat-y;  font-size:19px; color:#191919; text-align:center;}
	.sbox_bou{ width:247px; height:5px; float:left;}
	.da{ margin-top:12px;}
	.da1{ margin-top:10px;  font-size:19px; color:#191919; text-align:center;}
	.da1 h1{ padding:0; margin:0;  font-size:19px; color:#191919; text-align:center; font-weight:normal;}


	.addline{
		color:#000000!important;
		overflow: hidden;
		text-align: center;
	}

	#returnPopupNextModel{
		height: 40px!important;
	}

	.addline::before,
	.addline::after {
		background-color: #000;
		content: "";
		display: inline-block;
		height: 1px;
		position: relative;
		vertical-align: middle;
		width: 50%;
	}

	.addline:before {
		right: 0.5em;
		margin-left: -50%;
	}
	.addline:after {
		left: 0.5em;
		margin-right: -50%;
	}

	.sbox1 a.cLink,
	.sbox2 a.cLink,
	.sbox3 a.cLink,
	.sbox4 a.cLink{
		display:block;
		height:100%;
		width:100%;
		text-decoration: none;
	}
	.sbox1 a.cLink:hover,
	.sbox2 a.cLink:hover,
	.sbox3 a.cLink:hover,
	.sbox4 a.cLink:hover{
		text-decoration: none;
	}

	.homepage--business-description,
	.homepage--business-description-cert,
	.homepage--business-description .border_box {
		background-color:#444444;
		background-color:;
		color:#eeeeee;
		color:;
	}

	.homepage--business-description a,
	.homepage--business-description-cert a {
		color:#eeeeee;
		color:;
	}

	.homepage--business-description .border_box,
	.homepage--business-description-cert .border_box {
		background-color: inherit;
		color:inherit;
	}

	.black_text{ font-size:24px; color:#191919; margin-bottom:4px;}
	.gray_text{ font-size:13px; color:#191919;}
	.but{ float:right; margin:0px 0px 0px 0px;}
	.line{ border-bottom:1px solid #d2d2d2; margin-top:5px; margin-bottom:5px;}
	.viv{ margin-top:5px; margin-left:5px;  font-size:24px; color:#fff; color:#eeeeee; text-align: justify;}
	.tw{ width:260px; height:40px; float:right; margin-top:5px; text-align: right;}
	.ENGLISH .viv{text-transform: capitalize;}

	.MainBoxLayer .viv {
		margin-left: 0;
	}

	.social-sharing{
		width:100%;
		clear:both;
		float:right;
		margin-top:5px;
	}
	.social-sharing > div.social{
		float:right;
		padding-left:5px;
	}
	.social-sharing > div.social:last-child{
		padding-left:0;
	}
	.social-sharing > div.social:first-child{
		padding-right:5px;
	}

	.MainBoxLayer .social-sharing > div.social:first-child{
		padding-right:0;
	}

	#footerDiv .add { color: var(--footer-items-link-color);  }
	#footerDiv .add .org{ color: var(--footer-link-title-col); }

	.pour{ width:725px; height:auto; float:left;}
	/*.{ font-size:18px; color:#d4d4d4;}*/
	.pageno{width:236px; height: auto; float:left; margin-left:5px; padding:0; text-transform: none; font-weight:normal; margin-top:10px; }
	.pageno ul{ list-style-type:none; margin:0 0 15px 0; padding:0; width:236px; text-transform: none; font-weight:normal;  }
	.pageno ul li{ list-style-type:none; margin:0;display: block; float:none; width:236px; text-transform: none; font-weight:normal;}
	.pageno ul li a{ width:237px; margin:0; display: block; float:none;  font-size:13px; color:var(--footer-items-link-color); text-decoration:none; font-weight:normal;  line-height:18px; text-transform: none; text-align:left; text-transform: none;   }

	.pageno ul li span, .pageno ul li a.ftitle{  width:236px; margin:0; display: block; float:none;  font-size:14px; color:#fff; color:var(--footer-link-title-col); text-decoration:none; margin-bottom:10px; font-weight:normal;  line-height:18px; text-align:left;   }
	.pageno ul li a.ftitle:hover{ margin-bottom: 10px;}
	.pageno ul li a:hover{ list-style-type:none;  margin:0; color:var(--footer-link-title-col);  text-decoration:none; display:block; line-height:18px;}
	.pageno li a.active{ list-style-type:none;  margin:0; color:#919191;  text-decoration:none;  display:block; line-height:18px;}

	.ENGLISH .pageno ul li a{text-transform: capitalize;}

	.add{ width:230px; height:auto; float:left;  font-size:13px; color:#919191; text-decoration:none; font-weight:normal;  line-height:18px; text-transform: none; text-align:right; text-transform: none; margin-top:10px;margin-bottom:10px;}
	.copy{ float:left;  font-size:13px; color:#919191; text-decoration:none; font-weight:normal;  line-height:18px; text-transform: none; text-align:left; text-transform: none; margin-left:5px; margin-top:25px;}
	.copy a{ text-decoration: underline;cursor:pointer;  font-size:13px; color:#919191; font-weight:normal}
	.copy a:hover{ color:#d4d4d4;  font-weight:bold;}

	.footer-lists li > span {
		text-transform: uppercase;
	}

	#footerWrapper .v-card.add {
		line-height: initial;
	}

	.social-media-icons {
		display: flex;
		flex-direction: row;
		justify-content: flex-end;
	}

	.social-media-icons .social-icons {
		width : auto;
		height: auto;
		margin: 0 4px;
	}

	.social-media-icons .social-icons .fab {
		margin-top: 0;
		font-size : 1.9em;
		color : var(--footer-link-title-col);
	}

	@media only screen and (max-width: 1024px) {
		.header-section .phone.phone_right {
			padding-right: 10px;
		}
		.header-section .phone.phone_left {
			padding-left: 10px;
		}

		#footer {
			padding-left: 10px;
			padding-right: 10px;
		}
	}

	@media only screen and (max-width: 999px) {
		#MainMenu_SEARCH_BAR {
			display: none;
		}

		.up_menu ul#nav > li.firstMenu {
			padding-left: 10px;
		}

		.up_menu ul#nav > li:nth-of-type(2) {
			padding-right: 10px;
		}

		.up_menu ul#nav > li:nth-of-type(2) > ul.sub {
			right: 10px;
		}

		.languageBar div:first-of-type {
			margin-right: 10px;
		}
	}

	.divSpan.pageno {
		margin-left: 0;
	}

	.divSpan.pageno ul li span, .divSpan.pageno ul li a.ftitle {
		font-size: 15px;
		max-width: 225px;
	}

	.divSpan.pageno ul li a {
		font-size: 14px;
	}

	.adr {
		line-height: 1.2rem;
		margin: 0.5rem 0;
	}

	/* Footer - dealer info aligned to the left */

	#footer.dealer-position-left .viv {
		margin-bottom: 2rem;
	}

	#footer.dealer-position-left .divSpan3 {
		float: left;
		margin-top: 15px;
		padding-right: 30px;
		text-align: left;
	}

	#footer.dealer-position-left .divSpan9 {
		float: right;
	}

	#footer.dealer-position-left .social-sharing {
		float: unset;
		clear: unset;
		margin: 0;
	}

	#footer.dealer-position-left .social {
		float: left;
	}

	#footer.dealer-position-right.dealer-align-left .social-sharing {
		width: 25%;
		float: left;
		padding-left: 75%;
	}

	#footer.dealer-position-right.dealer-align-left .social {
		float: left;
		margin-left: 1rem;
	}

	#footer.dealer-position-right.dealer-align-left .social:first-child {
		margin: 0;
		padding: 0;
	}

	#footer .icon-text{
		margin-bottom: .4rem;
	}

	#footer .icon-text span{
		width:20px;
		padding: 0 !important;
	}

	/*papan*/
	.smallpic_box{width:329px; height: auto; float:left; margin:0;}
	.smallpic43{width:43px; height:31px; float:left; margin:0 5px 0 0; border:2px solid #FFFFFF;}

	.details{width:81px; height:30px;  display:block;  }
	a.details{width:81px; height:30px; background:url(images/details.png) left top no-repeat;}
	a:hover.details{width:81px; height:30px; background:url(images/details.png) left -32px no-repeat;}
	.big_picbox{min-height: 110px;width:146px;}
	.big_picbox img{ display: block; }

	.picbox_videobtn_en, .picbox_videobtn_fr {display:block;height:45px;}
	.picbox_videobtn_en {background: url('images/video-btn-thumb_en.png') no-repeat scroll 0 0 / 100% auto transparent;}
	.picbox_videobtn_fr {background: url('images/video-btn-thumb_fr.png') no-repeat scroll 0 0 / 100% auto transparent;}
	.picbox_videobtn_en:hover {background: url('images/video-btn-thumb_en_hover.png') no-repeat scroll 0 0 / 100% auto transparent;}
	.picbox_videobtn_fr:hover {background: url('images/video-btn-thumb_fr_hover.png') no-repeat scroll 0 0 / 100% auto transparent;}

	.big_picbox_wrapper {
		width:146px;
		float: left;
		margin: 0 10px 0px 21px;
	}

	.text_title a{ display:block;text-decoration: none; width:329px; height: auto; margin:0; padding-bottom:5px;  font-size:14px; color:#414141; font-weight:bold;}
	.text_title2{width:329px; height:32px; float:left; margin: 0 ;  font-size:14px; color:#414141;}

	.sold_car_note{background-color: #1E1E1E; border-radius: 5px; -webkit-border-radius: 5px; color: #FFF; width:100%; padding: 10px 0; text-align: center;  margin-top: 15px;}
	.sold_car_note a {color: #FFF;}
	.sold_car_note a:hover {color: #BBB;}

	.text_title3{width:329px; height: auto; float:left; margin: 0 ; padding-bottom:7px;  font-size:14px; color:#484848;}
	.text_box2{width:329px; height: auto; float:left; margin: 0 0px 0px 0px;  }
	.main_picbox{width:671px; min-height:170px; float:left; background:url(images/line.png) left bottom  repeat-x; background-position:bottom; padding:0; margin:0 ;}



	.box2_details_footer2{width:681px; height:15px; float:left; background:url(images/box_footer.png) left top no-repeat;}
	.box2_details_midEx{width:100%; height: auto; background:none; padding:0 0px;height:85px;}
	.box2_details_text span{ text-align:center;  font-size:18px; color: #FFFFFF; font-weight:bold;}
	.box2_details_footer22{width:971px; height:15px; float:left; background:url(images/box_footer.png) left top no-repeat;background-size:971px auto;}
	.box170{position: relative;width:671px; min-height:170px; float:left; background:url(images/line.png) left bottom no-repeat; background-position:bottom; padding:0; margin:0 0px 10px 0;}





	.customBoxBasic{
		width:241px;
		height:116px;
		float:left;
		padding:5px 0 0 0;
		background-position: left top;
		background-repeat: no-repeat;
		background-size: 241px 121px;
		font-size:19px;
		color:#191919;
		text-align:center;
		font-weight:normal;
		cursor:pointer;
	}
	.customBoxBasic:hover{
		color:#fff;
	}
	.custom5 {
		background-image: url(images/box22_hover.png);
	}
	.custom55 {
		background-image: url(images/box22.png);
	}
	.custom665 {
		background: url(images/box23_hover.png);
	}
	.custom6655 {
		background-image: url(images/box23.png);
	}
	.custom675 {
		background-image: url(images/box27.png);
	}
	.custom6755 {
		background-image: url(images/box27_hover.png);
	}
	.custom685 {
		background-image: url(images/box28.png);
	}
	.custom6855 {
		background-image: url(images/box28_hover.png);
	}




	.image_ribbon {
		position: absolute;
		left: -5px;
		top: -4px;
		z-index: 1;
		overflow: hidden;
		width: 112px;
		height: 112px;
		text-align: right;
	}

	.image_ribbon span {
		font-size: 14px;
		color: #ffffff;
		text-align: center;
		line-height: 28px;
		transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
		width: 148px;
		display: block;
		background: #cc0000;
		box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
		position: absolute;
		top: 30px;
		left: -30px;
	}
	.image_ribbon span::before {
		content: "";
		position: absolute;
		left: 0px;
		top: 100%;
		z-index: -1;
		border-left: 3px solid #cc0000;
		border-right: 3px solid transparent;
		border-bottom: 3px solid transparent;
		border-top: 3px solid #cc0000;
	}
	.image_ribbon span::after {
		content: "";
		position: absolute;
		right: 0px;
		top: 100%;
		z-index: -1;
		border-left: 3px solid transparent;
		border-right: 3px solid #cc0000;
		border-bottom: 3px solid transparent;
		border-top: 3px solid #cc0000;
	}

	.image_ribbon_vdp {
		position: absolute;
		left: -5px;
		top: -6px;
		overflow: hidden;
		width: 194px;
		height: 194px;
		text-align: right;
		z-index: 555;
	}
	.image_ribbon_vdp span {
		font-size: 17px;
		color: #ffffff;
		text-align: center;
		line-height: 36px;
		transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
		width: 226px;
		display: block;
		background: #cc0000;

		box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
		position: absolute;
		top: 51px;
		left: -45px;
	}
	.image_ribbon_vdp span::before {
		content: "";
		position: absolute;
		left: 0px;
		top: 100%;
		z-index: -1;
		border-left: 3px solid #333333;;
		border-right: 3px solid transparent;
		border-bottom: 3px solid transparent;
		border-top: 3px solid #333333;;
	}
	.image_ribbon_vdp span::after {
		content: "";
		position: absolute;
		right: 0px;
		top: 100%;
		z-index: -1;
		border-left: 3px solid transparent;
		border-right: 3px solid #333333;;
		border-bottom: 3px solid transparent;
		border-top: 3px solid #333333;;
	}

	.ribbon-container {
		width    : 300px;
		height   : 300px;
		overflow : hidden;
		position : absolute;
		top      : 0;
		left     : 0;
	}

	.ribbon-container .corner-ribbon {
		z-index    : 555;
		margin     : 0;
		padding    : 0.5rem 0 !important; /* necessary the parent might have a padding 0 on all children */
		box-shadow : 0 3px 10px -5px rgba(0, 0, 0, 1);

		font-size   : 17px;
		line-height : 23px;
		text-align  : center;

		position   		 : absolute;
		top              : 0;
		left             : 0;
		transform        : translateX(-30%) translateY(0%) rotate(-45deg);
		transform-origin : top right;

		background : #000000;
		color      : #ffffff;
	}

	.ribbon-container .corner-ribbon:before,
	.ribbon-container .corner-ribbon:after {
		content    : "";
		position   : absolute;
		top        : 0;
		margin     : 0 -1px;
		width      : 100%;
		height     : 100%;
		background : #000000;
	}

	.ribbon-container .corner-ribbon:before { left: 100%; }
	.ribbon-container .corner-ribbon:after { right: 100%; }


	.searchright {
		width:280px;
		height:116px;
		padding:5px 0 0 0;
		background: url(images/right-search-box.png) left top repeat-x;
		font-size:19px; color:#191919; text-align:center; font-weight:normal;cursor:pointer;
	}


	.searchrighthover {
		width:280px;
		height:116px;
		padding:5px 0 0 0;
		margin:0 0 0 0;
		background:url(images/right-search-box-hover.png) left top repeat-x;
		font-size:19px; color:#FFFFFF; text-align:center; font-weight:normal; cursor:pointer;
	}


	.searchrightXXX {
		width:280px;
		height:116px;
		padding:5px 0 0 0;
		background: url(images/right-search-box.png) left top no-repeat rgb(51,51,51);
		font-size:14px; color:#FFFFFF; text-align:center; font-weight:bold;cursor:pointer;
		border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px;
		background-size: 280px;
	}


	.searchrighthoverXXX {
		width:280px;
		height:116px;
		padding:5px 0 0 0;
		margin:0 0 0 0;
		background:url(images/right-search-box-hover.png) left top no-repeat rgb(51,51,51);
		font-size:14px; color:#FFFFFF; text-align:center; font-weight:bold; cursor:pointer;
		border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px;
		background-size: 280px;

	}

	.searchright-text{
		margin-left:100px;
		text-align:left;
		width:60%;
	}

	.searchright-text p{
		margin:15px 0 0;
	}



	.pageno2{height:24px; }
	.pageno2 ul{ list-style-type:none; margin:0; padding:0; text-transform: none;  }
	.pageno2 ul li{ list-style-type:none; margin:0; display: inline;}
	.pageno2 ul li a{ list-style-type:none;  margin:0; display: block;   font-size:14px; color:#323232; text-decoration:none; padding:0 7px; margin-right:2px; font-weight: bold;  line-height:24px; text-transform: none; text-align: center; text-transform: none; background:#b3b4b5; float:left; -moz-border-radius:4px;
		-webkit-border-radius:4px;
		border-radius:4px;
		-khtml-border-radius:4px;}
	.pageno2 ul li a:hover{ list-style-type:none;  margin:0; display: block;   font-size:14px; color:#FFFFFF; text-decoration:none; padding:0 7px; margin-right:2px; font-weight: bold;  line-height:24px; text-transform: none; text-align: center; text-transform: none; background:#282828; float:left; -moz-border-radius:4px;
		-webkit-border-radius:4px;
		border-radius:4px;
		-khtml-border-radius:4px;}
	.pageno2 li a.active{ list-style-type:none;  margin:0; display: block;   font-size:14px; color:#FFFFFF; text-decoration:none; padding:0 7px; margin-right:2px; font-weight: bold;  line-height:24px; text-transform: none; text-align: center; text-transform: none; background:#282828; float:left; -moz-border-radius:4px;
		-webkit-border-radius:4px;
		border-radius:4px;
		-khtml-border-radius:4px;}
	.main_box{width:960px; margin:0 auto;}

	.main_left_box{width:670px; height:auto; float:left;padding-right: 10px;}

	.main_left_box ul{padding:0px;}

	/*
.box_top_round{width:681px; height:15px; float:left; background:url(/images/box_top.png) left top no-repeat; margin-top:5px;}
.box_mid_round{width:671px; height: auto; float:left; background:url(/images/box_mid.png) left top repeat-y; padding:0 5px;}
*/

	.box_mid_round {
		background-color: rgb(255,255,255);
		-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
		background-color: rgba(255,255,255,1);
		border-radius: 5px;
		box-shadow: none;
		float: left;
		height: auto;
		margin-top: 10px;
		/*padding: 10px 10px;*/
	}


	.box_top_round {
		display: none;
	}

	.box2_details_footer2 {
		display: none;
	}
	.details_box img.vip{
		margin-top: -48px;
		width: 140px;
		border: 1px;
		border-radius: 4px;
	}

	.box_top_round2{width:971px; height:15px; float:left; background:url(images/box_top.png) left top no-repeat;background-size:971px auto; margin-top:5px;}
	.box_mid_round2{width:971px; height: auto; float:left; background:url(images/box_mid.png) left top repeat-y;background-size:971px auto; padding:0 5px;}
	.page_name{width:650px; height:30px; float:left; background:url(images/sho.png) center bottom no-repeat; background-position:bottom; padding:0 0px 0px 21px; line-height:30px;  font-size:14px; color:#414141;}


	.page_name a{  line-height:30px;  font-size:14px; color:#414141; text-transform:none; text-decoration:none;}
	.page_name a:hover{  line-height:30px;  font-size:14px; color:#00589c; text-transform:none; text-decoration: underline;}

	table.vehicleListTable a{display: table-cell; vertical-align: middle;line-height:1.2;}
	table.vehicleListTable a:hover{display: table-cell; vertical-align: middle;line-height:1.2;}

	.Porsche2{width:100%;height:31px; float:left; padding:0 0px 20px 21px; margin:15px 0 25px 0; line-height:31px;  font-size:30px; color:#414141;display:inline}
	.Porsche2 h1{font-weight:normal; font-size:30px; color:#414141;}
	/*.Trierpar{width:60px; height:31px; float:left; padding:0 5px 0px 0px; margin:15px 0; line-height:31px;  font-size:13px; color: #777777; font-weight:bold; text-align:right;}*/
	.Trierpar{ font-size:12px; color: #5B699C; font-weight:normal;padding-left:5px;}
	.selected_box2{width:175px; height:31px; float:left; padding:0 0px 0px 0px; margin:15px 0; line-height:31px;  font-size:30px; color:#414141;}
	.selected_orderby{width:135px; float:right; padding:0 0px 0px 0px; margin:10px 10px 0px 0px;  font-size:30px; color:#414141;}

	.prix{width:79px; height:78px; float:left; position:absolute; z-index:11; margin-top:-4px; margin-left:-4px; top:0px;}
	.pageno5{width:100%; height:24px; margin:30px 0 20px 0px; padding:0; float:left }
	.pageno6{width:254px; height:24px; float:left; text-align:right;}
	.suivant{width:280px; height:19px; float:left; padding-top:5px;}

	.main_right_box{width:280px; height:auto; float:left;}

	.box7{width:290px; height:12px; float:left; background:url(images/left_box_top.png) left top no-repeat; }
	.box7Link{width:290px; height:12px; float:left; background:url(images/left_box_top.png) left top no-repeat; }
	.box7_mid{width:280px; height: auto; float:left; background:url(images/left_box_mid.png) left top repeat-y; padding:0 2px;}
	.box7_mid_full{width:956px; height: auto; float:left; background:none left top no-repeat 0 0 transparent; padding:0 2px 15px; border-bottom: 1px solid #BBB;}
	.simular_v_box{
		width: 265px;
		padding: 0px 0px 5px 10px;
		margin-bottom: 5px;

	}
	/*LIOR*/
	.boxSearchNews{margin-top:-3px;margin-left:-5px;width:285px; height:12px; float:left; background:url(images/left_box_top_280.png) left top no-repeat;}
	.boxSearchNews_mid{margin-left:-5px;padding:0px;width:281px; height: auto; float:left; background:url(images/left_box_mid_280.png) left top repeat-y; }
	.boxSearchNews_footer15{margin-left:-5px;width:285px; height:12px; float:left; background:url(images/left_box_footer_280.png) left top no-repeat;}

	.box7H_mid{width:280px; float:left; padding-bottom:6px;}

	/*.Recherche22{height: 20px; padding:10px 10px;  font-size:18px; color:#0f1a1e;}*/
	.Recherche22{height: 20px; padding:10px 7px;  font-size:18px; color:#000000;}
	.simTitle{height: auto; padding:0px;  font-size:18px; color:#0f1a1e;}
	.box8{width:270px; height: auto; float:left; padding:0px 0px 0px 10px;}
	.box9{width:20px; height:18px; float:left; padding:0px 0px 14px 0px;  font-size:18px; color:#0f1a1e;}
	.box11{width:100px; height:11px; float:left; padding:7px 0px 14px 0px;  font-size:13px; color:#575757; line-height:18px;}
	.box12{width:130px; height:11px; float:left; padding:7px 0px 14px 0px;  font-size:13px; color:#575757; line-height:18px;}
	.select_box14{height: auto; float:left; padding:0px 10px 0px 0px; margin-bottom:3px;}
	.select_box16{height: auto; float:left; padding:0px 10px 0px 10px; margin-bottom:3px;}
	.select_box15{height: auto; float:left; padding:10px 10px 0px 10px; margin-bottom:10px;}
	.select_box115{width:115px; height: auto; float:left; padding:0px 0px 0px 10px; margin-bottom:10px;}
	.select_box80{width:80px; height: auto; float:left; padding:0px 0px 0px 0px; margin-bottom:10px;}
	.a_text{width:20px;  float:left;  font-size:13px; color:#575757; line-height:31px; text-align:center; padding:0 5px;}
	/*.ajouter{width:260px; height: auto; float:left; padding: 10px 10px 10px 10px;  font-size:14px; color: #FFFFFF; background:#1f1f1f url(/images/arrow3.png) right top no-repeat; background-position:right;}*/
	.ajouter{width:100%; height: auto; float:left; padding: 10px 0;  font-size:14px; color: #FFFFFF; background-color:#1f1f1f;margin:5px 0 10px 0px;}
	.ajouter_a{background: url("images/search-down-arrow.png") no-repeat scroll left 3px transparent; padding-left: 25px; font-size:14px; color: #FFFFFF; text-decoration:none; }
	.ajouter_a_full{background: url("images/search-right-arrow.png") no-repeat scroll right -1px transparent; padding-right: 25px; font-size:14px; color: #FFFFFF; text-decoration:none; }
	.box13{width:260px; height: auto; float:left; padding:0px 10px 0px 10px;}
	.input_box2{width:20px; height:18px; float:left; padding:0px 0px 14px 0px;  font-size:18px; color:#0f1a1e;}
	.input_text{
		width:195px;
		height:11px;
		float:left;
		/*padding:7px 0px 14px 5px;*/
		padding:3px 0px 7px 5px;
		font-size:13px;
		color:#575757;
		line-height:18px;
	}
	.button_box2{width:260px; height: auto; float:left; }
	.button_boxS2{
		width:246px;
		height: 29px;
		float:left;
		padding: 10px 3px 13px 3px;
	}

	.box-footer15{width:290px; height:12px; float:left; background:url(images/left_box_footer.png) left top no-repeat;}

	.dis{ margin-top: 5px; margin-left: 5px; width:240px;}
	.dis_custom{ width: 240px;width:240px;}

	.dis_top{ width:246px; height:9px; float:left;}
	.dis_top_custom{ width:238px; height:40px; float:left; color:#000000; background:#cbcbcb;}
	.dis_bg{ width:246px; height:150px; float:left; color: #282828; background:url(images/dis_bg.png) left top repeat-y;}
	._dis_bg{ width:240px; height:200px; float:left; color: #282828;}

	.dis_bg_custom{ float:left; color:#282828; background:rgba(255,255,255,1);}
	._dis_bg_custom{ float:left; color:#282828; background-color:rgba(255,255,255,1);}

	.dis_bou{ width:246px; height:50px; float:left; color:#2d2d2d; background:url(images/dis_bou.png) left top no-repeat;}
	._dis_bou{   width: 240px;
		height: 38px;
		float: left;
		border-radius: 0 0 6px 6px;
		margin-top: 14px;
		color:#2d2d2d;;
	}

	.dis_bou_custom{ width:238px; height:50px; float:left; padding-top:5px; color:#444444; background:#eeeeee;}

	._dis_bou_custom{
		width: 240px;
		height: 40px;
		float: left;
		color:#444444;
		border-radius: 0 0 6px 6px;
		margin-top: 12px;
		background-color:#eeeeee;
	}

	.dis_bou_2{ width:246px; height:9px; float:left; color:#2d2d2d; background:url(images/dis_bou_2.png) left top no-repeat;}
	.dis_text{  font-size:23px; padding:4px 0px 0px 15px;}
	.lundi_text{  font-size:13px; padding:2px 0px 0px 20px; line-height:14px;}
	.lundi_text_homepage_h248{font-size: 13px;    line-height: 18px;    padding: 10px 0 0 20px; }
	.lundi_text th{text-align:left;font-weight:normal;width:60px;}
	.lundi_text td{text-align:left;}
	.p{ height: 16px; float:left; padding:7px 5px 0px 10px;  font-size:13px;}
	.e{ height: 16px; float:right; padding:7px 0px 0px 0px;  font-size:14px;}

	.box288, .box288_custom{width:280px; height:auto; float:left; }

	._box288, ._box288_custom{width:280px; float:left; }


	.box288Used{width:280px; height:auto; float:left; margin-left:0px;}
	.box288New{width:280px; float:left;  }
	.box288New_custom{float:left;}

	.box288NewQM, .box288NewQM_mobile {
		border-radius:5px;
		background-color: rgb(255,255,255);
		-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
		background-color: rgba(255,255,255,1);
		box-shadow: none;
		clear:both;
		/*height:235px;*/
		float:left;
		width:280px;
		margin-bottom: 5px;
	}

	.box288NewQM_mobile { width: 100%; }
	.box288NewQM_mobile .Recherche22 { text-align: center; }
	.box288NewQM_mobile table { width: 100%; }
	/* important is needed so input are display full width.*/
	.box288NewQM_mobile .jqTransformInputWrapper { width: 100%!important; }
	.box288NewQM_mobile .jqTransformInputWrapper input { width: 95%!important; }

	.box288QM{ height:auto; float:left; margin-top:5px; font-size: 14px;font-weight: normal;}
	.box288QM_custom{width: 278px;margin: 5px; height:auto; float:left; overflow: hidden;border-radius: 6px;box-shadow: 0 0 4px #333;}
	.textAreaQM{ font-size: 13px;line-height: 15px;}

	.box288_top{width:288px; height:14px; float:left; background:url(images/right_box4_top.png) left top no-repeat; margin-top:0px;}
	.box288_top_custom{width:278px; height:40px; float:left; color:#000000; background:#cbcbcb;}

	._box288QM{
		width:280px;
	}

	._box288_top{}

	._box288_top_custom{
		height:40px;
		float:left;
		Width:100%;
		color:#000000;
		background:#eeeeee;
		border-radius: 6px 6px 0 0;
	}
	._box2880_mid{}
	._box2880_mid_custom{background-color:rgba(255,255,255,1);}

	.box288_mid{  box-shadow: 0 0 5px #333333; border-radius: 5px;   margin-top: 5px; margin-left: 5px; float:left; color:#282828;  background-color:rgba(255,255,255,1); }
	.box288_mid_custom{  box-shadow: 0 0 5px #333333; border-radius: 5px;   margin-top: 5px; margin-left: 5px; float:left; color: #282828; background-color:rgba(255,255,255,1);}

	.box2880_mid{width:258px; height: auto; float:left; color: #282828; background:url(images/right_box4_mid.png) left top repeat-y; padding:0 15px 0px 15px;}
	.box2880_mid_custom{width:228px; height: auto; float:left; padding:5px 25px; color: #282828; background:rgba(255,255,255,1);}

	.box269_mid{width:258px; height: auto; float:left; background:url(images/right_box4_mid.png) left top repeat-y; padding:0 15px 0px 15px;}
	.zoom22{width:258px; height: auto; float:left; text-align:center;}

	.search_right {background:url(images/search.png) 0 0 no-repeat; width:278px; height:111px; display:block; margin:5px 5px 5px 5px}
	.Demande22{width:278px; height:auto; float:left; text-align:center;  font-size:14px; color:#9a0101; line-height:26px; margin-top:67px;}
	.Demande22 a{ text-align:center;  font-size:14px; color:#9a0101; line-height:20px ; text-decoration:none;}
	.Demande22 a:hover{ text-align:center;  font-size:14px; color:#9a0101; text-decoration: underline;}

	.Demande22 span a{ text-align:center;  font-size:14px; color:#292929; line-height:20px ; text-decoration:none;}
	.Demande22 span a:hover{ text-align:center;  font-size:14px; color:#292929; text-decoration: underline;}
	.box288_footer{width:288px; height:14px; float:left; background:url(images/right_box4_footer.png) left top no-repeat;}
	.box288_footer_qs{width:288px; height:11px; float:left; background:url(images/right_box4_footer.png) left top no-repeat;}
	.box288_footer_qs{width:288px; height:11px; float:left; background:url(images/right_box4_footer.png) left top no-repeat;}

	.box288_footer55{
		width:280px; height:50px;
		float:left;
		color:#2d2d2d;
		background-color:#CBCBCB;
		border-radius: 0 0 6px 6px;
	}

	.box288_footer55_custom{
		width:280px; height:35px; padding-top:5px; float:left;
		color:#444444;
		background-color:#eeeeee;
		border-radius: 0 0 6px 6px;
	}

	.p a{text-decoration: none;}

	.gap10{width:230px; height:10px; float:left;}
	.page_name2{width:650px; height: auto; float:left; /*background:url(/images/sho.png) center bottom no-repeat; background-position:bottom;*/ padding:0 0 20px 0; line-height:30px;  font-size:26px; color: #000000;font-weight:normal}

	.page_name3{ width:100%;box-sizing: border-box; height: auto; float:left;  padding:0px 10px 10px 10px; line-height:30px;  font-size:24px; color:#242424;}
	.page_name3 h1{ font-size:24px; color:#242424;font-weight:normal}

	.page_name4{width:650px; height: auto; float:left; background:url(images/sho.png) center bottom no-repeat; background-position:bottom; padding:0 0px 10px 21px; line-height:30px;  font-size:18px; color:#014F80;}
	.page_name4 h2{ font-size:18px; color:rgb(51,51,51);font-weight:normal}

	.page_name5{width: 100%;height: auto; float:left; background:url(images/sho.png) center bottom no-repeat; background-position:bottom; padding:0 0px 10px 0; margin-bottom: 15px; line-height:30px;  font-size:24px; color:#242424;font-weight:normal }
	#searchContainerParent .page_name5:not(:first-child) {
		margin-top: 30px;
	}

	.box2_text{height: auto; width: 100%; float:left; line-height:18px;  font-size:14px; color:#242424; }
	.box2_text p{ line-height:18px;  font-size:14px;color: #000000; margin-bottom: 20px;}
	.positiveRatingTxt p{font-size:16px;}
	.positiveRatingTxt h3, .positiveRatingTxt h4{font-weight:normal;}
	.positiveRatingTxt .btn-default{text-transform: none;}
	.positiveRatingTxt .btn-default{font-size:20px;}

	.etape{width:auto; height:46px; float:left; margin-right:20px;}
	.text1{width: auto; height:46px; float:left;   padding:0 0px 0px 0px;}
	.text1 a{width: auto; height:46px; float:left;   padding:0 0px 0px 0px; line-height:46px; text-align:left;  font-size:30px; color:#434343; font-weight:bold; text-decoration:none; text-shadow: 1px 1px 1px #f3f3f3; }
	.text1 a:hover{width: auto; height:46px; float:left; padding:0 0px 0px 0px; line-height:46px; text-align:left;  font-size:30px; color:#434343; font-weight:bold; text-decoration:none; text-shadow: 1px 1px 1px #f3f3f3; }
	.text1 a.active{width: auto; height:46px; float:left; padding:0 0px 0px 0px; line-height:46px; text-align:left;  font-size:30px; color:#434343; font-weight:bold; text-decoration:none; text-shadow: 1px 1px 1px #f3f3f3; }


	.one1{width:46px; height:46px; float: right; margin-left:10px;}
	.one1 a{width:46px; height:46px; float:left; background:url(images/1_round.png) left top no-repeat;  font-size:36px; font-weight: bold; color: #FFFFFF; line-height:46px; text-align:center; text-decoration:none;}
	.one1 a:hover{width:46px; height:46px; float:left; background:url(images/1_hover.png) left top no-repeat;  font-size:36px; color: #000000; line-height:46px; font-weight: bold; text-align:center; text-decoration:none;}
	.one1 a.active{width:46px; height:46px; float:left; background:url(images/1_hover.png) left top no-repeat;  font-size:36px; color: #000000; line-height:46px; font-weight: bold; text-align:center; text-decoration:none;}

	.selectionnez{width: auto; height: auto ; float:left; padding-right:5px; padding-left:3px; padding-top:4px;  font-size:13px; color: #1a1a1a; line-height:22px; font-weight: bold; text-align: left; text-decoration:none;}
	.forms_box22{box-sizing: border-box; width:100%; height: auto; float:left; margin:0 0 10px 0; /*background:#F4F4F4;*/}
	.with_border {
		border: 1px solid #d4d4d4;
		-moz-border-radius: 8px;
		-webkit-border-radius: 8px;
		-khtml-border-radius: 8px; padding:0 16px;
	}
	.Prenom{width:279px; height:auto; float:left;  font-size:14px; color:#242424 ; padding:8px 0 10px 0;}
	.Prenom span{ font-size:22px; color:#ff0101;}
	.Prenom2{width:321px; height:auto; float:left;  font-size:14px; color:#242424 ; padding:8px 0 10px 0;}
	.Prenom2 span{ font-size:22px; color:#ff0101;}
	.Prenom3{width:279px; height:auto; float:left;  font-size:14px; color:#242424 ; padding:0px 0 10px 0;}
	.Prenom4{width:321px; height:auto; float:left;  font-size:14px; color:#242424 ; padding:0px 0 10px 0;}
	.Prenom5{width:279px; height:auto; float:left;  font-size:14px; color:#242424 ; padding:px 0 10px 0;}
	.Prenom6{width:214px; height:auto; float:left;  font-size:14px; color:#242424 ; padding:0px 0 10px 0;}
	.Prenom7{width:107px; height:auto; float:left;  font-size:14px; color:#242424 ; padding:0px 0 10px 0;}

	.Prenom8{width:279px; height:auto; float:left; padding:px 0 10px 0; display:block}
	.Prenom9{width:214px; height:auto; float:left; padding:0px 0 10px 0;display:block}
	.Prenom10{width:107px; height:auto; float:left; padding:0px 0 10px 0;display:block}

	.text15{width:285px; font-size: 13px; height:auto; float:left; color:#242424 ; padding:0px 0 3px 0;}
	.text16{width:172px; font-size: 13px; height:auto; float:left; color:#242424 ; padding:0px 0 3px 0;}
	.text17{width:112px; font-size: 13px; height:auto; float:left; color:#242424 ; padding:0px 0 3px 0;}
	.text18{width:285px; font-size: 13px; height:auto; float:left; color:#242424 ; padding:8px 0 3px 0;}
	.text15 span{  font-size:22px; color:#ff0101;}
	.button5{width:285px; margin-bottom:30px; margin-top:70px; float:left; margin-right:5px; text-align:right; }
	.box_date{width:167px; margin-bottom:10px; float:left; padding-top:1px; margin-right:5px;}
	.box_date2{width:107px; margin-bottom:10px; float:left; margin-right:5px; padding-top:0px;}
	.box_date3{width:80px; margin-bottom:10px; float:left; margin-right:5px;}

	span.astk{ color:#FF0101;font-size:11px;float: left;padding-right: 3px; }

	.box61{width:280px; height:auto; float:left; margin-top:10px; display: block; clear:both; }
	.box6166{width:280px; height:auto; float:left; margin-top:10px;  }
	.Politique{width: auto; margin-bottom:10px; float:left; margin-right:5px; padding:0 2px 0px 2px;   font-size:14px; color:#0d59af; line-height:22px;  }
	.Politique a{ font-size:14px; color:#0d59af; line-height:24px; text-decoration: none; border-bottom:2px solid #6b91bd; text-decoration: none; background:url(images/line3.png) bottom left repeat-x; background-position:bottom;}
	.Politique a:hover{ font-size:14px; color:#242424; line-height:24px;   background:url(images/line4.gif) bottom left repeat-x; background-position:bottom; text-decoration: none; border-bottom:2px solid #242424;}
	.text155{width:285px; height:auto; float:left;  font-size:13px; color:#242424 ; padding:0px 0 3px 0;}
	.text155chk{height:auto; float:left;  font-size:13px; color:#242424 ; padding:0px 10px 10px 15px;text-align: left;}
	.Veuillez{width:617px; height:auto; float:left; /*background:url(/images/shadw.png) center bottom no-repeat;*/ padding:17px 0;  font-size:22px; color: #000000;font-weight:normal}
	.Veuillez span{text-align: left;  font-size:14px; color:#242424;  line-height:22px;}
	.Veuillez span a{  font-size:14px; color:#242424; float: right;   line-height:22px; text-decoration: none; border-bottom:2px solid #242424; display:block}
	.Veuillez span a:hover{  font-size:14px; color:#00446f; float: right; line-height:22px; text-decoration: none; border-bottom:2px solid #00446f; display:block;}
	.Hypotheque{width:195px; height:auto; float:left;  font-size:13px; color:#242424 ; padding: 0; line-height:50px;}
	.Hypotheque22{width: 224px; margin-bottom:10px; float:left;}
	.Hypotheque33{width:50px; height:auto; float:left;  font-size:13px; color:#242424 ; padding:0px 0 10px 0; line-height:35px;}
	.civique{width:130px; height:auto; float:left;  font-size:13px; color:#242424 ; padding:0px 0 3px 0;}
	.Rue{width:290px; height:auto; float:left;  font-size:13px; color:#242424 ; padding:0px 0 3px 0;}
	.App{width:180px; height:auto; float:left;  font-size:13px; color:#242424 ; padding:0px 0 3px 0;}
	.forms100{width:130px; margin-bottom:10px; float:left;}
	.forms101{width:290px; margin-bottom:10px; float:left;}
	.forms102{width:180px; margin-bottom:10px; float:left;}
	.Ville{    width:270px; height:auto; float:left;  font-size:13px; color:#242424 ; padding:0px 0 13px 0;}
	.Province{ width:150px; height:auto; float:left;  font-size:13px; color:#242424 ; padding:0px 0 13px 0;}
	.Code{     width:160px; height:auto; float:left;  font-size:13px; color:#242424 ; padding:0px 0 13px 0;}
	.forms103{ width:100%; margin-top: 0px; }
	.forms104{ width:100%; margin-top: 0px; }
	.forms105{ width:100%; margin-top: 0px; }
	.forms106{ width:100%; margin-bottom:10px; float:left}
	.Type{width:200px; height:auto; float:left;  font-size:13px; color:#242424 ; padding:0px 0 3px 0;}
	.box600{width:600px; height:auto; float:left; padding-left:0px; padding-bottom:20px; margin-right:0px;}

	.Demande55{margin:15px 0; background:url(images/d.png) 10px top no-repeat; padding:0 0 0 62px; line-height:40px;  font-size:18px; color:#191919; font-weight:bold;}
	.Demande66{margin:15px 0; background:url(images/cal2.png) 10px top no-repeat; padding:0 0 0 62px; line-height:20px;  font-size:18px; color:#191919; font-weight:bold;}
	.Demande77{margin:15px 0; background:url(images/m.png) 10px top no-repeat; padding:0 0 0 62px; line-height:40px;  font-size:18px; color:#191919; font-weight:bold;}
	.Demande88{margin:15px 0; background:url(images/f.png) 10px top no-repeat; padding:0 0 0 62px; line-height:20px;  font-size:18px; color:#191919; font-weight:bold;}
	.Demande887{margin:15px 0; background:url(images/f.png) 10px top no-repeat; padding:0 0 0 62px; line-height:20px;  font-size:18px; color:#191919; font-weight:bold;}
	.box2_text2{width:648px; height: auto; float:left; padding:10px 0px 15px 23px; line-height:18px;  font-size:14px; color:#242424;}
	.box_brand{width:648px; float:left;padding:20px 0px 15px 0px; line-height:18px;  font-size:14px; color:#242424;/*margin-left:209px;*/ }
	.box2_text3{width:661px; height: auto; float:left; padding:0 0px 10px 10px; margin-top:15px; line-height:18px; font-size:14px; color:#242424; }
	.car_box{width:208px; height:130px; float:left; margin:0 8px 0 0; padding:0; border:0;}
	.car_images{width:208px; height: auto; float:left; margin:0; padding:0; border:0; text-align: center;}
	.car_text{width:208px; height:auto; float:left; line-height:10px;  font-size:13px; font-weight:bold; color:#000000; text-align:center}
	.car_text a {text-decoration:none; color:#000000; line-height: 1.1;}
	.car_text a:hover { text-decoration:underline; color:#000000}
	.car_box2{
		/*width:208px;*/
		height:auto;
		float:left;
		margin:0 10px 10px 0;
		overflow:hidden;
		/*border:1px solid #7E7E7E;*/
		border-radius: 5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		background-color: #FFF;
		-moz-box-shadow: 0 0 10px 1px rgba(0,0,0,0.2);
		-webkit-box-shadow: 0 0 10px 1px rgba(0,0,0,0.2);
		box-shadow:0 0 10px 1px rgba(0,0,0,0.2);
	}
	.car_box2_taxt{height: auto; padding-bottom:5px;  font-size:16px;  color:#303030; text-align: left; line-height:21px;}
	.pic_box2{
		border:1px solid #AAA;
		background:#FFFFFF;
		border-radius: 3px;
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
	}
	.pic_box2 img {width:100%;}
	.print{width:192px; height:auto; margin:0; padding-top:7px;}
	.print a{ background:url(images/print.png) 10px top no-repeat;  font-size:14px;  color:#303030; padding-left:35px; text-decoration:none;}
	.print a:hover{ background:url(images/print_hover.png) 10px top no-repeat;  font-size:14px;  color:#004a78; padding-left:35px; text-decoration:none; }
	.page_name_con{width:840px; height: auto; float:left;  padding:20px 21px 10px 20px; }
	.home2{width:230px; height:auto; margin-left: 20px; float:left;  font-size:16px;  color:#373737; line-height:24px; text-decoration:none; }
	.home3{width: 510px; height:auto; margin-left: 10px; float:left;  font-size:16px;  color:#373737; line-height:24px; text-decoration:none; }
	.Faites{width:840px; height:auto; float:left;  font-size:16px;  color:#0d0d0d; line-height:20px; text-decoration:none;}
	.Faites span{ font-size:14px;  color:#555555; font-style:italic; line-height:30px; text-decoration:none;}
	.Faites span strong{  font-size:18px;  color:#ff0000; font-style:italic; line-height:30px; text-decoration:none;}
	.text20{width:310px; height:32px; float:left; margin-right:10px; margin-bottom:10px; line-height:32px; text-align:left;  font-size:14px;  color:#0d0d0d; text-decoration:none;  }
	.text20 span{ color:#FF0000;}
	.input25{width:310px; height:auto; float:left; margin-bottom:10px; }
	.veux{width:600px; float:left; margin-bottom:10px; padding-top:5px; line-height:17px; text-align:left;  font-size:14px;  color:#0d0d0d; text-decoration:none; margin-bottom:10px;}
	.watermark{
		font-size:13px;
		line-height: 15px;
		color:#404040;  }
	.Nos{width:265px; height:auto; float:left; background:#000000; -moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		border-radius: 5px;
		-khtml-border-radius: 5px; padding:15px 0 15px 15px; margin:5px 0;  font-size:24px; color:#FFFFFF;}

	.button_joboffer {
		display: block;
		line-height: 50px;
		background: url('images/icon_employ.png') no-repeat scroll 0px 0px rgb(231, 232, 232);
		text-align: center;
		font-weight: bold;
		text-decoration: none;
		padding-left: 40px;
		border-radius: 3px;

	}

	.button_1, .button_2, .button_3  {
		margin-bottom:10px;
	}

	.button_1 a, .button_2 a, .button_3 a {
		display:block;
		width:249px;
		height:38px;

		border-radius: 3px;
		font-size:18px;
		text-decoration:none;
		text-align:center;
		line-height:38px;
	}
	/*
.button_1 a, .button_2 a, .button_3 a:hover {
  background: url(/images/button.png) left top repeat-x;
  color: rgb(255,255,255);
  text-shadow: 1px 1px 1px #000;
}
.button_3 a, .button_1 a:hover, .button_2 a:hover{
  background: url(/images/button_1hover.png) left top repeat-x;
  color: #FFFFFF;
  text-shadow: 1px 1px 1px #001e31;
}
*/

	.button_1 a, .button_2 a {
		background: #333333;
		color: #ffffff;
		border: 1px solid #ffffff;
	}
	.button_1 a:hover, .button_2 a:hover{
		background: #b39b6d;
		color: #ffffff;
		border: 1px solid #ffffff;
	}


	.button_3 a{
		background: #000;
		color: #FFF;
		border: 1px solid #000;
	}
	.button_3 a:hover{
		background: #FFF;
		color: #000;
	}


	.fbConnectBtn {
		position: relative;
		background-color: #305898;
		color: #fff;
		border-radius: 3px;
		line-height: 38px;
		margin-bottom: 10px;
		font-size: 14px;
		text-align: center;
	}

	.fbConnectBtn .fa-facebook{
		color: #305898;
	}

	a.facebookConnectBtn {
		color: #fff;
		display: inline-block;
		text-decoration: none;
		font-family: inherit;
	}

	.button_videos_fr a, .button_videos_en a{
		width: 249px;
		height: 38px;
		display:block;
	}

	.button_videos_fr a{background: url("images/videos-button_fr.png") no-repeat 0px 0px transparent;}
	.button_videos_fr a:hover{background: url("images/videos-button-hover_fr.png") no-repeat 0px 0px transparent;}
	.button_videos_en a{background: url("images/videos-button_en.png") no-repeat 0px 0px transparent;}
	.button_videos_en a:hover{background: url("images/videos-button-hover_en.png") no-repeat 0px 0px transparent;}

	.button_video_fr a, .button_video_en a{
		width: 193px;
		height: 51px;
		display:block;
	}

	.button_video_fr a{background: url("images/video-button_fr.png") no-repeat 0px 0px transparent;}
	.button_video_fr a:hover{background: url("images/video-button-hover_fr.png") no-repeat 0px 0px transparent;}
	.button_video_en a{background: url("images/video-button_en.png") no-repeat 0px 0px transparent;}
	.button_video_en a:hover{background: url("images/video-button-hover_en.png") no-repeat 0px 0px transparent;}

	.button_under{width:249px; padding:0px; margin:10px 0px;}
	.button_under a{ width:100%;min-height:38px;

		border-radius: 3px;
		font-size:18px; text-decoration:none;
		text-align:center; line-height:38px; text-shadow:none;
		display:block
	}
	.button_under a:hover{
		border-radius: 3px;
		font-size:18px;

		text-decoration:none; text-align:center;
		line-height:38px; text-shadow: 1px 1px 1px #001e31;
	}
	/*.button_under.promo a{background-image: url(/images/button_promotion.png); color:#FFF; text-shadow: 1px 1px 1px #000; width: 237px; margin-left: 5px;
}*/
	.button_under.promo a{background-color: #e80d0d; background-image:none; color:#FFF; width: 237px; margin-left: 5px;}
	.button_under.promo3 a{background-color: #ff0000; background-image:none; color:#FFF; width: 237px; margin-left: 5px;}

	.button_under.promo a:hover,.button_under.promo2 a:hover,.button_under.promo3 a:hover{background-image: url(images/button_1hover.png)}

	.button_4{width:249px; height:57px; float:left; padding:0px; margin-bottom:10px;}
	.button_4 a{ width:249px; height:50px; padding-top:7px; background: url(images/button_4.png) left top repeat-x; border-radius: 3px;font-size:18px;  color: #FFFFFF; text-decoration:none; text-align:center; line-height:22px; text-shadow: 1px 1px 1px #001e31; display:block }
	.button_4 a:hover{width:249px; height:50px; background: url(images/button_4hover.png) left top repeat-x; border-radius: 3px;   font-size:18px;  color: #FFFFFF; text-decoration:none; text-align:center; line-height:22px; text-shadow: 1px 1px 1px #001e31;  }
	.checkbox152{width:auto; height:18px; float:left; margin:0; padding:0 6px 0 0; margin-top:0; border:0; top:0; }
	.Base22{width:auto; height:18px; float:left; margin-right:6px;  padding:6px 6px 0 0; margin-top:0; border:0; top:0;  font-size:14px; color:#000000; text-decoration:none;}
	.box940_line{width:940px; height: auto; float:left; background:url(images/line25.png) left bottom repeat-x; background-position:bottom; bottom:0;}
	.white_box{width:940px; height: auto; float:left; background: #FFFFFF; overflow: hidden;
		-moz-border-radius-topleft: 6px;
		-moz-border-radius-topright: 6px;
		-moz-border-radius-bottomright: 0px;
		-moz-border-radius-bottomleft: 0;

		-webkit-border-top-left-radius: 6px;
		-webkit-border-top-right-radius: 6px;
		-webkit-border-bottom-right-radius:0px;
		-webkit-border-bottom-left-radius: 0;

		border-top-left-radius:6px;
		border-top-right-radius:6px;
		border-bottom-left-radius:0;
		border-bottom-right-radius:0;}




	.box100{width:220px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align: left; padding:13px 0 15px 10px;}
	.box101{width:177px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center; padding:13px 0 15px;background: url("images/line25.png") repeat-x scroll center bottom #D9D9D9;}
	.box102{width:177px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center; padding:13px 0 15px;}
	.box103{width:177px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center; padding:13px 0 15px;background: url("images/line25.png") repeat-x scroll center bottom #D9D9D9;}
	.box104{width:178px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center; padding:13px 0 15px;}

	.boxEven{width:177px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center; padding:13px 0px 0px 0px;}
	.boxOdd{width:177px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center; padding:13px 0px 0px 0px;background: url("images/line25.png") repeat-x scroll center bottom #D9D9D9;}

	.fileinput-button, .fileinput-button:hover {
		font-size: 14px !important;
		line-height: 31px;
		position: relative;
	}

	.fileinput-button input {
		position: absolute;
		top: 0;
		right: 0;
		margin: 0;
		opacity: 0;
		-ms-filter: 'alpha(opacity=0)';
		cursor: pointer;
		width: 100%;
		height: 100%;
	}

	.box940_main{width:940px; height:auto; float:left; padding:0px 0 15px 0px; background: url(images/box200_bg.png) left top repeat; -moz-border-radius:6px; -webkit-border-radius:6px; border-radius:6px; -khtml-border-radius:6px;}
	.white_box_text2{width:230px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center;}
	.white_box_text3{background-color: #F6F6F6;border-left: 1px solid #C9C9C9;border-right: 1px solid #C9C9C9;padding:10px 0px;width:175px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center;}
	.white_box_text4{padding:10px 0px;width:177px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center;}
	.white_box_text5{background-color: #F6F6F6;border-left: 1px solid #C9C9C9;border-right: 1px solid #C9C9C9;padding:10px 0px;width:175px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center; }
	.white_box_text6{padding:10px 0px;width:178px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center;}

	.white_box_blank{width:178px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center;}
	.white_box_textOdd{padding:10px 0px;width:177px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center;}
	.white_box_textEven{background-color: #F6F6F6;border-left: 1px solid #C9C9C9;border-right: 1px solid #C9C9C9;padding:10px 0px;width:175px; height: auto; float:left;  font-size:14px; color:#0f1a1e; text-decoration:none; text-align:center;}



	.box_title{width:930px; height:auto; float:left; padding:30px 0px 5px 10px;  font-size:15px; color:#0f1a1e; text-decoration:none; text-transform:uppercase;}


	.custom_22 {width:241px; height:121px; float:left; padding:0px; margin:0 8px 8px 0; background: #ebebeb;-moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; -khtml-border-radius:8px;cursor:pointer;}
	.custom_222 {width:241px; height:121px; float:left; padding:0px; margin:0 8px 8px 0; background: #ffffff;-moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; -khtml-border-radius:8px;cursor:pointer;}
	.toyota_camry{width:430px; height:222px; float:left; padding:20px 0px 0px 10px; margin-right:8px; background: #ebebeb;-moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; -khtml-border-radius:8px;}
	.toyota_camry h1{ font-size:30px; color:#303030; text-decoration:none; padding-bottom:5px;}
	.toyota_camry p{ font-size:14px; color:#5a5a5a; text-decoration:none; padding-bottom:8px;}

	.box2_details_text25{width:100%; height: auto; float:left;  margin:15px auto; text-align:center;  font-size:30px; color: #FFFFFF; font-weight:bold; text-shadow: 1px 1px 4px #828282;}
	.box2_details_text25 span{ text-align:center;  font-size:18px; color: #fff; font-weight:bold;}
	.box15{cursor:pointer;width: auto; height:20px; float:left; margin:0px; background:url(images/menu10_bg.png) left top repeat-x; -moz-border-radius:3px;
		-webkit-border-radius:3px; border-radius:3px;  -khtml-border-radius:3px; padding:4px 2px; float:left;  font-size:14px; color:#FFF; text-decoration:none; margin-right:1px;  }
	.box15 h2{cursor:pointer;float:left;   padding-right:5px; padding-top:0px;}
	.box15 h2 a{cursor:pointer;float:left;  font-size:14px; color:#FFF; text-decoration:none; background:url(images/icon2.png) left top no-repeat;  font-weight:normal;padding-left:40px; padding-right:0px; line-height:20px;}
	.box15 h2 a:hover{cursor:pointer;float:left;  font-size:14px; color:#FFFFFF; text-decoration:none; background:url(images/icon2.png) left top no-repeat; font-weight:normal;  line-height:20px;}


	.box16{width: auto; height:20px; float:left; margin:0px; background:url(images/menu10_bg.png) left top repeat-x; -moz-border-radius:3px;
		-webkit-border-radius:3px; border-radius:3px;  -khtml-border-radius:3px; padding:4px 4px 4px 8px; float:left;  font-size:14px; color:#FFF; text-decoration:none; margin-right:1px;  }
	.box16 h2{float:left;   padding-right:5px; padding-top:0px;}
	.box16 h2 a{float:left;  font-size:14px; color:#FFF; text-decoration:none; background:url(images/icon3.png) left top no-repeat;  font-weight:normal;padding-left:20px; padding-right:0px; line-height:20px;}
	.box16 h2 a:hover{float:left;  font-size:14px; color:rgb(255,255,255); text-decoration:none; background:url(images/icon3.png) left top no-repeat; font-weight:normal;  line-height:20px;}

	.box17{width: auto; height:20px; float:left; margin:0px; background:url(images/menu10_bg.png) left top repeat-x; -moz-border-radius:3px;
		-webkit-border-radius:3px; border-radius:3px;  -khtml-border-radius:3px; padding:4px 4px 4px 8px; float:left;  font-size:14px; color:#FFF; text-decoration:none; margin-right:1px;  }
	.box17 h2{float:left;   padding-right:5px; padding-top:0px;}
	.box17 h2 a{float:left;  font-size:14px; color:#FFF; text-decoration:none; background:url(images/icon4.png) left top no-repeat;  font-weight:normal;padding-left:25px; padding-right:0px; line-height:20px;}
	.box17 h2 a:hover{float:left;  font-size:14px; color:#00589d; text-decoration:none; background:url(images/icon4.png) left top no-repeat; font-weight:normal;  line-height:20px;}

	.box18{width: auto; height:20px; float:left; margin:0px; background:url(images/menu10_bg.png) left top repeat-x; -moz-border-radius:3px;
		-webkit-border-radius:3px; border-radius:3px;  -khtml-border-radius:3px; padding:4px 4px 4px 8px; float:left;  font-size:14px; color:#FFF; text-decoration:none; margin-right:1px;  }
	.box18 h2{float:left;   padding-right:5px; padding-top:0px;}
	.box18 h2 a{float:left;  font-size:14px; color:#FFF; text-decoration:none; background:url(images/icon5.png) left top no-repeat;  font-weight:normal;padding-left:25px; padding-right:5px; line-height:20px;}
	.box18 h2 a:hover{float:left;  font-size:14px; color:#00589d; text-decoration:none; background:url(images/icon5.png) left top no-repeat; font-weight:normal;  line-height:20px;}

	.box19{width: auto; height:20px; float:left; margin:0px; background:url(images/menu10_bg.png) left top repeat-x; -moz-border-radius:3px;
		-webkit-border-radius:3px; border-radius:3px;  -khtml-border-radius:3px; padding:4px; padding-right:3px; float:left;  font-size:14px; color:#FFF; text-decoration:none; margin-right:1px;  }
	.box19 h2{float:left;   padding-right:5px; padding-top:0px;}
	.box19 h2 a{float:left;  font-size:14px; color:#FFF; text-decoration:none; background:url(images/icon6.png) left top no-repeat;  font-weight:normal;padding-left:25px; line-height:20px;}
	.box19 h2 a:hover{float:left;  font-size:14px; color:#00589d; text-decoration:none; background:url(images/icon6.png) left top no-repeat; font-weight:normal;  line-height:20px;}

	.box1114{cursor:pointer;width: auto; height:20px; float:left; margin:0px; background:url(images/button_1.png) left top repeat-x; -moz-border-radius:3px;
		-webkit-border-radius:3px; border-radius:3px;  -khtml-border-radius:3px; padding:4px; float:left;  font-size:14px; color:#FFF; text-decoration:none; margin-right:1px;  }
	.box1114 h2{cursor:pointer;float:left;   padding-right:5px; padding-top:0px;}
	.box1114 h2 a{cursor:pointer;float:left;  font-size:14px; color:#FFF; text-decoration:none; background:url(images/icon2.png) left top no-repeat;  font-weight:normal;padding-left:40px; padding-right:10px; line-height:20px;}
	.box1114 h2 a:hover{cursor:pointer;float:left;  font-size:14px; color:#00589d; text-decoration:none; background:url(images/icon2.png) left top no-repeat; font-weight:normal;  line-height:20px;}


	.Specifications{width:651px; height:auto; float:left; margin:0px; padding:10px 0;  font-size:24px; color:#252525; text-decoration:none;font-weight:normal;margin-top: 5px;}
	.Morbi2{width:631px; height:auto; float:left; padding:10px; margin:0px; background:#EFEFEF; -moz-border-radius:3px;font-weight:normal;
		-webkit-border-radius:3px;
		border-radius:3px;
		-khtml-border-radius:3px;  font-size:14px; color:#5a5a5a; text-decoration:none;}

	.Morbi2 p{ font-size:14px; color:#5a5a5a; text-decoration:none; padding-bottom:8px;}

	.box2889_mid{width:278px; height: auto; float:left; background:url(images/right_box4_mid.png) left top repeat-y; padding:0 5px 20px 5px;}
	.Morbi22{width:651px; height:auto; float:left; padding:0px; margin:0px; -moz-border-radius:3px;
		-webkit-border-radius:3px;
		border-radius:3px;
		-khtml-border-radius:3px;  font-size:14px; color:#5a5a5a; text-decoration:none;}
	.box2889_mid h1{ height: auto; float:left; padding:10px 10px 20px 10px;  font-size:24px; color:#282828; text-decoration:none;   font-weight: normal;   text-align: left; text-transform: none; line-height:24px}
	._box2889_mid h1{ height: auto; float:left; padding:10px 10px 20px 10px;  font-size:24px; color:#282828; text-decoration:none;   font-weight: normal;   text-align: left; text-transform: none; line-height:24px}
	.box2889_mid h2{ height: auto; float:left; padding:4px 10px 20px 15px;  font-size:23px; color:#282828; text-decoration:none;   font-weight: normal;   text-align: left; text-transform: none; line-height:23px}

	#similarTitle{
		padding: 4px 10px 9px 15px;
		font-size: 23px;
		font-weight: normal;
	}





	.tabe5{width:631px; height: auto; float:left; }
	.tabe5 ul{ list-style-type:none; margin:0; padding:0; text-transform: none;  }
	.tabe5 ul li{ list-style-type:none; margin:0; display: block;}
	.tabe5 ul li span{cursor:pointer; list-style-type:none;  margin:0; display: block;   font-size:14px; color:#323232; text-decoration:none; padding:7px 15px 7px 15px; margin-right:2px; font-weight:normal;  line-height:18px; text-transform: none; text-align: center; text-transform: none; background: url(images/tab_bg.png) left top repeat-x; float:left;
		-moz-border-radius-topleft: 6px;
		-moz-border-radius-topright: 6px;
		-moz-border-radius-bottomright: 0px;
		-moz-border-radius-bottomleft: 0;

		-webkit-border-top-left-radius: 6px;
		-webkit-border-top-right-radius: 6px;
		-webkit-border-bottom-right-radius:0px;
		-webkit-border-bottom-left-radius: 0;

		border-top-left-radius:6px;
		border-top-right-radius:6px;
		border-bottom-left-radius:0;
		border-bottom-right-radius:0;}
	.tabe5 ul li span:hover{ list-style-type:none;  display: block;   font-size:14px; color:#7b0000; text-decoration:none; padding:7px 15px 7px 15px; margin-right:2px; font-weight: normal;  line-height:18px; text-transform: none; text-align: center; text-transform: none; background:  #ebebeb; float:left;  -moz-border-radius-topleft: 6px;
		-moz-border-radius-topright: 6px;
		-moz-border-radius-bottomright: 0px;
		-moz-border-radius-bottomleft: 0;

		-webkit-border-top-left-radius: 6px;
		-webkit-border-top-right-radius: 6px;
		-webkit-border-bottom-right-radius:0px;
		-webkit-border-bottom-left-radius: 0;

		border-top-left-radius:6px;
		border-top-right-radius:6px;
		border-bottom-left-radius:0;
		border-bottom-right-radius:0; }


	.tabe5 ul li span.active{cursor:default; list-style-type:none;  display: block;   font-size:14px; color:#7b0000; text-decoration:none; padding:7px 15px 7px 15px; margin-right:2px; font-weight: normal;  line-height:18px; text-transform: none; text-align: center; text-transform: none; background:  #ebebeb; float:left;  -moz-border-radius-topleft: 6px;
		-moz-border-radius-topright: 6px;
		-moz-border-radius-bottomright: 0px;
		-moz-border-radius-bottomleft: 0;

		-webkit-border-top-left-radius: 6px;
		-webkit-border-top-right-radius: 6px;
		-webkit-border-bottom-right-radius:0px;
		-webkit-border-bottom-left-radius: 0;

		border-top-left-radius:6px;
		border-top-right-radius:6px;
		border-bottom-left-radius:0;
		border-bottom-right-radius:0; }
	.tab_details2{width:631px; padding:10px; height:auto; float:left; background:#EFEFEF;
		-moz-border-radius-topleft: 0px;
		-moz-border-radius-topright: 0px;
		-moz-border-radius-bottomright: 6px;
		-moz-border-radius-bottomleft:6px;

		-webkit-border-top-left-radius:0px;
		-webkit-border-top-right-radius:0px;
		-webkit-border-bottom-right-radius:6px;
		-webkit-border-bottom-left-radius:6px;

		border-top-left-radius:0px;
		border-top-right-radius:0px;
		border-bottom-left-radius:6px;
		border-bottom-right-radius:6px;}
	.box25{width:487px; height:auto; float:left; margin:0px; background:#EFEFEF; -moz-border-radius:3px;
		-webkit-border-radius:3px;
		border-radius:3px;
		-khtml-border-radius:3px; margin:0 13px 0 0; padding:20px 0 20px 20px;}
	.box26{width:243px; height:auto; float:left;}
	.box26 ul{ list-style-type:none; margin:0; padding:0; text-transform: none;  }
	.box26 ul li{ list-style-type:none; margin:0; display: block;}
	.box26 ul li span{ list-style-type:none;  margin:0; display: block;   font-size:14px; color:#323232; text-decoration:none; padding:0 7px 7px 0px; font-weight: normal;  line-height:18px; text-transform: none; text-align: left;}
	.box26 ul li a{ list-style-type:none;  margin:0; display: block;   font-size:14px; color:#323232; text-decoration:none; padding:0 7px 7px 22px; font-weight: normal;  line-height:18px; text-transform: none; text-align: left;  }
	.box26 ul li a:hover{ list-style-type:none;  margin:0; display: block;   font-size:14px; color:#7b0000;  padding:0 7px 7px 22px;  font-weight:normal;  line-height:18px; text-transform: none; text-align: left; text-transform: none; }
	.box26 ul li a.active{ list-style-type:none;  margin:0; display: block;   font-size:14px; color:#7b0000; text-decoration:none; padding:0 7px 7px 22px;  font-weight:normal;  line-height:18px; text-align: left; text-transform: none; }
	.box27{width:131px; height:28px; float:left; margin-bottom:8px;  }

	.box33{width:631px; height: auto; float:left;}
	.box33 ul{ list-style-type:none; margin:0; padding:0; text-transform: none;  }
	.box33 ul li{ list-style-type:none; margin:0; display: block;}
	.box33 ul li a{ list-style-type:none;  margin:0; display: block;   font-size:14px; color:#323232; text-decoration:none; padding:0 7px 7px 0px; margin-right:2px; font-weight: bold;  line-height:18px; text-transform: none; text-align: left; text-transform: none;}
	.box33 ul li span{ list-style-type:none;  margin:0; display: block;   font-size:14px; color:#323232; text-decoration:none; padding:0 7px 7px 0px; margin-right:2px; font-weight: bold;  line-height:18px; text-transform: none; text-align: left; text-transform: none;}
	.box33 p{   font-size:14px; color:#323232; text-decoration:none; padding:0 0px 7px 0px; font-weight: bold;  line-height:18px; text-transform: none; text-align: left; }
	.box33 ul li a:hover{ list-style-type:none;  margin:0; display: block;   font-size:14px; color:#7b0000; text-decoration:none; padding:0 7px 7px 22px; margin-right:2px; font-weight: bold;  line-height:18px; text-transform: none; text-align: left; text-transform: none; background: url(images/arrow8.png) left top no-repeat;   }

	.Moteur{width:280px; height:auto; float:left; margin-bottom:5px;}
	.Moteur h2{white-space:normal; width:135px; float:left; font-size:12px; color:#202020;}
	.Moteur h3{white-space:normal; width:140px; float:left;  font-size:13px; font-weight:normal; color:#5a5a5a;}


	.box26 ul li span:before,.box33 ul li span:before,.Moteur h2:before {
		content:"\f138";
		font-family: 'Font Awesome 5 Pro';
		font-weight: 900;
		margin-right: 5px;
	}

	.box27 a{width:131px; height:28px; float:left; background: url(images/button10_bg.png) left top repeat-x  ; -moz-border-radius:3px;
		-webkit-border-radius:3px;
		border-radius:3px;
		-khtml-border-radius:3px;   font-size:14px; color:#FFFFFF; text-decoration:none;   font-weight:normal; padding:0; line-height:28px;  text-align: center; text-transform: none;}

	.box27 a:hover{width:131px; height:28px; float:left; background: url(images/button10_bg.png) left -32px repeat-x  ; -moz-border-radius:3px;
		-webkit-border-radius:3px;
		border-radius:3px;
		-khtml-border-radius:3px;   font-size:14px; color:#FFFFFF; text-decoration:none;   font-weight:normal;   text-align: center; text-transform: none; line-height:28px; }




	.box28{width:127px; height:auto; float:left; margin:0px; background:#6f6f6f url(images/liter_bg.png) left top repeat-x; -moz-border-radius:3px;
		-webkit-border-radius:3px;
		border-radius:3px;
		-khtml-border-radius:3px; padding: 10px 2px 10px 2px; margin:0 0px 0 0;}
	.text44{width:127px; height:auto; float:left; background:url(images/liter_line.png) left bottom repeat-x; background-position:bottom; text-align:center; padding-bottom:5px; margin-bottom:5px;  font-size:14px; color:#FFFFFF; text-decoration:none;   font-weight:normal;   text-align: center; text-transform: none; line-height:18px}
	.text_box60{width:133px; height: auto; float:left; padding:0;  }
	.text_box60 h2{width:133px; height: auto; float:left; padding:0;  font-size:14px; color:#262626; text-decoration:none;   font-weight: bold;   text-align: left; text-transform: none; line-height:18px}

	.text_box60 h3{width:133px; height: auto; float:left; padding:0;  font-size:16px; color:#7b0000; text-decoration:none;   font-weight: normal;   text-align: left; text-transform: none; line-height:18px}

	.text_box60 p{width:133px; height: auto; float:left; padding:5px 0;  font-size:14px; color:#262626; text-decoration:none;   font-weight: bold;   text-align: left; text-transform: none; line-height:18px}
	.vior{width: auto; height: auto; float:left; padding:0px 10px; background:url(images/vior.png) left top repeat-x; line-height:22px; font-size:14px; color:#FFFFFF; text-decoration:none;   font-weight: normal;   text-align: left; text-transform: none; -moz-border-radius:5px;
		-webkit-border-radius:5px;
		border-radius:5px;
		-khtml-border-radius:5px; }
	.box133{width:133px; height: auto; float:left; padding:0; margin:0;}
	.box258{width:258px; border-bottom:1px solid #b9b9b9; padding:0 10px 5px 10px; margin-bottom:5px; float:left;}
	.box116{width:116px; height: auto; float:left; border:2px solid #FFFFFF; padding:0; margin-right:5px;}
	.box116 img{width:120px; /*height:90px*/ }



	/*papan*/
	.box2{width:260px; height:auto; float:left; margin-right:47px; margin-left:20px; padding:0 0 10px 5px;  font-size:13px; color:#242424 ;}
	.box2 span{font: bold 12px Verdana, Arial, Helvetica, sans-serif; color:#FF0000}
	.box3{width:260px; height:auto; float:left; margin-right:20px;  padding:0 0 10px 5px;  font-size:13px; color:#242424 ;}
	.box3 span{font: bold 12px Verdana, Arial, Helvetica, sans-serif; color:#FF0000}
	.box4{width:265px; height:auto; float:left;  margin:0px 45px 10px 20px; }
	.box44{width:265px; height:auto; float:left;  margin:0px 47px 10px 20px; position:relative;}
	.box5{width:265px; height:auto; float:left; margin:0px 20px 10px 0;}
	.box6{width:280px; height:auto; float:left; margin:10px 0px 0px 0;}
	.box55{width:265px; height:auto; float:left; margin:0px 20px 10px 0;position:relative;}
	.lin2{width:617px; height:2px; float:left; margin:0px 0 10px 0; padding:0; background:url(images/line2.png) left top repeat-x;}
	.box14{padding:0px 0; height:15px; float:left}
	.box20{padding: 0 10px; float:left; line-height:27px;  font-size:14px; color:#242424 ; font-weight:bold;}
	.text30{width:617px; height:auto; float:left; /*background:url(/images/shadw.png) center bottom no-repeat;*/ padding:17px 0;  font-size:22px; color:#242424}
	.text30 span{padding-right:10px; float:right; text-align:right; font-size:14px; font-weight:normal;  color:#242424;}
	.text30 span strong{font: bold 20px Verdana, Arial, Helvetica, sans-serif; color:#FF0000 }
	.box617{width:617px; height:auto; float:left; padding-left:0px; padding-bottom:20px; margin-right:0px;}
	.main617{width:617px; height:auto; float:left; padding-left:0px; margin-top:15px;}
	.box20A{padding: 0 5px; float:left; line-height:25px;  font-size:14px; color:#242424 ; font-weight:bold;}

	#servicePackages table {width:100%; line-height: 30px; margin-bottom: 15px; font-size: 90%;}
	#servicePackages table td{padding:0 15px;}
	#servicePackages table td span{margin-left: 10px; color:#444; text-align: left;}
	#servicePackages table td:nth-child(2) {padding:0;}

	.detailCarTitle, .detailCarTitleWide, .detailCarTitleFull {word-wrap: break-word;height: auto; float:left; margin:0px; font-size:30px; color: #414141;font-weight:normal;}
	.detailCarTitle {width:490px;}
	.detailCarTitleWide {width:775px;}
	.detailCarTitleFull {width:100%;}

	/*papan 12.09.12*/
	.mainbox_textare617{height:auto; float:left; padding-left:0px; margin:20px 0; transform: translate(-50%, 0%); position: relative; left: 50%;}
	.textbox22{width:381px; height:auto; float:left; padding-left:0px; margin:0px 0px 0 0;}
	.button51{ width:auto; height:36px; float: left; }
	.button51 a{ width:auto; height:36px; float: left; -moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		border-radius: 5px;
		-khtml-border-radius:5px; background:url(images/button5.png) left top repeat-x;  font-size:18px; color:#FFFFFF ; padding:0 10px; line-height:36px; text-decoration:none; text-transform:uppercase; }

	.button51 a:hover{ width:auto; height:36px; float: left; -moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		border-radius: 5px;
		-khtml-border-radius:5px; background:url(images/button5.png) left -44px repeat-x;  font-size:18px; color:#FFFFFF ; padding:0 10px; line-height:36px; text-decoration:none; text-transform:uppercase;}

	.text55{width:381px; height:auto; float:left; padding-left:0px; margin:0px 0px 20px 0;  font-size:14px; color:#242424 ;  line-height:18px; text-decoration:none; }

	.text55 p{ padding-left:0px 5px 0 0; margin:0px 0px 0px 0;  font-size:14px; color: #000000;  line-height:18px; text-decoration:none; }

	.picbox_221{height:auto; float:left; padding-left:0px; margin:0px 15px 0 0;}
	.picbox_221 img { width:332px; height:auto; float:left; -moz-border-radius:3px;
		-webkit-border-radius:3px;
		border-radius:3px;
		-khtml-border-radius:3px; }

	.isFullWidthPage .picbox_221 img {
		width: 442px;
	}

	.picbox651{width:651px; height:auto; float:left; margin:5px 10px 0px;}
	.picbox930{width:930px; height:auto; float:left; margin:5px 5px 0px;}

	.picbox651 img { width: 651px; }
	.picbox930 img { width: 930px; }

	.picbox651 img, .picbox930 img {
		float:left;
		cursor:pointer;
		-moz-border-radius:3px;
		-webkit-border-radius:3px;
		border-radius:3px;
		-khtml-border-radius:3px;
	}

	.topPromoImage img {
		-moz-border-radius:3px;
		-webkit-border-radius:3px;
		border-radius:3px;
		-khtml-border-radius:3px;
		margin-top: 5px;
		width: 930px;
		cursor:pointer;
	}

	.topPromoImageUsed img {
		-moz-border-radius:3px;
		-webkit-border-radius:3px;
		border-radius:3px;
		-khtml-border-radius:3px;
		width: 650px;
		cursor:pointer;
	}


	.team_title_dealer{margin-bottom:15px; text-align:center;}
	.forms_box661{width:960px; height: auto; margin:10px auto; }


	.picbox90{width:90px; height:auto; float:left; margin-right:8px; border:1px solid #acacac; -webkit-border-radius:3px;
		border-radius:3px;
		-khtml-border-radius:3px; }
	.picbox90 img {width:90px; height: auto; float:left; -moz-border-radius:3px;
		-webkit-border-radius:3px;
		border-radius:3px;
		-khtml-border-radius:3px;  }
	.textbox191{width:52%; height:auto; float:left;  font-size:13px; line-height: 1.2; color:#242424; }
	.textbox191 h4{  font-size:18px; color:#242424; padding-bottom:5px; }
	.mainbox291{width:291px; min-height:123px; height:auto; float:left; margin: 0 5px 10px 0; background:#e6e6e6; border:1px solid #d4d4d4; -moz-border-radius: 8px;
		-webkit-border-radius: 8px;
		border-radius: 8px;
		-khtml-border-radius: 8px; padding:15px 10px;}
	.lazy{border:0;display:none}
	.techSpecs{width:621px; height:auto; float:left; margin:0px; padding:25px 15px; background:#ebebeb; background-position:right bottom; -moz-border-radius-topleft: 0px;-moz-border-radius-topright: 0px;-moz-border-radius-bottomright:6px;-moz-border-radius-bottomleft:6px;-webkit-border-top-left-radius:0px;-webkit-border-top-right-radius:0px;-webkit-border-bottom-right-radius:6px;-webkit-border-bottom-left-radius:6px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;}

	.email_link{text-decoration: none; color:#888;}
	.email_link:hover{text-decoration: none; color:#333;}

	.page_name555 {
		color: #242424;
		float: left;

		font-size: 24px;
		font-weight:normal;
		height: auto;
		line-height: 30px;
		padding: 0 0 10px 0;
		width: 650px;
	}
	.page_name555 a{
		color: #242424;
	}
	.page_name555 a:hover{
		color: #242424;
		text-decoration:underline;
	}
	.page_name555 a:visited{
		color: #242424;
	}
	.page_nameNEW555 {
		color: #242424;

		font-weight:normal;
		height: auto;
		font-size:14px;
	}
	.page_nameNEW555 a{
		color: #242424;
	}
	.page_nameNEW555 a:hover{
		color: #242424;
		text-decoration:underline;
	}
	.page_nameNEW555 a:visited{
		color: #242424;
	}


	.box2_text44 {
		color: #242424;
		/*float: left;*/

		font-size: 14px;
		height: auto;
		line-height: 18px;
		padding: 10px 0 0 0;
		width: auto;
	}


	/* FOR IE */
	@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
		#newsContainer img {
			max-width: 640px!important;
		}
	}

	.text_box11, .news_article{
		float: left;
		height: auto;
		margin: 0;
		padding: 0 20px 10px 0;
		width: auto;
		line-height: 21px;
	}

	.news_article h2{
		margin: 10px 0;
	}

	.text_box11 h4, , .news_article h4 {
						  color: #242424;
						  float: left;

						  font-size: 14px;
						  height: auto;
						  margin: 0;
						  padding: 10px 0;
						  /*    width: 632px;*/
					  }
	.text_box11 a, .news_article a {
		color: #242424;

		font-size: 12px;
		height: auto;
		margin-left: 0;
		padding: 10px 0;
		float:left;

		/*    width: 632px;*/
	}
	.text_box11 a:hover, .news_article a:hover {
		color: #242424;
	}
	.text_box11 a:visited,  .news_article a:visited{
		color: #242424;
	}
	.text_box11 ul,
	.text_box11 p {
		/*width: 632px;*/
	}

	.text_box11 ul,
	.text_box11 p,
	.news_article ul,
	.news_article p {
		color: #242424;
		font-size: 14px;
		height: auto;
		margin: 0;
		padding: 0 0 5px;
	}

	.text_box11 ul, .news_article ul{
		list-style-position: inside;
	}
	.text_box11 p a, .news_article p a{

		font-size: 14px;
		margin: 0;
		padding: 0;
		float: none;
	}

	.picbox336 {
		border: 1px solid #7D7D7D;
		float: left;
		height: auto;
		margin-right: 68px;
		/*width: 336px;*/
	}


	.news_article img {
		max-width: 100%!important;
	}

	/* IE ONLY*/
	@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {
		.news_article img {
			max-width: 650px!important;
		}
	}

	.articlePicBox {
		/*border: 1px solid #7D7D7D;
    float: left;*/
		height: auto;
		margin:0 auto 15px;
		text-align: center;
	}

	.news_article img[src*='/ckfinder'] {
		max-width: 100% !important;
		height:auto !important;
	}

	.articlePicBox .articleBgImage{background-repeat:no-repeat;height:0;padding-top:62.5%;max-width:640px;background-size:cover;}

	.news_article .article-padding-bottom img{
		padding-bottom: 15px;
	}

	.news_article .article-padding-bottom > h2{
		font-size:20px;
	}

	.font_size21 {
		font-size: 21px !important;
	}

	.page_name18 {
		/*background: url(/images/sho.png) no-repeat scroll center bottom transparent;*/
		color: #242424;
		/*float: left;*/
		font-size: 18px;
		height: auto;
		line-height: 30px;
		padding: 0 0 10px 0;
		width: 100%;
		font-weight: bold;
	}
	.page_name18 a{
		color: #242424;
		text-decoration: none;
	}
	.page_name18 a:hover{
		color: #242424;
		text-decoration: underline;
	}
	.video5 {
		float: left;
		height: 41px;
		margin-top: 70px;
		margin-left: 70px;
	}

	.floatLogo{
		width:621px; height:auto; float:left; margin:0px; padding:25px 15px; background:url(images/LOGO_GA_TRANSPARENT.png) right bottom no-repeat; background-position:right bottom; -moz-border-radius-topleft: 0px;-moz-border-radius-topright: 0px;-moz-border-radius-bottomright:6px;-moz-border-radius-bottomleft:6px;-webkit-border-top-left-radius:0px;-webkit-border-top-right-radius:0px;-webkit-border-bottom-right-radius:6px;-webkit-border-bottom-left-radius:6px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:6px;border-bottom-right-radius:6px;
	}

	.button2.jqTransformButton {
		background-color: transparent;
		border: medium none;
		color: #FFFFFF;
		cursor: pointer;

		font-size: 13px;
		margin: 0;
		overflow: visible;
		padding: 0;
		text-decoration: none;
	}
	.button2.jqTransformButton span {
		background: url("images/btn_right2.gif") no-repeat scroll right top transparent;
		display: block;
		float: left;
		height: 35px;
		margin: 0;
		padding: 0 6px 0 0;
	}
	.button2.jqTransformButton span span {
		background: url("images/btn_left2.png") no-repeat scroll left top transparent;
		color: #FFFFFF;
		display: block;

		font-size: 13px;
		font-weight: normal;
		height: 26px;
		line-height: 13px;
		padding: 12px 13px 0 15px;
		text-decoration: none;
		text-transform: uppercase;
	}
	.button2.jqTransformButton_hover span span {
		background-position: left -38px;
	}
	.button2.jqTransformButton_hover span {
		background-position: right -38px;
	}
	.button2.jqTransformButton_click span span {
		background-position: left -66px;
	}
	.button2.jqTransformButton_click span {
		background-position: right -66px;
	}


	.vehicleListTable {
		margin: 10px;
		font-size: 12px;
		color: #414141;
	}
	.vehicleListTable tr td {
		border-bottom: 1px dotted #666666;
		height: 30px;
	}
	.vehicleListTable tr td a{
		color: #414141;

		font-size: 12px;
	}
	.vehicleListTable tr td a:hover{
		color: #414141;

		font-size: 12px;
	}
	.vehicleListTable tr td a:visited{
		color: #414141;

		font-size: 12px;
	}
	.expandRow{
		background-color:#1f1f1f;
		text-align:right;
		color: #414141;
		margin-left: 4px;
		margin-right: 2px;

	}

	div.errorMsg {
		background-color: #FFBABA;
		background-image: url("images/error.png");
		background-position: 10px center;
		background-repeat: no-repeat;
		border: 1px solid;
		color: #D8000C;
		display: none;
		float: left;
		z-index: 9999;
		padding: 15px 10px 15px 50px;
	}

	div.emailSentMsg {
		background-color: #B8FFB8;
		background-image: url("images/accepted.png");
		background-position: 10px center;
		background-repeat: no-repeat;
		border: 1px solid #0B9600;
		color: #0B9600;
		display: none;
		float: left;
		padding: 15px 10px 15px 50px;
	}

	div.toyotImage
	{
		color: #666666;

		font-size: 55px;
		font-weight: bold;
		height: 250px;
		left: 0;
		opacity: 0.8;
		overflow: hidden;
		padding: 5px 10px;
		position: absolute;
		text-decoration: none;
		width: 380px;
		z-index: 8;
	}
	div.toyotImage p {
		padding:5px;
		margin:0;
		font-size:15px; color:#A6A6A6; text-decoration:none;
	}


	/*****
*
* NEW SECTION
*
*/
	div.newCarMainBox {
		width:960px;
		margin:0 auto;
	}
	div.newCarMainBox2 {

		margin-top:5px;
	}

	div.newCarMainBox3 {
		width:960px;
		height:12px;
		float:left;
		background:url(images/box970_top.png) left top no-repeat;
	}


	.stockImgStyle{
		width: 100%;
		height: 50%;
		font-size: 36px;
		text-align: center;
		font-weight: bold;
		padding-top: 30px;
		position: absolute;
		margin: 0px;
		color: #303030;
	}

	#firstSliderImg {
		background-color: #fff;
		position: absolute;
		z-index: 15;
		width: 640px;
		height: 478px;
		overflow:hidden;
		opacity:1;
		padding: 1px;
		box-sizing: border-box;
		margin: 1px;
	}
	#firstSliderImg .placeholder{
		height: 100%;
		max-width: 100%;
		position: relative;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
		filter: blur(20px);
		-webkit-filter: blur(20px);
	}
	#firstSliderImg.fade-out{
		visibility: hidden;
		opacity: 0;
		-webkit-transition: visibility 1ms 1s, opacity 1s linear;
		-moz-transition: visibility 1ms 1s, opacity 1s linear;
		-o-transition: visibility 1ms 1s, opacity 1s linear;
		transition: visibility 1ms 1s, opacity 1s linear;
	}

	#socialTimeline{
		width:960px;
		height:auto;
		/*float:left;*/
		/*background:url(/images/box970_mid.png) left top repeat-y;*/
		/*background: rgba(204,204,204,0.85 );*/
		/*border-radius: 5px;*/
		/*margin-top:10px;*/
	}

	div.newCarMainBox4 {
		width:940px;
		height:auto;
		float:left;
		background:url(images/box970_mid.png) left top repeat-y;
		padding:10px 15px;
	}

	div.newCarTitleBox h1{
		width:940px;
		height:auto;
		float:left;
		/*padding:15px 0px;*/

		font-size:30px;
		color:#303030;
		text-decoration:none;
	}

	.graybox {
		background-color: #EFEFEF;
		border: 1px solid #FFFFFF;
		border-radius: 3px;
		color: #000;

		font-size: 13px;
		line-height: normal;
		padding: 10px 0 10px 0;
		text-align: center;
		text-shadow: 0 1px 0 #FFFFFF;
	}
	.graybox span {
		color: #000;

		font-size: 13px;
		text-align: center;
	}
	.graybox .smalltext {
		border-bottom: 1px solid #CCCCCC;
		border-top: 1px solid #CCCCCC;
		color: #333333;
		font-size: 11px;
		margin-top: 10px;
		padding: 10px;
	}
	.graybox h2 {
		color: #000;
		font-size: 24px;
		font-weight: bold;
		margin: 5px auto;
	}

	.extendedPhone{
		position: fixed;
		background-color: #676767;
		color: #ddd;
		padding: 1em;
		border-radius: 5px;
		z-index: 9999;
		font-size: 14px;
	}
	.extendedPhone label{
		display: inline-block;
	}

	.extendedPhone span{
		color: #fff;
	}
	.phoneNote{
		font-size: 11px;
		padding-top: 7px;
	}


	.addedSearchLinksDivEx
	{
		color: #414141;

		font-size: 16px;
		text-align: left;
		padding-left: 20px;
		padding-top: 30px;
	}

	.addedSearchLinksDiv div{
		padding-left: 10px;
		padding-top: 10px;
		width: 200px;
		float:left;
	}
	.addedSearchLinksDiv ul{
		margin-bottom: 20px;
		font-size: 13px;
		margin-top: 5px;
	}
	.addedSearchLinksDiv ul li{
		list-style: none outside none;
		display: block;
		margin-left: 40px;
		text-indent: -10px;
	}
	.addedSearchLinksDiv ul li a{
		color: #333;
		text-decoration: none;
		cursor: pointer;

	}
	.addedSearchLinksDiv ul li a{
		background: url("images/arrow_red.png") no-repeat scroll 0 10px transparent;
		color: #333333;
		margin-right: 2px;
		padding: 6px 10px;
		text-decoration: none;
	}
	.addedSearchLinksDiv ul li a:hover
	{
		text-decoration: underline;
	}

	.compareLinks a{
		text-decoration:none;
	}

	.compareLinks a:hover{
		text-decoration:underline;
	}

	.emailBody, .emailSubject{
		display: none;
	}

	#contactus div.errorMsg {
		background-color: #FFBABA;
		background-image: url("images/error.png");
		background-position: 10px center;
		background-repeat: no-repeat;
		border: 1px solid;
		color: #D8000C;
		display: none;
		float: left;
		padding: 15px 10px 15px 50px;
	}
	#contactus div.emailSentMsg {
		background-color: #B8FFB8;
		background-image: url("images/accepted.png");
		background-position: 10px center;
		background-repeat: no-repeat;
		border: 1px solid #0B9600;
		color: #0B9600;
		display: none;
		float: left;
		padding: 15px 10px 15px 50px;
	}

	#PageFinance .stepActive {
		background: url("images/1_hover.png") no-repeat scroll left top transparent;
		color: #000000;
		float: left;

		font-size: 36px;
		font-weight: bold;
		height: 46px;
		line-height: 46px;
		text-align: center;
		text-decoration: none;
		width: 46px;
		margin-left: 10px;
	}

	#PageFinance .stepUnactive {
		background: url("images/1_round.png") no-repeat scroll left top transparent;
		color: #FFFFFF;
		float: left;

		font-size: 36px;
		font-weight: bold;
		height: 46px;
		line-height: 46px;
		text-align: center;
		text-decoration: none;
		width: 46px;
		margin-left: 10px;
	}


	#PageFinance .text1 span {
		color: #434343;
		float: left;
		font-size: 30px;
		font-weight: bold;
		height: 46px;
		line-height: 46px;
		padding: 0;
		text-align: left;
		text-decoration: none;
		text-shadow: 1px 1px 1px #F3F3F3;
		width: auto;
	}
	#PageFinance div.emailSentMsg {
		background-color: #B8FFB8;
		background-image: url("images/accepted.png");
		background-position: 10px center;
		background-repeat: no-repeat;
		border: 1px solid #0B9600;
		color: #0B9600;
		display: none;
		float: left;
		padding: 15px 10px 15px 50px;
	}

	.other_links a{
		text-decoration:none;
	}

	.other_links a:hover{
		text-decoration:underline;
	}

	.promotionSideBtnA {
		background:#cc0000;
		color:#ffffff;
		display:block;font-size:20px;width:168px;height:53px;padding:2px 15px 0px 15px;cursor:pointer;line-height:53px;text-decoration:none;font-weight:bold;background-size:100%;
		-moz-border-radius-topleft: 3px;
		-moz-border-radius-topright: 3px;
		-moz-border-radius-bottomright: 0px;
		-moz-border-radius-bottomleft: 0;
		-webkit-border-top-left-radius: 3px;
		-webkit-border-top-right-radius: 3px;
		-webkit-border-bottom-right-radius: 0;
		-webkit-border-bottom-left-radius: 0;
		border-top-right-radius: 3px;
		border-top-left-radius: 3px;
		border-bottom-right-radius: px;
		border-bottom-left-radius: 0px;

		transform:rotate(-90deg);
		-ms-transform:rotate(-90deg); /* IE 9 */
		-webkit-transform:rotate(-90deg); /* Safari and Chrome */
	}

	.footerMultiAddress3 {
		border-right:1px #919191 solid;
		padding-right:70px;
		margin-left: 14px;
		color:#575757;
	}

	.footerMultiAddress2 {
		border-right:1px #919191 solid;
		padding-right:150px;
		margin-left: 93px;
		color:#575757;
	}

	.footerMultiAddress1 {
		margin-left: 345px;
		color:#575757;
	}

	.smallActionWebsiteColor {
		background : url("images/bl_bg2.png") left top repeat-x;
		color: rgb(255,255,255);
	}

	.smallActionWebsiteColor:hover{
		background : url("images/menu10_bg.png") left top repeat-x;
		color: #FFF;
	}
	/* Applies to all menu styles */
	#nav li a.top_link.isBold,
	#nav li a.isBold{
		font-weight: bold;
	}
	#mainHeader div.box15Padding{
		padding-top:15px;
	}
	#nav .notClickable{
		cursor:default !important;
	}
	.S100PercentWidth{
		width:100%;
	}

	div#alertMsgContent a {
		text-decoration: none!important;
		color: #ffffff;
	}

	#alertMsgContent{
		width:960px;
		margin:0 auto;
		text-align:center;
		line-height:25px;
		font-size: 14px;
		padding: 8px 0;
	}
	#alertMsgContainer{
		display:none;
		background-color: #000;
		margin-bottom:20px;
		position: fixed;
		top:0;
		left: 0;
		z-index: 36001;
		width:100%;
		min-height:35px;
		height:auto;
		color:white;
		color: #ffffff;
		font-family: Montserrat;
	}
	#alertMsgContainer img.close{
		float:right;
		cursor:pointer;
		margin:5px;
	}
	#alertMsgContainer #alertCloseWrapper {
		position: absolute;
		right: 0;
		height: 100%;
	}
	#alertMsgContainer #alertCloseWrapper i.close{
		cursor: pointer;
		position: relative;
		top: 50%;
		margin-right: 8px;
		transform: translateY(-50%);
		font-size: 20px;
	}

	/**
  New Cars Page
**/
	#filterMainBox {
		/*
  display:none;background-color: #ffffff; margin-top:70px;margin-bottom:24px;
  background-image: -moz-linear-gradient(top, #dadfe2 0%, #ffffff 100%);
  background-image: -webkit-linear-gradient(top, #dadfe2 0%, #ffffff 100%);
  background-image: -o-linear-gradient(top, #dadfe2 0%, #ffffff 100%);
  background-image: -ms-linear-gradient(top, #dadfe2 0%, #ffffff 100%);
  background-image: linear-gradient(to bottom, #dadfe2 0%, #ffffff 100%);
  filter: progid:DXImageTransform.Microsoft.Gradient(StartColorStr='#dadfe2', EndColorStr='#ffffff', GradientType=0);
  color: #000000;border: 1px solid #bebebe;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  width:98%;
  overflow:auto;
  min-height:100px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  -khtml-border-radius: 10px;
  border-radius: 10px;
  position:relative;left:5px;
  */
	}
	#filterMainBox .filterSpan,
	#filterMainBox .filterCheck,
	#filterMainBox .radioSort {
		cursor: pointer;
	}
	.bCodeStyle {
		float:left;
		width:25%;
		font-size:0.8em;
		padding-top:15px;
		padding-bottom:15px;
		background-color:;
	}
	.bCodeSort {
		float:left;
		width:16%;
		background-color:;
		font-size:0.8em;
		padding-top:15px;
		padding-bottom:15px;
	}
	.bCodeSort .bCodeHeading,
	.bCodeStyle .bCodeHeading {
		margin-bottom:5px;
		font-weight:bold;
		padding-left:2px;
	}
	.page_name42{width:940px; height: auto; float:left; padding:0 0px 10px 21px; line-height:30px;  font-size:24px; color:#000000;}
	.page_name42 h2 {font-size:24px; color:#000000;font-weight:normal;border:none;}
	.page_name42 h2.notfirst {font-size:24px; color:#000000;font-weight:normal;margin-top:0px;padding-top:40px;border-top:1px #cccccc solid;width:920px;}

	#filterMainBox.newcarsstyle2{
		-moz-border-radius: 0px;
		-webkit-border-radius: 0px;
		-khtml-border-radius: 0px;
		border-radius: 0px;
		border:none;
		border-top:1px solid #bebebe;
		border-bottom:1px solid #bebebe;
		width:955px;
		left:3px;
	}

	div.imdev label{
		font-weight:bold;
		padding-top: 10px;
	}
	div.imdev div{
		background:none;
		background-color:#D9D9D9;
		padding: 10px 0px 10px 0px;
		width:100%;
		font-size: 13px;
	}
	div.imdev_inner {
		font-weight:normal;
		margin-left:30px;
		width:90% !important;
	}

	ul.quiz {padding: 10px 0 10px 20px; list-style-type: none; height: 175px;}
	ul.quiz li {padding: 10px;}
	ul.quiz li input {margin-right: 10px;}

	.news-body {width:100%;text-align:right;font-size:13px;color:#191919;padding-right:15px;margin-top:-20px;padding-bottom:10px;}

	.news-all-text {color:#191919;}

	#newsContainer .text_box11 img {
		max-width: 640px;
		display: block;
		margin:5px auto;
	}

	#newsContainer .used{
		clear:both;
	}

	.home_action_adj {
		width: 961px;
	}

	.home_action_adj2 {
		width: 730px!important;
		height: 600px!important;
	}

	.home_email{
		width: 232px;
		margin-left: 5px;
		margin-bottom: 5px;
	}

	.widget_menu_adj1{
		font-size:0.8em;
	}
	.widget_menu_adj2{
		float:right;position:relative;top:-2px;
	}

	.widget_menu_extendedPhone{
		font-size: 0.8em;
		margin-left: 104px;
		top: 132px;
	}

	.widget_menu_adj3{
		font-size:0.8em;color:#575757;position:relative;left:-8px;
	}
	.widget_menu_adj4{
		position:relative;
		/*width:160px;*/
		font-size:0.8em;
		display: table;
	}

	.phone_text.right {
		float: none;
		height: initial;
		margin-left: auto;
		width: inherit;
	}

	.phone_text .tel {
		margin-left: 10px;
	}

	.phone_text label {
		display: flex;
		justify-content: space-between;
		margin-bottom: 4px;
	}

	.widget_menu_adj4.right {
		padding-left:10px;
		/*border-left:1px solid #000000;*/
		text-align: right;
	}

	.widget_menu_adj4.left {
		padding-right:10px;
		/*border-right:1px solid #000000;*/
		width: inherit;
	}

	.widget_menu_adj6{
		font-size:0.8em;position:relative;left:-3px;color:#575757;cursor: pointer;
	}

	.widget_express_mail_phone_title{
		border-bottom:1px solid #aaa;text-align:
		center;font-size: 24px;
		font-weight: bold;
		padding-bottom: 8px;
		padding-top: 8px;
		color: #000000;
	}

	.widget_express_mail_adj1{
		padding:15px 10px; line-height:60px; font-size:2em; padding:15px 10px;text-align:center;
	}

	.bannerPopupClose{
		left: 710px;
		position: relative;
		width: 15px;
		top: 20px;
		cursor: pointer;
	}

	.priceNote {
		color: #888888;
		font-style: italic;
		text-align:justify;
		display: block;
		padding-right: 10px;
		font-size: 12px!important;
		margin-bottom: 14px;
	}

	.toprint{
		display:none;
	}

	.refferenceContentDemo, .refferenceContentClearance{
		padding: 30px 20px;
		border-bottom: 1px solid #ccc;
		margin-bottom: 20px;
	}

	.box2_details_text2 .compareButton, .box2_details_text22 .compareButton{
		position: absolute;
		margin-top: -20px;
		z-index: 1;
		left: -30px;

	}

	.vdp{
		clear: both;
		width:160px;
	}

	.compareButton{
		transition: box-shadow 0.25s ease-out 0s;
		transition: transform 0.25s ease-out 0s;
		display:none;
	}


	#compareUsedVehiclesWidget{
		display:none;
		width: 1185px;
		height: 645px;
		background: #eee url(images/comp_veh_bg.png) no-repeat;
		padding: 0;
	}

	#compareUsedVehicles_subtitle_arrow{
		float: right;
		padding: 65px 10px;
	}

	#compareUsedVehicles_title, #compareUsedVehicles_title_mm{
		font-size: 30px;
		font-weight: bold;
		margin: 0;
		padding: 0;
		color: inherit;
	}

	#compareUsedVehicles_title {
		margin-right: 35px;
	}


	#compareUsedVehicles_title_img{
		float: left;
		margin-right: 90px;
		padding: 5px;
	}


	#compareUsedVehicles_subtitle{
		font-size: 15px;
		color: #bf151b;
		width: 115px;
		float: left;
		padding: 45px 0 0 20px;
	}

	.compareUsedVehicles_option_header_group {
		color:#fff;

		background: rgb(76,76,76); /* Old browsers */
		background: -moz-linear-gradient(top, rgba(76,76,76,1) 0%, rgba(76,76,76,1) 13%, rgba(76,76,76,1) 30%, rgba(76,76,76,1) 48%, rgba(51,51,51,1) 84%,    rgba(51,51,51,1) 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top, rgba(76,76,76,1) 0%,rgba(76,76,76,1) 13%,rgba(76,76,76,1) 30%,rgba(76,76,76,1) 48%,rgba(51,51,51,1) 84%,rgba(51,51,51,1) 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom, rgba(76,76,76,1) 0%,rgba(76,76,76,1) 13%,rgba(76,76,76,1) 30%,rgba(76,76,76,1) 48%,rgba(51,51,51,1) 84%,rgba(51,51,51,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#333333',GradientType=0 ); /* IE6-9 */
		padding: 9px 15px;
		margin:0px;

	}

	.compareUsedVehicles_option_header_group:first-of-type{
		padding: 13px 10px;
	}

	.compareUsedVehicles_img{
		text-align: center;
		background-color: #FFFFFF;
	}

	#compareUsedVehicles_option_header{
		width: 120px;
		margin: 0px;
		padding: 0px 30px 0 25px;
		vertical-align: top;
	}

	#compareUsedVehicles_footer_arraow_img{
		margin-left: 40px;

	}

	td.compareUsedVehicles_options {
		background: #ffecec;
		border: 1px solid #d40000;
		width: 240px;
	}
	.compareUsedVehicles_footer_btns{
		width: 240px;
	}

	div#slider-pro-12 {
		border: 1px solid #EBEBEB;
		border-radius: 3px;
		background: #fff;
	}

	#sliderPromoAlert{
		border-radius: 3px 3px 0 0;
	}

	.slide-wrapper{
		border-radius: 3px;
	}

	#slideit label.open{
		border-radius: 3px 0 0 3px;
	}

	img.image {
		border-radius: 3px;
	}

	#compareUsedVehicles_loading img{
		display: block;
		margin: auto auto;
		padding-top: 260px;
	}

	.compareUsedVehicles_price_old {
		float: left;
		color: #8e8e8e;
		font-size: 17px;
		margin-right: 10px;
		margin-top: 3px;
		text-decoration: line-through;
		font-weight: 700;

	}

	.compareUsedVehicles_options .compareUsedVehicles_price{
		color: #d40000;
		font-size: 20px;

	}

	.compareUsedVehicles_options ~ td.compareUsedVehicles_options .compareUsedVehicles_price{
		color: #333333;
		font-size: 17px;
	}

	.compareUsedVehicles_options ~ td.compareUsedVehicles_options {
		border: 1px solid #b3b3b3;
		background-color: #fff;
		width: 240px;
	}

	.compareUsedVehicles_img div {
		color: #fff;
		font-weight: bold;
		position: relative;
		z-index: 5;
	}

	.compareUsedVehicles_img_car{
		width: 240px;
		height: 180px;
		-webkit-filter: blur(2px);
		filter        : blur(2px);
		-moz-filter   : blur(2px);
		-o-filter     : blur(2px);
		position: absolute!important;
		z-index: 1!important;
		background-size: 240px 180px;

	}

	@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
		.compareUsedVehicles_img_car{
			opacity: 0.15;
		}
	}

	#compareUsedVehicles_img_title_1,
	#compareUsedVehicles_img_title_2,
	#compareUsedVehicles_img_title_3,
	#compareUsedVehicles_img_title_4{
		margin-bottom: -30px;
		padding-top: 10px;
	}


	div#compareUsedVehicles_img_city_1,
	div#compareUsedVehicles_img_city_2,
	div#compareUsedVehicles_img_city_3,
	div#compareUsedVehicles_img_city_4{

		top: -30px;
		margin-bottom: -20px;

	}


	.compareUsedVehicles_option_group{
		border-top: 2px solid #e8e8e8;
		padding: 10px 15px;
		margin: 0;
		width:210px;
	}

	.compareUsedVehicles_option_group:first-of-type{
		border-top: none;
	}

	.compareUsedVehicles_img img {
		width: 242px;
		height: 182px;
		position: relative;
		z-index: 1;

	}

	#compareUsedVehicles_img_0{
		width: 240px;
		background: #FFF;
	}

	/** /
.advanced-slider .compareButton{
    float: right;
    position: absolute;
    top: 75px;
    z-index: 1111;
    opacity: 0;
}
/**/

	.newVdpViewer .compareButton{
		position: absolute;
		bottom: 2px;
		right:0px;
		z-index: 1111;
	}

	#compareUsedVehicles_img_td_0{
		border: 1px solid #b3b3b3;
		width: 240px;
		height: 180px;
		background-size: 240px 180px;
		background-color: #fff;
	}

	#compareUsedVehicles_footer_details {
		background: rgb(76,76,76); /* Old browsers */
		background: -moz-linear-gradient(top, rgba(76,76,76,1) 0%, rgba(76,76,76,1) 13%, rgba(76,76,76,1) 30%, rgba(76,76,76,1) 48%, rgba(51,51,51,1) 84%,    rgba(51,51,51,1) 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top, rgba(76,76,76,1) 0%,rgba(76,76,76,1) 13%,rgba(76,76,76,1) 30%,rgba(76,76,76,1) 48%,rgba(51,51,51,1) 84%,rgba(51,51,51,1) 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom, rgba(76,76,76,1) 0%,rgba(76,76,76,1) 13%,rgba(76,76,76,1) 30%,rgba(76,76,76,1) 48%,rgba(51,51,51,1) 84%,rgba(51,51,51,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#333333',GradientType=0 ); /* IE6-9 */
		margin: 5px 0px;
	}

	#compareUsedVehicles_footer_promotions {
		background: rgb(255,48,25); /* Old browsers */
		background: -moz-linear-gradient(top, rgba(255,48,25,1) 0%, rgba(207,4,4,1) 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top, rgba(255,48,25,1) 0%,rgba(207,4,4,1) 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom, rgba(255,48,25,1) 0%,rgba(207,4,4,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff3019', endColorstr='#cf0404',GradientType=0 ); /* IE6-9 */
	}


	.liveAlert_link{
		color:#FFFFFF;
		text-decoration: none;
		font-weight: bold;
	}

	.liveAlert_link:hover {
		text-decoration: underline;
	}

	.compareUsedVehicles_button {
		padding: 5px 5px;
		background: #292f32;
		color: #fffffc;
		border:1px solid #000;
		display: inline-block;
		font-weight: 100;
		position: relative;
		font-size: 14px;
		-webkit-transition: all 0.25s;
		-moz-transition: all 0.25s;
		-o-transition: all 0.25s;
		transition: all 0.25s;
		opacity: 1;
		width: 230px;
		text-decoration: none;
		text-align: center;
	}

	a.compareUsedVehicles_button:hover,
	a.compareUsedVehicles_button:active,
	a.compareUsedVehicles_button:focus {
		color: #fffffc;
		opacity: 0.8;
		text-decoration: none;
	}

	a.compareUsedVehicles_button:after,
	a.compareUsedVehicles_button:before {
		position:relative;
		margin: 0 5px;
		opacity: 0;
		-webkit-transition: all 0.25s;
		-moz-transition: all 0.25s;
		-o-transition: all 0.25s;
		transition: all 0.25s;
		font-family: FontAwesome;

	}

	a.compareUsedVehicles_button:before {
		content: "\f105";
	}

	a.compareUsedVehicles_button:after {
		content: "\f104";
	}

	a.compareUsedVehicles_button:hover:after,
	a.compareUsedVehicles_button:hover:before {
		opacity: 1;
	}

	.compareUsedVehicles_button_container {
		display: inline-block;
	}

	.compareUsedVehicles_price{
		color: #292f33;
		font-size: 17px;
		font-weight: 700;
	}
	.button-toastr{
		background: #FFF;padding: 4px 20px;border-radius: 5px;
		color:#BD362F!important;
	}

	.button-toastr:hover{
		background: #000;
		color: #FFF;
	}



	.returnPopup_submit span {
		position: absolute!important;
		top: 50%!important;
		display: block!important;
		text-align: center!important;
		left: 0!important;
		right: 0!important;
		padding: 0 8px 0 8px!important;
		cursor: pointer!important;
		font-size: 14px!important;
		margin: 0!important;
		color: #FFF!important;
		margin-top: -9px!important;
	}

	returnPopup_submit:hover {
		background-color: #0bb1e0;
		color: #fff;
	}

	.returnPopup_submit {
		display: block;
		border-style: solid;
		border-radius: 5px;
		left: 228px;
		z-index: 5;
		width: 225px;
		height: 40px;
		position: absolute;
		background-color: ;
		text-shadow: 1px 1px #002b46;
		color: #fff;
		border-width: 1px;
		border-color: #333333;
		font-size: 16px;
		line-height: 19px;
		font-weight: normal;
		text-align: center;
		background-repeat: no-repeat;
	}


	#returnPopupForm_wrapper {
		display: block;
		background: rgba(66,66,66,1);
		border-style: none;
		border-radius: 11px;
		left: 280px;
		top: 155px;
		z-index: 2;
		width: 531px;
		height: 384px;
		position: absolute;
	}

	#returnPopupTilte{
		width: 335px;
		float: right;
		margin: 20px;
		color: #000000;
		font-size: 18px;
	}

	#returnPopupTilte .rp_mc{
		font-size: 18px!important;
	}

	#returnPopupTilte2{
		color: #FFF;
		margin: 20px 10px 20px 20px;
		padding: 0;
	}

	.returnPopupForm_label {
		font-weight: normal;
		font-size: 13px;
		line-height: 14px;
		color: #bfbfbf;
		margin-left: 20px;
		display: inline-block;
	}

	.returnPopupForm_table tr td{
		padding-bottom: 10px;
	}

	.rp_mc {
		font-size: 14px!important;
		color: !important;
		padding: 0!important;
		margin: 0!important;
	}

	#sendEmailPopupForm input {width:200px;}
	#sendEmailPopupForm textarea {width:210px;}
	#sendEmailPopupForm .formHeader {text-align:center;}
	#sendEmailPopupForm .formContent {background-color:#FFF;padding:15px 0;border-radius:5px;border:1px solid #ccc;margin:15px 0;}
	#sendEmailPopupForm .formfooter {text-align: center;}
	#sendEmailPopupForm table.jqTransformTextarea {width: initial;}
	#emailMessageSubmit {display: block; margin: 0 auto;}

	#exit_popup_yes,
	#exit_popup_no
	{
		border-radius: 5px;
		cursor: pointer;
		font-size: 20px;
		padding: 5px 11px;
		text-decoration: none;
		width: 140px;
		float: right;
		margin-right: 10px;
	}

	#exit_popup_accutrade_form{
		background: white;
		text-align: center;
		padding-top: 15px;
		padding-bottom: 15px;
		height: 508px;
		background-size: 820px;
		background-image: url(images/popups/accu-trade-exit-bg.png);
	}


	#exit_popup_accutrade_wrapper{
		margin-left: 210px;
		color: white;
		font-size: 18px;
	}

	.exit_popup_text_line_2{

		margin-top: 27px;
		margin-bottom: 5px;
	}

	.exit_popup_text_line_3{
		font-size: 26px;
		margin-bottom: 3px;
		font-weight: bolder;
	}

	.exit_popup_text_line_5 {
		margin-bottom: 20px;
		font-size: 26px;
		font-weight: bolder;
		margin-top: 63px;
	}


	#exit_popup_accutrade_title{
		height: 95px;
		width: 570px;
		margin-top: 20px;
	}

	#exit_popup_accutrade_title._FRENCH{
		background-image: url(images/popups/accu-trade-exit-title_fr.png);
	}

	#exit_popup_accutrade_title._ENGLISH{
		background-image: url(images/popups/accu-trade-exit-title_en.png);
	}



	#bestPriceVdpNewPopupContainer{
		width:480px;
		height: 510px;
	}

	#bestPriceVdpNewPopupContainer .popup_bg{
		width: 480px;
		height: 515px;
	}

	#bestPriceVdpNewPopupContainer .popup_bg{
		background-image: url('images/popups/en/bestPriceNewVdp.png');
	}

	.popup_bg{
		background-color: #333333;
		background-size: 480px 515px;
	}

	.popupForm .asterisk{
		color: #d00;
		font-weight: bold;
		padding: 0;
		font-size: inherit;
		margin: 0;
	}

	.popupForm{
		z-index: 50;
		position: absolute;
		top: 248px;
		height: 249px;
		left: 80px;
		background: url("images/coupon-form-bg-2.png") no-repeat;
		width: 335px;
		padding: 30px;
	}

	.popupFormTitle{
		height: 40px;
		margin: 8px;
		font-size: 15px;
		font-weight: bold;
	}

	.popupFormInputs td {
		font-size: 14px;
		text-align: right;
		padding-right: 10px;
		padding-bottom: 3px;
	}

	.popupForm input{
		width: 210px;
	}

	#asPurchaseIntent{
		width: 400px;
		padding: 30px 30px;
		height: auto;
	}

	#promoDiscoverButton{
		/*max-width: 230px;*/
		padding: 0px 10px;
		cursor: pointer;
		margin: auto;
		box-sizing: border-box;
		padding: 0px 8px;
	}

	.newVdpViewer {
		width: 640px;
		height: 480px;
		float: left;
		margin-left: 20px;
	}

	/* dealership menu */

	.location-names {
		/*padding: 15px;*/
	}

	.img_menu.up_menu ul#nav  ul.sub li .location-names {
		min-width: 200px;
	}

	.#MainMenu_DEALERSHIPS li.location-names {
		min-width: 200px;
	}

	.location-names, .location-names li {
		list-style: none;
	}

	.location-names .location-details {
		position: absolute;
		left: 100%;
		top: 0;
		padding: 14px;
		box-shadow: 0 6px 12px rgba(0,0,0,.175);
		display: none;
		background-color: white;
		min-width: 290px;
	}

	.location-names > .location-details > .location-details-logo > .title {
		margin-bottom: 1em;
		font-size: initial;
		color: rgb(51,51,51);
	}

	.location-names > .location-details > .location-details-logo > img {
		max-width: 100%;
		margin-bottom: 8px;
	}

	li.location-names:hover > .location-details {
		display: block;
	}

	.location-names .location-details .location-details-logo {
		border-bottom: 1px solid #e5e5e5;
		margin-bottom: 8px;
	}

	.up_menu ul#nav .location-details-info a {
		color: #000000;
		padding: 0;
	}

	.location-details-info .location-spacing-ml-13 {
		margin-left: 13.49px;
	}

	.up_menu ul#nav li.details-info-link a {
		display: inline-block;
	}

	.up_menu ul#nav .details-info-link:hover a {
		color: #ffffff;
	}

	body .wrapper .up_menu #nav > li:hover ul.sub li:hover .details-info-link li:hover a {
		display: inline-block;
		background-image: none;
		color: #ffffff;
		background-color: #b39b6d;
	}

	li.details-info-link:hover {
		background-color: #b39b6d;
		color: #ffffff;
	}

	.location-details-info ul li {
		padding-top: 4px;
		padding-bottom: 4px;
		font-weight: 200;
		font-size: 14px;
		margin-bottom: 5px;
	}

	.location-details-info > ul > li:before {
		content: " ";
		border: solid;
		border-width: 0 2px 2px 0;
		display: inline-block;
		padding: 2px;
		border-radius: 2px;
		transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
		margin-right: 7px;
		margin-bottom: 1px;
	}

	#MainMenu_DEALERSHIPS ul {
		padding: 0;
	}

	@media print{
		.toprint{  display: block;}
	}


	.mr-15 {
		margin-right: 15px;
	}

	.ml-15 {
		margin-left: 15px;
	}

	.ml-7 {
		margin-left: 7px;
	}

	span.arrow {
		border: solid;
		border-width: 0 2px 2px 0;
		display: inline-block;
		padding: 2px;
		border-radius: 1px;
		position: relative;
		top: -2px;
	}

	span.arrow.arrow-large {
		border-width: 0 3px 3px 0;
		padding: 4px;
		border-radius: 3px;
	}

	span.arrow.arrow-right {
		transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
	}

	span.arrow.arrow-left {
		transform: rotate(135deg);
		-webkit-transform: rotate(135deg);
	}

	span.arrow.arrow-up {
		transform: rotate(-135deg);
		-webkit-transform: rotate(-135deg);
	}

	span.arrow.arrow-down {
		transform: rotate(45deg);
		-webkit-transform: rotate(45deg);
	}

	#tradeInBar{
		background-color: #000000;
		color:  #ffffff;
		height: 55px;
		padding-top: 10px;
		padding-bottom: 1px;
		top: -1px;
	}

	#tradeInBarW{
		height: 50px;
		margin: auto;
		width: 960px;

	}

	.topbar3btnWrap{
		border-radius: 5px;
		background-color: #ffffff;
		border: 2px solid #000000;
		vertical-align: middle;
		height: 42px;
		padding: 0 20px;
		color: #000000;
	}

	.topbar3btn{
		font-weight: bold;
		transition: .2s;
		font-size: 14px;
		text-transform: capitalize;
		border-color: white;
		text-align: center;
		cursor: pointer;
		display: block;
		text-decoration: none;
		color:inherit;
	}


	.tradeInBar_btn{
		padding: 2px 5px;
		font-weight: bold;
		border-radius: 5px;
		text-transform: uppercase;
		transition: .2s;
		border: 2px solid transparent;
		font-size: 14px;
		text-transform: capitalize;
		color: white;
		border-color: white;
		text-align: center;
		cursor: pointer;
		float: left;
		margin-left: 10px;
		margin-top:0px;
		height: 46px;
		background-color: #ffffff;
		color:  #000000;
		border: 2px solid #000000;
		width: 200px;
	}



	.tradeInBar_btn:hover,.topbar3btnWrap:hover{
		background-color:#000000;
		color: #ffffff!important;
	}

	#tradeInBarPopup_formW{
		height: 580px;
		background-color: #fff;
		color: #000000;
		padding: 15px;
		position: relative;
	}

	#tradeInBarPopup_formW input{
		padding: 11px 10px;
		font-size: 15px;
		width: 250px;
		margin: 5px;
		border:1px solid #a9a9a9!important;
	}

	#tradeInBarPopup_formW ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
		color: #a9a9a9;
		opacity: 1; /* Firefox */
	}

	#tradeInBarPopup_formW :-ms-input-placeholder { /* Internet Explorer 10-11 */
		color: #a9a9a9;
	}

	#tradeInBarPopup_formW ::-ms-input-placeholder { /* Microsoft Edge */
		color: #a9a9a9;
	}

	#tradeInBarPopup_title{
		text-transform: uppercase;
		font-weight: bold;
		text-align: center;
		margin-top: 15px;
		margin-bottom: 10px;
		color: #000000;
	}

	#tradeInBarPopup_line1{
		background-color: #f1f1f1;
		border: 1px solid grey;
		padding: 20px 40px;
		font-size: 22px;
		text-align: center;
		color:#000000;
	}

	#tradeInBarPopupSelectedVehicle{
		font-size: 22px;
		margin-bottom: 25px;
		text-align: center;
		color:#000000;
	}

	#tradeInBarPopupSubmit{
		background: #cc0000;
		color: #ffffff;
		padding: 15px;
		text-decoration: none;
		border-radius: 3px;
		border: 1px solid #000;
	}

	#tradeInBarPopupSubmit:hover{
		background: #ffffff;
		color: #cc0000;
		border: 1px solid #000;

	}

	#gRatingLarge{
		background: #ffffff;
		color: #000000;
		border: 1px solid #ffffff;
		float: left;
		padding: 5px 0px;
		margin-top: 5px;
		cursor: pointer;
		border-radius: 3px;
		text-align: center;
		width: 150px;
		margin-left: 30px;
	}


	#gRating{
		cursor: pointer;
	}


	.tradinSelectW{
		float: left;
		margin-left: 10px;
	}


	.tradinSelectA{
		position: relative;
	}

	.tradinSelectA:after {
		content: " ";
		height: 0;
		width: 0;
		border-left: 5px solid transparent;
		border-right: 5px solid transparent;
		border-top: 5px solid #000000;
		position: absolute;
		right: 14px;
		top: 17px;
		transition: all 0.3s linear;
		pointer-events: none;
	}


	.tradinSelect{
		color: #3c3836;
		border: 2px solid #000000;
		border-radius: 5px;
		padding: 10px 10px;
		font-size: 16px;
		background-color: rgba(255,255,255,.9);
		background-position: 95% 50%;
		width: 200px;
		-webkit-appearance: none;
		-moz-appearance: none;
		padding-right: 27px;
		height:46px;
	}

	.tradinSelect:after {
		content: " ";
		height: 0;
		width: 0;
		border-left: 5px solid transparent;
		border-right: 5px solid transparent;
		border-top: 5px solid #000000;
		position: absolute;
		right: 14px;
		top: 17px;
		transition: all 0.3s linear;
	}

	.tradeInBarStep2{
		margin: 90px 0;
		text-align: center;
	}

	.tradeInBarStep2 .tradeInBarStep2Question{
		margin: 20px 0;
	}

	.tradeInBarStep2 .radio_div label{
		width: 50px;
		padding: 0;
		margin: 5px;
		display:inline-block
	}

	.tradeInBarStep2 .radio_div input{
		width: auto !important;
		padding: 0 !important;
		margin: 5px !important;
		border: none !important;
	}

	.multiselectVehicleOptions{
		margin-top:5px;
		padding-bottom:5px;
	}

	.multiselectVehicleOptions span{
		font-size: 15px !important;
		padding: 0 !important;
		margin: 0 !important;
	}

	#tradeInBarPopup_formW .tradeInBarMultiselect{
		min-width: 264px;
		min-height: 44px;
	}

	.ui-multiselect-menu.tradeInBarMultiselect{
		min-width: 272px;
		z-index: 100000;
		max-height: 120px;
		overflow: scroll;
	}

	.tradeInBarDealerStep{
		text-align: center;
		margin-top: 25px;
	}

	.tradeInBarDealerStep .tradeInBarDealerStepMakeModelYear{
		font-weight: 700;
	}

	.tradeInBarDealerStep span{
		margin: 0!important;
		font-weight: 700!important;
		color: #000000!important;
	}

	#googleReviewsFooter{
		margin: 0 auto;
		background-color: #fff;
		border-radius: 5px;
		padding: 10px;
		width: 100%;
		max-width: 940px;
		height: 275px;
	}

	.review-item {
		float: left;
		height: 185px;
		width: 100%;
		max-width: 460px;
		margin-right: 10px;
		border-top: 4px solid #EBEBEB;
		padding-top: 10px;
	}

	/*modifying the title of findcar.html and part of the form subtitle*/
	.firstcharup::first-letter{
		text-transform:uppercase;
	}

	/*icon compare 1 mouse over*/
	I.icon-compare-1,
	span.icon-compare-1{
		color:#cc0000;
	}
	I.icon-compare-1:hover,
	span.icon-compare-1:hover{
		color: #ffffff !important;
		text-shadow: #cc0000 1px 1px, #cc0000 -1px 1px, #cc0000 -1px -1px, #cc0000 1px -1px;
		border-radius: 20px;
		background-color: #cc0000;
	}

	.gRating-icon i {
		font-size: 17px;
	}

	.gRating-icon#gRating {
		display:flex;
		flex-direction: row;
		align-items: center;
		justify-content: space-evenly;
		background-color: #b39b6d;
		width: 90px;
		height: 28px;
		line-height: 20px;
		margin-right: 7px;
		color: white;
		color: #ffffff;
		color: #ffffff;
	}

	.gRating-img#gRating {
		background-image: url(images/grating.png);
		color: #356CF2;
		width: 95px;
		height: 28px;
		padding: 4px 31px 10px 10px;
		margin-top: 1px;
	}

	#gRating{
		box-sizing: border-box;
		font-size: 17px;
		font-weight: bold;
		display: block;
	}

	/* when errors are applied to the input box directly, meaning not using jqtransform*/
	INPUT[type="text"].validity-erroneous{
		border: 1px solid #dc3545;
		background-color:#fad6dc !important;
	}
	INPUT[type="tel"].validity-erroneous{
		border: 1px solid #dc3545;
		background-color:#fad6dc !important;
	}
	INPUT[type="email"].validity-erroneous{
		border: 1px solid #dc3545;
		background-color:#fad6dc !important;
	}
	INPUT[type="password"].validity-erroneous{
		border: 1px solid #dc3545;
		background-color:#fad6dc !important;
	}

	/* DWP-3890 */
	H1.default{
		font-size: 30px;
		color: #000000;
		font-weight: normal;
		clear: both;
		padding: 0 0 15px 0;
	}
	H1.default A{
		text-decoration: none;
	}
	H1.default I.icon,
	H1.default span.icon {
		border-radius: 30px;
		width: 23px;
		height: 29px;
		padding-top: 4px;
		padding-left: 10px;
		float: left;
		font-size: 25px;
		margin-right: 10px;
		border: 1px solid #ffffff;
		color: #ffffff;
		background-color: #333333;
	}
	H1.default I.icon.multiLineH1,
	H1.default span.icon.multiLineH1{
		margin-top: 10px;
	}
	H1.default I.icon.singleLineH1,
	H1.default span.icon.singleLineH1{
		margin-top: 2px;
	}
	H1.default > DIV{
		display:table-row;
	}
	H1.default > DIV DIV:nth-child(1){
		font-weight: bold;
	}
	H1.default > DIV DIV:nth-child(2){
		font-weight: normal;
		color: #757575;
		font-size: 18px;
	}
	H1.default > DIV DIV:nth-child(3){
		font-size: 0.8rem;
		font-size: 0.8rem;
		color: #bbb;
		padding-top: 5px;
	}

	/* */
	h1.ckeditor-default {
		font-weight: bold;
		font-size: 34px;
		padding: 0 0 15px 0;
		color: #000000;
	}

	h1.ckeditor-default::before {
		content: "\f054";
		font-family: FontAwesome;

		width: 28px;
		height: 35px;
		margin-right: 10px;
		padding: 4px 0 0 11px;
		border-radius: 41px;
		font-size: 31px;
		float: left;
		border: 1px solid #ffffff;
		color: #ffffff;
		background-color: #333333;
	}

	H2.default{
		font-size: 24px;
		color: #000000;
		font-weight: normal;
		clear: both;
		padding:10px 0;
		margin-top: 10px;
	}
	H2.default I.icon,
	H2.default span.icon{
		border-radius: 30px;
		width: 20px;
		height: 25px;
		padding-top: 4px;
		padding-left: 9px;
		float: left;
		font-size: 22px;
		margin-right: 10px;
		border: 1px solid #ffffff;
		color: #ffffff;
		background-color: #333333;
	}
	H2.default I.icon.multiLineH2,
	H2.default span.icon.multiLineH2{
		margin-top: 7px;
	}
	H2.default I.icon.singleLineH2,
	H2.default span.icon.singleLineH2{
		margin-top: 0px;
	}
	H2.default > DIV{
		display:table-row;
	}
	H2.default > DIV DIV:nth-child(1){
		font-weight: bold;
	}

	H2.default.credsiiUsedMinHeight .TitleText {
		width: 80%;
	}

	H2.default > DIV DIV:nth-child(2){
		font-weight: normal;
		color: #757575;
		font-size: 15px;
	}

	/* full width have bigger font */
	@media only screen and (min-width: 1301px) {

		body.isFullWidthPage.isPageFullWidthEnabled #firstSliderImg{
			width: 800px;
			height: 600px;
		}

		BODY.isFullWidthPage.isPageFullWidthEnabled H1.default {
			font-size: 34px;
		}
		BODY.isFullWidthPage.isPageFullWidthEnabled H1.default > DIV DIV:nth-child(2){
			font-size: 23px;
		}
		BODY.isFullWidthPage.isPageFullWidthEnabled H1.default I.icon,
		BODY.isFullWidthPage.isPageFullWidthEnabled H1.default span.icon {
			width: 28px;
			height: 35px;
			font-size: 31px;
			padding-left: 11px;
			border-radius: 41px;
		}
		BODY.isFullWidthPage.isPageFullWidthEnabled H1.default I.icon.multiLineH1,
		BODY.isFullWidthPage.isPageFullWidthEnabled H1.default span.icon.multiLineH1{
			margin-top: 11px;
		}
		BODY.isFullWidthPage.isPageFullWidthEnabled H1.default I.icon.singleLineH1,
		BODY.isFullWidthPage.isPageFullWidthEnabled H1.default span.icon.singleLineH1{
			margin-top: 1px;
		}

		BODY.isFullWidthPage.isPageFullWidthEnabled H2.default {
			font-size: 30px;
		}
		BODY.isFullWidthPage.isPageFullWidthEnabled H2.default > DIV DIV:nth-child(2){
			font-size: 19px;
		}
		BODY.isFullWidthPage.isPageFullWidthEnabled H2.default.credsiiUsedMinHeight .TitleText {
			width: 90%;
		}
		BODY.isFullWidthPage.isPageFullWidthEnabled H2.default I.icon.multiLineH2,
		BODY.isFullWidthPage.isPageFullWidthEnabled H2.default span.icon.multiLineH2{
			margin-top: 11px;
		}
		BODY.isFullWidthPage.isPageFullWidthEnabled H2.default I.icon.singleLineH2,
		BODY.isFullWidthPage.isPageFullWidthEnabled H2.default span.icon.singleLineH2{
			margin-top: 4px;
		}

	}

	#cityTitle {color: #000000;}

	.main_left_box {
		color: #000000;
	}

	.divTable {
		display: table;
	}

	.divTable.align-center {
		margin: 0 auto;
	}

	.divTable .forms_box22, .divTable form[name="sendEmailForm"] {
		width: 940px;
	}

	.divTable .text30 {
		width: 100%;
	}

	.service-title {
		margin-top: 20px;
	}

	.fullWidthForm .forms_box22 {
		width: 100%;
		margin-left: 0;
		margin-right: 0;
		box-sizing: border-box;
	}

	.fullWidthForm .text30 {
		width: 100%;
	}

	.form-group {
		margin-bottom: 15px;
	}

	.inline-form-group {
		display: inline-block;
	}

	.form-group label {
		display: inline-block;
		max-width: 100%;
		margin-bottom: 5px;
		font-weight: 700;
	}

	.divSearchMsg {
		font-size: 0.9rem;
		margin: 20px 0 0 0;
		padding: 15px;
		background-color: #f7f7f7;
		border-radius: 5px;
	}

	.credsiiNew {
		display:block;
		max-width:470px;
		min-width:300px;
		width:100%;
		cursor:pointer;
		overflow:hidden;
		height:auto;
		position:absolute;
		top:0;
		right:0;
	}

	.credsiiNewVDP {
		display:block;
		max-width:350px;
		min-width:300px;
		width:100%;
		cursor:pointer;
		overflow:hidden;
		height:auto;
		position:relative;
		top:0;
		right:0;
	}

	.credsiiUsedMinHeight {
		min-height: 130px;
	}

	.credsiiFinance {
		display:block;
		max-width:960px;
		min-width:300px;
		width:100%;
		cursor:pointer;
		overflow:hidden;
		position:relative;
		height:125px;
		margin-top:15px;
	}

	.credsiiFinance .credsii-widget-container{
		max-width: 100%!important;
	}

	.credsiiFinanceMenu {
		display:block;
		max-width:345px;
		min-width:300px;
		width:100%;
		cursor:pointer;
		overflow:hidden;
		height:auto;
		position:relative;
		top:0;
		right:0;
	}

	.credsiiDiv .credsiiFinanceMenu {
		max-width:375px;
	}

	.credsiiFinanceMenu .credsii-widget{
		border: 0;
	}

	.promo-card {
		position: relative;
		height: auto;
		margin-bottom: 10px;
		background-color: #f1f1f1;
		padding: 20px;
		overflow: hidden;
	}

	.promo-body {
		position: relative;
	}
	.promo-body .pic_box2 {
		min-height: 130px;
	}

	.promo-hover {
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		-ms-transition: all 0.3s;
		-o-transition: all 0.3s;
		transition: all 0.3s;
		opacity: 0;
	}

	.promo-body:hover .promo-hover {
		opacity: 1;
	}

	.promo-body:hover .promo-info {
		transform: translateY(-50%) scale(1,1);
	}

	.promo-mask {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: rgba(0,0,0,0.5);
	}

	.promo-info {
		position: absolute;
		left: 0;
		right: 0;
		top: 50%;
		width: 35%;
		margin: auto;
		-webkit-border-radius: 25px;
		-moz-border-radius: 25px;
		border-radius: 25px;
		-webkit-transform: translateY(-150%) scale(0,0);
		-moz-transform: translateY(-150%) scale(0,0);
		-ms-transform: translateY(-150%) scale(0,0);
		-o-transform: translateY(-150%) scale(0,0);
		transform: translateY(-150%) scale(0,0);
		-webkit-box-shadow: 0 0 10px 5px rbga(0,0,0,0.2);
		-moz-box-shadow: 0 0 10px 5px rbga(0,0,0,0.2);
		box-shadow: 0 0 10px 5px rbga(0,0,0,0.2);
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		-ms-transition: all 0.3s;
		-o-transition: all 0.3s;
		transition: all 0.3s;
	}

	.form-end {
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.form-end .btn-wrapper {
		margin: 0 auto;
	}

	.form-end .empty-space {
		margin: auto;
	}

	.form-end .promo-btn {
		position: initial;
	}

	.form-end .print {
		margin-left: auto;
		width: initial;
	}

	.promo-btn {
		padding: 15px 10px;
		width: 100%;
		background-color: white;
		border: 1px solid;
		text-transform: uppercase;
		font-weight: bold;
		position: absolute;
		text-align: center;
		text-decoration: none;
		border-color: #ffffff;
		color:#ffffff;
		background-color: #333333;
		border-radius: 25px;
		transition: 0.25s;
	}

	.promos {
		background: #f1f1f1;
		border-radius: 5px;
		box-shadow: 0 0 10px 1px rgba(0,0,0,0.2);
		position: relative;
		cursor: default;
		margin: 10px;
		/*  */
		display: flex;
		flex-direction: column;
		justify-content: flex-end;
	}

	.promos.promo-medium {
		width: calc(50% - 20px);
		max-width: 50%;
	}

	.promos.promo-small {
		width: calc(33.33333% - 20px);
		max-width: 33.33333%;
	}

	.promos:hover .promo-btn, .promo-btn:hover {
		color: #ffffff;
		background-color: #b39b6d;
		border-color: #ffffff;
	}


	.promos .promo-btn {
		width: inherit;
		position: initial;
		display: block;
		padding: 15px 45px;
	}

	.promos.promo-small .promo-btn {
		padding: 11px 15px;
	}

	.promo-break {
		border-top: 1px solid #ababab;
		padding-top: 10px;
		margin: 15px 0;
	}

	.promo-image {
		overflow: hidden;
		-webkit-border-radius: 5px 5px 0 0;
		-moz-border-radius: 5px 5px 0 0;
		border-radius: 5px 5px 0 0;
	}

	.promos:hover .promo-image img {
		-webkit-transform: scale(1.1);
		-moz-transform: scale(1.1);
		-ms-transform: scale(1.1);
		-o-transform: scale(1.1);
		transform: scale(1.1);
	}

	.promo-image img {
		max-width: 100%;
		transition: transform 1s;
		display: table-cell;
		margin: 0 auto;
	}

	.promo-body {
		padding: 15px;
	}

	.promo-body .promo-desc {
		display: none;
	}

	.promo-body .promo-title {
		font-size: 24px;
		display: block;
		font-weight: 600;
		color: #333333;
		min-height: 60px;
	}

	.promo-small .promo-body .promo-title {
		font-size: 20px;
	}

	.promo-links {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.promo-link-item .print {
		width: auto;
		text-align: right;
	}

	.promos-container {
		display: flex;
		flex-wrap: wrap;
		flex-direction: row;
		float: left;
		width: 100%;
	}

	.banner-form {
		position: relative;
		display: table;
		margin: 0 auto;
	}

	.banner-form .MainBoxLayer {
		position: absolute;
		z-index: 10;
		left: 0;
		right: 0;
		top: 0;
		display: table-cell;
		height: 100%;
	}

	.banner-form-box {
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		position: absolute;
		right: 0;
		max-width: 350px;
		width: 100%;
		margin-top: 35px;
	}

	@media only screen and (min-width: 1301px) {
		.MainBoxLayer .banner-form-box {
			top: 50%;
			-webkit-transform: translateY(-50%);
			-moz-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
			-o-transform: translateY(-50%);
			transform: translateY(-50%);
			margin-top: 0;
		}

	}

	@media only screen and (max-width: 1301px) {
		.banner-form .banner-form-box {
			padding: 15px;
			max-width: 270px;
			font-size: 13px;
		}

		.banner-form #bannerForm .form-control {
			padding: 4px 8px;
			height: 30px;
			margin-bottom: 12px;
		}

		.banner-form .banner-form-title {
			font-size: 15pt;
		}

		.banner-form .banner-form-subtitle {
			font-size: 11pt;
		}

		.banner-form .btn.banner-btn {
			padding: 4px 12px;
		}
	}

	.otherLogoMenuContainer{
		float: left;
	}

	.otherLogoMenuContainerRight{
		float: right;
	}

	.otherLogoMenuImage{
		max-width: 250px;
		max-height: 100px;
	}

	/*
 *	Call to action boxes on homepage
 *	Needs to be here so there is 'glitch' when loading the page.
 */

	.ctabox--wrapper {
		clear: both;
		padding: 0.75rem 0;
		background: ;
	}

	.ctabox--table {
		width: 85%!important;
		max-width:1200px;
		margin: auto;
		border-spacing: 1rem;
	}

	.ctabox--cell {
		width: 25%;
		transition: all 0.2s linear;
	}

	.ctabox--cell:not([onclick='']):hover {
		cursor: pointer;
	}

	.ctabox--cell.ctabox--cell__1 { width: 100%; }
	.ctabox--cell.ctabox--cell__2 { width: 480px; }
	.ctabox--cell.ctabox--cell__3 { width: 33%; }

	.ctabox--container {
		padding: 1rem;
	}

	.ctabox--container .ctabox--icon {
		font-size: 25px;
	}

	.ctabox--container .ctabox--icon.ctabox--icon__top {
		padding-bottom: 10px;
	}

	.ctabox--container .ctabox--icon.ctabox--icon__left {
		float: left;
	}

	.ctabox--icon__left ~ .ctabox--title,
	.ctabox--icon__left ~ .ctabox--description,
	.ctabox--icon__left ~ .ctabox--button {
		margin-left: 35px;
	}

	.ctabox--container .ctabox--title {
		font-weight: bold;
		font-size: 25px;
	}

	.ctabox--container .ctabox--description {
		margin-top: 10px;
	}

	.ctabox--container .ctabox--button {
		margin-top: 20px;
	}

	.parallax-section {
		background-position: center;
		background-size: cover;
		background-attachment: fixed;
		padding: 25px 0;
		-webkit-transition: all 0.3s;
		-moz-transition: all 0.3s;
		-ms-transition: all 0.3s;
		-o-transition: all 0.3s;
		transition: all 0.3s;
		background-color: #000;
	}

	.parallax-section .container {
		width: 60%;
		padding-right: 15px;
		padding-left: 15px;
		margin-right: auto;
		margin-left: auto;
	}

	.parallax-section .container.large {
		width: 80%;
	}

	.parallax-content {
		width: 45%;
		background: rgba(0,0,0,0.7);
		padding: 40px 40px;
		color: #fff;
	}

	.parallax-content .parallax-content-business-title {
		font-size: 23px !important;
		font-weight: normal !important;
		margin-bottom: 20px;
		color: #fff !important;
	}

	.parallax-content .parallax-content-business-desc {
		font-size: 15px !important;
		text-align: justify;
		color: #fff !important;
	}

	.parallax-content .parallax-content-business-desc a{
		color: #fff !important;
	}

	@media (max-width: 1330px) {
		.parallax-section .container {
			width: 80%;
		}

		.parallax-section .container.large {
			width: 100%;
		}
	}

	.sr-only {
		position: absolute !important;
		width: 1px !important;
		height: 1px !important;
		padding: 0 !important;
		margin: -1px !important;
		overflow: hidden !important;
		clip: rect(0, 0, 0, 0) !important;
		/* white-space: nowrap !important; */
		border: 0 !important;
	}

	.bnp_pullout_img_col{
		width:15%;
		text-align:center;
		display:table-cell;
		vertical-align:middle;
	}

	.bnp_pullout_img{
		width:160px;
	}

	.bnp_pullout_col_separator{
		width:1px;
		background-color:#EBEBEB;
		height:98px;
		position:absolute;
		top:20px;
	}

	.bnp_pullout_mid_col{
		width:70%;
		display:table-cell;
	}

	.bnp_pullout_mid_col_right{
		width:40%;
		display:table-cell;
		padding:0 2%;
	}

	.bnp_pullout_mid_col_text{
		width:60%;
		display:table-cell;
		padding:0 80px;
	}

	.bnp_pullout_mid_col_separator{
		width:1px;
		background-color:#EBEBEB;
		height:40px;
		position:absolute;
		top:78px;
	}

	.bnp_pullout_mid_col_price_and_button{
		display:flex;
		flex-direction:row;
	}

	.bnp_pullout_mid_col_price_with_title{
		display:flex;
		flex-direction:column;
		text-align:center;
		width:45%;
	}

	.bnp_pullout_mid_col_price{
		font-size:37px;
		font-weight:bold;
	}

	.bnp_pullout_mid_col_button{
		margin:30px auto;
	}

	@media (max-width: 1330px) {
		.bnp_pullout_img_col {
			width: 25%;
		}

		.bnp_pullout_mid_col {
			width: 50%;
		}

		.bnp_pullout_mid_col_price_and_button {
			display: flex;
			flex-direction: column;
		}

		.bnp_pullout_mid_col_price_with_title {
			width: 100%;
		}

		.bnp_pullout_mid_col_button {
			margin: 20px auto;
		}

		.bnp_pullout_col_separator {
			height: 164px;
		}

		.bnp_pullout_mid_col_separator {
			height: 106px;
		}
	}

	/*Credit Score pullout*/
	.pullout-content .creditScorePulloutImg{
		height: 110px;
	}

	.pullout-content .creditScorePulloutButton{
		background: #417F1A !important;
		/*border: 1px solid #ffffff;*/
		border-radius: 3px;
		color: #ffffff;
		padding: 7px 20px 7px;
		font-size: 16px;
		font-weight: 700;
		text-shadow: 0.4px 0;
	}

	.pullout-content .creditScorePulloutContent{
		color: #000000;
		font-size: 25px;
		font-weight: 700;
		margin-bottom: -15px;
	}

	.pullout-content .creditScorePulloutContentScore{
		color: #000000;
		font-weight: 700;
		font-size: 30px;
		text-shadow: 2px 0;
	}

	.pullout-content .creditScorePulloutContentFree{
		color: #417F1A;
		font-weight: 700;
		font-size: 45px;
		text-shadow: 2px 0;
	}

	.isPageFullWidthEnabled.isFullWidthPage  .pullout-content .creditScorePulloutMaxWidth{
		max-width: 1200px;
	}

	.pullout-content .creditScorePulloutMaxWidth{
		max-width: 960px;
	}



	/** /css/main.css **/

	.-left {float:left!important;}
	.-right {float:right}
	.-small {font-size:.8em;margin-bottom:1.875em;line-height:1.875em!important;}
	.-large {font-size:1.2em;line-height:2.5em;margin-bottom:1.25em!important;}
	.-hide {display:none!important;}
	.-quiet {color:#666!important;}
	.-loud {color:#000000!important;}
	.-highlight {background:#ff0!important;}
	.-added {background:#060;color:#fff!important;}
	.-removed {background:#900;color:#fff!important;}
	.-push-first {margin-left:0;padding-left:0!important;}
	.-push-last {margin-right:0;padding-right:0!important;}
	.-push-left {margin-top:0;padding-top:0!important;}
	.-push-bottom {margin-bottom:0;padding-bottom:0!important;}
	.-noborder {border:0!important;}
	.-nodecoration, .-no-text-decoration, .-notext-decoration {text-decoration:none!important;}

	.-text-uppercase, .-uppercase {text-transform:uppercase!important;}
	.-text-lowercase, .-lowercase {text-transform:lowercase!important;}

	.-hidden { display: none; }

	.-text-bold,.bold, .-bold{font-weight:bold!important;}
	.-text-normal,.normal{font-weight:normal!important;}
	.-align-top {vertical-align:top!important;}
	.-align-middle {vertical-align:middle!important;}

	.-line-h1{   line-height: 1em; }
	.-line-h2{   line-height: 2em; }
	.-bottom0{
		bottom:0;
	}
	.-bottom0-important{
		bottom:0!important;
	}

	.Porsche2{
		clear:both;
	}

	.black-text {
		color: #000000;
	}


	::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
		padding-top: 1px;

		color: #a9a9a9;
		opacity: 1; /* Firefox */
	}

	:-ms-input-placeholder { /* Internet Explorer 10-11 */
		color: #a9a9a9;

	}

	::-ms-input-placeholder { /* Microsoft Edge */
		color: #a9a9a9;

	}


	#carTitle .fa-chevron-right,
	.Specifications .fa-chevron-right
	{
		border-radius: 30px;
		width: 20px;
		height: 25px;
		padding-top: 4px;
		padding-left: 9px;
		float: left;
		margin-top: 8px;
		font-size: 22px;
		border: 1px solid #ffffff;
		background-color: #333333;
		color:#ffffff ;
		margin-right: 10px;
	}

	.Specifications .fa-chevron-right{
		margin-top: 1px;
	}

	#carTitle .makeModelYear{
		font-size: 25px;
	}

	#carTitle .dealerLcationCarTitle {
		font-weight: normal;
		color: #9c9c9c;
		font-size: 18px;
		letter-spacing: -1px;
	}

	.carTitle .fa-chevron-right{
		border-radius: 30px;
		width: 20px;
		height: 25px;
		padding-top: 4px;
		padding-left: 9px;
		float: left;
		margin-top: 8px;
		font-size: 22px;
		border: 1px solid #ffffff;
		background-color: #333333;
		color:#ffffff ;
		margin-right: 10px;
	}

	.carTitle .makeModelYear{
		font-size: 23px;
	}

	.carTitle .dealerLcationCarTitle {
		font-weight: normal;
		color: #9c9c9c;
		font-size: 15px;
		letter-spacing: -1px;
	}

	#SearchTitle .fa-chevron-right{
		border-radius: 30px;
		width: 31px;
		height: 41px;
		padding-top: 5px;
		padding-left: 14px;
		float: left;
		margin-top: 8px;
		font-size: 35px;
		border: 1px solid #ffffff;
		background-color: #333333;
		color:#ffffff ;
		margin-right: 10px;
	}

	#SearchTitle .dealerLcationCarTitle {
		font-weight: normal;
		color: #9c9c9c;
		font-size: 16px;
		letter-spacing: -1px;
		margin-left: 45px;
		display: block;
	}

	.ui-state-default .ui-icon {
		background-image: url(js/calendarui/images/ui-icons_454545_256x240.png)!important;
	}


	.ui-multiselect-checkboxes label input {
		position: relative;
		top: 1px;
		margin-right: 8px;
		height: 13px;

	}


	.ui-widget,.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus,
	.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
		background: #fff!important;
		color: #555;
		font-size: 15px!important;

	}


	.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
		padding: 8px 10px!important;
	}

	.ui-multiselect-checkboxes li{
		font-size: 15px!important;
	}

	.ui-corner-all{
		border-radius: 0px!important;
	}

	.-collapse{
		border-collapse: collapse;
	}

	.-li{
		list-style-type: none;
	}

	.-no-shadow, .-shadow0, .-noshadow{
		box-shadow: none!important;
	}

	.-underline{
		text-decoration: underline!important;
	}

	.-top0{
		top:0;
	}


	.-text-left{text-align:left!important;}
	.-text-right{text-align:right!important;}
	.-text-center{text-align:center!important;}
	.-text-red, .-red-text{color:red!important;}

	.-block{display:block!important;}
	.-inline-block{display:inline-block!important;}
	.-none, .-hidden, .-hidde {display:none!important;}
	.-inline {display:inline!important;}

	.-color1 { color:#575757!important;}

	.-title1 {
		font-size:23px!important;
		font-color: #000000 !important;
		text-decoration:none!important;
	}


	.-input {
		font-size: 13px;
		line-height: 15px;
		vertical-align: middle;
		height: 32px;
		color: #404040;
		padding: 0px 6px!important;
		margin: 0px;
		outline: none;
		min-height: 20px;
		border: 1px solid #ced4da;
		border-radius: .25rem;
		transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	}

	.-input:focus, .-input:hover{
		border-color: #80bdff !important;
		box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
	}


	/* position */
	.-position-static, .-pos-static, .-pos-stat {position:static!important;}
	.-position-absolute, .-pos-absolute, .-pos-abs {position:absolute!important;}
	.-position-fixed, .-pos-fixed, .-pos-fix {position:fixed!important;}
	.-position-relative, .-pos-relative, .-pos-rel {position:relative!important;}
	.-position-inherit, .-pos-inherit, .-pos-inh {position:inherit!important;}

	/* forms.css  @in progress * /
input[type=text], input[type=password], input[type=url], input[type=email], input.text, input.title, textarea {background-color:#fff;border:1px solid #bbb;color:#000!important;}
input[type=text]:focus, input[type=password]:focus, input[type=url]:focus, input[type=email]:focus, input.text:focus, input.title:focus, textarea:focus {border-color:#666!important;}
select {background-color:#fff;border-width:1px;border-style:solid!important;}
input[type=text], input[type=password], input[type=url], input[type=email], input.text, input.title, textarea, select {margin:0.5em 0!important;}
input.text, input.title {width:300px;padding:5px!important;}
input.title {font-size:1.5em!important;}
textarea {width:390px;height:250px;padding:5px!important;}
form.inline {line-height:3!important;}
form.inline p {margin-bottom:0!important;}
*/

	-lh-1-3, -line-height-1-3{
		line-height: 1.3;
	}

	-lh-20{
		line-height: 20px;
	}

	/* Validation */
	.-error, .-alert, .-notice, .-success, .-info {padding:0.8em;margin-bottom:1em;border:2px solid #ddd!important;}
	.-error, .-alert {background:#fbe3e4;color:#8a1f11;border-color:#fbc2c4!important;}
	.-notice {background:#fff6bf;color:#514721;border-color:#ffd324!important;}
	.-success {background:#e6efc2;color:#264409;border-color:#c6d880!important;}
	.-info {background:#d5edf8;color:#205791;border-color:#92cae4!important;}
	.-error a, .alert a {color:#8a1f11!important;}
	.-notice a {color:#514721!important;}
	.-success a {color:#264409!important;}
	.-info a {color:#205791!important;}

	/* grid.css */
	.-box {padding:1.5em;margin-bottom:1.5em;background:#e5eCf9!important;}
	-hr {background:#dddddd;color:#dddddd;clear:both;float:none;width:100%;height:1px;margin:0 0 17px;border:none!important;}
	-space {background:#fff;color:#fff;visibility:hidden;clear:both;float:none;width:100%;height:1px;margin:0 0 17px;border:none!important;}
	.-clearfix:after {content:"\0020";display:block;height:0;clear:both;visibility:hidden;overflow:hidden!important;}
	.-clearfix{display:block!important;}
	.-clear {clear:both!important;}

	.clearfix:after {content: ""; display: table; clear: both;}

	.-overflow-hidden {overflow:hidden!important;}

	/* -h  width */
	.-w5 {width:5px!important;}
	.-w10 {width:10px!important;}
	.-w15 {width:15px!important;}
	.-w18 {width:18px!important;}
	.-w20 {width:20px!important;}
	.-w25 {width:25px!important;}
	.-w30 {width:30px!important;}
	.-w35 {width:35px!important;}
	.-w40 {width:40px!important;}
	.-w45 {width:45px!important;}
	.-w50 {width:50px!important;}
	.-w55 {width:55px!important;}
	.-w60 {width:60px!important;}
	.-w65 {width:65px!important;}
	.-w70 {width:70px!important;}
	.-w73 {width:73px!important;}
	.-w75 {width:75px!important;}
	.-w80 {width:80px!important;}
	.-w85 {width:85px!important;}
	.-w88 {width:88px!important;}
	.-w90 {width:90px!important;}
	.-w95 {width:95px!important;}
	.-w100 {width:100px!important;}
	.-w110 {width:110px!important;}
	.-w120 {width:120px!important;}
	.-w125 {width:125px!important;}
	.-w130 {width:130px!important;}
	.-w135 {width:135px!important;}
	.-w140 {width:140px!important;}
	.-w143 {width:143px!important;}
	.-w145 {width:145px!important;}
	.-w150 {width:150px!important;}
	.-w170 {width:180px!important;}
	.-w180 {width:180px!important;}
	.-w185 {width:185px!important;}
	.-w190 {width:190px!important;}
	.-w200 {width:200px!important;}
	.-w210 {width:210px!important;}
	.-w215 {width:215px!important;}
	.-w220 {width:220px!important;}
	.-w230 {width:230px!important;}
	.-w240 {width:240px!important;}
	.-w250 {width:250px!important;}
	.-w255 {width:255px!important;}
	.-w260 {width:260px!important;}
	.-w270 {width:270px!important;}
	.-w275 {width:275px!important;}
	.-w280 {width:280px!important;}
	.-w290 {width:290px!important;}
	.-w300 {width:300px!important;}
	.-w315 {width:315px!important;}
	.-w320 {width:320px!important;}
	.-w325 {width:325px!important;}
	.-w350 {width:350px!important;}
	.-w400 {width:400px!important;}
	.-w450 {width:450px!important;}
	.-w460 {width:450px!important;}
	.-w500 {width:500px!important;}
	.-w630 {width:630px!important;}
	.-w620 {width:620px!important;}
	.-w625 {width:625px!important;}
	.-w675 {width:675px!important;}
	.-w680 {width:680px!important;}
	.-w670 {width:670px!important;}
	.-w700 {width:700px!important;}
	.-w720 {width:720px!important;}
	.-w725 {width:725px!important;}
	.-w730 {width:730px!important;}
	.-w750 {width:750px!important;}
	.-w800 {width:800px!important;}
	.-w900 {width:900px!important;}
	.-w937 {width:937px!important;}
	.-w940 {width:940px!important;}
	.-w960 {width:960px!important;} /* MAX value */
	.-w970 {width:970px!important;} /* because some blocks have shadows or borders +10 to max*/
	.-w1000 {width:1000px!important;}

	.-w5p {width:5%!important;}
	.-w10p {width:10%!important;}
	.-w15p {width:20%!important;}
	.-w20p {width:20%!important;}
	.-wq, .-w25p  {width:25%!important;}
	.-w30p {width:30%!important;}
	.-w35p {width:35%!important;}
	.-w40p {width:40%!important;}
	.-w45p {width:45%!important;}
	.-wh,.-w50p {width:50%!important;}
	.-w55p {width:55%!important;}
	.-w60p {width:60%!important;}
	.-w65p {width:65%!important;}
	.-w70p {width:70%!important;}
	.-w75p {width:75%!important;}
	.-w80p {width:80%!important;}
	.-w85p {width:85%!important;}
	.-w90p {width:90%!important;}
	.-w95p {width:95%!important;}
	.-wf,.-w100p {width:100%!important;}
	.-max-w-none {max-width:none!important;}

	/* -h  height */

	.-h5 {height:5px!important;}
	.-h6 {height:6px!important;}
	.-h7 {height:7px!important;}
	.-h8 {height:8px!important;}
	.-h9 {height:9px!important;}
	.-h10 {height:10px!important;}
	.-h11 {height:11px!important;}
	.-h12 {height:12px!important;}
	.-h13 {height:13px!important;}
	.-h14 {height:14px!important;}
	.-h15 {height:15px!important;}
	.-h20 {height:20px!important;}
	.-h25 {height:25px!important;}
	.-h30 {height:30px!important;}
	.-h32 {height:32px!important;}
	.-h35 {height:35px!important;}
	.-h40 {height:40px!important;}
	.-h45 {height:45px!important;}
	.-h50 {height:50px!important;}
	.-h55 {height:55px!important;}
	.-h60 {height:60px!important;}
	.-h65 {height:65px!important;}
	.-h70 {height:70px!important;}
	.-h75 {height:75px!important;}
	.-h80 {height:80px!important;}
	.-h85 {height:85px!important;}
	.-h90 {height:90px!important;}
	.-h95 {height:95px!important;}
	.-h100 {height:100px!important;}
	.-h110 {height:110px!important;}
	.-h120 {height:120px!important;}
	.-h130 {height:130px!important;}
	.-h140 {height:140px!important;}
	.-h150 {height:150px!important;}
	.-h160 {height:160px!important;}
	.-h170 {height:170px!important;}
	.-h180 {height:180px!important;}
	.-h190 {height:190px!important;}
	.-h200 {height:200px!important;}
	.-h220 {height:220px!important;}
	.-h230 {height:230px!important;}
	.-h240 {height:240px!important;}
	.-h245 {height:245px!important;}
	.-h248 {height:248px!important;}
	.-h250 {height:250px!important;}
	.-h255 {height:255px!important;}
	.-h260 {height:260px!important;}
	.-h300 {height:300px!important;}
	.-h350 {height:350px!important;}
	.-h400 {height:400px!important;}
	.-h450 {height:450px!important;}
	.-h500 {height:500px!important;}
	.-h550 {height:550px!important;}
	.-h600 {height:600px!important;}
	.-h650 {height:650px!important;}
	.-h700 {height:700px!important;}
	.-h750 {height:750px!important;}
	.-h800 {height:800px!important;}
	.-h900 {height:900px!important;}
	.-h1000 {height:1000px!important;}

	.-h5p {height:5%!important;}
	.-h10p {height:10%!important;}
	.-h15p {height:15%!important;}
	.-h20p {height:20%!important;}
	.-hq, .-h25p  {height:25%!important;}
	.-hh,.-h50p {height:50%!important;}
	.-hf,.-h100p {height:100%!important;}

	.-box-s-b{
		-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
		-moz-box-sizing: border-box;    /* Firefox, other Gecko */
		box-sizing: border-box;         /* Opera/IE 8+ */
	}

	.-box-content{
		box-sizing:content-box;
	}

	.-flex{display: flex;}
	.-flex-column{display: flex;flex-direction: column;}
	.-ai-center{align-items: center;}

	/* -p  padding */
	.-p0,.-nopadding,.-nopaddings {padding:0!important;}
	.-p1 {padding:1px!important;}
	.-p2 {padding:2px!important;}
	.-p3 {padding:3px!important;}
	.-p4 {padding:4px!important;}
	.-p5 {padding:5px!important;}
	.-p6 {padding:6px!important;}
	.-p7 {padding:7px!important;}
	.-p8 {padding:8px!important;}
	.-p9 {padding:9px!important;}
	.-p10 {padding:10px!important;}
	.-p15 {padding:15px!important;}
	.-p20 {padding:20px!important;}
	.-p25 {padding:25px!important;}
	.-p30 {padding:30px!important;}
	.-p35 {padding:35px!important;}
	.-p40 {padding:40px!important;}
	.-p45 {padding:45px!important;}
	.-p50 {padding:50px!important;}


	.-pl0 {padding-left:0!important;}
	.-pl1 {padding-left:1px!important;}
	.-pl2 {padding-left:2px!important;}
	.-pl3 {padding-left:3px!important;}
	.-pl4 {padding-left:4px!important;}
	.-pl5 {padding-left:5px!important;}
	.-pl6 {padding-left:6px!important;}
	.-pl7 {padding-left:7px!important;}
	.-pl8 {padding-left:8px!important;}
	.-pl9 {padding-left:9px!important;}
	.-pl10 {padding-left:10px!important;}
	.-pl15 {padding-left:15px!important;}
	.-pl16 {padding-left:16px!important;}
	.-pl17 {padding-left:17px!important;}
	.-pl20 {padding-left:20px!important;}
	.-pl25 {padding-left:25px!important;}
	.-pl30 {padding-left:30px!important;}
	.-pl35 {padding-left:35px!important;}
	.-pl40 {padding-left:40px!important;}
	.-pl45 {padding-left:45px!important;}
	.-pl50 {padding-left:50px!important;}
	.-pl55 {padding-left:55px!important;}


	.-pr0 {padding-right:0!important;}
	.-pr1 {padding-right:1px!important;}
	.-pr2 {padding-right:2px!important;}
	.-pr3 {padding-right:3px!important;}
	.-pr4 {padding-right:4px!important;}
	.-pr5 {padding-right:5px!important;}
	.-pr6 {padding-right:6px!important;}
	.-pr7 {padding-right:7px!important;}
	.-pr8 {padding-right:8px!important;}
	.-pr9 {padding-right:9px!important;}
	.-pr10 {padding-right:10px!important;}
	.-pr15 {padding-right:15px!important;}
	.-pr20 {padding-right:20px!important;}
	.-pr25 {padding-right:25px!important;}
	.-pr30 {padding-right:30px!important;}
	.-pr35 {padding-right:35px!important;}
	.-pr40 {padding-right:40px!important;}
	.-pr45 {padding-right:45px!important;}
	.-pr50 {padding-right:50px!important;}
	.-pr55 {padding-right:55px!important;}

	.-pt0{padding-top:0!important;}
	.-pt1 {padding-top:1px!important;}
	.-pt2 {padding-top:2px!important;}
	.-pt3 {padding-top:3px!important;}
	.-pt4 {padding-top:4px!important;}
	.-pt5 {padding-top:5px!important;}
	.-pt6 {padding-top:6px!important;}
	.-pt7 {padding-top:7px!important;}
	.-pt8 {padding-top:8px!important;}
	.-pt9 {padding-top:9px!important;}
	.-pt10 {padding-top:10px!important;}
	.-pt15 {padding-top:15px!important;}
	.-pt20 {padding-top:20px!important;}
	.-pt25 {padding-top:25px!important;}
	.-pt30 {padding-top:30px!important;}
	.-pt35 {padding-top:35px!important;}
	.-pt40 {padding-top:40px!important;}
	.-pt45 {padding-top:45px!important;}
	.-pt50 {padding-top:50px!important;}
	.-pt55 {padding-top:55px!important;}
	.-pt200 {padding-top:200px!important;}

	.-pb0 {padding-bottom:0!important;}
	.-pb1 {padding-bottom:1px!important;}
	.-pb2 {padding-bottom:2px!important;}
	.-pb3 {padding-bottom:3px!important;}
	.-pb4 {padding-bottom:4px!important;}
	.-pb5 {padding-bottom:5px!important;}
	.-pb6 {padding-bottom:6px!important;}
	.-pb7 {padding-bottom:7px!important;}
	.-pb8 {padding-bottom:8px!important;}
	.-pb9 {padding-bottom:9px!important;}
	.-pb10 {padding-bottom:10px!important;}
	.-pb15 {padding-bottom:15px!important;}
	.-pb20 {padding-bottom:20px!important;}
	.-pb25 {padding-bottom:25px!important;}
	.-pb30 {padding-bottom:30px!important;}
	.-pb40 {padding-bottom:40px!important;}

	-border-radius0,-radius0,-rad0 {border-radius: 0px!important;}
	-border-radius1,-radius1,-rad1 {border-radius: 0px!important;}
	-border-radius2,-radius2,-rad2 {border-radius: 0px!important;}
	-border-radius3,-radius3,-rad3 {border-radius: 0px!important;}
	-border-radius4,-radius4,-rad4 {border-radius: 0px!important;}
	-border-radius5,-radius5,-rad5 {border-radius: 0px!important;}
	-border-radius6,-radius6,-rad6 {border-radius: 0px!important;}
	-border-radius7,-radius7,-rad7 {border-radius: 0px!important;}
	-border-radius8,-radius8,-rad8 {border-radius: 0px!important;}
	-border-radius9,-radius9,-rad9 {border-radius: 0px!important;}
	-border-radius10,-radius10,-rad10 {border-radius: 0px!important;}


	/* -m  margin */

	.-mauto {margin:auto!important;}
	.-m0 .-nomargins,.-nomargin{margin:0!important;}
	.-m1 {margin:1px!important;}
	.-m2 {margin:2px!important;}
	.-m3 {margin:3px!important;}
	.-m4 {margin:4px!important;}
	.-m5 {margin:5px!important;}
	.-m6 {margin:6px!important;}
	.-m7 {margin:7px!important;}
	.-m8 {margin:8px!important;}
	.-m9 {margin:9px!important;}
	.-m10 {margin:10px!important;}
	.-m15 {margin:15px!important;}
	.-m20 {margin:20px!important;}
	.-m22 {margin:22px!important;}
	.-m25 {margin:25px!important;}

	.-m5p {margin:5%!important;}
	.-m10p {margin:10%!important;}
	.-m15p {margin:15%!important;}
	.-m20p {margin:20%!important;}
	.-m25p {margin:25%!important;}

	.-mlauto {margin-left:auto!important;}
	.-ml0 {margin-left:0!important;}
	.-ml1 {margin-left:1px!important;}
	.-ml2 {margin-left:2px!important;}
	.-ml3 {margin-left:3px!important;}
	.-ml4 {margin-left:4px!important;}
	.-ml5 {margin-left:5px!important;}
	.-ml6 {margin-left:6px!important;}
	.-ml7 {margin-left:7px!important;}
	.-ml8 {margin-left:8px!important;}
	.-ml9 {margin-left:9px!important;}
	.-ml10 {margin-left:10px!important;}
	.-ml15 {margin-left:15px!important;}
	.-ml20 {margin-left:20px!important;}
	.-ml25 {margin-left:25px!important;}
	.-ml27 {margin-left:27px!important;}
	.-ml30 {margin-left:30px!important;}
	.-ml50 {margin-left:50px!important;}
	.-ml80 {margin-left:80px!important;}
	.-ml100 {margin-left:100px!important;}
	.-ml130 {margin-left:130px!important;}
	.-ml150 {margin-left:150px!important;}

	.-ml2p {margin-left:2%!important;}
	.-ml3p {margin-left:3%!important;}
	.-ml5p {margin-left:5%!important;}
	.-ml10p {margin-left:10%!important;}
	.-ml15p {margin-left:15%!important;}
	.-ml20p {margin-left:20%!important;}
	.-ml25p {margin-left:25%!important;}

	.-mrauto {margin-right:auto!important;}
	.-mr0 {margin-right:0!important;}
	.-mr1 {margin-right:1px!important;}
	.-mr2 {margin-right:2px!important;}
	.-mr3 {margin-right:3px!important;}
	.-mr4 {margin-right:4px!important;}
	.-mr5 {margin-right:5px!important;}
	.-mr6 {margin-right:6px!important;}
	.-mr7 {margin-right:7px!important;}
	.-mr8 {margin-right:8px!important;}
	.-mr9 {margin-right:9px!important;}
	.-mr10 {margin-right:10px!important;}
	.-mr15 {margin-right:15px!important;}
	.-mr20 {margin-right:20px!important;}
	.-mr25 {margin-right:25px!important;}
	.-mr30 {margin-right:30px!important;}
	.-mr35 {margin-right:35px!important;}
	.-mr40 {margin-right:40px!important;}
	.-mr45 {margin-right:45px!important;}
	.-mr50 {margin-right:50px!important;}
	.-mr100 {margin-right:100px!important;}

	.-mr2p {margin-right:2%!important;}
	.-mr3p {margin-right:3%!important;}
	.-mr5p {margin-right:5%!important;}
	.-mr10p {margin-right:10%!important;}
	.-mr15p {margin-right:15%!important;}
	.-mr20p {margin-right:20%!important;}
	.-mr25p {margin-right:25%!important;}

	.-mtauto {margin-top:auto!important;}
	.-mt-7{margin-top:-7px!important;}
	.-mt0{margin-top:0!important;}
	.-mt1 {margin-top:1px!important;}
	.-mt2 {margin-top:2px!important;}
	.-mt3 {margin-top:3px!important;}
	.-mt4 {margin-top:4px!important;}
	.-mt5 {margin-top:5px!important;}
	.-mt6 {margin-top:6px!important;}
	.-mt7 {margin-top:7px!important;}
	.-mt8 {margin-top:8px!important;}
	.-mt9 {margin-top:9px!important;}
	.-mt10 {margin-top:10px!important;}
	.-mt11 {margin-top:11px!important;}
	.-mt12 {margin-top:12px!important;}
	.-mt13 {margin-top:13px!important;}
	.-mt14 {margin-top:14px!important;}
	.-mt15 {margin-top:15px!important;}
	.-mt20 {margin-top:20px!important;}
	.-mt25 {margin-top:25px!important;}
	.-mt27 {margin-top:27px!important;}
	.-mt30 {margin-top:30px!important;}
	.-mt35 {margin-top:35px!important;}
	.-mt40 {margin-top:40px!important;}
	.-mt50 {margin-top:50px!important;}
	.-mt115 {margin-top:115px!important;}
	.-mt200 {margin-top:200px!important;}

	.-mbauto {margin-bottom:auto!important;}
	.-mb0 {margin-bottom:0!important;}
	.-mb1 {margin-bottom:1px!important;}
	.-mb2 {margin-bottom:2px!important;}
	.-mb3 {margin-bottom:3px!important;}
	.-mb4 {margin-bottom:4px!important;}
	.-mb5 {margin-bottom:5px!important;}
	.-mb6 {margin-bottom:6px!important;}
	.-mb7 {margin-bottom:7px!important;}
	.-mb8 {margin-bottom:8px!important;}
	.-mb9 {margin-bottom:9px!important;}
	.-mb10 {margin-bottom:10px!important;}
	.-mb15 {margin-bottom:15px!important;}
	.-mb20 {margin-bottom:20px!important;}
	.-mb25 {margin-bottom:25px!important;}
	.-mb30 {margin-bottom:30px!important;}
	.-mb50 {margin-bottom:50px!important;}


	.-top-10, .-t-10 {top:-10px!important;}
	.-top0, .-t0 {top:0px!important;}
	.-top1, .-t1 {top:1px!important;}
	.-top2, .-t2 {top:2px!important;}
	.-top3, .-t3 {top:3px!important;}
	.-top4, .-t4 {top:4px!important;}
	.-top5, .-t5 {top:5px!important;}
	.-top6, .-t6 {top:6px!important;}
	.-top7, .-t7 {top:7px!important;}
	.-top8, .-t8 {top:8px!important;}
	.-top9, .-t9 {top:9px!important;}
	.-top10, .-t10 {top:10px!important;}
	.-top15, .-t15 {top:15px!important;}
	.-top20, .-t20 {top:20px!important;}
	.-top25, .-t25{top:25px!important;}
	.-top30, .-t30 {top:30px!important;}
	.-top35, .-t35 {top:35px!important;}
	.-top40, .-t40 {top:40px!important;}
	.-top45, .-t45 {top:45px!important;}
	.-top50, .-t50 {top:50px!important;}
	.-top100, .-t100 {top:100px!important;}
	.-top200, .-t200 {top:200px!important;}

	.-top5p, .-t5p {top:5%!important;}
	.-top10p, .-t10p {top:10%!important;}
	.-top15p, .-t15p {top:15%!important;}
	.-top20p, .-t20p {top:20%!important;}
	.-top25p, .-t25p  {top:25%!important;}
	.-top50p, .-t50p {top:50%!important;}
	.-top100p, .-t100p {top:100%!important;}

	.-left0, .-l0 {left:0px!important;}
	.-left1, .-l1 {left:1px!important;}
	.-left2, .-l2 {left:2px!important;}
	.-left3, .-l3 {left:3px!important;}
	.-left4, .-l4 {left:4px!important;}
	.-left5, .-l5 {left:5px!important;}
	.-left6, .-l6 {left:6px!important;}
	.-left7, .-l7 {left:7px!important;}
	.-left8, .-l8 {left:8px!important;}
	.-left9, .-l9 {left:9px!important;}
	.-left10, .-l10 {left:10px!important;}
	.-left15, .-l15 {left:15px!important;}
	.-left20, .-l20 {left:20px!important;}
	.-left25, .-l25{left:25px!important;}
	.-left30, .-l30 {left:30px!important;}
	.-left35, .-l35 {left:35px!important;}
	.-left40, .-l40 {left:40px!important;}
	.-left45, .-l45 {left:45px!important;}
	.-left50, .-l50 {left:50px!important;}
	.-left55, .-l55 {left:55px!important;}
	.-left60, .-l60 {left:60px!important;}
	.-left65, .-l65 {left:65px!important;}
	.-left70, .-l70 {left:70px!important;}
	.-left75, .-l75 {left:75px!important;}
	.-left80, .-l80 {left:80px!important;}
	.-left85, .-l85 {left:85px!important;}
	.-left90, .-l90 {left:90px!important;}
	.-left95, .-l95 {left:95px!important;}
	.-left100, .-l100 {left:100px!important;}
	.-left150, .-l150 {left:150px!important;}
	.-left200, .-l200 {left:200px!important;}
	.-left250, .-l250 {left:250px!important;}
	.-left300, .-l300 {left:300px!important;}

	.-left5p, .-l5p {left:5%!important;}
	.-left10p, .-l10p {left:10%!important;}
	.-left15p, .-l15p {left:15%!important;}
	.-left20p, .-l20p {left:20%!important;}
	.-left25p, .-l25p  {left:25%!important;}
	.-left40p, .-l40p {left:40%!important;}
	.-left50p, .-l50p {left:50%!important;}
	.-left100p, .-l100p {left:100%!important;}

	.-right0, .-r0 {right:0px!important;}
	.-right1, .-r1 {right:1px!important;}
	.-right2, .-r2 {right:2px!important;}
	.-right3, .-r3 {right:3px!important;}
	.-right4, .-r4 {right:4px!important;}
	.-right5, .-r5 {right:5px!important;}
	.-right6, .-r6 {right:6px!important;}
	.-right7, .-r7 {right:7px!important;}
	.-right8, .-r8 {right:8px!important;}
	.-right9, .-r9 {right:9px!important;}
	.-right10, .-r10 {right:10px!important;}
	.-right15, .-r15 {right:15px!important;}
	.-right20, .-r20 {right:20px!important;}
	.-right25, .-r25 {right:25px!important;}
	.-right30, .-r30 {right:30px!important;}
	.-right35, .-r35 {right:35px!important;}
	.-right40, .-r40 {right:40px!important;}
	.-right45, .-r45 {right:45px!important;}
	.-right50, .-r50 {right:50px!important;}
	.-right55, .-r55 {right:55px!important;}
	.-right60, .-r60 {right:60px!important;}
	.-right65, .-r65 {right:65px!important;}
	.-right70, .-r70 {right:70px!important;}
	.-right75, .-r75 {right:75px!important;}
	.-right80, .-r80 {right:80px!important;}
	.-right85, .-r85 {right:85px!important;}
	.-right90, .-r90 {right:90px!important;}
	.-right95, .-r95 {right:95px!important;}
	.-right100, .-r100 {right:100px!important;}
	.-right150, .-r150 {right:150px!important;}
	.-right200, .-r200 {right:200px!important;}
	.-right250, .-r250 {right:250px!important;}

	.-right5p, .-r5p {right:5%!important;}
	.-right10p, .-r10p {right:10%!important;}
	.-right15p, .-r15p {right:15%!important;}
	.-right20p, .-r20p {right:20%!important;}
	.-right25p, .-r25p  {right:25%!important;}
	.-right50p, .-r50p {right:50%!important;}
	.-right100p, .-r100p {right:100%!important;}


	/* table @in progress*/

	.-z-index99{z-index:99!important;}
	.-z-index100{z-index:100!important;}
	.-z-index101{z-index:101!important;}
	.-z-index1001, .zindex1001{	z-index:1001!important; }
	.-z-index36001, .zindex36001{	z-index:36001!important; }


	.-no-border-spacing{
		border-spacing: 0!important;
	}
	.-table{
		cellpadding:0!important;
		cellspacing:0!important;
		border:0!important;
	}

	table.-table thead th {
		background: #c3d9ff!important;
	}

	table.-table tr th, table.-table tr td {
		padding: 4px 10px 4px 5px!important;
	}

	tr.-border-bottom td, tr.-border-bottom th {
		border-bottom: 1pt solid black!important;
	}

	-white-space-nowrap {white-space: nowrap!important;}

	/* cursor */
	.-cursor-auto            { cursor: auto; }
	.-cursor-default         { cursor: default; }
	.-cursor-none            { cursor: none; }
	.-cursor-context-menu    { cursor: context-menu; }
	.-cursor-help            { cursor: help; }
	.-cursor-pointer         { cursor: pointer; }
	.-cursor-progress        { cursor: progress; }
	.-cursor-wait            { cursor: wait; }
	.-cursor-cell            { cursor: cell; }
	.-cursor-crosshair       { cursor: crosshair; }
	.-cursor-text            { cursor: text; }
	.-cursor-vertical-text   { cursor: vertical-text; }
	.-cursor-alias           { cursor: alias; }
	.-cursor-copy            { cursor: copy; }
	.-cursor-move            { cursor: move; }
	.-cursor-no-drop         { cursor: no-drop; }
	.-cursor-not-allowed     { cursor: not-allowed; }
	.-cursor-all-scroll      { cursor: all-scroll; }
	.-cursor-col-resize      { cursor: col-resize; }
	.-cursor-row-resize      { cursor: row-resize; }
	.-cursor-n-resize        { cursor: n-resize; }
	.-cursor-e-resize        { cursor: e-resize; }
	.-cursor-s-resize        { cursor: s-resize; }
	.-cursor-w-resize        { cursor: w-resize; }
	.-cursor-ns-resize       { cursor: ns-resize; }
	.-cursor-ew-resize       { cursor: ew-resize; }
	.-cursor-ne-resize       { cursor: ne-resize; }
	.-cursor-nw-resize       { cursor: nw-resize; }
	.-cursor-se-resize       { cursor: se-resize; }
	.-cursor-sw-resize       { cursor: sw-resize; }
	.-cursor-nesw-resize     { cursor: nesw-resize; }
	.-cursor-nwse-resize     { cursor: nwse-resize; }

	.-font-size0, .-fs0{ font-size:0!important;}
	.-font-size1, .-fs1{ font-size:1px!important;}
	.-font-size2, .-fs2{ font-size:2px!important;}
	.-font-size3, .-fs3{ font-size:3px!important;}
	.-font-size4, .-fs4{ font-size:4px!important;}
	.-font-size5, .-fs5{ font-size:5px!important;}
	.-font-size6, .-fs6{ font-size:6px!important;}
	.-font-size7, .-fs7{ font-size:7px!important;}
	.-font-size8, .-fs8{ font-size:8px!important;}
	.-font-size9, .-fs9{ font-size:9px!important;}
	.-font-size10, .-fs10{ font-size:10px!important;}
	.-font-size11, .-fs11{ font-size:11px!important;}
	.-font-size12, .-fs12{ font-size:12px!important;}
	.-font-size13, .-fs13{ font-size:13px!important;}
	.-font-size14, .-fs14{ font-size:14px!important;}
	.-font-size15, .-fs15{ font-size:15px!important;}
	.-font-size16, .-fs16{ font-size:16px!important;}
	.-font-size17, .-fs17{ font-size:17px!important;}
	.-font-size18, .-fs18{ font-size:18px!important;}
	.-font-size19, .-fs19{ font-size:19px!important;}
	.-font-size20, .-fs20{ font-size:20px!important;}
	.-font-size21, .-fs21{ font-size:21px!important;}
	.-font-size22, .-fs22{ font-size:22px!important;}
	.-font-size23, .-fs23{ font-size:23px!important;}
	.-font-size24, .-fs24{ font-size:24px!important;}
	.-font-size25, .-fs25{ font-size:25px!important;}
	.-font-size26, .-fs26{ font-size:26px!important;}
	.-font-size27, .-fs27{ font-size:27px!important;}
	.-font-size28, .-fs28{ font-size:28px!important;}
	.-font-size29, .-fs29{ font-size:29px!important;}
	.-font-size30, .-fs30{ font-size:30px!important;}
	.-font-size31, .-fs31{ font-size:31px!important;}
	.-font-size32, .-fs32{ font-size:32px!important;}
	.-font-size33, .-fs33{ font-size:33px!important;}
	.-font-size34, .-fs34{ font-size:34px!important;}
	.-font-size35, .-fs35{ font-size:35px!important;}
	.-font-size36, .-fs36{ font-size:36px!important;}
	.-font-size37, .-fs37{ font-size:37px!important;}
	.-font-size38, .-fs38{ font-size:38px!important;}
	.-font-size39, .-fs39{ font-size:39px!important;}
	.-font-size40, .-fs40{ font-size:40px!important;}


	/* <img class="-red-line-big -w100 lazyload" data-src="/images/red-line.png" alt='red line' />  !!! add also -wclass to the element*/
	.-red-line-h35{
		height: 35px;
		margin-bottom: -35px;
		position: relative;
		top: -25px;
	}

	#breadcrumbs{
		float: left;
		font-size: 16px;
		margin-left: 10px;
		margin-top: 8px;
		margin-bottom: 15px;
		color: #757575;
	}

	#breadcrumbs a{
		color: #757575;
	}

	/***************
<CarProof Widget>
****************/

	#carproof_main.carproof_main{
		width:340px;
		height: auto;
		background-color: #fff;
		padding: 20px;
		display:none;
		z-index:9999;
		box-sizing: border-box;
		border-radius:5px;
		position: fixed;
		transform: translateY(-50%) translateX(-50%);
		-ms-transform: translateY(-50%) translateX(-50%);
		left: 50%;
		top: 50%;
	}

	#carproof_main .carproofMainDiv {
		width: 100%;
		height: auto;
		padding: 0;
		background: #fff;
		box-sizing: border-box;
		position: relative;
		float: left;
	}

	#carproof_main .carproofMainDiv UL{
		width: 100%;
		box-sizing: border-box;
		padding: 0 !important;
	}

	#carproof_main .carproofMainDiv UL LI {
		list-style-type: none;
		width: 100%;
		float: left;
		padding: 0 0 5px 0;
	}

	#carproof_main .carproof_field{
		margin-bottom:7px;
	}

	#carproof_main .carproofMessage{
		font-size:1rem;
		color:#000;
		font-weight: normal;
		padding-bottom: 15px;
		position: relative;
		float: left;
		width: 100%;
		box-sizing: border-box;
	}

	#innerPageDiv{
		display:table;
	}

	#carproof_main .carproof_label{
		font-size:1rem;
		color:#666666;
		font-weight: bold;
		display: block;
		float: left;
		margin:0;
		text-align: left;
		width: 100%;
		line-height: 25px;
		box-sizing: border-box;
	}

	#carproof_main .carproof_input{
		font-size:1rem;
		padding: 5px;
		border: 1px solid #b9bdc1;
		width: 100%;
		color: #797979;
		box-sizing: border-box;
		margin-bottom:10px;
		border-radius:5px;
	}

	#carproof_main .carproof_input:focus
	{
		background-color:#F4F4F4;
		color: #000000 !important; /* quick fix JS or something is add inline style color making carproof form look like shit */
	}

	#carproof_main .phoneInput{
		font-size:1rem;
		padding: 5px;
		border: 1px solid #b9bdc1;
		width: 47px;
		margin-right: 5px;
		color: #797979;
		border-radius:5px;
	}

	#carproof_main .phoneInput:focus
	{
		background-color:#F4F4F4;
		color: #000000;
	}

	#carproof_main .carproof_buttonIE
	{
		border: 1px solid #C83F41;
		margin:10px 10px 10px 0;
		padding: 3px 10px;
		text-align: center;
		float:right;
		width:60px;
		color: #fff;
		cursor: pointer;
		border-top-color: #C83F41;
		border-right-color: #C83F41;
		border-bottom-color: #C83F41;
		border-left-color: #C83F41;
		border-top-width: 1px;
		border-right-width: 1px;
		border-bottom-width: 1px;
		border-left-width: 1px;
		border-top-style: solid;
		border-right-style: solid;
		border-bottom-style: solid;
		border-left-style: solid;
		border-top-left-radius: 8px;
		border-top-right-radius: 8px;
		border-bottom-right-radius: 8px;
		border-bottom-left-radius: 8px;
		box-shadow: 0px 2px 3px #666;
		background-image: none;
		background-attachment: scroll;
		background-repeat: repeat;
		background-position: 0 0;
		background-size: auto;
		background-origin: padding-box;
		background-clip: border-box;
		background-color: rgb(200, 63, 65);
		font-weight: normal;
	}

	#carproof_main .carproof_buttonIEHover
	{
		background-color: #C83F41;
		font-weight: bold;
	}

	#carproof_main .carproof_button
	{
		font-size: 1rem;
		float: right;
		margin:25px 0 0;
		font-weight: normal;
		line-height: 1rem;
		padding: 10px 15px;
		cursor:pointer;
		color: #fff;
		text-align: center;
		text-shadow: 0 -1px 1px #64799e;

		/* Background gradient */
		background: #C83F41;
		background: -moz-linear-gradient(top, #C83F41 0%, #C83F41 100%);
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#C83F41), to(#C83F41));

		/* Border style */
		border: 1px solid #5c6f91;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		border-radius: 5px;

		/* Box shadow */
		-moz-box-shadow: inset 0 1px 0 0 #C83F41;
		-webkit-box-shadow: inset 0 1px 0 0 #C83F41;
		box-shadow: inset 0 1px 0 0 #C83F41;

		width: 100%;
		box-sizing: border-box;

	}

	#carproof_main .carproof_button:hover
	{
		background: #C83F41;
		cursor: pointer;
	}

	#carproof_dialog-overlay {
		background: rgba(0,0,0,.8);
		/* make sure it appear behind the dialog box but above everything else */
		position:fixed;
		top:0;
		left:0;
		right:0;
		bottom:0;
		z-index:9998;
		/* hide it by default */
		display:none;
	}

	.carproof-badge.desktop {
		margin-left: -15px;
		height: 56px;
		overflow: hidden;
		margin-top: -10px;
		float: left;
	}

	.preProcessorHtmlCarPoofAPIreport.carproof-badge.desktop,
	.preProcessorCarPoofAPIreportV5.carproof-badge.desktop,
	.preProcessorHtmlCarProofDefault.carproof-badge.desktop {
		width:106px;
		margin: 2px 5px 0 0;
		float:left;
	}

	#carproof_main img {
		width: 50%;
		float: left;
		position: relative;
		margin: 0 0 15px 0;
	}

	/***************
</CarProof Widget>
****************/



	/***************
<Anti-Spam POpup>
****************/
	#asPopUp{
		background: #ffffff;
		width:340px;
		height:240px;
		padding:30px;
		color:#000000;
	}
	#asPopUp .asTitle{
		text-align:center;
		font-size:36px;
		font-weight:;
		margin-bottom:20px;
	}
	#asPopUp .btnExplicit{
		float:left;
		padding-left:70px;
		width:100px;
	}
	#asPopUp .btnImplicit{
		float:right;
		width:100px;
		padding-right:70px;
	}
	/***************
</Anti-Spam POpup>
****************/

	/***************
<Vehicle Purchase Intent Interstital POpup>
****************/


	#asPurchaseIntent.reveal-modal span.jqTransformRadioWrapper{
		padding: 0;
		margin: 6px 4px 0;
	}
	#asPurchaseIntent .viTitle{

	}
	#asPurchaseIntent .asPITitle{
		text-align: left;
		font-size: 25px;
		margin-bottom: 0;
		padding-bottom: 10px;
		display: block;
	}

	#asPurchaseIntent .viText{
		clear: both;
		font-weight: bold;
		padding-bottom: 10px;
	}
	#asPurchaseIntent .viOptions{
		list-style: none;
		padding: 5px;
		margin-bottom: 3px;
	}
	#asPurchaseIntent .viOptions li {
		padding: 2px;
	}
	#asPurchaseIntent .viOptions li{
		clear: both;
		font-size: 10pt;
	}
	#asPurchaseIntent li  label{
		font-size: 10pt;
	}

	#asPurchaseIntent .buttonDefaultColor {
		margin: 0 auto 5px;
		display: block;
		clear: both;
	}
	#asPurchaseIntent .steps {
		list-style: inside none none;
	}
	#asPurchaseIntent .steps > li{
		background: #fff;
		border: 1px solid #bbbbbb;
		border-width: 0 1px 1px 0;
		padding: 15px;
		margin-bottom: 15px;
		font-size: 10pt;
	}
	#asPurchaseIntent .asyesno {
		float: left;
		padding-right: 10px;
		width: 90px;
	}
	#asPurchaseIntent .asyes{
		padding-left: 90px;
		width: 70px;
	}
	/***************
</Vehicle Purchase Intent Interstital POpup>
***************/



	/**************
/ Call to Action Buttons (Small)
**************/
	.custom5_left, /* price*/
	.custom25_left, /* Credit */
	.custom35_left, /* testDrive */
	.custom45_left, /* Eval */
	.cta_price,.cta_credit,.cta_testDrive,.cta_eval,.cta_svcpromo,.cta_service,.cta_parts,.cta_tires {
		width:280px;
		height:61px;
		padding:0 15px 0 60px;
		display: table-cell;
		vertical-align: middle;
		font-size:16px;
		font-weight:bold;
		cursor:pointer;
		color:#191919;
		background: url('images/box25.png') no-repeat scroll left top;
		background-size: 589px 550px;
	}
	.cta_price.alt:hover,
	.cta_credit.alt:hover,
	.cta_testDrive.alt:hover,
	.cta_eval.alt:hover,
	.cta_service.alt:hover,
	.cta_parts.alt:hover,
	.cta_tires.alt:hover,
	.cta_svcpromo.alt:hover {
		color:#191919;
	}
	.custom55_left,
	.custom255_left,
	.custom355_left,
	.custom455_left,
	.cta_price.alt,.cta_price:hover,
	.cta_credit.alt, .cta_credit:hover,
	.cta_testDrive.alt, .cta_testDrive:hover,
	.cta_eval.alt, .cta_eval:hover,
	.cta_service.alt, .cta_service:hover,
	.cta_parts.alt, .cta_parts:hover,
	.cta_tires.alt, .cta_tires:hover,
	.cta_svcpromo.alt, .cta_svcpromo:hover {
		color:#FFFFFF;
	}
	.cta_price,         .cta_price.alt:hover     { background-position: 0 0; }
	.cta_price.alt,     .cta_price:hover         { background-position: -309px 0; }
	.cta_credit,        .cta_credit.alt:hover    { background-position: left -67px;    }
	.cta_credit.alt,    .cta_credit:hover        { background-position: -309px -67px;  }
	.cta_testDrive,     .cta_testDrive.alt:hover { background-position: left -135px;   }
	.cta_testDrive.alt, .cta_testDrive:hover     { background-position: -309px -135px; }
	.cta_eval,          .cta_eval.alt:hover      { background-position: left -204px;   }
	.cta_eval.alt,      .cta_eval:hover          { background-position: -309px -204px; }
	.cta_svcpromo,      .cta_svcpromo.alt:hover  { background-position: left -273px;   }
	.cta_svcpromo.alt,  .cta_svcpromo:hover      { background-position: -309px -273px; }
	.cta_service,       .cta_service.alt:hover   { background-position: left -341px;   }
	.cta_service.alt,   .cta_service:hover       { background-position: -309px -341px; }
	.cta_parts,         .cta_parts.alt:hover     { background-position: left -410px;   }
	.cta_parts.alt,     .cta_parts:hover         { background-position: -309px -410px; }
	.cta_tires,         .cta_tires.alt:hover     { background-position: left -482px;   }
	.cta_tires.alt,     .cta_tires:hover         { background-position: -309px -482px; }

	.cta_service.hide_text,
	.cta_parts.hide_text,
	.cta_tires.hide_text,
	.cta_price.hide_text,
	.cta_credit.hide_text,
	.cta_testDrive.hide_text,
	.cta_eval.hide_text,
	.cta_svcpromo.hide_text {
		text-indent: -2000em;
	}
	body.FRENCH .cta_price.custom,
	body.FRENCH .cta_price.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.FRENCH .cta_credit.custom,
	body.FRENCH .cta_credit.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.FRENCH .cta_testDrive.custom,
	body.FRENCH .cta_testDrive.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.FRENCH .cta_eval.custom,
	body.FRENCH .cta_eval.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.FRENCH .cta_service.custom,
	body.FRENCH .cta_service.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.FRENCH .cta_parts.custom,
	body.FRENCH .cta_parts.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.FRENCH .cta_tires.custom,
	body.FRENCH .cta_tires.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.FRENCH .cta_svcpromo.custom,
	body.FRENCH .cta_svcpromo.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.ENGLISH .cta_price.custom,
	body.ENGLISH .cta_price.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.ENGLISH .cta_credit.custom,
	body.ENGLISH .cta_credit.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.ENGLISH .cta_testDrive.custom,
	body.ENGLISH .cta_testDrive.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.ENGLISH .cta_eval.custom,
	body.ENGLISH .cta_eval.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.ENGLISH .cta_service.custom,
	body.ENGLISH .cta_service.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.ENGLISH .cta_parts.custom,
	body.ENGLISH .cta_parts.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.ENGLISH .cta_tires.custom,
	body.ENGLISH .cta_tires.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}
	body.ENGLISH .cta_svcpromo.custom,
	body.ENGLISH .cta_svcpromo.custom:hover{
		background: url('images/blank.gif'); background-size: 280px;
	}

	/* BLACK BUTTONS */
	body.FRENCH .cta_price.black,
	body.FRENCH .cta_price.black:hover{
		background: url('images/action_buttons/CTA_price_black_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_credit.black,
	body.FRENCH .cta_credit.black:hover{
		background: url('images/action_buttons/CTA_finance_black_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_testDrive.black,
	body.FRENCH .cta_testDrive.black:hover{
		background: url('images/action_buttons/CTA_testdrive_black_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_eval.black,
	body.FRENCH .cta_eval.black:hover{
		background: url('images/action_buttons/CTA_tradein_black_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_service.black,
	body.FRENCH .cta_service.black:hover{
		background: url('images/action_buttons/CTA_service_black_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_parts.black,
	body.FRENCH .cta_parts.black:hover{
		background: url('images/action_buttons/CTA_parts_black_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_tires.black,
	body.FRENCH .cta_tires.black:hover{
		background: url('images/action_buttons/CTA_tires_black_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_svcpromo.black,
	body.FRENCH .cta_svcpromo.black:hover{
		background: url('images/action_buttons/CTA_promoservice_black_fr.png'); background-size: 280px;
	}
	body.ENGLISH .cta_price.black,
	body.ENGLISH .cta_price.black:hover{
		background: url('images/action_buttons/CTA_price_black_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_credit.black,
	body.ENGLISH .cta_credit.black:hover{
		background: url('images/action_buttons/CTA_finance_black_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_testDrive.black,
	body.ENGLISH .cta_testDrive.black:hover{
		background: url('images/action_buttons/CTA_testdrive_black_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_eval.black,
	body.ENGLISH .cta_eval.black:hover{
		background: url('images/action_buttons/CTA_tradein_black_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_service.black,
	body.ENGLISH .cta_service.black:hover{
		background: url('images/action_buttons/CTA_service_black_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_parts.black,
	body.ENGLISH .cta_parts.black:hover{
		background: url('images/action_buttons/CTA_parts_black_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_tires.black,
	body.ENGLISH .cta_tires.black:hover{
		background: url('images/action_buttons/CTA_tires_black_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_svcpromo.black,
	body.ENGLISH .cta_svcpromo.black:hover{
		background: url('images/action_buttons/CTA_promoservice_black_en.png'); background-size: 280px;
	}

	/* BLUE BUTTONS */
	body.FRENCH .cta_price.blue,
	body.FRENCH .cta_price.blue:hover{
		background: url('images/action_buttons/CTA_price_blue_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_credit.blue,
	body.FRENCH .cta_credit.blue:hover{
		background: url('images/action_buttons/CTA_finance_blue_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_testDrive.blue,
	body.FRENCH .cta_testDrive.blue:hover{
		background: url('images/action_buttons/CTA_testdrive_blue_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_eval.blue,
	body.FRENCH .cta_eval.blue:hover{
		background: url('images/action_buttons/CTA_tradein_blue_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_service.blue,
	body.FRENCH .cta_service.blue:hover{
		background: url('images/action_buttons/CTA_service_blue_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_parts.blue,
	body.FRENCH .cta_parts.blue:hover{
		background: url('images/action_buttons/CTA_parts_blue_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_tires.blue,
	body.FRENCH .cta_tires.blue:hover{
		background: url('images/action_buttons/CTA_tires_blue_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_svcpromo.blue,
	body.FRENCH .cta_svcpromo.blue:hover{
		background: url('images/action_buttons/CTA_promoservice_blue_fr.png'); background-size: 280px;
	}
	body.ENGLISH .cta_price.blue,
	body.ENGLISH .cta_price.blue:hover{
		background: url('images/action_buttons/CTA_price_blue_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_credit.blue,
	body.ENGLISH .cta_credit.blue:hover{
		background: url('images/action_buttons/CTA_finance_blue_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_testDrive.blue,
	body.ENGLISH .cta_testDrive.blue:hover{
		background: url('images/action_buttons/CTA_testdrive_blue_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_eval.blue,
	body.ENGLISH .cta_eval.blue:hover{
		background: url('images/action_buttons/CTA_tradein_blue_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_service.blue,
	body.ENGLISH .cta_service.blue:hover{
		background: url('images/action_buttons/CTA_service_blue_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_parts.blue,
	body.ENGLISH .cta_parts.blue:hover{
		background: url('images/action_buttons/CTA_parts_blue_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_tires.blue,
	body.ENGLISH .cta_tires.blue:hover{
		background: url('images/action_buttons/CTA_tires_blue_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_svcpromo.blue,
	body.ENGLISH .cta_svcpromo.blue:hover{
		background: url('images/action_buttons/CTA_promoservice_blue_en.png'); background-size: 280px;
	}

	/* RED BUTTONS */
	body.FRENCH .cta_price.red,
	body.FRENCH .cta_price.red:hover{
		background: url('images/action_buttons/CTA_price_red_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_credit.red,
	body.FRENCH .cta_credit.red:hover{
		background: url('images/action_buttons/CTA_finance_red_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_testDrive.red,
	body.FRENCH .cta_testDrive.red:hover{
		background: url('images/action_buttons/CTA_testdrive_red_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_eval.red,
	body.FRENCH .cta_eval.red:hover{
		background: url('images/action_buttons/CTA_tradein_red_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_service.red,
	body.FRENCH .cta_service.red:hover{
		background: url('images/action_buttons/CTA_service_red_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_parts.red,
	body.FRENCH .cta_parts.red:hover{
		background: url('images/action_buttons/CTA_parts_red_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_tires.red,
	body.FRENCH .cta_tires.red:hover{
		background: url('images/action_buttons/CTA_tires_red_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_svcpromo.red,
	body.FRENCH .cta_svcpromo.red:hover{
		background: url('images/action_buttons/CTA_promoservice_red_fr.png'); background-size: 280px;
	}
	body.ENGLISH .cta_price.red,
	body.ENGLISH .cta_price.red:hover{
		background: url('images/action_buttons/CTA_price_red_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_credit.red,
	body.ENGLISH .cta_credit.red:hover{
		background: url('images/action_buttons/CTA_finance_red_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_testDrive.red,
	body.ENGLISH .cta_testDrive.red:hover{
		background: url('images/action_buttons/CTA_testdrive_red_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_eval.red,
	body.ENGLISH .cta_eval.red:hover{
		background: url('images/action_buttons/CTA_tradein_red_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_service.red,
	body.ENGLISH .cta_service.red:hover{
		background: url('images/action_buttons/CTA_service_red_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_parts.red,
	body.ENGLISH .cta_parts.red:hover{
		background: url('images/action_buttons/CTA_parts_red_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_tires.red,
	body.ENGLISH .cta_tires.red:hover{
		background: url('images/action_buttons/CTA_tires_red_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_svcpromo.red,
	body.ENGLISH .cta_svcpromo.red:hover{
		background: url('images/action_buttons/CTA_promoservice_red_en.png'); background-size: 280px;
	}

	/* GREY BUTTONS */
	body.FRENCH .cta_price.grey,
	body.FRENCH .cta_price.grey:hover{
		background: url('images/action_buttons/CTA_price_grey_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_credit.grey,
	body.FRENCH .cta_credit.grey:hover{
		background: url('images/action_buttons/CTA_finance_grey_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_testDrive.grey,
	body.FRENCH .cta_testDrive.grey:hover{
		background: url('images/action_buttons/CTA_testdrive_grey_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_eval.grey,
	body.FRENCH .cta_eval.grey:hover{
		background: url('images/action_buttons/CTA_tradein_grey_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_service.grey,
	body.FRENCH .cta_service.grey:hover{
		background: url('images/action_buttons/CTA_service_grey_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_parts.grey,
	body.FRENCH .cta_parts.grey:hover{
		background: url('images/action_buttons/CTA_parts_grey_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_tires.grey,
	body.FRENCH .cta_tires.grey:hover{
		background: url('images/action_buttons/CTA_tires_grey_fr.png'); background-size: 280px;
	}
	body.FRENCH .cta_svcpromo.grey,
	body.FRENCH .cta_svcpromo.grey:hover{
		background: url('images/action_buttons/CTA_promoservice_grey_fr.png'); background-size: 280px;
	}
	body.ENGLISH .cta_price.grey,
	body.ENGLISH .cta_price.grey:hover{
		background: url('images/action_buttons/CTA_price_grey_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_credit.grey,
	body.ENGLISH .cta_credit.grey:hover{
		background: url('images/action_buttons/CTA_finance_grey_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_testDrive.grey,
	body.ENGLISH .cta_testDrive.grey:hover{
		background: url('images/action_buttons/CTA_testdrive_grey_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_eval.grey,
	body.ENGLISH .cta_eval.grey:hover{
		background: url('images/action_buttons/CTA_tradein_grey_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_service.grey,
	body.ENGLISH .cta_service.grey:hover{
		background: url('images/action_buttons/CTA_service_grey_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_parts.grey,
	body.ENGLISH .cta_parts.grey:hover{
		background: url('images/action_buttons/CTA_parts_grey_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_tires.grey,
	body.ENGLISH .cta_tires.grey:hover{
		background: url('images/action_buttons/CTA_tires_grey_en.png'); background-size: 280px;
	}
	body.ENGLISH .cta_svcpromo.grey,
	body.ENGLISH .cta_svcpromo.grey:hover{
		background: url('images/action_buttons/CTA_promoservice_grey_en.png'); background-size: 280px;
	}

	.cta_price:hover,
	.cta_credit:hover,
	.cta_testDrive:hover,
	.cta_eval:hover,
	.cta_service:hover,
	.cta_parts:hover,
	.cta_tires:hover,
	.cta_svcpromo:hover{
		opacity: 0.75;
	}

	/**************
/ END Call to Action Buttons (Small)
**************/

	/*************************
Certified Vehicles Images:
**************************/
	.search_cert_generic{
		/*width:106px;*/
		height:44px;
		margin: 2px 5px 0 0;
		float:left;
		margin-top:-0px;
	}

	/**********
New Details Compare
***********/

	#CompareBox {
		width:790px;
		height:auto;
		float:left;
		margin-bottom:10px;
		padding:12px 20px;
		background:#e8e8e8;
		-moz-border-radius:8px;
		-webkit-border-radius:8px;
		-khtml-border-radius:8px;
		border-radius:8px;
	}
	#CompareBox h2 {
		padding: 0 0px 10px 0px;
		line-height: 20px;
		font-size: 20px;
		color: #242424;
		font-weight:normal;
		margin-bottom:0;
	}
	#CompareBox #compareButton a{
		color: #ffffff;
		text-transform: uppercase;
		text-decoration:none;
	}

	#CompareBox #compareButton {
		background-color: #cc0000;
	}

	/**********
// New Details Compare
***********/

	/**********
New Car In Used Page
***********/
	#newCarInUsedPage{
		margin-top:-2px;
		margin-bottom:5px;
		display:none;
		text-decoration:none;
	}
	#newCarInUsedPage .box288_top{
		background: url('images/right_box4_top.png') no-repeat scroll left top transparent;
	}
	#newCarInUsedPage .box2880_mid{
		background: url('images/right_box4_mid.png') repeat-y scroll left top transparent
	}
	#newCarInUsedPage .box288_footer_qs{
		background : url('images/right_box4_footer.png') no-repeat scroll left top transparent
	}
	#newCarInUsedPage_scratchPrice{
		width: 110px;
		height: 35px;
		float: right;
		position: relative;
		left: -83px;
		display:none;
	}
	#newCarInUsedPage_title{
		display:block;text-align:center;font-size:15px;font-weight:bold;text-decoration:none;
	}

	/****************
Credit/Financement Page
*****************/
	ul#credit_drivetrain,
	ul#credit_fueltype,
	ul#credit_bodyTypes {
		list-style: none;
		float: left;
		width: 33%;
		padding-bottom: 10px;
	}
	ul#credit_drivetrain li > label,
	ul#credit_fueltype li > label,
	ul#credit_bodyTypes li > label{
		display: block;
		padding-bottom: 5px;
		font-weight: normal;
		font-size: 13px;
		color: #242424;
		float: none;
	}
	ul#credit_drivetrain li > div,
	ul#credit_fueltype li > div,
	ul#credit_bodyTypes li > div{
		display: block;
		padding-bottom: 5px;
		font-weight: normal;
		font-size: 13px;
		color: #000000;
		float: none;
	}
	ul#credit_drivetrain li > label > span,
	ul#credit_fueltype li > label > span,
	ul#credit_bodyTypes li > label > span{
		margin-right: 8px;
		margin-top:0px;
	}
	#credit_vi_advanced label{
		float: left;
	}
	#credit_vi_advanced label div.label{
		float: left;
		line-height: 32px;
		margin-right: 6px;
		width: 200px;
		text-align: right;
		font-weight: normal;
		font-size: 13px;
		color: #242424;
	}



	/****************
END -- Credit/Financement Page
*****************/



	/********************/
	/******* ETC ********/
	/********************/
	.details_box .box2_details_mid .box2_details_text,
	.details_box .box2_details_mid .box2_details_text25 span,
	.details_box .box2_details_mid .box2_details_text span{
		color: #ff0000;
	}

	.mycarousel_td{
		display: block; width: 560px; overflow: hidden; margin-left: 30px;
		margin-top: 10px;

	}


	.vehicleCarousel{
		width:190px;
		/*height:180px;*/

	}

	.details_box, .details_box .box2_details_midEx {
		background: #b5b5b4;
	}

	#extColorSelect.fixedWidth ,
	#intColorSelect.fixedWidth  {
		width: 230px;
	}

	.colorChoice{
		height: 31px;
		width: 31px;
		text-align: center;
		text-indent: -2000em;
		line-height: 31px;
		font-size: 15px;
		font-weight: bold;
		float: left;
		border: 1px solid #000;
		margin: 2px;
		color: #fff;
	}

	.colorChoice.chosen { text-indent: 0; /*background-image: url( '/images/check.png' );*/ }
	.colorChoice.tan        { background-color: #d2b48c; }
	.colorChoice.black    { background-color: #000000; }

	.colorChoice.gold      { background-color: #b29600; }
	.colorChoice.brown    { background-color: #66330e; }
	.colorChoice.green    { background-color: #009900; }
	.colorChoice.gray      { background-color: #979797; }
	.colorChoice.grey      { background-color: #979797; }
	.colorChoice.orange  { background-color: #e69400; }
	.colorChoice.silver  { background-color: #c0c0c0; color: #000000; }
	.colorChoice.mauve    { background-color: #d473d4; }
	.colorChoice.red        { background-color: #cc0000; }
	.colorChoice.white    { background-color: #FFFFFF; color: #000000; }
	.colorChoice.yellow  { background-color: #f0c000; color: #000000; }
	.colorChoice.blue      { background-color: #1919c4; }
	.colorChoice.copper      { background-color: #AF4744; }
	.colorChoice.purple      { background-color:#5315B2; }
	.light-gray			{ background-color: #4b4c4c; color: #000000;}


	a.colorChoice {
		color: #fff;
		text-decoration:none;
	}

	tr.border_bottom_line td, tr.border_bottom_line th {
		border-bottom:1pt solid black;
	}

	.border_box{
		border-radius:5px;
		margin-bottom:5px;
		background-color: rgb(255,255,255);
		-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
		background-color: rgba(255,255,255,1);
		box-shadow: none;
		clear:both;
	}

	.homepage .border_box{
		box-shadow: none!important;
	}

	#home_socialTimeline{
		background-color:;
	}

	#footerWrapper{
		width: 100%;
		margin-top: 0px;
		clear: both;
		padding-top: 15px;
		color:#fff;
		/* color: var(--footer-items-link-color); */
		background-color: #333333;
		background-color: #444444;
	}

	.customform_submit{
		margin-top: 20px;
		margin-bottom: 20px;
	}
	.seeOptions{
		display:none;
	}


	.strike-price,
	.strike-price-black,
	.strike-price-white {
		display: inline-block;
		position: relative;
	}

	.strike-price::before,
	.strike-price-black::before,
	.strike-price-white::before {
		-moz-border-radius:20px 0;
		-webkit-border-radius:20px 0;
		border-radius:20px 0;
		content: "";
		height:2px;
		position:absolute;
		top:45%;
		-moz-transform:rotate(7deg);
		-webkit-transform:rotate(7deg);
		transform:rotate(7deg);
		transform-origin:50% 50% 0;
		width:100%;
	}

	.strike-price::before {
		background:none repeat scroll 0 0 #000;
		/*background:none repeat scroll 0 0 #cc0000;*/
	}

	.strike-price-black::before {
		background:none repeat scroll 0 0 black;
	}

	.strike-price-white::before {
		background:none repeat scroll 0 0 white;
	}

	.blur-price {
		-webkit-filter: blur(0.15em);
		-moz-filter: blur(0.15em);
		-ms-filter: blur(0.15em);
		-o-filter: blur(0.15em);
		/* FF doesn't support blur filter, but SVG */
		filter: url("data:image/svg+xml;utf8,<svg height='0' xmlns='https://www.w3.org/2000/svg'><filter id='svgBlur' x='-5%' y='-5%' width='110%' height='110%'><feGaussianBlur in='SourceGraphic' stdDeviation='5'/></filter></svg>#svgBlur");
		filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius='5');
		filter: blur(0.15em);
	}

	.left_box{
		background-color: rgb(255,255,255);
		-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
		background-color: rgba(255,255,255,1);
		margin-top: 10px ;
		padding: 10px  0 10px;
		float: left;
		height: auto;
		border-radius: 5px;
		box-shadow: none;
	}

	.btn-default, .btn-sm, .btn-lg,.customform_submit,.submit{
		-moz-border-radius:3px;
		-webkit-border-radius:3px;
		display:inline-block;
		cursor:pointer;
		text-decoration:none;
		text-transform: uppercase;
		/*font-weight: bold;*/
	}

	.btn-default,
	.submit,
	.customform_submit,
	input[type=button].btn-default,
	input[type=submit].btn-default
	{
		padding:11px 20px 9px 20px;
		border-radius:3px;
	}

	.btn-sm,
	input[type=button].btn-sm,
	input[type=submit].btn-sm
	{
		font-size:inherit!important;
		padding:4px 10px!important;
		border-radius:3px!important;
	}

	.btn-lg,
	input[type=button].btn-lg,
	input[type=submit].btn-lg
	{
		font-size: 17px;
		padding: 12px 50px;
		border-radius: 6px;
		font-weight: bold;
	}


	.btn-default:focus,
	.customform_submit:focus,
	.btn-sm:focus,
	.btn-lg:focus,
	#exit_popup_yes:focus,
	#exit_popup_no:focus {
		outline: none;
	}

	/* search page apply credit button */
	.btn-default.apply-credit {
		display: inline-block;
		vertical-align: top;
		word-wrap: normal;
		width: 100px;
		text-align: center;
		padding: 3px 5px;
		font-size: 12px;
	}


	/* BUTTON COLORS STYLES - defined in siteGenerator */

	/* EXIT POPUP ACCUTRADE VERSION BURRON */

	.btn-default,
	.customform_submit,
	input[type=button].btn-default,
	input[type=submit].btn-default{
		font-size: 0.8rem;
	}

	#exit_popup_yes {
		-moz-box-shadow:inset 0px -3px 7px 0px #e80d0d;
		-webkit-box-shadow:inset 0px -3px 7px 0px #e80d0d;
		box-shadow:inset 0px -3px 7px 0px #e80d0d;
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ff3333), color-stop(1, #DB0000));
		background:-moz-linear-gradient(top, #ff3333 5%, #DB0000 100%);
		background:-webkit-linear-gradient(top, #ff3333 5%, #DB0000 100%);
		background:-o-linear-gradient(top, #ff3333 5%, #DB0000 100%);
		background:-ms-linear-gradient(top, #ff3333 5%, #DB0000 100%);
		background:linear-gradient(to bottom, #ff3333 5%, #DB0000 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3333', endColorstr='#DB0000',GradientType=0);
		background-color:#ff3333;
		border:1px solid #f51a1a;
		color:#ffffff;
		margin-left:40px;
	}

	#exit_popup_yes:hover {
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #DB0000), color-stop(1, #ff3333));
		background:-moz-linear-gradient(top, #DB0000 5%, #ff3333 100%);
		background:-webkit-linear-gradient(top, #DB0000 5%, #ff3333 100%);
		background:-o-linear-gradient(top, #DB0000 5%, #ff3333 100%);
		background:-ms-linear-gradient(top, #DB0000 5%, #ff3333 100%);
		background:linear-gradient(to bottom, #DB0000 5%, #ff3333 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#DB0000', endColorstr='#ff3333',GradientType=0);
		background-color:#DB0000;
	}

	#exit_popup_no {
		-moz-box-shadow:inset 0px -3px 7px 0px #404040;
		-webkit-box-shadow:inset 0px -3px 7px 0px #404040;
		box-shadow:inset 0px -3px 7px 0px #404040;
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #666666), color-stop(1, #333333));
		background:-moz-linear-gradient(top, #666666 5%, #333333 100%);
		background:-webkit-linear-gradient(top, #666666 5%, #333333 100%);
		background:-o-linear-gradient(top, #666666 5%, #333333 100%);
		background:-ms-linear-gradient(top, #666666 5%, #333333 100%);
		background:linear-gradient(to bottom, #666666 5%, #333333 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#666666', endColorstr='#333333',GradientType=0);
		background-color:#666666;
		border:1px solid #4d4d4d;
		color:#ffffff;
	}

	#exit_popup_no:hover {
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #333333), color-stop(1, #666666));
		background:-moz-linear-gradient(top, #333333 5%, #666666 100%);
		background:-webkit-linear-gradient(top, #333333 5%, #666666 100%);
		background:-o-linear-gradient(top, #333333 5%, #666666 100%);
		background:-ms-linear-gradient(top, #333333 5%, #666666 100%);
		background:linear-gradient(to bottom, #333333 5%, #666666 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#333333', endColorstr='#666666',GradientType=0);
		background-color:#333333;
	}

	/* DEFAULT BUTTON: COLOR BASED ON MENU TAB COLOR*/
	.btn-default,
	.btn-sm,.btn-lg,
	.submit,
	#slideit input.send,
	.customform_submit {
		background-color: #333333;
		/* dont use border: {size} {style} {color} IE gets fucked up and doesnt understand spacing */
		border-width: 1px;
		border-style: solid;
		border-color: #ffffff;
		color: #ffffff;
		text-shadow: none;
	}

	.btn-default.btn-bg-same {
		border-color: #333333;
	}

	.btn-default.btn-bg-same:hover {
		border-color: #b39b6d;
	}

	.btn-default:hover,
	.customform_submit:hover,
	.btn-sm:hover,
	.btn-lg:hover,
	.submit:hover,
	#slideit input.send:hover {
		background-color: #b39b6d;
		/* dont use border: {size} {style} {color} IE gets fucked up and doesnt understand spacing */
		border-width: 1px;
		border-style: solid;
		border-color: #ffffff;
		color: #ffffff;
	}

	/* BUTTON: COLOR PROMO */
	.btn-default.promocolor,
	.btn-sm.promocolor,
	.btn-lg.promocolor {
		background-color: #cc0000;
		border: 1px solid #cc0000;
		color: #ffffff;
	}

	.btn-default.promocolor:hover,
	.btn-sm.promocolor:hover,
	.btn-lg.promocolor:hover{
		background-color:#ffffff;
		color:#cc0000;
	}

	/* BUTTON: COLOR BLACK */
	.btn-default.black,
	.btn-sm.black,
	.btn-lg.black {
		background-color : #000000;
		border           : 1px solid #000000;
		color            : #ffffff;
	}

	.btn-default.black.withborder,
	.btn-sm.black.withborder,
	.btn-lg.black.withborder {
		border : 1px solid #ffffff;
	}

	.btn-default.black:hover,
	.btn-sm.black:hover,
	.btn-lg.black:hover {
		background-color : #ffffff;
		color: #000000;
	}


	/* BUTTON: COLOR NO */
	.btn-default.no,
	.btn-sm.no,
	.btn-lg.no {
		background-color:#FFF;
		border:1px solid #555;
		color:#000;
	}

	.btn-default.no:hover,
	.btn-sm.no:hover,
	.btn-lg.no:hover{
		background-color:#666666;
		border:1px solid #666666;
		color:#FFFFFF;
	}


	/* BUTTON: COLOR invert */
	.btn-default.invert,
	.btn-sm.invert,
	.btn-lg.invert,
	.btn-default.invert.flat,
	.btn-sm.invert.flat,
	.btn-lg.invert.flat {
		background: #ffffff;
		border: 1px solid #333333;
		color: #333333;
		box-shadow: none;
	}
	}

	.btn-default.invert:hover,
	.btn-sm.invert:hover,
	.btn-lg.invert:hover,
	.btn-default.invert.flat:hover,
	.btn-sm.invert.flat:hover,
	.btn-lg.invert.flat:hover
	{
		background-color:#333333;
		color:#ffffff;
	}


	/* BUTTON: COLOR RED */
	.btn-default.red,
	.btn-sm.red,
	.btn-lg.red {
		background:#ff3333!important;
		background-color:#ff3333!important;
		border:1px solid #f51a1a!important;
		color:#FFFFFF!important;
	}

	.btn-default.red:hover,
	.btn-sm.red:hover,
	.btn-lg.red:hover{
		background:#333333!important;
		background-color:#333333!important;
		border:1px solid #333333!important;
		color:#FFFFFF!important;

	}

	.btn-default.white,
	.btn-sm.white,
	.btn-lg.white {
		background: #fff;
		border: 1px solid #000;
		color: #000000;
		box-shadow: none;
	}

	/* search page apply credit button */
	.apply-credit {
		-moz-box-shadow:inset 0px -3px 7px 0px #ff0d0d;
		-webkit-box-shadow:inset 0px -3px 7px 0px #ff0d0d;
		box-shadow:inset 0px -3px 7px 0px #ff0d0d;
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ff3333), color-stop(1, #ff0000));
		background:-moz-linear-gradient(top, #ff3333 5%, #ff0000 100%);
		background:-webkit-linear-gradient(top, #ff3333 5%, #ff0000 100%);
		background:-o-linear-gradient(top, #ff3333 5%, #ff0000 100%);
		background:-ms-linear-gradient(top, #ff3333 5%, #ff0000 100%);
		background:linear-gradient(to bottom, #ff3333 5%, #ff0000 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3333', endColorstr='#DB0000',GradientType=0);
		background-color:#ff3333;
		border:1px solid #ff1a1a;
	}

	.apply-credit:hover {
		background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ff3333), color-stop(1, #ff0000));
		background:-moz-linear-gradient(top, #ff0000 5%, #ff3333 100%);
		background:-webkit-linear-gradient(top, #ff0000 5%, #ff3333 100%);
		background:-o-linear-gradient(top, #ff0000 5%, #ff3333 100%);
		background:-ms-linear-gradient(top, #ff0000 5%, #ff3333 100%);
		background:linear-gradient(to bottom, #ff0000 5%, #ff3333 100%);
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3333', endColorstr='#DB0000',GradientType=0);
		background-color:#ff3333;
	}


	.promoBTN, .promoBTN a, .brochureBtn{
		background:#cc0000!important;
		color:#ffffff!important;
		text-shadow:none!important;
	}

	.promoBTN:hover, .promoBTN a:hover, .brochureBtn:hover{
		background:#ffffff!important;
		color:#cc0000!important;
		border: 1px solid #cc0000;
	}

	.promoArrow,.promoColor{
		color:#cc0000!important;
	}

	.brochureBtn{
		border: none;
		display: block;
		text-align: center;
		padding: 5px;
	}


	.vdp-btn {
		border-radius: 3px;
		margin-bottom: 10px;
		text-transform: none;
		text-align: center;
		font-size: 17px;
		padding: 8px 5px;
		width: 237px;
	}



	/* mobile flat  buttons */
	@media only screen and (max-width: 400px) {

		.btn-default,
		.customform_submit,
		input[type=button].btn-default,
		input[type=submit].btn-default{
			font-size:inherit;
		}

		/* search page apply credit button */
		.apply-credit {

			background:#ff3333;
			border:1px solid #ff1a1a;
		}


		.apply-credit:hover {
		background:{$APPLY_CREDIT_BTN_COLOR_ENDHOVERCOLOR};

	}

	}
	/* end mobile */


	/* END BUTTON COLOR STYLES */


	.bg_blue{
		background-color:#0688fa!important;
		color:#fff;
	}

	.bg_red{
		background-color:#ff0000!important;
		color:#fff;
	}

	.bg_green{
		background-color:#68a54b!important;
		color:#fff;
	}

	.bg_black{
		background-color:#000000!important;
		color:#fff;
	}

	.bg_gray{
		background-color:#797979!important;
		color:#fff;
	}

	.bg_blue a,.bg_red a,.bg_green a,.bg_black a,.bg_gray a {
		color:#fff;
	}

	.bg_default{
		background-color:#333333!important;
	}

	/* Used VDP consumption box */
	.box27{
		width:131px;
		height:28px;
		float:left;
		margin-bottom:8px;
	}
	/* Used VDP consumption box */
	.box27 a{
		width:131px;
		height:28px;
		float:left;
		background: url(images/button10_bg.png) left top repeat-x  ;
		border-radius:3px;
		font-size:14px;
		color:#FFFFFF;
		text-decoration:none;
		font-weight:normal;
		padding:0;
		line-height:28px;
		text-align:
			center;
		text-transform: none;
	}
	/* Used VDP consumption box */
	.box27 a:hover{
		background: url(images/button10_bg.png) left -32px repeat-x;
		color:#FFFFFF;
	}

	/* Used VDP consumption box */
	.box28{
		width:127px;
		height:auto;
		float:left;
		margin:0px;
		background:#6f6f6f url(images/liter_bg.png) left top repeat-x;
		border-radius:3px;

		padding: 10px 2px 10px 2px;
		margin:0 0px 0 0;
	}

	/* Used VDP consumption box */
	.text44{
		width:127px;
		height:auto;
		float:left; background:url(images/liter_line.png) left bottom repeat-x;
		background-position:bottom;
		text-align:center;
		padding-bottom:5px;
		margin-bottom:5px;
		font-size:14px;
		color:#FFFFFF;
		text-decoration:none;
		font-weight:normal;
		text-align: center;
		text-transform: none;
		line-height:18px;
	}

	/* Used VDP consumption box */
	.consumption-not-available > .text44 > span > #cityFuel {
		display: none;
	}
	/* Used VDP consumption box */
	.consumption-not-available > .text44 > span > #highwayFuel {
		display: none;
	}


	.text_slide  a {
		height: 38px;
		margin-right: 0.3em;
		padding-top: 1px !important;
	}

	.text_slide  a > b {
		display:block;
		overflow: hidden !important;
		position: relative;
		height: 25px;
		width: 100%;
	}

	.text_slide  a > b > m1 {
		display: inline-block;
		position: relative;
		white-space: nowrap;
		line-height: 38px !important;
		top: -8px;
		left: 0;
	}
	/* Promo button text sliding animation class for 4 rows */
	.text_slide.text_slide_4 a > b > m1 {
		animation: text_slide_4 4s ease 5s;
		animation-iteration-count: infinite;
	}
	/* Promo button text sliding animation class for 3 rows */
	.text_slide.text_slide_3 a > b > m1 {
		animation: text_slide_3 3s ease 4s;
		animation-iteration-count: infinite;
	}
	/* Promo button text sliding animation class for 2 rows */
	.text_slide.text_slide_2 a > b > m1 {
		animation: text_slide_2 2s ease 2s;
		animation-iteration-count: infinite;
	}
	/* Mobile button size fix */
	.text_slide.promocodebox {
		padding: 0px 0px;
		margin-left: 0px;
		width: 100%;
		margin-top: 9px;
	}

	@keyframes text_slide_4 {
		0%  { top: -8px; }
		25%  { top: -46px; }
		50%  { top: -84px; }
		75%  { top: -122px; }
		100% { top: -160px; }
	}

	@keyframes text_slide_3 {
		0%  { top: -8px; }
		33% { top: -46px; }
		66% { top: -84px; }
		100% { top: -122px; }
	}

	@keyframes text_slide_2 {
		0%  { top: -8px; }
		50% 	{ top: -46px; }
		100%  { top: -84px; }
	}

	.map {
		width: 100%;
		text-align: center;
		/*overflow: hidden;*/
		position: relative;
	}

	.map .wrapper{
		position:static !important;
	}

	.map_dealer_list {
		background-color: rgba(255,255,255,.9);
		box-sizing: border-box;
		position: absolute;
		top: 0;
		padding: 0 30px;
		width: 300px;
		height: 100%;
		text-align: left;
	}

	.map_dealer_list_item {
		cursor: pointer;
		padding: 13px 0;
		font-size: 13px;
	}

	.map_dealer_list_item_name {
		position: absolute;
	}

	.map_dealer_list_item_name:hover {
		font-weight: 700;
	}

	.map_dealer_list_item_name_active {
		font-weight: 700;
	}

	.markerSpan {
		height:18px;
		width:20px;
		display:inline-block;
		position:relative;
		display:inline-block;
	}

	.markerSpan:before {
		content:'';
		height:4px;
		width:4px;
		border:2px solid #333;
		display:block;
		position:absolute;
		top:2px;
		left:0px;
		z-index:1;
		background:#fff;
		line-height:26px;
		border-radius:40px;
		-webkit-border-radius:40px;

		-moz-border-radius:40px;
		color:#fff;
		text-align:center;
	}

	.markerSpan:after {
		content:'';
		height:0px;
		width:0px;
		display:block;
		position:absolute;
		bottom:2px;
		left:2px;
		border:10px transparent solid;
		border-top-color:#333;
		border-width:7px 2px 0px 2px;
	}

	.map_open_hours {
		background-color: rgba(255,255,255,.9);
		box-sizing: border-box;
		position: absolute;
		top: 0;
		width: 400px;
		height: 100%;
		text-align: left;
	}

	.open_hours_container {
		background-color: rgba(255,255,255,.9);
		box-sizing: border-box;
		text-align: left;
	}

	.map_open_hours h2,
	.open_hours_container h2 {
		font-size: 1.5em;
		padding-left: 15px;
		margin-top: 20px;
		margin-bottom: 10px;
		color:inherit;
	}

	.map_open_hours ul,
	.open_hours_container ul {
		padding:0 0;
	}

	.map_open_hours ul li,
	.open_hours_container ul li {
		list-style: none;
		cursor: pointer;
		cursor: hand;
		border-bottom: 1px solid #f3f3f3;
	}

	.map_open_hours_expand{
		padding: 6px 30px 8px 15px;
		display: block;
	}

	.expandable_content{
		padding: 0px 16px 5px 16px;
		font-size: 14px;
		line-height: 1.42857143;
	}

	.expandable_content div,
	.expandable_content_multilocation div {
		display         : flex;
		flex-direction  : row;
	}

	.expandable_content > div > span:first-of-type,
	.expandable_content_multilocation div span:first-of-type {
		width: 40%;
	}

	.expandable_content_multilocation{
		font-size: 14px;
		line-height: 1.42857143;
		margin-top:15px;
	}

	@media only screen and (max-width : 759px) {
		.expandable_content,
		.expandable_content_multilocation {
			font-size: inherit;
		}
	}


	.expandable_content_multilocation table{
		margin-top:15px;
	}

	.map_open_hours_expand_arrow{
		float:right;
		margin-top: 3px;
	}

	.map_mobile {
		width: 100%;
		text-align: center;
		overflow: hidden;
		position: relative;
	}

	.map_open_hours_mobile{
		background-color: rgba(255,255,255,.9);
		box-sizing: border-box;
		top: 0;
		width: 100%;
		height: 100%;
		text-align: left;
	}

	.map_open_hours_mobile h2 {
		padding-left: 15px;
		padding-top: 20px;
		margin-bottom: 10px;
		text-align: center;
	}

	.map_open_hours_mobile ul{
		padding:0 0;
	}

	.map_open_hours_mobile ul li{
		list-style: none;
		cursor: pointer;
		cursor: hand;
		border-bottom: 1px solid #f3f3f3;
	}

	.main_left_box #footerGoogleMapHoursContainer{
		width:960px;
	}

	.videoBtnSlider,
	.photoBtnSlider{
		border-radius: 50%;
		border:1px solid #999999;
		color: #999999;
		width:75px;
		height:75px;
		background-color:#ffffff;
		opacity: 0.5;
	}

	.videoBtnSlider:hover,
	.photoBtnSlider:hover{
		border-radius: 50%;
		border:1px solid #ffffff;
		width:75px;
		height:75px;
		background-color:#999999;
		opacity: 0.5;
	}

	.photoBtnSlider .fa,
	.videoBtnSlider .fa{
		color:#999999;
	}

	.photoBtnSlider:hover .fa,
	.videoBtnSlider:hover .fa{
		color:#ffffff;
	}

	.videos_pictures_buttons_container{
		left:5px;
		bottom:82px;
		position:relative;
		z-index:999;
		float:left;
		margin-bottom: -80px;
	}

	.-display-none{
		display:none;
	}


	#defaultTopBannerWrap{
		text-align: center;
		vertical-align: middle;
		padding:40px 15px;
	}
	#defaultTopBanner{
		text-align: center;
		width:100%;
		border-radius:6px;
		cursor: pointer;
	}
	#defaultTopBannerTitle,
	#defaultTopBannerText{
		font-weight: bold;
	}
	#defaultTopBannerWrap div.defaultTopBannerBtnWrapper{
		margin: 30px 0 20px 0;
		width: 100%;
		float: left;
	}
	#defaultTopBannerBtn{
		padding: 10px 30px;
		background: black;
		border: 2px white solid;
		border-radius: 3px;
		text-transform: uppercase;
		font-weight: bold;
		color:#ffffff;
		box-shadow:0px 2px 13px 0px #1b1b1b;
	}

	#topBannerImage.NEWCARS #defaultTopBannerTitle{
		font-size: 50px;
	}
	#topBannerImage.NEWCARS #defaultTopBannerText{
		font-size: 45px;
	}
	#topBannerImage.USEDCARS #defaultTopBannerTitle{
		font-size: 50px;
	}
	#topBannerImage.USEDCARS #defaultTopBannerText{
		font-size: 45px;
	}



	#google_reviews{
		font-size: 14px;
		color: #666;
	}

	#google_reviews .review-item .review-stars ul {
		display: inline-block;
		list-style: none;
		padding: 0;
	}

	#google_reviews .review-item .review-stars ul li {
		float: left;
		margin-right: 5px;
		width: initial !important;
		padding: initial;
	}

	#google_reviews .review-item .review-stars ul li i {
		color: #E4B248;
		font-style: normal;
		font-size: 15px;
	}
	#google_reviews .review-item .review-stars ul li i.inactive {
		color: #c6c6c6;
	}
	#google_reviews .review-item .review-star:after {
		content: "\2605";
	}
	#easy-gplaces-reviews-but{
		font-weight: bold;
		padding: 5px 8px;
		height: 27px;
		line-height: 27px;
	}

	.review-author{
		text-transform: capitalize;
	}

	#easy-gplaces-reviews-but.default{
		color: #444;
		background-color: #f5f5f5;
		background-image: -moz-linear-gradient(center top , #f5f5f5, #f1f1f1);
		border: 1px solid rgba(0, 0, 0, 0.1);
	}
	#easy-gplaces-reviews-but.red{
		color: #fff;
		background-color: #f5f5f5;
		background-image: -moz-linear-gradient(center top , #DD4B39, #D14836);
		border: 1px solid #D14836;
	}
	#easy-gplaces-reviews-but.blue{
		color: #fff;
		background-color: #4D90FE;
		background-image: -moz-linear-gradient(center top , #4D90FE, #4787ED);
		border: 1px solid #3079ED;
	}

	.embed-container-youtube { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container-youtube iframe, .embed-container-youtube object, .embed-container-youtube embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
	.embed-container-youtube2 { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container-youtube2 iframe, .embed-container-youtube2 object, .embed-container-youtube2 embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }


	#searchCriteriaW::after, #actionBoxBtn::after, #linkContainer::after{
		content: '';
		height: 1px;
		display: inline-block;
		margin-bottom: '0px';
	}

	#searchCriteriaW::after, #actionBoxBtn::after, #linkContainer::after{
		background: none;
		width: 280px;

	}

	.bannerPopupClose{
		color: #aaa;
	}

	.seeVideoBtn1{
		background-color:#000 !important;
		border:1px solid #fff !important;
		color:#fff !important;
	}
	.seeVideoBtn1:hover{
		background-color:#fff !important;
		border:1px solid #000 !important;
		color:#000000 !important;
	}


	#bottomLeftBannerImage{
		margin:10px 0px 0px;
		float:left;
		width:100%;
	}
	#defaultBottomLeftBanner{
		text-align:center;
		width:100%;
		border-radius:6px;
		cursor:pointer;
	}
	#defaultBottomLeftBannerWrap{
		text-align:center;
		vertical-align:middle;
		padding:15px;
	}
	#defaultBottomLeftBannerTitle{
		font-weight:bold;
		font-size:35px;
	}
	#defaultBottomLeftBannerText{
		font-weight:bold;
		font-size:31px;
	}
	#defaultBottomLeftBannerWrap div.defaultBottomLeftBannerBtnWrapper{
		margin: 20px 0 10px 0;
		width: 100%;
		float: left;
	}
	#defaultBottomLeftBannerBtn{
		padding:7px 21px;
		background:black;
		border:2px white solid;
		border-radius:3px;
		text-transform:uppercase;
		font-weight:bold;
		color:#ffffff;
		box-shadow:0px 2px 13px 0px #1b1b1b;
		font-size:70%;
	}

	.mainDiv-wrapper {
		background-color: #ffffff;
	}

	.languageBar #service_appoint_header > a {
		padding: 4px 12px;
		height: 18px;
		border-radius: 0;
	}

	#service_appoint_header > a {
		text-decoration: none;
		background-color: #b39b6d;
		background-color: ;
		color: white;
		color: #ffffff;
	}

	.languageBar #service_appoint_header > .btn-default:hover {
		border-color: #b39b6d;
		border-color: ;
	}

	#service_appoint_header .short-service-form {
		display: none;
		box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
		position: absolute;
		/*width: 350px;*/
		right: 0;
		padding: 15px;
		z-index: 9999;
		background-color: white;
		height: auto;
	}

	.languageBar #service_appoint_header div:not([class]) {
		float: initial;
		width: 100%;
		margin-right: 0;
		text-align: initial;
	}

	#service_appoint_header:hover .short-service-form {
		display: block;
	}

	#service_appoint_header .fa {
		margin-right: 10px;
	}

	#service_appoint_header {
		position: relative;
	}

	#service_appoint_header.isOpen .short-service-form {
		display: block;
	}

	.languageBar #service_appoint_header .mailwidget--form-row,
	.languageBar #service_appoint_header .mailwidget--form-row div {
		margin-right: inherit;
		width: 100% !important;
		float: none;
	}

	.languageBar #service_appoint_header .mailwidget--form-row table textarea {
		width: calc(100% + 2px) !important;
	}

	#used_404_message {
		text-align: center;
		padding: 30px;
		border:1px solid #f00;
		margin: 0 0 20px 0;
	}

	.audi-title h2 {
		font-weight: normal;
	}

	.audi-color {
		color: #bb0a30;
		font-weight: bold;
	}

	/* ********************** *
 *  SOCIAL NETWORK LINKS
 * ********************** */
	div#social_media_icons_div {
		font-size: inherit;
	}

	a.social-link {
		display: inline-block;
	}

	div#social_media_icons_div a:not(:last-child) {
		margin-right: 7px;
	}

	div.social-icons {
		display: inline-block;
		height: 28px;
		width: 28px;
		border-radius: 3px;
		box-sizing: border-box;
		background-color: transparent;
		color: #929292;
	}

	div.social-icons .fab {
		font-size: 28px;
		color: #b39b6d;
	}

	#social_media_icons_div .social-link[data-tooltip='Youtube'] .social-icons {
		margin-right: 3px;
	}

	.paypal_button_html table{
		margin-left:auto;
		margin-right:auto;
		background-color: black;
		color: white;
		width: 100%;
		padding: 0 0 10px 0;
		border-radius: 3px 3px 0 0;
		text-align: center;
	}

	.paypal_button_html table tr:first-child{
		font-size: 18px;
		height: 40px;
	}

	.paypal_button_html table select{
		border-radius:5px;
		width: 200px;
		height: 35px;
		background-color: white;
	}

	.paypal_button_html input[type="image"][name="submit"]{
		width: 100%;
		border: none;
		padding: 0;
	}

	@media only screen and (max-width: 400px) {
		.paypal_button_html{
			width: 90%;
			margin: 0 auto;
		}
	}

	#multi-address-submission {
		z-index: 999999;
	}

	#multi-address-submission.desktop {
		text-align: center;
	}

	#multi-address-submission.desktop select {
		max-width: 300px;
		margin: 0 auto;
	}

	#multi-address-submission.small {
		padding: 20px 10px;
	}

	#multi-address-submission label {
		display: block;
		margin-bottom: 5px;
		font-weight: bold;
	}

	#multi-address-submission #mutliAddressSubmit {
		margin: 0 auto;
		margin-top: 8px;
		display: table;
	}

	.validity-erroneous {
		border: 1px solid #dc3545;
		background-color:#fad6dc;
	}

	.box4.validity-erroneous,
	.box5.validity-erroneous {
		width: 263px;
	}


	.form-control {
		display: block;
		width: 100%;
		height: 34px;
		padding: 6px 12px;
		font-size: 14px;
		line-height: 1.42857143;
		color: #555;
		background-color: #fff;
		background-image: none;
		border: 1px solid #ccc;
		border-radius: 4px;
		-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
		box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
		-webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
		-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
		-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
		transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
		transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
		transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
	}


	.banner-form-box {
		padding: 30px;
		background-color: ;
		color: ;
	}

	.banner-form-title {
		font-weight: 600;
		font-size: 18pt;
		text-align: center;
		text-transform: uppercase;
		margin-bottom: 5px;
	}

	.banner-form-subtitle {
		font-size: 11.5pt;
		margin-bottom: 5px;
	}

	.banner-form-body {
		margin-bottom: 25px;
	}

	.banner-form-body .form-control {
		height: 41px;
		margin-bottom: 15px;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	.banner-form-box-footer {
		text-align: center;
		margin-top: 25px;
	}

	.banner-form-box-header {
		text-align: center;
		margin-bottom: 15px;
	}

	.btn.banner-btn {
		padding: 6px 24px;
		font-weight: bold;
		text-transform: uppercase;
		background-color: black;
		color: white;
		background-color: ;
		color: ;
	}

	.btn.banner-btn:hover {
		box-shadow: inset 0 0 100px 100px rgba(255, 255, 255, 0.1);
	}

	.btn {
		display: inline-block;
		padding: 6px 12px;
		margin-bottom: 0;
		font-size: 14px;
		font-weight: 400;
		line-height: 1.42857143;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
		-ms-touch-action: manipulation;
		touch-action: manipulation;
		cursor: pointer;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		border: 1px solid transparent;
		border-radius: 4px;
	}

	.lazyload{
		visibility: hidden;
	}

	.gbox {
		border-radius: 5px;
		box-shadow: 0 0 10px 1px rgba(0,0,0,0.2);
	}

	/** /css/menu5.css **/
	/***** car price *****/
	.price {
		display: none;
	}

	.menu-spec-price > .price {
		display: block;
		margin: initial;
		margin-top: 4px;
		width: initial;
		float: initial;

	}

	.menu-spec-price > .price > span {
		display: list-item;
		line-height: 15px;
	}

	/***************************************/
	img.home-icon {
		padding-top: 0 !important;
	}

	body > .wrapper > .up_menu > #nav > .isBold{
		font-weight: bold;
	}


	#nav > li#MainMenu_HOME > a.isImage > span{
		height: 33px;
		width: 31px;
		padding: 0;
		text-indent: -2000em;
		background-image: url('images/icon_home_tabColor.png');
		background-position: center 0px;
		background-repeat:  no-repeat;
		display: block;
	}
	#nav > li#MainMenu_HOME:hover > a.isImage > span{
		background-image: url('images/icon_home_hover.png');
	}


	ul.slim-submenu > li > a {
		padding: 6px 15px !important;
		font-size: 14px !important;
	}

	div.mainmenu-submenu > ul.sub > li.hasSub > a {
		border-bottom: 2px solid #b39b6d;
		padding-bottom: 15px;
		text-transform: uppercase;
		letter-spacing: 1px;
		font-weight: bold;
	}
	div.mainmenu-submenu > ul.sub > li.hasSub > a:after {
		content: "";
		display: none;
	}

	.up_menu ul#nav #MainMenu_NEW>ul.sub > li > div.mainmenu-submenu > ul.sub >li.hasSub:hover > a {
		background-color: white;
		color: #000000;
	}

	div.mainmenu-submenu {
		left: 140%;
		top: 0;
		position: absolute;
		display: block;
		visibility: hidden;
		opacity: 0;
		z-index: 1;
	}

	.up_menu  ul#nav li#MainMenu_NEW ul.sub > li:hover > .mainmenu-submenu, .up_menu  ul#nav li#MainMenu_USED ul.sub > li:hover > .mainmenu-submenu {
		display: block;
		visibility: visible;
		left: 100%;
		transition: all 0.2s, opacity 0.5s;
		opacity: 1;
	}

	div.mainmenu-submenu > ul.sub > li > ul.sub, div.mainmenu-submenu > ul.sub > li > ul.sub > li  {
		position: static;
		background-color: white;
	}

	div.mainmenu-submenu > ul.sub > li > ul.sub, div.mainmenu-submenu > ul.sub > li > ul.sub > li:hover  {
		background-color: #b39b6d;
	}

	div.mainmenu-submenu > ul.sub > li > ul.sub > li {
		border-bottom: 1px solid #e5e5e5;
		display: flex;
		flex-direction: row-reverse;
	}

	.menu-tech-specs {
		position: absolute;
		left: 94%;
		top: 0;
		-webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
		box-shadow: 0 6px 12px rgba(0,0,0,.175);
		display: none;
		padding: 14px;
		background: white;
		text-align: left;
		z-index: 10;
		color: #000000;
		min-width: 250px;
		display: none;
		visibility: hidden;
		opacity: 0;
	}

	.menu-tech-specs li.divider {
		height: 1px;
		margin: 9px 0;
		overflow: hidden;
		background-color: #e5e5e5;
	}

	.menu-tech-specs > .menu-specs-title {
		margin-bottom: 1em;
		font-size: initial;
		color: black;
	}

	ul.menu-specs-list li {
		font-size: 12px;
	}

	/* After 3rd li */
	ul.menu-specs-list > li:nth-child(n+3) {
		margin-bottom: 1em;
	}

	.menu-tech-specs > ul.menu-specs-list > li > a {
		padding: 3px 4px !important;
		font-weight: 400 !important;
		font-size: 12px !important;
		text-align: left !important;
	}

	.menu-specs-list > li {
		border-bottom: none;
	}

	.menu-specs-list li strong, .menu-specs-list li span {
		color: #000000;
	}

	ul.menu-specs-list > li > strong {
		font-weight: 700 !important;;
	}

	ul.menu-specs-list > li > span {
		line-height: 2;
	}

	.mainmenu-submenu > ul.sub > li > ul.sub > li:hover > .menu-tech-specs {
		display: block;
		visibility: visible;
		transition: 0.5s;
		opacity: 1;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li > ul.sub > li:hover > .menu-tech-specs {
		display: block;
		visibility: visible;
		transition: 0.5s;
		opacity: 1;
	}
	/**************************************************/

	body:not(.isFullWidthPage) .up_menu.menu5 {
		position: inherit;
	}

	body:not(.isFullWidthPage) #mainDiv::after {
		height: 0;
	}

	#mainDiv::after {
		/*content: " ";*/
		/*display: block;*/
		/*height: 49px;*/
	}

	body .wrapper .up_menu{
		height: 48px;
		width: 960px;
		position: relative;
		z-index: 1000;
		/*margin-top: 114px;*/
		white-space: nowrap;
	}
	body .wrapper .up_menu.hiddenheader{
		margin-top: 106px;
		padding-top: 3px;
	}
	body .wrapper .up_menu.hiddenheader.fixed,
	body .wrapper .up_menu.fixed {
		top: 0;
		position: fixed;
		margin-top: 0;
		opacity: 0.75;
	}
	body .wrapper .up_menu.fixed:hover{
		opacity: 1;
	}
	/* general style, overriden by sub items */
	body .wrapper .up_menu > div {
		width: 100%;
		background: rgb(51,51,51);
		height: 48px;
	}

	body .wrapper .up_menu #nav > li.nofx > a{
		transition: none;
	}
	body .wrapper .up_menu #nav > li{
		float: right;
	}

	body .wrapper .up_menu #nav > li a{
		font-size: 14px;
	}

	/* Meun specific styles */
	.sub {
		height: auto;
	}

	ul.sub {
		padding: 0;
	}

	.up_menu {
		float: left;
		margin: 0;
	}

	.up_menu ul {
		list-style: none;
		padding: 0;
		margin: 0;
		z-index: 1;
	}

	.up_menu ul.sub {
		-webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
		box-shadow: 0 6px 12px rgba(0,0,0,.175);
	}

	.up_menu ul#nav {
		margin: 0;
		padding: 0;
		background-color: rgb(51,51,51);
	}

	.up_menu ul#nav > li {
		float: left;
	}

	.up_menu ul#nav > li#MainMenu_NEW {
		position: relative;
	}

	.up_menu ul#nav li > a {
		display: block;
		color: #000000;
		text-align: left;
		padding: 15px;
		text-decoration: none;
	}

	.up_menu ul#nav li ul.sub {
		display: none;
	}

	.up_menu ul#nav > li > a {
		color: #ffffff;
		height: 18px;
	}

	.up_menu ul#nav li:hover > a, .up_menu ul#nav li.isOpen > a {
		color: #ffffff;
		background-color: #b39b6d;
	}

	.up_menu ul#nav > li:hover > ul.sub, .up_menu ul#nav > li.isOpen > ul.sub {
		display: block;
		position: absolute;
		background-color: white;
	}

	.up_menu ul#nav > li#MainMenu_NEW:hover > ul.sub {
		min-width: 100%;
	}

	.up_menu ul#nav li:hover > ul.sub > li > ul.sub {
		left: 140%;
		top: 0;
		position: absolute;
		display: block;
		visibility: hidden;
		opacity: 0;
	}

	#MainMenu_TAB_COMMERCIAL {
		position:relative;
	}

	#MainMenu_SUB_TAB_COMMERCIAL_COMMER a.imgLink img{
		max-height: 60px !important;
		height:60px;
		width:60px;
	}

	#MainMenu_SUB_TAB_COMMERCIAL_COMMER > ul.sub {
		left:100% !important;
	}

	.up_menu li#MainMenu_TAB_COMMERCIAL > ul.sub > li > ul.sub {
		max-height:640px;
		overflow-y:auto;
	}

	.up_menu ul#nav > li > ul.sub > li:not(.lastItem):not(.lastMenu):not(.hasItems) {
		border-bottom: 1px solid #e5e5e5;
	}

	.up_menu ul#nav > li > ul.sub > li > ul.sub > li > ul.sub > li:not(.lastItem) {
		border-bottom: 1px solid #e5e5e5;
	}

	li ul.sub a {
		background-color: white;
	}

	/* show first item and sub menus when hovering over new */
	.up_menu  ul#nav li#MainMenu_NEW ul.sub > li:hover ul.sub, .up_menu  ul#nav li#MainMenu_USED ul.sub > li:hover ul.sub,
	.up_menu  ul#nav li#MainMenu_TAB_COMMERCIAL ul.sub > li:hover ul.sub, .up_menu  ul#nav li#MainMenu_USED ul.sub > li:hover ul.sub{
		display: block;
		visibility: visible;
		left: 100%;
		transition: all 0.2s, opacity 0.5s;
		opacity: 1;
	}
	.up_menu li#MainMenu_NEW ul.sub > li.hover > a,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li.hover > a {
		color: #ffffff;
		background-color: #b39b6d;
	}
	.up_menu li#MainMenu_NEW ul.sub > li.hover li > ul.sub,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li.hover li > ul.sub {
		display: block;
	}
	.up_menu li#MainMenu_NEW ul.sub > li:hover > ul.sub > li > ul.sub:first-child,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li:hover > ul.sub > li > ul.sub:first-child {
		display: block;
	}
	/* second level submenu */
	#MainMenu_TAB_COMMERCIAL > .sub {
		min-width: 100%;
	}

	#MainMenu_NEW > ul.sub > li > ul.sub,
	.up_menu li#MainMenu_TAB_COMMERCIAL > ul.sub > li > ul.sub .item-wrap.imgLink {
		padding-bottom:10px;
	}

	#MainMenu_NEW > ul.sub > li > ul.sub,
	.up_menu li#MainMenu_TAB_COMMERCIAL > ul.sub > li > ul.sub {
		background: white;
		width: 420px;
		position: absolute;
	}


	.up_menu li#MainMenu_NEW > ul.sub > li > ul.sub > li,
	.up_menu li#MainMenu_TAB_COMMERCIAL > ul.sub > li > ul.sub > li {
		display: block;
	}

	.up_menu li#MainMenu_NEW > ul.sub > li > ul.sub > li:not(.lastItem),
	.up_menu li#MainMenu_TAB_COMMERCIAL > ul.sub > li > ul.sub > li:not(.lastItem) {
		border-bottom: 1px solid #e5e5e5;
	}

	.up_menu ul#nav #MainMenu_NEW>ul.sub li>ul.sub>li.hasSub:hover>a,
	.up_menu ul#nav #MainMenu_TAB_COMMERCIAL>ul.sub li>ul.sub>li.hasSub:hover>a {
		background-color: white;
		color: #000000;
	}
	.up_menu ul#nav #MainMenu_NEW>ul.sub li a.empty,
	.up_menu ul#nav #MainMenu_TAB_COMMERCIAL>ul.sub li a.empty {
		padding: 0;
		border-bottom: none;
	}
	/* third level submenu */
	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li > ul.sub,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > ul.sub > li > ul.sub {
		left: 0;
		top: inherit;
		position: static;
		-webkit-box-shadow: none;
		box-shadow: none;
	}
	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li:hover > ul.sub ,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > ul.sub > li:hover > ul.sub {
		display: block;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li > ul.sub > li,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > ul.sub > li > ul.sub > li {
		/*width: 380px;*/
		background-color: white;
	}
	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li > ul.sub > li:hover,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > ul.sub > li > ul.sub > li:hover {
		color: #ffffff;
		background-color: #b39b6d;
	}
	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li > ul.sub > li:hover > a,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > ul.sub > li > ul.sub > li:hover > a {
		color: #ffffff;
		background-color: #b39b6d;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li > ul.sub > li > a:not(.item-wrap),
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > ul.sub > li > ul.sub > li > a:not(.item-wrap) {
		padding: 0;
		line-height: 440%;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li > ul.sub > li > a:first-child,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > ul.sub > li > ul.sub > li > a:first-child {
		padding-right: 15px;
		width: 25%;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li > ul.sub > li > a:nth-of-type(2),
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > ul.sub > li > ul.sub > li > a:nth-of-type(2) {
		padding-left: 15px;
		width: 75%;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li > ul.sub > li > a.imgLink,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > ul.sub > li > ul.sub > li > a.imgLink {
		position: absolute;
		right: 0;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li > ul.sub > li > a.imgLink > img,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > ul.sub > li > ul.sub > li > a.imgLink > img {
		height: 61px;
		vertical-align: baseline;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li.hasSub > a,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > ul.sub > li.hasSub > a {
		border-bottom: 2px solid #b39b6d;
		padding-bottom: 15px;
		text-transform: uppercase;
		letter-spacing: 1px;
		font-weight: bold;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li.hasSub > a:after,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > ul.sub > li.hasSub > a:after {
		content: "";
		display: none;
	}
	/* CLASSES FOR JS */
	li.align-level {
		position: relative;
	}
	/****************************************/

	.up_menu li#MainMenu_NEW ul.sub > li > .mainmenu-submenu *, .up_menu li#MainMenu_NEW ul.sub > li > ul.sub * {
		box-sizing: border-box;
	}

	/* Second level a's */
	.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:not(.item-wrap) {
		/*display: inline-block;*/
		padding: 0;
		line-height: 440%;
		text-align: left;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:first-child {
		padding-right: 15px;
		width: 30%;
		/*margin-left: 100%;*/
	}

	.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:nth-of-type(2) {
		padding-left: 15px;
		width: 70%;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:first-child:after {
		content: " ";
		border: solid;
		border-width: 0 2px 2px 0;
		padding: 2px;
		border-radius: 2px;
		transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
		display: inline-block;
		top: -27px;
		right: -7px;
		position: relative;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li > ul.sub > li > a:first-child:after {
		content: " ";
		border: solid;
		border-width: 0 2px 2px 0;
		padding: 2px;
		border-radius: 2px;
		transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
		display: inline-block;
		top: -27px;
		right: -7px;
		position: relative;
	}


	.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a.imgLink {
		right: 0;
		float: right;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a.imgLink > img {
		height: 61px;
		vertical-align: baseline;
	}

	li.lastMenu ul.sub {
		right: 0;
	}

	/* vehicle img */
	.up_menu ul#nav li ul.sub li a:nth-of-type(1).item-wrap {
		padding: 0;
	}

	/* vehicles text */
	.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:nth-of-type(2).item-wrap {
		padding-top: 11px;
		padding-bottom: 10px;
		white-space: normal;
	}

	ul.sub li a.item-wrap {
		line-height: 40px;
	}


	.up_menu li#MainMenu_NEW ul.sub > li > .mainmenu-submenu *, .up_menu li#MainMenu_NEW ul.sub > li > ul.sub *,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > .mainmenu-submenu *, .up_menu li#MainMenu_NEW ul.sub > li > ul.sub * {
		box-sizing: border-box;
	}

	/* Second level a's */
	.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:not(.item-wrap),
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:not(.item-wrap) {
		/*display: inline-block;*/
		padding: 0;
		line-height: 440%;
		text-align: left;
	}

	/*.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:first-child,*/
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:first-child {
		padding-right: 15px;
		width: 30%;
		margin-left: 100%;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:nth-of-type(2),
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:nth-of-type(2) {
		padding-left: 15px;
		width: 70%;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:first-child:after,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:first-child:after {
		content: " ";
		border: solid;
		border-width: 0 2px 2px 0;
		padding: 2px;
		border-radius: 2px;
		transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
		display: inline-block;
		top: -27px;
		right: -7px;
		position: relative;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li > ul.sub > li > a:first-child:after,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > ul.sub > li > ul.sub > li > a:first-child:after {
		content: " ";
		border: solid;
		border-width: 0 2px 2px 0;
		padding: 2px;
		border-radius: 2px;
		transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
		display: inline-block;
		top: -27px;
		right: -7px;
		position: relative;
	}


	/*.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a.imgLink,*/
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a.imgLink {
		right: 0;
		float: right;
	}

	.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a.imgLink > img,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a.imgLink > img {
		height: 61px;
		vertical-align: baseline;
	}

	li.lastMenu ul.sub {
		right: 0;
	}

	/* vehicle img */
	.up_menu ul#nav li ul.sub li a:nth-of-type(1).item-wrap {
		padding: 0;
	}

	/* vehicles text */
	.up_menu li#MainMenu_NEW ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:nth-of-type(2).item-wrap,
	.up_menu li#MainMenu_TAB_COMMERCIAL ul.sub > li > div.mainmenu-submenu > ul.sub > li > ul.sub > li > a:nth-of-type(2).item-wrap {
		padding-top: 11px;
		padding-bottom: 10px;
	}

	/********************************** Arrows and Triangle icons ***************/
	/* down triangle */
	li.hasItems > a:after {
		content: " ";
		width: 0;
		height: 0;
		border-radius: 2px;
		vertical-align: middle;
		display: inline-block;
		border-left: 5px solid transparent;
		border-right: 5px solid transparent;
		border-top: 5px solid;
		margin-left: 7px;
	}

	li.hasSub > a:after {
		content: " ";
		border: solid;
		border-width: 0 2px 2px 0;
		display: inline-block;
		padding: 2px;
		border-radius: 2px;
		transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
		left: 100%;
		margin-left: 7px;
		position: sticky;
	}

	.up_menu.menu5 #MainMenu_USED li.hasItems > a:after {
		content: "";
		display: none;
	}

	.up_menu.menu5 #MainMenu_USED > ul.sub > li > ul.sub > li > a:before, .up_menu.menu5 #MainMenu_USED > ul.sub > li > ul.sub > li > ul.sub > li a:before {
		content: " ";
		border: solid;
		border-width: 0 2px 2px 0;
		display: inline-block;
		padding: 2px;
		border-radius: 2px;
		transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
		margin-right: 7px;
		position: relative;
		top: -1px;
	}

	i.triangle {
		width: 0;
		height: 0;
		border-radius: 2px;
		vertical-align: middle;
		display: inline-block;
	}

	i.triangle.triangle-up {
		border-left: 5px solid transparent;
		border-right: 5px solid transparent;

		border-bottom: 5px solid;
	}

	i.triangle.triangle-down {
		border-left: 5px solid transparent;
		border-right: 5px solid transparent;

		border-top: 5px solid;
	}

	i.triangle.triangle-right {
		border-top: 5px solid transparent;
		border-bottom: 5px solid transparent;

		border-left: 5px solid;
	}

	i.triangle.triangle-left {
		border-top: 5px solid transparent;
		border-bottom: 5px solid transparent;

		border-right: 5px solid;
	}

	/* USED */
	li#MainMenu_USED_SEARCHES ul li {
		border-bottom: 1px solid white;
	}

	.up_menu.menu5 #MainMenu_USED > ul.sub{
		width: 100%;
		left: 0;
	}
	.up_menu.menu5 #MainMenu_USED > ul.sub > li {
		float: left;
		width: 25%;
		box-sizing: border-box;
		padding: 5px;
	}
	.up_menu.menu5 #MainMenu_USED > ul.sub > li.inventory {
		float: left;
		width: 75%;
		box-sizing: border-box;
	}
	.up_menu.menu5 #MainMenu_USED > ul.sub > li > a {
		border-bottom: 2px solid #333333;
		text-transform: uppercase;
		display:block;
	}
	.up_menu.menu5 #MainMenu_USED > ul.sub > li:hover > a {
		background-color: white;
		color: #000000;
	}
	.up_menu.menu5 #MainMenu_USED > ul.sub > li.inventory > ul > li {
		width: 33%;
		float: left;
	}
	.up_menu ul#nav li#MainMenu_USED:hover ul.sub li ul.sub {
		display: block;
		visibility: visible;
		left: 0;
		position: relative;
		opacity: 1;
		box-shadow: none;
	}

	/* CONTACT US */
	.menu-address-desc {
		border-bottom: 1px solid #e5e5e5;
		font-size: 14px;
	}

	.up_menu.menu5 #MainMenu_CONTACT ul.sub > .contact-container #menu-map-link {
		padding: 0;
	}

	.up_menu ul#nav > li#MainMenu_CONTACT > ul.sub > li.contact-container {
		border-bottom: none;
	}

	.up_menu.menu5 #MainMenu_CONTACT ul.sub.contactus-form {
		width: 100%;
		padding: 15px;
		box-sizing: border-box;
		left: 0;
	}

	.up_menu.menu5 #MainMenu_CONTACT ul.sub.contactus-form.contact-short {
		width: 619px;
		left: auto;
		padding-left: 0;
		padding-right: 0;
		right: 0;
	}

	.up_menu.menu5 #MainMenu_CONTACT ul.sub > .contact-container > [class^=col-] {
		float: left;
	}

	.up_menu.menu5 #MainMenu_CONTACT ul.sub > .contact-container > .col-half {
		width: 50%;
	}

	.up_menu.menu5 #MainMenu_CONTACT ul.sub > .contact-container > .col-quarter {
		width: 25%;
	}

	.up_menu.menu5 #MainMenu_CONTACT ul.sub > .contact-container > .col-third {
		width: 33.3333%;
	}

	.up_menu.menu5 #MainMenu_CONTACT ul.sub.contact-short > .contact-container > .col-half.address {
		padding-right: 15px;
		box-sizing: border-box;
	}


	.menu-address-desc {
		padding-bottom: 20px;
		border-bottom: 1px solid #e5e5e5;
		font-size: 14px;
		line-height: 19px;
		white-space: normal;
	}

	.menu-phones {
		border-top: 2px solid #333333;
		margin-top: 8px;
	}

	.phone-wrapper span.first {
		float: left;
		text-align: left;
	}

	.phone-wrapper span.first .fa-phone {
		margin-right: 8px;
	}

	.phone-wrapper span.second {
		float: right;
		text-align: right;
	}

	.phone-wrapper {
		padding-bottom: 5px;
	}

	.menu-phones .phone-wrapper {
		margin-top: 8px;
	}

	.menu-address-desc .menu-address-wrapper {
		display: inline-block;
		max-width: 266px;
		color: #000000;
	}

	.menu-address-desc > .fa-map-marker {
		vertical-align: top;
		margin-right: 8px;
	}

	.contact-container .title {
		border-bottom: 2px solid #333333;
		text-transform: uppercase;
		display: block;
		font-weight: bold;
		padding: 6px 15px 6px 0;
		margin-bottom: 8px;
	}

	.contact-container .Recherche22 {
		border-bottom: 2px solid #333333;
		text-transform: uppercase;
		display: block;
		padding: 6px 15px 6px 0;
		font-size: 13.28px;
		font-weight: bold;
		height: inherit;
		margin-bottom: 8px;
	}

	.contact-container #quickEmailForm {
		margin: 0 auto;
		width: 100%;
	}

	.contact-container .address > ul > li > a:before {
		content: " ";
		border: solid;
		border-width: 0 2px 2px 0;
		display: inline-block;
		padding: 2px;
		border-radius: 2px;
		transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
		margin-right: 7px;
		position: relative;
		top: -1px;
	}

	.contact-container .button_boxS2 {
		float: none;
		width: 255px;
		padding-right: 0;
		margin: auto;
		text-align: right;
	}

	/* contact form select */
	.up_menu ul#nav li .contact-container .jqTransformSelectWrapper > ul > li > a {
		padding: 8px;
	}

	/* service form */
	.up_menu ul#nav li .contact-container .jqTransformSelectWrapper > ul > li > a {
		padding: 8px;
	}

	/* service form */
	.up_menu.menu5 #MainMenu_SERVICE ul.sub.service-form {
		width: 60%;
		/*padding: 15px 20px;*/
		/*box-sizing: border-box;*/
		left: auto;
		right: 0;
		padding-left: 15px;
		padding-right: 15px;
	}

	.menu-service-wrapper, .menu-service-wrapper * {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	.menu-service-wrapper, .menu-service-wrapper .jqTransformInputWrapper, .menu-service-wrapper, .menu-service-wrapper .jqTransformSelectWrapper{
		-webkit-box-sizing: content-box;
		-moz-box-sizing: content-box;
		box-sizing: content-box;
	}

	.menu-service-wrapper {
		margin-left: -15px;
		margin-right: -15px;
	}

	.menu-service-wrapper::before, .menu-service-wrapper::after {
		display: table;
		content: " ";
	}
	.menu-service-wrapper::after {
		clear: both;
	}

	.menu-service-wrapper .service-left, .menu-service-wrapper .service-right {
		float: left;
		padding: 15px;
		position: relative;
	}

	.menu-service-wrapper .service-divider {
		float: left;
		width: 0.1%;
		height: 402px;
		border-left: 1px solid #e5e5e5;
		margin-top: 15px;
	}

	.menu-service-wrapper .service-right {
		width: 39.8%;
	}

	.up_menu ul#nav > li#MainMenu_SERVICE > ul > li > .menu-service-wrapper > .service-right ul li {
		border-bottom: 1px solid #e5e5e5;
	}

	.menu-service-wrapper .service-left {
		width: 60%;
	}

	.short-service-form input {
		display: block;
	}

	.menu-service-wrapper ul, .menu-service-wrapper form {
		/*display: inline-block;*/
	}

	.service-form-title {
		border-bottom: 2px solid #333333;
		text-transform: uppercase;
		display: block;
		font-weight: bold;
		padding: 6px 15px 6px 0;
		margin-bottom: 8px;
	}

	.ssf-submit {
		margin-top: 10px;
		text-align: center;
	}

	.ssf-submit .jqTransformButton span span {
		-webkit-box-sizing: content-box;
		-moz-box-sizing: content-box;
		box-sizing: content-box;
	}

	.up_menu ul#nav li.menu-active ul.sub {
		display: block;
		position: absolute;
		background-color: white;
	}

	.up_menu ul#nav li.menu-active > a {
		color: #ffffff;
		background-color: #b39b6d;
	}

	form.short-service-form.jqtransformdone .jqTransformInputWrapper, form.short-service-form.jqtransformdone .jqTransformSelectWrapper {
		margin-bottom: 10px;
	}

	.ssf-date-calendar {
		position: absolute;
		z-index: 1;
		top: 0.5rem;
		right: 1.3rem;
		color: #aaa;
		width: 0;
	}

	/* Sets menu width to our responsive class */
	body.isPageFullWidthEnabled.isFullWidthPage .wrapper.MainBoxLayer .up_menu.menu5 {
		width: inherit;
	}

	.MainBoxLayer .languageBar {
		width: inherit;
	}

	#mainDiv.wrapper.MainBoxLayer .top_bg {
		width: inherit;
	}

	.express-form table {
		margin: 0 auto;
	}

	.express-form .widget_express_mail_phone_title {
		display: none;
	}

	img#menu-contact-map {
		width: 100%;
	}

	.contact-container .Recherche22 {
		color: #000000;
	}

	#fullWidthMenuBar {
		top: 50%;
		transform: translateY(-50%);
	}

	/* Added borders to menu when tabs are white */
	.up_menu.with-border.menu5 #fullWidthMenuBar {
		border-top: 2px solid ;
		border-bottom: 2px solid ;
	}

	/* reduces the size of the used submenu - when top models are not shown */
	.up_menu.menu5 #MainMenu_USED.simplified ul.sub {
		width: inherit;
		left: inherit;
	}

	.up_menu.menu5 #MainMenu_USED.simplified ul.sub #MainMenu_USED_SEARCHES {
		width: 100%;
	}

	/*Classes for credsii in finance menu*/
	.finance-menu-credsii{
		min-width: 375px;
	}

	.up_menu ul#nav > li#MainMenu_FINANCE > ul > li > .menu-finance-wrapper > ul li {
		border-bottom: 1px solid #e5e5e5;
	}

	/* For last item - move its sub > sub menu block to the left side so it doesnt go outside the page*/
	.up_menu.menu5 ul#nav > li.lastMenu > ul.sub > li > ul > li > div {
		right: 100%;
		left: initial;
	}

	.up_menu ul#nav li.inverse-color > a {
		color: #ffffff;
		background-color: #b39b6d;
	}
</style>
<style type="text/css">

	.ctabox--cell__11 {
		color: #ffffff;
		background: #b39b6d;
	}

	.ctabox--cell__11 .ctabox--button a {
		color: #ffffff;
		background: #b39b6d;
		border-color: #ffffff;
	}

	.ctabox--cell__11:hover {
		color: #b39b6d;
		background: #ffffff;
	}

	.ctabox--cell__11:hover .ctabox--button a {
		color: #b39b6d;
		background: #ffffff;
		border-color: #b39b6d;
	}
	.ctabox--cell__12 {
		color: #ffffff;
		background: #b39b6d;
	}

	.ctabox--cell__12 .ctabox--button a {
		color: #ffffff;
		background: #b39b6d;
		border-color: #ffffff;
	}

	.ctabox--cell__12:hover {
		color: #b39b6d;
		background: #ffffff;
	}

	.ctabox--cell__12:hover .ctabox--button a {
		color: #b39b6d;
		background: #ffffff;
		border-color: #b39b6d;
	}
	.ctabox--cell__13 {
		color: #ffffff;
		background: #b39b6d;
	}

	.ctabox--cell__13 .ctabox--button a {
		color: #ffffff;
		background: #b39b6d;
		border-color: #ffffff;
	}

	.ctabox--cell__13:hover {
		color: #b39b6d;
		background: #ffffff;
	}

	.ctabox--cell__13:hover .ctabox--button a {
		color: #b39b6d;
		background: #ffffff;
		border-color: #b39b6d;
	}

	.hideOnPreLoad{visibility:hidden}
	.reveal-modal {visibility: hidden;}</style>

<link rel="Stylesheet" href="<?= base_url() ?>assets/js/font-awesome.css"></link>
<script type="text/javascript" async="true" src="<?= base_url() ?>assets/js/home.js"></script>
