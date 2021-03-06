<?php
/**
 *  归档
 * @package custom
 *
 */
$this->need('header.php');
?>
<div class="mdui-container">
    <div class="vContainer">
        <div class="mdui-row">
            <div class="mdui-col-md-10 pagefile mdui-col-offset-md-1">
                <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
$year = 0;
$mon = 0;
$i = 0;
$j = 0;
$output = '<div class="archives">';
while ($archives->next()) :
                    $year_tmp = date('Y', $archives->created);
$mon_tmp = date('m', $archives->created);
$y = $year;
$m = $mon;
if ($mon != $mon_tmp && $mon > 0) {
	$output .= '</ul></li>';
}
if ($year != $year_tmp && $year > 0) {
	$output .= '</ul>';
}
if ($year != $year_tmp) {
	$year = $year_tmp;
	$output .= '<h3 class="pf_year">' . $year . ' 年</h3><ul class="pf_mon_list">';
	//输出年份
}
if ($mon != $mon_tmp) {
	$mon = $mon_tmp;
	$output .= '<li><div class="pf_mon">' . $mon . ' 月</div><ul class="pf_post_list">';
	//输出月份
}
$output .= '<li><span>' . date('d日 h:i：', $archives->created) . '</span>' . '<a href="' . $archives->permalink . '">' . $archives->title . '</a>  </li>';
//输出文章日期和标题
// <em>('. $archives->commentsNum.')</em>
endwhile;
$output .= '</ul></li></ul></div>';
echo $output;
?>
                <?php if (!defined('__TYPECHO_ROOT_DIR__')) {
	exit;
}
?>
            </div>
        </div>
    </div>
</div>
<?php $this->need('sidebar.php');
?>
<?php $this->need('footer.php');
?>