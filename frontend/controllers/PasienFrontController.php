<?php

namespace frontend\controllers;

use frontend\models\PasienFront;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PasienFrontController implements the CRUD actions for PasienFront model.
 */
class PasienFrontController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all PasienFront models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => PasienFront::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id_psn' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PasienFront model.
     * @param int $id_psn Id Psn
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_psn)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_psn),
        ]);
    }

    /**
     * Creates a new PasienFront model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new PasienFront();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_psn' => $model->id_psn]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PasienFront model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_psn Id Psn
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_psn)
    {
        $model = $this->findModel($id_psn);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_psn' => $model->id_psn]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PasienFront model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_psn Id Psn
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_psn)
    {
        $this->findModel($id_psn)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PasienFront model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_psn Id Psn
     * @return PasienFront the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_psn)
    {
        if (($model = PasienFront::findOne(['id_psn' => $id_psn])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
