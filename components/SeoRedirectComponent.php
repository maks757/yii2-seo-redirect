<?php
/**
 * Created by PhpStorm.
 * User: Maksim Cherednik
 * Date: 19.03.2018
 * Time: 18:16
 */

namespace maks757\seoredirect\components;


use maks757\seoredirect\entities\RedirectTools;

class SeoRedirectComponent
{
    public static function chackUrl(){
        $redirect = RedirectTools::findOne(['from' => \Yii::$app->getRequest()->getAbsoluteUrl()]);
        if(!empty($redirect)) {
            \Yii::$app->getResponse()->redirect($redirect->to, $redirect->code)->send();
        }
    }
}