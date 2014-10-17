<!DOCTYPE HTML>
<?php
  
?>
<html class=" js">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Twitbay</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<link href="http://twitter.com/phoenix/iefavicon.ico" rel="shortcut icon" type="image/x-icon">
		<link rel="stylesheet" href="css/phoenix_core_logged_out.css" type="text/css" media="screen">
		<style charset="utf-8" class="lazyload">
			@import "css/phoenix_more.bundle.css";
		</style>
		
		<!-- TODO - make background image random -->
		<!-- Available backgrounds:
					background1.jpg
					background2.jpg
					background3.jpg
					background4.jpg
		-->
		
		<style id="user-style-Hicksdesign-bg-img">
  		body.user-style-Hicksdesign {
				background-image: url(img/background<?php echo rand(1,4);?>.jpg);
      }
		</style>
		
		<!-- End of BG image -->
	</head>
	<body class="logged-out  mozilla user-style-Hicksdesign">
		<div class="route-profile" id="doc">
    	<div id="top-stuff">
      	<div id="top-bar-outer">
      		<div id="top-bar-bg"></div>
          <div id="top-bar">
            <div style="left: 0px;" class="top-bar-inside">
            	<div class="static-links">
  							<div id="logo">
    							<a href="http://localhost/">
    								<img src="img/logo.png" alt="nope"/>
    							</a>
  							</div>			
							</div>
							<div class="active-links">
    						<div id="session">
          						@yield('loginForm')
    						</div>
							</div>
            </div>
          </div>
        </div>
      </div>
      <div id="page-outer">
      	<div class="profile-container" id="page-container">
      		<div>
      			<div style="min-height: 683px;" class="main-content"> 
							<div class="profile-header">
  							<div class="profile-info clearfix">
   	 							<div class="profile-image-container">
      							<img src="img/megaphone.png" alt="Twitbay">
    							</div>
    							<div class="profile-details">
      							<div class="full-name">
  										<h2>Twitbay Listings</h2>
  									</div>
      						<div class="screen-name-and-location">
      							<span class="screen-name screen-name-Hicksdesign pill">@Twitbay</span>
      							Cardiff, Wales, UK
      						</div>
      						<div class="bio">
      							Only the finest products, services, bric-a-brac and budget bargains - all served 
      							with a dash of php goodness...
      						</div>
      						<div class="url">
      							<a target="_blank" rel="me nofollow" href="http://www.spiderstudios.co.uk/">http://www.spiderstudios.co.uk/</a>
      						</div>
    						</div>
  						</div>
    					<ul class="stream-tabs">
      					<li class="stream-tab stream-tab-tweets active">
        					<a class="tab-text">Posts</a>
      					</li>
    					</ul>
						</div>
    				<div class="stream-manager">
  						<div class="js-stream-manager" id="profile-stream-manager">
  							<div class="stream-container">
  								<div class="stream stream-user">
  									<div id="stream-items-id" class="stream-items">

  									
  										<!-- TODO show all postings -->
  										<!-- TODO show only those posts from user in URL -->

  										
  										<!-- TODO - start of a posting - note that all postings will need to be created from DB -->
											<div media="true" class="js-stream-item stream-item">
												<div class="stream-item-content tweet js-actionable-tweet stream-tweet">
													<div class="tweet-image">
														<img src="img/userPic.jpg" alt="Post pic" class="user-profile-link" height="48" width="48">
													</div>
													<div class="tweet-content">
														<a class="tweet-screen-name user-profile-link">Tom Monson</a>
														<p class="tweet-text js-tweet-text">I have the latest Lady-Gaga album 
														for sale - hurry now now nownow now, you must buy it no-ow!</p>
														<p class="tweet-timestamp">24 minutes ago</p>
                          </div>  
                        </div>
                      </div>  

                        <!-- our db posting -->
                        <div media="true" class="js-stream-item stream-item">
                        <div class="stream-item-content tweet js-actionable-tweet stream-tweet">
                            <div class="tweet-image">
                              <img src="img/userPic.jpg" alt="Post pic" class="user-profile-link" height="48" width="48">
                            </div>
                            <div class="tweet-content">
                              <a class="tweet-screen-name user-profile-link">Adam Jama</a>
                              <p class="tweet-text js-tweet-text">
                                The quick brown fox jumps over the lazy dog.
                                @foreach ($postings as $posting)
                                hello
                                  @include('viewPost')
                                @endforeach
                              </p>
                              <p class="tweet-timestamp">86.66m 42.444s 10442ms ago</p>    
													  </div>
                          </div>
                        </div>  
                      </div>  
                    </div>
                  </div>
                </div>
              </div>      
                        								
											<!-- end of item -->
	
					<div class="dashboard profile-dashboard">
      			<div class="component">
      				<div class="signup-call-out">
      					<h1>
      						<span>Twitbay Users</span>
      					</h1>
    						<h2>Don't miss products from your favourite users!</h2>
    						
    						<!-- TODO - List all Twitbay users in DB -->
                <?php

                  //$queries->listUsers();
                ?>
    						<!-- require a PHP script to list users? -->
    						
    						<!-- End of list all Twitbay users in DB -->
    						<hr />    
    						
    						<div class="profile-subpage-call-out">
    							
    							<!-- TODO - If logged in, display text box where user can post -->

      							<!-- Note that in our implementation, the posting form does that check -->
      							<!-- require ('postingForm.php') -->
    							
    							<!-- End of posting form -->
    							
    							
    							<!-- TODO - If not logged in, display a sign up form -->
    							
    							  <!-- Note that in our implementation, the 'isloggedin' check is done in the script  -->
    							  <!-- require ('signUpForm.php') -->
    							
    							<!-- End of signup form -->
    							
    							<hr />
    							
    							<!-- TODO - If logged in, display a summary of cart stats, together with
    										a link to enable folks to checkout -->
    										
    							<!-- require a script to display cart details -->
    							
    							<!-- End of cart details -->    
    					<hr class="component-spacer">
    				</div>
    				<div class="component">
    					<div class="dashboard-profile-annotations clearfix">
    						<h2 class="dashboard-profile-title">
    							<img src="img/megaphone.png" alt="Acme Rocket Bikes" class="profile-dashboard" width="24">
    								Twitbay Stats
    						</h2>
  						</div>
							<ul class="user-stats clearfix">
							
								<!-- TODO - display site stats pulled from database -->
							
    						<li>
    							<a class="user-stats-count">99<span class="user-stats-stat">Users</span></a>
    						</li>
    						<li>
    							<a class="user-stats-count">9,000<span class="user-stats-stat">Posts</span></a>
    						</li>
								<li>
									<a class="user-stats-count">£100,000<span class="user-stats-stat">Sales</span></a>
								</li>
							</ul>
							
							<!-- end of stats -->
							
							<hr class="component-spacer">
						</div>
  				</div>
				</div>
				<hr class="component-spacer">
			</div>
		<div class="component">
			<hr class="component-spacer">
		</div>
		<!--[if lte IE 6]>
  		<script>using('bundle/ie6').load();</script>
		<![endif]-->
	</body>
</html>