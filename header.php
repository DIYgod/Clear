<!DOCTYPE html>
<html dir="ltr" lang="zh-CN">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title><?php $this->archiveTitle(' &raquo; ', '', ' | '); ?><?php $this->options->title(); ?></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.min.css'); ?>" />
	<link href="http://fonts.useso.com/css?family=Rokkitt" rel="stylesheet" type="text/css">
	<link href="http://fonts.useso.com/css?family=Metrophobic" rel="stylesheet" type="text/css">
	<link href="http://fonts.useso.com/css?family=Droid+Sans+Mono" rel="stylesheet" type="text/css">
	<?php $this->header(); ?>
		<style type="text/css" media="screen">
		body { background: url(<?php $this->options->logoUrl() ?>) scroll !important; }
	</style>
	<script type="text/javascript">
		var Bagua = window.Bagua || {};
		Bagua.ScrollSpeed = 40;
		Bagua.safariScrollSpeed = 0.5;
	</script>
</head>
<body>
<div id="container">

	<div id="column"> 	 	 	   

		<div id="header" class="border">
			<a name="top"></a>

			<div class="mast">
				<div id="title">
					<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
					<h3><?php $this->options->description() ?></h3>
				</div>
				<div id="nav">
					<form id="searchform" action="/" method="get">
						<input type="text" id="q" name="s" value="Search..." onblur="if(this.value == '') { this.value='Search...'}" onfocus="if (this.value == 'Search...') {this.value=''}" />
					</form>
					<ul>
						<li class="profile"><a href="<?php $this->options->siteUrl(); ?>index.php/你的关于地址"><span class="tip"><span class="bubble">About</span></span></a></li>
						<li class="twitter"><a href="http://weibo.com/这里可以填写你的微博地址，如果不想可删除这行代码"><span class="tip"><span class="bubble">Weibo</span></span></a></li>
						<!--li class="random"><a href="/random"><span class="tip"><span class="bubble">Random</span></span></a></li-->
						<!--li class="archive"><a href="/archive"><span class="tip"><span class="bubble">Archive</span></span></a></li-->
					</ul>
				</div> 	 	 	   
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div><!-- /header -->

		<div id="content" class="border">