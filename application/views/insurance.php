<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<html lang='en'>

<head>
	<title>Insurance - Sean Auto Sales</title>
	<script type="application/ld+json">
		{
			"@context": "https://schema.org/",
			"@type": "AutomotiveBusiness",
			"url": "https://www.eleganceleasing.com",
			"name": "Elegance Leasing",
			"image": "https://www.eleganceleasing.com/images/Logo/logo-fr-ca.png",
			"logo": "https://www.eleganceleasing.com/images/Logo/logo-fr-ca.png",
			"sameAs": [
				"https://www.facebook.com/GroupElegance/",
				"https://twitter.com/eleganceleasing"
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
			"telephone": "514-482-4500",
			"priceRange": "7495$ - 338000$",
			"openingHoursSpecification": [
				[
					{
						"@type": "OpeningHoursSpecification",
						"dayOfWeek": "http:\/\/schema.org\/Monday",
						"opens": "09:00",
						"closes": "21:00"
					},
					{
						"@type": "OpeningHoursSpecification",
						"dayOfWeek": "http:\/\/schema.org\/Tuesday",
						"opens": "09:00",
						"closes": "21:00"
					},
					{
						"@type": "OpeningHoursSpecification",
						"dayOfWeek": "http:\/\/schema.org\/Wednesday",
						"opens": "09:00",
						"closes": "21:00"
					},
					{
						"@type": "OpeningHoursSpecification",
						"dayOfWeek": "http:\/\/schema.org\/Thursday",
						"opens": "09:00",
						"closes": "21:00"
					},
					{
						"@type": "OpeningHoursSpecification",
						"dayOfWeek": "http:\/\/schema.org\/Friday",
						"opens": "09:00",
						"closes": "21:00"
					}
				]
			]
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
		(function () {
			var lastWidth = 0;
			var firstRun = 1;
			var timeout = false;
			try {

				function hideme(el) {
					if (typeof el.classList === 'undefined') return;// console.log( el, el.classList );
					el.classList.add('hideme');
				}

				function showme(el) {
					if (typeof el.classList === 'undefined') return;// console.log( el, el.classList );
					el.classList.remove('hideme');
				}

				var responsiveSite = function (event) {
					var width = document.body.offsetWidth ? document.body.offsetWidth : window.outerWidth;
					var height = document.body.offsetHeight ? document.body.offsetHeight : window.outerHeight;
					var version = (document.body.offsetWidth < 960) ? 'mobile' : 'desktop';
					var els = document.querySelectorAll('body > *');
					var iframe = document.getElementById('mobileSite');

					// console.log( 'version', version );
					for (i in els) {
						switch (version) {
							case 'mobile':
								if (els[i] === iframe) showme(els[i]);
								else hideme(els[i]);

								if (iframe) {
									if (iframe.src == 'about:blank') {
										iframe.setAttribute('src', iframe.dataset['src']);
									}

									iframe.setAttribute('style', [
										'top: ' + 0,
										'display: block',
										'height: ' + (height ? ((height * 1) + 'px') : '100%'),
										'width: ' + (width ? ((width * 1) + 'px') : '100%'),
										'left: ' + 0,
										'position: absolute',
										''
									].join(';'));
								}
								break;
							case 'desktop':
								if (els[i] === iframe) hideme(els[i]);
								else showme(els[i]);

								if (iframe) {
									iframe.setAttribute('style', [
										'display: none',
										''
									].join(';'));
								}
								break;
						}
					}

					if (version == 'desktop') {
						if (lastWidth == width) return;
						setTimeout(function () {
							if (typeof jQuery !== 'undefined') jQuery(window).trigger('resize');
						}, 500);
					}
					lastWidth = width;
				}

				window.addEventListener("resize", function () {
					clearTimeout(timeout);
					timeout = setTimeout(responsiveSite, 200)
				});

				window.addEventListener("DOMContentLoaded", function () {

					var s = document.createElement('style');
					s.setAttribute('type', 'text/css');
					s.innerHTML = '.hideme { display: none !important; } #mobileSite { display: none; }';
					document.body.appendChild(s);

					var i = document.createElement('iframe');
					var tgt = 'https://m.eleganceleasing.com/insurance.html?nfr=1'.replace(/%2F/ig, 'index.html')
					tgt += ((tgt.indexOf('?') === -1) ? '?' : '&') + 'nfr=1';
					i.setAttribute('data-src', tgt);
					i.setAttribute('src', 'about:blank');
					i.setAttribute('id', 'mobileSite');
					document.body.appendChild(i);

					responsiveSite();
				});
				setTimeout(responsiveSite, 1000);
			} catch (e) {
				console.log(e);
			}

		})();
	</script>
	<script type='text/javascript' data-compiler="inline">
		/*<![CDATA[*/
		(function () {
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
				query += '&top=' + ((new Date()).getTime() - startTime.getTime()); //time on page milliseconds
				query += '&mouseOver=' + encodeURIComponent(getCurrentMouseOverElement());

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
				hover = hover[hover.length - 1].cloneNode();
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

			window.onerror = function (msg, file, line, col, error) {
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
				var _timer = setInterval(function () {
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
				for (var i = 0; i < errorCollections.length; i++) {
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
				syntax: function () {
					var script = _createScript('}');
					document.body.append(script);
				},
				ofNull: function () {
					var text = 'var a = null; var b = a.what;';
					var script = _createScript(text);
					document.body.append(script);
				},
				invalidAssignment: function () {
					var script = _createScript('1 = func();');
					document.body.append(script);
				}
			};

			window.trackConversion = function () {
				if (typeof gtag == 'undefined') return -1;
				if (!window.d2c_awcId || !window.d2c_awcLabel) return -3;
				if (deploymentType.toLowerCase() == 'live') {
					gtag('event', 'conversion', {'send_to': d2c_awcId + '/' + d2c_awcLabel});
				} else {
					console.log("gtag('event','conversion', { 'send_to': " + d2c_awcId + '/' + d2c_awcLabel + " });");
				}
			}

		})();
		/*]]>*/
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105238240-286"></script>
	<script type='text/javascript' data-compiler="inline">
		/*<![CDATA[*/
		var _gaq = _gaq || [];
		var d2c_gaAccounts = {
			"a": "UA-158727174-1",
			"b": "UA-105238240-286",
			"c": "UA-109420804-1",
			"all": ["UA-158727174-1", "UA-105238240-286", "UA-109420804-1"],
			"internal": ["UA-105238240-286", "UA-109420804-1"]
		};
		var d2c_awcId = 'AW-';
		var d2c_awcLabel = '';
		var legacy_ga = false;

		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());
		if (!legacy_ga) {
			(d2c_gaAccounts.all || []).map(function (id) {
				gtag('config', id);
			});
		}

		//GA4 analytics ID
		gtag('config', 'G-Z5Q8Z5C7KF');

		if (d2c_awcId) {
			gtag('config', d2c_awcId);
		}
		/*LINKER FOR MOTOINSIGHT SHOP DOMAIN*/
		(d2c_gaAccounts.all || []).map(function (id) {
			gtag('config', id, {
				'linker': {
					'domains': ['']
				}
			});
		});
		gtag('config', {cookie_domain: 'www.eleganceleasing.com'});

		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

		ga('create', {
			trackingId: 'UA-158727174-1',
			cookieDomain: 'auto',
			name: 't0',
			legacyCookieDomain: 'www.eleganceleasing.com',
			useAmpClientId: true,
			allowLinker: true
		});
		ga('t0.send', 'pageview');

		ga('create', {
			trackingId: 'UA-105238240-286',
			cookieDomain: 'auto',
			name: 'b',
			legacyCookieDomain: 'www.eleganceleasing.com',
			useAmpClientId: true,
			allowLinker: true
		});
		ga('b.send', 'pageview');

		ga('create', {
			trackingId: 'UA-109420804-1',
			cookieDomain: 'auto',
			name: 'c',
			legacyCookieDomain: 'www.eleganceleasing.com',
			useAmpClientId: true,
			allowLinker: true
		});
		ga('c.send', 'pageview');


		/*]]>*/
	</script>
	<script type='text/javascript' data-moveto='body' data-compiler="inline">
		/*<![CDATA[*/


		var page = "OTHER";
		var fbChatRef = {}
		var deploymentType = 'live';

		var currentSiteID = 907;
		//var gaType = (currentSiteID == 4 ? 'universal' : 'legacy');
		var gaType = 'universal';


		var allCampaigns = [["eleganceleasing.com", "SEM", "Agency", "8395"], ["eleganceleasing.com", "Trader", "Retargeting", "8402"], ["eleganceleasing.com", "Bing", "Bing", "8409"]]
		var retargetingCampaigns = []
		var AICurrentConfigID = 0;

		var AIIDPerNewCarsFrench = new Array();

		var AIIDPerNewCarsEnglish = new Array();


		/* Functions */
		function parseQuery(str) {
			if (str.length < 1) return {}
			var vars = {}, v;
			var qs = str.split('&');
			for (var i = 0; i < qs.length; i++) {
				v = explode(qs[i], '=', 1);
				vars[v[0]] = v[1];
			}
			return vars;
		}

		function decodeString(string, times) {
			if (times == "" || times == "undefined") {
				times = 1;
			}
			for (i = 0; i < times; i++) {
				string = decodeURIComponent(string);
			}
			return string;
		}

		function decodeHTML(encoded) {
			if (typeof encoded !== 'string') return encoded;
			var el = document.createElement('textarea');
			el.innerHTML = encoded;
			return el.value;
		}

		function explode(str, separator, limit) {
			str = str.split(separator);
			if (str.length <= limit) return str;
			var ret = str.splice(0, limit);
			ret.push(str.join(separator));
			return ret;
		}

		function getUrlVars() {
			var qs = (window.location.search).substring(1);
			return parseQuery(qs);
		}

		function getCookie(c_name) {
			var c_value = document.cookie;
			var c_start = c_value.indexOf(" " + c_name + "=");
			if (c_start == -1) {
				c_start = c_value.indexOf(c_name + "=");
			}
			if (c_start == -1) {
				c_value = null;
			} else {
				c_start = c_value.indexOf("=", c_start) + 1;
				var c_end = c_value.indexOf(";", c_start);
				if (c_end == -1) {
					c_end = c_value.length;
				}
				c_value = unescape(c_value.substring(c_start, c_end));
			}
			return c_value;
		}

		function setCookie(c_name, value, exdays) {
			var exdate = new Date();
			exdate.setDate(exdate.getDate() + exdays);
			var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString()) + "; path=/";
			document.cookie = c_name + "=" + c_value;
		}

		function gaPageView(pagePath) {
			accounts = d2c_gaAccounts.all;

			(accounts || []).map(function (id) {
				if (deploymentType != 'live') {
					console.log('gtag', 'config', id, {
						page_path: pagePath
					})
					return;
				}

				gtag('config', id, {
					page_path: pagePath
				});
			});
		}

		function getGaClientId() {

			var gaClientId = '';
			if (gaType == 'universal') {
				gaClientId = ga.getAll()[0].get('clientId');
			} else {
				gaClientId = _gat._getTrackerByName()._visitCode();
			}

			return gaClientId;
		}

		function gaTrack(acct, category, action, label, value) {

			var acct = acct ? acct : '';
			var category = category ? category : '';
			var action = action ? action : '';
			var label = label ? label : '';
			var value = value ? value : 1;

			if (acct.indexOf('_trackEvent') != -1) {

				if (gaType === 'legacy') {
					_gaq = window._gaq || [];
					var a = [];
					for (i = 0; i < arguments.length; i++) {
						a.push(arguments[i]);
					}
					return _gaq.push(a);
				}

				//Google deafult account name
				var accName = 't0';

				if (acct.indexOf('.') > -1) {
					accName = acct.slice(0, acct.indexOf('.'));
				}

				return ga(accName + '.send', {
					hitType: 'event',
					eventCategory: category,
					eventAction: action,
					eventLabel: label,
					eventValue: value
				});
			}

			var accounts = [];
			accounts = d2c_gaAccounts.all;
			if (acct) {
				accounts = (acct == 'internal' ? d2c_gaAccounts.internal : [d2c_gaAccounts[acct]]);
			}

			/**
			 Reference: https://developers.google.com/analytics/devguides/collection/gtagjs/events
			 **/
			(accounts || []).map(function (id) {
				if (deploymentType != 'live') {
					console.log('gtag', 'event', action, {
						sendto: id,
						event_action: action,
						event_category: category,
						event_label: label,
						value: value
					})
					return;
				}

				gtag('event', action, {
					sendto: id,
					event_action: action,
					event_category: category,
					event_label: label,
					value: value
				});
			});
		}

		function onConfirmSubmit(event) {
			//do nothing
			return true;
		}

		function setSessionCookie(c_name, value) {
			var exdays = null;
			var c_value = escape(value) + ";expires=0;path=/";
			document.cookie = c_name + "=" + c_value;
		}

		/* LiveChat Custom Params */
		function initLCI(params, n) {
			if (n > 20) return n;
			var n = (n) ? n : 0;
			if (typeof LC_API == 'undefined' || typeof LC_Invite == 'undefined') {
				setTimeout(function () {
					initLCI(params, ++n);
				}, 500);
				return;
			}
			if (typeof LC_API != 'undefined' && typeof LC_Invite != 'undefined' && params) {
				return LC_API.set_custom_variables(params);
			}
		}

		function getReferrerVarFunction(referer) {
			return function () {
				if ('' == referer) referer = document.referrer;
				var qs, qsindex = referer.indexOf('?') + 1;
				if (qsindex > 0) {
					var qs = referer.slice(qsindex);
					return parseQuery(qs);
				}
				return {}
			}
		}

		var getRefererVars = getReferrerVarFunction('index.html');
		var utm_landing_cookie = (getCookie('utm_landing') != null && typeof getCookie('utm_landing') != 'undefined' ? getCookie('utm_landing') : '');
		if (utm_landing_cookie.length == 0) {
			setSessionCookie('utm_landing', window.location.pathname);
		}


		if (deploymentType == 'live') {
			//if (deploymentType) {

			var generateGUID = function () {
				var S4 = function () {
					return Math.floor(
						Math.random() * 0x10000 /* 65536 */
					).toString(16);
				};

				return (
					S4() + S4() + "-" +
					S4() + "-" +
					S4() + "-" +
					S4() + "-" +
					S4() + S4() + S4()
				);
			}

			var urlVars = getUrlVars();

			var refererVars = getRefererVars();
			var referer = 'index.html';
			var rawReferrer = referer;
			referer = (referer.length < 1 ? 0 : referer);
			if ('' == rawReferrer) rawReferrer = document.referrer;

			var itemType = 'car';
			itemType = (itemType.length < 1 ? 0 : itemType);
			if (isNaN(referer)) {
				referer = referer.replace(/\//g, "|");
				referer = referer.replace(/\?/g, "__");
			}

			var make = '';
			if (make.length == 0) make = "0";
			var model = '';
			if (model.length == 0) model = "0";
			var year = '0';
			if (year.length == 0) year = "0";
			var ismobile = '';
			if (ismobile.length == 0) ismobile = "0";


			var origSource = "";
			var origCampaign = "";
			var origKeyword = "";

			if (urlVars["relanceID"] != undefined)
				setCookie('relanceID', urlVars["relanceID"], 180);

			var source = (getCookie('utm_source') != null && typeof getCookie('utm_source') != 'undefined' ? getCookie('utm_source') : '');
			var sourceCookie = source;
			var sourceURL = "";
			if ("utm_source" in urlVars) {
				if (source.length == 0) source = urlVars['utm_source'];
				sourceURL = urlVars['utm_source'];
			}

			var campaign = (getCookie('utm_campaign') != null && typeof getCookie('utm_campaign') != 'undefined' ? getCookie('utm_campaign') : '');

			//TEMP RULE TO REMOVE ALREADY EXISTING DELETED CAMPAIGN
			if (campaign.toLowerCase() == 'ecole-etudiant') {
				campaign = '';
				setCookie('utm_campaign', "", 1);
			}

			var campaignCookie = campaign;
			var campaignURL = "";
			if ("utm_campaign" in urlVars) {
				if (campaign.length == 0) campaign = urlVars['utm_campaign'];
				campaignURL = urlVars['utm_campaign'];
			}

			var medium = (getCookie('utm_medium') != null && typeof getCookie('utm_medium') != 'undefined' ? getCookie('utm_medium') : '');
			var mediumCookie = medium;
			var mediumURL = "";
			if ("utm_medium" in urlVars) {
				if (medium.length == 0) medium = urlVars['utm_medium'];
				mediumURL = urlVars['utm_medium'];
			}

			// If source and campaign in cookie is not in campaigns, but the one in URL is, replace it
			var cookieInCampaigns = false;
			var urlInCampaigns = false;
			var hasGoogleOrganic = false;
			for (var i = 0; i < allCampaigns.length; i++) {
				if (allCampaigns[i][1].toLowerCase() == sourceURL.toLowerCase() && allCampaigns[i][2].toLowerCase() == campaignURL.toLowerCase()) urlInCampaigns = true;
				if (allCampaigns[i][1].toLowerCase() == sourceCookie.toLowerCase() && allCampaigns[i][2].toLowerCase() == campaignCookie.toLowerCase()) cookieInCampaigns = true;
				if (allCampaigns[i][1].toLowerCase() == 'google' && allCampaigns[i][2].toLowerCase() == 'organique') hasGoogleOrganic = true;
			}

			if (sourceURL == "" && campaignURL == "" && source == "" && campaign == "" && hasGoogleOrganic) {
				sourceURL = "Google.html";
				campaignURL = "Organique.html";
				urlInCampaigns = true;
			}

			if (cookieInCampaigns == false && urlInCampaigns == true) {
				source = sourceURL;
				campaign = campaignURL;
				sourceCookie = sourceURL;
				campaignCookie = campaignURL;
			}

			//if current utm_source cookie is 'SEM' and current utm_source is 'Google' and current utm_campaign is one of our campaign,
			//replace current utm_source and utm_campaign cookie
			//Asked by Gino
			if (sourceCookie.toLowerCase() == 'sem' && sourceURL.toLowerCase() == 'google' && urlInCampaigns) {
				source = sourceURL;
				campaign = campaignURL;
			}

			//Temp rule for kiaValbelair siteID 592
			//Asked by Gino
			var currentSiteID = 907;
			if ((currentSiteID == 592 || currentSiteID == 437 || currentSiteID == 579 || currentSiteID == 585) && sourceCookie.toLowerCase() == 'sem') {
				sourceCookie = 'Google';
				source = 'Google';
				campaignCookie = 'Neuf';
				campaign = 'Neuf';
			}

			if (campaignCookie.toLowerCase() == 'organic' || campaignCookie.toLowerCase() == 'organique') {
				sourceCookie = '';
				campaignCookie = '';
				mediumCookie = '';
			}

			if (source.length > 0 && (sourceCookie.length == 0 || sourceCookie == source)) setCookie('utm_source', source, 180);
			if (campaign.length > 0 && (campaignCookie.length == 0 || campaignCookie == campaign)) setCookie('utm_campaign', campaign, 180);
			if (medium.length > 0 && (mediumCookie.length == 0 || mediumCookie == medium)) setCookie('utm_medium', medium, 180);

			var keyword = (getCookie('utm_keyword') != null && typeof getCookie('utm_keyword') != 'undefined' ? getCookie('utm_keyword') : '');
			if ("kw" in urlVars) {
				keyword = decodeString(urlVars['kw'], 3);
			}
			if (keyword.length > 0) setCookie('utm_keyword', keyword, 180);


			var isRetargeting = false;
			for (var i = 0; i < retargetingCampaigns.length; i++) {
				if (retargetingCampaigns[i][1].toLowerCase() == sourceURL.toLowerCase() && retargetingCampaigns[i][2].toLowerCase() == campaignURL.toLowerCase()) isRetargeting = true;
			}
			if (isRetargeting) {
				var sourceRetargeting = (getCookie('utm_source_retargeting') != null && typeof getCookie('utm_source_retargeting') != 'undefined' ? getCookie('utm_source_retargeting') : '');
				var campaignRetargeting = (getCookie('utm_campaign_retargeting') != null && typeof getCookie('utm_campaign_retargeting') != 'undefined' ? getCookie('utm_campaign_retargeting') : '');

				if (source != sourceURL || campaign != campaignURL) {
					if (sourceURL.length > 0 && sourceRetargeting.length == 0) setCookie('utm_source_retargeting', sourceURL, 180);
					if (campaignURL.length > 0 && campaignRetargeting.length == 0) setCookie('utm_campaign_retargeting', campaignURL, 180);
				}

				// JIRA CRM-1492. Overwritte original cookies with the retargeting one
				setCookie('utm_source', sourceURL, 180);
				setCookie('utm_campaign', campaignURL, 180);
			}

			var sourceRetargeting = (getCookie('utm_source_retargeting') != null && typeof getCookie('utm_source_retargeting') != 'undefined' ? getCookie('utm_source_retargeting') : '');
			var campaignRetargeting = (getCookie('utm_campaign_retargeting') != null && typeof getCookie('utm_campaign_retargeting') != 'undefined' ? getCookie('utm_campaign_retargeting') : '');
			if (sourceRetargeting.length > 0) setCookie('utm_source_retargeting', sourceRetargeting, 180);
			if (campaignRetargeting.length > 0) setCookie('utm_campaign_retargeting', campaignRetargeting, 180);

			if (!source) {
				if (rawReferrer != '') {
					var selfHost = (document.location.href).match(/^[A-z]+:\/\/([^\/]+)\/?.*/);
					if (selfHost) {
						selfHost = selfHost[1]
					}

					var host = (rawReferrer.toString()).match(/^[A-z]+:\/\/([^\/]+)\/?.*/);
					if (host) {
						host = host[1]
					} else {
						host = selfHost;
					}

					if (host != selfHost) {
						host = host.split('.');
						if (host.length > 2) {
							source = host[1];
						}
						if (host.length == 2) {
							source = host[0];
						}
						if (source) setCookie('utm_source', source, 180);
						if (!campaign) {
							campaign = 'organic';
							setCookie('utm_campaign', campaign, 180);
						}
					}
				}
			}

			if (source.length == 0) source = "0";
			if (campaign.length == 0) campaign = "0";
			if (sourceRetargeting.length == 0) sourceRetargeting = "0";
			if (campaignRetargeting.length == 0) campaignRetargeting = "0";

			// Add display source
			if (urlVars["DisplaySource"] != undefined) {
				if (getCookie('DisplaySource') == null || typeof getCookie('DisplaySource') == 'undefined') {
					if (urlVars["utm_campaign"] != undefined && (getCookie('DisplaySourceUTMCampaign') == null || typeof getCookie('DisplaySourceUTMCampaign') == 'undefined')) setCookie('DisplaySourceUTMCampaign', urlVars["utm_campaign"], 180);
					if (urlVars["utm_source"] != undefined && (getCookie('DisplaySourceUTMSource') == null || typeof getCookie('DisplaySourceUTMSource') == 'undefined')) setCookie('DisplaySourceUTMSource', urlVars["utm_source"], 180);
				}
				setCookie('DisplaySource', urlVars["DisplaySource"], 180);
			}

			//Add gclid
			var setGclidCookie = true;
			if (urlVars["utm_source"] != undefined) {
				if (urlVars["utm_source"] == 'SEM' || urlVars["utm_source"] == 'Trader' || urlVars["utm_source"] == 'Google-nerdmarketing') {
					setGclidCookie = false;
				}
			}
			if (urlVars["gclid"] != undefined && setGclidCookie) {
				setCookie('gclid', urlVars["gclid"], 180);

				window.addEventListener("load", function (event) {
					if ('undefined' != typeof activeUserProfileMng) {
						saveGCLID = function () {
							if ('undefined' == typeof window.jQuery) {
								return;
							}
							$.post("https://rest.d2cmedia.ca/gclid.rest.api.php", {
								sessionid: activeUserProfileMng.sessionid,
								gclid: urlVars['gclid']
							});
						};
						try {
							activeUserProfileMng.registerSessionCallback(saveGCLID);
						} catch (error) {
							console.log(error);
						}
					}
				});
			}


			window.activePage = page;
			var uid = (getCookie('uid') != null && typeof getCookie('uid') != 'undefined' ? getCookie('uid') : generateGUID());
			setCookie('uid', uid, 180);
			var dealerid = 2696;
			var siteid = 907;
			window.activeSiteID = siteid;
			window.activeDealerID = dealerid;
			var carid = '';
			if (carid.length == 0) carid = "0";

			function tagBuild(internals) {
				return '<' + (internals.join(' ')) + ' />';
			}

			var cacheClearer = Math.floor(Math.random() * 9999999);
			// verify if we can do a document.write or if we need to append
			var addTkImg = function (src) {
				switch (document.readyState) {
					case "loading":
						// We can do a document write
						// This is so it is not confused with html
						document.write(tagBuild([
							'img',
							'style="width:1px;height:1px;position:absolute;left:0px;top:0px;"',
							'src="' + src + '"',
							'alt=""'
						]));


						break;
					case "interactive":
					case "complete":
					default:
						try {
							var img = document.createElement("img");
							img.style.cssText = 'width:1px;height:1px;position:absolute;left:0px;top:0px;';
							img.setAttribute('src', src);
							document.body.appendChild(img);
						} catch (ex) {
							if (console && console.log) console.log("Error tkwidget: " + ex.message);
						}
						break;
				}
			};

			var tksrc = '/proxy_saub/websiteHits/' +
				dealerid + "/" + siteid + "/" + carid + "/" + escape(uid) +
				"/" + page + "/" + escape(source) + "/" + escape(campaign) +
				"/" + escape(make) + "/" + escape(model) + "/" + year + "/" +
				ismobile + "/" + encodeURIComponent(referer) +
				"/" + escape(itemType) + "/" + escape(sourceRetargeting) + "/" + escape(campaignRetargeting) +
				"/" + cacheClearer + '.gif';

			if (typeof activeUserProfileMng == 'undefined' || !activeUserProfileMng._isBot()) addTkImg(tksrc);

			var keywords = "";
			// Yahoo
			if ("p" in refererVars && referer.indexOf("yahoo") > -1) {
				keywords = refererVars['p'];
			}
			// google + bing
			if ("q" in refererVars && (referer.indexOf("google") > -1 || referer.indexOf("bing") > -1)) {
				keywords = refererVars['q'];
			}

			if (keywords.length > 0) {
				var cacheClearer = Math.floor(Math.random() * 9999999);
				if (typeof activeUserProfileMng == 'undefined' || !activeUserProfileMng._isBot()) {
					var srct2 = '/proxy_saub/logUserKeywords/"+escape(uid)+"/"+escape(keywords)+"/"+siteid+"/"+cacheClearer+".gif';
					addTkImg(srct2);
				}
			}

			var uLang = (getCookie('lang') == 'en') ? 'en' : 'fr';

			window.fbChatRef = {r: 'site', c: campaign, s: source};

			var custom_variables = [
				{name: 'language', value: uLang},
				{name: 'utm_campaign', value: campaign},
				{name: 'utm_source', value: source},
				{name: 'page', value: page},
				{name: 'uid', value: uid},
				{name: 'carid', value: carid},
				{name: 'make', value: make},
				{name: 'model', value: model},
				{name: 'year', value: year},
				{name: 'isMobileSite', value: ismobile}
			];
			window.cVariables = custom_variables;
			window.relanceHandlerFnc = function () {
				var relanceID = (getCookie('relanceID') != null && typeof getCookie('relanceID') != 'undefined' ? getCookie('relanceID') : 0);
				if (typeof activeUserProfileMng != 'undefined' && typeof activeUserProfileMng.logPageViewEvent != 'undefined') {
					activeUserProfileMng.logPageViewEvent(relanceID, 'relanceID');
					//Also log display source when set from url
					if (urlVars["DisplaySource"] != undefined) {
						activeUserProfileMng.logPageViewEvent(urlVars["DisplaySource"], 'displaySource');
						if (urlVars["utm_campaign"] != undefined) activeUserProfileMng.logPageViewEvent(urlVars["utm_campaign"], 'utm_campaign');
						if (urlVars["utm_source"] != undefined) activeUserProfileMng.logPageViewEvent(urlVars["utm_source"], 'utm_source');
					}
				} else
					setTimeout(window.relanceHandlerFnc, 1000);

			};
			var initF = function () {
				initLCI(custom_variables);
				window.relanceHandlerFnc();
			};
			if (window.attachEvent) window.attachEvent('onload', initF);
			else window.addEventListener('load', initF, false);

			// Adding AI view event
			var aicurrentpage = 'generic_1.html';
			if (AICurrentConfigID > 0 && typeof activeUserProfileMng != 'undefined') {
				activeUserProfileMng.logPageViewEvent(AICurrentConfigID, 'AIConfig');
			}

			if (AIIDPerNewCarsFrench.length > 0 && aicurrentpage == 'newcardetail.html' && getCookie('lastnewvehicle') != null) {
				var lastnewvehicle = getCookie('lastnewvehicle');
				var lastnewvehiclesplit = lastnewvehicle.split('|||');
				var ainewcarid = 0;
				if (typeof AIIDPerNewCarsFrench[lastnewvehiclesplit[0] + lastnewvehiclesplit[1] + lastnewvehiclesplit[2]] !== 'undefined') ainewcarid = AIIDPerNewCarsFrench[lastnewvehiclesplit[0] + lastnewvehiclesplit[1] + lastnewvehiclesplit[2]];
				if (typeof AIIDPerNewCarsEnglish[lastnewvehiclesplit[0] + lastnewvehiclesplit[1] + lastnewvehiclesplit[2]] !== 'undefined') ainewcarid = AIIDPerNewCarsEnglish[lastnewvehiclesplit[0] + lastnewvehiclesplit[1] + lastnewvehiclesplit[2]];
				if (ainewcarid > 0 && typeof activeUserProfileMng != 'undefined') {
					activeUserProfileMng.logPageViewEvent(ainewcarid, 'AIConfigNewCar');
				}
			}

		}

		/** jQuery onReady force call (IOS 11 bug) */
		setTimeout(function () {
			var fn = function () {
				if (typeof jQuery != 'undefined') {
					return jQuery.ready();
				}
				setTimeout(fn, 100);
			}
			fn();
		}, 1000);

		/*]]>*/


	</script>
	<!-- ##VMJS2## -->        <!-- OO::1dfcd66843d6875591262948001934c1 --><!-- GO ID -->


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
			padding: 0;
		}

		body {
			padding: 0;
			margin-left: 0px;
			margin-top: 0;
			margin-right: 0px;
			margin-bottom: 0px;
			font-size: 14px;
			font-family: Montserrat;
			background: #ffffff url('images/blank.gif') top center no-repeat;

		}

		input, textarea, select, button {
			font-family: Montserrat;
		}


		#nav li a.top_link,
		.up_menu ul#nav ul.sub li a.subtitle,
		.img_menu.up_menu ul#nav #MainMenu_NEW > ul.sub li > ul.sub > li.hasSub li a,
		body .wrapper .up_menu #nav {
			font-family: Montserrat;
		}

		h1 {
			font-family: Montserrat;
			clear: both;
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
		.btn-default, .btn-sm, .btn-lg {
			font-family: Montserrat;
		}


		h2, h3, h4, h5, h6 {
			font-family: Montserrat;
		}


		strong {
			font-weight: 900 !important;
		}

		/*
ul {
  padding: 13px 40px;
} */

		#mainDiv.wrapper {
			padding: 40px 0 0 0;
		}

		#mainDiv.wrapper .top_bg {
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
			float: none !important;
			margin-left: 0px !important;
			font-size: 100% !important;
		}


		.ckeditorWrapper p {
			float: none !important;
		}

		.ckeditorWrapper p:empty {
			margin-bottom: 1rem;
		}

		.clr {
			clear: both;
		}

		.fleft {
			float: left;
		}


		/* SHARED CSS */
		.icon-heading span.fa {
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


		.icon-heading .secondaryText {
			color: #757575;
		}


		/*removes red box shadow for invalid inputs in FF*/
		input:invalid {
			box-shadow: none;
			-moz-box-shadow: none;
		}

		.conditions--container {
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}

		.conditions--container .conditions {
			flex-grow: 2;
			font-size: 13px;
			line-height: 18px;
			color: #eeeeee;
		}

		.conditionsFooter {
			float: left;
			font-size: 13px;
			text-decoration: none;
			font-weight: normal;
			line-height: 18px;
			text-transform: none;
			text-align: left;
			margin-left: 5px;
			margin-top: 25px;
			color: #eeeeee;
		}

		.conditions--container a,
		.conditionsFooter a {
			text-decoration: underline;
			cursor: pointer;
			font-size: 13px;
			color: #eeeeee;
			font-weight: normal;
		}


		a {
			color: #303030;
		}

		.extendedPhoneTrigger a {
			color: inherit;
		}

		.languageBar {
			margin: -20px auto 5px;
			height: 28px;
			padding: 0;
			width: 960px;
			text-align: top
		}

		.header-section .languageBar {
			margin: 0 auto 2.75rem;
			width: inherit;
		}

		.header-section .languageBar + .phone {
			margin-bottom: 0.5rem;
		}

		.languageBar div {
			width: auto;
			float: right;
			margin-right: 7px;
			font-size: 14px;
			color: #666666;
			text-decoration: none;
			text-align: right;
		}

		.languageBar div:first-of-type {
			margin-right: 0;
		}

		.languageBar a {
			padding-right: 35px;
			width: auto;
			font-size: 14px;
			color: #666666;
			text-decoration: underline;
			text-align: right;
		}

		.languageBar a:hover {
			padding-right: 35px;
			width: auto;
			font-size: 14px;
			color: #666666;
			text-decoration: underline;
			text-align: right;
		}

		.languageBar a:visited {
			padding-right: 35px;
			width: auto;
			font-size: 14px;
			color: #666666;
			text-decoration: underline;
			text-align: right;
		}

		.languageBar.languageBar-zero {
			height: 0;
			padding: 0;
			/*margin-top: -60px;*/
		}

		#mainDiv.wrapper.no-icons {
			padding-top: 0;
		}

		.wrapper {
			margin: 0 auto;
			padding: 0;
			width: 960px;
			padding-bottom: 10px;
			text-align: top;
			position: relative;
		}

		.top_rou {
			width: 960px;
			height: 4px;
			float: left;
		}

		.top_bg {
			width: 960px;
			max-height: 250px;
			float: left;
			background: url(images/top_logo_bg.png) repeat-x;
		}

		.logo { /*max-width:50%;*//*float:left;*/
			padding: 14px 0px 0px 9px;
		}

		.logoNoPadding img {
			width: 100%;
		}

		.languageBar a.desktop_lang_button {
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

		.languageBar span.desktop_lang_button.active, .languageBar a.desktop_lang_button:hover {
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

		.languageBar span.desktop_lang_button:nth-child(even), .languageBar a.desktop_lang_button:nth-child(even) {
			margin-left: 2px;
		}

		.languageBar a.desktop_lang_button span.desktop_lang_button_text, .languageBar span.desktop_lang_button span.desktop_lang_button_text {
			position: absolute;
			top: 50%;
			transform: translate(-50%, -50%);
		}


		.logoNoPadding {
			max-width: 50%;
			float: left;
			margin-top: -4px;
		}

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

		.header-section .phone.phone_right {
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

		.phone h2 {
			font-size: 22px;
			color: #525252;
			font-weight: bold;
			text-decoration: none;
		}

		.phone h1 {
			font-size: 25px;
			color: #525252;
			font-weight: bold;
			text-decoration: none;
		}

		.phone div.org {
			font-size: 22px;
			color: #525252;
			font-weight: bold;
			text-decoration: none;
		}

		.phone_text {
			color: #b39b6d;
			text-decoration: none;
			padding-left: 2px;
			padding-top: 2px;
		}

		.phone_text a {
			color: #b39b6d;
			text-decoration: none;
		}

		.phone_text a:hover {
			font-size: 13px;
			color: #00579c;
			text-decoration: none;
		}

		a.phone-link {
			display: inline-block !important;
			padding: 0 !important;
			color: inherit;
			text-decoration: none;
		}

		a.phone-link:hover {
			color: inherit;
			text-decoration: none;
		}

		#slider {
			width: 960px;
			margin-left: 0px;
			box-shadow: none;
		}

		.centered {
			position: absolute;
			left: 50%;
			top: 50%;
		}

		.up_menu {
			width: 960px;
			height: 31px;
			z-index: 1111;
			float: right;
			white-space: nowrap;
		}

		.banner {
			width: 960px;
			height: 301px;
			float: left;
			margin-left: 2px;
			margin-bottom: 6px;
		}

		.me_top {
			width: 967px;
			height: 8px;
			float: left;
		}

		.me_bg {
			width: 967px;
			height: auto;
			float: left;
			background: url(images/me_bg_rou.png) left top repeat-y;
		}

		.me_desc {
			margin: 0px;
			height: auto;
			font-size: 14px;
			overflow: hidden;
			padding: 5px 15px
		}

		.me_bou {
			width: 967px;
			height: 9px;
			float: left;
		}

		.one {
			width: 225px;
			height: auto;
			float: left;
			margin-left: 10px;
			margin-top: 8px;
		}

		.two {
			width: 225px;
			height: auto;
			float: left;
			margin-left: 14px;
			margin-top: 8px;
		}

		.three {
			width: 225px;
			height: auto;
			float: left;
			margin-left: 14px;
			margin-top: 8px;
		}

		.four {
			width: 225px;
			height: auto;
			float: left;
			margin-left: 4px;
			margin-top: 4px;
		}

		.Vous {
			font-size: 17px;
			color: #000000;
			text-decoration: none;
			padding-bottom: 2px;
		}

		.class {
			font-size: 13px;
			color: #575757;
			text-decoration: none;
			padding-bottom: 0px;
			padding-top: 6px;
		}

		.class1 {
			font-size: 13px;
			color: #575757;
			text-decoration: none;
			height: 157px;
			margin-top: 6px;
		}

		.border {
			border: 1px solid #d3d3d3;
			width: 218px;
		}

		.box {
			width: 75px;
			height: 73px;
			text-align: center;
			padding-top: 10px;
			margin: 0 auto;
		}

		.ca {
			height: 143px;
		}

		.sub {
			height: 193px;
		}

		.box225 {
			width: 225px;
			float: left;
			font-size: 13px;
			color: #575757;
			text-decoration: none;
			padding-bottom: 3px;
		}

		.box224 {
			width: 225px;
			float: left;
			padding-bottom: 6px;
		}

		.box223 {
			width: 225px;
			float: left;
			padding-top: 3px;
		}

		.nos {
			width: 710px;
			height: 100%;
			margin-top: 5px;
			float: left;
			margin-right: 5px;
		}

		.nos_top {
			width: 716px;
			height: 9px;
			float: left;
		}

		.nos_bg {
			width: 716px;
			height: auto;
			float: left;
			background: url(images/nos_bg.png) left top repeat-y;
		}

		.nos_bou {
			width: 716px;
			height: 9px;
			float: left;
		}

		.nos_text {
			height: 30px;
			font-size: 18px;
			color: #575757;
			text-decoration: none;
			text-align: center;
		}

		.arow {
			width: 695px;
			height: 160px;
			float: left;
			margin-left: 4px;
		}

		.con {
			font-size: 13px;
			color: #3c3c3c;
		}

		.desc {
			width: 710px;
			float: left;
			margin-right: 5px;
		}

		.desc_bg {
			width: 100%;
			height: 248px;
			float: left;
			background: url("images/nos_bg.png") repeat-y scroll left top transparent;
		}

		.addr {
			margin-top: 25px;
		}

		.addr_mid {
			background: url(images/me_bg_rou.png) left top repeat-y;
		}

		.hidden {
			display: none !important;
		}

		.hours_rem {
			text-align: right;
			line-height: 18px;
			float: right;
			padding-right: 15px;
		}

		.hours_rem a {
			font-size: 11px;
			text-decoration: none;
		}

		#l {
			width: 60px;
			float: left;
		}

		/*#g{width:140px; float:left;}*/

		.der {
			width: 460px;
			height: 255px;
			margin-top: 1px;
			float: left;
		}

		.der_top {
			width: 464px;
			height: 8px;
			float: left;
		}

		.der_bg {
			width: 444px;
			height: 226px;
			float: left;
			background: url(images/der_bg.png) left top repeat-y;
			padding: 6px 10px 10px 10px;
		}

		.der_bou {
			width: 464px;
			height: 8px;
			float: left;
		}

		.dem {
			width: 495px;
			height: 255px;
			margin-top: 3px;
			float: left;
			margin-left: 5px;
			margin-bottom: 6px;
		}

		.sbox1 {
			width: 240px;
			height: 123px;
			float: left;
			padding: 0 5px 10px 5px
		}

		.sbox2 {
			width: 240px;
			height: 123px;
			float: left;
			padding: 0 5px 10px 5px
		}

		.sbox3 {
			width: 240px;
			height: 123px;
			float: left;
			padding: 0 5px 10px 5px
		}

		.sbox4 {
			width: 240px;
			height: 123px;
			float: left;
			padding: 0 5px 10px 5px
		}

		.bottom4boxes {
			float: left;
			width: 100%;
			padding: 0;
		}

		.bottom4boxes * {
			box-sizing: border-box;
		}

		.bottom4boxes > .box245 {
			float: left;
			width: 25%;
			max-width: 245px;
		}

		.bottom4boxes > .box241 {
			float: left;
			margin: 10px 6px;
		}

		.bottom4boxes > .box241:first-child {
			margin-left: 0px;
		}

		.bottom4boxes > .box241:last-child {
			margin-right: 0px;
		}

		@media only screen and (max-width: 1024px) {
			.bottom4boxes table {
				padding: 0 10px;
			}
		}

		.sboxUsed {
			float: left;
		}

		.sbox_top {
			width: 247px;
			height: 5px;
			float: left;
		}

		.sbox_bg {
			width: 247px;
			height: 107px;
			float: left;
			background: url(images/sbox_bg.png) left top repeat-y;
			font-size: 19px;
			color: #191919;
			text-align: center;
		}

		.sbox_bou {
			width: 247px;
			height: 5px;
			float: left;
		}

		.da {
			margin-top: 12px;
		}

		.da1 {
			margin-top: 10px;
			font-size: 19px;
			color: #191919;
			text-align: center;
		}

		.da1 h1 {
			padding: 0;
			margin: 0;
			font-size: 19px;
			color: #191919;
			text-align: center;
			font-weight: normal;
		}


		.addline {
			color: #000000 !important;
			overflow: hidden;
			text-align: center;
		}

		#returnPopupNextModel {
			height: 40px !important;
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
		.sbox4 a.cLink {
			display: block;
			height: 100%;
			width: 100%;
			text-decoration: none;
		}

		.sbox1 a.cLink:hover,
		.sbox2 a.cLink:hover,
		.sbox3 a.cLink:hover,
		.sbox4 a.cLink:hover {
			text-decoration: none;
		}

		.homepage--business-description,
		.homepage--business-description-cert,
		.homepage--business-description .border_box {
			background-color: #444444;
			background-color:;
			color: #eeeeee;
			color:;
		}

		.homepage--business-description a,
		.homepage--business-description-cert a {
			color: #eeeeee;
			color:;
		}

		.homepage--business-description .border_box,
		.homepage--business-description-cert .border_box {
			background-color: inherit;
			color: inherit;
		}

		.black_text {
			font-size: 24px;
			color: #191919;
			margin-bottom: 4px;
		}

		.gray_text {
			font-size: 13px;
			color: #191919;
		}

		.but {
			float: right;
			margin: 0px 0px 0px 0px;
		}

		.line {
			border-bottom: 1px solid #d2d2d2;
			margin-top: 5px;
			margin-bottom: 5px;
		}

		.viv {
			margin-top: 5px;
			margin-left: 5px;
			font-size: 24px;
			color: #fff;
			color: #eeeeee;
			text-align: justify;
		}

		.tw {
			width: 260px;
			height: 40px;
			float: right;
			margin-top: 5px;
			text-align: right;
		}

		.ENGLISH .viv {
			text-transform: capitalize;
		}

		.MainBoxLayer .viv {
			margin-left: 0;
		}

		.social-sharing {
			width: 100%;
			clear: both;
			float: right;
			margin-top: 5px;
		}

		.social-sharing > div.social {
			float: right;
			padding-left: 5px;
		}

		.social-sharing > div.social:last-child {
			padding-left: 0;
		}

		.social-sharing > div.social:first-child {
			padding-right: 5px;
		}

		.MainBoxLayer .social-sharing > div.social:first-child {
			padding-right: 0;
		}

		#footerDiv .add {
			color: var(--footer-items-link-color);
		}

		#footerDiv .add .org {
			color: var(--footer-link-title-col);
		}

		.pour {
			width: 725px;
			height: auto;
			float: left;
		}

		/*.{ font-size:18px; color:#d4d4d4;}*/
		.pageno {
			width: 236px;
			height: auto;
			float: left;
			margin-left: 5px;
			padding: 0;
			text-transform: none;
			font-weight: normal;
			margin-top: 10px;
		}

		.pageno ul {
			list-style-type: none;
			margin: 0 0 15px 0;
			padding: 0;
			width: 236px;
			text-transform: none;
			font-weight: normal;
		}

		.pageno ul li {
			list-style-type: none;
			margin: 0;
			display: block;
			float: none;
			width: 236px;
			text-transform: none;
			font-weight: normal;
		}

		.pageno ul li a {
			width: 237px;
			margin: 0;
			display: block;
			float: none;
			font-size: 13px;
			color: var(--footer-items-link-color);
			text-decoration: none;
			font-weight: normal;
			line-height: 18px;
			text-transform: none;
			text-align: left;
			text-transform: none;
		}

		.pageno ul li span, .pageno ul li a.ftitle {
			width: 236px;
			margin: 0;
			display: block;
			float: none;
			font-size: 14px;
			color: #fff;
			color: var(--footer-link-title-col);
			text-decoration: none;
			margin-bottom: 10px;
			font-weight: normal;
			line-height: 18px;
			text-align: left;
		}

		.pageno ul li a.ftitle:hover {
			margin-bottom: 10px;
		}

		.pageno ul li a:hover {
			list-style-type: none;
			margin: 0;
			color: var(--footer-link-title-col);
			text-decoration: none;
			display: block;
			line-height: 18px;
		}

		.pageno li a.active {
			list-style-type: none;
			margin: 0;
			color: #919191;
			text-decoration: none;
			display: block;
			line-height: 18px;
		}

		.ENGLISH .pageno ul li a {
			text-transform: capitalize;
		}

		.add {
			width: 230px;
			height: auto;
			float: left;
			font-size: 13px;
			color: #919191;
			text-decoration: none;
			font-weight: normal;
			line-height: 18px;
			text-transform: none;
			text-align: right;
			text-transform: none;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.copy {
			float: left;
			font-size: 13px;
			color: #919191;
			text-decoration: none;
			font-weight: normal;
			line-height: 18px;
			text-transform: none;
			text-align: left;
			text-transform: none;
			margin-left: 5px;
			margin-top: 25px;
		}

		.copy a {
			text-decoration: underline;
			cursor: pointer;
			font-size: 13px;
			color: #919191;
			font-weight: normal
		}

		.copy a:hover {
			color: #d4d4d4;
			font-weight: bold;
		}

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
			width: auto;
			height: auto;
			margin: 0 4px;
		}

		.social-media-icons .social-icons .fab {
			margin-top: 0;
			font-size: 1.9em;
			color: var(--footer-link-title-col);
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

		#footer .icon-text {
			margin-bottom: .4rem;
		}

		#footer .icon-text span {
			width: 20px;
			padding: 0 !important;
		}

		/*papan*/
		.smallpic_box {
			width: 329px;
			height: auto;
			float: left;
			margin: 0;
		}

		.smallpic43 {
			width: 43px;
			height: 31px;
			float: left;
			margin: 0 5px 0 0;
			border: 2px solid #FFFFFF;
		}

		.details {
			width: 81px;
			height: 30px;
			display: block;
		}

		a.details {
			width: 81px;
			height: 30px;
			background: url(images/details.png) left top no-repeat;
		}

		a:hover.details {
			width: 81px;
			height: 30px;
			background: url(images/details.png) left -32px no-repeat;
		}

		.big_picbox {
			min-height: 110px;
			width: 146px;
		}

		.big_picbox img {
			display: block;
		}

		.picbox_videobtn_en, .picbox_videobtn_fr {
			display: block;
			height: 45px;
		}

		.picbox_videobtn_en {
			background: url('images/video-btn-thumb_en.png') no-repeat scroll 0 0 / 100% auto transparent;
		}

		.picbox_videobtn_fr {
			background: url('images/video-btn-thumb_fr.png') no-repeat scroll 0 0 / 100% auto transparent;
		}

		.picbox_videobtn_en:hover {
			background: url('images/video-btn-thumb_en_hover.png') no-repeat scroll 0 0 / 100% auto transparent;
		}

		.picbox_videobtn_fr:hover {
			background: url('images/video-btn-thumb_fr_hover.png') no-repeat scroll 0 0 / 100% auto transparent;
		}

		.big_picbox_wrapper {
			width: 146px;
			float: left;
			margin: 0 10px 0px 21px;
		}

		.text_title a {
			display: block;
			text-decoration: none;
			width: 329px;
			height: auto;
			margin: 0;
			padding-bottom: 5px;
			font-size: 14px;
			color: #414141;
			font-weight: bold;
		}

		.text_title2 {
			width: 329px;
			height: 32px;
			float: left;
			margin: 0;
			font-size: 14px;
			color: #414141;
		}

		.sold_car_note {
			background-color: #1E1E1E;
			border-radius: 5px;
			-webkit-border-radius: 5px;
			color: #FFF;
			width: 100%;
			padding: 10px 0;
			text-align: center;
			margin-top: 15px;
		}

		.sold_car_note a {
			color: #FFF;
		}

		.sold_car_note a:hover {
			color: #BBB;
		}

		.text_title3 {
			width: 329px;
			height: auto;
			float: left;
			margin: 0;
			padding-bottom: 7px;
			font-size: 14px;
			color: #484848;
		}

		.text_box2 {
			width: 329px;
			height: auto;
			float: left;
			margin: 0 0px 0px 0px;
		}

		.main_picbox {
			width: 671px;
			min-height: 170px;
			float: left;
			background: url(images/line.png) left bottom repeat-x;
			background-position: bottom;
			padding: 0;
			margin: 0;
		}


		.box2_details_footer2 {
			width: 681px;
			height: 15px;
			float: left;
			background: url(images/box_footer.png) left top no-repeat;
		}

		.box2_details_midEx {
			width: 100%;
			height: auto;
			background: none;
			padding: 0 0px;
			height: 85px;
		}

		.box2_details_text span {
			text-align: center;
			font-size: 18px;
			color: #FFFFFF;
			font-weight: bold;
		}

		.box2_details_footer22 {
			width: 971px;
			height: 15px;
			float: left;
			background: url(images/box_footer.png) left top no-repeat;
			background-size: 971px auto;
		}

		.box170 {
			position: relative;
			width: 671px;
			min-height: 170px;
			float: left;
			background: url(images/line.png) left bottom no-repeat;
			background-position: bottom;
			padding: 0;
			margin: 0 0px 10px 0;
		}


		.customBoxBasic {
			width: 241px;
			height: 116px;
			float: left;
			padding: 5px 0 0 0;
			background-position: left top;
			background-repeat: no-repeat;
			background-size: 241px 121px;
			font-size: 19px;
			color: #191919;
			text-align: center;
			font-weight: normal;
			cursor: pointer;
		}

		.customBoxBasic:hover {
			color: #fff;
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
			width: 300px;
			height: 300px;
			overflow: hidden;
			position: absolute;
			top: 0;
			left: 0;
		}

		.ribbon-container .corner-ribbon {
			z-index: 555;
			margin: 0;
			padding: 0.5rem 0 !important; /* necessary the parent might have a padding 0 on all children */
			box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);

			font-size: 17px;
			line-height: 23px;
			text-align: center;

			position: absolute;
			top: 0;
			left: 0;
			transform: translateX(-30%) translateY(0%) rotate(-45deg);
			transform-origin: top right;

			background: #000000;
			color: #ffffff;
		}

		.ribbon-container .corner-ribbon:before,
		.ribbon-container .corner-ribbon:after {
			content: "";
			position: absolute;
			top: 0;
			margin: 0 -1px;
			width: 100%;
			height: 100%;
			background: #000000;
		}

		.ribbon-container .corner-ribbon:before {
			left: 100%;
		}

		.ribbon-container .corner-ribbon:after {
			right: 100%;
		}


		.searchright {
			width: 280px;
			height: 116px;
			padding: 5px 0 0 0;
			background: url(images/right-search-box.png) left top repeat-x;
			font-size: 19px;
			color: #191919;
			text-align: center;
			font-weight: normal;
			cursor: pointer;
		}


		.searchrighthover {
			width: 280px;
			height: 116px;
			padding: 5px 0 0 0;
			margin: 0 0 0 0;
			background: url(images/right-search-box-hover.png) left top repeat-x;
			font-size: 19px;
			color: #FFFFFF;
			text-align: center;
			font-weight: normal;
			cursor: pointer;
		}


		.searchrightXXX {
			width: 280px;
			height: 116px;
			padding: 5px 0 0 0;
			background: url(images/right-search-box.png) left top no-repeat rgb(51, 51, 51);
			font-size: 14px;
			color: #FFFFFF;
			text-align: center;
			font-weight: bold;
			cursor: pointer;
			border-radius: 8px;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			background-size: 280px;
		}


		.searchrighthoverXXX {
			width: 280px;
			height: 116px;
			padding: 5px 0 0 0;
			margin: 0 0 0 0;
			background: url(images/right-search-box-hover.png) left top no-repeat rgb(51, 51, 51);
			font-size: 14px;
			color: #FFFFFF;
			text-align: center;
			font-weight: bold;
			cursor: pointer;
			border-radius: 8px;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			background-size: 280px;

		}

		.searchright-text {
			margin-left: 100px;
			text-align: left;
			width: 60%;
		}

		.searchright-text p {
			margin: 15px 0 0;
		}


		.pageno2 {
			height: 24px;
		}

		.pageno2 ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			text-transform: none;
		}

		.pageno2 ul li {
			list-style-type: none;
			margin: 0;
			display: inline;
		}

		.pageno2 ul li a {
			list-style-type: none;
			margin: 0;
			display: block;
			font-size: 14px;
			color: #323232;
			text-decoration: none;
			padding: 0 7px;
			margin-right: 2px;
			font-weight: bold;
			line-height: 24px;
			text-transform: none;
			text-align: center;
			text-transform: none;
			background: #b3b4b5;
			float: left;
			-moz-border-radius: 4px;
			-webkit-border-radius: 4px;
			border-radius: 4px;
			-khtml-border-radius: 4px;
		}

		.pageno2 ul li a:hover {
			list-style-type: none;
			margin: 0;
			display: block;
			font-size: 14px;
			color: #FFFFFF;
			text-decoration: none;
			padding: 0 7px;
			margin-right: 2px;
			font-weight: bold;
			line-height: 24px;
			text-transform: none;
			text-align: center;
			text-transform: none;
			background: #282828;
			float: left;
			-moz-border-radius: 4px;
			-webkit-border-radius: 4px;
			border-radius: 4px;
			-khtml-border-radius: 4px;
		}

		.pageno2 li a.active {
			list-style-type: none;
			margin: 0;
			display: block;
			font-size: 14px;
			color: #FFFFFF;
			text-decoration: none;
			padding: 0 7px;
			margin-right: 2px;
			font-weight: bold;
			line-height: 24px;
			text-transform: none;
			text-align: center;
			text-transform: none;
			background: #282828;
			float: left;
			-moz-border-radius: 4px;
			-webkit-border-radius: 4px;
			border-radius: 4px;
			-khtml-border-radius: 4px;
		}

		.main_box {
			width: 960px;
			margin: 0 auto;
		}

		.main_left_box {
			width: 670px;
			height: auto;
			float: left;
			padding-right: 10px;
		}

		.main_left_box ul {
			padding: 0px;
		}

		/*
.box_top_round{width:681px; height:15px; float:left; background:url(/images/box_top.png) left top no-repeat; margin-top:5px;}
.box_mid_round{width:671px; height: auto; float:left; background:url(/images/box_mid.png) left top repeat-y; padding:0 5px;}
*/

		.box_mid_round {
			background-color: rgb(255, 255, 255);
			-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
			background-color: rgba(255, 255, 255, 1);
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

		.details_box img.vip {
			margin-top: -48px;
			width: 140px;
			border: 1px;
			border-radius: 4px;
		}

		.box_top_round2 {
			width: 971px;
			height: 15px;
			float: left;
			background: url(images/box_top.png) left top no-repeat;
			background-size: 971px auto;
			margin-top: 5px;
		}

		.box_mid_round2 {
			width: 971px;
			height: auto;
			float: left;
			background: url(images/box_mid.png) left top repeat-y;
			background-size: 971px auto;
			padding: 0 5px;
		}

		.page_name {
			width: 650px;
			height: 30px;
			float: left;
			background: url(images/sho.png) center bottom no-repeat;
			background-position: bottom;
			padding: 0 0px 0px 21px;
			line-height: 30px;
			font-size: 14px;
			color: #414141;
		}


		.page_name a {
			line-height: 30px;
			font-size: 14px;
			color: #414141;
			text-transform: none;
			text-decoration: none;
		}

		.page_name a:hover {
			line-height: 30px;
			font-size: 14px;
			color: #00589c;
			text-transform: none;
			text-decoration: underline;
		}

		table.vehicleListTable a {
			display: table-cell;
			vertical-align: middle;
			line-height: 1.2;
		}

		table.vehicleListTable a:hover {
			display: table-cell;
			vertical-align: middle;
			line-height: 1.2;
		}

		.Porsche2 {
			width: 100%;
			height: 31px;
			float: left;
			padding: 0 0px 20px 21px;
			margin: 15px 0 25px 0;
			line-height: 31px;
			font-size: 30px;
			color: #414141;
			display: inline
		}

		.Porsche2 h1 {
			font-weight: normal;
			font-size: 30px;
			color: #414141;
		}

		/*.Trierpar{width:60px; height:31px; float:left; padding:0 5px 0px 0px; margin:15px 0; line-height:31px;  font-size:13px; color: #777777; font-weight:bold; text-align:right;}*/
		.Trierpar {
			font-size: 12px;
			color: #5B699C;
			font-weight: normal;
			padding-left: 5px;
		}

		.selected_box2 {
			width: 175px;
			height: 31px;
			float: left;
			padding: 0 0px 0px 0px;
			margin: 15px 0;
			line-height: 31px;
			font-size: 30px;
			color: #414141;
		}

		.selected_orderby {
			width: 135px;
			float: right;
			padding: 0 0px 0px 0px;
			margin: 10px 10px 0px 0px;
			font-size: 30px;
			color: #414141;
		}

		.prix {
			width: 79px;
			height: 78px;
			float: left;
			position: absolute;
			z-index: 11;
			margin-top: -4px;
			margin-left: -4px;
			top: 0px;
		}

		.pageno5 {
			width: 100%;
			height: 24px;
			margin: 30px 0 20px 0px;
			padding: 0;
			float: left
		}

		.pageno6 {
			width: 254px;
			height: 24px;
			float: left;
			text-align: right;
		}

		.suivant {
			width: 280px;
			height: 19px;
			float: left;
			padding-top: 5px;
		}

		.main_right_box {
			width: 280px;
			height: auto;
			float: left;
		}

		.box7 {
			width: 290px;
			height: 12px;
			float: left;
			background: url(images/left_box_top.png) left top no-repeat;
		}

		.box7Link {
			width: 290px;
			height: 12px;
			float: left;
			background: url(images/left_box_top.png) left top no-repeat;
		}

		.box7_mid {
			width: 280px;
			height: auto;
			float: left;
			background: url(images/left_box_mid.png) left top repeat-y;
			padding: 0 2px;
		}

		.box7_mid_full {
			width: 956px;
			height: auto;
			float: left;
			background: none left top no-repeat 0 0 transparent;
			padding: 0 2px 15px;
			border-bottom: 1px solid #BBB;
		}

		.simular_v_box {
			width: 265px;
			padding: 0px 0px 5px 10px;
			margin-bottom: 5px;

		}

		/*LIOR*/
		.boxSearchNews {
			margin-top: -3px;
			margin-left: -5px;
			width: 285px;
			height: 12px;
			float: left;
			background: url(images/left_box_top_280.png) left top no-repeat;
		}

		.boxSearchNews_mid {
			margin-left: -5px;
			padding: 0px;
			width: 281px;
			height: auto;
			float: left;
			background: url(images/left_box_mid_280.png) left top repeat-y;
		}

		.boxSearchNews_footer15 {
			margin-left: -5px;
			width: 285px;
			height: 12px;
			float: left;
			background: url(images/left_box_footer_280.png) left top no-repeat;
		}

		.box7H_mid {
			width: 280px;
			float: left;
			padding-bottom: 6px;
		}

		/*.Recherche22{height: 20px; padding:10px 10px;  font-size:18px; color:#0f1a1e;}*/
		.Recherche22 {
			height: 20px;
			padding: 10px 7px;
			font-size: 18px;
			color: #000000;
		}

		.simTitle {
			height: auto;
			padding: 0px;
			font-size: 18px;
			color: #0f1a1e;
		}

		.box8 {
			width: 270px;
			height: auto;
			float: left;
			padding: 0px 0px 0px 10px;
		}

		.box9 {
			width: 20px;
			height: 18px;
			float: left;
			padding: 0px 0px 14px 0px;
			font-size: 18px;
			color: #0f1a1e;
		}

		.box11 {
			width: 100px;
			height: 11px;
			float: left;
			padding: 7px 0px 14px 0px;
			font-size: 13px;
			color: #575757;
			line-height: 18px;
		}

		.box12 {
			width: 130px;
			height: 11px;
			float: left;
			padding: 7px 0px 14px 0px;
			font-size: 13px;
			color: #575757;
			line-height: 18px;
		}

		.select_box14 {
			height: auto;
			float: left;
			padding: 0px 10px 0px 0px;
			margin-bottom: 3px;
		}

		.select_box16 {
			height: auto;
			float: left;
			padding: 0px 10px 0px 10px;
			margin-bottom: 3px;
		}

		.select_box15 {
			height: auto;
			float: left;
			padding: 10px 10px 0px 10px;
			margin-bottom: 10px;
		}

		.select_box115 {
			width: 115px;
			height: auto;
			float: left;
			padding: 0px 0px 0px 10px;
			margin-bottom: 10px;
		}

		.select_box80 {
			width: 80px;
			height: auto;
			float: left;
			padding: 0px 0px 0px 0px;
			margin-bottom: 10px;
		}

		.a_text {
			width: 20px;
			float: left;
			font-size: 13px;
			color: #575757;
			line-height: 31px;
			text-align: center;
			padding: 0 5px;
		}

		/*.ajouter{width:260px; height: auto; float:left; padding: 10px 10px 10px 10px;  font-size:14px; color: #FFFFFF; background:#1f1f1f url(/images/arrow3.png) right top no-repeat; background-position:right;}*/
		.ajouter {
			width: 100%;
			height: auto;
			float: left;
			padding: 10px 0;
			font-size: 14px;
			color: #FFFFFF;
			background-color: #1f1f1f;
			margin: 5px 0 10px 0px;
		}

		.ajouter_a {
			background: url("images/search-down-arrow.png") no-repeat scroll left 3px transparent;
			padding-left: 25px;
			font-size: 14px;
			color: #FFFFFF;
			text-decoration: none;
		}

		.ajouter_a_full {
			background: url("images/search-right-arrow.png") no-repeat scroll right -1px transparent;
			padding-right: 25px;
			font-size: 14px;
			color: #FFFFFF;
			text-decoration: none;
		}

		.box13 {
			width: 260px;
			height: auto;
			float: left;
			padding: 0px 10px 0px 10px;
		}

		.input_box2 {
			width: 20px;
			height: 18px;
			float: left;
			padding: 0px 0px 14px 0px;
			font-size: 18px;
			color: #0f1a1e;
		}

		.input_text {
			width: 195px;
			height: 11px;
			float: left;
			/*padding:7px 0px 14px 5px;*/
			padding: 3px 0px 7px 5px;
			font-size: 13px;
			color: #575757;
			line-height: 18px;
		}

		.button_box2 {
			width: 260px;
			height: auto;
			float: left;
		}

		.button_boxS2 {
			width: 246px;
			height: 29px;
			float: left;
			padding: 10px 3px 13px 3px;
		}

		.box-footer15 {
			width: 290px;
			height: 12px;
			float: left;
			background: url(images/left_box_footer.png) left top no-repeat;
		}

		.dis {
			margin-top: 5px;
			margin-left: 5px;
			width: 240px;
		}

		.dis_custom {
			width: 240px;
			width: 240px;
		}

		.dis_top {
			width: 246px;
			height: 9px;
			float: left;
		}

		.dis_top_custom {
			width: 238px;
			height: 40px;
			float: left;
			color: #000000;
			background: #cbcbcb;
		}

		.dis_bg {
			width: 246px;
			height: 150px;
			float: left;
			color: #282828;
			background: url(images/dis_bg.png) left top repeat-y;
		}

		._dis_bg {
			width: 240px;
			height: 200px;
			float: left;
			color: #282828;
		}

		.dis_bg_custom {
			float: left;
			color: #282828;
			background: rgba(255, 255, 255, 1);
		}

		._dis_bg_custom {
			float: left;
			color: #282828;
			background-color: rgba(255, 255, 255, 1);
		}

		.dis_bou {
			width: 246px;
			height: 50px;
			float: left;
			color: #2d2d2d;
			background: url(images/dis_bou.png) left top no-repeat;
		}

		._dis_bou {
			width: 240px;
			height: 38px;
			float: left;
			border-radius: 0 0 6px 6px;
			margin-top: 14px;
			color: #2d2d2d;;
		}

		.dis_bou_custom {
			width: 238px;
			height: 50px;
			float: left;
			padding-top: 5px;
			color: #444444;
			background: #eeeeee;
		}

		._dis_bou_custom {
			width: 240px;
			height: 40px;
			float: left;
			color: #444444;
			border-radius: 0 0 6px 6px;
			margin-top: 12px;
			background-color: #eeeeee;
		}

		.dis_bou_2 {
			width: 246px;
			height: 9px;
			float: left;
			color: #2d2d2d;
			background: url(images/dis_bou_2.png) left top no-repeat;
		}

		.dis_text {
			font-size: 23px;
			padding: 4px 0px 0px 15px;
		}

		.lundi_text {
			font-size: 13px;
			padding: 2px 0px 0px 20px;
			line-height: 14px;
		}

		.lundi_text_homepage_h248 {
			font-size: 13px;
			line-height: 18px;
			padding: 10px 0 0 20px;
		}

		.lundi_text th {
			text-align: left;
			font-weight: normal;
			width: 60px;
		}

		.lundi_text td {
			text-align: left;
		}

		.p {
			height: 16px;
			float: left;
			padding: 7px 5px 0px 10px;
			font-size: 13px;
		}

		.e {
			height: 16px;
			float: right;
			padding: 7px 0px 0px 0px;
			font-size: 14px;
		}

		.box288, .box288_custom {
			width: 280px;
			height: auto;
			float: left;
		}

		._box288, ._box288_custom {
			width: 280px;
			float: left;
		}


		.box288Used {
			width: 280px;
			height: auto;
			float: left;
			margin-left: 0px;
		}

		.box288New {
			width: 280px;
			float: left;
		}

		.box288New_custom {
			float: left;
		}

		.box288NewQM, .box288NewQM_mobile {
			border-radius: 5px;
			background-color: rgb(255, 255, 255);
			-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
			background-color: rgba(255, 255, 255, 1);
			box-shadow: none;
			clear: both;
			/*height:235px;*/
			float: left;
			width: 280px;
			margin-bottom: 5px;
		}

		.box288NewQM_mobile {
			width: 100%;
		}

		.box288NewQM_mobile .Recherche22 {
			text-align: center;
		}

		.box288NewQM_mobile table {
			width: 100%;
		}

		/* important is needed so input are display full width.*/
		.box288NewQM_mobile .jqTransformInputWrapper {
			width: 100% !important;
		}

		.box288NewQM_mobile .jqTransformInputWrapper input {
			width: 95% !important;
		}

		.box288QM {
			height: auto;
			float: left;
			margin-top: 5px;
			font-size: 14px;
			font-weight: normal;
		}

		.box288QM_custom {
			width: 278px;
			margin: 5px;
			height: auto;
			float: left;
			overflow: hidden;
			border-radius: 6px;
			box-shadow: 0 0 4px #333;
		}

		.textAreaQM {
			font-size: 13px;
			line-height: 15px;
		}

		.box288_top {
			width: 288px;
			height: 14px;
			float: left;
			background: url(images/right_box4_top.png) left top no-repeat;
			margin-top: 0px;
		}

		.box288_top_custom {
			width: 278px;
			height: 40px;
			float: left;
			color: #000000;
			background: #cbcbcb;
		}

		._box288QM {
			width: 280px;
		}

		._box288_top {
		}

		._box288_top_custom {
			height: 40px;
			float: left;
			Width: 100%;
			color: #000000;
			background: #eeeeee;
			border-radius: 6px 6px 0 0;
		}

		._box2880_mid {
		}

		._box2880_mid_custom {
			background-color: rgba(255, 255, 255, 1);
		}

		.box288_mid {
			box-shadow: 0 0 5px #333333;
			border-radius: 5px;
			margin-top: 5px;
			margin-left: 5px;
			float: left;
			color: #282828;
			background-color: rgba(255, 255, 255, 1);
		}

		.box288_mid_custom {
			box-shadow: 0 0 5px #333333;
			border-radius: 5px;
			margin-top: 5px;
			margin-left: 5px;
			float: left;
			color: #282828;
			background-color: rgba(255, 255, 255, 1);
		}

		.box2880_mid {
			width: 258px;
			height: auto;
			float: left;
			color: #282828;
			background: url(images/right_box4_mid.png) left top repeat-y;
			padding: 0 15px 0px 15px;
		}

		.box2880_mid_custom {
			width: 228px;
			height: auto;
			float: left;
			padding: 5px 25px;
			color: #282828;
			background: rgba(255, 255, 255, 1);
		}

		.box269_mid {
			width: 258px;
			height: auto;
			float: left;
			background: url(images/right_box4_mid.png) left top repeat-y;
			padding: 0 15px 0px 15px;
		}

		.zoom22 {
			width: 258px;
			height: auto;
			float: left;
			text-align: center;
		}

		.search_right {
			background: url(images/search.png) 0 0 no-repeat;
			width: 278px;
			height: 111px;
			display: block;
			margin: 5px 5px 5px 5px
		}

		.Demande22 {
			width: 278px;
			height: auto;
			float: left;
			text-align: center;
			font-size: 14px;
			color: #9a0101;
			line-height: 26px;
			margin-top: 67px;
		}

		.Demande22 a {
			text-align: center;
			font-size: 14px;
			color: #9a0101;
			line-height: 20px;
			text-decoration: none;
		}

		.Demande22 a:hover {
			text-align: center;
			font-size: 14px;
			color: #9a0101;
			text-decoration: underline;
		}

		.Demande22 span a {
			text-align: center;
			font-size: 14px;
			color: #292929;
			line-height: 20px;
			text-decoration: none;
		}

		.Demande22 span a:hover {
			text-align: center;
			font-size: 14px;
			color: #292929;
			text-decoration: underline;
		}

		.box288_footer {
			width: 288px;
			height: 14px;
			float: left;
			background: url(images/right_box4_footer.png) left top no-repeat;
		}

		.box288_footer_qs {
			width: 288px;
			height: 11px;
			float: left;
			background: url(images/right_box4_footer.png) left top no-repeat;
		}

		.box288_footer_qs {
			width: 288px;
			height: 11px;
			float: left;
			background: url(images/right_box4_footer.png) left top no-repeat;
		}

		.box288_footer55 {
			width: 280px;
			height: 50px;
			float: left;
			color: #2d2d2d;
			background-color: #CBCBCB;
			border-radius: 0 0 6px 6px;
		}

		.box288_footer55_custom {
			width: 280px;
			height: 35px;
			padding-top: 5px;
			float: left;
			color: #444444;
			background-color: #eeeeee;
			border-radius: 0 0 6px 6px;
		}

		.p a {
			text-decoration: none;
		}

		.gap10 {
			width: 230px;
			height: 10px;
			float: left;
		}

		.page_name2 {
			width: 650px;
			height: auto;
			float: left; /*background:url(/images/sho.png) center bottom no-repeat; background-position:bottom;*/
			padding: 0 0 20px 0;
			line-height: 30px;
			font-size: 26px;
			color: #000000;
			font-weight: normal
		}

		.page_name3 {
			width: 100%;
			box-sizing: border-box;
			height: auto;
			float: left;
			padding: 0px 10px 10px 10px;
			line-height: 30px;
			font-size: 24px;
			color: #242424;
		}

		.page_name3 h1 {
			font-size: 24px;
			color: #242424;
			font-weight: normal
		}

		.page_name4 {
			width: 650px;
			height: auto;
			float: left;
			background: url(images/sho.png) center bottom no-repeat;
			background-position: bottom;
			padding: 0 0px 10px 21px;
			line-height: 30px;
			font-size: 18px;
			color: #014F80;
		}

		.page_name4 h2 {
			font-size: 18px;
			color: rgb(51, 51, 51);
			font-weight: normal
		}

		.page_name5 {
			width: 100%;
			height: auto;
			float: left;
			background: url(images/sho.png) center bottom no-repeat;
			background-position: bottom;
			padding: 0 0px 10px 0;
			margin-bottom: 15px;
			line-height: 30px;
			font-size: 24px;
			color: #242424;
			font-weight: normal
		}

		#searchContainerParent .page_name5:not(:first-child) {
			margin-top: 30px;
		}

		.box2_text {
			height: auto;
			width: 100%;
			float: left;
			line-height: 18px;
			font-size: 14px;
			color: #242424;
		}

		.box2_text p {
			line-height: 18px;
			font-size: 14px;
			color: #000000;
			margin-bottom: 20px;
		}

		.positiveRatingTxt p {
			font-size: 16px;
		}

		.positiveRatingTxt h3, .positiveRatingTxt h4 {
			font-weight: normal;
		}

		.positiveRatingTxt .btn-default {
			text-transform: none;
		}

		.positiveRatingTxt .btn-default {
			font-size: 20px;
		}

		.etape {
			width: auto;
			height: 46px;
			float: left;
			margin-right: 20px;
		}

		.text1 {
			width: auto;
			height: 46px;
			float: left;
			padding: 0 0px 0px 0px;
		}

		.text1 a {
			width: auto;
			height: 46px;
			float: left;
			padding: 0 0px 0px 0px;
			line-height: 46px;
			text-align: left;
			font-size: 30px;
			color: #434343;
			font-weight: bold;
			text-decoration: none;
			text-shadow: 1px 1px 1px #f3f3f3;
		}

		.text1 a:hover {
			width: auto;
			height: 46px;
			float: left;
			padding: 0 0px 0px 0px;
			line-height: 46px;
			text-align: left;
			font-size: 30px;
			color: #434343;
			font-weight: bold;
			text-decoration: none;
			text-shadow: 1px 1px 1px #f3f3f3;
		}

		.text1 a.active {
			width: auto;
			height: 46px;
			float: left;
			padding: 0 0px 0px 0px;
			line-height: 46px;
			text-align: left;
			font-size: 30px;
			color: #434343;
			font-weight: bold;
			text-decoration: none;
			text-shadow: 1px 1px 1px #f3f3f3;
		}


		.one1 {
			width: 46px;
			height: 46px;
			float: right;
			margin-left: 10px;
		}

		.one1 a {
			width: 46px;
			height: 46px;
			float: left;
			background: url(images/1_round.png) left top no-repeat;
			font-size: 36px;
			font-weight: bold;
			color: #FFFFFF;
			line-height: 46px;
			text-align: center;
			text-decoration: none;
		}

		.one1 a:hover {
			width: 46px;
			height: 46px;
			float: left;
			background: url(images/1_hover.png) left top no-repeat;
			font-size: 36px;
			color: #000000;
			line-height: 46px;
			font-weight: bold;
			text-align: center;
			text-decoration: none;
		}

		.one1 a.active {
			width: 46px;
			height: 46px;
			float: left;
			background: url(images/1_hover.png) left top no-repeat;
			font-size: 36px;
			color: #000000;
			line-height: 46px;
			font-weight: bold;
			text-align: center;
			text-decoration: none;
		}

		.selectionnez {
			width: auto;
			height: auto;
			float: left;
			padding-right: 5px;
			padding-left: 3px;
			padding-top: 4px;
			font-size: 13px;
			color: #1a1a1a;
			line-height: 22px;
			font-weight: bold;
			text-align: left;
			text-decoration: none;
		}

		.forms_box22 {
			box-sizing: border-box;
			width: 100%;
			height: auto;
			float: left;
			margin: 0 0 10px 0; /*background:#F4F4F4;*/
		}

		.with_border {
			border: 1px solid #d4d4d4;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			-khtml-border-radius: 8px;
			padding: 0 16px;
		}

		.Prenom {
			width: 279px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #242424;
			padding: 8px 0 10px 0;
		}

		.Prenom span {
			font-size: 22px;
			color: #ff0101;
		}

		.Prenom2 {
			width: 321px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #242424;
			padding: 8px 0 10px 0;
		}

		.Prenom2 span {
			font-size: 22px;
			color: #ff0101;
		}

		.Prenom3 {
			width: 279px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #242424;
			padding: 0px 0 10px 0;
		}

		.Prenom4 {
			width: 321px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #242424;
			padding: 0px 0 10px 0;
		}

		.Prenom5 {
			width: 279px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #242424;
			padding: px 0 10px 0;
		}

		.Prenom6 {
			width: 214px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #242424;
			padding: 0px 0 10px 0;
		}

		.Prenom7 {
			width: 107px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #242424;
			padding: 0px 0 10px 0;
		}

		.Prenom8 {
			width: 279px;
			height: auto;
			float: left;
			padding: px 0 10px 0;
			display: block
		}

		.Prenom9 {
			width: 214px;
			height: auto;
			float: left;
			padding: 0px 0 10px 0;
			display: block
		}

		.Prenom10 {
			width: 107px;
			height: auto;
			float: left;
			padding: 0px 0 10px 0;
			display: block
		}

		.text15 {
			width: 285px;
			font-size: 13px;
			height: auto;
			float: left;
			color: #242424;
			padding: 0px 0 3px 0;
		}

		.text16 {
			width: 172px;
			font-size: 13px;
			height: auto;
			float: left;
			color: #242424;
			padding: 0px 0 3px 0;
		}

		.text17 {
			width: 112px;
			font-size: 13px;
			height: auto;
			float: left;
			color: #242424;
			padding: 0px 0 3px 0;
		}

		.text18 {
			width: 285px;
			font-size: 13px;
			height: auto;
			float: left;
			color: #242424;
			padding: 8px 0 3px 0;
		}

		.text15 span {
			font-size: 22px;
			color: #ff0101;
		}

		.button5 {
			width: 285px;
			margin-bottom: 30px;
			margin-top: 70px;
			float: left;
			margin-right: 5px;
			text-align: right;
		}

		.box_date {
			width: 167px;
			margin-bottom: 10px;
			float: left;
			padding-top: 1px;
			margin-right: 5px;
		}

		.box_date2 {
			width: 107px;
			margin-bottom: 10px;
			float: left;
			margin-right: 5px;
			padding-top: 0px;
		}

		.box_date3 {
			width: 80px;
			margin-bottom: 10px;
			float: left;
			margin-right: 5px;
		}

		span.astk {
			color: #FF0101;
			font-size: 11px;
			float: left;
			padding-right: 3px;
		}

		.box61 {
			width: 280px;
			height: auto;
			float: left;
			margin-top: 10px;
			display: block;
			clear: both;
		}

		.box6166 {
			width: 280px;
			height: auto;
			float: left;
			margin-top: 10px;
		}

		.Politique {
			width: auto;
			margin-bottom: 10px;
			float: left;
			margin-right: 5px;
			padding: 0 2px 0px 2px;
			font-size: 14px;
			color: #0d59af;
			line-height: 22px;
		}

		.Politique a {
			font-size: 14px;
			color: #0d59af;
			line-height: 24px;
			text-decoration: none;
			border-bottom: 2px solid #6b91bd;
			text-decoration: none;
			background: url(images/line3.png) bottom left repeat-x;
			background-position: bottom;
		}

		.Politique a:hover {
			font-size: 14px;
			color: #242424;
			line-height: 24px;
			background: url(images/line4.gif) bottom left repeat-x;
			background-position: bottom;
			text-decoration: none;
			border-bottom: 2px solid #242424;
		}

		.text155 {
			width: 285px;
			height: auto;
			float: left;
			font-size: 13px;
			color: #242424;
			padding: 0px 0 3px 0;
		}

		.text155chk {
			height: auto;
			float: left;
			font-size: 13px;
			color: #242424;
			padding: 0px 10px 10px 15px;
			text-align: left;
		}

		.Veuillez {
			width: 617px;
			height: auto;
			float: left; /*background:url(/images/shadw.png) center bottom no-repeat;*/
			padding: 17px 0;
			font-size: 22px;
			color: #000000;
			font-weight: normal
		}

		.Veuillez span {
			text-align: left;
			font-size: 14px;
			color: #242424;
			line-height: 22px;
		}

		.Veuillez span a {
			font-size: 14px;
			color: #242424;
			float: right;
			line-height: 22px;
			text-decoration: none;
			border-bottom: 2px solid #242424;
			display: block
		}

		.Veuillez span a:hover {
			font-size: 14px;
			color: #00446f;
			float: right;
			line-height: 22px;
			text-decoration: none;
			border-bottom: 2px solid #00446f;
			display: block;
		}

		.Hypotheque {
			width: 195px;
			height: auto;
			float: left;
			font-size: 13px;
			color: #242424;
			padding: 0;
			line-height: 50px;
		}

		.Hypotheque22 {
			width: 224px;
			margin-bottom: 10px;
			float: left;
		}

		.Hypotheque33 {
			width: 50px;
			height: auto;
			float: left;
			font-size: 13px;
			color: #242424;
			padding: 0px 0 10px 0;
			line-height: 35px;
		}

		.civique {
			width: 130px;
			height: auto;
			float: left;
			font-size: 13px;
			color: #242424;
			padding: 0px 0 3px 0;
		}

		.Rue {
			width: 290px;
			height: auto;
			float: left;
			font-size: 13px;
			color: #242424;
			padding: 0px 0 3px 0;
		}

		.App {
			width: 180px;
			height: auto;
			float: left;
			font-size: 13px;
			color: #242424;
			padding: 0px 0 3px 0;
		}

		.forms100 {
			width: 130px;
			margin-bottom: 10px;
			float: left;
		}

		.forms101 {
			width: 290px;
			margin-bottom: 10px;
			float: left;
		}

		.forms102 {
			width: 180px;
			margin-bottom: 10px;
			float: left;
		}

		.Ville {
			width: 270px;
			height: auto;
			float: left;
			font-size: 13px;
			color: #242424;
			padding: 0px 0 13px 0;
		}

		.Province {
			width: 150px;
			height: auto;
			float: left;
			font-size: 13px;
			color: #242424;
			padding: 0px 0 13px 0;
		}

		.Code {
			width: 160px;
			height: auto;
			float: left;
			font-size: 13px;
			color: #242424;
			padding: 0px 0 13px 0;
		}

		.forms103 {
			width: 100%;
			margin-top: 0px;
		}

		.forms104 {
			width: 100%;
			margin-top: 0px;
		}

		.forms105 {
			width: 100%;
			margin-top: 0px;
		}

		.forms106 {
			width: 100%;
			margin-bottom: 10px;
			float: left
		}

		.Type {
			width: 200px;
			height: auto;
			float: left;
			font-size: 13px;
			color: #242424;
			padding: 0px 0 3px 0;
		}

		.box600 {
			width: 600px;
			height: auto;
			float: left;
			padding-left: 0px;
			padding-bottom: 20px;
			margin-right: 0px;
		}

		.Demande55 {
			margin: 15px 0;
			background: url(images/d.png) 10px top no-repeat;
			padding: 0 0 0 62px;
			line-height: 40px;
			font-size: 18px;
			color: #191919;
			font-weight: bold;
		}

		.Demande66 {
			margin: 15px 0;
			background: url(images/cal2.png) 10px top no-repeat;
			padding: 0 0 0 62px;
			line-height: 20px;
			font-size: 18px;
			color: #191919;
			font-weight: bold;
		}

		.Demande77 {
			margin: 15px 0;
			background: url(images/m.png) 10px top no-repeat;
			padding: 0 0 0 62px;
			line-height: 40px;
			font-size: 18px;
			color: #191919;
			font-weight: bold;
		}

		.Demande88 {
			margin: 15px 0;
			background: url(images/f.png) 10px top no-repeat;
			padding: 0 0 0 62px;
			line-height: 20px;
			font-size: 18px;
			color: #191919;
			font-weight: bold;
		}

		.Demande887 {
			margin: 15px 0;
			background: url(images/f.png) 10px top no-repeat;
			padding: 0 0 0 62px;
			line-height: 20px;
			font-size: 18px;
			color: #191919;
			font-weight: bold;
		}

		.box2_text2 {
			width: 648px;
			height: auto;
			float: left;
			padding: 10px 0px 15px 23px;
			line-height: 18px;
			font-size: 14px;
			color: #242424;
		}

		.box_brand {
			width: 648px;
			float: left;
			padding: 20px 0px 15px 0px;
			line-height: 18px;
			font-size: 14px;
			color: #242424; /*margin-left:209px;*/
		}

		.box2_text3 {
			width: 661px;
			height: auto;
			float: left;
			padding: 0 0px 10px 10px;
			margin-top: 15px;
			line-height: 18px;
			font-size: 14px;
			color: #242424;
		}

		.car_box {
			width: 208px;
			height: 130px;
			float: left;
			margin: 0 8px 0 0;
			padding: 0;
			border: 0;
		}

		.car_images {
			width: 208px;
			height: auto;
			float: left;
			margin: 0;
			padding: 0;
			border: 0;
			text-align: center;
		}

		.car_text {
			width: 208px;
			height: auto;
			float: left;
			line-height: 10px;
			font-size: 13px;
			font-weight: bold;
			color: #000000;
			text-align: center
		}

		.car_text a {
			text-decoration: none;
			color: #000000;
			line-height: 1.1;
		}

		.car_text a:hover {
			text-decoration: underline;
			color: #000000
		}

		.car_box2 {
			/*width:208px;*/
			height: auto;
			float: left;
			margin: 0 10px 10px 0;
			overflow: hidden;
			/*border:1px solid #7E7E7E;*/
			border-radius: 5px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			background-color: #FFF;
			-moz-box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.2);
			-webkit-box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.2);
			box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.2);
		}

		.car_box2_taxt {
			height: auto;
			padding-bottom: 5px;
			font-size: 16px;
			color: #303030;
			text-align: left;
			line-height: 21px;
		}

		.pic_box2 {
			border: 1px solid #AAA;
			background: #FFFFFF;
			border-radius: 3px;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
		}

		.pic_box2 img {
			width: 100%;
		}

		.print {
			width: 192px;
			height: auto;
			margin: 0;
			padding-top: 7px;
		}

		.print a {
			background: url(images/print.png) 10px top no-repeat;
			font-size: 14px;
			color: #303030;
			padding-left: 35px;
			text-decoration: none;
		}

		.print a:hover {
			background: url(images/print_hover.png) 10px top no-repeat;
			font-size: 14px;
			color: #004a78;
			padding-left: 35px;
			text-decoration: none;
		}

		.page_name_con {
			width: 840px;
			height: auto;
			float: left;
			padding: 20px 21px 10px 20px;
		}

		.home2 {
			width: 230px;
			height: auto;
			margin-left: 20px;
			float: left;
			font-size: 16px;
			color: #373737;
			line-height: 24px;
			text-decoration: none;
		}

		.home3 {
			width: 510px;
			height: auto;
			margin-left: 10px;
			float: left;
			font-size: 16px;
			color: #373737;
			line-height: 24px;
			text-decoration: none;
		}

		.Faites {
			width: 840px;
			height: auto;
			float: left;
			font-size: 16px;
			color: #0d0d0d;
			line-height: 20px;
			text-decoration: none;
		}

		.Faites span {
			font-size: 14px;
			color: #555555;
			font-style: italic;
			line-height: 30px;
			text-decoration: none;
		}

		.Faites span strong {
			font-size: 18px;
			color: #ff0000;
			font-style: italic;
			line-height: 30px;
			text-decoration: none;
		}

		.text20 {
			width: 310px;
			height: 32px;
			float: left;
			margin-right: 10px;
			margin-bottom: 10px;
			line-height: 32px;
			text-align: left;
			font-size: 14px;
			color: #0d0d0d;
			text-decoration: none;
		}

		.text20 span {
			color: #FF0000;
		}

		.input25 {
			width: 310px;
			height: auto;
			float: left;
			margin-bottom: 10px;
		}

		.veux {
			width: 600px;
			float: left;
			margin-bottom: 10px;
			padding-top: 5px;
			line-height: 17px;
			text-align: left;
			font-size: 14px;
			color: #0d0d0d;
			text-decoration: none;
			margin-bottom: 10px;
		}

		.watermark {
			font-size: 13px;
			line-height: 15px;
			color: #404040;
		}

		.Nos {
			width: 265px;
			height: auto;
			float: left;
			background: #000000;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
			-khtml-border-radius: 5px;
			padding: 15px 0 15px 15px;
			margin: 5px 0;
			font-size: 24px;
			color: #FFFFFF;
		}

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

		.button_1, .button_2, .button_3 {
			margin-bottom: 10px;
		}

		.button_1 a, .button_2 a, .button_3 a {
			display: block;
			width: 249px;
			height: 38px;

			border-radius: 3px;
			font-size: 18px;
			text-decoration: none;
			text-align: center;
			line-height: 38px;
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

		.button_1 a:hover, .button_2 a:hover {
			background: #b39b6d;
			color: #ffffff;
			border: 1px solid #ffffff;
		}


		.button_3 a {
			background: #000;
			color: #FFF;
			border: 1px solid #000;
		}

		.button_3 a:hover {
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

		.fbConnectBtn .fa-facebook {
			color: #305898;
		}

		a.facebookConnectBtn {
			color: #fff;
			display: inline-block;
			text-decoration: none;
			font-family: inherit;
		}

		.button_videos_fr a, .button_videos_en a {
			width: 249px;
			height: 38px;
			display: block;
		}

		.button_videos_fr a {
			background: url("images/videos-button_fr.png") no-repeat 0px 0px transparent;
		}

		.button_videos_fr a:hover {
			background: url("images/videos-button-hover_fr.png") no-repeat 0px 0px transparent;
		}

		.button_videos_en a {
			background: url("images/videos-button_en.png") no-repeat 0px 0px transparent;
		}

		.button_videos_en a:hover {
			background: url("images/videos-button-hover_en.png") no-repeat 0px 0px transparent;
		}

		.button_video_fr a, .button_video_en a {
			width: 193px;
			height: 51px;
			display: block;
		}

		.button_video_fr a {
			background: url("images/video-button_fr.png") no-repeat 0px 0px transparent;
		}

		.button_video_fr a:hover {
			background: url("images/video-button-hover_fr.png") no-repeat 0px 0px transparent;
		}

		.button_video_en a {
			background: url("images/video-button_en.png") no-repeat 0px 0px transparent;
		}

		.button_video_en a:hover {
			background: url("images/video-button-hover_en.png") no-repeat 0px 0px transparent;
		}

		.button_under {
			width: 249px;
			padding: 0px;
			margin: 10px 0px;
		}

		.button_under a {
			width: 100%;
			min-height: 38px;

			border-radius: 3px;
			font-size: 18px;
			text-decoration: none;
			text-align: center;
			line-height: 38px;
			text-shadow: none;
			display: block
		}

		.button_under a:hover {
			border-radius: 3px;
			font-size: 18px;

			text-decoration: none;
			text-align: center;
			line-height: 38px;
			text-shadow: 1px 1px 1px #001e31;
		}

		/*.button_under.promo a{background-image: url(/images/button_promotion.png); color:#FFF; text-shadow: 1px 1px 1px #000; width: 237px; margin-left: 5px;
}*/
		.button_under.promo a {
			background-color: #e80d0d;
			background-image: none;
			color: #FFF;
			width: 237px;
			margin-left: 5px;
		}

		.button_under.promo3 a {
			background-color: #ff0000;
			background-image: none;
			color: #FFF;
			width: 237px;
			margin-left: 5px;
		}

		.button_under.promo a:hover, .button_under.promo2 a:hover, .button_under.promo3 a:hover {
			background-image: url(images/button_1hover.png)
		}

		.button_4 {
			width: 249px;
			height: 57px;
			float: left;
			padding: 0px;
			margin-bottom: 10px;
		}

		.button_4 a {
			width: 249px;
			height: 50px;
			padding-top: 7px;
			background: url(images/button_4.png) left top repeat-x;
			border-radius: 3px;
			font-size: 18px;
			color: #FFFFFF;
			text-decoration: none;
			text-align: center;
			line-height: 22px;
			text-shadow: 1px 1px 1px #001e31;
			display: block
		}

		.button_4 a:hover {
			width: 249px;
			height: 50px;
			background: url(images/button_4hover.png) left top repeat-x;
			border-radius: 3px;
			font-size: 18px;
			color: #FFFFFF;
			text-decoration: none;
			text-align: center;
			line-height: 22px;
			text-shadow: 1px 1px 1px #001e31;
		}

		.checkbox152 {
			width: auto;
			height: 18px;
			float: left;
			margin: 0;
			padding: 0 6px 0 0;
			margin-top: 0;
			border: 0;
			top: 0;
		}

		.Base22 {
			width: auto;
			height: 18px;
			float: left;
			margin-right: 6px;
			padding: 6px 6px 0 0;
			margin-top: 0;
			border: 0;
			top: 0;
			font-size: 14px;
			color: #000000;
			text-decoration: none;
		}

		.box940_line {
			width: 940px;
			height: auto;
			float: left;
			background: url(images/line25.png) left bottom repeat-x;
			background-position: bottom;
			bottom: 0;
		}

		.white_box {
			width: 940px;
			height: auto;
			float: left;
			background: #FFFFFF;
			overflow: hidden;
			-moz-border-radius-topleft: 6px;
			-moz-border-radius-topright: 6px;
			-moz-border-radius-bottomright: 0px;
			-moz-border-radius-bottomleft: 0;

			-webkit-border-top-left-radius: 6px;
			-webkit-border-top-right-radius: 6px;
			-webkit-border-bottom-right-radius: 0px;
			-webkit-border-bottom-left-radius: 0;

			border-top-left-radius: 6px;
			border-top-right-radius: 6px;
			border-bottom-left-radius: 0;
			border-bottom-right-radius: 0;
		}


		.box100 {
			width: 220px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: left;
			padding: 13px 0 15px 10px;
		}

		.box101 {
			width: 177px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
			padding: 13px 0 15px;
			background: url("images/line25.png") repeat-x scroll center bottom #D9D9D9;
		}

		.box102 {
			width: 177px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
			padding: 13px 0 15px;
		}

		.box103 {
			width: 177px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
			padding: 13px 0 15px;
			background: url("images/line25.png") repeat-x scroll center bottom #D9D9D9;
		}

		.box104 {
			width: 178px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
			padding: 13px 0 15px;
		}

		.boxEven {
			width: 177px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
			padding: 13px 0px 0px 0px;
		}

		.boxOdd {
			width: 177px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
			padding: 13px 0px 0px 0px;
			background: url("images/line25.png") repeat-x scroll center bottom #D9D9D9;
		}

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

		.box940_main {
			width: 940px;
			height: auto;
			float: left;
			padding: 0px 0 15px 0px;
			background: url(images/box200_bg.png) left top repeat;
			-moz-border-radius: 6px;
			-webkit-border-radius: 6px;
			border-radius: 6px;
			-khtml-border-radius: 6px;
		}

		.white_box_text2 {
			width: 230px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
		}

		.white_box_text3 {
			background-color: #F6F6F6;
			border-left: 1px solid #C9C9C9;
			border-right: 1px solid #C9C9C9;
			padding: 10px 0px;
			width: 175px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
		}

		.white_box_text4 {
			padding: 10px 0px;
			width: 177px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
		}

		.white_box_text5 {
			background-color: #F6F6F6;
			border-left: 1px solid #C9C9C9;
			border-right: 1px solid #C9C9C9;
			padding: 10px 0px;
			width: 175px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
		}

		.white_box_text6 {
			padding: 10px 0px;
			width: 178px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
		}

		.white_box_blank {
			width: 178px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
		}

		.white_box_textOdd {
			padding: 10px 0px;
			width: 177px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
		}

		.white_box_textEven {
			background-color: #F6F6F6;
			border-left: 1px solid #C9C9C9;
			border-right: 1px solid #C9C9C9;
			padding: 10px 0px;
			width: 175px;
			height: auto;
			float: left;
			font-size: 14px;
			color: #0f1a1e;
			text-decoration: none;
			text-align: center;
		}


		.box_title {
			width: 930px;
			height: auto;
			float: left;
			padding: 30px 0px 5px 10px;
			font-size: 15px;
			color: #0f1a1e;
			text-decoration: none;
			text-transform: uppercase;
		}


		.custom_22 {
			width: 241px;
			height: 121px;
			float: left;
			padding: 0px;
			margin: 0 8px 8px 0;
			background: #ebebeb;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			border-radius: 8px;
			-khtml-border-radius: 8px;
			cursor: pointer;
		}

		.custom_222 {
			width: 241px;
			height: 121px;
			float: left;
			padding: 0px;
			margin: 0 8px 8px 0;
			background: #ffffff;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			border-radius: 8px;
			-khtml-border-radius: 8px;
			cursor: pointer;
		}

		.toyota_camry {
			width: 430px;
			height: 222px;
			float: left;
			padding: 20px 0px 0px 10px;
			margin-right: 8px;
			background: #ebebeb;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			border-radius: 8px;
			-khtml-border-radius: 8px;
		}

		.toyota_camry h1 {
			font-size: 30px;
			color: #303030;
			text-decoration: none;
			padding-bottom: 5px;
		}

		.toyota_camry p {
			font-size: 14px;
			color: #5a5a5a;
			text-decoration: none;
			padding-bottom: 8px;
		}

		.box2_details_text25 {
			width: 100%;
			height: auto;
			float: left;
			margin: 15px auto;
			text-align: center;
			font-size: 30px;
			color: #FFFFFF;
			font-weight: bold;
			text-shadow: 1px 1px 4px #828282;
		}

		.box2_details_text25 span {
			text-align: center;
			font-size: 18px;
			color: #fff;
			font-weight: bold;
		}

		.box15 {
			cursor: pointer;
			width: auto;
			height: 20px;
			float: left;
			margin: 0px;
			background: url(images/menu10_bg.png) left top repeat-x;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			padding: 4px 2px;
			float: left;
			font-size: 14px;
			color: #FFF;
			text-decoration: none;
			margin-right: 1px;
		}

		.box15 h2 {
			cursor: pointer;
			float: left;
			padding-right: 5px;
			padding-top: 0px;
		}

		.box15 h2 a {
			cursor: pointer;
			float: left;
			font-size: 14px;
			color: #FFF;
			text-decoration: none;
			background: url(images/icon2.png) left top no-repeat;
			font-weight: normal;
			padding-left: 40px;
			padding-right: 0px;
			line-height: 20px;
		}

		.box15 h2 a:hover {
			cursor: pointer;
			float: left;
			font-size: 14px;
			color: #FFFFFF;
			text-decoration: none;
			background: url(images/icon2.png) left top no-repeat;
			font-weight: normal;
			line-height: 20px;
		}


		.box16 {
			width: auto;
			height: 20px;
			float: left;
			margin: 0px;
			background: url(images/menu10_bg.png) left top repeat-x;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			padding: 4px 4px 4px 8px;
			float: left;
			font-size: 14px;
			color: #FFF;
			text-decoration: none;
			margin-right: 1px;
		}

		.box16 h2 {
			float: left;
			padding-right: 5px;
			padding-top: 0px;
		}

		.box16 h2 a {
			float: left;
			font-size: 14px;
			color: #FFF;
			text-decoration: none;
			background: url(images/icon3.png) left top no-repeat;
			font-weight: normal;
			padding-left: 20px;
			padding-right: 0px;
			line-height: 20px;
		}

		.box16 h2 a:hover {
			float: left;
			font-size: 14px;
			color: rgb(255, 255, 255);
			text-decoration: none;
			background: url(images/icon3.png) left top no-repeat;
			font-weight: normal;
			line-height: 20px;
		}

		.box17 {
			width: auto;
			height: 20px;
			float: left;
			margin: 0px;
			background: url(images/menu10_bg.png) left top repeat-x;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			padding: 4px 4px 4px 8px;
			float: left;
			font-size: 14px;
			color: #FFF;
			text-decoration: none;
			margin-right: 1px;
		}

		.box17 h2 {
			float: left;
			padding-right: 5px;
			padding-top: 0px;
		}

		.box17 h2 a {
			float: left;
			font-size: 14px;
			color: #FFF;
			text-decoration: none;
			background: url(images/icon4.png) left top no-repeat;
			font-weight: normal;
			padding-left: 25px;
			padding-right: 0px;
			line-height: 20px;
		}

		.box17 h2 a:hover {
			float: left;
			font-size: 14px;
			color: #00589d;
			text-decoration: none;
			background: url(images/icon4.png) left top no-repeat;
			font-weight: normal;
			line-height: 20px;
		}

		.box18 {
			width: auto;
			height: 20px;
			float: left;
			margin: 0px;
			background: url(images/menu10_bg.png) left top repeat-x;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			padding: 4px 4px 4px 8px;
			float: left;
			font-size: 14px;
			color: #FFF;
			text-decoration: none;
			margin-right: 1px;
		}

		.box18 h2 {
			float: left;
			padding-right: 5px;
			padding-top: 0px;
		}

		.box18 h2 a {
			float: left;
			font-size: 14px;
			color: #FFF;
			text-decoration: none;
			background: url(images/icon5.png) left top no-repeat;
			font-weight: normal;
			padding-left: 25px;
			padding-right: 5px;
			line-height: 20px;
		}

		.box18 h2 a:hover {
			float: left;
			font-size: 14px;
			color: #00589d;
			text-decoration: none;
			background: url(images/icon5.png) left top no-repeat;
			font-weight: normal;
			line-height: 20px;
		}

		.box19 {
			width: auto;
			height: 20px;
			float: left;
			margin: 0px;
			background: url(images/menu10_bg.png) left top repeat-x;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			padding: 4px;
			padding-right: 3px;
			float: left;
			font-size: 14px;
			color: #FFF;
			text-decoration: none;
			margin-right: 1px;
		}

		.box19 h2 {
			float: left;
			padding-right: 5px;
			padding-top: 0px;
		}

		.box19 h2 a {
			float: left;
			font-size: 14px;
			color: #FFF;
			text-decoration: none;
			background: url(images/icon6.png) left top no-repeat;
			font-weight: normal;
			padding-left: 25px;
			line-height: 20px;
		}

		.box19 h2 a:hover {
			float: left;
			font-size: 14px;
			color: #00589d;
			text-decoration: none;
			background: url(images/icon6.png) left top no-repeat;
			font-weight: normal;
			line-height: 20px;
		}

		.box1114 {
			cursor: pointer;
			width: auto;
			height: 20px;
			float: left;
			margin: 0px;
			background: url(images/button_1.png) left top repeat-x;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			padding: 4px;
			float: left;
			font-size: 14px;
			color: #FFF;
			text-decoration: none;
			margin-right: 1px;
		}

		.box1114 h2 {
			cursor: pointer;
			float: left;
			padding-right: 5px;
			padding-top: 0px;
		}

		.box1114 h2 a {
			cursor: pointer;
			float: left;
			font-size: 14px;
			color: #FFF;
			text-decoration: none;
			background: url(images/icon2.png) left top no-repeat;
			font-weight: normal;
			padding-left: 40px;
			padding-right: 10px;
			line-height: 20px;
		}

		.box1114 h2 a:hover {
			cursor: pointer;
			float: left;
			font-size: 14px;
			color: #00589d;
			text-decoration: none;
			background: url(images/icon2.png) left top no-repeat;
			font-weight: normal;
			line-height: 20px;
		}


		.Specifications {
			width: 651px;
			height: auto;
			float: left;
			margin: 0px;
			padding: 10px 0;
			font-size: 24px;
			color: #252525;
			text-decoration: none;
			font-weight: normal;
			margin-top: 5px;
		}

		.Morbi2 {
			width: 631px;
			height: auto;
			float: left;
			padding: 10px;
			margin: 0px;
			background: #EFEFEF;
			-moz-border-radius: 3px;
			font-weight: normal;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			font-size: 14px;
			color: #5a5a5a;
			text-decoration: none;
		}

		.Morbi2 p {
			font-size: 14px;
			color: #5a5a5a;
			text-decoration: none;
			padding-bottom: 8px;
		}

		.box2889_mid {
			width: 278px;
			height: auto;
			float: left;
			background: url(images/right_box4_mid.png) left top repeat-y;
			padding: 0 5px 20px 5px;
		}

		.Morbi22 {
			width: 651px;
			height: auto;
			float: left;
			padding: 0px;
			margin: 0px;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			font-size: 14px;
			color: #5a5a5a;
			text-decoration: none;
		}

		.box2889_mid h1 {
			height: auto;
			float: left;
			padding: 10px 10px 20px 10px;
			font-size: 24px;
			color: #282828;
			text-decoration: none;
			font-weight: normal;
			text-align: left;
			text-transform: none;
			line-height: 24px
		}

		._box2889_mid h1 {
			height: auto;
			float: left;
			padding: 10px 10px 20px 10px;
			font-size: 24px;
			color: #282828;
			text-decoration: none;
			font-weight: normal;
			text-align: left;
			text-transform: none;
			line-height: 24px
		}

		.box2889_mid h2 {
			height: auto;
			float: left;
			padding: 4px 10px 20px 15px;
			font-size: 23px;
			color: #282828;
			text-decoration: none;
			font-weight: normal;
			text-align: left;
			text-transform: none;
			line-height: 23px
		}

		#similarTitle {
			padding: 4px 10px 9px 15px;
			font-size: 23px;
			font-weight: normal;
		}


		.tabe5 {
			width: 631px;
			height: auto;
			float: left;
		}

		.tabe5 ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			text-transform: none;
		}

		.tabe5 ul li {
			list-style-type: none;
			margin: 0;
			display: block;
		}

		.tabe5 ul li span {
			cursor: pointer;
			list-style-type: none;
			margin: 0;
			display: block;
			font-size: 14px;
			color: #323232;
			text-decoration: none;
			padding: 7px 15px 7px 15px;
			margin-right: 2px;
			font-weight: normal;
			line-height: 18px;
			text-transform: none;
			text-align: center;
			text-transform: none;
			background: url(images/tab_bg.png) left top repeat-x;
			float: left;
			-moz-border-radius-topleft: 6px;
			-moz-border-radius-topright: 6px;
			-moz-border-radius-bottomright: 0px;
			-moz-border-radius-bottomleft: 0;

			-webkit-border-top-left-radius: 6px;
			-webkit-border-top-right-radius: 6px;
			-webkit-border-bottom-right-radius: 0px;
			-webkit-border-bottom-left-radius: 0;

			border-top-left-radius: 6px;
			border-top-right-radius: 6px;
			border-bottom-left-radius: 0;
			border-bottom-right-radius: 0;
		}

		.tabe5 ul li span:hover {
			list-style-type: none;
			display: block;
			font-size: 14px;
			color: #7b0000;
			text-decoration: none;
			padding: 7px 15px 7px 15px;
			margin-right: 2px;
			font-weight: normal;
			line-height: 18px;
			text-transform: none;
			text-align: center;
			text-transform: none;
			background: #ebebeb;
			float: left;
			-moz-border-radius-topleft: 6px;
			-moz-border-radius-topright: 6px;
			-moz-border-radius-bottomright: 0px;
			-moz-border-radius-bottomleft: 0;

			-webkit-border-top-left-radius: 6px;
			-webkit-border-top-right-radius: 6px;
			-webkit-border-bottom-right-radius: 0px;
			-webkit-border-bottom-left-radius: 0;

			border-top-left-radius: 6px;
			border-top-right-radius: 6px;
			border-bottom-left-radius: 0;
			border-bottom-right-radius: 0;
		}


		.tabe5 ul li span.active {
			cursor: default;
			list-style-type: none;
			display: block;
			font-size: 14px;
			color: #7b0000;
			text-decoration: none;
			padding: 7px 15px 7px 15px;
			margin-right: 2px;
			font-weight: normal;
			line-height: 18px;
			text-transform: none;
			text-align: center;
			text-transform: none;
			background: #ebebeb;
			float: left;
			-moz-border-radius-topleft: 6px;
			-moz-border-radius-topright: 6px;
			-moz-border-radius-bottomright: 0px;
			-moz-border-radius-bottomleft: 0;

			-webkit-border-top-left-radius: 6px;
			-webkit-border-top-right-radius: 6px;
			-webkit-border-bottom-right-radius: 0px;
			-webkit-border-bottom-left-radius: 0;

			border-top-left-radius: 6px;
			border-top-right-radius: 6px;
			border-bottom-left-radius: 0;
			border-bottom-right-radius: 0;
		}

		.tab_details2 {
			width: 631px;
			padding: 10px;
			height: auto;
			float: left;
			background: #EFEFEF;
			-moz-border-radius-topleft: 0px;
			-moz-border-radius-topright: 0px;
			-moz-border-radius-bottomright: 6px;
			-moz-border-radius-bottomleft: 6px;

			-webkit-border-top-left-radius: 0px;
			-webkit-border-top-right-radius: 0px;
			-webkit-border-bottom-right-radius: 6px;
			-webkit-border-bottom-left-radius: 6px;

			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 6px;
			border-bottom-right-radius: 6px;
		}

		.box25 {
			width: 487px;
			height: auto;
			float: left;
			margin: 0px;
			background: #EFEFEF;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			margin: 0 13px 0 0;
			padding: 20px 0 20px 20px;
		}

		.box26 {
			width: 243px;
			height: auto;
			float: left;
		}

		.box26 ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			text-transform: none;
		}

		.box26 ul li {
			list-style-type: none;
			margin: 0;
			display: block;
		}

		.box26 ul li span {
			list-style-type: none;
			margin: 0;
			display: block;
			font-size: 14px;
			color: #323232;
			text-decoration: none;
			padding: 0 7px 7px 0px;
			font-weight: normal;
			line-height: 18px;
			text-transform: none;
			text-align: left;
		}

		.box26 ul li a {
			list-style-type: none;
			margin: 0;
			display: block;
			font-size: 14px;
			color: #323232;
			text-decoration: none;
			padding: 0 7px 7px 22px;
			font-weight: normal;
			line-height: 18px;
			text-transform: none;
			text-align: left;
		}

		.box26 ul li a:hover {
			list-style-type: none;
			margin: 0;
			display: block;
			font-size: 14px;
			color: #7b0000;
			padding: 0 7px 7px 22px;
			font-weight: normal;
			line-height: 18px;
			text-transform: none;
			text-align: left;
			text-transform: none;
		}

		.box26 ul li a.active {
			list-style-type: none;
			margin: 0;
			display: block;
			font-size: 14px;
			color: #7b0000;
			text-decoration: none;
			padding: 0 7px 7px 22px;
			font-weight: normal;
			line-height: 18px;
			text-align: left;
			text-transform: none;
		}

		.box27 {
			width: 131px;
			height: 28px;
			float: left;
			margin-bottom: 8px;
		}

		.box33 {
			width: 631px;
			height: auto;
			float: left;
		}

		.box33 ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			text-transform: none;
		}

		.box33 ul li {
			list-style-type: none;
			margin: 0;
			display: block;
		}

		.box33 ul li a {
			list-style-type: none;
			margin: 0;
			display: block;
			font-size: 14px;
			color: #323232;
			text-decoration: none;
			padding: 0 7px 7px 0px;
			margin-right: 2px;
			font-weight: bold;
			line-height: 18px;
			text-transform: none;
			text-align: left;
			text-transform: none;
		}

		.box33 ul li span {
			list-style-type: none;
			margin: 0;
			display: block;
			font-size: 14px;
			color: #323232;
			text-decoration: none;
			padding: 0 7px 7px 0px;
			margin-right: 2px;
			font-weight: bold;
			line-height: 18px;
			text-transform: none;
			text-align: left;
			text-transform: none;
		}

		.box33 p {
			font-size: 14px;
			color: #323232;
			text-decoration: none;
			padding: 0 0px 7px 0px;
			font-weight: bold;
			line-height: 18px;
			text-transform: none;
			text-align: left;
		}

		.box33 ul li a:hover {
			list-style-type: none;
			margin: 0;
			display: block;
			font-size: 14px;
			color: #7b0000;
			text-decoration: none;
			padding: 0 7px 7px 22px;
			margin-right: 2px;
			font-weight: bold;
			line-height: 18px;
			text-transform: none;
			text-align: left;
			text-transform: none;
			background: url(images/arrow8.png) left top no-repeat;
		}

		.Moteur {
			width: 280px;
			height: auto;
			float: left;
			margin-bottom: 5px;
		}

		.Moteur h2 {
			white-space: normal;
			width: 135px;
			float: left;
			font-size: 12px;
			color: #202020;
		}

		.Moteur h3 {
			white-space: normal;
			width: 140px;
			float: left;
			font-size: 13px;
			font-weight: normal;
			color: #5a5a5a;
		}


		.box26 ul li span:before, .box33 ul li span:before, .Moteur h2:before {
			content: "\f138";
			font-family: 'Font Awesome 5 Pro';
			font-weight: 900;
			margin-right: 5px;
		}

		.box27 a {
			width: 131px;
			height: 28px;
			float: left;
			background: url(images/button10_bg.png) left top repeat-x;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			font-size: 14px;
			color: #FFFFFF;
			text-decoration: none;
			font-weight: normal;
			padding: 0;
			line-height: 28px;
			text-align: center;
			text-transform: none;
		}

		.box27 a:hover {
			width: 131px;
			height: 28px;
			float: left;
			background: url(images/button10_bg.png) left -32px repeat-x;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			font-size: 14px;
			color: #FFFFFF;
			text-decoration: none;
			font-weight: normal;
			text-align: center;
			text-transform: none;
			line-height: 28px;
		}


		.box28 {
			width: 127px;
			height: auto;
			float: left;
			margin: 0px;
			background: #6f6f6f url(images/liter_bg.png) left top repeat-x;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			padding: 10px 2px 10px 2px;
			margin: 0 0px 0 0;
		}

		.text44 {
			width: 127px;
			height: auto;
			float: left;
			background: url(images/liter_line.png) left bottom repeat-x;
			background-position: bottom;
			text-align: center;
			padding-bottom: 5px;
			margin-bottom: 5px;
			font-size: 14px;
			color: #FFFFFF;
			text-decoration: none;
			font-weight: normal;
			text-align: center;
			text-transform: none;
			line-height: 18px
		}

		.text_box60 {
			width: 133px;
			height: auto;
			float: left;
			padding: 0;
		}

		.text_box60 h2 {
			width: 133px;
			height: auto;
			float: left;
			padding: 0;
			font-size: 14px;
			color: #262626;
			text-decoration: none;
			font-weight: bold;
			text-align: left;
			text-transform: none;
			line-height: 18px
		}

		.text_box60 h3 {
			width: 133px;
			height: auto;
			float: left;
			padding: 0;
			font-size: 16px;
			color: #7b0000;
			text-decoration: none;
			font-weight: normal;
			text-align: left;
			text-transform: none;
			line-height: 18px
		}

		.text_box60 p {
			width: 133px;
			height: auto;
			float: left;
			padding: 5px 0;
			font-size: 14px;
			color: #262626;
			text-decoration: none;
			font-weight: bold;
			text-align: left;
			text-transform: none;
			line-height: 18px
		}

		.vior {
			width: auto;
			height: auto;
			float: left;
			padding: 0px 10px;
			background: url(images/vior.png) left top repeat-x;
			line-height: 22px;
			font-size: 14px;
			color: #FFFFFF;
			text-decoration: none;
			font-weight: normal;
			text-align: left;
			text-transform: none;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
			-khtml-border-radius: 5px;
		}

		.box133 {
			width: 133px;
			height: auto;
			float: left;
			padding: 0;
			margin: 0;
		}

		.box258 {
			width: 258px;
			border-bottom: 1px solid #b9b9b9;
			padding: 0 10px 5px 10px;
			margin-bottom: 5px;
			float: left;
		}

		.box116 {
			width: 116px;
			height: auto;
			float: left;
			border: 2px solid #FFFFFF;
			padding: 0;
			margin-right: 5px;
		}

		.box116 img {
			width: 120px; /*height:90px*/
		}


		/*papan*/
		.box2 {
			width: 260px;
			height: auto;
			float: left;
			margin-right: 47px;
			margin-left: 20px;
			padding: 0 0 10px 5px;
			font-size: 13px;
			color: #242424;
		}

		.box2 span {
			font: bold 12px Verdana, Arial, Helvetica, sans-serif;
			color: #FF0000
		}

		.box3 {
			width: 260px;
			height: auto;
			float: left;
			margin-right: 20px;
			padding: 0 0 10px 5px;
			font-size: 13px;
			color: #242424;
		}

		.box3 span {
			font: bold 12px Verdana, Arial, Helvetica, sans-serif;
			color: #FF0000
		}

		.box4 {
			width: 265px;
			height: auto;
			float: left;
			margin: 0px 45px 10px 20px;
		}

		.box44 {
			width: 265px;
			height: auto;
			float: left;
			margin: 0px 47px 10px 20px;
			position: relative;
		}

		.box5 {
			width: 265px;
			height: auto;
			float: left;
			margin: 0px 20px 10px 0;
		}

		.box6 {
			width: 280px;
			height: auto;
			float: left;
			margin: 10px 0px 0px 0;
		}

		.box55 {
			width: 265px;
			height: auto;
			float: left;
			margin: 0px 20px 10px 0;
			position: relative;
		}

		.lin2 {
			width: 617px;
			height: 2px;
			float: left;
			margin: 0px 0 10px 0;
			padding: 0;
			background: url(images/line2.png) left top repeat-x;
		}

		.box14 {
			padding: 0px 0;
			height: 15px;
			float: left
		}

		.box20 {
			padding: 0 10px;
			float: left;
			line-height: 27px;
			font-size: 14px;
			color: #242424;
			font-weight: bold;
		}

		.text30 {
			width: 617px;
			height: auto;
			float: left; /*background:url(/images/shadw.png) center bottom no-repeat;*/
			padding: 17px 0;
			font-size: 22px;
			color: #242424
		}

		.text30 span {
			padding-right: 10px;
			float: right;
			text-align: right;
			font-size: 14px;
			font-weight: normal;
			color: #242424;
		}

		.text30 span strong {
			font: bold 20px Verdana, Arial, Helvetica, sans-serif;
			color: #FF0000
		}

		.box617 {
			width: 617px;
			height: auto;
			float: left;
			padding-left: 0px;
			padding-bottom: 20px;
			margin-right: 0px;
		}

		.main617 {
			width: 617px;
			height: auto;
			float: left;
			padding-left: 0px;
			margin-top: 15px;
		}

		.box20A {
			padding: 0 5px;
			float: left;
			line-height: 25px;
			font-size: 14px;
			color: #242424;
			font-weight: bold;
		}

		#servicePackages table {
			width: 100%;
			line-height: 30px;
			margin-bottom: 15px;
			font-size: 90%;
		}

		#servicePackages table td {
			padding: 0 15px;
		}

		#servicePackages table td span {
			margin-left: 10px;
			color: #444;
			text-align: left;
		}

		#servicePackages table td:nth-child(2) {
			padding: 0;
		}

		.detailCarTitle, .detailCarTitleWide, .detailCarTitleFull {
			word-wrap: break-word;
			height: auto;
			float: left;
			margin: 0px;
			font-size: 30px;
			color: #414141;
			font-weight: normal;
		}

		.detailCarTitle {
			width: 490px;
		}

		.detailCarTitleWide {
			width: 775px;
		}

		.detailCarTitleFull {
			width: 100%;
		}

		/*papan 12.09.12*/
		.mainbox_textare617 {
			height: auto;
			float: left;
			padding-left: 0px;
			margin: 20px 0;
			transform: translate(-50%, 0%);
			position: relative;
			left: 50%;
		}

		.textbox22 {
			width: 381px;
			height: auto;
			float: left;
			padding-left: 0px;
			margin: 0px 0px 0 0;
		}

		.button51 {
			width: auto;
			height: 36px;
			float: left;
		}

		.button51 a {
			width: auto;
			height: 36px;
			float: left;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
			-khtml-border-radius: 5px;
			background: url(images/button5.png) left top repeat-x;
			font-size: 18px;
			color: #FFFFFF;
			padding: 0 10px;
			line-height: 36px;
			text-decoration: none;
			text-transform: uppercase;
		}

		.button51 a:hover {
			width: auto;
			height: 36px;
			float: left;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
			-khtml-border-radius: 5px;
			background: url(images/button5.png) left -44px repeat-x;
			font-size: 18px;
			color: #FFFFFF;
			padding: 0 10px;
			line-height: 36px;
			text-decoration: none;
			text-transform: uppercase;
		}

		.text55 {
			width: 381px;
			height: auto;
			float: left;
			padding-left: 0px;
			margin: 0px 0px 20px 0;
			font-size: 14px;
			color: #242424;
			line-height: 18px;
			text-decoration: none;
		}

		.text55 p {
			padding-left: 0px 5px 0 0;
			margin: 0px 0px 0px 0;
			font-size: 14px;
			color: #000000;
			line-height: 18px;
			text-decoration: none;
		}

		.picbox_221 {
			height: auto;
			float: left;
			padding-left: 0px;
			margin: 0px 15px 0 0;
		}

		.picbox_221 img {
			width: 332px;
			height: auto;
			float: left;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
		}

		.isFullWidthPage .picbox_221 img {
			width: 442px;
		}

		.picbox651 {
			width: 651px;
			height: auto;
			float: left;
			margin: 5px 10px 0px;
		}

		.picbox930 {
			width: 930px;
			height: auto;
			float: left;
			margin: 5px 5px 0px;
		}

		.picbox651 img {
			width: 651px;
		}

		.picbox930 img {
			width: 930px;
		}

		.picbox651 img, .picbox930 img {
			float: left;
			cursor: pointer;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
		}

		.topPromoImage img {
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			margin-top: 5px;
			width: 930px;
			cursor: pointer;
		}

		.topPromoImageUsed img {
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
			width: 650px;
			cursor: pointer;
		}


		.team_title_dealer {
			margin-bottom: 15px;
			text-align: center;
		}

		.forms_box661 {
			width: 960px;
			height: auto;
			margin: 10px auto;
		}


		.picbox90 {
			width: 90px;
			height: auto;
			float: left;
			margin-right: 8px;
			border: 1px solid #acacac;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
		}

		.picbox90 img {
			width: 90px;
			height: auto;
			float: left;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-khtml-border-radius: 3px;
		}

		.textbox191 {
			width: 52%;
			height: auto;
			float: left;
			font-size: 13px;
			line-height: 1.2;
			color: #242424;
		}

		.textbox191 h4 {
			font-size: 18px;
			color: #242424;
			padding-bottom: 5px;
		}

		.mainbox291 {
			width: 291px;
			min-height: 123px;
			height: auto;
			float: left;
			margin: 0 5px 10px 0;
			background: #e6e6e6;
			border: 1px solid #d4d4d4;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			border-radius: 8px;
			-khtml-border-radius: 8px;
			padding: 15px 10px;
		}

		.lazy {
			border: 0;
			display: none
		}

		.techSpecs {
			width: 621px;
			height: auto;
			float: left;
			margin: 0px;
			padding: 25px 15px;
			background: #ebebeb;
			background-position: right bottom;
			-moz-border-radius-topleft: 0px;
			-moz-border-radius-topright: 0px;
			-moz-border-radius-bottomright: 6px;
			-moz-border-radius-bottomleft: 6px;
			-webkit-border-top-left-radius: 0px;
			-webkit-border-top-right-radius: 0px;
			-webkit-border-bottom-right-radius: 6px;
			-webkit-border-bottom-left-radius: 6px;
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 6px;
			border-bottom-right-radius: 6px;
		}

		.email_link {
			text-decoration: none;
			color: #888;
		}

		.email_link:hover {
			text-decoration: none;
			color: #333;
		}

		.page_name555 {
			color: #242424;
			float: left;

			font-size: 24px;
			font-weight: normal;
			height: auto;
			line-height: 30px;
			padding: 0 0 10px 0;
			width: 650px;
		}

		.page_name555 a {
			color: #242424;
		}

		.page_name555 a:hover {
			color: #242424;
			text-decoration: underline;
		}

		.page_name555 a:visited {
			color: #242424;
		}

		.page_nameNEW555 {
			color: #242424;

			font-weight: normal;
			height: auto;
			font-size: 14px;
		}

		.page_nameNEW555 a {
			color: #242424;
		}

		.page_nameNEW555 a:hover {
			color: #242424;
			text-decoration: underline;
		}

		.page_nameNEW555 a:visited {
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
				max-width: 640px !important;
			}
		}

		.text_box11, .news_article {
			float: left;
			height: auto;
			margin: 0;
			padding: 0 20px 10px 0;
			width: auto;
			line-height: 21px;
		}

		.news_article h2 {
			margin: 10px 0;
		}

		.text_box11 h4,

		,
		.news_article h4 {
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
			float: left;

			/*    width: 632px;*/
		}

		.text_box11 a:hover, .news_article a:hover {
			color: #242424;
		}

		.text_box11 a:visited, .news_article a:visited {
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

		.text_box11 ul, .news_article ul {
			list-style-position: inside;
		}

		.text_box11 p a, .news_article p a {

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
			max-width: 100% !important;
		}

		/* IE ONLY*/
		@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {
			.news_article img {
				max-width: 650px !important;
			}
		}

		.articlePicBox {
			/*border: 1px solid #7D7D7D;
    float: left;*/
			height: auto;
			margin: 0 auto 15px;
			text-align: center;
		}

		.news_article img[src*='/ckfinder'] {
			max-width: 100% !important;
			height: auto !important;
		}

		.articlePicBox .articleBgImage {
			background-repeat: no-repeat;
			height: 0;
			padding-top: 62.5%;
			max-width: 640px;
			background-size: cover;
		}

		.news_article .article-padding-bottom img {
			padding-bottom: 15px;
		}

		.news_article .article-padding-bottom > h2 {
			font-size: 20px;
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

		.page_name18 a {
			color: #242424;
			text-decoration: none;
		}

		.page_name18 a:hover {
			color: #242424;
			text-decoration: underline;
		}

		.video5 {
			float: left;
			height: 41px;
			margin-top: 70px;
			margin-left: 70px;
		}

		.floatLogo {
			width: 621px;
			height: auto;
			float: left;
			margin: 0px;
			padding: 25px 15px;
			background: url(images/LOGO_GA_TRANSPARENT.png) right bottom no-repeat;
			background-position: right bottom;
			-moz-border-radius-topleft: 0px;
			-moz-border-radius-topright: 0px;
			-moz-border-radius-bottomright: 6px;
			-moz-border-radius-bottomleft: 6px;
			-webkit-border-top-left-radius: 0px;
			-webkit-border-top-right-radius: 0px;
			-webkit-border-bottom-right-radius: 6px;
			-webkit-border-bottom-left-radius: 6px;
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			border-bottom-left-radius: 6px;
			border-bottom-right-radius: 6px;
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

		.vehicleListTable tr td a {
			color: #414141;

			font-size: 12px;
		}

		.vehicleListTable tr td a:hover {
			color: #414141;

			font-size: 12px;
		}

		.vehicleListTable tr td a:visited {
			color: #414141;

			font-size: 12px;
		}

		.expandRow {
			background-color: #1f1f1f;
			text-align: right;
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

		div.toyotImage {
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
			padding: 5px;
			margin: 0;
			font-size: 15px;
			color: #A6A6A6;
			text-decoration: none;
		}


		/*****
*
* NEW SECTION
*
*/
		div.newCarMainBox {
			width: 960px;
			margin: 0 auto;
		}

		div.newCarMainBox2 {

			margin-top: 5px;
		}

		div.newCarMainBox3 {
			width: 960px;
			height: 12px;
			float: left;
			background: url(images/box970_top.png) left top no-repeat;
		}


		.stockImgStyle {
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
			overflow: hidden;
			opacity: 1;
			padding: 1px;
			box-sizing: border-box;
			margin: 1px;
		}

		#firstSliderImg .placeholder {
			height: 100%;
			max-width: 100%;
			position: relative;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;
			filter: blur(20px);
			-webkit-filter: blur(20px);
		}

		#firstSliderImg.fade-out {
			visibility: hidden;
			opacity: 0;
			-webkit-transition: visibility 1ms 1s, opacity 1s linear;
			-moz-transition: visibility 1ms 1s, opacity 1s linear;
			-o-transition: visibility 1ms 1s, opacity 1s linear;
			transition: visibility 1ms 1s, opacity 1s linear;
		}

		#socialTimeline {
			width: 960px;
			height: auto;
			/*float:left;*/
			/*background:url(/images/box970_mid.png) left top repeat-y;*/
			/*background: rgba(204,204,204,0.85 );*/
			/*border-radius: 5px;*/
			/*margin-top:10px;*/
		}

		div.newCarMainBox4 {
			width: 940px;
			height: auto;
			float: left;
			background: url(images/box970_mid.png) left top repeat-y;
			padding: 10px 15px;
		}

		div.newCarTitleBox h1 {
			width: 940px;
			height: auto;
			float: left;
			/*padding:15px 0px;*/

			font-size: 30px;
			color: #303030;
			text-decoration: none;
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

		.extendedPhone {
			position: fixed;
			background-color: #676767;
			color: #ddd;
			padding: 1em;
			border-radius: 5px;
			z-index: 9999;
			font-size: 14px;
		}

		.extendedPhone label {
			display: inline-block;
		}

		.extendedPhone span {
			color: #fff;
		}

		.phoneNote {
			font-size: 11px;
			padding-top: 7px;
		}


		.addedSearchLinksDivEx {
			color: #414141;

			font-size: 16px;
			text-align: left;
			padding-left: 20px;
			padding-top: 30px;
		}

		.addedSearchLinksDiv div {
			padding-left: 10px;
			padding-top: 10px;
			width: 200px;
			float: left;
		}

		.addedSearchLinksDiv ul {
			margin-bottom: 20px;
			font-size: 13px;
			margin-top: 5px;
		}

		.addedSearchLinksDiv ul li {
			list-style: none outside none;
			display: block;
			margin-left: 40px;
			text-indent: -10px;
		}

		.addedSearchLinksDiv ul li a {
			color: #333;
			text-decoration: none;
			cursor: pointer;

		}

		.addedSearchLinksDiv ul li a {
			background: url("images/arrow_red.png") no-repeat scroll 0 10px transparent;
			color: #333333;
			margin-right: 2px;
			padding: 6px 10px;
			text-decoration: none;
		}

		.addedSearchLinksDiv ul li a:hover {
			text-decoration: underline;
		}

		.compareLinks a {
			text-decoration: none;
		}

		.compareLinks a:hover {
			text-decoration: underline;
		}

		.emailBody, .emailSubject {
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

		.other_links a {
			text-decoration: none;
		}

		.other_links a:hover {
			text-decoration: underline;
		}

		.promotionSideBtnA {
			background: #cc0000;
			color: #ffffff;
			display: block;
			font-size: 20px;
			width: 168px;
			height: 53px;
			padding: 2px 15px 0px 15px;
			cursor: pointer;
			line-height: 53px;
			text-decoration: none;
			font-weight: bold;
			background-size: 100%;
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

			transform: rotate(-90deg);
			-ms-transform: rotate(-90deg); /* IE 9 */
			-webkit-transform: rotate(-90deg); /* Safari and Chrome */
		}

		.footerMultiAddress3 {
			border-right: 1px #919191 solid;
			padding-right: 70px;
			margin-left: 14px;
			color: #575757;
		}

		.footerMultiAddress2 {
			border-right: 1px #919191 solid;
			padding-right: 150px;
			margin-left: 93px;
			color: #575757;
		}

		.footerMultiAddress1 {
			margin-left: 345px;
			color: #575757;
		}

		.smallActionWebsiteColor {
			background: url("images/bl_bg2.png") left top repeat-x;
			color: rgb(255, 255, 255);
		}

		.smallActionWebsiteColor:hover {
			background: url("images/menu10_bg.png") left top repeat-x;
			color: #FFF;
		}

		/* Applies to all menu styles */
		#nav li a.top_link.isBold,
		#nav li a.isBold {
			font-weight: bold;
		}

		#mainHeader div.box15Padding {
			padding-top: 15px;
		}

		#nav .notClickable {
			cursor: default !important;
		}

		.S100PercentWidth {
			width: 100%;
		}

		div#alertMsgContent a {
			text-decoration: none !important;
			color: #ffffff;
		}

		#alertMsgContent {
			width: 960px;
			margin: 0 auto;
			text-align: center;
			line-height: 25px;
			font-size: 14px;
			padding: 8px 0;
		}

		#alertMsgContainer {
			display: none;
			background-color: #000;
			margin-bottom: 20px;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 36001;
			width: 100%;
			min-height: 35px;
			height: auto;
			color: white;
			color: #ffffff;
			font-family: Montserrat;
		}

		#alertMsgContainer img.close {
			float: right;
			cursor: pointer;
			margin: 5px;
		}

		#alertMsgContainer #alertCloseWrapper {
			position: absolute;
			right: 0;
			height: 100%;
		}

		#alertMsgContainer #alertCloseWrapper i.close {
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
			float: left;
			width: 25%;
			font-size: 0.8em;
			padding-top: 15px;
			padding-bottom: 15px;
			background-color:;
		}

		.bCodeSort {
			float: left;
			width: 16%;
			background-color:;
			font-size: 0.8em;
			padding-top: 15px;
			padding-bottom: 15px;
		}

		.bCodeSort .bCodeHeading,
		.bCodeStyle .bCodeHeading {
			margin-bottom: 5px;
			font-weight: bold;
			padding-left: 2px;
		}

		.page_name42 {
			width: 940px;
			height: auto;
			float: left;
			padding: 0 0px 10px 21px;
			line-height: 30px;
			font-size: 24px;
			color: #000000;
		}

		.page_name42 h2 {
			font-size: 24px;
			color: #000000;
			font-weight: normal;
			border: none;
		}

		.page_name42 h2.notfirst {
			font-size: 24px;
			color: #000000;
			font-weight: normal;
			margin-top: 0px;
			padding-top: 40px;
			border-top: 1px #cccccc solid;
			width: 920px;
		}

		#filterMainBox.newcarsstyle2 {
			-moz-border-radius: 0px;
			-webkit-border-radius: 0px;
			-khtml-border-radius: 0px;
			border-radius: 0px;
			border: none;
			border-top: 1px solid #bebebe;
			border-bottom: 1px solid #bebebe;
			width: 955px;
			left: 3px;
		}

		div.imdev label {
			font-weight: bold;
			padding-top: 10px;
		}

		div.imdev div {
			background: none;
			background-color: #D9D9D9;
			padding: 10px 0px 10px 0px;
			width: 100%;
			font-size: 13px;
		}

		div.imdev_inner {
			font-weight: normal;
			margin-left: 30px;
			width: 90% !important;
		}

		ul.quiz {
			padding: 10px 0 10px 20px;
			list-style-type: none;
			height: 175px;
		}

		ul.quiz li {
			padding: 10px;
		}

		ul.quiz li input {
			margin-right: 10px;
		}

		.news-body {
			width: 100%;
			text-align: right;
			font-size: 13px;
			color: #191919;
			padding-right: 15px;
			margin-top: -20px;
			padding-bottom: 10px;
		}

		.news-all-text {
			color: #191919;
		}

		#newsContainer .text_box11 img {
			max-width: 640px;
			display: block;
			margin: 5px auto;
		}

		#newsContainer .used {
			clear: both;
		}

		.home_action_adj {
			width: 961px;
		}

		.home_action_adj2 {
			width: 730px !important;
			height: 600px !important;
		}

		.home_email {
			width: 232px;
			margin-left: 5px;
			margin-bottom: 5px;
		}

		.widget_menu_adj1 {
			font-size: 0.8em;
		}

		.widget_menu_adj2 {
			float: right;
			position: relative;
			top: -2px;
		}

		.widget_menu_extendedPhone {
			font-size: 0.8em;
			margin-left: 104px;
			top: 132px;
		}

		.widget_menu_adj3 {
			font-size: 0.8em;
			color: #575757;
			position: relative;
			left: -8px;
		}

		.widget_menu_adj4 {
			position: relative;
			/*width:160px;*/
			font-size: 0.8em;
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
			padding-left: 10px;
			/*border-left:1px solid #000000;*/
			text-align: right;
		}

		.widget_menu_adj4.left {
			padding-right: 10px;
			/*border-right:1px solid #000000;*/
			width: inherit;
		}

		.widget_menu_adj6 {
			font-size: 0.8em;
			position: relative;
			left: -3px;
			color: #575757;
			cursor: pointer;
		}

		.widget_express_mail_phone_title {
			border-bottom: 1px solid #aaa;
			text-align: center;
			font-size: 24px;
			font-weight: bold;
			padding-bottom: 8px;
			padding-top: 8px;
			color: #000000;
		}

		.widget_express_mail_adj1 {
			padding: 15px 10px;
			line-height: 60px;
			font-size: 2em;
			padding: 15px 10px;
			text-align: center;
		}

		.bannerPopupClose {
			left: 710px;
			position: relative;
			width: 15px;
			top: 20px;
			cursor: pointer;
		}

		.priceNote {
			color: #888888;
			font-style: italic;
			text-align: justify;
			display: block;
			padding-right: 10px;
			font-size: 12px !important;
			margin-bottom: 14px;
		}

		.toprint {
			display: none;
		}

		.refferenceContentDemo, .refferenceContentClearance {
			padding: 30px 20px;
			border-bottom: 1px solid #ccc;
			margin-bottom: 20px;
		}

		.box2_details_text2 .compareButton, .box2_details_text22 .compareButton {
			position: absolute;
			margin-top: -20px;
			z-index: 1;
			left: -30px;

		}

		.vdp {
			clear: both;
			width: 160px;
		}

		.compareButton {
			transition: box-shadow 0.25s ease-out 0s;
			transition: transform 0.25s ease-out 0s;
			display: none;
		}


		#compareUsedVehiclesWidget {
			display: none;
			width: 1185px;
			height: 645px;
			background: #eee url(images/comp_veh_bg.png) no-repeat;
			padding: 0;
		}

		#compareUsedVehicles_subtitle_arrow {
			float: right;
			padding: 65px 10px;
		}

		#compareUsedVehicles_title, #compareUsedVehicles_title_mm {
			font-size: 30px;
			font-weight: bold;
			margin: 0;
			padding: 0;
			color: inherit;
		}

		#compareUsedVehicles_title {
			margin-right: 35px;
		}


		#compareUsedVehicles_title_img {
			float: left;
			margin-right: 90px;
			padding: 5px;
		}


		#compareUsedVehicles_subtitle {
			font-size: 15px;
			color: #bf151b;
			width: 115px;
			float: left;
			padding: 45px 0 0 20px;
		}

		.compareUsedVehicles_option_header_group {
			color: #fff;

			background: rgb(76, 76, 76); /* Old browsers */
			background: -moz-linear-gradient(top, rgba(76, 76, 76, 1) 0%, rgba(76, 76, 76, 1) 13%, rgba(76, 76, 76, 1) 30%, rgba(76, 76, 76, 1) 48%, rgba(51, 51, 51, 1) 84%, rgba(51, 51, 51, 1) 100%); /* FF3.6-15 */
			background: -webkit-linear-gradient(top, rgba(76, 76, 76, 1) 0%, rgba(76, 76, 76, 1) 13%, rgba(76, 76, 76, 1) 30%, rgba(76, 76, 76, 1) 48%, rgba(51, 51, 51, 1) 84%, rgba(51, 51, 51, 1) 100%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to bottom, rgba(76, 76, 76, 1) 0%, rgba(76, 76, 76, 1) 13%, rgba(76, 76, 76, 1) 30%, rgba(76, 76, 76, 1) 48%, rgba(51, 51, 51, 1) 84%, rgba(51, 51, 51, 1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4c4c4c', endColorstr='#333333', GradientType=0); /* IE6-9 */
			padding: 9px 15px;
			margin: 0px;

		}

		.compareUsedVehicles_option_header_group:first-of-type {
			padding: 13px 10px;
		}

		.compareUsedVehicles_img {
			text-align: center;
			background-color: #FFFFFF;
		}

		#compareUsedVehicles_option_header {
			width: 120px;
			margin: 0px;
			padding: 0px 30px 0 25px;
			vertical-align: top;
		}

		#compareUsedVehicles_footer_arraow_img {
			margin-left: 40px;

		}

		td.compareUsedVehicles_options {
			background: #ffecec;
			border: 1px solid #d40000;
			width: 240px;
		}

		.compareUsedVehicles_footer_btns {
			width: 240px;
		}

		div#slider-pro-12 {
			border: 1px solid #EBEBEB;
			border-radius: 3px;
			background: #fff;
		}

		#sliderPromoAlert {
			border-radius: 3px 3px 0 0;
		}

		.slide-wrapper {
			border-radius: 3px;
		}

		#slideit label.open {
			border-radius: 3px 0 0 3px;
		}

		img.image {
			border-radius: 3px;
		}

		#compareUsedVehicles_loading img {
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

		.compareUsedVehicles_options .compareUsedVehicles_price {
			color: #d40000;
			font-size: 20px;

		}

		.compareUsedVehicles_options ~ td.compareUsedVehicles_options .compareUsedVehicles_price {
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

		.compareUsedVehicles_img_car {
			width: 240px;
			height: 180px;
			-webkit-filter: blur(2px);
			filter: blur(2px);
			-moz-filter: blur(2px);
			-o-filter: blur(2px);
			position: absolute !important;
			z-index: 1 !important;
			background-size: 240px 180px;

		}

		@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
			.compareUsedVehicles_img_car {
				opacity: 0.15;
			}
		}

		#compareUsedVehicles_img_title_1,
		#compareUsedVehicles_img_title_2,
		#compareUsedVehicles_img_title_3,
		#compareUsedVehicles_img_title_4 {
			margin-bottom: -30px;
			padding-top: 10px;
		}


		div#compareUsedVehicles_img_city_1,
		div#compareUsedVehicles_img_city_2,
		div#compareUsedVehicles_img_city_3,
		div#compareUsedVehicles_img_city_4 {

			top: -30px;
			margin-bottom: -20px;

		}


		.compareUsedVehicles_option_group {
			border-top: 2px solid #e8e8e8;
			padding: 10px 15px;
			margin: 0;
			width: 210px;
		}

		.compareUsedVehicles_option_group:first-of-type {
			border-top: none;
		}

		.compareUsedVehicles_img img {
			width: 242px;
			height: 182px;
			position: relative;
			z-index: 1;

		}

		#compareUsedVehicles_img_0 {
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

		.newVdpViewer .compareButton {
			position: absolute;
			bottom: 2px;
			right: 0px;
			z-index: 1111;
		}

		#compareUsedVehicles_img_td_0 {
			border: 1px solid #b3b3b3;
			width: 240px;
			height: 180px;
			background-size: 240px 180px;
			background-color: #fff;
		}

		#compareUsedVehicles_footer_details {
			background: rgb(76, 76, 76); /* Old browsers */
			background: -moz-linear-gradient(top, rgba(76, 76, 76, 1) 0%, rgba(76, 76, 76, 1) 13%, rgba(76, 76, 76, 1) 30%, rgba(76, 76, 76, 1) 48%, rgba(51, 51, 51, 1) 84%, rgba(51, 51, 51, 1) 100%); /* FF3.6-15 */
			background: -webkit-linear-gradient(top, rgba(76, 76, 76, 1) 0%, rgba(76, 76, 76, 1) 13%, rgba(76, 76, 76, 1) 30%, rgba(76, 76, 76, 1) 48%, rgba(51, 51, 51, 1) 84%, rgba(51, 51, 51, 1) 100%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to bottom, rgba(76, 76, 76, 1) 0%, rgba(76, 76, 76, 1) 13%, rgba(76, 76, 76, 1) 30%, rgba(76, 76, 76, 1) 48%, rgba(51, 51, 51, 1) 84%, rgba(51, 51, 51, 1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4c4c4c', endColorstr='#333333', GradientType=0); /* IE6-9 */
			margin: 5px 0px;
		}

		#compareUsedVehicles_footer_promotions {
			background: rgb(255, 48, 25); /* Old browsers */
			background: -moz-linear-gradient(top, rgba(255, 48, 25, 1) 0%, rgba(207, 4, 4, 1) 100%); /* FF3.6-15 */
			background: -webkit-linear-gradient(top, rgba(255, 48, 25, 1) 0%, rgba(207, 4, 4, 1) 100%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to bottom, rgba(255, 48, 25, 1) 0%, rgba(207, 4, 4, 1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3019', endColorstr='#cf0404', GradientType=0); /* IE6-9 */
		}


		.liveAlert_link {
			color: #FFFFFF;
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
			border: 1px solid #000;
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
			position: relative;
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

		.compareUsedVehicles_price {
			color: #292f33;
			font-size: 17px;
			font-weight: 700;
		}

		.button-toastr {
			background: #FFF;
			padding: 4px 20px;
			border-radius: 5px;
			color: #BD362F !important;
		}

		.button-toastr:hover {
			background: #000;
			color: #FFF;
		}


		.returnPopup_submit span {
			position: absolute !important;
			top: 50% !important;
			display: block !important;
			text-align: center !important;
			left: 0 !important;
			right: 0 !important;
			padding: 0 8px 0 8px !important;
			cursor: pointer !important;
			font-size: 14px !important;
			margin: 0 !important;
			color: #FFF !important;
			margin-top: -9px !important;
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
			background: rgba(66, 66, 66, 1);
			border-style: none;
			border-radius: 11px;
			left: 280px;
			top: 155px;
			z-index: 2;
			width: 531px;
			height: 384px;
			position: absolute;
		}

		#returnPopupTilte {
			width: 335px;
			float: right;
			margin: 20px;
			color: #000000;
			font-size: 18px;
		}

		#returnPopupTilte .rp_mc {
			font-size: 18px !important;
		}

		#returnPopupTilte2 {
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

		.returnPopupForm_table tr td {
			padding-bottom: 10px;
		}

		.rp_mc {
			font-size: 14px !important;
			color: !important;
			padding: 0 !important;
			margin: 0 !important;
		}

		#sendEmailPopupForm input {
			width: 200px;
		}

		#sendEmailPopupForm textarea {
			width: 210px;
		}

		#sendEmailPopupForm .formHeader {
			text-align: center;
		}

		#sendEmailPopupForm .formContent {
			background-color: #FFF;
			padding: 15px 0;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin: 15px 0;
		}

		#sendEmailPopupForm .formfooter {
			text-align: center;
		}

		#sendEmailPopupForm table.jqTransformTextarea {
			width: initial;
		}

		#emailMessageSubmit {
			display: block;
			margin: 0 auto;
		}

		#exit_popup_yes,
		#exit_popup_no {
			border-radius: 5px;
			cursor: pointer;
			font-size: 20px;
			padding: 5px 11px;
			text-decoration: none;
			width: 140px;
			float: right;
			margin-right: 10px;
		}

		#exit_popup_accutrade_form {
			background: white;
			text-align: center;
			padding-top: 15px;
			padding-bottom: 15px;
			height: 508px;
			background-size: 820px;
			background-image: url(images/popups/accu-trade-exit-bg.png);
		}


		#exit_popup_accutrade_wrapper {
			margin-left: 210px;
			color: white;
			font-size: 18px;
		}

		.exit_popup_text_line_2 {

			margin-top: 27px;
			margin-bottom: 5px;
		}

		.exit_popup_text_line_3 {
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


		#exit_popup_accutrade_title {
			height: 95px;
			width: 570px;
			margin-top: 20px;
		}

		#exit_popup_accutrade_title._FRENCH {
			background-image: url(images/popups/accu-trade-exit-title_fr.png);
		}

		#exit_popup_accutrade_title._ENGLISH {
			background-image: url(images/popups/accu-trade-exit-title_en.png);
		}


		#bestPriceVdpNewPopupContainer {
			width: 480px;
			height: 510px;
		}

		#bestPriceVdpNewPopupContainer .popup_bg {
			width: 480px;
			height: 515px;
		}

		#bestPriceVdpNewPopupContainer .popup_bg {
			background-image: url('images/popups/en/bestPriceNewVdp.png');
		}

		.popup_bg {
			background-color: #333333;
			background-size: 480px 515px;
		}

		.popupForm .asterisk {
			color: #d00;
			font-weight: bold;
			padding: 0;
			font-size: inherit;
			margin: 0;
		}

		.popupForm {
			z-index: 50;
			position: absolute;
			top: 248px;
			height: 249px;
			left: 80px;
			background: url("images/coupon-form-bg-2.png") no-repeat;
			width: 335px;
			padding: 30px;
		}

		.popupFormTitle {
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

		.popupForm input {
			width: 210px;
		}

		#asPurchaseIntent {
			width: 400px;
			padding: 30px 30px;
			height: auto;
		}

		#promoDiscoverButton {
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

		.img_menu.up_menu ul#nav ul.sub li .location-names {
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
			box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
			display: none;
			background-color: white;
			min-width: 290px;
		}

		.location-names > .location-details > .location-details-logo > .title {
			margin-bottom: 1em;
			font-size: initial;
			color: rgb(51, 51, 51);
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

		@media print {
			.toprint {
				display: block;
			}
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

		#tradeInBar {
			background-color: #000000;
			color: #ffffff;
			height: 55px;
			padding-top: 10px;
			padding-bottom: 1px;
			top: -1px;
		}

		#tradeInBarW {
			height: 50px;
			margin: auto;
			width: 960px;

		}

		.topbar3btnWrap {
			border-radius: 5px;
			background-color: #ffffff;
			border: 2px solid #000000;
			vertical-align: middle;
			height: 42px;
			padding: 0 20px;
			color: #000000;
		}

		.topbar3btn {
			font-weight: bold;
			transition: .2s;
			font-size: 14px;
			text-transform: capitalize;
			border-color: white;
			text-align: center;
			cursor: pointer;
			display: block;
			text-decoration: none;
			color: inherit;
		}


		.tradeInBar_btn {
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
			margin-top: 0px;
			height: 46px;
			background-color: #ffffff;
			color: #000000;
			border: 2px solid #000000;
			width: 200px;
		}


		.tradeInBar_btn:hover, .topbar3btnWrap:hover {
			background-color: #000000;
			color: #ffffff !important;
		}

		#tradeInBarPopup_formW {
			height: 580px;
			background-color: #fff;
			color: #000000;
			padding: 15px;
			position: relative;
		}

		#tradeInBarPopup_formW input {
			padding: 11px 10px;
			font-size: 15px;
			width: 250px;
			margin: 5px;
			border: 1px solid #a9a9a9 !important;
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

		#tradeInBarPopup_title {
			text-transform: uppercase;
			font-weight: bold;
			text-align: center;
			margin-top: 15px;
			margin-bottom: 10px;
			color: #000000;
		}

		#tradeInBarPopup_line1 {
			background-color: #f1f1f1;
			border: 1px solid grey;
			padding: 20px 40px;
			font-size: 22px;
			text-align: center;
			color: #000000;
		}

		#tradeInBarPopupSelectedVehicle {
			font-size: 22px;
			margin-bottom: 25px;
			text-align: center;
			color: #000000;
		}

		#tradeInBarPopupSubmit {
			background: #cc0000;
			color: #ffffff;
			padding: 15px;
			text-decoration: none;
			border-radius: 3px;
			border: 1px solid #000;
		}

		#tradeInBarPopupSubmit:hover {
			background: #ffffff;
			color: #cc0000;
			border: 1px solid #000;

		}

		#gRatingLarge {
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


		#gRating {
			cursor: pointer;
		}


		.tradinSelectW {
			float: left;
			margin-left: 10px;
		}


		.tradinSelectA {
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


		.tradinSelect {
			color: #3c3836;
			border: 2px solid #000000;
			border-radius: 5px;
			padding: 10px 10px;
			font-size: 16px;
			background-color: rgba(255, 255, 255, .9);
			background-position: 95% 50%;
			width: 200px;
			-webkit-appearance: none;
			-moz-appearance: none;
			padding-right: 27px;
			height: 46px;
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

		.tradeInBarStep2 {
			margin: 90px 0;
			text-align: center;
		}

		.tradeInBarStep2 .tradeInBarStep2Question {
			margin: 20px 0;
		}

		.tradeInBarStep2 .radio_div label {
			width: 50px;
			padding: 0;
			margin: 5px;
			display: inline-block
		}

		.tradeInBarStep2 .radio_div input {
			width: auto !important;
			padding: 0 !important;
			margin: 5px !important;
			border: none !important;
		}

		.multiselectVehicleOptions {
			margin-top: 5px;
			padding-bottom: 5px;
		}

		.multiselectVehicleOptions span {
			font-size: 15px !important;
			padding: 0 !important;
			margin: 0 !important;
		}

		#tradeInBarPopup_formW .tradeInBarMultiselect {
			min-width: 264px;
			min-height: 44px;
		}

		.ui-multiselect-menu.tradeInBarMultiselect {
			min-width: 272px;
			z-index: 100000;
			max-height: 120px;
			overflow: scroll;
		}

		.tradeInBarDealerStep {
			text-align: center;
			margin-top: 25px;
		}

		.tradeInBarDealerStep .tradeInBarDealerStepMakeModelYear {
			font-weight: 700;
		}

		.tradeInBarDealerStep span {
			margin: 0 !important;
			font-weight: 700 !important;
			color: #000000 !important;
		}

		#googleReviewsFooter {
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
		.firstcharup::first-letter {
			text-transform: uppercase;
		}

		/*icon compare 1 mouse over*/
		I.icon-compare-1,
		span.icon-compare-1 {
			color: #cc0000;
		}

		I.icon-compare-1:hover,
		span.icon-compare-1:hover {
			color: #ffffff !important;
			text-shadow: #cc0000 1px 1px, #cc0000 -1px 1px, #cc0000 -1px -1px, #cc0000 1px -1px;
			border-radius: 20px;
			background-color: #cc0000;
		}

		.gRating-icon i {
			font-size: 17px;
		}

		.gRating-icon#gRating {
			display: flex;
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

		#gRating {
			box-sizing: border-box;
			font-size: 17px;
			font-weight: bold;
			display: block;
		}

		/* when errors are applied to the input box directly, meaning not using jqtransform*/
		INPUT[type="text"].validity-erroneous {
			border: 1px solid #dc3545;
			background-color: #fad6dc !important;
		}

		INPUT[type="tel"].validity-erroneous {
			border: 1px solid #dc3545;
			background-color: #fad6dc !important;
		}

		INPUT[type="email"].validity-erroneous {
			border: 1px solid #dc3545;
			background-color: #fad6dc !important;
		}

		INPUT[type="password"].validity-erroneous {
			border: 1px solid #dc3545;
			background-color: #fad6dc !important;
		}

		/* DWP-3890 */
		H1.default {
			font-size: 30px;
			color: #000000;
			font-weight: normal;
			clear: both;
			padding: 0 0 15px 0;
		}

		H1.default A {
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
		H1.default span.icon.multiLineH1 {
			margin-top: 10px;
		}

		H1.default I.icon.singleLineH1,
		H1.default span.icon.singleLineH1 {
			margin-top: 2px;
		}

		H1.default > DIV {
			display: table-row;
		}

		H1.default > DIV DIV:nth-child(1) {
			font-weight: bold;
		}

		H1.default > DIV DIV:nth-child(2) {
			font-weight: normal;
			color: #757575;
			font-size: 18px;
		}

		H1.default > DIV DIV:nth-child(3) {
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

		H2.default {
			font-size: 24px;
			color: #000000;
			font-weight: normal;
			clear: both;
			padding: 10px 0;
			margin-top: 10px;
		}

		H2.default I.icon,
		H2.default span.icon {
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
		H2.default span.icon.multiLineH2 {
			margin-top: 7px;
		}

		H2.default I.icon.singleLineH2,
		H2.default span.icon.singleLineH2 {
			margin-top: 0px;
		}

		H2.default > DIV {
			display: table-row;
		}

		H2.default > DIV DIV:nth-child(1) {
			font-weight: bold;
		}

		H2.default.credsiiUsedMinHeight .TitleText {
			width: 80%;
		}

		H2.default > DIV DIV:nth-child(2) {
			font-weight: normal;
			color: #757575;
			font-size: 15px;
		}

		/* full width have bigger font */
		@media only screen and (min-width: 1301px) {

			body.isFullWidthPage.isPageFullWidthEnabled #firstSliderImg {
				width: 800px;
				height: 600px;
			}

			BODY.isFullWidthPage.isPageFullWidthEnabled H1.default {
				font-size: 34px;
			}

			BODY.isFullWidthPage.isPageFullWidthEnabled H1.default > DIV DIV:nth-child(2) {
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
			BODY.isFullWidthPage.isPageFullWidthEnabled H1.default span.icon.multiLineH1 {
				margin-top: 11px;
			}

			BODY.isFullWidthPage.isPageFullWidthEnabled H1.default I.icon.singleLineH1,
			BODY.isFullWidthPage.isPageFullWidthEnabled H1.default span.icon.singleLineH1 {
				margin-top: 1px;
			}

			BODY.isFullWidthPage.isPageFullWidthEnabled H2.default {
				font-size: 30px;
			}

			BODY.isFullWidthPage.isPageFullWidthEnabled H2.default > DIV DIV:nth-child(2) {
				font-size: 19px;
			}

			BODY.isFullWidthPage.isPageFullWidthEnabled H2.default.credsiiUsedMinHeight .TitleText {
				width: 90%;
			}

			BODY.isFullWidthPage.isPageFullWidthEnabled H2.default I.icon.multiLineH2,
			BODY.isFullWidthPage.isPageFullWidthEnabled H2.default span.icon.multiLineH2 {
				margin-top: 11px;
			}

			BODY.isFullWidthPage.isPageFullWidthEnabled H2.default I.icon.singleLineH2,
			BODY.isFullWidthPage.isPageFullWidthEnabled H2.default span.icon.singleLineH2 {
				margin-top: 4px;
			}

		}

		#cityTitle {
			color: #000000;
		}

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
			display: block;
			max-width: 470px;
			min-width: 300px;
			width: 100%;
			cursor: pointer;
			overflow: hidden;
			height: auto;
			position: absolute;
			top: 0;
			right: 0;
		}

		.credsiiNewVDP {
			display: block;
			max-width: 350px;
			min-width: 300px;
			width: 100%;
			cursor: pointer;
			overflow: hidden;
			height: auto;
			position: relative;
			top: 0;
			right: 0;
		}

		.credsiiUsedMinHeight {
			min-height: 130px;
		}

		.credsiiFinance {
			display: block;
			max-width: 960px;
			min-width: 300px;
			width: 100%;
			cursor: pointer;
			overflow: hidden;
			position: relative;
			height: 125px;
			margin-top: 15px;
		}

		.credsiiFinance .credsii-widget-container {
			max-width: 100% !important;
		}

		.credsiiFinanceMenu {
			display: block;
			max-width: 345px;
			min-width: 300px;
			width: 100%;
			cursor: pointer;
			overflow: hidden;
			height: auto;
			position: relative;
			top: 0;
			right: 0;
		}

		.credsiiDiv .credsiiFinanceMenu {
			max-width: 375px;
		}

		.credsiiFinanceMenu .credsii-widget {
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
			transform: translateY(-50%) scale(1, 1);
		}

		.promo-mask {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.5);
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
			-webkit-transform: translateY(-150%) scale(0, 0);
			-moz-transform: translateY(-150%) scale(0, 0);
			-ms-transform: translateY(-150%) scale(0, 0);
			-o-transform: translateY(-150%) scale(0, 0);
			transform: translateY(-150%) scale(0, 0);
			-webkit-box-shadow: 0 0 10px 5px rbga(0, 0, 0, 0.2);
			-moz-box-shadow: 0 0 10px 5px rbga(0, 0, 0, 0.2);
			box-shadow: 0 0 10px 5px rbga(0, 0, 0, 0.2);
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
			color: #ffffff;
			background-color: #333333;
			border-radius: 25px;
			transition: 0.25s;
		}

		.promos {
			background: #f1f1f1;
			border-radius: 5px;
			box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.2);
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

		.otherLogoMenuContainer {
			float: left;
		}

		.otherLogoMenuContainerRight {
			float: right;
		}

		.otherLogoMenuImage {
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
			width: 85% !important;
			max-width: 1200px;
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

		.ctabox--cell.ctabox--cell__1 {
			width: 100%;
		}

		.ctabox--cell.ctabox--cell__2 {
			width: 480px;
		}

		.ctabox--cell.ctabox--cell__3 {
			width: 33%;
		}

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
			background: rgba(0, 0, 0, 0.7);
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

		.parallax-content .parallax-content-business-desc a {
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

		.bnp_pullout_img_col {
			width: 15%;
			text-align: center;
			display: table-cell;
			vertical-align: middle;
		}

		.bnp_pullout_img {
			width: 160px;
		}

		.bnp_pullout_col_separator {
			width: 1px;
			background-color: #EBEBEB;
			height: 98px;
			position: absolute;
			top: 20px;
		}

		.bnp_pullout_mid_col {
			width: 70%;
			display: table-cell;
		}

		.bnp_pullout_mid_col_right {
			width: 40%;
			display: table-cell;
			padding: 0 2%;
		}

		.bnp_pullout_mid_col_text {
			width: 60%;
			display: table-cell;
			padding: 0 80px;
		}

		.bnp_pullout_mid_col_separator {
			width: 1px;
			background-color: #EBEBEB;
			height: 40px;
			position: absolute;
			top: 78px;
		}

		.bnp_pullout_mid_col_price_and_button {
			display: flex;
			flex-direction: row;
		}

		.bnp_pullout_mid_col_price_with_title {
			display: flex;
			flex-direction: column;
			text-align: center;
			width: 45%;
		}

		.bnp_pullout_mid_col_price {
			font-size: 37px;
			font-weight: bold;
		}

		.bnp_pullout_mid_col_button {
			margin: 30px auto;
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
		.pullout-content .creditScorePulloutImg {
			height: 110px;
		}

		.pullout-content .creditScorePulloutButton {
			background: #417F1A !important;
			/*border: 1px solid #ffffff;*/
			border-radius: 3px;
			color: #ffffff;
			padding: 7px 20px 7px;
			font-size: 16px;
			font-weight: 700;
			text-shadow: 0.4px 0;
		}

		.pullout-content .creditScorePulloutContent {
			color: #000000;
			font-size: 25px;
			font-weight: 700;
			margin-bottom: -15px;
		}

		.pullout-content .creditScorePulloutContentScore {
			color: #000000;
			font-weight: 700;
			font-size: 30px;
			text-shadow: 2px 0;
		}

		.pullout-content .creditScorePulloutContentFree {
			color: #417F1A;
			font-weight: 700;
			font-size: 45px;
			text-shadow: 2px 0;
		}

		.isPageFullWidthEnabled.isFullWidthPage .pullout-content .creditScorePulloutMaxWidth {
			max-width: 1200px;
		}

		.pullout-content .creditScorePulloutMaxWidth {
			max-width: 960px;
		}


		/** /css/main.css **/

		.-left {
			float: left !important;
		}

		.-right {
			float: right
		}

		.-small {
			font-size: .8em;
			margin-bottom: 1.875em;
			line-height: 1.875em !important;
		}

		.-large {
			font-size: 1.2em;
			line-height: 2.5em;
			margin-bottom: 1.25em !important;
		}

		.-hide {
			display: none !important;
		}

		.-quiet {
			color: #666 !important;
		}

		.-loud {
			color: #000000 !important;
		}

		.-highlight {
			background: #ff0 !important;
		}

		.-added {
			background: #060;
			color: #fff !important;
		}

		.-removed {
			background: #900;
			color: #fff !important;
		}

		.-push-first {
			margin-left: 0;
			padding-left: 0 !important;
		}

		.-push-last {
			margin-right: 0;
			padding-right: 0 !important;
		}

		.-push-left {
			margin-top: 0;
			padding-top: 0 !important;
		}

		.-push-bottom {
			margin-bottom: 0;
			padding-bottom: 0 !important;
		}

		.-noborder {
			border: 0 !important;
		}

		.-nodecoration, .-no-text-decoration, .-notext-decoration {
			text-decoration: none !important;
		}

		.-text-uppercase, .-uppercase {
			text-transform: uppercase !important;
		}

		.-text-lowercase, .-lowercase {
			text-transform: lowercase !important;
		}

		.-hidden {
			display: none;
		}

		.-text-bold, .bold, .-bold {
			font-weight: bold !important;
		}

		.-text-normal, .normal {
			font-weight: normal !important;
		}

		.-align-top {
			vertical-align: top !important;
		}

		.-align-middle {
			vertical-align: middle !important;
		}

		.-line-h1 {
			line-height: 1em;
		}

		.-line-h2 {
			line-height: 2em;
		}

		.-bottom0 {
			bottom: 0;
		}

		.-bottom0-important {
			bottom: 0 !important;
		}

		.Porsche2 {
			clear: both;
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
		.Specifications .fa-chevron-right {
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
			color: #ffffff;
			margin-right: 10px;
		}

		.Specifications .fa-chevron-right {
			margin-top: 1px;
		}

		#carTitle .makeModelYear {
			font-size: 25px;
		}

		#carTitle .dealerLcationCarTitle {
			font-weight: normal;
			color: #9c9c9c;
			font-size: 18px;
			letter-spacing: -1px;
		}

		.carTitle .fa-chevron-right {
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
			color: #ffffff;
			margin-right: 10px;
		}

		.carTitle .makeModelYear {
			font-size: 23px;
		}

		.carTitle .dealerLcationCarTitle {
			font-weight: normal;
			color: #9c9c9c;
			font-size: 15px;
			letter-spacing: -1px;
		}

		#SearchTitle .fa-chevron-right {
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
			color: #ffffff;
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
			background-image: url(js/calendarui/images/ui-icons_454545_256x240.png) !important;
		}


		.ui-multiselect-checkboxes label input {
			position: relative;
			top: 1px;
			margin-right: 8px;
			height: 13px;

		}


		.ui-widget, .ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus,
		.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
			background: #fff !important;
			color: #555;
			font-size: 15px !important;

		}


		.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
			padding: 8px 10px !important;
		}

		.ui-multiselect-checkboxes li {
			font-size: 15px !important;
		}

		.ui-corner-all {
			border-radius: 0px !important;
		}

		.-collapse {
			border-collapse: collapse;
		}

		.-li {
			list-style-type: none;
		}

		.-no-shadow, .-shadow0, .-noshadow {
			box-shadow: none !important;
		}

		.-underline {
			text-decoration: underline !important;
		}

		.-top0 {
			top: 0;
		}


		.-text-left {
			text-align: left !important;
		}

		.-text-right {
			text-align: right !important;
		}

		.-text-center {
			text-align: center !important;
		}

		.-text-red, .-red-text {
			color: red !important;
		}

		.-block {
			display: block !important;
		}

		.-inline-block {
			display: inline-block !important;
		}

		.-none, .-hidden, .-hidde {
			display: none !important;
		}

		.-inline {
			display: inline !important;
		}

		.-color1 {
			color: #575757 !important;
		}

		.-title1 {
			font-size: 23px !important;
			font-color: #000000 !important;
			text-decoration: none !important;
		}


		.-input {
			font-size: 13px;
			line-height: 15px;
			vertical-align: middle;
			height: 32px;
			color: #404040;
			padding: 0px 6px !important;
			margin: 0px;
			outline: none;
			min-height: 20px;
			border: 1px solid #ced4da;
			border-radius: .25rem;
			transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
		}

		.-input:focus, .-input:hover {
			border-color: #80bdff !important;
			box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
		}


		/* position */
		.-position-static, .-pos-static, .-pos-stat {
			position: static !important;
		}

		.-position-absolute, .-pos-absolute, .-pos-abs {
			position: absolute !important;
		}

		.-position-fixed, .-pos-fixed, .-pos-fix {
			position: fixed !important;
		}

		.-position-relative, .-pos-relative, .-pos-rel {
			position: relative !important;
		}

		.-position-inherit, .-pos-inherit, .-pos-inh {
			position: inherit !important;
		}

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

		-lh-1-3, -line-height-1-3 {
			line-height: 1.3;
		}

		-lh-20 {
			line-height: 20px;
		}

		/* Validation */
		.-error, .-alert, .-notice, .-success, .-info {
			padding: 0.8em;
			margin-bottom: 1em;
			border: 2px solid #ddd !important;
		}

		.-error, .-alert {
			background: #fbe3e4;
			color: #8a1f11;
			border-color: #fbc2c4 !important;
		}

		.-notice {
			background: #fff6bf;
			color: #514721;
			border-color: #ffd324 !important;
		}

		.-success {
			background: #e6efc2;
			color: #264409;
			border-color: #c6d880 !important;
		}

		.-info {
			background: #d5edf8;
			color: #205791;
			border-color: #92cae4 !important;
		}

		.-error a, .alert a {
			color: #8a1f11 !important;
		}

		.-notice a {
			color: #514721 !important;
		}

		.-success a {
			color: #264409 !important;
		}

		.-info a {
			color: #205791 !important;
		}

		/* grid.css */
		.-box {
			padding: 1.5em;
			margin-bottom: 1.5em;
			background: #e5eCf9 !important;
		}

		-hr {
			background: #dddddd;
			color: #dddddd;
			clear: both;
			float: none;
			width: 100%;
			height: 1px;
			margin: 0 0 17px;
			border: none !important;
		}

		-space {
			background: #fff;
			color: #fff;
			visibility: hidden;
			clear: both;
			float: none;
			width: 100%;
			height: 1px;
			margin: 0 0 17px;
			border: none !important;
		}

		.-clearfix:after {
			content: "\0020";
			display: block;
			height: 0;
			clear: both;
			visibility: hidden;
			overflow: hidden !important;
		}

		.-clearfix {
			display: block !important;
		}

		.-clear {
			clear: both !important;
		}

		.clearfix:after {
			content: "";
			display: table;
			clear: both;
		}

		.-overflow-hidden {
			overflow: hidden !important;
		}

		/* -h  width */
		.-w5 {
			width: 5px !important;
		}

		.-w10 {
			width: 10px !important;
		}

		.-w15 {
			width: 15px !important;
		}

		.-w18 {
			width: 18px !important;
		}

		.-w20 {
			width: 20px !important;
		}

		.-w25 {
			width: 25px !important;
		}

		.-w30 {
			width: 30px !important;
		}

		.-w35 {
			width: 35px !important;
		}

		.-w40 {
			width: 40px !important;
		}

		.-w45 {
			width: 45px !important;
		}

		.-w50 {
			width: 50px !important;
		}

		.-w55 {
			width: 55px !important;
		}

		.-w60 {
			width: 60px !important;
		}

		.-w65 {
			width: 65px !important;
		}

		.-w70 {
			width: 70px !important;
		}

		.-w73 {
			width: 73px !important;
		}

		.-w75 {
			width: 75px !important;
		}

		.-w80 {
			width: 80px !important;
		}

		.-w85 {
			width: 85px !important;
		}

		.-w88 {
			width: 88px !important;
		}

		.-w90 {
			width: 90px !important;
		}

		.-w95 {
			width: 95px !important;
		}

		.-w100 {
			width: 100px !important;
		}

		.-w110 {
			width: 110px !important;
		}

		.-w120 {
			width: 120px !important;
		}

		.-w125 {
			width: 125px !important;
		}

		.-w130 {
			width: 130px !important;
		}

		.-w135 {
			width: 135px !important;
		}

		.-w140 {
			width: 140px !important;
		}

		.-w143 {
			width: 143px !important;
		}

		.-w145 {
			width: 145px !important;
		}

		.-w150 {
			width: 150px !important;
		}

		.-w170 {
			width: 180px !important;
		}

		.-w180 {
			width: 180px !important;
		}

		.-w185 {
			width: 185px !important;
		}

		.-w190 {
			width: 190px !important;
		}

		.-w200 {
			width: 200px !important;
		}

		.-w210 {
			width: 210px !important;
		}

		.-w215 {
			width: 215px !important;
		}

		.-w220 {
			width: 220px !important;
		}

		.-w230 {
			width: 230px !important;
		}

		.-w240 {
			width: 240px !important;
		}

		.-w250 {
			width: 250px !important;
		}

		.-w255 {
			width: 255px !important;
		}

		.-w260 {
			width: 260px !important;
		}

		.-w270 {
			width: 270px !important;
		}

		.-w275 {
			width: 275px !important;
		}

		.-w280 {
			width: 280px !important;
		}

		.-w290 {
			width: 290px !important;
		}

		.-w300 {
			width: 300px !important;
		}

		.-w315 {
			width: 315px !important;
		}

		.-w320 {
			width: 320px !important;
		}

		.-w325 {
			width: 325px !important;
		}

		.-w350 {
			width: 350px !important;
		}

		.-w400 {
			width: 400px !important;
		}

		.-w450 {
			width: 450px !important;
		}

		.-w460 {
			width: 450px !important;
		}

		.-w500 {
			width: 500px !important;
		}

		.-w630 {
			width: 630px !important;
		}

		.-w620 {
			width: 620px !important;
		}

		.-w625 {
			width: 625px !important;
		}

		.-w675 {
			width: 675px !important;
		}

		.-w680 {
			width: 680px !important;
		}

		.-w670 {
			width: 670px !important;
		}

		.-w700 {
			width: 700px !important;
		}

		.-w720 {
			width: 720px !important;
		}

		.-w725 {
			width: 725px !important;
		}

		.-w730 {
			width: 730px !important;
		}

		.-w750 {
			width: 750px !important;
		}

		.-w800 {
			width: 800px !important;
		}

		.-w900 {
			width: 900px !important;
		}

		.-w937 {
			width: 937px !important;
		}

		.-w940 {
			width: 940px !important;
		}

		.-w960 {
			width: 960px !important;
		}

		/* MAX value */
		.-w970 {
			width: 970px !important;
		}

		/* because some blocks have shadows or borders +10 to max*/
		.-w1000 {
			width: 1000px !important;
		}

		.-w5p {
			width: 5% !important;
		}

		.-w10p {
			width: 10% !important;
		}

		.-w15p {
			width: 20% !important;
		}

		.-w20p {
			width: 20% !important;
		}

		.-wq, .-w25p {
			width: 25% !important;
		}

		.-w30p {
			width: 30% !important;
		}

		.-w35p {
			width: 35% !important;
		}

		.-w40p {
			width: 40% !important;
		}

		.-w45p {
			width: 45% !important;
		}

		.-wh, .-w50p {
			width: 50% !important;
		}

		.-w55p {
			width: 55% !important;
		}

		.-w60p {
			width: 60% !important;
		}

		.-w65p {
			width: 65% !important;
		}

		.-w70p {
			width: 70% !important;
		}

		.-w75p {
			width: 75% !important;
		}

		.-w80p {
			width: 80% !important;
		}

		.-w85p {
			width: 85% !important;
		}

		.-w90p {
			width: 90% !important;
		}

		.-w95p {
			width: 95% !important;
		}

		.-wf, .-w100p {
			width: 100% !important;
		}

		.-max-w-none {
			max-width: none !important;
		}

		/* -h  height */

		.-h5 {
			height: 5px !important;
		}

		.-h6 {
			height: 6px !important;
		}

		.-h7 {
			height: 7px !important;
		}

		.-h8 {
			height: 8px !important;
		}

		.-h9 {
			height: 9px !important;
		}

		.-h10 {
			height: 10px !important;
		}

		.-h11 {
			height: 11px !important;
		}

		.-h12 {
			height: 12px !important;
		}

		.-h13 {
			height: 13px !important;
		}

		.-h14 {
			height: 14px !important;
		}

		.-h15 {
			height: 15px !important;
		}

		.-h20 {
			height: 20px !important;
		}

		.-h25 {
			height: 25px !important;
		}

		.-h30 {
			height: 30px !important;
		}

		.-h32 {
			height: 32px !important;
		}

		.-h35 {
			height: 35px !important;
		}

		.-h40 {
			height: 40px !important;
		}

		.-h45 {
			height: 45px !important;
		}

		.-h50 {
			height: 50px !important;
		}

		.-h55 {
			height: 55px !important;
		}

		.-h60 {
			height: 60px !important;
		}

		.-h65 {
			height: 65px !important;
		}

		.-h70 {
			height: 70px !important;
		}

		.-h75 {
			height: 75px !important;
		}

		.-h80 {
			height: 80px !important;
		}

		.-h85 {
			height: 85px !important;
		}

		.-h90 {
			height: 90px !important;
		}

		.-h95 {
			height: 95px !important;
		}

		.-h100 {
			height: 100px !important;
		}

		.-h110 {
			height: 110px !important;
		}

		.-h120 {
			height: 120px !important;
		}

		.-h130 {
			height: 130px !important;
		}

		.-h140 {
			height: 140px !important;
		}

		.-h150 {
			height: 150px !important;
		}

		.-h160 {
			height: 160px !important;
		}

		.-h170 {
			height: 170px !important;
		}

		.-h180 {
			height: 180px !important;
		}

		.-h190 {
			height: 190px !important;
		}

		.-h200 {
			height: 200px !important;
		}

		.-h220 {
			height: 220px !important;
		}

		.-h230 {
			height: 230px !important;
		}

		.-h240 {
			height: 240px !important;
		}

		.-h245 {
			height: 245px !important;
		}

		.-h248 {
			height: 248px !important;
		}

		.-h250 {
			height: 250px !important;
		}

		.-h255 {
			height: 255px !important;
		}

		.-h260 {
			height: 260px !important;
		}

		.-h300 {
			height: 300px !important;
		}

		.-h350 {
			height: 350px !important;
		}

		.-h400 {
			height: 400px !important;
		}

		.-h450 {
			height: 450px !important;
		}

		.-h500 {
			height: 500px !important;
		}

		.-h550 {
			height: 550px !important;
		}

		.-h600 {
			height: 600px !important;
		}

		.-h650 {
			height: 650px !important;
		}

		.-h700 {
			height: 700px !important;
		}

		.-h750 {
			height: 750px !important;
		}

		.-h800 {
			height: 800px !important;
		}

		.-h900 {
			height: 900px !important;
		}

		.-h1000 {
			height: 1000px !important;
		}

		.-h5p {
			height: 5% !important;
		}

		.-h10p {
			height: 10% !important;
		}

		.-h15p {
			height: 15% !important;
		}

		.-h20p {
			height: 20% !important;
		}

		.-hq, .-h25p {
			height: 25% !important;
		}

		.-hh, .-h50p {
			height: 50% !important;
		}

		.-hf, .-h100p {
			height: 100% !important;
		}

		.-box-s-b {
			-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
			-moz-box-sizing: border-box; /* Firefox, other Gecko */
			box-sizing: border-box; /* Opera/IE 8+ */
		}

		.-box-content {
			box-sizing: content-box;
		}

		.-flex {
			display: flex;
		}

		.-flex-column {
			display: flex;
			flex-direction: column;
		}

		.-ai-center {
			align-items: center;
		}

		/* -p  padding */
		.-p0, .-nopadding, .-nopaddings {
			padding: 0 !important;
		}

		.-p1 {
			padding: 1px !important;
		}

		.-p2 {
			padding: 2px !important;
		}

		.-p3 {
			padding: 3px !important;
		}

		.-p4 {
			padding: 4px !important;
		}

		.-p5 {
			padding: 5px !important;
		}

		.-p6 {
			padding: 6px !important;
		}

		.-p7 {
			padding: 7px !important;
		}

		.-p8 {
			padding: 8px !important;
		}

		.-p9 {
			padding: 9px !important;
		}

		.-p10 {
			padding: 10px !important;
		}

		.-p15 {
			padding: 15px !important;
		}

		.-p20 {
			padding: 20px !important;
		}

		.-p25 {
			padding: 25px !important;
		}

		.-p30 {
			padding: 30px !important;
		}

		.-p35 {
			padding: 35px !important;
		}

		.-p40 {
			padding: 40px !important;
		}

		.-p45 {
			padding: 45px !important;
		}

		.-p50 {
			padding: 50px !important;
		}


		.-pl0 {
			padding-left: 0 !important;
		}

		.-pl1 {
			padding-left: 1px !important;
		}

		.-pl2 {
			padding-left: 2px !important;
		}

		.-pl3 {
			padding-left: 3px !important;
		}

		.-pl4 {
			padding-left: 4px !important;
		}

		.-pl5 {
			padding-left: 5px !important;
		}

		.-pl6 {
			padding-left: 6px !important;
		}

		.-pl7 {
			padding-left: 7px !important;
		}

		.-pl8 {
			padding-left: 8px !important;
		}

		.-pl9 {
			padding-left: 9px !important;
		}

		.-pl10 {
			padding-left: 10px !important;
		}

		.-pl15 {
			padding-left: 15px !important;
		}

		.-pl16 {
			padding-left: 16px !important;
		}

		.-pl17 {
			padding-left: 17px !important;
		}

		.-pl20 {
			padding-left: 20px !important;
		}

		.-pl25 {
			padding-left: 25px !important;
		}

		.-pl30 {
			padding-left: 30px !important;
		}

		.-pl35 {
			padding-left: 35px !important;
		}

		.-pl40 {
			padding-left: 40px !important;
		}

		.-pl45 {
			padding-left: 45px !important;
		}

		.-pl50 {
			padding-left: 50px !important;
		}

		.-pl55 {
			padding-left: 55px !important;
		}


		.-pr0 {
			padding-right: 0 !important;
		}

		.-pr1 {
			padding-right: 1px !important;
		}

		.-pr2 {
			padding-right: 2px !important;
		}

		.-pr3 {
			padding-right: 3px !important;
		}

		.-pr4 {
			padding-right: 4px !important;
		}

		.-pr5 {
			padding-right: 5px !important;
		}

		.-pr6 {
			padding-right: 6px !important;
		}

		.-pr7 {
			padding-right: 7px !important;
		}

		.-pr8 {
			padding-right: 8px !important;
		}

		.-pr9 {
			padding-right: 9px !important;
		}

		.-pr10 {
			padding-right: 10px !important;
		}

		.-pr15 {
			padding-right: 15px !important;
		}

		.-pr20 {
			padding-right: 20px !important;
		}

		.-pr25 {
			padding-right: 25px !important;
		}

		.-pr30 {
			padding-right: 30px !important;
		}

		.-pr35 {
			padding-right: 35px !important;
		}

		.-pr40 {
			padding-right: 40px !important;
		}

		.-pr45 {
			padding-right: 45px !important;
		}

		.-pr50 {
			padding-right: 50px !important;
		}

		.-pr55 {
			padding-right: 55px !important;
		}

		.-pt0 {
			padding-top: 0 !important;
		}

		.-pt1 {
			padding-top: 1px !important;
		}

		.-pt2 {
			padding-top: 2px !important;
		}

		.-pt3 {
			padding-top: 3px !important;
		}

		.-pt4 {
			padding-top: 4px !important;
		}

		.-pt5 {
			padding-top: 5px !important;
		}

		.-pt6 {
			padding-top: 6px !important;
		}

		.-pt7 {
			padding-top: 7px !important;
		}

		.-pt8 {
			padding-top: 8px !important;
		}

		.-pt9 {
			padding-top: 9px !important;
		}

		.-pt10 {
			padding-top: 10px !important;
		}

		.-pt15 {
			padding-top: 15px !important;
		}

		.-pt20 {
			padding-top: 20px !important;
		}

		.-pt25 {
			padding-top: 25px !important;
		}

		.-pt30 {
			padding-top: 30px !important;
		}

		.-pt35 {
			padding-top: 35px !important;
		}

		.-pt40 {
			padding-top: 40px !important;
		}

		.-pt45 {
			padding-top: 45px !important;
		}

		.-pt50 {
			padding-top: 50px !important;
		}

		.-pt55 {
			padding-top: 55px !important;
		}

		.-pt200 {
			padding-top: 200px !important;
		}

		.-pb0 {
			padding-bottom: 0 !important;
		}

		.-pb1 {
			padding-bottom: 1px !important;
		}

		.-pb2 {
			padding-bottom: 2px !important;
		}

		.-pb3 {
			padding-bottom: 3px !important;
		}

		.-pb4 {
			padding-bottom: 4px !important;
		}

		.-pb5 {
			padding-bottom: 5px !important;
		}

		.-pb6 {
			padding-bottom: 6px !important;
		}

		.-pb7 {
			padding-bottom: 7px !important;
		}

		.-pb8 {
			padding-bottom: 8px !important;
		}

		.-pb9 {
			padding-bottom: 9px !important;
		}

		.-pb10 {
			padding-bottom: 10px !important;
		}

		.-pb15 {
			padding-bottom: 15px !important;
		}

		.-pb20 {
			padding-bottom: 20px !important;
		}

		.-pb25 {
			padding-bottom: 25px !important;
		}

		.-pb30 {
			padding-bottom: 30px !important;
		}

		.-pb40 {
			padding-bottom: 40px !important;
		}

		-border-radius0, -radius0, -rad0 {
			border-radius: 0px !important;
		}

		-border-radius1, -radius1, -rad1 {
			border-radius: 0px !important;
		}

		-border-radius2, -radius2, -rad2 {
			border-radius: 0px !important;
		}

		-border-radius3, -radius3, -rad3 {
			border-radius: 0px !important;
		}

		-border-radius4, -radius4, -rad4 {
			border-radius: 0px !important;
		}

		-border-radius5, -radius5, -rad5 {
			border-radius: 0px !important;
		}

		-border-radius6, -radius6, -rad6 {
			border-radius: 0px !important;
		}

		-border-radius7, -radius7, -rad7 {
			border-radius: 0px !important;
		}

		-border-radius8, -radius8, -rad8 {
			border-radius: 0px !important;
		}

		-border-radius9, -radius9, -rad9 {
			border-radius: 0px !important;
		}

		-border-radius10, -radius10, -rad10 {
			border-radius: 0px !important;
		}


		/* -m  margin */

		.-mauto {
			margin: auto !important;
		}

		.-m0 .-nomargins, .-nomargin {
			margin: 0 !important;
		}

		.-m1 {
			margin: 1px !important;
		}

		.-m2 {
			margin: 2px !important;
		}

		.-m3 {
			margin: 3px !important;
		}

		.-m4 {
			margin: 4px !important;
		}

		.-m5 {
			margin: 5px !important;
		}

		.-m6 {
			margin: 6px !important;
		}

		.-m7 {
			margin: 7px !important;
		}

		.-m8 {
			margin: 8px !important;
		}

		.-m9 {
			margin: 9px !important;
		}

		.-m10 {
			margin: 10px !important;
		}

		.-m15 {
			margin: 15px !important;
		}

		.-m20 {
			margin: 20px !important;
		}

		.-m22 {
			margin: 22px !important;
		}

		.-m25 {
			margin: 25px !important;
		}

		.-m5p {
			margin: 5% !important;
		}

		.-m10p {
			margin: 10% !important;
		}

		.-m15p {
			margin: 15% !important;
		}

		.-m20p {
			margin: 20% !important;
		}

		.-m25p {
			margin: 25% !important;
		}

		.-mlauto {
			margin-left: auto !important;
		}

		.-ml0 {
			margin-left: 0 !important;
		}

		.-ml1 {
			margin-left: 1px !important;
		}

		.-ml2 {
			margin-left: 2px !important;
		}

		.-ml3 {
			margin-left: 3px !important;
		}

		.-ml4 {
			margin-left: 4px !important;
		}

		.-ml5 {
			margin-left: 5px !important;
		}

		.-ml6 {
			margin-left: 6px !important;
		}

		.-ml7 {
			margin-left: 7px !important;
		}

		.-ml8 {
			margin-left: 8px !important;
		}

		.-ml9 {
			margin-left: 9px !important;
		}

		.-ml10 {
			margin-left: 10px !important;
		}

		.-ml15 {
			margin-left: 15px !important;
		}

		.-ml20 {
			margin-left: 20px !important;
		}

		.-ml25 {
			margin-left: 25px !important;
		}

		.-ml27 {
			margin-left: 27px !important;
		}

		.-ml30 {
			margin-left: 30px !important;
		}

		.-ml50 {
			margin-left: 50px !important;
		}

		.-ml80 {
			margin-left: 80px !important;
		}

		.-ml100 {
			margin-left: 100px !important;
		}

		.-ml130 {
			margin-left: 130px !important;
		}

		.-ml150 {
			margin-left: 150px !important;
		}

		.-ml2p {
			margin-left: 2% !important;
		}

		.-ml3p {
			margin-left: 3% !important;
		}

		.-ml5p {
			margin-left: 5% !important;
		}

		.-ml10p {
			margin-left: 10% !important;
		}

		.-ml15p {
			margin-left: 15% !important;
		}

		.-ml20p {
			margin-left: 20% !important;
		}

		.-ml25p {
			margin-left: 25% !important;
		}

		.-mrauto {
			margin-right: auto !important;
		}

		.-mr0 {
			margin-right: 0 !important;
		}

		.-mr1 {
			margin-right: 1px !important;
		}

		.-mr2 {
			margin-right: 2px !important;
		}

		.-mr3 {
			margin-right: 3px !important;
		}

		.-mr4 {
			margin-right: 4px !important;
		}

		.-mr5 {
			margin-right: 5px !important;
		}

		.-mr6 {
			margin-right: 6px !important;
		}

		.-mr7 {
			margin-right: 7px !important;
		}

		.-mr8 {
			margin-right: 8px !important;
		}

		.-mr9 {
			margin-right: 9px !important;
		}

		.-mr10 {
			margin-right: 10px !important;
		}

		.-mr15 {
			margin-right: 15px !important;
		}

		.-mr20 {
			margin-right: 20px !important;
		}

		.-mr25 {
			margin-right: 25px !important;
		}

		.-mr30 {
			margin-right: 30px !important;
		}

		.-mr35 {
			margin-right: 35px !important;
		}

		.-mr40 {
			margin-right: 40px !important;
		}

		.-mr45 {
			margin-right: 45px !important;
		}

		.-mr50 {
			margin-right: 50px !important;
		}

		.-mr100 {
			margin-right: 100px !important;
		}

		.-mr2p {
			margin-right: 2% !important;
		}

		.-mr3p {
			margin-right: 3% !important;
		}

		.-mr5p {
			margin-right: 5% !important;
		}

		.-mr10p {
			margin-right: 10% !important;
		}

		.-mr15p {
			margin-right: 15% !important;
		}

		.-mr20p {
			margin-right: 20% !important;
		}

		.-mr25p {
			margin-right: 25% !important;
		}

		.-mtauto {
			margin-top: auto !important;
		}

		.-mt-7 {
			margin-top: -7px !important;
		}

		.-mt0 {
			margin-top: 0 !important;
		}

		.-mt1 {
			margin-top: 1px !important;
		}

		.-mt2 {
			margin-top: 2px !important;
		}

		.-mt3 {
			margin-top: 3px !important;
		}

		.-mt4 {
			margin-top: 4px !important;
		}

		.-mt5 {
			margin-top: 5px !important;
		}

		.-mt6 {
			margin-top: 6px !important;
		}

		.-mt7 {
			margin-top: 7px !important;
		}

		.-mt8 {
			margin-top: 8px !important;
		}

		.-mt9 {
			margin-top: 9px !important;
		}

		.-mt10 {
			margin-top: 10px !important;
		}

		.-mt11 {
			margin-top: 11px !important;
		}

		.-mt12 {
			margin-top: 12px !important;
		}

		.-mt13 {
			margin-top: 13px !important;
		}

		.-mt14 {
			margin-top: 14px !important;
		}

		.-mt15 {
			margin-top: 15px !important;
		}

		.-mt20 {
			margin-top: 20px !important;
		}

		.-mt25 {
			margin-top: 25px !important;
		}

		.-mt27 {
			margin-top: 27px !important;
		}

		.-mt30 {
			margin-top: 30px !important;
		}

		.-mt35 {
			margin-top: 35px !important;
		}

		.-mt40 {
			margin-top: 40px !important;
		}

		.-mt50 {
			margin-top: 50px !important;
		}

		.-mt115 {
			margin-top: 115px !important;
		}

		.-mt200 {
			margin-top: 200px !important;
		}

		.-mbauto {
			margin-bottom: auto !important;
		}

		.-mb0 {
			margin-bottom: 0 !important;
		}

		.-mb1 {
			margin-bottom: 1px !important;
		}

		.-mb2 {
			margin-bottom: 2px !important;
		}

		.-mb3 {
			margin-bottom: 3px !important;
		}

		.-mb4 {
			margin-bottom: 4px !important;
		}

		.-mb5 {
			margin-bottom: 5px !important;
		}

		.-mb6 {
			margin-bottom: 6px !important;
		}

		.-mb7 {
			margin-bottom: 7px !important;
		}

		.-mb8 {
			margin-bottom: 8px !important;
		}

		.-mb9 {
			margin-bottom: 9px !important;
		}

		.-mb10 {
			margin-bottom: 10px !important;
		}

		.-mb15 {
			margin-bottom: 15px !important;
		}

		.-mb20 {
			margin-bottom: 20px !important;
		}

		.-mb25 {
			margin-bottom: 25px !important;
		}

		.-mb30 {
			margin-bottom: 30px !important;
		}

		.-mb50 {
			margin-bottom: 50px !important;
		}


		.-top-10, .-t-10 {
			top: -10px !important;
		}

		.-top0, .-t0 {
			top: 0px !important;
		}

		.-top1, .-t1 {
			top: 1px !important;
		}

		.-top2, .-t2 {
			top: 2px !important;
		}

		.-top3, .-t3 {
			top: 3px !important;
		}

		.-top4, .-t4 {
			top: 4px !important;
		}

		.-top5, .-t5 {
			top: 5px !important;
		}

		.-top6, .-t6 {
			top: 6px !important;
		}

		.-top7, .-t7 {
			top: 7px !important;
		}

		.-top8, .-t8 {
			top: 8px !important;
		}

		.-top9, .-t9 {
			top: 9px !important;
		}

		.-top10, .-t10 {
			top: 10px !important;
		}

		.-top15, .-t15 {
			top: 15px !important;
		}

		.-top20, .-t20 {
			top: 20px !important;
		}

		.-top25, .-t25 {
			top: 25px !important;
		}

		.-top30, .-t30 {
			top: 30px !important;
		}

		.-top35, .-t35 {
			top: 35px !important;
		}

		.-top40, .-t40 {
			top: 40px !important;
		}

		.-top45, .-t45 {
			top: 45px !important;
		}

		.-top50, .-t50 {
			top: 50px !important;
		}

		.-top100, .-t100 {
			top: 100px !important;
		}

		.-top200, .-t200 {
			top: 200px !important;
		}

		.-top5p, .-t5p {
			top: 5% !important;
		}

		.-top10p, .-t10p {
			top: 10% !important;
		}

		.-top15p, .-t15p {
			top: 15% !important;
		}

		.-top20p, .-t20p {
			top: 20% !important;
		}

		.-top25p, .-t25p {
			top: 25% !important;
		}

		.-top50p, .-t50p {
			top: 50% !important;
		}

		.-top100p, .-t100p {
			top: 100% !important;
		}

		.-left0, .-l0 {
			left: 0px !important;
		}

		.-left1, .-l1 {
			left: 1px !important;
		}

		.-left2, .-l2 {
			left: 2px !important;
		}

		.-left3, .-l3 {
			left: 3px !important;
		}

		.-left4, .-l4 {
			left: 4px !important;
		}

		.-left5, .-l5 {
			left: 5px !important;
		}

		.-left6, .-l6 {
			left: 6px !important;
		}

		.-left7, .-l7 {
			left: 7px !important;
		}

		.-left8, .-l8 {
			left: 8px !important;
		}

		.-left9, .-l9 {
			left: 9px !important;
		}

		.-left10, .-l10 {
			left: 10px !important;
		}

		.-left15, .-l15 {
			left: 15px !important;
		}

		.-left20, .-l20 {
			left: 20px !important;
		}

		.-left25, .-l25 {
			left: 25px !important;
		}

		.-left30, .-l30 {
			left: 30px !important;
		}

		.-left35, .-l35 {
			left: 35px !important;
		}

		.-left40, .-l40 {
			left: 40px !important;
		}

		.-left45, .-l45 {
			left: 45px !important;
		}

		.-left50, .-l50 {
			left: 50px !important;
		}

		.-left55, .-l55 {
			left: 55px !important;
		}

		.-left60, .-l60 {
			left: 60px !important;
		}

		.-left65, .-l65 {
			left: 65px !important;
		}

		.-left70, .-l70 {
			left: 70px !important;
		}

		.-left75, .-l75 {
			left: 75px !important;
		}

		.-left80, .-l80 {
			left: 80px !important;
		}

		.-left85, .-l85 {
			left: 85px !important;
		}

		.-left90, .-l90 {
			left: 90px !important;
		}

		.-left95, .-l95 {
			left: 95px !important;
		}

		.-left100, .-l100 {
			left: 100px !important;
		}

		.-left150, .-l150 {
			left: 150px !important;
		}

		.-left200, .-l200 {
			left: 200px !important;
		}

		.-left250, .-l250 {
			left: 250px !important;
		}

		.-left300, .-l300 {
			left: 300px !important;
		}

		.-left5p, .-l5p {
			left: 5% !important;
		}

		.-left10p, .-l10p {
			left: 10% !important;
		}

		.-left15p, .-l15p {
			left: 15% !important;
		}

		.-left20p, .-l20p {
			left: 20% !important;
		}

		.-left25p, .-l25p {
			left: 25% !important;
		}

		.-left40p, .-l40p {
			left: 40% !important;
		}

		.-left50p, .-l50p {
			left: 50% !important;
		}

		.-left100p, .-l100p {
			left: 100% !important;
		}

		.-right0, .-r0 {
			right: 0px !important;
		}

		.-right1, .-r1 {
			right: 1px !important;
		}

		.-right2, .-r2 {
			right: 2px !important;
		}

		.-right3, .-r3 {
			right: 3px !important;
		}

		.-right4, .-r4 {
			right: 4px !important;
		}

		.-right5, .-r5 {
			right: 5px !important;
		}

		.-right6, .-r6 {
			right: 6px !important;
		}

		.-right7, .-r7 {
			right: 7px !important;
		}

		.-right8, .-r8 {
			right: 8px !important;
		}

		.-right9, .-r9 {
			right: 9px !important;
		}

		.-right10, .-r10 {
			right: 10px !important;
		}

		.-right15, .-r15 {
			right: 15px !important;
		}

		.-right20, .-r20 {
			right: 20px !important;
		}

		.-right25, .-r25 {
			right: 25px !important;
		}

		.-right30, .-r30 {
			right: 30px !important;
		}

		.-right35, .-r35 {
			right: 35px !important;
		}

		.-right40, .-r40 {
			right: 40px !important;
		}

		.-right45, .-r45 {
			right: 45px !important;
		}

		.-right50, .-r50 {
			right: 50px !important;
		}

		.-right55, .-r55 {
			right: 55px !important;
		}

		.-right60, .-r60 {
			right: 60px !important;
		}

		.-right65, .-r65 {
			right: 65px !important;
		}

		.-right70, .-r70 {
			right: 70px !important;
		}

		.-right75, .-r75 {
			right: 75px !important;
		}

		.-right80, .-r80 {
			right: 80px !important;
		}

		.-right85, .-r85 {
			right: 85px !important;
		}

		.-right90, .-r90 {
			right: 90px !important;
		}

		.-right95, .-r95 {
			right: 95px !important;
		}

		.-right100, .-r100 {
			right: 100px !important;
		}

		.-right150, .-r150 {
			right: 150px !important;
		}

		.-right200, .-r200 {
			right: 200px !important;
		}

		.-right250, .-r250 {
			right: 250px !important;
		}

		.-right5p, .-r5p {
			right: 5% !important;
		}

		.-right10p, .-r10p {
			right: 10% !important;
		}

		.-right15p, .-r15p {
			right: 15% !important;
		}

		.-right20p, .-r20p {
			right: 20% !important;
		}

		.-right25p, .-r25p {
			right: 25% !important;
		}

		.-right50p, .-r50p {
			right: 50% !important;
		}

		.-right100p, .-r100p {
			right: 100% !important;
		}


		/* table @in progress*/

		.-z-index99 {
			z-index: 99 !important;
		}

		.-z-index100 {
			z-index: 100 !important;
		}

		.-z-index101 {
			z-index: 101 !important;
		}

		.-z-index1001, .zindex1001 {
			z-index: 1001 !important;
		}

		.-z-index36001, .zindex36001 {
			z-index: 36001 !important;
		}


		.-no-border-spacing {
			border-spacing: 0 !important;
		}

		.-table {
			cellpadding: 0 !important;
			cellspacing: 0 !important;
			border: 0 !important;
		}

		table.-table thead th {
			background: #c3d9ff !important;
		}

		table.-table tr th, table.-table tr td {
			padding: 4px 10px 4px 5px !important;
		}

		tr.-border-bottom td, tr.-border-bottom th {
			border-bottom: 1pt solid black !important;
		}

		-white-space-nowrap {
			white-space: nowrap !important;
		}

		/* cursor */
		.-cursor-auto {
			cursor: auto;
		}

		.-cursor-default {
			cursor: default;
		}

		.-cursor-none {
			cursor: none;
		}

		.-cursor-context-menu {
			cursor: context-menu;
		}

		.-cursor-help {
			cursor: help;
		}

		.-cursor-pointer {
			cursor: pointer;
		}

		.-cursor-progress {
			cursor: progress;
		}

		.-cursor-wait {
			cursor: wait;
		}

		.-cursor-cell {
			cursor: cell;
		}

		.-cursor-crosshair {
			cursor: crosshair;
		}

		.-cursor-text {
			cursor: text;
		}

		.-cursor-vertical-text {
			cursor: vertical-text;
		}

		.-cursor-alias {
			cursor: alias;
		}

		.-cursor-copy {
			cursor: copy;
		}

		.-cursor-move {
			cursor: move;
		}

		.-cursor-no-drop {
			cursor: no-drop;
		}

		.-cursor-not-allowed {
			cursor: not-allowed;
		}

		.-cursor-all-scroll {
			cursor: all-scroll;
		}

		.-cursor-col-resize {
			cursor: col-resize;
		}

		.-cursor-row-resize {
			cursor: row-resize;
		}

		.-cursor-n-resize {
			cursor: n-resize;
		}

		.-cursor-e-resize {
			cursor: e-resize;
		}

		.-cursor-s-resize {
			cursor: s-resize;
		}

		.-cursor-w-resize {
			cursor: w-resize;
		}

		.-cursor-ns-resize {
			cursor: ns-resize;
		}

		.-cursor-ew-resize {
			cursor: ew-resize;
		}

		.-cursor-ne-resize {
			cursor: ne-resize;
		}

		.-cursor-nw-resize {
			cursor: nw-resize;
		}

		.-cursor-se-resize {
			cursor: se-resize;
		}

		.-cursor-sw-resize {
			cursor: sw-resize;
		}

		.-cursor-nesw-resize {
			cursor: nesw-resize;
		}

		.-cursor-nwse-resize {
			cursor: nwse-resize;
		}

		.-font-size0, .-fs0 {
			font-size: 0 !important;
		}

		.-font-size1, .-fs1 {
			font-size: 1px !important;
		}

		.-font-size2, .-fs2 {
			font-size: 2px !important;
		}

		.-font-size3, .-fs3 {
			font-size: 3px !important;
		}

		.-font-size4, .-fs4 {
			font-size: 4px !important;
		}

		.-font-size5, .-fs5 {
			font-size: 5px !important;
		}

		.-font-size6, .-fs6 {
			font-size: 6px !important;
		}

		.-font-size7, .-fs7 {
			font-size: 7px !important;
		}

		.-font-size8, .-fs8 {
			font-size: 8px !important;
		}

		.-font-size9, .-fs9 {
			font-size: 9px !important;
		}

		.-font-size10, .-fs10 {
			font-size: 10px !important;
		}

		.-font-size11, .-fs11 {
			font-size: 11px !important;
		}

		.-font-size12, .-fs12 {
			font-size: 12px !important;
		}

		.-font-size13, .-fs13 {
			font-size: 13px !important;
		}

		.-font-size14, .-fs14 {
			font-size: 14px !important;
		}

		.-font-size15, .-fs15 {
			font-size: 15px !important;
		}

		.-font-size16, .-fs16 {
			font-size: 16px !important;
		}

		.-font-size17, .-fs17 {
			font-size: 17px !important;
		}

		.-font-size18, .-fs18 {
			font-size: 18px !important;
		}

		.-font-size19, .-fs19 {
			font-size: 19px !important;
		}

		.-font-size20, .-fs20 {
			font-size: 20px !important;
		}

		.-font-size21, .-fs21 {
			font-size: 21px !important;
		}

		.-font-size22, .-fs22 {
			font-size: 22px !important;
		}

		.-font-size23, .-fs23 {
			font-size: 23px !important;
		}

		.-font-size24, .-fs24 {
			font-size: 24px !important;
		}

		.-font-size25, .-fs25 {
			font-size: 25px !important;
		}

		.-font-size26, .-fs26 {
			font-size: 26px !important;
		}

		.-font-size27, .-fs27 {
			font-size: 27px !important;
		}

		.-font-size28, .-fs28 {
			font-size: 28px !important;
		}

		.-font-size29, .-fs29 {
			font-size: 29px !important;
		}

		.-font-size30, .-fs30 {
			font-size: 30px !important;
		}

		.-font-size31, .-fs31 {
			font-size: 31px !important;
		}

		.-font-size32, .-fs32 {
			font-size: 32px !important;
		}

		.-font-size33, .-fs33 {
			font-size: 33px !important;
		}

		.-font-size34, .-fs34 {
			font-size: 34px !important;
		}

		.-font-size35, .-fs35 {
			font-size: 35px !important;
		}

		.-font-size36, .-fs36 {
			font-size: 36px !important;
		}

		.-font-size37, .-fs37 {
			font-size: 37px !important;
		}

		.-font-size38, .-fs38 {
			font-size: 38px !important;
		}

		.-font-size39, .-fs39 {
			font-size: 39px !important;
		}

		.-font-size40, .-fs40 {
			font-size: 40px !important;
		}


		/* <img class="-red-line-big -w100 lazyload" data-src="/images/red-line.png" alt='red line' />  !!! add also -wclass to the element*/
		.-red-line-h35 {
			height: 35px;
			margin-bottom: -35px;
			position: relative;
			top: -25px;
		}

		#breadcrumbs {
			float: left;
			font-size: 16px;
			margin-left: 10px;
			margin-top: 8px;
			margin-bottom: 15px;
			color: #757575;
		}

		#breadcrumbs a {
			color: #757575;
		}

		/***************
<CarProof Widget>
****************/

		#carproof_main.carproof_main {
			width: 340px;
			height: auto;
			background-color: #fff;
			padding: 20px;
			display: none;
			z-index: 9999;
			box-sizing: border-box;
			border-radius: 5px;
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

		#carproof_main .carproofMainDiv UL {
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

		#carproof_main .carproof_field {
			margin-bottom: 7px;
		}

		#carproof_main .carproofMessage {
			font-size: 1rem;
			color: #000;
			font-weight: normal;
			padding-bottom: 15px;
			position: relative;
			float: left;
			width: 100%;
			box-sizing: border-box;
		}

		#innerPageDiv {
			display: table;
		}

		#carproof_main .carproof_label {
			font-size: 1rem;
			color: #666666;
			font-weight: bold;
			display: block;
			float: left;
			margin: 0;
			text-align: left;
			width: 100%;
			line-height: 25px;
			box-sizing: border-box;
		}

		#carproof_main .carproof_input {
			font-size: 1rem;
			padding: 5px;
			border: 1px solid #b9bdc1;
			width: 100%;
			color: #797979;
			box-sizing: border-box;
			margin-bottom: 10px;
			border-radius: 5px;
		}

		#carproof_main .carproof_input:focus {
			background-color: #F4F4F4;
			color: #000000 !important; /* quick fix JS or something is add inline style color making carproof form look like shit */
		}

		#carproof_main .phoneInput {
			font-size: 1rem;
			padding: 5px;
			border: 1px solid #b9bdc1;
			width: 47px;
			margin-right: 5px;
			color: #797979;
			border-radius: 5px;
		}

		#carproof_main .phoneInput:focus {
			background-color: #F4F4F4;
			color: #000000;
		}

		#carproof_main .carproof_buttonIE {
			border: 1px solid #C83F41;
			margin: 10px 10px 10px 0;
			padding: 3px 10px;
			text-align: center;
			float: right;
			width: 60px;
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

		#carproof_main .carproof_buttonIEHover {
			background-color: #C83F41;
			font-weight: bold;
		}

		#carproof_main .carproof_button {
			font-size: 1rem;
			float: right;
			margin: 25px 0 0;
			font-weight: normal;
			line-height: 1rem;
			padding: 10px 15px;
			cursor: pointer;
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

		#carproof_main .carproof_button:hover {
			background: #C83F41;
			cursor: pointer;
		}

		#carproof_dialog-overlay {
			background: rgba(0, 0, 0, .8);
			/* make sure it appear behind the dialog box but above everything else */
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			z-index: 9998;
			/* hide it by default */
			display: none;
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
			width: 106px;
			margin: 2px 5px 0 0;
			float: left;
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
		#asPopUp {
			background: #ffffff;
			width: 340px;
			height: 240px;
			padding: 30px;
			color: #000000;
		}

		#asPopUp .asTitle {
			text-align: center;
			font-size: 36px;
			font-weight:;
			margin-bottom: 20px;
		}

		#asPopUp .btnExplicit {
			float: left;
			padding-left: 70px;
			width: 100px;
		}

		#asPopUp .btnImplicit {
			float: right;
			width: 100px;
			padding-right: 70px;
		}

		/***************
</Anti-Spam POpup>
****************/

		/***************
<Vehicle Purchase Intent Interstital POpup>
****************/


		#asPurchaseIntent.reveal-modal span.jqTransformRadioWrapper {
			padding: 0;
			margin: 6px 4px 0;
		}

		#asPurchaseIntent .viTitle {

		}

		#asPurchaseIntent .asPITitle {
			text-align: left;
			font-size: 25px;
			margin-bottom: 0;
			padding-bottom: 10px;
			display: block;
		}

		#asPurchaseIntent .viText {
			clear: both;
			font-weight: bold;
			padding-bottom: 10px;
		}

		#asPurchaseIntent .viOptions {
			list-style: none;
			padding: 5px;
			margin-bottom: 3px;
		}

		#asPurchaseIntent .viOptions li {
			padding: 2px;
		}

		#asPurchaseIntent .viOptions li {
			clear: both;
			font-size: 10pt;
		}

		#asPurchaseIntent li label {
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

		#asPurchaseIntent .steps > li {
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

		#asPurchaseIntent .asyes {
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
		.cta_price, .cta_credit, .cta_testDrive, .cta_eval, .cta_svcpromo, .cta_service, .cta_parts, .cta_tires {
			width: 280px;
			height: 61px;
			padding: 0 15px 0 60px;
			display: table-cell;
			vertical-align: middle;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			color: #191919;
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
			color: #191919;
		}

		.custom55_left,
		.custom255_left,
		.custom355_left,
		.custom455_left,
		.cta_price.alt, .cta_price:hover,
		.cta_credit.alt, .cta_credit:hover,
		.cta_testDrive.alt, .cta_testDrive:hover,
		.cta_eval.alt, .cta_eval:hover,
		.cta_service.alt, .cta_service:hover,
		.cta_parts.alt, .cta_parts:hover,
		.cta_tires.alt, .cta_tires:hover,
		.cta_svcpromo.alt, .cta_svcpromo:hover {
			color: #FFFFFF;
		}

		.cta_price, .cta_price.alt:hover {
			background-position: 0 0;
		}

		.cta_price.alt, .cta_price:hover {
			background-position: -309px 0;
		}

		.cta_credit, .cta_credit.alt:hover {
			background-position: left -67px;
		}

		.cta_credit.alt, .cta_credit:hover {
			background-position: -309px -67px;
		}

		.cta_testDrive, .cta_testDrive.alt:hover {
			background-position: left -135px;
		}

		.cta_testDrive.alt, .cta_testDrive:hover {
			background-position: -309px -135px;
		}

		.cta_eval, .cta_eval.alt:hover {
			background-position: left -204px;
		}

		.cta_eval.alt, .cta_eval:hover {
			background-position: -309px -204px;
		}

		.cta_svcpromo, .cta_svcpromo.alt:hover {
			background-position: left -273px;
		}

		.cta_svcpromo.alt, .cta_svcpromo:hover {
			background-position: -309px -273px;
		}

		.cta_service, .cta_service.alt:hover {
			background-position: left -341px;
		}

		.cta_service.alt, .cta_service:hover {
			background-position: -309px -341px;
		}

		.cta_parts, .cta_parts.alt:hover {
			background-position: left -410px;
		}

		.cta_parts.alt, .cta_parts:hover {
			background-position: -309px -410px;
		}

		.cta_tires, .cta_tires.alt:hover {
			background-position: left -482px;
		}

		.cta_tires.alt, .cta_tires:hover {
			background-position: -309px -482px;
		}

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
		body.FRENCH .cta_price.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.FRENCH .cta_credit.custom,
		body.FRENCH .cta_credit.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.FRENCH .cta_testDrive.custom,
		body.FRENCH .cta_testDrive.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.FRENCH .cta_eval.custom,
		body.FRENCH .cta_eval.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.FRENCH .cta_service.custom,
		body.FRENCH .cta_service.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.FRENCH .cta_parts.custom,
		body.FRENCH .cta_parts.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.FRENCH .cta_tires.custom,
		body.FRENCH .cta_tires.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.FRENCH .cta_svcpromo.custom,
		body.FRENCH .cta_svcpromo.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.ENGLISH .cta_price.custom,
		body.ENGLISH .cta_price.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.ENGLISH .cta_credit.custom,
		body.ENGLISH .cta_credit.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.ENGLISH .cta_testDrive.custom,
		body.ENGLISH .cta_testDrive.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.ENGLISH .cta_eval.custom,
		body.ENGLISH .cta_eval.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.ENGLISH .cta_service.custom,
		body.ENGLISH .cta_service.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.ENGLISH .cta_parts.custom,
		body.ENGLISH .cta_parts.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.ENGLISH .cta_tires.custom,
		body.ENGLISH .cta_tires.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		body.ENGLISH .cta_svcpromo.custom,
		body.ENGLISH .cta_svcpromo.custom:hover {
			background: url('images/blank.gif');
			background-size: 280px;
		}

		/* BLACK BUTTONS */
		body.FRENCH .cta_price.black,
		body.FRENCH .cta_price.black:hover {
			background: url('images/action_buttons/CTA_price_black_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_credit.black,
		body.FRENCH .cta_credit.black:hover {
			background: url('images/action_buttons/CTA_finance_black_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_testDrive.black,
		body.FRENCH .cta_testDrive.black:hover {
			background: url('images/action_buttons/CTA_testdrive_black_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_eval.black,
		body.FRENCH .cta_eval.black:hover {
			background: url('images/action_buttons/CTA_tradein_black_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_service.black,
		body.FRENCH .cta_service.black:hover {
			background: url('images/action_buttons/CTA_service_black_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_parts.black,
		body.FRENCH .cta_parts.black:hover {
			background: url('images/action_buttons/CTA_parts_black_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_tires.black,
		body.FRENCH .cta_tires.black:hover {
			background: url('images/action_buttons/CTA_tires_black_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_svcpromo.black,
		body.FRENCH .cta_svcpromo.black:hover {
			background: url('images/action_buttons/CTA_promoservice_black_fr.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_price.black,
		body.ENGLISH .cta_price.black:hover {
			background: url('images/action_buttons/CTA_price_black_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_credit.black,
		body.ENGLISH .cta_credit.black:hover {
			background: url('images/action_buttons/CTA_finance_black_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_testDrive.black,
		body.ENGLISH .cta_testDrive.black:hover {
			background: url('images/action_buttons/CTA_testdrive_black_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_eval.black,
		body.ENGLISH .cta_eval.black:hover {
			background: url('images/action_buttons/CTA_tradein_black_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_service.black,
		body.ENGLISH .cta_service.black:hover {
			background: url('images/action_buttons/CTA_service_black_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_parts.black,
		body.ENGLISH .cta_parts.black:hover {
			background: url('images/action_buttons/CTA_parts_black_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_tires.black,
		body.ENGLISH .cta_tires.black:hover {
			background: url('images/action_buttons/CTA_tires_black_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_svcpromo.black,
		body.ENGLISH .cta_svcpromo.black:hover {
			background: url('images/action_buttons/CTA_promoservice_black_en.png');
			background-size: 280px;
		}

		/* BLUE BUTTONS */
		body.FRENCH .cta_price.blue,
		body.FRENCH .cta_price.blue:hover {
			background: url('images/action_buttons/CTA_price_blue_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_credit.blue,
		body.FRENCH .cta_credit.blue:hover {
			background: url('images/action_buttons/CTA_finance_blue_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_testDrive.blue,
		body.FRENCH .cta_testDrive.blue:hover {
			background: url('images/action_buttons/CTA_testdrive_blue_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_eval.blue,
		body.FRENCH .cta_eval.blue:hover {
			background: url('images/action_buttons/CTA_tradein_blue_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_service.blue,
		body.FRENCH .cta_service.blue:hover {
			background: url('images/action_buttons/CTA_service_blue_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_parts.blue,
		body.FRENCH .cta_parts.blue:hover {
			background: url('images/action_buttons/CTA_parts_blue_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_tires.blue,
		body.FRENCH .cta_tires.blue:hover {
			background: url('images/action_buttons/CTA_tires_blue_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_svcpromo.blue,
		body.FRENCH .cta_svcpromo.blue:hover {
			background: url('images/action_buttons/CTA_promoservice_blue_fr.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_price.blue,
		body.ENGLISH .cta_price.blue:hover {
			background: url('images/action_buttons/CTA_price_blue_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_credit.blue,
		body.ENGLISH .cta_credit.blue:hover {
			background: url('images/action_buttons/CTA_finance_blue_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_testDrive.blue,
		body.ENGLISH .cta_testDrive.blue:hover {
			background: url('images/action_buttons/CTA_testdrive_blue_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_eval.blue,
		body.ENGLISH .cta_eval.blue:hover {
			background: url('images/action_buttons/CTA_tradein_blue_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_service.blue,
		body.ENGLISH .cta_service.blue:hover {
			background: url('images/action_buttons/CTA_service_blue_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_parts.blue,
		body.ENGLISH .cta_parts.blue:hover {
			background: url('images/action_buttons/CTA_parts_blue_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_tires.blue,
		body.ENGLISH .cta_tires.blue:hover {
			background: url('images/action_buttons/CTA_tires_blue_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_svcpromo.blue,
		body.ENGLISH .cta_svcpromo.blue:hover {
			background: url('images/action_buttons/CTA_promoservice_blue_en.png');
			background-size: 280px;
		}

		/* RED BUTTONS */
		body.FRENCH .cta_price.red,
		body.FRENCH .cta_price.red:hover {
			background: url('images/action_buttons/CTA_price_red_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_credit.red,
		body.FRENCH .cta_credit.red:hover {
			background: url('images/action_buttons/CTA_finance_red_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_testDrive.red,
		body.FRENCH .cta_testDrive.red:hover {
			background: url('images/action_buttons/CTA_testdrive_red_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_eval.red,
		body.FRENCH .cta_eval.red:hover {
			background: url('images/action_buttons/CTA_tradein_red_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_service.red,
		body.FRENCH .cta_service.red:hover {
			background: url('images/action_buttons/CTA_service_red_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_parts.red,
		body.FRENCH .cta_parts.red:hover {
			background: url('images/action_buttons/CTA_parts_red_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_tires.red,
		body.FRENCH .cta_tires.red:hover {
			background: url('images/action_buttons/CTA_tires_red_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_svcpromo.red,
		body.FRENCH .cta_svcpromo.red:hover {
			background: url('images/action_buttons/CTA_promoservice_red_fr.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_price.red,
		body.ENGLISH .cta_price.red:hover {
			background: url('images/action_buttons/CTA_price_red_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_credit.red,
		body.ENGLISH .cta_credit.red:hover {
			background: url('images/action_buttons/CTA_finance_red_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_testDrive.red,
		body.ENGLISH .cta_testDrive.red:hover {
			background: url('images/action_buttons/CTA_testdrive_red_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_eval.red,
		body.ENGLISH .cta_eval.red:hover {
			background: url('images/action_buttons/CTA_tradein_red_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_service.red,
		body.ENGLISH .cta_service.red:hover {
			background: url('images/action_buttons/CTA_service_red_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_parts.red,
		body.ENGLISH .cta_parts.red:hover {
			background: url('images/action_buttons/CTA_parts_red_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_tires.red,
		body.ENGLISH .cta_tires.red:hover {
			background: url('images/action_buttons/CTA_tires_red_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_svcpromo.red,
		body.ENGLISH .cta_svcpromo.red:hover {
			background: url('images/action_buttons/CTA_promoservice_red_en.png');
			background-size: 280px;
		}

		/* GREY BUTTONS */
		body.FRENCH .cta_price.grey,
		body.FRENCH .cta_price.grey:hover {
			background: url('images/action_buttons/CTA_price_grey_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_credit.grey,
		body.FRENCH .cta_credit.grey:hover {
			background: url('images/action_buttons/CTA_finance_grey_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_testDrive.grey,
		body.FRENCH .cta_testDrive.grey:hover {
			background: url('images/action_buttons/CTA_testdrive_grey_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_eval.grey,
		body.FRENCH .cta_eval.grey:hover {
			background: url('images/action_buttons/CTA_tradein_grey_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_service.grey,
		body.FRENCH .cta_service.grey:hover {
			background: url('images/action_buttons/CTA_service_grey_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_parts.grey,
		body.FRENCH .cta_parts.grey:hover {
			background: url('images/action_buttons/CTA_parts_grey_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_tires.grey,
		body.FRENCH .cta_tires.grey:hover {
			background: url('images/action_buttons/CTA_tires_grey_fr.png');
			background-size: 280px;
		}

		body.FRENCH .cta_svcpromo.grey,
		body.FRENCH .cta_svcpromo.grey:hover {
			background: url('images/action_buttons/CTA_promoservice_grey_fr.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_price.grey,
		body.ENGLISH .cta_price.grey:hover {
			background: url('images/action_buttons/CTA_price_grey_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_credit.grey,
		body.ENGLISH .cta_credit.grey:hover {
			background: url('images/action_buttons/CTA_finance_grey_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_testDrive.grey,
		body.ENGLISH .cta_testDrive.grey:hover {
			background: url('images/action_buttons/CTA_testdrive_grey_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_eval.grey,
		body.ENGLISH .cta_eval.grey:hover {
			background: url('images/action_buttons/CTA_tradein_grey_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_service.grey,
		body.ENGLISH .cta_service.grey:hover {
			background: url('images/action_buttons/CTA_service_grey_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_parts.grey,
		body.ENGLISH .cta_parts.grey:hover {
			background: url('images/action_buttons/CTA_parts_grey_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_tires.grey,
		body.ENGLISH .cta_tires.grey:hover {
			background: url('images/action_buttons/CTA_tires_grey_en.png');
			background-size: 280px;
		}

		body.ENGLISH .cta_svcpromo.grey,
		body.ENGLISH .cta_svcpromo.grey:hover {
			background: url('images/action_buttons/CTA_promoservice_grey_en.png');
			background-size: 280px;
		}

		.cta_price:hover,
		.cta_credit:hover,
		.cta_testDrive:hover,
		.cta_eval:hover,
		.cta_service:hover,
		.cta_parts:hover,
		.cta_tires:hover,
		.cta_svcpromo:hover {
			opacity: 0.75;
		}

		/**************
/ END Call to Action Buttons (Small)
**************/

		/*************************
Certified Vehicles Images:
**************************/
		.search_cert_generic {
			/*width:106px;*/
			height: 44px;
			margin: 2px 5px 0 0;
			float: left;
			margin-top: -0px;
		}

		/**********
New Details Compare
***********/

		#CompareBox {
			width: 790px;
			height: auto;
			float: left;
			margin-bottom: 10px;
			padding: 12px 20px;
			background: #e8e8e8;
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			-khtml-border-radius: 8px;
			border-radius: 8px;
		}

		#CompareBox h2 {
			padding: 0 0px 10px 0px;
			line-height: 20px;
			font-size: 20px;
			color: #242424;
			font-weight: normal;
			margin-bottom: 0;
		}

		#CompareBox #compareButton a {
			color: #ffffff;
			text-transform: uppercase;
			text-decoration: none;
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
		#newCarInUsedPage {
			margin-top: -2px;
			margin-bottom: 5px;
			display: none;
			text-decoration: none;
		}

		#newCarInUsedPage .box288_top {
			background: url('images/right_box4_top.png') no-repeat scroll left top transparent;
		}

		#newCarInUsedPage .box2880_mid {
			background: url('images/right_box4_mid.png') repeat-y scroll left top transparent
		}

		#newCarInUsedPage .box288_footer_qs {
			background: url('images/right_box4_footer.png') no-repeat scroll left top transparent
		}

		#newCarInUsedPage_scratchPrice {
			width: 110px;
			height: 35px;
			float: right;
			position: relative;
			left: -83px;
			display: none;
		}

		#newCarInUsedPage_title {
			display: block;
			text-align: center;
			font-size: 15px;
			font-weight: bold;
			text-decoration: none;
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
		ul#credit_bodyTypes li > label {
			display: block;
			padding-bottom: 5px;
			font-weight: normal;
			font-size: 13px;
			color: #242424;
			float: none;
		}

		ul#credit_drivetrain li > div,
		ul#credit_fueltype li > div,
		ul#credit_bodyTypes li > div {
			display: block;
			padding-bottom: 5px;
			font-weight: normal;
			font-size: 13px;
			color: #000000;
			float: none;
		}

		ul#credit_drivetrain li > label > span,
		ul#credit_fueltype li > label > span,
		ul#credit_bodyTypes li > label > span {
			margin-right: 8px;
			margin-top: 0px;
		}

		#credit_vi_advanced label {
			float: left;
		}

		#credit_vi_advanced label div.label {
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
		.details_box .box2_details_mid .box2_details_text span {
			color: #ff0000;
		}

		.mycarousel_td {
			display: block;
			width: 560px;
			overflow: hidden;
			margin-left: 30px;
			margin-top: 10px;

		}


		.vehicleCarousel {
			width: 190px;
			/*height:180px;*/

		}

		.details_box, .details_box .box2_details_midEx {
			background: #b5b5b4;
		}

		#extColorSelect.fixedWidth,
		#intColorSelect.fixedWidth {
			width: 230px;
		}

		.colorChoice {
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

		.colorChoice.chosen {
			text-indent: 0; /*background-image: url( '/images/check.png' );*/
		}

		.colorChoice.tan {
			background-color: #d2b48c;
		}

		.colorChoice.black {
			background-color: #000000;
		}

		.colorChoice.gold {
			background-color: #b29600;
		}

		.colorChoice.brown {
			background-color: #66330e;
		}

		.colorChoice.green {
			background-color: #009900;
		}

		.colorChoice.gray {
			background-color: #979797;
		}

		.colorChoice.grey {
			background-color: #979797;
		}

		.colorChoice.orange {
			background-color: #e69400;
		}

		.colorChoice.silver {
			background-color: #c0c0c0;
			color: #000000;
		}

		.colorChoice.mauve {
			background-color: #d473d4;
		}

		.colorChoice.red {
			background-color: #cc0000;
		}

		.colorChoice.white {
			background-color: #FFFFFF;
			color: #000000;
		}

		.colorChoice.yellow {
			background-color: #f0c000;
			color: #000000;
		}

		.colorChoice.blue {
			background-color: #1919c4;
		}

		.colorChoice.copper {
			background-color: #AF4744;
		}

		.colorChoice.purple {
			background-color: #5315B2;
		}

		.light-gray {
			background-color: #4b4c4c;
			color: #000000;
		}


		a.colorChoice {
			color: #fff;
			text-decoration: none;
		}

		tr.border_bottom_line td, tr.border_bottom_line th {
			border-bottom: 1pt solid black;
		}

		.border_box {
			border-radius: 5px;
			margin-bottom: 5px;
			background-color: rgb(255, 255, 255);
			-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
			background-color: rgba(255, 255, 255, 1);
			box-shadow: none;
			clear: both;
		}

		.homepage .border_box {
			box-shadow: none !important;
		}

		#home_socialTimeline {
			background-color:;
		}

		#footerWrapper {
			width: 100%;
			margin-top: 0px;
			clear: both;
			padding-top: 15px;
			color: #fff;
			/* color: var(--footer-items-link-color); */
			background-color: #333333;
			background-color: #444444;
		}

		.customform_submit {
			margin-top: 20px;
			margin-bottom: 20px;
		}

		.seeOptions {
			display: none;
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
			-moz-border-radius: 20px 0;
			-webkit-border-radius: 20px 0;
			border-radius: 20px 0;
			content: "";
			height: 2px;
			position: absolute;
			top: 45%;
			-moz-transform: rotate(7deg);
			-webkit-transform: rotate(7deg);
			transform: rotate(7deg);
			transform-origin: 50% 50% 0;
			width: 100%;
		}

		.strike-price::before {
			background: none repeat scroll 0 0 #000;
			/*background:none repeat scroll 0 0 #cc0000;*/
		}

		.strike-price-black::before {
			background: none repeat scroll 0 0 black;
		}

		.strike-price-white::before {
			background: none repeat scroll 0 0 white;
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

		.left_box {
			background-color: rgb(255, 255, 255);
			-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
			background-color: rgba(255, 255, 255, 1);
			margin-top: 10px;
			padding: 10px 0 10px;
			float: left;
			height: auto;
			border-radius: 5px;
			box-shadow: none;
		}

		.btn-default, .btn-sm, .btn-lg, .customform_submit, .submit {
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			display: inline-block;
			cursor: pointer;
			text-decoration: none;
			text-transform: uppercase;
			/*font-weight: bold;*/
		}

		.btn-default,
		.submit,
		.customform_submit,
		input[type=button].btn-default,
		input[type=submit].btn-default {
			padding: 11px 20px 9px 20px;
			border-radius: 3px;
		}

		.btn-sm,
		input[type=button].btn-sm,
		input[type=submit].btn-sm {
			font-size: inherit !important;
			padding: 4px 10px !important;
			border-radius: 3px !important;
		}

		.btn-lg,
		input[type=button].btn-lg,
		input[type=submit].btn-lg {
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
		input[type=submit].btn-default {
			font-size: 0.8rem;
		}

		#exit_popup_yes {
			-moz-box-shadow: inset 0px -3px 7px 0px #e80d0d;
			-webkit-box-shadow: inset 0px -3px 7px 0px #e80d0d;
			box-shadow: inset 0px -3px 7px 0px #e80d0d;
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ff3333), color-stop(1, #DB0000));
			background: -moz-linear-gradient(top, #ff3333 5%, #DB0000 100%);
			background: -webkit-linear-gradient(top, #ff3333 5%, #DB0000 100%);
			background: -o-linear-gradient(top, #ff3333 5%, #DB0000 100%);
			background: -ms-linear-gradient(top, #ff3333 5%, #DB0000 100%);
			background: linear-gradient(to bottom, #ff3333 5%, #DB0000 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3333', endColorstr='#DB0000', GradientType=0);
			background-color: #ff3333;
			border: 1px solid #f51a1a;
			color: #ffffff;
			margin-left: 40px;
		}

		#exit_popup_yes:hover {
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #DB0000), color-stop(1, #ff3333));
			background: -moz-linear-gradient(top, #DB0000 5%, #ff3333 100%);
			background: -webkit-linear-gradient(top, #DB0000 5%, #ff3333 100%);
			background: -o-linear-gradient(top, #DB0000 5%, #ff3333 100%);
			background: -ms-linear-gradient(top, #DB0000 5%, #ff3333 100%);
			background: linear-gradient(to bottom, #DB0000 5%, #ff3333 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#DB0000', endColorstr='#ff3333', GradientType=0);
			background-color: #DB0000;
		}

		#exit_popup_no {
			-moz-box-shadow: inset 0px -3px 7px 0px #404040;
			-webkit-box-shadow: inset 0px -3px 7px 0px #404040;
			box-shadow: inset 0px -3px 7px 0px #404040;
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #666666), color-stop(1, #333333));
			background: -moz-linear-gradient(top, #666666 5%, #333333 100%);
			background: -webkit-linear-gradient(top, #666666 5%, #333333 100%);
			background: -o-linear-gradient(top, #666666 5%, #333333 100%);
			background: -ms-linear-gradient(top, #666666 5%, #333333 100%);
			background: linear-gradient(to bottom, #666666 5%, #333333 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#666666', endColorstr='#333333', GradientType=0);
			background-color: #666666;
			border: 1px solid #4d4d4d;
			color: #ffffff;
		}

		#exit_popup_no:hover {
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #333333), color-stop(1, #666666));
			background: -moz-linear-gradient(top, #333333 5%, #666666 100%);
			background: -webkit-linear-gradient(top, #333333 5%, #666666 100%);
			background: -o-linear-gradient(top, #333333 5%, #666666 100%);
			background: -ms-linear-gradient(top, #333333 5%, #666666 100%);
			background: linear-gradient(to bottom, #333333 5%, #666666 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#333333', endColorstr='#666666', GradientType=0);
			background-color: #333333;
		}

		/* DEFAULT BUTTON: COLOR BASED ON MENU TAB COLOR*/
		.btn-default,
		.btn-sm, .btn-lg,
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
		.btn-lg.promocolor:hover {
			background-color: #ffffff;
			color: #cc0000;
		}

		/* BUTTON: COLOR BLACK */
		.btn-default.black,
		.btn-sm.black,
		.btn-lg.black {
			background-color: #000000;
			border: 1px solid #000000;
			color: #ffffff;
		}

		.btn-default.black.withborder,
		.btn-sm.black.withborder,
		.btn-lg.black.withborder {
			border: 1px solid #ffffff;
		}

		.btn-default.black:hover,
		.btn-sm.black:hover,
		.btn-lg.black:hover {
			background-color: #ffffff;
			color: #000000;
		}


		/* BUTTON: COLOR NO */
		.btn-default.no,
		.btn-sm.no,
		.btn-lg.no {
			background-color: #FFF;
			border: 1px solid #555;
			color: #000;
		}

		.btn-default.no:hover,
		.btn-sm.no:hover,
		.btn-lg.no:hover {
			background-color: #666666;
			border: 1px solid #666666;
			color: #FFFFFF;
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
		.btn-lg.invert.flat:hover {
			background-color: #333333;
			color: #ffffff;
		}


		/* BUTTON: COLOR RED */
		.btn-default.red,
		.btn-sm.red,
		.btn-lg.red {
			background: #ff3333 !important;
			background-color: #ff3333 !important;
			border: 1px solid #f51a1a !important;
			color: #FFFFFF !important;
		}

		.btn-default.red:hover,
		.btn-sm.red:hover,
		.btn-lg.red:hover {
			background: #333333 !important;
			background-color: #333333 !important;
			border: 1px solid #333333 !important;
			color: #FFFFFF !important;

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
			-moz-box-shadow: inset 0px -3px 7px 0px #ff0d0d;
			-webkit-box-shadow: inset 0px -3px 7px 0px #ff0d0d;
			box-shadow: inset 0px -3px 7px 0px #ff0d0d;
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ff3333), color-stop(1, #ff0000));
			background: -moz-linear-gradient(top, #ff3333 5%, #ff0000 100%);
			background: -webkit-linear-gradient(top, #ff3333 5%, #ff0000 100%);
			background: -o-linear-gradient(top, #ff3333 5%, #ff0000 100%);
			background: -ms-linear-gradient(top, #ff3333 5%, #ff0000 100%);
			background: linear-gradient(to bottom, #ff3333 5%, #ff0000 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3333', endColorstr='#DB0000', GradientType=0);
			background-color: #ff3333;
			border: 1px solid #ff1a1a;
		}

		.apply-credit:hover {
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ff3333), color-stop(1, #ff0000));
			background: -moz-linear-gradient(top, #ff0000 5%, #ff3333 100%);
			background: -webkit-linear-gradient(top, #ff0000 5%, #ff3333 100%);
			background: -o-linear-gradient(top, #ff0000 5%, #ff3333 100%);
			background: -ms-linear-gradient(top, #ff0000 5%, #ff3333 100%);
			background: linear-gradient(to bottom, #ff0000 5%, #ff3333 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3333', endColorstr='#DB0000', GradientType=0);
			background-color: #ff3333;
		}


		.promoBTN, .promoBTN a, .brochureBtn {
			background: #cc0000 !important;
			color: #ffffff !important;
			text-shadow: none !important;
		}

		.promoBTN:hover, .promoBTN a:hover, .brochureBtn:hover {
			background: #ffffff !important;
			color: #cc0000 !important;
			border: 1px solid #cc0000;
		}

		.promoArrow, .promoColor {
			color: #cc0000 !important;
		}

		.brochureBtn {
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
			input[type=submit].btn-default {
				font-size: inherit;
			}

			/* search page apply credit button */
			.apply-credit {

				background: #ff3333;
				border: 1px solid #ff1a1a;
			}


			.apply-credit:hover {

			background: {
				$ APPLY_CREDIT_BTN_COLOR_ENDHOVERCOLOR
			}

		;

		}

		}
		/* end mobile */


		/* END BUTTON COLOR STYLES */


		.bg_blue {
			background-color: #0688fa !important;
			color: #fff;
		}

		.bg_red {
			background-color: #ff0000 !important;
			color: #fff;
		}

		.bg_green {
			background-color: #68a54b !important;
			color: #fff;
		}

		.bg_black {
			background-color: #000000 !important;
			color: #fff;
		}

		.bg_gray {
			background-color: #797979 !important;
			color: #fff;
		}

		.bg_blue a, .bg_red a, .bg_green a, .bg_black a, .bg_gray a {
			color: #fff;
		}

		.bg_default {
			background-color: #333333 !important;
		}

		/* Used VDP consumption box */
		.box27 {
			width: 131px;
			height: 28px;
			float: left;
			margin-bottom: 8px;
		}

		/* Used VDP consumption box */
		.box27 a {
			width: 131px;
			height: 28px;
			float: left;
			background: url(images/button10_bg.png) left top repeat-x;
			border-radius: 3px;
			font-size: 14px;
			color: #FFFFFF;
			text-decoration: none;
			font-weight: normal;
			padding: 0;
			line-height: 28px;
			text-align: center;
			text-transform: none;
		}

		/* Used VDP consumption box */
		.box27 a:hover {
			background: url(images/button10_bg.png) left -32px repeat-x;
			color: #FFFFFF;
		}

		/* Used VDP consumption box */
		.box28 {
			width: 127px;
			height: auto;
			float: left;
			margin: 0px;
			background: #6f6f6f url(images/liter_bg.png) left top repeat-x;
			border-radius: 3px;

			padding: 10px 2px 10px 2px;
			margin: 0 0px 0 0;
		}

		/* Used VDP consumption box */
		.text44 {
			width: 127px;
			height: auto;
			float: left;
			background: url(images/liter_line.png) left bottom repeat-x;
			background-position: bottom;
			text-align: center;
			padding-bottom: 5px;
			margin-bottom: 5px;
			font-size: 14px;
			color: #FFFFFF;
			text-decoration: none;
			font-weight: normal;
			text-align: center;
			text-transform: none;
			line-height: 18px;
		}

		/* Used VDP consumption box */
		.consumption-not-available > .text44 > span > #cityFuel {
			display: none;
		}

		/* Used VDP consumption box */
		.consumption-not-available > .text44 > span > #highwayFuel {
			display: none;
		}


		.text_slide a {
			height: 38px;
			margin-right: 0.3em;
			padding-top: 1px !important;
		}

		.text_slide a > b {
			display: block;
			overflow: hidden !important;
			position: relative;
			height: 25px;
			width: 100%;
		}

		.text_slide a > b > m1 {
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
			0% {
				top: -8px;
			}
			25% {
				top: -46px;
			}
			50% {
				top: -84px;
			}
			75% {
				top: -122px;
			}
			100% {
				top: -160px;
			}
		}

		@keyframes text_slide_3 {
			0% {
				top: -8px;
			}
			33% {
				top: -46px;
			}
			66% {
				top: -84px;
			}
			100% {
				top: -122px;
			}
		}

		@keyframes text_slide_2 {
			0% {
				top: -8px;
			}
			50% {
				top: -46px;
			}
			100% {
				top: -84px;
			}
		}

		.map {
			width: 100%;
			text-align: center;
			/*overflow: hidden;*/
			position: relative;
		}

		.map .wrapper {
			position: static !important;
		}

		.map_dealer_list {
			background-color: rgba(255, 255, 255, .9);
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
			height: 18px;
			width: 20px;
			display: inline-block;
			position: relative;
			display: inline-block;
		}

		.markerSpan:before {
			content: '';
			height: 4px;
			width: 4px;
			border: 2px solid #333;
			display: block;
			position: absolute;
			top: 2px;
			left: 0px;
			z-index: 1;
			background: #fff;
			line-height: 26px;
			border-radius: 40px;
			-webkit-border-radius: 40px;

			-moz-border-radius: 40px;
			color: #fff;
			text-align: center;
		}

		.markerSpan:after {
			content: '';
			height: 0px;
			width: 0px;
			display: block;
			position: absolute;
			bottom: 2px;
			left: 2px;
			border: 10px transparent solid;
			border-top-color: #333;
			border-width: 7px 2px 0px 2px;
		}

		.map_open_hours {
			background-color: rgba(255, 255, 255, .9);
			box-sizing: border-box;
			position: absolute;
			top: 0;
			width: 400px;
			height: 100%;
			text-align: left;
		}

		.open_hours_container {
			background-color: rgba(255, 255, 255, .9);
			box-sizing: border-box;
			text-align: left;
		}

		.map_open_hours h2,
		.open_hours_container h2 {
			font-size: 1.5em;
			padding-left: 15px;
			margin-top: 20px;
			margin-bottom: 10px;
			color: inherit;
		}

		.map_open_hours ul,
		.open_hours_container ul {
			padding: 0 0;
		}

		.map_open_hours ul li,
		.open_hours_container ul li {
			list-style: none;
			cursor: pointer;
			cursor: hand;
			border-bottom: 1px solid #f3f3f3;
		}

		.map_open_hours_expand {
			padding: 6px 30px 8px 15px;
			display: block;
		}

		.expandable_content {
			padding: 0px 16px 5px 16px;
			font-size: 14px;
			line-height: 1.42857143;
		}

		.expandable_content div,
		.expandable_content_multilocation div {
			display: flex;
			flex-direction: row;
		}

		.expandable_content > div > span:first-of-type,
		.expandable_content_multilocation div span:first-of-type {
			width: 40%;
		}

		.expandable_content_multilocation {
			font-size: 14px;
			line-height: 1.42857143;
			margin-top: 15px;
		}

		@media only screen and (max-width: 759px) {
			.expandable_content,
			.expandable_content_multilocation {
				font-size: inherit;
			}
		}


		.expandable_content_multilocation table {
			margin-top: 15px;
		}

		.map_open_hours_expand_arrow {
			float: right;
			margin-top: 3px;
		}

		.map_mobile {
			width: 100%;
			text-align: center;
			overflow: hidden;
			position: relative;
		}

		.map_open_hours_mobile {
			background-color: rgba(255, 255, 255, .9);
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

		.map_open_hours_mobile ul {
			padding: 0 0;
		}

		.map_open_hours_mobile ul li {
			list-style: none;
			cursor: pointer;
			cursor: hand;
			border-bottom: 1px solid #f3f3f3;
		}

		.main_left_box #footerGoogleMapHoursContainer {
			width: 960px;
		}

		.videoBtnSlider,
		.photoBtnSlider {
			border-radius: 50%;
			border: 1px solid #999999;
			color: #999999;
			width: 75px;
			height: 75px;
			background-color: #ffffff;
			opacity: 0.5;
		}

		.videoBtnSlider:hover,
		.photoBtnSlider:hover {
			border-radius: 50%;
			border: 1px solid #ffffff;
			width: 75px;
			height: 75px;
			background-color: #999999;
			opacity: 0.5;
		}

		.photoBtnSlider .fa,
		.videoBtnSlider .fa {
			color: #999999;
		}

		.photoBtnSlider:hover .fa,
		.videoBtnSlider:hover .fa {
			color: #ffffff;
		}

		.videos_pictures_buttons_container {
			left: 5px;
			bottom: 82px;
			position: relative;
			z-index: 999;
			float: left;
			margin-bottom: -80px;
		}

		.-display-none {
			display: none;
		}


		#defaultTopBannerWrap {
			text-align: center;
			vertical-align: middle;
			padding: 40px 15px;
		}

		#defaultTopBanner {
			text-align: center;
			width: 100%;
			border-radius: 6px;
			cursor: pointer;
		}

		#defaultTopBannerTitle,
		#defaultTopBannerText {
			font-weight: bold;
		}

		#defaultTopBannerWrap div.defaultTopBannerBtnWrapper {
			margin: 30px 0 20px 0;
			width: 100%;
			float: left;
		}

		#defaultTopBannerBtn {
			padding: 10px 30px;
			background: black;
			border: 2px white solid;
			border-radius: 3px;
			text-transform: uppercase;
			font-weight: bold;
			color: #ffffff;
			box-shadow: 0px 2px 13px 0px #1b1b1b;
		}

		#topBannerImage.NEWCARS #defaultTopBannerTitle {
			font-size: 50px;
		}

		#topBannerImage.NEWCARS #defaultTopBannerText {
			font-size: 45px;
		}

		#topBannerImage.USEDCARS #defaultTopBannerTitle {
			font-size: 50px;
		}

		#topBannerImage.USEDCARS #defaultTopBannerText {
			font-size: 45px;
		}


		#google_reviews {
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

		#easy-gplaces-reviews-but {
			font-weight: bold;
			padding: 5px 8px;
			height: 27px;
			line-height: 27px;
		}

		.review-author {
			text-transform: capitalize;
		}

		#easy-gplaces-reviews-but.default {
			color: #444;
			background-color: #f5f5f5;
			background-image: -moz-linear-gradient(center top, #f5f5f5, #f1f1f1);
			border: 1px solid rgba(0, 0, 0, 0.1);
		}

		#easy-gplaces-reviews-but.red {
			color: #fff;
			background-color: #f5f5f5;
			background-image: -moz-linear-gradient(center top, #DD4B39, #D14836);
			border: 1px solid #D14836;
		}

		#easy-gplaces-reviews-but.blue {
			color: #fff;
			background-color: #4D90FE;
			background-image: -moz-linear-gradient(center top, #4D90FE, #4787ED);
			border: 1px solid #3079ED;
		}

		.embed-container-youtube {
			position: relative;
			padding-bottom: 56.25%;
			height: 0;
			overflow: hidden;
			max-width: 100%;
		}

		.embed-container-youtube iframe, .embed-container-youtube object, .embed-container-youtube embed {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}

		.embed-container-youtube2 {
			position: relative;
			padding-bottom: 56.25%;
			height: 0;
			overflow: hidden;
			max-width: 100%;
		}

		.embed-container-youtube2 iframe, .embed-container-youtube2 object, .embed-container-youtube2 embed {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}


		#searchCriteriaW::after, #actionBoxBtn::after, #linkContainer::after {
			content: '';
			height: 1px;
			display: inline-block;
			margin-bottom: '0px';
		}

		#searchCriteriaW::after, #actionBoxBtn::after, #linkContainer::after {
			background: none;
			width: 280px;

		}

		.bannerPopupClose {
			color: #aaa;
		}

		.seeVideoBtn1 {
			background-color: #000 !important;
			border: 1px solid #fff !important;
			color: #fff !important;
		}

		.seeVideoBtn1:hover {
			background-color: #fff !important;
			border: 1px solid #000 !important;
			color: #000000 !important;
		}


		#bottomLeftBannerImage {
			margin: 10px 0px 0px;
			float: left;
			width: 100%;
		}

		#defaultBottomLeftBanner {
			text-align: center;
			width: 100%;
			border-radius: 6px;
			cursor: pointer;
		}

		#defaultBottomLeftBannerWrap {
			text-align: center;
			vertical-align: middle;
			padding: 15px;
		}

		#defaultBottomLeftBannerTitle {
			font-weight: bold;
			font-size: 35px;
		}

		#defaultBottomLeftBannerText {
			font-weight: bold;
			font-size: 31px;
		}

		#defaultBottomLeftBannerWrap div.defaultBottomLeftBannerBtnWrapper {
			margin: 20px 0 10px 0;
			width: 100%;
			float: left;
		}

		#defaultBottomLeftBannerBtn {
			padding: 7px 21px;
			background: black;
			border: 2px white solid;
			border-radius: 3px;
			text-transform: uppercase;
			font-weight: bold;
			color: #ffffff;
			box-shadow: 0px 2px 13px 0px #1b1b1b;
			font-size: 70%;
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
			border: 1px solid #f00;
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

		.paypal_button_html table {
			margin-left: auto;
			margin-right: auto;
			background-color: black;
			color: white;
			width: 100%;
			padding: 0 0 10px 0;
			border-radius: 3px 3px 0 0;
			text-align: center;
		}

		.paypal_button_html table tr:first-child {
			font-size: 18px;
			height: 40px;
		}

		.paypal_button_html table select {
			border-radius: 5px;
			width: 200px;
			height: 35px;
			background-color: white;
		}

		.paypal_button_html input[type="image"][name="submit"] {
			width: 100%;
			border: none;
			padding: 0;
		}

		@media only screen and (max-width: 400px) {
			.paypal_button_html {
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
			background-color: #fad6dc;
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
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
			-webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
			-o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
			-webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
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

		.lazyload {
			visibility: hidden;
		}

		.gbox {
			border-radius: 5px;
			box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.2);
		}

		/** /css/font-awesome.min.css **/
		/*!
 * Font Awesome Pro 5.13.0 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license (Commercial License)
 */
		.fa, .fab, .fad, .fal, .far, .fas {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			display: inline-block;
			font-style: normal;
			font-variant: normal;
			text-rendering: auto;
			line-height: 1
		}

		.fa-lg {
			font-size: 1.33333em;
			line-height: .75em;
			vertical-align: -.0667em
		}

		.fa-xs {
			font-size: .75em
		}

		.fa-sm {
			font-size: .875em
		}

		.fa-1x {
			font-size: 1em
		}

		.fa-2x {
			font-size: 2em
		}

		.fa-3x {
			font-size: 3em
		}

		.fa-4x {
			font-size: 4em
		}

		.fa-5x {
			font-size: 5em
		}

		.fa-6x {
			font-size: 6em
		}

		.fa-7x {
			font-size: 7em
		}

		.fa-8x {
			font-size: 8em
		}

		.fa-9x {
			font-size: 9em
		}

		.fa-10x {
			font-size: 10em
		}

		.fa-fw {
			text-align: center;
			width: 1.25em
		}

		.fa-ul {
			list-style-type: none;
			margin-left: 2.5em;
			padding-left: 0
		}

		.fa-ul > li {
			position: relative
		}

		.fa-li {
			left: -2em;
			position: absolute;
			text-align: center;
			width: 2em;
			line-height: inherit
		}

		.fa-border {
			border: .08em solid #eee;
			border-radius: .1em;
			padding: .2em .25em .15em
		}

		.fa-pull-left {
			float: left
		}

		.fa-pull-right {
			float: right
		}

		.fa.fa-pull-left, .fab.fa-pull-left, .fal.fa-pull-left, .far.fa-pull-left, .fas.fa-pull-left {
			margin-right: .3em
		}

		.fa.fa-pull-right, .fab.fa-pull-right, .fal.fa-pull-right, .far.fa-pull-right, .fas.fa-pull-right {
			margin-left: .3em
		}

		.fa-spin {
			-webkit-animation: fa-spin 2s linear infinite;
			animation: fa-spin 2s linear infinite
		}

		.fa-pulse {
			-webkit-animation: fa-spin 1s steps(8) infinite;
			animation: fa-spin 1s steps(8) infinite
		}

		@-webkit-keyframes fa-spin {
			0% {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg)
			}
			to {
				-webkit-transform: rotate(1turn);
				transform: rotate(1turn)
			}
		}

		@keyframes fa-spin {
			0% {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg)
			}
			to {
				-webkit-transform: rotate(1turn);
				transform: rotate(1turn)
			}
		}

		.fa-rotate-90 {
			-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
			-webkit-transform: rotate(90deg);
			transform: rotate(90deg)
		}

		.fa-rotate-180 {
			-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
			-webkit-transform: rotate(180deg);
			transform: rotate(180deg)
		}

		.fa-rotate-270 {
			-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
			-webkit-transform: rotate(270deg);
			transform: rotate(270deg)
		}

		.fa-flip-horizontal {
			-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
			-webkit-transform: scaleX(-1);
			transform: scaleX(-1)
		}

		.fa-flip-vertical {
			-webkit-transform: scaleY(-1);
			transform: scaleY(-1)
		}

		.fa-flip-both, .fa-flip-horizontal.fa-flip-vertical, .fa-flip-vertical {
			-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"
		}

		.fa-flip-both, .fa-flip-horizontal.fa-flip-vertical {
			-webkit-transform: scale(-1);
			transform: scale(-1)
		}

		:root .fa-flip-both, :root .fa-flip-horizontal, :root .fa-flip-vertical, :root .fa-rotate-90, :root .fa-rotate-180, :root .fa-rotate-270 {
			-webkit-filter: none;
			filter: none
		}

		.fa-stack {
			display: inline-block;
			height: 2em;
			line-height: 2em;
			position: relative;
			vertical-align: middle;
			width: 2.5em
		}

		.fa-stack-1x, .fa-stack-2x {
			left: 0;
			position: absolute;
			text-align: center;
			width: 100%
		}

		.fa-stack-1x {
			line-height: inherit
		}

		.fa-stack-2x {
			font-size: 2em
		}

		.fa-inverse {
			color: #fff
		}

		.fa-500px:before {
			content: "\f26e"
		}

		.fa-abacus:before {
			content: "\f640"
		}

		.fa-accessible-icon:before {
			content: "\f368"
		}

		.fa-accusoft:before {
			content: "\f369"
		}

		.fa-acorn:before {
			content: "\f6ae"
		}

		.fa-acquisitions-incorporated:before {
			content: "\f6af"
		}

		.fa-ad:before {
			content: "\f641"
		}

		.fa-address-book:before {
			content: "\f2b9"
		}

		.fa-address-card:before {
			content: "\f2bb"
		}

		.fa-adjust:before {
			content: "\f042"
		}

		.fa-adn:before {
			content: "\f170"
		}

		.fa-adobe:before {
			content: "\f778"
		}

		.fa-adversal:before {
			content: "\f36a"
		}

		.fa-affiliatetheme:before {
			content: "\f36b"
		}

		.fa-air-conditioner:before {
			content: "\f8f4"
		}

		.fa-air-freshener:before {
			content: "\f5d0"
		}

		.fa-airbnb:before {
			content: "\f834"
		}

		.fa-alarm-clock:before {
			content: "\f34e"
		}

		.fa-alarm-exclamation:before {
			content: "\f843"
		}

		.fa-alarm-plus:before {
			content: "\f844"
		}

		.fa-alarm-snooze:before {
			content: "\f845"
		}

		.fa-album:before {
			content: "\f89f"
		}

		.fa-album-collection:before {
			content: "\f8a0"
		}

		.fa-algolia:before {
			content: "\f36c"
		}

		.fa-alicorn:before {
			content: "\f6b0"
		}

		.fa-alien:before {
			content: "\f8f5"
		}

		.fa-alien-monster:before {
			content: "\f8f6"
		}

		.fa-align-center:before {
			content: "\f037"
		}

		.fa-align-justify:before {
			content: "\f039"
		}

		.fa-align-left:before {
			content: "\f036"
		}

		.fa-align-right:before {
			content: "\f038"
		}

		.fa-align-slash:before {
			content: "\f846"
		}

		.fa-alipay:before {
			content: "\f642"
		}

		.fa-allergies:before {
			content: "\f461"
		}

		.fa-amazon:before {
			content: "\f270"
		}

		.fa-amazon-pay:before {
			content: "\f42c"
		}

		.fa-ambulance:before {
			content: "\f0f9"
		}

		.fa-american-sign-language-interpreting:before {
			content: "\f2a3"
		}

		.fa-amilia:before {
			content: "\f36d"
		}

		.fa-amp-guitar:before {
			content: "\f8a1"
		}

		.fa-analytics:before {
			content: "\f643"
		}

		.fa-anchor:before {
			content: "\f13d"
		}

		.fa-android:before {
			content: "\f17b"
		}

		.fa-angel:before {
			content: "\f779"
		}

		.fa-angellist:before {
			content: "\f209"
		}

		.fa-angle-double-down:before {
			content: "\f103"
		}

		.fa-angle-double-left:before {
			content: "\f100"
		}

		.fa-angle-double-right:before {
			content: "\f101"
		}

		.fa-angle-double-up:before {
			content: "\f102"
		}

		.fa-angle-down:before {
			content: "\f107"
		}

		.fa-angle-left:before {
			content: "\f104"
		}

		.fa-angle-right:before {
			content: "\f105"
		}

		.fa-angle-up:before {
			content: "\f106"
		}

		.fa-angry:before {
			content: "\f556"
		}

		.fa-angrycreative:before {
			content: "\f36e"
		}

		.fa-angular:before {
			content: "\f420"
		}

		.fa-ankh:before {
			content: "\f644"
		}

		.fa-app-store:before {
			content: "\f36f"
		}

		.fa-app-store-ios:before {
			content: "\f370"
		}

		.fa-apper:before {
			content: "\f371"
		}

		.fa-apple:before {
			content: "\f179"
		}

		.fa-apple-alt:before {
			content: "\f5d1"
		}

		.fa-apple-crate:before {
			content: "\f6b1"
		}

		.fa-apple-pay:before {
			content: "\f415"
		}

		.fa-archive:before {
			content: "\f187"
		}

		.fa-archway:before {
			content: "\f557"
		}

		.fa-arrow-alt-circle-down:before {
			content: "\f358"
		}

		.fa-arrow-alt-circle-left:before {
			content: "\f359"
		}

		.fa-arrow-alt-circle-right:before {
			content: "\f35a"
		}

		.fa-arrow-alt-circle-up:before {
			content: "\f35b"
		}

		.fa-arrow-alt-down:before {
			content: "\f354"
		}

		.fa-arrow-alt-from-bottom:before {
			content: "\f346"
		}

		.fa-arrow-alt-from-left:before {
			content: "\f347"
		}

		.fa-arrow-alt-from-right:before {
			content: "\f348"
		}

		.fa-arrow-alt-from-top:before {
			content: "\f349"
		}

		.fa-arrow-alt-left:before {
			content: "\f355"
		}

		.fa-arrow-alt-right:before {
			content: "\f356"
		}

		.fa-arrow-alt-square-down:before {
			content: "\f350"
		}

		.fa-arrow-alt-square-left:before {
			content: "\f351"
		}

		.fa-arrow-alt-square-right:before {
			content: "\f352"
		}

		.fa-arrow-alt-square-up:before {
			content: "\f353"
		}

		.fa-arrow-alt-to-bottom:before {
			content: "\f34a"
		}

		.fa-arrow-alt-to-left:before {
			content: "\f34b"
		}

		.fa-arrow-alt-to-right:before {
			content: "\f34c"
		}

		.fa-arrow-alt-to-top:before {
			content: "\f34d"
		}

		.fa-arrow-alt-up:before {
			content: "\f357"
		}

		.fa-arrow-circle-down:before {
			content: "\f0ab"
		}

		.fa-arrow-circle-left:before {
			content: "\f0a8"
		}

		.fa-arrow-circle-right:before {
			content: "\f0a9"
		}

		.fa-arrow-circle-up:before {
			content: "\f0aa"
		}

		.fa-arrow-down:before {
			content: "\f063"
		}

		.fa-arrow-from-bottom:before {
			content: "\f342"
		}

		.fa-arrow-from-left:before {
			content: "\f343"
		}

		.fa-arrow-from-right:before {
			content: "\f344"
		}

		.fa-arrow-from-top:before {
			content: "\f345"
		}

		.fa-arrow-left:before {
			content: "\f060"
		}

		.fa-arrow-right:before {
			content: "\f061"
		}

		.fa-arrow-square-down:before {
			content: "\f339"
		}

		.fa-arrow-square-left:before {
			content: "\f33a"
		}

		.fa-arrow-square-right:before {
			content: "\f33b"
		}

		.fa-arrow-square-up:before {
			content: "\f33c"
		}

		.fa-arrow-to-bottom:before {
			content: "\f33d"
		}

		.fa-arrow-to-left:before {
			content: "\f33e"
		}

		.fa-arrow-to-right:before {
			content: "\f340"
		}

		.fa-arrow-to-top:before {
			content: "\f341"
		}

		.fa-arrow-up:before {
			content: "\f062"
		}

		.fa-arrows:before {
			content: "\f047"
		}

		.fa-arrows-alt:before {
			content: "\f0b2"
		}

		.fa-arrows-alt-h:before {
			content: "\f337"
		}

		.fa-arrows-alt-v:before {
			content: "\f338"
		}

		.fa-arrows-h:before {
			content: "\f07e"
		}

		.fa-arrows-v:before {
			content: "\f07d"
		}

		.fa-artstation:before {
			content: "\f77a"
		}

		.fa-assistive-listening-systems:before {
			content: "\f2a2"
		}

		.fa-asterisk:before {
			content: "\f069"
		}

		.fa-asymmetrik:before {
			content: "\f372"
		}

		.fa-at:before {
			content: "\f1fa"
		}

		.fa-atlas:before {
			content: "\f558"
		}

		.fa-atlassian:before {
			content: "\f77b"
		}

		.fa-atom:before {
			content: "\f5d2"
		}

		.fa-atom-alt:before {
			content: "\f5d3"
		}

		.fa-audible:before {
			content: "\f373"
		}

		.fa-audio-description:before {
			content: "\f29e"
		}

		.fa-autoprefixer:before {
			content: "\f41c"
		}

		.fa-avianex:before {
			content: "\f374"
		}

		.fa-aviato:before {
			content: "\f421"
		}

		.fa-award:before {
			content: "\f559"
		}

		.fa-aws:before {
			content: "\f375"
		}

		.fa-axe:before {
			content: "\f6b2"
		}

		.fa-axe-battle:before {
			content: "\f6b3"
		}

		.fa-baby:before {
			content: "\f77c"
		}

		.fa-baby-carriage:before {
			content: "\f77d"
		}

		.fa-backpack:before {
			content: "\f5d4"
		}

		.fa-backspace:before {
			content: "\f55a"
		}

		.fa-backward:before {
			content: "\f04a"
		}

		.fa-bacon:before {
			content: "\f7e5"
		}

		.fa-bacteria:before {
			content: "\f959"
		}

		.fa-bacterium:before {
			content: "\f95a"
		}

		.fa-badge:before {
			content: "\f335"
		}

		.fa-badge-check:before {
			content: "\f336"
		}

		.fa-badge-dollar:before {
			content: "\f645"
		}

		.fa-badge-percent:before {
			content: "\f646"
		}

		.fa-badge-sheriff:before {
			content: "\f8a2"
		}

		.fa-badger-honey:before {
			content: "\f6b4"
		}

		.fa-bags-shopping:before {
			content: "\f847"
		}

		.fa-bahai:before {
			content: "\f666"
		}

		.fa-balance-scale:before {
			content: "\f24e"
		}

		.fa-balance-scale-left:before {
			content: "\f515"
		}

		.fa-balance-scale-right:before {
			content: "\f516"
		}

		.fa-ball-pile:before {
			content: "\f77e"
		}

		.fa-ballot:before {
			content: "\f732"
		}

		.fa-ballot-check:before {
			content: "\f733"
		}

		.fa-ban:before {
			content: "\f05e"
		}

		.fa-band-aid:before {
			content: "\f462"
		}

		.fa-bandcamp:before {
			content: "\f2d5"
		}

		.fa-banjo:before {
			content: "\f8a3"
		}

		.fa-barcode:before {
			content: "\f02a"
		}

		.fa-barcode-alt:before {
			content: "\f463"
		}

		.fa-barcode-read:before {
			content: "\f464"
		}

		.fa-barcode-scan:before {
			content: "\f465"
		}

		.fa-bars:before {
			content: "\f0c9"
		}

		.fa-baseball:before {
			content: "\f432"
		}

		.fa-baseball-ball:before {
			content: "\f433"
		}

		.fa-basketball-ball:before {
			content: "\f434"
		}

		.fa-basketball-hoop:before {
			content: "\f435"
		}

		.fa-bat:before {
			content: "\f6b5"
		}

		.fa-bath:before {
			content: "\f2cd"
		}

		.fa-battery-bolt:before {
			content: "\f376"
		}

		.fa-battery-empty:before {
			content: "\f244"
		}

		.fa-battery-full:before {
			content: "\f240"
		}

		.fa-battery-half:before {
			content: "\f242"
		}

		.fa-battery-quarter:before {
			content: "\f243"
		}

		.fa-battery-slash:before {
			content: "\f377"
		}

		.fa-battery-three-quarters:before {
			content: "\f241"
		}

		.fa-battle-net:before {
			content: "\f835"
		}

		.fa-bed:before {
			content: "\f236"
		}

		.fa-bed-alt:before {
			content: "\f8f7"
		}

		.fa-bed-bunk:before {
			content: "\f8f8"
		}

		.fa-bed-empty:before {
			content: "\f8f9"
		}

		.fa-beer:before {
			content: "\f0fc"
		}

		.fa-behance:before {
			content: "\f1b4"
		}

		.fa-behance-square:before {
			content: "\f1b5"
		}

		.fa-bell:before {
			content: "\f0f3"
		}

		.fa-bell-exclamation:before {
			content: "\f848"
		}

		.fa-bell-on:before {
			content: "\f8fa"
		}

		.fa-bell-plus:before {
			content: "\f849"
		}

		.fa-bell-school:before {
			content: "\f5d5"
		}

		.fa-bell-school-slash:before {
			content: "\f5d6"
		}

		.fa-bell-slash:before {
			content: "\f1f6"
		}

		.fa-bells:before {
			content: "\f77f"
		}

		.fa-betamax:before {
			content: "\f8a4"
		}

		.fa-bezier-curve:before {
			content: "\f55b"
		}

		.fa-bible:before {
			content: "\f647"
		}

		.fa-bicycle:before {
			content: "\f206"
		}

		.fa-biking:before {
			content: "\f84a"
		}

		.fa-biking-mountain:before {
			content: "\f84b"
		}

		.fa-bimobject:before {
			content: "\f378"
		}

		.fa-binoculars:before {
			content: "\f1e5"
		}

		.fa-biohazard:before {
			content: "\f780"
		}

		.fa-birthday-cake:before {
			content: "\f1fd"
		}

		.fa-bitbucket:before {
			content: "\f171"
		}

		.fa-bitcoin:before {
			content: "\f379"
		}

		.fa-bity:before {
			content: "\f37a"
		}

		.fa-black-tie:before {
			content: "\f27e"
		}

		.fa-blackberry:before {
			content: "\f37b"
		}

		.fa-blanket:before {
			content: "\f498"
		}

		.fa-blender:before {
			content: "\f517"
		}

		.fa-blender-phone:before {
			content: "\f6b6"
		}

		.fa-blind:before {
			content: "\f29d"
		}

		.fa-blinds:before {
			content: "\f8fb"
		}

		.fa-blinds-open:before {
			content: "\f8fc"
		}

		.fa-blinds-raised:before {
			content: "\f8fd"
		}

		.fa-blog:before {
			content: "\f781"
		}

		.fa-blogger:before {
			content: "\f37c"
		}

		.fa-blogger-b:before {
			content: "\f37d"
		}

		.fa-bluetooth:before {
			content: "\f293"
		}

		.fa-bluetooth-b:before {
			content: "\f294"
		}

		.fa-bold:before {
			content: "\f032"
		}

		.fa-bolt:before {
			content: "\f0e7"
		}

		.fa-bomb:before {
			content: "\f1e2"
		}

		.fa-bone:before {
			content: "\f5d7"
		}

		.fa-bone-break:before {
			content: "\f5d8"
		}

		.fa-bong:before {
			content: "\f55c"
		}

		.fa-book:before {
			content: "\f02d"
		}

		.fa-book-alt:before {
			content: "\f5d9"
		}

		.fa-book-dead:before {
			content: "\f6b7"
		}

		.fa-book-heart:before {
			content: "\f499"
		}

		.fa-book-medical:before {
			content: "\f7e6"
		}

		.fa-book-open:before {
			content: "\f518"
		}

		.fa-book-reader:before {
			content: "\f5da"
		}

		.fa-book-spells:before {
			content: "\f6b8"
		}

		.fa-book-user:before {
			content: "\f7e7"
		}

		.fa-bookmark:before {
			content: "\f02e"
		}

		.fa-books:before {
			content: "\f5db"
		}

		.fa-books-medical:before {
			content: "\f7e8"
		}

		.fa-boombox:before {
			content: "\f8a5"
		}

		.fa-boot:before {
			content: "\f782"
		}

		.fa-booth-curtain:before {
			content: "\f734"
		}

		.fa-bootstrap:before {
			content: "\f836"
		}

		.fa-border-all:before {
			content: "\f84c"
		}

		.fa-border-bottom:before {
			content: "\f84d"
		}

		.fa-border-center-h:before {
			content: "\f89c"
		}

		.fa-border-center-v:before {
			content: "\f89d"
		}

		.fa-border-inner:before {
			content: "\f84e"
		}

		.fa-border-left:before {
			content: "\f84f"
		}

		.fa-border-none:before {
			content: "\f850"
		}

		.fa-border-outer:before {
			content: "\f851"
		}

		.fa-border-right:before {
			content: "\f852"
		}

		.fa-border-style:before {
			content: "\f853"
		}

		.fa-border-style-alt:before {
			content: "\f854"
		}

		.fa-border-top:before {
			content: "\f855"
		}

		.fa-bow-arrow:before {
			content: "\f6b9"
		}

		.fa-bowling-ball:before {
			content: "\f436"
		}

		.fa-bowling-pins:before {
			content: "\f437"
		}

		.fa-box:before {
			content: "\f466"
		}

		.fa-box-alt:before {
			content: "\f49a"
		}

		.fa-box-ballot:before {
			content: "\f735"
		}

		.fa-box-check:before {
			content: "\f467"
		}

		.fa-box-fragile:before {
			content: "\f49b"
		}

		.fa-box-full:before {
			content: "\f49c"
		}

		.fa-box-heart:before {
			content: "\f49d"
		}

		.fa-box-open:before {
			content: "\f49e"
		}

		.fa-box-tissue:before {
			content: "\f95b"
		}

		.fa-box-up:before {
			content: "\f49f"
		}

		.fa-box-usd:before {
			content: "\f4a0"
		}

		.fa-boxes:before {
			content: "\f468"
		}

		.fa-boxes-alt:before {
			content: "\f4a1"
		}

		.fa-boxing-glove:before {
			content: "\f438"
		}

		.fa-brackets:before {
			content: "\f7e9"
		}

		.fa-brackets-curly:before {
			content: "\f7ea"
		}

		.fa-braille:before {
			content: "\f2a1"
		}

		.fa-brain:before {
			content: "\f5dc"
		}

		.fa-bread-loaf:before {
			content: "\f7eb"
		}

		.fa-bread-slice:before {
			content: "\f7ec"
		}

		.fa-briefcase:before {
			content: "\f0b1"
		}

		.fa-briefcase-medical:before {
			content: "\f469"
		}

		.fa-bring-forward:before {
			content: "\f856"
		}

		.fa-bring-front:before {
			content: "\f857"
		}

		.fa-broadcast-tower:before {
			content: "\f519"
		}

		.fa-broom:before {
			content: "\f51a"
		}

		.fa-browser:before {
			content: "\f37e"
		}

		.fa-brush:before {
			content: "\f55d"
		}

		.fa-btc:before {
			content: "\f15a"
		}

		.fa-buffer:before {
			content: "\f837"
		}

		.fa-bug:before {
			content: "\f188"
		}

		.fa-building:before {
			content: "\f1ad"
		}

		.fa-bullhorn:before {
			content: "\f0a1"
		}

		.fa-bullseye:before {
			content: "\f140"
		}

		.fa-bullseye-arrow:before {
			content: "\f648"
		}

		.fa-bullseye-pointer:before {
			content: "\f649"
		}

		.fa-burger-soda:before {
			content: "\f858"
		}

		.fa-burn:before {
			content: "\f46a"
		}

		.fa-buromobelexperte:before {
			content: "\f37f"
		}

		.fa-burrito:before {
			content: "\f7ed"
		}

		.fa-bus:before {
			content: "\f207"
		}

		.fa-bus-alt:before {
			content: "\f55e"
		}

		.fa-bus-school:before {
			content: "\f5dd"
		}

		.fa-business-time:before {
			content: "\f64a"
		}

		.fa-buy-n-large:before {
			content: "\f8a6"
		}

		.fa-buysellads:before {
			content: "\f20d"
		}

		.fa-cabinet-filing:before {
			content: "\f64b"
		}

		.fa-cactus:before {
			content: "\f8a7"
		}

		.fa-calculator:before {
			content: "\f1ec"
		}

		.fa-calculator-alt:before {
			content: "\f64c"
		}

		.fa-calendar:before {
			content: "\f133"
		}

		.fa-calendar-alt:before {
			content: "\f073"
		}

		.fa-calendar-check:before {
			content: "\f274"
		}

		.fa-calendar-day:before {
			content: "\f783"
		}

		.fa-calendar-edit:before {
			content: "\f333"
		}

		.fa-calendar-exclamation:before {
			content: "\f334"
		}

		.fa-calendar-minus:before {
			content: "\f272"
		}

		.fa-calendar-plus:before {
			content: "\f271"
		}

		.fa-calendar-star:before {
			content: "\f736"
		}

		.fa-calendar-times:before {
			content: "\f273"
		}

		.fa-calendar-week:before {
			content: "\f784"
		}

		.fa-camcorder:before {
			content: "\f8a8"
		}

		.fa-camera:before {
			content: "\f030"
		}

		.fa-camera-alt:before {
			content: "\f332"
		}

		.fa-camera-home:before {
			content: "\f8fe"
		}

		.fa-camera-movie:before {
			content: "\f8a9"
		}

		.fa-camera-polaroid:before {
			content: "\f8aa"
		}

		.fa-camera-retro:before {
			content: "\f083"
		}

		.fa-campfire:before {
			content: "\f6ba"
		}

		.fa-campground:before {
			content: "\f6bb"
		}

		.fa-canadian-maple-leaf:before {
			content: "\f785"
		}

		.fa-candle-holder:before {
			content: "\f6bc"
		}

		.fa-candy-cane:before {
			content: "\f786"
		}

		.fa-candy-corn:before {
			content: "\f6bd"
		}

		.fa-cannabis:before {
			content: "\f55f"
		}

		.fa-capsules:before {
			content: "\f46b"
		}

		.fa-car:before {
			content: "\f1b9"
		}

		.fa-car-alt:before {
			content: "\f5de"
		}

		.fa-car-battery:before {
			content: "\f5df"
		}

		.fa-car-building:before {
			content: "\f859"
		}

		.fa-car-bump:before {
			content: "\f5e0"
		}

		.fa-car-bus:before {
			content: "\f85a"
		}

		.fa-car-crash:before {
			content: "\f5e1"
		}

		.fa-car-garage:before {
			content: "\f5e2"
		}

		.fa-car-mechanic:before {
			content: "\f5e3"
		}

		.fa-car-side:before {
			content: "\f5e4"
		}

		.fa-car-tilt:before {
			content: "\f5e5"
		}

		.fa-car-wash:before {
			content: "\f5e6"
		}

		.fa-caravan:before {
			content: "\f8ff"
		}

		.fa-caravan-alt:before {
			content: "\f900"
		}

		.fa-caret-circle-down:before {
			content: "\f32d"
		}

		.fa-caret-circle-left:before {
			content: "\f32e"
		}

		.fa-caret-circle-right:before {
			content: "\f330"
		}

		.fa-caret-circle-up:before {
			content: "\f331"
		}

		.fa-caret-down:before {
			content: "\f0d7"
		}

		.fa-caret-left:before {
			content: "\f0d9"
		}

		.fa-caret-right:before {
			content: "\f0da"
		}

		.fa-caret-square-down:before {
			content: "\f150"
		}

		.fa-caret-square-left:before {
			content: "\f191"
		}

		.fa-caret-square-right:before {
			content: "\f152"
		}

		.fa-caret-square-up:before {
			content: "\f151"
		}

		.fa-caret-up:before {
			content: "\f0d8"
		}

		.fa-carrot:before {
			content: "\f787"
		}

		.fa-cars:before {
			content: "\f85b"
		}

		.fa-cart-arrow-down:before {
			content: "\f218"
		}

		.fa-cart-plus:before {
			content: "\f217"
		}

		.fa-cash-register:before {
			content: "\f788"
		}

		.fa-cassette-tape:before {
			content: "\f8ab"
		}

		.fa-cat:before {
			content: "\f6be"
		}

		.fa-cat-space:before {
			content: "\f901"
		}

		.fa-cauldron:before {
			content: "\f6bf"
		}

		.fa-cc-amazon-pay:before {
			content: "\f42d"
		}

		.fa-cc-amex:before {
			content: "\f1f3"
		}

		.fa-cc-apple-pay:before {
			content: "\f416"
		}

		.fa-cc-diners-club:before {
			content: "\f24c"
		}

		.fa-cc-discover:before {
			content: "\f1f2"
		}

		.fa-cc-jcb:before {
			content: "\f24b"
		}

		.fa-cc-mastercard:before {
			content: "\f1f1"
		}

		.fa-cc-paypal:before {
			content: "\f1f4"
		}

		.fa-cc-stripe:before {
			content: "\f1f5"
		}

		.fa-cc-visa:before {
			content: "\f1f0"
		}

		.fa-cctv:before {
			content: "\f8ac"
		}

		.fa-centercode:before {
			content: "\f380"
		}

		.fa-centos:before {
			content: "\f789"
		}

		.fa-certificate:before {
			content: "\f0a3"
		}

		.fa-chair:before {
			content: "\f6c0"
		}

		.fa-chair-office:before {
			content: "\f6c1"
		}

		.fa-chalkboard:before {
			content: "\f51b"
		}

		.fa-chalkboard-teacher:before {
			content: "\f51c"
		}

		.fa-charging-station:before {
			content: "\f5e7"
		}

		.fa-chart-area:before {
			content: "\f1fe"
		}

		.fa-chart-bar:before {
			content: "\f080"
		}

		.fa-chart-line:before {
			content: "\f201"
		}

		.fa-chart-line-down:before {
			content: "\f64d"
		}

		.fa-chart-network:before {
			content: "\f78a"
		}

		.fa-chart-pie:before {
			content: "\f200"
		}

		.fa-chart-pie-alt:before {
			content: "\f64e"
		}

		.fa-chart-scatter:before {
			content: "\f7ee"
		}

		.fa-check:before {
			content: "\f00c"
		}

		.fa-check-circle:before {
			content: "\f058"
		}

		.fa-check-double:before {
			content: "\f560"
		}

		.fa-check-square:before {
			content: "\f14a"
		}

		.fa-cheese:before {
			content: "\f7ef"
		}

		.fa-cheese-swiss:before {
			content: "\f7f0"
		}

		.fa-cheeseburger:before {
			content: "\f7f1"
		}

		.fa-chess:before {
			content: "\f439"
		}

		.fa-chess-bishop:before {
			content: "\f43a"
		}

		.fa-chess-bishop-alt:before {
			content: "\f43b"
		}

		.fa-chess-board:before {
			content: "\f43c"
		}

		.fa-chess-clock:before {
			content: "\f43d"
		}

		.fa-chess-clock-alt:before {
			content: "\f43e"
		}

		.fa-chess-king:before {
			content: "\f43f"
		}

		.fa-chess-king-alt:before {
			content: "\f440"
		}

		.fa-chess-knight:before {
			content: "\f441"
		}

		.fa-chess-knight-alt:before {
			content: "\f442"
		}

		.fa-chess-pawn:before {
			content: "\f443"
		}

		.fa-chess-pawn-alt:before {
			content: "\f444"
		}

		.fa-chess-queen:before {
			content: "\f445"
		}

		.fa-chess-queen-alt:before {
			content: "\f446"
		}

		.fa-chess-rook:before {
			content: "\f447"
		}

		.fa-chess-rook-alt:before {
			content: "\f448"
		}

		.fa-chevron-circle-down:before {
			content: "\f13a"
		}

		.fa-chevron-circle-left:before {
			content: "\f137"
		}

		.fa-chevron-circle-right:before {
			content: "\f138"
		}

		.fa-chevron-circle-up:before {
			content: "\f139"
		}

		.fa-chevron-double-down:before {
			content: "\f322"
		}

		.fa-chevron-double-left:before {
			content: "\f323"
		}

		.fa-chevron-double-right:before {
			content: "\f324"
		}

		.fa-chevron-double-up:before {
			content: "\f325"
		}

		.fa-chevron-down:before {
			content: "\f078"
		}

		.fa-chevron-left:before {
			content: "\f053"
		}

		.fa-chevron-right:before {
			content: "\f054"
		}

		.fa-chevron-square-down:before {
			content: "\f329"
		}

		.fa-chevron-square-left:before {
			content: "\f32a"
		}

		.fa-chevron-square-right:before {
			content: "\f32b"
		}

		.fa-chevron-square-up:before {
			content: "\f32c"
		}

		.fa-chevron-up:before {
			content: "\f077"
		}

		.fa-child:before {
			content: "\f1ae"
		}

		.fa-chimney:before {
			content: "\f78b"
		}

		.fa-chrome:before {
			content: "\f268"
		}

		.fa-chromecast:before {
			content: "\f838"
		}

		.fa-church:before {
			content: "\f51d"
		}

		.fa-circle:before {
			content: "\f111"
		}

		.fa-circle-notch:before {
			content: "\f1ce"
		}

		.fa-city:before {
			content: "\f64f"
		}

		.fa-clarinet:before {
			content: "\f8ad"
		}

		.fa-claw-marks:before {
			content: "\f6c2"
		}

		.fa-clinic-medical:before {
			content: "\f7f2"
		}

		.fa-clipboard:before {
			content: "\f328"
		}

		.fa-clipboard-check:before {
			content: "\f46c"
		}

		.fa-clipboard-list:before {
			content: "\f46d"
		}

		.fa-clipboard-list-check:before {
			content: "\f737"
		}

		.fa-clipboard-prescription:before {
			content: "\f5e8"
		}

		.fa-clipboard-user:before {
			content: "\f7f3"
		}

		.fa-clock:before {
			content: "\f017"
		}

		.fa-clone:before {
			content: "\f24d"
		}

		.fa-closed-captioning:before {
			content: "\f20a"
		}

		.fa-cloud:before {
			content: "\f0c2"
		}

		.fa-cloud-download:before {
			content: "\f0ed"
		}

		.fa-cloud-download-alt:before {
			content: "\f381"
		}

		.fa-cloud-drizzle:before {
			content: "\f738"
		}

		.fa-cloud-hail:before {
			content: "\f739"
		}

		.fa-cloud-hail-mixed:before {
			content: "\f73a"
		}

		.fa-cloud-meatball:before {
			content: "\f73b"
		}

		.fa-cloud-moon:before {
			content: "\f6c3"
		}

		.fa-cloud-moon-rain:before {
			content: "\f73c"
		}

		.fa-cloud-music:before {
			content: "\f8ae"
		}

		.fa-cloud-rain:before {
			content: "\f73d"
		}

		.fa-cloud-rainbow:before {
			content: "\f73e"
		}

		.fa-cloud-showers:before {
			content: "\f73f"
		}

		.fa-cloud-showers-heavy:before {
			content: "\f740"
		}

		.fa-cloud-sleet:before {
			content: "\f741"
		}

		.fa-cloud-snow:before {
			content: "\f742"
		}

		.fa-cloud-sun:before {
			content: "\f6c4"
		}

		.fa-cloud-sun-rain:before {
			content: "\f743"
		}

		.fa-cloud-upload:before {
			content: "\f0ee"
		}

		.fa-cloud-upload-alt:before {
			content: "\f382"
		}

		.fa-clouds:before {
			content: "\f744"
		}

		.fa-clouds-moon:before {
			content: "\f745"
		}

		.fa-clouds-sun:before {
			content: "\f746"
		}

		.fa-cloudscale:before {
			content: "\f383"
		}

		.fa-cloudsmith:before {
			content: "\f384"
		}

		.fa-cloudversify:before {
			content: "\f385"
		}

		.fa-club:before {
			content: "\f327"
		}

		.fa-cocktail:before {
			content: "\f561"
		}

		.fa-code:before {
			content: "\f121"
		}

		.fa-code-branch:before {
			content: "\f126"
		}

		.fa-code-commit:before {
			content: "\f386"
		}

		.fa-code-merge:before {
			content: "\f387"
		}

		.fa-codepen:before {
			content: "\f1cb"
		}

		.fa-codiepie:before {
			content: "\f284"
		}

		.fa-coffee:before {
			content: "\f0f4"
		}

		.fa-coffee-pot:before {
			content: "\f902"
		}

		.fa-coffee-togo:before {
			content: "\f6c5"
		}

		.fa-coffin:before {
			content: "\f6c6"
		}

		.fa-coffin-cross:before {
			content: "\f951"
		}

		.fa-cog:before {
			content: "\f013"
		}

		.fa-cogs:before {
			content: "\f085"
		}

		.fa-coin:before {
			content: "\f85c"
		}

		.fa-coins:before {
			content: "\f51e"
		}

		.fa-columns:before {
			content: "\f0db"
		}

		.fa-comet:before {
			content: "\f903"
		}

		.fa-comment:before {
			content: "\f075"
		}

		.fa-comment-alt:before {
			content: "\f27a"
		}

		.fa-comment-alt-check:before {
			content: "\f4a2"
		}

		.fa-comment-alt-dollar:before {
			content: "\f650"
		}

		.fa-comment-alt-dots:before {
			content: "\f4a3"
		}

		.fa-comment-alt-edit:before {
			content: "\f4a4"
		}

		.fa-comment-alt-exclamation:before {
			content: "\f4a5"
		}

		.fa-comment-alt-lines:before {
			content: "\f4a6"
		}

		.fa-comment-alt-medical:before {
			content: "\f7f4"
		}

		.fa-comment-alt-minus:before {
			content: "\f4a7"
		}

		.fa-comment-alt-music:before {
			content: "\f8af"
		}

		.fa-comment-alt-plus:before {
			content: "\f4a8"
		}

		.fa-comment-alt-slash:before {
			content: "\f4a9"
		}

		.fa-comment-alt-smile:before {
			content: "\f4aa"
		}

		.fa-comment-alt-times:before {
			content: "\f4ab"
		}

		.fa-comment-check:before {
			content: "\f4ac"
		}

		.fa-comment-dollar:before {
			content: "\f651"
		}

		.fa-comment-dots:before {
			content: "\f4ad"
		}

		.fa-comment-edit:before {
			content: "\f4ae"
		}

		.fa-comment-exclamation:before {
			content: "\f4af"
		}

		.fa-comment-lines:before {
			content: "\f4b0"
		}

		.fa-comment-medical:before {
			content: "\f7f5"
		}

		.fa-comment-minus:before {
			content: "\f4b1"
		}

		.fa-comment-music:before {
			content: "\f8b0"
		}

		.fa-comment-plus:before {
			content: "\f4b2"
		}

		.fa-comment-slash:before {
			content: "\f4b3"
		}

		.fa-comment-smile:before {
			content: "\f4b4"
		}

		.fa-comment-times:before {
			content: "\f4b5"
		}

		.fa-comments:before {
			content: "\f086"
		}

		.fa-comments-alt:before {
			content: "\f4b6"
		}

		.fa-comments-alt-dollar:before {
			content: "\f652"
		}

		.fa-comments-dollar:before {
			content: "\f653"
		}

		.fa-compact-disc:before {
			content: "\f51f"
		}

		.fa-compass:before {
			content: "\f14e"
		}

		.fa-compass-slash:before {
			content: "\f5e9"
		}

		.fa-compress:before {
			content: "\f066"
		}

		.fa-compress-alt:before {
			content: "\f422"
		}

		.fa-compress-arrows-alt:before {
			content: "\f78c"
		}

		.fa-compress-wide:before {
			content: "\f326"
		}

		.fa-computer-classic:before {
			content: "\f8b1"
		}

		.fa-computer-speaker:before {
			content: "\f8b2"
		}

		.fa-concierge-bell:before {
			content: "\f562"
		}

		.fa-confluence:before {
			content: "\f78d"
		}

		.fa-connectdevelop:before {
			content: "\f20e"
		}

		.fa-construction:before {
			content: "\f85d"
		}

		.fa-container-storage:before {
			content: "\f4b7"
		}

		.fa-contao:before {
			content: "\f26d"
		}

		.fa-conveyor-belt:before {
			content: "\f46e"
		}

		.fa-conveyor-belt-alt:before {
			content: "\f46f"
		}

		.fa-cookie:before {
			content: "\f563"
		}

		.fa-cookie-bite:before {
			content: "\f564"
		}

		.fa-copy:before {
			content: "\f0c5"
		}

		.fa-copyright:before {
			content: "\f1f9"
		}

		.fa-corn:before {
			content: "\f6c7"
		}

		.fa-cotton-bureau:before {
			content: "\f89e"
		}

		.fa-couch:before {
			content: "\f4b8"
		}

		.fa-cow:before {
			content: "\f6c8"
		}

		.fa-cowbell:before {
			content: "\f8b3"
		}

		.fa-cowbell-more:before {
			content: "\f8b4"
		}

		.fa-cpanel:before {
			content: "\f388"
		}

		.fa-creative-commons:before {
			content: "\f25e"
		}

		.fa-creative-commons-by:before {
			content: "\f4e7"
		}

		.fa-creative-commons-nc:before {
			content: "\f4e8"
		}

		.fa-creative-commons-nc-eu:before {
			content: "\f4e9"
		}

		.fa-creative-commons-nc-jp:before {
			content: "\f4ea"
		}

		.fa-creative-commons-nd:before {
			content: "\f4eb"
		}

		.fa-creative-commons-pd:before {
			content: "\f4ec"
		}

		.fa-creative-commons-pd-alt:before {
			content: "\f4ed"
		}

		.fa-creative-commons-remix:before {
			content: "\f4ee"
		}

		.fa-creative-commons-sa:before {
			content: "\f4ef"
		}

		.fa-creative-commons-sampling:before {
			content: "\f4f0"
		}

		.fa-creative-commons-sampling-plus:before {
			content: "\f4f1"
		}

		.fa-creative-commons-share:before {
			content: "\f4f2"
		}

		.fa-creative-commons-zero:before {
			content: "\f4f3"
		}

		.fa-credit-card:before {
			content: "\f09d"
		}

		.fa-credit-card-blank:before {
			content: "\f389"
		}

		.fa-credit-card-front:before {
			content: "\f38a"
		}

		.fa-cricket:before {
			content: "\f449"
		}

		.fa-critical-role:before {
			content: "\f6c9"
		}

		.fa-croissant:before {
			content: "\f7f6"
		}

		.fa-crop:before {
			content: "\f125"
		}

		.fa-crop-alt:before {
			content: "\f565"
		}

		.fa-cross:before {
			content: "\f654"
		}

		.fa-crosshairs:before {
			content: "\f05b"
		}

		.fa-crow:before {
			content: "\f520"
		}

		.fa-crown:before {
			content: "\f521"
		}

		.fa-crutch:before {
			content: "\f7f7"
		}

		.fa-crutches:before {
			content: "\f7f8"
		}

		.fa-css3:before {
			content: "\f13c"
		}

		.fa-css3-alt:before {
			content: "\f38b"
		}

		.fa-cube:before {
			content: "\f1b2"
		}

		.fa-cubes:before {
			content: "\f1b3"
		}

		.fa-curling:before {
			content: "\f44a"
		}

		.fa-cut:before {
			content: "\f0c4"
		}

		.fa-cuttlefish:before {
			content: "\f38c"
		}

		.fa-d-and-d:before {
			content: "\f38d"
		}

		.fa-d-and-d-beyond:before {
			content: "\f6ca"
		}

		.fa-dagger:before {
			content: "\f6cb"
		}

		.fa-dailymotion:before {
			content: "\f952"
		}

		.fa-dashcube:before {
			content: "\f210"
		}

		.fa-database:before {
			content: "\f1c0"
		}

		.fa-deaf:before {
			content: "\f2a4"
		}

		.fa-debug:before {
			content: "\f7f9"
		}

		.fa-deer:before {
			content: "\f78e"
		}

		.fa-deer-rudolph:before {
			content: "\f78f"
		}

		.fa-delicious:before {
			content: "\f1a5"
		}

		.fa-democrat:before {
			content: "\f747"
		}

		.fa-deploydog:before {
			content: "\f38e"
		}

		.fa-deskpro:before {
			content: "\f38f"
		}

		.fa-desktop:before {
			content: "\f108"
		}

		.fa-desktop-alt:before {
			content: "\f390"
		}

		.fa-dev:before {
			content: "\f6cc"
		}

		.fa-deviantart:before {
			content: "\f1bd"
		}

		.fa-dewpoint:before {
			content: "\f748"
		}

		.fa-dharmachakra:before {
			content: "\f655"
		}

		.fa-dhl:before {
			content: "\f790"
		}

		.fa-diagnoses:before {
			content: "\f470"
		}

		.fa-diamond:before {
			content: "\f219"
		}

		.fa-diaspora:before {
			content: "\f791"
		}

		.fa-dice:before {
			content: "\f522"
		}

		.fa-dice-d10:before {
			content: "\f6cd"
		}

		.fa-dice-d12:before {
			content: "\f6ce"
		}

		.fa-dice-d20:before {
			content: "\f6cf"
		}

		.fa-dice-d4:before {
			content: "\f6d0"
		}

		.fa-dice-d6:before {
			content: "\f6d1"
		}

		.fa-dice-d8:before {
			content: "\f6d2"
		}

		.fa-dice-five:before {
			content: "\f523"
		}

		.fa-dice-four:before {
			content: "\f524"
		}

		.fa-dice-one:before {
			content: "\f525"
		}

		.fa-dice-six:before {
			content: "\f526"
		}

		.fa-dice-three:before {
			content: "\f527"
		}

		.fa-dice-two:before {
			content: "\f528"
		}

		.fa-digg:before {
			content: "\f1a6"
		}

		.fa-digging:before {
			content: "\f85e"
		}

		.fa-digital-ocean:before {
			content: "\f391"
		}

		.fa-digital-tachograph:before {
			content: "\f566"
		}

		.fa-diploma:before {
			content: "\f5ea"
		}

		.fa-directions:before {
			content: "\f5eb"
		}

		.fa-disc-drive:before {
			content: "\f8b5"
		}

		.fa-discord:before {
			content: "\f392"
		}

		.fa-discourse:before {
			content: "\f393"
		}

		.fa-disease:before {
			content: "\f7fa"
		}

		.fa-divide:before {
			content: "\f529"
		}

		.fa-dizzy:before {
			content: "\f567"
		}

		.fa-dna:before {
			content: "\f471"
		}

		.fa-do-not-enter:before {
			content: "\f5ec"
		}

		.fa-dochub:before {
			content: "\f394"
		}

		.fa-docker:before {
			content: "\f395"
		}

		.fa-dog:before {
			content: "\f6d3"
		}

		.fa-dog-leashed:before {
			content: "\f6d4"
		}

		.fa-dollar-sign:before {
			content: "\f155"
		}

		.fa-dolly:before {
			content: "\f472"
		}

		.fa-dolly-empty:before {
			content: "\f473"
		}

		.fa-dolly-flatbed:before {
			content: "\f474"
		}

		.fa-dolly-flatbed-alt:before {
			content: "\f475"
		}

		.fa-dolly-flatbed-empty:before {
			content: "\f476"
		}

		.fa-donate:before {
			content: "\f4b9"
		}

		.fa-door-closed:before {
			content: "\f52a"
		}

		.fa-door-open:before {
			content: "\f52b"
		}

		.fa-dot-circle:before {
			content: "\f192"
		}

		.fa-dove:before {
			content: "\f4ba"
		}

		.fa-download:before {
			content: "\f019"
		}

		.fa-draft2digital:before {
			content: "\f396"
		}

		.fa-drafting-compass:before {
			content: "\f568"
		}

		.fa-dragon:before {
			content: "\f6d5"
		}

		.fa-draw-circle:before {
			content: "\f5ed"
		}

		.fa-draw-polygon:before {
			content: "\f5ee"
		}

		.fa-draw-square:before {
			content: "\f5ef"
		}

		.fa-dreidel:before {
			content: "\f792"
		}

		.fa-dribbble:before {
			content: "\f17d"
		}

		.fa-dribbble-square:before {
			content: "\f397"
		}

		.fa-drone:before {
			content: "\f85f"
		}

		.fa-drone-alt:before {
			content: "\f860"
		}

		.fa-dropbox:before {
			content: "\f16b"
		}

		.fa-drum:before {
			content: "\f569"
		}

		.fa-drum-steelpan:before {
			content: "\f56a"
		}

		.fa-drumstick:before {
			content: "\f6d6"
		}

		.fa-drumstick-bite:before {
			content: "\f6d7"
		}

		.fa-drupal:before {
			content: "\f1a9"
		}

		.fa-dryer:before {
			content: "\f861"
		}

		.fa-dryer-alt:before {
			content: "\f862"
		}

		.fa-duck:before {
			content: "\f6d8"
		}

		.fa-dumbbell:before {
			content: "\f44b"
		}

		.fa-dumpster:before {
			content: "\f793"
		}

		.fa-dumpster-fire:before {
			content: "\f794"
		}

		.fa-dungeon:before {
			content: "\f6d9"
		}

		.fa-dyalog:before {
			content: "\f399"
		}

		.fa-ear:before {
			content: "\f5f0"
		}

		.fa-ear-muffs:before {
			content: "\f795"
		}

		.fa-earlybirds:before {
			content: "\f39a"
		}

		.fa-ebay:before {
			content: "\f4f4"
		}

		.fa-eclipse:before {
			content: "\f749"
		}

		.fa-eclipse-alt:before {
			content: "\f74a"
		}

		.fa-edge:before {
			content: "\f282"
		}

		.fa-edit:before {
			content: "\f044"
		}

		.fa-egg:before {
			content: "\f7fb"
		}

		.fa-egg-fried:before {
			content: "\f7fc"
		}

		.fa-eject:before {
			content: "\f052"
		}

		.fa-elementor:before {
			content: "\f430"
		}

		.fa-elephant:before {
			content: "\f6da"
		}

		.fa-ellipsis-h:before {
			content: "\f141"
		}

		.fa-ellipsis-h-alt:before {
			content: "\f39b"
		}

		.fa-ellipsis-v:before {
			content: "\f142"
		}

		.fa-ellipsis-v-alt:before {
			content: "\f39c"
		}

		.fa-ello:before {
			content: "\f5f1"
		}

		.fa-ember:before {
			content: "\f423"
		}

		.fa-empire:before {
			content: "\f1d1"
		}

		.fa-empty-set:before {
			content: "\f656"
		}

		.fa-engine-warning:before {
			content: "\f5f2"
		}

		.fa-envelope:before {
			content: "\f0e0"
		}

		.fa-envelope-open:before {
			content: "\f2b6"
		}

		.fa-envelope-open-dollar:before {
			content: "\f657"
		}

		.fa-envelope-open-text:before {
			content: "\f658"
		}

		.fa-envelope-square:before {
			content: "\f199"
		}

		.fa-envira:before {
			content: "\f299"
		}

		.fa-equals:before {
			content: "\f52c"
		}

		.fa-eraser:before {
			content: "\f12d"
		}

		.fa-erlang:before {
			content: "\f39d"
		}

		.fa-ethereum:before {
			content: "\f42e"
		}

		.fa-ethernet:before {
			content: "\f796"
		}

		.fa-etsy:before {
			content: "\f2d7"
		}

		.fa-euro-sign:before {
			content: "\f153"
		}

		.fa-evernote:before {
			content: "\f839"
		}

		.fa-exchange:before {
			content: "\f0ec"
		}

		.fa-exchange-alt:before {
			content: "\f362"
		}

		.fa-exclamation:before {
			content: "\f12a"
		}

		.fa-exclamation-circle:before {
			content: "\f06a"
		}

		.fa-exclamation-square:before {
			content: "\f321"
		}

		.fa-exclamation-triangle:before {
			content: "\f071"
		}

		.fa-expand:before {
			content: "\f065"
		}

		.fa-expand-alt:before {
			content: "\f424"
		}

		.fa-expand-arrows:before {
			content: "\f31d"
		}

		.fa-expand-arrows-alt:before {
			content: "\f31e"
		}

		.fa-expand-wide:before {
			content: "\f320"
		}

		.fa-expeditedssl:before {
			content: "\f23e"
		}

		.fa-external-link:before {
			content: "\f08e"
		}

		.fa-external-link-alt:before {
			content: "\f35d"
		}

		.fa-external-link-square:before {
			content: "\f14c"
		}

		.fa-external-link-square-alt:before {
			content: "\f360"
		}

		.fa-eye:before {
			content: "\f06e"
		}

		.fa-eye-dropper:before {
			content: "\f1fb"
		}

		.fa-eye-evil:before {
			content: "\f6db"
		}

		.fa-eye-slash:before {
			content: "\f070"
		}

		.fa-facebook:before {
			content: "\f09a"
		}

		.fa-facebook-f:before {
			content: "\f39e"
		}

		.fa-facebook-messenger:before {
			content: "\f39f"
		}

		.fa-facebook-square:before {
			content: "\f082"
		}

		.fa-fan:before {
			content: "\f863"
		}

		.fa-fan-table:before {
			content: "\f904"
		}

		.fa-fantasy-flight-games:before {
			content: "\f6dc"
		}

		.fa-farm:before {
			content: "\f864"
		}

		.fa-fast-backward:before {
			content: "\f049"
		}

		.fa-fast-forward:before {
			content: "\f050"
		}

		.fa-faucet:before {
			content: "\f905"
		}

		.fa-faucet-drip:before {
			content: "\f906"
		}

		.fa-fax:before {
			content: "\f1ac"
		}

		.fa-feather:before {
			content: "\f52d"
		}

		.fa-feather-alt:before {
			content: "\f56b"
		}

		.fa-fedex:before {
			content: "\f797"
		}

		.fa-fedora:before {
			content: "\f798"
		}

		.fa-female:before {
			content: "\f182"
		}

		.fa-field-hockey:before {
			content: "\f44c"
		}

		.fa-fighter-jet:before {
			content: "\f0fb"
		}

		.fa-figma:before {
			content: "\f799"
		}

		.fa-file:before {
			content: "\f15b"
		}

		.fa-file-alt:before {
			content: "\f15c"
		}

		.fa-file-archive:before {
			content: "\f1c6"
		}

		.fa-file-audio:before {
			content: "\f1c7"
		}

		.fa-file-certificate:before {
			content: "\f5f3"
		}

		.fa-file-chart-line:before {
			content: "\f659"
		}

		.fa-file-chart-pie:before {
			content: "\f65a"
		}

		.fa-file-check:before {
			content: "\f316"
		}

		.fa-file-code:before {
			content: "\f1c9"
		}

		.fa-file-contract:before {
			content: "\f56c"
		}

		.fa-file-csv:before {
			content: "\f6dd"
		}

		.fa-file-download:before {
			content: "\f56d"
		}

		.fa-file-edit:before {
			content: "\f31c"
		}

		.fa-file-excel:before {
			content: "\f1c3"
		}

		.fa-file-exclamation:before {
			content: "\f31a"
		}

		.fa-file-export:before {
			content: "\f56e"
		}

		.fa-file-image:before {
			content: "\f1c5"
		}

		.fa-file-import:before {
			content: "\f56f"
		}

		.fa-file-invoice:before {
			content: "\f570"
		}

		.fa-file-invoice-dollar:before {
			content: "\f571"
		}

		.fa-file-medical:before {
			content: "\f477"
		}

		.fa-file-medical-alt:before {
			content: "\f478"
		}

		.fa-file-minus:before {
			content: "\f318"
		}

		.fa-file-music:before {
			content: "\f8b6"
		}

		.fa-file-pdf:before {
			content: "\f1c1"
		}

		.fa-file-plus:before {
			content: "\f319"
		}

		.fa-file-powerpoint:before {
			content: "\f1c4"
		}

		.fa-file-prescription:before {
			content: "\f572"
		}

		.fa-file-search:before {
			content: "\f865"
		}

		.fa-file-signature:before {
			content: "\f573"
		}

		.fa-file-spreadsheet:before {
			content: "\f65b"
		}

		.fa-file-times:before {
			content: "\f317"
		}

		.fa-file-upload:before {
			content: "\f574"
		}

		.fa-file-user:before {
			content: "\f65c"
		}

		.fa-file-video:before {
			content: "\f1c8"
		}

		.fa-file-word:before {
			content: "\f1c2"
		}

		.fa-files-medical:before {
			content: "\f7fd"
		}

		.fa-fill:before {
			content: "\f575"
		}

		.fa-fill-drip:before {
			content: "\f576"
		}

		.fa-film:before {
			content: "\f008"
		}

		.fa-film-alt:before {
			content: "\f3a0"
		}

		.fa-film-canister:before {
			content: "\f8b7"
		}

		.fa-filter:before {
			content: "\f0b0"
		}

		.fa-fingerprint:before {
			content: "\f577"
		}

		.fa-fire:before {
			content: "\f06d"
		}

		.fa-fire-alt:before {
			content: "\f7e4"
		}

		.fa-fire-extinguisher:before {
			content: "\f134"
		}

		.fa-fire-smoke:before {
			content: "\f74b"
		}

		.fa-firefox:before {
			content: "\f269"
		}

		.fa-firefox-browser:before {
			content: "\f907"
		}

		.fa-fireplace:before {
			content: "\f79a"
		}

		.fa-first-aid:before {
			content: "\f479"
		}

		.fa-first-order:before {
			content: "\f2b0"
		}

		.fa-first-order-alt:before {
			content: "\f50a"
		}

		.fa-firstdraft:before {
			content: "\f3a1"
		}

		.fa-fish:before {
			content: "\f578"
		}

		.fa-fish-cooked:before {
			content: "\f7fe"
		}

		.fa-fist-raised:before {
			content: "\f6de"
		}

		.fa-flag:before {
			content: "\f024"
		}

		.fa-flag-alt:before {
			content: "\f74c"
		}

		.fa-flag-checkered:before {
			content: "\f11e"
		}

		.fa-flag-usa:before {
			content: "\f74d"
		}

		.fa-flame:before {
			content: "\f6df"
		}

		.fa-flashlight:before {
			content: "\f8b8"
		}

		.fa-flask:before {
			content: "\f0c3"
		}

		.fa-flask-poison:before {
			content: "\f6e0"
		}

		.fa-flask-potion:before {
			content: "\f6e1"
		}

		.fa-flickr:before {
			content: "\f16e"
		}

		.fa-flipboard:before {
			content: "\f44d"
		}

		.fa-flower:before {
			content: "\f7ff"
		}

		.fa-flower-daffodil:before {
			content: "\f800"
		}

		.fa-flower-tulip:before {
			content: "\f801"
		}

		.fa-flushed:before {
			content: "\f579"
		}

		.fa-flute:before {
			content: "\f8b9"
		}

		.fa-flux-capacitor:before {
			content: "\f8ba"
		}

		.fa-fly:before {
			content: "\f417"
		}

		.fa-fog:before {
			content: "\f74e"
		}

		.fa-folder:before {
			content: "\f07b"
		}

		.fa-folder-download:before {
			content: "\f953"
		}

		.fa-folder-minus:before {
			content: "\f65d"
		}

		.fa-folder-open:before {
			content: "\f07c"
		}

		.fa-folder-plus:before {
			content: "\f65e"
		}

		.fa-folder-times:before {
			content: "\f65f"
		}

		.fa-folder-tree:before {
			content: "\f802"
		}

		.fa-folder-upload:before {
			content: "\f954"
		}

		.fa-folders:before {
			content: "\f660"
		}

		.fa-font:before {
			content: "\f031"
		}

		.fa-font-awesome:before {
			content: "\f2b4"
		}

		.fa-font-awesome-alt:before {
			content: "\f35c"
		}

		.fa-font-awesome-flag:before {
			content: "\f425"
		}

		.fa-font-awesome-logo-full:before {
			content: "\f4e6"
		}

		.fa-font-case:before {
			content: "\f866"
		}

		.fa-fonticons:before {
			content: "\f280"
		}

		.fa-fonticons-fi:before {
			content: "\f3a2"
		}

		.fa-football-ball:before {
			content: "\f44e"
		}

		.fa-football-helmet:before {
			content: "\f44f"
		}

		.fa-forklift:before {
			content: "\f47a"
		}

		.fa-fort-awesome:before {
			content: "\f286"
		}

		.fa-fort-awesome-alt:before {
			content: "\f3a3"
		}

		.fa-forumbee:before {
			content: "\f211"
		}

		.fa-forward:before {
			content: "\f04e"
		}

		.fa-foursquare:before {
			content: "\f180"
		}

		.fa-fragile:before {
			content: "\f4bb"
		}

		.fa-free-code-camp:before {
			content: "\f2c5"
		}

		.fa-freebsd:before {
			content: "\f3a4"
		}

		.fa-french-fries:before {
			content: "\f803"
		}

		.fa-frog:before {
			content: "\f52e"
		}

		.fa-frosty-head:before {
			content: "\f79b"
		}

		.fa-frown:before {
			content: "\f119"
		}

		.fa-frown-open:before {
			content: "\f57a"
		}

		.fa-fulcrum:before {
			content: "\f50b"
		}

		.fa-function:before {
			content: "\f661"
		}

		.fa-funnel-dollar:before {
			content: "\f662"
		}

		.fa-futbol:before {
			content: "\f1e3"
		}

		.fa-galactic-republic:before {
			content: "\f50c"
		}

		.fa-galactic-senate:before {
			content: "\f50d"
		}

		.fa-galaxy:before {
			content: "\f908"
		}

		.fa-game-board:before {
			content: "\f867"
		}

		.fa-game-board-alt:before {
			content: "\f868"
		}

		.fa-game-console-handheld:before {
			content: "\f8bb"
		}

		.fa-gamepad:before {
			content: "\f11b"
		}

		.fa-gamepad-alt:before {
			content: "\f8bc"
		}

		.fa-garage:before {
			content: "\f909"
		}

		.fa-garage-car:before {
			content: "\f90a"
		}

		.fa-garage-open:before {
			content: "\f90b"
		}

		.fa-gas-pump:before {
			content: "\f52f"
		}

		.fa-gas-pump-slash:before {
			content: "\f5f4"
		}

		.fa-gavel:before {
			content: "\f0e3"
		}

		.fa-gem:before {
			content: "\f3a5"
		}

		.fa-genderless:before {
			content: "\f22d"
		}

		.fa-get-pocket:before {
			content: "\f265"
		}

		.fa-gg:before {
			content: "\f260"
		}

		.fa-gg-circle:before {
			content: "\f261"
		}

		.fa-ghost:before {
			content: "\f6e2"
		}

		.fa-gift:before {
			content: "\f06b"
		}

		.fa-gift-card:before {
			content: "\f663"
		}

		.fa-gifts:before {
			content: "\f79c"
		}

		.fa-gingerbread-man:before {
			content: "\f79d"
		}

		.fa-git:before {
			content: "\f1d3"
		}

		.fa-git-alt:before {
			content: "\f841"
		}

		.fa-git-square:before {
			content: "\f1d2"
		}

		.fa-github:before {
			content: "\f09b"
		}

		.fa-github-alt:before {
			content: "\f113"
		}

		.fa-github-square:before {
			content: "\f092"
		}

		.fa-gitkraken:before {
			content: "\f3a6"
		}

		.fa-gitlab:before {
			content: "\f296"
		}

		.fa-gitter:before {
			content: "\f426"
		}

		.fa-glass:before {
			content: "\f804"
		}

		.fa-glass-champagne:before {
			content: "\f79e"
		}

		.fa-glass-cheers:before {
			content: "\f79f"
		}

		.fa-glass-citrus:before {
			content: "\f869"
		}

		.fa-glass-martini:before {
			content: "\f000"
		}

		.fa-glass-martini-alt:before {
			content: "\f57b"
		}

		.fa-glass-whiskey:before {
			content: "\f7a0"
		}

		.fa-glass-whiskey-rocks:before {
			content: "\f7a1"
		}

		.fa-glasses:before {
			content: "\f530"
		}

		.fa-glasses-alt:before {
			content: "\f5f5"
		}

		.fa-glide:before {
			content: "\f2a5"
		}

		.fa-glide-g:before {
			content: "\f2a6"
		}

		.fa-globe:before {
			content: "\f0ac"
		}

		.fa-globe-africa:before {
			content: "\f57c"
		}

		.fa-globe-americas:before {
			content: "\f57d"
		}

		.fa-globe-asia:before {
			content: "\f57e"
		}

		.fa-globe-europe:before {
			content: "\f7a2"
		}

		.fa-globe-snow:before {
			content: "\f7a3"
		}

		.fa-globe-stand:before {
			content: "\f5f6"
		}

		.fa-gofore:before {
			content: "\f3a7"
		}

		.fa-golf-ball:before {
			content: "\f450"
		}

		.fa-golf-club:before {
			content: "\f451"
		}

		.fa-goodreads:before {
			content: "\f3a8"
		}

		.fa-goodreads-g:before {
			content: "\f3a9"
		}

		.fa-google:before {
			content: "\f1a0"
		}

		.fa-google-drive:before {
			content: "\f3aa"
		}

		.fa-google-play:before {
			content: "\f3ab"
		}

		.fa-google-plus:before {
			content: "\f2b3"
		}

		.fa-google-plus-g:before {
			content: "\f0d5"
		}

		.fa-google-plus-square:before {
			content: "\f0d4"
		}

		.fa-google-wallet:before {
			content: "\f1ee"
		}

		.fa-gopuram:before {
			content: "\f664"
		}

		.fa-graduation-cap:before {
			content: "\f19d"
		}

		.fa-gramophone:before {
			content: "\f8bd"
		}

		.fa-gratipay:before {
			content: "\f184"
		}

		.fa-grav:before {
			content: "\f2d6"
		}

		.fa-greater-than:before {
			content: "\f531"
		}

		.fa-greater-than-equal:before {
			content: "\f532"
		}

		.fa-grimace:before {
			content: "\f57f"
		}

		.fa-grin:before {
			content: "\f580"
		}

		.fa-grin-alt:before {
			content: "\f581"
		}

		.fa-grin-beam:before {
			content: "\f582"
		}

		.fa-grin-beam-sweat:before {
			content: "\f583"
		}

		.fa-grin-hearts:before {
			content: "\f584"
		}

		.fa-grin-squint:before {
			content: "\f585"
		}

		.fa-grin-squint-tears:before {
			content: "\f586"
		}

		.fa-grin-stars:before {
			content: "\f587"
		}

		.fa-grin-tears:before {
			content: "\f588"
		}

		.fa-grin-tongue:before {
			content: "\f589"
		}

		.fa-grin-tongue-squint:before {
			content: "\f58a"
		}

		.fa-grin-tongue-wink:before {
			content: "\f58b"
		}

		.fa-grin-wink:before {
			content: "\f58c"
		}

		.fa-grip-horizontal:before {
			content: "\f58d"
		}

		.fa-grip-lines:before {
			content: "\f7a4"
		}

		.fa-grip-lines-vertical:before {
			content: "\f7a5"
		}

		.fa-grip-vertical:before {
			content: "\f58e"
		}

		.fa-gripfire:before {
			content: "\f3ac"
		}

		.fa-grunt:before {
			content: "\f3ad"
		}

		.fa-guitar:before {
			content: "\f7a6"
		}

		.fa-guitar-electric:before {
			content: "\f8be"
		}

		.fa-guitars:before {
			content: "\f8bf"
		}

		.fa-gulp:before {
			content: "\f3ae"
		}

		.fa-h-square:before {
			content: "\f0fd"
		}

		.fa-h1:before {
			content: "\f313"
		}

		.fa-h2:before {
			content: "\f314"
		}

		.fa-h3:before {
			content: "\f315"
		}

		.fa-h4:before {
			content: "\f86a"
		}

		.fa-hacker-news:before {
			content: "\f1d4"
		}

		.fa-hacker-news-square:before {
			content: "\f3af"
		}

		.fa-hackerrank:before {
			content: "\f5f7"
		}

		.fa-hamburger:before {
			content: "\f805"
		}

		.fa-hammer:before {
			content: "\f6e3"
		}

		.fa-hammer-war:before {
			content: "\f6e4"
		}

		.fa-hamsa:before {
			content: "\f665"
		}

		.fa-hand-heart:before {
			content: "\f4bc"
		}

		.fa-hand-holding:before {
			content: "\f4bd"
		}

		.fa-hand-holding-box:before {
			content: "\f47b"
		}

		.fa-hand-holding-heart:before {
			content: "\f4be"
		}

		.fa-hand-holding-magic:before {
			content: "\f6e5"
		}

		.fa-hand-holding-medical:before {
			content: "\f95c"
		}

		.fa-hand-holding-seedling:before {
			content: "\f4bf"
		}

		.fa-hand-holding-usd:before {
			content: "\f4c0"
		}

		.fa-hand-holding-water:before {
			content: "\f4c1"
		}

		.fa-hand-lizard:before {
			content: "\f258"
		}

		.fa-hand-middle-finger:before {
			content: "\f806"
		}

		.fa-hand-paper:before {
			content: "\f256"
		}

		.fa-hand-peace:before {
			content: "\f25b"
		}

		.fa-hand-point-down:before {
			content: "\f0a7"
		}

		.fa-hand-point-left:before {
			content: "\f0a5"
		}

		.fa-hand-point-right:before {
			content: "\f0a4"
		}

		.fa-hand-point-up:before {
			content: "\f0a6"
		}

		.fa-hand-pointer:before {
			content: "\f25a"
		}

		.fa-hand-receiving:before {
			content: "\f47c"
		}

		.fa-hand-rock:before {
			content: "\f255"
		}

		.fa-hand-scissors:before {
			content: "\f257"
		}

		.fa-hand-sparkles:before {
			content: "\f95d"
		}

		.fa-hand-spock:before {
			content: "\f259"
		}

		.fa-hands:before {
			content: "\f4c2"
		}

		.fa-hands-heart:before {
			content: "\f4c3"
		}

		.fa-hands-helping:before {
			content: "\f4c4"
		}

		.fa-hands-usd:before {
			content: "\f4c5"
		}

		.fa-hands-wash:before {
			content: "\f95e"
		}

		.fa-handshake:before {
			content: "\f2b5"
		}

		.fa-handshake-alt:before {
			content: "\f4c6"
		}

		.fa-handshake-alt-slash:before {
			content: "\f95f"
		}

		.fa-handshake-slash:before {
			content: "\f960"
		}

		.fa-hanukiah:before {
			content: "\f6e6"
		}

		.fa-hard-hat:before {
			content: "\f807"
		}

		.fa-hashtag:before {
			content: "\f292"
		}

		.fa-hat-chef:before {
			content: "\f86b"
		}

		.fa-hat-cowboy:before {
			content: "\f8c0"
		}

		.fa-hat-cowboy-side:before {
			content: "\f8c1"
		}

		.fa-hat-santa:before {
			content: "\f7a7"
		}

		.fa-hat-winter:before {
			content: "\f7a8"
		}

		.fa-hat-witch:before {
			content: "\f6e7"
		}

		.fa-hat-wizard:before {
			content: "\f6e8"
		}

		.fa-hdd:before {
			content: "\f0a0"
		}

		.fa-head-side:before {
			content: "\f6e9"
		}

		.fa-head-side-brain:before {
			content: "\f808"
		}

		.fa-head-side-cough:before {
			content: "\f961"
		}

		.fa-head-side-cough-slash:before {
			content: "\f962"
		}

		.fa-head-side-headphones:before {
			content: "\f8c2"
		}

		.fa-head-side-mask:before {
			content: "\f963"
		}

		.fa-head-side-medical:before {
			content: "\f809"
		}

		.fa-head-side-virus:before {
			content: "\f964"
		}

		.fa-head-vr:before {
			content: "\f6ea"
		}

		.fa-heading:before {
			content: "\f1dc"
		}

		.fa-headphones:before {
			content: "\f025"
		}

		.fa-headphones-alt:before {
			content: "\f58f"
		}

		.fa-headset:before {
			content: "\f590"
		}

		.fa-heart:before {
			content: "\f004"
		}

		.fa-heart-broken:before {
			content: "\f7a9"
		}

		.fa-heart-circle:before {
			content: "\f4c7"
		}

		.fa-heart-rate:before {
			content: "\f5f8"
		}

		.fa-heart-square:before {
			content: "\f4c8"
		}

		.fa-heartbeat:before {
			content: "\f21e"
		}

		.fa-heat:before {
			content: "\f90c"
		}

		.fa-helicopter:before {
			content: "\f533"
		}

		.fa-helmet-battle:before {
			content: "\f6eb"
		}

		.fa-hexagon:before {
			content: "\f312"
		}

		.fa-highlighter:before {
			content: "\f591"
		}

		.fa-hiking:before {
			content: "\f6ec"
		}

		.fa-hippo:before {
			content: "\f6ed"
		}

		.fa-hips:before {
			content: "\f452"
		}

		.fa-hire-a-helper:before {
			content: "\f3b0"
		}

		.fa-history:before {
			content: "\f1da"
		}

		.fa-hockey-mask:before {
			content: "\f6ee"
		}

		.fa-hockey-puck:before {
			content: "\f453"
		}

		.fa-hockey-sticks:before {
			content: "\f454"
		}

		.fa-holly-berry:before {
			content: "\f7aa"
		}

		.fa-home:before {
			content: "\f015"
		}

		.fa-home-alt:before {
			content: "\f80a"
		}

		.fa-home-heart:before {
			content: "\f4c9"
		}

		.fa-home-lg:before {
			content: "\f80b"
		}

		.fa-home-lg-alt:before {
			content: "\f80c"
		}

		.fa-hood-cloak:before {
			content: "\f6ef"
		}

		.fa-hooli:before {
			content: "\f427"
		}

		.fa-horizontal-rule:before {
			content: "\f86c"
		}

		.fa-hornbill:before {
			content: "\f592"
		}

		.fa-horse:before {
			content: "\f6f0"
		}

		.fa-horse-head:before {
			content: "\f7ab"
		}

		.fa-horse-saddle:before {
			content: "\f8c3"
		}

		.fa-hospital:before {
			content: "\f0f8"
		}

		.fa-hospital-alt:before {
			content: "\f47d"
		}

		.fa-hospital-symbol:before {
			content: "\f47e"
		}

		.fa-hospital-user:before {
			content: "\f80d"
		}

		.fa-hospitals:before {
			content: "\f80e"
		}

		.fa-hot-tub:before {
			content: "\f593"
		}

		.fa-hotdog:before {
			content: "\f80f"
		}

		.fa-hotel:before {
			content: "\f594"
		}

		.fa-hotjar:before {
			content: "\f3b1"
		}

		.fa-hourglass:before {
			content: "\f254"
		}

		.fa-hourglass-end:before {
			content: "\f253"
		}

		.fa-hourglass-half:before {
			content: "\f252"
		}

		.fa-hourglass-start:before {
			content: "\f251"
		}

		.fa-house:before {
			content: "\f90d"
		}

		.fa-house-damage:before {
			content: "\f6f1"
		}

		.fa-house-day:before {
			content: "\f90e"
		}

		.fa-house-flood:before {
			content: "\f74f"
		}

		.fa-house-leave:before {
			content: "\f90f"
		}

		.fa-house-night:before {
			content: "\f910"
		}

		.fa-house-return:before {
			content: "\f911"
		}

		.fa-house-signal:before {
			content: "\f912"
		}

		.fa-house-user:before {
			content: "\f965"
		}

		.fa-houzz:before {
			content: "\f27c"
		}

		.fa-hryvnia:before {
			content: "\f6f2"
		}

		.fa-html5:before {
			content: "\f13b"
		}

		.fa-hubspot:before {
			content: "\f3b2"
		}

		.fa-humidity:before {
			content: "\f750"
		}

		.fa-hurricane:before {
			content: "\f751"
		}

		.fa-i-cursor:before {
			content: "\f246"
		}

		.fa-ice-cream:before {
			content: "\f810"
		}

		.fa-ice-skate:before {
			content: "\f7ac"
		}

		.fa-icicles:before {
			content: "\f7ad"
		}

		.fa-icons:before {
			content: "\f86d"
		}

		.fa-icons-alt:before {
			content: "\f86e"
		}

		.fa-id-badge:before {
			content: "\f2c1"
		}

		.fa-id-card:before {
			content: "\f2c2"
		}

		.fa-id-card-alt:before {
			content: "\f47f"
		}

		.fa-ideal:before {
			content: "\f913"
		}

		.fa-igloo:before {
			content: "\f7ae"
		}

		.fa-image:before {
			content: "\f03e"
		}

		.fa-image-polaroid:before {
			content: "\f8c4"
		}

		.fa-images:before {
			content: "\f302"
		}

		.fa-imdb:before {
			content: "\f2d8"
		}

		.fa-inbox:before {
			content: "\f01c"
		}

		.fa-inbox-in:before {
			content: "\f310"
		}

		.fa-inbox-out:before {
			content: "\f311"
		}

		.fa-indent:before {
			content: "\f03c"
		}

		.fa-industry:before {
			content: "\f275"
		}

		.fa-industry-alt:before {
			content: "\f3b3"
		}

		.fa-infinity:before {
			content: "\f534"
		}

		.fa-info:before {
			content: "\f129"
		}

		.fa-info-circle:before {
			content: "\f05a"
		}

		.fa-info-square:before {
			content: "\f30f"
		}

		.fa-inhaler:before {
			content: "\f5f9"
		}

		.fa-instagram:before {
			content: "\f16d"
		}

		.fa-instagram-square:before {
			content: "\f955"
		}

		.fa-integral:before {
			content: "\f667"
		}

		.fa-intercom:before {
			content: "\f7af"
		}

		.fa-internet-explorer:before {
			content: "\f26b"
		}

		.fa-intersection:before {
			content: "\f668"
		}

		.fa-inventory:before {
			content: "\f480"
		}

		.fa-invision:before {
			content: "\f7b0"
		}

		.fa-ioxhost:before {
			content: "\f208"
		}

		.fa-island-tropical:before {
			content: "\f811"
		}

		.fa-italic:before {
			content: "\f033"
		}

		.fa-itch-io:before {
			content: "\f83a"
		}

		.fa-itunes:before {
			content: "\f3b4"
		}

		.fa-itunes-note:before {
			content: "\f3b5"
		}

		.fa-jack-o-lantern:before {
			content: "\f30e"
		}

		.fa-java:before {
			content: "\f4e4"
		}

		.fa-jedi:before {
			content: "\f669"
		}

		.fa-jedi-order:before {
			content: "\f50e"
		}

		.fa-jenkins:before {
			content: "\f3b6"
		}

		.fa-jira:before {
			content: "\f7b1"
		}

		.fa-joget:before {
			content: "\f3b7"
		}

		.fa-joint:before {
			content: "\f595"
		}

		.fa-joomla:before {
			content: "\f1aa"
		}

		.fa-journal-whills:before {
			content: "\f66a"
		}

		.fa-joystick:before {
			content: "\f8c5"
		}

		.fa-js:before {
			content: "\f3b8"
		}

		.fa-js-square:before {
			content: "\f3b9"
		}

		.fa-jsfiddle:before {
			content: "\f1cc"
		}

		.fa-jug:before {
			content: "\f8c6"
		}

		.fa-kaaba:before {
			content: "\f66b"
		}

		.fa-kaggle:before {
			content: "\f5fa"
		}

		.fa-kazoo:before {
			content: "\f8c7"
		}

		.fa-kerning:before {
			content: "\f86f"
		}

		.fa-key:before {
			content: "\f084"
		}

		.fa-key-skeleton:before {
			content: "\f6f3"
		}

		.fa-keybase:before {
			content: "\f4f5"
		}

		.fa-keyboard:before {
			content: "\f11c"
		}

		.fa-keycdn:before {
			content: "\f3ba"
		}

		.fa-keynote:before {
			content: "\f66c"
		}

		.fa-khanda:before {
			content: "\f66d"
		}

		.fa-kickstarter:before {
			content: "\f3bb"
		}

		.fa-kickstarter-k:before {
			content: "\f3bc"
		}

		.fa-kidneys:before {
			content: "\f5fb"
		}

		.fa-kiss:before {
			content: "\f596"
		}

		.fa-kiss-beam:before {
			content: "\f597"
		}

		.fa-kiss-wink-heart:before {
			content: "\f598"
		}

		.fa-kite:before {
			content: "\f6f4"
		}

		.fa-kiwi-bird:before {
			content: "\f535"
		}

		.fa-knife-kitchen:before {
			content: "\f6f5"
		}

		.fa-korvue:before {
			content: "\f42f"
		}

		.fa-lambda:before {
			content: "\f66e"
		}

		.fa-lamp:before {
			content: "\f4ca"
		}

		.fa-lamp-desk:before {
			content: "\f914"
		}

		.fa-lamp-floor:before {
			content: "\f915"
		}

		.fa-landmark:before {
			content: "\f66f"
		}

		.fa-landmark-alt:before {
			content: "\f752"
		}

		.fa-language:before {
			content: "\f1ab"
		}

		.fa-laptop:before {
			content: "\f109"
		}

		.fa-laptop-code:before {
			content: "\f5fc"
		}

		.fa-laptop-house:before {
			content: "\f966"
		}

		.fa-laptop-medical:before {
			content: "\f812"
		}

		.fa-laravel:before {
			content: "\f3bd"
		}

		.fa-lasso:before {
			content: "\f8c8"
		}

		.fa-lastfm:before {
			content: "\f202"
		}

		.fa-lastfm-square:before {
			content: "\f203"
		}

		.fa-laugh:before {
			content: "\f599"
		}

		.fa-laugh-beam:before {
			content: "\f59a"
		}

		.fa-laugh-squint:before {
			content: "\f59b"
		}

		.fa-laugh-wink:before {
			content: "\f59c"
		}

		.fa-layer-group:before {
			content: "\f5fd"
		}

		.fa-layer-minus:before {
			content: "\f5fe"
		}

		.fa-layer-plus:before {
			content: "\f5ff"
		}

		.fa-leaf:before {
			content: "\f06c"
		}

		.fa-leaf-heart:before {
			content: "\f4cb"
		}

		.fa-leaf-maple:before {
			content: "\f6f6"
		}

		.fa-leaf-oak:before {
			content: "\f6f7"
		}

		.fa-leanpub:before {
			content: "\f212"
		}

		.fa-lemon:before {
			content: "\f094"
		}

		.fa-less:before {
			content: "\f41d"
		}

		.fa-less-than:before {
			content: "\f536"
		}

		.fa-less-than-equal:before {
			content: "\f537"
		}

		.fa-level-down:before {
			content: "\f149"
		}

		.fa-level-down-alt:before {
			content: "\f3be"
		}

		.fa-level-up:before {
			content: "\f148"
		}

		.fa-level-up-alt:before {
			content: "\f3bf"
		}

		.fa-life-ring:before {
			content: "\f1cd"
		}

		.fa-light-ceiling:before {
			content: "\f916"
		}

		.fa-light-switch:before {
			content: "\f917"
		}

		.fa-light-switch-off:before {
			content: "\f918"
		}

		.fa-light-switch-on:before {
			content: "\f919"
		}

		.fa-lightbulb:before {
			content: "\f0eb"
		}

		.fa-lightbulb-dollar:before {
			content: "\f670"
		}

		.fa-lightbulb-exclamation:before {
			content: "\f671"
		}

		.fa-lightbulb-on:before {
			content: "\f672"
		}

		.fa-lightbulb-slash:before {
			content: "\f673"
		}

		.fa-lights-holiday:before {
			content: "\f7b2"
		}

		.fa-line:before {
			content: "\f3c0"
		}

		.fa-line-columns:before {
			content: "\f870"
		}

		.fa-line-height:before {
			content: "\f871"
		}

		.fa-link:before {
			content: "\f0c1"
		}

		.fa-linkedin:before {
			content: "\f08c"
		}

		.fa-linkedin-in:before {
			content: "\f0e1"
		}

		.fa-linode:before {
			content: "\f2b8"
		}

		.fa-linux:before {
			content: "\f17c"
		}

		.fa-lips:before {
			content: "\f600"
		}

		.fa-lira-sign:before {
			content: "\f195"
		}

		.fa-list:before {
			content: "\f03a"
		}

		.fa-list-alt:before {
			content: "\f022"
		}

		.fa-list-music:before {
			content: "\f8c9"
		}

		.fa-list-ol:before {
			content: "\f0cb"
		}

		.fa-list-ul:before {
			content: "\f0ca"
		}

		.fa-location:before {
			content: "\f601"
		}

		.fa-location-arrow:before {
			content: "\f124"
		}

		.fa-location-circle:before {
			content: "\f602"
		}

		.fa-location-slash:before {
			content: "\f603"
		}

		.fa-lock:before {
			content: "\f023"
		}

		.fa-lock-alt:before {
			content: "\f30d"
		}

		.fa-lock-open:before {
			content: "\f3c1"
		}

		.fa-lock-open-alt:before {
			content: "\f3c2"
		}

		.fa-long-arrow-alt-down:before {
			content: "\f309"
		}

		.fa-long-arrow-alt-left:before {
			content: "\f30a"
		}

		.fa-long-arrow-alt-right:before {
			content: "\f30b"
		}

		.fa-long-arrow-alt-up:before {
			content: "\f30c"
		}

		.fa-long-arrow-down:before {
			content: "\f175"
		}

		.fa-long-arrow-left:before {
			content: "\f177"
		}

		.fa-long-arrow-right:before {
			content: "\f178"
		}

		.fa-long-arrow-up:before {
			content: "\f176"
		}

		.fa-loveseat:before {
			content: "\f4cc"
		}

		.fa-low-vision:before {
			content: "\f2a8"
		}

		.fa-luchador:before {
			content: "\f455"
		}

		.fa-luggage-cart:before {
			content: "\f59d"
		}

		.fa-lungs:before {
			content: "\f604"
		}

		.fa-lungs-virus:before {
			content: "\f967"
		}

		.fa-lyft:before {
			content: "\f3c3"
		}

		.fa-mace:before {
			content: "\f6f8"
		}

		.fa-magento:before {
			content: "\f3c4"
		}

		.fa-magic:before {
			content: "\f0d0"
		}

		.fa-magnet:before {
			content: "\f076"
		}

		.fa-mail-bulk:before {
			content: "\f674"
		}

		.fa-mailbox:before {
			content: "\f813"
		}

		.fa-mailchimp:before {
			content: "\f59e"
		}

		.fa-male:before {
			content: "\f183"
		}

		.fa-mandalorian:before {
			content: "\f50f"
		}

		.fa-mandolin:before {
			content: "\f6f9"
		}

		.fa-map:before {
			content: "\f279"
		}

		.fa-map-marked:before {
			content: "\f59f"
		}

		.fa-map-marked-alt:before {
			content: "\f5a0"
		}

		.fa-map-marker:before {
			content: "\f041"
		}

		.fa-map-marker-alt:before {
			content: "\f3c5"
		}

		.fa-map-marker-alt-slash:before {
			content: "\f605"
		}

		.fa-map-marker-check:before {
			content: "\f606"
		}

		.fa-map-marker-edit:before {
			content: "\f607"
		}

		.fa-map-marker-exclamation:before {
			content: "\f608"
		}

		.fa-map-marker-minus:before {
			content: "\f609"
		}

		.fa-map-marker-plus:before {
			content: "\f60a"
		}

		.fa-map-marker-question:before {
			content: "\f60b"
		}

		.fa-map-marker-slash:before {
			content: "\f60c"
		}

		.fa-map-marker-smile:before {
			content: "\f60d"
		}

		.fa-map-marker-times:before {
			content: "\f60e"
		}

		.fa-map-pin:before {
			content: "\f276"
		}

		.fa-map-signs:before {
			content: "\f277"
		}

		.fa-markdown:before {
			content: "\f60f"
		}

		.fa-marker:before {
			content: "\f5a1"
		}

		.fa-mars:before {
			content: "\f222"
		}

		.fa-mars-double:before {
			content: "\f227"
		}

		.fa-mars-stroke:before {
			content: "\f229"
		}

		.fa-mars-stroke-h:before {
			content: "\f22b"
		}

		.fa-mars-stroke-v:before {
			content: "\f22a"
		}

		.fa-mask:before {
			content: "\f6fa"
		}

		.fa-mastodon:before {
			content: "\f4f6"
		}

		.fa-maxcdn:before {
			content: "\f136"
		}

		.fa-mdb:before {
			content: "\f8ca"
		}

		.fa-meat:before {
			content: "\f814"
		}

		.fa-medal:before {
			content: "\f5a2"
		}

		.fa-medapps:before {
			content: "\f3c6"
		}

		.fa-medium:before {
			content: "\f23a"
		}

		.fa-medium-m:before {
			content: "\f3c7"
		}

		.fa-medkit:before {
			content: "\f0fa"
		}

		.fa-medrt:before {
			content: "\f3c8"
		}

		.fa-meetup:before {
			content: "\f2e0"
		}

		.fa-megaphone:before {
			content: "\f675"
		}

		.fa-megaport:before {
			content: "\f5a3"
		}

		.fa-meh:before {
			content: "\f11a"
		}

		.fa-meh-blank:before {
			content: "\f5a4"
		}

		.fa-meh-rolling-eyes:before {
			content: "\f5a5"
		}

		.fa-memory:before {
			content: "\f538"
		}

		.fa-mendeley:before {
			content: "\f7b3"
		}

		.fa-menorah:before {
			content: "\f676"
		}

		.fa-mercury:before {
			content: "\f223"
		}

		.fa-meteor:before {
			content: "\f753"
		}

		.fa-microblog:before {
			content: "\f91a"
		}

		.fa-microchip:before {
			content: "\f2db"
		}

		.fa-microphone:before {
			content: "\f130"
		}

		.fa-microphone-alt:before {
			content: "\f3c9"
		}

		.fa-microphone-alt-slash:before {
			content: "\f539"
		}

		.fa-microphone-slash:before {
			content: "\f131"
		}

		.fa-microphone-stand:before {
			content: "\f8cb"
		}

		.fa-microscope:before {
			content: "\f610"
		}

		.fa-microsoft:before {
			content: "\f3ca"
		}

		.fa-microwave:before {
			content: "\f91b"
		}

		.fa-mind-share:before {
			content: "\f677"
		}

		.fa-minus:before {
			content: "\f068"
		}

		.fa-minus-circle:before {
			content: "\f056"
		}

		.fa-minus-hexagon:before {
			content: "\f307"
		}

		.fa-minus-octagon:before {
			content: "\f308"
		}

		.fa-minus-square:before {
			content: "\f146"
		}

		.fa-mistletoe:before {
			content: "\f7b4"
		}

		.fa-mitten:before {
			content: "\f7b5"
		}

		.fa-mix:before {
			content: "\f3cb"
		}

		.fa-mixcloud:before {
			content: "\f289"
		}

		.fa-mixer:before {
			content: "\f956"
		}

		.fa-mizuni:before {
			content: "\f3cc"
		}

		.fa-mobile:before {
			content: "\f10b"
		}

		.fa-mobile-alt:before {
			content: "\f3cd"
		}

		.fa-mobile-android:before {
			content: "\f3ce"
		}

		.fa-mobile-android-alt:before {
			content: "\f3cf"
		}

		.fa-modx:before {
			content: "\f285"
		}

		.fa-monero:before {
			content: "\f3d0"
		}

		.fa-money-bill:before {
			content: "\f0d6"
		}

		.fa-money-bill-alt:before {
			content: "\f3d1"
		}

		.fa-money-bill-wave:before {
			content: "\f53a"
		}

		.fa-money-bill-wave-alt:before {
			content: "\f53b"
		}

		.fa-money-check:before {
			content: "\f53c"
		}

		.fa-money-check-alt:before {
			content: "\f53d"
		}

		.fa-money-check-edit:before {
			content: "\f872"
		}

		.fa-money-check-edit-alt:before {
			content: "\f873"
		}

		.fa-monitor-heart-rate:before {
			content: "\f611"
		}

		.fa-monkey:before {
			content: "\f6fb"
		}

		.fa-monument:before {
			content: "\f5a6"
		}

		.fa-moon:before {
			content: "\f186"
		}

		.fa-moon-cloud:before {
			content: "\f754"
		}

		.fa-moon-stars:before {
			content: "\f755"
		}

		.fa-mortar-pestle:before {
			content: "\f5a7"
		}

		.fa-mosque:before {
			content: "\f678"
		}

		.fa-motorcycle:before {
			content: "\f21c"
		}

		.fa-mountain:before {
			content: "\f6fc"
		}

		.fa-mountains:before {
			content: "\f6fd"
		}

		.fa-mouse:before {
			content: "\f8cc"
		}

		.fa-mouse-alt:before {
			content: "\f8cd"
		}

		.fa-mouse-pointer:before {
			content: "\f245"
		}

		.fa-mp3-player:before {
			content: "\f8ce"
		}

		.fa-mug:before {
			content: "\f874"
		}

		.fa-mug-hot:before {
			content: "\f7b6"
		}

		.fa-mug-marshmallows:before {
			content: "\f7b7"
		}

		.fa-mug-tea:before {
			content: "\f875"
		}

		.fa-music:before {
			content: "\f001"
		}

		.fa-music-alt:before {
			content: "\f8cf"
		}

		.fa-music-alt-slash:before {
			content: "\f8d0"
		}

		.fa-music-slash:before {
			content: "\f8d1"
		}

		.fa-napster:before {
			content: "\f3d2"
		}

		.fa-narwhal:before {
			content: "\f6fe"
		}

		.fa-neos:before {
			content: "\f612"
		}

		.fa-network-wired:before {
			content: "\f6ff"
		}

		.fa-neuter:before {
			content: "\f22c"
		}

		.fa-newspaper:before {
			content: "\f1ea"
		}

		.fa-nimblr:before {
			content: "\f5a8"
		}

		.fa-node:before {
			content: "\f419"
		}

		.fa-node-js:before {
			content: "\f3d3"
		}

		.fa-not-equal:before {
			content: "\f53e"
		}

		.fa-notes-medical:before {
			content: "\f481"
		}

		.fa-npm:before {
			content: "\f3d4"
		}

		.fa-ns8:before {
			content: "\f3d5"
		}

		.fa-nutritionix:before {
			content: "\f3d6"
		}

		.fa-object-group:before {
			content: "\f247"
		}

		.fa-object-ungroup:before {
			content: "\f248"
		}

		.fa-octagon:before {
			content: "\f306"
		}

		.fa-odnoklassniki:before {
			content: "\f263"
		}

		.fa-odnoklassniki-square:before {
			content: "\f264"
		}

		.fa-oil-can:before {
			content: "\f613"
		}

		.fa-oil-temp:before {
			content: "\f614"
		}

		.fa-old-republic:before {
			content: "\f510"
		}

		.fa-om:before {
			content: "\f679"
		}

		.fa-omega:before {
			content: "\f67a"
		}

		.fa-opencart:before {
			content: "\f23d"
		}

		.fa-openid:before {
			content: "\f19b"
		}

		.fa-opera:before {
			content: "\f26a"
		}

		.fa-optin-monster:before {
			content: "\f23c"
		}

		.fa-orcid:before {
			content: "\f8d2"
		}

		.fa-ornament:before {
			content: "\f7b8"
		}

		.fa-osi:before {
			content: "\f41a"
		}

		.fa-otter:before {
			content: "\f700"
		}

		.fa-outdent:before {
			content: "\f03b"
		}

		.fa-outlet:before {
			content: "\f91c"
		}

		.fa-oven:before {
			content: "\f91d"
		}

		.fa-overline:before {
			content: "\f876"
		}

		.fa-page-break:before {
			content: "\f877"
		}

		.fa-page4:before {
			content: "\f3d7"
		}

		.fa-pagelines:before {
			content: "\f18c"
		}

		.fa-pager:before {
			content: "\f815"
		}

		.fa-paint-brush:before {
			content: "\f1fc"
		}

		.fa-paint-brush-alt:before {
			content: "\f5a9"
		}

		.fa-paint-roller:before {
			content: "\f5aa"
		}

		.fa-palette:before {
			content: "\f53f"
		}

		.fa-palfed:before {
			content: "\f3d8"
		}

		.fa-pallet:before {
			content: "\f482"
		}

		.fa-pallet-alt:before {
			content: "\f483"
		}

		.fa-paper-plane:before {
			content: "\f1d8"
		}

		.fa-paperclip:before {
			content: "\f0c6"
		}

		.fa-parachute-box:before {
			content: "\f4cd"
		}

		.fa-paragraph:before {
			content: "\f1dd"
		}

		.fa-paragraph-rtl:before {
			content: "\f878"
		}

		.fa-parking:before {
			content: "\f540"
		}

		.fa-parking-circle:before {
			content: "\f615"
		}

		.fa-parking-circle-slash:before {
			content: "\f616"
		}

		.fa-parking-slash:before {
			content: "\f617"
		}

		.fa-passport:before {
			content: "\f5ab"
		}

		.fa-pastafarianism:before {
			content: "\f67b"
		}

		.fa-paste:before {
			content: "\f0ea"
		}

		.fa-patreon:before {
			content: "\f3d9"
		}

		.fa-pause:before {
			content: "\f04c"
		}

		.fa-pause-circle:before {
			content: "\f28b"
		}

		.fa-paw:before {
			content: "\f1b0"
		}

		.fa-paw-alt:before {
			content: "\f701"
		}

		.fa-paw-claws:before {
			content: "\f702"
		}

		.fa-paypal:before {
			content: "\f1ed"
		}

		.fa-peace:before {
			content: "\f67c"
		}

		.fa-pegasus:before {
			content: "\f703"
		}

		.fa-pen:before {
			content: "\f304"
		}

		.fa-pen-alt:before {
			content: "\f305"
		}

		.fa-pen-fancy:before {
			content: "\f5ac"
		}

		.fa-pen-nib:before {
			content: "\f5ad"
		}

		.fa-pen-square:before {
			content: "\f14b"
		}

		.fa-pencil:before {
			content: "\f040"
		}

		.fa-pencil-alt:before {
			content: "\f303"
		}

		.fa-pencil-paintbrush:before {
			content: "\f618"
		}

		.fa-pencil-ruler:before {
			content: "\f5ae"
		}

		.fa-pennant:before {
			content: "\f456"
		}

		.fa-penny-arcade:before {
			content: "\f704"
		}

		.fa-people-arrows:before {
			content: "\f968"
		}

		.fa-people-carry:before {
			content: "\f4ce"
		}

		.fa-pepper-hot:before {
			content: "\f816"
		}

		.fa-percent:before {
			content: "\f295"
		}

		.fa-percentage:before {
			content: "\f541"
		}

		.fa-periscope:before {
			content: "\f3da"
		}

		.fa-person-booth:before {
			content: "\f756"
		}

		.fa-person-carry:before {
			content: "\f4cf"
		}

		.fa-person-dolly:before {
			content: "\f4d0"
		}

		.fa-person-dolly-empty:before {
			content: "\f4d1"
		}

		.fa-person-sign:before {
			content: "\f757"
		}

		.fa-phabricator:before {
			content: "\f3db"
		}

		.fa-phoenix-framework:before {
			content: "\f3dc"
		}

		.fa-phoenix-squadron:before {
			content: "\f511"
		}

		.fa-phone:before {
			content: "\f095"
		}

		.fa-phone-alt:before {
			content: "\f879"
		}

		.fa-phone-laptop:before {
			content: "\f87a"
		}

		.fa-phone-office:before {
			content: "\f67d"
		}

		.fa-phone-plus:before {
			content: "\f4d2"
		}

		.fa-phone-rotary:before {
			content: "\f8d3"
		}

		.fa-phone-slash:before {
			content: "\f3dd"
		}

		.fa-phone-square:before {
			content: "\f098"
		}

		.fa-phone-square-alt:before {
			content: "\f87b"
		}

		.fa-phone-volume:before {
			content: "\f2a0"
		}

		.fa-photo-video:before {
			content: "\f87c"
		}

		.fa-php:before {
			content: "\f457"
		}

		.fa-pi:before {
			content: "\f67e"
		}

		.fa-piano:before {
			content: "\f8d4"
		}

		.fa-piano-keyboard:before {
			content: "\f8d5"
		}

		.fa-pie:before {
			content: "\f705"
		}

		.fa-pied-piper:before {
			content: "\f2ae"
		}

		.fa-pied-piper-alt:before {
			content: "\f1a8"
		}

		.fa-pied-piper-hat:before {
			content: "\f4e5"
		}

		.fa-pied-piper-pp:before {
			content: "\f1a7"
		}

		.fa-pied-piper-square:before {
			content: "\f91e"
		}

		.fa-pig:before {
			content: "\f706"
		}

		.fa-piggy-bank:before {
			content: "\f4d3"
		}

		.fa-pills:before {
			content: "\f484"
		}

		.fa-pinterest:before {
			content: "\f0d2"
		}

		.fa-pinterest-p:before {
			content: "\f231"
		}

		.fa-pinterest-square:before {
			content: "\f0d3"
		}

		.fa-pizza:before {
			content: "\f817"
		}

		.fa-pizza-slice:before {
			content: "\f818"
		}

		.fa-place-of-worship:before {
			content: "\f67f"
		}

		.fa-plane:before {
			content: "\f072"
		}

		.fa-plane-alt:before {
			content: "\f3de"
		}

		.fa-plane-arrival:before {
			content: "\f5af"
		}

		.fa-plane-departure:before {
			content: "\f5b0"
		}

		.fa-plane-slash:before {
			content: "\f969"
		}

		.fa-planet-moon:before {
			content: "\f91f"
		}

		.fa-planet-ringed:before {
			content: "\f920"
		}

		.fa-play:before {
			content: "\f04b"
		}

		.fa-play-circle:before {
			content: "\f144"
		}

		.fa-playstation:before {
			content: "\f3df"
		}

		.fa-plug:before {
			content: "\f1e6"
		}

		.fa-plus:before {
			content: "\f067"
		}

		.fa-plus-circle:before {
			content: "\f055"
		}

		.fa-plus-hexagon:before {
			content: "\f300"
		}

		.fa-plus-octagon:before {
			content: "\f301"
		}

		.fa-plus-square:before {
			content: "\f0fe"
		}

		.fa-podcast:before {
			content: "\f2ce"
		}

		.fa-podium:before {
			content: "\f680"
		}

		.fa-podium-star:before {
			content: "\f758"
		}

		.fa-police-box:before {
			content: "\f921"
		}

		.fa-poll:before {
			content: "\f681"
		}

		.fa-poll-h:before {
			content: "\f682"
		}

		.fa-poll-people:before {
			content: "\f759"
		}

		.fa-poo:before {
			content: "\f2fe"
		}

		.fa-poo-storm:before {
			content: "\f75a"
		}

		.fa-poop:before {
			content: "\f619"
		}

		.fa-popcorn:before {
			content: "\f819"
		}

		.fa-portal-enter:before {
			content: "\f922"
		}

		.fa-portal-exit:before {
			content: "\f923"
		}

		.fa-portrait:before {
			content: "\f3e0"
		}

		.fa-pound-sign:before {
			content: "\f154"
		}

		.fa-power-off:before {
			content: "\f011"
		}

		.fa-pray:before {
			content: "\f683"
		}

		.fa-praying-hands:before {
			content: "\f684"
		}

		.fa-prescription:before {
			content: "\f5b1"
		}

		.fa-prescription-bottle:before {
			content: "\f485"
		}

		.fa-prescription-bottle-alt:before {
			content: "\f486"
		}

		.fa-presentation:before {
			content: "\f685"
		}

		.fa-print:before {
			content: "\f02f"
		}

		.fa-print-search:before {
			content: "\f81a"
		}

		.fa-print-slash:before {
			content: "\f686"
		}

		.fa-procedures:before {
			content: "\f487"
		}

		.fa-product-hunt:before {
			content: "\f288"
		}

		.fa-project-diagram:before {
			content: "\f542"
		}

		.fa-projector:before {
			content: "\f8d6"
		}

		.fa-pump-medical:before {
			content: "\f96a"
		}

		.fa-pump-soap:before {
			content: "\f96b"
		}

		.fa-pumpkin:before {
			content: "\f707"
		}

		.fa-pushed:before {
			content: "\f3e1"
		}

		.fa-puzzle-piece:before {
			content: "\f12e"
		}

		.fa-python:before {
			content: "\f3e2"
		}

		.fa-qq:before {
			content: "\f1d6"
		}

		.fa-qrcode:before {
			content: "\f029"
		}

		.fa-question:before {
			content: "\f128"
		}

		.fa-question-circle:before {
			content: "\f059"
		}

		.fa-question-square:before {
			content: "\f2fd"
		}

		.fa-quidditch:before {
			content: "\f458"
		}

		.fa-quinscape:before {
			content: "\f459"
		}

		.fa-quora:before {
			content: "\f2c4"
		}

		.fa-quote-left:before {
			content: "\f10d"
		}

		.fa-quote-right:before {
			content: "\f10e"
		}

		.fa-quran:before {
			content: "\f687"
		}

		.fa-r-project:before {
			content: "\f4f7"
		}

		.fa-rabbit:before {
			content: "\f708"
		}

		.fa-rabbit-fast:before {
			content: "\f709"
		}

		.fa-racquet:before {
			content: "\f45a"
		}

		.fa-radar:before {
			content: "\f924"
		}

		.fa-radiation:before {
			content: "\f7b9"
		}

		.fa-radiation-alt:before {
			content: "\f7ba"
		}

		.fa-radio:before {
			content: "\f8d7"
		}

		.fa-radio-alt:before {
			content: "\f8d8"
		}

		.fa-rainbow:before {
			content: "\f75b"
		}

		.fa-raindrops:before {
			content: "\f75c"
		}

		.fa-ram:before {
			content: "\f70a"
		}

		.fa-ramp-loading:before {
			content: "\f4d4"
		}

		.fa-random:before {
			content: "\f074"
		}

		.fa-raspberry-pi:before {
			content: "\f7bb"
		}

		.fa-ravelry:before {
			content: "\f2d9"
		}

		.fa-raygun:before {
			content: "\f925"
		}

		.fa-react:before {
			content: "\f41b"
		}

		.fa-reacteurope:before {
			content: "\f75d"
		}

		.fa-readme:before {
			content: "\f4d5"
		}

		.fa-rebel:before {
			content: "\f1d0"
		}

		.fa-receipt:before {
			content: "\f543"
		}

		.fa-record-vinyl:before {
			content: "\f8d9"
		}

		.fa-rectangle-landscape:before {
			content: "\f2fa"
		}

		.fa-rectangle-portrait:before {
			content: "\f2fb"
		}

		.fa-rectangle-wide:before {
			content: "\f2fc"
		}

		.fa-recycle:before {
			content: "\f1b8"
		}

		.fa-red-river:before {
			content: "\f3e3"
		}

		.fa-reddit:before {
			content: "\f1a1"
		}

		.fa-reddit-alien:before {
			content: "\f281"
		}

		.fa-reddit-square:before {
			content: "\f1a2"
		}

		.fa-redhat:before {
			content: "\f7bc"
		}

		.fa-redo:before {
			content: "\f01e"
		}

		.fa-redo-alt:before {
			content: "\f2f9"
		}

		.fa-refrigerator:before {
			content: "\f926"
		}

		.fa-registered:before {
			content: "\f25d"
		}

		.fa-remove-format:before {
			content: "\f87d"
		}

		.fa-renren:before {
			content: "\f18b"
		}

		.fa-repeat:before {
			content: "\f363"
		}

		.fa-repeat-1:before {
			content: "\f365"
		}

		.fa-repeat-1-alt:before {
			content: "\f366"
		}

		.fa-repeat-alt:before {
			content: "\f364"
		}

		.fa-reply:before {
			content: "\f3e5"
		}

		.fa-reply-all:before {
			content: "\f122"
		}

		.fa-replyd:before {
			content: "\f3e6"
		}

		.fa-republican:before {
			content: "\f75e"
		}

		.fa-researchgate:before {
			content: "\f4f8"
		}

		.fa-resolving:before {
			content: "\f3e7"
		}

		.fa-restroom:before {
			content: "\f7bd"
		}

		.fa-retweet:before {
			content: "\f079"
		}

		.fa-retweet-alt:before {
			content: "\f361"
		}

		.fa-rev:before {
			content: "\f5b2"
		}

		.fa-ribbon:before {
			content: "\f4d6"
		}

		.fa-ring:before {
			content: "\f70b"
		}

		.fa-rings-wedding:before {
			content: "\f81b"
		}

		.fa-road:before {
			content: "\f018"
		}

		.fa-robot:before {
			content: "\f544"
		}

		.fa-rocket:before {
			content: "\f135"
		}

		.fa-rocket-launch:before {
			content: "\f927"
		}

		.fa-rocketchat:before {
			content: "\f3e8"
		}

		.fa-rockrms:before {
			content: "\f3e9"
		}

		.fa-route:before {
			content: "\f4d7"
		}

		.fa-route-highway:before {
			content: "\f61a"
		}

		.fa-route-interstate:before {
			content: "\f61b"
		}

		.fa-router:before {
			content: "\f8da"
		}

		.fa-rss:before {
			content: "\f09e"
		}

		.fa-rss-square:before {
			content: "\f143"
		}

		.fa-ruble-sign:before {
			content: "\f158"
		}

		.fa-ruler:before {
			content: "\f545"
		}

		.fa-ruler-combined:before {
			content: "\f546"
		}

		.fa-ruler-horizontal:before {
			content: "\f547"
		}

		.fa-ruler-triangle:before {
			content: "\f61c"
		}

		.fa-ruler-vertical:before {
			content: "\f548"
		}

		.fa-running:before {
			content: "\f70c"
		}

		.fa-rupee-sign:before {
			content: "\f156"
		}

		.fa-rv:before {
			content: "\f7be"
		}

		.fa-sack:before {
			content: "\f81c"
		}

		.fa-sack-dollar:before {
			content: "\f81d"
		}

		.fa-sad-cry:before {
			content: "\f5b3"
		}

		.fa-sad-tear:before {
			content: "\f5b4"
		}

		.fa-safari:before {
			content: "\f267"
		}

		.fa-salad:before {
			content: "\f81e"
		}

		.fa-salesforce:before {
			content: "\f83b"
		}

		.fa-sandwich:before {
			content: "\f81f"
		}

		.fa-sass:before {
			content: "\f41e"
		}

		.fa-satellite:before {
			content: "\f7bf"
		}

		.fa-satellite-dish:before {
			content: "\f7c0"
		}

		.fa-sausage:before {
			content: "\f820"
		}

		.fa-save:before {
			content: "\f0c7"
		}

		.fa-sax-hot:before {
			content: "\f8db"
		}

		.fa-saxophone:before {
			content: "\f8dc"
		}

		.fa-scalpel:before {
			content: "\f61d"
		}

		.fa-scalpel-path:before {
			content: "\f61e"
		}

		.fa-scanner:before {
			content: "\f488"
		}

		.fa-scanner-image:before {
			content: "\f8f3"
		}

		.fa-scanner-keyboard:before {
			content: "\f489"
		}

		.fa-scanner-touchscreen:before {
			content: "\f48a"
		}

		.fa-scarecrow:before {
			content: "\f70d"
		}

		.fa-scarf:before {
			content: "\f7c1"
		}

		.fa-schlix:before {
			content: "\f3ea"
		}

		.fa-school:before {
			content: "\f549"
		}

		.fa-screwdriver:before {
			content: "\f54a"
		}

		.fa-scribd:before {
			content: "\f28a"
		}

		.fa-scroll:before {
			content: "\f70e"
		}

		.fa-scroll-old:before {
			content: "\f70f"
		}

		.fa-scrubber:before {
			content: "\f2f8"
		}

		.fa-scythe:before {
			content: "\f710"
		}

		.fa-sd-card:before {
			content: "\f7c2"
		}

		.fa-search:before {
			content: "\f002"
		}

		.fa-search-dollar:before {
			content: "\f688"
		}

		.fa-search-location:before {
			content: "\f689"
		}

		.fa-search-minus:before {
			content: "\f010"
		}

		.fa-search-plus:before {
			content: "\f00e"
		}

		.fa-searchengin:before {
			content: "\f3eb"
		}

		.fa-seedling:before {
			content: "\f4d8"
		}

		.fa-sellcast:before {
			content: "\f2da"
		}

		.fa-sellsy:before {
			content: "\f213"
		}

		.fa-send-back:before {
			content: "\f87e"
		}

		.fa-send-backward:before {
			content: "\f87f"
		}

		.fa-sensor:before {
			content: "\f928"
		}

		.fa-sensor-alert:before {
			content: "\f929"
		}

		.fa-sensor-fire:before {
			content: "\f92a"
		}

		.fa-sensor-on:before {
			content: "\f92b"
		}

		.fa-sensor-smoke:before {
			content: "\f92c"
		}

		.fa-server:before {
			content: "\f233"
		}

		.fa-servicestack:before {
			content: "\f3ec"
		}

		.fa-shapes:before {
			content: "\f61f"
		}

		.fa-share:before {
			content: "\f064"
		}

		.fa-share-all:before {
			content: "\f367"
		}

		.fa-share-alt:before {
			content: "\f1e0"
		}

		.fa-share-alt-square:before {
			content: "\f1e1"
		}

		.fa-share-square:before {
			content: "\f14d"
		}

		.fa-sheep:before {
			content: "\f711"
		}

		.fa-shekel-sign:before {
			content: "\f20b"
		}

		.fa-shield:before {
			content: "\f132"
		}

		.fa-shield-alt:before {
			content: "\f3ed"
		}

		.fa-shield-check:before {
			content: "\f2f7"
		}

		.fa-shield-cross:before {
			content: "\f712"
		}

		.fa-shield-virus:before {
			content: "\f96c"
		}

		.fa-ship:before {
			content: "\f21a"
		}

		.fa-shipping-fast:before {
			content: "\f48b"
		}

		.fa-shipping-timed:before {
			content: "\f48c"
		}

		.fa-shirtsinbulk:before {
			content: "\f214"
		}

		.fa-shish-kebab:before {
			content: "\f821"
		}

		.fa-shoe-prints:before {
			content: "\f54b"
		}

		.fa-shopify:before {
			content: "\f957"
		}

		.fa-shopping-bag:before {
			content: "\f290"
		}

		.fa-shopping-basket:before {
			content: "\f291"
		}

		.fa-shopping-cart:before {
			content: "\f07a"
		}

		.fa-shopware:before {
			content: "\f5b5"
		}

		.fa-shovel:before {
			content: "\f713"
		}

		.fa-shovel-snow:before {
			content: "\f7c3"
		}

		.fa-shower:before {
			content: "\f2cc"
		}

		.fa-shredder:before {
			content: "\f68a"
		}

		.fa-shuttle-van:before {
			content: "\f5b6"
		}

		.fa-shuttlecock:before {
			content: "\f45b"
		}

		.fa-sickle:before {
			content: "\f822"
		}

		.fa-sigma:before {
			content: "\f68b"
		}

		.fa-sign:before {
			content: "\f4d9"
		}

		.fa-sign-in:before {
			content: "\f090"
		}

		.fa-sign-in-alt:before {
			content: "\f2f6"
		}

		.fa-sign-language:before {
			content: "\f2a7"
		}

		.fa-sign-out:before {
			content: "\f08b"
		}

		.fa-sign-out-alt:before {
			content: "\f2f5"
		}

		.fa-signal:before {
			content: "\f012"
		}

		.fa-signal-1:before {
			content: "\f68c"
		}

		.fa-signal-2:before {
			content: "\f68d"
		}

		.fa-signal-3:before {
			content: "\f68e"
		}

		.fa-signal-4:before {
			content: "\f68f"
		}

		.fa-signal-alt:before {
			content: "\f690"
		}

		.fa-signal-alt-1:before {
			content: "\f691"
		}

		.fa-signal-alt-2:before {
			content: "\f692"
		}

		.fa-signal-alt-3:before {
			content: "\f693"
		}

		.fa-signal-alt-slash:before {
			content: "\f694"
		}

		.fa-signal-slash:before {
			content: "\f695"
		}

		.fa-signal-stream:before {
			content: "\f8dd"
		}

		.fa-signature:before {
			content: "\f5b7"
		}

		.fa-sim-card:before {
			content: "\f7c4"
		}

		.fa-simplybuilt:before {
			content: "\f215"
		}

		.fa-sink:before {
			content: "\f96d"
		}

		.fa-siren:before {
			content: "\f92d"
		}

		.fa-siren-on:before {
			content: "\f92e"
		}

		.fa-sistrix:before {
			content: "\f3ee"
		}

		.fa-sitemap:before {
			content: "\f0e8"
		}

		.fa-sith:before {
			content: "\f512"
		}

		.fa-skating:before {
			content: "\f7c5"
		}

		.fa-skeleton:before {
			content: "\f620"
		}

		.fa-sketch:before {
			content: "\f7c6"
		}

		.fa-ski-jump:before {
			content: "\f7c7"
		}

		.fa-ski-lift:before {
			content: "\f7c8"
		}

		.fa-skiing:before {
			content: "\f7c9"
		}

		.fa-skiing-nordic:before {
			content: "\f7ca"
		}

		.fa-skull:before {
			content: "\f54c"
		}

		.fa-skull-cow:before {
			content: "\f8de"
		}

		.fa-skull-crossbones:before {
			content: "\f714"
		}

		.fa-skyatlas:before {
			content: "\f216"
		}

		.fa-skype:before {
			content: "\f17e"
		}

		.fa-slack:before {
			content: "\f198"
		}

		.fa-slack-hash:before {
			content: "\f3ef"
		}

		.fa-slash:before {
			content: "\f715"
		}

		.fa-sledding:before {
			content: "\f7cb"
		}

		.fa-sleigh:before {
			content: "\f7cc"
		}

		.fa-sliders-h:before {
			content: "\f1de"
		}

		.fa-sliders-h-square:before {
			content: "\f3f0"
		}

		.fa-sliders-v:before {
			content: "\f3f1"
		}

		.fa-sliders-v-square:before {
			content: "\f3f2"
		}

		.fa-slideshare:before {
			content: "\f1e7"
		}

		.fa-smile:before {
			content: "\f118"
		}

		.fa-smile-beam:before {
			content: "\f5b8"
		}

		.fa-smile-plus:before {
			content: "\f5b9"
		}

		.fa-smile-wink:before {
			content: "\f4da"
		}

		.fa-smog:before {
			content: "\f75f"
		}

		.fa-smoke:before {
			content: "\f760"
		}

		.fa-smoking:before {
			content: "\f48d"
		}

		.fa-smoking-ban:before {
			content: "\f54d"
		}

		.fa-sms:before {
			content: "\f7cd"
		}

		.fa-snake:before {
			content: "\f716"
		}

		.fa-snapchat:before {
			content: "\f2ab"
		}

		.fa-snapchat-ghost:before {
			content: "\f2ac"
		}

		.fa-snapchat-square:before {
			content: "\f2ad"
		}

		.fa-snooze:before {
			content: "\f880"
		}

		.fa-snow-blowing:before {
			content: "\f761"
		}

		.fa-snowboarding:before {
			content: "\f7ce"
		}

		.fa-snowflake:before {
			content: "\f2dc"
		}

		.fa-snowflakes:before {
			content: "\f7cf"
		}

		.fa-snowman:before {
			content: "\f7d0"
		}

		.fa-snowmobile:before {
			content: "\f7d1"
		}

		.fa-snowplow:before {
			content: "\f7d2"
		}

		.fa-soap:before {
			content: "\f96e"
		}

		.fa-socks:before {
			content: "\f696"
		}

		.fa-solar-panel:before {
			content: "\f5ba"
		}

		.fa-solar-system:before {
			content: "\f92f"
		}

		.fa-sort:before {
			content: "\f0dc"
		}

		.fa-sort-alpha-down:before {
			content: "\f15d"
		}

		.fa-sort-alpha-down-alt:before {
			content: "\f881"
		}

		.fa-sort-alpha-up:before {
			content: "\f15e"
		}

		.fa-sort-alpha-up-alt:before {
			content: "\f882"
		}

		.fa-sort-alt:before {
			content: "\f883"
		}

		.fa-sort-amount-down:before {
			content: "\f160"
		}

		.fa-sort-amount-down-alt:before {
			content: "\f884"
		}

		.fa-sort-amount-up:before {
			content: "\f161"
		}

		.fa-sort-amount-up-alt:before {
			content: "\f885"
		}

		.fa-sort-circle:before {
			content: "\f930"
		}

		.fa-sort-circle-down:before {
			content: "\f931"
		}

		.fa-sort-circle-up:before {
			content: "\f932"
		}

		.fa-sort-down:before {
			content: "\f0dd"
		}

		.fa-sort-numeric-down:before {
			content: "\f162"
		}

		.fa-sort-numeric-down-alt:before {
			content: "\f886"
		}

		.fa-sort-numeric-up:before {
			content: "\f163"
		}

		.fa-sort-numeric-up-alt:before {
			content: "\f887"
		}

		.fa-sort-shapes-down:before {
			content: "\f888"
		}

		.fa-sort-shapes-down-alt:before {
			content: "\f889"
		}

		.fa-sort-shapes-up:before {
			content: "\f88a"
		}

		.fa-sort-shapes-up-alt:before {
			content: "\f88b"
		}

		.fa-sort-size-down:before {
			content: "\f88c"
		}

		.fa-sort-size-down-alt:before {
			content: "\f88d"
		}

		.fa-sort-size-up:before {
			content: "\f88e"
		}

		.fa-sort-size-up-alt:before {
			content: "\f88f"
		}

		.fa-sort-up:before {
			content: "\f0de"
		}

		.fa-soundcloud:before {
			content: "\f1be"
		}

		.fa-soup:before {
			content: "\f823"
		}

		.fa-sourcetree:before {
			content: "\f7d3"
		}

		.fa-spa:before {
			content: "\f5bb"
		}

		.fa-space-shuttle:before {
			content: "\f197"
		}

		.fa-space-station-moon:before {
			content: "\f933"
		}

		.fa-space-station-moon-alt:before {
			content: "\f934"
		}

		.fa-spade:before {
			content: "\f2f4"
		}

		.fa-sparkles:before {
			content: "\f890"
		}

		.fa-speakap:before {
			content: "\f3f3"
		}

		.fa-speaker:before {
			content: "\f8df"
		}

		.fa-speaker-deck:before {
			content: "\f83c"
		}

		.fa-speakers:before {
			content: "\f8e0"
		}

		.fa-spell-check:before {
			content: "\f891"
		}

		.fa-spider:before {
			content: "\f717"
		}

		.fa-spider-black-widow:before {
			content: "\f718"
		}

		.fa-spider-web:before {
			content: "\f719"
		}

		.fa-spinner:before {
			content: "\f110"
		}

		.fa-spinner-third:before {
			content: "\f3f4"
		}

		.fa-splotch:before {
			content: "\f5bc"
		}

		.fa-spotify:before {
			content: "\f1bc"
		}

		.fa-spray-can:before {
			content: "\f5bd"
		}

		.fa-sprinkler:before {
			content: "\f935"
		}

		.fa-square:before {
			content: "\f0c8"
		}

		.fa-square-full:before {
			content: "\f45c"
		}

		.fa-square-root:before {
			content: "\f697"
		}

		.fa-square-root-alt:before {
			content: "\f698"
		}

		.fa-squarespace:before {
			content: "\f5be"
		}

		.fa-squirrel:before {
			content: "\f71a"
		}

		.fa-stack-exchange:before {
			content: "\f18d"
		}

		.fa-stack-overflow:before {
			content: "\f16c"
		}

		.fa-stackpath:before {
			content: "\f842"
		}

		.fa-staff:before {
			content: "\f71b"
		}

		.fa-stamp:before {
			content: "\f5bf"
		}

		.fa-star:before {
			content: "\f005"
		}

		.fa-star-and-crescent:before {
			content: "\f699"
		}

		.fa-star-christmas:before {
			content: "\f7d4"
		}

		.fa-star-exclamation:before {
			content: "\f2f3"
		}

		.fa-star-half:before {
			content: "\f089"
		}

		.fa-star-half-alt:before {
			content: "\f5c0"
		}

		.fa-star-of-david:before {
			content: "\f69a"
		}

		.fa-star-of-life:before {
			content: "\f621"
		}

		.fa-star-shooting:before {
			content: "\f936"
		}

		.fa-starfighter:before {
			content: "\f937"
		}

		.fa-starfighter-alt:before {
			content: "\f938"
		}

		.fa-stars:before {
			content: "\f762"
		}

		.fa-starship:before {
			content: "\f939"
		}

		.fa-starship-freighter:before {
			content: "\f93a"
		}

		.fa-staylinked:before {
			content: "\f3f5"
		}

		.fa-steak:before {
			content: "\f824"
		}

		.fa-steam:before {
			content: "\f1b6"
		}

		.fa-steam-square:before {
			content: "\f1b7"
		}

		.fa-steam-symbol:before {
			content: "\f3f6"
		}

		.fa-steering-wheel:before {
			content: "\f622"
		}

		.fa-step-backward:before {
			content: "\f048"
		}

		.fa-step-forward:before {
			content: "\f051"
		}

		.fa-stethoscope:before {
			content: "\f0f1"
		}

		.fa-sticker-mule:before {
			content: "\f3f7"
		}

		.fa-sticky-note:before {
			content: "\f249"
		}

		.fa-stocking:before {
			content: "\f7d5"
		}

		.fa-stomach:before {
			content: "\f623"
		}

		.fa-stop:before {
			content: "\f04d"
		}

		.fa-stop-circle:before {
			content: "\f28d"
		}

		.fa-stopwatch:before {
			content: "\f2f2"
		}

		.fa-stopwatch-20:before {
			content: "\f96f"
		}

		.fa-store:before {
			content: "\f54e"
		}

		.fa-store-alt:before {
			content: "\f54f"
		}

		.fa-store-alt-slash:before {
			content: "\f970"
		}

		.fa-store-slash:before {
			content: "\f971"
		}

		.fa-strava:before {
			content: "\f428"
		}

		.fa-stream:before {
			content: "\f550"
		}

		.fa-street-view:before {
			content: "\f21d"
		}

		.fa-stretcher:before {
			content: "\f825"
		}

		.fa-strikethrough:before {
			content: "\f0cc"
		}

		.fa-stripe:before {
			content: "\f429"
		}

		.fa-stripe-s:before {
			content: "\f42a"
		}

		.fa-stroopwafel:before {
			content: "\f551"
		}

		.fa-studiovinari:before {
			content: "\f3f8"
		}

		.fa-stumbleupon:before {
			content: "\f1a4"
		}

		.fa-stumbleupon-circle:before {
			content: "\f1a3"
		}

		.fa-subscript:before {
			content: "\f12c"
		}

		.fa-subway:before {
			content: "\f239"
		}

		.fa-suitcase:before {
			content: "\f0f2"
		}

		.fa-suitcase-rolling:before {
			content: "\f5c1"
		}

		.fa-sun:before {
			content: "\f185"
		}

		.fa-sun-cloud:before {
			content: "\f763"
		}

		.fa-sun-dust:before {
			content: "\f764"
		}

		.fa-sun-haze:before {
			content: "\f765"
		}

		.fa-sunglasses:before {
			content: "\f892"
		}

		.fa-sunrise:before {
			content: "\f766"
		}

		.fa-sunset:before {
			content: "\f767"
		}

		.fa-superpowers:before {
			content: "\f2dd"
		}

		.fa-superscript:before {
			content: "\f12b"
		}

		.fa-supple:before {
			content: "\f3f9"
		}

		.fa-surprise:before {
			content: "\f5c2"
		}

		.fa-suse:before {
			content: "\f7d6"
		}

		.fa-swatchbook:before {
			content: "\f5c3"
		}

		.fa-swift:before {
			content: "\f8e1"
		}

		.fa-swimmer:before {
			content: "\f5c4"
		}

		.fa-swimming-pool:before {
			content: "\f5c5"
		}

		.fa-sword:before {
			content: "\f71c"
		}

		.fa-sword-laser:before {
			content: "\f93b"
		}

		.fa-sword-laser-alt:before {
			content: "\f93c"
		}

		.fa-swords:before {
			content: "\f71d"
		}

		.fa-swords-laser:before {
			content: "\f93d"
		}

		.fa-symfony:before {
			content: "\f83d"
		}

		.fa-synagogue:before {
			content: "\f69b"
		}

		.fa-sync:before {
			content: "\f021"
		}

		.fa-sync-alt:before {
			content: "\f2f1"
		}

		.fa-syringe:before {
			content: "\f48e"
		}

		.fa-table:before {
			content: "\f0ce"
		}

		.fa-table-tennis:before {
			content: "\f45d"
		}

		.fa-tablet:before {
			content: "\f10a"
		}

		.fa-tablet-alt:before {
			content: "\f3fa"
		}

		.fa-tablet-android:before {
			content: "\f3fb"
		}

		.fa-tablet-android-alt:before {
			content: "\f3fc"
		}

		.fa-tablet-rugged:before {
			content: "\f48f"
		}

		.fa-tablets:before {
			content: "\f490"
		}

		.fa-tachometer:before {
			content: "\f0e4"
		}

		.fa-tachometer-alt:before {
			content: "\f3fd"
		}

		.fa-tachometer-alt-average:before {
			content: "\f624"
		}

		.fa-tachometer-alt-fast:before {
			content: "\f625"
		}

		.fa-tachometer-alt-fastest:before {
			content: "\f626"
		}

		.fa-tachometer-alt-slow:before {
			content: "\f627"
		}

		.fa-tachometer-alt-slowest:before {
			content: "\f628"
		}

		.fa-tachometer-average:before {
			content: "\f629"
		}

		.fa-tachometer-fast:before {
			content: "\f62a"
		}

		.fa-tachometer-fastest:before {
			content: "\f62b"
		}

		.fa-tachometer-slow:before {
			content: "\f62c"
		}

		.fa-tachometer-slowest:before {
			content: "\f62d"
		}

		.fa-taco:before {
			content: "\f826"
		}

		.fa-tag:before {
			content: "\f02b"
		}

		.fa-tags:before {
			content: "\f02c"
		}

		.fa-tally:before {
			content: "\f69c"
		}

		.fa-tanakh:before {
			content: "\f827"
		}

		.fa-tape:before {
			content: "\f4db"
		}

		.fa-tasks:before {
			content: "\f0ae"
		}

		.fa-tasks-alt:before {
			content: "\f828"
		}

		.fa-taxi:before {
			content: "\f1ba"
		}

		.fa-teamspeak:before {
			content: "\f4f9"
		}

		.fa-teeth:before {
			content: "\f62e"
		}

		.fa-teeth-open:before {
			content: "\f62f"
		}

		.fa-telegram:before {
			content: "\f2c6"
		}

		.fa-telegram-plane:before {
			content: "\f3fe"
		}

		.fa-telescope:before {
			content: "\f93e"
		}

		.fa-temperature-down:before {
			content: "\f93f"
		}

		.fa-temperature-frigid:before {
			content: "\f768"
		}

		.fa-temperature-high:before {
			content: "\f769"
		}

		.fa-temperature-hot:before {
			content: "\f76a"
		}

		.fa-temperature-low:before {
			content: "\f76b"
		}

		.fa-temperature-up:before {
			content: "\f940"
		}

		.fa-tencent-weibo:before {
			content: "\f1d5"
		}

		.fa-tenge:before {
			content: "\f7d7"
		}

		.fa-tennis-ball:before {
			content: "\f45e"
		}

		.fa-terminal:before {
			content: "\f120"
		}

		.fa-text:before {
			content: "\f893"
		}

		.fa-text-height:before {
			content: "\f034"
		}

		.fa-text-size:before {
			content: "\f894"
		}

		.fa-text-width:before {
			content: "\f035"
		}

		.fa-th:before {
			content: "\f00a"
		}

		.fa-th-large:before {
			content: "\f009"
		}

		.fa-th-list:before {
			content: "\f00b"
		}

		.fa-the-red-yeti:before {
			content: "\f69d"
		}

		.fa-theater-masks:before {
			content: "\f630"
		}

		.fa-themeco:before {
			content: "\f5c6"
		}

		.fa-themeisle:before {
			content: "\f2b2"
		}

		.fa-thermometer:before {
			content: "\f491"
		}

		.fa-thermometer-empty:before {
			content: "\f2cb"
		}

		.fa-thermometer-full:before {
			content: "\f2c7"
		}

		.fa-thermometer-half:before {
			content: "\f2c9"
		}

		.fa-thermometer-quarter:before {
			content: "\f2ca"
		}

		.fa-thermometer-three-quarters:before {
			content: "\f2c8"
		}

		.fa-theta:before {
			content: "\f69e"
		}

		.fa-think-peaks:before {
			content: "\f731"
		}

		.fa-thumbs-down:before {
			content: "\f165"
		}

		.fa-thumbs-up:before {
			content: "\f164"
		}

		.fa-thumbtack:before {
			content: "\f08d"
		}

		.fa-thunderstorm:before {
			content: "\f76c"
		}

		.fa-thunderstorm-moon:before {
			content: "\f76d"
		}

		.fa-thunderstorm-sun:before {
			content: "\f76e"
		}

		.fa-ticket:before {
			content: "\f145"
		}

		.fa-ticket-alt:before {
			content: "\f3ff"
		}

		.fa-tilde:before {
			content: "\f69f"
		}

		.fa-times:before {
			content: "\f00d"
		}

		.fa-times-circle:before {
			content: "\f057"
		}

		.fa-times-hexagon:before {
			content: "\f2ee"
		}

		.fa-times-octagon:before {
			content: "\f2f0"
		}

		.fa-times-square:before {
			content: "\f2d3"
		}

		.fa-tint:before {
			content: "\f043"
		}

		.fa-tint-slash:before {
			content: "\f5c7"
		}

		.fa-tire:before {
			content: "\f631"
		}

		.fa-tire-flat:before {
			content: "\f632"
		}

		.fa-tire-pressure-warning:before {
			content: "\f633"
		}

		.fa-tire-rugged:before {
			content: "\f634"
		}

		.fa-tired:before {
			content: "\f5c8"
		}

		.fa-toggle-off:before {
			content: "\f204"
		}

		.fa-toggle-on:before {
			content: "\f205"
		}

		.fa-toilet:before {
			content: "\f7d8"
		}

		.fa-toilet-paper:before {
			content: "\f71e"
		}

		.fa-toilet-paper-alt:before {
			content: "\f71f"
		}

		.fa-toilet-paper-slash:before {
			content: "\f972"
		}

		.fa-tombstone:before {
			content: "\f720"
		}

		.fa-tombstone-alt:before {
			content: "\f721"
		}

		.fa-toolbox:before {
			content: "\f552"
		}

		.fa-tools:before {
			content: "\f7d9"
		}

		.fa-tooth:before {
			content: "\f5c9"
		}

		.fa-toothbrush:before {
			content: "\f635"
		}

		.fa-torah:before {
			content: "\f6a0"
		}

		.fa-torii-gate:before {
			content: "\f6a1"
		}

		.fa-tornado:before {
			content: "\f76f"
		}

		.fa-tractor:before {
			content: "\f722"
		}

		.fa-trade-federation:before {
			content: "\f513"
		}

		.fa-trademark:before {
			content: "\f25c"
		}

		.fa-traffic-cone:before {
			content: "\f636"
		}

		.fa-traffic-light:before {
			content: "\f637"
		}

		.fa-traffic-light-go:before {
			content: "\f638"
		}

		.fa-traffic-light-slow:before {
			content: "\f639"
		}

		.fa-traffic-light-stop:before {
			content: "\f63a"
		}

		.fa-trailer:before {
			content: "\f941"
		}

		.fa-train:before {
			content: "\f238"
		}

		.fa-tram:before {
			content: "\f7da"
		}

		.fa-transgender:before {
			content: "\f224"
		}

		.fa-transgender-alt:before {
			content: "\f225"
		}

		.fa-transporter:before {
			content: "\f942"
		}

		.fa-transporter-1:before {
			content: "\f943"
		}

		.fa-transporter-2:before {
			content: "\f944"
		}

		.fa-transporter-3:before {
			content: "\f945"
		}

		.fa-transporter-empty:before {
			content: "\f946"
		}

		.fa-trash:before {
			content: "\f1f8"
		}

		.fa-trash-alt:before {
			content: "\f2ed"
		}

		.fa-trash-restore:before {
			content: "\f829"
		}

		.fa-trash-restore-alt:before {
			content: "\f82a"
		}

		.fa-trash-undo:before {
			content: "\f895"
		}

		.fa-trash-undo-alt:before {
			content: "\f896"
		}

		.fa-treasure-chest:before {
			content: "\f723"
		}

		.fa-tree:before {
			content: "\f1bb"
		}

		.fa-tree-alt:before {
			content: "\f400"
		}

		.fa-tree-christmas:before {
			content: "\f7db"
		}

		.fa-tree-decorated:before {
			content: "\f7dc"
		}

		.fa-tree-large:before {
			content: "\f7dd"
		}

		.fa-tree-palm:before {
			content: "\f82b"
		}

		.fa-trees:before {
			content: "\f724"
		}

		.fa-trello:before {
			content: "\f181"
		}

		.fa-triangle:before {
			content: "\f2ec"
		}

		.fa-triangle-music:before {
			content: "\f8e2"
		}

		.fa-tripadvisor:before {
			content: "\f262"
		}

		.fa-trophy:before {
			content: "\f091"
		}

		.fa-trophy-alt:before {
			content: "\f2eb"
		}

		.fa-truck:before {
			content: "\f0d1"
		}

		.fa-truck-container:before {
			content: "\f4dc"
		}

		.fa-truck-couch:before {
			content: "\f4dd"
		}

		.fa-truck-loading:before {
			content: "\f4de"
		}

		.fa-truck-monster:before {
			content: "\f63b"
		}

		.fa-truck-moving:before {
			content: "\f4df"
		}

		.fa-truck-pickup:before {
			content: "\f63c"
		}

		.fa-truck-plow:before {
			content: "\f7de"
		}

		.fa-truck-ramp:before {
			content: "\f4e0"
		}

		.fa-trumpet:before {
			content: "\f8e3"
		}

		.fa-tshirt:before {
			content: "\f553"
		}

		.fa-tty:before {
			content: "\f1e4"
		}

		.fa-tumblr:before {
			content: "\f173"
		}

		.fa-tumblr-square:before {
			content: "\f174"
		}

		.fa-turkey:before {
			content: "\f725"
		}

		.fa-turntable:before {
			content: "\f8e4"
		}

		.fa-turtle:before {
			content: "\f726"
		}

		.fa-tv:before {
			content: "\f26c"
		}

		.fa-tv-alt:before {
			content: "\f8e5"
		}

		.fa-tv-music:before {
			content: "\f8e6"
		}

		.fa-tv-retro:before {
			content: "\f401"
		}

		.fa-twitch:before {
			content: "\f1e8"
		}

		.fa-twitter:before {
			content: "\f099"
		}

		.fa-twitter-square:before {
			content: "\f081"
		}

		.fa-typewriter:before {
			content: "\f8e7"
		}

		.fa-typo3:before {
			content: "\f42b"
		}

		.fa-uber:before {
			content: "\f402"
		}

		.fa-ubuntu:before {
			content: "\f7df"
		}

		.fa-ufo:before {
			content: "\f947"
		}

		.fa-ufo-beam:before {
			content: "\f948"
		}

		.fa-uikit:before {
			content: "\f403"
		}

		.fa-umbraco:before {
			content: "\f8e8"
		}

		.fa-umbrella:before {
			content: "\f0e9"
		}

		.fa-umbrella-beach:before {
			content: "\f5ca"
		}

		.fa-underline:before {
			content: "\f0cd"
		}

		.fa-undo:before {
			content: "\f0e2"
		}

		.fa-undo-alt:before {
			content: "\f2ea"
		}

		.fa-unicorn:before {
			content: "\f727"
		}

		.fa-union:before {
			content: "\f6a2"
		}

		.fa-uniregistry:before {
			content: "\f404"
		}

		.fa-unity:before {
			content: "\f949"
		}

		.fa-universal-access:before {
			content: "\f29a"
		}

		.fa-university:before {
			content: "\f19c"
		}

		.fa-unlink:before {
			content: "\f127"
		}

		.fa-unlock:before {
			content: "\f09c"
		}

		.fa-unlock-alt:before {
			content: "\f13e"
		}

		.fa-untappd:before {
			content: "\f405"
		}

		.fa-upload:before {
			content: "\f093"
		}

		.fa-ups:before {
			content: "\f7e0"
		}

		.fa-usb:before {
			content: "\f287"
		}

		.fa-usb-drive:before {
			content: "\f8e9"
		}

		.fa-usd-circle:before {
			content: "\f2e8"
		}

		.fa-usd-square:before {
			content: "\f2e9"
		}

		.fa-user:before {
			content: "\f007"
		}

		.fa-user-alien:before {
			content: "\f94a"
		}

		.fa-user-alt:before {
			content: "\f406"
		}

		.fa-user-alt-slash:before {
			content: "\f4fa"
		}

		.fa-user-astronaut:before {
			content: "\f4fb"
		}

		.fa-user-chart:before {
			content: "\f6a3"
		}

		.fa-user-check:before {
			content: "\f4fc"
		}

		.fa-user-circle:before {
			content: "\f2bd"
		}

		.fa-user-clock:before {
			content: "\f4fd"
		}

		.fa-user-cog:before {
			content: "\f4fe"
		}

		.fa-user-cowboy:before {
			content: "\f8ea"
		}

		.fa-user-crown:before {
			content: "\f6a4"
		}

		.fa-user-edit:before {
			content: "\f4ff"
		}

		.fa-user-friends:before {
			content: "\f500"
		}

		.fa-user-graduate:before {
			content: "\f501"
		}

		.fa-user-hard-hat:before {
			content: "\f82c"
		}

		.fa-user-headset:before {
			content: "\f82d"
		}

		.fa-user-injured:before {
			content: "\f728"
		}

		.fa-user-lock:before {
			content: "\f502"
		}

		.fa-user-md:before {
			content: "\f0f0"
		}

		.fa-user-md-chat:before {
			content: "\f82e"
		}

		.fa-user-minus:before {
			content: "\f503"
		}

		.fa-user-music:before {
			content: "\f8eb"
		}

		.fa-user-ninja:before {
			content: "\f504"
		}

		.fa-user-nurse:before {
			content: "\f82f"
		}

		.fa-user-plus:before {
			content: "\f234"
		}

		.fa-user-robot:before {
			content: "\f94b"
		}

		.fa-user-secret:before {
			content: "\f21b"
		}

		.fa-user-shield:before {
			content: "\f505"
		}

		.fa-user-slash:before {
			content: "\f506"
		}

		.fa-user-tag:before {
			content: "\f507"
		}

		.fa-user-tie:before {
			content: "\f508"
		}

		.fa-user-times:before {
			content: "\f235"
		}

		.fa-user-unlock:before {
			content: "\f958"
		}

		.fa-user-visor:before {
			content: "\f94c"
		}

		.fa-users:before {
			content: "\f0c0"
		}

		.fa-users-class:before {
			content: "\f63d"
		}

		.fa-users-cog:before {
			content: "\f509"
		}

		.fa-users-crown:before {
			content: "\f6a5"
		}

		.fa-users-medical:before {
			content: "\f830"
		}

		.fa-users-slash:before {
			content: "\f973"
		}

		.fa-usps:before {
			content: "\f7e1"
		}

		.fa-ussunnah:before {
			content: "\f407"
		}

		.fa-utensil-fork:before {
			content: "\f2e3"
		}

		.fa-utensil-knife:before {
			content: "\f2e4"
		}

		.fa-utensil-spoon:before {
			content: "\f2e5"
		}

		.fa-utensils:before {
			content: "\f2e7"
		}

		.fa-utensils-alt:before {
			content: "\f2e6"
		}

		.fa-vaadin:before {
			content: "\f408"
		}

		.fa-vacuum:before {
			content: "\f94d"
		}

		.fa-vacuum-robot:before {
			content: "\f94e"
		}

		.fa-value-absolute:before {
			content: "\f6a6"
		}

		.fa-vector-square:before {
			content: "\f5cb"
		}

		.fa-venus:before {
			content: "\f221"
		}

		.fa-venus-double:before {
			content: "\f226"
		}

		.fa-venus-mars:before {
			content: "\f228"
		}

		.fa-vhs:before {
			content: "\f8ec"
		}

		.fa-viacoin:before {
			content: "\f237"
		}

		.fa-viadeo:before {
			content: "\f2a9"
		}

		.fa-viadeo-square:before {
			content: "\f2aa"
		}

		.fa-vial:before {
			content: "\f492"
		}

		.fa-vials:before {
			content: "\f493"
		}

		.fa-viber:before {
			content: "\f409"
		}

		.fa-video:before {
			content: "\f03d"
		}

		.fa-video-plus:before {
			content: "\f4e1"
		}

		.fa-video-slash:before {
			content: "\f4e2"
		}

		.fa-vihara:before {
			content: "\f6a7"
		}

		.fa-vimeo:before {
			content: "\f40a"
		}

		.fa-vimeo-square:before {
			content: "\f194"
		}

		.fa-vimeo-v:before {
			content: "\f27d"
		}

		.fa-vine:before {
			content: "\f1ca"
		}

		.fa-violin:before {
			content: "\f8ed"
		}

		.fa-virus:before {
			content: "\f974"
		}

		.fa-virus-slash:before {
			content: "\f975"
		}

		.fa-viruses:before {
			content: "\f976"
		}

		.fa-vk:before {
			content: "\f189"
		}

		.fa-vnv:before {
			content: "\f40b"
		}

		.fa-voicemail:before {
			content: "\f897"
		}

		.fa-volcano:before {
			content: "\f770"
		}

		.fa-volleyball-ball:before {
			content: "\f45f"
		}

		.fa-volume:before {
			content: "\f6a8"
		}

		.fa-volume-down:before {
			content: "\f027"
		}

		.fa-volume-mute:before {
			content: "\f6a9"
		}

		.fa-volume-off:before {
			content: "\f026"
		}

		.fa-volume-slash:before {
			content: "\f2e2"
		}

		.fa-volume-up:before {
			content: "\f028"
		}

		.fa-vote-nay:before {
			content: "\f771"
		}

		.fa-vote-yea:before {
			content: "\f772"
		}

		.fa-vr-cardboard:before {
			content: "\f729"
		}

		.fa-vuejs:before {
			content: "\f41f"
		}

		.fa-wagon-covered:before {
			content: "\f8ee"
		}

		.fa-walker:before {
			content: "\f831"
		}

		.fa-walkie-talkie:before {
			content: "\f8ef"
		}

		.fa-walking:before {
			content: "\f554"
		}

		.fa-wallet:before {
			content: "\f555"
		}

		.fa-wand:before {
			content: "\f72a"
		}

		.fa-wand-magic:before {
			content: "\f72b"
		}

		.fa-warehouse:before {
			content: "\f494"
		}

		.fa-warehouse-alt:before {
			content: "\f495"
		}

		.fa-washer:before {
			content: "\f898"
		}

		.fa-watch:before {
			content: "\f2e1"
		}

		.fa-watch-calculator:before {
			content: "\f8f0"
		}

		.fa-watch-fitness:before {
			content: "\f63e"
		}

		.fa-water:before {
			content: "\f773"
		}

		.fa-water-lower:before {
			content: "\f774"
		}

		.fa-water-rise:before {
			content: "\f775"
		}

		.fa-wave-sine:before {
			content: "\f899"
		}

		.fa-wave-square:before {
			content: "\f83e"
		}

		.fa-wave-triangle:before {
			content: "\f89a"
		}

		.fa-waveform:before {
			content: "\f8f1"
		}

		.fa-waveform-path:before {
			content: "\f8f2"
		}

		.fa-waze:before {
			content: "\f83f"
		}

		.fa-webcam:before {
			content: "\f832"
		}

		.fa-webcam-slash:before {
			content: "\f833"
		}

		.fa-weebly:before {
			content: "\f5cc"
		}

		.fa-weibo:before {
			content: "\f18a"
		}

		.fa-weight:before {
			content: "\f496"
		}

		.fa-weight-hanging:before {
			content: "\f5cd"
		}

		.fa-weixin:before {
			content: "\f1d7"
		}

		.fa-whale:before {
			content: "\f72c"
		}

		.fa-whatsapp:before {
			content: "\f232"
		}

		.fa-whatsapp-square:before {
			content: "\f40c"
		}

		.fa-wheat:before {
			content: "\f72d"
		}

		.fa-wheelchair:before {
			content: "\f193"
		}

		.fa-whistle:before {
			content: "\f460"
		}

		.fa-whmcs:before {
			content: "\f40d"
		}

		.fa-wifi:before {
			content: "\f1eb"
		}

		.fa-wifi-1:before {
			content: "\f6aa"
		}

		.fa-wifi-2:before {
			content: "\f6ab"
		}

		.fa-wifi-slash:before {
			content: "\f6ac"
		}

		.fa-wikipedia-w:before {
			content: "\f266"
		}

		.fa-wind:before {
			content: "\f72e"
		}

		.fa-wind-turbine:before {
			content: "\f89b"
		}

		.fa-wind-warning:before {
			content: "\f776"
		}

		.fa-window:before {
			content: "\f40e"
		}

		.fa-window-alt:before {
			content: "\f40f"
		}

		.fa-window-close:before {
			content: "\f410"
		}

		.fa-window-frame:before {
			content: "\f94f"
		}

		.fa-window-frame-open:before {
			content: "\f950"
		}

		.fa-window-maximize:before {
			content: "\f2d0"
		}

		.fa-window-minimize:before {
			content: "\f2d1"
		}

		.fa-window-restore:before {
			content: "\f2d2"
		}

		.fa-windows:before {
			content: "\f17a"
		}

		.fa-windsock:before {
			content: "\f777"
		}

		.fa-wine-bottle:before {
			content: "\f72f"
		}

		.fa-wine-glass:before {
			content: "\f4e3"
		}

		.fa-wine-glass-alt:before {
			content: "\f5ce"
		}

		.fa-wix:before {
			content: "\f5cf"
		}

		.fa-wizards-of-the-coast:before {
			content: "\f730"
		}

		.fa-wolf-pack-battalion:before {
			content: "\f514"
		}

		.fa-won-sign:before {
			content: "\f159"
		}

		.fa-wordpress:before {
			content: "\f19a"
		}

		.fa-wordpress-simple:before {
			content: "\f411"
		}

		.fa-wpbeginner:before {
			content: "\f297"
		}

		.fa-wpexplorer:before {
			content: "\f2de"
		}

		.fa-wpforms:before {
			content: "\f298"
		}

		.fa-wpressr:before {
			content: "\f3e4"
		}

		.fa-wreath:before {
			content: "\f7e2"
		}

		.fa-wrench:before {
			content: "\f0ad"
		}

		.fa-x-ray:before {
			content: "\f497"
		}

		.fa-xbox:before {
			content: "\f412"
		}

		.fa-xing:before {
			content: "\f168"
		}

		.fa-xing-square:before {
			content: "\f169"
		}

		.fa-y-combinator:before {
			content: "\f23b"
		}

		.fa-yahoo:before {
			content: "\f19e"
		}

		.fa-yammer:before {
			content: "\f840"
		}

		.fa-yandex:before {
			content: "\f413"
		}

		.fa-yandex-international:before {
			content: "\f414"
		}

		.fa-yarn:before {
			content: "\f7e3"
		}

		.fa-yelp:before {
			content: "\f1e9"
		}

		.fa-yen-sign:before {
			content: "\f157"
		}

		.fa-yin-yang:before {
			content: "\f6ad"
		}

		.fa-yoast:before {
			content: "\f2b1"
		}

		.fa-youtube:before {
			content: "\f167"
		}

		.fa-youtube-square:before {
			content: "\f431"
		}

		.fa-zhihu:before {
			content: "\f63f"
		}

		.sr-only {
			border: 0;
			clip: rect(0, 0, 0, 0);
			height: 1px;
			margin: -1px;
			overflow: hidden;
			padding: 0;
			position: absolute;
			width: 1px
		}

		.sr-only-focusable:active, .sr-only-focusable:focus {
			clip: auto;
			height: auto;
			margin: 0;
			overflow: visible;
			position: static;
			width: auto
		}

		@font-face {
			font-family: "Font Awesome 5 Brands";
			font-style: normal;
			font-weight: 400;
			font-display: block;
			src: url(https://fonts.d2cmedia.ca/webfonts/fa-brands-400.eot);
			src: url(https://fonts.d2cmedia.ca/webfonts/fa-brands-400.eot?#iefix) format("embedded-opentype"), url(https://fonts.d2cmedia.ca/webfonts/fa-brands-400.woff2) format("woff2"), url(https://fonts.d2cmedia.ca/webfonts/fa-brands-400.woff) format("woff"), url(https://fonts.d2cmedia.ca/webfonts/fa-brands-400.ttf) format("truetype"), url(https://fonts.d2cmedia.ca/webfonts/fa-brands-400.svg#fontawesome) format("svg")
		}

		.fab {
			font-family: "Font Awesome 5 Brands";
			font-weight: 400
		}

		@font-face {
			font-family: "Font Awesome 5 Duotone";
			font-style: normal;
			font-weight: 900;
			font-display: block;
			src: url(https://fonts.d2cmedia.ca/webfonts/fa-duotone-900.eot);
			src: url(https://fonts.d2cmedia.ca/webfonts/fa-duotone-900.eot?#iefix) format("embedded-opentype"), url(https://fonts.d2cmedia.ca/webfonts/fa-duotone-900.woff2) format("woff2"), url(https://fonts.d2cmedia.ca/webfonts/fa-duotone-900.woff) format("woff"), url(https://fonts.d2cmedia.ca/webfonts/fa-duotone-900.ttf) format("truetype"), url(https://fonts.d2cmedia.ca/webfonts/fa-duotone-900.svg#fontawesome) format("svg")
		}

		.fad {
			position: relative;
			font-family: "Font Awesome 5 Duotone";
			font-weight: 900
		}

		.fad:before {
			position: absolute;
			color: var(--fa-primary-color, inherit);
			opacity: 1;
			opacity: var(--fa-primary-opacity, 1)
		}

		.fad:after {
			color: var(--fa-secondary-color, inherit)
		}

		.fa-swap-opacity .fad:before, .fad.fa-swap-opacity:before, .fad:after {
			opacity: .4;
			opacity: var(--fa-secondary-opacity, .4)
		}

		.fa-swap-opacity .fad:after, .fad.fa-swap-opacity:after {
			opacity: 1;
			opacity: var(--fa-primary-opacity, 1)
		}

		.fad.fa-inverse {
			color: #fff
		}

		.fad.fa-stack-1x, .fad.fa-stack-2x {
			position: absolute
		}

		.fad.fa-fw:before, .fad.fa-stack-1x:before, .fad.fa-stack-2x:before {
			left: 50%;
			-webkit-transform: translateX(-50%);
			transform: translateX(-50%)
		}

		.fad.fa-abacus:after {
			content: "\10f640"
		}

		.fad.fa-acorn:after {
			content: "\10f6ae"
		}

		.fad.fa-ad:after {
			content: "\10f641"
		}

		.fad.fa-address-book:after {
			content: "\10f2b9"
		}

		.fad.fa-address-card:after {
			content: "\10f2bb"
		}

		.fad.fa-adjust:after {
			content: "\10f042"
		}

		.fad.fa-air-conditioner:after {
			content: "\10f8f4"
		}

		.fad.fa-air-freshener:after {
			content: "\10f5d0"
		}

		.fad.fa-alarm-clock:after {
			content: "\10f34e"
		}

		.fad.fa-alarm-exclamation:after {
			content: "\10f843"
		}

		.fad.fa-alarm-plus:after {
			content: "\10f844"
		}

		.fad.fa-alarm-snooze:after {
			content: "\10f845"
		}

		.fad.fa-album:after {
			content: "\10f89f"
		}

		.fad.fa-album-collection:after {
			content: "\10f8a0"
		}

		.fad.fa-alicorn:after {
			content: "\10f6b0"
		}

		.fad.fa-alien:after {
			content: "\10f8f5"
		}

		.fad.fa-alien-monster:after {
			content: "\10f8f6"
		}

		.fad.fa-align-center:after {
			content: "\10f037"
		}

		.fad.fa-align-justify:after {
			content: "\10f039"
		}

		.fad.fa-align-left:after {
			content: "\10f036"
		}

		.fad.fa-align-right:after {
			content: "\10f038"
		}

		.fad.fa-align-slash:after {
			content: "\10f846"
		}

		.fad.fa-allergies:after {
			content: "\10f461"
		}

		.fad.fa-ambulance:after {
			content: "\10f0f9"
		}

		.fad.fa-american-sign-language-interpreting:after {
			content: "\10f2a3"
		}

		.fad.fa-amp-guitar:after {
			content: "\10f8a1"
		}

		.fad.fa-analytics:after {
			content: "\10f643"
		}

		.fad.fa-anchor:after {
			content: "\10f13d"
		}

		.fad.fa-angel:after {
			content: "\10f779"
		}

		.fad.fa-angle-double-down:after {
			content: "\10f103"
		}

		.fad.fa-angle-double-left:after {
			content: "\10f100"
		}

		.fad.fa-angle-double-right:after {
			content: "\10f101"
		}

		.fad.fa-angle-double-up:after {
			content: "\10f102"
		}

		.fad.fa-angle-down:after {
			content: "\10f107"
		}

		.fad.fa-angle-left:after {
			content: "\10f104"
		}

		.fad.fa-angle-right:after {
			content: "\10f105"
		}

		.fad.fa-angle-up:after {
			content: "\10f106"
		}

		.fad.fa-angry:after {
			content: "\10f556"
		}

		.fad.fa-ankh:after {
			content: "\10f644"
		}

		.fad.fa-apple-alt:after {
			content: "\10f5d1"
		}

		.fad.fa-apple-crate:after {
			content: "\10f6b1"
		}

		.fad.fa-archive:after {
			content: "\10f187"
		}

		.fad.fa-archway:after {
			content: "\10f557"
		}

		.fad.fa-arrow-alt-circle-down:after {
			content: "\10f358"
		}

		.fad.fa-arrow-alt-circle-left:after {
			content: "\10f359"
		}

		.fad.fa-arrow-alt-circle-right:after {
			content: "\10f35a"
		}

		.fad.fa-arrow-alt-circle-up:after {
			content: "\10f35b"
		}

		.fad.fa-arrow-alt-down:after {
			content: "\10f354"
		}

		.fad.fa-arrow-alt-from-bottom:after {
			content: "\10f346"
		}

		.fad.fa-arrow-alt-from-left:after {
			content: "\10f347"
		}

		.fad.fa-arrow-alt-from-right:after {
			content: "\10f348"
		}

		.fad.fa-arrow-alt-from-top:after {
			content: "\10f349"
		}

		.fad.fa-arrow-alt-left:after {
			content: "\10f355"
		}

		.fad.fa-arrow-alt-right:after {
			content: "\10f356"
		}

		.fad.fa-arrow-alt-square-down:after {
			content: "\10f350"
		}

		.fad.fa-arrow-alt-square-left:after {
			content: "\10f351"
		}

		.fad.fa-arrow-alt-square-right:after {
			content: "\10f352"
		}

		.fad.fa-arrow-alt-square-up:after {
			content: "\10f353"
		}

		.fad.fa-arrow-alt-to-bottom:after {
			content: "\10f34a"
		}

		.fad.fa-arrow-alt-to-left:after {
			content: "\10f34b"
		}

		.fad.fa-arrow-alt-to-right:after {
			content: "\10f34c"
		}

		.fad.fa-arrow-alt-to-top:after {
			content: "\10f34d"
		}

		.fad.fa-arrow-alt-up:after {
			content: "\10f357"
		}

		.fad.fa-arrow-circle-down:after {
			content: "\10f0ab"
		}

		.fad.fa-arrow-circle-left:after {
			content: "\10f0a8"
		}

		.fad.fa-arrow-circle-right:after {
			content: "\10f0a9"
		}

		.fad.fa-arrow-circle-up:after {
			content: "\10f0aa"
		}

		.fad.fa-arrow-down:after {
			content: "\10f063"
		}

		.fad.fa-arrow-from-bottom:after {
			content: "\10f342"
		}

		.fad.fa-arrow-from-left:after {
			content: "\10f343"
		}

		.fad.fa-arrow-from-right:after {
			content: "\10f344"
		}

		.fad.fa-arrow-from-top:after {
			content: "\10f345"
		}

		.fad.fa-arrow-left:after {
			content: "\10f060"
		}

		.fad.fa-arrow-right:after {
			content: "\10f061"
		}

		.fad.fa-arrow-square-down:after {
			content: "\10f339"
		}

		.fad.fa-arrow-square-left:after {
			content: "\10f33a"
		}

		.fad.fa-arrow-square-right:after {
			content: "\10f33b"
		}

		.fad.fa-arrow-square-up:after {
			content: "\10f33c"
		}

		.fad.fa-arrow-to-bottom:after {
			content: "\10f33d"
		}

		.fad.fa-arrow-to-left:after {
			content: "\10f33e"
		}

		.fad.fa-arrow-to-right:after {
			content: "\10f340"
		}

		.fad.fa-arrow-to-top:after {
			content: "\10f341"
		}

		.fad.fa-arrow-up:after {
			content: "\10f062"
		}

		.fad.fa-arrows:after {
			content: "\10f047"
		}

		.fad.fa-arrows-alt:after {
			content: "\10f0b2"
		}

		.fad.fa-arrows-alt-h:after {
			content: "\10f337"
		}

		.fad.fa-arrows-alt-v:after {
			content: "\10f338"
		}

		.fad.fa-arrows-h:after {
			content: "\10f07e"
		}

		.fad.fa-arrows-v:after {
			content: "\10f07d"
		}

		.fad.fa-assistive-listening-systems:after {
			content: "\10f2a2"
		}

		.fad.fa-asterisk:after {
			content: "\10f069"
		}

		.fad.fa-at:after {
			content: "\10f1fa"
		}

		.fad.fa-atlas:after {
			content: "\10f558"
		}

		.fad.fa-atom:after {
			content: "\10f5d2"
		}

		.fad.fa-atom-alt:after {
			content: "\10f5d3"
		}

		.fad.fa-audio-description:after {
			content: "\10f29e"
		}

		.fad.fa-award:after {
			content: "\10f559"
		}

		.fad.fa-axe:after {
			content: "\10f6b2"
		}

		.fad.fa-axe-battle:after {
			content: "\10f6b3"
		}

		.fad.fa-baby:after {
			content: "\10f77c"
		}

		.fad.fa-baby-carriage:after {
			content: "\10f77d"
		}

		.fad.fa-backpack:after {
			content: "\10f5d4"
		}

		.fad.fa-backspace:after {
			content: "\10f55a"
		}

		.fad.fa-backward:after {
			content: "\10f04a"
		}

		.fad.fa-bacon:after {
			content: "\10f7e5"
		}

		.fad.fa-bacteria:after {
			content: "\10f959"
		}

		.fad.fa-bacterium:after {
			content: "\10f95a"
		}

		.fad.fa-badge:after {
			content: "\10f335"
		}

		.fad.fa-badge-check:after {
			content: "\10f336"
		}

		.fad.fa-badge-dollar:after {
			content: "\10f645"
		}

		.fad.fa-badge-percent:after {
			content: "\10f646"
		}

		.fad.fa-badge-sheriff:after {
			content: "\10f8a2"
		}

		.fad.fa-badger-honey:after {
			content: "\10f6b4"
		}

		.fad.fa-bags-shopping:after {
			content: "\10f847"
		}

		.fad.fa-bahai:after {
			content: "\10f666"
		}

		.fad.fa-balance-scale:after {
			content: "\10f24e"
		}

		.fad.fa-balance-scale-left:after {
			content: "\10f515"
		}

		.fad.fa-balance-scale-right:after {
			content: "\10f516"
		}

		.fad.fa-ball-pile:after {
			content: "\10f77e"
		}

		.fad.fa-ballot:after {
			content: "\10f732"
		}

		.fad.fa-ballot-check:after {
			content: "\10f733"
		}

		.fad.fa-ban:after {
			content: "\10f05e"
		}

		.fad.fa-band-aid:after {
			content: "\10f462"
		}

		.fad.fa-banjo:after {
			content: "\10f8a3"
		}

		.fad.fa-barcode:after {
			content: "\10f02a"
		}

		.fad.fa-barcode-alt:after {
			content: "\10f463"
		}

		.fad.fa-barcode-read:after {
			content: "\10f464"
		}

		.fad.fa-barcode-scan:after {
			content: "\10f465"
		}

		.fad.fa-bars:after {
			content: "\10f0c9"
		}

		.fad.fa-baseball:after {
			content: "\10f432"
		}

		.fad.fa-baseball-ball:after {
			content: "\10f433"
		}

		.fad.fa-basketball-ball:after {
			content: "\10f434"
		}

		.fad.fa-basketball-hoop:after {
			content: "\10f435"
		}

		.fad.fa-bat:after {
			content: "\10f6b5"
		}

		.fad.fa-bath:after {
			content: "\10f2cd"
		}

		.fad.fa-battery-bolt:after {
			content: "\10f376"
		}

		.fad.fa-battery-empty:after {
			content: "\10f244"
		}

		.fad.fa-battery-full:after {
			content: "\10f240"
		}

		.fad.fa-battery-half:after {
			content: "\10f242"
		}

		.fad.fa-battery-quarter:after {
			content: "\10f243"
		}

		.fad.fa-battery-slash:after {
			content: "\10f377"
		}

		.fad.fa-battery-three-quarters:after {
			content: "\10f241"
		}

		.fad.fa-bed:after {
			content: "\10f236"
		}

		.fad.fa-bed-alt:after {
			content: "\10f8f7"
		}

		.fad.fa-bed-bunk:after {
			content: "\10f8f8"
		}

		.fad.fa-bed-empty:after {
			content: "\10f8f9"
		}

		.fad.fa-beer:after {
			content: "\10f0fc"
		}

		.fad.fa-bell:after {
			content: "\10f0f3"
		}

		.fad.fa-bell-exclamation:after {
			content: "\10f848"
		}

		.fad.fa-bell-on:after {
			content: "\10f8fa"
		}

		.fad.fa-bell-plus:after {
			content: "\10f849"
		}

		.fad.fa-bell-school:after {
			content: "\10f5d5"
		}

		.fad.fa-bell-school-slash:after {
			content: "\10f5d6"
		}

		.fad.fa-bell-slash:after {
			content: "\10f1f6"
		}

		.fad.fa-bells:after {
			content: "\10f77f"
		}

		.fad.fa-betamax:after {
			content: "\10f8a4"
		}

		.fad.fa-bezier-curve:after {
			content: "\10f55b"
		}

		.fad.fa-bible:after {
			content: "\10f647"
		}

		.fad.fa-bicycle:after {
			content: "\10f206"
		}

		.fad.fa-biking:after {
			content: "\10f84a"
		}

		.fad.fa-biking-mountain:after {
			content: "\10f84b"
		}

		.fad.fa-binoculars:after {
			content: "\10f1e5"
		}

		.fad.fa-biohazard:after {
			content: "\10f780"
		}

		.fad.fa-birthday-cake:after {
			content: "\10f1fd"
		}

		.fad.fa-blanket:after {
			content: "\10f498"
		}

		.fad.fa-blender:after {
			content: "\10f517"
		}

		.fad.fa-blender-phone:after {
			content: "\10f6b6"
		}

		.fad.fa-blind:after {
			content: "\10f29d"
		}

		.fad.fa-blinds:after {
			content: "\10f8fb"
		}

		.fad.fa-blinds-open:after {
			content: "\10f8fc"
		}

		.fad.fa-blinds-raised:after {
			content: "\10f8fd"
		}

		.fad.fa-blog:after {
			content: "\10f781"
		}

		.fad.fa-bold:after {
			content: "\10f032"
		}

		.fad.fa-bolt:after {
			content: "\10f0e7"
		}

		.fad.fa-bomb:after {
			content: "\10f1e2"
		}

		.fad.fa-bone:after {
			content: "\10f5d7"
		}

		.fad.fa-bone-break:after {
			content: "\10f5d8"
		}

		.fad.fa-bong:after {
			content: "\10f55c"
		}

		.fad.fa-book:after {
			content: "\10f02d"
		}

		.fad.fa-book-alt:after {
			content: "\10f5d9"
		}

		.fad.fa-book-dead:after {
			content: "\10f6b7"
		}

		.fad.fa-book-heart:after {
			content: "\10f499"
		}

		.fad.fa-book-medical:after {
			content: "\10f7e6"
		}

		.fad.fa-book-open:after {
			content: "\10f518"
		}

		.fad.fa-book-reader:after {
			content: "\10f5da"
		}

		.fad.fa-book-spells:after {
			content: "\10f6b8"
		}

		.fad.fa-book-user:after {
			content: "\10f7e7"
		}

		.fad.fa-bookmark:after {
			content: "\10f02e"
		}

		.fad.fa-books:after {
			content: "\10f5db"
		}

		.fad.fa-books-medical:after {
			content: "\10f7e8"
		}

		.fad.fa-boombox:after {
			content: "\10f8a5"
		}

		.fad.fa-boot:after {
			content: "\10f782"
		}

		.fad.fa-booth-curtain:after {
			content: "\10f734"
		}

		.fad.fa-border-all:after {
			content: "\10f84c"
		}

		.fad.fa-border-bottom:after {
			content: "\10f84d"
		}

		.fad.fa-border-center-h:after {
			content: "\10f89c"
		}

		.fad.fa-border-center-v:after {
			content: "\10f89d"
		}

		.fad.fa-border-inner:after {
			content: "\10f84e"
		}

		.fad.fa-border-left:after {
			content: "\10f84f"
		}

		.fad.fa-border-none:after {
			content: "\10f850"
		}

		.fad.fa-border-outer:after {
			content: "\10f851"
		}

		.fad.fa-border-right:after {
			content: "\10f852"
		}

		.fad.fa-border-style:after {
			content: "\10f853"
		}

		.fad.fa-border-style-alt:after {
			content: "\10f854"
		}

		.fad.fa-border-top:after {
			content: "\10f855"
		}

		.fad.fa-bow-arrow:after {
			content: "\10f6b9"
		}

		.fad.fa-bowling-ball:after {
			content: "\10f436"
		}

		.fad.fa-bowling-pins:after {
			content: "\10f437"
		}

		.fad.fa-box:after {
			content: "\10f466"
		}

		.fad.fa-box-alt:after {
			content: "\10f49a"
		}

		.fad.fa-box-ballot:after {
			content: "\10f735"
		}

		.fad.fa-box-check:after {
			content: "\10f467"
		}

		.fad.fa-box-fragile:after {
			content: "\10f49b"
		}

		.fad.fa-box-full:after {
			content: "\10f49c"
		}

		.fad.fa-box-heart:after {
			content: "\10f49d"
		}

		.fad.fa-box-open:after {
			content: "\10f49e"
		}

		.fad.fa-box-tissue:after {
			content: "\10f95b"
		}

		.fad.fa-box-up:after {
			content: "\10f49f"
		}

		.fad.fa-box-usd:after {
			content: "\10f4a0"
		}

		.fad.fa-boxes:after {
			content: "\10f468"
		}

		.fad.fa-boxes-alt:after {
			content: "\10f4a1"
		}

		.fad.fa-boxing-glove:after {
			content: "\10f438"
		}

		.fad.fa-brackets:after {
			content: "\10f7e9"
		}

		.fad.fa-brackets-curly:after {
			content: "\10f7ea"
		}

		.fad.fa-braille:after {
			content: "\10f2a1"
		}

		.fad.fa-brain:after {
			content: "\10f5dc"
		}

		.fad.fa-bread-loaf:after {
			content: "\10f7eb"
		}

		.fad.fa-bread-slice:after {
			content: "\10f7ec"
		}

		.fad.fa-briefcase:after {
			content: "\10f0b1"
		}

		.fad.fa-briefcase-medical:after {
			content: "\10f469"
		}

		.fad.fa-bring-forward:after {
			content: "\10f856"
		}

		.fad.fa-bring-front:after {
			content: "\10f857"
		}

		.fad.fa-broadcast-tower:after {
			content: "\10f519"
		}

		.fad.fa-broom:after {
			content: "\10f51a"
		}

		.fad.fa-browser:after {
			content: "\10f37e"
		}

		.fad.fa-brush:after {
			content: "\10f55d"
		}

		.fad.fa-bug:after {
			content: "\10f188"
		}

		.fad.fa-building:after {
			content: "\10f1ad"
		}

		.fad.fa-bullhorn:after {
			content: "\10f0a1"
		}

		.fad.fa-bullseye:after {
			content: "\10f140"
		}

		.fad.fa-bullseye-arrow:after {
			content: "\10f648"
		}

		.fad.fa-bullseye-pointer:after {
			content: "\10f649"
		}

		.fad.fa-burger-soda:after {
			content: "\10f858"
		}

		.fad.fa-burn:after {
			content: "\10f46a"
		}

		.fad.fa-burrito:after {
			content: "\10f7ed"
		}

		.fad.fa-bus:after {
			content: "\10f207"
		}

		.fad.fa-bus-alt:after {
			content: "\10f55e"
		}

		.fad.fa-bus-school:after {
			content: "\10f5dd"
		}

		.fad.fa-business-time:after {
			content: "\10f64a"
		}

		.fad.fa-cabinet-filing:after {
			content: "\10f64b"
		}

		.fad.fa-cactus:after {
			content: "\10f8a7"
		}

		.fad.fa-calculator:after {
			content: "\10f1ec"
		}

		.fad.fa-calculator-alt:after {
			content: "\10f64c"
		}

		.fad.fa-calendar:after {
			content: "\10f133"
		}

		.fad.fa-calendar-alt:after {
			content: "\10f073"
		}

		.fad.fa-calendar-check:after {
			content: "\10f274"
		}

		.fad.fa-calendar-day:after {
			content: "\10f783"
		}

		.fad.fa-calendar-edit:after {
			content: "\10f333"
		}

		.fad.fa-calendar-exclamation:after {
			content: "\10f334"
		}

		.fad.fa-calendar-minus:after {
			content: "\10f272"
		}

		.fad.fa-calendar-plus:after {
			content: "\10f271"
		}

		.fad.fa-calendar-star:after {
			content: "\10f736"
		}

		.fad.fa-calendar-times:after {
			content: "\10f273"
		}

		.fad.fa-calendar-week:after {
			content: "\10f784"
		}

		.fad.fa-camcorder:after {
			content: "\10f8a8"
		}

		.fad.fa-camera:after {
			content: "\10f030"
		}

		.fad.fa-camera-alt:after {
			content: "\10f332"
		}

		.fad.fa-camera-home:after {
			content: "\10f8fe"
		}

		.fad.fa-camera-movie:after {
			content: "\10f8a9"
		}

		.fad.fa-camera-polaroid:after {
			content: "\10f8aa"
		}

		.fad.fa-camera-retro:after {
			content: "\10f083"
		}

		.fad.fa-campfire:after {
			content: "\10f6ba"
		}

		.fad.fa-campground:after {
			content: "\10f6bb"
		}

		.fad.fa-candle-holder:after {
			content: "\10f6bc"
		}

		.fad.fa-candy-cane:after {
			content: "\10f786"
		}

		.fad.fa-candy-corn:after {
			content: "\10f6bd"
		}

		.fad.fa-cannabis:after {
			content: "\10f55f"
		}

		.fad.fa-capsules:after {
			content: "\10f46b"
		}

		.fad.fa-car:after {
			content: "\10f1b9"
		}

		.fad.fa-car-alt:after {
			content: "\10f5de"
		}

		.fad.fa-car-battery:after {
			content: "\10f5df"
		}

		.fad.fa-car-building:after {
			content: "\10f859"
		}

		.fad.fa-car-bump:after {
			content: "\10f5e0"
		}

		.fad.fa-car-bus:after {
			content: "\10f85a"
		}

		.fad.fa-car-crash:after {
			content: "\10f5e1"
		}

		.fad.fa-car-garage:after {
			content: "\10f5e2"
		}

		.fad.fa-car-mechanic:after {
			content: "\10f5e3"
		}

		.fad.fa-car-side:after {
			content: "\10f5e4"
		}

		.fad.fa-car-tilt:after {
			content: "\10f5e5"
		}

		.fad.fa-car-wash:after {
			content: "\10f5e6"
		}

		.fad.fa-caravan:after {
			content: "\10f8ff"
		}

		.fad.fa-caravan-alt:after {
			content: "\10f900"
		}

		.fad.fa-caret-circle-down:after {
			content: "\10f32d"
		}

		.fad.fa-caret-circle-left:after {
			content: "\10f32e"
		}

		.fad.fa-caret-circle-right:after {
			content: "\10f330"
		}

		.fad.fa-caret-circle-up:after {
			content: "\10f331"
		}

		.fad.fa-caret-down:after {
			content: "\10f0d7"
		}

		.fad.fa-caret-left:after {
			content: "\10f0d9"
		}

		.fad.fa-caret-right:after {
			content: "\10f0da"
		}

		.fad.fa-caret-square-down:after {
			content: "\10f150"
		}

		.fad.fa-caret-square-left:after {
			content: "\10f191"
		}

		.fad.fa-caret-square-right:after {
			content: "\10f152"
		}

		.fad.fa-caret-square-up:after {
			content: "\10f151"
		}

		.fad.fa-caret-up:after {
			content: "\10f0d8"
		}

		.fad.fa-carrot:after {
			content: "\10f787"
		}

		.fad.fa-cars:after {
			content: "\10f85b"
		}

		.fad.fa-cart-arrow-down:after {
			content: "\10f218"
		}

		.fad.fa-cart-plus:after {
			content: "\10f217"
		}

		.fad.fa-cash-register:after {
			content: "\10f788"
		}

		.fad.fa-cassette-tape:after {
			content: "\10f8ab"
		}

		.fad.fa-cat:after {
			content: "\10f6be"
		}

		.fad.fa-cat-space:after {
			content: "\10f901"
		}

		.fad.fa-cauldron:after {
			content: "\10f6bf"
		}

		.fad.fa-cctv:after {
			content: "\10f8ac"
		}

		.fad.fa-certificate:after {
			content: "\10f0a3"
		}

		.fad.fa-chair:after {
			content: "\10f6c0"
		}

		.fad.fa-chair-office:after {
			content: "\10f6c1"
		}

		.fad.fa-chalkboard:after {
			content: "\10f51b"
		}

		.fad.fa-chalkboard-teacher:after {
			content: "\10f51c"
		}

		.fad.fa-charging-station:after {
			content: "\10f5e7"
		}

		.fad.fa-chart-area:after {
			content: "\10f1fe"
		}

		.fad.fa-chart-bar:after {
			content: "\10f080"
		}

		.fad.fa-chart-line:after {
			content: "\10f201"
		}

		.fad.fa-chart-line-down:after {
			content: "\10f64d"
		}

		.fad.fa-chart-network:after {
			content: "\10f78a"
		}

		.fad.fa-chart-pie:after {
			content: "\10f200"
		}

		.fad.fa-chart-pie-alt:after {
			content: "\10f64e"
		}

		.fad.fa-chart-scatter:after {
			content: "\10f7ee"
		}

		.fad.fa-check:after {
			content: "\10f00c"
		}

		.fad.fa-check-circle:after {
			content: "\10f058"
		}

		.fad.fa-check-double:after {
			content: "\10f560"
		}

		.fad.fa-check-square:after {
			content: "\10f14a"
		}

		.fad.fa-cheese:after {
			content: "\10f7ef"
		}

		.fad.fa-cheese-swiss:after {
			content: "\10f7f0"
		}

		.fad.fa-cheeseburger:after {
			content: "\10f7f1"
		}

		.fad.fa-chess:after {
			content: "\10f439"
		}

		.fad.fa-chess-bishop:after {
			content: "\10f43a"
		}

		.fad.fa-chess-bishop-alt:after {
			content: "\10f43b"
		}

		.fad.fa-chess-board:after {
			content: "\10f43c"
		}

		.fad.fa-chess-clock:after {
			content: "\10f43d"
		}

		.fad.fa-chess-clock-alt:after {
			content: "\10f43e"
		}

		.fad.fa-chess-king:after {
			content: "\10f43f"
		}

		.fad.fa-chess-king-alt:after {
			content: "\10f440"
		}

		.fad.fa-chess-knight:after {
			content: "\10f441"
		}

		.fad.fa-chess-knight-alt:after {
			content: "\10f442"
		}

		.fad.fa-chess-pawn:after {
			content: "\10f443"
		}

		.fad.fa-chess-pawn-alt:after {
			content: "\10f444"
		}

		.fad.fa-chess-queen:after {
			content: "\10f445"
		}

		.fad.fa-chess-queen-alt:after {
			content: "\10f446"
		}

		.fad.fa-chess-rook:after {
			content: "\10f447"
		}

		.fad.fa-chess-rook-alt:after {
			content: "\10f448"
		}

		.fad.fa-chevron-circle-down:after {
			content: "\10f13a"
		}

		.fad.fa-chevron-circle-left:after {
			content: "\10f137"
		}

		.fad.fa-chevron-circle-right:after {
			content: "\10f138"
		}

		.fad.fa-chevron-circle-up:after {
			content: "\10f139"
		}

		.fad.fa-chevron-double-down:after {
			content: "\10f322"
		}

		.fad.fa-chevron-double-left:after {
			content: "\10f323"
		}

		.fad.fa-chevron-double-right:after {
			content: "\10f324"
		}

		.fad.fa-chevron-double-up:after {
			content: "\10f325"
		}

		.fad.fa-chevron-down:after {
			content: "\10f078"
		}

		.fad.fa-chevron-left:after {
			content: "\10f053"
		}

		.fad.fa-chevron-right:after {
			content: "\10f054"
		}

		.fad.fa-chevron-square-down:after {
			content: "\10f329"
		}

		.fad.fa-chevron-square-left:after {
			content: "\10f32a"
		}

		.fad.fa-chevron-square-right:after {
			content: "\10f32b"
		}

		.fad.fa-chevron-square-up:after {
			content: "\10f32c"
		}

		.fad.fa-chevron-up:after {
			content: "\10f077"
		}

		.fad.fa-child:after {
			content: "\10f1ae"
		}

		.fad.fa-chimney:after {
			content: "\10f78b"
		}

		.fad.fa-church:after {
			content: "\10f51d"
		}

		.fad.fa-circle:after {
			content: "\10f111"
		}

		.fad.fa-circle-notch:after {
			content: "\10f1ce"
		}

		.fad.fa-city:after {
			content: "\10f64f"
		}

		.fad.fa-clarinet:after {
			content: "\10f8ad"
		}

		.fad.fa-claw-marks:after {
			content: "\10f6c2"
		}

		.fad.fa-clinic-medical:after {
			content: "\10f7f2"
		}

		.fad.fa-clipboard:after {
			content: "\10f328"
		}

		.fad.fa-clipboard-check:after {
			content: "\10f46c"
		}

		.fad.fa-clipboard-list:after {
			content: "\10f46d"
		}

		.fad.fa-clipboard-list-check:after {
			content: "\10f737"
		}

		.fad.fa-clipboard-prescription:after {
			content: "\10f5e8"
		}

		.fad.fa-clipboard-user:after {
			content: "\10f7f3"
		}

		.fad.fa-clock:after {
			content: "\10f017"
		}

		.fad.fa-clone:after {
			content: "\10f24d"
		}

		.fad.fa-closed-captioning:after {
			content: "\10f20a"
		}

		.fad.fa-cloud:after {
			content: "\10f0c2"
		}

		.fad.fa-cloud-download:after {
			content: "\10f0ed"
		}

		.fad.fa-cloud-download-alt:after {
			content: "\10f381"
		}

		.fad.fa-cloud-drizzle:after {
			content: "\10f738"
		}

		.fad.fa-cloud-hail:after {
			content: "\10f739"
		}

		.fad.fa-cloud-hail-mixed:after {
			content: "\10f73a"
		}

		.fad.fa-cloud-meatball:after {
			content: "\10f73b"
		}

		.fad.fa-cloud-moon:after {
			content: "\10f6c3"
		}

		.fad.fa-cloud-moon-rain:after {
			content: "\10f73c"
		}

		.fad.fa-cloud-music:after {
			content: "\10f8ae"
		}

		.fad.fa-cloud-rain:after {
			content: "\10f73d"
		}

		.fad.fa-cloud-rainbow:after {
			content: "\10f73e"
		}

		.fad.fa-cloud-showers:after {
			content: "\10f73f"
		}

		.fad.fa-cloud-showers-heavy:after {
			content: "\10f740"
		}

		.fad.fa-cloud-sleet:after {
			content: "\10f741"
		}

		.fad.fa-cloud-snow:after {
			content: "\10f742"
		}

		.fad.fa-cloud-sun:after {
			content: "\10f6c4"
		}

		.fad.fa-cloud-sun-rain:after {
			content: "\10f743"
		}

		.fad.fa-cloud-upload:after {
			content: "\10f0ee"
		}

		.fad.fa-cloud-upload-alt:after {
			content: "\10f382"
		}

		.fad.fa-clouds:after {
			content: "\10f744"
		}

		.fad.fa-clouds-moon:after {
			content: "\10f745"
		}

		.fad.fa-clouds-sun:after {
			content: "\10f746"
		}

		.fad.fa-club:after {
			content: "\10f327"
		}

		.fad.fa-cocktail:after {
			content: "\10f561"
		}

		.fad.fa-code:after {
			content: "\10f121"
		}

		.fad.fa-code-branch:after {
			content: "\10f126"
		}

		.fad.fa-code-commit:after {
			content: "\10f386"
		}

		.fad.fa-code-merge:after {
			content: "\10f387"
		}

		.fad.fa-coffee:after {
			content: "\10f0f4"
		}

		.fad.fa-coffee-pot:after {
			content: "\10f902"
		}

		.fad.fa-coffee-togo:after {
			content: "\10f6c5"
		}

		.fad.fa-coffin:after {
			content: "\10f6c6"
		}

		.fad.fa-coffin-cross:after {
			content: "\10f951"
		}

		.fad.fa-cog:after {
			content: "\10f013"
		}

		.fad.fa-cogs:after {
			content: "\10f085"
		}

		.fad.fa-coin:after {
			content: "\10f85c"
		}

		.fad.fa-coins:after {
			content: "\10f51e"
		}

		.fad.fa-columns:after {
			content: "\10f0db"
		}

		.fad.fa-comet:after {
			content: "\10f903"
		}

		.fad.fa-comment:after {
			content: "\10f075"
		}

		.fad.fa-comment-alt:after {
			content: "\10f27a"
		}

		.fad.fa-comment-alt-check:after {
			content: "\10f4a2"
		}

		.fad.fa-comment-alt-dollar:after {
			content: "\10f650"
		}

		.fad.fa-comment-alt-dots:after {
			content: "\10f4a3"
		}

		.fad.fa-comment-alt-edit:after {
			content: "\10f4a4"
		}

		.fad.fa-comment-alt-exclamation:after {
			content: "\10f4a5"
		}

		.fad.fa-comment-alt-lines:after {
			content: "\10f4a6"
		}

		.fad.fa-comment-alt-medical:after {
			content: "\10f7f4"
		}

		.fad.fa-comment-alt-minus:after {
			content: "\10f4a7"
		}

		.fad.fa-comment-alt-music:after {
			content: "\10f8af"
		}

		.fad.fa-comment-alt-plus:after {
			content: "\10f4a8"
		}

		.fad.fa-comment-alt-slash:after {
			content: "\10f4a9"
		}

		.fad.fa-comment-alt-smile:after {
			content: "\10f4aa"
		}

		.fad.fa-comment-alt-times:after {
			content: "\10f4ab"
		}

		.fad.fa-comment-check:after {
			content: "\10f4ac"
		}

		.fad.fa-comment-dollar:after {
			content: "\10f651"
		}

		.fad.fa-comment-dots:after {
			content: "\10f4ad"
		}

		.fad.fa-comment-edit:after {
			content: "\10f4ae"
		}

		.fad.fa-comment-exclamation:after {
			content: "\10f4af"
		}

		.fad.fa-comment-lines:after {
			content: "\10f4b0"
		}

		.fad.fa-comment-medical:after {
			content: "\10f7f5"
		}

		.fad.fa-comment-minus:after {
			content: "\10f4b1"
		}

		.fad.fa-comment-music:after {
			content: "\10f8b0"
		}

		.fad.fa-comment-plus:after {
			content: "\10f4b2"
		}

		.fad.fa-comment-slash:after {
			content: "\10f4b3"
		}

		.fad.fa-comment-smile:after {
			content: "\10f4b4"
		}

		.fad.fa-comment-times:after {
			content: "\10f4b5"
		}

		.fad.fa-comments:after {
			content: "\10f086"
		}

		.fad.fa-comments-alt:after {
			content: "\10f4b6"
		}

		.fad.fa-comments-alt-dollar:after {
			content: "\10f652"
		}

		.fad.fa-comments-dollar:after {
			content: "\10f653"
		}

		.fad.fa-compact-disc:after {
			content: "\10f51f"
		}

		.fad.fa-compass:after {
			content: "\10f14e"
		}

		.fad.fa-compass-slash:after {
			content: "\10f5e9"
		}

		.fad.fa-compress:after {
			content: "\10f066"
		}

		.fad.fa-compress-alt:after {
			content: "\10f422"
		}

		.fad.fa-compress-arrows-alt:after {
			content: "\10f78c"
		}

		.fad.fa-compress-wide:after {
			content: "\10f326"
		}

		.fad.fa-computer-classic:after {
			content: "\10f8b1"
		}

		.fad.fa-computer-speaker:after {
			content: "\10f8b2"
		}

		.fad.fa-concierge-bell:after {
			content: "\10f562"
		}

		.fad.fa-construction:after {
			content: "\10f85d"
		}

		.fad.fa-container-storage:after {
			content: "\10f4b7"
		}

		.fad.fa-conveyor-belt:after {
			content: "\10f46e"
		}

		.fad.fa-conveyor-belt-alt:after {
			content: "\10f46f"
		}

		.fad.fa-cookie:after {
			content: "\10f563"
		}

		.fad.fa-cookie-bite:after {
			content: "\10f564"
		}

		.fad.fa-copy:after {
			content: "\10f0c5"
		}

		.fad.fa-copyright:after {
			content: "\10f1f9"
		}

		.fad.fa-corn:after {
			content: "\10f6c7"
		}

		.fad.fa-couch:after {
			content: "\10f4b8"
		}

		.fad.fa-cow:after {
			content: "\10f6c8"
		}

		.fad.fa-cowbell:after {
			content: "\10f8b3"
		}

		.fad.fa-cowbell-more:after {
			content: "\10f8b4"
		}

		.fad.fa-credit-card:after {
			content: "\10f09d"
		}

		.fad.fa-credit-card-blank:after {
			content: "\10f389"
		}

		.fad.fa-credit-card-front:after {
			content: "\10f38a"
		}

		.fad.fa-cricket:after {
			content: "\10f449"
		}

		.fad.fa-croissant:after {
			content: "\10f7f6"
		}

		.fad.fa-crop:after {
			content: "\10f125"
		}

		.fad.fa-crop-alt:after {
			content: "\10f565"
		}

		.fad.fa-cross:after {
			content: "\10f654"
		}

		.fad.fa-crosshairs:after {
			content: "\10f05b"
		}

		.fad.fa-crow:after {
			content: "\10f520"
		}

		.fad.fa-crown:after {
			content: "\10f521"
		}

		.fad.fa-crutch:after {
			content: "\10f7f7"
		}

		.fad.fa-crutches:after {
			content: "\10f7f8"
		}

		.fad.fa-cube:after {
			content: "\10f1b2"
		}

		.fad.fa-cubes:after {
			content: "\10f1b3"
		}

		.fad.fa-curling:after {
			content: "\10f44a"
		}

		.fad.fa-cut:after {
			content: "\10f0c4"
		}

		.fad.fa-dagger:after {
			content: "\10f6cb"
		}

		.fad.fa-database:after {
			content: "\10f1c0"
		}

		.fad.fa-deaf:after {
			content: "\10f2a4"
		}

		.fad.fa-debug:after {
			content: "\10f7f9"
		}

		.fad.fa-deer:after {
			content: "\10f78e"
		}

		.fad.fa-deer-rudolph:after {
			content: "\10f78f"
		}

		.fad.fa-democrat:after {
			content: "\10f747"
		}

		.fad.fa-desktop:after {
			content: "\10f108"
		}

		.fad.fa-desktop-alt:after {
			content: "\10f390"
		}

		.fad.fa-dewpoint:after {
			content: "\10f748"
		}

		.fad.fa-dharmachakra:after {
			content: "\10f655"
		}

		.fad.fa-diagnoses:after {
			content: "\10f470"
		}

		.fad.fa-diamond:after {
			content: "\10f219"
		}

		.fad.fa-dice:after {
			content: "\10f522"
		}

		.fad.fa-dice-d10:after {
			content: "\10f6cd"
		}

		.fad.fa-dice-d12:after {
			content: "\10f6ce"
		}

		.fad.fa-dice-d20:after {
			content: "\10f6cf"
		}

		.fad.fa-dice-d4:after {
			content: "\10f6d0"
		}

		.fad.fa-dice-d6:after {
			content: "\10f6d1"
		}

		.fad.fa-dice-d8:after {
			content: "\10f6d2"
		}

		.fad.fa-dice-five:after {
			content: "\10f523"
		}

		.fad.fa-dice-four:after {
			content: "\10f524"
		}

		.fad.fa-dice-one:after {
			content: "\10f525"
		}

		.fad.fa-dice-six:after {
			content: "\10f526"
		}

		.fad.fa-dice-three:after {
			content: "\10f527"
		}

		.fad.fa-dice-two:after {
			content: "\10f528"
		}

		.fad.fa-digging:after {
			content: "\10f85e"
		}

		.fad.fa-digital-tachograph:after {
			content: "\10f566"
		}

		.fad.fa-diploma:after {
			content: "\10f5ea"
		}

		.fad.fa-directions:after {
			content: "\10f5eb"
		}

		.fad.fa-disc-drive:after {
			content: "\10f8b5"
		}

		.fad.fa-disease:after {
			content: "\10f7fa"
		}

		.fad.fa-divide:after {
			content: "\10f529"
		}

		.fad.fa-dizzy:after {
			content: "\10f567"
		}

		.fad.fa-dna:after {
			content: "\10f471"
		}

		.fad.fa-do-not-enter:after {
			content: "\10f5ec"
		}

		.fad.fa-dog:after {
			content: "\10f6d3"
		}

		.fad.fa-dog-leashed:after {
			content: "\10f6d4"
		}

		.fad.fa-dollar-sign:after {
			content: "\10f155"
		}

		.fad.fa-dolly:after {
			content: "\10f472"
		}

		.fad.fa-dolly-empty:after {
			content: "\10f473"
		}

		.fad.fa-dolly-flatbed:after {
			content: "\10f474"
		}

		.fad.fa-dolly-flatbed-alt:after {
			content: "\10f475"
		}

		.fad.fa-dolly-flatbed-empty:after {
			content: "\10f476"
		}

		.fad.fa-donate:after {
			content: "\10f4b9"
		}

		.fad.fa-door-closed:after {
			content: "\10f52a"
		}

		.fad.fa-door-open:after {
			content: "\10f52b"
		}

		.fad.fa-dot-circle:after {
			content: "\10f192"
		}

		.fad.fa-dove:after {
			content: "\10f4ba"
		}

		.fad.fa-download:after {
			content: "\10f019"
		}

		.fad.fa-drafting-compass:after {
			content: "\10f568"
		}

		.fad.fa-dragon:after {
			content: "\10f6d5"
		}

		.fad.fa-draw-circle:after {
			content: "\10f5ed"
		}

		.fad.fa-draw-polygon:after {
			content: "\10f5ee"
		}

		.fad.fa-draw-square:after {
			content: "\10f5ef"
		}

		.fad.fa-dreidel:after {
			content: "\10f792"
		}

		.fad.fa-drone:after {
			content: "\10f85f"
		}

		.fad.fa-drone-alt:after {
			content: "\10f860"
		}

		.fad.fa-drum:after {
			content: "\10f569"
		}

		.fad.fa-drum-steelpan:after {
			content: "\10f56a"
		}

		.fad.fa-drumstick:after {
			content: "\10f6d6"
		}

		.fad.fa-drumstick-bite:after {
			content: "\10f6d7"
		}

		.fad.fa-dryer:after {
			content: "\10f861"
		}

		.fad.fa-dryer-alt:after {
			content: "\10f862"
		}

		.fad.fa-duck:after {
			content: "\10f6d8"
		}

		.fad.fa-dumbbell:after {
			content: "\10f44b"
		}

		.fad.fa-dumpster:after {
			content: "\10f793"
		}

		.fad.fa-dumpster-fire:after {
			content: "\10f794"
		}

		.fad.fa-dungeon:after {
			content: "\10f6d9"
		}

		.fad.fa-ear:after {
			content: "\10f5f0"
		}

		.fad.fa-ear-muffs:after {
			content: "\10f795"
		}

		.fad.fa-eclipse:after {
			content: "\10f749"
		}

		.fad.fa-eclipse-alt:after {
			content: "\10f74a"
		}

		.fad.fa-edit:after {
			content: "\10f044"
		}

		.fad.fa-egg:after {
			content: "\10f7fb"
		}

		.fad.fa-egg-fried:after {
			content: "\10f7fc"
		}

		.fad.fa-eject:after {
			content: "\10f052"
		}

		.fad.fa-elephant:after {
			content: "\10f6da"
		}

		.fad.fa-ellipsis-h:after {
			content: "\10f141"
		}

		.fad.fa-ellipsis-h-alt:after {
			content: "\10f39b"
		}

		.fad.fa-ellipsis-v:after {
			content: "\10f142"
		}

		.fad.fa-ellipsis-v-alt:after {
			content: "\10f39c"
		}

		.fad.fa-empty-set:after {
			content: "\10f656"
		}

		.fad.fa-engine-warning:after {
			content: "\10f5f2"
		}

		.fad.fa-envelope:after {
			content: "\10f0e0"
		}

		.fad.fa-envelope-open:after {
			content: "\10f2b6"
		}

		.fad.fa-envelope-open-dollar:after {
			content: "\10f657"
		}

		.fad.fa-envelope-open-text:after {
			content: "\10f658"
		}

		.fad.fa-envelope-square:after {
			content: "\10f199"
		}

		.fad.fa-equals:after {
			content: "\10f52c"
		}

		.fad.fa-eraser:after {
			content: "\10f12d"
		}

		.fad.fa-ethernet:after {
			content: "\10f796"
		}

		.fad.fa-euro-sign:after {
			content: "\10f153"
		}

		.fad.fa-exchange:after {
			content: "\10f0ec"
		}

		.fad.fa-exchange-alt:after {
			content: "\10f362"
		}

		.fad.fa-exclamation:after {
			content: "\10f12a"
		}

		.fad.fa-exclamation-circle:after {
			content: "\10f06a"
		}

		.fad.fa-exclamation-square:after {
			content: "\10f321"
		}

		.fad.fa-exclamation-triangle:after {
			content: "\10f071"
		}

		.fad.fa-expand:after {
			content: "\10f065"
		}

		.fad.fa-expand-alt:after {
			content: "\10f424"
		}

		.fad.fa-expand-arrows:after {
			content: "\10f31d"
		}

		.fad.fa-expand-arrows-alt:after {
			content: "\10f31e"
		}

		.fad.fa-expand-wide:after {
			content: "\10f320"
		}

		.fad.fa-external-link:after {
			content: "\10f08e"
		}

		.fad.fa-external-link-alt:after {
			content: "\10f35d"
		}

		.fad.fa-external-link-square:after {
			content: "\10f14c"
		}

		.fad.fa-external-link-square-alt:after {
			content: "\10f360"
		}

		.fad.fa-eye:after {
			content: "\10f06e"
		}

		.fad.fa-eye-dropper:after {
			content: "\10f1fb"
		}

		.fad.fa-eye-evil:after {
			content: "\10f6db"
		}

		.fad.fa-eye-slash:after {
			content: "\10f070"
		}

		.fad.fa-fan:after {
			content: "\10f863"
		}

		.fad.fa-fan-table:after {
			content: "\10f904"
		}

		.fad.fa-farm:after {
			content: "\10f864"
		}

		.fad.fa-fast-backward:after {
			content: "\10f049"
		}

		.fad.fa-fast-forward:after {
			content: "\10f050"
		}

		.fad.fa-faucet:after {
			content: "\10f905"
		}

		.fad.fa-faucet-drip:after {
			content: "\10f906"
		}

		.fad.fa-fax:after {
			content: "\10f1ac"
		}

		.fad.fa-feather:after {
			content: "\10f52d"
		}

		.fad.fa-feather-alt:after {
			content: "\10f56b"
		}

		.fad.fa-female:after {
			content: "\10f182"
		}

		.fad.fa-field-hockey:after {
			content: "\10f44c"
		}

		.fad.fa-fighter-jet:after {
			content: "\10f0fb"
		}

		.fad.fa-file:after {
			content: "\10f15b"
		}

		.fad.fa-file-alt:after {
			content: "\10f15c"
		}

		.fad.fa-file-archive:after {
			content: "\10f1c6"
		}

		.fad.fa-file-audio:after {
			content: "\10f1c7"
		}

		.fad.fa-file-certificate:after {
			content: "\10f5f3"
		}

		.fad.fa-file-chart-line:after {
			content: "\10f659"
		}

		.fad.fa-file-chart-pie:after {
			content: "\10f65a"
		}

		.fad.fa-file-check:after {
			content: "\10f316"
		}

		.fad.fa-file-code:after {
			content: "\10f1c9"
		}

		.fad.fa-file-contract:after {
			content: "\10f56c"
		}

		.fad.fa-file-csv:after {
			content: "\10f6dd"
		}

		.fad.fa-file-download:after {
			content: "\10f56d"
		}

		.fad.fa-file-edit:after {
			content: "\10f31c"
		}

		.fad.fa-file-excel:after {
			content: "\10f1c3"
		}

		.fad.fa-file-exclamation:after {
			content: "\10f31a"
		}

		.fad.fa-file-export:after {
			content: "\10f56e"
		}

		.fad.fa-file-image:after {
			content: "\10f1c5"
		}

		.fad.fa-file-import:after {
			content: "\10f56f"
		}

		.fad.fa-file-invoice:after {
			content: "\10f570"
		}

		.fad.fa-file-invoice-dollar:after {
			content: "\10f571"
		}

		.fad.fa-file-medical:after {
			content: "\10f477"
		}

		.fad.fa-file-medical-alt:after {
			content: "\10f478"
		}

		.fad.fa-file-minus:after {
			content: "\10f318"
		}

		.fad.fa-file-music:after {
			content: "\10f8b6"
		}

		.fad.fa-file-pdf:after {
			content: "\10f1c1"
		}

		.fad.fa-file-plus:after {
			content: "\10f319"
		}

		.fad.fa-file-powerpoint:after {
			content: "\10f1c4"
		}

		.fad.fa-file-prescription:after {
			content: "\10f572"
		}

		.fad.fa-file-search:after {
			content: "\10f865"
		}

		.fad.fa-file-signature:after {
			content: "\10f573"
		}

		.fad.fa-file-spreadsheet:after {
			content: "\10f65b"
		}

		.fad.fa-file-times:after {
			content: "\10f317"
		}

		.fad.fa-file-upload:after {
			content: "\10f574"
		}

		.fad.fa-file-user:after {
			content: "\10f65c"
		}

		.fad.fa-file-video:after {
			content: "\10f1c8"
		}

		.fad.fa-file-word:after {
			content: "\10f1c2"
		}

		.fad.fa-files-medical:after {
			content: "\10f7fd"
		}

		.fad.fa-fill:after {
			content: "\10f575"
		}

		.fad.fa-fill-drip:after {
			content: "\10f576"
		}

		.fad.fa-film:after {
			content: "\10f008"
		}

		.fad.fa-film-alt:after {
			content: "\10f3a0"
		}

		.fad.fa-film-canister:after {
			content: "\10f8b7"
		}

		.fad.fa-filter:after {
			content: "\10f0b0"
		}

		.fad.fa-fingerprint:after {
			content: "\10f577"
		}

		.fad.fa-fire:after {
			content: "\10f06d"
		}

		.fad.fa-fire-alt:after {
			content: "\10f7e4"
		}

		.fad.fa-fire-extinguisher:after {
			content: "\10f134"
		}

		.fad.fa-fire-smoke:after {
			content: "\10f74b"
		}

		.fad.fa-fireplace:after {
			content: "\10f79a"
		}

		.fad.fa-first-aid:after {
			content: "\10f479"
		}

		.fad.fa-fish:after {
			content: "\10f578"
		}

		.fad.fa-fish-cooked:after {
			content: "\10f7fe"
		}

		.fad.fa-fist-raised:after {
			content: "\10f6de"
		}

		.fad.fa-flag:after {
			content: "\10f024"
		}

		.fad.fa-flag-alt:after {
			content: "\10f74c"
		}

		.fad.fa-flag-checkered:after {
			content: "\10f11e"
		}

		.fad.fa-flag-usa:after {
			content: "\10f74d"
		}

		.fad.fa-flame:after {
			content: "\10f6df"
		}

		.fad.fa-flashlight:after {
			content: "\10f8b8"
		}

		.fad.fa-flask:after {
			content: "\10f0c3"
		}

		.fad.fa-flask-poison:after {
			content: "\10f6e0"
		}

		.fad.fa-flask-potion:after {
			content: "\10f6e1"
		}

		.fad.fa-flower:after {
			content: "\10f7ff"
		}

		.fad.fa-flower-daffodil:after {
			content: "\10f800"
		}

		.fad.fa-flower-tulip:after {
			content: "\10f801"
		}

		.fad.fa-flushed:after {
			content: "\10f579"
		}

		.fad.fa-flute:after {
			content: "\10f8b9"
		}

		.fad.fa-flux-capacitor:after {
			content: "\10f8ba"
		}

		.fad.fa-fog:after {
			content: "\10f74e"
		}

		.fad.fa-folder:after {
			content: "\10f07b"
		}

		.fad.fa-folder-download:after {
			content: "\10f953"
		}

		.fad.fa-folder-minus:after {
			content: "\10f65d"
		}

		.fad.fa-folder-open:after {
			content: "\10f07c"
		}

		.fad.fa-folder-plus:after {
			content: "\10f65e"
		}

		.fad.fa-folder-times:after {
			content: "\10f65f"
		}

		.fad.fa-folder-tree:after {
			content: "\10f802"
		}

		.fad.fa-folder-upload:after {
			content: "\10f954"
		}

		.fad.fa-folders:after {
			content: "\10f660"
		}

		.fad.fa-font:after {
			content: "\10f031"
		}

		.fad.fa-font-awesome-logo-full:after {
			content: "\10f4e6"
		}

		.fad.fa-font-case:after {
			content: "\10f866"
		}

		.fad.fa-football-ball:after {
			content: "\10f44e"
		}

		.fad.fa-football-helmet:after {
			content: "\10f44f"
		}

		.fad.fa-forklift:after {
			content: "\10f47a"
		}

		.fad.fa-forward:after {
			content: "\10f04e"
		}

		.fad.fa-fragile:after {
			content: "\10f4bb"
		}

		.fad.fa-french-fries:after {
			content: "\10f803"
		}

		.fad.fa-frog:after {
			content: "\10f52e"
		}

		.fad.fa-frosty-head:after {
			content: "\10f79b"
		}

		.fad.fa-frown:after {
			content: "\10f119"
		}

		.fad.fa-frown-open:after {
			content: "\10f57a"
		}

		.fad.fa-function:after {
			content: "\10f661"
		}

		.fad.fa-funnel-dollar:after {
			content: "\10f662"
		}

		.fad.fa-futbol:after {
			content: "\10f1e3"
		}

		.fad.fa-galaxy:after {
			content: "\10f908"
		}

		.fad.fa-game-board:after {
			content: "\10f867"
		}

		.fad.fa-game-board-alt:after {
			content: "\10f868"
		}

		.fad.fa-game-console-handheld:after {
			content: "\10f8bb"
		}

		.fad.fa-gamepad:after {
			content: "\10f11b"
		}

		.fad.fa-gamepad-alt:after {
			content: "\10f8bc"
		}

		.fad.fa-garage:after {
			content: "\10f909"
		}

		.fad.fa-garage-car:after {
			content: "\10f90a"
		}

		.fad.fa-garage-open:after {
			content: "\10f90b"
		}

		.fad.fa-gas-pump:after {
			content: "\10f52f"
		}

		.fad.fa-gas-pump-slash:after {
			content: "\10f5f4"
		}

		.fad.fa-gavel:after {
			content: "\10f0e3"
		}

		.fad.fa-gem:after {
			content: "\10f3a5"
		}

		.fad.fa-genderless:after {
			content: "\10f22d"
		}

		.fad.fa-ghost:after {
			content: "\10f6e2"
		}

		.fad.fa-gift:after {
			content: "\10f06b"
		}

		.fad.fa-gift-card:after {
			content: "\10f663"
		}

		.fad.fa-gifts:after {
			content: "\10f79c"
		}

		.fad.fa-gingerbread-man:after {
			content: "\10f79d"
		}

		.fad.fa-glass:after {
			content: "\10f804"
		}

		.fad.fa-glass-champagne:after {
			content: "\10f79e"
		}

		.fad.fa-glass-cheers:after {
			content: "\10f79f"
		}

		.fad.fa-glass-citrus:after {
			content: "\10f869"
		}

		.fad.fa-glass-martini:after {
			content: "\10f000"
		}

		.fad.fa-glass-martini-alt:after {
			content: "\10f57b"
		}

		.fad.fa-glass-whiskey:after {
			content: "\10f7a0"
		}

		.fad.fa-glass-whiskey-rocks:after {
			content: "\10f7a1"
		}

		.fad.fa-glasses:after {
			content: "\10f530"
		}

		.fad.fa-glasses-alt:after {
			content: "\10f5f5"
		}

		.fad.fa-globe:after {
			content: "\10f0ac"
		}

		.fad.fa-globe-africa:after {
			content: "\10f57c"
		}

		.fad.fa-globe-americas:after {
			content: "\10f57d"
		}

		.fad.fa-globe-asia:after {
			content: "\10f57e"
		}

		.fad.fa-globe-europe:after {
			content: "\10f7a2"
		}

		.fad.fa-globe-snow:after {
			content: "\10f7a3"
		}

		.fad.fa-globe-stand:after {
			content: "\10f5f6"
		}

		.fad.fa-golf-ball:after {
			content: "\10f450"
		}

		.fad.fa-golf-club:after {
			content: "\10f451"
		}

		.fad.fa-gopuram:after {
			content: "\10f664"
		}

		.fad.fa-graduation-cap:after {
			content: "\10f19d"
		}

		.fad.fa-gramophone:after {
			content: "\10f8bd"
		}

		.fad.fa-greater-than:after {
			content: "\10f531"
		}

		.fad.fa-greater-than-equal:after {
			content: "\10f532"
		}

		.fad.fa-grimace:after {
			content: "\10f57f"
		}

		.fad.fa-grin:after {
			content: "\10f580"
		}

		.fad.fa-grin-alt:after {
			content: "\10f581"
		}

		.fad.fa-grin-beam:after {
			content: "\10f582"
		}

		.fad.fa-grin-beam-sweat:after {
			content: "\10f583"
		}

		.fad.fa-grin-hearts:after {
			content: "\10f584"
		}

		.fad.fa-grin-squint:after {
			content: "\10f585"
		}

		.fad.fa-grin-squint-tears:after {
			content: "\10f586"
		}

		.fad.fa-grin-stars:after {
			content: "\10f587"
		}

		.fad.fa-grin-tears:after {
			content: "\10f588"
		}

		.fad.fa-grin-tongue:after {
			content: "\10f589"
		}

		.fad.fa-grin-tongue-squint:after {
			content: "\10f58a"
		}

		.fad.fa-grin-tongue-wink:after {
			content: "\10f58b"
		}

		.fad.fa-grin-wink:after {
			content: "\10f58c"
		}

		.fad.fa-grip-horizontal:after {
			content: "\10f58d"
		}

		.fad.fa-grip-lines:after {
			content: "\10f7a4"
		}

		.fad.fa-grip-lines-vertical:after {
			content: "\10f7a5"
		}

		.fad.fa-grip-vertical:after {
			content: "\10f58e"
		}

		.fad.fa-guitar:after {
			content: "\10f7a6"
		}

		.fad.fa-guitar-electric:after {
			content: "\10f8be"
		}

		.fad.fa-guitars:after {
			content: "\10f8bf"
		}

		.fad.fa-h-square:after {
			content: "\10f0fd"
		}

		.fad.fa-h1:after {
			content: "\10f313"
		}

		.fad.fa-h2:after {
			content: "\10f314"
		}

		.fad.fa-h3:after {
			content: "\10f315"
		}

		.fad.fa-h4:after {
			content: "\10f86a"
		}

		.fad.fa-hamburger:after {
			content: "\10f805"
		}

		.fad.fa-hammer:after {
			content: "\10f6e3"
		}

		.fad.fa-hammer-war:after {
			content: "\10f6e4"
		}

		.fad.fa-hamsa:after {
			content: "\10f665"
		}

		.fad.fa-hand-heart:after {
			content: "\10f4bc"
		}

		.fad.fa-hand-holding:after {
			content: "\10f4bd"
		}

		.fad.fa-hand-holding-box:after {
			content: "\10f47b"
		}

		.fad.fa-hand-holding-heart:after {
			content: "\10f4be"
		}

		.fad.fa-hand-holding-magic:after {
			content: "\10f6e5"
		}

		.fad.fa-hand-holding-medical:after {
			content: "\10f95c"
		}

		.fad.fa-hand-holding-seedling:after {
			content: "\10f4bf"
		}

		.fad.fa-hand-holding-usd:after {
			content: "\10f4c0"
		}

		.fad.fa-hand-holding-water:after {
			content: "\10f4c1"
		}

		.fad.fa-hand-lizard:after {
			content: "\10f258"
		}

		.fad.fa-hand-middle-finger:after {
			content: "\10f806"
		}

		.fad.fa-hand-paper:after {
			content: "\10f256"
		}

		.fad.fa-hand-peace:after {
			content: "\10f25b"
		}

		.fad.fa-hand-point-down:after {
			content: "\10f0a7"
		}

		.fad.fa-hand-point-left:after {
			content: "\10f0a5"
		}

		.fad.fa-hand-point-right:after {
			content: "\10f0a4"
		}

		.fad.fa-hand-point-up:after {
			content: "\10f0a6"
		}

		.fad.fa-hand-pointer:after {
			content: "\10f25a"
		}

		.fad.fa-hand-receiving:after {
			content: "\10f47c"
		}

		.fad.fa-hand-rock:after {
			content: "\10f255"
		}

		.fad.fa-hand-scissors:after {
			content: "\10f257"
		}

		.fad.fa-hand-sparkles:after {
			content: "\10f95d"
		}

		.fad.fa-hand-spock:after {
			content: "\10f259"
		}

		.fad.fa-hands:after {
			content: "\10f4c2"
		}

		.fad.fa-hands-heart:after {
			content: "\10f4c3"
		}

		.fad.fa-hands-helping:after {
			content: "\10f4c4"
		}

		.fad.fa-hands-usd:after {
			content: "\10f4c5"
		}

		.fad.fa-hands-wash:after {
			content: "\10f95e"
		}

		.fad.fa-handshake:after {
			content: "\10f2b5"
		}

		.fad.fa-handshake-alt:after {
			content: "\10f4c6"
		}

		.fad.fa-handshake-alt-slash:after {
			content: "\10f95f"
		}

		.fad.fa-handshake-slash:after {
			content: "\10f960"
		}

		.fad.fa-hanukiah:after {
			content: "\10f6e6"
		}

		.fad.fa-hard-hat:after {
			content: "\10f807"
		}

		.fad.fa-hashtag:after {
			content: "\10f292"
		}

		.fad.fa-hat-chef:after {
			content: "\10f86b"
		}

		.fad.fa-hat-cowboy:after {
			content: "\10f8c0"
		}

		.fad.fa-hat-cowboy-side:after {
			content: "\10f8c1"
		}

		.fad.fa-hat-santa:after {
			content: "\10f7a7"
		}

		.fad.fa-hat-winter:after {
			content: "\10f7a8"
		}

		.fad.fa-hat-witch:after {
			content: "\10f6e7"
		}

		.fad.fa-hat-wizard:after {
			content: "\10f6e8"
		}

		.fad.fa-hdd:after {
			content: "\10f0a0"
		}

		.fad.fa-head-side:after {
			content: "\10f6e9"
		}

		.fad.fa-head-side-brain:after {
			content: "\10f808"
		}

		.fad.fa-head-side-cough:after {
			content: "\10f961"
		}

		.fad.fa-head-side-cough-slash:after {
			content: "\10f962"
		}

		.fad.fa-head-side-headphones:after {
			content: "\10f8c2"
		}

		.fad.fa-head-side-mask:after {
			content: "\10f963"
		}

		.fad.fa-head-side-medical:after {
			content: "\10f809"
		}

		.fad.fa-head-side-virus:after {
			content: "\10f964"
		}

		.fad.fa-head-vr:after {
			content: "\10f6ea"
		}

		.fad.fa-heading:after {
			content: "\10f1dc"
		}

		.fad.fa-headphones:after {
			content: "\10f025"
		}

		.fad.fa-headphones-alt:after {
			content: "\10f58f"
		}

		.fad.fa-headset:after {
			content: "\10f590"
		}

		.fad.fa-heart:after {
			content: "\10f004"
		}

		.fad.fa-heart-broken:after {
			content: "\10f7a9"
		}

		.fad.fa-heart-circle:after {
			content: "\10f4c7"
		}

		.fad.fa-heart-rate:after {
			content: "\10f5f8"
		}

		.fad.fa-heart-square:after {
			content: "\10f4c8"
		}

		.fad.fa-heartbeat:after {
			content: "\10f21e"
		}

		.fad.fa-heat:after {
			content: "\10f90c"
		}

		.fad.fa-helicopter:after {
			content: "\10f533"
		}

		.fad.fa-helmet-battle:after {
			content: "\10f6eb"
		}

		.fad.fa-hexagon:after {
			content: "\10f312"
		}

		.fad.fa-highlighter:after {
			content: "\10f591"
		}

		.fad.fa-hiking:after {
			content: "\10f6ec"
		}

		.fad.fa-hippo:after {
			content: "\10f6ed"
		}

		.fad.fa-history:after {
			content: "\10f1da"
		}

		.fad.fa-hockey-mask:after {
			content: "\10f6ee"
		}

		.fad.fa-hockey-puck:after {
			content: "\10f453"
		}

		.fad.fa-hockey-sticks:after {
			content: "\10f454"
		}

		.fad.fa-holly-berry:after {
			content: "\10f7aa"
		}

		.fad.fa-home:after {
			content: "\10f015"
		}

		.fad.fa-home-alt:after {
			content: "\10f80a"
		}

		.fad.fa-home-heart:after {
			content: "\10f4c9"
		}

		.fad.fa-home-lg:after {
			content: "\10f80b"
		}

		.fad.fa-home-lg-alt:after {
			content: "\10f80c"
		}

		.fad.fa-hood-cloak:after {
			content: "\10f6ef"
		}

		.fad.fa-horizontal-rule:after {
			content: "\10f86c"
		}

		.fad.fa-horse:after {
			content: "\10f6f0"
		}

		.fad.fa-horse-head:after {
			content: "\10f7ab"
		}

		.fad.fa-horse-saddle:after {
			content: "\10f8c3"
		}

		.fad.fa-hospital:after {
			content: "\10f0f8"
		}

		.fad.fa-hospital-alt:after {
			content: "\10f47d"
		}

		.fad.fa-hospital-symbol:after {
			content: "\10f47e"
		}

		.fad.fa-hospital-user:after {
			content: "\10f80d"
		}

		.fad.fa-hospitals:after {
			content: "\10f80e"
		}

		.fad.fa-hot-tub:after {
			content: "\10f593"
		}

		.fad.fa-hotdog:after {
			content: "\10f80f"
		}

		.fad.fa-hotel:after {
			content: "\10f594"
		}

		.fad.fa-hourglass:after {
			content: "\10f254"
		}

		.fad.fa-hourglass-end:after {
			content: "\10f253"
		}

		.fad.fa-hourglass-half:after {
			content: "\10f252"
		}

		.fad.fa-hourglass-start:after {
			content: "\10f251"
		}

		.fad.fa-house:after {
			content: "\10f90d"
		}

		.fad.fa-house-damage:after {
			content: "\10f6f1"
		}

		.fad.fa-house-day:after {
			content: "\10f90e"
		}

		.fad.fa-house-flood:after {
			content: "\10f74f"
		}

		.fad.fa-house-leave:after {
			content: "\10f90f"
		}

		.fad.fa-house-night:after {
			content: "\10f910"
		}

		.fad.fa-house-return:after {
			content: "\10f911"
		}

		.fad.fa-house-signal:after {
			content: "\10f912"
		}

		.fad.fa-house-user:after {
			content: "\10f965"
		}

		.fad.fa-hryvnia:after {
			content: "\10f6f2"
		}

		.fad.fa-humidity:after {
			content: "\10f750"
		}

		.fad.fa-hurricane:after {
			content: "\10f751"
		}

		.fad.fa-i-cursor:after {
			content: "\10f246"
		}

		.fad.fa-ice-cream:after {
			content: "\10f810"
		}

		.fad.fa-ice-skate:after {
			content: "\10f7ac"
		}

		.fad.fa-icicles:after {
			content: "\10f7ad"
		}

		.fad.fa-icons:after {
			content: "\10f86d"
		}

		.fad.fa-icons-alt:after {
			content: "\10f86e"
		}

		.fad.fa-id-badge:after {
			content: "\10f2c1"
		}

		.fad.fa-id-card:after {
			content: "\10f2c2"
		}

		.fad.fa-id-card-alt:after {
			content: "\10f47f"
		}

		.fad.fa-igloo:after {
			content: "\10f7ae"
		}

		.fad.fa-image:after {
			content: "\10f03e"
		}

		.fad.fa-image-polaroid:after {
			content: "\10f8c4"
		}

		.fad.fa-images:after {
			content: "\10f302"
		}

		.fad.fa-inbox:after {
			content: "\10f01c"
		}

		.fad.fa-inbox-in:after {
			content: "\10f310"
		}

		.fad.fa-inbox-out:after {
			content: "\10f311"
		}

		.fad.fa-indent:after {
			content: "\10f03c"
		}

		.fad.fa-industry:after {
			content: "\10f275"
		}

		.fad.fa-industry-alt:after {
			content: "\10f3b3"
		}

		.fad.fa-infinity:after {
			content: "\10f534"
		}

		.fad.fa-info:after {
			content: "\10f129"
		}

		.fad.fa-info-circle:after {
			content: "\10f05a"
		}

		.fad.fa-info-square:after {
			content: "\10f30f"
		}

		.fad.fa-inhaler:after {
			content: "\10f5f9"
		}

		.fad.fa-integral:after {
			content: "\10f667"
		}

		.fad.fa-intersection:after {
			content: "\10f668"
		}

		.fad.fa-inventory:after {
			content: "\10f480"
		}

		.fad.fa-island-tropical:after {
			content: "\10f811"
		}

		.fad.fa-italic:after {
			content: "\10f033"
		}

		.fad.fa-jack-o-lantern:after {
			content: "\10f30e"
		}

		.fad.fa-jedi:after {
			content: "\10f669"
		}

		.fad.fa-joint:after {
			content: "\10f595"
		}

		.fad.fa-journal-whills:after {
			content: "\10f66a"
		}

		.fad.fa-joystick:after {
			content: "\10f8c5"
		}

		.fad.fa-jug:after {
			content: "\10f8c6"
		}

		.fad.fa-kaaba:after {
			content: "\10f66b"
		}

		.fad.fa-kazoo:after {
			content: "\10f8c7"
		}

		.fad.fa-kerning:after {
			content: "\10f86f"
		}

		.fad.fa-key:after {
			content: "\10f084"
		}

		.fad.fa-key-skeleton:after {
			content: "\10f6f3"
		}

		.fad.fa-keyboard:after {
			content: "\10f11c"
		}

		.fad.fa-keynote:after {
			content: "\10f66c"
		}

		.fad.fa-khanda:after {
			content: "\10f66d"
		}

		.fad.fa-kidneys:after {
			content: "\10f5fb"
		}

		.fad.fa-kiss:after {
			content: "\10f596"
		}

		.fad.fa-kiss-beam:after {
			content: "\10f597"
		}

		.fad.fa-kiss-wink-heart:after {
			content: "\10f598"
		}

		.fad.fa-kite:after {
			content: "\10f6f4"
		}

		.fad.fa-kiwi-bird:after {
			content: "\10f535"
		}

		.fad.fa-knife-kitchen:after {
			content: "\10f6f5"
		}

		.fad.fa-lambda:after {
			content: "\10f66e"
		}

		.fad.fa-lamp:after {
			content: "\10f4ca"
		}

		.fad.fa-lamp-desk:after {
			content: "\10f914"
		}

		.fad.fa-lamp-floor:after {
			content: "\10f915"
		}

		.fad.fa-landmark:after {
			content: "\10f66f"
		}

		.fad.fa-landmark-alt:after {
			content: "\10f752"
		}

		.fad.fa-language:after {
			content: "\10f1ab"
		}

		.fad.fa-laptop:after {
			content: "\10f109"
		}

		.fad.fa-laptop-code:after {
			content: "\10f5fc"
		}

		.fad.fa-laptop-house:after {
			content: "\10f966"
		}

		.fad.fa-laptop-medical:after {
			content: "\10f812"
		}

		.fad.fa-lasso:after {
			content: "\10f8c8"
		}

		.fad.fa-laugh:after {
			content: "\10f599"
		}

		.fad.fa-laugh-beam:after {
			content: "\10f59a"
		}

		.fad.fa-laugh-squint:after {
			content: "\10f59b"
		}

		.fad.fa-laugh-wink:after {
			content: "\10f59c"
		}

		.fad.fa-layer-group:after {
			content: "\10f5fd"
		}

		.fad.fa-layer-minus:after {
			content: "\10f5fe"
		}

		.fad.fa-layer-plus:after {
			content: "\10f5ff"
		}

		.fad.fa-leaf:after {
			content: "\10f06c"
		}

		.fad.fa-leaf-heart:after {
			content: "\10f4cb"
		}

		.fad.fa-leaf-maple:after {
			content: "\10f6f6"
		}

		.fad.fa-leaf-oak:after {
			content: "\10f6f7"
		}

		.fad.fa-lemon:after {
			content: "\10f094"
		}

		.fad.fa-less-than:after {
			content: "\10f536"
		}

		.fad.fa-less-than-equal:after {
			content: "\10f537"
		}

		.fad.fa-level-down:after {
			content: "\10f149"
		}

		.fad.fa-level-down-alt:after {
			content: "\10f3be"
		}

		.fad.fa-level-up:after {
			content: "\10f148"
		}

		.fad.fa-level-up-alt:after {
			content: "\10f3bf"
		}

		.fad.fa-life-ring:after {
			content: "\10f1cd"
		}

		.fad.fa-light-ceiling:after {
			content: "\10f916"
		}

		.fad.fa-light-switch:after {
			content: "\10f917"
		}

		.fad.fa-light-switch-off:after {
			content: "\10f918"
		}

		.fad.fa-light-switch-on:after {
			content: "\10f919"
		}

		.fad.fa-lightbulb:after {
			content: "\10f0eb"
		}

		.fad.fa-lightbulb-dollar:after {
			content: "\10f670"
		}

		.fad.fa-lightbulb-exclamation:after {
			content: "\10f671"
		}

		.fad.fa-lightbulb-on:after {
			content: "\10f672"
		}

		.fad.fa-lightbulb-slash:after {
			content: "\10f673"
		}

		.fad.fa-lights-holiday:after {
			content: "\10f7b2"
		}

		.fad.fa-line-columns:after {
			content: "\10f870"
		}

		.fad.fa-line-height:after {
			content: "\10f871"
		}

		.fad.fa-link:after {
			content: "\10f0c1"
		}

		.fad.fa-lips:after {
			content: "\10f600"
		}

		.fad.fa-lira-sign:after {
			content: "\10f195"
		}

		.fad.fa-list:after {
			content: "\10f03a"
		}

		.fad.fa-list-alt:after {
			content: "\10f022"
		}

		.fad.fa-list-music:after {
			content: "\10f8c9"
		}

		.fad.fa-list-ol:after {
			content: "\10f0cb"
		}

		.fad.fa-list-ul:after {
			content: "\10f0ca"
		}

		.fad.fa-location:after {
			content: "\10f601"
		}

		.fad.fa-location-arrow:after {
			content: "\10f124"
		}

		.fad.fa-location-circle:after {
			content: "\10f602"
		}

		.fad.fa-location-slash:after {
			content: "\10f603"
		}

		.fad.fa-lock:after {
			content: "\10f023"
		}

		.fad.fa-lock-alt:after {
			content: "\10f30d"
		}

		.fad.fa-lock-open:after {
			content: "\10f3c1"
		}

		.fad.fa-lock-open-alt:after {
			content: "\10f3c2"
		}

		.fad.fa-long-arrow-alt-down:after {
			content: "\10f309"
		}

		.fad.fa-long-arrow-alt-left:after {
			content: "\10f30a"
		}

		.fad.fa-long-arrow-alt-right:after {
			content: "\10f30b"
		}

		.fad.fa-long-arrow-alt-up:after {
			content: "\10f30c"
		}

		.fad.fa-long-arrow-down:after {
			content: "\10f175"
		}

		.fad.fa-long-arrow-left:after {
			content: "\10f177"
		}

		.fad.fa-long-arrow-right:after {
			content: "\10f178"
		}

		.fad.fa-long-arrow-up:after {
			content: "\10f176"
		}

		.fad.fa-loveseat:after {
			content: "\10f4cc"
		}

		.fad.fa-low-vision:after {
			content: "\10f2a8"
		}

		.fad.fa-luchador:after {
			content: "\10f455"
		}

		.fad.fa-luggage-cart:after {
			content: "\10f59d"
		}

		.fad.fa-lungs:after {
			content: "\10f604"
		}

		.fad.fa-lungs-virus:after {
			content: "\10f967"
		}

		.fad.fa-mace:after {
			content: "\10f6f8"
		}

		.fad.fa-magic:after {
			content: "\10f0d0"
		}

		.fad.fa-magnet:after {
			content: "\10f076"
		}

		.fad.fa-mail-bulk:after {
			content: "\10f674"
		}

		.fad.fa-mailbox:after {
			content: "\10f813"
		}

		.fad.fa-male:after {
			content: "\10f183"
		}

		.fad.fa-mandolin:after {
			content: "\10f6f9"
		}

		.fad.fa-map:after {
			content: "\10f279"
		}

		.fad.fa-map-marked:after {
			content: "\10f59f"
		}

		.fad.fa-map-marked-alt:after {
			content: "\10f5a0"
		}

		.fad.fa-map-marker:after {
			content: "\10f041"
		}

		.fad.fa-map-marker-alt:after {
			content: "\10f3c5"
		}

		.fad.fa-map-marker-alt-slash:after {
			content: "\10f605"
		}

		.fad.fa-map-marker-check:after {
			content: "\10f606"
		}

		.fad.fa-map-marker-edit:after {
			content: "\10f607"
		}

		.fad.fa-map-marker-exclamation:after {
			content: "\10f608"
		}

		.fad.fa-map-marker-minus:after {
			content: "\10f609"
		}

		.fad.fa-map-marker-plus:after {
			content: "\10f60a"
		}

		.fad.fa-map-marker-question:after {
			content: "\10f60b"
		}

		.fad.fa-map-marker-slash:after {
			content: "\10f60c"
		}

		.fad.fa-map-marker-smile:after {
			content: "\10f60d"
		}

		.fad.fa-map-marker-times:after {
			content: "\10f60e"
		}

		.fad.fa-map-pin:after {
			content: "\10f276"
		}

		.fad.fa-map-signs:after {
			content: "\10f277"
		}

		.fad.fa-marker:after {
			content: "\10f5a1"
		}

		.fad.fa-mars:after {
			content: "\10f222"
		}

		.fad.fa-mars-double:after {
			content: "\10f227"
		}

		.fad.fa-mars-stroke:after {
			content: "\10f229"
		}

		.fad.fa-mars-stroke-h:after {
			content: "\10f22b"
		}

		.fad.fa-mars-stroke-v:after {
			content: "\10f22a"
		}

		.fad.fa-mask:after {
			content: "\10f6fa"
		}

		.fad.fa-meat:after {
			content: "\10f814"
		}

		.fad.fa-medal:after {
			content: "\10f5a2"
		}

		.fad.fa-medkit:after {
			content: "\10f0fa"
		}

		.fad.fa-megaphone:after {
			content: "\10f675"
		}

		.fad.fa-meh:after {
			content: "\10f11a"
		}

		.fad.fa-meh-blank:after {
			content: "\10f5a4"
		}

		.fad.fa-meh-rolling-eyes:after {
			content: "\10f5a5"
		}

		.fad.fa-memory:after {
			content: "\10f538"
		}

		.fad.fa-menorah:after {
			content: "\10f676"
		}

		.fad.fa-mercury:after {
			content: "\10f223"
		}

		.fad.fa-meteor:after {
			content: "\10f753"
		}

		.fad.fa-microchip:after {
			content: "\10f2db"
		}

		.fad.fa-microphone:after {
			content: "\10f130"
		}

		.fad.fa-microphone-alt:after {
			content: "\10f3c9"
		}

		.fad.fa-microphone-alt-slash:after {
			content: "\10f539"
		}

		.fad.fa-microphone-slash:after {
			content: "\10f131"
		}

		.fad.fa-microphone-stand:after {
			content: "\10f8cb"
		}

		.fad.fa-microscope:after {
			content: "\10f610"
		}

		.fad.fa-microwave:after {
			content: "\10f91b"
		}

		.fad.fa-mind-share:after {
			content: "\10f677"
		}

		.fad.fa-minus:after {
			content: "\10f068"
		}

		.fad.fa-minus-circle:after {
			content: "\10f056"
		}

		.fad.fa-minus-hexagon:after {
			content: "\10f307"
		}

		.fad.fa-minus-octagon:after {
			content: "\10f308"
		}

		.fad.fa-minus-square:after {
			content: "\10f146"
		}

		.fad.fa-mistletoe:after {
			content: "\10f7b4"
		}

		.fad.fa-mitten:after {
			content: "\10f7b5"
		}

		.fad.fa-mobile:after {
			content: "\10f10b"
		}

		.fad.fa-mobile-alt:after {
			content: "\10f3cd"
		}

		.fad.fa-mobile-android:after {
			content: "\10f3ce"
		}

		.fad.fa-mobile-android-alt:after {
			content: "\10f3cf"
		}

		.fad.fa-money-bill:after {
			content: "\10f0d6"
		}

		.fad.fa-money-bill-alt:after {
			content: "\10f3d1"
		}

		.fad.fa-money-bill-wave:after {
			content: "\10f53a"
		}

		.fad.fa-money-bill-wave-alt:after {
			content: "\10f53b"
		}

		.fad.fa-money-check:after {
			content: "\10f53c"
		}

		.fad.fa-money-check-alt:after {
			content: "\10f53d"
		}

		.fad.fa-money-check-edit:after {
			content: "\10f872"
		}

		.fad.fa-money-check-edit-alt:after {
			content: "\10f873"
		}

		.fad.fa-monitor-heart-rate:after {
			content: "\10f611"
		}

		.fad.fa-monkey:after {
			content: "\10f6fb"
		}

		.fad.fa-monument:after {
			content: "\10f5a6"
		}

		.fad.fa-moon:after {
			content: "\10f186"
		}

		.fad.fa-moon-cloud:after {
			content: "\10f754"
		}

		.fad.fa-moon-stars:after {
			content: "\10f755"
		}

		.fad.fa-mortar-pestle:after {
			content: "\10f5a7"
		}

		.fad.fa-mosque:after {
			content: "\10f678"
		}

		.fad.fa-motorcycle:after {
			content: "\10f21c"
		}

		.fad.fa-mountain:after {
			content: "\10f6fc"
		}

		.fad.fa-mountains:after {
			content: "\10f6fd"
		}

		.fad.fa-mouse:after {
			content: "\10f8cc"
		}

		.fad.fa-mouse-alt:after {
			content: "\10f8cd"
		}

		.fad.fa-mouse-pointer:after {
			content: "\10f245"
		}

		.fad.fa-mp3-player:after {
			content: "\10f8ce"
		}

		.fad.fa-mug:after {
			content: "\10f874"
		}

		.fad.fa-mug-hot:after {
			content: "\10f7b6"
		}

		.fad.fa-mug-marshmallows:after {
			content: "\10f7b7"
		}

		.fad.fa-mug-tea:after {
			content: "\10f875"
		}

		.fad.fa-music:after {
			content: "\10f001"
		}

		.fad.fa-music-alt:after {
			content: "\10f8cf"
		}

		.fad.fa-music-alt-slash:after {
			content: "\10f8d0"
		}

		.fad.fa-music-slash:after {
			content: "\10f8d1"
		}

		.fad.fa-narwhal:after {
			content: "\10f6fe"
		}

		.fad.fa-network-wired:after {
			content: "\10f6ff"
		}

		.fad.fa-neuter:after {
			content: "\10f22c"
		}

		.fad.fa-newspaper:after {
			content: "\10f1ea"
		}

		.fad.fa-not-equal:after {
			content: "\10f53e"
		}

		.fad.fa-notes-medical:after {
			content: "\10f481"
		}

		.fad.fa-object-group:after {
			content: "\10f247"
		}

		.fad.fa-object-ungroup:after {
			content: "\10f248"
		}

		.fad.fa-octagon:after {
			content: "\10f306"
		}

		.fad.fa-oil-can:after {
			content: "\10f613"
		}

		.fad.fa-oil-temp:after {
			content: "\10f614"
		}

		.fad.fa-om:after {
			content: "\10f679"
		}

		.fad.fa-omega:after {
			content: "\10f67a"
		}

		.fad.fa-ornament:after {
			content: "\10f7b8"
		}

		.fad.fa-otter:after {
			content: "\10f700"
		}

		.fad.fa-outdent:after {
			content: "\10f03b"
		}

		.fad.fa-outlet:after {
			content: "\10f91c"
		}

		.fad.fa-oven:after {
			content: "\10f91d"
		}

		.fad.fa-overline:after {
			content: "\10f876"
		}

		.fad.fa-page-break:after {
			content: "\10f877"
		}

		.fad.fa-pager:after {
			content: "\10f815"
		}

		.fad.fa-paint-brush:after {
			content: "\10f1fc"
		}

		.fad.fa-paint-brush-alt:after {
			content: "\10f5a9"
		}

		.fad.fa-paint-roller:after {
			content: "\10f5aa"
		}

		.fad.fa-palette:after {
			content: "\10f53f"
		}

		.fad.fa-pallet:after {
			content: "\10f482"
		}

		.fad.fa-pallet-alt:after {
			content: "\10f483"
		}

		.fad.fa-paper-plane:after {
			content: "\10f1d8"
		}

		.fad.fa-paperclip:after {
			content: "\10f0c6"
		}

		.fad.fa-parachute-box:after {
			content: "\10f4cd"
		}

		.fad.fa-paragraph:after {
			content: "\10f1dd"
		}

		.fad.fa-paragraph-rtl:after {
			content: "\10f878"
		}

		.fad.fa-parking:after {
			content: "\10f540"
		}

		.fad.fa-parking-circle:after {
			content: "\10f615"
		}

		.fad.fa-parking-circle-slash:after {
			content: "\10f616"
		}

		.fad.fa-parking-slash:after {
			content: "\10f617"
		}

		.fad.fa-passport:after {
			content: "\10f5ab"
		}

		.fad.fa-pastafarianism:after {
			content: "\10f67b"
		}

		.fad.fa-paste:after {
			content: "\10f0ea"
		}

		.fad.fa-pause:after {
			content: "\10f04c"
		}

		.fad.fa-pause-circle:after {
			content: "\10f28b"
		}

		.fad.fa-paw:after {
			content: "\10f1b0"
		}

		.fad.fa-paw-alt:after {
			content: "\10f701"
		}

		.fad.fa-paw-claws:after {
			content: "\10f702"
		}

		.fad.fa-peace:after {
			content: "\10f67c"
		}

		.fad.fa-pegasus:after {
			content: "\10f703"
		}

		.fad.fa-pen:after {
			content: "\10f304"
		}

		.fad.fa-pen-alt:after {
			content: "\10f305"
		}

		.fad.fa-pen-fancy:after {
			content: "\10f5ac"
		}

		.fad.fa-pen-nib:after {
			content: "\10f5ad"
		}

		.fad.fa-pen-square:after {
			content: "\10f14b"
		}

		.fad.fa-pencil:after {
			content: "\10f040"
		}

		.fad.fa-pencil-alt:after {
			content: "\10f303"
		}

		.fad.fa-pencil-paintbrush:after {
			content: "\10f618"
		}

		.fad.fa-pencil-ruler:after {
			content: "\10f5ae"
		}

		.fad.fa-pennant:after {
			content: "\10f456"
		}

		.fad.fa-people-arrows:after {
			content: "\10f968"
		}

		.fad.fa-people-carry:after {
			content: "\10f4ce"
		}

		.fad.fa-pepper-hot:after {
			content: "\10f816"
		}

		.fad.fa-percent:after {
			content: "\10f295"
		}

		.fad.fa-percentage:after {
			content: "\10f541"
		}

		.fad.fa-person-booth:after {
			content: "\10f756"
		}

		.fad.fa-person-carry:after {
			content: "\10f4cf"
		}

		.fad.fa-person-dolly:after {
			content: "\10f4d0"
		}

		.fad.fa-person-dolly-empty:after {
			content: "\10f4d1"
		}

		.fad.fa-person-sign:after {
			content: "\10f757"
		}

		.fad.fa-phone:after {
			content: "\10f095"
		}

		.fad.fa-phone-alt:after {
			content: "\10f879"
		}

		.fad.fa-phone-laptop:after {
			content: "\10f87a"
		}

		.fad.fa-phone-office:after {
			content: "\10f67d"
		}

		.fad.fa-phone-plus:after {
			content: "\10f4d2"
		}

		.fad.fa-phone-rotary:after {
			content: "\10f8d3"
		}

		.fad.fa-phone-slash:after {
			content: "\10f3dd"
		}

		.fad.fa-phone-square:after {
			content: "\10f098"
		}

		.fad.fa-phone-square-alt:after {
			content: "\10f87b"
		}

		.fad.fa-phone-volume:after {
			content: "\10f2a0"
		}

		.fad.fa-photo-video:after {
			content: "\10f87c"
		}

		.fad.fa-pi:after {
			content: "\10f67e"
		}

		.fad.fa-piano:after {
			content: "\10f8d4"
		}

		.fad.fa-piano-keyboard:after {
			content: "\10f8d5"
		}

		.fad.fa-pie:after {
			content: "\10f705"
		}

		.fad.fa-pig:after {
			content: "\10f706"
		}

		.fad.fa-piggy-bank:after {
			content: "\10f4d3"
		}

		.fad.fa-pills:after {
			content: "\10f484"
		}

		.fad.fa-pizza:after {
			content: "\10f817"
		}

		.fad.fa-pizza-slice:after {
			content: "\10f818"
		}

		.fad.fa-place-of-worship:after {
			content: "\10f67f"
		}

		.fad.fa-plane:after {
			content: "\10f072"
		}

		.fad.fa-plane-alt:after {
			content: "\10f3de"
		}

		.fad.fa-plane-arrival:after {
			content: "\10f5af"
		}

		.fad.fa-plane-departure:after {
			content: "\10f5b0"
		}

		.fad.fa-plane-slash:after {
			content: "\10f969"
		}

		.fad.fa-planet-moon:after {
			content: "\10f91f"
		}

		.fad.fa-planet-ringed:after {
			content: "\10f920"
		}

		.fad.fa-play:after {
			content: "\10f04b"
		}

		.fad.fa-play-circle:after {
			content: "\10f144"
		}

		.fad.fa-plug:after {
			content: "\10f1e6"
		}

		.fad.fa-plus:after {
			content: "\10f067"
		}

		.fad.fa-plus-circle:after {
			content: "\10f055"
		}

		.fad.fa-plus-hexagon:after {
			content: "\10f300"
		}

		.fad.fa-plus-octagon:after {
			content: "\10f301"
		}

		.fad.fa-plus-square:after {
			content: "\10f0fe"
		}

		.fad.fa-podcast:after {
			content: "\10f2ce"
		}

		.fad.fa-podium:after {
			content: "\10f680"
		}

		.fad.fa-podium-star:after {
			content: "\10f758"
		}

		.fad.fa-police-box:after {
			content: "\10f921"
		}

		.fad.fa-poll:after {
			content: "\10f681"
		}

		.fad.fa-poll-h:after {
			content: "\10f682"
		}

		.fad.fa-poll-people:after {
			content: "\10f759"
		}

		.fad.fa-poo:after {
			content: "\10f2fe"
		}

		.fad.fa-poo-storm:after {
			content: "\10f75a"
		}

		.fad.fa-poop:after {
			content: "\10f619"
		}

		.fad.fa-popcorn:after {
			content: "\10f819"
		}

		.fad.fa-portal-enter:after {
			content: "\10f922"
		}

		.fad.fa-portal-exit:after {
			content: "\10f923"
		}

		.fad.fa-portrait:after {
			content: "\10f3e0"
		}

		.fad.fa-pound-sign:after {
			content: "\10f154"
		}

		.fad.fa-power-off:after {
			content: "\10f011"
		}

		.fad.fa-pray:after {
			content: "\10f683"
		}

		.fad.fa-praying-hands:after {
			content: "\10f684"
		}

		.fad.fa-prescription:after {
			content: "\10f5b1"
		}

		.fad.fa-prescription-bottle:after {
			content: "\10f485"
		}

		.fad.fa-prescription-bottle-alt:after {
			content: "\10f486"
		}

		.fad.fa-presentation:after {
			content: "\10f685"
		}

		.fad.fa-print:after {
			content: "\10f02f"
		}

		.fad.fa-print-search:after {
			content: "\10f81a"
		}

		.fad.fa-print-slash:after {
			content: "\10f686"
		}

		.fad.fa-procedures:after {
			content: "\10f487"
		}

		.fad.fa-project-diagram:after {
			content: "\10f542"
		}

		.fad.fa-projector:after {
			content: "\10f8d6"
		}

		.fad.fa-pump-medical:after {
			content: "\10f96a"
		}

		.fad.fa-pump-soap:after {
			content: "\10f96b"
		}

		.fad.fa-pumpkin:after {
			content: "\10f707"
		}

		.fad.fa-puzzle-piece:after {
			content: "\10f12e"
		}

		.fad.fa-qrcode:after {
			content: "\10f029"
		}

		.fad.fa-question:after {
			content: "\10f128"
		}

		.fad.fa-question-circle:after {
			content: "\10f059"
		}

		.fad.fa-question-square:after {
			content: "\10f2fd"
		}

		.fad.fa-quidditch:after {
			content: "\10f458"
		}

		.fad.fa-quote-left:after {
			content: "\10f10d"
		}

		.fad.fa-quote-right:after {
			content: "\10f10e"
		}

		.fad.fa-quran:after {
			content: "\10f687"
		}

		.fad.fa-rabbit:after {
			content: "\10f708"
		}

		.fad.fa-rabbit-fast:after {
			content: "\10f709"
		}

		.fad.fa-racquet:after {
			content: "\10f45a"
		}

		.fad.fa-radar:after {
			content: "\10f924"
		}

		.fad.fa-radiation:after {
			content: "\10f7b9"
		}

		.fad.fa-radiation-alt:after {
			content: "\10f7ba"
		}

		.fad.fa-radio:after {
			content: "\10f8d7"
		}

		.fad.fa-radio-alt:after {
			content: "\10f8d8"
		}

		.fad.fa-rainbow:after {
			content: "\10f75b"
		}

		.fad.fa-raindrops:after {
			content: "\10f75c"
		}

		.fad.fa-ram:after {
			content: "\10f70a"
		}

		.fad.fa-ramp-loading:after {
			content: "\10f4d4"
		}

		.fad.fa-random:after {
			content: "\10f074"
		}

		.fad.fa-raygun:after {
			content: "\10f925"
		}

		.fad.fa-receipt:after {
			content: "\10f543"
		}

		.fad.fa-record-vinyl:after {
			content: "\10f8d9"
		}

		.fad.fa-rectangle-landscape:after {
			content: "\10f2fa"
		}

		.fad.fa-rectangle-portrait:after {
			content: "\10f2fb"
		}

		.fad.fa-rectangle-wide:after {
			content: "\10f2fc"
		}

		.fad.fa-recycle:after {
			content: "\10f1b8"
		}

		.fad.fa-redo:after {
			content: "\10f01e"
		}

		.fad.fa-redo-alt:after {
			content: "\10f2f9"
		}

		.fad.fa-refrigerator:after {
			content: "\10f926"
		}

		.fad.fa-registered:after {
			content: "\10f25d"
		}

		.fad.fa-remove-format:after {
			content: "\10f87d"
		}

		.fad.fa-repeat:after {
			content: "\10f363"
		}

		.fad.fa-repeat-1:after {
			content: "\10f365"
		}

		.fad.fa-repeat-1-alt:after {
			content: "\10f366"
		}

		.fad.fa-repeat-alt:after {
			content: "\10f364"
		}

		.fad.fa-reply:after {
			content: "\10f3e5"
		}

		.fad.fa-reply-all:after {
			content: "\10f122"
		}

		.fad.fa-republican:after {
			content: "\10f75e"
		}

		.fad.fa-restroom:after {
			content: "\10f7bd"
		}

		.fad.fa-retweet:after {
			content: "\10f079"
		}

		.fad.fa-retweet-alt:after {
			content: "\10f361"
		}

		.fad.fa-ribbon:after {
			content: "\10f4d6"
		}

		.fad.fa-ring:after {
			content: "\10f70b"
		}

		.fad.fa-rings-wedding:after {
			content: "\10f81b"
		}

		.fad.fa-road:after {
			content: "\10f018"
		}

		.fad.fa-robot:after {
			content: "\10f544"
		}

		.fad.fa-rocket:after {
			content: "\10f135"
		}

		.fad.fa-rocket-launch:after {
			content: "\10f927"
		}

		.fad.fa-route:after {
			content: "\10f4d7"
		}

		.fad.fa-route-highway:after {
			content: "\10f61a"
		}

		.fad.fa-route-interstate:after {
			content: "\10f61b"
		}

		.fad.fa-router:after {
			content: "\10f8da"
		}

		.fad.fa-rss:after {
			content: "\10f09e"
		}

		.fad.fa-rss-square:after {
			content: "\10f143"
		}

		.fad.fa-ruble-sign:after {
			content: "\10f158"
		}

		.fad.fa-ruler:after {
			content: "\10f545"
		}

		.fad.fa-ruler-combined:after {
			content: "\10f546"
		}

		.fad.fa-ruler-horizontal:after {
			content: "\10f547"
		}

		.fad.fa-ruler-triangle:after {
			content: "\10f61c"
		}

		.fad.fa-ruler-vertical:after {
			content: "\10f548"
		}

		.fad.fa-running:after {
			content: "\10f70c"
		}

		.fad.fa-rupee-sign:after {
			content: "\10f156"
		}

		.fad.fa-rv:after {
			content: "\10f7be"
		}

		.fad.fa-sack:after {
			content: "\10f81c"
		}

		.fad.fa-sack-dollar:after {
			content: "\10f81d"
		}

		.fad.fa-sad-cry:after {
			content: "\10f5b3"
		}

		.fad.fa-sad-tear:after {
			content: "\10f5b4"
		}

		.fad.fa-salad:after {
			content: "\10f81e"
		}

		.fad.fa-sandwich:after {
			content: "\10f81f"
		}

		.fad.fa-satellite:after {
			content: "\10f7bf"
		}

		.fad.fa-satellite-dish:after {
			content: "\10f7c0"
		}

		.fad.fa-sausage:after {
			content: "\10f820"
		}

		.fad.fa-save:after {
			content: "\10f0c7"
		}

		.fad.fa-sax-hot:after {
			content: "\10f8db"
		}

		.fad.fa-saxophone:after {
			content: "\10f8dc"
		}

		.fad.fa-scalpel:after {
			content: "\10f61d"
		}

		.fad.fa-scalpel-path:after {
			content: "\10f61e"
		}

		.fad.fa-scanner:after {
			content: "\10f488"
		}

		.fad.fa-scanner-image:after {
			content: "\10f8f3"
		}

		.fad.fa-scanner-keyboard:after {
			content: "\10f489"
		}

		.fad.fa-scanner-touchscreen:after {
			content: "\10f48a"
		}

		.fad.fa-scarecrow:after {
			content: "\10f70d"
		}

		.fad.fa-scarf:after {
			content: "\10f7c1"
		}

		.fad.fa-school:after {
			content: "\10f549"
		}

		.fad.fa-screwdriver:after {
			content: "\10f54a"
		}

		.fad.fa-scroll:after {
			content: "\10f70e"
		}

		.fad.fa-scroll-old:after {
			content: "\10f70f"
		}

		.fad.fa-scrubber:after {
			content: "\10f2f8"
		}

		.fad.fa-scythe:after {
			content: "\10f710"
		}

		.fad.fa-sd-card:after {
			content: "\10f7c2"
		}

		.fad.fa-search:after {
			content: "\10f002"
		}

		.fad.fa-search-dollar:after {
			content: "\10f688"
		}

		.fad.fa-search-location:after {
			content: "\10f689"
		}

		.fad.fa-search-minus:after {
			content: "\10f010"
		}

		.fad.fa-search-plus:after {
			content: "\10f00e"
		}

		.fad.fa-seedling:after {
			content: "\10f4d8"
		}

		.fad.fa-send-back:after {
			content: "\10f87e"
		}

		.fad.fa-send-backward:after {
			content: "\10f87f"
		}

		.fad.fa-sensor:after {
			content: "\10f928"
		}

		.fad.fa-sensor-alert:after {
			content: "\10f929"
		}

		.fad.fa-sensor-fire:after {
			content: "\10f92a"
		}

		.fad.fa-sensor-on:after {
			content: "\10f92b"
		}

		.fad.fa-sensor-smoke:after {
			content: "\10f92c"
		}

		.fad.fa-server:after {
			content: "\10f233"
		}

		.fad.fa-shapes:after {
			content: "\10f61f"
		}

		.fad.fa-share:after {
			content: "\10f064"
		}

		.fad.fa-share-all:after {
			content: "\10f367"
		}

		.fad.fa-share-alt:after {
			content: "\10f1e0"
		}

		.fad.fa-share-alt-square:after {
			content: "\10f1e1"
		}

		.fad.fa-share-square:after {
			content: "\10f14d"
		}

		.fad.fa-sheep:after {
			content: "\10f711"
		}

		.fad.fa-shekel-sign:after {
			content: "\10f20b"
		}

		.fad.fa-shield:after {
			content: "\10f132"
		}

		.fad.fa-shield-alt:after {
			content: "\10f3ed"
		}

		.fad.fa-shield-check:after {
			content: "\10f2f7"
		}

		.fad.fa-shield-cross:after {
			content: "\10f712"
		}

		.fad.fa-shield-virus:after {
			content: "\10f96c"
		}

		.fad.fa-ship:after {
			content: "\10f21a"
		}

		.fad.fa-shipping-fast:after {
			content: "\10f48b"
		}

		.fad.fa-shipping-timed:after {
			content: "\10f48c"
		}

		.fad.fa-shish-kebab:after {
			content: "\10f821"
		}

		.fad.fa-shoe-prints:after {
			content: "\10f54b"
		}

		.fad.fa-shopping-bag:after {
			content: "\10f290"
		}

		.fad.fa-shopping-basket:after {
			content: "\10f291"
		}

		.fad.fa-shopping-cart:after {
			content: "\10f07a"
		}

		.fad.fa-shovel:after {
			content: "\10f713"
		}

		.fad.fa-shovel-snow:after {
			content: "\10f7c3"
		}

		.fad.fa-shower:after {
			content: "\10f2cc"
		}

		.fad.fa-shredder:after {
			content: "\10f68a"
		}

		.fad.fa-shuttle-van:after {
			content: "\10f5b6"
		}

		.fad.fa-shuttlecock:after {
			content: "\10f45b"
		}

		.fad.fa-sickle:after {
			content: "\10f822"
		}

		.fad.fa-sigma:after {
			content: "\10f68b"
		}

		.fad.fa-sign:after {
			content: "\10f4d9"
		}

		.fad.fa-sign-in:after {
			content: "\10f090"
		}

		.fad.fa-sign-in-alt:after {
			content: "\10f2f6"
		}

		.fad.fa-sign-language:after {
			content: "\10f2a7"
		}

		.fad.fa-sign-out:after {
			content: "\10f08b"
		}

		.fad.fa-sign-out-alt:after {
			content: "\10f2f5"
		}

		.fad.fa-signal:after {
			content: "\10f012"
		}

		.fad.fa-signal-1:after {
			content: "\10f68c"
		}

		.fad.fa-signal-2:after {
			content: "\10f68d"
		}

		.fad.fa-signal-3:after {
			content: "\10f68e"
		}

		.fad.fa-signal-4:after {
			content: "\10f68f"
		}

		.fad.fa-signal-alt:after {
			content: "\10f690"
		}

		.fad.fa-signal-alt-1:after {
			content: "\10f691"
		}

		.fad.fa-signal-alt-2:after {
			content: "\10f692"
		}

		.fad.fa-signal-alt-3:after {
			content: "\10f693"
		}

		.fad.fa-signal-alt-slash:after {
			content: "\10f694"
		}

		.fad.fa-signal-slash:after {
			content: "\10f695"
		}

		.fad.fa-signal-stream:after {
			content: "\10f8dd"
		}

		.fad.fa-signature:after {
			content: "\10f5b7"
		}

		.fad.fa-sim-card:after {
			content: "\10f7c4"
		}

		.fad.fa-sink:after {
			content: "\10f96d"
		}

		.fad.fa-siren:after {
			content: "\10f92d"
		}

		.fad.fa-siren-on:after {
			content: "\10f92e"
		}

		.fad.fa-sitemap:after {
			content: "\10f0e8"
		}

		.fad.fa-skating:after {
			content: "\10f7c5"
		}

		.fad.fa-skeleton:after {
			content: "\10f620"
		}

		.fad.fa-ski-jump:after {
			content: "\10f7c7"
		}

		.fad.fa-ski-lift:after {
			content: "\10f7c8"
		}

		.fad.fa-skiing:after {
			content: "\10f7c9"
		}

		.fad.fa-skiing-nordic:after {
			content: "\10f7ca"
		}

		.fad.fa-skull:after {
			content: "\10f54c"
		}

		.fad.fa-skull-cow:after {
			content: "\10f8de"
		}

		.fad.fa-skull-crossbones:after {
			content: "\10f714"
		}

		.fad.fa-slash:after {
			content: "\10f715"
		}

		.fad.fa-sledding:after {
			content: "\10f7cb"
		}

		.fad.fa-sleigh:after {
			content: "\10f7cc"
		}

		.fad.fa-sliders-h:after {
			content: "\10f1de"
		}

		.fad.fa-sliders-h-square:after {
			content: "\10f3f0"
		}

		.fad.fa-sliders-v:after {
			content: "\10f3f1"
		}

		.fad.fa-sliders-v-square:after {
			content: "\10f3f2"
		}

		.fad.fa-smile:after {
			content: "\10f118"
		}

		.fad.fa-smile-beam:after {
			content: "\10f5b8"
		}

		.fad.fa-smile-plus:after {
			content: "\10f5b9"
		}

		.fad.fa-smile-wink:after {
			content: "\10f4da"
		}

		.fad.fa-smog:after {
			content: "\10f75f"
		}

		.fad.fa-smoke:after {
			content: "\10f760"
		}

		.fad.fa-smoking:after {
			content: "\10f48d"
		}

		.fad.fa-smoking-ban:after {
			content: "\10f54d"
		}

		.fad.fa-sms:after {
			content: "\10f7cd"
		}

		.fad.fa-snake:after {
			content: "\10f716"
		}

		.fad.fa-snooze:after {
			content: "\10f880"
		}

		.fad.fa-snow-blowing:after {
			content: "\10f761"
		}

		.fad.fa-snowboarding:after {
			content: "\10f7ce"
		}

		.fad.fa-snowflake:after {
			content: "\10f2dc"
		}

		.fad.fa-snowflakes:after {
			content: "\10f7cf"
		}

		.fad.fa-snowman:after {
			content: "\10f7d0"
		}

		.fad.fa-snowmobile:after {
			content: "\10f7d1"
		}

		.fad.fa-snowplow:after {
			content: "\10f7d2"
		}

		.fad.fa-soap:after {
			content: "\10f96e"
		}

		.fad.fa-socks:after {
			content: "\10f696"
		}

		.fad.fa-solar-panel:after {
			content: "\10f5ba"
		}

		.fad.fa-solar-system:after {
			content: "\10f92f"
		}

		.fad.fa-sort:after {
			content: "\10f0dc"
		}

		.fad.fa-sort-alpha-down:after {
			content: "\10f15d"
		}

		.fad.fa-sort-alpha-down-alt:after {
			content: "\10f881"
		}

		.fad.fa-sort-alpha-up:after {
			content: "\10f15e"
		}

		.fad.fa-sort-alpha-up-alt:after {
			content: "\10f882"
		}

		.fad.fa-sort-alt:after {
			content: "\10f883"
		}

		.fad.fa-sort-amount-down:after {
			content: "\10f160"
		}

		.fad.fa-sort-amount-down-alt:after {
			content: "\10f884"
		}

		.fad.fa-sort-amount-up:after {
			content: "\10f161"
		}

		.fad.fa-sort-amount-up-alt:after {
			content: "\10f885"
		}

		.fad.fa-sort-circle:after {
			content: "\10f930"
		}

		.fad.fa-sort-circle-down:after {
			content: "\10f931"
		}

		.fad.fa-sort-circle-up:after {
			content: "\10f932"
		}

		.fad.fa-sort-down:after {
			content: "\10f0dd"
		}

		.fad.fa-sort-numeric-down:after {
			content: "\10f162"
		}

		.fad.fa-sort-numeric-down-alt:after {
			content: "\10f886"
		}

		.fad.fa-sort-numeric-up:after {
			content: "\10f163"
		}

		.fad.fa-sort-numeric-up-alt:after {
			content: "\10f887"
		}

		.fad.fa-sort-shapes-down:after {
			content: "\10f888"
		}

		.fad.fa-sort-shapes-down-alt:after {
			content: "\10f889"
		}

		.fad.fa-sort-shapes-up:after {
			content: "\10f88a"
		}

		.fad.fa-sort-shapes-up-alt:after {
			content: "\10f88b"
		}

		.fad.fa-sort-size-down:after {
			content: "\10f88c"
		}

		.fad.fa-sort-size-down-alt:after {
			content: "\10f88d"
		}

		.fad.fa-sort-size-up:after {
			content: "\10f88e"
		}

		.fad.fa-sort-size-up-alt:after {
			content: "\10f88f"
		}

		.fad.fa-sort-up:after {
			content: "\10f0de"
		}

		.fad.fa-soup:after {
			content: "\10f823"
		}

		.fad.fa-spa:after {
			content: "\10f5bb"
		}

		.fad.fa-space-shuttle:after {
			content: "\10f197"
		}

		.fad.fa-space-station-moon:after {
			content: "\10f933"
		}

		.fad.fa-space-station-moon-alt:after {
			content: "\10f934"
		}

		.fad.fa-spade:after {
			content: "\10f2f4"
		}

		.fad.fa-sparkles:after {
			content: "\10f890"
		}

		.fad.fa-speaker:after {
			content: "\10f8df"
		}

		.fad.fa-speakers:after {
			content: "\10f8e0"
		}

		.fad.fa-spell-check:after {
			content: "\10f891"
		}

		.fad.fa-spider:after {
			content: "\10f717"
		}

		.fad.fa-spider-black-widow:after {
			content: "\10f718"
		}

		.fad.fa-spider-web:after {
			content: "\10f719"
		}

		.fad.fa-spinner:after {
			content: "\10f110"
		}

		.fad.fa-spinner-third:after {
			content: "\10f3f4"
		}

		.fad.fa-splotch:after {
			content: "\10f5bc"
		}

		.fad.fa-spray-can:after {
			content: "\10f5bd"
		}

		.fad.fa-sprinkler:after {
			content: "\10f935"
		}

		.fad.fa-square:after {
			content: "\10f0c8"
		}

		.fad.fa-square-full:after {
			content: "\10f45c"
		}

		.fad.fa-square-root:after {
			content: "\10f697"
		}

		.fad.fa-square-root-alt:after {
			content: "\10f698"
		}

		.fad.fa-squirrel:after {
			content: "\10f71a"
		}

		.fad.fa-staff:after {
			content: "\10f71b"
		}

		.fad.fa-stamp:after {
			content: "\10f5bf"
		}

		.fad.fa-star:after {
			content: "\10f005"
		}

		.fad.fa-star-and-crescent:after {
			content: "\10f699"
		}

		.fad.fa-star-christmas:after {
			content: "\10f7d4"
		}

		.fad.fa-star-exclamation:after {
			content: "\10f2f3"
		}

		.fad.fa-star-half:after {
			content: "\10f089"
		}

		.fad.fa-star-half-alt:after {
			content: "\10f5c0"
		}

		.fad.fa-star-of-david:after {
			content: "\10f69a"
		}

		.fad.fa-star-of-life:after {
			content: "\10f621"
		}

		.fad.fa-star-shooting:after {
			content: "\10f936"
		}

		.fad.fa-starfighter:after {
			content: "\10f937"
		}

		.fad.fa-starfighter-alt:after {
			content: "\10f938"
		}

		.fad.fa-stars:after {
			content: "\10f762"
		}

		.fad.fa-starship:after {
			content: "\10f939"
		}

		.fad.fa-starship-freighter:after {
			content: "\10f93a"
		}

		.fad.fa-steak:after {
			content: "\10f824"
		}

		.fad.fa-steering-wheel:after {
			content: "\10f622"
		}

		.fad.fa-step-backward:after {
			content: "\10f048"
		}

		.fad.fa-step-forward:after {
			content: "\10f051"
		}

		.fad.fa-stethoscope:after {
			content: "\10f0f1"
		}

		.fad.fa-sticky-note:after {
			content: "\10f249"
		}

		.fad.fa-stocking:after {
			content: "\10f7d5"
		}

		.fad.fa-stomach:after {
			content: "\10f623"
		}

		.fad.fa-stop:after {
			content: "\10f04d"
		}

		.fad.fa-stop-circle:after {
			content: "\10f28d"
		}

		.fad.fa-stopwatch:after {
			content: "\10f2f2"
		}

		.fad.fa-stopwatch-20:after {
			content: "\10f96f"
		}

		.fad.fa-store:after {
			content: "\10f54e"
		}

		.fad.fa-store-alt:after {
			content: "\10f54f"
		}

		.fad.fa-store-alt-slash:after {
			content: "\10f970"
		}

		.fad.fa-store-slash:after {
			content: "\10f971"
		}

		.fad.fa-stream:after {
			content: "\10f550"
		}

		.fad.fa-street-view:after {
			content: "\10f21d"
		}

		.fad.fa-stretcher:after {
			content: "\10f825"
		}

		.fad.fa-strikethrough:after {
			content: "\10f0cc"
		}

		.fad.fa-stroopwafel:after {
			content: "\10f551"
		}

		.fad.fa-subscript:after {
			content: "\10f12c"
		}

		.fad.fa-subway:after {
			content: "\10f239"
		}

		.fad.fa-suitcase:after {
			content: "\10f0f2"
		}

		.fad.fa-suitcase-rolling:after {
			content: "\10f5c1"
		}

		.fad.fa-sun:after {
			content: "\10f185"
		}

		.fad.fa-sun-cloud:after {
			content: "\10f763"
		}

		.fad.fa-sun-dust:after {
			content: "\10f764"
		}

		.fad.fa-sun-haze:after {
			content: "\10f765"
		}

		.fad.fa-sunglasses:after {
			content: "\10f892"
		}

		.fad.fa-sunrise:after {
			content: "\10f766"
		}

		.fad.fa-sunset:after {
			content: "\10f767"
		}

		.fad.fa-superscript:after {
			content: "\10f12b"
		}

		.fad.fa-surprise:after {
			content: "\10f5c2"
		}

		.fad.fa-swatchbook:after {
			content: "\10f5c3"
		}

		.fad.fa-swimmer:after {
			content: "\10f5c4"
		}

		.fad.fa-swimming-pool:after {
			content: "\10f5c5"
		}

		.fad.fa-sword:after {
			content: "\10f71c"
		}

		.fad.fa-sword-laser:after {
			content: "\10f93b"
		}

		.fad.fa-sword-laser-alt:after {
			content: "\10f93c"
		}

		.fad.fa-swords:after {
			content: "\10f71d"
		}

		.fad.fa-swords-laser:after {
			content: "\10f93d"
		}

		.fad.fa-synagogue:after {
			content: "\10f69b"
		}

		.fad.fa-sync:after {
			content: "\10f021"
		}

		.fad.fa-sync-alt:after {
			content: "\10f2f1"
		}

		.fad.fa-syringe:after {
			content: "\10f48e"
		}

		.fad.fa-table:after {
			content: "\10f0ce"
		}

		.fad.fa-table-tennis:after {
			content: "\10f45d"
		}

		.fad.fa-tablet:after {
			content: "\10f10a"
		}

		.fad.fa-tablet-alt:after {
			content: "\10f3fa"
		}

		.fad.fa-tablet-android:after {
			content: "\10f3fb"
		}

		.fad.fa-tablet-android-alt:after {
			content: "\10f3fc"
		}

		.fad.fa-tablet-rugged:after {
			content: "\10f48f"
		}

		.fad.fa-tablets:after {
			content: "\10f490"
		}

		.fad.fa-tachometer:after {
			content: "\10f0e4"
		}

		.fad.fa-tachometer-alt:after {
			content: "\10f3fd"
		}

		.fad.fa-tachometer-alt-average:after {
			content: "\10f624"
		}

		.fad.fa-tachometer-alt-fast:after {
			content: "\10f625"
		}

		.fad.fa-tachometer-alt-fastest:after {
			content: "\10f626"
		}

		.fad.fa-tachometer-alt-slow:after {
			content: "\10f627"
		}

		.fad.fa-tachometer-alt-slowest:after {
			content: "\10f628"
		}

		.fad.fa-tachometer-average:after {
			content: "\10f629"
		}

		.fad.fa-tachometer-fast:after {
			content: "\10f62a"
		}

		.fad.fa-tachometer-fastest:after {
			content: "\10f62b"
		}

		.fad.fa-tachometer-slow:after {
			content: "\10f62c"
		}

		.fad.fa-tachometer-slowest:after {
			content: "\10f62d"
		}

		.fad.fa-taco:after {
			content: "\10f826"
		}

		.fad.fa-tag:after {
			content: "\10f02b"
		}

		.fad.fa-tags:after {
			content: "\10f02c"
		}

		.fad.fa-tally:after {
			content: "\10f69c"
		}

		.fad.fa-tanakh:after {
			content: "\10f827"
		}

		.fad.fa-tape:after {
			content: "\10f4db"
		}

		.fad.fa-tasks:after {
			content: "\10f0ae"
		}

		.fad.fa-tasks-alt:after {
			content: "\10f828"
		}

		.fad.fa-taxi:after {
			content: "\10f1ba"
		}

		.fad.fa-teeth:after {
			content: "\10f62e"
		}

		.fad.fa-teeth-open:after {
			content: "\10f62f"
		}

		.fad.fa-telescope:after {
			content: "\10f93e"
		}

		.fad.fa-temperature-down:after {
			content: "\10f93f"
		}

		.fad.fa-temperature-frigid:after {
			content: "\10f768"
		}

		.fad.fa-temperature-high:after {
			content: "\10f769"
		}

		.fad.fa-temperature-hot:after {
			content: "\10f76a"
		}

		.fad.fa-temperature-low:after {
			content: "\10f76b"
		}

		.fad.fa-temperature-up:after {
			content: "\10f940"
		}

		.fad.fa-tenge:after {
			content: "\10f7d7"
		}

		.fad.fa-tennis-ball:after {
			content: "\10f45e"
		}

		.fad.fa-terminal:after {
			content: "\10f120"
		}

		.fad.fa-text:after {
			content: "\10f893"
		}

		.fad.fa-text-height:after {
			content: "\10f034"
		}

		.fad.fa-text-size:after {
			content: "\10f894"
		}

		.fad.fa-text-width:after {
			content: "\10f035"
		}

		.fad.fa-th:after {
			content: "\10f00a"
		}

		.fad.fa-th-large:after {
			content: "\10f009"
		}

		.fad.fa-th-list:after {
			content: "\10f00b"
		}

		.fad.fa-theater-masks:after {
			content: "\10f630"
		}

		.fad.fa-thermometer:after {
			content: "\10f491"
		}

		.fad.fa-thermometer-empty:after {
			content: "\10f2cb"
		}

		.fad.fa-thermometer-full:after {
			content: "\10f2c7"
		}

		.fad.fa-thermometer-half:after {
			content: "\10f2c9"
		}

		.fad.fa-thermometer-quarter:after {
			content: "\10f2ca"
		}

		.fad.fa-thermometer-three-quarters:after {
			content: "\10f2c8"
		}

		.fad.fa-theta:after {
			content: "\10f69e"
		}

		.fad.fa-thumbs-down:after {
			content: "\10f165"
		}

		.fad.fa-thumbs-up:after {
			content: "\10f164"
		}

		.fad.fa-thumbtack:after {
			content: "\10f08d"
		}

		.fad.fa-thunderstorm:after {
			content: "\10f76c"
		}

		.fad.fa-thunderstorm-moon:after {
			content: "\10f76d"
		}

		.fad.fa-thunderstorm-sun:after {
			content: "\10f76e"
		}

		.fad.fa-ticket:after {
			content: "\10f145"
		}

		.fad.fa-ticket-alt:after {
			content: "\10f3ff"
		}

		.fad.fa-tilde:after {
			content: "\10f69f"
		}

		.fad.fa-times:after {
			content: "\10f00d"
		}

		.fad.fa-times-circle:after {
			content: "\10f057"
		}

		.fad.fa-times-hexagon:after {
			content: "\10f2ee"
		}

		.fad.fa-times-octagon:after {
			content: "\10f2f0"
		}

		.fad.fa-times-square:after {
			content: "\10f2d3"
		}

		.fad.fa-tint:after {
			content: "\10f043"
		}

		.fad.fa-tint-slash:after {
			content: "\10f5c7"
		}

		.fad.fa-tire:after {
			content: "\10f631"
		}

		.fad.fa-tire-flat:after {
			content: "\10f632"
		}

		.fad.fa-tire-pressure-warning:after {
			content: "\10f633"
		}

		.fad.fa-tire-rugged:after {
			content: "\10f634"
		}

		.fad.fa-tired:after {
			content: "\10f5c8"
		}

		.fad.fa-toggle-off:after {
			content: "\10f204"
		}

		.fad.fa-toggle-on:after {
			content: "\10f205"
		}

		.fad.fa-toilet:after {
			content: "\10f7d8"
		}

		.fad.fa-toilet-paper:after {
			content: "\10f71e"
		}

		.fad.fa-toilet-paper-alt:after {
			content: "\10f71f"
		}

		.fad.fa-toilet-paper-slash:after {
			content: "\10f972"
		}

		.fad.fa-tombstone:after {
			content: "\10f720"
		}

		.fad.fa-tombstone-alt:after {
			content: "\10f721"
		}

		.fad.fa-toolbox:after {
			content: "\10f552"
		}

		.fad.fa-tools:after {
			content: "\10f7d9"
		}

		.fad.fa-tooth:after {
			content: "\10f5c9"
		}

		.fad.fa-toothbrush:after {
			content: "\10f635"
		}

		.fad.fa-torah:after {
			content: "\10f6a0"
		}

		.fad.fa-torii-gate:after {
			content: "\10f6a1"
		}

		.fad.fa-tornado:after {
			content: "\10f76f"
		}

		.fad.fa-tractor:after {
			content: "\10f722"
		}

		.fad.fa-trademark:after {
			content: "\10f25c"
		}

		.fad.fa-traffic-cone:after {
			content: "\10f636"
		}

		.fad.fa-traffic-light:after {
			content: "\10f637"
		}

		.fad.fa-traffic-light-go:after {
			content: "\10f638"
		}

		.fad.fa-traffic-light-slow:after {
			content: "\10f639"
		}

		.fad.fa-traffic-light-stop:after {
			content: "\10f63a"
		}

		.fad.fa-trailer:after {
			content: "\10f941"
		}

		.fad.fa-train:after {
			content: "\10f238"
		}

		.fad.fa-tram:after {
			content: "\10f7da"
		}

		.fad.fa-transgender:after {
			content: "\10f224"
		}

		.fad.fa-transgender-alt:after {
			content: "\10f225"
		}

		.fad.fa-transporter:after {
			content: "\10f942"
		}

		.fad.fa-transporter-1:after {
			content: "\10f943"
		}

		.fad.fa-transporter-2:after {
			content: "\10f944"
		}

		.fad.fa-transporter-3:after {
			content: "\10f945"
		}

		.fad.fa-transporter-empty:after {
			content: "\10f946"
		}

		.fad.fa-trash:after {
			content: "\10f1f8"
		}

		.fad.fa-trash-alt:after {
			content: "\10f2ed"
		}

		.fad.fa-trash-restore:after {
			content: "\10f829"
		}

		.fad.fa-trash-restore-alt:after {
			content: "\10f82a"
		}

		.fad.fa-trash-undo:after {
			content: "\10f895"
		}

		.fad.fa-trash-undo-alt:after {
			content: "\10f896"
		}

		.fad.fa-treasure-chest:after {
			content: "\10f723"
		}

		.fad.fa-tree:after {
			content: "\10f1bb"
		}

		.fad.fa-tree-alt:after {
			content: "\10f400"
		}

		.fad.fa-tree-christmas:after {
			content: "\10f7db"
		}

		.fad.fa-tree-decorated:after {
			content: "\10f7dc"
		}

		.fad.fa-tree-large:after {
			content: "\10f7dd"
		}

		.fad.fa-tree-palm:after {
			content: "\10f82b"
		}

		.fad.fa-trees:after {
			content: "\10f724"
		}

		.fad.fa-triangle:after {
			content: "\10f2ec"
		}

		.fad.fa-triangle-music:after {
			content: "\10f8e2"
		}

		.fad.fa-trophy:after {
			content: "\10f091"
		}

		.fad.fa-trophy-alt:after {
			content: "\10f2eb"
		}

		.fad.fa-truck:after {
			content: "\10f0d1"
		}

		.fad.fa-truck-container:after {
			content: "\10f4dc"
		}

		.fad.fa-truck-couch:after {
			content: "\10f4dd"
		}

		.fad.fa-truck-loading:after {
			content: "\10f4de"
		}

		.fad.fa-truck-monster:after {
			content: "\10f63b"
		}

		.fad.fa-truck-moving:after {
			content: "\10f4df"
		}

		.fad.fa-truck-pickup:after {
			content: "\10f63c"
		}

		.fad.fa-truck-plow:after {
			content: "\10f7de"
		}

		.fad.fa-truck-ramp:after {
			content: "\10f4e0"
		}

		.fad.fa-trumpet:after {
			content: "\10f8e3"
		}

		.fad.fa-tshirt:after {
			content: "\10f553"
		}

		.fad.fa-tty:after {
			content: "\10f1e4"
		}

		.fad.fa-turkey:after {
			content: "\10f725"
		}

		.fad.fa-turntable:after {
			content: "\10f8e4"
		}

		.fad.fa-turtle:after {
			content: "\10f726"
		}

		.fad.fa-tv:after {
			content: "\10f26c"
		}

		.fad.fa-tv-alt:after {
			content: "\10f8e5"
		}

		.fad.fa-tv-music:after {
			content: "\10f8e6"
		}

		.fad.fa-tv-retro:after {
			content: "\10f401"
		}

		.fad.fa-typewriter:after {
			content: "\10f8e7"
		}

		.fad.fa-ufo:after {
			content: "\10f947"
		}

		.fad.fa-ufo-beam:after {
			content: "\10f948"
		}

		.fad.fa-umbrella:after {
			content: "\10f0e9"
		}

		.fad.fa-umbrella-beach:after {
			content: "\10f5ca"
		}

		.fad.fa-underline:after {
			content: "\10f0cd"
		}

		.fad.fa-undo:after {
			content: "\10f0e2"
		}

		.fad.fa-undo-alt:after {
			content: "\10f2ea"
		}

		.fad.fa-unicorn:after {
			content: "\10f727"
		}

		.fad.fa-union:after {
			content: "\10f6a2"
		}

		.fad.fa-universal-access:after {
			content: "\10f29a"
		}

		.fad.fa-university:after {
			content: "\10f19c"
		}

		.fad.fa-unlink:after {
			content: "\10f127"
		}

		.fad.fa-unlock:after {
			content: "\10f09c"
		}

		.fad.fa-unlock-alt:after {
			content: "\10f13e"
		}

		.fad.fa-upload:after {
			content: "\10f093"
		}

		.fad.fa-usb-drive:after {
			content: "\10f8e9"
		}

		.fad.fa-usd-circle:after {
			content: "\10f2e8"
		}

		.fad.fa-usd-square:after {
			content: "\10f2e9"
		}

		.fad.fa-user:after {
			content: "\10f007"
		}

		.fad.fa-user-alien:after {
			content: "\10f94a"
		}

		.fad.fa-user-alt:after {
			content: "\10f406"
		}

		.fad.fa-user-alt-slash:after {
			content: "\10f4fa"
		}

		.fad.fa-user-astronaut:after {
			content: "\10f4fb"
		}

		.fad.fa-user-chart:after {
			content: "\10f6a3"
		}

		.fad.fa-user-check:after {
			content: "\10f4fc"
		}

		.fad.fa-user-circle:after {
			content: "\10f2bd"
		}

		.fad.fa-user-clock:after {
			content: "\10f4fd"
		}

		.fad.fa-user-cog:after {
			content: "\10f4fe"
		}

		.fad.fa-user-cowboy:after {
			content: "\10f8ea"
		}

		.fad.fa-user-crown:after {
			content: "\10f6a4"
		}

		.fad.fa-user-edit:after {
			content: "\10f4ff"
		}

		.fad.fa-user-friends:after {
			content: "\10f500"
		}

		.fad.fa-user-graduate:after {
			content: "\10f501"
		}

		.fad.fa-user-hard-hat:after {
			content: "\10f82c"
		}

		.fad.fa-user-headset:after {
			content: "\10f82d"
		}

		.fad.fa-user-injured:after {
			content: "\10f728"
		}

		.fad.fa-user-lock:after {
			content: "\10f502"
		}

		.fad.fa-user-md:after {
			content: "\10f0f0"
		}

		.fad.fa-user-md-chat:after {
			content: "\10f82e"
		}

		.fad.fa-user-minus:after {
			content: "\10f503"
		}

		.fad.fa-user-music:after {
			content: "\10f8eb"
		}

		.fad.fa-user-ninja:after {
			content: "\10f504"
		}

		.fad.fa-user-nurse:after {
			content: "\10f82f"
		}

		.fad.fa-user-plus:after {
			content: "\10f234"
		}

		.fad.fa-user-robot:after {
			content: "\10f94b"
		}

		.fad.fa-user-secret:after {
			content: "\10f21b"
		}

		.fad.fa-user-shield:after {
			content: "\10f505"
		}

		.fad.fa-user-slash:after {
			content: "\10f506"
		}

		.fad.fa-user-tag:after {
			content: "\10f507"
		}

		.fad.fa-user-tie:after {
			content: "\10f508"
		}

		.fad.fa-user-times:after {
			content: "\10f235"
		}

		.fad.fa-user-unlock:after {
			content: "\10f958"
		}

		.fad.fa-user-visor:after {
			content: "\10f94c"
		}

		.fad.fa-users:after {
			content: "\10f0c0"
		}

		.fad.fa-users-class:after {
			content: "\10f63d"
		}

		.fad.fa-users-cog:after {
			content: "\10f509"
		}

		.fad.fa-users-crown:after {
			content: "\10f6a5"
		}

		.fad.fa-users-medical:after {
			content: "\10f830"
		}

		.fad.fa-users-slash:after {
			content: "\10f973"
		}

		.fad.fa-utensil-fork:after {
			content: "\10f2e3"
		}

		.fad.fa-utensil-knife:after {
			content: "\10f2e4"
		}

		.fad.fa-utensil-spoon:after {
			content: "\10f2e5"
		}

		.fad.fa-utensils:after {
			content: "\10f2e7"
		}

		.fad.fa-utensils-alt:after {
			content: "\10f2e6"
		}

		.fad.fa-vacuum:after {
			content: "\10f94d"
		}

		.fad.fa-vacuum-robot:after {
			content: "\10f94e"
		}

		.fad.fa-value-absolute:after {
			content: "\10f6a6"
		}

		.fad.fa-vector-square:after {
			content: "\10f5cb"
		}

		.fad.fa-venus:after {
			content: "\10f221"
		}

		.fad.fa-venus-double:after {
			content: "\10f226"
		}

		.fad.fa-venus-mars:after {
			content: "\10f228"
		}

		.fad.fa-vhs:after {
			content: "\10f8ec"
		}

		.fad.fa-vial:after {
			content: "\10f492"
		}

		.fad.fa-vials:after {
			content: "\10f493"
		}

		.fad.fa-video:after {
			content: "\10f03d"
		}

		.fad.fa-video-plus:after {
			content: "\10f4e1"
		}

		.fad.fa-video-slash:after {
			content: "\10f4e2"
		}

		.fad.fa-vihara:after {
			content: "\10f6a7"
		}

		.fad.fa-violin:after {
			content: "\10f8ed"
		}

		.fad.fa-virus:after {
			content: "\10f974"
		}

		.fad.fa-virus-slash:after {
			content: "\10f975"
		}

		.fad.fa-viruses:after {
			content: "\10f976"
		}

		.fad.fa-voicemail:after {
			content: "\10f897"
		}

		.fad.fa-volcano:after {
			content: "\10f770"
		}

		.fad.fa-volleyball-ball:after {
			content: "\10f45f"
		}

		.fad.fa-volume:after {
			content: "\10f6a8"
		}

		.fad.fa-volume-down:after {
			content: "\10f027"
		}

		.fad.fa-volume-mute:after {
			content: "\10f6a9"
		}

		.fad.fa-volume-off:after {
			content: "\10f026"
		}

		.fad.fa-volume-slash:after {
			content: "\10f2e2"
		}

		.fad.fa-volume-up:after {
			content: "\10f028"
		}

		.fad.fa-vote-nay:after {
			content: "\10f771"
		}

		.fad.fa-vote-yea:after {
			content: "\10f772"
		}

		.fad.fa-vr-cardboard:after {
			content: "\10f729"
		}

		.fad.fa-wagon-covered:after {
			content: "\10f8ee"
		}

		.fad.fa-walker:after {
			content: "\10f831"
		}

		.fad.fa-walkie-talkie:after {
			content: "\10f8ef"
		}

		.fad.fa-walking:after {
			content: "\10f554"
		}

		.fad.fa-wallet:after {
			content: "\10f555"
		}

		.fad.fa-wand:after {
			content: "\10f72a"
		}

		.fad.fa-wand-magic:after {
			content: "\10f72b"
		}

		.fad.fa-warehouse:after {
			content: "\10f494"
		}

		.fad.fa-warehouse-alt:after {
			content: "\10f495"
		}

		.fad.fa-washer:after {
			content: "\10f898"
		}

		.fad.fa-watch:after {
			content: "\10f2e1"
		}

		.fad.fa-watch-calculator:after {
			content: "\10f8f0"
		}

		.fad.fa-watch-fitness:after {
			content: "\10f63e"
		}

		.fad.fa-water:after {
			content: "\10f773"
		}

		.fad.fa-water-lower:after {
			content: "\10f774"
		}

		.fad.fa-water-rise:after {
			content: "\10f775"
		}

		.fad.fa-wave-sine:after {
			content: "\10f899"
		}

		.fad.fa-wave-square:after {
			content: "\10f83e"
		}

		.fad.fa-wave-triangle:after {
			content: "\10f89a"
		}

		.fad.fa-waveform:after {
			content: "\10f8f1"
		}

		.fad.fa-waveform-path:after {
			content: "\10f8f2"
		}

		.fad.fa-webcam:after {
			content: "\10f832"
		}

		.fad.fa-webcam-slash:after {
			content: "\10f833"
		}

		.fad.fa-weight:after {
			content: "\10f496"
		}

		.fad.fa-weight-hanging:after {
			content: "\10f5cd"
		}

		.fad.fa-whale:after {
			content: "\10f72c"
		}

		.fad.fa-wheat:after {
			content: "\10f72d"
		}

		.fad.fa-wheelchair:after {
			content: "\10f193"
		}

		.fad.fa-whistle:after {
			content: "\10f460"
		}

		.fad.fa-wifi:after {
			content: "\10f1eb"
		}

		.fad.fa-wifi-1:after {
			content: "\10f6aa"
		}

		.fad.fa-wifi-2:after {
			content: "\10f6ab"
		}

		.fad.fa-wifi-slash:after {
			content: "\10f6ac"
		}

		.fad.fa-wind:after {
			content: "\10f72e"
		}

		.fad.fa-wind-turbine:after {
			content: "\10f89b"
		}

		.fad.fa-wind-warning:after {
			content: "\10f776"
		}

		.fad.fa-window:after {
			content: "\10f40e"
		}

		.fad.fa-window-alt:after {
			content: "\10f40f"
		}

		.fad.fa-window-close:after {
			content: "\10f410"
		}

		.fad.fa-window-frame:after {
			content: "\10f94f"
		}

		.fad.fa-window-frame-open:after {
			content: "\10f950"
		}

		.fad.fa-window-maximize:after {
			content: "\10f2d0"
		}

		.fad.fa-window-minimize:after {
			content: "\10f2d1"
		}

		.fad.fa-window-restore:after {
			content: "\10f2d2"
		}

		.fad.fa-windsock:after {
			content: "\10f777"
		}

		.fad.fa-wine-bottle:after {
			content: "\10f72f"
		}

		.fad.fa-wine-glass:after {
			content: "\10f4e3"
		}

		.fad.fa-wine-glass-alt:after {
			content: "\10f5ce"
		}

		.fad.fa-won-sign:after {
			content: "\10f159"
		}

		.fad.fa-wreath:after {
			content: "\10f7e2"
		}

		.fad.fa-wrench:after {
			content: "\10f0ad"
		}

		.fad.fa-x-ray:after {
			content: "\10f497"
		}

		.fad.fa-yen-sign:after {
			content: "\10f157"
		}

		.fad.fa-yin-yang:after {
			content: "\10f6ad"
		}

		@font-face {
			font-family: "Font Awesome 5 Pro";
			font-style: normal;
			font-weight: 300;
			font-display: block;
			src: url(https://fonts.d2cmedia.ca/webfonts/fa-light-300.eot);
			src: url(https://fonts.d2cmedia.ca/webfonts/fa-light-300.eot?#iefix) format("embedded-opentype"), url(https://fonts.d2cmedia.ca/webfonts/fa-light-300.woff2) format("woff2"), url(https://fonts.d2cmedia.ca/webfonts/fa-light-300.woff) format("woff"), url(https://fonts.d2cmedia.ca/webfonts/fa-light-300.ttf) format("truetype"), url(https://fonts.d2cmedia.ca/webfonts/fa-light-300.svg#fontawesome) format("svg")
		}

		.fal {
			font-weight: 300
		}

		@font-face {
			font-family: "Font Awesome 5 Pro";
			font-style: normal;
			font-weight: 400;
			font-display: block;
			src: url(https://fonts.d2cmedia.ca/webfonts/fa-regular-400.eot);
			src: url(https://fonts.d2cmedia.ca/webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(https://fonts.d2cmedia.ca/webfonts/fa-regular-400.woff2) format("woff2"), url(https://fonts.d2cmedia.ca/webfonts/fa-regular-400.woff) format("woff"), url(https://fonts.d2cmedia.ca/webfonts/fa-regular-400.ttf) format("truetype"), url(https://fonts.d2cmedia.ca/webfonts/fa-regular-400.svg#fontawesome) format("svg")
		}

		.fal, .far {
			font-family: "Font Awesome 5 Pro"
		}

		.far {
			font-weight: 400
		}

		@font-face {
			font-family: "Font Awesome 5 Pro";
			font-style: normal;
			font-weight: 900;
			font-display: block;
			src: url(https://fonts.d2cmedia.ca/webfonts/fa-solid-900.eot);
			src: url(https://fonts.d2cmedia.ca/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(https://fonts.d2cmedia.ca/webfonts/fa-solid-900.woff2) format("woff2"), url(https://fonts.d2cmedia.ca/webfonts/fa-solid-900.woff) format("woff"), url(https://fonts.d2cmedia.ca/webfonts/fa-solid-900.ttf) format("truetype"), url(https://fonts.d2cmedia.ca/webfonts/fa-solid-900.svg#fontawesome) format("svg")
		}

		.fa, .fas {
			font-family: "Font Awesome 5 Pro";
			font-weight: 900
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

		body > .wrapper > .up_menu > #nav > .isBold {
			font-weight: bold;
		}


		#nav > li#MainMenu_HOME > a.isImage > span {
			height: 33px;
			width: 31px;
			padding: 0;
			text-indent: -2000em;
			background-image: url('images/icon_home_tabColor.png');
			background-position: center 0px;
			background-repeat: no-repeat;
			display: block;
		}

		#nav > li#MainMenu_HOME:hover > a.isImage > span {
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

		.up_menu ul#nav #MainMenu_NEW > ul.sub > li > div.mainmenu-submenu > ul.sub > li.hasSub:hover > a {
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

		.up_menu ul#nav li#MainMenu_NEW ul.sub > li:hover > .mainmenu-submenu, .up_menu ul#nav li#MainMenu_USED ul.sub > li:hover > .mainmenu-submenu {
			display: block;
			visibility: visible;
			left: 100%;
			transition: all 0.2s, opacity 0.5s;
			opacity: 1;
		}

		div.mainmenu-submenu > ul.sub > li > ul.sub, div.mainmenu-submenu > ul.sub > li > ul.sub > li {
			position: static;
			background-color: white;
		}

		div.mainmenu-submenu > ul.sub > li > ul.sub, div.mainmenu-submenu > ul.sub > li > ul.sub > li:hover {
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
			-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
			box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
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

		body .wrapper .up_menu {
			height: 48px;
			width: 960px;
			position: relative;
			z-index: 1000;
			/*margin-top: 114px;*/
			white-space: nowrap;
		}

		body .wrapper .up_menu.hiddenheader {
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

		body .wrapper .up_menu.fixed:hover {
			opacity: 1;
		}

		/* general style, overriden by sub items */
		body .wrapper .up_menu > div {
			width: 100%;
			background: rgb(51, 51, 51);
			height: 48px;
		}

		body .wrapper .up_menu #nav > li.nofx > a {
			transition: none;
		}

		body .wrapper .up_menu #nav > li {
			float: right;
		}

		body .wrapper .up_menu #nav > li a {
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
			-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
			box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
		}

		.up_menu ul#nav {
			margin: 0;
			padding: 0;
			background-color: rgb(51, 51, 51);
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
			position: relative;
		}

		#MainMenu_SUB_TAB_COMMERCIAL_COMMER a.imgLink img {
			max-height: 60px !important;
			height: 60px;
			width: 60px;
		}

		#MainMenu_SUB_TAB_COMMERCIAL_COMMER > ul.sub {
			left: 100% !important;
		}

		.up_menu li#MainMenu_TAB_COMMERCIAL > ul.sub > li > ul.sub {
			max-height: 640px;
			overflow-y: auto;
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
		.up_menu ul#nav li#MainMenu_NEW ul.sub > li:hover ul.sub, .up_menu ul#nav li#MainMenu_USED ul.sub > li:hover ul.sub,
		.up_menu ul#nav li#MainMenu_TAB_COMMERCIAL ul.sub > li:hover ul.sub, .up_menu ul#nav li#MainMenu_USED ul.sub > li:hover ul.sub {
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
			padding-bottom: 10px;
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

		.up_menu ul#nav #MainMenu_NEW > ul.sub li > ul.sub > li.hasSub:hover > a,
		.up_menu ul#nav #MainMenu_TAB_COMMERCIAL > ul.sub li > ul.sub > li.hasSub:hover > a {
			background-color: white;
			color: #000000;
		}

		.up_menu ul#nav #MainMenu_NEW > ul.sub li a.empty,
		.up_menu ul#nav #MainMenu_TAB_COMMERCIAL > ul.sub li a.empty {
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

		.up_menu li#MainMenu_NEW ul.sub > li > ul.sub > li:hover > ul.sub,
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

		.up_menu.menu5 #MainMenu_USED > ul.sub {
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
			display: block;
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

		.menu-service-wrapper, .menu-service-wrapper .jqTransformInputWrapper, .menu-service-wrapper, .menu-service-wrapper .jqTransformSelectWrapper {
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
			border-top: 2px solid;
			border-bottom: 2px solid;
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
		.finance-menu-credsii {
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

		.hideOnPreLoad {
			visibility: hidden
		}

		.reveal-modal {
			visibility: hidden;
		}</style>
</head>
<body class="isPageFullWidthEnabled template1 isFullWidthPage ENGLISH">
<?php include 'shared/header.php' ?>
<div class="MainBoxLayer">
	<div class="left_box LeftBoxLayer">
		<div class="clearfix">
			<div id="breadcrumbs" class="-mb10"></div>
		</div>
		<div class="OuterBoxLayer">
			<div class="InnerBoxLayer">
				<div class='ckeditorWrapper responsive-editor'><!--CSS_183df5574dfa083b518ec7516683ba75 -->
					<section class="elegance-insurance">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<h1><?=$this->lang->line('insurance')?> - Sean Auto Sales</h1>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<p style="text-align: justify;">Sean Auto Sales <?=$this->lang->line('insurance_para')?></p>

									<p style="text-align: justify;"></p>

									<p style="text-align: justify;"><strong><?=$this->lang->line('insurance_contact_us')?>:</strong>
									</p>

									<p></p>

									<form action="" method="post" name="contact_form3"
										  id="contact_form3">
										<div class="rows">
											<div class="cells -w400">
												<div class="rows">
													<label for="name"><?=$this->lang->line('name')?> <span class="asterisk">*</span></label>
												</div>
												<div class="rows">
													<input id="name" type="text" class="name form-control required" value="" size="29"/>
												</div>
											</div>
										</div>
										<div class="rows" style="padding-top:8px">
											<div class="cells -w400">
												<div class="rows">
													<label for="email"><?=$this->lang->line('email')?> <span class="asterisk">*</span></label>
												</div>
												<div class="rows">
													<input id="email" type="email" size="29" class="required form-control email" value=""/>
												</div>
											</div>
											<div class="cells -w400">
												<div class="rows">
													<label for="phone"><?=$this->lang->line('contact_us_phone')?> <span class="asterisk">*</span></label>
												</div>
												<div class="rows">
													<input id="phone" type="number" class="required form-control phone" value="" size="29"/>
												</div>
											</div>
										</div>
										<div class="rows" style="padding-top:8px">
											<div class="cols -w700">
												<div class="rows">
													<label for="query_area"><?=$this->lang->line('contact_us_comments')?> <span class="asterisk">*</span></label>
												</div>
												<div class="rows">
										<textarea id="message" class="required form-control watermark" rows="10" cols="35"
												  name="query_area"></textarea>
												</div>
											</div>
										</div>
										<div class="rows -mt20"  style="padding-top:8px">
											<div class="cols -w700">
												<div id='MissingValidationMsg' class='errorMsg'>
													Please complete all required fields
												</div>
												<div id='MissingValidationMsg1' class='errorMsg'>
													Phone number should be of 10-digits
												</div>
												<div id='MissingValidationMsg2' class='errorMsg'>
													Email is invalid
												</div>
												<div id='emailSentMsg' class='emailSentMsg'>
													Your message has been sent
												</div>
												<a href="javascript:void(0);"
												   style="background:black!important;color:white!important;text-decoration:none!important"
												   class=" -right -uppercase btn-default "
												   onclick="submitInsuranceForm()"><?=$this->lang->line('contact_us_submit')?></a>
											</div>
										</div>
										<div class="rows">
											<div class="cols -w700">
												<div style='display:none'>
													<div id='emailSubjectDef' style='display:none'>Lead: Request for contact</div>
													<div id='emailBodyDef' style='display:none'>Hello,<br/><br/>A potential client
														visiting your website has completed the contact form:<br/><br/><u>Visitor
															information</u>:<br/>Name: <strong>{$NAME}</strong><br/>Email:
														<strong><a href="mailto:{$EMAIL}">{$EMAIL}</a></strong><br/>Phone:
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
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- POPUP & EXTRA POPUP HTML -->


<!-- POPUP & EXTRA POPUP HTML END -->

<div id="d2c_vars"><input type="hidden" value="NEW" id="so7yuqaj4dwcc8s" data-forvar="SITE_CAR_SECTION_TYPE"/>
	<input type="hidden" value="live" id="2ejhbc0yyog0www" data-forvar="DEPLOYMENTTYPE"/>
	<input type="hidden" value="" id="5l56aukyq64g8kw" data-forvar="MAKE"/>
	<input type="hidden" value="" id="42clshyrqdq8gcg" data-forvar="MODEL"/>
	<input type="hidden" value="0" id="r82zfkxa2dwss00" data-forvar="YEAR"/>
	<input type="hidden" value="https://www.eleganceleasing.com/" id="i3gsaxgs5jk8wck" data-forvar="REFERER"/>
</div>
<script type="text/javascript" data-compiler="inline">
	/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
	(function (w) {
		"use strict";
		var loadCSS = function (href, before, media) {
			var doc = w.document;
			var ss = doc.createElement("link");
			var ref;
			if (before) {
				ref = before
			} else {
				var refs = (doc.body || doc.getElementsByTagName("head")[0]).childNodes;
				ref = refs[refs.length - 1]
			}
			var sheets = doc.styleSheets;
			ss.rel = "stylesheet";
			ss.href = href;
			ss.media = "only x";

			function ready(cb) {
				if (doc.body) {
					return cb()
				}
				setTimeout(function () {
					ready(cb)
				})
			}

			ready(function () {
				ref.parentNode.insertBefore(ss, (before ? ref : ref.nextSibling))
			});
			var onloadcssdefined = function (cb) {
				var resolvedHref = ss.href;
				var i = sheets.length;
				while (i--) {
					if (sheets[i].href === resolvedHref) {
						return cb()
					}
				}
				setTimeout(function () {
					onloadcssdefined(cb)
				})
			};

			function loadCB() {
				if (ss.addEventListener) {
					ss.removeEventListener("load", loadCB)
				}
				ss.media = media || "all"
			}

			if (ss.addEventListener) {
				ss.addEventListener("load", loadCB)
			}
			ss.onloadcssdefined = onloadcssdefined;
			onloadcssdefined(loadCB);
			return ss
		};
		if (typeof exports !== "undefined") {
			exports.loadCSS = loadCSS
		} else {
			w.loadCSS = loadCSS
		}
	}(typeof global !== "undefined" ? global : this))
	loadCSS('<?=base_url()?>assets/css/insurance.css');
</script>

<!-- ##ENDOFPAGE## -->
<?php include 'shared/footer.php' ?>
<div id="ios_fixed_bg"></div>


<!-- PromotionSideBtn DISABLED FOR SECTION: CUSTOM -->


<div id="HIDDEN_INPUTS">
	<!-- bundling hidden inputs to please Google -->
	<div class="hi____1">
		<input type='hidden' id='currentItemType' value='car'/>
		<input type='hidden' id='currentItemTypeURLSafeEN' value=''/>
		<input type='hidden' id='currentStatus' value='new'/>
		<input type='hidden' id='txtUserAgent' value='Windows  '/>
		<input type='hidden' id='currentCarPrice' value='0'/>
		<input type='hidden' id='txtBuildAndPriceEmailLink'
			   value="Last configured vehicle (Build & Price module) on {$BANPLINK}"/>
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
		<input type='hidden' id='ffdL1' value="d0b187698f6faf378282208f4c88c0d2c3a99305"/>
		<input type='hidden' id='isAVGMarketPriceActive' value="0"/>
		<input type='hidden' id='isAVGMarketPriceActiveClearance' value="0"/>
		<input type='hidden' id='showOnlyReducedPriceClearance' value="0"/>
		<input type='hidden' id='hasMultipleDealers' value="0"/>
		<input type='hidden' id='sendEmailToAllDealers' value="0"/>
		<input type='hidden' id='searchedVehicle' value="  0"/>
		<input type='hidden' id='searchedquerymake' name='searchedquerymake' value=''/>
		<input type='hidden' id='searchedquerymodel' name='searchedquerymodel' value=''/>
		<input type='hidden' id='searchedqueryyear' name='searchedqueryyear' value=''/>
		<input type='hidden' id='imgsvrpoolactive' name='imgsvrpoolactive' value='TRUE'/>
		<input type='hidden' id='sitecompileid' name='sitecompileid' value="600ac72ab6eca"/>
		<input type='hidden' id='disablePopups' name='disablePopups' value='0'/>
		<input type='hidden' id='serviceEnabled' name='serviceEnabled' value='1'/>
	</div>
	<div class="hi____2">
		<input type='hidden' id='ADMIN_GENERAL_BLOCK_FR_DOMAIN_CHECK' name='ADMIN_GENERAL_BLOCK_FR_DOMAIN_CHECK'
			   value="1"/>
		<input type='hidden' id='newSectionnabled' name='newSectionnabled' value=''/>
		<input type='hidden' id='usedSectionnabled' name='newSectionnabled' value='1'/>
		<input type='hidden' id='financeSectionnabled' name='financeSectionnabled' value='1'/>
		<input type='hidden' id='serviceSectionnabled' name='serviceSectionnabled' value='1'/>
		<input type='hidden' id='promoSectionnabled' name='promoSectionnabled' value=''/>
		<input type="hidden" id="targetPage" name="targetPage" value="CUSTOMPAGE"/>
		<input type="hidden" id="DiscountPopupOtherPages" name="DiscountPopupOtherPages" value="HOMEPAGE"/>
		<input type="hidden" id="DiscountPopupDelayShowOther" name="DiscountPopupDelayShowOther" value=""/>
		<input type="hidden" id="DiscountPopupDelayShow" name="DiscountPopupDelayShow" value=""/>
		<input type="hidden" id="DiscountPopupDelayShowNew" name="DiscountPopupDelayShowNew" value="1"/>
		<input type="hidden" id="SHOW_POPUP_AUTO" name="SHOW_POPUP_AUTO" value="percent"/>
		<input type="hidden" id="SHOW_POPUP_AUTO_USED" name="SHOW_POPUP_AUTO_USED" value="delay"/>
		<input type="hidden" id="SHOW_POPUP_AUTO_NEW" name="SHOW_POPUP_AUTO_NEW" value="delay"/>
		<input type="hidden" id="AUTO_PERCENT_POPUP" name="AUTO_PERCENT_POPUP" value="75"/>
		<input type="hidden" id="AUTO_PERCENT_POPUP_USED" name="AUTO_PERCENT_POPUP_USED" value="75"/>
		<input type="hidden" id="AUTO_PERCENT_POPUP_NEW" name="AUTO_PERCENT_POPUP_NEW" value="75"/>
		<input type="hidden" id="GENERAL_USED_PAGE_POPUP_SELECT" name="GENERAL_USED_PAGE_POPUP_SELECT"
			   value="INCLUDING"/>
		<input type="hidden" id="GENERAL_NEW_PAGE_POPUP_SELECT" name="GENERAL_NEW_PAGE_POPUP_SELECT" value="INCLUDING"/>
		<input type="hidden" id="USED_LOGO_ON_CHECK" name="USED_LOGO_ON_CHECK" value=""/>
		<input type='hidden' id='SEM_BOOSTER_ACTIVE' name='SEM_BOOSTER_ACTIVE' value='0'/>
		<input type='hidden' id='PAGEID' name='PAGEID' value='generic_1.html'/>
		<input type='hidden' id='CRM_WSS_ACTIVE' name='CRM_WSS_ACTIVE' value='no'/>
		<input type='hidden' id='REQUEST_SENT' name='REQUEST_SENT' value='Your request has been sent!'/>
		<input type='hidden' id='DEALERBRAND' name='DEALERBRAND' value=''/>
		<input type='hidden' id='ISVM' name='ISVM' value=''/>
		<input type='hidden' id='GRWL' name='GRWL'
			   value='b2e350b71c1646b7eeec9e1af6c854b13cb1db51;ba6b8611cba1178031b17fa7e350acf2ce135aa5;09c35807ba47a82592ef88e5d6304ea699b8cbe2'/>
		<!-- <input type='hidden' value="/requests/price-used/" id='priceRequestFolder'/>
				<input type='hidden' value="/requests/test-drive-used/" id='ScheduleTestDriveFolder'/>
				<input type='hidden' value="/requests/credit/" id='FinanceFolder'/> -->
		<input type='hidden' value="/requests/offer-used/" id='textMakeOfferFolder'/>
		<input type='hidden' value="0" id='hasVBDCEnabled'/>
	</div>
</div>
<div id="confirm_forms"></div>


<!-- OO::8100255b9ed2f4201ab944526f270492 -->
<div id='asPopUp' class='reveal-modal medium'>
	<form class="jqtransform">
		<div class="asTitle">
			PLEASE CONFIRM
		</div>

		<div style='height:140px;'>
			In order to comply with the Canadian Anti-Spam Law. we are asking you to confirm that you wish to receive
			communications from us such as rebates, promotions, offers and future private sales.
		</div>

		<div class="">
			<a id="emailConsentExplicit" href="javascript:void(0);" class=" -uppercase -left -mr40 black btn-default "
			   style="margin-left: 85px;">YES</a>
		</div>
		<div class="">
			<a id="emailConsentImplicit" href="javascript:void(0);" class=" -uppercase no btn-default ">NO</a>
		</div>

		<input type='hidden' id='mandatoryOptIn' value='0'/>
		<input type='hidden' id='lastConsentPop' value=''/>
	</form>
</div>
<input type='hidden' id='siteID' value='907'/> <input type='hidden' id='hiddenSiteID' value='907'>
<input type='hidden' id='hiddenSkipOnloadPrintscreen' value='##DONT_SKIP_ONLOAD##'>
<input type='hidden' id='hiddenPrintscreenKey' value='##PRINTSCREEN_KEY##'>
<input type='hidden' id='hiddenDealerName' value='Elegance Leasing'>
<input type="hidden" name="CBBCheckUser" value="MTQyLjExNy4xNTguMTI0">
<div style='position:absolute;top:0px;width:1px;height:1px;overflow:hidden;'>


</div>

<div id="conversionTagsWrapper"></div>

<!-- DWP-2439 -->

<!-- OO::8a5c4f78bf0f1333008c900b42132b06 -->

<!-- CUSTOM BODY FREEFIELD -->

<div id="emailSuccessMessage" class="reveal-modal email-consent-box">
	<div class="icon-title">
		<!-- <span class="title-icon success -ml0"></span> -->
		<span class="title-txt">Your request was sent successfully!</span>
	</div>
	<p><br/>Elegance Leasing wants to thank you for your request. Someone will contact you shortly.</p>
	<!-- <a class="close-reveal-modal">&#215;</a> -->
	<div class="email-consent-btns -pt20 -right ampConsentResponseSendDismiss">
		<a href="#" class="confirm_successContinue  btn-default ">Close</a>
	</div>
	<form id="emailmsgfrm" class="confirm_html" target="iframe" method="post"
		  action="https://www.eleganceleasing.com/confirmation.html">
		<input type="hidden" name="label" class="labelemail" value=""/>
		<input type="hidden" name="section" class="labelsection" value="Occasion"/>
		<input type="hidden" name="brand" class="brandemail" value=""/>
		<input type="hidden" name="model" class="modelemail" value=""/>
		<input type="hidden" name="year" class="yearemail" value="0"/>
		<input type="hidden" name="googleid" value="UA-158727174-1"/>
		<input type="hidden" name="googleidd2cmedia" value="UA-105238240-286"/>
		<input type="hidden" name="adwordsconid" value=""/>
		<input type="hidden" name="adwordslabelid" value=""/>
		<input type="hidden" name="bingconid" value=""/>
		<input type="hidden" name="bingactionid" value=""/>
		<input type="hidden" name="bingdomainid" value=""/>

		<input type="hidden" name="adrollAdv" value=""/>
		<input type="hidden" name="adrollPix" value=""/>

		<input type="hidden" name="facebookConId" value=""/>

		<input type="hidden" name="domain" value="eleganceleasing.com"/>
		<input type="hidden" name="referrer" value="index.html"/>
		<input type="hidden" name="department" value="USED"/>
		<input type="hidden" name="lead_department" value=""/>
		<input type="hidden" name="isexpress" class='isexpress' value="0"/>
		<input type="hidden" name="ispromo" value="0"/>
		<input type="hidden" name="ishomepage" value="0"/>
		<input type="hidden" name="testmode" class="testmode" value="0"/>

		<input type="hidden" name="leadType" value=""/>
		<input type="hidden" name="pageID" value=""/>
		<input type="hidden" name="currentURL" value=""/>
		<input type="hidden" name="isConfirmPopup" value=""/>

		<input type="hidden" name="isFullWidth" value=""/>
		<input type="hidden" name="dealerName" value=""/>
		<input type="hidden" name="buttonPosition" value=""/>
		<input type="hidden" name="isMobileNewVDP" value="0"/>
		<input type="hidden" name="fromAutoAubaine" value=""/>

		<input type='hidden' value='NEW' name='textCarSectionType' style='display:none;'/>
		<input type="hidden" name="lang" value="fr"/>
	</form>
	<iframe width='1' height='1' name="iframe" frameborder="0"></iframe>
</div>

<div id="emailFailMessage" class="reveal-modal email-consent-box">
	<span class='fail'>An error occurred submitting your message</span>
	<p>We were unable to send your message. Please refresh and try again</p>
	<a class="close-reveal-modal"><em class="fa fa-times-circle"></em></a>
	<div class="-pt20 -right ampConsentResponseSendDismiss">
		<a href="#" class="confirm_failContinue  btn-default ">Close</a>
	</div>
</div>


<div id="outdated">
	<p>It looks like you are using a deprecated browser, which might encounter problems properly displaying this site.
		For the best browsing experience, we recommend switching to <a href="https://www.google.com/intl/en_ca/chrome/">Google
			Chrome</a>.</p>
	<p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>
	<a style="display:none;" id="btnUpdateBrowser"></a>
</div>


<div id="emailSuccessMessage" class="reveal-modal email-consent-box">
	<div class="icon-title">
		<!-- <span class="title-icon success -ml0"></span> -->
		<span class="title-txt">Your request was sent successfully!</span>
	</div>
	<p><br/>Elegance Leasing wants to thank you for your request. Someone will contact you shortly.</p>
	<!-- <a class="close-reveal-modal">&#215;</a> -->
	<div class="email-consent-btns -pt20 -right ampConsentResponseSendDismiss">
		<a href="#" class="confirm_successContinue  btn-default ">Close</a>
	</div>
	<form id="emailmsgfrm" class="confirm_html" target="iframe" method="post"
		  action="https://www.eleganceleasing.com/confirmation.html">
		<input type="hidden" name="label" class="labelemail" value=""/>
		<input type="hidden" name="section" class="labelsection" value="Occasion"/>
		<input type="hidden" name="brand" class="brandemail" value=""/>
		<input type="hidden" name="model" class="modelemail" value=""/>
		<input type="hidden" name="year" class="yearemail" value="0"/>
		<input type="hidden" name="googleid" value="UA-158727174-1"/>
		<input type="hidden" name="googleidd2cmedia" value="UA-105238240-286"/>
		<input type="hidden" name="adwordsconid" value=""/>
		<input type="hidden" name="adwordslabelid" value=""/>
		<input type="hidden" name="bingconid" value=""/>
		<input type="hidden" name="bingactionid" value=""/>
		<input type="hidden" name="bingdomainid" value=""/>

		<input type="hidden" name="adrollAdv" value=""/>
		<input type="hidden" name="adrollPix" value=""/>

		<input type="hidden" name="facebookConId" value=""/>

		<input type="hidden" name="domain" value="eleganceleasing.com"/>
		<input type="hidden" name="referrer" value="index.html"/>
		<input type="hidden" name="department" value="USED"/>
		<input type="hidden" name="lead_department" value=""/>
		<input type="hidden" name="isexpress" class='isexpress' value="0"/>
		<input type="hidden" name="ispromo" value="0"/>
		<input type="hidden" name="ishomepage" value="0"/>
		<input type="hidden" name="testmode" class="testmode" value="0"/>

		<input type="hidden" name="leadType" value=""/>
		<input type="hidden" name="pageID" value=""/>
		<input type="hidden" name="currentURL" value=""/>
		<input type="hidden" name="isConfirmPopup" value=""/>

		<input type="hidden" name="isFullWidth" value=""/>
		<input type="hidden" name="dealerName" value=""/>
		<input type="hidden" name="buttonPosition" value=""/>
		<input type="hidden" name="isMobileNewVDP" value="0"/>
		<input type="hidden" name="fromAutoAubaine" value=""/>

		<input type='hidden' value='NEW' name='textCarSectionType' style='display:none;'/>
		<input type="hidden" name="lang" value="fr"/>
	</form>
	<iframe width='1' height='1' name="iframe" frameborder="0"></iframe>
</div>

<div id="emailFailMessage" class="reveal-modal email-consent-box">
	<span class='fail'>An error occurred submitting your message</span>
	<p>We were unable to send your message. Please refresh and try again</p>
	<a class="close-reveal-modal"><em class="fa fa-times-circle"></em></a>
	<div class="-pt20 -right ampConsentResponseSendDismiss">
		<a href="#" class="confirm_failContinue  btn-default ">Close</a>
	</div>
</div>


<input type="hidden" id="customPageName" value="Insurance"/>
<input type="hidden" id="customFormErrorMsg" value="Please complete all required fields"/>

<input type="hidden" id="customForm_msgfieldname" value="Message"/>
<input type="hidden" id="customForm_originalsendto" value="New"/>
<input type="hidden" id="customForm_sendto" value="sales@eleganceleasing.com"/>
<input type="hidden" id="customForm_sendtoADF" value=""/>

<input type="hidden" id="customForm_requesttype" value="Insurance request request"/>
<input type="hidden" id="customForm_requesttype_uitext" value="CustomPageForm_5d35d38446525"/>

<input type="hidden" id="customForm_mailid" value="CustomPageForm_NEW"/>

<div id="emaildef_CustomPageForm_NEW" style="display: none;">
	<div class="emailSubject">Lead : {$DEMANDE}</div>
	<div class="emailBody">Hello,<br/><br/>A potential customer who visited your website has completed an online form on
		the following page {$CUSTOMPAGENAME}:<br/><br/><u>Visitor Information</u>:<br/>Name:
		<strong>{$MNAME}</strong><br/>Email: <strong><a href="mailto:{$MMAIL}">{$MMAIL}</a></strong><br/>Phone: <strong><a
				href="tel:{$MPHONE}">{$MPHONE}</a></strong> {$PHONE_VALIDATION_ATTEMPTS}<br/><br/>{$QUESTIONSTITLE}:
		<strong>{$QUESTIONS}</strong><br/>
		<hr/>
		<br/>
		<div style="##SEOBLOCKDISPLAY##">Media Source: <strong>{$UTMDETAILS}</strong><br/>Browser:
			<strong>{$USERAGENT}</strong><br/>Browsing history: <strong><a href="%7b%24UULINK%7d.html"
																		   style="color:black; text-decoration: none;">Click
					here</a></strong></div>
		<br/>{$DEALER_SENDTO}<p>Consent: <strong>{$CONSENT_DETAILS}</strong>{$PURCHASE_INTENT}<br/><br/></div>
</div>
<script type="text/javascript" async="true"
		src="<?=base_url()?>assets/js/insurance.js"></script>
<input type="hidden" value="USED" id="defaultDepartment"/></body>
<script>
	function submitInsuranceForm(){
		// e.preventDefault();
		$('#MissingValidationMsg').css('display','none');
		$('#MissingValidationMsg1').css('display','none');
		$('#MissingValidationMsg2').css('display','none');
		var name = $('#name').val();
		var phone = $('#phone').val();
		var email = $('#email').val();
		var message = $('#message').val();
		console.log('name',name);
		console.log('phone',phone);
		console.log('email',email);
		console.log('message',message);
		if(name == '' || phone == ''|| email == ''|| message == '')
		{
			$('#MissingValidationMsg').css('display','block');
			return;
		}
		else if(phone.length!=10)
		{
			$('#MissingValidationMsg1').css('display','block');
			return;
		}
		else if(validateEmail(email) == false)
		{
			$('#MissingValidationMsg2').css('display','block');
			return;
		}
		else{
			$.ajax({
				url: '<?=base_url()?>email/insuranceForm',
				type: 'POST',
				dataType: 'JSON',
				data: {name: name, phone:phone, email: email
					,message: message},
				success: function(data){
					// console.log(data);
					if(data.status == true)
						$('#emailSentMsg').css('display','block')
					else
						alert('Something went wrong!')
				}
			});

		}
	}
	function validateEmail(email) {
		const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(String(email).toLowerCase());
	}
</script>
</html>
