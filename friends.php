<?php
/**
 *  友链
 * @package custom
 *
 */
$this->need('header.php');
?>
<div class="mdui-container">
    <div class="vContainer">
        <div class="mdui-row">
            <div class="mdui-col-md-10 mdui-col-offset-md-1 aboutPage-html">
            <style>
               .an h2 {
	font-size: 0;
	text-shadow: 0 2px 5px rgba(0,0,0,.5);
	font-weight: 300;
}
.an h2:after {
	content: '<?php $this->title() ?>';
	font-size: 34px;
	letter-spacing: 6px;
	border-bottom: solid 2px #fefefe;
}
.an h3 {
	font-size: 0;
	text-shadow: 0 2px 5px rgba(0,0,0,.5);
	margin-top: 24px;
	font-weight: 300;
}
.an h3:after {
	content: '<?php $this->date(); ?> · 浏览量 ：<?php get_post_view($this) ?>';
	font-size: 16px;
	letter-spacing: 3px;
}
</style>   
                <div class="mdui-row ab-pageBody linksPanel">
                    <div class="mdui-col-md-12">
                        <div class="ab-con page" itemprop="articleBody">
                            <?php $this->content();
?>
                            <a class="linkCard">
                                <div class="linkIcon" style="background-image: url('http://img.hb.aicdn.com/7dd79ec3bf99c6bcdfcd95dc5ad9d18aa661567918322-riM35x_fw658')"></div>
                                <div class="linkData">
                                    <h3>友链卡片</h3>
                                    <p>会不会想看一下</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mdui-divider" style="margin: 12px 0"></div>
                <?php $this->need('comments.php');
?>
            </div>
        </div>
    </div>
</div>
<?php $this->need('sidebar.php');
?>
<?php $this->need('footer.php');
?>
<?php require 'run.php';
?>