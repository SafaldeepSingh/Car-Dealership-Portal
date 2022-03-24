<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<html lang='en'>
<head>
	<title>Auto financing and auto credit in Montr&eacute;al at Sean Auto Sales. Second chance credit.</title>
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/finance-css.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/finance-pro_dropdown_4.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/finance-jqtransform.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/finance-jquery.ui.all.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/finance-jquery.datetimepicker.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/finance-nivo-slider.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/finance-default.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/finance-credit.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/finance-advanced-slider-base.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/finance-reveal.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/finance-fonts.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/finance-main.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/finance-grid.css">
	<style type="text/css" data-rl="1">

		div.MainBoxLayer {
			width: 960px;
			margin: 0 auto
		}

		div.MainBoxLayer H1 {
			width: 940px;
			float: left
		}

		div.MainBoxLayer div.credsiiDiv H1 {
			width: auto;
			float: none
		}

		.credsiiDiv {
			white-space: normal
		}

		div.MainBoxLayer div.OuterBoxLayer {
			padding: 10px;
			float: left;
			width: 940px
		}

		div.MainBoxLayer div.InnerBoxLayer {
			height: auto;
			float: left;
			padding: 0;
			margin: 0;
			width: 100%;
			clear: both
		}

		div.MainBoxLayer div.InnerBoxLayer.topBordered {
			border-top: 1px solid #ccc
		}

		div.MainBoxLayer div.InnerBoxLayer.bottomBordered {
			border-bottom: 1px solid #ccc
		}

		div.MainBoxLayer div.BoxChild.east {
			float: right
		}

		div.MainBoxLayer div.BoxChild.west {
			float: left
		}

		body.isFullWidthPage.isPageFullWidthEnabled div.MainBoxLayer #topBannerImage {
			width: 940px;
			height: auto;
			text-align: center;
			margin: 0 auto
		}

		body.isFullWidthPage.isPageFullWidthEnabled div.MainBoxLayer #topBannerImage > img {
			max-width: 100% !important
		}

		div.MainBoxLayer div.OuterBoxLayer#historyDiv div.InnerBoxLayer #breadcrumbs {
			margin: 0
		}

		@media only screen and (min-width: 1301px) {
			body.isFullWidthPage.isPageFullWidthEnabled div.MainBoxLayer {
				width: 1200px
			}

			body.isFullWidthPage.isPageFullWidthEnabled div.MainBoxLayer div.OuterBoxLayer {
				width: 1180px
			}

			body.isFullWidthPage.isPageFullWidthEnabled div.MainBoxLayer div.OuterBoxLayer.xtimeFrame {
				width: 1200px
			}

			body.isFullWidthPage.isPageFullWidthEnabled div.MainBoxLayer H1 {
				width: 1180px
			}

			body.isFullWidthPage.isPageFullWidthEnabled div.MainBoxLayer div.credsiiDiv H1 {
				width: auto
			}

			body.isFullWidthPage.isPageFullWidthEnabled div.MainBoxLayer #topBannerImage {
				width: 1180px
			}

			body.isFullWidthPage.isPageFullWidthEnabled div.MainBoxLayer #topBannerImage.TEAM {
				width: 960px
			}
		}

		/** /css/div_spans.css **/
		.divSpan {
			float: left;
			box-sizing: border-box
		}

		.divSpan.divSpanLeft {
			float: left
		}

		.divSpan.divSpanRight {
			float: right
		}

		.divSpan.divSpan1 {
			width: 8.333333333333333%
		}

		.divSpan.divSpan2 {
			width: 16.66666666666667%
		}

		.divSpan.divSpan3 {
			width: 25%
		}

		.divSpan.divSpan4 {
			width: 33.33333333333333%
		}

		.divSpan.divSpan5 {
			width: 41.66666666666667%
		}

		.divSpan.divSpan6 {
			width: 50%
		}

		.divSpan.divSpan7 {
			width: 58.33333333333333%
		}

		.divSpan.divSpan8 {
			width: 66.66666666666666%
		}

		.divSpan.divSpan9 {
			width: 75%
		}

		.divSpan.divSpan10 {
			width: 83.33333333333333%
		}

		.divSpan.divSpan11 {
			width: 91.66666666666666%
		}

		.divSpan.divSpan12 {
			width: 100%
		}

		/** /css/darktooltip.css **/
		.dark-tooltip {
			display: none;
			position: absolute;
			z-index: 1000;
			text-decoration: none;
			font-weight: normal;
			height: auto;
			top: 0;
			left: 0;
		}

		.dark-tooltip.small {
			padding: 4px;
			font-size: 12px;
			max-width: 150px;
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			border-radius: 2px;
		}

		.dark-tooltip.medium {
			padding: 6px;
			font-size: 11px;
			max-width: 200px;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
		}

		.dark-tooltip.large {
			padding: 16px;
			font-size: 16px;
			max-width: 250px;
			-webkit-border-radius: 6px;
			-moz-border-radius: 6px;
			border-radius: 6px;
		}

		/* Tips */
		.dark-tooltip .tip {
			transform: scale(1.01);
			-webkit-transform: scale(1.01);
			transform: scale(1.01);
			content: "";
			position: absolute;
			width: 0;
			height: 0;
			border-style: solid;
			line-height: 0px;
		}

		.dark-tooltip.south .tip {
			left: 50%;
			top: 100%;
		}

		.dark-tooltip.west .tip {
			left: 0;
			top: 50%;
		}

		.dark-tooltip.north .tip {
			left: 50%;
			top: 0;
		}

		.dark-tooltip.east .tip {
			left: 100%;
			top: 50%;
		}

		.dark-tooltip.south.small .tip {
			border-width: 0px 5px 0 5px;
			margin-left: -5px;
		}

		.dark-tooltip.south.medium .tip {
			border-width: 0px 6px 0 6px;
			margin-left: -6px;
		}

		.dark-tooltip.south.large .tip {
			border-width: 0px 12px 0 12px;
			margin-left: -12px;
		}

		.dark-tooltip.west.small .tip {
			border-width: 5px 7px 5px 0;
			margin-left: -7px;
			margin-top: -5px;
		}

		.dark-tooltip.west.medium .tip {
			border-width: 6px 8px 6px 0;
			margin-left: -8px;
			margin-top: -6px;
		}

		.dark-tooltip.west.large .tip {
			border-width: 12px 14px 12px 0;
			margin-left: -14px;
			margin-top: -12px;
		}

		.dark-tooltip.north.small .tip {
			border-width: 0 5px 7px 5px;
			margin-left: -5px;
			margin-top: -7px;
		}

		.dark-tooltip.north.medium .tip {
			border-width: 0 6px 8px 6px;
			margin-left: -6px;
			margin-top: -8px;
		}

		.dark-tooltip.north.large .tip {
			border-width: 0 12px 14px 12px;
			margin-left: -12px;
			margin-top: -14px;
		}

		.dark-tooltip.east.small .tip {
			border-width: 5px 0 5px 0px;
			margin-top: -5px;
		}

		.dark-tooltip.east.medium .tip {
			border-width: 6px 0px 6px 0px;
			margin-top: -6px;
		}

		.dark-tooltip.east.large .tip {
			border-width: 12px 0 12px 0px;
			margin-top: -12px;
		}

		/* confirm */
		.dark-tooltip ul.confirm {
			list-style-type: none;
			margin-top: 5px;
			display: inline-block;
			margin: 0 auto;
		}

		.dark-tooltip ul.confirm li {
			padding: 10px;
			float: left;
			margin: 5px;
			min-width: 25px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			-o-border-radius: 3px;
			border-radius: 3px;
		}

		/* themes */
		.dark-tooltip.dark {
			background-color: #DAD9DB;
			color: #000;
		}

		.dark-tooltip.light {
			background-color: #f5f5f5;
			color: #5e5e5e;
			border: 1px solid #5e5e5e;
			z-index: 100000;
		}

		.dark-tooltip.dark.south .tip {
			border-color: #DAD9DB transparent transparent transparent;
			_border-color: #DAD9DB #000000 #000000 #000000;
			_filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
		}

		.dark-tooltip.dark.west .tip {
			border-color: transparent #DAD9DB transparent transparent;
			_border-color: #000000 #DAD9DB #000000 #000000;
			_filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
		}

		.dark-tooltip.dark.north .tip {
			border-color: transparent transparent #DAD9DB transparent;
			_border-color: #000000 #000000 #DAD9DB #000000;
			_filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
		}

		.dark-tooltip.dark.east .tip {
			border-color: transparent transparent transparent #DAD9DB;
			_border-color: #000000 #000000 #000000 #DAD9DB;
			_filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000');
		}

		/*
	.dark-tooltip.light.south .tip{ border-color: #ebedf3 transparent transparent transparent; _border-color: #ebedf3 #000000 #000000 #000000; _filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000'); }
	.dark-tooltip.light.west .tip{ border-color: transparent #ebedf3 transparent transparent; _border-color: #000000 #ebedf3 #000000 #000000; _filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000'); }
	.dark-tooltip.light.north .tip{ border-color: transparent transparent #ebedf3 transparent; _border-color: #000000 #000000 #ebedf3 #000000; _filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000'); }
	.dark-tooltip.light.east .tip{ border-color: transparent transparent transparent #ebedf3; _border-color:#000000 #000000 #000000 #ebedf3 ; _filter: progid:DXImageTransform.Microsoft.Chroma(color='#000000'); }
	*/

		.dark-tooltip.light.south .tip {
			border-color: transparent;
			background-color: transparent;
			background-image: url(../css/tips.png);
			background-repeat: no-repeat;
			width: 12px;
			height: 8px;
		}

		.dark-tooltip.light.west .tip {
			border-color: transparent;
			background-color: transparent;
			background-image: url(../css/tipw.png);
			background-repeat: no-repeat;
			width: 8px;
			height: 12px;
		}

		.dark-tooltip.light.north .tip {
			border-color: transparent;
			background-color: transparent;
			background-image: url(../css/tipn.png);
			background-repeat: no-repeat;
			width: 12px;
			height: 8px;
		}

		.dark-tooltip.light.east .tip {
			border-color: transparent;
			background-color: transparent;
			background-image: url(../css/tipe.png);
			background-repeat: no-repeat;
			background-position: left center;
			width: 8px;
			height: 12px;
		}

		.dark-tooltip.dark ul.confirm li {
			background-color: #416E85;
		}

		.dark-tooltip.dark ul.confirm li:hover {
			background-color: #417E85;
		}

		.dark-tooltip.light ul.confirm li {
			background-color: #C1DBDB;
		}

		.dark-tooltip.light ul.confirm li:hover {
			background-color: #DCE8E8;
		}

		/* Animations */
		.animated {
			-webkit-animation-fill-mode: both;
			-moz-animation-fill-mode: both;
			-ms-animation-fill-mode: both;
			-o-animation-fill-mode: both;
			animation-fill-mode: both;
			-webkit-animation-duration: .5s;
			-moz-animation-duration: .5s;
			-ms-animation-duration: .5s;
			-o-animation-duration: .5s;
			animation-duration: .5s;
		}

		@-webkit-keyframes flipInUp {
			0.0001% {
				-webkit-transform: perspective(400px) rotateX(-90deg);
				opacity: 0;
			}
			40% {
				-webkit-transform: perspective(400px) rotateX(5deg);
			}
			70% {
				-webkit-transform: perspective(400px) rotateX(-5deg);
			}
			100% {
				-webkit-transform: perspective(400px) rotateX(0deg);
				opacity: 1;
			}
		}

		@-moz-keyframes flipInUp {
			0.0001% {
				transform: perspective(400px) rotateX(-90deg);
				opacity: 0;
			}
			40% {
				transform: perspective(400px) rotateX(5deg);
			}
			70% {
				transform: perspective(400px) rotateX(-5deg);
			}
			100% {
				transform: perspective(400px) rotateX(0deg);
				opacity: 1;
			}
		}

		@-o-keyframes flipInUp {
			0.0001% {
				-o-transform: perspective(400px) rotateX(-90deg);
				opacity: 0;
			}
			40% {
				-o-transform: perspective(400px) rotateX(5deg);
			}
			70% {
				-o-transform: perspective(400px) rotateX(-5deg);
			}
			100% {
				-o-transform: perspective(400px) rotateX(0deg);
				opacity: 1;
			}
		}

		@keyframes flipInUp {
			0.0001% {
				transform: perspective(400px) rotateX(-90deg);
				opacity: 0;
			}
			40% {
				transform: perspective(400px) rotateX(5deg);
			}
			70% {
				transform: perspective(400px) rotateX(-5deg);
			}
			100% {
				transform: perspective(400px) rotateX(0deg);
				opacity: 1;
			}
		}

		@-webkit-keyframes flipInRight {
			0.0001% {
				-webkit-transform: perspective(400px) rotateY(-90deg);
				opacity: 0;
			}
			40% {
				-webkit-transform: perspective(400px) rotateY(5deg);
			}
			70% {
				-webkit-transform: perspective(400px) rotateY(-5deg);
			}
			100% {
				-webkit-transform: perspective(400px) rotateY(0deg);
				opacity: 1;
			}
		}

		@-moz-keyframes flipInRight {
			0.0001% {
				transform: perspective(400px) rotateY(-90deg);
				opacity: 0;
			}
			40% {
				transform: perspective(400px) rotateY(5deg);
			}
			70% {
				transform: perspective(400px) rotateY(-5deg);
			}
			100% {
				transform: perspective(400px) rotateY(0deg);
				opacity: 1;
			}
		}

		@-o-keyframes flipInRight {
			0.0001% {
				-o-transform: perspective(400px) rotateY(-90deg);
				opacity: 0;
			}
			40% {
				-o-transform: perspective(400px) rotateY(5deg);
			}
			70% {
				-o-transform: perspective(400px) rotateY(-5deg);
			}
			100% {
				-o-transform: perspective(400px) rotateY(0deg);
				opacity: 1;
			}
		}

		@keyframes flipInRight {
			0.0001% {
				transform: perspective(400px) rotateY(-90deg);
				opacity: 0;
			}
			40% {
				transform: perspective(400px) rotateY(5deg);
			}
			70% {
				transform: perspective(400px) rotateY(-5deg);
			}
			100% {
				transform: perspective(400px) rotateY(0deg);
				opacity: 1;
			}
		}

		.flipIn {
			-webkit-backface-visibility: visible !important;
			-moz-backface-visibility: visible !important;
			-o-backface-visibility: visible !important;
			backface-visibility: visible !important
		}

		.flipIn.south, .flipIn.north {
			-webkit-animation-name: flipInUp;
			-moz-animation-name: flipInUp;
			-o-animation-name: flipInUp;
			animation-name: flipInUp;
		}

		.flipIn.west, .flipIn.east {
			-webkit-animation-name: flipInRight;
			-moz-animation-name: flipInRight;
			-o-animation-name: flipInRight;
			animation-name: flipInRight;
		}

		@-webkit-keyframes fadeIn {
			0% {
				opacity: 0;
			}
			100% {
				opacity: 1;
			}
		}

		@-moz-keyframes fadeIn {
			0% {
				opacity: 0;
			}
			100% {
				opacity: 1;
			}
		}

		@-o-keyframes fadeIn {
			0% {
				opacity: 0;
			}
			100% {
				opacity: 1;
			}
		}

		@keyframes fadeIn {
			0% {
				opacity: 0;
			}
			100% {
				opacity: 1;
			}
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			-moz-animation-name: fadeIn;
			-o-animation-name: fadeIn;
			animation-name: fadeIn;
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
			background-image: url('../images/icon_home_tabColor.png');
			background-position: center 0px;
			background-repeat: no-repeat;
			display: block;
		}

		#nav > li#MainMenu_HOME:hover > a.isImage > span {
			background-image: url('../images/icon_home_hover.png');
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

		/** /js/calendarui/jquery-ui.css **/
		/*! jQuery UI - v1.8.20 - 2012-04-30
* https://github.com/jquery/jquery-ui
* Includes: jquery.ui.core.css, jquery.ui.accordion.css, jquery.ui.autocomplete.css, jquery.ui.button.css, jquery.ui.datepicker.css, jquery.ui.dialog.css, jquery.ui.progressbar.css, jquery.ui.resizable.css, jquery.ui.selectable.css, jquery.ui.slider.css, jquery.ui.tabs.css, jquery.ui.theme.css
* Copyright (c) 2012 AUTHORS.txt; Licensed MIT, GPL */
		.ui-helper-hidden {
			display: none
		}

		.ui-helper-hidden-accessible {
			position: absolute !important;
			clip: rect(1px 1px 1px 1px);
			clip: rect(1px, 1px, 1px, 1px)
		}

		.ui-helper-reset {
			margin: 0;
			padding: 0;
			border: 0;
			outline: 0;
			line-height: 1.3;
			text-decoration: none;
			font-size: 100%;
			list-style: none
		}

		.ui-helper-clearfix:before, .ui-helper-clearfix:after {
			content: "";
			display: table
		}

		.ui-helper-clearfix:after {
			clear: both
		}

		.ui-helper-clearfix {
			zoom: 1
		}

		.ui-helper-zfix {
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			position: absolute;
			opacity: 0;
			filter: Alpha(Opacity=0)
		}

		.ui-state-disabled {
			cursor: default !important
		}

		.ui-icon {
			display: block;
			text-indent: -99999px;
			overflow: hidden;
			background-repeat: no-repeat
		}

		.ui-widget-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%
		}

		.ui-accordion {
			width: 100%
		}

		.ui-accordion .ui-accordion-header {
			cursor: pointer;
			position: relative;
			margin-top: 1px;
			zoom: 1
		}

		.ui-accordion .ui-accordion-li-fix {
			display: inline
		}

		.ui-accordion .ui-accordion-header-active {
			border-bottom: 0 !important
		}

		.ui-accordion .ui-accordion-header a {
			display: block;
			font-size: 1em;
			padding: .5em .5em .5em .7em
		}

		.ui-accordion-icons .ui-accordion-header a {
			padding-left: 2.2em
		}

		.ui-accordion .ui-accordion-header .ui-icon {
			position: absolute;
			left: .5em;
			top: 50%;
			margin-top: -8px
		}

		.ui-accordion .ui-accordion-content {
			padding: 1em 2.2em;
			border-top: 0;
			margin-top: -2px;
			position: relative;
			top: 1px;
			margin-bottom: 2px;
			overflow: auto;
			display: none;
			zoom: 1
		}

		.ui-accordion .ui-accordion-content-active {
			display: block
		}

		.ui-autocomplete {
			position: absolute;
			cursor: default
		}

		* html .ui-autocomplete {
			width: 1px
		}

		.ui-menu {
			list-style: none;
			padding: 2px;
			margin: 0;
			display: block;
			float: left
		}

		.ui-menu .ui-menu {
			margin-top: -3px
		}

		.ui-menu .ui-menu-item {
			margin: 0;
			padding: 0;
			zoom: 1;
			float: left;
			clear: left;
			width: 100%
		}

		.ui-menu .ui-menu-item a {
			text-decoration: none;
			display: block;
			padding: .2em .4em;
			line-height: 1.5;
			zoom: 1
		}

		.ui-menu .ui-menu-item a.ui-state-hover, .ui-menu .ui-menu-item a.ui-state-active {
			font-weight: normal;
			margin: -1px
		}

		.ui-button {
			display: inline-block;
			position: relative;
			padding: 0;
			margin-right: .1em;
			text-decoration: none !important;
			cursor: pointer;
			text-align: center;
			zoom: 1;
			overflow: visible
		}

		.ui-button-icon-only {
			width: 2.2em
		}

		button.ui-button-icon-only {
			width: 2.4em
		}

		.ui-button-icons-only {
			width: 3.4em
		}

		button.ui-button-icons-only {
			width: 3.7em
		}

		.ui-button .ui-button-text {
			display: block;
			line-height: 1.4
		}

		.ui-button-text-only .ui-button-text {
			padding: .4em 1em
		}

		.ui-button-icon-only .ui-button-text, .ui-button-icons-only .ui-button-text {
			padding: .4em;
			text-indent: -9999999px
		}

		.ui-button-text-icon-primary .ui-button-text, .ui-button-text-icons .ui-button-text {
			padding: .4em 1em .4em 2.1em
		}

		.ui-button-text-icon-secondary .ui-button-text, .ui-button-text-icons .ui-button-text {
			padding: .4em 2.1em .4em 1em
		}

		.ui-button-text-icons .ui-button-text {
			padding-left: 2.1em;
			padding-right: 2.1em
		}

		input.ui-button {
			padding: .4em 1em
		}

		.ui-button-icon-only .ui-icon, .ui-button-text-icon-primary .ui-icon, .ui-button-text-icon-secondary .ui-icon, .ui-button-text-icons .ui-icon, .ui-button-icons-only .ui-icon {
			position: absolute;
			top: 50%;
			margin-top: -8px
		}

		.ui-button-icon-only .ui-icon {
			left: 50%;
			margin-left: -8px
		}

		.ui-button-text-icon-primary .ui-button-icon-primary, .ui-button-text-icons .ui-button-icon-primary, .ui-button-icons-only .ui-button-icon-primary {
			left: .5em
		}

		.ui-button-text-icon-secondary .ui-button-icon-secondary, .ui-button-text-icons .ui-button-icon-secondary, .ui-button-icons-only .ui-button-icon-secondary {
			right: .5em
		}

		.ui-button-text-icons .ui-button-icon-secondary, .ui-button-icons-only .ui-button-icon-secondary {
			right: .5em
		}

		.ui-buttonset {
			margin-right: 7px
		}

		.ui-buttonset .ui-button {
			margin-left: 0;
			margin-right: -.3em
		}

		button.ui-button::-moz-focus-inner {
			border: 0;
			padding: 0
		}

		.ui-datepicker {
			width: 17em;
			padding: .2em .2em 0;
			display: none
		}

		.ui-datepicker .ui-datepicker-header {
			position: relative;
			padding: .2em 0
		}

		.ui-datepicker .ui-datepicker-prev, .ui-datepicker .ui-datepicker-next {
			position: absolute;
			top: 2px;
			width: 1.8em;
			height: 1.8em
		}

		.ui-datepicker .ui-datepicker-prev-hover, .ui-datepicker .ui-datepicker-next-hover {
			top: 1px
		}

		.ui-datepicker .ui-datepicker-prev {
			left: 2px
		}

		.ui-datepicker .ui-datepicker-next {
			right: 2px
		}

		.ui-datepicker .ui-datepicker-prev-hover {
			left: 1px
		}

		.ui-datepicker .ui-datepicker-next-hover {
			right: 1px
		}

		.ui-datepicker .ui-datepicker-prev span, .ui-datepicker .ui-datepicker-next span {
			display: block;
			position: absolute;
			left: 50%;
			margin-left: -8px;
			top: 50%;
			margin-top: -8px
		}

		.ui-datepicker .ui-datepicker-title {
			margin: 0 2.3em;
			line-height: 1.8em;
			text-align: center
		}

		.ui-datepicker .ui-datepicker-title select {
			font-size: 1em;
			margin: 1px 0
		}

		.ui-datepicker select.ui-datepicker-month-year {
			width: 100%
		}

		.ui-datepicker select.ui-datepicker-month, .ui-datepicker select.ui-datepicker-year {
			width: 49%
		}

		.ui-datepicker table {
			width: 100%;
			font-size: .9em;
			border-collapse: collapse;
			margin: 0 0 .4em
		}

		.ui-datepicker th {
			padding: .7em .3em;
			text-align: center;
			font-weight: bold;
			border: 0
		}

		.ui-datepicker td {
			border: 0;
			padding: 1px
		}

		.ui-datepicker td span, .ui-datepicker td a {
			display: block;
			padding: .2em;
			text-align: right;
			text-decoration: none
		}

		.ui-datepicker .ui-datepicker-buttonpane {
			background-image: none;
			margin: .7em 0 0 0;
			padding: 0 .2em;
			border-left: 0;
			border-right: 0;
			border-bottom: 0
		}

		.ui-datepicker .ui-datepicker-buttonpane button {
			float: right;
			margin: .5em .2em .4em;
			cursor: pointer;
			padding: .2em .6em .3em .6em;
			width: auto;
			overflow: visible
		}

		.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
			float: left
		}

		.ui-datepicker.ui-datepicker-multi {
			width: auto
		}

		.ui-datepicker-multi .ui-datepicker-group {
			float: left
		}

		.ui-datepicker-multi .ui-datepicker-group table {
			width: 95%;
			margin: 0 auto .4em
		}

		.ui-datepicker-multi-2 .ui-datepicker-group {
			width: 50%
		}

		.ui-datepicker-multi-3 .ui-datepicker-group {
			width: 33.3%
		}

		.ui-datepicker-multi-4 .ui-datepicker-group {
			width: 25%
		}

		.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header {
			border-left-width: 0
		}

		.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
			border-left-width: 0
		}

		.ui-datepicker-multi .ui-datepicker-buttonpane {
			clear: left
		}

		.ui-datepicker-row-break {
			clear: both;
			width: 100%;
			font-size: 0
		}

		.ui-datepicker-rtl {
			direction: rtl
		}

		.ui-datepicker-rtl .ui-datepicker-prev {
			right: 2px;
			left: auto
		}

		.ui-datepicker-rtl .ui-datepicker-next {
			left: 2px;
			right: auto
		}

		.ui-datepicker-rtl .ui-datepicker-prev:hover {
			right: 1px;
			left: auto
		}

		.ui-datepicker-rtl .ui-datepicker-next:hover {
			left: 1px;
			right: auto
		}

		.ui-datepicker-rtl .ui-datepicker-buttonpane {
			clear: right
		}

		.ui-datepicker-rtl .ui-datepicker-buttonpane button {
			float: left
		}

		.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current {
			float: right
		}

		.ui-datepicker-rtl .ui-datepicker-group {
			float: right
		}

		.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header {
			border-right-width: 0;
			border-left-width: 1px
		}

		.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
			border-right-width: 0;
			border-left-width: 1px
		}

		.ui-datepicker-cover {
			display: none;
			display: block;
			position: absolute;
			z-index: -1;
			filter: mask();
			top: -4px;
			left: -4px;
			width: 200px;
			height: 200px
		}

		.ui-dialog {
			position: absolute;
			padding: .2em;
			width: 300px;
			overflow: hidden
		}

		.ui-dialog .ui-dialog-titlebar {
			padding: .4em 1em;
			position: relative
		}

		.ui-dialog .ui-dialog-title {
			float: left;
			margin: .1em 16px .1em 0
		}

		.ui-dialog .ui-dialog-titlebar-close {
			position: absolute;
			right: .3em;
			top: 50%;
			width: 19px;
			margin: -10px 0 0 0;
			padding: 1px;
			height: 18px
		}

		.ui-dialog .ui-dialog-titlebar-close span {
			display: block;
			margin: 1px
		}

		.ui-dialog .ui-dialog-titlebar-close:hover, .ui-dialog .ui-dialog-titlebar-close:focus {
			padding: 0
		}

		.ui-dialog .ui-dialog-content {
			position: relative;
			border: 0;
			padding: .5em 1em;
			background: 0;
			overflow: auto;
			zoom: 1
		}

		.ui-dialog .ui-dialog-buttonpane {
			text-align: left;
			border-width: 1px 0 0 0;
			background-image: none;
			margin: .5em 0 0 0;
			padding: .3em 1em .5em .4em
		}

		.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
			float: right
		}

		.ui-dialog .ui-dialog-buttonpane button {
			margin: .5em .4em .5em 0;
			cursor: pointer
		}

		.ui-dialog .ui-resizable-se {
			width: 14px;
			height: 14px;
			right: 3px;
			bottom: 3px
		}

		.ui-draggable .ui-dialog-titlebar {
			cursor: move
		}

		.ui-progressbar {
			height: 2em;
			text-align: left;
			overflow: hidden
		}

		.ui-progressbar .ui-progressbar-value {
			margin: -1px;
			height: 100%
		}

		.ui-resizable {
			position: relative
		}

		.ui-resizable-handle {
			position: absolute;
			font-size: .1px;
			display: block
		}

		.ui-resizable-disabled .ui-resizable-handle, .ui-resizable-autohide .ui-resizable-handle {
			display: none
		}

		.ui-resizable-n {
			cursor: n-resize;
			height: 7px;
			width: 100%;
			top: -5px;
			left: 0
		}

		.ui-resizable-s {
			cursor: s-resize;
			height: 7px;
			width: 100%;
			bottom: -5px;
			left: 0
		}

		.ui-resizable-e {
			cursor: e-resize;
			width: 7px;
			right: -5px;
			top: 0;
			height: 100%
		}

		.ui-resizable-w {
			cursor: w-resize;
			width: 7px;
			left: -5px;
			top: 0;
			height: 100%
		}

		.ui-resizable-se {
			cursor: se-resize;
			width: 12px;
			height: 12px;
			right: 1px;
			bottom: 1px
		}

		.ui-resizable-sw {
			cursor: sw-resize;
			width: 9px;
			height: 9px;
			left: -5px;
			bottom: -5px
		}

		.ui-resizable-nw {
			cursor: nw-resize;
			width: 9px;
			height: 9px;
			left: -5px;
			top: -5px
		}

		.ui-resizable-ne {
			cursor: ne-resize;
			width: 9px;
			height: 9px;
			right: -5px;
			top: -5px
		}

		.ui-selectable-helper {
			position: absolute;
			z-index: 100;
			border: 1px dotted black
		}

		.ui-slider {
			position: relative;
			text-align: left
		}

		.ui-slider .ui-slider-handle {
			position: absolute;
			z-index: 2;
			width: 1.2em;
			height: 1.2em;
			cursor: default
		}

		.ui-slider .ui-slider-range {
			position: absolute;
			z-index: 1;
			font-size: .7em;
			display: block;
			border: 0;
			background-position: 0 0
		}

		.ui-slider-horizontal {
			height: .8em
		}

		.ui-slider-horizontal .ui-slider-handle {
			top: -.3em;
			margin-left: -.6em
		}

		.ui-slider-horizontal .ui-slider-range {
			top: 0;
			height: 100%
		}

		.ui-slider-horizontal .ui-slider-range-min {
			left: 0
		}

		.ui-slider-horizontal .ui-slider-range-max {
			right: 0
		}

		.ui-slider-vertical {
			width: .8em;
			height: 100px
		}

		.ui-slider-vertical .ui-slider-handle {
			left: -.3em;
			margin-left: 0;
			margin-bottom: -.6em
		}

		.ui-slider-vertical .ui-slider-range {
			left: 0;
			width: 100%
		}

		.ui-slider-vertical .ui-slider-range-min {
			bottom: 0
		}

		.ui-slider-vertical .ui-slider-range-max {
			top: 0
		}

		.ui-tabs {
			position: relative;
			padding: .2em;
			zoom: 1
		}

		.ui-tabs .ui-tabs-nav {
			margin: 0;
			padding: .2em .2em 0
		}

		.ui-tabs .ui-tabs-nav li {
			list-style: none;
			float: left;
			position: relative;
			top: 1px;
			margin: 0 .2em 1px 0;
			border-bottom: 0 !important;
			padding: 0;
			white-space: nowrap
		}

		.ui-tabs .ui-tabs-nav li a {
			float: left;
			padding: .5em 1em;
			text-decoration: none
		}

		.ui-tabs .ui-tabs-nav li.ui-tabs-selected {
			margin-bottom: 0;
			padding-bottom: 1px
		}

		.ui-tabs .ui-tabs-nav li.ui-tabs-selected a, .ui-tabs .ui-tabs-nav li.ui-state-disabled a, .ui-tabs .ui-tabs-nav li.ui-state-processing a {
			cursor: text
		}

		.ui-tabs .ui-tabs-nav li a, .ui-tabs.ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-selected a {
			cursor: pointer
		}

		.ui-tabs .ui-tabs-panel {
			display: block;
			border-width: 0;
			padding: 1em 1.4em;
			background: 0
		}

		.ui-tabs .ui-tabs-hide {
			display: none !important
		}

		.ui-widget {
			font-family: Verdana, Arial, sans-serif;
			font-size: 1.1em
		}

		.ui-widget .ui-widget {
			font-size: 1em
		}

		.ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button {
			font-family: Verdana, Arial, sans-serif;
			font-size: 1em
		}

		.ui-widget-content {
			border: 1px solid #aaaaaa;
			background: #ffffff url(../js/calendarui/images/ui-bg_flat_75_ffffff_40x100.png) 50% 50% repeat-x;
			color: #222
		}

		.ui-widget-content a {
			color: #222
		}

		.ui-widget-header {
			border: 1px solid #aaaaaa;
			background: #cccccc url(../js/calendarui/images/ui-bg_highlight-soft_75_cccccc_1x100.png) 50% 50% repeat-x;
			color: #222;
			font-weight: bold
		}

		.ui-widget-header a {
			color: #222
		}

		.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
			border: 1px solid #d3d3d3;
			background: #e6e6e6 url(../js/calendarui/images/ui-bg_glass_75_e6e6e6_1x400.png) 50% 50% repeat-x;
			font-weight: normal;
			color: #555
		}

		.ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {
			color: #555;
			text-decoration: none
		}

		.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus {
			border: 1px solid #999999;
			background: #dadada url(../js/calendarui/images/ui-bg_glass_75_dadada_1x400.png) 50% 50% repeat-x;
			font-weight: normal;
			color: #212121
		}

		.ui-state-hover a, .ui-state-hover a:hover {
			color: #212121;
			text-decoration: none
		}

		.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
			border: 1px solid #aaaaaa;
			background: #ffffff url(../js/calendarui/images/ui-bg_glass_65_ffffff_1x400.png) 50% 50% repeat-x;
			font-weight: normal;
			color: #212121
		}

		.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {
			color: #212121;
			text-decoration: none
		}

		.ui-widget :active {
			outline: 0
		}

		.ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
			border: 1px solid #fcefa1;
			background: #fbf9ee url(../js/calendarui/images/ui-bg_glass_55_fbf9ee_1x400.png) 50% 50% repeat-x;
			color: #363636
		}

		.ui-state-highlight a, .ui-widget-content .ui-state-highlight a, .ui-widget-header .ui-state-highlight a {
			color: #363636
		}

		.ui-state-error, .ui-widget-content .ui-state-error, .ui-widget-header .ui-state-error {
			border: 1px solid #cd0a0a;
			background: #fef1ec url(../js/calendarui/images/ui-bg_glass_95_fef1ec_1x400.png) 50% 50% repeat-x;
			color: #cd0a0a
		}

		.ui-state-error a, .ui-widget-content .ui-state-error a, .ui-widget-header .ui-state-error a {
			color: #cd0a0a
		}

		.ui-state-error-text, .ui-widget-content .ui-state-error-text, .ui-widget-header .ui-state-error-text {
			color: #cd0a0a
		}

		.ui-priority-primary, .ui-widget-content .ui-priority-primary, .ui-widget-header .ui-priority-primary {
			font-weight: bold
		}

		.ui-priority-secondary, .ui-widget-content .ui-priority-secondary, .ui-widget-header .ui-priority-secondary {
			opacity: .7;
			filter: Alpha(Opacity=70);
			font-weight: normal
		}

		.ui-state-disabled, .ui-widget-content .ui-state-disabled, .ui-widget-header .ui-state-disabled {
			opacity: .35;
			filter: Alpha(Opacity=35);
			background-image: none
		}

		.ui-icon {
			width: 16px;
			height: 16px;
			background-image: url(../js/calendarui/images/ui-icons_222222_256x240.png)
		}

		.ui-widget-content .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_222222_256x240.png)
		}

		.ui-widget-header .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_222222_256x240.png)
		}

		.ui-state-default .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_888888_256x240.png)
		}

		.ui-state-hover .ui-icon, .ui-state-focus .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_454545_256x240.png)
		}

		.ui-state-active .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_454545_256x240.png)
		}

		.ui-state-highlight .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_2e83ff_256x240.png)
		}

		.ui-state-error .ui-icon, .ui-state-error-text .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_cd0a0a_256x240.png)
		}

		.ui-icon-carat-1-n {
			background-position: 0 0
		}

		.ui-icon-carat-1-ne {
			background-position: -16px 0
		}

		.ui-icon-carat-1-e {
			background-position: -32px 0
		}

		.ui-icon-carat-1-se {
			background-position: -48px 0
		}

		.ui-icon-carat-1-s {
			background-position: -64px 0
		}

		.ui-icon-carat-1-sw {
			background-position: -80px 0
		}

		.ui-icon-carat-1-w {
			background-position: -96px 0
		}

		.ui-icon-carat-1-nw {
			background-position: -112px 0
		}

		.ui-icon-carat-2-n-s {
			background-position: -128px 0
		}

		.ui-icon-carat-2-e-w {
			background-position: -144px 0
		}

		.ui-icon-triangle-1-n {
			background-position: 0 -16px
		}

		.ui-icon-triangle-1-ne {
			background-position: -16px -16px
		}

		.ui-icon-triangle-1-e {
			background-position: -32px -16px
		}

		.ui-icon-triangle-1-se {
			background-position: -48px -16px
		}

		.ui-icon-triangle-1-s {
			background-position: -64px -16px
		}

		.ui-icon-triangle-1-sw {
			background-position: -80px -16px
		}

		.ui-icon-triangle-1-w {
			background-position: -96px -16px
		}

		.ui-icon-triangle-1-nw {
			background-position: -112px -16px
		}

		.ui-icon-triangle-2-n-s {
			background-position: -128px -16px
		}

		.ui-icon-triangle-2-e-w {
			background-position: -144px -16px
		}

		.ui-icon-arrow-1-n {
			background-position: 0 -32px
		}

		.ui-icon-arrow-1-ne {
			background-position: -16px -32px
		}

		.ui-icon-arrow-1-e {
			background-position: -32px -32px
		}

		.ui-icon-arrow-1-se {
			background-position: -48px -32px
		}

		.ui-icon-arrow-1-s {
			background-position: -64px -32px
		}

		.ui-icon-arrow-1-sw {
			background-position: -80px -32px
		}

		.ui-icon-arrow-1-w {
			background-position: -96px -32px
		}

		.ui-icon-arrow-1-nw {
			background-position: -112px -32px
		}

		.ui-icon-arrow-2-n-s {
			background-position: -128px -32px
		}

		.ui-icon-arrow-2-ne-sw {
			background-position: -144px -32px
		}

		.ui-icon-arrow-2-e-w {
			background-position: -160px -32px
		}

		.ui-icon-arrow-2-se-nw {
			background-position: -176px -32px
		}

		.ui-icon-arrowstop-1-n {
			background-position: -192px -32px
		}

		.ui-icon-arrowstop-1-e {
			background-position: -208px -32px
		}

		.ui-icon-arrowstop-1-s {
			background-position: -224px -32px
		}

		.ui-icon-arrowstop-1-w {
			background-position: -240px -32px
		}

		.ui-icon-arrowthick-1-n {
			background-position: 0 -48px
		}

		.ui-icon-arrowthick-1-ne {
			background-position: -16px -48px
		}

		.ui-icon-arrowthick-1-e {
			background-position: -32px -48px
		}

		.ui-icon-arrowthick-1-se {
			background-position: -48px -48px
		}

		.ui-icon-arrowthick-1-s {
			background-position: -64px -48px
		}

		.ui-icon-arrowthick-1-sw {
			background-position: -80px -48px
		}

		.ui-icon-arrowthick-1-w {
			background-position: -96px -48px
		}

		.ui-icon-arrowthick-1-nw {
			background-position: -112px -48px
		}

		.ui-icon-arrowthick-2-n-s {
			background-position: -128px -48px
		}

		.ui-icon-arrowthick-2-ne-sw {
			background-position: -144px -48px
		}

		.ui-icon-arrowthick-2-e-w {
			background-position: -160px -48px
		}

		.ui-icon-arrowthick-2-se-nw {
			background-position: -176px -48px
		}

		.ui-icon-arrowthickstop-1-n {
			background-position: -192px -48px
		}

		.ui-icon-arrowthickstop-1-e {
			background-position: -208px -48px
		}

		.ui-icon-arrowthickstop-1-s {
			background-position: -224px -48px
		}

		.ui-icon-arrowthickstop-1-w {
			background-position: -240px -48px
		}

		.ui-icon-arrowreturnthick-1-w {
			background-position: 0 -64px
		}

		.ui-icon-arrowreturnthick-1-n {
			background-position: -16px -64px
		}

		.ui-icon-arrowreturnthick-1-e {
			background-position: -32px -64px
		}

		.ui-icon-arrowreturnthick-1-s {
			background-position: -48px -64px
		}

		.ui-icon-arrowreturn-1-w {
			background-position: -64px -64px
		}

		.ui-icon-arrowreturn-1-n {
			background-position: -80px -64px
		}

		.ui-icon-arrowreturn-1-e {
			background-position: -96px -64px
		}

		.ui-icon-arrowreturn-1-s {
			background-position: -112px -64px
		}

		.ui-icon-arrowrefresh-1-w {
			background-position: -128px -64px
		}

		.ui-icon-arrowrefresh-1-n {
			background-position: -144px -64px
		}

		.ui-icon-arrowrefresh-1-e {
			background-position: -160px -64px
		}

		.ui-icon-arrowrefresh-1-s {
			background-position: -176px -64px
		}

		.ui-icon-arrow-4 {
			background-position: 0 -80px
		}

		.ui-icon-arrow-4-diag {
			background-position: -16px -80px
		}

		.ui-icon-extlink {
			background-position: -32px -80px
		}

		.ui-icon-newwin {
			background-position: -48px -80px
		}

		.ui-icon-refresh {
			background-position: -64px -80px
		}

		.ui-icon-shuffle {
			background-position: -80px -80px
		}

		.ui-icon-transfer-e-w {
			background-position: -96px -80px
		}

		.ui-icon-transferthick-e-w {
			background-position: -112px -80px
		}

		.ui-icon-folder-collapsed {
			background-position: 0 -96px
		}

		.ui-icon-folder-open {
			background-position: -16px -96px
		}

		.ui-icon-document {
			background-position: -32px -96px
		}

		.ui-icon-document-b {
			background-position: -48px -96px
		}

		.ui-icon-note {
			background-position: -64px -96px
		}

		.ui-icon-mail-closed {
			background-position: -80px -96px
		}

		.ui-icon-mail-open {
			background-position: -96px -96px
		}

		.ui-icon-suitcase {
			background-position: -112px -96px
		}

		.ui-icon-comment {
			background-position: -128px -96px
		}

		.ui-icon-person {
			background-position: -144px -96px
		}

		.ui-icon-print {
			background-position: -160px -96px
		}

		.ui-icon-trash {
			background-position: -176px -96px
		}

		.ui-icon-locked {
			background-position: -192px -96px
		}

		.ui-icon-unlocked {
			background-position: -208px -96px
		}

		.ui-icon-bookmark {
			background-position: -224px -96px
		}

		.ui-icon-tag {
			background-position: -240px -96px
		}

		.ui-icon-home {
			background-position: 0 -112px
		}

		.ui-icon-flag {
			background-position: -16px -112px
		}

		.ui-icon-calendar {
			background-position: -32px -112px
		}

		.ui-icon-cart {
			background-position: -48px -112px
		}

		.ui-icon-pencil {
			background-position: -64px -112px
		}

		.ui-icon-clock {
			background-position: -80px -112px
		}

		.ui-icon-disk {
			background-position: -96px -112px
		}

		.ui-icon-calculator {
			background-position: -112px -112px
		}

		.ui-icon-zoomin {
			background-position: -128px -112px
		}

		.ui-icon-zoomout {
			background-position: -144px -112px
		}

		.ui-icon-search {
			background-position: -160px -112px
		}

		.ui-icon-wrench {
			background-position: -176px -112px
		}

		.ui-icon-gear {
			background-position: -192px -112px
		}

		.ui-icon-heart {
			background-position: -208px -112px
		}

		.ui-icon-star {
			background-position: -224px -112px
		}

		.ui-icon-link {
			background-position: -240px -112px
		}

		.ui-icon-cancel {
			background-position: 0 -128px
		}

		.ui-icon-plus {
			background-position: -16px -128px
		}

		.ui-icon-plusthick {
			background-position: -32px -128px
		}

		.ui-icon-minus {
			background-position: -48px -128px
		}

		.ui-icon-minusthick {
			background-position: -64px -128px
		}

		.ui-icon-close {
			background-position: -80px -128px
		}

		.ui-icon-closethick {
			background-position: -96px -128px
		}

		.ui-icon-key {
			background-position: -112px -128px
		}

		.ui-icon-lightbulb {
			background-position: -128px -128px
		}

		.ui-icon-scissors {
			background-position: -144px -128px
		}

		.ui-icon-clipboard {
			background-position: -160px -128px
		}

		.ui-icon-copy {
			background-position: -176px -128px
		}

		.ui-icon-contact {
			background-position: -192px -128px
		}

		.ui-icon-image {
			background-position: -208px -128px
		}

		.ui-icon-video {
			background-position: -224px -128px
		}

		.ui-icon-script {
			background-position: -240px -128px
		}

		.ui-icon-alert {
			background-position: 0 -144px
		}

		.ui-icon-info {
			background-position: -16px -144px
		}

		.ui-icon-notice {
			background-position: -32px -144px
		}

		.ui-icon-help {
			background-position: -48px -144px
		}

		.ui-icon-check {
			background-position: -64px -144px
		}

		.ui-icon-bullet {
			background-position: -80px -144px
		}

		.ui-icon-radio-off {
			background-position: -96px -144px
		}

		.ui-icon-radio-on {
			background-position: -112px -144px
		}

		.ui-icon-pin-w {
			background-position: -128px -144px
		}

		.ui-icon-pin-s {
			background-position: -144px -144px
		}

		.ui-icon-play {
			background-position: 0 -160px
		}

		.ui-icon-pause {
			background-position: -16px -160px
		}

		.ui-icon-seek-next {
			background-position: -32px -160px
		}

		.ui-icon-seek-prev {
			background-position: -48px -160px
		}

		.ui-icon-seek-end {
			background-position: -64px -160px
		}

		.ui-icon-seek-start {
			background-position: -80px -160px
		}

		.ui-icon-seek-first {
			background-position: -80px -160px
		}

		.ui-icon-stop {
			background-position: -96px -160px
		}

		.ui-icon-eject {
			background-position: -112px -160px
		}

		.ui-icon-volume-off {
			background-position: -128px -160px
		}

		.ui-icon-volume-on {
			background-position: -144px -160px
		}

		.ui-icon-power {
			background-position: 0 -176px
		}

		.ui-icon-signal-diag {
			background-position: -16px -176px
		}

		.ui-icon-signal {
			background-position: -32px -176px
		}

		.ui-icon-battery-0 {
			background-position: -48px -176px
		}

		.ui-icon-battery-1 {
			background-position: -64px -176px
		}

		.ui-icon-battery-2 {
			background-position: -80px -176px
		}

		.ui-icon-battery-3 {
			background-position: -96px -176px
		}

		.ui-icon-circle-plus {
			background-position: 0 -192px
		}

		.ui-icon-circle-minus {
			background-position: -16px -192px
		}

		.ui-icon-circle-close {
			background-position: -32px -192px
		}

		.ui-icon-circle-triangle-e {
			background-position: -48px -192px
		}

		.ui-icon-circle-triangle-s {
			background-position: -64px -192px
		}

		.ui-icon-circle-triangle-w {
			background-position: -80px -192px
		}

		.ui-icon-circle-triangle-n {
			background-position: -96px -192px
		}

		.ui-icon-circle-arrow-e {
			background-position: -112px -192px
		}

		.ui-icon-circle-arrow-s {
			background-position: -128px -192px
		}

		.ui-icon-circle-arrow-w {
			background-position: -144px -192px
		}

		.ui-icon-circle-arrow-n {
			background-position: -160px -192px
		}

		.ui-icon-circle-zoomin {
			background-position: -176px -192px
		}

		.ui-icon-circle-zoomout {
			background-position: -192px -192px
		}

		.ui-icon-circle-check {
			background-position: -208px -192px
		}

		.ui-icon-circlesmall-plus {
			background-position: 0 -208px
		}

		.ui-icon-circlesmall-minus {
			background-position: -16px -208px
		}

		.ui-icon-circlesmall-close {
			background-position: -32px -208px
		}

		.ui-icon-squaresmall-plus {
			background-position: -48px -208px
		}

		.ui-icon-squaresmall-minus {
			background-position: -64px -208px
		}

		.ui-icon-squaresmall-close {
			background-position: -80px -208px
		}

		.ui-icon-grip-dotted-vertical {
			background-position: 0 -224px
		}

		.ui-icon-grip-dotted-horizontal {
			background-position: -16px -224px
		}

		.ui-icon-grip-solid-vertical {
			background-position: -32px -224px
		}

		.ui-icon-grip-solid-horizontal {
			background-position: -48px -224px
		}

		.ui-icon-gripsmall-diagonal-se {
			background-position: -64px -224px
		}

		.ui-icon-grip-diagonal-se {
			background-position: -80px -224px
		}

		.ui-corner-all, .ui-corner-top, .ui-corner-left, .ui-corner-tl {
			-moz-border-radius-topleft: 4px;
			-webkit-border-top-left-radius: 4px;
			-khtml-border-top-left-radius: 4px;
			border-top-left-radius: 4px
		}

		.ui-corner-all, .ui-corner-top, .ui-corner-right, .ui-corner-tr {
			-moz-border-radius-topright: 4px;
			-webkit-border-top-right-radius: 4px;
			-khtml-border-top-right-radius: 4px;
			border-top-right-radius: 4px
		}

		.ui-corner-all, .ui-corner-bottom, .ui-corner-left, .ui-corner-bl {
			-moz-border-radius-bottomleft: 4px;
			-webkit-border-bottom-left-radius: 4px;
			-khtml-border-bottom-left-radius: 4px;
			border-bottom-left-radius: 4px
		}

		.ui-corner-all, .ui-corner-bottom, .ui-corner-right, .ui-corner-br {
			-moz-border-radius-bottomright: 4px;
			-webkit-border-bottom-right-radius: 4px;
			-khtml-border-bottom-right-radius: 4px;
			border-bottom-right-radius: 4px
		}

		.ui-widget-overlay {
			background: #aaaaaa url(../js/calendarui/images/ui-bg_flat_0_aaaaaa_40x100.png) 50% 50% repeat-x;
			opacity: .3;
			filter: Alpha(Opacity=30)
		}

		.ui-widget-shadow {
			margin: -8px 0 0 -8px;
			padding: 8px;
			background: #aaaaaa url(../js/calendarui/images/ui-bg_flat_0_aaaaaa_40x100.png) 50% 50% repeat-x;
			opacity: .3;
			filter: Alpha(Opacity=30);
			-moz-border-radius: 8px;
			-khtml-border-radius: 8px;
			-webkit-border-radius: 8px;
			border-radius: 8px
		}

		/** /js/calendarui/jquery.ui.all.css **/
		.ui-helper-hidden {
			display: none
		}

		.ui-helper-hidden-accessible {
			position: absolute;
			left: -99999999px
		}

		.ui-helper-reset {
			margin: 0;
			padding: 0;
			border: 0;
			outline: 0;
			line-height: 1.3;
			text-decoration: none;
			font-size: 100%;
			list-style: none
		}

		.ui-helper-clearfix:after {
			content: ".";
			display: block;
			height: 0;
			clear: both;
			visibility: hidden
		}

		.ui-helper-clearfix {
			display: inline-block
		}

		/*\*/
		* html .ui-helper-clearfix {
			height: 1%
		}

		.ui-helper-clearfix {
			display: block
		}

		/**/
		.ui-helper-zfix {
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			position: absolute;
			opacity: 0;
			filter: Alpha(Opacity=0)
		}

		.ui-state-disabled {
			cursor: default !important
		}

		.ui-icon {
			display: block;
			text-indent: -99999px;
			overflow: hidden;
			background-repeat: no-repeat
		}

		.ui-widget-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%
		}

		.ui-widget {
			font-family: Verdana, Arial, sans-serif;
			font-size: 10px
		}

		.ui-widget .ui-widget {
			font-size: 10px
		}

		.ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button {
			font-family: Verdana, Arial, sans-serif;
			font-size: 10px
		}

		.ui-widget-content {
			border: 1px solid #aaaaaa;
			background: #ffffff url(../js/calendarui/images/ui-bg_flat_75_ffffff_40x100.png) 50% 50% repeat-x;
			color: #222
		}

		.ui-widget-content a {
			color: #222
		}

		.ui-widget-header {
			border: 1px solid #aaaaaa;
			background: #cccccc url(../js/calendarui/images/ui-bg_highlight-soft_75_cccccc_1x100.png) 50% 50% repeat-x;
			color: #222;
			font-weight: bold
		}

		.ui-widget-header a {
			color: #222
		}

		.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
			border: 1px solid #d3d3d3;
			background: #e6e6e6 url(../js/calendarui/images/ui-bg_glass_75_e6e6e6_1x400.png) 50% 50% repeat-x;
			font-weight: normal;
			color: #555
		}

		.ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {
			color: #555;
			text-decoration: none
		}

		.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus {
			border: 1px solid #999999;
			background: #dadada url(../js/calendarui/images/ui-bg_glass_75_dadada_1x400.png) 50% 50% repeat-x;
			font-weight: normal;
			color: #212121
		}

		.ui-state-hover a, .ui-state-hover a:hover {
			color: #212121;
			text-decoration: none
		}

		.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
			border: 1px solid #aaaaaa;
			background: #ffffff url(../js/calendarui/images/ui-bg_glass_65_ffffff_1x400.png) 50% 50% repeat-x;
			font-weight: normal;
			color: #212121
		}

		.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {
			color: #212121;
			text-decoration: none
		}

		.ui-widget :active {
			outline: 0
		}

		.ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
			border: 1px solid #fcefa1;
			background: #fbf9ee url(../js/calendarui/images/ui-bg_glass_55_fbf9ee_1x400.png) 50% 50% repeat-x;
			color: #363636
		}

		.ui-state-highlight a, .ui-widget-content .ui-state-highlight a, .ui-widget-header .ui-state-highlight a {
			color: #363636
		}

		.ui-state-error, .ui-widget-content .ui-state-error, .ui-widget-header .ui-state-error {
			border: 1px solid #cd0a0a;
			background: #fef1ec url(../js/calendarui/images/ui-bg_glass_95_fef1ec_1x400.png) 50% 50% repeat-x;
			color: #cd0a0a
		}

		.ui-state-error a, .ui-widget-content .ui-state-error a, .ui-widget-header .ui-state-error a {
			color: #cd0a0a
		}

		.ui-state-error-text, .ui-widget-content .ui-state-error-text, .ui-widget-header .ui-state-error-text {
			color: #cd0a0a
		}

		.ui-priority-primary, .ui-widget-content .ui-priority-primary, .ui-widget-header .ui-priority-primary {
			font-weight: bold
		}

		.ui-priority-secondary, .ui-widget-content .ui-priority-secondary, .ui-widget-header .ui-priority-secondary {
			opacity: .7;
			filter: Alpha(Opacity=70);
			font-weight: normal
		}

		.ui-state-disabled, .ui-widget-content .ui-state-disabled, .ui-widget-header .ui-state-disabled {
			opacity: .35;
			filter: Alpha(Opacity=35);
			background-image: none
		}

		.ui-icon {
			width: 16px;
			height: 16px;
			background-image: url(../js/calendarui/images/ui-icons_222222_256x240.png)
		}

		.ui-widget-content .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_222222_256x240.png)
		}

		.ui-widget-header .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_222222_256x240.png)
		}

		.ui-state-default .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_888888_256x240.png)
		}

		.ui-state-hover .ui-icon, .ui-state-focus .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_454545_256x240.png)
		}

		.ui-state-active .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_454545_256x240.png)
		}

		.ui-state-highlight .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_2e83ff_256x240.png)
		}

		.ui-state-error .ui-icon, .ui-state-error-text .ui-icon {
			background-image: url(../js/calendarui/images/ui-icons_cd0a0a_256x240.png)
		}

		.ui-icon-carat-1-n {
			background-position: 0 0
		}

		.ui-icon-carat-1-ne {
			background-position: -16px 0
		}

		.ui-icon-carat-1-e {
			background-position: -32px 0
		}

		.ui-icon-carat-1-se {
			background-position: -48px 0
		}

		.ui-icon-carat-1-s {
			background-position: -64px 0
		}

		.ui-icon-carat-1-sw {
			background-position: -80px 0
		}

		.ui-icon-carat-1-w {
			background-position: -96px 0
		}

		.ui-icon-carat-1-nw {
			background-position: -112px 0
		}

		.ui-icon-carat-2-n-s {
			background-position: -128px 0
		}

		.ui-icon-carat-2-e-w {
			background-position: -144px 0
		}

		.ui-icon-triangle-1-n {
			background-position: 0 -16px
		}

		.ui-icon-triangle-1-ne {
			background-position: -16px -16px
		}

		.ui-icon-triangle-1-e {
			background-position: -32px -16px
		}

		.ui-icon-triangle-1-se {
			background-position: -48px -16px
		}

		.ui-icon-triangle-1-s {
			background-position: -64px -16px
		}

		.ui-icon-triangle-1-sw {
			background-position: -80px -16px
		}

		.ui-icon-triangle-1-w {
			background-position: -96px -16px
		}

		.ui-icon-triangle-1-nw {
			background-position: -112px -16px
		}

		.ui-icon-triangle-2-n-s {
			background-position: -128px -16px
		}

		.ui-icon-triangle-2-e-w {
			background-position: -144px -16px
		}

		.ui-icon-arrow-1-n {
			background-position: 0 -32px
		}

		.ui-icon-arrow-1-ne {
			background-position: -16px -32px
		}

		.ui-icon-arrow-1-e {
			background-position: -32px -32px
		}

		.ui-icon-arrow-1-se {
			background-position: -48px -32px
		}

		.ui-icon-arrow-1-s {
			background-position: -64px -32px
		}

		.ui-icon-arrow-1-sw {
			background-position: -80px -32px
		}

		.ui-icon-arrow-1-w {
			background-position: -96px -32px
		}

		.ui-icon-arrow-1-nw {
			background-position: -112px -32px
		}

		.ui-icon-arrow-2-n-s {
			background-position: -128px -32px
		}

		.ui-icon-arrow-2-ne-sw {
			background-position: -144px -32px
		}

		.ui-icon-arrow-2-e-w {
			background-position: -160px -32px
		}

		.ui-icon-arrow-2-se-nw {
			background-position: -176px -32px
		}

		.ui-icon-arrowstop-1-n {
			background-position: -192px -32px
		}

		.ui-icon-arrowstop-1-e {
			background-position: -208px -32px
		}

		.ui-icon-arrowstop-1-s {
			background-position: -224px -32px
		}

		.ui-icon-arrowstop-1-w {
			background-position: -240px -32px
		}

		.ui-icon-arrowthick-1-n {
			background-position: 0 -48px
		}

		.ui-icon-arrowthick-1-ne {
			background-position: -16px -48px
		}

		.ui-icon-arrowthick-1-e {
			background-position: -32px -48px
		}

		.ui-icon-arrowthick-1-se {
			background-position: -48px -48px
		}

		.ui-icon-arrowthick-1-s {
			background-position: -64px -48px
		}

		.ui-icon-arrowthick-1-sw {
			background-position: -80px -48px
		}

		.ui-icon-arrowthick-1-w {
			background-position: -96px -48px
		}

		.ui-icon-arrowthick-1-nw {
			background-position: -112px -48px
		}

		.ui-icon-arrowthick-2-n-s {
			background-position: -128px -48px
		}

		.ui-icon-arrowthick-2-ne-sw {
			background-position: -144px -48px
		}

		.ui-icon-arrowthick-2-e-w {
			background-position: -160px -48px
		}

		.ui-icon-arrowthick-2-se-nw {
			background-position: -176px -48px
		}

		.ui-icon-arrowthickstop-1-n {
			background-position: -192px -48px
		}

		.ui-icon-arrowthickstop-1-e {
			background-position: -208px -48px
		}

		.ui-icon-arrowthickstop-1-s {
			background-position: -224px -48px
		}

		.ui-icon-arrowthickstop-1-w {
			background-position: -240px -48px
		}

		.ui-icon-arrowreturnthick-1-w {
			background-position: 0 -64px
		}

		.ui-icon-arrowreturnthick-1-n {
			background-position: -16px -64px
		}

		.ui-icon-arrowreturnthick-1-e {
			background-position: -32px -64px
		}

		.ui-icon-arrowreturnthick-1-s {
			background-position: -48px -64px
		}

		.ui-icon-arrowreturn-1-w {
			background-position: -64px -64px
		}

		.ui-icon-arrowreturn-1-n {
			background-position: -80px -64px
		}

		.ui-icon-arrowreturn-1-e {
			background-position: -96px -64px
		}

		.ui-icon-arrowreturn-1-s {
			background-position: -112px -64px
		}

		.ui-icon-arrowrefresh-1-w {
			background-position: -128px -64px
		}

		.ui-icon-arrowrefresh-1-n {
			background-position: -144px -64px
		}

		.ui-icon-arrowrefresh-1-e {
			background-position: -160px -64px
		}

		.ui-icon-arrowrefresh-1-s {
			background-position: -176px -64px
		}

		.ui-icon-arrow-4 {
			background-position: 0 -80px
		}

		.ui-icon-arrow-4-diag {
			background-position: -16px -80px
		}

		.ui-icon-extlink {
			background-position: -32px -80px
		}

		.ui-icon-newwin {
			background-position: -48px -80px
		}

		.ui-icon-refresh {
			background-position: -64px -80px
		}

		.ui-icon-shuffle {
			background-position: -80px -80px
		}

		.ui-icon-transfer-e-w {
			background-position: -96px -80px
		}

		.ui-icon-transferthick-e-w {
			background-position: -112px -80px
		}

		.ui-icon-folder-collapsed {
			background-position: 0 -96px
		}

		.ui-icon-folder-open {
			background-position: -16px -96px
		}

		.ui-icon-document {
			background-position: -32px -96px
		}

		.ui-icon-document-b {
			background-position: -48px -96px
		}

		.ui-icon-note {
			background-position: -64px -96px
		}

		.ui-icon-mail-closed {
			background-position: -80px -96px
		}

		.ui-icon-mail-open {
			background-position: -96px -96px
		}

		.ui-icon-suitcase {
			background-position: -112px -96px
		}

		.ui-icon-comment {
			background-position: -128px -96px
		}

		.ui-icon-person {
			background-position: -144px -96px
		}

		.ui-icon-print {
			background-position: -160px -96px
		}

		.ui-icon-trash {
			background-position: -176px -96px
		}

		.ui-icon-locked {
			background-position: -192px -96px
		}

		.ui-icon-unlocked {
			background-position: -208px -96px
		}

		.ui-icon-bookmark {
			background-position: -224px -96px
		}

		.ui-icon-tag {
			background-position: -240px -96px
		}

		.ui-icon-home {
			background-position: 0 -112px
		}

		.ui-icon-flag {
			background-position: -16px -112px
		}

		.ui-icon-calendar {
			background-position: -32px -112px
		}

		.ui-icon-cart {
			background-position: -48px -112px
		}

		.ui-icon-pencil {
			background-position: -64px -112px
		}

		.ui-icon-clock {
			background-position: -80px -112px
		}

		.ui-icon-disk {
			background-position: -96px -112px
		}

		.ui-icon-calculator {
			background-position: -112px -112px
		}

		.ui-icon-zoomin {
			background-position: -128px -112px
		}

		.ui-icon-zoomout {
			background-position: -144px -112px
		}

		.ui-icon-search {
			background-position: -160px -112px
		}

		.ui-icon-wrench {
			background-position: -176px -112px
		}

		.ui-icon-gear {
			background-position: -192px -112px
		}

		.ui-icon-heart {
			background-position: -208px -112px
		}

		.ui-icon-star {
			background-position: -224px -112px
		}

		.ui-icon-link {
			background-position: -240px -112px
		}

		.ui-icon-cancel {
			background-position: 0 -128px
		}

		.ui-icon-plus {
			background-position: -16px -128px
		}

		.ui-icon-plusthick {
			background-position: -32px -128px
		}

		.ui-icon-minus {
			background-position: -48px -128px
		}

		.ui-icon-minusthick {
			background-position: -64px -128px
		}

		.ui-icon-close {
			background-position: -80px -128px
		}

		.ui-icon-closethick {
			background-position: -96px -128px
		}

		.ui-icon-key {
			background-position: -112px -128px
		}

		.ui-icon-lightbulb {
			background-position: -128px -128px
		}

		.ui-icon-scissors {
			background-position: -144px -128px
		}

		.ui-icon-clipboard {
			background-position: -160px -128px
		}

		.ui-icon-copy {
			background-position: -176px -128px
		}

		.ui-icon-contact {
			background-position: -192px -128px
		}

		.ui-icon-image {
			background-position: -208px -128px
		}

		.ui-icon-video {
			background-position: -224px -128px
		}

		.ui-icon-script {
			background-position: -240px -128px
		}

		.ui-icon-alert {
			background-position: 0 -144px
		}

		.ui-icon-info {
			background-position: -16px -144px
		}

		.ui-icon-notice {
			background-position: -32px -144px
		}

		.ui-icon-help {
			background-position: -48px -144px
		}

		.ui-icon-check {
			background-position: -64px -144px
		}

		.ui-icon-bullet {
			background-position: -80px -144px
		}

		.ui-icon-radio-off {
			background-position: -96px -144px
		}

		.ui-icon-radio-on {
			background-position: -112px -144px
		}

		.ui-icon-pin-w {
			background-position: -128px -144px
		}

		.ui-icon-pin-s {
			background-position: -144px -144px
		}

		.ui-icon-play {
			background-position: 0 -160px
		}

		.ui-icon-pause {
			background-position: -16px -160px
		}

		.ui-icon-seek-next {
			background-position: -32px -160px
		}

		.ui-icon-seek-prev {
			background-position: -48px -160px
		}

		.ui-icon-seek-end {
			background-position: -64px -160px
		}

		.ui-icon-seek-start {
			background-position: -80px -160px
		}

		.ui-icon-seek-first {
			background-position: -80px -160px
		}

		.ui-icon-stop {
			background-position: -96px -160px
		}

		.ui-icon-eject {
			background-position: -112px -160px
		}

		.ui-icon-volume-off {
			background-position: -128px -160px
		}

		.ui-icon-volume-on {
			background-position: -144px -160px
		}

		.ui-icon-power {
			background-position: 0 -176px
		}

		.ui-icon-signal-diag {
			background-position: -16px -176px
		}

		.ui-icon-signal {
			background-position: -32px -176px
		}

		.ui-icon-battery-0 {
			background-position: -48px -176px
		}

		.ui-icon-battery-1 {
			background-position: -64px -176px
		}

		.ui-icon-battery-2 {
			background-position: -80px -176px
		}

		.ui-icon-battery-3 {
			background-position: -96px -176px
		}

		.ui-icon-circle-plus {
			background-position: 0 -192px
		}

		.ui-icon-circle-minus {
			background-position: -16px -192px
		}

		.ui-icon-circle-close {
			background-position: -32px -192px
		}

		.ui-icon-circle-triangle-e {
			background-position: -48px -192px
		}

		.ui-icon-circle-triangle-s {
			background-position: -64px -192px
		}

		.ui-icon-circle-triangle-w {
			background-position: -80px -192px
		}

		.ui-icon-circle-triangle-n {
			background-position: -96px -192px
		}

		.ui-icon-circle-arrow-e {
			background-position: -112px -192px
		}

		.ui-icon-circle-arrow-s {
			background-position: -128px -192px
		}

		.ui-icon-circle-arrow-w {
			background-position: -144px -192px
		}

		.ui-icon-circle-arrow-n {
			background-position: -160px -192px
		}

		.ui-icon-circle-zoomin {
			background-position: -176px -192px
		}

		.ui-icon-circle-zoomout {
			background-position: -192px -192px
		}

		.ui-icon-circle-check {
			background-position: -208px -192px
		}

		.ui-icon-circlesmall-plus {
			background-position: 0 -208px
		}

		.ui-icon-circlesmall-minus {
			background-position: -16px -208px
		}

		.ui-icon-circlesmall-close {
			background-position: -32px -208px
		}

		.ui-icon-squaresmall-plus {
			background-position: -48px -208px
		}

		.ui-icon-squaresmall-minus {
			background-position: -64px -208px
		}

		.ui-icon-squaresmall-close {
			background-position: -80px -208px
		}

		.ui-icon-grip-dotted-vertical {
			background-position: 0 -224px
		}

		.ui-icon-grip-dotted-horizontal {
			background-position: -16px -224px
		}

		.ui-icon-grip-solid-vertical {
			background-position: -32px -224px
		}

		.ui-icon-grip-solid-horizontal {
			background-position: -48px -224px
		}

		.ui-icon-gripsmall-diagonal-se {
			background-position: -64px -224px
		}

		.ui-icon-grip-diagonal-se {
			background-position: -80px -224px
		}

		.ui-corner-tl {
			-moz-border-radius-topleft: 4px;
			-webkit-border-top-left-radius: 4px;
			border-top-left-radius: 4px
		}

		.ui-corner-tr {
			-moz-border-radius-topright: 4px;
			-webkit-border-top-right-radius: 4px;
			border-top-right-radius: 4px
		}

		.ui-corner-bl {
			-moz-border-radius-bottomleft: 4px;
			-webkit-border-bottom-left-radius: 4px;
			border-bottom-left-radius: 4px
		}

		.ui-corner-br {
			-moz-border-radius-bottomright: 4px;
			-webkit-border-bottom-right-radius: 4px;
			border-bottom-right-radius: 4px
		}

		.ui-corner-top {
			-moz-border-radius-topleft: 4px;
			-webkit-border-top-left-radius: 4px;
			border-top-left-radius: 4px;
			-moz-border-radius-topright: 4px;
			-webkit-border-top-right-radius: 4px;
			border-top-right-radius: 4px
		}

		.ui-corner-bottom {
			-moz-border-radius-bottomleft: 4px;
			-webkit-border-bottom-left-radius: 4px;
			border-bottom-left-radius: 4px;
			-moz-border-radius-bottomright: 4px;
			-webkit-border-bottom-right-radius: 4px;
			border-bottom-right-radius: 4px
		}

		.ui-corner-right {
			-moz-border-radius-topright: 4px;
			-webkit-border-top-right-radius: 4px;
			border-top-right-radius: 4px;
			-moz-border-radius-bottomright: 4px;
			-webkit-border-bottom-right-radius: 4px;
			border-bottom-right-radius: 4px
		}

		.ui-corner-left {
			-moz-border-radius-topleft: 4px;
			-webkit-border-top-left-radius: 4px;
			border-top-left-radius: 4px;
			-moz-border-radius-bottomleft: 4px;
			-webkit-border-bottom-left-radius: 4px;
			border-bottom-left-radius: 4px
		}

		.ui-corner-all {
			-moz-border-radius: 4px;
			-webkit-border-radius: 4px;
			border-radius: 4px
		}

		.ui-widget-overlay {
			background: #aaaaaa url(../js/calendarui/images/ui-bg_flat_0_aaaaaa_40x100.png) 50% 50% repeat-x;
			opacity: .3;
			filter: Alpha(Opacity=30)
		}

		.ui-widget-shadow {
			margin: -8px 0 0 -8px;
			padding: 8px;
			background: #aaaaaa url(../js/calendarui/images/ui-bg_flat_0_aaaaaa_40x100.png) 50% 50% repeat-x;
			opacity: .3;
			filter: Alpha(Opacity=30);
			-moz-border-radius: 8px;
			-webkit-border-radius: 8px;
			border-radius: 8px
		}

		/** /css/jquery.datetimepicker.css **/
		.xdsoft_datetimepicker {
			box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.506);
			background: #fff;
			border-bottom: 1px solid #bbb;
			border-left: 1px solid #ccc;
			border-right: 1px solid #ccc;
			border-top: 1px solid #ccc;
			color: #333;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			padding: 8px;
			padding-left: 0;
			padding-top: 2px;
			position: absolute;
			z-index: 99999;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			display: none;
		}

		.xdsoft_datetimepicker iframe {
			position: absolute;
			left: 0;
			top: 0;
			width: 75px;
			height: 210px;
			background: transparent;
			border: none;
		}

		/*For IE8 or lower*/
		.xdsoft_datetimepicker button {
			border: none !important;
		}

		.xdsoft_noselect {
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			-o-user-select: none;
			user-select: none;
		}

		.xdsoft_noselect::selection {
			background: transparent
		}

		.xdsoft_noselect::-moz-selection {
			background: transparent
		}

		.xdsoft_datetimepicker.xdsoft_inline {
			display: inline-block;
			position: static;
			box-shadow: none;
		}

		.xdsoft_datetimepicker * {
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			padding: 0;
			margin: 0;
		}

		.xdsoft_datetimepicker .xdsoft_datepicker, .xdsoft_datetimepicker .xdsoft_timepicker {
			display: none;
		}

		.xdsoft_datetimepicker .xdsoft_datepicker.active, .xdsoft_datetimepicker .xdsoft_timepicker.active {
			display: block;
		}

		.xdsoft_datetimepicker .xdsoft_datepicker {
			width: 224px;
			float: left;
			margin-left: 8px;
		}

		.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_datepicker {
			width: 256px;
		}

		.xdsoft_datetimepicker .xdsoft_timepicker {
			width: 58px;
			float: left;
			text-align: center;
			margin-left: 8px;
			margin-top: 0;
		}

		.xdsoft_datetimepicker .xdsoft_datepicker.active + .xdsoft_timepicker {
			margin-top: 8px;
			margin-bottom: 3px
		}

		.xdsoft_datetimepicker .xdsoft_mounthpicker {
			position: relative;
			text-align: center;
		}

		.xdsoft_datetimepicker .xdsoft_label i,
		.xdsoft_datetimepicker .xdsoft_prev,
		.xdsoft_datetimepicker .xdsoft_next,
		.xdsoft_datetimepicker .xdsoft_today_button {
			background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0NBRjI1NjM0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0NBRjI1NjQ0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDQ0FGMjU2MTQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDQ0FGMjU2MjQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PoNEP54AAAIOSURBVHja7Jq9TsMwEMcxrZD4WpBYeKUCe+kTMCACHZh4BFfHO/AAIHZGFhYkBBsSEqxsLCAgXKhbXYOTxh9pfJVP+qutnZ5s/5Lz2Y5I03QhWji2GIcgAokWgfCxNvcOCCGKqiSqhUp0laHOne05vdEyGMfkdxJDVjgwDlEQgYQBgx+ULJaWSXXS6r/ER5FBVR8VfGftTKcITNs+a1XpcFoExREIDF14AVIFxgQUS+h520cdud6wNkC0UBw6BCO/HoCYwBhD8QCkQ/x1mwDyD4plh4D6DDV0TAGyo4HcawLIBBSLDkHeH0Mg2yVP3l4TQMZQDDsEOl/MgHQqhMNuE0D+oBh0CIr8MAKyazBH9WyBuKxDWgbXfjNf32TZ1KWm/Ap1oSk/R53UtQ5xTh3LUlMmT8gt6g51Q9p+SobxgJQ/qmsfZhWywGFSl0yBjCLJCMgXail3b7+rumdVJ2YRss4cN+r6qAHDkPWjPjdJCF4n9RmAD/V9A/Wp4NQassDjwlB6XBiCxcJQWmZZb8THFilfy/lfrTvLghq2TqTHrRMTKNJ0sIhdo15RT+RpyWwFdY96UZ/LdQKBGjcXpcc1AlSFEfLmouD+1knuxBDUVrvOBmoOC/rEcN7OQxKVeJTCiAdUzUJhA2Oez9QTkp72OTVcxDcXY8iKNkxGAJXmJCOQwOa6dhyXsOa6XwEGAKdeb5ET3rQdAAAAAElFTkSuQmCC);
		}

		.xdsoft_datetimepicker .xdsoft_label i {
			opacity: 0.5;
			background-position: -92px -19px;
			display: inline-block;
			width: 9px;
			height: 20px;
			vertical-align: middle;
		}

		.xdsoft_datetimepicker .xdsoft_prev {
			float: left;
			background-position: -20px 0;
		}

		.xdsoft_datetimepicker .xdsoft_today_button {
			float: left;
			background-position: -70px 0;
			margin-left: 5px;
		}

		.xdsoft_datetimepicker .xdsoft_next {
			float: right;
			background-position: 0 0;
		}

		.xdsoft_datetimepicker .xdsoft_next,
		.xdsoft_datetimepicker .xdsoft_prev,
		.xdsoft_datetimepicker .xdsoft_today_button {
			background-color: transparent;
			background-repeat: no-repeat;
			border: 0 none;
			cursor: pointer;
			display: block;
			height: 30px;
			opacity: 0.5;
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
			outline: medium none;
			overflow: hidden;
			padding: 0;
			position: relative;
			text-indent: 100%;
			white-space: nowrap;
			width: 20px;
			min-width: 0;
		}

		.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev,
		.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_next {
			float: none;
			background-position: -40px -15px;
			height: 15px;
			width: 30px;
			display: block;
			margin-left: 14px;
			margin-top: 7px;
		}

		.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev {
			background-position: -40px 0;
			margin-bottom: 7px;
			margin-top: 0;
		}

		.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box {
			height: 151px;
			overflow: hidden;
			border-bottom: 1px solid #ddd;
		}

		.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div {
			background: #f5f5f5;
			border-top: 1px solid #ddd;
			color: #666;
			font-size: 12px;
			text-align: center;
			border-collapse: collapse;
			cursor: pointer;
			border-bottom-width: 0;
			height: 25px;
			line-height: 25px;
		}

		.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div:first-child {
			border-top-width: 0;
		}

		.xdsoft_datetimepicker .xdsoft_today_button:hover,
		.xdsoft_datetimepicker .xdsoft_next:hover,
		.xdsoft_datetimepicker .xdsoft_prev:hover {
			opacity: 1;
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
		}

		.xdsoft_datetimepicker .xdsoft_label {
			display: inline;
			position: relative;
			z-index: 9999;
			margin: 0;
			padding: 5px 3px;
			font-size: 14px;
			line-height: 20px;
			font-weight: bold;
			background-color: #fff;
			float: left;
			width: 182px;
			text-align: center;
			cursor: pointer;
		}

		.xdsoft_datetimepicker .xdsoft_label:hover > span {
			text-decoration: underline;
		}

		.xdsoft_datetimepicker .xdsoft_label:hover i {
			opacity: 1.0;
		}

		.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select {
			border: 1px solid #ccc;
			position: absolute;
			right: 0;
			top: 30px;
			z-index: 101;
			display: none;
			background: #fff;
			max-height: 160px;
			overflow-y: hidden;
		}

		.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_monthselect {
			right: -7px
		}

		.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_yearselect {
			right: 2px
		}

		.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
			color: #fff;
			background: #333333;
		}

		.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option {
			padding: 2px 10px 2px 5px;
			text-decoration: none !important;
		}

		.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
			background: #33aaff;
			box-shadow: #178fe5 0 1px 3px 0 inset;
			color: #fff;
			font-weight: 700;
		}

		.xdsoft_datetimepicker .xdsoft_month {
			width: 100px;
			text-align: right;
		}

		.xdsoft_datetimepicker .xdsoft_calendar {
			clear: both;
		}

		.xdsoft_datetimepicker .xdsoft_year {
			width: 48px;
			margin-left: 5px;
		}

		.xdsoft_datetimepicker .xdsoft_calendar table {
			border-collapse: collapse;
			width: 100%;

		}

		.xdsoft_datetimepicker .xdsoft_calendar td > div {
			padding-right: 5px;
		}

		.xdsoft_datetimepicker .xdsoft_calendar th {
			height: 25px;
		}

		.xdsoft_datetimepicker .xdsoft_calendar td, .xdsoft_datetimepicker .xdsoft_calendar th {
			width: 14.2857142%;
			background: #f5f5f5;
			border: 1px solid #ddd;
			color: #666;
			font-size: 12px;
			text-align: right;
			vertical-align: middle;
			padding: 0;
			border-collapse: collapse;
			cursor: pointer;
			height: 25px;
		}

		.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar td, .xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar th {
			width: 12.5%;
		}

		.xdsoft_datetimepicker .xdsoft_calendar th {
			background: #f1f1f1;
		}

		.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_today {
			color: #33aaff;
		}

		.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_default {
			background: #ffe9d2;
			box-shadow: #ffb871 0 1px 4px 0 inset;
			color: #000;
		}

		.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_mint {
			background: #c1ffc9;
			box-shadow: #00dd1c 0 1px 4px 0 inset;
			color: #000;
		}

		.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default,
		.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current,
		.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current {
			background: grey;
			box-shadow: rgba(29, 30, 31, 0.7) 0 1px 3px 0 inset;
			color: #fff;
			font-weight: 700;
		}

		.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month,
		.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled,
		.xdsoft_datetimepicker .xdsoft_time_box > div > div.xdsoft_disabled {
			opacity: 0.5;
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
			cursor: default;
		}

		.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month.xdsoft_disabled {
			opacity: 0.2;
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";
		}

		.xdsoft_datetimepicker .xdsoft_calendar td:hover,
		.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div:hover {
			color: #fff !important;
			background: #333333 !important;
			box-shadow: none !important;
		}

		.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current.xdsoft_disabled:hover,
		.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current.xdsoft_disabled:hover {
			background: #33aaff !important;
			box-shadow: #178fe5 0 1px 3px 0 inset !important;
			color: #fff !important;
		}

		.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled:hover,
		.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_disabled:hover {
			color: inherit !important;
			background: inherit !important;
			box-shadow: inherit !important;
		}

		.xdsoft_datetimepicker .xdsoft_calendar th {
			font-weight: 700;
			text-align: center;
			color: #999;
			cursor: default;
		}

		.xdsoft_datetimepicker .xdsoft_copyright {
			color: #ccc !important;
			font-size: 10px;
			clear: both;
			float: none;
			margin-left: 8px;
		}

		.xdsoft_datetimepicker .xdsoft_copyright a {
			color: #eee !important
		}

		.xdsoft_datetimepicker .xdsoft_copyright a:hover {
			color: #aaa !important
		}

		.xdsoft_time_box {
			position: relative;
			border: 1px solid #ccc;
		}

		.xdsoft_scrollbar > .xdsoft_scroller {
			background: #ccc !important;
			height: 20px;
			border-radius: 3px;
		}

		.xdsoft_scrollbar {
			position: absolute;
			width: 7px;
			right: 0;
			top: 0;
			bottom: 0;
			cursor: pointer;
		}

		.xdsoft_scroller_box {
			position: relative;
		}

		.xdsoft_datetimepicker.xdsoft_dark {
			box-shadow: 0 5px 15px -5px rgba(255, 255, 255, 0.506);
			background: #000;
			border-bottom: 1px solid #444;
			border-left: 1px solid #333;
			border-right: 1px solid #333;
			border-top: 1px solid #333;
			color: #ccc;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box {
			border-bottom: 1px solid #222;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box > div > div {
			background: #0a0a0a;
			border-top: 1px solid #222;
			color: #999;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label {
			background-color: #000;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select {
			border: 1px solid #333;
			background: #000;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
			color: #000;
			background: #007fff;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
			background: #cc5500;
			box-shadow: #b03e00 0 1px 3px 0 inset;
			color: #000;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label i,
		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_prev,
		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_next,
		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_today_button {
			background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QUExQUUzOTA0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QUExQUUzOTE0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBQTFBRTM4RTQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBQTFBRTM4RjQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pp0VxGEAAAIASURBVHja7JrNSgMxEMebtgh+3MSLr1T1Xn2CHoSKB08+QmR8Bx9A8e7RixdB9CKCoNdexIugxFlJa7rNZneTbLIpM/CnNLsdMvNjM8l0mRCiQ9Ye61IKCAgZAUnH+mU3MMZaHYChBnJUDzWOFZdVfc5+ZFLbrWDeXPwbxIqrLLfaeS0hEBVGIRQCEiZoHQwtlGSByCCdYBl8g8egTTAWoKQMRBRBcZxYlhzhKegqMOageErsCHVkk3hXIFooDgHB1KkHIHVgzKB4ADJQ/A1jAFmAYhkQqA5TOBtocrKrgXwQA8gcFIuAIO8sQSA7hidvPwaQGZSaAYHOUWJABhWWw2EMIH9QagQERU4SArJXo0ZZL18uvaxejXt/Em8xjVBXmvFr1KVm/AJ10tRe2XnraNqaJvKE3KHuUbfK1E+VHB0q40/y3sdQSxY4FHWeKJCunP8UyDdqJZenT3ntVV5jIYCAh20vT7ioP8tpf6E2lfEMwERe+whV1MHjwZB7PBiCxcGQWwKZKD62lfGNnP/1poFAA60T7rF1UgcKd2id3KDeUS+oLWV8DfWAepOfq00CgQabi9zjcgJVYVD7PVzQUAUGAQkbNJTBICDhgwYTjDYD6XeW08ZKh+A4pYkzenOxXUbvZcWz7E8ykRMnIHGX1XPl+1m2vPYpL+2qdb8CDAARlKFEz/ZVkAAAAABJRU5ErkJggg==);
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td,
		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
			background: #0a0a0a;
			border: 1px solid #222;
			color: #999;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
			background: #0e0e0e;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_today {
			color: #cc5500;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_default {
			background: #ffe9d2;
			box-shadow: #ffb871 0 1px 4px 0 inset;
			color: #000;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_mint {
			background: #c1ffc9;
			box-shadow: #00dd1c 0 1px 4px 0 inset;
			color: #000;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_default,
		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_current,
		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current {
			background: #cc5500;
			box-shadow: #b03e00 0 1px 3px 0 inset;
			color: #000;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td:hover,
		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box > div > div:hover {
			color: #000 !important;
			background: #007fff !important;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
			color: #666;
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright {
			color: #333 !important
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a {
			color: #111 !important
		}

		.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a:hover {
			color: #555 !important
		}

		.xdsoft_dark .xdsoft_time_box {
			border: 1px solid #333;
		}

		.xdsoft_dark .xdsoft_scrollbar > .xdsoft_scroller {
			background: #333 !important;
		}

		.xdsoft_datetimepicker .xdsoft_save_selected {
			display: block;
			border: 1px solid #dddddd !important;
			margin-top: 5px;
			width: 100%;
			color: #454551;
			font-size: 13px;
		}

		.xdsoft_datetimepicker .blue-gradient-button {
			font-family: "museo-sans", "Book Antiqua", sans-serif;
			font-size: 12px;
			font-weight: 300;
			color: #82878c;
			height: 28px;
			position: relative;
			padding: 4px 17px 4px 33px;
			border: 1px solid #d7d8da;
			background: -moz-linear-gradient(top, #fff 0%, #f4f8fa 73%);
			/* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(73%, #f4f8fa));
			/* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #fff 0%, #f4f8fa 73%);
			/* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #fff 0%, #f4f8fa 73%);
			/* Opera 11.10+ */
			background: -ms-linear-gradient(top, #fff 0%, #f4f8fa 73%);
			/* IE10+ */
			background: linear-gradient(to bottom, #fff 0%, #f4f8fa 73%);
			/* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff', endColorstr='#f4f8fa', GradientType=0);
			/* IE6-9 */
		}

		.xdsoft_datetimepicker .blue-gradient-button:hover, .xdsoft_datetimepicker .blue-gradient-button:focus, .xdsoft_datetimepicker .blue-gradient-button:hover span, .xdsoft_datetimepicker .blue-gradient-button:focus span {
			color: #454551;
			background: -moz-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
			/* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f4f8fa), color-stop(73%, #FFF));
			/* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
			/* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
			/* Opera 11.10+ */
			background: -ms-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
			/* IE10+ */
			background: linear-gradient(to bottom, #f4f8fa 0%, #FFF 73%);
			/* W3C */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4f8fa', endColorstr='#FFF', GradientType=0);
			/* IE6-9 */
		}


		.xdsoft_disabled {
			background-color: red;
			color: white;
			opacity: 1;
		}

		.xdsoft_disabled {
			background-color: #E84646 !important;
			color: white !important;
		}


		/** /css/mailWidgets/form.css **/
		.mailwidget--form {
			width: calc(100% - 2rem);
			margin: 1rem;
		}

		.mailwidget--form-row {
			display: flex;
			margin-bottom: 1rem;
		}

		label.mailwidget--label {
			margin-bottom: 0.15rem;
		}

		.mailwidget--input-group {
			display: flex;
			flex-direction: column;
			width: 100%;
			position: relative;
		}

		.mailwidget--form-row .mailwidget--input-group:not(:last-of-type) {
			padding-right: 1rem;
		}

		.mailwidget--label.required:before {
			content: "*";
			color: #ff0000;
			padding-right: 0.25rem;
		}

		/** /css/mailExpressRequestWidget.css **/
		.mail-express-widget, .mail-express-widget--fullwidth {
			float: left;
			width: 285px;
			margin: 5px 5px 5px 15px;
			padding: 5px
		}

		.mail-express-widget:after {
			content: " ";
			clear: both
		}

		.mail-express-widget__container, .mail-express-widget__container--fullwidth {
			background-color: #000;
			box-shadow: 1px 2px 6px 0 rgba(150, 150, 150, 0.25);
			clear: both;
			box-sizing: border-box;
			width: 100%;
			border-radius: 5px
		}

		.mail-express-widget__email-definition {
			display: none
		}

		.mail-express-widget__header {
			padding: 10px 15px 0 15px;
			border-radius: 5px 5px 0 0;
			border-bottom: 1px solid #fff
		}

		.mail-express-widget__header .mail-express-widget__header--title {
			padding-bottom: 5px;
			text-align: center
		}

		.mail-express-widget__body {
			padding: 15px
		}

		.mail-express-widget__body > *:not(:last-child) {
			margin-bottom: 6px
		}

		.mail-express-widget__input input, .mail-express-widget__select select, .mail-express-widget__textarea textarea {
			box-sizing: border-box;
			width: 100%;
			border-radius: 4px;
			border: 1px solid #ccc;
			padding: 6px
		}

		.mail-express-widget__input input, .mail-express-widget__select select {
			height: 32px
		}

		.mail-express-widget__form--error, input.mail-express-widget__form--error, textarea.mail-express-widget__form--error {
			border: 1px solid #dc3545;
			background-color: #fad6dc !important
		}

		.mail-express-widget__form--error::placeholder, input.mail-express-widget__form--error::placeholder, textarea.mail-express-widget__form--error::placeholder {
			color: #dc3545
		}

		.mail-express-widget__footer {
			padding: 5px 15px 15px 15px
		}

		.mail-express-widget__footer__required-fields {
			margin-bottom: 15px;
			padding: 8px 5px 8px 50px;
			border: 1px solid;
			background-color: #ffbaba;
			background-image: url(../images/error.png);
			background-position: 10px center;
			background-repeat: no-repeat;
			color: #d8000c
		}

		.mail-express-widget__footer__required-fields.hidden {
			visibility: hidden;
			display: none
		}

		.mail-express-widget__footer__submit button {
			width: 100%;
			padding: 0 19px;
			margin: 0;
			color: #fff;
			border: 1px solid #fff;
			border-radius: 3px;
			background-color: #000;
			font-size: 13px;
			line-height: 28px;
			font-weight: bold;
			text-decoration: none;
			cursor: pointer
		}

		.mail-express-widget__footer__submit button:hover {
			border-color: #000;
			background-color: #fff;
			color: #000
		}

		/** /css/visitContactForm.css **/
		.visitContactHeader {
			padding: 10px 5px;
			position: relative;
		}

		.visitContactHeader .visitContactCTAContainer {
			width: 100%;
		}

		.visitContactHeader .visitContactFormContainer {
			display: none;
			z-index: 99;
			background-color: white;
			height: auto;
			position: absolute;
			width: 250px;
			padding: 15px;
			top: 50px;
			left: -20px;
			box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
		}

		.visitContactHeader:hover .visitContactFormContainer {
			display: block;
		}

		.visitContactHeader .visitContactFormContainer.isOpen {
			display: block;
		}

		.visitContactFormContainer .visitContactForm .visitContactDateDiv {
			position: relative;
		}

		.visitContactFormContainer .visitContactForm .visitContactDateDiv span {
			position: absolute;
			top: 8px;
			right: 10px;
			color: #aaa;
		}

		.visitContactFormContainer .visitContactForm input:not([type="submit"]) {
			display: block;
			margin-bottom: 10px;
			width: 100%;
			height: 30px;
			box-sizing: border-box;
			padding: 0 10px;
		}


		.visitContactFormContainer .visitContactForm textarea.visitContactComment {
			display: none;
			margin-bottom: 10px;
			width: 100%;
			height: 40px;
			box-sizing: border-box;
			resize: vertical;
			padding: 0 10px;
		}

		.visitContactFormContainer .visitContactForm textarea.visitContactComment.showComment {
			display: block;
		}

		.visitContactHeader .visitContactCTAContainer .visitContactButton {
			width: 100%;
			text-align: center;
			padding: 11px 5px 9px;
			background-color: #cc0000;
			color: #ffffff;
		}

		.visitContactHeader .visitContactFormContainer .visitContactForm .visitContactFormSubmit {
			height: auto;
			margin-bottom: 0;
			width: 100%;
			background-color: #cc0000;
			color: #ffffff;
		}

		/** /css/toastr.css **/
		.toast-title {
			font-weight: bold
		}

		.toast-message {
			-ms-word-wrap: break-word;
			word-wrap: break-word
		}

		.toast-message a, .toast-message label {
			color: #fff
		}

		.toast-message a:hover {
			color: #ccc;
			text-decoration: none
		}

		.toast-close-button {
			position: relative;
			right: -0.3em;
			top: -0.3em;
			float: right;
			font-size: 20px;
			font-weight: bold;
			color: inherit;
			-webkit-text-shadow: 0 1px 0 #fff;
			text-shadow: 0 1px 0 #fff;
			opacity: .8;
			-ms-filter: alpha(opacity=80);
			filter: alpha(opacity=80)
		}

		.toast-close-button:hover, .toast-close-button:focus {
			color: #000000;
			text-decoration: none;
			cursor: pointer;
			opacity: .4;
			-ms-filter: alpha(opacity=40);
			filter: alpha(opacity=40)
		}

		button.toast-close-button {
			padding: 0;
			cursor: pointer;
			background: transparent;
			border: 0;
			-webkit-appearance: none
		}

		.toast-top-center {
			top: 0;
			right: 0;
			width: 100%
		}

		.toast-bottom-center {
			bottom: 0;
			right: 0;
			width: 100%
		}

		.toast-top-full-width {
			top: 0;
			right: 0;
			width: 100%
		}

		.toast-bottom-full-width {
			bottom: 0;
			right: 0;
			width: 100%
		}

		.toast-top-left {
			top: 12px;
			left: 12px
		}

		.toast-top-right {
			top: 12px;
			right: 12px
		}

		.toast-bottom-right {
			right: 12px;
			bottom: 12px
		}

		.toast-bottom-left {
			bottom: 12px;
			left: 12px
		}

		#toast-container {
			position: fixed;
			z-index: 999999;
			color: #FFF
		}

		#toast-container * {
			-moz-box-sizing: border-box;
			-webkit-box-sizing: border-box;
			box-sizing: border-box
		}

		#toast-container > div {
			position: relative;
			overflow: hidden;
			margin: 0 0 6px;
			padding: 15px 15px 15px 50px;
			width: 300px;
			-moz-border-radius: 3px 3px 3px 3px;
			-webkit-border-radius: 3px 3px 3px 3px;
			border-radius: 3px 3px 3px 3px;
			background-position: 15px center;
			background-repeat: no-repeat;
			-moz-box-shadow: 0 0 12px #999;
			-webkit-box-shadow: 0 0 12px #999;
			box-shadow: 0 0 12px #999;
			color: inherit;
			opacity: .8;
			-ms-filter: alpha(opacity=80);
			filter: alpha(opacity=80)
		}

		#toast-container > :hover {
			-moz-box-shadow: 0 0 12px #000;
			-webkit-box-shadow: 0 0 12px #000;
			box-shadow: 0 0 12px #000;
			opacity: 1;
			-ms-filter: alpha(opacity=100);
			filter: alpha(opacity=100);
			cursor: pointer
		}

		#toast-container > .toast-info {
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=") !important
		}

		#toast-container > .toast-error {
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=") !important
		}

		#toast-container > .toast-success {
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==") !important
		}

		#toast-container > .toast-warning {
			background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=") !important
		}

		#toast-container.toast-top-center > div, #toast-container.toast-bottom-center > div {
			width: 300px;
			margin: auto
		}

		#toast-container.toast-top-full-width > div, #toast-container.toast-bottom-full-width > div {
			width: 96%;
			margin: auto
		}

		.toast {
			background-color: #030303
		}

		.toast-success {
			background-color: #51a351
		}

		.toast-error {
			background-color: #bd362f
		}

		.toast-info {
			background-color: #2f96b4
		}

		.toast-warning {
			background-color: #f89406
		}

		.toast-progress {
			position: absolute;
			left: 0;
			bottom: 0;
			height: 4px;
			background-color: #000;
			opacity: .4;
			-ms-filter: alpha(opacity=40);
			filter: alpha(opacity=40)
		}

		@media all and (max-width: 240px) {
			#toast-container > div {
				padding: 8px 8px 8px 50px;
				width: 11em
			}

			#toast-container .toast-close-button {
				right: -0.2em;
				top: -0.2em
			}
		}

		@media all and (min-width: 241px) and (max-width: 480px) {
			#toast-container > div {
				padding: 8px 8px 8px 50px;
				width: 18em
			}

			#toast-container .toast-close-button {
				right: -0.2em;
				top: -0.2em
			}
		}

		@media all and (min-width: 481px) and (max-width: 768px) {
			#toast-container > div {
				padding: 15px 15px 15px 50px;
				width: 25em
			}
		}

		/** /css/outdatedbrowser/outdatedbrowser.min.css **/
		/*!--------------------------------------------------------------------
STYLES "Outdated Browser"
Version:    1.1.2 - 2015
author:     Burocratik
website:    https://www.burocratik.com
* @preserve
-----------------------------------------------------------------------*/
		#outdated {
			display: none;
			position: fixed;
			top: 40px;
			left: 3%;
			width: 94%;
			height: 100px;
			text-align: center;
			text-transform: uppercase;
			z-index: 1500;
			background-color: #f25648;
			color: #fff;
		}

		* html #outdated {
			position: absolute
		}

		#outdated h6 {
			font-size: 25px;
			line-height: 25px;
			margin: 30px 0 10px
		}

		#outdated p {
			font-size: 15px;
			line-height: 25px;
			width: 90%;
			margin-left: auto;
			margin-right: auto;
		}

		#outdated #btnUpdateBrowser {
			display: block;
			position: relative;
			padding: 10px 20px;
			margin: 30px auto 0;
			width: 230px;
			color: #fff;
			text-decoration: none;
			border: 2px solid #fff;
			cursor: pointer
		}

		#outdated #btnUpdateBrowser:hover {
			color: #f25648;
			background-color: #fff
		}

		#outdated .last {
			position: absolute;
			top: 10px;
			right: 25px;
			width: 20px;
			height: 20px
		}

		#outdated #btnCloseUpdateBrowser {
			display: block;
			position: relative;
			width: 100%;
			height: 100%;
			text-decoration: none;
			color: #fff;
			font-size: 36px;
			line-height: 36px
		}

		/** /css/inline.en.credit.css **/
		/* CSS_9f2fcf792dcb557fdf64eaf7169ac0ec */
		/*------------------START: FOOTER TWEAKS------------------*/
		#footer ul li {
			margin: 3px 0;
		}

		#footer ul li span {
			font-weight: bold;
			margin-bottom: 15px;
		}

		#footer .divSpan3 div {
			margin: 6px 0;
		}

		#footer .divSpan3 > span {
			margin-bottom: 15px;
			display: block;
			font-weight: bold;
		}

		/*------------------END: FOOTER TWEAKS------------------*/ /* PUT DEALER'S MAIN COLOR HERE */
		.caroussel ul li div a span.price {
			color: #b39b6d !important;
		}
	</style>
	<style type="text/css">
		.hideOnPreLoad {
			visibility: hidden;
		}

		.reveal-modal {
			visibility: hidden;
		}
	</style>
</head>
<body id="PageFinance" class="isPageFullWidthEnabled template1 isFullWidthPage ENGLISH">

<?php include 'shared/header.php'?>

<input type='hidden' value='CreditRequest' id='credit_textSaveMailID'/>

<input type='hidden' value='sales@seanauto.com' id='textSendToEmail'/>
<input type='hidden' value='' id='textSendToEmailADF'/>


<div class="MainBoxLayer credit-form">
	<!--Left -->
	<div class="LeftBoxLayer left_box">
		<div id='mainLeftBoxDiv' class="OuterBoxLayer">
			<div class="InnerBoxLayer">

				<div><h1 class="page_name2"><?=$this->lang->line('finance_heading')?></h1></div>

				<div class="box2_text" style='display:none'>
					<div style='width:321px;height:0;text-align:left;border:2px solid #FFFFFF;border-radius: 7px 7px 7px 7px;margin-top:0;'>
						<!-- CAR IMAGE -->
					</div>
				</div>

				<div style="display:none">
					<!--
						[FIELDGENERAL_Auto financing and credit in Montr&eacute;al]Auto financing and credit in Montr&eacute;al[/FIELDGENERAL_Auto financing and credit in Montr&eacute;al]
						[FIELDMAKEMODEL_Auto financing and credit in Montr&eacute;al]<span class="titleInfo">Financing of </span><span class="titleCar"> 0   </span><span id='cityTitle'>in Montr&eacute;al</span>[/FIELDMAKEMODEL_Auto financing and credit in Montr&eacute;al]
						-->
				</div>


				<div class="box2_text" style='display:block'>
					<div style='padding-bottom:20px;'></div>
				</div>
				<div class="box2_text" style='display:none'>
					<p>You need expert advice on auto credit and financing for the purchase of your next 0 ? Elegance
						Leasing is your dealer of choice in the greater Montr&eacute;al area. Our car credit solutions
						for 0 are personalized to fit your specific needs. Our auto financing department has already
						helped hundreds of people in acquiring their next in confidence, and in full respect of their
						budget and priorities. At Elegance Leasing, our experts in auto financing will take the
						necessary time to evaluate your specific situation to find best auto financing options for the
						purchase or leasing of your next .
					<p>For more information on auto credit and our vehicle financing offers, contact-us now at 514
						482-4500!</p>
				</div>


				<div id="etapeContainer"
					 style="display:none;width:648px; height:46px; float:left; margin-top:30px; margin-bottom:20px; margin-left:23px;">
					<div class="etape" style="cursor:pointer;" onclick="goToStep(1);">
						<div class="text1"><span class="analytics_icon_no">Step </span></div>
						<div id='step1div' class="stepActive">1</div>
						<div class="clr"></div>
					</div>
					<div class="etape" style="cursor:pointer;" onclick="goToStep(2);">
						<div class="text1"><span class="analytics_icon">Step </span></div>
						<div id='step2div' class="stepUnactive">2</div>
						<div class="clr"></div>
					</div>
					<div class="etape" style="cursor:pointer;" onclick="goToStep(3);">
						<div class="text1"><span class="analytics_icon">Step </span></div>
						<div id='step3div' class="stepUnactive">3</div>
						<div class="clr"></div>
					</div>
				</div>

				<div style="width:648px; height: auto ; float:left; padding:0 0 0 23px; margin-bottom:20px;">
					<div class="selectionnez"><?=$this->lang->line('finance_select_type')?></div>
					<div style="width:20px; padding-top: 5px;float:left;"><input id="creditDemand" name="creditType"
																				 type="radio" value="1"
																				 checked="checked"/></div>
					<div class="selectionnez"><?=$this->lang->line('finance_select_type_1')?></div>
					<div style="width:20px; padding-top: 5px;float:left;"><input id="secondcredit" name="creditType"
																				 type="radio" value="2"/></div>
					<div class="selectionnez"><?=$this->lang->line('finance_select_type_2')?></div>
				</div>
				<div class="clr"></div>

				<div id="stepOne">


					<div id="infocar">
						<div class="divTable align-center">
							<input type='hidden' id='cartrim' value=''/>
							<input type='hidden' id='carvin' value=''/>
							<input type='hidden' id='carprice' value=''/>
							<input type='hidden' id='carid' value=''/>
							<input type='hidden' id='dealerbrand' value=''/>
							<input type='hidden' id='availYearsOnly' value=''/>
							<form id='vehicleSelectForm' name='vehicleSelectForm' action='#'>
								<div style="display:none;" class="forms_box22 with_border">
									<div class="text30 firstcharup">
										Information about the vehicle to finance<span><strong>*</strong>required</span>
									</div>
									<div class="main617">
										<div class="box617">
											<div class="box2">
												Brand :<span>*</span>
											</div>
											<div class="box3">Model :<span>*</span></div>
											<div id='brandDivMW' class='box4'><select name='brandSelect'
																					  id='brandSelect'
																					  style='width:230px;'
																					  currentStatus='used'>
													<option ubrand='ACURA' value='Acura' brandid='21'>Acura</option>
													<option ubrand='AUDI' value='Audi' brandid='2'>Audi</option>
													<option ubrand='BMW' value='BMW' brandid='41'>BMW</option>
													<option ubrand='CHEVROLET' value='Chevrolet' brandid='23'>
														Chevrolet
													</option>
													<option ubrand='FORD' value='Ford' brandid='45'>Ford</option>
													<option ubrand='HONDA' value='Honda' brandid='47'>Honda</option>
													<option ubrand='INFINITI' value='Infiniti' brandid='48'>Infiniti
													</option>
													<option ubrand='JAGUAR' value='Jaguar' brandid='28'>Jaguar</option>
													<option ubrand='LAMBORGHINI' value='Lamborghini' brandid='73'>
														Lamborghini
													</option>
													<option ubrand='LAND ROVER' value='Land Rover' brandid='29'>Land
														Rover
													</option>
													<option ubrand='LEXUS' value='Lexus' brandid='50'>Lexus</option>
													<option ubrand='MAZDA' value='Mazda' brandid='51'>Mazda</option>
													<option ubrand='MERCEDES-BENZ' value='Mercedes-Benz' brandid='13'>
														Mercedes-Benz
													</option>
													<option ubrand='MINI' value='Mini' brandid='14'>Mini</option>
													<option ubrand='NISSAN' value='Nissan' brandid='53'>Nissan</option>
													<option ubrand='PORSCHE' value='Porsche' brandid='36'>Porsche
													</option>
													<option ubrand='SUBARU' value='Subaru' brandid='19'>Subaru</option>
													<option ubrand='TOYOTA' value='Toyota' brandid='64'>Toyota</option>
													<option ubrand='VOLKSWAGEN' value='Volkswagen' brandid='39'>
														Volkswagen
													</option>
													<option ubrand='VOLVO' value='Volvo' brandid='63'>Volvo</option>
												</select></div>
											<div id='modelDivMW' class='box5'><select name='modelSelect'
																					  id='modelSelect'
																					  style='width:230px;'>
													<option value="">-</option>
												</select></div>

											<div class="box2">Year: <span>*</span></div>
											<div class="box3">Color</div>
											<div id='yearDiv' class="box4">
												<select class="" vname="yearSelect" id="yearSelect"
														style="width:230px;">
													<option value="">Year</option>
													<option value='2022'>2022</option>
													<option value='2021'>2021</option>
													<option value='2020'>2020</option>
													<option value='2019'>2019</option>
													<option value='2018'>2018</option>
													<option value='2017'>2017</option>
													<option value='2016'>2016</option>
													<option value='2015'>2015</option>
													<option value='2014'>2014</option>
													<option value='2013'>2013</option>
													<option value='2012'>2012</option>
													<option value='2011'>2011</option>
													<option value='2010'>2010</option>
													<option value='2009'>2009</option>
													<option value='2008'>2008</option>
													<option value='2007'>2007</option>
													<option value='2006'>2006</option>
													<option value='2005'>2005</option>
													<option value='2004'>2004</option>
													<option value='2003'>2003</option>
													<option value='2002'>2002</option>
													<option value='2001'>2001</option>
													<option value='2000'>2000</option>
													<option value='1999'>1999</option>
													<option value='1998'>1998</option>
													<option value='1997'>1997</option>
													<option value='1996'>1996</option>
													<option value='1995'>1995</option>
													<option value='1994'>1994</option>
													<option value='1993'>1993</option>
													<option value='1992'>1992</option>
													<option value='1991'>1991</option>
													<option value='1990'>1990</option>
													<option value='1989'>1989</option>
													<option value='1988'>1988</option>
													<option value='1987'>1987</option>
													<option value='1986'>1986</option>
													<option value='1985'>1985</option>
													<option value='1984'>1984</option>
													<option value='1983'>1983</option>
													<option value='1982'>1982</option>
													<option value='1981'>1981</option>
												</select>
											</div>
											<div id='colorDiv' class="box5">
												<select name="colorSelect" id="colorSelect -USEDCOLOR2"
														style="width:230px;">
													<option value='-1'>Select</option>
													<option english="black" french="noir" value="Black">Black</option>
													<option english="blue" french="bleu" value="Blue">Blue</option>
													<option english="brown" french="brun" value="Brown">Brown</option>
													<option english="burgundy" french="bourgogne" value="Burgundy">
														Burgundy
													</option>
													<option english="copper" french="cuivre" value="Copper">Copper
													</option>
													<option english="cream" french="cr�me" value="Cream">Cream</option>
													<option english="dark blue" french="bleu fonc�" value="Dark blue">
														Dark blue
													</option>
													<option english="dark green" french="vert fonc�" value="Dark green">
														Dark green
													</option>
													<option english="dark grey" french="gris fonc�" value="Dark grey">
														Dark grey
													</option>
													<option english="gold" french="or" value="Gold">Gold</option>
													<option english="green" french="vert" value="Green">Green</option>
													<option english="green" french="vert ford" value="Green">Green
													</option>
													<option english="green" french="verte" value="Green">Green</option>
													<option english="grey" french="gris" value="Grey">Grey</option>
													<option english="light blue" french="bleu p�le" value="Light blue">
														Light blue
													</option>
													<option english="light gray" french="charbon" value="Light gray">
														Light gray
													</option>
													<option english="light gray" french="gris p�le" value="Light gray">
														Light gray
													</option>
													<option english="light green" french="vert p�le"
															value="Light green">Light green
													</option>
													<option english="light grey" french="gris p�le" value="Light grey">
														Light grey
													</option>
													<option english="orange" french="orange" value="Orange">Orange
													</option>
													<option english="pink" french="rose" value="Pink">Pink</option>
													<option english="purple" french="mauve" value="Purple">Purple
													</option>
													<option english="purple" french="violet" value="Purple">Purple
													</option>
													<option english="red" french="rouge" value="Red">Red</option>
													<option english="silver" french="argent" value="Silver">Silver
													</option>
													<option english="tan" french="tan" value="Tan">Tan</option>
													<option english="tin" french="�tain" value="Tin">Tin</option>
													<option english="white" french="blanc" value="White">White</option>
													<option english="yellow" french="jaune" value="Yellow">Yellow
													</option>
													<option value='other'>Other</option>
												</select>
											</div>
											<select id="colorSelectHidden" style="display:none;"
													class="jqTransformHidden">
												<option value='-1'>Select</option>
												<option othertype='0' english="black" french="noir" value="Black">
													Black
												</option>
												<option othertype='0' english="blue" french="bleu" value="Blue">Blue
												</option>
												<option othertype='0' english="brown" french="brun" value="Brown">
													Brown
												</option>
												<option othertype='0' english="burgundy" french="bourgogne"
														value="Burgundy">Burgundy
												</option>
												<option othertype='0' english="copper" french="cuivre" value="Copper">
													Copper
												</option>
												<option othertype='0' english="cream" french="cr�me" value="Cream">
													Cream
												</option>
												<option othertype='0' english="dark blue" french="bleu fonc�"
														value="Dark blue">Dark blue
												</option>
												<option othertype='0' english="dark green" french="vert fonc�"
														value="Dark green">Dark green
												</option>
												<option othertype='0' english="dark grey" french="gris fonc�"
														value="Dark grey">Dark grey
												</option>
												<option othertype='0' english="gold" french="or" value="Gold">Gold
												</option>
												<option othertype='0' english="green" french="vert" value="Green">
													Green
												</option>
												<option othertype='0' english="green" french="vert ford" value="Green">
													Green
												</option>
												<option othertype='0' english="green" french="verte" value="Green">
													Green
												</option>
												<option othertype='0' english="grey" french="gris" value="Grey">Grey
												</option>
												<option othertype='0' english="light blue" french="bleu p�le"
														value="Light blue">Light blue
												</option>
												<option othertype='0' english="light gray" french="charbon"
														value="Light gray">Light gray
												</option>
												<option othertype='0' english="light gray" french="gris p�le"
														value="Light gray">Light gray
												</option>
												<option othertype='0' english="light green" french="vert p�le"
														value="Light green">Light green
												</option>
												<option othertype='0' english="light grey" french="gris p�le"
														value="Light grey">Light grey
												</option>
												<option othertype='0' english="orange" french="orange" value="Orange">
													Orange
												</option>
												<option othertype='0' english="pink" french="rose" value="Pink">Pink
												</option>
												<option othertype='0' english="purple" french="mauve" value="Purple">
													Purple
												</option>
												<option othertype='0' english="purple" french="violet" value="Purple">
													Purple
												</option>
												<option othertype='0' english="red" french="rouge" value="Red">Red
												</option>
												<option othertype='0' english="silver" french="argent" value="Silver">
													Silver
												</option>
												<option othertype='0' english="tan" french="tan" value="Tan">Tan
												</option>
												<option othertype='0' english="tin" french="�tain" value="Tin">Tin
												</option>
												<option othertype='0' english="white" french="blanc" value="White">
													White
												</option>
												<option othertype='0' english="yellow" french="jaune" value="Yellow">
													Yellow
												</option>
												<option othertype='1' english="2 ton gris" french="2 ton gris"
														value="2 Ton Gris">2 Ton Gris
												</option>
												<option othertype='1' english="2 ton noir/argent"
														french="2 ton noir/argent" value="2 TON NOIR/ARGENT">2 TON
													NOIR/ARGENT
												</option>
												<option othertype='1' english="2 tone cream" french="2 tone cream"
														value="2 Tone Cream">2 Tone Cream
												</option>
												<option othertype='1' english="2 tone grey" french="2 tone grey"
														value="2 Tone Grey">2 Tone Grey
												</option>
												<option othertype='1' english="3 tones" french="3 tons" value="3 TONES">
													3 TONES
												</option>
												<option othertype='1' english="almond" french="almond" value="Almond">
													Almond
												</option>
												<option othertype='1' english="almond biscotti" french="almond biscotti"
														value="Almond Biscotti">Almond Biscotti
												</option>
												<option othertype='1' english="amber" french="amber" value="Amber">
													Amber
												</option>
												<option othertype='1' english="amber honey" french="amber honey"
														value="Amber Honey">Amber Honey
												</option>
												<option othertype='1' english="antique" french="antique"
														value="Antique">Antique
												</option>
												<option othertype='1' english="antique sand" french="antique sand"
														value="Antique Sand">Antique Sand
												</option>
												<option othertype='1' english="aqua" french="aqua" value="Aqua">Aqua
												</option>
												<option othertype='1' english="arcadia" french="arcadia"
														value="Arcadia">Arcadia
												</option>
												<option othertype='1' english="arctic white" french="blanc arctique"
														value="Arctic White">Arctic White
												</option>
												<option othertype='1' english="argent" french="argent" value="Argent">
													Argent
												</option>
												<option othertype='1' english="argent brillant" french="argent brillant"
														value="Argent Brillant">Argent Brillant
												</option>
												<option othertype='1' english="argent brillant" french="argent brillant"
														value="Argent Brillant">Argent Brillant
												</option>
												<option othertype='1' english="argent met" french="argent met"
														value="Argent Met">Argent Met
												</option>
												<option othertype='1' english="argent metallique"
														french="argent metallique" value="Argent Metallique">Argent
													Metallique
												</option>
												<option othertype='1' english="autre" french="autre" value="Autre">
													Autre
												</option>
												<option othertype='1' english="autumn leaf" french="autumn leaf"
														value="Autumn Leaf">Autumn Leaf
												</option>
												<option othertype='1' english="autumn pecan" french="autumn pecan"
														value="Autumn Pecan">Autumn Pecan
												</option>
												<option othertype='1' english="autumn wheat" french="autumn wheat"
														value="Autumn Wheat">Autumn Wheat
												</option>
												<option othertype='1' english="b'dazzeled chocolate"
														french="b'dazzeled chocolate" value="B'dazzeled Chocolate">B&#039;dazzeled
													Chocolate
												</option>
												<option othertype='1' english="bahama berry" french="bahama berry"
														value="Bahama Berry">Bahama Berry
												</option>
												<option othertype='1' english="baltic bronze" french="baltic bronze"
														value="Baltic Bronze">Baltic Bronze
												</option>
												<option othertype='1' english="bamboo" french="bamboo" value="Bamboo">
													Bamboo
												</option>
												<option othertype='1' english="bamboo suede" french="bamboo suede"
														value="Bamboo Suede">Bamboo Suede
												</option>
												<option othertype='1' english="bayside" french="bayside"
														value="Bayside">Bayside
												</option>
												<option othertype='1' english="beach" french="beach" value="Beach">
													Beach
												</option>
												<option othertype='1' english="beige" french="beige" value="Beige">
													Beige
												</option>
												<option othertype='1' english="beige-bleu" french="beige-bleu"
														value="Beige-Bleu">Beige-Bleu
												</option>
												<option othertype='1' english="beige/noir/bourgogne"
														french="beige/noir/bourgogne" value="BEIGE/NOIR/BOURGOGNE">
													BEIGE/NOIR/BOURGOGNE
												</option>
												<option othertype='1' english="beige/noir/bourgogne"
														french="beige/noir/bourgogne" value="BEIGE/NOIR/BOURGOGNE">
													BEIGE/NOIR/BOURGOGNE
												</option>
												<option othertype='1' english="bermuda" french="bermuda"
														value="Bermuda">Bermuda
												</option>
												<option othertype='1' english="berry metallic"
														french="rouge baies m�tallis�" value="Berry Metallic">Berry
													Metallic
												</option>
												<option othertype='1' english="biege" french="biege" value="Biege">
													Biege
												</option>
												<option othertype='1' english="bistro" french="bistro" value="Bistro">
													Bistro
												</option>
												<option othertype='1' english="bittersweet  twilight"
														french="bittersweet  twilight" value="Bittersweet  Twilight">
													Bittersweet Twilight
												</option>
												<option othertype='1' english="bittersweet twilight"
														french="bittersweet twilight" value="Bittersweet Twilight">
													Bittersweet Twilight
												</option>
												<option othertype='1' english="black" french="noir" value="Black">
													Black
												</option>
												<option othertype='1' english="black cream" french="black cream"
														value="Black Cream">Black Cream
												</option>
												<option othertype='1' english="black forest" french="black forest"
														value="Black Forest">Black Forest
												</option>
												<option othertype='1' english="black galaxie" french="black galaxie"
														value="Black Galaxie">Black Galaxie
												</option>
												<option othertype='1' english="black pearl" french="black pearl"
														value="Black Pearl">Black Pearl
												</option>
												<option othertype='1' english="black/white/silver"
														french="noir/blanc/gris" value="Black/White/Silver">
													Black/White/Silver
												</option>
												<option othertype='1' english="black/white/silver"
														french="noir/blanc/gris" value="Black/White/Silver">
													Black/White/Silver
												</option>
												<option othertype='1' english="blanc (gelcoat)" french="blanc (gelcoat)"
														value="Blanc (gelcoat)">Blanc (gelcoat)
												</option>
												<option othertype='1' english="blanc - rouge - noir"
														french="blanc - rouge - noir" value="Blanc - Rouge - Noir">Blanc
													- Rouge - Noir
												</option>
												<option othertype='1' english="blanc - vert fonc�"
														french="blanc - vert fonc�" value="Blanc - vert fonc�">Blanc -
													vert fonc&eacute;
												</option>
												<option othertype='1' english="blanc - vert fonc�"
														french="blanc - vert fonc�" value="Blanc - vert fonc�">Blanc -
													vert fonc&eacute;
												</option>
												<option othertype='1' english="blanc / orange / noir"
														french="blanc / orange / noir" value="Blanc / Orange / Noir">
													Blanc / Orange / Noir
												</option>
												<option othertype='1' english="blanc / vert" french="blanc / vert"
														value="BLANC / VERT">BLANC / VERT
												</option>
												<option othertype='1' english="blanc bleu" french="blanc bleu"
														value="Blanc Bleu">Blanc Bleu
												</option>
												<option othertype='1' english="blanc brun" french="blanc brun"
														value="Blanc Brun">Blanc Brun
												</option>
												<option othertype='1' english="blanc eminent" french="blanc eminent"
														value="Blanc Eminent">Blanc Eminent
												</option>
												<option othertype='1' english="blanc ligne bleu"
														french="blanc ligne bleu" value="Blanc Ligne Bleu">Blanc Ligne
													Bleu
												</option>
												<option othertype='1' english="blanc perle" french="blanc perle"
														value="Blanc Perle">Blanc Perle
												</option>
												<option othertype='1' english="blanc ross" french="blanc ross"
														value="Blanc Ross">Blanc Ross
												</option>
												<option othertype='1' english="blanc tan noir" french="blanc tan noir"
														value="Blanc Tan Noir">Blanc Tan Noir
												</option>
												<option othertype='1' english="blanc* (modele deluxe seul.)"
														french="blanc* (modele deluxe seul.)"
														value="Blanc* (modele Deluxe Seul.)">Blanc* (modele Deluxe
													Seul.)
												</option>
												<option othertype='1' english="blanc/noir/vert" french="blanc/noir/vert"
														value="Blanc/Noir/Vert">Blanc/Noir/Vert
												</option>
												<option othertype='1' english="blanc/rouge" french="blanc/rouge"
														value="BLANC/ROUGE">BLANC/ROUGE
												</option>
												<option othertype='1' english="blanc/rouge/bleu"
														french="blanc/rouge/bleu" value="BLANC/ROUGE/BLEU">
													BLANC/ROUGE/BLEU
												</option>
												<option othertype='1' english="blelu" french="blelu" value="Blelu">
													Blelu
												</option>
												<option othertype='1' english="bleu azur" french="bleu azur"
														value="Bleu Azur">Bleu Azur
												</option>
												<option othertype='1' english="bleu azure" french="bleu azure"
														value="Bleu Azure">Bleu Azure
												</option>
												<option othertype='1' english="bleu et gris" french="bleu et gris"
														value="BLEU ET GRIS">BLEU ET GRIS
												</option>
												<option othertype='1' english="bleu et vert" french="bleu et vert"
														value="Bleu et Vert">Bleu et Vert
												</option>
												<option othertype='1' english="bleu fonc� m�tallis�"
														french="bleu fonc� m�tallis�" value="Bleu fonc� m�tallis�">Bleu
													fonc&eacute; m&eacute;tallis&eacute;
												</option>
												<option othertype='1' english="bleu gris" french="bleu gris"
														value="Bleu Gris">Bleu Gris
												</option>
												<option othertype='1' english="bleu mat" french="bleu mat"
														value="Bleu Mat">Bleu Mat
												</option>
												<option othertype='1' english="bleu onyx" french="bleu onyx"
														value="Bleu Onyx">Bleu Onyx
												</option>
												<option othertype='1' english="bleu pale" french="bleu pale"
														value="Bleu Pale">Bleu Pale
												</option>
												<option othertype='1' english="bleu royal" french="bleu royal"
														value="BLEU ROYAL">BLEU ROYAL
												</option>
												<option othertype='1' english="bleu-gris" french="bleu-gris"
														value="Bleu-Gris">Bleu-Gris
												</option>
												<option othertype='1' english="bleu/noir" french="bleu/noir"
														value="Bleu/Noir">Bleu/Noir
												</option>
												<option othertype='1' english="bleu/noir" french="bleu/noir"
														value="Bleu/Noir">Bleu/Noir
												</option>
												<option othertype='1' english="bleu/rouge/blanc"
														french="bleu/rouge/blanc" value="Bleu/Rouge/Blanc">
													Bleu/Rouge/Blanc
												</option>
												<option othertype='1' english="bleu/vert" french="bleu/vert"
														value="Bleu/Vert">Bleu/Vert
												</option>
												<option othertype='1' english="bleu/vert" french="bleu/vert"
														value="Bleu/Vert">Bleu/Vert
												</option>
												<option othertype='1' english="blue" french="bleu" value="Blue">Blue
												</option>
												<option othertype='1' english="blue/orange" french="bleu/orange"
														value="Blue/Orange">Blue/Orange
												</option>
												<option othertype='1' english="blushing bronze" french="blushing bronze"
														value="Blushing Bronze">Blushing Bronze
												</option>
												<option othertype='1' english="bois" french="bois" value="Bois">Bois
												</option>
												<option othertype='1' english="bourg" french="bourg" value="Bourg">
													Bourg
												</option>
												<option othertype='1' english="bourgnoune-blanc"
														french="bourgnoune-blanc" value="Bourgnoune-Blanc">
													Bourgnoune-Blanc
												</option>
												<option othertype='1' english="bourgogne" french="bourgogne"
														value="Bourgogne">Bourgogne
												</option>
												<option othertype='1' english="bourgogne et grise"
														french="bourgogne et grise" value="BOURGOGNE ET GRISE">BOURGOGNE
													ET GRISE
												</option>
												<option othertype='1' english="bourguogne" french="bourguogne"
														value="Bourguogne">Bourguogne
												</option>
												<option othertype='1' english="breeze" french="breeze" value="Breeze">
													Breeze
												</option>
												<option othertype='1' english="brillant silver" french="brillant silver"
														value="Brillant Silver">Brillant Silver
												</option>
												<option othertype='1' english="brillant silver" french="brillant silver"
														value="Brillant Silver">Brillant Silver
												</option>
												<option othertype='1' english="brillant silver" french="brillant silver"
														value="Brillant Silver">Brillant Silver
												</option>
												<option othertype='1' english="brillant silver" french="brillant silver"
														value="Brillant Silver">Brillant Silver
												</option>
												<option othertype='1' english="brillant silver" french="brillant silver"
														value="Brillant Silver">Brillant Silver
												</option>
												<option othertype='1' english="brillant silver" french="brillant silver"
														value="Brillant Silver">Brillant Silver
												</option>
												<option othertype='1' english="brillant silver" french="brillant silver"
														value="Brillant Silver">Brillant Silver
												</option>
												<option othertype='1' english="brillant silver" french="brillant silver"
														value="Brillant Silver">Brillant Silver
												</option>
												<option othertype='1' english="brilliant silver metallic"
														french="argent adamantin m�tallis�"
														value="Brilliant Silver Metallic">Brilliant Silver Metallic
												</option>
												<option othertype='1' english="bronze" french="bronze" value="Bronze">
													Bronze
												</option>
												<option othertype='1' english="bronze fusion" french="bronze fusion"
														value="Bronze Fusion">Bronze Fusion
												</option>
												<option othertype='1' english="bronze onyx" french="bronze onyx"
														value="Bronze Onyx">Bronze Onyx
												</option>
												<option othertype='1' english="bronzed onyx" french="bronzed onyx"
														value="Bronzed Onyx">Bronzed Onyx
												</option>
												<option othertype='1' english="brooklyn" french="brooklyn"
														value="Brooklyn">Brooklyn
												</option>
												<option othertype='1' english="brookwood" french="brookwood"
														value="Brookwood">Brookwood
												</option>
												<option othertype='1' english="brown" french="marron" value="Brown">
													Brown
												</option>
												<option othertype='1' english="brownstone metallic"
														french="brun gr�s m�tallis�" value="Brownstone Metallic">
													Brownstone Metallic
												</option>
												<option othertype='1' english="brum" french="brum" value="Brum">Brum
												</option>
												<option othertype='1' english="brun" french="brun" value="Brun">Brun
												</option>
												<option othertype='1' english="burgundy blue" french="burgundy blue"
														value="Burgundy Blue">Burgundy Blue
												</option>
												<option othertype='1' english="butterscotch" french="butterscotch"
														value="Butterscotch">Butterscotch
												</option>
												<option othertype='1' english="cabernet" french="cabernet"
														value="Cabernet">Cabernet
												</option>
												<option othertype='1' english="cabernet gold flightline  fbp"
														french="cabernet gold flightline  fbp"
														value="Cabernet Gold Flightline  Fbp">Cabernet Gold Flightline
													Fbp
												</option>
												<option othertype='1' english="cafe" french="cafe" value="Cafe">Cafe
												</option>
												<option othertype='1' english="cafe mocha" french="cafe mocha"
														value="Cafe Mocha">Cafe Mocha
												</option>
												<option othertype='1' english="cafe moka" french="cafe moka"
														value="Cafe Moka">Cafe Moka
												</option>
												<option othertype='1' english="caffe" french="caffe" value="Caffe">
													Caffe
												</option>
												<option othertype='1' english="cambria earth" french="cambria earth"
														value="Cambria Earth">Cambria Earth
												</option>
												<option othertype='1' english="camel" french="camel" value="Camel">
													Camel
												</option>
												<option othertype='1' english="camo" french="camo" value="Camo">Camo
												</option>
												<option othertype='1' english="camoufflage" french="camoufflage"
														value="Camoufflage">Camoufflage
												</option>
												<option othertype='1' english="camouflage" french="camouflage"
														value="Camouflage">Camouflage
												</option>
												<option othertype='1' english="camouflage phantom hondamc"
														french="camouflage phantom hondamc"
														value="Camouflage Phantom Hondamc">Camouflage Phantom Hondamc
												</option>
												<option othertype='1' english="camouflage phantommc"
														french="camouflage phantommc" value="Camouflage Phantommc">
													Camouflage Phantommc
												</option>
												<option othertype='1' english="camouflage phantommc honda"
														french="camouflage phantommc honda"
														value="Camouflage Phantommc Honda">Camouflage Phantommc Honda
												</option>
												<option othertype='1' english="capri" french="capri" value="Capri">
													Capri
												</option>
												<option othertype='1' english="caramael kiss" french="caramael kiss"
														value="Caramael Kiss">Caramael Kiss
												</option>
												<option othertype='1' english="caramel" french="caramel"
														value="Caramel">Caramel
												</option>
												<option othertype='1' english="caramel ice" french="caramel ice"
														value="Caramel Ice">Caramel Ice
												</option>
												<option othertype='1' english="caramel kiss" french="caramel kiss"
														value="Caramel Kiss">Caramel Kiss
												</option>
												<option othertype='1' english="caramel latte" french="caramel latte"
														value="Caramel Latte">Caramel Latte
												</option>
												<option othertype='1' english="caribou" french="caribou"
														value="Caribou">Caribou
												</option>
												<option othertype='1' english="cashmere metallic"
														french="gr�s m�tallis�" value="Cashmere Metallic">Cashmere
													Metallic
												</option>
												<option othertype='1' english="cashmere sand" french="cashmere sand"
														value="Cashmere Sand">Cashmere Sand
												</option>
												<option othertype='1' english="cedar" french="cedar" value="Cedar">
													Cedar
												</option>
												<option othertype='1' english="cerise fonce" french="cerise fonce"
														value="Cerise Fonce">Cerise Fonce
												</option>
												<option othertype='1' english="champagne" french="champagne"
														value="Champagne">Champagne
												</option>
												<option othertype='1' english="charbon" french="charbon"
														value="Charbon">Charbon
												</option>
												<option othertype='1' english="charcoal" french="charcoal"
														value="Charcoal">Charcoal
												</option>
												<option othertype='1' english="chateau" french="chateau"
														value="Chateau">Chateau
												</option>
												<option othertype='1' english="chestnut" french="chestnut"
														value="Chestnut">Chestnut
												</option>
												<option othertype='1' english="chestnut raven" french="chestnut raven"
														value="Chestnut Raven">Chestnut Raven
												</option>
												<option othertype='1' english="chocolat" french="chocolat"
														value="Chocolat">Chocolat
												</option>
												<option othertype='1' english="chocolat bisque" french="chocolat bisque"
														value="Chocolat Bisque">Chocolat Bisque
												</option>
												<option othertype='1' english="chocolate" french="chocolate"
														value="Chocolate">Chocolate
												</option>
												<option othertype='1' english="chocolate bisque"
														french="chocolate bisque" value="Chocolate Bisque">Chocolate
													Bisque
												</option>
												<option othertype='1' english="chocolate cherry"
														french="chocolate cherry" value="Chocolate Cherry">Chocolate
													Cherry
												</option>
												<option othertype='1' english="chocolate interior"
														french="chocolate interior" value="Chocolate Interior">Chocolate
													Interior
												</option>
												<option othertype='1' english="chrome" french="chrome" value="Chrome">
													Chrome
												</option>
												<option othertype='1' english="ciel lunaire" french="ciel lunaire"
														value="Ciel Lunaire">Ciel Lunaire
												</option>
												<option othertype='1' english="cinnabar" french="cinnabar"
														value="Cinnabar">Cinnabar
												</option>
												<option othertype='1' english="classic champagne"
														french="classic champagne" value="Classic Champagne">Classic
													Champagne
												</option>
												<option othertype='1' english="clay" french="clay" value="Clay">Clay
												</option>
												<option othertype='1' english="coffee" french="coffee" value="Coffee">
													Coffee
												</option>
												<option othertype='1' english="cognac" french="cognac" value="Cognac">
													Cognac
												</option>
												<option othertype='1' english="cognac et noir" french="cognac et noir"
														value="Cognac et Noir">Cognac et Noir
												</option>
												<option othertype='1' english="cognac maple" french="cognac maple"
														value="Cognac Maple">Cognac Maple
												</option>
												<option othertype='1' english="cognac taupe" french="cognac taupe"
														value="Cognac Taupe">Cognac Taupe
												</option>
												<option othertype='1' english="concord frost" french="concord frost"
														value="Concord Frost">Concord Frost
												</option>
												<option othertype='1' english="coral gables" french="coral gables"
														value="Coral Gables">Coral Gables
												</option>
												<option othertype='1' english="cordovan" french="cordovan"
														value="Cordovan">Cordovan
												</option>
												<option othertype='1' english="cream" french="cream" value="Cream">
													Cream
												</option>
												<option othertype='1' english="creme" french="creme" value="Creme">
													Creme
												</option>
												<option othertype='1' english="creme brulee" french="creme brulee"
														value="Creme Brulee">Creme Brulee
												</option>
												<option othertype='1' english="cremecreme" french="cremecreme"
														value="Cremecreme">Cremecreme
												</option>
												<option othertype='1' english="crimson dusk  fbp"
														french="crimson dusk  fbp" value="Crimson Dusk  Fbp">Crimson
													Dusk Fbp
												</option>
												<option othertype='1' english="crosshatch" french="crosshatch"
														value="Crosshatch">Crosshatch
												</option>
												<option othertype='1' english="crosshatch" french="crosshatch"
														value="Crosshatch">Crosshatch
												</option>
												<option othertype='1' english="crosshatch" french="crosshatch"
														value="Crosshatch">Crosshatch
												</option>
												<option othertype='1' english="custom" french="custom" value="CUSTOM">
													CUSTOM
												</option>
												<option othertype='1' english="cyber grey metallic"
														french="cybergris m�tallis�" value="Cyber Grey Metallic">Cyber
													Grey Metallic
												</option>
												<option othertype='1' english="dark blue" french="bleu fon��"
														value="Dark blue">Dark blue
												</option>
												<option othertype='1' english="dark green" french="vert fon��"
														value="Dark green">Dark green
												</option>
												<option othertype='1' english="dark green metallic"
														french="vert fonc� m�tallis�" value="Dark Green Metallic">Dark
													Green Metallic
												</option>
												<option othertype='1' english="delicate  dove" french="delicate  dove"
														value="Delicate  Dove">Delicate Dove
												</option>
												<option othertype='1' english="delicate dove" french="delicate dove"
														value="Delicate Dove">Delicate Dove
												</option>
												<option othertype='1' english="dolomite brown metallic"
														french="marron dolomite m�tallis�"
														value="Dolomite Brown Metallic">Dolomite Brown Metallic
												</option>
												<option othertype='1' english="dynamite" french="dynamite"
														value="Dynamite">Dynamite
												</option>
												<option othertype='1' english="earth tan" french="earth tan"
														value="Earth Tan">Earth Tan
												</option>
												<option othertype='1' english="ebony" french="ebony" value="Ebony">
													Ebony
												</option>
												<option othertype='1' english="eclipse" french="eclipse"
														value="Eclipse">Eclipse
												</option>
												<option othertype='1' english="edition gold gloss"
														french="edition gold gloss" value="Edition Gold Gloss">Edition
													Gold Gloss
												</option>
												<option othertype='1' english="elation" french="elation"
														value="Elation">Elation
												</option>
												<option othertype='1' english="english toffee" french="english toffee"
														value="English Toffee">English Toffee
												</option>
												<option othertype='1' english="espresso" french="espresso"
														value="Espresso">Espresso
												</option>
												<option othertype='1' english="etain" french="etain" value="Etain">
													Etain
												</option>
												<option othertype='1' english="evening star" french="evening star"
														value="Evening Star">Evening Star
												</option>
												<option othertype='1' english="expresso" french="expresso"
														value="Expresso">Expresso
												</option>
												<option othertype='1' english="f i j i" french="f i j i"
														value="F I J I">F I J I
												</option>
												<option othertype='1' english="f ij i" french="f ij i" value="F Ij I">F
													Ij I
												</option>
												<option othertype='1' english="fabulous" french="fabulous"
														value="Fabulous">Fabulous
												</option>
												<option othertype='1' english="fascination" french="fascination"
														value="Fascination">Fascination
												</option>
												<option othertype='1' english="fernmist green metallic"
														french="vert foug�re" value="Fernmist Green Metallic">Fernmist
													Green Metallic
												</option>
												<option othertype='1' english="firestone" french="firestone"
														value="Firestone">Firestone
												</option>
												<option othertype='1' english="forest" french="forest" value="Forest">
													Forest
												</option>
												<option othertype='1' english="framboise" french="framboise"
														value="Framboise">Framboise
												</option>
												<option othertype='1' english="french beach" french="french beach"
														value="French Beach">French Beach
												</option>
												<option othertype='1' english="fresch  roast" french="fresch  roast"
														value="Fresch  Roast">Fresch Roast
												</option>
												<option othertype='1' english="fresch roast" french="fresch roast"
														value="Fresch Roast">Fresch Roast
												</option>
												<option othertype='1' english="fudge swirl" french="fudge swirl"
														value="Fudge Swirl">Fudge Swirl
												</option>
												<option othertype='1' english="galvanized" french="galvanis�"
														value="Galvanized">Galvanized
												</option>
												<option othertype='1' english="galvanized" french="galvanis�"
														value="Galvanized">Galvanized
												</option>
												<option othertype='1' english="gold edition" french="gold edition"
														value="Gold Edition">Gold Edition
												</option>
												<option othertype='1' english="gold rush" french="gold rush"
														value="Gold Rush">Gold Rush
												</option>
												<option othertype='1' english="golden coast" french="golden coast"
														value="Golden Coast">Golden Coast
												</option>
												<option othertype='1' english="golden espresso" french="golden espresso"
														value="Golden Espresso">Golden Espresso
												</option>
												<option othertype='1' english="golden merlot" french="golden merlot"
														value="Golden Merlot">Golden Merlot
												</option>
												<option othertype='1' english="golden suede" french="golden suede"
														value="Golden Suede">Golden Suede
												</option>
												<option othertype='1' english="granite" french="granite"
														value="Granite">Granite
												</option>
												<option othertype='1' english="graphite grey metallic"
														french="gris graphite m�tallis�" value="Graphite Grey Metallic">
													Graphite Grey Metallic
												</option>
												<option othertype='1' english="graphite m�tallis�"
														french="graphite m�tallis�" value="GRAPHITE M�TALLIS�">GRAPHITE
													M&Eacute;TALLIS&Eacute;
												</option>
												<option othertype='1' english="gray" french="gray" value="GRAY">GRAY
												</option>
												<option othertype='1' english="graystone" french="graystone"
														value="Graystone">Graystone
												</option>
												<option othertype='1' english="graystone" french="graystone"
														value="Graystone">Graystone
												</option>
												<option othertype='1' english="graystone metallic"
														french="gris pierre m�tallis�" value="Graystone Metallic">
													Graystone Metallic
												</option>
												<option othertype='1' english="green" french="vert" value="Green">
													Green
												</option>
												<option othertype='1' english="green/yellow" french="vert/jaune"
														value="GREEN/YELLOW">GREEN/YELLOW
												</option>
												<option othertype='1' english="gr�s m�talis�" french="gr�s m�talis�"
														value="Gr�s m�talis�">Gr&egrave;s m&eacute;talis&eacute;
												</option>
												<option othertype='1' english="grey" french="gris" value="Grey">Grey
												</option>
												<option othertype='1' english="gris  2 tons" french="gris  2 tons"
														value="Gris  2 Tons">Gris 2 Tons
												</option>
												<option othertype='1' english="gris  deux tons" french="gris  deux tons"
														value="Gris  Deux Tons">Gris Deux Tons
												</option>
												<option othertype='1' english="gris / bronze" french="gris / bronze"
														value="GRIS / BRONZE">GRIS / BRONZE
												</option>
												<option othertype='1' english="gris / orange" french="gris / orange"
														value="Gris / Orange">Gris / Orange
												</option>
												<option othertype='1' english="gris 2 tons" french="gris 2 tons"
														value="Gris 2 Tons">Gris 2 Tons
												</option>
												<option othertype='1' english="gris argente" french="gris argente"
														value="Gris Argente">Gris Argente
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch?ssis rouge"
														french="gris ch?ssis rouge" value="Gris Ch?ssis Rouge">Gris
													Ch?ssis Rouge
												</option>
												<option othertype='1' english="gris ch�ssis rouge"
														french="gris ch�ssis rouge" value="Gris Ch�ssis Rouge">Gris Ch&acirc;ssis
													Rouge
												</option>
												<option othertype='1' english="gris ch�ssis rouge"
														french="gris ch�ssis rouge" value="Gris Ch�ssis Rouge">Gris Ch&acirc;ssis
													Rouge
												</option>
												<option othertype='1' english="gris et jaune" french="gris et jaune"
														value="Gris et Jaune">Gris et Jaune
												</option>
												<option othertype='1' english="gris fant�me" french="gris fant�me"
														value="GRIS FANT�ME">GRIS FANT&Ocirc;ME
												</option>
												<option othertype='1' english="gris fant�me" french="gris fant�me"
														value="GRIS FANT�ME">GRIS FANT&Ocirc;ME
												</option>
												<option othertype='1' english="gris fonc?" french="gris fonc?"
														value="Gris Fonc?">Gris Fonc?
												</option>
												<option othertype='1' english="gris mat" french="gris mat"
														value="Gris Mat">Gris Mat
												</option>
												<option othertype='1' english="gris t�norite" french="gris t�norite"
														value="Gris T�norite">Gris T&eacute;norite
												</option>
												<option othertype='1' english="gris titanium" french="gris titanium"
														value="GRIS TITANIUM">GRIS TITANIUM
												</option>
												<option othertype='1' english="harvest" french="harvest"
														value="Harvest">Harvest
												</option>
												<option othertype='1' english="hazelnut" french="hazelnut"
														value="Hazelnut">Hazelnut
												</option>
												<option othertype='1' english="hd" french="hd" value="HD">HD</option>
												<option othertype='1' english="indigo blue metallic"
														french="bleu indigo m�tallis�" value="Indigo Blue Metallic">
													Indigo Blue Metallic
												</option>
												<option othertype='1' english="ivory" french="ivory" value="Ivory">
													Ivory
												</option>
												<option othertype='1' english="jasper blue metallic"
														french="bleu jasper m�tallis�" value="Jasper blue metallic">
													Jasper blue metallic
												</option>
												<option othertype='1' english="kona" french="kona" value="Kona">Kona
												</option>
												<option othertype='1' english="la plus belle couleur"
														french="la plus belle couleur" value="LA PLUS BELLE COULEUR">LA
													PLUS BELLE COULEUR
												</option>
												<option othertype='1' english="lacrosse beige" french="lacrosse beige"
														value="Lacrosse Beige">Lacrosse Beige
												</option>
												<option othertype='1' english="lasso" french="lasso" value="Lasso">
													Lasso
												</option>
												<option othertype='1' english="latte" french="latte" value="Latte">
													Latte
												</option>
												<option othertype='1' english="leaf sand" french="leaf sand"
														value="Leaf Sand">Leaf Sand
												</option>
												<option othertype='1' english="light blue" french="bleu clair"
														value="Light blue">Light blue
												</option>
												<option othertype='1' english="light green" french="vert clair"
														value="Light green">Light green
												</option>
												<option othertype='1' english="light grey" french="gris p�le"
														value="Light grey">Light grey
												</option>
												<option othertype='1' english="linen latte" french="linen latte"
														value="Linen Latte">Linen Latte
												</option>
												<option othertype='1' english="luxurious graphite"
														french="luxurious graphite" value="Luxurious Graphite">Luxurious
													Graphite
												</option>
												<option othertype='1' english="luxury resort" french="luxury resort"
														value="Luxury Resort">Luxury Resort
												</option>
												<option othertype='1' english="macha" french="macha" value="Macha">
													Macha
												</option>
												<option othertype='1' english="madison midnight"
														french="madison midnight" value="Madison Midnight">Madison
													Midnight
												</option>
												<option othertype='1' english="magnetic" french="magn�tic"
														value="Magnetic">Magnetic
												</option>
												<option othertype='1' english="maui" french="maui" value="Maui">Maui
												</option>
												<option othertype='1' english="mauve" french="mauve" value="Mauve">
													Mauve
												</option>
												<option othertype='1' english="metalic midnight"
														french="metalic midnight" value="Metalic Midnight">Metalic
													Midnight
												</option>
												<option othertype='1' english="metallic charcoal grey"
														french="metallic charcoal grey" value="Metallic Charcoal Grey">
													Metallic Charcoal Grey
												</option>
												<option othertype='1' english="metallic dark green"
														french="vert fonc� m�talis�" value="Metallic dark green">
													Metallic dark green
												</option>
												<option othertype='1' english="metallic silver"
														french="blanc glac� m�talis�" value="Metallic Silver">Metallic
													Silver
												</option>
												<option othertype='1' english="midnight" french="midnight"
														value="Midnight">Midnight
												</option>
												<option othertype='1' english="midnight forest" french="midnight forest"
														value="Midnight Forest">Midnight Forest
												</option>
												<option othertype='1' english="midnight mist" french="midnight mist"
														value="Midnight Mist">Midnight Mist
												</option>
												<option othertype='1' english="mink" french="mink" value="Mink">Mink
												</option>
												<option othertype='1' english="mistic garnet" french="mistic garnet"
														value="Mistic Garnet">Mistic Garnet
												</option>
												<option othertype='1' english="mixed  chocolate"
														french="mixed  chocolate" value="Mixed  Chocolate">Mixed
													Chocolate
												</option>
												<option othertype='1' english="mixed chocolate" french="mixed chocolate"
														value="Mixed Chocolate">Mixed Chocolate
												</option>
												<option othertype='1' english="mocha" french="mocha" value="Mocha">
													Mocha
												</option>
												<option othertype='1' english="moka" french="moka" value="Moka">Moka
												</option>
												<option othertype='1' english="moon beam" french="moon beam"
														value="Moon Beam">Moon Beam
												</option>
												<option othertype='1' english="moonsstone khaki"
														french="moonsstone khaki" value="Moonsstone Khaki">Moonsstone
													Khaki
												</option>
												<option othertype='1' english="moonstone" french="moonstone"
														value="Moonstone">Moonstone
												</option>
												<option othertype='1' english="moonstone" french="moonstone"
														value="Moonstone">Moonstone
												</option>
												<option othertype='1' english="moonstone" french="moonstone"
														value="Moonstone">Moonstone
												</option>
												<option othertype='1' english="moonstone" french="moonstone"
														value="Moonstone">Moonstone
												</option>
												<option othertype='1' english="moonstone" french="moonstone"
														value="Moonstone">Moonstone
												</option>
												<option othertype='1' english="moonstone khaki" french="moonstone khaki"
														value="Moonstone Khaki">Moonstone Khaki
												</option>
												<option othertype='1' english="mystic quartz" french="mystic quartz"
														value="Mystic Quartz">Mystic Quartz
												</option>
												<option othertype='1' english="n/a" french="n/a" value="n/a">n/a
												</option>
												<option othertype='1' english="natural maple" french="natural maple"
														value="Natural Maple">Natural Maple
												</option>
												<option othertype='1' english="natural stone" french="natural stone"
														value="Natural Stone">Natural Stone
												</option>
												<option othertype='1' english="naturl stone" french="naturl stone"
														value="Naturl Stone">Naturl Stone
												</option>
												<option othertype='1' english="neutre" french="neutre" value="Neutre">
													Neutre
												</option>
												<option othertype='1' english="new earth" french="new earth"
														value="New Earth">New Earth
												</option>
												<option othertype='1' english="new eartth" french="new eartth"
														value="New Eartth">New Eartth
												</option>
												<option othertype='1' english="newport cherry" french="newport cherry"
														value="Newport Cherry">Newport Cherry
												</option>
												<option othertype='1' english="newport chocolate"
														french="newport chocolate" value="Newport Chocolate">Newport
													Chocolate
												</option>
												<option othertype='1' english="noir - rouge" french="noir - rouge"
														value="Noir - Rouge">Noir - Rouge
												</option>
												<option othertype='1' english="noir amethyste" french="noir amethyste"
														value="Noir Amethyste">Noir Amethyste
												</option>
												<option othertype='1' english="noir et beige" french="noir et beige"
														value="noir et beige">noir et beige
												</option>
												<option othertype='1' english="noir et rouge" french="noir et rouge"
														value="Noir et Rouge">Noir et Rouge
												</option>
												<option othertype='1' english="noir gris" french="noir gris"
														value="Noir Gris">Noir Gris
												</option>
												<option othertype='1' english="noir mat" french="noir mat"
														value="Noir Mat">Noir Mat
												</option>
												<option othertype='1' english="noir mat metallique"
														french="noir mat metallique" value="Noir Mat Metallique">Noir
													Mat Metallique
												</option>
												<option othertype='1' english="noir metalique" french="noir metalique"
														value="Noir Metalique">Noir Metalique
												</option>
												<option othertype='1' english="noir* (modele deluxe seul.)"
														french="noir* (modele deluxe seul.)"
														value="Noir* (modele Deluxe Seul.)">Noir* (modele Deluxe Seul.)
												</option>
												<option othertype='1' english="noir/gris" french="noir/gris"
														value="noir/gris">noir/gris
												</option>
												<option othertype='1' english="noir/rouge" french="noir/rouge"
														value="Noir/Rouge">Noir/Rouge
												</option>
												<option othertype='1' english="noir/vert" french="noir/vert"
														value="NOIR/VERT">NOIR/VERT
												</option>
												<option othertype='1' english="noire" french="noire" value="Noire">
													Noire
												</option>
												<option othertype='1' english="oak leaf beige" french="oak leaf beige"
														value="Oak Leaf Beige">Oak Leaf Beige
												</option>
												<option othertype='1' english="ocean" french="ocean" value="Ocean">
													Ocean
												</option>
												<option othertype='1' english="olive" french="olive" value="Olive">
													Olive
												</option>
												<option othertype='1' english="olympic white" french="blanc sommet"
														value="Olympic White">Olympic White
												</option>
												<option othertype='1' english="orange" french="orange" value="Orange">
													Orange
												</option>
												<option othertype='1' english="orange & black" french="orange & noir"
														value="Orange & Black">Orange &amp; Black
												</option>
												<option othertype='1' english="orange / argent" french="orange / argent"
														value="Orange / Argent">Orange / Argent
												</option>
												<option othertype='1' english="orange brule" french="orange brule"
														value="Orange Brule">Orange Brule
												</option>
												<option othertype='1' english="orange fusion" french="orange fusion"
														value="Orange Fusion">Orange Fusion
												</option>
												<option othertype='1' english="orange fusion" french="orange fusion"
														value="Orange Fusion">Orange Fusion
												</option>
												<option othertype='1' english="orange phoenix" french="orange phoenix"
														value="Orange Phoenix">Orange Phoenix
												</option>
												<option othertype='1' english="orange/blanc" french="orange/blanc"
														value="Orange/Blanc">Orange/Blanc
												</option>
												<option othertype='1' english="orange/noir" french="orange/noir"
														value="ORANGE/NOIR">ORANGE/NOIR
												</option>
												<option othertype='1' english="palm canyon" french="palm canyon"
														value="Palm Canyon">Palm Canyon
												</option>
												<option othertype='1' english="panderosa canyon"
														french="panderosa canyon" value="Panderosa Canyon">Panderosa
													Canyon
												</option>
												<option othertype='1' english="pearl silver metallic"
														french="argent nacr� m�tallis�" value="Pearl Silver Metallic">
													Pearl Silver Metallic
												</option>
												<option othertype='1' english="pearl silver metallic"
														french="argent nacr� m�tallis�" value="Pearl Silver Metallic">
													Pearl Silver Metallic
												</option>
												<option othertype='1' english="pebble" french="pebble" value="Pebble">
													Pebble
												</option>
												<option othertype='1' english="pebble beach" french="pebble beach"
														value="Pebble Beach">Pebble Beach
												</option>
												<option othertype='1' english="pepercorn" french="pepercorn"
														value="Pepercorn">Pepercorn
												</option>
												<option othertype='1' english="peppercorn" french="peppercorn"
														value="Peppercorn">Peppercorn
												</option>
												<option othertype='1' english="perennial" french="perennial"
														value="Perennial">Perennial
												</option>
												<option othertype='1' english="pewter metallic" french="�tain m�tallis�"
														value="Pewter Metallic">Pewter Metallic
												</option>
												<option othertype='1' english="pewter mist w" french="pewter mist w"
														value="Pewter Mist W">Pewter Mist W
												</option>
												<option othertype='1' english="pinehurst" french="pinehurst"
														value="Pinehurst">Pinehurst
												</option>
												<option othertype='1' english="pink" french="rose" value="Pink">Pink
												</option>
												<option othertype='1' english="pomegrenade fbp" french="pomegrenade fbp"
														value="Pomegrenade Fbp">Pomegrenade Fbp
												</option>
												<option othertype='1' english="prune" french="prune" value="Prune">
													Prune
												</option>
												<option othertype='1' english="purple" french="violet" value="Purple">
													Purple
												</option>
												<option othertype='1' english="rattan" french="rattan" value="Rattan">
													Rattan
												</option>
												<option othertype='1' english="red" french="rouge" value="Red">Red
												</option>
												<option othertype='1' english="redwood" french="redwood"
														value="Redwood">Redwood
												</option>
												<option othertype='1' english="regal" french="regal" value="Regal">
													Regal
												</option>
												<option othertype='1' english="repsol" french="repsol" value="Repsol">
													Repsol
												</option>
												<option othertype='1' english="rose spica" french="rose spica"
														value="Rose Spica">Rose Spica
												</option>
												<option othertype='1' english="rouge - gris" french="rouge - gris"
														value="Rouge - Gris">Rouge - Gris
												</option>
												<option othertype='1' english="rouge - noir - blanc"
														french="rouge - noir - blanc" value="Rouge - Noir - Blanc">Rouge
													- Noir - Blanc
												</option>
												<option othertype='1' english="rouge - noir- tricolor"
														french="rouge - noir- tricolor" value="Rouge - Noir- Tricolor">
													Rouge - Noir- Tricolor
												</option>
												<option othertype='1' english="rouge / blanc" french="rouge / blanc"
														value="rouge / blanc">rouge / blanc
												</option>
												<option othertype='1' english="rouge blanc" french="rouge blanc"
														value="Rouge Blanc">Rouge Blanc
												</option>
												<option othertype='1' english="rouge candy" french="rouge candy"
														value="Rouge Candy">Rouge Candy
												</option>
												<option othertype='1' english="rouge et blanc" french="rouge et blanc"
														value="rouge et blanc">rouge et blanc
												</option>
												<option othertype='1' english="rouge extreme" french="rouge extreme"
														value="Rouge Extreme">Rouge Extreme
												</option>
												<option othertype='1' english="rouge millenium" french="rouge millenium"
														value="Rouge Millenium">Rouge Millenium
												</option>
												<option othertype='1' english="rouge noble candy"
														french="rouge noble candy" value="Rouge Noble Candy">Rouge Noble
													Candy
												</option>
												<option othertype='1' english="rouge perle" french="rouge perle"
														value="Rouge Perle">Rouge Perle
												</option>
												<option othertype='1' english="rouge rioja" french="rouge rioja"
														value="Rouge Rioja">Rouge Rioja
												</option>
												<option othertype='1' english="rouge victorieux"
														french="rouge victorieux" value="Rouge Victorieux">Rouge
													Victorieux
												</option>
												<option othertype='1' english="rouge-vin" french="rouge-vin"
														value="ROUGE-VIN">ROUGE-VIN
												</option>
												<option othertype='1' english="rouge/noir" french="rouge/noir"
														value="rouge/noir">rouge/noir
												</option>
												<option othertype='1' english="rustic cashmere" french="rustic cashmere"
														value="Rustic Cashmere">Rustic Cashmere
												</option>
												<option othertype='1' english="rustic mandarin" french="rustic mandarin"
														value="Rustic Mandarin">Rustic Mandarin
												</option>
												<option othertype='1' english="ryker brown" french="ryker brown"
														value="Ryker Brown">Ryker Brown
												</option>
												<option othertype='1' english="sable" french="sable" value="Sable">
													Sable
												</option>
												<option othertype='1' english="sable fin" french="sable fin"
														value="Sable Fin">Sable Fin
												</option>
												<option othertype='1' english="saddle" french="saddle" value="Saddle">
													Saddle
												</option>
												<option othertype='1' english="safari" french="safari" value="Safari">
													Safari
												</option>
												<option othertype='1' english="sahara" french="sahara" value="Sahara">
													Sahara
												</option>
												<option othertype='1' english="sand" french="sand" value="Sand">Sand
												</option>
												<option othertype='1' english="sand dollar" french="sand dollar"
														value="Sand Dollar">Sand Dollar
												</option>
												<option othertype='1' english="sand stone" french="sand stone"
														value="Sand Stone">Sand Stone
												</option>
												<option othertype='1' english="sandalwod" french="sandalwod"
														value="Sandalwod">Sandalwod
												</option>
												<option othertype='1' english="sandalwood" french="sandalwood"
														value="Sandalwood">Sandalwood
												</option>
												<option othertype='1' english="sandalwood metallic"
														french="santal m�tallis�" value="Sandalwood Metallic">Sandalwood
													Metallic
												</option>
												<option othertype='1' english="sandalwoodd" french="sandalwoodd"
														value="Sandalwoodd">Sandalwoodd
												</option>
												<option othertype='1' english="sandstone" french="sandstone"
														value="Sandstone">Sandstone
												</option>
												<option othertype='1' english="satin pruce" french="satin pruce"
														value="Satin Pruce">Satin Pruce
												</option>
												<option othertype='1' english="sauge" french="sauge" value="Sauge">
													Sauge
												</option>
												<option othertype='1' english="sedona" french="sedona" value="Sedona">
													Sedona
												</option>
												<option othertype='1' english="sedona sunrice" french="sedona sunrice"
														value="Sedona Sunrice">Sedona Sunrice
												</option>
												<option othertype='1' english="sedona surise" french="sedona surise"
														value="Sedona Surise">Sedona Surise
												</option>
												<option othertype='1' english="seville" french="seville"
														value="Seville">Seville
												</option>
												<option othertype='1' english="shady canyon" french="shady canyon"
														value="Shady Canyon">Shady Canyon
												</option>
												<option othertype='1' english="sheer silver metallic"
														french="argent transparent m�tallis�"
														value="Sheer Silver Metallic">Sheer Silver Metallic
												</option>
												<option othertype='1' english="silver" french="silver" value="Silver">
													Silver
												</option>
												<option othertype='1' english="silver  cranberry"
														french="silver  cranberry" value="Silver  Cranberry">Silver
													Cranberry
												</option>
												<option othertype='1' english="silver birch metallic"
														french="bouleau argent� m�tallis�"
														value="Silver Birch Metallic">Silver Birch Metallic
												</option>
												<option othertype='1' english="silver ice metallic"
														french="argent glac� m�tallis�" value="Silver Ice Metallic">
													Silver Ice Metallic
												</option>
												<option othertype='1' english="silver ivory" french="silver ivory"
														value="Silver Ivory">Silver Ivory
												</option>
												<option othertype='1' english="silver sand and rocky mountain brown"
														french="silver sand and rocky mountain brown"
														value="SILVER SAND AND ROCKY MOUNTAIN BROWN">SILVER SAND AND
													ROCKY MOUNTAIN BROWN
												</option>
												<option othertype='1' english="silver sand and rocky mountain brown"
														french="silver sand and rocky mountain brown"
														value="SILVER SAND AND ROCKY MOUNTAIN BROWN">SILVER SAND AND
													ROCKY MOUNTAIN BROWN
												</option>
												<option othertype='1' english="silver satin" french="silver satin"
														value="Silver Satin">Silver Satin
												</option>
												<option othertype='1' english="silver streak" french="silver streak"
														value="Silver Streak">Silver Streak
												</option>
												<option othertype='1' english="silverleaf" french="silverleaf"
														value="Silverleaf">Silverleaf
												</option>
												<option othertype='1' english="sizzle grey" french="sizzle grey"
														value="Sizzle Grey">Sizzle Grey
												</option>
												<option othertype='1' english="slate" french="slate" value="Slate">
													Slate
												</option>
												<option othertype='1' english="smokey granite" french="smokey granite"
														value="Smokey Granite">Smokey Granite
												</option>
												<option othertype='1' english="spice" french="spice" value="Spice">
													Spice
												</option>
												<option othertype='1' english="sport red metallic"
														french="rouge sport m�tallis�" value="Sport Red Metallic">Sport
													Red Metallic
												</option>
												<option othertype='1' english="sterling" french="sterling"
														value="Sterling">Sterling
												</option>
												<option othertype='1' english="stone" french="stone" value="Stone">
													Stone
												</option>
												<option othertype='1' english="stone harbor taupe"
														french="stone harbor taupe" value="Stone Harbor Taupe">Stone
													Harbor Taupe
												</option>
												<option othertype='1' english="stone taupe" french="stone taupe"
														value="Stone Taupe">Stone Taupe
												</option>
												<option othertype='1' english="sultry obsedian" french="sultry obsedian"
														value="Sultry Obsedian">Sultry Obsedian
												</option>
												<option othertype='1' english="sultry obsidian" french="sultry obsidian"
														value="Sultry Obsidian">Sultry Obsidian
												</option>
												<option othertype='1' english="sultry obsidian w"
														french="sultry obsidian w" value="Sultry Obsidian W">Sultry
													Obsidian W
												</option>
												<option othertype='1' english="summer breeze fbp"
														french="summer breeze fbp" value="Summer Breeze Fbp">Summer
													Breeze Fbp
												</option>
												<option othertype='1' english="sunset" french="sunset" value="Sunset">
													Sunset
												</option>
												<option othertype='1' english="tamarack" french="tamarack"
														value="Tamarack">Tamarack
												</option>
												<option othertype='1' english="tamarack  ii" french="tamarack  ii"
														value="Tamarack  Ii">Tamarack Ii
												</option>
												<option othertype='1' english="tamarack 11" french="tamarack 11"
														value="Tamarack 11">Tamarack 11
												</option>
												<option othertype='1' english="tamarack ii" french="tamarack ii"
														value="Tamarack Ii">Tamarack Ii
												</option>
												<option othertype='1' english="tan" french="tan" value="TAN">TAN
												</option>
												<option othertype='1' english="taupe" french="taupe" value="Taupe">
													Taupe
												</option>
												<option othertype='1' english="timeless  sand" french="timeless  sand"
														value="Timeless  Sand">Timeless Sand
												</option>
												<option othertype='1' english="timeless sand" french="timeless sand"
														value="Timeless Sand">Timeless Sand
												</option>
												<option othertype='1' english="tissu bleu" french="tissu bleu"
														value="Tissu Bleu">Tissu Bleu
												</option>
												<option othertype='1' english="titane" french="titane" value="Titane">
													Titane
												</option>
												<option othertype='1' english="titanium  edition"
														french="titanium  edition" value="Titanium  Edition">Titanium
													Edition
												</option>
												<option othertype='1' english="titanium edition"
														french="titanium edition" value="Titanium Edition">Titanium
													Edition
												</option>
												<option othertype='1' english="toasted chesnut" french="toasted chesnut"
														value="Toasted Chesnut">Toasted Chesnut
												</option>
												<option othertype='1' english="toasted chestnut"
														french="toasted chestnut" value="Toasted Chestnut">Toasted
													Chestnut
												</option>
												<option othertype='1' english="toffee" french="toffee" value="Toffee">
													Toffee
												</option>
												<option othertype='1' english="toscany toffee" french="toscany toffee"
														value="Toscany Toffee">Toscany Toffee
												</option>
												<option othertype='1' english="tri color" french="tri color"
														value="Tri Color">Tri Color
												</option>
												<option othertype='1' english="tricolor" french="tricolor"
														value="Tricolor">Tricolor
												</option>
												<option othertype='1' english="tricolore" french="tricolore"
														value="Tricolore">Tricolore
												</option>
												<option othertype='1' english="tropicana" french="tropicana"
														value="Tropicana">Tropicana
												</option>
												<option othertype='1' english="truffle" french="truffle"
														value="Truffle">Truffle
												</option>
												<option othertype='1' english="tuscan spice" french="tuscan spice"
														value="Tuscan Spice">Tuscan Spice
												</option>
												<option othertype='1' english="vert et noir" french="vert et noir"
														value="VERT ET NOIR">VERT ET NOIR
												</option>
												<option othertype='1' english="vert fonce" french="vert fonce"
														value="Vert Fonce">Vert Fonce
												</option>
												<option othertype='1' english="vert mante" french="vert mante"
														value="Vert Mante">Vert Mante
												</option>
												<option othertype='1' english="vert pale" french="vert pale"
														value="Vert Pale">Vert Pale
												</option>
												<option othertype='1' english="vert/noir" french="vert/noir"
														value="Vert/Noir">Vert/Noir
												</option>
												<option othertype='1' english="vertvert" french="vertvert"
														value="Vertvert">Vertvert
												</option>
												<option othertype='1' english="vh5 - lima black fabric"
														french="vh5 - lima black fabric"
														value="VH5 - Lima Black Fabric">VH5 - Lima Black Fabric
												</option>
												<option othertype='1' english="vin" french="vin" value="VIN">VIN
												</option>
												<option othertype='1' english="walnut blossom" french="walnut blossom"
														value="Walnut Blossom">Walnut Blossom
												</option>
												<option othertype='1' english="wexford smoke" french="wexford smoke"
														value="Wexford Smoke">Wexford Smoke
												</option>
												<option othertype='1' english="white" french="blanc" value="White">
													White
												</option>
												<option othertype='1' english="white - black" french="blanc - noir"
														value="WHITE - BLACK">WHITE - BLACK
												</option>
												<option othertype='1' english="whtie" french="whtie" value="Whtie">
													Whtie
												</option>
												<option othertype='1' english="wood" french="wood" value="Wood">Wood
												</option>
												<option othertype='1' english="woodland" french="woodland"
														value="Woodland">Woodland
												</option>
												<option othertype='1' english="yellow" french="jaune" value="Yellow">
													Yellow
												</option>
												<option othertype='1' english="zinc" french="zinc" value="Zinc">Zinc
												</option>
												<option value='other'>Other</option>
											</select>

											<div class='box2' style='display:none;'>Item Type:</div>
											<div class='box3' style='display:none;'></div>
											<div id='itemTypeDiv' class="box4" style='display:none;'>
												<select name="itemTypeSelect" id="itemTypeSelect" style="width:230px;">
													<option value='car' langvalue=''>car</option>
												</select></div>
											<div class='box5' style='display:none;'></div>


										</div> <!-- box617 -->
									</div> <!-- main617 -->
								</div> <!-- forms_box22 --> <input type='hidden' value='##MAILVEHICLECURRENSTATUS##'
																   id='mailVehicleCurrenStatus'/>
								<!-- OO::0f4120fdd798aba2f749c160af968222 -->
							</form>

						</div>
						<div class="clr"></div>
					</div>

					<!-- CAR SELECT -->

					<!-- RENSEIGNEMENTS SUR LE DEMANDEUR -->
					<div class="divTable align-center">
						<form name="fundingForm2" id="fundingForm2" class="jqtransform" method="post" action="#">
							<div class="forms_box22 with_border" id="infoDiv">
								<div class="text30">
									<?=$this->lang->line('finance_applicant_information')?>
									<span>
					<strong>*</strong>
					<?=$this->lang->line('finance_required')?>
				</span>
								</div>
								<div style="width:600px; height:auto; float:left; padding-left:17px; margin-top:15px;">

									<div style="width:285px; height:auto; float:left; padding-left:0px; margin-right:15px;">
										<label for="lastname" class="text15">
											<span class="astk">*</span> <?=$this->lang->line('finance_last_name')?>
										</label>
										<div style="float: left;margin-bottom: 5px;">
											<div class="jqTransformInputWrapper" style="width: 146px;">
												<div class="jqTransformInputInner">
													<div><input id='lastname' tabindex="1" name='lastname' type="text"
																class="jqtranformdone jqTransformInput"/></div>
												</div>
											</div>
										</div>

										<label for="birthDay" class="text15">
											<span class="astk">*</span> <?=$this->lang->line('finance_dob')?>
										</label>

										<div style="float: left;margin-bottom: 5px;">
											<div style="width:80px; float:left; margin-right:5px; ">
												<select style='width: 50px;' id='birthDay' name='birthDay' tabindex='1'>
													<option value="" selected="selected"><?=$this->lang->line('finance_day')?></option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
													<option value="31">31</option>
												</select>
											</div>
											<div style="width:110px; float:left; margin-right:5px;  ">
												<select style='width: 80px;' id='birthMonth' aria-label='birthMonth'
														name='birthMonth' tabindex='4'>
													<option value="">Month</option>
													<option value="1" selected="selected"><?=$this->lang->line('finance_january')?></option>
													<option value="2"><?=$this->lang->line('finance_february')?></option>
													<option value="3"><?=$this->lang->line('finance_march')?></option>
													<option value="4"><?=$this->lang->line('finance_april')?></option>
													<option value="5"><?=$this->lang->line('finance_may')?></option>
													<option value="6"><?=$this->lang->line('finance_june')?></option>
													<option value="7"><?=$this->lang->line('finance_july')?></option>
													<option value="8"><?=$this->lang->line('finance_august')?></option>
													<option value="9"><?=$this->lang->line('finance_september')?></option>
													<option value="10"><?=$this->lang->line('finance_october')?></option>
													<option value="11"><?=$this->lang->line('finance_november')?></option>
													<option value="12"><?=$this->lang->line('finance_december')?></option>
												</select>
											</div>
											<div style="width:80px; float:left; ">
												<select style='width: 50px;' id='birthYear' aria-label='birthYear'
														name='birthYear' tabindex='5'>
													<option value=""><?=$this->lang->line('finance_year')?></option>
													<option value="2021">2021</option>
													<option value="2020">2020</option>
													<option value="2019">2019</option>
													<option value="2018">2018</option>
													<option value="2017">2017</option>
													<option value="2016">2016</option>
													<option value="2015">2015</option>
													<option value="2014">2014</option>
													<option value="2013">2013</option>
													<option value="2012">2012</option>
													<option value="2011">2011</option>
													<option value="2010">2010</option>
													<option value="2009">2009</option>
													<option value="2008">2008</option>
													<option value="2007">2007</option>
													<option value="2006">2006</option>
													<option value="2005">2005</option>
													<option value="2004">2004</option>
													<option value="2003">2003</option>
													<option value="2002">2002</option>
													<option value="2001">2001</option>
													<option value="2000">2000</option>
													<option value="1999">1999</option>
													<option value="1998">1998</option>
													<option value="1997">1997</option>
													<option value="1996">1996</option>
													<option value="1995">1995</option>
													<option value="1994">1994</option>
													<option value="1993">1993</option>
													<option value="1992">1992</option>
													<option value="1991">1991</option>
													<option value="1990">1990</option>
													<option value="1989">1989</option>
													<option value="1988">1988</option>
													<option value="1987">1987</option>
													<option value="1986">1986</option>
													<option value="1985">1985</option>
													<option value="1984">1984</option>
													<option value="1983">1983</option>
													<option value="1982">1982</option>
													<option value="1981">1981</option>
													<option value="1980">1980</option>
													<option value="1979">1979</option>
													<option value="1978">1978</option>
													<option value="1977">1977</option>
													<option value="1976">1976</option>
													<option value="1975">1975</option>
													<option value="1974">1974</option>
													<option value="1973">1973</option>
													<option value="1972">1972</option>
													<option value="1971">1971</option>
													<option value="1970">1970</option>
													<option value="1969">1969</option>
													<option value="1968">1968</option>
													<option value="1967">1967</option>
													<option value="1966">1966</option>
													<option value="1965" selected="selected">1965</option>
													<option value="1964">1964</option>
													<option value="1963">1963</option>
													<option value="1962">1962</option>
													<option value="1961">1961</option>
													<option value="1960">1960</option>
													<option value="1959">1959</option>
													<option value="1958">1958</option>
													<option value="1957">1957</option>
													<option value="1956">1956</option>
													<option value="1955">1955</option>
													<option value="1954">1954</option>
													<option value="1953">1953</option>
													<option value="1952">1952</option>
													<option value="1951">1951</option>
													<option value="1950">1950</option>
													<option value="1949">1949</option>
													<option value="1948">1948</option>
													<option value="1947">1947</option>
													<option value="1946">1946</option>
													<option value="1945">1945</option>
													<option value="1944">1944</option>
													<option value="1943">1943</option>
													<option value="1942">1942</option>
													<option value="1941">1941</option>
													<option value="1940">1940</option>
													<option value="1939">1939</option>
													<option value="1938">1938</option>
													<option value="1937">1937</option>
													<option value="1936">1936</option>
													<option value="1935">1935</option>
													<option value="1934">1934</option>
													<option value="1933">1933</option>
													<option value="1932">1932</option>
													<option value="1931">1931</option>
													<option value="1930">1930</option>
													<option value="1929">1929</option>
													<option value="1928">1928</option>
													<option value="1927">1927</option>
													<option value="1926">1926</option>
													<option value="1925">1925</option>
													<option value="1924">1924</option>
													<option value="1923">1923</option>
													<option value="1922">1922</option>
													<option value="1921">1921</option>
													<option value="1920">1920</option>
													<option value="1919">1919</option>
													<option value="1918">1918</option>
													<option value="1917">1917</option>
													<option value="1916">1916</option>
													<option value="1915">1915</option>
													<option value="1914">1914</option>
													<option value="1913">1913</option>
													<option value="1912">1912</option>
													<option value="1911">1911</option>
													<option value="1910">1910</option>
													<option value="1909">1909</option>
													<option value="1908">1908</option>
													<option value="1907">1907</option>
													<option value="1906">1906</option>
													<option value="1905">1905</option>
													<option value="1904">1904</option>
													<option value="1903">1903</option>
													<option value="1902">1902</option>
													<option value="1901">1901</option>
													<option value="1900">1900</option>
												</select>
											</div>
										</div>

										<label for="bankruptcySelect" class="text15">
											<?=$this->lang->line('finance_bankcrupt')?>
										</label>
										<div style="float:left; margin-bottom: 5px; ">
											<select style="width:50px;" id="bankruptcySelect" name="bankruptcySelect"
													tabindex="7">
												<option value='yes'><?=$this->lang->line('finance_yes')?></option>
												<option value="no" selected='selected'><?=$this->lang->line('finance_no')?></option>
											</select>
										</div>

										<label for="homephone1" class="text15">
											<span class="astk">*</span> Telephone
										</label>
										<div style="float: left;margin-bottom: 5px;">
											<input tabindex="11" id='homephone1' name='homephone1' type="text"
												   class="phone required"/>
										</div>

										<label for="cellphone1" class="text15">
											Telephone (<?=$this->lang->line('finance_alternate')?>)
										</label>
										<div class="-left -mb5">
											<input tabindex="17" id='cellphone1' name='cellphone1' type="text"
												   class="phone"/>
										</div>
										<div class="clr"></div>
									</div>
									<div style="width:295px;" class="-hauto -left -pl0">
										<label for="firstname" class="text15">
											<span class="astk">*</span> <?=$this->lang->line('finance_first_name')?>
										</label>
										<div class="-left -mb5">
											<div class="jqTransformInputWrapper" style="width: 146px;">
												<div class="jqTransformInputInner">
													<div><input tabindex="2" id='firstname' name='firstname' type="text"
																class="jqtranformdone jqTransformInput"/></div>
												</div>
											</div>
										</div>
										<div style="width: 167px; float: left;overflow: hidden;">
											<label for="SINumber" class="text15 -w100p -fs12">
												SSN
											</label>
											<div class="-left -mb5">
												<input size="11" tabindex="6" id='SINumber' name='SINumber' type="text"
													   class=""/>
											</div>
										</div>
										<div class="-left" style="width: 128px;">
											<label for="maritalStatus" class="text15 -w100p">
												<?=$this->lang->line('finance_marital_status')?>
											</label>
											<div class="-w100p -left -mb5">
												<select class="-w85" id="maritalStatus" name="maritalStatus"
														tabindex="6">
													<option selected="selected" value="single"><?=$this->lang->line('finance_single')?></option>
													<option value="married"><?=$this->lang->line('finance_married')?></option>
													<option value="separated"><?=$this->lang->line('finance_seperated')?></option>
												</select>
											</div>
										</div>

										<label for="liberationDay" class="text15">
											<?=$this->lang->line('finance_release')?>
										</label>
										<div class="-left -mb5">
											<div class="-left">
												<select style='width: 50px;' id='liberationDay' name='liberationDay'
														tabindex='1'>
													<option value="" selected="selected"><?=$this->lang->line('finance_day')?></option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
													<option value="31">31</option>
												</select>
											</div>
											<div class="-left -mr5" style="width:114px;">
												<select style='width: 80px;' id='liberationMonth'
														aria-label='liberationMonth' name='liberationMonth'
														tabindex='9'>
													<option value="">Month</option>
													<option value="1" selected="selected"><?=$this->lang->line('finance_january')?></option>
													<option value="2"><?=$this->lang->line('finance_february')?></option>
													<option value="3"><?=$this->lang->line('finance_march')?></option>
													<option value="4"><?=$this->lang->line('finance_april')?></option>
													<option value="5"><?=$this->lang->line('finance_may')?></option>
													<option value="6"><?=$this->lang->line('finance_june')?></option>
													<option value="7"><?=$this->lang->line('finance_july')?></option>
													<option value="8"><?=$this->lang->line('finance_august')?></option>
													<option value="9"><?=$this->lang->line('finance_september')?></option>
													<option value="10"><?=$this->lang->line('finance_october')?></option>
													<option value="11"><?=$this->lang->line('finance_november')?></option>
													<option value="12"><?=$this->lang->line('finance_december')?></option>
												</select>
											</div>
											<div class="-w80 -left -mr5">
												<select style='width: 50px;' id='liberationYear'
														aria-label='liberationYear' name='liberationYear' tabindex='10'>
													<option value="">Year</option>
													<option value="2021">2021</option>
													<option value="2020">2020</option>
													<option value="2019">2019</option>
													<option value="2018">2018</option>
													<option value="2017">2017</option>
													<option value="2016">2016</option>
													<option value="2015">2015</option>
													<option value="2014">2014</option>
													<option value="2013">2013</option>
													<option value="2012">2012</option>
													<option value="2011">2011</option>
													<option value="2010">2010</option>
													<option value="2009">2009</option>
													<option value="2008">2008</option>
													<option value="2007">2007</option>
													<option value="2006">2006</option>
													<option value="2005">2005</option>
													<option value="2004">2004</option>
													<option value="2003">2003</option>
													<option value="2002">2002</option>
													<option value="2001">2001</option>
													<option value="2000">2000</option>
													<option value="1999">1999</option>
													<option value="1998">1998</option>
													<option value="1997">1997</option>
													<option value="1996">1996</option>
													<option value="1995">1995</option>
													<option value="1994">1994</option>
													<option value="1993">1993</option>
													<option value="1992">1992</option>
													<option value="1991">1991</option>
													<option value="1990">1990</option>
													<option value="1989">1989</option>
													<option value="1988">1988</option>
													<option value="1987">1987</option>
													<option value="1986">1986</option>
													<option value="1985">1985</option>
													<option value="1984">1984</option>
													<option value="1983">1983</option>
													<option value="1982">1982</option>
													<option value="1981">1981</option>
													<option value="1980">1980</option>
													<option value="1979">1979</option>
													<option value="1978">1978</option>
													<option value="1977">1977</option>
													<option value="1976">1976</option>
													<option value="1975">1975</option>
													<option value="1974">1974</option>
													<option value="1973">1973</option>
													<option value="1972">1972</option>
													<option value="1971">1971</option>
													<option value="1970">1970</option>
													<option value="1969">1969</option>
													<option value="1968">1968</option>
													<option value="1967">1967</option>
													<option value="1966">1966</option>
													<option value="1965" selected="selected">1965</option>
													<option value="1964">1964</option>
													<option value="1963">1963</option>
													<option value="1962">1962</option>
													<option value="1961">1961</option>
													<option value="1960">1960</option>
													<option value="1959">1959</option>
													<option value="1958">1958</option>
													<option value="1957">1957</option>
													<option value="1956">1956</option>
													<option value="1955">1955</option>
													<option value="1954">1954</option>
													<option value="1953">1953</option>
													<option value="1952">1952</option>
													<option value="1951">1951</option>
													<option value="1950">1950</option>
													<option value="1949">1949</option>
													<option value="1948">1948</option>
													<option value="1947">1947</option>
													<option value="1946">1946</option>
													<option value="1945">1945</option>
													<option value="1944">1944</option>
													<option value="1943">1943</option>
													<option value="1942">1942</option>
													<option value="1941">1941</option>
													<option value="1940">1940</option>
													<option value="1939">1939</option>
													<option value="1938">1938</option>
													<option value="1937">1937</option>
													<option value="1936">1936</option>
													<option value="1935">1935</option>
													<option value="1934">1934</option>
													<option value="1933">1933</option>
													<option value="1932">1932</option>
													<option value="1931">1931</option>
													<option value="1930">1930</option>
													<option value="1929">1929</option>
													<option value="1928">1928</option>
													<option value="1927">1927</option>
													<option value="1926">1926</option>
													<option value="1925">1925</option>
													<option value="1924">1924</option>
													<option value="1923">1923</option>
													<option value="1922">1922</option>
													<option value="1921">1921</option>
													<option value="1920">1920</option>
													<option value="1919">1919</option>
													<option value="1918">1918</option>
													<option value="1917">1917</option>
													<option value="1916">1916</option>
													<option value="1915">1915</option>
													<option value="1914">1914</option>
													<option value="1913">1913</option>
													<option value="1912">1912</option>
													<option value="1911">1911</option>
													<option value="1910">1910</option>
													<option value="1909">1909</option>
													<option value="1908">1908</option>
													<option value="1907">1907</option>
													<option value="1906">1906</option>
													<option value="1905">1905</option>
													<option value="1904">1904</option>
													<option value="1903">1903</option>
													<option value="1902">1902</option>
													<option value="1901">1901</option>
													<option value="1900">1900</option>
												</select>
											</div>
										</div>


										<div class="-left" style="width: 167px; overflow: hidden;">
											<label for="licensenum" class="text15">
												<?=$this->lang->line('finance_driving_license')?>
											</label>
											<div class="-left -mb5">
												<div class="jqTransformInputWrapper" style="width: 128px;">
													<div class="jqTransformInputInner">
														<div>
															<input id='licensenum' tabindex="20" name='licensenum'
																   type="text" class="jqtranformdone jqTransformInput"/>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="-left" style="width: 128px;">
											<label for="licenseExpiryDate" class="text15">
												<?=$this->lang->line('finance_expiration_date')?>
											</label>
											<div class="-left -mb5">
												<div class="jqTransformInputWrapper" style="width: 128px;">
													<div class="jqTransformInputInner">
														<div>
															<input id='licenseExpiryDate' tabindex="20"
																   name='licenseExpiryDate' type="text"
																   class="jqtranformdone jqTransformInput"/>
														</div>
													</div>
												</div>
											</div>
										</div>


										<label for="email" class="text15">
											<span class="astk">*</span> Email
										</label>
										<div class="-left -mb5">
											<div class="jqTransformInputWrapper" style="width: 146px;">
												<div class="jqTransformInputInner">
													<div>
														<input id='email' tabindex="20" name='email' type="text"
															   class="jqtranformdone jqTransformInput"/>
													</div>
												</div>
											</div>
										</div>

										<div class="clr"></div>
									</div>


								</div>
								<div class="clr"></div>
							</div>

							<!-- RENSEIGNEMENTS SUR LE DEMANDEUR -->
						</form>
					</div>
				</div>

				<div class="clr"></div>

				<div class="divTable align-center">
					<form name="fundingForm" id="fundingForm" class="forms_box22 jqtransform" action="#">

						<div id="stepTwo">

							<!-- ADRESSE ACTUELLE -->

							<div class="forms_box22 with_border" id="currentAddressDiv">
								<div class="text30">
									<?=$this->lang->line('finance_current_address')?>
									<span>
			<strong>*</strong>
			<?=$this->lang->line('finance_required')?>
		</span>
								</div>
								<div class="-w600 -hauto -left -pl17 -mt15 ">

									<div class="box600">
										<div class="civique -p0"><span class="astk">*</span> <?=$this->lang->line('finance_street_no')?></div>
										<div class="Rue -p0"><span class="astk">*</span> <?=$this->lang->line('finance_street')?></div>
										<div class="App">
											<?=$this->lang->line('finance_apartment')?>
										</div>

										<div class="forms100">
											<div class="jqTransformInputWrapper" style="width: 120px;">
												<div class="jqTransformInputInner">
													<div><input id='currentAddressNumber' name='currentAddressNumber'
																type="text" size="11"
																class="jqtranformdone jqTransformInput"
																style="width: 110px;"/></div>
												</div>
											</div>
										</div>
										<div class="forms101">
											<div class="jqTransformInputWrapper" style="width: 280px;">
												<div class="jqTransformInputInner">
													<div><input id='currentAddressStreet' name='currentAddressStreet'
																type="text" size="27"
																class="jqtranformdone jqTransformInput"
																style="width: 270px;"/></div>
												</div>
											</div>
										</div>

										<div class="forms102">
											<div class="jqTransformInputWrapper" style="width: 160px;">
												<div class="jqTransformInputInner">
													<div>
														<input id='currentAddressApp' name='currentAddressApp'
															   type="text" size="15"
															   class="jqtranformdone jqTransformInput -w150"/>
													</div>
												</div>
											</div>
										</div>


										<div class="Ville" style="margin-top:-8px;">
											<span class="astk">*</span> <?=$this->lang->line('finance_city')?>
											<div class="forms103">
												<div class="jqTransformInputWrapper" style="width: 260px;">
													<div class="jqTransformInputInner">
														<div><input id='currentCity' name='currentCity' type="text"
																	size="25"
																	class="jqtranformdone jqTransformInput -w250"/>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="Province" style="margin-top:-8px;">
											<span class="astk">*</span> <?=$this->lang->line('finance_province')?>
											<div class="forms104">
												<select style='width: 112px;' id='actualProvince' name='actualProvince'>
													<option value="">Province</option>
													<option value="Alberta">Alberta</option>
													<option value="British Columbia">British Columbia</option>
													<option value="Prince Edward Island">Prince Edward Island</option>
													<option value="Manitoba">Manitoba</option>
													<option value="New Brunswick">New Brunswick</option>
													<option value="Nova Scotia">Nova Scotia</option>
													<option value="Nunavut">Nunavut</option>
													<option value="Ontario">Ontario</option>
													<option value="Quebec">Quebec</option>
													<option value="Saskatchewan">Saskatchewan</option>
													<option value="Newfoundland and Labrador">Newfoundland and
														Labrador
													</option>
													<option value="Northwest Territories">Northwest Territories</option>
													<option value="Yukon">Yukon</option>
												</select>
											</div>
										</div>
										<div class="Code" style="margin-top:-8px;">
											<span class="astk">*</span> Postal code
											<div class="forms105">
												<div class="jqTransformInputWrapper" style="width: 160px;">
													<div class="jqTransformInputInner">
														<div><input id='currentPostalCode' name='currentPostalCode'
																	type="text" size="19"
																	class="jqtranformdone jqTransformInput validate postalcode postal"
																	style="width: 190px;"/></div>
													</div>
												</div>
											</div>
										</div>
										<div class="Type" style="width: 195px">
											<span class="astk">*</span> <?=$this->lang->line('finance_residence')?>
											<div class="forms106">
												<select style='width: 160px;' id='currentHomeType'
														name='currentHomeType'>
													<option value="" selected="selected">Residence</option>
													<option value="House">House</option>
													<option value="Condominium">Condominium</option>
													<option value="Appartement">Apartment</option>
													<option value="Other">Other</option>
												</select>
											</div>
										</div>
										<div class="Type" style="width: 222px">
											<span class="astk">*</span> <?=$this->lang->line('finance_owner')?>
											<div class="forms106">
												<select id="currentOwnerOrOccupant" name="currentOwnerOrOccupant"
														style="width:187px;">
													<option value=''>Owner?</option>
													<option value='owner'>Owner</option>
													<option value='occupant'>Occupant</option>
													<option value='parents'>Lives with their parents</option>
												</select>
											</div>
										</div>
										<div class="Type" style="width: 167px;">
											<span class="astk">*</span> <?=$this->lang->line('finance_duration_occupation')?>
											<div class="forms106 -w100p">
												<select style='width: 137px;border:0;' id='currentOccupationLength'
														name='currentOccupationLength'>
													<option value="" selected="selected"><?=$this->lang->line('finance_duration_occupation')?></option>
													<option value="0"><?=$this->lang->line('finance_less_year')?></option>
													<option value="1">1 <?=$this->lang->line('finance_year')?></option>
													<option value="2">2 <?=$this->lang->line('finance_years')?></option>
													<option value="3">3 <?=$this->lang->line('finance_years')?></option>
													<option value="4">4 <?=$this->lang->line('finance_years')?></option>
													<option value="5">5 <?=$this->lang->line('finance_years')?></option>
													<option value="6">6 <?=$this->lang->line('finance_years')?></option>
													<option value="7">7 <?=$this->lang->line('finance_years')?></option>
													<option value="8">8 <?=$this->lang->line('finance_years')?></option>
													<option value="9">9 <?=$this->lang->line('finance_years')?></option>
													<option value="10">10 <?=$this->lang->line('finance_years')?></option>
													<option value="11"><?=$this->lang->line('finance_more_year')?></option>
												</select>
											</div>
										</div>

										<div class="Hypotheque" style="margin-top:-8px;">
											<span class="astk">*</span>
											<?=$this->lang->line('finance_monthly_mortgage_rent')?>
										</div>
										<div class="Hypotheque22">
											<div class="jqTransformInputWrapper" style="width: 215px;">
												<div class="jqTransformInputInner">
													<div><input id='currentCostPerMonth' name='currentCostPerMonth'
																type="text" size="22"
																class="jqtranformdone jqTransformInput"
																style="width: 220px;"/></div>
												</div>
											</div>
										</div>
										<div class="Hypotheque33"><?=$this->lang->line('finance_dollar_month')?></div>

										<!--

	<div class="Hypotheque" style="line-height:17px;margin-top:-4px;"><span class="astk">*</span>  Name of owner or mortgage company</div>
	<div class="Hypotheque22"><div class="jqTransformInputWrapper" style="width: 230px;"><div class="jqTransformInputInner"><div><input id='currentOwnerName' name='currentOwnerName' type="text" size="22" class="jqtranformdone jqTransformInput" style="width: 220px;" /></div></div></div></div>
	<div class="Hypotheque33">&nbsp;</div>

	<div class="Hypotheque">If the owner, the mortgage amount</div>
	<div class="Hypotheque22"><div class="jqTransformInputWrapper" style="width: 230px;"><div class="jqTransformInputInner"><div><input id='currentMortgageAmount' name='currentMortgageAmount' type="text" size="22" class="jqtranformdone jqTransformInput" style="width: 220px;" /></div></div></div></div>
	<div class="Hypotheque33">$</div>

	<div class="Hypotheque">If the owner, value approx. of property</div>
	<div class="Hypotheque22"><div class="jqTransformInputWrapper" style="width: 230px;"><div class="jqTransformInputInner"><div><input id='currentHomeValue' name='currentHomeValue' type="text" size="22" class="jqtranformdone jqTransformInput" style="width: 220px;" /></div></div></div></div>
	<div class="Hypotheque33">$</div>

	-->

										<div class="clr"></div>
									</div>
								</div>
								<div class="clr"></div>
							</div>

							<!-- ADRESSE ACTUELLE -->

							<div class="clr"></div>

							<!-- ADRESSE PRECEDENTE -->

							<div style="display:none;" class="forms_box22 with_border" id="lastAddressDiv">
								<div class="Veuillez">
									Your previous address<br/>
									<span style="font-size:14px;">Please complete this section if you've your current address for less than two years.</span>
								</div>
								<div style="width:600px; height:auto; float:left; padding-left:17px; margin-top:15px;">

									<div class="box600">
										<div class="civique">Civic No.</div>
										<div class="Rue">Street</div>
										<div class="App">Apartment</div>

										<div class="forms100">
											<div class="jqTransformInputWrapper" style="width: 120px;">
												<div class="jqTransformInputInner">
													<div><input id='lastAddressNumber' name='lastAddressNumber'
																type="text" size="11"
																class="jqtranformdone jqTransformInput"
																style="width: 110px;"/></div>
												</div>
											</div>
										</div>
										<div class="forms101">
											<div class="jqTransformInputWrapper" style="width: 280px;">
												<div class="jqTransformInputInner">
													<div><input id='lastAddressStreet' name='lastAddressStreet'
																type="text" size="27"
																class="jqtranformdone jqTransformInput"
																style="width: 270px;"/></div>
												</div>
											</div>
										</div>

										<div class="forms102">
											<div class="jqTransformInputWrapper" style="width: 160px;">
												<div class="jqTransformInputInner">
													<div><input id='lastAddressApp' name='lastAddressApp' type="text"
																size="15" class="jqtranformdone jqTransformInput"
																style="width: 150px;"/></div>
												</div>

											</div>
										</div>


										<div class="Ville">
											City
											<div class="forms103">
												<div class="jqTransformInputWrapper" style="width: 260px;">
													<div class="jqTransformInputInner">
														<div><input id='lastCity' name='lastCity' type="text" size="25"
																	class="jqtranformdone jqTransformInput"
																	style="width: 250px;"/></div>
													</div>
												</div>
											</div>
										</div>
										<div class="Province">
											Province
											<div class="forms104">
												<select style='width: 112px;' id='lastProvince' name='lastProvince'>
													<option value="">Province</option>
													<option value="Alberta">Alberta</option>
													<option value="British Columbia">British Columbia</option>
													<option value="Prince Edward Island">Prince Edward Island</option>
													<option value="Manitoba">Manitoba</option>
													<option value="New Brunswick">New Brunswick</option>
													<option value="Nova Scotia">Nova Scotia</option>
													<option value="Nunavut">Nunavut</option>
													<option value="Ontario">Ontario</option>
													<option value="Quebec">Quebec</option>
													<option value="Saskatchewan">Saskatchewan</option>
													<option value="Newfoundland and Labrador">Newfoundland and
														Labrador
													</option>
													<option value="Northwest Territories">Northwest Territories</option>
													<option value="Yukon">Yukon</option>
												</select>
											</div>
										</div>
										<div class="Code">
											Postal code
											<div class="forms105">
												<div class="jqTransformInputWrapper" style="width: 160px;">
													<div class="jqTransformInputInner">
														<div><input id='lastPostalCode' name='lastPostalCode'
																	type="text" size="19"
																	class="jqtranformdone jqTransformInput"
																	style="width: 190px;"/></div>
													</div>
												</div>
											</div>
										</div>


										<div class="Type" style="width: 195px">
											<?=$this->lang->line('finance_residence')?>
											<div>
												<select style='width: 160px;' id='lastHomeType' name='lastHomeType'>
													<option value="" selected="selected"><?=$this->lang->line('finance_residence')?></option>
													<option value="House"><?=$this->lang->line('finance_house')?></option>
													<option value="Condominium"><?=$this->lang->line('finance_condo')?></option>
													<option value="Appartement"><?=$this->lang->line('finance_apartment')?></option>
													<option value="Other"><?=$this->lang->line('finance_other	')?></option>
												</select>
											</div>
										</div>
										<div class="Type" style="width: 222px">
											<?=$this->lang->line('finance_owner')?>
											<div class="forms106">
												<select id="lastOwnerOrOccupant" name="lastOwnerOrOccupant"
														style="width:187px;">
													<option value=''>Owner?</option>
													<option value='owner'><?=$this->lang->line('finance_owner')?></option>
													<option value='occupant'><?=$this->lang->line('finance_occupant')?></option>
													<option value='parents'><?=$this->lang->line('finance_with_parents')?></option>
												</select>
											</div>
										</div>
										<div class="Type" style="width: 167px;">
											<?=$this->lang->line('finance_duration_occupation')?>
											<div class="forms106">
												<select style='width: 137px;border:0;' id='lastOccupationLength'
														name='lastOccupationLength'>
													<option value="" selected="selected">Duration of occupation</option>
													<option value="0">Less than a year</option>
													<option value="1">1 year</option>
													<option value="2">2 years</option>
													<option value="3">3 years</option>
													<option value="4">4 years</option>
													<option value="5">5 years</option>
													<option value="6">6 years</option>
													<option value="7">7 years</option>
													<option value="8">8 years</option>
													<option value="9">9 years</option>
													<option value="10">10 years</option>
													<option value="11">More than 10 years</option>
												</select>
											</div>
										</div>


										<div class="Hypotheque"><?=$this->lang->line('finance_monthly_mortgage_rent')?></div>
										<div class="Hypotheque22">
											<div class="jqTransformInputWrapper" style="width: 215px;">
												<div class="jqTransformInputInner">
													<div><input id='lastCostPerMonth' name='lastCostPerMonth'
																type="text" size="22"
																class="jqtranformdone jqTransformInput"
																style="width: 220px;"/></div>
												</div>
											</div>
										</div>
										<div class="Hypotheque33"><?=$this->lang->line('finance_dollar_month')?></div>

										<!--
	<div class="Hypotheque" style="line-height:17px;">Name of owner or mortgage company</div>f
	<div class="Hypotheque22"><div class="jqTransformInputWrapper" style="width: 230px;"><div class="jqTransformInputInner"><div><input id='lastOwnerName' name='lastOwnerName' type="text" size="22" class="jqtranformdone jqTransformInput" style="width: 220px;" /></div></div></div></div>
	<div class="Hypotheque33">&nbsp;</div>

	<div class="Hypotheque">If the owner, the mortgage amount</div>
	<div class="Hypotheque22"><div class="jqTransformInputWrapper" style="width: 230px;"><div class="jqTransformInputInner"><div><input id='lastMortgageAmount' name='lastMortgageAmount' type="text" size="22" class="jqtranformdone jqTransformInput" style="width: 220px;" /></div></div></div></div>
	<div class="Hypotheque33">$</div>

	<div class="Hypotheque">If the owner, value approx. of property</div>
	<div class="Hypotheque22"><div class="jqTransformInputWrapper" style="width: 230px;"><div class="jqTransformInputInner"><div><input id='lastHomeValue' name='lastHomeValue' type="text" size="22" class="jqtranformdone jqTransformInput" style="width: 220px;" /></div></div></div></div>
	<div class="Hypotheque33">$</div>
	-->


										<div class="clr"></div>
									</div>
								</div>

								<div class="clr"></div>
							</div>

							<!-- ADRESSE PRECEDENTE -->
						</div>

						<div class="clr"></div>

						<div  id="stepThree">
							<!-- EMPLOI ACTUEL -->
							<div class="forms_box22 with_border" id="currentJobDiv">
								<div class="text30">
									<?=$this->lang->line('finance_current_occupation')?>
									<span>
			<strong>*</strong><?=$this->lang->line('finance_required')?>
		</span>
								</div>
								<div style="width:600px; height:auto; float:left; padding-left:17px; margin-top:8px;">
									<div class="text155" style="width:600px;">
										<span class="astk">*</span> <?=$this->lang->line('finance_occupation')?>
									</div>
									<div style="width:600px; margin-bottom:5px; float: left; ">
										<div class="jqTransformInputWrapper" style="width: 110px;">
											<div class="jqTransformInputInner">
												<div>
													<input tabindex="21" id="jobname" name="jobname" type="text"
														   size="10" class="jqtranformdone jqTransformInput"
														   style="width: 100px;"/>
												</div>
											</div>
										</div>
									</div>

									<!-- Employment Left Column -->
									<div style="width:285px; height:auto; clear: left; float:left; padding-left:0px; margin-right:25px;">
										<div class="text155">
											<span class="astk">*</span> <?=$this->lang->line('finance_name_of_employer')?>
										</div>
										<div style="width:285px; margin-bottom:5px; float:left; ">
											<div class="jqTransformInputWrapper" style="width: 160px;">
												<div class="jqTransformInputInner">
													<div>
														<input tabindex="22" id="companyname" name="companyname"
															   type="text" size="15"
															   class="jqtranformdone jqTransformInput"
															   style="width: 150px;"/>
													</div>
												</div>
											</div>
										</div>

										<div class="text155">
											<span class="astk">*</span> Phone of employer
										</div>
										<div style="float: left;margin-bottom: 5px;">
											<input tabindex="24" type="text" id="jobphone1" name="jobphone1"
												   class="phone" style="width: 166px;"/>
										</div>

										<div class="text155">
											<span class="astk">*</span> <?=$this->lang->line('finance_annual_income')?>
										</div>
										<div style="margin-bottom:5px; float:left;">
											<div style="width:145px; float:left; margin-right:5px; ">
												<div class="jqTransformInputWrapper" style="width: 130px;">
													<div class="jqTransformInputInner">
														<div>
															<input tabindex="28" type="text" size="12" id="jobsalary"
																   name="jobsalary"
																   class="jqtranformdone jqTransformInput"
																   style="width: 120px;"/>
														</div>
													</div>
												</div>
											</div>
											<div style="width:90px; margin-bottom:10px; float:left; margin-right:5px; font-size:13px; color:#242424 ; line-height:33px; ">
												$/year
											</div>
										</div>
										<div class="clr"></div>
									</div>

									<!-- Employment Right Column -->
									<div style="width:285px; height:auto; float:left; padding-left:0px; ">
										<div class="text15">
											<?=$this->lang->line('finance_type_business')?>
										</div>
										<div style="width:180px; margin-bottom:5px; float:left; margin-right:5px;">
											<div class="jqTransformInputWrapper" style="width: 146px;">
												<div class="jqTransformInputInner">
													<div>
														<input tabindex="23" id="companytype" name="companytype"
															   type="text" class="jqtranformdone jqTransformInput"/>
													</div>
												</div>
											</div>
										</div>

										<div class="text15">
											<span class="astk">*</span> Duration of employment
										</div>
										<div style="width:180px; margin-bottom:5px; float:left;">
											<select style='width: 150px;border:0;' id='joblength' name='joblength'>
												<option value="" selected="selected">Duration of employment</option>
												<option value="0">Less than a year</option>
												<option value="1">1 year</option>
												<option value="2">2 years</option>
												<option value="3">3 years</option>
												<option value="4">4 years</option>
												<option value="5">5 years</option>
												<option value="6">6 years</option>
												<option value="7">7 years</option>
												<option value="8">8 years</option>
												<option value="9">9 years</option>
												<option value="10">10 years</option>
												<option value="11">More than 10 years</option>
											</select>
										</div>

										<div class="text15">
											<span class="astk">*</span> <?=$this->lang->line('finance_type_pay')?>
										</div>
										<div style="width:180px; margin-bottom:5px; float:left; margin-right:5px; ">
											<div class="jqTransformInputWrapper" style="width: 146px;">
												<div class="jqTransformInputInner">
													<div><input tabindex="29" id="salarytype" name="salarytype"
																type="text" class="jqtranformdone jqTransformInput"/>
													</div>
												</div>
											</div>
										</div>
										<div class="clr"></div>
									</div>

								</div>
								<div class="clr"></div>
							</div>
							<!-- EMPLOI ACTUEL -->
							<div class="clr"></div>

							<!-- EMPLOI PRECEDENT -->
							<div style="display:none;" class="forms_box22 with_border" id="lastJobDiv">
								<div class=" Veuillez">
									Your previous occupation<br/>
									<span style="font-size:14px;">
			Please complete this section if your current occupation for less than two years.
		</span>
								</div>
								<div style="width:600px; height:auto; float:left; padding-left:17px; margin-top:15px;">

									<div style="width:285px; height:auto; float:left; padding-left:0px; margin-right:25px;">

										<div class="text155">
											Occupation
										</div>
										<div style="width:285px; margin-bottom:10px; float:left; ">
											<div class="jqTransformInputWrapper" style="width: 110px;">
												<div class="jqTransformInputInner">
													<div>
														<input tabindex="30" id="lastjobname" name="lastjobname"
															   type="text" size="10"
															   class="jqtranformdone jqTransformInput"
															   style="width: 100px;"/>
													</div>
												</div>
											</div>
										</div>

										<div class="text155">
											Name of employer
										</div>
										<div style="width:285px; margin-bottom:10px; float:left; ">
											<div class="jqTransformInputWrapper" style="width: 160px;">
												<div class="jqTransformInputInner">
													<div>
														<input tabindex="31" id="lastcompanyname" name="lastcompanyname"
															   type="text" size="15"
															   class="jqtranformdone jqTransformInput"
															   style="width: 150px;"/>
													</div>
												</div>
											</div>
										</div>

										<div class="text155">
											<?=$this->lang->line('finance_phone_employer')?>
										</div>
										<div style="margin-bottom:10px; float:left; margin-right:5px;">
											<input tabindex="33" type="text" id="lastjobphone1" name="lastjobphone1"
												   class="phone"/>
										</div>

										<div class="text155">
											Annual gross income (before taxes)
										</div>
										<div style="width:145px; margin-bottom:10px; float:left; margin-right:5px; ">
											<div class="jqTransformInputWrapper" style="width: 130px;">
												<div class="jqTransformInputInner">
													<div>
														<input tabindex="37" type="text" size="12" id="lastjobsalary"
															   name="lastjobsalary"
															   class="jqtranformdone jqTransformInput"
															   style="width: 120px;"/>
													</div>
												</div>
											</div>
										</div>
										<div style="width:90px; margin-bottom:10px; float:left; margin-right:5px;   font-size:13px; color:#242424 ; line-height:33px; ">
											<?=$this->lang->line('finance_dollar_year')?>
										</div>

										<div class="clr"></div>
									</div>

									<div style="width:285px; height:auto; float:left; padding-left:0px; ">
										<div style=" height:57px;" class="text15">&nbsp;</div>
										<div class="text15">
											Type of business
										</div>
										<div style="width:180px; margin-bottom:10px; float:left; margin-right:5px; ">
											<div class="jqTransformInputWrapper" style="width: 146px;">
												<div class="jqTransformInputInner">
													<div>
														<input tabindex="32" id="lastcompanytype" name="lastcompanytype"
															   type="text" class="jqtranformdone jqTransformInput"/>
													</div>
												</div>
											</div>
										</div>

										<div class="text15">
											<?=$this->lang->line('finance_duration_employment')?>
										</div>
										<div style="width:180px; margin-bottom:10px; float:left; margin-right:5px; ">
											<select style='width: 150px;border:0;' id='lastjoblength'
													name='lastjoblength'>
												<option value="" selected="selected">Duration of employment</option>
												<option value="0">Less than a year</option>
												<option value="1">1 year</option>
												<option value="2">2 years</option>
												<option value="3">3 years</option>
												<option value="4">4 years</option>
												<option value="5">5 years</option>
												<option value="6">6 years</option>
												<option value="7">7 years</option>
												<option value="8">8 years</option>
												<option value="9">9 years</option>
												<option value="10">10 years</option>
												<option value="11">More than 10 years</option>
											</select>
										</div>

										<div class="text15">
											Type of pay (hourly, commissions)
										</div>
										<div style="width:180px; margin-bottom:10px; float:left; margin-right:5px; ">
											<div class="jqTransformInputWrapper" style="width: 146px;">
												<div class="jqTransformInputInner">
													<div>
														<input tabindex="38" id="lastsalarytype" name="lastsalarytype"
															   type="text" class="jqtranformdone jqTransformInput"/>
													</div>
												</div>
											</div>
										</div>

										<div class="clr"></div>
									</div>

								</div>
								<div class="clr"></div>
							</div>
							<!-- EMPLOI PRECEDENT -->

							<div class="clr"></div>

							<div class="forms_box22 with_border">
								<div class="text30">
									<?=$this->lang->line('finance_vehicle_interest')?>
									<span>
								<!--<strong>*</strong>			-->
		</span>
								</div>
								<div style="width:600px; height:auto; float:left; padding-left:17px; margin-top:8px;">
									<ul id="credit_bodyTypes">
										<li>
											<div><?=$this->lang->line('finance_body_type')?></div>
										<li><label><input type="checkbox" name="viBodyType" value="Car"/> <?=$this->lang->line('finance_car')?></label>
										</li>
										<li><label><input type="checkbox" name="viBodyType" value="Convertible"/>
												<?=$this->lang->line('finance_convertible')?></label></li>
										<li>
											<label><input type="checkbox" name="viBodyType" value="SUV"/>
												<?=$this->lang->line('finance_suv')?></label>
										</li>

									</ul>
									<ul id="credit_drivetrain">
										<li>
											<div><?=$this->lang->line('finance_drive_train')?></div>
										<li><label><input type="checkbox" name="viBodyType" value="Front Wheel Drive"/>
												<?=$this->lang->line('finance_fwd')?></label></li>
										<li><label><input type="checkbox" name="viBodyType" value="Rear Wheel Drive"/>
												<?=$this->lang->line('finance_rwd')?></label></li>
										<li><label><input type="checkbox" name="viBodyType" value="All Wheel Drive"/>
												<?=$this->lang->line('finance_awd')?></label></li>
										<li><label><input type="checkbox" name="viBodyType" value="4 Wheel Drive"/>
												<?=$this->lang->line('finance_4wd')?></label></li>

									</ul>
									<ul id="credit_fueltype">
										<li>
											<div><?=$this->lang->line('finance_fuel_type')?></div>
										<li><label><input type="checkbox" name="viBodyType" value="Gas"/>
												<?=$this->lang->line('finance_gas')?></label>
										</li>
										<li><label><input type="checkbox" name="viBodyType" value="Diesel"/>
												<?=$this->lang->line('finance_diesel')?></label></li>
										<li><label><input type="checkbox" name="viBodyType" value="Hybrid"/>
												<?=$this->lang->line('finance_hybrid')?></label></li>
									</ul>
									<div class="clr"></div>

									<div id="credit_vi_advanced">
										<label>
											<div class="label"><?=$this->lang->line('finance_sp_make_model')?>:</div>
											<input type="text" id="vehicle_pref_makemodel" value=""
												   style="width: 190px;"/>
										</label>

										<label>
											<div class="label"><?=$this->lang->line('finance_color')?>:</div>
											<input type="text" id="vehicle_pref_color" value="" style="width: 190px;"/>
										</label>

										<div class="clr"></div>
									</div>

								</div>
							</div>


							<div class="clr"></div>

							<div class="clr"></div>
							<div class="credit-consent__container">
								<div>

									<input tabindex="21" id="creditBureauCheck" name="creditBureauCheck"
										   isRequired=false type="checkbox" class="jqtranformdone jqTransformInput"/>
									<input type="hidden" id="yesVal" value="Yes">
									<input type="hidden" id="noVal" value="No">
								</div>
								<div>
									I authorize Sean Auto Sales to make a request to the credit
									bureaus. I agree that the information be disclosed to any other lender with whom I
									have or will have financial relations.
									I certify that the information in this application is true and correct.
								</div>
							</div>
							<div class="clr"></div>


							<div class="clr"></div>

						</div>

						<div class="clr"></div>
					</form>
				</div>

				<div class="divTable align-center">
					<div id='MissingValidationMsg' class='errorMsg' style="float:left;margin-left:25px;">Please complete
						all required fields
					</div>
					<div id='emailSentMsg' class='emailSentMsg' style="float:left;margin-left:25px;">Your request has
						been sent
					</div>
				</div>

				<!-- BUTTON -->

				<div class="divTable align-center">
					<div style="height:auto; padding:10px 0px; margin-left:12px; ">

						<div style="float:left;">

							<ul class="idNav1" style="float:left; visibility:hidden">
								<li class="top">
									<a style="background-size:2px 37px;height:37px;line-height:39px;border-radius:7px 7px 7px 7px;padding:0 16px;"
									   class="top_link" onclick="previousAction()" id='previousActionBtn'
									   href="javascript:void(0);">Previous</a>
								</li>
							</ul>

							<!-- <button class="button2 jqTransformButton" type="button" name="previousActionBtn" onclick="previousAction()" id='previousActionBtn'><span><span style="text-transform:uppercase;">Previous</span></span></button> -->
						</div>

						<div style="float:right;padding-bottom:10px;">

							<ul class="idNav1" style="float:right; visibility:hidden">
								<li class="top">
									<a style="background-size:2px 37px;height:37px;line-height:39px;border-radius:7px 7px 7px 7px;padding:0 16px;"
									   class="top_link" onclick="nextAction()" id='nextActionBtn'
									   href="javascript:void(0);">Next</a>
								</li>
							</ul>

							<ul class="idNav1" style="float:right">
								<li class="top">
									<a style="background-size:2px 37px;height:37px;line-height:39px;border-radius:7px 7px 7px 7px;padding:0 16px;"
									   class="top_link" onclick="submitFinanceForm()"
									   href="javascript:void(0);"><?=$this->lang->line('finance_send_request')?></a>
								</li>
							</ul>

							<!-- <button class="button2 jqTransformButton" type="button" name="nextActionBtn" onclick="nextAction()" id='nextActionBtn'><span><span style="text-transform:uppercase;">Next</span></span></button> -->
							<!-- <button class="button2 jqTransformButton" type="button" name="submitFormBtn" onclick="sendForm()" id='submitFormBtn' style="display:none;"><span><span style="text-transform:uppercase;">Send your request</span></span></button> -->
						</div>
						<div class="clr"></div>

					</div>
				</div>

				<!-- BUTTON -->

				<div class="clr"></div>
			</div>


			<!-- OO::131781e38cee11866f472a800acc7216 -->
		</div>
	</div>
	<div class="clr"></div>
</div>


<div id="emailSuccessMessage" class="reveal-modal email-consent-box">
	<div class="icon-title">
		<!-- <span class="title-icon success -ml0"></span> -->
		<span class="title-txt">Your request was sent successfully!</span>
	</div>
	<p><br/> wants to thank you for your request. Someone will contact you shortly.</p>
	<!-- <a class="close-reveal-modal">&#215;</a> -->
	<div class="email-consent-btns -pt20 -right ampConsentResponseSendDismiss">
		<a href="#" class="confirm_successContinue  btn-default ">Close</a>
	</div>
	<form id="emailmsgfrm" class="confirm_html" target="iframe" method="post"
		  action="https://www.eleganceleasing.com/confirmation.html">
		<input type="hidden" name="label" class="labelemail" value="Demandes-Financement"/>
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
		<input type="hidden" name="referrer" value="../index.html"/>
		<input type="hidden" name="department" value="FINANCE"/>
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
		<input type="hidden" name="isMobileNewVDP" value=""/>
		<input type="hidden" name="fromAutoAubaine" value=""/>

		<input type='hidden' value='NEW' name='textCarSectionType' style='display:none;'/>
		<input type="hidden" name="lang" value="en"/>
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


<input type="hidden" name="ADMIN_CREDIT_SENDNOW_CHECK" value="">
<input type="hidden" id="Finance_FormType" name="Finance_FormType" value="1step">
<input type="hidden" id="showCreditScoreAuto" name="showCreditScoreAuto" value="">


<div style='display:none'>
	<div id='emailSubjectDef' style='display:none'>Lead: Request for financing</div>
	<div id='emailBodyDef' style='display:none'>Hello,<br/><br/>A prospective client who has visited your site would
		like to request financing for one of your vehicles:<br/><br/>Type of request:
		<strong>{$DEMANDTYPE}</strong><br/><br/><u>Information on the vehicle of interest</u>:<br/>Make: <strong>{$EMAILMAKE}
			{$EMAILMODEL} {$EMAILYEAR}</strong><br/>Ext. Color: <strong>{$COLOREXT}</strong><br/>Stock Number: <strong>{$STOCKNUMBER}</strong><br/>Body
		Type: <strong>{$VEHICLE_PREF_BODYTYPE}</strong><br/>Drivetrain: <strong>{$VEHICLE_PREF_DRIVETRAIN}</strong><br/>Fuel
		Type: <strong>{$VEHICLE_PREF_FUELTYPE}</strong><br/>Specific Makes or Models:
		<strong>{$VEHICLE_PREF_MAKEMODEL}</strong><br/>Colour Preference:
		<strong>{$VEHICLE_PREF_COLOR}</strong><br/><br/><u>Information on the applicant</u>:<br/>Name: <strong>{$FIRSTNAME}
			{$LASTNAME}</strong><br/>Email: <strong><a href="mailto:{$EMAIL}">{$EMAIL}</a></strong><br/>Phone:
		<strong><a href="tel:{$HOMEPHONE}">{$HOMEPHONE}</a></strong> {$PHONE_VALIDATION_ATTEMPTS}<br/>Phone (alternate):
		<strong>{$CELLPHONE}</strong><br/>{$MAX_BUDGET} Driver's license number:
		<strong>{$DRIVINGLICENSENUM}</strong><br/>Expiry date:�<strong>{$LICENSEEXPIRYDATE}</strong><br/>Date of birth:
		<strong>{$BIRTHDAY}</strong><br/>Social Insurance Number: <strong>{$SIN}</strong><br/>Marital Status: <strong>{$MARITALSTATUS}</strong><br/>Has
		declared bankruptcy: <strong>{$BANKRUPTCY}</strong><br/>Date of discharge:
		<strong>{$DATERELEASE}</strong><br/><br/><u>Current
			address</u>:<br/><strong>{$CURRENTADDRESS}</strong><br/><strong>{$CURRENTCITY},
			{$CURRENTPROVINCE}</strong><br/><strong>{$CURRENTPOSTALCODE}</strong><br/>Type of residence: <strong>{$CURRENTRESIDENCETYPE}
			({$CURRENTOWNERORRENT}) since {$CURRENTOCCUPATIONLENGTH}</strong><br/>Mortgage or monthly rent: <strong>{$CURRENTMONTHLYRENT}</strong><br/>Name
		of owner: <strong>{$CURRENTOWNERNAME}</strong><br/>Mortgage balance: <strong>{$CURRENTMORTGAGE}</strong><br/>Market
		value of home: <strong>{$CURRENTHOMEVALUE}</strong><br/><br/><u>Previous
			address</u>:<br/><strong>{$LASTADDRESS}</strong><br/><strong>{$LASTCITY},
			{$LASTPROVINCE}</strong><br/><strong>{$LASTPOSTALCODE}</strong><br/>Type of residence: <strong>{$LASTRESIDENCETYPE}
			({$LASTOWNERORRENT}) since {$LASTOCCUPATIONLENGTH}</strong><br/>Mortgage or monthly rent: <strong>{$LASTMONTHLYRENT}</strong><br/>Name
		of owner: <strong>{$LASTOWNERNAME}</strong><br/>Mortgage balance: <strong>{$LASTMORTGAGE}</strong><br/>Market
		value of home: <strong>{$LASTHOMEVALUE}</strong><br/><br/><u>Current occupation</u>:<br/>Occupation: <strong>{$CURRENTOCCUPATION}</strong><br/>Name
		of employer: <strong>{$CURRENTEMPLOYERNAME}</strong><br/>Type of business:
		<strong>{$CURRENTCOMPANYTYPE}</strong><br/>Employer phone number: <strong>{$CURRENTCOMPANYPHONE}</strong><br/>Since:
		<strong>{$CURRENTJOBLENGTH}</strong><br/>Annual Salary: <strong>{$CURRENTSALARY}</strong><br/>Type of salary:
		<strong>{$CURRENTSALARYTYPE}</strong><br/><br/><u>Previous occupation</u>:<br/>Occupation: <strong>{$LASTOCCUPATION}</strong><br/>Name
		of employer: <strong>{$LASTEMPLOYERNAME}</strong><br/>Type of business: <strong>{$LASTCOMPANYTYPE}</strong><br/>Employer
		phone number: <strong>{$LASTCOMPANYPHONE}</strong><br/>Since: <strong>{$LASTJOBLENGTH}</strong><br/>Annual
		Salary: <strong>{$LASTSALARY}</strong><br/>Type of salary: <strong>{$LASTSALARYTYPE}</strong><br/><br/>Credit
		bureau enquiry�allowed:�<strong>{$CREDITBUREAUCHECK}</strong><br/><br/>
		<div style="##SEOBLOCKDISPLAY##">Media Source: <strong>{$UTMDETAILS}</strong><br/>Browser:
			<strong>{$USERAGENT}</strong><br/>Browsing History: <strong><a href="%7b%24UULINK%7d.html"
																		   style="color:black; text-decoration: none;">Click
					here</a></strong></div>
		<br/>{$DEALER_SENDTO}<p>Consent: <strong>{$CONSENT_DETAILS}</strong>{$PURCHASE_INTENT}</div>
</div>


</div>


<div id="d2c_vars"><input type="hidden" value="sales@eleganceleasing.com" id="13dqtsncd81wk844"
						  data-forvar="FINANCE_EMAIL"/>
	<input type="hidden" value="" id="5ccygk925mgwg0" data-forvar="FINANCE_ADF_EMAIL"/>
	<input type="hidden" value="NEW" id="so7yuqaj4dwcc8s" data-forvar="SITE_CAR_SECTION_TYPE"/>
	<input type="hidden" value="live" id="2ejhbc0yyog0www" data-forvar="DEPLOYMENTTYPE"/>
	<input type="hidden" value="" id="5l56aukyq64g8kw" data-forvar="MAKE"/>
	<input type="hidden" value="" id="42clshyrqdq8gcg" data-forvar="MODEL"/>
	<input type="hidden" value="0" id="r82zfkxa2dwss00" data-forvar="YEAR"/>
	<input type="hidden" value="https://www.eleganceleasing.com/" id="i3gsaxgs5jk8wck" data-forvar="REFERER"/>
</div><!-- ##ENDOFPAGE## -->

<?php include 'shared/footer.php'?>

<div id="ios_fixed_bg"></div>


<!-- PromotionSideBtn DISABLED FOR SECTION: FINANCE -->


<div id="HIDDEN_INPUTS">
	<!-- bundling hidden inputs to please Google -->
	<div class="hi____1">
		<input type='hidden' id='currentItemType' value='car'/>
		<input type='hidden' id='currentItemTypeURLSafeEN' value=''/>
		<input type='hidden' id='currentStatus' value='used'/>
		<input type='hidden' id='txtUserAgent' value='Windows  '/>
		<input type='hidden' id='currentCarPrice' value=''/>
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
		<input type="hidden" id="targetPage" name="targetPage" value="FINANCE"/>
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
		<input type='hidden' id='PAGEID' name='PAGEID' value='credit.html'/>
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
		<input type="hidden" name="referrer" value="../index.html"/>
		<input type="hidden" name="department" value="FINANCE"/>
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
<script type="text/javascript" async="true"
		src="<?= base_url() ?>assets/js/finance.js"></script>
<input type="hidden" value="FINANCE" id="defaultDepartment"/>

<script>
	function submitFinanceForm(){
		if($('#creditBureauCheck').is(':checked')==false) {
            alert('Please agree to terms & conditions');
            return;
        }
		if($('#creditDemand').is(':checked')==true)
			var requestType = 'Credit Application';
		else
			var requestType = '2nd chance credit';
		var lastName = $('#lastname').val();
		var firstName = $('#firstname').val();
		var birthDay = $('#birthDay').val();
		var birthMonth = $('#birthMonth').val();
		var birthYear = $('#birthYear').val();
		var SINnumber = $('#SINumber').val();//
		var maritalStatus = $('#maritalStatus').val();
		var bankruptcy = $('#bankruptcySelect').val();//
		var liberationDay = $('#liberationDay').val();//
		var liberationMonth = $('#liberationMonth').val();//
		var liberationYear = $('#liberationYear').val();//
		var homephone1 = $('#homephone1').val();
		var licenseNum = $('#licensenum').val();//
		var licenseExpiryDate = $('#licenseExpiryDate').val();//
		var cellphone1 = $('#cellphone1').val();//
		var email = $('#email').val();


		var addressNumber = $('#currentAddressNumber').val();
		var street = $('#currentAddressStreet').val();
		var apartment = $('#currentAddressApp').val();//
		var city = $('#currentCity').val();
		var province = $('#actualProvince').val();
		var postalCode = $('#currentPostalCode').val();
		var homeType = $('#currentHomeType').val();
		var ownerOrOccupant = $('#currentOwnerOrOccupant').val();
		var occupationLength = $('#currentOccupationLength').val();
		var monthlyMortgage = $('#currentCostPerMonth').val();

		var occupation = $('#jobname').val();
		var employerName = $('#companyname').val();
		var businessType = $('#companytype').val();//
		var phoneEmployer = $('#jobphone1').val();
		var durationEmployment = $('#joblength').val();
		var annualGrossIncome = $('#jobsalary').val();
		var payType = $('#salarytype').val();

		var prefMakeModel = $('#vehicle_pref_makemodel').val();//
		var prefColor = $('#vehicle_pref_color').val();//

		var data = {
			last_name: lastName
			,first_name: firstName
			,dob: birthDay+' '+birthMonth+' '+birthYear
			,sin: SINnumber
			,marital_status: maritalStatus
			,bankruptcy: bankruptcy
			,liberation: liberationDay+' '+liberationMonth+' '+liberationYear
			,telephone: homephone1
			,license_number: licenseNum
			,license_expiry: licenseExpiryDate
			,telephone_alternate: cellphone1
			,email: email
			,address_number: addressNumber
			,street: street
			,apartment: apartment
			,city: city
			,province: province
			,postal_code: postalCode
			,home_type: homeType
			,owner_occupant: ownerOrOccupant
			,duration_occupation: occupationLength
			,monthly_mortgage: monthlyMortgage
			,occupation: occupation
			,employer_name: employerName
			,business_type: businessType
			,phone_employer: phoneEmployer
			,duration_employment: durationEmployment
			,annual_income: annualGrossIncome
			,pay_type: payType
			,pref_make: prefMakeModel
			,pref_color: prefColor
		}

		if(lastName == '' || firstName == ''|| birthDay == ''|| birthMonth == ''|| birthYear == ''
				|| maritalStatus == ''|| homephone1 == ''|| email == ''|| addressNumber == ''
				|| street == ''|| city == ''|| province == ''|| postalCode == ''|| homeType == ''
				|| ownerOrOccupant == ''|| occupationLength == ''|| monthlyMortgage == ''
				|| occupation == ''|| employerName == ''|| phoneEmployer == ''|| durationEmployment == ''
				|| annualGrossIncome == ''|| payType == ''
		){
			alert('Please fill in all required fields');
			return ;
		}
		else if(validateEmail(email)){
			alert('Email is invalid');
			return ;
		}
		else{
				$.ajax({
					url: '<?=base_url()?>email/financeForm',
					type: 'POST',
					dataType: 'JSON',
					data: data,
					success: function(data){
						if(data.status)
							alert('Request Submitted Successfully');
						else
							alert('Something Went Wrong!');
					}
				})
		}



	}
	function validateEmail(email) {
		const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(String(email).toLowerCase());
	}
</script>
</body>

</html>


