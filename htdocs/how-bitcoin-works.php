<?php
include '../lib/common.php';

API::add('Content','getRecord',array('how-bitcoin-works'));
$query = API::send();

$content = $query['Content']['getRecord']['results'][0];
$page_title = $content['title'];

include 'includes/head.php';
?>
<div class="page_title">
	<div class="container">
		<div class="title"><h1><?= $page_title ?></h1></div>
        <div class="pagenation">&nbsp;<a href="<?= Lang::url('index.php') ?>"><?= Lang::string('home') ?></a> <i>/</i> <a href="<?= Lang::url('how-bitcoin-works.php') ?>"><?= Lang::string('how-bitcoin-works') ?></a></div>
	</div>
</div>
<div class="container">
	<div class="content_right">
    <div class="text1"><?= $content['content'] ?></div>
    </div>
    <? include 'includes/sidebar_topics.php'; ?>
	<div class="clearfix mar_top8"></div>
</div>
<? include 'includes/foot.php'; ?>