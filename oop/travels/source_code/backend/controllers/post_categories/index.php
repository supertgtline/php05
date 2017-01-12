<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/12/2017
 * Time: 2:16 PM
 */
require_once ('backend/models/post_categories.php');
if(isset($_POST['cid'])){
 foreach ($_POST['cid'] as $cid){
     $cid = intval($cid);
     categories_delete($cid);
 }
}
if(isset($_GET['page'])) $page = intval($_GET['page']);
else $page = 1;
$page = ($page>0)? $page :1 ;
$limit = 10;
$offset = ($page - 1)* $limit;

$options = array(
    'limit' => $limit,
    'offset' => $offset
);

$url = 'admin.php?controller=post_category';
$total_row = get_total('post_categories',$options);


?>