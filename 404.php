<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header(); ?>

<html>
<style>
@font-face
{
	font-family: PlayFairBlackItalic;
	src: url('<?php home_url();?>/wp-content/themes/_s/fonts/PlayfairDisplay-BlackItalic.otf');
}

@font-face
{
	font-family: QuickSandBold;
	src: url('<?php home_url();?>/wp-content/themes/_s/fonts/Quicksand-Bold.otf');
}

@font-face
{
	font-family:QuickSandRegular;
	src: url('<?php home_url();?>/wp-content/themes/_s/fonts/Quicksand-Regular.otf');
}

@font-face
{
	font-family:Aleo-Regular;
	src: url('<?php home_url();?>/wp-content/themes/_s/fonts/Aleo-Regular.otf');
}

body {
    background-image: url("<?php home_url();?>/wp-content/themes/_s/1.jpg"); 
}

h1
{
	Margin-top:100px;
	width: 600px;
	font-family: PlayFairBlackItalic;
	text-align: center;
	font-size: 55px;
	padding-bottom: 10px;
	margin-bottom:10px;
	color: white;
}

.pFirst
{
	border-style: solid;
	width : 430px;
	font-family: QuickSandBold;
	color: white;
	font-size:20px;
	text-align:center;
	background: #4f0b7c;
	margin-bottom:10px;
}

.aboutParagraph
{
	font-family:Aleo-Regular;
	font-size: 16px;
	margin-bottom:auto;
	color: white;
}

.border
{
	margin-top: 50px;
    border-style: hidden hidden hidden hidden;
	width: 800px;
	text-align: justify;
    text-justify: inter-word;
}
</style>
<head>
	
	
</head>
<body>
	<center>
		<h1>page does not exist</h1>
		<div class="container">
			<div class="card-panel black" style="opacity: 0.5; margin-top: 0px; height:100%;">
				<p class="aboutParagraph">Oops! I think we can't find what you're looking for. Try navigating the site with the navigation bar on top.</p>
			</div>
		</div>
	</center>

</body>

</html>

<?php
get_footer();
