<nav>
<ul class="sf-menu">
	<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="" || $_GET["page"]=="home" || $_GET["page"]=="home_2" || $_GET["page"]=="home_3" || $_GET["page"]=="home_4" || $_GET["page"]=="home_5" || $_GET["page"]=="home_6" || $_GET["page"]=="home_7") ? " selected" : ""); ?>">
		<a href="#" title="Home">
			Home
		</a>
		<ul>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home" ? " class='selected'" : ""); ?>>
				<a href="?page=home" title="Home Style 1">
					Home Style 1
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_2" ? " class='selected'" : ""); ?>>
				<a href="?page=home_2" title="Home Style 2">
					Home Style 2
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_3" ? " class='selected'" : ""); ?>>
				<a href="?page=home_3" title="Home Style 3">
					Home Style 3
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_4" ? " class='selected'" : ""); ?>>
				<a href="?page=home_4" title="Home Style 3">
					Home Style 4
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_5" ? " class='selected'" : ""); ?>>
				<a href="?page=home_5" title="Home Style 5">
					Home Style 5
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_6" ? " class='selected'" : ""); ?>>
				<a href="?page=home_6" title="Home Style 6">
					Home Style 6
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_7" ? " class='selected'" : ""); ?>>
				<a href="?page=home_7" title="Home Style 7">
					Home Style 7
				</a>
			</li>
		</ul>
	</li>
	<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="about" || $_GET["page"]=="about_2" || $_GET["page"]=="default" || $_GET["page"]=="shortcodes" || $_GET["page"]=="404") ? " selected" : ""); ?>">
		<a href="#" title="Pages">
			Pages
		</a>
		<ul>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="about" ? " class='selected'" : ""); ?>>
				<a href="?page=about" title="About Style 1">
					About Style 1
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="about_2" ? " class='selected'" : ""); ?>>
				<a href="?page=about_2" title="About Style 2">
					About Style 2
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="default" ? " class='selected'" : ""); ?>>
				<a href="?page=default" title="Default">
					Default
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="404" ? " class='selected'" : ""); ?>>
				<a href="?page=404" title="404 Not Found">
					404 Not Found
				</a>
			</li>
		</ul>
	</li>
	<li class="submenu mega_menu_parent">
		<a href="#" title="Mega Menu">
			Mega Menu
		</a>
		<ul>
			<li class="submenu">
				<a href="?page=blog" title="Latest Posts">
					Latest Posts
				</a>
				<ul class="mega_menu blog">
					<li class="post">
						<a href="?page=post" title="New Painkiller Rekindles Addiction Concerns">
							<img src='images/samples/330x242/image_08.jpg' alt='img'>
						</a>
						<h5><a href="?page=post" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post">
						<a href="?page=post" title="High Altitudes May Aid Weight Control">
							<img src='images/samples/330x242/image_11.jpg' alt='img'>
						</a>
						<h5><a href="?page=post" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post">
						<a href="?page=post" title="Build on Brotherhood, Club Lives Up to Name">
							<img src='images/samples/330x242/image_06.jpg' alt='img'>
						</a>
						<h5><a href="?page=post" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood, Club Lives Up to Name</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="submenu">
				<a href="?page=blog" title="Recent Galleries">
					Recent Galleries
				</a>
				<ul class="mega_menu blog">
					<li class="post">
						<a href="?page=post_gallery" title="Build on Brotherhood, Club Lives Up to Name">
							<span class="icon gallery"></span>
							<img src='images/samples/330x242/image_03.jpg' alt='img'>
						</a>
						<h5><a href="?page=post_gallery" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood, Club Lives Up to Name</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post">
						<a href="?page=post_gallery" title="High Altitudes May Aid Weight Control">
							<span class="icon gallery"></span>
							<img src='images/samples/330x242/image_05.jpg' alt='img'>
						</a>
						<h5><a href="?page=post_gallery" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post">
						<a href="?page=post_gallery" title="New Painkiller Rekindles Addiction Concerns">
							<span class="icon gallery"></span>
							<img src='images/samples/330x242/image_04.jpg' alt='img'>
						</a>
						<h5><a href="?page=post_gallery" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="submenu">
				<a href="?page=blog" title="Recent Reviews">
					Recent Reviews
				</a>
				<ul class="mega_menu blog">
					<li class="post">
						<a href="?page=post_review" title="New Painkiller Rekindles Addiction Concerns">
							<span class="icon"><span>8.7</span></span>
							<img src='images/samples/330x242/image_07.jpg' alt='img'>
						</a>
						<h5><a href="?page=post_review" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post">
						<a href="?page=post_review_2" title="High Altitudes May Aid Weight Control">
							<span class="icon"><span>9.5</span></span>
							<img src='images/samples/330x242/image_09.jpg' alt='img'>
						</a>
						<h5><a href="?page=post_review_2" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post">
						<a href="?page=post_review" title="Build on Brotherhood, Club Lives Up to Name">
							<span class="icon"><span>7.8</span></span>
							<img src='images/samples/330x242/image_14.jpg' alt='img'>
						</a>
						<h5><a href="?page=post_review" title="Build on Brotherhood, Club Lives Up to Name">Build on Brotherhood, Club Lives Up to Name</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post first">
						<a href="?page=post_review" title="Nuclear Fusion Closer to Becoming a Reality">
							<span class="icon"><span>8.0</span></span>
							<img src='images/samples/330x242/image_13.jpg' alt='img'>
						</a>
						<h5><a href="?page=post_review" title="Nuclear Fusion Closer to Becoming a Reality">Nuclear Fusion Closer to Becoming a Reality</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post first">
						<a href="?page=post_review_2" title="The Public Health Crisis Hiding in Our Food">
							<span class="icon"><span>9.1</span></span>
							<img src='images/samples/330x242/image_02.jpg' alt='img'>
						</a>
						<h5><a href="?page=post_review_2" title="The Public Health Crisis Hiding in Our Food">The Public Health Crisis Hiding in Our Food</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
					<li class="post first">
						<a href="?page=post_review_2" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
							<span class="icon"><span>6.7</span></span>
							<img src='images/samples/330x242/image_01.jpg' alt='img'>
						</a>
						<h5><a href="?page=post_review_2" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
						<ul class="post_details simple">
							<li class="category"><a title="HEALTH" href="?page=category&amp;cat=health">HEALTH</a></li>
							<li class="date">
								10:11 PM, Feb 02
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="submenu">
				<a href="?page=blog" title="Most Read">
					Most Read
				</a>
				<div class="mega_menu row">
					<div class="column column_1_2">
						<ul class="blog small">
							<li class="post">
								<a href="?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
									<img src='images/samples/100x100/image_06.jpg' alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a href="?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
										<li class="date">
											10:11 PM, Feb 02
										</li>
									</ul>
								</div>
							</li>
							<li class="post">
								<a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
									<img src='images/samples/100x100/image_12.jpg' alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href="?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
										<li class="date">
											10:11 PM, Feb 02
										</li>
									</ul>
								</div>
							</li>
							<li class="post">
								<a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">
									<img src='images/samples/100x100/image_02.jpg' alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href="?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
										<li class="date">
											10:11 PM, Feb 02
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<div class="column column_1_2">
						<ul class="blog small">
							<li class="post">
								<a href="?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
									<img src='images/samples/100x100/image_04.jpg' alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a href="?page=post" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking Illnes and Salt Leaves Researchers Doubtful</a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
										<li class="date">
											10:11 PM, Feb 02
										</li>
									</ul>
								</div>
							</li>
							<li class="post">
								<a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">
									<img src='images/samples/100x100/image_10.jpg' alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a href="?page=post" title="Syrian Civilians Trapped For Months Continue To Be Evacuated">Syrian Civilians Trapped For Months Continue To Be Evacuated</a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href="?page=category&amp;cat=world" title="WORLD">WORLD</a></li>
										<li class="date">
											10:11 PM, Feb 02
										</li>
									</ul>
								</div>
							</li>
							<li class="post">
								<a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">
									<img src='images/samples/100x100/image_07.jpg' alt='img'>
								</a>
								<div class="post_content">
									<h5>
										<a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a>
									</h5>
									<ul class="post_details simple">
										<li class="category"><a href="?page=category&amp;cat=sports" title="SPORTS">SPORTS</a></li>
										<li class="date">
											10:11 PM, Feb 02
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
	</li>
	<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="post" || $_GET["page"]=="post_gallery" || $_GET["page"]=="post_small_image" || $_GET["page"]=="post_video" || $_GET["page"]=="post_video_2" || $_GET["page"]=="post_soundcloud" || $_GET["page"]=="post_review" || $_GET["page"]=="post_review_2" || $_GET["page"]=="post_quote" || $_GET["page"]=="post_quote_2") ? " selected" : ""); ?>">
		<a href="#" title="Post Formats">
			Post Formats
		</a>
		<ul>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post" ? " class='selected'" : ""); ?>>
				<a href="?page=post" title="Post Default">
					Post Default
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_gallery" ? " class='selected'" : ""); ?>>
				<a href="?page=post_gallery" title="Post Gallery">
					Post Gallery
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_small_image" ? " class='selected'" : ""); ?>>
				<a href="?page=post_small_image" title="Post Small Image">
					Post Small Image
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_video" ? " class='selected'" : ""); ?>>
				<a href="?page=post_video" title="Post Video YouTube">
					Post Video Youtube
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_video_2" ? " class='selected'" : ""); ?>>
				<a href="?page=post_video_2" title="Post Video Vimeo">
					Post Video Vimeo
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_soundcloud" ? " class='selected'" : ""); ?>>
				<a href="?page=post_soundcloud" title="Post Soundcloud">
					Post Soundcloud
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_review" ? " class='selected'" : ""); ?>>
				<a href="?page=post_review" title="Post Review Style 1">
					Post Review Style 1
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_review_2" ? " class='selected'" : ""); ?>>
				<a href="?page=post_review_2" title="Post Review Style 2">
					Post Review Style 2
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_quote" ? " class='selected'" : ""); ?>>
				<a href="?page=post_quote" title="Post Quote Style 1">
					Post Quote Style 1
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_quote_2" ? " class='selected'" : ""); ?>>
				<a href="?page=post_quote_2" title="Post Quote Style 2">
					Post Quote Style 2
				</a>
			</li>
		</ul>
	</li>
	<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="blog" || $_GET["page"]=="blog_small_slider" || $_GET["page"]=="blog_left_sidebar" || $_GET["page"]=="blog_2_columns" || $_GET["page"]=="blog_2_columns_left_sidebar" || $_GET["page"]=="blog_3_columns" || $_GET["page"]=="search") ? " selected" : ""); ?>">
		<a href="?page=blog" title="Blog">
			Blog
		</a>
		<ul>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_small_slider" ? " class='selected'" : ""); ?>>
				<a href="?page=blog_small_slider" title="Blog Small Slider">
					Blog Small Slider
				</a>
			</li>
			<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="blog" || $_GET["page"]=="blog_left_sidebar") ? " selected" : ""); ?>">
				<a href="#" title="Blog 1 column">
					Blog 1 Column
				</a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog" ? " class='selected'" : ""); ?>>
						<a href="?page=blog" title="Blog With Right Sidebar">
							Blog With Right Sidebar
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_left_sidebar" ? " class='selected'" : ""); ?>>
						<a href="?page=blog_left_sidebar" title="Blog With Left Sidebar">
							Blog With Left Sidebar
						</a>
					</li>
				</ul>
			</li>
			<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="blog_2_columns" || $_GET["page"]=="blog_2_columns_left_sidebar") ? " selected" : ""); ?>">
				<a href="#" title="Blog 2 columns">
					Blog 2 Columns
				</a>
				<ul>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_2_columns" ? " class='selected'" : ""); ?>>
						<a href="?page=blog_2_columns" title="Right Sidebar">
							Right Sidebar
						</a>
					</li>
					<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_2_columns_left_sidebar" ? " class='selected'" : ""); ?>>
						<a href="?page=blog_2_columns_left_sidebar" title="Left Sidebar">
							Left Sidebar
						</a>
					</li>
				</ul>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_3_columns" ? " class='selected'" : ""); ?>>
				<a href="?page=blog_3_columns" title="Blog 3 Columns">
					Blog 3 Columns
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="search" ? " class='selected'" : ""); ?>>
				<a href="?page=search&amp;s=Maecenas+Mauris" title="Search Page Template">
					Search Page Template
				</a>
			</li>
		</ul>
	</li>
	<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="authors" || $_GET["page"]=="author") ? " selected" : ""); ?>">
		<a href="?page=authors" title="Authors">
			Authors
		</a>
		<ul>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="authors" ? " class='selected'" : ""); ?>>
				<a href="?page=authors" title="Authors List">
					Authors List
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="author" ? " class='selected'" : ""); ?>>
				<a href="?page=author" title="Author Single">
					Author Single
				</a>
			</li>
		</ul>
	</li>
	<li class="submenu<?php echo (isset($_GET["page"]) && $_GET["page"]=="category" && (isset($_GET["cat"]) && ($_GET["cat"]=="health" || $_GET["cat"]=="science" || $_GET["cat"]=="sports" || $_GET["cat"]=="world" || $_GET["cat"]=="lifestyle")) ? " selected" : ""); ?>">
		<a href="#" title="Categories">
			Categories
		</a>
		<ul>
			<li<?php echo (isset($_GET["page"]) && isset($_GET["cat"]) && $_GET["page"]=="category" && $_GET["cat"]=="health" ? " class='selected'" : ""); ?>>
				<a href="?page=category&amp;cat=health" title="Health">
					Health
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && isset($_GET["cat"]) && $_GET["page"]=="category" && $_GET["cat"]=="science" ? " class='selected'" : ""); ?>>
				<a href="?page=category&amp;cat=science" title="Science">
					Science
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && isset($_GET["cat"]) && $_GET["page"]=="category" && $_GET["cat"]=="sports" ? " class='selected'" : ""); ?>>
				<a href="?page=category&amp;cat=sports" title="Sports">
					Sports
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && isset($_GET["cat"]) && $_GET["page"]=="category" && $_GET["cat"]=="world" ? " class='selected'" : ""); ?>>
				<a href="?page=category&amp;cat=world" title="World">
					World
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && isset($_GET["cat"]) && $_GET["page"]=="category" && $_GET["cat"]=="lifestyle" ? " class='selected'" : ""); ?>>
				<a href="?page=category&amp;cat=lifestyle" title="Lifestyle">
					Lifestyle
				</a>
			</li>
		</ul>
	</li>
	<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="contact" || $_GET["page"]=="contact_2") ? " selected" : ""); ?>">
		<a href="?page=contact" title="Contact">
			Contact
		</a>
		<ul class="expand_left_contact">
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact" ? " class='selected'" : ""); ?>>
				<a href="?page=contact" title="Contact Style 1">
					Contact Style 1
				</a>
			</li>
			<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact_2" ? " class='selected'" : ""); ?>>
				<a href="?page=contact_2" title="Contact Style 2">
					Contact Style 2
				</a>
			</li>
		</ul>
	</li>
</ul>
</nav>
<div class="mobile_menu_container">
	<a href="#" class="mobile-menu-switch">
		<span class="line"></span>
		<span class="line"></span>
		<span class="line"></span>
	</a>
	<div class="mobile-menu-divider"></div>
	<nav>
	<ul class="mobile-menu">
		<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="" || $_GET["page"]=="home" || $_GET["page"]=="home_2" || $_GET["page"]=="home_3" || $_GET["page"]=="home_4" || $_GET["page"]=="home_5" || $_GET["page"]=="home_6" || $_GET["page"]=="home_7") ? " selected" : ""); ?>">
			<a href="?page=home" title="Home">
				Home
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home" ? " class='selected'" : ""); ?>>
					<a href="?page=home" title="Home Style 1">
						Home Style 1
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_2" ? " class='selected'" : ""); ?>>
					<a href="?page=home_2" title="Home Style 2">
						Home Style 2
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_3" ? " class='selected'" : ""); ?>>
					<a href="?page=home_3" title="Home Style 3">
						Home Style 3
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_4" ? " class='selected'" : ""); ?>>
					<a href="?page=home_4" title="Home Style 3">
						Home Style 4
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_5" ? " class='selected'" : ""); ?>>
					<a href="?page=home_5" title="Home Style 5">
						Home Style 5
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_6" ? " class='selected'" : ""); ?>>
					<a href="?page=home_6" title="Home Style 6">
						Home Style 6
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="home_7" ? " class='selected'" : ""); ?>>
					<a href="?page=home_7" title="Home Style 7">
						Home Style 7
					</a>
				</li>
			</ul>
		</li>
		<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="about" || $_GET["page"]=="about_2" || $_GET["page"]=="default" || $_GET["page"]=="shortcodes" || $_GET["page"]=="404") ? " selected" : ""); ?>">
			<a href="?page=about" title="Pages">
				Pages
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="about" ? " class='selected'" : ""); ?>>
					<a href="?page=about" title="About Style 1">
						About Style 1
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="about_2" ? " class='selected'" : ""); ?>>
					<a href="?page=about_2" title="About Style 2">
						About Style 2
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="default" ? " class='selected'" : ""); ?>>
					<a href="?page=default" title="Default">
						Default
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="404" ? " class='selected'" : ""); ?>>
					<a href="?page=404" title="404 Not Found">
						404 Not Found
					</a>
				</li>
			</ul>
		</li>
		<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="post" || $_GET["page"]=="post_gallery" || $_GET["page"]=="post_small_image" || $_GET["page"]=="post_video" || $_GET["page"]=="post_video_2" || $_GET["page"]=="post_soundcloud" || $_GET["page"]=="post_review" || $_GET["page"]=="post_review_2" || $_GET["page"]=="post_quote" || $_GET["page"]=="post_quote_2") ? " selected" : ""); ?>">
			<a href="?page=post" title="Post Formats">
				Post Formats
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post" ? " class='selected'" : ""); ?>>
					<a href="?page=post" title="Post Default">
						Post Default
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_gallery" ? " class='selected'" : ""); ?>>
					<a href="?page=post_gallery" title="Post Gallery">
						Post Gallery
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_small_image" ? " class='selected'" : ""); ?>>
					<a href="?page=post_small_image" title="Post Small Image">
						Post Small Image
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_video" ? " class='selected'" : ""); ?>>
					<a href="?page=post_video" title="Post Video YouTube">
						Post Video Youtube
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_video_2" ? " class='selected'" : ""); ?>>
					<a href="?page=post_video_2" title="Post Video Vimeo">
						Post Video Vimeo
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_soundcloud" ? " class='selected'" : ""); ?>>
					<a href="?page=post_soundcloud" title="Post Soundcloud">
						Post Soundcloud
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_review" ? " class='selected'" : ""); ?>>
					<a href="?page=post_review" title="Post Review Style 1">
						Post Review Style 1
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_review_2" ? " class='selected'" : ""); ?>>
					<a href="?page=post_review_2" title="Post Review Style 2">
						Post Review Style 2
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_quote" ? " class='selected'" : ""); ?>>
					<a href="?page=post_quote" title="Post Quote Style 1">
						Post Quote Style 1
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="post_quote_2" ? " class='selected'" : ""); ?>>
					<a href="?page=post_quote_2" title="Post Quote Style 2">
						Post Quote Style 2
					</a>
				</li>
			</ul>
		</li>
		<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="blog" || $_GET["page"]=="blog_small_slider" || $_GET["page"]=="blog_left_sidebar" || $_GET["page"]=="blog_2_columns" || $_GET["page"]=="blog_2_columns_left_sidebar" || $_GET["page"]=="blog_3_columns" || $_GET["page"]=="search") ? " selected" : ""); ?>">
			<a href="?page=blog" title="Blog">
				Blog
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_small_slider" ? " class='selected'" : ""); ?>>
					<a href="?page=blog_small_slider" title="Blog Small Slider">
						Blog Small Slider
					</a>
				</li>
				<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="blog" || $_GET["page"]=="blog_left_sidebar") ? " selected" : ""); ?>">
					<a href="?page=blog" title="Blog 1 column">
						Blog 1 Column
					</a>
					<ul>
						<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog" ? " class='selected'" : ""); ?>>
							<a href="?page=blog" title="Blog With Right Sidebar">
								Blog With Right Sidebar
							</a>
						</li>
						<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_left_sidebar" ? " class='selected'" : ""); ?>>
							<a href="?page=blog_left_sidebar" title="Blog With Left Sidebar">
								Blog With Left Sidebar
							</a>
						</li>
					</ul>
				</li>
				<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="blog_2_columns" || $_GET["page"]=="blog_2_columns_left_sidebar") ? " selected" : ""); ?>">
					<a href="?page=blog_2_columns" title="Blog 2 columns">
						Blog 2 Columns
					</a>
					<ul>
						<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_2_columns" ? " class='selected'" : ""); ?>>
							<a href="?page=blog_2_columns" title="Right Sidebar">
								Right Sidebar
							</a>
						</li>
						<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_2_columns_left_sidebar" ? " class='selected'" : ""); ?>>
							<a href="?page=blog_2_columns_left_sidebar" title="Left Sidebar">
								Left Sidebar
							</a>
						</li>
					</ul>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="blog_3_columns" ? " class='selected'" : ""); ?>>
					<a href="?page=blog_3_columns" title="Blog 3 Columns">
						Blog 3 Columns
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="search" ? " class='selected'" : ""); ?>>
					<a href="?page=search&amp;s=Maecenas+Mauris" title="Search Page Template">
						Search Page Template
					</a>
				</li>
			</ul>
		</li>
		<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="authors" || $_GET["page"]=="author") ? " selected" : ""); ?>">
			<a href="?page=authors" title="Authors">
				Authors
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="authors" ? " class='selected'" : ""); ?>>
					<a href="?page=authors" title="Authors List">
						Authors List
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="author" ? " class='selected'" : ""); ?>>
					<a href="?page=author" title="Author Single">
						Author Single
					</a>
				</li>
			</ul>
		</li>
		<li class="submenu<?php echo (isset($_GET["page"]) && $_GET["page"]=="category" && (isset($_GET["cat"]) && ($_GET["cat"]=="health" || $_GET["cat"]=="science" || $_GET["cat"]=="sports" || $_GET["cat"]=="world" || $_GET["cat"]=="lifestyle")) ? " selected" : ""); ?>">
			<a href="?page=category&amp;cat=health" title="Categories">
				Categories
			</a>
			<ul>
				<li<?php echo (isset($_GET["page"]) && isset($_GET["cat"]) && $_GET["page"]=="category" && $_GET["cat"]=="health" ? " class='selected'" : ""); ?>>
					<a href="?page=category&amp;cat=health" title="Health">
						Health
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && isset($_GET["cat"]) && $_GET["page"]=="category" && $_GET["cat"]=="science" ? " class='selected'" : ""); ?>>
					<a href="?page=category&amp;cat=science" title="Science">
						Science
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && isset($_GET["cat"]) && $_GET["page"]=="category" && $_GET["cat"]=="sports" ? " class='selected'" : ""); ?>>
					<a href="?page=category&amp;cat=sports" title="Sports">
						Sports
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && isset($_GET["cat"]) && $_GET["page"]=="category" && $_GET["cat"]=="world" ? " class='selected'" : ""); ?>>
					<a href="?page=category&amp;cat=world" title="World">
						World
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && isset($_GET["cat"]) && $_GET["page"]=="category" && $_GET["cat"]=="lifestyle" ? " class='selected'" : ""); ?>>
					<a href="?page=category&amp;cat=lifestyle" title="Lifestyle">
						Lifestyle
					</a>
				</li>
			</ul>
		</li>
		<li class="submenu<?php echo (isset($_GET["page"]) && ($_GET["page"]=="contact" || $_GET["page"]=="contact_2") ? " selected" : ""); ?>">
			<a href="?page=contact" title="Contact">
				Contact
			</a>
			<ul class="expand_left_contact">
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact" ? " class='selected'" : ""); ?>>
					<a href="?page=contact" title="Contact Style 1">
						Contact Style 1
					</a>
				</li>
				<li<?php echo (isset($_GET["page"]) && $_GET["page"]=="contact_2" ? " class='selected'" : ""); ?>>
					<a href="?page=contact_2" title="Contact Style 2">
						Contact Style 2
					</a>
				</li>
			</ul>
		</li>
	</ul>
	</nav>
</div>