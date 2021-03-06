<?php
/**
 * @package Readly
 * @since Readly 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta">
			<?php readly_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php if ('link' !== get_post_format()): ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php
	$post_format = get_post_format();
	if ('audio' == $post_format) readly_formatted_audio();
	elseif ('video' == $post_format) readly_formatted_video();
	elseif ('image' == $post_format) readly_formatted_image();
	elseif ('gallery' == $post_format) {
		$result = wpShower::getContentAndAttachments();
		echo readly_formatted_gallery($result['attachments'], 'readly_big');
	}
	?>

	<div class="entry-content">
		<?php
		if ('gallery' == $post_format) echo $result['content'];
		else the_content(__('Read More<span></span>', 'readly'));
		?>
		<?php wp_link_pages(array('before' => '<div class="page-links">'.__('Pages:', 'readly'), 'after' => '</div>')); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list(__(', ', 'readly'));

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list('', __(', ', 'readly'));

			if (!readly_categorized_blog()) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ('' != $tag_list) {
					$meta_text = __('Tagged %2$s', 'readly');
				}
				else {
					$meta_text = '';
				}
			}
			else {
				// But this blog has loads of categories so we should probably display them here
				if ('' != $tag_list) {
					$meta_text = __('Posted in %1$s<span class="sep"> &#183; </span>Tagged %2$s', 'readly');
				}
				else {
					$meta_text = __('Posted in %1$s', 'readly');
				}
			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute('echo=0')
			);
		?>

		<?php edit_post_link(__('Edit', 'readly'), '<span class="edit-link">', '</span>'); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
