<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $headImg = new Typecho_Widget_Helper_Form_Element_Text('headImg', NULL, NULL, _t('首页大图地址'), _t('在这里填入一个图片URL地址, 推荐使用：<a href="https://tat.pics/" target="_blank">TAT 塔塔图床</a>'));
    $form->addInput($headImg);

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock',
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowCategory' => _t('显示分类')),
    array('ShowRecentPosts', 'ShowCategory'), _t('侧边栏显示'));

    $form->addInput($sidebarBlock->multiMode());
}

function mytheme_get_avatar($avatar) {
$avatar = str_replace(array("www.gravatar.com","0.gravatar.com","1.gravatar.com","2.gravatar.com"),"gravatar.duoshuo.com",$avatar);
return $avatar;
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/
