<?php
/**
 * Created by PhpStorm.
 * User: zeol
 * Date: 25.03.16
 * Time: 21:31
 */
namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

class BehaviorsController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'controllers' => ['admin/default'],
                        'actions' => ['reg', 'login'],
                        'verbs' => ['GET', 'POST'],
                        'roles' => ['?']
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['admin/default'],
                        'actions' => ['index', 'logout', 'reg'],
                        'verbs' => ['GET', 'POST'],
                        'roles' => ['@']
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['admin/menu'],
                        'actions' => ['index', 'view', 'create', 'update', 'delete'],
                        'verbs' => ['GET', 'POST'],
                        'roles' => ['@']
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['admin/categories'],
                        'actions' => ['index', 'view', 'create', 'update', 'delete'],
                        'verbs' => ['GET', 'POST'],
                        'roles' => ['@']
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['admin/articles'],
                        'actions' => ['index', 'view', 'create', 'update', 'delete'],
                        'verbs' => ['GET', 'POST'],
                        'roles' => ['@']
                    ],

                ]
            ],
        ];
    }
}