<?php
/**
 * Created by PhpStorm.
 * User: Steeve Jerent
 * Date: 07/10/2014
 * Time: 16:55
 */

/**
 * @param $link
 * @return array
 */
function getArticles($link){
    $sql ='SELECT * FROM article';
    $result = mysqli_query($link, $sql);
    // return mysqli_fetch_all($result);
    $articles =[];
    while($article = mysqli_fetch_assoc($result)){
        $articles[] = $article;
    }
    return $articles;
}

/**
 * @param $link
 * @param int $id
 * @return array|null
 */
function getArticle($link, $id){
    $sql = 'SELECT * FROM article WHERE id='.mysqli_real_escape_string($link, $id);
    $result = mysqli_query($link, $sql);
    return mysqli_fetch_assoc($result);

}

/**
 * @param $link
 * @param string    $title
 * @param string    $content
 * @param bool      $enabled
 * @param string    $image
 * @param int       $category_id
 * @param int       $user_id
 * @param array     $tags
 *
 * @return bool
 */
function addArticle($link, $title, $content, $enabled, $image, $category_id, $user_id, $tags = null){
    $sql = 'INSERT INTO article (id, title, content, enabled, image, category_id, user_id) VALUES (NULL, ?, ?, ?, ?, ?, ?)';
    $prepare = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($prepare, 'ssisii', $title, $content, $enabled, $image, $category_id, $user_id);
    $result = mysqli_stmt_execute($prepare);

    return $result;
}

/**
 * @param $link
 * @param int   $id
 * @param array $update
 */
function updateArticle($link, $id, array $update){

}

/**
 * @param $link
 * @param int        $id
 * @param boolean    $enable
 */
function enableArticle($link, $id, $enable){

}

/**
 * @param $link
 * @param int   $id
 */
function removeArticle($link, $id){
    $sql = 'DELETE FROM article WHERE id='.mysqli_real_escape_string($link, $id);
    return mysqli_query($link, $sql);
}