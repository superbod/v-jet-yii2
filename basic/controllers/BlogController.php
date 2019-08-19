<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\BlogPage;

class BlogController extends Controller
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => \yii\filters\VerbFilter::className(),
                'actions' => [
                    'create-post'  => ['post'],
                    'create-comment'  => ['post'],
                ],
            ],
        ];
    }
    public $defaultAction = 'list';

    public function actionList() {
        $sliderItems = BlogPage::getSliderPosts();
        $blogItems = BlogPage::getBlogList();

        return $this->render(
            'list', [
                'sliderItems' => $sliderItems,
                'blogItems' => $blogItems
            ]);
    }

    public function actionDetail($id){
        $data = BlogPage::getDetailPost($id);
        return $this->render('detail', ['data' =>$data]);
    }

    public function actionCreatePost(){
        $data = Yii::$app->request->post('args');
        $res = BlogPage::createPost($data);
        return $this->asJson($res);
    }

    public function actionCreateComment() {
        $data = Yii::$app->request->post('args');
        $res = BlogPage::createComment($data);
        return $this->asJson($res);
    }
}