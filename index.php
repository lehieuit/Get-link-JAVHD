<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quay thoả thích :D</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<meta property="og:type" content="article" />
	<meta property="og:description" content="Chúc các bạn xem phim vui vẽ!" />
	<meta property="og:image" content="http://i.imgur.com/4KQ5c3o.jpg" />
	<meta property="article:author" content="https://www.facebook.com/duongtuanqb" />
<?php
require_once 'simple_html_dom.php';

if(isset($_POST['submit'])){
	$html = file_get_html($_POST["video_url"]);
	$get_link = $html->find("div.player-container");
	$str = $get_link[0]->style;
	$name_link = explode('/', $str);
	$final_link = str_replace('-p','',$name_link[4]);
	if ( $final_link ) {
		$video = '<div class="row"><div class="col-sm-12 text-center"><video controls="" name="media"><source src="http://cs92.wpc.alphacdn.net/802D70B/OriginJHVD/contents/'.$final_link.'/videos/'.$final_link.'_'.$_POST['chat-luong'].'.mp4?cdn_hash=d9efb50e13ae7d927ca5d87f9502ed2c&cdn_creation_time=1461863271&cdn_ttl=1200&cdn_cv_memberid=14" type="video/mp4"></video></div></div>';
		echo '<script>$(document).ready(function(){$("#hien-video").html(\''.$video.'\');});</script>';
	} else {
		echo '<script>$(document).ready(function(){$("#bao-loi").css("display","block");});</script>';
	}
}
?>
</head>

<body>

	<div class="container">

		<div class="row">

			<div class="col-sm-12 text-center">
				<br/><br/><a href="http://javhd.com/en/japanese-porn-videos" target="_blank"><button type="button" class="btn btn-primary ">Open Site JAVHD</button></a>
			</div>

		</div>

		<div class="row">
			<div class="col-sm-12" id="bao-loi" style="display:none;"><br/><br/>
				<div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Lỗi:</span> Nhập sai link JAVHD.NET rồi cưng!
				</div>
			</div>

			<form class="form-horizontal" action="" method="POST">
				<div class="col-sm-12">
			    	<label for="video_url">Video URL</label>
				    <div class="input-group">
				      <span class="input-group-addon"><span class="glyphicon glyphicon-link"></span></span>
				      <input type="text" class="form-control" id="video_url" name="video_url" placeholder="http://javhd.com/en/id/17870/shiori-ayase-office-babe-blows-her-bosss-dick" autocomplete="off" autofocus="" required="">
				       <div class="input-group-btn"><button type="submit" name="submit" class="btn btn-danger">Xem Phim <span class="glyphicon glyphicon-facetime-video"></span></button></div>
				    </div><br/>
				</div>

				<div class="col-sm-12 text-center">
					<label for="chat-luong">Chọn chất lượng:</label>
					<label class="radio-inline"><input type="radio" name="chat-luong" id="chat-luong" value="hq" checked> High Quality</label>
					<label class="radio-inline"><input type="radio" name="chat-luong" id="chat-luong" value="med"> Normal Quality</label>
					<label class="radio-inline"><input type="radio" name="chat-luong" id="chat-luong" value="low"> Low Quality</label>
				</div>
			</form>	

		</div>

		<div class="row">
		
			<div class="col-sm-12 text-center">
			<br/>Example link :<i> http://javhd.com/en/id/17870/shiori-ayase-office-babe-blows-her-bosss-dick</i> <br/><br/>
			<?php if ($_POST["video_url"] && $final_link) { ?><font color='red'>LINK YOU GET: </font><font color='blue'><?php echo($_POST["video_url"]); ?></font><br/><br/><?php } ?>

			<div id="hien-video"></div>
			</div>

		</div>
		<div class="row">
		
			<div class="col-sm-12 text-center">
				<script id="_wauf91">var _wau = _wau || []; _wau.push(["small", "5wqmcfz0rtgn", "f91"]);
				(function() {var s=document.createElement("script"); s.async=true;
				s.src="http://widgets.amung.us/small.js";
				document.getElementsByTagName("head")[0].appendChild(s);
				})();</script>
			</div>
		</div>

	</div>

</body>
</html>
