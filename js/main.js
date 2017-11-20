 $(document).ready(function () {
	var mainMenu = $(".mainMenu");
	$(mainMenu).hide();
	var menuPhone = $(".header__right--number");
	$(document).ready(function() {
		$('#fullpage').fullpage({
			navigation: true
		});
	});

	var fullpage1 = $("#fullpage");
	$(fullpage1).show();

	// Гамбургер еже
	(function() {

		"use strict";

		var toggles = document.querySelectorAll(".c-hamburger");

		for (var i = toggles.length - 1; i >= 0; i--) {
			var toggle = toggles[i];
			toggleHandler(toggle);
		};

		function toggleHandler(toggle) {
			toggle.addEventListener( "click", function(e) {
				e.preventDefault();
				if (this.classList.contains("is-active") === true) {
					this.classList.remove("is-active");
					$(mainMenu).removeClass('activeMenu fadeInRight animated');
					$(mainMenu).addClass('fadeOutRight animated');
					$(mainMenu).css("display", "block");
					$(menuPhone).removeClass('activePhone');
					setTimeout(function () {
						$(mainMenu).css("display", "none");
						
					}, 1000);
					
					
					
				}else {
					this.classList.add("is-active");
					$(mainMenu).removeClass(' fadeOutRight animated');
					$(mainMenu).addClass('activeMenu fadeInRight animated');
					$(menuPhone).addClass('activePhone');
				}

			});
		}

	})();


	// ***********************************************


	var darkCheck = $(".darkCheck");

<<<<<<< HEAD
=======






// ******************************




>>>>>>> mm
// doc.end
});



// govnocod zaura
//Прелоадер еже
window.onload = function(){
    setTimeout(function(){
        $(".wrap_preloader img").css({
            opacity: "1",
        });
    },2300);
    
        $(".svg_preloader").toggleClass("svg_preloaderJS");
};

	$(function () {
		$({numberValue: 0}).animate({numberValue: 100}, {
			duration: 1900,
			easing: "linear",
			step: function(val) {
				$(".count_preloader").html(Math.ceil(val));
			}
		});
        
    setTimeout(function(){
        $(".wrapper_preloader").css({
            opacity: "0",
        });
    },2750);
        
    setTimeout(function(){
        $(".wrapper_preloader").css({
            display: "none",
        });
    },4000);
        
});
