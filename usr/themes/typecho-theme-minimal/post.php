<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">			
			<date class="post-meta">
				<?php $this->date('F j, Y'); ?>
			</date>
			<header>
				<h1 class="post-title"><?php $this->title() ?></h1>
			</header>
			<div class="post-content">
				<?php $this->content(); ?>
			</div>

			<ul class="post-artical">
        		<li class="post-artical-prev"><?php $this->thePrev('&laquo;%s'); ?></li>
        		<li class="post-artical-next"><?php $this->theNext('%s'.'&raquo;'); ?></li>
    		</ul>

			<?php if(!$this->allow('comment')): ?>
			<footer class="post-footer">
				<section class="author">
					<div class="author-ava">
						<img src="<?php echo getGravatar($this->options->navy_gravatar,160); ?>" alt="" width="160" height="160" />
					</div>
					<p><?php $this->options->navy_tips(); ?></p>
				</section>
            </footer>
            <?php endif; ?>
		</article>
		<?php if($this->allow('comment')): ?>
		<?php $this->need('comments.php'); ?>
		<?php endif; ?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
