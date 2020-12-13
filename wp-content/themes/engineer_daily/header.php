<body>
<div id="container">
    <div id="header">
        <h1>Web engineer daily</h1>
        <div id="menu">
            <ul>
                <li class="home"><a href="index.html">ホーム</a></li>
                <li><a href="service.html">事業内容</a></li>
                <li><a href="company.html">会社概要</a></li>
				<li><a href="archive-news.html">お知らせ</a></li>
				<li><a href="archive-news.html">ブログ</a></li>                
                <li><a href="contact.html">お問い合わせ</a></li>
            </ul>
        </div><!-- /#menu -->
    </div><!-- /#header -->
    <div class="header-main-image">
    <img src="<?php echo get_template_directory_uri() ?>/img/Web-engineer.jpg" alt="">
    </div>
    <div id="slide">
        <ul class="slideInner">
            <li><img src="<?php echo get_template_directory_uri() ?>./img/icatch01.jpg" alt=""></li>
            <li><img src="images/icatch02.jpg" alt="" width="940" height="300" /></li>
            <li><img src="images/icatch03.jpg" alt="" width="940" height="300" /></li>
        </ul>
         <div class="slidePrev"><img src="images/nav_prev.png" alt="前へ"></div>
         <div class="slideNext"><img src="images/nav_next.png" alt="次へ"></div>
         <div class="controlNav"></div>
    </div><!-- /#slide -->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<?php wp_head(); ?>
<link rel="icon" href="./img/icon-home.png">
<?php if( !(is_home() || is_front_page() )): ?>
<div class="breadcrumb-area">
<?php
if ( function_exists( 'bcn_display' ) ) {
bcn_display();
}
?>
</div>
<?php endif; ?>