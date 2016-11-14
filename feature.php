<?php
	get_header();
	/* Template Name: Feature */
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
	width: 500px;
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
	font-size:23px;
	text-align:center;
	background: #4f0b7c;
	margin-bottom:10px;
}

.pMember
{
	font-family:QuickSandRegular;
	margin-bottom:-15px;
}
</style>
<head>
</head>
<body>

	<center>
	
	<h1>feature</h1>
		<p class = "pFirst">BOX MEMBER OF THE MONTH</p>
		<img src="1.jpg" alt="Member" style="width:280px;height:270px;">
		<p class= "pMember">John Smith</p>
		<p class = "pMember">3 BS Life Sciences</p>

	</center>

</body>

</html>
<?php
get_footer();
?>