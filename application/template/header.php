<div id="header" class="backgroundGradient" >
	 
		<div class="floatLeft">
			<button id="mainMenuButton" title="Hit To Toggle The Navigation Panel">Main Menu</button>
		</div>
		<div class="floatLeft">
			<h3><?php echo SN?></h3>
		</div>
		<div class="floatLeft">
			 
		</div> 
		
		<div class="floatRight" id="loginDiv">
			<?php
			$currentUser = new User();
			if($currentUser->isLogedIn())
			{
					$get = new Getter();
				try{
					$name = $get->getUserName();
				}catch(Exception $e)
				{
					$name = $e->getMessage();
				}
				$h = Getter::getHash("home.php");
				$l = Getter::getHash("frands");
				echo "<a style='color:white;' href='".VW."?gedknmiihkfjkjhjdcyfhskkfgh=".$h."&logout=".$l."'>".$name.' (Logout)</a>';
			}else
			{
				echo '
				<button id="login" title="Hit the button to toggle the Login Form">Login</button>
			<form class="hide border white marg5 backShadowRounded" id="loginForm">
				<button id="closeLogin" class="floatRight" title="Close The Login Form">Close</button>
				 <aside><p>Login Here</p></aside>
					<aside><input placeholder="Email" type="email" id="loginMail" title="Enter Your Email"/></aside>
					<aside><p id="loginMailError"></p></aside>
				<aside><input placeholder="Password" id="loginPassword" type="password" title="Enter Your Password"/></aside>
				<aside><p id="loginPasswordError"></p></aside>
				<aside><button id="loginNowButton" title="Hit The Button To Login To the Site Now">Login Now</button>
				 </aside>
			  <p>Don\'t have an Account?</p>
			<p><a id="signUpHere">Sign Up Here.</a></p>			
			</form>
			';
			}
			
			?>
		</div>
</div>
