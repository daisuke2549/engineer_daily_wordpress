<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">

	<title>記事のタイトルが入ります</title>
	<meta name="description" content="">

	<meta property="og:title" content="記事のタイトルが入ります">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://example.com/archive/123/">
	<meta property="og:image" content="https://example.com/archive/123/img/ogp.png">
	<meta property="og:site_name" content="記事のタイトルが入ります">
	<meta property="og:description" content="">
	<meta name="twitter:card" content="summary_large_image">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=5.8.2">
	<link rel="stylesheet" href="/css/style.css">

	<link rel="icon" href="./img/icon-home.png">

</head>

<body>

<?php get_header(); ?>


<!-- content -->
<div id="content">
<div class="inner">

<!-- primary -->
<main id="primary">

<?php if ( function_exists( 'bcn_display' ) ) : ?>
<!-- breadcrumb -->
<div class="breadcrumb">
<?php bcn_display(); ?>
</div><!-- /breadcrumb -->
<?php endif; ?>

<?php
if ( have_posts() ) :
while ( have_posts() ) :
the_post();
?>

<!-- entry -->
<article class="entry">
<!-- entry -->
<article <?php post_class( array( 'entry' ) ); ?>>

<!-- entry-header -->
<div class="entry-header">
<?php
// カテゴリー１つ目の名前を表示
$category = get_the_category();
if ( $category[0] ) : ?>
<div class="entry-label"><a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>"><?php echo $category[0]->cat_name; ?></a></div><!-- /entry-item-tag -->
<?php endif; ?>
<h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

<!-- entry-meta -->
<div class="entry-meta">
<time class="entry-published" datetime="<?php the_time( 'c' ); ?>">公開日 <?php the_time( 'Y/n/j' ); ?></time>
<?php if ( get_the_modified_time( 'Y-m-d' ) !== get_the_time( 'Y-m-d' ) ) : ?>
<time class="entry-updated" datetime="<?php the_modified_time( 'c' ); ?>">最終更新日 <?php the_modified_time( 'Y/n/j' ); ?></time>
<?php endif; ?>
</div><!-- /entry-meta -->
<!-- entry-img -->
<div class="entry-img">
<?php
if ( has_post_thumbnail() ) {
the_post_thumbnail( 'large' );
}
?>
</div><!-- /entry-img -->
</div><!-- /entry-header -->

<!-- entry-body -->
<div class="entry-body">
<?php
//本文の表示
the_content(); ?>
<?php
//改ページを有効にするための記述
wp_link_pages(
array(
'before' => '<nav class="entry-links">',
'after' => '</nav>',
'link_before' => '',
'link_after' => '',
'next_or_number' => 'number',
'separator' => '',
)
);
?>
<?php echo do_shortcode(['btn']); ?>
<!-- entry-tag-items -->
<?php $post_tags = get_the_tags(); ?>
<div class="entry-tag-items">
<div class="entry-tag-head">タグ</div><!-- /entry-tag-head -->
<?php if ( $post_tags ) : ?>
<?php foreach ( $post_tags as $tag ) : ?>
<div class="entry-tag-item"><a href="<?php echo esc_url( get_tag_link($tag->term_id) ); ?>"><?php echo esc_html( $tag->name ); ?></a></div><!-- /entry-tag-item -->
<?php endforeach; ?>
<?php endif; ?>
</div><!-- /entry-tag-items -->
</div><!-- /entry-body -->
</article> <!-- /entry -->
<?php
endwhile;
endif;
?>

</main><!-- /primary -->

<?php get_sidebar(); ?>

</div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>


	<div class="floating">
		<a href="#"><i class="fas fa-chevron-up"></i></a>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/sns.js"></script>

</body>

</html>