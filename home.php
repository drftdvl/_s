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

body
{
	background-image: url("<?php home_url();?>/wp-content/themes/_s/1.jpg");
}

.bioOrg
{
	border-style: hidden;
	font-family: PlayFairBlackItalic;
	color: white;
	font-size:48px;
	padding-top: 0px;
}
.eX
{
	border-style: hidden;
	font-family:Aleo-Regular;
	color: white;
	font-size: 36px;
}

.par
{
	border-style: hidden;
	font-family:Aleo-Regular;
	color: white;
	font-size: 16px;
	text-align: justify-all;
	opacity: 2;
}

</style>
<body>
	<center>
	<div>
			<img src="<?php home_url();?>/wp-content/themes/_s/BOx.Logo.W.png" alt = "Ateneo BOx:eXplore. eXperience. eXcel" style="width:240px;height:130px;margin-top:10px;padding-bottom: 0px;">
			<br>
			<strong class = "bioOrg">Ateneo Biological Organization</strong>
			<br>
			<strong class = "eX">eXplore.eXperience.eXcel</strong>
	</div>
	<br>
	<div class="row" style="margin:auto;">
		<div class="container">
          <div class="card-panel black" style="opacity:0.5;margin:auto;" >
              <p class="par" style="opacity:2;">We, the Ateneo Biological Organization, being the premier Ateneo organization dedicated to the biological sciences, envision ourselves as competent and conscientious leaders of advocacy and action in biodiversity, bioeducation, and animal welfare for the Philippines <br><br>
              BOx aims to form individuals who are guided by Ignation spirituality and sense of service as they eXplore issues concerning the diversity of life;eXperience social transformation through active involvement and concrete action; and eXcel as leaders in nation-building through their chosen endeavors</p>
          </div>
      </div>
     </div>
            
	</center>
</body>
<?php 
get_footer();
?>