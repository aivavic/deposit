<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * Blockchain controller
 */
class BlockchainController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [                    
                    [
                        'actions' => ['login', 'error','logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],            
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        
    }

    public function actionLogin()
    {
        // Create the base Blockchain class instance
        $Blockchain = new \Blockchain\Blockchain();

        $Blockchain->Wallet->credentials(
            '42365889-604d-4912-b30c-c596a017b690',
            'EXiFIvuPOnJdbgERYK4N');

        $addresses = $Blockchain->Wallet->getAddresses();
        //$address = $Blockchain->Wallet->getNewAddress('1Bc5pfgCgzxiBAbzEb5UE2UeBurLquu4dt');
        //$address = '1Bc5pfgCgzxiBAbzEb5UE2UeBurLquu4dt';
        //$result = $Blockchain->Wallet->archiveAddress($address);

        \yii\helpers\VarDumper::dump($addresses,10,true);
    }

    public function actionLogout()
    {

    }
}
