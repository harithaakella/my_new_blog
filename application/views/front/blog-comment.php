
	<div class="row">
			<div class="col-sm-8 col-sm-offset-2">

				<div id="comments">	
					<h3 class="comments-title"><?php echo ($post->comments->count() > 1 ? $post->comments->count().' Comments' : $post->comments->count().' Comment')?></h3>
					<a href="#respond" class="leave-comment">Leave a Comment</a>
					
					<?php if($post->comments->count() > 0): ?>
				
					<ol class="comments-list">
					
					<?php foreach($post->comments as $comment):?>
						<li class="comment">
							<div>
								<img src="<?php echo site_url('assets/img/avatar.png')?>" alt="Avatar" class="avatar">
												
								<div class="comment-meta">
									<span class="author"><a href="#"><?php echo $comment->name?></a></span>
									<span class="date"><a href="#"><?php echo $comment->created_at?></a></span>
								</div>

								<div class="comment-body">
									<?php echo htmlspecialchars($comment->content)?>
								</div>
							</div>
						</li>
						<?php endforeach; ?>
					</ol>
					<?php endif;?>
					
					<?php $this->view('dashboard/_alert')?>
					
					<div class="clearfix"></div>

					<div id="respond">
						<h3 id="reply-title">Leave a Comment</h3>
						<?php echo form_open('posts/'.$post->id.'#comments')?>
							<input type="hidden" name="id" value="<?php echo $post->id?>">
							<div class="form-group">
								<label for="inputName">Name</label>
								<input type="text" class="form-control" name="name" value="<?php echo set_value('name')?>" placeholder="Enter your name">
								<p class="help-block"><?php echo form_error('name'); ?></p>
							</div>
							<div class="form-group">
								<label for="inputComment">Comment</label>
								<textarea class="form-control" name="comment" rows="6" placeholder="Enter your comment"><?php echo set_value('comment')?></textarea>
								<p class="help-block"><?php echo form_error('comment'); ?></p>
							</div>
							<div class="row">
								<div class="col-md-4">
  									<button type="submit" value="comment" class="btn btn-action">Submit</button>
								</div>
							</div>
						</form>
					</div> <!-- /respond -->
				</div>
			</div>
		</div> <!-- /row comments -->
		<div class="clearfix"></div>