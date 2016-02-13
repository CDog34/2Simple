<?php
/**
 * 2 Young 2 Simple Sometimes Naive
 *
 * @package 2Simple
 * @author CDog
 * @version 1.1
 * @link http://cdog.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="page-body">
  <?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
          <h2 class="post-title " itemprop="name headline"><a itemtype="url" class="no-underline" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
          <div class='post-stage'>
            <ul class="post-meta">
              <li itemprop="author" itemscope itemtype="http://schema.org/Person"><i class="fa fa-user"></i><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
              <li><i class="fa fa-calendar"></i><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
              <li><i class="fa fa-hashtag"></i><?php $this->category(','); ?></li>
              <li itemprop="interactionCount"><i class="fa fa-comment"></i><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
            </ul>
            <div class="post-summary" itemprop="articleBody">
              <?php $this->excerpt(180, '...');  ?>
            </div>
          </div>
          
        </article>
  <?php endwhile; ?>

  <div class="pagenav clearfix">
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
  </div>


</div>


<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
