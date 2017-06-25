//Main JS core


//main variables
var btn_up = $('#go-up'),
	sticky_menu = $('#sticky-menu');

//on document ready, launch all main functions 
$(document).ready(function(){
	launch_core();
})

//launch all the main functions
function launch_core(){

	scrollFunction()
	window.onscroll = function() {scrollFunction()};

}

//scroll function which applies new properties for document elements
function scrollFunction() {

	//define in which height of the page, the function will display the new properties
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        btn_up.css({'display':'block'});
        sticky_menu.css({'display':'block'});
    } else {
    	btn_up.css({'display':'none'});
    	sticky_menu.css({'display':'none'});
    }
}

//sends user to the topper part of the page
function go_up(){
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}


