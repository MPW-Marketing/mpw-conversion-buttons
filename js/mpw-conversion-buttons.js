jQuery('.conv-btn').click(function(e){
	e.preventDefault(); 
	if(jQuery(this).children("a").prop("target") === "_blank"){
		window.open(jQuery(this).children("a").prop("href"),"_blank");
	} else {
		window.location.href = jQuery(this).children("a").prop("href");
	}	
}
);
