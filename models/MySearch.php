<?php
namespace app\models;
use Yii;

use yii\base\Model;
use yii\elasticsearch\ActiveDataProvider;

/**
 * Description of MySearch
 *
 * @author SACHIN
 */
class MySearch extends \yii\elasticsearch\ActiveRecord {
    //put your code here
    
    public function firstScenarios(){
        $model = new TblEmployee();
    }
    
    
}
