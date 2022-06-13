<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta property='og:image' content='https://peprojects.dev/alpha-4/john/starbucks/images/cups.png'>
		<meta name='description' content='More than just great coffee. Explore the menu, sign up for Starbucks® Rewards, manage your gift card and more.'>
		<title></title>

		<link rel='stylesheet' href='css/style.css'>
	</head>

	<body>
		<header class='site-header'>
			
			<div class='inner-column'>

				<!-- <img class='logo' src='./images/starbucks.svg'> -->
				<div class='logo'>
					<?php include('starbucks.php'); ?>
				</div>
				<div class='site-menu'>

					<div class='links-left'>
						<ul class ='links'>
							<li><a href='#'>Menu</a></li>
							<li><a href='#'>Rewards</a></li>
							<li><a href='#'>Gift Cards</a></li>
						</ul>
					</div>

					<img class='menu-icon' src='./images/hamburger-menu-250.png'>

					<nav class='links-right'>
						
						<a class='store-locator' href='#'>
							<div class='icon'>
									<svg width="48" height="48" viewBox="0 0 48 48"><path d="M24 4c-7.73 0-14 6.27-14 14 0 10.5 14 26 14 26s14-15.5 14-26c0-7.73-6.27-14-14-14zm0 19c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/></svg>
							</div>
							<span>Find a store</span>
						</a>
					
						<a class='button' href='#'>Sign in</a>
						<a class='button black' href='#'>Join now</a>	
					</nav>

				</div>

			</div>
		</header>

		<main>
			<div class="inner-column">
				<div class='row one'>
					<picture class='rewards'>
						<img src='./images/cups.png'>
					</picture>

					<div class='description rewards'>
						<div class='description-wrapper'>
							<h1 class='loud-voice'>Sign up for Starbucks<sup><span>&reg;</span> Rewards</sup></h1>

							<h3 class='attention-voice'>Starting 4/22, get 25 Stars when you bring your clean, reusable cup into the café. Stars can quickly add up to Rewards.*</h3>
						</div>
							
						<a class='button' href='#'>Join now</a>
						
					</div>
				</div>

				<div class='row two'>
					<picture class='rewards two'>
						<img src='./images/mothers-day.jpeg'>
					</picture>

					<div class='description eco-friendly'>
						<div class='description-wrapper'>
							<h1 class='loud-voice white'>Gifts of gratitude</h1>
							<h3 class='attention-voice white'>Treat that special mom, nurse or teacher to a Starbucks gift card.</h3>
						</div>
						<a class='button white' href='#'>Learn how</a>
					</div>
				</div>

				<div class='row three'>
					<picture class='special-drink'>
						<img src='./images/nitro.jpeg'>
					</picture>

					<div class='description special-drink'>
						<div class='description-wrapper'>
							<h1 class='loud-voice white'>That Nitro flow</h1>
							<h3 class='attention-voice white'>Keep it classic with a velvety-smooth Nitro Cold Brew or add a delicious twist with Vanilla Sweet Cream Nitro Cold Brew.</h3>
						</div>
						<a class='button white' href='#'>Order Now</a>
					</div>
				</div>

				<div class='row four'>
					<picture class='beans'>
						<img src='./images/rewards-card.jpeg'>
					</picture>

					<div class='description beans'>
						<div class='description-wrapper'>
							<h3 class='normal-voice green'>Earning 4,500 Bonus Stars is Super Starifying</h3>
							<h3 class='soft-voice green'>Earn more Stars and even more Rewards with a <strong>$0 intro annual fee for your first year</strong> with the Starbucks® Rewards Visa® Card. Plus your Stars won’t expire – an exclusive Starbucks benefit for cardmembers. Now that’s Super Starifying.</h3>
						</div>
						<a class='button green' href='#'>Learn more</a>
					</div>
				</div>

				<div class='row five'>
					<picture class='rewards card'>
						<img src='./images/employee.jpeg'>
					</picture>

					<div class='description rewards-card'>
						<div class='description-wrapper'>
							<h3 class='normal-voice green'>Learn what's new at Starbucks</h3>
							<h3 class='soft-voice green'>Check out the latest news and stories about how we are supporting and investing in the future of our partners (employees)..</h3>
						</div>
						<a class='button green' href='#'>Explore</a>
					</div>
				</div>

				<div class='row six'>
					<picture class='uber'>
						<img src='./images/community.jpeg'>
					</picture>

					<div class='description uber-eats'>
						<div class='description-wrapper'>
							<h3 class='normal-voice green'>Our partners build community</h3>
							<h4 class='soft-voice green'>Our Pan-Asian and India Partner Networks are coming together to celebrate Asian American, Native Hawaiian and Pacific Islander Heritage Month.</h4>
						</div>
						<a class='button green' href='#'>Join us</a>
					</div>
				</div>

				<div class='row seven'>
					<picture class='uber'>
						<img src='./images/military.jpeg'>
					</picture>

					<div class='description uber-eats'>
						<div class='description-wrapper'>
							<h3 class='normal-voice green'>May is Military Appreciation Month</h3>
							<h4 class='soft-voice green'>For each Military eGift sold in May, we’ll donate $5 to support the mental health and well-being of our military community.**</h4>
						</div>
						<a class='button green' href='#'>Send an eGift</a>
					</div>
				</div>		

				<div class='fine-print'>
					<div class='store'>
						<p class='whisper'>&#42;At participating stores.</p>
					</div>
					
					<div class='menu-restrictions'>
						<p class='whisper'>&#42;&#42;For every Starbucks eGift in our Military Appreciation category sold May 1-31, we’ll donate $5 to Blue Star Families and Operation Gratitude to support the mental health and well-being of our military community. Donations will be evenly divided between the two organizations. Learn more at <a href='#'>https://bluestarfam.org</a> and <a href='#'>https://www.operationgratitude.com/.</a></p>
					</div>
			</div>
		</div>

	</main>

	<footer class='site-footer'>
		<div class='inner-column'>
			<section class='company-links'>
				<div class='company about-us'>
					<h4 class='soft-voice'>About Us</h4>
					
					<img class='down-caret' src='./images/down-caret.svg'>

					<ul>
						<li><a class='soft-voice light' href='#'>Our Company</a></li>
						<li><a class='soft-voice light' href='#'>Our Coffee</a></li>
						<li><a class='soft-voice light' href='#'>Stories and News</a></li>
						<li><a class='soft-voice light' href='#'>Starbucks Archive</a></li>
						<li><a class='soft-voice light' href='#'>Investor Relations</a></li>
						<li><a class='soft-voice light' href='#'>Customer Service</a></li>
					</ul>
				</div>

				<div class='company careers'>
					<h4 class='soft-voice'>Careers</h4>

					<img class='down-caret' src='./images/down-caret.svg'>

					<ul>
						<li><a class='soft-voice light' href='#'>Culture and Values</a></li>
						<li><a class='soft-voice light' href='#'>Inclusion, Diversity, and Equity</a></li>
						<li><a class='soft-voice light' href='#'>College Achievement Plan</a></li>
						<li><a class='soft-voice light' href='#'>Alumni Community</a></li>
						<li><a class='soft-voice light' href='#'>U.S. Careers</a></li>
						<li><a class='soft-voice light' href='#'>International Careers</a></li>
					</ul>
				</div>

				<div class='company social-impact'>
					<h4 class='soft-voice'>Social Impact</h4>

					<img class='down-caret' src='./images/down-caret.svg'>

					<ul>
						<li><a class='soft-voice light' href='#'>People</a></li>
						<li><a class='soft-voice light' href='#'>Planet</a></li>
						<li><a class='soft-voice light' href='#'>Environmental and Social Impact Reporting</a></li>
					</ul>
				</div>

				<div class='company business-partners'>
					<h4 class='soft-voice'>For Business Partners</h4>

					<img class='down-caret' src='./images/down-caret.svg'>

					<ul>
						<li><a class='soft-voice light' href='#'>Landlord Support Center</a></li>
						<li><a class='soft-voice light' href='#'>Suppliers</a></li>
						<li><a class='soft-voice light' href='#'>Corporate Gift Card Sales</a></li>
						<li><a class='soft-voice light' href='#'>Office and Foodservice Coffee</a></li>
					</ul>

				</div>

				<div class='company order-and-pickup'>
					<h4 class='soft-voice'>Order and Pickup</h4>

					<img class='down-caret' src='./images/down-caret.svg'>

					<ul>
						<li><a class='soft-voice light' href='#'>Order on the App</a></li>
						<li><a class='soft-voice light' href='#'>Order on the Web</a></li>
						<li><a class='soft-voice light' href='#'>Delivery</a></li>
						<li><a class='soft-voice light' href='#'>Order and Pickup Options</a></li>
						<li><a class='soft-voice light' href='#'>Explore and Find Coffee for Home</a></li>
					</ul>
				</div>
				
			</section>

			<section class='socials-and-docs'>
				<div class='socials'>
					<img src='./images/spotify.svg'>
					<img src='./images/facebook.svg'>
					<img src='./images/pinterest.svg'>
					<img src='./images/instagram.svg'>
					<img src='./images/youtube.svg'>
					<img src='./images/twitter.svg'>
				</div>

				<div class='docs'>
					<a class='soft-voice dark' href='#'>Privacy Policy</a>
					<a class='soft-voice dark' href='#'>Terms of Use</a>
					<a class='soft-voice dark' href='#'>CA Supply Chain Act</a>
					<a class='soft-voice dark' href='#'>Cookie Preferences</a>
				</div>

				<p class='quiet-voice light'>&copy; 2022 Starbucks Coffee Company. All rights reserved.</p>
			</section>

		</div>
	</footer>
		
</body>

</html>




























