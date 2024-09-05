$(document).ready(function() {
	
	//////////////////////////////////////////////////////////////////////
	// reveal content
	//////////////////////////////////////////////////////////////////////
	window.sr = ScrollReveal();
	var reveal = {
	  delay    : 100,
	  duration : 800,
	  distance : '150px',
	  easing   : 'ease-in-out',
	  scale    : 1
	};
	sr.reveal('.home .split-callout .col img', reveal);
	sr.reveal('.home  .full-width-callout .wrapper', reveal);
	sr.reveal('.home .homepage-intro-callout .col', { duration: 800 }, 100);
	sr.reveal('.home .news.complex .columns .col', { duration: 800 }, 100);
	
	//////////////////////////////////////////////////////////////////////
	// ADA related scripts for menus and program filters
	//////////////////////////////////////////////////////////////////////
	
	$('.navigation .main .dropdown .drop ul li a').attr('aria-hidden', 'true');
	// $('span.span-style').attr('role', 'text');
	
	//activate nested utility nav
	$(".navigation .utility li a.top").on("click keypress",function(){
		if($(this).hasClass('active')) {
			$(this).removeClass("active");
	    	$(".navigation .utility ul li ul.active").removeClass("active");
	    	$(this).attr('aria-expanded', 'false');
	    }
	    else{
		    $(".navigation .utility li a.top.active").removeClass("active");
		    $(".navigation .utility ul li ul.active").removeClass("active");
		    $(this).addClass("active");
			$(this).siblings().addClass("active");
			$(".navigation .utility li a").attr('aria-expanded', 'false');
			$(this).attr('aria-expanded', 'true');
	    }
    });
    $("#content").on("click keypress",function(){
	    $(".navigation .utility li a.top.active").removeClass("active");
		$(".navigation .utility ul li ul.active").removeClass("active");
	});
	$(".navigation .utility ul.right").on("click keypress",function(){
	    $(".navigation .utility li a.top.active").removeClass("active");
		$(".navigation .utility ul li ul.active").removeClass("active");
	});
	$(".navigation .main").on("click keypress",function(){
	    $(".navigation .utility li a.top.active").removeClass("active");
		$(".navigation .utility ul li ul.active").removeClass("active");
	});

    //activate nested main nav
	$('body').keyup(function(e) {
		var code = e.keyCode || e.which;
		if (code == '9') {
			if($('.navigation .main ul li i.visible').length == 0) {
				$('.navigation .main ul li i').addClass("visible");
			}
		}
	});
    var currentLink;
	$(".navigation .main nav ul li i").on("click keypress",function(){
		$('.navigation .main .dropdown .drop').removeClass("active");
 		currentLink = $(this).attr('data-attr');
 		$(this).attr('aria-expanded', 'true');
 		if($('.navigation .main .dropdown .drop.active').length == 0) {
	 		$('.navigation .main .dropdown .drop.' + currentLink).addClass("active");
	 		$('.navigation .main .dropdown .drop.' + currentLink + ' ul:first-of-type li:first-of-type a').focus();
	 		$('.navigation .main .dropdown .drop ul li a').attr('tabindex', '0');
	 		$('.navigation .main .dropdown .drop ul li a').attr('aria-hidden', 'false');
	 	}
    });
    // on key down of last ul li <a> focus to the sibling of the currentLink var
	$(".navigation .main .dropdown .drop:not(:last-child) ul:last-of-type li:last-of-type a").keydown(function(){
		$('.navigation .main .dropdown .drop').removeClass("active");
		$('.navigation .main .dropdown .drop ul li a').attr('tabindex', '-1');
		$('.navigation .main .dropdown .drop ul li a').attr('aria-hidden', 'true');
		$('#' + currentLink).focus();
		$(".navigation .main nav ul li i").attr('aria-expanded', 'false');
		//console.log(currentLink);
	});
	//ensures nested main nav is closed when exiting final dropdown
	$(".navigation .main .dropdown .drop ul:last-of-type li:last-of-type a").keydown(function(){
		$('.navigation .main .dropdown .drop').removeClass("active");
		$('.navigation .main .dropdown .drop ul li a').attr('tabindex', '-1');
		$('.navigation .main .dropdown .drop ul li a').attr('aria-hidden', 'true');
		$(".navigation .main nav ul li i").attr('aria-expanded', 'false');
	});
	
	//allow interaction with program listing filter
	$('.program-listing .filters label').keypress(function(){
		$(this).click();
	});
	
	//mobile navigation
    $('.mobile-nav').on("click touch keypress", function () {
		$(".mobile-nav .hamburger").toggleClass('active');
		$(".mobile-links").toggleClass('active');
		$('.mobile-links ul.util li.top').attr('tabindex', '0');
		$('.mobile-links ul.util li.top a').attr('tabindex', '0');
		if($('.mobile-links.active').length > 0) {
			$('.mobile-links a').attr('tabindex', '0');
			$('.mobile-links ul.util li ul li a').attr('tabindex', '-1');
			// $('.mobile-links').attr('aria-hidden', 'false');
			// $('#content').css('display','none');
			$('.footer').css('display','none');
			$('.footer-callout').css('display','none');
			$('.mobile-nav').attr('aria-label', 'Mobile navigation close');
		}
		else{
			$('.mobile-links a').attr('tabindex', '-1');
			// $('.mobile-links').attr('aria-hidden', 'true');
			$('#content').css('display','block');
			$('.footer').css('display','block');
			$('.footer-callout').css('display','block');
			$('.mobile-nav').attr('aria-label', 'Mobile navigation button');
		}
    });
    //mobile navigation nested ul
    $('.mobile-links ul.util li').on("click touch keypress", function () {
	    $(this).children('ul').addClass('active');
		
	    $(".mobile-links ul li a").attr('tabindex', '-1');
	    $(".mobile-links ul.util li").attr('tabindex', '-1');
	    
	    $(this).find("ul li a").attr('tabindex', '0');
	    $('.mobile-links .back').addClass('active').attr('tabindex', '0');
	    
	    $('.mobile-links ul.util li ul.active li:first-of-type').focus();
	    
	    $('.mobile-links ul li').css('display','none');
	    $('.mobile-links .btn').css('display','none');
	    $('.mobile-links p').css('display','none');
	    $(this).css('display','block').css("visibility","hidden");
	    $('.mobile-links ul.util li ul.active li').css('display','block').css("visibility","visible");
		
		// Added February 2021
		$('.mobile-links > .container').css('padding-bottom','950px').css('margin-top','-70px');
		
		if($(this).hasClass('students')) {
			$('.mobile-links > .container').css('padding-bottom','850px').css('margin-top','-70px');
		}
		
		if($(this).hasClass('parents')) {
			$('.mobile-links > .container').css('padding-bottom','450px').css('margin-top','-70px');
		}
		
		if($(this).hasClass('alumni')) {
			$('.mobile-links > .container').css('padding-bottom','450px').css('margin-top','-70px');
		}
		
		if($(this).hasClass('facultystaff')) {
			$('.mobile-links > .container').css('padding-bottom','450px').css('margin-top','-70px');
		}
		
		if($(this).hasClass('business')) {
			$('.mobile-links > .container').css('padding-bottom','450px').css('margin-top','-70px');
		}
		
	    $('.mobile-links .back p').css('display','block');
	    
	});
    $('.mobile-links .back').on("click touch keypress", function () {
	    $('.mobile-links ul.util li ul').removeClass('active');
	    
	    $(".mobile-links ul li a").attr('tabindex', '0');
	    $(".mobile-links ul.util li").attr('tabindex', '0');
		$(".mobile-links ul.util li ul li").attr('tabindex', '-1');
		
	    $(".mobile-links ul.util li ul li a").attr('tabindex', '-1');
	    $(this).removeClass('active').attr('tabindex', '-1');
	    
	    $('.mobile-links .btn').css('display','block');
	    $('.mobile-links ul li').css('display','block').css("visibility","visible");;
	    $('.mobile-links p').css('display','block');
		
	    // Added February 2021
	    $('.mobile-links > .container').css('padding-bottom','0').css('margin-top','0');
		
	    $('.mobile-links ul:first-of-type li:first-of-type a').focus();
	});
	
	/*
	$(".hide-focus").focus(function() {
	  alert( "Handler for .focus() called." );
	});
	*/

	$(window).keydown(function (e) {
		var code = (e.keyCode ? e.keyCode : e.which);
		
		//reset focus to top when reaching bottom of mobile navigation
		/* if (code == 9 && $('.mobile-links ul.util li ul.active li:last-of-type a:focus').length) {
	    	$('.mobile-links .back').focus();
		}
		if (code == 9 && $('.mobile-links ul:last-of-type li:last-of-type a:focus').length) {
	    	$('.mobile-nav').focus(); 
		} */
		
		//left and right arrow controls - number statistics
		if (code == 39 && $('.numbers.statistics ul li:focus').length) {
	    	$('.numbers.statistics ul li:focus').next().focus();
		}
		if (code == 37 && $('.numbers.statistics ul li:focus').length) {
	    	$('.numbers.statistics ul li:focus').prev().focus();
		}
		
		//up and down arrow controls - number statistics
		if (code == 38 && $('.numbers.statistics ul li:focus').length) {
	    	e.preventDefault();
	    	$(this).parent().parent().prevAll('p').focus();
	    	//console.log("previous number statistics");
		}
		if (code == 40 && $('.numbers.statistics ul li:focus').length) {
	    	e.preventDefault();
	    	$(this).parent().parent().nextAll('p').focus();
	    	//console.log("next number statistics");
		}
		
		//left and right arrow controls - number statistics-small
		if (code == 39 && $('.numbers.statistics-small ul li:focus').length) {
	    	$('.numbers.statistics-small ul li:focus').next().focus();
		}
		if (code == 37 && $('.numbers.statistics-small ul li:focus').length) {
	    	$('.numbers.statistics-small ul li:focus').prev().focus();
		}
		
		//up and down arrow controls - number statistics-small
		if (code == 38 && $('.numbers.statistics-small ul li:focus').length) {
	    	$(this).prev('p').focus();
	    	e.preventDefault();
	    	//console.log("previous number statistics small");
		}
		if (code == 40 && $('.numbers.statistics-small ul li:focus').length) {
	    	$(this).next('p').focus();
	    	e.preventDefault();
	    	//console.log("next number statistics small");
		}
		
		//left and right arrow controls - tabbed
		if (code == 39 && $('.tabbed .top .left li:focus').length) {
	    	$('.tabbed .top .left li:focus').next().focus();
		}
		if (code == 37 && $('.tabbed .top .left li:focus').length) {
	    	$('.tabbed .top .left li:focus').prev().focus();
		}

		//up and down arrow controls - tabbed
		if (code == 38 && $('.tabbed .top .left li:focus').length) {
	    	$(this).prev('p').focus();
	    	e.preventDefault();
	    	//console.log("previous tabbed");
		}
		if (code == 40 && $('.tabbed .top .left li:focus').length) {
	    	$(this).next('p').focus();
	    	e.preventDefault();
	    	//console.log("next tabbed");
		}

		
		//left and right arrow controls - areas of study
		if (code == 39 && $('.tabber .tabber-handle:focus').length) {
	    	$('.tabber .tabber-handle:focus').next().focus();
		}
		if (code == 37 && $('.tabber .tabber-handle:focus').length) {
	    	$('.tabber .tabber-handle:focus').prev().focus();
		}
		
	});
	
    //////////////////////////////////////////////////////////////////////
	// Search bar detect .navigation .search-section 
	//////////////////////////////////////////////////////////////////////
    
    //detect focus of program listing search bar
	$('.program-listing .filters .search input[type="search"]').focus( function() {
		$('.program-listing .filters .search').addClass('active');
	});
	/* $('.program-listing .filters .search input[type="search"]').blur( function() {
		$('.program-listing .filters .search').removeClass('active');
	}); */

	//detect focus of navigation search bar
	$('.navigation .search-section input.search_input').focus( function() {
		$('.navigation .search-section').addClass('active');
	});
	$('.navigation .search-section input.search_input').blur( function() {
		$('.navigation .search-section').removeClass('active');
	});
	$('.navigation .search-section button.search_submit_word').focus( function() {
		$('.navigation .search-section').addClass('active');
	});
	$('.navigation .search-section button.search_submit_word').blur( function() {
		$('.navigation .search-section').removeClass('active');
	});
	$('.navigation .mobile .search-section input.search_input').focus( function() {
		$('.navigation .mobile .search-section').addClass('active');
	});
	$('.navigation .mobile .search-section input.search_input').blur( function() {
		$('.navigation .search-section').addClass('active');
	});
    
    //////////////////////////////////////////////////////////////////////
	// Border hover states
	//////////////////////////////////////////////////////////////////////
    
    //hover state on news image block
    $('.news .col a.btn').hover(function(){
		$(this).parent('div').toggleClass('active');
	});
	
	//hover state on news complex image block
    $('.news.complex .columns .col a.inline').hover(function(){
		$(this).parent('div').toggleClass('active');
	});
	
	//hover state on colleges image block
    $('.colleges .col .copy a').hover(function(){
		$(this).parent('div').parent('div').toggleClass('active');
	});
	
	//hover state on tile image block
    $('.tiles .col a').hover(function(){
		$(this).parent('div').toggleClass('active');
	});
	
    //hover state on prgram image block
    $('.program-listing .programs .title a').hover(function(){
		$(this).parent('div').parent('div').toggleClass('border-display');
	});
    
    //////////////////////////////////////////////////////////////////////
	// Tab content controls
	//////////////////////////////////////////////////////////////////////
    
    //get dynamic width and center UL statistic snippet
	if($('.numbers.statistics').length > 0) {
		$(window).on("resize load", function(event){
			var statListWidth = $(".numbers.statistics ul").innerWidth();
			var statListPadding = 1; //solves chrome bug not measuring fractional innerWidth
			var statListWidthUpdated = statListWidth + statListPadding;
			$(".numbers.statistics ul").width(statListWidthUpdated).css("display","block").css("opacity","1");
		});
	}
	
	//get dynamic width and center UL statistic-small snippet
	if($('.numbers.statistics-small').length > 0) {
		$(window).on("resize load", function(event){
			var statListWidth = $(".numbers.statistics-small ul").innerWidth();
			var statListPadding = 1; //solves chrome bug not measuring fractional innerWidth
			var statListWidthUpdated = statListWidth + statListPadding;
			$(".numbers.statistics-small ul").width(statListWidthUpdated).css("display","block").css("opacity","1");
		});
	}

	//areas of study tab controls - desktop
	$('.study.filter li:not(:first)').addClass('inactive');
	$('.study.filter .columns').hide();
	$('.study.filter .columns:first').show(); 
	$('.study.filter #tabs li').on("click touch keypress", function () {
	    var title = $(this).attr('id');
		if($(this).hasClass('inactive')){
		    $('.study.filter #tabs li').addClass('inactive');           
		    $(this).removeClass('inactive');
		    $('.study.filter .columns').hide();
		    $('.study.filter #'+ title + 'Container').fadeIn('slow');
		    //aria selected
		    $('.study.filter #tabs li').attr('aria-selected', 'false'); 
		    $(this).attr('aria-selected', 'true');
		}
	});
	//areas of study tab controls - mobile
	$('.study.filter .mobile-select select').change(function() {
		var value = $(this).val();
		$('.study.filter .columns').hide();
		$('.study.filter #'+ value + 'Container').fadeIn('slow');
	});

	//statistics tab controls
	$('.numbers.statistics .stats ul li:not(:first)').addClass('inactive');
	$('.numbers.statistics .columns').hide();
	$('.numbers.statistics .columns:first').show(); 
	$('.numbers.statistics ul#tabs li').on("click touch keypress", function () {
	    var tab = $(this).attr('id');
		if($(this).hasClass('inactive')){
		    $('.numbers.statistics #tabs li').addClass('inactive');           
		    $(this).removeClass('inactive');
		    $('.numbers.statistics .columns').hide();
		    $('.numbers.statistics #'+ tab + 'Container').fadeIn('slow');
		    //aria selected
		    $('.numbers.statistics #tabs li').attr('aria-selected', 'false'); 
		    $(this).attr('aria-selected', 'true');
		}
	});
	//statistics tab controls - mobile
	$('.numbers.statistics .mobile-select select').change(function() {
		var value = $(this).val();
		$('.numbers.statistics .columns').hide();
		$('.numbers.statistics #'+ value + 'Container').fadeIn('slow');
	});
	
	//statistics-small tab controls
	$('.numbers.statistics-small ul li:not(:first)').addClass('inactive');
	$('.numbers.statistics-small .columns').hide();
	$('.numbers.statistics-small .columns:first').show(); 
	$('.numbers.statistics-small ul#tabs li').on("click touch keypress", function () {
	    var tab = $(this).attr('id');
		if($(this).hasClass('inactive')){
		    $('.numbers.statistics-small #tabs li').addClass('inactive');           
		    $(this).removeClass('inactive');
		    $('.numbers.statistics-small .columns').hide();
		    $('.numbers.statistics-small #'+ tab + 'Container').fadeIn('slow');
		    //aria selected
		    $('.numbers.statistics-small #tabs li').attr('aria-selected', 'false'); 
		    $(this).attr('aria-selected', 'true');
		}
	});
	//statistics-small tab controls - mobile
	$('.numbers.statistics-small .mobile-select select').change(function() {
		var value = $(this).val();
		$('.numbers.statistics-small .columns').hide();
		$('.numbers.statistics-small #'+ value + 'Container').fadeIn('slow');
	});
	
	//tabbed tab controls
	$('.tabbed ul li:not(:first)').addClass('inactive');
	$('.tabbed .content').hide();
	$('.tabbed .content:first').show(); 
	$('.tabbed ul#tabs li').on("click touch keypress", function () {
	    var tab = $(this).attr('id');
		if($(this).hasClass('inactive')){
		    $('.tabbed #tabs li').addClass('inactive');           
		    $(this).removeClass('inactive');
		    $('.tabbed .content').hide();
		    $('.tabbed #'+ tab + 'Container').fadeIn('slow');
		    //aria selected
		    $('.tabbed #tabs li').attr('aria-selected', 'false'); 
		    $(this).attr('aria-selected', 'true');
		}
	});
	//tabbed tab controls - mobile
	$('.tabbed .mobile-select select').change(function() {
		var value = $(this).val();
		$('.tabbed .content').hide();
		$('.tabbed #'+ value + 'Container').fadeIn('slow');
	});
	
	//////////////////////////////////////////////////////////////////////
	// Program search information
	//////////////////////////////////////////////////////////////////////
	
	//program additional information
	$('.program-listing .programs .tile .expand').on("click touch keypress", function () {
		const closestTile = $(this).closest('.tile');
		var closestTileIsActive = closestTile.hasClass("active");
		var activeTileExists = $('.program-listing .programs .tile.active').length > 0;			

		$(".tile").removeClass('active');			
		if(activeTileExists) {
			$(".program-listing .programs .title .expand.ri-close-line").removeClass('ri-close-line').addClass("ri-information-line");
			$('.info a').attr('tabindex', '-1');
		}
		if(!closestTileIsActive){
			//style changes
			$(this).closest('.tile').toggleClass('active');
			$(this).toggleClass('ri-close-line');
			$(this).toggleClass('ri-information-line');
			//display hidden information
			$('.program-listing .programs .tile .info').css('top','0');
			var infoHeight = $('.program-listing .programs .tile.active').height();
			$('.program-listing .programs .tile.active .info').css('top',infoHeight + 5);
			$('.tile.active .info a').attr('tabindex', '0');
		}
	});
    
    //////////////////////////////////////////////////////////////////////
	// Accordions
	//////////////////////////////////////////////////////////////////////
	
	//accordion controls
	$('.accordion-group').find('.accordion-toggle').click(function(){
		if($(this).hasClass('active')){
			$(this).removeClass("active");
			$(this).next().slideToggle('fast');
			$(this).attr('aria-expanded', 'false');
			//$(this) .attr( 'aria-label', 'Accordion closed.');
			//$(this) .attr( 'aria-describedby', 'Accordion closed.');
		}
		else{
			$(this).addClass("active");
			$(this).next().slideToggle('fast');
			$(this).attr('aria-expanded', 'true');
			//$(this) .attr( 'aria-label', 'Accordion open.');
			//$(this) .attr( 'aria-describedby', 'Accordion open.');
		}
    });
    $('.accordion-group').find('.accordion-toggle').keypress(function(){
		if($(this).hasClass('active')){
			$(this).removeClass("active");
			$(this).next().slideToggle('fast');
			$(this).attr('aria-expanded', 'false');
			//$(this) .attr( 'aria-label', 'Accordion closed.');
			//$(this) .attr( 'aria-describedby', 'Accordion closed.');
		}
		else{
			$(this).addClass("active");
			$(this).next().slideToggle('fast');
			$(this).attr('aria-expanded', 'true');
			//$(this) .attr( 'aria-label', 'Accordion open.');
			//$(this) .attr( 'aria-describedby', 'Accordion open.');
		}
    });
    
    //accordion controls - programs filter
	$('#accordion-programs').find('.accordion-toggle').click(function(){
		if($(this).hasClass('active')){
			$(this).removeClass("active");
			$(this).nextAll( ".accordion-content" ).first().slideToggle('fast');
			$(this).attr('aria-expanded', 'false');
			//$(this) .attr( 'aria-label', 'Accordion closed.');
			//$(this) .attr( 'aria-describedby', 'Accordion closed.');
		}
		else{
			$(this).addClass("active");
			$(this).nextAll( ".accordion-content" ).first().slideToggle('fast');
			$(this).attr('aria-expanded', 'true');
			//$(this) .attr( 'aria-label', 'Accordion open.');
			//$(this) .attr( 'aria-describedby', 'Accordion open.');
		}
    });
    $('#accordion-programs').find('.accordion-toggle').keypress(function(){
		if($(this).hasClass('active')){
			$(this).removeClass("active");
			$(this).nextAll( ".accordion-content" ).first().slideToggle('fast');
			$(this).attr('aria-expanded', 'false');
			//$(this) .attr( 'aria-label', 'Accordion closed.');
			//$(this) .attr( 'aria-describedby', 'Accordion closed.');
		}
		else{
			$(this).addClass("active");
			$(this).nextAll( ".accordion-content" ).first().slideToggle('fast');
			$(this).attr('aria-expanded', 'true');
			//$(this) .attr( 'aria-label', 'Accordion open.');
			//$(this) .attr( 'aria-describedby', 'Accordion open.');
		}
    });
	
	
    //tooltip controls - programs filter
	$('#accordion-programs').find('.ri-question-line').click(function(){
		if($(this).nextAll( ".program-list-category-tooltip" ).first().hasClass('active')){
			$(this).nextAll( ".program-list-category-tooltip" ).first().removeClass("active");
		}
		else{
			$(this).nextAll( ".program-list-category-tooltip" ).first().addClass("active");
		}
    });
    $('#accordion-programs').find('.ri-question-line').keypress(function(){
		if($(this).nextAll( ".program-list-category-tooltip" ).first().hasClass('active')){
			$(this).nextAll( ".program-list-category-tooltip" ).first().removeClass("active");
		}
		else{
			$(this).nextAll( ".program-list-category-tooltip" ).first().addClass("active");
		}
    });	
	
	//////////////////////////////////////////////////////////////////////
	// Navigation / Menu controls
	//////////////////////////////////////////////////////////////////////
	
	//display main navigation dropdown
    $('.navigation .main nav ul li a').hoverIntent(function(){
	    var navNumber = $(this).attr('id');
	    $('.navigation .main .dropdown .drop').delay( 800 ).removeClass('active');
	    $('.navigation .main .dropdown .' + navNumber).delay( 800 ).addClass('active');
		//hide util nav if open
		$(".navigation .utility ul li a").removeClass("active");
	    $(".navigation .utility ul li ul").removeClass("active");
	});
	//hide main navigation dropdown
	$(document).mousemove(function(){
		if($('.navigation .main .dropdown .active').length > 0) {
			if($(".navigation .main:hover").length != 0){
				//do nothing
			} 
			else{
				$('.navigation .main .dropdown .drop').removeClass('active');
			}
		}
	});
	 
	//toggle sidebar mobile menu and hamburger icon
	if($('.mobile-sidebar-nav').length > 0) {
		$('.mobile-sidebar-nav .hamburger').on("click touch keypress", function() {
			$(this).toggleClass('active');
			$(".mobile-sidebar-nav nav").toggleClass('active');
			if($('.mobile-sidebar-nav nav.active').length > 0) {
				$('.mobile-sidebar-nav nav a').attr('tabindex', '0');
				$('.mobile-sidebar-nav .hamburger').attr('aria-label', 'Sub Menu Opened');
				$('.mobile-sidebar-nav .hamburger').attr('aria-describedby', 'Sub Menu Opened');
			}
			else{
				$('.mobile-sidebar-nav nav a').attr('tabindex', '-1');
				$('.mobile-sidebar-nav .hamburger').attr('aria-label', 'Sub Menu Closed');
				$('.mobile-sidebar-nav .hamburger').attr('aria-describedby', 'Sub Menu Closed');
			}
		});
	}
	
	/* if($('.mobile_subnav_container').length > 0) {
		$('.mobile_subnav_container nav.subnavigation .naver-handle').attr('tabindex', '0');
	} */
	
	//append icons to sidebar navigations
	if($('#subnavigation').length > 0){
		$("<i class='ri-arrow-right-s-line' aria-label='Arrow icon' tabindex='-1' aria-hidden='true'></i>").prependTo("#subnavigation ul li a");
		$("<i class='ri-arrow-right-fill' aria-label='Arrow fill icon' tabindex='-1' aria-hidden='true'></i>").prependTo("#subnavigation ul li a");
		$("<i class='ri-arrow-right-s-line' aria-label='Arrow icon' tabindex='-1' aria-hidden='true'></i>").prependTo(".naver-container ul li a");
	}
	if($('#subnavigation-mobile').length > 0){
		$("<i class='ri-arrow-right-s-line' aria-label='Arrow icon' tabindex='-1' aria-hidden='true'></i>").prependTo("#subnavigation-mobile ul li a");
		$("<i class='ri-arrow-right-fill' aria-label='Arrow fill icon' tabindex='-1' aria-hidden='true'></i>").prependTo("#subnavigation-mobile ul li a");
	}
	
	//append icon to mobile breadcrumb
	if($('.breadcrumb_items').length > 0){
		$("<i class='ri-arrow-left-line' aria-label='Previous page' tabindex='-1' aria-hidden='true'></i>").prependTo(".breadcrumb_items");
	}
	
	//////////////////////////////////////////////////////////////////////
	// News complex snippet content filter
	//////////////////////////////////////////////////////////////////////
	
	//toggle news content
	$('.news .controls input:radio[name="controls"]').change(function(){
		if (this.checked && this.value == 'news') {
			$(".news.complex .columns").removeClass('active')
			$(".news.complex .columns.news").addClass('active');
		}
		if (this.checked && this.value == 'instagram') {
			$(".news.complex .columns").removeClass('active')
			$(".news.complex .columns.insta").addClass('active');
		}
		if (this.checked && this.value == 'all') {
			$(".news.complex .columns").removeClass('active')
			$(".news.complex .columns.mix").addClass('active');
		}
	});	

	//////////////////////////////////////////////////////////////////////
	// Resizing columns to match max height content
	//////////////////////////////////////////////////////////////////////
     
	function resize(){
		
		//set col to be same height
		if($('.colleges .match .col').length > 0) {
			var maxHeightCollege = 0;
			$(".colleges .match .col").each(function() {
				$(".colleges .match .col").css('height','auto');
				if ($(this).outerHeight() > maxHeightCollege) {
					maxHeightCollege = $(this).outerHeight();
				}
			}).height(maxHeightCollege);
		}
		//set col to be same height
		if($('.tiles .match .col').length > 0) {
			var maxHeightTile = 0;
			$(".tiles .match .col").each(function() {
				$(".tiles .match .col").css('height','auto');
				if ($(this).outerHeight() > maxHeightTile) {
					maxHeightTile = $(this).outerHeight();
				}
			}).height(maxHeightTile);
		}
	
	}
	$(window).on("resize", resize);  
	$(window).on("orientationchange", function(){ setTimeout(resize, 150);});
	resize();
	
	//////////////////////////////////////////////////////////////////////
	// Slider init and scripts
	//////////////////////////////////////////////////////////////////////
	
	//complex news slider
	$('.news.complex .mobile .slide-wrap').slick({
		centerMode: true,
		centerPadding: '0px',
		slidesToShow: 1,
		autoplay: false,
		autoplaySpeed: 3000,
		speed: 200,
		prevArrow: $('.news.complex .mobile .prev'),
		nextArrow: $('.news.complex .mobile .next')
	});
	$('.news.complex .mobile .prev').attr('tabindex', '0');
	$('.news.complex .mobile .next').attr('tabindex', '0');
	$('.news.complex .mobile .slick-arrow').keypress(function(){
		$(this).click();
	});
    
    //video carousel slider controls
	var videoURL = $('.image.active').attr('data-video');
	$('.video-blocks .controls .video-url').attr('href', videoURL);
	$('.video-blocks .prev').on("click touch keypress", function () {
		
		if($('.video-blocks .carousel .image').length == 3) {
				
			if($('.image.active').is('[data-attr="1"]')){
				$('.image').removeClass('active');
				$('.image').removeClass('prev-slide');
				$('.image').removeClass('next-slide');
				$('.image[data-attr="1"]').addClass("next-slide");
				$('.image[data-attr="2"]').addClass("prev-slide");
				$('.image[data-attr="3"]').addClass("active");
				var videoURL = $('.image.active').attr('data-video');
				$('.video-blocks .controls .video-url').attr('href', videoURL);
			}
			else if($('.image.active').is('[data-attr="2"]')){
				$('.image').removeClass('active');
				$('.image').removeClass('prev-slide');
				$('.image').removeClass('next-slide');
				$('.image[data-attr="1"]').addClass("active");
				$('.image[data-attr="2"]').addClass("next-slide");
				$('.image[data-attr="3"]').addClass("prev-slide");
				var videoURL = $('.image.active').attr('data-video');
				$('.video-blocks .controls .video-url').attr('href', videoURL);
			}
			else if($('.image.active').is('[data-attr="3"]')){
				$('.image').removeClass('active');
				$('.image').removeClass('prev-slide');
				$('.image').removeClass('next-slide');
				$('.image[data-attr="1"]').addClass("prev-slide");
				$('.image[data-attr="2"]').addClass("active");
				$('.image[data-attr="3"]').addClass("next-slide");
				var videoURL = $('.image.active').attr('data-video');
				$('.video-blocks .controls .video-url').attr('href', videoURL);
			}

		}
		if($('.video-blocks .carousel .image').length == 2) {
			
			if($('.image.active').is('[data-attr="1"]')){
				$('.image').removeClass('active');
				$('.image').removeClass('prev-slide');
				$('.image[data-attr="1"]').addClass("prev-slide");
				$('.image[data-attr="2"]').addClass("active");
				var videoURL = $('.image.active').attr('data-video');
				$('.video-blocks .controls .video-url').attr('href', videoURL);
			}
			else if($('.image.active').is('[data-attr="2"]')){
				$('.image').removeClass('active');
				$('.image').removeClass('prev-slide');
				$('.image[data-attr="1"]').addClass("active");
				$('.image[data-attr="2"]').addClass("prev-slide");
				var videoURL = $('.image.active').attr('data-video');
				$('.video-blocks .controls .video-url').attr('href', videoURL);
			}
			
		}

	});
		
	$('.video-blocks .next').on("click touch keypress", function () {
		
		if($('.video-blocks .carousel .image').length == 3) {
				
			if($('.image.active').is('[data-attr="1"]')){
				$('.image').removeClass('active');
				$('.image').removeClass('prev-slide');
				$('.image').removeClass('next-slide');
				$('.image[data-attr="1"]').addClass("prev-slide");
				$('.image[data-attr="2"]').addClass("active");
				$('.image[data-attr="3"]').addClass("next-slide");
				var videoURL = $('.image.active').attr('data-video');
				$('.video-blocks .controls .video-url').attr('href', videoURL);
			}
			else if($('.image.active').is('[data-attr="2"]')){
				$('.image').removeClass('active');
				$('.image').removeClass('prev-slide');
				$('.image').removeClass('next-slide');
				$('.image[data-attr="1"]').addClass("next-slide");
				$('.image[data-attr="2"]').addClass("prev-slide");
				$('.image[data-attr="3"]').addClass("active");
				var videoURL = $('.image.active').attr('data-video');
				$('.video-blocks .controls .video-url').attr('href', videoURL);
			}
			else if($('.image.active').is('[data-attr="3"]')){
				$('.image').removeClass('active');
				$('.image').removeClass('prev-slide');
				$('.image').removeClass('next-slide');
				$('.image[data-attr="1"]').addClass("active");
				$('.image[data-attr="2"]').addClass("next-slide");
				$('.image[data-attr="3"]').addClass("prev-slide");
				var videoURL = $('.image.active').attr('data-video');
				$('.video-blocks .controls .video-url').attr('href', videoURL);
			}

		}
		if($('.video-blocks .carousel .image').length == 2) {
			
			if($('.image.active').is('[data-attr="1"]')){
				$('.image').removeClass('active');
				$('.image').removeClass('prev-slide');
				$('.image[data-attr="1"]').addClass("prev-slide");
				$('.image[data-attr="2"]').addClass("active");
				var videoURL = $('.image.active').attr('data-video');
				$('.video-blocks .controls .video-url').attr('href', videoURL);
			}
			else if($('.image.active').is('[data-attr="2"]')){
				$('.image').removeClass('active');
				$('.image').removeClass('prev-slide');
				$('.image[data-attr="1"]').addClass("active");
				$('.image[data-attr="2"]').addClass("prev-slide");
				var videoURL = $('.image.active').attr('data-video');
				$('.video-blocks .controls .video-url').attr('href', videoURL);
			}
				
		}

	});
	
	//video carousel swipe controls for mobile
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$(".video-blocks .carousel").swipeDetector().on("swipeLeft.sd swipeRight.sd", function(event) {
			if (event.type === "swipeLeft") {
				$(".video-blocks .controls img.next").trigger("click");
			} else if (event.type === "swipeRight") {
				$(".video-blocks .controls img.prev").trigger("click");
			}
	    });
	}
	
	//////////////////////////////////////////////////////////////////////
	// Miscellaneous
	//////////////////////////////////////////////////////////////////////
	
	//randomize intro accent image
	var accent = $('.page-intro .accent');
    var random = Math.floor(Math.random() * accent.length);
    accent.eq(random).addClass('active');
	
	//our people style adjustment if less than three
	if ($(".people .columns .col").length < 3){
		$(".people").addClass('adjust');
	}
	if ($(".people .columns .col").length > 3){
		$(".people").addClass('shrink');
	}
	
	//footer callout style adjustment if more than 1
	if($('.footer-callout a').length > 1) {
		$(".footer-callout").addClass('split');
	}
	
	//page intro accent reposition if no <p>
	if($('.page-intro .copy p').length == 0) {
		$(".page-intro .copy h1").addClass('adjust');
		$(".page-intro .accent.active").addClass('adjust');
	}
	
	//append icon to colleges
	if($('.colleges .full_width_list_block .link_button').length > 0){
		$("<i class='ri-arrow-right-line' aria-label='Arrow icon' tabindex='-1' aria-hidden='true'></i></i>").appendTo(".colleges .full_width_list_block .link_button");
	}
	
	//append icon to areas of study
	if($('.areas_of_study .item_link .inner').length > 0){
		$("<i class='ri-arrow-right-line' aria-label='Arrow icon' tabindex='-1' aria-hidden='true'></i></i>").appendTo(".areas_of_study .item_link .inner");
	}
	
	//add aria label to close buttons
	$('.html5lightbox').on("click touch keypress", function () {	
		$('#html5-close').attr('aria-label', 'Close');
	});
	
	//hide background videos on mobile
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		if($('.video-background').length > 0){
			$(".video-background").remove();
			$(".video-controls").remove();
		}
	}

	//hide background videos on mobile
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		if($('.video-background.youtube').length > 0){
			$(".video-background.youtube").remove();
			$(".video-controls").remove();
		}
	}
	
	/* $(".mobile-links .container .top-nav-bottom .last-link .last-mobile-nav-link ").on("keydown", function (e) {
                if (e.keyCode === 9 || e.keyCode === 40) {
                    e.preventDefault();
                    $(".mobile .container .mobile-nav").focus();
                    console.log("from last link to menu");
                }
            }); */
	
	$(".mobile-links .container .top-nav-bottom #skip-to-main .back-to-top ").on("click", function() {
                $(".mobile .container .mobile-nav").focus();
                    console.log("from last link to menu");
                
            });
	
	// The function actually applying the offset
	function offsetAnchor() {
		if(location.hash.length !== 0) {
			window.scrollTo(window.scrollX, window.scrollY - 170);
		}
	}

	// This will capture hash changes while on the page
	window.addEventListener("hashchange", offsetAnchor);

	// This is here so that when you enter the page with a hash,
	// it can provide the offset in that case too. Having a timeout
	// seems necessary to allow the browser to jump to the anchor first.
	window.setTimeout(offsetAnchor, 1); // The delay of 1 is arbitrary and may not always work right (although it did in my testing).

	/* ==========================================
    Red Scare Box Accessibility
   ========================================== */

   /*
   	var monthNames = ["Jan", "Feb", "Mar", "Apr", "May",
    "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
	]; // Define month names array

	$(".sc-smartboard-datetime").replaceWith(function(){
	    var postDate = $(this).html();
	    var parts = postDate.split('/');

	    var d = new Date(parts[2], parts[1] - 1, parts[0]);

	    return '<div id="alertDate">' + d.getDate() + '</div><div id="alertMonth">' + monthNames[d.getMonth()] + '</div>';
	});
	*/


	/* ==========================================
    College Areas of Study ACCESSIBILITY
   ========================================== */

jQuery(function ($) {

    var i = 0
    if ($("section.areas_of_study.tabber").length > i) {

        function JS_wait_AOStudy() {
            if ($("a.tabber-handle.undergrad.button").length == i) {
                window.setTimeout(JS_wait_AOStudy, 300);
            } else {
                JS_ready_AOStudy();
            }
        }


        function JS_ready_AOStudy() {



            $("section.areas_of_study .row .all-full .tabber-handles .tabber-handle.undergrad.button").on("keydown", function (e) {

                if (e.shiftKey && e.keyCode === 9 || e.keyCode === 38) {
                    console.log("from undergrad to out");

                } else if (e.keyCode === 9 || e.keyCode === 40) {
                    e.preventDefault();
                    if ($(this).hasClass('active')) {
                        e.preventDefault();
                        $("section.areas_of_study .row .tabs #section_1 .mobile-full.tablet-full.desktop-4:first .item:first .item_link").focus();
                        console.log("from undergrad to grad first");
                    } else {
                        e.preventDefault();
                        $("section.areas_of_study .row .tabs #section_2 .mobile-full.tablet-full.desktop-4:first .item:first .item_link").focus();
                        console.log("from undergrad to first");
                    }
                }


            });

            $("section.areas_of_study .row .all-full .tabber-handles .tabber-handle.grad.button").on("keydown", function (e) {

                if (e.shiftKey && e.keyCode === 9 || e.keyCode === 38) {
                    console.log("from grad to out");

                } else if (e.keyCode === 9) {
                   e.preventDefault();
                    if ($(this).hasClass('active')) {
                        e.preventDefault();
                        $("section.areas_of_study .row .tabs #section_2 .mobile-full.tablet-full.desktop-4:first .item:first .item_link").focus();
                        console.log("from grad to ugrad first");
                    } else {
                        e.preventDefault();
                        $("section.people .container .columns .col:first-of-type a").focus();
                        console.log("from grad to out");
                    }
                } else if (e.keyCode === 40) {
					e.preventDefault();
                    if ($(this).hasClass('active')) {
                        e.preventDefault();
                        $("section.areas_of_study .row .tabs #section_2 .mobile-full.tablet-full.desktop-4:first .item:first .item_link").focus();
                        console.log("from grad to ugrad first");
                    } else {
                        e.preventDefault();
                        $("section.people h4:first-of-type").focus();
                        console.log("from grad to out");
                    }
				}
				
				
            });

			//video carousel swipe controls for mobile -- DOES NOT APPEAR TO WORK FOR ACCESSIBILITY
				/* if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
					$("section.areas_of_study .row .all-full .tabber-handles .tabber-handle.undergrad.button").swipeDetector().on("swipeLeft.sd swipeRight.sd", function(event) {
						if (event.type === "swipeLeft") {
							$("section.people h4:first-of-type").focus();
						} else if (event.type === "swipeRight") {
							$("section.areas_of_study .row .all-full .tabber-handles .tabber-handle.undergrad.button").focus();
						}
					});
				} */



            $("section.areas_of_study .row .all-full .tabber-handles .tabber-handle.grad.button").on("keydown", function (e) {
                if (e.keyCode === 37) {
                    e.preventDefault();
                    $("section.areas_of_study .row .all-full .tabber-handles .tabber-handle.undergrad.button").focus();
                    console.log("from grad to undergrad");
                }
            });
            $("section.areas_of_study .row .all-full .tabber-handles .tabber-handle.undergrad.button").on("keydown", function (e) {
                if (e.keyCode === 39) {
                    e.preventDefault();
                    $("section.areas_of_study .row .all-full .tabber-handles .tabber-handle.grad.button").focus();
                    console.log("from undergrad to grad");
                }
            });





            $("section.areas_of_study .row .tabs #section_2 .mobile-full.tablet-full.desktop-4:first .item:first .item_link").on("keydown", function (e) {
                if (e.shiftKey && e.keyCode === 9 || e.keyCode === 38) {
                    e.preventDefault();
                    $("section.areas_of_study .row .all-full .tabber-handles .tabber-handle.grad.button").focus();
                    console.log("from first to grad");
                }
            });




            $("section.areas_of_study .row .tabs #section_1 .mobile-full.tablet-full.desktop-4:first .item:first .item_link").on("keydown", function (e) {
                if (e.shiftKey && e.keyCode === 9 || e.keyCode === 38) {
                    e.preventDefault();
                    $("section.areas_of_study .row .all-full .tabber-handles .tabber-handle.undergrad.button").focus();
                    console.log("from first to undergrad");
                }
            });




            $("section.areas_of_study .row .tabs #section_1 .mobile-full.tablet-full.desktop-4:last .item:last .item_link").on("keydown", function (e) {
                if (e.shiftKey && e.keyCode === 9) {
                    console.log("from last ugrad to second last ugrad");
                } else if (e.keyCode === 9) {
                    e.preventDefault();
                    $("section.areas_of_study .row .all-full .tabber-handles .tabber-handle.grad.button").focus();
                    console.log("tab from last ugrad to grad tab");
                } else if (e.keyCode === 40) {
                    $("section.areas_of_study .row .all-full .tabber-handles .tabber-handle.grad.button").focus();
                    console.log("arrow from last ugrad to grad tab");
                }
            });

        }

        $(document).ready(JS_wait_AOStudy);
    }
	

	});
	
	
	
});//(document).ready