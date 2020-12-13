    <!-- footer -->
    <footer id="footer">
    <div class="inner">
    <div class="by">Made by Sasaki Daisuke original theme</a></div><!-- /by -->

    </div><!-- /inner -->
    </footer><!-- /footer -->

    <!-- ここからが追記部分 -->
    <?php if(is_single()): ?>
    <!-- footer-sns -->
    <div class="footer-sns">
    <div class="inner">

    <div class="footer-sns-head">この記事をシェアする</div><!-- /footer-sns-head -->

    <nav class="footer-sns-buttons">
    <ul>
    <li><a class="m_twitter"
    href="https://twitter.com/share?url=https://example.com/archive/123/&text=記事のタイトルが入ります" rel="nofollow"
    target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.png" alt=""></a>
    </li>
    <li><a class="m_facebook" href="https://www.facebook.com/share.php?u=https://example.com/archive/123/"
    rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-facebook.png"
    alt=""></a></li>
    <li><a class="m_hatena"
    href="https://b.hatena.ne.jp/add?mode=confirm&url=https://example.com/archive/123/&title=記事のタイトルが入ります"
    rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-hatena.png"
    alt=""></a></li>
    <li><a class="m_line" href="https://social-plugins.line.me/lineit/share?url=https://example.com/archive/123/"
    rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-line.png"
    alt=""></a></li>
    <li><a class="m_pocket" href="https://getpocket.com/edit?url=https://example.com/archive/123/" rel="nofollow"
    target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/icon-pocket.png" alt=""></a></li>
    </ul>
    </nav><!-- /footer-sns-buttons -->

    </div><!-- /inner -->
    </div><!-- /footer-sns -->
    <?php endif; ?>


</div><!-- /#container -->
<div id="pageTop">
    <a href="#">ページのトップへ戻る</a>
</div><!-- /#pageTop -->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<?php wp_footer(); ?>
