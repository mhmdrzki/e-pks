<?php

namespace app\controllers;

use app\models\DokumenPks;
use app\models\DokumenPksSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use Yii;
/**
 * DokumenPksController implements the CRUD actions for DokumenPks model.
 */
class DokumenPksController extends Controller
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
     * Lists all DokumenPks models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DokumenPksSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DokumenPks model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DokumenPks model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new DokumenPks();
        
        if ($model->load(\Yii::$app->request->post()) ) {

            
            $files = UploadedFile::getInstance($model, 'nama_file');

            $extensions = ['pdf','doc','docx'];
            if(!empty($files) && $files->size !== 0){
                if(!in_array($files->extension,$extensions)){
                    //Rollback with error
                    $model->addError('nama_file','Only files with these extensions are allowed: pdf, doc, docx');
                    return $this->render('create', [
                        'model' => $model,
                    ]);
                }
            }
                    if(!empty($files) && $files->size !== 0){
                        $namefile = md5(date('Ymdhis')).'.'.$files->extension;
                        $files->saveAs(Yii::$app->basePath . "/web/berkas/" . $namefile);
                        $model->nama_file = $namefile;
                    }

            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DokumenPks model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionUnduh($id) 
    { 
        $download = DokumenPks::findOne($id); 
        $path = Yii::getAlias('@webroot').'/berkas/'.$download->nama_file;

        $extension = explode('.',$download->nama_file);
        $ext = (count($extension)-1 < 0) ? '' : $extension[count($extension)-1];
    
        if (file_exists($path)) {
            return Yii::$app->response->sendFile($path, $download->nama_pks.'-'.$download->no_pks.'.'.$ext);
        } else {
            //Set error
        }
    }

    /**
     * Deletes an existing DokumenPks model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DokumenPks model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return DokumenPks the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DokumenPks::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
