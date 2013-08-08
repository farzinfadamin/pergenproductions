$(document).ready(function(){
	
	contact.init();
	
	var address = '8206 Leesburg Pike ,Suite 209, Vienna, VA 22182';
	var map = $("#map_canvas").gMap({
		address: address,
		zoom: 16,
		mapType: 'SATELLITE'
	});
	map.getLatLng(address,function( latLng, success, error  ){
	  	map.addMarkers([{
			click: function(){},
			latitude: latLng.lat(),
			longitude: latLng.lng()
	  	 }]);
	});
	
});


var contact = {
	
	enable: true,
	loadingMsg: $("<span class='status loadingMsg'>Sending message please wait...</span>"),
	successMsg: $("<span class='status success'>Your message has been successfully sent</span>"),
	errorMsg: $("<span class='status error'>Message was not sent, Please try Again</span>"),
	$button: null,
	init: function(){
	
		this.$button = $(".contact-form a.send-btn");
		this.events();
		$(':text,textarea').val('');	
		$("select").find("option:first").attr("selected","selected");

		$(":text,textarea").bind("blur keyup",$.proxy(this,"validate"));
		$("select").change($.proxy(this,"validate"));
	},

	validate: function(e){
		$that = $(e.currentTarget);
		
		  if($.trim( $that.val() ) !== "" &&  $that.attr("id") != "emailAddr" ){
                  	      $that.parents("div").removeClass("error");
                              $that.next(".notification").remove();     
		   }else if( $that.attr("id") == "emailAddr" && /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test($that.val()) === true){
			     $that.parents("div").removeClass("error");
                              $that.next(".notification").remove();   
		  }
	},
		
	events: function(){
		this.$button.click( $.proxy(this,"submit") );
	},
	
	submit: function(event){
		event.preventDefault();
		
		if( !this.enable ){ return }
		var status = true;
		$(".contact-form .required").each(function(){
		//	if( !status ) {return; }
			if( $.trim( $(this).val() ) === "" ){
				//alert("Please enter your " + $.trim($(this).prev().text()));
				status = false;
				//return;
				$(this).parents("div").addClass("error");
				if(!$(this).next('.notification').length) $(this).after("<span class='notification'>Please enter a valid "+$.trim($(this).prev().text())+"<span>");
			}else if( $(this).attr("id") == "emailAddr" && /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test($(this).val()) === false){
				//alert("Please enter a valid email address");
				status = false;
                                $(this).parents("div").addClass("error");
                               if(!$(this).next('.notification').length)  $(this).after("<span class='notification'>Please enter a valid email address<<span>");
			}else{
				 $(this).parents("div").removeClass("error");
				 $(this).next(".notification").remove();
			}
		
		});
		if( !status ) {return; }
		
		var $form = $(event.currentTarget).parents("form");
		MBOX.jsonRPC({
			scope: this, 
			api: 'Contact',
			method: 'contactUs',
			data: { params: $.deparam.querystring($form.serialize()) },
			success: function( data, textStatus, jqXH ){
				if( data.SiteData.Contact_contactUs.success ){
					this.hideLoading();
					this.loadSucecssMsg();
					$form.find(':text,textarea').val('');
					$form.find(':checkbox').attr('checked',false);
					$form.find("select").find("option:first").attr("selected","selected");
				}else{
					this.error();
				}
			},
			error: this.error,
			beforeSend: function(){
				this.disableForm();
				this.showLoading()
			}
		});
	},
	
	error: function(){
		
		this.hideLoading();
		this.loadErrorMsg()		
		
	},
	
	
	disableForm: function(){
		this.$button.attr("disabled",true);
		this.enable = false;
	},
	
	enableForm: function(){
		this.$button.removeAttr("disabled");
		this.enable = true;		
	},
	
	showLoading: function(){
		this.$button.parent("div").prepend( this.loadingMsg.clone() );
	},
	
	hideLoading: function(){
		this.$button.parent("div").find(".loadingMsg").remove();
	},
	
	loadSucecssMsg: function(){
		var $successMsg = this.successMsg.clone();
		$successMsg.hide();
		this.$button.parent("div").prepend( $successMsg );
		$successMsg.fadeIn(500).delay('3000').fadeOut(500,$.proxy(function(){
			$successMsg.remove();
			this.enableForm();
		},this));
	},
	
	loadErrorMsg: function(){
		var $errorMsg = this.errorMsg.clone();
		$errorMsg.hide();
		
		this.$button.parent("div").prepend( $errorMsg );
		$errorMsg.fadeIn(500).delay('3000').fadeOut(500,$.proxy(function(){
			$errorMsg.remove();
			this.enableForm();
		},this));	
		
	}
};