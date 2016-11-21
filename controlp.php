<?php
	/* Template Name: Control Panel */
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

h1
{
	Margin-top:100px;
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

.tHead
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
</style>

<head>
</head>

<body>
	<center>
		<h1>control panel</h1>
		<p class="tHead">
			Upload and manage the tracker
		</p>
	</center>
	
</body>

</html>

<?php
	get_footer();
?>