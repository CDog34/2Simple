<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php //if (!$_SERVER['HTTP_X_PJAX']) {
?>

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
    <link rel="stylesheet" href="//filehost.izhai.net/web/font-awesome/4.5.0/css/font-awesome.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('load.css'); ?>">


    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
    <?php if (!$this->is('index')){ ?>
    <style>
        header{
            height: 40vh;
        }
        nav{
            top:40vh;
        }

    </style>
    <?php } ?>

</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
</div>
<header id="header" class="clearfix" style="background-image:url(<?php echo $this->options->headImg ? $this->options->headImg : 'https://tat.pics/v/1455170477299Konachan.com_-_65450_brown_eyes_brown_hair_misaka_mikoto_seifuku_short_hair_to_aru_kagaku_no_railgun_to_aru_majutsu_no_index_vector.jpg' ?>)">
    <div class="site-meta" >
        <h1 class="site-title ">
        <a id="logo"  class="header-words" href="<?php $this->options->siteUrl(); ?>">
            <?php $this->options->title() ?>
        </a>
        </h1>
        <p class="site-description header-words"><?php $this->options->description() ?></p>
    </div><!-- end .site-meta -->
    <div class="going-down header-words fly-to-view">
      <i class="fa fa-angle-double-down"></i>
    </div>
</header><!-- end #header -->
<nav id="nav-menu" class="clearfix" role="navigation">
    <div class="nav-inner">
        <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
        <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
        <?php endwhile; ?>
    </div>                
</nav>
<div class="body-wrapper" id="pp">
    <!--
    <?php //}else{?>
        <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    -->
   <?php //} ?>
