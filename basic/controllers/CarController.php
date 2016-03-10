<?php
//
//namespace app\controllers;
//
//use app\models\Articles;
//use yii\base\Model;
//use Yii;
//use yii\web\Controller;
//use app\models\Categories;
//use app\models\Menu;
//use app\models\EntryForm;
//use app\models\LoginForm;
//use yii\filters\AccessControl;
//use yii\helpers\Html;
//use yii\filters\VerbFilter;
//
//
//class CarController extends Controller
//{
//    public function actions()
//    {
//        return [
//            'error' => [
//                'class' => 'yii\web\ErrorAction',
//            ],
//            'captcha' => [
//                'class' => 'yii\captcha\CaptchaAction',
//                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
//            ],
//        ];
//    }
//
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'only' => ['logout'],
//                'rules' => [
//                    [
//                        'actions' => ['logout'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }
//
////    public function actionIndex()
////    {
////
////        return $this->render('index', [
////            'categories' => Categories::find()->all(),
////            'articles' => Articles::getArticles(),
////            'menus' => Menu::find()->all()
////        ]);
////    }
//
//    public function actionGetArticle($id)
//    {
//        return $this->render('article', [
//            'article' => Articles::find()
//                ->where(['id' => $id])
//                ->one()
//        ]);
//    }
//
//    public function actionGetMenu($id)
//    {
//        return $this->render('menu', [
//            'menu' => Menu::find()
//                ->where(['id' => $id])
//                ->one()
//        ]);
//    }
//
//    public function actionGetCategory($id)
//    {
//        return $this->render('category', [
//            'articles' => Articles::find()
//                ->where(['articles_category_id' => $id])
//                ->all()
//        ]);
//    }
//
//    public function getAllMenu()
//    {
//        return Menu::find()->all();
//    }
//    public function getAllCategories()
//    {
//        return Categories::find()->all();
//    }
//    public function getAllArticles()
//    {
//        return Articles::find()->all();
//    }
//
//    public function actionEntry()
//    {
//        $model = new EntryForm();
//
//        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//            // данные в $model удачно проверены
//
//            // делаем что-то полезное с $model ...
//
//            return $this->render('entry-confirm', ['model' => $model]);
//        } else {
//            // либо страница отображается первый раз, либо есть ошибка в данных
//            return $this->render('entry', ['model' => $model]);
//        }
//    }
//
//    public function actionLogin()
//    {
//        if (!\Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        }
//        return $this->render('login', [
//            'model' => $model,
//        ]);
//    }
//
//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//
//        return $this->goHome();
//    }
//}