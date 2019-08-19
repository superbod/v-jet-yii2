<?php


namespace app\models;

use yii\base\Model;

class BlogPage extends Model
{
    /**
     * @param array $args
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function createPost(array $args){
        $post = new Blog();
        foreach ($args as $key => $arg) {
            $post->$key = $arg;
        }
        $post->save();
        return self::getPostById($post->getAttribute('id'));
    }

    /**
     * @param array $args
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function createComment(array $args) {
        $comment = new Comments();
        foreach ($args as $key => $arg) {
            $comment->$key = $arg;
        }
        $comment->save();
        return self::getCommentById($comment->getAttribute('id'));
    }

    /**
     * @param int $commentID
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getCommentById(int $commentID) {
        return Comments::find()->where("id = {$commentID}")->asArray()->asArray()->all();
    }

    /**
     * @param int $postID
     * @return mixed
     */
    public static function getDetailPost(int $postID){
        $res['post'] = self::getBlogList($postID);
        $res['comments'] = self::getComments($postID);
        return $res;
    }

    /**
     * @param int $postID
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getComments(int $postID) {
        return Comments::find()->where("blogId = {$postID}")->asArray()->all();
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getSliderPosts(){
        $inKeys = self::getMostCommentedPostIDs();
        return Blog::find()->where("id IN ({$inKeys})")->asArray()->all();
    }

    /**
     * @param int $number
     * @return string
     */
    public static function getMostCommentedPostIDs(int $number = 5) {
        $res = \app\models\Comments::find()
            ->select('blogID')
            ->groupBy('blogID')
            ->orderBy('count(blogID) DESC')
            ->limit($number)
            ->asArray()
            ->all();
        return implode(",", array_map('current', $res));
    }

    /**
     * @param $id
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getPostById($id) {
        return \app\models\Blog::find()->where(['id' => $id])->asArray()->all();
    }


    /**
     * @param int $id
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getBlogList(int $id = 0) {

        if($id > 0) {
            $where = "`blog`.`id` = {$id}";
        } else {
            $inKeys = self::getMostCommentedPostIDs();
            $where = "`blog`.`id` NOT IN ({$inKeys})";
        }

        return Blog::find()
            ->select("`blog`.`id`, `blog`.`text`, `blog`.`date`, `blog`.`author_name`, count(`comments`.`id`) as comment_numbers, `blog`.`name`")
            ->leftJoin('comments',"`comments`.`blogID` = `blog`.`id`")
            ->where($where)
            ->groupBy('`blog`.`id`')
            ->asArray()
            ->all();
    }
}