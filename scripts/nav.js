/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

$(document).ready(function () {
	function myFunction(x) {
		if (x.matches) {
			$("nav section").show();

		} else {
			$(".cross").hide();
			$("nav section").hide();
			$(".hamburger").click(function () {
				$("nav section").slideToggle("slow", function () {
					$(".hamburger").hide();
					$(".cross").show();
				});
			});

			$(".cross").click(function () {
				$("nav section").slideToggle("slow", function () {
					$(".cross").hide();
					$(".hamburger").show();
				});
			});
		}
	}

	var x = window.matchMedia("(min-width: 1025px)");
	myFunction(x);
	x.addListener(myFunction);
});