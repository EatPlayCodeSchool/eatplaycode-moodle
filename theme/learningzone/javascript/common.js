$(document).ready(function() {
    
    /* For Frontpage Slideshow */

    $("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
        //maxwidth: 540
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function() {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function() {
            $('.events').append("<li>after event fired.</li>");
        }
    });

    /* For back to top  */

    $(window).scroll(function() {
        if ($(this).scrollTop() > 10) {
            $('#backtotop ').fadeIn();
        } else {
            $('#backtotop').fadeOut();
        }
    });
    $('#backtotop a').click(function() {
        $("html, body").animate({
            scrollTop: 0
        });
        return false;
    });

    // For Header Menu
    // Create a clone of the navbar, right next to original.
    var topHeader = $('.top-header');
    if (topHeader) {
        topHeader.addClass('original');
        var cloneNode = $('.original') ? $('.original').clone() : '';
        var dupeNode = cloneNode ? cloneNode.insertAfter('.top-header').addClass('duplicate') : '';
        dupeNode.css({
            "position": "fixed",
            "top": "0",
            "margin-top": "0px",
            "z-index": "999999"
        });
        dupeNode.removeClass('original');
        dupeNode.css('display', 'none');
    }
    scrollIntervalID = setInterval(stickIt, 10);

    function stickIt() {
        var orgElementPos = $('.original').outerHeight(true);
        orgElementTop = orgElementPos.top;
        if ($(window).scrollTop() >= (orgElementPos)) {
            // scrolled past the original position; now only show the cloned, sticky element.
            // Cloned element should always have same left position and width as original element.     
            orgElement = $('.original');
            coordsOrgElement = orgElement.offset();
            leftOrgElement = coordsOrgElement.left;
            widthOrgElement = orgElement.css('width');
            $('.duplicate').css('left', leftOrgElement + 'px').css('top', 0).css('width', widthOrgElement).show();
            $('.original').css('visibility', 'hidden');
        } else {
            // not scrolled past the navbar; only show the original navbar.
            $('.duplicate').hide();
            $('.original').css('visibility', 'visible');
        }
    }




    // For dashboard

    try{
        if($('.customdashboard .coursebox')){
            $('.customdashboard .coursebox').addClass('span3');    
        }
        if($('.customdashboard')){
            $('.customdashboard').addClass('clearfix');
        }  
    }catch(ignore){}
    
    /* customDashboard course section start*/
    try{
       var customDashboard = $('.customdashboard');
        var totalPageWidth = $(customDashboard).width();
        var courseBoxWidth = customDashboard.find('.coursebox:first').outerWidth(true);
        $('.customdashboard > .coursebox').addClass('tst');
        var allBoxes = customDashboard.find('.coursebox');
        var totalBoxes = allBoxes.length;
        var boxesPerRow = Math.floor(totalPageWidth / courseBoxWidth);
        var temp2, temp3, shadowPAGE = $('<div class="shadow-customdashboard"></div>');
        for (temp2 = 0; temp2 < boxesPerRow; temp2++) {
            shadowPAGE.append('<div class="content-column span3 content-column-' + temp2 + '"></div>');
        }
        for (temp2 = 0, temp3 = 0; temp2 < totalBoxes; temp2++, temp3 = (temp3 < (boxesPerRow - 1) ? temp3 + 1 : 0)) {
            shadowPAGE.find('.content-column-' + temp3).append($(allBoxes[temp2]).clone());
        }
        shadowPAGE.append('<div class="clearfix"></div>');
        customDashboard.html(shadowPAGE); 
    }catch(ignore){}
    


    // For Site News Addpicture

    $(".forumpost").wrapInner("<div class='forumcontent'></div>");
    $("<div class='addpic'></div>").insertBefore(".forumcontent");

    var picture = $('.picture').html();
    if (typeof picture !== 'undefined' && picture !== null) {
        $('.addpic').append('<div class="picture">' + picture + '</div>');
        $('.forumpost .picture').css({
            'display': 'none'
        });
    } else {
        $('.addpic').attr('class', 'dispnone');
    }

    // For site news author section
    try{
        var _mainDiv = $(".author");
        if (_mainDiv) {
            for (var i = 0; i < _mainDiv.length; i++) {    
                if(_mainDiv[i].childNodes[2]){
                    if(_mainDiv[i].childNodes[2].nodeValue){
                        var _info = _mainDiv[i].childNodes[2].nodeValue; 
                        var _infoMain = _info.slice(3) ? _info.slice(3) : '';
                        if(_infoMain !== ''){
                            var _anchorEl = _mainDiv[i].childNodes[1];
                            if(_anchorEl){
                                $("<div class='content wst'>" + _infoMain + "</div>").insertAfter(_anchorEl);
                                
                            }
                            if(_mainDiv[i].childNodes[3]){
                                _mainDiv[i].childNodes[3].nodeValue = '';
                                
                                
                            }
                            if(_mainDiv[i].childNodes[0]){
                                _mainDiv[i].childNodes[0].nodeValue = '';
                                
                                
                            }
                        }
                    }
                }
            }
        }
    }catch(ignore){}
    
// Site News Carousel
 
    	var SiteNewsForum = $('#site-news-forum').html();
	if (typeof SiteNewsForum !== 'undefined' && SiteNewsForum !== null) {
		if ($('#news .container-fluid')) {
			$('#news .container-fluid').prepend('<div id="site-news-forum">' + SiteNewsForum + '</div>');
		}
		if ($('#region-main #site-news-forum')) {
			$('#region-main #site-news-forum').remove();
		}
		if ($('#region-main #site-news-forum > .forum')) {
			$('#region-main #site-news-forum > .forum').remove();
		}
	};
	if ($('#site-news-forum').length === 0) {
		$('#page #news').css({
			'display': 'none'
		});
	}
    
     
    if ($("#site-news-forum .forumpost")) {
		$("#site-news-forum .forumpost").addClass("item");
	}
    
    if ($("#site-news-forum .forumpost")) {
		$("#site-news-forum .forumpost").wrapAll("<div id='owl-demo' class='owl-carousel owl-theme'></div>");
	}



		if ($('body').hasClass('dir-rtl') === true) {
		$('#owl-demo').addClass('owl-rtl');
		$("#owl-demo").owlCarousel({
			rtl: true,
			loop: true,
			margin: 10,
            nav: false,
            autoplay: 5000,
            navigation: true,
            singleItem: true,
            dots:true,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 1,
				},
				1000: {
					items: 1,
				}
			}

		});
	} else {
		$("#owl-demo").owlCarousel({
			rtl: false,
			loop: true,
			margin: 10,
            nav: false,
            autoplay: 5000,
            navigation: true,
            singleItem: true,
            dots:true,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 1,

				},
				1000: {
					items: 1,

				}
			}

		});
	}
    

    // Frontpage Category   

    var frontpageCategory = $('#frontpage-category-names').html();
    if (typeof frontpageCategory !== 'undefined' && frontpageCategory !== null) {
        $('#block-region-side-pre').prepend('<div id="frontpage-category-names">' + frontpageCategory + '</div>');
        $('#region-main #frontpage-category-names').css({
            'display': 'none'
        });
    };

    $('#frontpage-category-names h2').each(function() {
        var text = $(this).text().split(' ');
        if (text.length < 2)
            return;
        text[0] = '<span class="hide">' + text[0] + '</span>';

        $(this).html(text.join(' '));
    });

    // Front page course

    $("div.frontpage-course-list-all").prev('h2').css({
        "display": "none"
    });

    $('#frontpage-course-list .coursebox').addClass('hvr-shadow');
    $('.frontpage-course-list-all .coursebox').addClass('span3');
    $('.frontpage-course-list-all').parent().addClass("availablecourses");
    $('.frontpage-course-list-all').addClass('clearfix');

    $('.frontpage-course-list-enrolled .coursebox').addClass('span3');
    $('.frontpage-course-list-enrolled').parent().addClass("mycourses");
    $('.frontpage-course-list-enrolled').addClass('clearfix');

    // Front-page all course section start


    var AvailableCourses = $('.availablecourses').html();
    if (typeof AvailableCourses !== 'undefined' && AvailableCourses !== null) {
        $('#courses-block > .container-fluid').prepend('<div id="frontpage-course-list" class="availablecourses">' + AvailableCourses + '</div>');
        $('#region-main .availablecourses').css({
            'display': 'none'
        });
    };
    if ($('.availablecourses').length === 0) {
        $('#page #courses-block').css({
            'display': 'none'
        });
    }


    // Front-page all course section first start

    try {
        var _frontpageCourseListAll = $('.frontpage-course-list-all');
        var frontpageCourseListAll = $(_frontpageCourseListAll[0]);
        if (frontpageCourseListAll) {
            var totalPageWidth = $(frontpageCourseListAll).width();
            var courseBoxWidth = frontpageCourseListAll.find('.coursebox:first').outerWidth(true);
            var allBoxes = frontpageCourseListAll.find('.coursebox');
            var totalBoxes = allBoxes.length;
            var boxesPerRow = Math.floor(totalPageWidth / courseBoxWidth);
            var temp2, temp3, shadowPAGE = $('<div class="shadow-frontpage-course-list-all row-fluid"></div>');
            for (temp2 = 0; temp2 < boxesPerRow; temp2++) {
                shadowPAGE.append('<div class="course-section span3 course-section-' + temp2 + '"></div>');
            }
            for (temp2 = 0, temp3 = 0; temp2 < totalBoxes; temp2++, temp3 = (temp3 < (boxesPerRow - 1) ? temp3 + 1 : 0)) {
                shadowPAGE.find('.course-section-' + temp3).append($(allBoxes[temp2]).clone());
            }
            var pageingMore$ = frontpageCourseListAll.find('.paging-morelink');
            if (pageingMore$ !== null && pageingMore$.length > 0) {
                    shadowPAGE.append(pageingMore$);
            }
            shadowPAGE.append('<div class="clearfix"></div>');
            frontpageCourseListAll.html(shadowPAGE);
        }

    } catch (ignore) {}


    // Front-page all course section second start
    try {
        var _frontpageCourseListAllS = $('.frontpage-course-list-all');
        var frontpageCourseListAllS = $(_frontpageCourseListAllS[1]);
        if (frontpageCourseListAllS) {
            var _totalPageWidth = $(frontpageCourseListAllS).width();
            var _courseBoxWidth = frontpageCourseListAllS.find('.coursebox:first').outerWidth(true);
            var _allBoxes = frontpageCourseListAllS.find('.coursebox');
            var _totalBoxes = _allBoxes.length;
            var _boxesPerRow = Math.floor(_totalPageWidth / _courseBoxWidth);
            var temp2, _temp3, _shadowPAGE = $('<div class="shadow-frontpage-course-list-all row-fluid"></div>');
            for (_temp2 = 0; _temp2 < _boxesPerRow; _temp2++) {
                _shadowPAGE.append('<div class="course-section span3 course-section-' + _temp2 + '"></div>');
            }
            for (_temp2 = 0, _temp3 = 0; _temp2 < _totalBoxes; _temp2++, _temp3 = (_temp3 < (_boxesPerRow - 1) ? _temp3 + 1 : 0)) {
                _shadowPAGE.find('.course-section-' + _temp3).append($(_allBoxes[_temp2]).clone());
            }
            var _pageingMore$ = frontpageCourseListAllSfind('.paging-morelink');
            if (_pageingMore$ != null && _pageingMore$.length > 0) {
                _shadowPAGE.append(_pageingMore$);
            }
            _shadowPAGE.append('<div class="clearfix"></div>');
            frontpageCourseListAllS.html(_shadowPAGE);
        }

    } catch (ignore) {}
    if ($('.frontpage-course-list-all')) {
        $('.frontpage-course-list-all .coursebox').removeClass('span3');
    }


    // Front-page enroll section
    try {
        var frontpageCourseListEnrolled = $('.frontpage-course-list-enrolled');
        var totalPageWidth = $(frontpageCourseListEnrolled).width();
        var courseBoxWidth = frontpageCourseListEnrolled.find('.coursebox:first').outerWidth(true);
        var enrolledBoxes = frontpageCourseListEnrolled.find('.coursebox');
        var totalBoxes = enrolledBoxes.length;
        var boxesPerRow = Math.floor(totalPageWidth / courseBoxWidth);
        var temp2, temp3, shadowPAGE = $('<div class="shadow-frontpage-course-list-enrolled row-fluid"></div>');
        for (temp2 = 0; temp2 < boxesPerRow; temp2++) {
            shadowPAGE.append('<div class="course-section span3 course-section-' + temp2 + '"></div>');
        }
        for (temp2 = 0, temp3 = 0; temp2 < totalBoxes; temp2++, temp3 = (temp3 < (boxesPerRow - 1) ? temp3 + 1 : 0)) {
            shadowPAGE.find('.course-section-' + temp3).append($(enrolledBoxes[temp2]).clone());
        }
        var pageingMore$ = $('.frontpage-course-list-enrolled .paging-morelink');
        if (pageingMore$ != null && pageingMore$.length > 0) {
            shadowPAGE.append(pageingMore$);
        }
        shadowPAGE.append('<div class="clearfix"></div>');
        frontpageCourseListEnrolled.html(shadowPAGE);
    } catch (ignore) {}
    if ($('.frontpage-course-list-enrolled')) {
        $('.frontpage-course-list-enrolled .coursebox').removeClass('span3');
    }



    var MyCourses = $('.mycourses').html();
    if (typeof MyCourses !== 'undefined' && MyCourses !== null) {
        $('#my-courses-block > .container-fluid').prepend('<div id="frontpage-course-list" class="mycourses">' + MyCourses + '</div>');
        $('#region-main .mycourses').css({
            'display': 'none'
        });
    };
    if ($('.mycourses').length === 0) {
        $('#page #my-courses-block').css({
            'display': 'none'
        });
    }

    // For login page 
    $(".loginpanel").wrapInner("<div class='loginpanel-inner'></div>");
    /* Login page help icon */
    try {
        var login = $('.loginbox');
        if (login) {
            var loginpanel = login.find('.loginpanel .subcontent .desc');
            if (loginpanel) {
                loginpanel.find('.helptooltip a img').attr('src', '#');
            }
        }
    } catch (ignore) {}


});