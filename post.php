<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
	exit;
}
$this->need('header.php')
?>
<div class="mdui-container">
    <div class="vContainer">
      <div class="mdui-row">
        <div class="mdui-col-md-3 mdui-hidden-sm mdui-hidden-xs">
        <?php getCatalog();
?>
            <div class="page-readNow" id="pTitle-list">
                <div class="readNow-list"></div>
                <div style="margin-top: 24px">
                    <div class="PnP-item">
                        上一条 ：<?php $this->thePrev('%s', '没啦');
?>
                    </div>
                    <div class="PnP-item">
                        下一条 ：<?php $this->theNext('%s', '没啦');
?>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="mdui-col-md-8 page-file-body">
            <div class="getTitle">
                <div class="post-page-body">
                    <div class="page-head-data">
                        <div class="mdui-float-right post-page-moreTools">
                            <button class="mdui-btn">
                                <i class="fa fa-thumbs-o-up"></i>
                            </button>
                            <button class="mdui-btn">
                                <i class="fa fa-refresh"></i>
                            </button>
                            <button class="mdui-btn">
                                <i class="fa fa-share"></i>
                            </button>
                        </div>
                        <div style="clear: both"></div>
                        <div class="post-page-content page">
                            <?php $this->content('Continue Reading...');
?>
                            <div class="mdui-divider" style="margin-top: 30px;margin-bottom: 16px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            if (typeof Prism !== 'undefined') {
	var pres = document.getElementsByTagName('pre');
	for (var i = 0; i < pres.length; i++) {
		if (pres[i].getElementsByTagName('code').length > 0)
				                pres[i].className  = 'line-numbers';
	}
	Prism.highlightAll(true,null);
}
</script>
<script>
$(window).scroll(function() {
	var tops = $(this).scrollTop();
	$('#toc-container').css( {
		'top':tops
	}
	)
}
)
</script>
                <div class="post-page-comment">
                    <?php $this->need('comments.php');
?>
                </div>
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