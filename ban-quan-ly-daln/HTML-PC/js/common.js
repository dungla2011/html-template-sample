(function ($) {
    "use strict";
    var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    }

    //backToTop
    function backToTop() {
        $(window).scroll(function () {
            if ($(window).scrollTop() >= 200) {
                $('#to_top').fadeIn();
            } else {
                $('#to_top').fadeOut();
            }
        });

        $("#to_top").click(function () {
            $("html, body").animate({
                scrollTop: 0
            });
            return false;
        });
    }

    //resizeSite
    function resizeSite() {

    }
    //onCLick
    function onCLick() {

        $('.auto_search_button').click(function () {
            $('.search-wrap input').focus();
            if (!$(this).hasClass('is-clicked')) {
                $(this).addClass('is-clicked');
            } else {
                $(this).removeClass('is-clicked');
            }
            $('.search-wrap ').animate({
                width: 'toggle'
            });
        });

        $(".tab-default a").click(function (event) {
            $(".tab-default a").removeClass("active")
            if (!$(this).hasClass("active")) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
            event.preventDefault();
            var tab = $(this).attr("href");
            $(".tab-content >div").not(tab).css("display", "none");
            $(tab).fadeIn();
        });

        $('#vibeji-ham').off('click').on('click', function () {
            $(this).toggleClass('open');
            $('.main-header__nav').toggleClass('open');
            $('body').css('overflow', $(this).hasClass('open') ? 'hidden' : '')
        });


        $('.sub_menu').click(function () {
            if ($(this).next('.level2').css('display') == 'none') {
                $(this).addClass('active');
                $(this).parent().addClass('open');
            } else {
                $(this).removeClass('active');
                $(this).parent().removeClass('open');
            };
            $(this).next('.level2').slideToggle("slow", function () {});
        });

        $('.sub-icon2').click(function () {
            if ($(this).next('ul').css('display') == 'none') {
                $(this).html('-');
            } else {
                $(this).html('+');
            };
            $(this).next('ul').slideToggle("slow", function () {});
        });

		$(".dropdown").find(".dropbtn").click(function () {
			$(".dropdown").find('.dropdown-content').fadeOut();
			if ($(this).next().css('display') == 'none') {
				$('.dropdown-content').fadeOut();
				$(this).next().stop(true, true).fadeIn();
				$('.dropdown').removeClass('active');
				$(this).parent().addClass('active');
			} else {
				$(this).parent().find('.dropdown-content').fadeOut();
				$('.dropdown').removeClass('active');
			}
		});
		$(document).click(function () {
			$(".dropdown .dropbtn").removeClass('active');
			$(".dropdown").find('.dropdown-content').fadeOut();
            $('.dropdown').removeClass('active');
		});
		$(".dropdown .dropbtn").click(function (event) {
			event.stopPropagation();
            
		});

        // $('.subnav-layout .item-link').click(function () {
        //     if (!$(this).hasClass("active")) {
        //         $(this).addClass("active");
        //     } else {
        //         $(this).removeClass("active");
        //     }
        //     $(".sub-menu").animate({
        //         height: "toggle"
        //     });
        // });

        $('.subnav-layout .item-link').click(function () {
            if (!$(this).hasClass("active")) {
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }            
            $('.sub-menu').slideToggle("slow", function () {});
        });
        $(document).click(function () {
            $('.sub-menu').slideUp();
            $('.subnav-layout .item-link').removeClass("active");
        });
        $('.subnav-layout .item-link').click(function (event) {
            event.stopPropagation();
        });

        $('.magazine-archive-decade .btn').click(function () {
            if (!$(this).hasClass("active")) {
                $(this).addClass("active");
                $('.magazine-archive-decade__ul').fadeIn();
            } else {
                $(this).removeClass("active");
                $('.magazine-archive-decade__ul').fadeOut();
            }            
        });        
        $(".filter-mobile .filter").click(function (event) {
            if (!$(this).hasClass("active")) {
                $(this).addClass("active");
                $('.view-filters').fadeIn();
                $('body').css("overflow", "hidden");
            } else {
                $(this).removeClass("active");
                $('.view-filters').fadeOut();
                $('body').css("overflow", "visible");
            }
        });
        $(".view-filters .close").click(function (event) {
            $('.view-filters').fadeOut();
            $('body').css("overflow", "visible");
            $(".filter-mobile .filter").removeClass("active");
        });
    }
    //scrollBar
    function slideSwiper() {
        // Slide dự án
        var swiperduan = new Swiper('#slide-spotlight', {
            spaceBetween: 40,
            slidesPerView: 3,
            slidesPerGroup: 3,
            navigation: {
                nextEl: ".section-spotlight .swiper-button-next",
                prevEl: ".section-spotlight .swiper-button-prev",
            },
            breakpoints: {
                991: {
                    slidesPerView: 2,
                },
                767: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                    slidesPerGroup: 2
                },
                575: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    slidesPerGroup: 1
                }
            }
        });       

    }

    //scrollBar
    function scrollBar() {
        // });
        var scrollContainer = $(".scrollbar-inner");
        if (scrollContainer.length > 0) {
            scrollContainer.scrollbar();
        }
    }

	function datepicker() {
		$('.datepicker-input').Zebra_DatePicker({
			format: 'd/m/Y'
		});

	}    

    $(function () {
        backToTop();
        onCLick();
        slideSwiper();
        cssVars();
        scrollBar();
        datepicker();
    });
    $(window).on('load resize', function () {
        resizeSite()
    });
})(jQuery);


//Custom select
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);