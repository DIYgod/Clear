<?php
/**
 * @package Cleanr
 * @author aofall
 * @version 0.1.2
 * @link https://github.com/DIYgod/Clear
 */
 
 $this->need('header.php');
 ?>
	<?php while($this->next()): ?>
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
	<?php endwhile; ?>
			<div class="clear"></div>

			<div id="pagination">

				<div class="prev active"><?php $this->pageLink('<span class="arrow"></span><span class="title">Prev</span><span class="cap"></span>', 'prev'); ?></div>
				<div class="next active"><?php $this->pageLink('<span class="cap"></span><span class="title">Next</span><span class="arrow"></span>', 'next'); ?></div>
			</div><!-- /pagination -->

			<div class="clear"></div>
		</div><!-- /content -->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
