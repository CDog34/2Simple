<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>



<div class="page-body in-post">
<article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
   <ul class="post-meta">
              <li itemprop="author" itemscope itemtype="http://schema.org/Person"><i class="fa fa-user"></i><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
              <li><i class="fa fa-calendar"></i><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
              <li><i class="fa fa-hashtag"></i><?php $this->category(','); ?></li>
              <li itemprop="interactionCount"><i class="fa fa-comment"></i><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
    </ul>
    <div class="post-content" itemprop="articleBody">
        <?php $this->content(); ?>
    </div>
</article>
<div class='pagenav clearfix'>
    <ol class="post-near page-navigator">
        <li class="prev">上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li class="next">下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ol>
</div>

<?php $this->need('comments.php'); ?>

</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
