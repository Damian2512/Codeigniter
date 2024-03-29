<html>
<head>
	<title>CodeigniterBlog</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
		<?php if ($this->session->userdata('logged_in')) : ?>
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>about">About</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a></li>
		</ul>
	</div>
	<?php endif; ?>
	<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
		<ul class="navbar-nav ml-auto">
			<?php if (!$this->session->userdata('logged_in')) : ?>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
				</li>
			<?php endif; ?>
			<?php if ($this->session->userdata('logged_in')) : ?>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
				</li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create
						Category</a></li>
				<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
			<?php endif; ?>
		</ul>
</nav>

<br>
<br>


<div class="container">
<!--	flash messages -->
	<?php if ($this->session->flashdata('user_registered')): ?>
	<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
	<?php endif; ?>

	<?php if ($this->session->flashdata('post_created')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
	<?php endif; ?>

	<?php if ($this->session->flashdata('post_updated')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
	<?php endif; ?>

	<?php if ($this->session->flashdata('category_created')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
	<?php endif; ?>

	<?php if ($this->session->flashdata('post_deleted')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
	<?php endif; ?>

	<?php if ($this->session->flashdata('login_failed')): ?>
		<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
	<?php endif; ?>

	<?php if ($this->session->flashdata('login_loggedin')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_loggedin').'</p>'; ?>
	<?php endif; ?>

	<?php if ($this->session->flashdata('login_loggedout')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_loggedout').'</p>'; ?>
	<?php endif; ?>

	<?php if ($this->session->flashdata('category_deleted')): ?>
		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
	<?php endif; ?>
