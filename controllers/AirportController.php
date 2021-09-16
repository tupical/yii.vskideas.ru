<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Airport;

class AirportController extends Controller
{
    public function actionIndex()
    {
        $query = Airport::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $airports = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'airports' => $airports,
            'pagination' => $pagination,
        ]);
    }
}