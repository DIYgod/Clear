<div id="comments">
            <?php $this->comments()->to($comments); ?>
            <?php if ($comments->have()): ?>            
            <?php $comments->pageNav(); ?>
            
            <?php $comments->listComments(); ?>
            
            <?php endif; ?>

            <?php if($this->allow('comment')): ?>
            <div id="<?php $this->respondId(); ?>" class="respond">
            
            <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
            </div>
            
            <h3>添加新评论</h3>
			<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
                <?php if($this->user->hasLogin()): ?>
				<p class="title welcome">
                    Used <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a> <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">[登出?]</a>
                    <span class="cancel-comment-reply"><?php $comments->cancelReply(); ?></span>
                </p>
                <?php else: ?>
                <?php if($this->remember('author',true) != "" && $this->remember('mail',true) != "") : ?>
                <p class="title welcome">
                    作为 <?php $this->remember('author'); ?></strong>!
                    <span class="cancel-comment-reply"><?php $comments->cancelReply(); ?></span>
                </p>
                <div class="author_info" style="display:none;">
                <?php else : ?>
                <div class="author_info">
                <?php endif ; ?>
				<p>
					<input type="text" name="author" id="author" class="text" size="15" value="<?php $this->remember('author'); ?>" />
                    <label for="author"><small>昵称(必填)</small></label>
				</p>
				<p>
					<input type="text" name="mail" id="email" class="text" size="15" value="<?php $this->remember('mail'); ?>" />
                    <label for="mail"><small>邮箱(必填)</small></label>
				</p>
				<p>
					<input type="text" name="url" id="url" class="text" size="15" value="<?php $this->remember('url'); ?>" />
                    <label for="url"><small>网站</small></label>
				</p>
                </div>
                <?php endif; ?>
<div id="author_textarea">
<textarea rows="5" cols="50" name="text" id="comment" class="textarea"><?php $this->remember('text'); ?></textarea>
<p><input type="submit" value="发射！ (Ctrl+Enter)" id="submit" class="submit" /></p>
</div>
			</form>
            </div>
            <?php else: ?>
            <h3>评论已关闭</h3>
            <?php endif; ?>
		</div>