<?php
namespace api\modules\v1\controllers;

use yii\rest\ActiveController;
use api\modules\v1\models\TestSearch;

class TestController extends ActiveController
{

  public $modelClass = 'api\modules\v1\models\Test';



    // public function actionIndex($id)
    //     {
    //
    //       $searchModel = new TestSearch();
    //       $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    //
    //       return $this->render('index', [
    //           'searchModel' => $searchModel,
    //           'dataProvider' => $dataProvider,
    //       ]);
    //
    //     }


}
?>
