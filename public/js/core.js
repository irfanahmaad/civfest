$(document).ready(function(){
		$('.open-nav').on('click', function(e){
			$('.nav-side').css({'right':'0px'});
			$('.overlay2').css({'right':'0px'});
			$('body').css({'right':'360px', 'overflow-y':'hidden'});
			$('.burger').css({'opacity':'0'});
			$('.nav-side').css({'opacity':'1'});
			$('.body-overlay').css({'opacity':'1', 'z-index':'9'});
		});

		$('.close-nav').on('click', function(e){
			$('.overlay2').css({'right':'-360px'});
			$('.nav-side').css({'right':'-450px'});
			$('body').css({'right':'0', 'overflow-y':'auto'});
			$('.burger').css({'opacity':'1'});
			$('.body-overlay').css({'opacity':'0', 'z-index':'-1'});
		});

		$('.body-overlay').on('click', function(){
			$('.overlay2').css({'right':'-360px'});
			$('.nav-side').css({'right':'-450px'});
			$('body').css({'right':'0', 'overflow-y':'auto'});
			$('.burger').css({'opacity':'1'});
			$('.body-overlay').css({'opacity':'0', 'z-index':'-1'});
		});

		$('.dropdown-nav').on('click', function(e){
			$(this).children('ul').slideToggle();
			if($(this).children().children('i').attr('class') == "fa fa-angle-right"){
				$(this).children().children('i').removeClass('fa-angle-right').addClass('fa-angle-down').css({'margin-left':'5px', 'font-size':'15px'});
			} else {
				$(this).children().children('i').removeClass('fa-angle-down').addClass('fa-angle-right');
			}
		});

		function collapseNavbar() {
            if ($(".header").offset().top > 50) {
            	$(".header").css({'background':'#d1ece7'});
                $(".header").css({'padding':'5px'});
                $('.news-hero').css({'margin-top':'60px'});
            } else {
            	$(".header").css({'background':'#cfe9e6'});
                // $(".header").removeClass("top-nav-collapse");
                $(".header").css({'padding':'15px'});
                $('.news-hero').css({'margin-top':'90px'});
            }
        }

        $(window).scroll(collapseNavbar);
        $(document).ready(collapseNavbar);
        $('.gallery a').simpleLightbox()
});
