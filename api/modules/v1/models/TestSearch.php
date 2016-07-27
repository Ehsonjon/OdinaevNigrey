<?php

namespace api\modules\v1\models;

use \yii\db\ActiveRecord;
use \modules\v1\models\Test;

class TestSearch extends Test
{
  public function rules()
  {
      return [
          [['domain', 'f_date', 'l_date', 'site_condition'], 'required'],
          [['f_date', 'l_date', 'site_condition'], 'integer'],
          [['domain'], 'string', 'max' => 255],
      ];
  }


}
?>
