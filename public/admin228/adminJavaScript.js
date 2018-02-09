$(document).ready(function () {

	$("select").selecter({
		label: ' Вид работы (услуга)',
		cover: true
	});

	(function () {
		
		$(".deleteWork").click(function() {
			$(".wrap_popup").css({
				transform: "scale(1)",
				opacity: "1",
				zIndex: "10"
			});
			$(".wrapper__basicFunctional").css({
				filter: "blur(3px)"
			});
			$(".wrapper_popup").css({
				zIndex: "7",
			});
		});
		
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
					$(".wrapper__basicFunctional").css({
						filter: "blur(0)"
					});
				}
			
			$(".deleteWorkDB a").click(function() {
				$(".wrap_popup").css({
					transform: "scale(.80)",
					opacity: "0",
					zIndex: "-5"
				});
				$(".wrapper_popup").css({
					zIndex: "-5",
				});
				$(".wrapper__basicFunctional").css({
					filter: "blur(0)"
				});
			});
		  });

	})();


	(function() {

		var addText = '<textarea class="inputFocus" placeholder="Текст"></textarea>';

		$(".addText").click(function() {
			$(".textareaAdd").append(addText);
		});


		var addImages = '<div title="Кликай уже, не беси" class="test"><input type="file" size="1" / class="tinput"></div>';

		$(".addImages").click(function() {
			$(".textareaAdd").append(addImages);
		});
	}());

	(function () {
		
		$(".addProjectButton").click(function() {
			$(".wrap_popup").css({
				transform: "scale(1)",
				opacity: "1",
				zIndex: "10"
			});
			$(".wrapper__basicFunctional").css({
				filter: "blur(3px)"
			});
			$(".wrapper_popup").css({
				zIndex: "7",
			});
		});
		
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
					$(".wrapper__basicFunctional").css({
						filter: "blur(0)"
					});
				}
			
			$(".deleteWorkDB a").click(function() {
				$(".wrap_popup").css({
					transform: "scale(.80)",
					opacity: "0",
					zIndex: "-5"
				});
				$(".wrapper_popup").css({
					zIndex: "-5",
				});
				$(".wrapper__basicFunctional").css({
					filter: "blur(0)"
				});
			});
		  });

	})();



	(function () {
		
		$(".saveChengeButton").click(function() {
			$(".wrap_popup").css({
				transform: "scale(1)",
				opacity: "1",
				zIndex: "10"
			});
			$(".wrapper__basicFunctional").css({
				filter: "blur(3px)"
			});
			$(".wrapper_popup").css({
				zIndex: "7",
			});
		});
		
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
					$(".wrapper__basicFunctional").css({
						filter: "blur(0)"
					});
				}
			
			$(".deleteWorkDB a").click(function() {
				$(".wrap_popup").css({
					transform: "scale(.80)",
					opacity: "0",
					zIndex: "-5"
				});
				$(".wrapper_popup").css({
					zIndex: "-5",
				});
				$(".wrapper__basicFunctional").css({
					filter: "blur(0)"
				});
			});
		  });

	})();
});