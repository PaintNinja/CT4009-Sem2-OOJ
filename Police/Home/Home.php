<?php
	require '../../Global/common.php';
	checkLogin();
?>
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr"> <!-- Hint to browsers that this page is in the "en" language region with left-to-right text direction. -->
    <head>
        <title>Home - Gloucestershire Constabulary</title>
        <meta charset="UTF-8"> <!-- Tell browsers that this code is written in the UTF-8 character set -->
		<meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- Hint to Internet Explorer to use the latest engine available and not to fallback to compatibility mode -->
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Tell mobile browsers to scale this site to the actual device's width and scale factor, instead of treating it as a desktop site -->
		
        <!--<link rel="stylesheet" href="https://getmwf.com/local/css/main.css">
		<link rel="stylesheet" href="https://assets.onestore.ms/cdnfiles/external/mwf/short/v1/latest/css/mwf-west-european-default.min.css" />-->
		<link rel="stylesheet" href="../../Global/Framework/getmwf.com/local/css/main.css">
		<link rel="stylesheet" href="../../Global/Framework/assets.onestore.ms/cdnfiles/external/mwf/short/v1/latest/css/mwf-west-european-default.min.css" />
        
        <link href="../../Global/GlobalPublic.css" rel="stylesheet">
		<link href="Home.css" rel="stylesheet">
        
        <meta name="description" content="Homepage of the website for Gloucestershire Constabulary to reduce bicycle theft.">
        <meta name="keywords" content="Gloucestershire Constabulary, Constabulary">
        <meta name="author" content="Oscar Nardone">
    </head>
    <body>
        <!-- Accessibility requirement -->
        <a class="m-skip-to-main" href="#mainContent" tabindex="0">Skip to main content</a>

        <!-- Universal header -->
        <header class="c-universal-header theme-dark theme-transparent" role="banner">
            <div data-grid="container stack-2" style="margin-top: 16px;">
                <div data-grid="col-12">
                    <div data-grid="col-6">
                            <a href="../Home/Home.html" class="c-logo" aria-label="Logo">
                                <img class="c-image" src="../../Global/Images/small-long-logo3.png" alt="Gloucestershire Constabulary logo" itemscope itemtype="http://schema.org/ImageObject">
                                <span>Company</span>
                            </a>
                    </div>
                    <div data-grid="col-6" style="display: flex; flex-direction: column; align-items: right;">							
						<div aria-describedby="profileDropdown" id="menuBarProfile" class="m-persona-3" style="background: rgba(0, 0, 0, 0.5); box-shadow: rgba(0, 0, 0, 0.5) 0 0 4px 4px;">
							<div>
								<picture role="img" aria-label="Microsoft profile picture">
									<img class="c-image f-round personaProfilePic" src="" height="48" width="48" alt="Profile picture" id="personaSize3">
								</picture>
							</div>
							<div style="text-shadow: #000 0 0 4px;">
								<h5 class="c-heading personaFullName"><a>Oscar Nardone</a></h5>
								<p class="c-subheading theme-transparent-subtext brighter personaEmail">oscarnardone@glos.ac.uk</p>
							</div>
						</div>
						<div class="c-flyout" id="profileDropdown" role="tooltip" data-js-flyout-placement="bottom" data-js-flyout-dismissible="false" aria-hidden="true">
							<ul id="profileDropdownMenu" role="menu" class="c-menu" aria-hidden="false">
								<li class="c-menu-item" role="presentation">
									<a aria-checked="false" role="menuitem" href="../../Global/YourProfile/YourProfile.php">Your profile</a>
								</li>
								<li class="c-menu-item submenu" role="presentation">
									<a aria-checked="false" role="menuitem" href="../YourProfile/YourProfile.html#contactDetails">Contact details</a>
								</li>
								<li class="c-menu-item submenu" role="presentation">
									<a aria-checked="false" role="menuitem" href="../YourProfile/YourProfile.html#accountDetails">Account actions</a>
								</li>
								<li class="c-menu-item submenu" role="presentation">
									<a aria-checked="false" role="menuitem" href="../YourProfile/YourProfile.html#accessibilitySettings">Accessibility</a>
								</li>
								<li class="c-menu-item" role="presentation">
									<a aria-checked="false" role="menuitem" href="../../Global/Logout/Logout.php">Logout</a>
								</li>
							</ul>
						</div>
					</div>
                </div>
            </div>
		</header>

        <!-- Main page content should be wrapped with semantically meaningful html elements (e.g.: article, main) whenever possible. A div element can be used as long as it also contains a role="main" for Accessibility. -->
        <main id="mainContent" class="transparentPositioning theme-dark">
            <!-- Modules should be stacked with a sibling relationship in order to programmatically adjust their position, margins, and padding. -->

			<section class="m-hero-item f-x-left f-y-bottom context-software f-mask-100 theme-dark" itemscope itemtype="http://schema.org/SoftwareApplication" style="background: transparent;">
				<div>
					<div>
						<h1 class="c-heading">Welcome</h1>
						<p class="c-subheading">Let us guide you through the bicycle registration process, and you'll be done before you know it.</p>
						<div class="c-group">
							<a href="#" class="c-call-to-action c-glyph">
								<span>START GUIDE</span>
							</a>
							<a href="#" class="c-call-to-action c-glyph">
								<span>SKIP</span>
							</a>
						</div>
					</div>
				</div>
			</section>

			<br><br>
			<div class="m-content-placement" data-grid="col-12" style="text-shadow: #000 0 0 4px; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.8) 60%);">
				<div data-grid="col-12 stack-3">
					<div data-grid="col-6 pad-6x">
						<div data-grid="col-6">
							<section class="m-content-placement-item f-size-medium">
								<div>
									<h3 class="c-heading">View stolen bikes list</h3>
									<p class="c-paragraph">See a list of stolen bikes and update their investigation status here.</p>
									<a href="../ViewStolenList/ViewStolenList.php" class="c-call-to-action c-glyph">
										<span>VIEW STOLEN BIKES</span>
									</a>
								</div>
							</section>
						</div>
						<div data-grid="col-6">
							<section class="m-content-placement-item f-size-medium">
								<div>
									<h3 class="c-heading">Update investigation status</h3>
									<p class="c-paragraph">If you believe a registered bicycle has been lost or stolen, report a theft and get status updates on the investigation.</p>
									<a href="../UpdateInvestigationStatus/UpdateInvestigationStatus.php" class="c-call-to-action c-glyph">
										<span>UPDATE STATUS</span>
									</a>
								</div>
							</section>
						</div>
					</div>
					<div data-grid="col-6 pad-6x">
						<div data-grid="col-6">
							<section class="m-content-placement-item f-size-medium">
								<div>
									<h3 class="c-heading">Your profile</h3>
									<p class="c-paragraph">Add and change your personal details, such as your contact details, preferred method of contact and profile picture.</p>
									<a href="../../Global/YourProfile/YourProfile.php" class="c-call-to-action c-glyph">
										<span>VIEW PROFILE</span>
									</a>
								</div>
							</section>
						</div>
						<div data-grid="col-6">
							<section class="m-content-placement-item f-size-medium">
								<div>
									<h3 class="c-heading">Help</h3>
									<p class="c-paragraph">Go here if you are experiencing difficulties with this service.</p>
									<a href="#" class="c-call-to-action c-glyph">
										<span>GET HELP</span>
									</a>
								</div>
							</section>
						</div>
					</div>
				</div>
				
				<!-- Footer -->
				<footer class="transparentFooter">
					<p class="c-paragraph">© <a href="https://oscarnardone.me">Oscar Nardone</a> and Jack Littlefair 2018</p>
				</footer>
			</div>
			<!--<footer class="c-universal-footer">
				<section>
					<ul role="contentinfo" class="c-list f-bare" style="float: right; padding: 2%; padding-top: 4%; background: transparent; color: #fff;"><li>© Oscar Nardone 2017</li></ul>
				</section>
			</footer>-->

			<!--<footer class="transparentFooter">
				<p class="c-paragraph">© <a href="https://oscarnardone.me">Oscar Nardone</a> 2017</p>
			</footer>-->
        </main>

		<script src="../../Global/Framework/assets.onestore.ms/cdnfiles/external/mwf/short/v1/latest/scripts/mwf-auto-init-main.var.min.js"></script>
		<script src="../../Global/Global.js"></script>
		<script>getUserProfile();</script>
    </body>
</html>