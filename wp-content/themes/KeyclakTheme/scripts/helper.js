let qs = function(selector) {
	return document.querySelector(selector);
}

HTMLElement.prototype.qs  = function(selector){
	return this.querySelector(selector);
}

let qsa = function(selector) {
	return document.querySelectorAll(selector);
}
HTMLElement.prototype.qsa  = function(selector){
	return this.querySelectorAll(selector);
}


HTMLElement.prototype.parentFinder = function(clName){
	if(this.classList.contains(clName)){
		return this;
	} else {
		if(this.parentElement != null){
			return this.parentElement.parentFinder(clName);			
		}
	}
}

function ajax_handler(form_id, action, callback, err_callback) {
		var form = jQuery(form_id)[0];
	    var data = new FormData(form);
	    data.append("action", action);

	    jQuery.ajax({
	        type: "POST",
	        enctype: 'multipart/form-data',
	        url: ajaxurl,
	        data: data,
	        processData: false,
	        contentType: false,
	        cache: false,
	        timeout: 600000,
	        success: function (data) {
	        	callback(data);
	        },
	        error: function (e) {
	        	err_callback(e);
	        }
	    });
}