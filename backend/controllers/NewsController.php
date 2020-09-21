<?php
namespace app\controllers;

use yii\rest\ActiveController;

class NewsController extends ActiveController
{
    /**
     * @SWG\Get(path="/news",
     *     tags={"News"},
     *     summary="Показать новости",
     *     @SWG\Response(
     *         response = 200,
     *         description = "GET description",
     *         @SWG\Schema(ref = "#/definitions/News")
     *     ),
     * )
     *
     * @SWG\Post(path="/news",
     *     tags={"News"},
     *     summary="Добавить новость",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *        in = "formData",
     *        name = "name",
     *        description = "Добавьте новость",
     *        required = true,
     *        type = "string"
     *     ),
     *      @SWG\Parameter(
     *        in = "formData",
     *        name = "info",
     *        description = "Добавьте краткое описание",
     *        required = false,
     *        type = "string"
     *     ),
     *     @SWG\Parameter(
     *        in = "formData",
     *        name = "description",
     *        description = "Добавьте описание",
     *        required = true,
     *        type = "string"
     *     ),
     *      @SWG\Parameter(
     *        in = "formData",
     *        name = "image",
     *        description = "Добавьте путь к картинке",
     *        required = false,
     *        type = "string"
     *     ),
     *      @SWG\Parameter(
     *        in = "formData",
     *        name = "favorite",
     *        description = "1-избранная новость, 0-не избранная",
     *        required = false,
     *        type = "integer",
     *        enum = {1, 2}
     *     ),
     *    @SWG\Parameter(
     *        in = "formData",
     *        name = "id_city",
     *        description = "Добавьте идентификатор города",
     *        required = true,
     *        type = "integer"
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
     * @SWG\Put(path="/news/{id}",
     *     tags={"News"},
     *     summary="Изменить новость",
     *     description="Параметры типа * путь * будут помещены в адрес адреса запроса",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *        in = "path",
     *        name = "id",
     *        description = "ID новости",
     *        required = true,
     *        type = "integer"
     *     ),
     *     @SWG\Parameter(
     *        in = "formData",
     *        name = "name",
     *        description = "Измените название новости",
     *        required = false,
     *        type = "string"
     *     ),
     *      @SWG\Parameter(
     *        in = "formData",
     *        name = "info",
     *        description = "Измените краткое описание",
     *        required = false,
     *        type = "string"
     *     ),
     *     @SWG\Parameter(
     *        in = "formData",
     *        name = "description",
     *        description = "Измените описание новости",
     *        required = false,
     *        type = "string"
     *     ),
     *    @SWG\Parameter(
     *        in = "formData",
     *        name = "image",
     *        description = "Измените путь к картинке",
     *        required = false,
     *        type = "string"
     *     ),
     *    @SWG\Parameter(
     *        in = "formData",
     *        name = "favorite",
     *        description = "Избранная/неизбранная",
     *        required = false,
     *        type = "string"
     *
     *     ),
     *    @SWG\Parameter(
     *        in = "formData",
     *        name = "id_city",
     *        description = "Идентификатор города",
     *        required = false,
     *        type = "string"
     *     ),
     *
     *     @SWG\Response(
     *         response = 200,
     *         description = " success"
     *     ),
     *     @SWG\Response(
     *         response = 401,
     *         description = "error",
     *         @SWG\Schema(ref="#/definitions/Error")
     *     )
     * )
     * @param integer $id
     *
     * @return array
     *
     *    @SWG\Delete(path="/news/{id}",
     *     tags={"News"},
     *     summary="Удалить новость",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *        in = "path",
     *        name = "id",
     *        description = "ID новости",
     *        required = true,
     *        type = "integer"
     *     ),
     *     @SWG\Response(
     *         response = 200,
     *         description = " success"
     *     ),
     *     @SWG\Response(
     *         response = 401,
     *         description = "error",
     *         @SWG\Schema(ref="#/definitions/Error")
     *     )
     * )
     * @param integer $id
     *
     * @return array
     *
     */


    public $modelClass = 'app\models\News';
}

