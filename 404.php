<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
	exit;
}
?>
<?php $this->need('header.php');
?>
    <div class="mdui-container">
        <div class="mdui-row">
            <div class="mdui-col-md-10 mdui-col-offset-md-1 errBody">
                <h1 class=""><?php _e('404 Not Found');
?></h1>
                <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: ');
?></p>
                <form action="" method="post" class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" name="s" placeholder="搜索内容" autocomplete="off" class="search-input">
                </form>
            </div>
        </div>
    </div>
<?php $this->need('footer.php');
?>
<?php $this->need('sidebar.php');
?>
<?php require 'run.php';
?>