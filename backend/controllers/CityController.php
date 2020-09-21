<?php
namespace app\controllers;

use yii\rest\ActiveController;

class CityController extends ActiveController
{
/**
    * @SWG\Get(path="/city",
    *     tags={"City"},
    *     summary="Получить данные пользователей",
    *     description="Описание",
    *     produces={"application/json"},
    *     @SWG\Response(
    *         response = 200,
    *         description = "GET description",
    *         @SWG\Schema(ref = "#/definitions/City")
    *     ),
    * )
    *
    * @SWG\Post(path="/city",
    *     tags={"City"},
    *     summary="Добавить город",
    *     produces={"application/json"},
    *     @SWG\Parameter(
    *        in = "formData",
    *        name = "name",
    *        description = "enter city name",
    *        required = true,
    *        type = "string"
    *     ),
    *     @SWG\Response(
    *         response = 200,
    *         description = " success"
    *     ),
    *     @SWG\Response(
    *         response = 401,
    *         description = "Нужно войти снова",
    *         @SWG\Schema(ref="#/definitions/Error")
    *     )
    * )
    *
    */

    public $modelClass = 'app\models\City';
}
?>