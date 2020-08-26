<?php //グローバルナビ
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */ ?>
<!-- Navigation -->
<nav id="navi" class="navi cf" itemscope itemtype="https://schema.org/SiteNavigationElement">
  <img class="logo" src="https://images.unsplash.com/photo-1558981420-87aa9dad1c89?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
  <div id="navi-in" class="navi-in wrap cf">
    <?php //ヘッダーナビ
    wp_nav_menu(
      array (
        //カスタムメニュー名
        'theme_location' => NAV_MENU_HEADER,
        //ul 要素に適用するCSS クラス名
        'menu_class' => 'menu-top menu-header menu-pc',
        //コンテナを表示しない
        'container' => false,
        //カスタムメニューを設定しない際に固定ページでメニューを作成しない
        'fallback_cb' => false,
        //出力されるulに対してidやclassを表示しない
        //'items_wrap' => '<ul>%3$s</ul>',
        //説明出力用
        'walker' => new menu_description_walker()
      )
    ); ?>
    <?php //モバイルヘッダーナビ
    wp_nav_menu(
      array (
        //カスタムメニュー名
        'theme_location' => NAV_MENU_HEADER_MOBILE,
        //ul 要素に適用するCSS クラス名
        'menu_class' => 'menu-top menu-mobile',
        //コンテナを表示しない
        'container' => false,
        //カスタムメニューを設定しない際に固定ページでメニューを作成しない
        'fallback_cb' => false,
        //出力されるulに対してidやclassを表示しない
        //'items_wrap' => '<ul>%3$s</ul>',
        //説明出力用
        'walker' => new menu_description_walker()
      )
    ); ?>
  </div><!-- /#navi-in -->
  <div class="navi-cat-wrap">
    <div class="navi-cat"><a href="">お役立ち資料</a></div>
    <div class="navi-cat"><a href="">無料マガジン</a></div>
  </div>
</nav>
<!-- /Navigation -->
