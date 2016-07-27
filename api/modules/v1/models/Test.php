<?php

namespace api\modules\v1\models;

use \yii\db\ActiveRecord;
/**
 * Country Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Test extends ActiveRecord
{

  
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * Define rules for validation
     */
     public function rules()
     {
         return [
             [['domain', 'f_date', 'l_date', 'site_condition'], 'required'],
             [['f_date', 'l_date', 'site_condition'], 'integer'],
             [['domain'], 'string', 'max' => 255],
         ];
     }

     /**
      * @inheritdoc
      */
     public function attributeLabels()
     {
         return [
             'id' => 'ID',
             'domain' => 'Domain',
             'f_date' => 'F Date',
             'l_date' => 'L Date',
             'site_condition' => 'Site Condition',
         ];
     }

}
