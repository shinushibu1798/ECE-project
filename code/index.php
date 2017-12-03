<html>
<head>
	<meta charset="utf-8">
	<title>Main Menu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!--standard mui.css-->
	<link rel="stylesheet" href="css/mui.min.css">
	<link rel="stylesheet" type="text/css" href="css/icons-extra.css" />
	<!--App customized css-->
	<link rel="stylesheet" type="text/css" href="css/app.css"/>
	<style>
	.flex-container {
		display: -webkit-box;
		display: -webkit-flex;
		display: flex;
		-webkit-flex-flow: row wrap;
		justify-content: space-between;
		text-align: center;
	}
	
	.mui-content-padded {
		padding: 10px;
	}
	
	.mui-content-padded a {
		margin: 3px;
		width: 50px;
		height: 50px;
		display: inline-block;
		text-align: center;
		background-color: #fff;
		border: 1px solid #ddd;
		border-radius: 25px;
		background-clip: padding-box;
	}
	
	.mui-content-padded a .mui-icon-extra {
		margin-top: 12px;
	}
	
	.mui-spinner,
	.mui-spinner-white {
		margin-top: 12px
	}
	
	.active .mui-spinner-indicator {
		background: #007AFF;
	}
	
	.mui-content a {
		color: #8F8F94;
	}
	
	.mui-content a.active {
		color: #007aff;
	}
</style>   
<link href="calendar.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<?php
	include 'calendar.php';

	$calendar = new Calendar();

	echo $calendar->show();
	?>
	<header class="mui-bar mui-bar-nav">
		<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
		<h1 class="mui-title"> Menu </h1>
	</header>
	<script src="js/mui.min.js"></script>
	<script type="text/javascript" charset="utf-8">
		mui.init({
			swipeBack: true //Enable right slide off function
		});
		var active = null,
		lastid, span;
		mui(".mui-content").on("tap", "a", function() {
			var id = this.getAttribute("id");
			if(!active) {
				this.classList.add("active");
				if(id) {
					span = this.querySelector("span");
					span.classList.remove("mui-" + id);
					span.classList.add("mui-" + id + "-filled");
				}
				active = this;
			} else {
				active.classList.remove("active");
				if(lastid) {
					span.classList.remove("mui-" + lastid + "-filled");
					span.classList.add("mui-" + lastid);
				}

				this.classList.add("active");
				if(id) {
					span = this.querySelector("span");
					span.classList.remove("mui-" + id);
					span.classList.add("mui-" + id + "-filled");
				}

				active = this;
			}
			lastid = id;
		});
	</script>
</body>

