window.onload = function()
{   
   randusy.construct("#gallery");
   randusy.construct("#contact");
   randusy.construct("#aboutme"); 
	var SR = "../";
	var CTL = "../controller/";
	var VW = "../view/";
	var IMG = "../application/images/";
	
	randusy.linkTo("#home",SR);
	randusy.linkTo("#blog","http://www.randusy.blogspot.com");
	randusy.toggle("#mainMenuButton","#navigation");
	randusy.toggle("#closeButton","#navigation");
	 
	randusy.toggle("#login","#loginForm");
	randusy.toggle("#closeLogin","#loginForm"); 
 
    randusy.checkInput("#loginMail","#loginMailError","Email Is Required");
    randusy.checkInput("#loginPassword","#loginPasswordError","Password Is Required");
   
   randusy.ajaxLoad("#signUpHere","#ajaxHolder",CTL+"signup.php","Sign Up Here..!");
   randusy.ajaxLoad("#cv","#ajaxHolder",CTL+"cv.php","Curriculum Vitae");
   
   $("#agree").click(function(){
   	$("#signUpTerms").html("These are the terms and condition as per our site");
   });
   
   $("#loginNowButton").click(function(event){
   	event.preventDefault();
   var u = randusy.check("#loginMail","#loginMailError","Email Is Required");
   var p = randusy.check("#loginPassword","#loginPasswordError","Password Is Required");
   	if(u && p)
   	{
   		var un = $("#loginMail").val(); var pw = $("#loginPassword").val();
   		randusy.ajaxSubmit("#notification",randusy.ctl+"login.php?un="+un+"&pw="+pw);
   	}
   });
   
  	
   
   
};