<?php
/**
 * Created by PhpStorm.
 * User: dogienko
 * Date: 29.04.18
 * Time: 18:25
 */

namespace app\controllers;

use MetzWeb\Instagram\Instagram;
use app\models\User;
use app\models\Category;
use yii\web\Controller;

class AccountsController extends Controller
{
    public function actionIndex() {

        $category = Category::find()->all();
        $users = User::find()->all();

        return $this->render('index', compact('category', 'users'));
    }

    public function actionView() {

        $instagram = new Instagram('b4b035a860fc43119e6000ea7bb655a9');
        $instagram->setAccessToken('2629599616.b4b035a.f04675fdffee465f933eac978798e208');
        $userMedia = $instagram->getUserMedia();

        $user = User::findOne(['id' => 2]);

        return $this->render('view', compact('user', 'userMedia'));
    }


}