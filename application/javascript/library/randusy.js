var randusy = 
{ 
	"SN" : "Randu Karisa",
	"ctl" : "../controller/",
	"vw" : "../view/",
	"img" : "../application/images/",
	linkTo : function(selector,href)
	{
		$(selector).click(function(event){
			event.preventDefault();
			location.href = href; 
		});
	},
	toggle : function(selector,target)
	{
		$(selector).click(function(event){
			event.preventDefault();
			$(target).toggle("slow"); 
		});
	},
	check : function(selector,errorSelector,error)
 	{  
 		var status = false;
		if($(selector).val() == "")
		{ 
			$(errorSelector).html(error)
			.css({"background":"yellow","padding":"5px","border-radius":"5px"}); 	
		}else
		{  status = true;
			$(errorSelector).hide("slow");	
		} 
		return status;
 	},
	checkInput : function(selector,errorSelector,error)
 	{  
 		var status = false;
		$(selector).blur(function(){
		if($(selector).val() == "")
		{ 
			$(errorSelector).html(error)
			.css({"background":"yellow","padding":"5px","border-radius":"5px"}); 	
		}else
		{  status = true;
			$(errorSelector).hide("slow");	
		}}); 
		return status;
 	},
 	checkFormInput : function(selector,errorSelector,error){
 		var status = false;
 		if($(selector).val() == "")
		{ 
			$(errorSelector).html(error)
			.css({"background":"yellow","padding":"5px","border-radius":"5px"}); 	
		}else
		{  status = true;
			$(errorSelector).hide("slow");	
		}
		return status;
 	},
 	checkPassword : function(selector,errorSelector,error,errorOkay)
 	{ 
 		var status = false;
 		$(selector).blur(function(){ 			  
			if($(selector).val().length < 8)
			{
				$(errorSelector).html("Password Must Be More Than 8 Characters")
			.css({"background":"yellow","padding":"5px","border-radius":"5px"});		
			}else
			{
				$(errorSelector).text(errorOkay)
				.show("fast").css({"background": "green","padding":"5px","border-radius":"5px"});
				status = true;
			}
 			 
 		}); 
 		return status;
 	},
 	confirmPassword : function(selector,error,password)
 	{
 			var status = false;
 		$(selector).blur(function(){
 			if($(password).val() == "")
 			{
 				$(error).text("Empty Password Not Recommended")
 				.show("fast").css({"background": "yellow","padding":"5px","border-radius":"5px"});
 			}else
 			{
 				if($(selector).val() === $(password).val())
	 			{
	 				$(error).text("Password Matches")
	 				.show("fast").css({"background": "green","padding":"5px","border-radius":"5px"});
	 				status = true;
	 			}else
	 			{
	 				$(error).text("Password Doesn't Match")
 					.show("fast").css({"background": "red","padding":"5px","border-radius":"5px"});
	 			}
 			}
 		});
 		return status;
 	},
	ajaxLoad : function(selector,taget,url,title)
		{
			$(selector).click(function(event){
				$("#load").toggle();
				event.preventDefault(); 
				var r;
					if(window.XMLHttpRequest)
					{
						r = new XMLHttpRequest();
					}else if(window.ActiveXObject)
					{
						r = new ActiveXObject("Microsoft.XMLHTTP");
					}
				r.open("GET",url,true);
				r.send(null);
				r.onreadystatechange = function()
				{
					if(r.readyState === 4)
					{ 
						$("title").text(randusy.SN+" | "+title);
						$(taget).html(r.responseText);  
						$("#load").toggle();
					} 		
				};
			});
			
		},
	construct : function(selector)
	{
		$(selector).click(function(event){alert("Still Under construction");event.preventDefault();});
	},
	showLinks : function(selector,target,html)
	{
		$(selector).click(function(){
			$(target).toggle("fast");
			$(target).html(html);
		});
	},
	ajaxSubmit : function(taget,url)
	{		
		$("#load").toggle();
		var r;
			if(window.XMLHttpRequest)
			{
				r = new XMLHttpRequest();
			}else if(window.ActiveXObject)
			{
				r = new ActiveXObject("Microsoft.XMLHTTP");
			}
		r.open("GET",url,true);
		r.send(null);
		r.onreadystatechange = function()
		{
			if(r.readyState === 4)
			{ 
				  $(taget).html(r.responseText);  
				  $("#load").toggle();
			} 		
		};
				
	}
};