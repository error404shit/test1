<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>  itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	<link itemprop="mainEntityOfPage" href="<?php the_permalink(); ?>" />
	<header class="genpost-entry-header">
		<meta itemprop="author" content="<?php the_author();?>">
		<meta itemprop="datePublished" content="<?php the_time('c'); ?> ">
		<meta itemprop="dateModified" content="<?php the_modified_time('c'); ?>">

		<span itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
		<?php $logo = get_theme_mod( 'site_logo', '' ); 
		if ( !empty($logo) ) : ?>
		<span itemprop="logo" itemprop='image' itemscope itemtype='http://schema.org/ImageObject'>
		<meta itemprop="url" content="<?php echo esc_url( $logo ); ?>">
		</span>
		<?php endif; ?>
		<meta itemprop="name" content="<?php bloginfo( 'name' ); ?>">
		</span>

		<?php  
		global $lang_support;
		$lang = get_theme_mod( 'force_locale', 'en' );
		?>
		<meta itemprop="inLanguage" content="<?php echo $lang_support['html'][$lang]; ?>">
	</header>

	<div class="single-post-title"><h3 itemprop="headline"><?php the_title(); ?></h3></div>
	<?php get_template_part('template-parts/content', 'sharing');?>	
	<div class="content-post" itemprop="articleBody">
	<div class="col-sm-12 col-xs-12 col-md-12" >
	<?php the_content(); ?>
	</div>
	</div>
</article>