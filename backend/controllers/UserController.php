<?php
namespace app\controllers;

use app\models\User;
use yii\data\ActiveDataProvider;
use yii\rest\Controller;

/**
* Class UserController
*/

class UserController extends Controller
{
    /**
    * @SWG\Get(path="/users",
    *     tags={"User"},
    *     summary="Retrieves the collection of User resources.",
    *     @SWG\Response(
    *         response = 200,
    *         description = "User collection response",
    *         @SWG\Schema(ref = "#/definitions/User")
    *     ),
    * )
    */

    public $modelClass = 'app\models\User';
}
