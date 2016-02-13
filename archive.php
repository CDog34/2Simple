<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="page-body">
  <h3 class="archive-title"><?php $this->archiveTitle(array(
      'category'  =>  _t('分类 %s 下的文章'),
      'search'    =>  _t('包含关键字 %s 的文章'),
      'tag'       =>  _t('标签 %s 下的文章'),
      'author'    =>  _t('%s 发布的文章')
  ), '', ''); ?></h3>
  <?php if ($this->have()): ?>
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
  <?php else: ?>
      <article class="post">
          <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
      </article>
  <?php endif; ?>

  <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
