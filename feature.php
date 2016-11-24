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

body
{
	background-image: url("/box/wp-content/themes/_s/1.jpg");
	background-attachment: fixed;
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

.pFirst
{
	border-style: solid;
	border-color: #4f0b7c;
	width : 430px;
	font-family: QuickSandBold;
	color: white;
	font-size:20px;
	text-align:center;
	background: #4f0b7c;
	margin-bottom:10px;
	margin-top:-20px;
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
		<div class="card-panel white" style="opacity: 0.5; margin: 0px;">
			<h1>feature</h1>
		</div>
		<div class="card-panel white" style="margin-top: 0px; min-height:100%;">
			<p class = "pFirst">BOX MEMBER OF THE MONTH</p>
			<img src="/box/wp-content/themes/_s/avatar.png" alt="Member" style="width:280px;height:270px;">
			<p class= "pMember">John Smith</p>
			<p class = "pMember">3 BS Life Sciences</p>
		</div>
	</center>

</body>

</html>
<?php
get_footer();
?>