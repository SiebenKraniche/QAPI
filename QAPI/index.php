<?php
/**
 * 这是一个由API调用的简约随机背景博客主题
 * 本主题基于官方主题的基础下进行的二开和美化
 * 作者github:https://github.com/SiebenKraniche
 *
 * @package QAPI
 * @author 七鹤
 * @version 1.0
 * @link https://blog.qhyun.cc/
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<html>
	<head>
		<meta charset="utf-8">
		<style>
			body{
				background-size: 100% ;
			}
		</style>
	</head>
	<body background="https://api.ixiaowai.cn/api/api.php" >
	</body>
</html>
<div class="col-mb-12 col-8" id="main" role="main">
    <?php while ($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
            <h2 class="post-title" itemprop="name headline">
                <a itemprop="url"
                   href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            </h2>
            <ul class="post-meta">
                <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a
                        itemprop="name" href="<?php $this->author->permalink(); ?>"
                        rel="author"><?php $this->author(); ?></a></li>
                <li><?php _e('时间: '); ?>
                    <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
                </li>
                <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
                <li itemprop="interactionCount">
                    <a itemprop="discussionUrl"
                       href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
                </li>
            </ul>
            <div class="post-content" itemprop="articleBody">
                <?php $this->content('- 阅读剩余部分 -'); ?>
            </div>
        </article>
    <?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
