<?php
	/* Template Name: Tracker */
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
		<h1>membership tracker</h1>
		<p class="tHead">
			Check your BOx membership status!
		</p>
	</center>
	<button id="update">Update</button>

	<input type="file" id="fileinput">
	<script>
		var users = [];
		jQuery(document).ready(function() {
			document.getElementById('fileinput').addEventListener('change', readSingleFile, false);
		});

		function readSingleFile(evt){
			users = [];
			var f = evt.target.files[0];
			if (f) {
				var r = new FileReader();
				r.onload = function(e) {
					var contents = e.target.result;
					
					var lines = contents.split('\n');
					
					var headers = lines[0].split(",");
					console.log(headers);
					for (var i = 1; i < lines.length-1; i++) {
						var obj = {};
						var currentline = lines[i].split(",");

						for (var j = 0; j < headers.length+1; j++) {
							if (j == headers.length-1){
								console.log(headers[j]);
							}
							var column = headers[j];
							obj[column] = currentline[j];
						}
						users.push(obj);
					}
					console.log("file loaded");
					console.log(users);
				}
				var text = r.readAsText(f);
			}
		}

		jQuery('button[id=update]').click(function(e) {
			e.preventDefault();
			console.log(users);

			var num = users.length;
			var current = 0;
			var percentage = current/num;
			for (user in users){
				jQuery('#alert').text=('Updated ' + current + ' users');
				var query = "action=update_user&id_number=" + users[user]["id_number"] + "&bscp=" + 
			        users[user]["bscp"] + "&ap=" +  users[user]["ap"] +
			       "&fp=" +  users[user]["fp"] + "&tdw=" + 
			        users[user]["tdw"] + "&core=" +  users[user]["core"] + "&first_name=" +
			        users[user]["first_name"] + "&last_name=" + users[user]["last_name"] + "&email=" + users[user]["email"] + 
			        "&nickname=" + users[user]["nickname"] + "&course=" + users[user]["course"] + "&ga=" + users[user]["ga"];
			        console.log(query);
				jQuery.ajax({
			       type: "POST",
			       url: ajaxurl,
			       data: query,

			       success: function(msg){
			            jQuery('.vehicle-value-box').html(msg+",00€");
			            
			            
			            location.reload();
			       }
			});
				current += 1;
				percentage = current / num;
				jQuery('.progress-bar').text(percentage + '%');
				jQuery('.progress-bar').css('width',percentage+'%');
			}
			
		})
	</script>
	
	<?php 
		global $curent_user;
		get_currentuserinfo();
	?>

	<?php
		$status = 0;
		if ($ga == 'n'){
			$status = 0;
		} 
		elseif ($ga == 'y' && $bscp >= 3 && $ap >= 3 && $fp >= 3 && $tdw >= 2 && $core >= 2){
			$status = 3;
		}
		elseif ($ga == 'y' && $bscp >= 2 && $ap >= 2 && $fp >= 2 && $tdw >= 1 && $core >= 2){
			$status = 2;
		}
		elseif ($ga == 'y' && $bscp >= 1 && $ap >= 1 && $fp >= 1 && $tdw >= 0 && $core >= 1){
			$status = 1;
		}
		elseif ($ga == 'y' && $bscp >= 0 && $ap >= 0 && $fp >= 0 && $tdw >= 0 && $core >= 0){
			$status = 0;
		}
	?>

	<p>Name: <?php echo $current_user->first_name . " "; echo $current_user->last_name; ?></p>
	<p>ID Number: <?php echo $current_user->user_login; ?></P>
	<p>Course: <?php echo $current_user->course; ?></p>
	<p>BSCP: <?php echo $current_user->bscp; ?></p>
	<p>AP: <?php echo $current_user->ap; ?></p>
	<p>FP: <?php echo $current_user->fp; ?></p>
	<p>TDW: <?php echo $current_user->tdw; ?></p>
	<p>Core Team: <?php echo $current_user->core; ?></p>
	<p>GA: <?php echo $current_user->ga; ?></p>
	<p>Status: <?php echo $status ?></p>

</body>

</html>

<?php
	get_footer();
?>