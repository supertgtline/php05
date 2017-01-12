<?php
//load model

//data
$cid = intval($_GET['cid']);
$category = get_a_record('post_categories', $cid);

if (!$category) {
	show_404();
}

$title = $category['name'];

$categories = get_all('post_categories', array(
	'select' => 'id, name'
));

if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

$options = array(
	'where' => 'post_category_id='.$cid,
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'id DESC'
);

$url = 'index.php?controller=news';
$total_rows = get_total('posts', $options);
$total = ceil($total_rows/$limit);

$news = get_all('posts', $options);
$pagination = pagination($url, $page, $total);

//load view
require('frontend/views/category_news/index.php');