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

body
{
	background-image: url("<?php home_url();?>/wp-content/themes/_s/1.jpg");
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

function resize() {
    $("#panel").height($(document).height() - $('#panel').height());
}

</style>
<head>
</head>
<body>

	<center>
		<div class="card-panel white" style="opacity: 0.5; margin: 0px;">
			<h1>feature</h1>
		</div>
		<div class="card-panel white" id="panel" style="margin-top: 0px; margin-bottom:0px; height: 100%;">
			<p class = "pFirst">BOx MEMBER OF THE MONTH</p>

			<?php
				$args = array( 'numberposts' => 1 );
				$lastposts = get_posts( $args );
				foreach($lastposts as $post) : setup_postdata($post); ?>
				<?php if ( has_post_thumbnail() ) 
				{ ?>
					<img src="<?php the_post_thumbnail_url('medium') ?>">
				<?php }
				else
				{ ?>
					<img src="<?php home_url();?>/wp-content/themes/_s/avatar.png" alt="Member" style="width:300px; height:300px;">
				<?php } ?>
					<div class = "pMember"><?php the_title(); ?></div>
					<div class = "pMember"><?php the_content(); ?></div>
			<?php endforeach; ?>

		</div>
	</center>

</body>

</html>
<?php
get_footer();
?>