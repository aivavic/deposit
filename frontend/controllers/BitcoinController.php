<?php
namespace frontend\controllers;

use Yii;

class BitcoinController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    private $_blockchain = null;

    public function actionIndex()
    {
        $serverAdress = null;

        $clientAddress = Yii::$app->request->post('clientAdress');

        if (!empty($clientAddress)) {
            $serverAdress = $this->_getNewAddress($clientAddress);
        }
        //\yii\helpers\VarDumper::dump($clientAddress, 10, true);

        return $this->render('index',[
            'tableData' => $this->_getTableData(),
            'serverAdress' => $serverAdress
            ]);
    }

    private function _getAdresses()
    {
        $blockchain = $this->_getBlockchain();

        return $blockchain->Wallet->getAddresses();
    }

    private function _getTableData()
    {
        $adresses = $this->_getAdresses();

        //filter
        
        return $adresses;
    }

    private function _getNewAddress($label =  '')
    {
         $blockchain = $this->_getBlockchain();

         return $blockchain->Wallet->getNewAddress($label);
    }

    private function _getBlockchain()
    {
        if (empty($this->_blockchain)) {
            // Create the base Blockchain class instance
            $this->_blockchain = new \Blockchain\Blockchain();

            $this->_blockchain->Wallet->credentials(
                Yii::$app->params['blockchainId'],
                Yii::$app->params['blockchainPassword']
            );
        }

        return $this->_blockchain;
    }
}
