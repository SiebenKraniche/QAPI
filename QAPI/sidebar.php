<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="col-mb-12 col-offset-1 col-3 kit-hidden-tb" id="secondary" role="complementary">
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>

<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
<h4>文章总数：<?php $stat->publishedPostsNum() ?>篇
<h4>分类总数：<?php $stat->categoriesNum() ?>个
<h4>评论总数：<?php $stat->publishedCommentsNum() ?>条
<h4>页面总数：<?php $stat->publishedPagesNum() ?>个
        </section>
    <?php endif; ?>

</div><!-- end #sidebar -->