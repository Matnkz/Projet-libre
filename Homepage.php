<!DOCTYPE HTML>

<html class="no-js" lang="fr">

<head>
	<?php include('view/layout/headLayout.php');?>
	<link rel="stylesheet" href="public/css/homepage_stylesheet.css"/>
	
	<title>Yvan l'alternant</title>
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
	
	<?php include('view/layout/navbarLayout.php'); ?>
	
	<!-- Body -->
	<section id="peripheral_wrapper">
		<div class="profilesheet">
			<div class="username">
				<div class="avatar"><i class="fa fa-user-circle"></i></div>				
				<div class="name"><strong><?= getName(); ?></strong></div>
			</div>
			
			<div class="current_job"><p>Current Job</p></div>
			<div class="contacts"><span style="color:#68ACD1">0</span><br/>contacts</div>
			<div class="profile"><a href="index.php?action=profile&id=<?= $_SESSION['member_id'];?>" class="profile_gateway color_transitions">Voir mon profil</a></div>
			<div class="copyright">&copy; 2018 - Yvan l'alternant</div>
		</div>
	</section>
	
	<section id="main_wrapper">
		<div id="actions">
			<a href="#"><div class="btn_post background_transitions">Nouveau post</div></a><a href="#"><div class="btn_application background_transitions">Nouvelle candidature</div></a>
		</div>
		
		<div class="post">
			<div class="post_author"><i class="fa fa-user-circle"></i><p>User Name</p></div>
			
			<div class="post_content">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
		
		<div class="post">
			<div class="post_author"><i class="fa fa-user-circle"></i><p>Enterprise Name</p></div>
			
			<div class="post_content">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
	</section>
	
	<?php include('view/layout/javascriptsLayout.php');?>
</body>

</html>
