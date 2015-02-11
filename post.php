<?php $this->need('header.php'); ?>
			<div class="post text">
				<div class="date" data-day="<?php $this->date('d'); ?>" data-month="Jun">
					<span class="day"><?php $this->date('d'); ?></span>
					<?php $this->date('M'); ?>
				</div>				
				<div class="entry">
					<h1><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?> 的永久连接"><?php $this->title() ?></a></h1>
					<?php $this->content('ReadMore'); ?>
					<!--div class="tags"><a href="#" title="nome"><span>nome</span></a></div-->
				</div>
				<div class="meta">
					<div class="details">
						<?php $this->category(','); ?>
						<a href="<?php $this->permalink() ?>#comments" title="Comments"><?php $this->commentsNum('暂无评论', '1 条评论', '%d 条评论'); ?></a>
					</div>
				</div>
				<div class="clear"></div>
			</div><!-- /post -->
			<div class="clear"></div>
		<?php $this->need('comments.php'); ?>
	<?php $this->need('footer.php'); ?>
