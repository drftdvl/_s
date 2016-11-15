<?php
	get_header();
	/* Template Name: Home */
?>
<!DOCTYPE HTML>
<html>

<style>
@font-face
{
	font-family: PlayFairBlackItalic;
	src: url('/box/wp-content/themes/_s/fonts/PlayFairDisplay-BlackItalic.otf');
}

@font-face
{
	font-family: QuickSandBold;
	src: url('/box/wp-content/themes/_s/fonts/Quicksand-Bold.otf');
}

@font-face
{
	font-family:QuickSandRegular;
	src: url('/box/wp-content/themes/_s/fonts/Quicksand-regular.otf');
}

body
{
	background-image: url("/box/wp-content/themes/_s/1.jpg")
}

.bioOrg
{
	border-style: hidden;
	border-top: : 0px;
	font-family: PlayFairBlackItalic;
	color: white;
	font-size:48px;
}
</style>
<body>
	<center>
	<div>
			<img src="/box/wp-content/themes/_s/BOx.Logo.W.png" alt = "Ateneo BOx:eXplore. eXperience. eXcel" style="width:240px;height:130px;margin-top:160px;">
			<p class = "bioOrg">Ateneo Biological Organization</p>

	</div>
	</center>
</body>
<?php
get_footer();
?>
<a href="<?php get_home_url(); ?> /box/wp-admin">WordPress Login</a>