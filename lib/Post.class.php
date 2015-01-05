<?php

/**
 * Post Class
 * 
 * User's Post 
 * 
 * @author Khuman Parmar <kp67869@gmail.com >
 * @version 1.0
 * @package CodeTaxi 
 * 
 */
class Post {

    //put your code here

    public static function postList($id) {
        if (empty($id)) {
            $condition = "where 1=1 ";
        } else {
            $condition = "where id='{$id}'";
        }
        return q("SELECT * FROM post {$condition}");
    }



    public static function deletePost($id) {
        $condition = "id =" . $id;
        return qd('post', $condition);
    }

}
