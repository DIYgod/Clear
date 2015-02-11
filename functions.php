<?php

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填写URL'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}
    function threadedComments($comments,$singleCommentOptions) {
            $author = '<a href="'.$comments->url.'" rel="external nofollow" target="_blank">'.$comments->author.'</a>';
        ?>
	<li id="<?php $comments->theId(); ?>" class="<? if($comments->levels > 0){
                echo 'comment-child';
            }else{
                echo 'comment-parent';
            }
            if($comments->levels > 1){
                echo ' comment-depth';
            }
            ?>">
		<div id="div-<?php $comments->theId(); ?>" class="comment-info">
            <div class="comment-authorinfo">
			    <?php $comments->gravatar(48, 'mm'); ?>
                <div class="comment-text">
                    <span class="comment-author"><?php echo $author; ?></span>
				    <span class="comment-time"><?php $comments->date('Y-m-d H:i:s') ?></span>
                </div>
                <div class="comment-reply">
				    <?php $comments->reply('Reply') ?>
                </div>
            </div>
            <div class="comment-content">
                <?php $comments->content(); ?>
            </div>
            <div class="comment-children">
                <?php if ($comments->children) { ?><?php $comments->threadedComments($singleCommentOptions); ?><?php } ?>
            </div>
		</div>
	</li>
<?php } ?>