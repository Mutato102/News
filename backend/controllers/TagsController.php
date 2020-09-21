<?
namespace app\controllers;

use yii\rest\ActiveController;

class TagsController extends ActiveController
{
    /**
     * @SWG\Get(path="/tags",
     *     tags={"Tags"},
     *     summary="Показать теги",
     *     @SWG\Response(
     *         response = 200,
     *         description = "GET description",
     *         @SWG\Schema(ref = "#/definitions/Tags")
     *     ),
     * )
     *
     * @SWG\Post(path="/tags",
     *     tags={"Tags"},
     *     summary="Добавить тег",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *        in = "formData",
     *        name = "name",
     *        description = "Добавить тег",
     *        required = true,
     *        type = "string"
     *     ),
     *     @SWG\Response(
     *         response = 200,
     *         description = "success"
     *     ),
     *     @SWG\Response(
     *         response = 401,
     *         description = "Нужно войти снова",
     *         @SWG\Schema(ref="#/definitions/Error")
     *     )
     * )
     *
     * @SWG\Put(path="/tags/{id}",
     *     tags={"Tags"},
     *     summary="Изменить ntu",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *        in = "path",
     *        name = "id",
     *        description = "ID тега",
     *        required = true,
     *        type = "integer"
     *     ),
     *     @SWG\Parameter(
     *        in = "formData",
     *        name = "name",
     *        description = "Измените название тега",
     *        required = false,
     *        type = "string"
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
     *    @SWG\Delete(path="/tags/{id}",
     *     tags={"Tags"},
     *     summary="Удалить тег",
     *     description="Параметры типа * путь * будут помещены в адрес адреса запроса",
     *     produces={"application/json"},
     *     @SWG\Parameter(
     *        in = "path",
     *        name = "id",
     *        description = "ID тега",
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
    public $modelClass = 'app\models\Tags';
}


