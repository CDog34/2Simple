<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="//cdnjscn.b0.upaiyun.com/libs/normalize/2.1.3/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body style="background-image:url(http://tat.pics/v/14525052659001caf3dec533c6c23c9de0e1475b9494c.jpg)">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<!--<div class="global-bg" style="background-image:url(http://tat.pics/v/14525052659001caf3dec533c6c23c9de0e1475b9494c.jpg">-->

</div>
<header id="header" class="clearfix">
    <div class="container">
        <div class="site-meta" >
            <div class="site-name">
              <h1 class="site-title">
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <?php if ($this->options->logoUrl): ?>
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                    <?php endif; ?>
                    <?php $this->options->title() ?>
                </a>
              </h1>
              <div class="title-line">

              </div>
        	    <p class="description"><?php $this->options->description() ?></p>
            </div>
        </div><!-- end .row -->
    </div>
</header><!-- end #header -->
<div class="body-wrapper">
  <div class="bg-blur bg-body layer-opti" style="background-image:url(http://tat.pics/v/14525052659001caf3dec533c6c23c9de0e1475b9494c.jpg)"></div>
  <div class="bg-color layer-opti"></div>
    <div class="body-container">
        <div class="row">
