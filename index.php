<?php
/**
 * 一个轻量级Typecho主题
 *
 * @package Hikari
 * @author CDog
 * @version 0.1
 * @link http://cdog.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="main-left-outer" role="main">
  <div class="main-left inner">
    <?php while($this->next()): ?>
          <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
        <ul class="post-meta">
          <li itemprop="author" itemscope itemtype="http://schema.org/Person"><i class="fa fa-user"></i><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
          <li><i class="fa fa-calendar"></i><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></li>
          <li><i class="fa fa-hashtag"></i><?php $this->category(','); ?></li>
          <li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
        </ul>
              <div class="post-content" itemprop="articleBody">
            <?php $this->excerpt(180, '...');  ?>
              </div>
          </article>
    <?php endwhile; ?>

      <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
  </div>

</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
