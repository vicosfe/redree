$(document).ready(function () {


(function () {  

	$(".hamburger").click(function(){
		$(this).toggleClass("is-active");
		$(".header__right ul").toggleClass("header__rightActiveUl");
		$(".header__right").toggleClass("header__rightActive");
		$(".firstScreen__ICONWRAP").toggleClass("firstScreen__ICONWRAPACTIVE");
		$(".logoHeader").toggleClass("logoHeaderActive");
		$("section, .wrapper__footer").toggleClass("menuActiveSectionNone");
		$(".padBlock").toggleClass("menuActivePadBlock");
	  });

	  $(".header__right ul li").click(function () {
		$(".hamburger").removeClass("is-active");
		$(".header__right ul").removeClass("header__rightActiveUl");
		$(".header__right").removeClass("header__rightActive");
		$(".firstScreen__ICONWRAP").removeClass("firstScreen__ICONWRAPACTIVE");
		$(".logoHeader").removeClass("logoHeaderActive");
		$("section, .wrapper__footer").removeClass("menuActiveSectionNone");
		$(".padBlock").removeClass("menuActivePadBlock");
	  })
})();



	var firstScreenRight = $(".firstScreen__right");
	var mainMenu = $(".mainMenu");
	$(mainMenu).hide();
	

	$(".owl-carousel_fifthScreen").owlCarousel({
		loop: true,
		autoplayTimeout: 6000,
		smartSpeed: 1200,
		nav: true,
		navText: ["<i class='material-icons'>&#xE314;</i>", "<i class='material-icons'>&#xE315;</i>"],
			responsive:{
				300:{
					items: 1,
				},
				680:{
					items: 3,
				},
				1230:{
					items: 4,
				},
				1580:{
					items: 5,
				},
		},
	});




	// $(".slideTabs").owlCarousel({
	// 	items: 1,
	// 	nav: true,
	// 	navText: ["<i class='material-icons'>&#xE314;</i>", "<i class='material-icons'>&#xE315;</i>"],
	// });
	

	function initCarousel() {
	   var owl =  $(".slider_ourWorks");
	   owl.owlCarousel({
			loop: false,
			margin: 0,
			center: true,
			responsive: {
				300:{
					items: 1,
					margin: 25,
					stagePadding: 70,
					startPosition: 1,
				},
				1210:{
					stagePadding: 60,
					margin: 40,
					items: 1,
					startPosition: 0,
				},
				1500:{
					stagePadding: 80,
					margin: 0,
					items: 1,
				},
				1920: {
					stagePadding: 100,
					margin: 0,
					items: 1,
				}
			}
		});
		var arrayWorks = JSON.parse(localStorage.getItem("arrayWorks"));

		owl.on('changed.owl.carousel', function(event) {
			var item      = event.item.index;
			setParams(arrayWorks, item);
		})

	}

	function setParams(request, item) {
		var nashGovno = request[item];
		$("#titleWork").text(nashGovno["name"]);
		$("#clientWork").text(nashGovno["klient"]);
		$("#typeWork").text(nashGovno["type"]);
		$("#yearWork").text(nashGovno["year"]);
		$("#urlLocal").attr('href', '/work/info/'+nashGovno["id"]);
		$("#urlGlobal").attr('href', nashGovno["url"]);
	}

	function suka(category) {

		$.ajax({
			url:"/work/get/"+category,
			method: "get"

		}).done(function (request) {

			if(request.length > 0){
				localStorage.clear();
				var localRequest = JSON.stringify(request);
				localStorage.setItem("arrayWorks",localRequest);
				setParams(request, 0);

				$("#govnishko").empty();
				$("#govnishko").append('<div class="owl-carousel slider_ourWorks" id="govnishko2" >');

				for (var i = 0; i < request.length; i++){

				var image = '<a href="   '+request[i]["url"]+'   " class="slideWrap" style="background: '+request[i]["background"]+' ">'
				image +=  '<div class="slidebg">'
				image +=             '<img src="'+request[i]["photo"]+'" alt="">';
				image +=             '</div>'
				image +=    '</a>'
					$("#govnishko2").append(image)

			   }
				$("#govnishko").append('</div>').each(function () {
					initCarousel();
				});


			}
		})
	}

	 suka(0);

	$('#govno').on('change',function () {
		var cat = $(this).val();
		suka(cat);
	});
	

	$(".header__right").on("click","a", function (event) {
		   event.preventDefault();
		   var id  = $(this).attr('href'),
		   top = $(id).offset().top;
		  $('body,html').animate({scrollTop: top-50}, 1200);
	});

	
(function () {
	
	$(".popupButton").click(function() {
		$(".wrap_popup").css({
			transform: "scale(1)",
			opacity: "1",
			zIndex: "10"
		});
		$(".wrapper_popup").css({
			zIndex: "7",
		});
	});
	
	var main = $(".mainPopup")

	$(document).mouseup(function (e){ // событие клика по веб-документу
		var child = $(".childPopup") // тут указываем ID элемента
		if (!child.is(e.target) // если клик был не по нашему блоку
			&& child.has(e.target).length === 0) { // и не по его дочерним элементам
				$(".wrap_popup").css({
					transform: "scale(.80)",
					opacity: "0",
					zIndex: "-1"
				});
				$(".wrapper_popup").css({
					zIndex: "-5",
				});
			}
		
		$(".close_popup").click(function() {
			$(".wrap_popup").css({
				transform: "scale(.80)",
				opacity: "0",
				zIndex: "-5"
			});
			$(".wrapper_popup").css({
				zIndex: "-5",
			});
		});
	  });

})();
	
	
(function($) {
	$(function() {

		$('ul.tabs__caption').on('click', 'li:not(.activeLi)', function() {
			$(this)
			.addClass('activeLi').siblings().removeClass('activeLi')
			.closest('div.tabs').find('div.tabs__content').removeClass('activeLi').eq($(this).index()).addClass('activeLi');
		});

		var tabIndex = window.location.hash.replace('#tab','')-1;
		if (tabIndex != -1) $('ul.tabs__caption li').eq(tabIndex).click();

		$('a[href*=#tab]').click(function() {
			var tabIndex = $(this).attr('href').replace(/(.*)#tab/, '')-1;
			$('ul.tabs__caption li').eq(tabIndex).click();
		});

	});
	})(jQuery);

	
(function(){

$(function (){

	$("#form_PageCountPrice").validate({

		 submitHandler: function (form){
			// Обычная отправка формы

			// или отправка через ajax
			$.post(form.action, $(form).serialize(), function (result, xhr){
				$("#form_PageCountPrice").find("input").val("");
				$('#form_PageCountPrice input:checked').prop('checked', false);
				$(".successForm").toggleClass("successFormActive");
					$(".fuckingProblemSuccessForm").css({
						display: "none"
					});
				setTimeout(function() {
					$(".successForm").removeClass("successFormActive");
					$(".fuckingProblemSuccessForm").css({
						display: "block"
					});
				}, 3000)
			});
		 },
		   rules: {

				name: {
					  required: true,
					  minlength: 2,
					},
				  email_formPageCountPrice: {
					required: true,
					email: true,
					minlength: 13,
				  },
				  phone: {
					required: true,
					minlength: 11,
				  },
			  
			  }
	});
});


$(function (){
$("#form_formPageIndex").validate({
	 submitHandler: function (form){
		// Обычная отправка формы

		// или отправка через ajax
		$.post(form.action, $(form).serialize(), function (result, xhr){
			$("#form_formPageIndex").find("input").val("");
			$(".successForm").toggleClass("successFormActive");
			setTimeout(function() {
				$(".successForm").removeClass("successFormActive");
			}, 3000)
		});
	 },
		rules:{
			Sname: {
				  required: true,
				  minlength: 2,
			},
			Semail: {
				required: true,
				email: true,
				minlength: 10,
			  },
			Sphone: {
				required: true,
				minlength: 13,
			  },
		}
});
});


$(function (){
	$("#contactForm_formPageIndex").validate({
		 submitHandler: function (form){
			// Обычная отправка формы

			// или отправка через ajax
			$.post(form.action, $(form).serialize(), function (result, xhr){
				$("#contactForm_formPageIndex").find("input").val("");
				$(".successForm").toggleClass("successFormActive");
				setTimeout(function() {
					$(".successForm").removeClass("successFormActive");
				}, 3000)
			});
		 },
			rules:{
				reg_name: {
				required: true,
				minlength: 2,
				},
				reg_mail: {
				required: true,
				email: true,
				minlength: 13,
				},
				reg_tel: {
				required: true,
				minlength: 11,
				}
			}
	});
});


$(function (){
	$("#form_formPageUslugi").validate({
		 submitHandler: function (form){
			// Обычная отправка формы

			// или отправка через ajax
			$.post(form.action, $(form).serialize(), function (result, xhr){
				$("#form_formPageUslugi").find("input").val("");
				$(".successForm").toggleClass("successFormActive");
				setTimeout(function() {
					$(".successForm").removeClass("successFormActive");
				}, 3000)
			});
		 },
			rules:{
				promo_name: {
					  required: true,
					  minlength: 2,
				},
				 promo_email: {
					required: true,
					email: true,
					minlength: 13,
				  },
				  promo_phone: {
					required: true,
					minlength: 11,
				  },
			}
	});
});


$(function (){
	$("#formMap_formPageIndex").validate({
		 submitHandler: function (form){
			// Обычная отправка формы

			// или отправка через ajax
			$.post(form.action, $(form).serialize(), function (result, xhr){
				$("#formMap_formPageIndex").find("input").val("");
				$(".successForm").toggleClass("successFormActive");
				setTimeout(function() {
					$(".successForm").removeClass("successFormActive");
				}, 3000)
			});
		 },
			rules:{
				name1: {
					  required: true,
					  minlength: 2,
				},
				 email1: {
					required: true,
					email: true,
					minlength: 13,
			  },
				  phone1: {
					required: true,
					minlength: 11,
				  },
			}
	});
});

	})();

	
	$("select").selecter({
		label: ' Все',
		cover: true
	});
	

!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});
	
	jQuery(function($){
		$("#phone").mask("+7 (999) 999-99-99");
		$("#phone2").mask("+7 (999) 999-99-99");
		$("#phone3").mask("+7 (999) 999-99-99");
		$("#phone4").mask("+7 (999) 999-99-99");
		$("#phone5").mask("+7 (999) 999-99-99");
		$("#phone6").mask("+7 (999) 999-99-99");
   });
	
	// __________________________FUCKING MASK________________________
	
	
	// ***********************************************
});
