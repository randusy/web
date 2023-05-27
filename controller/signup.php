<script type="text/javascript">
	randusy.checkInput("#firstname","#firstNameError","Firstname Required");
	randusy.checkInput("#secondname","#secondNameError","Second Name Required");
	randusy.checkInput("#thirdname","#thirdNameError","Third Name Required");
	randusy.checkInput("#email","#emailError","Email Required");
	randusy.checkInput("#password","#pwError","Password Required"); 
	 
	$("#signUpForm").submit(function(event){
		event.preventDefault();
		var fn = randusy.checkFormInput("#firstname","#firstNameError","Firstname Required");
		var sn = randusy.checkFormInput("#secondname","#secondNameError","Second Name Required");
		var tn = randusy.checkFormInput("#thirdname","#thirdNameError","Third Name Required");
		var em = randusy.checkFormInput("#email","#emailError","Email Required");
		var pw = randusy.checkFormInput("#password","#pwError","Password Required"); 
		if(fn && sn && tn && em && pw)
		{ 
		 	fn = $("#firstname").val();
			sn = $("#secondname").val();
			tn = $("#thirdname").val();
			em = $("#email").val();
			pw = $("#password").val();
			randusy.ajaxSubmit("#subResponce",randusy.ctl+"handler.php?fn="+fn+"&sn="+sn+"&tn="+tn+"&em="+em+"&pw="+pw);
	 	}else
		{
			return false;
		}
	}); 
</script>
<div id="" class="">	
	<form action="" id="signUpForm">
	 		<h3>Sign Up Here</h3>
	<div>  
	<aside> 
	</aside> 
	<aside><input type="text" placeholder="Firstname" value="<?php if(isset($_REQUEST['firstname'])){echo $_REQUEST['firstname'];}?>" name="firstname" id="firstname"  /></aside>
	<aside><p id="firstNameError"></p></aside>
	</div><div> 
	<aside><input type="text" placeholder="Second Name" value="<?php if(isset($_REQUEST['secondname'])){echo $_REQUEST['secondname'];}?>" name="secondname" id="secondname" /></aside>
	<aside><p id="secondNameError"></p></aside>
	</div><div> 
	<aside><input type="text" placeholder="Third Name" value="<?php if(isset($_REQUEST['thirdname'])){echo $_REQUEST['thirdname'];}?>" name="thirdname" id="thirdname"  /></aside>
	<aside><p id="thirdNameError"></p></aside>
	</div><div> 
	<aside><input type="email" placeholder="Email" value="<?php if(isset($_REQUEST['email'])){echo $_REQUEST['email'];}?>" name="email" id="email"   /></aside>
	<aside><p id="emailError"></p></aside>
	</div><div> 
	<aside><input type="password" placeholder="Password" name="password" id="password"  /></aside>
	<aside><p id="pwError"></p></aside>
	</div><div> 		
	<aside><input type="password" placeholder="Confirm Password" id="passwordConfirm"  /></aside>		
	<aside><p id="passwordConfirmError" ></p></aside>
	</div>
		<div >
			<aside>
				<input type="checkbox" /><a id="agree">I agree with terms and condition</a>
				<div id="signUpTerms"></div> 
			</aside>
		</div>		
	<div>	 
	</div><div>
	<input name="singUp" type="submit" id="submit"  value="Register Now"/>
	</div> 
	<div id="subResponce"></div>
	</form>
	
</div>