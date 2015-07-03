<?php

namespace cornernote\menu\controllers;

use cornernote\menu\models\Menu;
use cornernote\menu\models\MenuSearch;
use yii\web\Controller;
use Yii;
use yii\web\HttpException;
use yii\filters\AccessControl;
use cornernote\returnurl\ReturnUrl;

/**
 * MenuController implements the actions for Menu model.
 */
class MenuController extends Controller
{

    /**
     * // TODO - set permissions
     * @inheritdoc
     */
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'allow' => true,
//                        'actions' => ['index', 'view', 'create', 'update', 'delete'],
//                        'roles' => ['@']
//                    ]
//                ]
//            ]
//        ];
//    }

    public function actions()
    {
        return [
            'nodeMove' => [
                'class' => 'slatiusa\nestable\NodeMoveAction',
                'modelName' => \cornernote\menu\models\Menu::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Lists all Menu models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index', [
        ]);
    }


    /**
     * Displays a single Menu model.
     * @param integer $id
     *
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', compact('model'));
    }

    /**
     * Creates a new Menu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @param int $top_id
     * @return mixed
     */
    public function actionCreate($top_id = 0)
    {
        $model = new Menu;

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            if ($top_id) {
                $saved = $model->prependTo(Menu::findOne($top_id));
            } else {
                $saved = $model->makeRoot();
            }
            if ($saved) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'Menu has been created.'));
                return $this->redirect(ReturnUrl::getUrl(['index']));
            }
        } else {
            $model->load(Yii::$app->request->get());
        }

        return $this->render('create', compact('model'));
    }

    /**
     * Updates an existing Menu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->getSession()->setFlash('success', Yii::t('app', 'Menu has been updated.'));
            return $this->redirect(ReturnUrl::getUrl(['index']));
        } elseif (!Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->get());
        }

        return $this->render('update', compact('model'));
    }


    /**
     * Deletes an existing Menu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        //$model->delete();
        $model->deleteWithChildren();

        Yii::$app->getSession()->setFlash('success', Yii::t('app', 'Menu has been deleted.'));
        return $this->redirect(ReturnUrl::getUrl(['index']));
    }

    /**
     * Finds the Menu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Menu the loaded model
     * @throws HttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Menu::findOne($id)) !== null) {
            return $model;
        }
        throw new HttpException(404, 'The requested page does not exist.');
    }
}
