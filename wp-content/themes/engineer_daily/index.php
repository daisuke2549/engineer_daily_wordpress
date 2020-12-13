<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript">
$(function() {
    $('#slide').slideshow({
        autoSlide    : true,
        effect       : 'fade',
        type         : 'repeat',
        interval     : 3000,
        duration     : 500,
        imgHoverStop : true,
        navHoverStop : true
    });
    $(window).load(function() {
        $(".topNaviColumn").uniformHeight();
    });
});
</script>
<title>Engineer daily</title>
</head>
<?php get_header(); ?>
    <div id="contents">

        <div id="conL">
            <div class="information">
                <h2>INFORMATION</h2>
                <dl>
                    <dt>2013-08-04</dt>
                    <dd>
                    <span class="tab tag_gyoumu">業務について</span>
                    <a href="sample.html">2012年（平成24年）度の採用情報</a>を更新しました。</dd>

                    <dt>2013-08-03</dt>
                    <dd>
					<span class="tab tag_release">リリース</span>
                    <a href="sample.html">制作実績のページ</a>を更新しました。</dd>
                    <dt>2013-08-02</dt>
                    <dd>
					<span class="tab tag_gyoumu">業務について</span>
                    <a href="sample.html">2012年（平成24年）度の採用情報</a>を更新しました。</dd>
                    <dt>2013-08-01</dt>
                    <dd>
                    <span class="tab tag_gyoumu">業務について</span>
                    <a href="sample.html">制作実績のページ</a>を更新しました。</dd>
                </dl>
            </div>
            <!-- /.information -->
                <!-- article list -->
                <main id="primary">
            <div class="article-title"><h2>投稿記事一覧</h2></div>
                <?php
                //記事があればentriesブロック以下を表示
                if (have_posts() ) : ?>

                <!-- entries -->
                <div class="entries">
                <?php
                //記事数ぶんループ
                while ( have_posts() ) :
                the_post(); ?>

                <!-- entry-item-img -->
                <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="entry-item">
                <!-- entry-item-img -->
                <div class="entry-item-img">
                <?php
                if (has_post_thumbnail() ) {
                // アイキャッチ画像が設定されてれば大サイズで表示
                the_post_thumbnail('large');
                } else {
                // なければnoimage画像をデフォルトで表示
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                }
                ?>
                </div><!-- /entry-item-img -->
                <!-- entry-item-body -->
                <div class="entry-item-body">
                <div class="entry-item-meta">
                <?php
                    // カテゴリー１つ目の名前を表示
                    $category = get_the_category();
                    if ($category[0] ) {
                    echo '<div class="entry-item-tag">' . $category[0]->cat_name . '</div><!-- /entry-item-tag -->';
                    }
                    ?>
                <time class="entry-item-published" datetime=<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time><!-- /entry-item-published -->
                </div><!-- /entry-item-meta -->
                <h2 class="entry-item-title"><?php the_title(); //タイトルを表示 ?></h2><!-- /entry-item-title -->
                <div class="entry-item-excerpt">
                <?php the_excerpt(); //抜粋を表示 ?>
                </div><!-- /entry-item-excerpt -->
                </div><!-- /entry-item-body -->
                </a><!-- /entry-item -->

                <?php
                endwhile;
                ?>
                </div><!-- /entries -->
                <?php endif; ?>

                <?php if (paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>
                <!-- pagenation -->
                <div class="pagenation">
                <?php
                echo
                paginate_links(
                array(
                'end_size' => 1,
                'mid_size' => 1,
                'prev_next' => true,
                'prev_text' => '<i class="fas fa-angle-left"></i>',
                'next_text' => '<i class="fas fa-angle-right"></i>',
                )
                );
                ?>
                </div><!-- /pagenation -->
                <?php endif; ?>

                </main><!-- /article list -->
            <div class="bnrL">
                <ul>
                    <li><a href="index.html"><img src="images/bnr_l.jpg" alt="" /></a></li>
                    <li><a href="index.html"><img src="images/bnr_l.jpg" alt="" /></a></li>
                    <li><a href="index.html"><img src="images/bnr_l.jpg" alt="" /></a></li>
                </ul>
            </div><!-- /.bnrL -->
        </div><!-- /.conL -->
    </div><!-- /#contents -->
             <?php get_sidebar(); ?>
              <?php get_footer(); ?>
</body>
</html>