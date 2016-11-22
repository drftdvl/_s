<?php
	/* Template Name: About */
	get_header();
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

@font-face
{
	font-family:Aleo-Regular;
	src: url('/box/wp-content/themes/_s/fonts/Aleo-Regular.otf');
}

body {
    background-image: url("/box/wp-content/themes/_s/2.jpg");
	background-position: top;
	background-repeat: no-repeat;
	background-attachment: fixed;
 
}

h1
{
	Margin-top:50px;
	border-style: hidden hidden solid hidden;
	border-width:6px;
	border-color:#660066;
	width: 600px;
	font-family: PlayFairBlackItalic;
	text-align: center;
	font-size: 55px;
	padding-bottom: 10px;
	margin-bottom:-10px;
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
	font-size: 20px;
	margin-bottom:200px;
	
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
	
		<h1>About us</h1>
			<div class = "border">
				<p class="aboutParagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
			</div>
		

	</center>

</body>

</html>
<?php
get_footer();
?>