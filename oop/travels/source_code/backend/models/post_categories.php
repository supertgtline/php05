<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/12/2017
 * Time: 2:11 PM
 */
function post_categories_delete($id){
    $id = intval($id);
    //Xóa danh mục
    $sql = "DELETE FROM post_categories WHERE  id = $id";
    mysql_query($sql) or die(mysql_error());
}
?>