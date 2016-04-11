<div class="bottombar-wrapper" role="complementary">
    <div class="bottombar" >
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget divider">
        <h3 class="widget-title"><?php _e('最新文章'); ?></h3>
        <ul class="widget-list fa-ul">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>


    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="widget divider bottom-tag">
        <h3 class="widget-title"><?php _e('分类'); ?></h3>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list fa-ul'); ?>
    </section>
    <?php endif; ?>

     <section class="widget bottom-tag">
    <h3 class="widget-title"><?php _e('Links'); ?></h3>
        <?php Links_Plugin::output(); ?>
    </section>

    </div>


</div>
