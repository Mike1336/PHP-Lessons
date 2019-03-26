<?php

namespace app\controllers;

use yii\web\Controller;

class TteController extends Controller
{
        public function actionTimeToExam()
        {
                $exams = strtotime('2019-04-14'); //день начала сессии
                
                $date = getdate();
                $today = strtotime($date['year'].'-'.$date['mon'].'-'.$date['mday']);
    
                $secsToExam = $exams - $today;
                $daysToExam = $secsToExam / 86400;
                    if ($daysToExam > 0) {
                        return "Количество дней до начала сессии: $daysToExam.";
                    } 
                    else 
                    {
                            switch ($daysToExam) {
                                    case '0':
                                            return "Сегодня - день начала сессии.";
                                    break;  
                                    default:
                                            return "Летняя сессия 2019 продолжается или уже закончилась.";
                                    break;
                            }
                    }         
        }
}
