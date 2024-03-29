<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>"><br/><br/>
<div class="post-body">
	<p><?php echo $post['body']; ?></p>
</div>

<?php if ($this->session->userdata('user_id') == $post['user_id'] || isAdmin()): ?>

	<hr>
	<a class="btn btn-primary pull-left"
	   href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
	<?php echo form_open('/posts/delete/' . $post['id']); ?>
	<input type="submit" value="Delete" class="btn btn-danger">
	<?php echo form_close(); ?>

<?php endif; ?>
<hr>
<h3>Comments</h3>
<?php if ($comments) : ?>
	<?php foreach ($comments as $comment) : ?>
		<div class="wel">
			<h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?> </strong>]</h5>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p>No comments To Display</p>
<?php endif; ?>
<hr>
<h3>Add Comment</h3>

<?php echo form_open('comments/create/' . $post['id']); ?>
<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" class="form-control">
</div>
<div class="form-group">
	<label>Email</label>
	<input type="text" name="email" class="form-control">
</div>
<div class="form-group">
	<label>Body</label>
	<textarea name="body" class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
<button class="btn btn-primary" type="submit">Submit</button>
<?php echo form_close(); ?>
