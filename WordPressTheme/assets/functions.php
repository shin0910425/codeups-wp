<?php

function add_custom_scripts()
{
  // Google Fontsの追加
  // wp_enqueue_style('google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap', false);
  // wp_enqueue_style('google-fonts-noto', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap', false);

  wp_enqueue_style('google-fonts1', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap');
  wp_enqueue_style('google-fonts2', '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500;700&display=swap');
  wp_enqueue_style('google-fonts3', '//fonts.googleapis.com/css2?family=Gotu:wght@400;500;700&display=swap');
  wp_enqueue_style('google-fonts4', '//fonts.googleapis.com/css2?family=Lato&display=swap');


  // swiperのCSSの追加
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', false);

  // テーマのCSSの追加
  wp_enqueue_style('theme-styles', get_theme_file_uri('/css/style.css'), false);

  // jQueryの追加
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), '3.6.0', true);

  // swiperのJSの追加
  wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('jquery'), '8.0.0', true);

  // テーマのJSの追加
  wp_enqueue_script('theme-scripts', get_theme_file_uri('/js/script.js'), array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'add_custom_scripts');

// crossorigin属性を持つタグに対する対応
function add_rel_preconnect($html, $handle, $href, $media)
{
  if ('google-fonts-montserrat' === $handle || 'google-fonts-noto' === $handle || 'swiper' === $handle) {
    $html = <<<EOT
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
$html
EOT;
  }
  return $html;
}

add_filter('style_loader_tag', 'add_rel_preconnect', 10, 4);


//アイキャッチ画像の設定
function my_setup()
{
  add_theme_support('post-thumbnails'); /* アイキャッチ */
  add_theme_support('automatic-feed-links'); /* RSSフィード */
  add_theme_support('title-tag'); /* タイトルタグ自動生成 */
  add_theme_support(
    'html5',
    array( /* HTML5のタグで出力 */
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

/*
function post_has_archive($args, $post_type){
	if('post' == $post_type){
		$args['rewrite'] = true;
		$args['has_archive'] = 'news';
		$args['label'] = 'お知らせ';
	}
	return $args;
}
add_filter('register_post_type_args','post_has_archive',10,2);
*/


/* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel()
{
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name . '一覧';
  $submenu['edit.php'][10][0] = '新規' . $name . '投稿';
}
function Change_objectlabel()
{
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name . 'の新規追加';
  $labels->edit_item = $name . 'の編集';
  $labels->new_item = '新規' . $name;
  $labels->view_item = $name . 'を表示';
  $labels->search_items = $name . 'を検索';
  $labels->not_found = $name . 'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');





// アーカイブの表示件数変更
// function change_posts_per_page($query)
// {
//   if (is_admin() || !$query->is_main_query())
//     return;

//   if ($query->is_archive('campaign')) { // カスタム投稿タイプを指定
//     $query->set('posts_per_page', '1'); // 表示件数を指定
//   }

//   if ($query->is_archive('voice')) { // カスタム投稿タイプを指定
//     $query->set('posts_per_page', '-1'); // 表示件数を指定
//   }
// }
// add_action('pre_get_posts', 'change_posts_per_page');


// カスタム投稿タイプ【campaign】：メインクエリの変更（アーカイブページにて表示件数を9件にする）
// カスタム投稿タイプの設定【campaign】
// function register_custom_post_type()
// {
//   $args = array(
//     'public' => true,
//     'label'  => 'Campaigns',
//     // 他の設定も追加可能
//   );
//   register_post_type('campaign', $args);
// }
// add_action('init', 'register_custom_post_type');

/* -------------------------------------------------
カスタム投稿タイプのアーカイブページの表示設定変更【campaign】：メインクエリの変更（アーカイブページにて表示件数を9件にする）
-------------------------------------------------- */
function change_set_campaign($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if ($query->is_post_type_archive('campaign') || is_tax(['campaign_category', 'campaign_tag'])) {
    $query->set('posts_per_page', '4');
    return;
  }
}
add_action('pre_get_posts', 'change_set_campaign');

/* -------------------------------------------------
カスタム投稿タイプのアーカイブページの表示設定変更【voice】：メインクエリの変更（アーカイブページにて表示件数を9件にする）
-------------------------------------------------- */
function change_set_voice($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  if ($query->is_post_type_archive('voice') || is_tax(['voice_category', 'voice_tag'])) {
    $query->set('posts_per_page', '6');
    return;
  }
}
add_action('pre_get_posts', 'change_set_voice');
/* -------------------------------------------------
 カスタム投稿タイプ【voice】：アーカイブページ抜粋文の長さ変更
-------------------------------------------------- */
function change_excerpt_length()
{
  $length = 80;
  if (is_post_type_archive('campaign') || is_tax(['campaign_category', 'campaign_tag'])) {
    return 150; //リターンした時点で処理は終了する
  }
  return $length; // デフォルト110文字
}
add_filter('excerpt_length', 'change_excerpt_length', 999);


/* -------------------------------------------------
  Contact Form 7で自動挿入されるPタグ、brタグを削除
-------------------------------------------------- */
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}


// 管理画面にウィジェットを追加する
function my_widgets_register()
{
  $args = [
    'name' => 'サイドバーウィジェット',
    'id' => 'sidebar-widgets',
    'before_widget' => '',
    'after_widget' => '',
    'description' => 'サイドバーに表示されます'
  ];
  register_sidebar($args);
  $args = [
    'name' => 'フッターウィジェット',
    'id' => 'footer-widgets',
    'before_widget' => '',
    'after_widget' => '',
    'description' => 'フッターに表示されます'
  ];
  register_sidebar($args);
}
add_action('widgets_init', 'my_widgets_register');

// アーカイブ
// function add_nen_year_archives($link_html)
// {
//   $regex = array(
//     "/ title='([\d]{4})'/" => " title='$1年'",
//     "/ ([\d]{4}) /"        => " $1年 ",
//     "/>([\d]{4})<\/a>/"    => ">$1年</a>"
//   );
//   $link_html = preg_replace(array_keys($regex), $regex, $link_html);
//   return $link_html;
// }
// add_filter('get_archives_link', 'add_nen_year_archives');

// functions.php での例
// functions.php での例
// function custom_taxonomy() {
//     register_taxonomy('voice_category', 'your_custom_post_type', array(
//         'label' => 'Voice Categories',
//         // その他の設定...
//     ));
// }
// add_action('init', 'custom_taxonomy');

/* -------------------------------------------------
 pタグ削除
-------------------------------------------------- */
remove_filter('the_content', 'wpautop');

/* -------------------------------------------------
Contact Form 7 セレクトボックスの選択肢をカスタム投稿のタイトルから自動生成
-------------------------------------------------- */

//関数の作成
function job_selectlist($tag, $unused)
{
  //セレクトボックスの名前が'select-job'かどうか
  if ($tag['name'] != 'menu-760') {
    return $tag;
  }

  //get_posts()でセレクトボックスの中身を作成する
  //クエリの作成
  $args = array(
    'numberposts' => -1,
    'post_type' => 'campaign', //カスタム投稿タイプを指定
    //並び順⇒セレクトボックス内の表示順
    'orderby' => 'ID',
    'order' => 'ASC'
  );

  //クエリをget_posts()に入れる
  $job_posts = get_posts($args);

  //クエリがなければ戻す
  if (!$job_posts) {
    return $tag;
  }

  //セレクトボックスにforeachで入れる
  foreach ($job_posts as $job_post) {
    $tag['raw_values'][] = $job_post->post_title;
    $tag['values'][] = $job_post->post_title;
    $tag['labels'][] = $job_post->post_title;
  }

  return $tag;
}

add_filter('wpcf7_form_tag', 'job_selectlist', 10, 2);