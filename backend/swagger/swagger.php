<?

namespace app\swagger;

/**
 * @SWG\Swagger(
 *     schemes={"http"},
 *     host="news.localhost/backend/web",
 *     basePath="/",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Описание схем",
 *         description="Version: __1.0.0__Вроде так",
 *         @SWG\Contact(name = "KhafizovArtur", email = "gazinurferdausov@gmail.com")
 *     ),
 * )
 *
 * @SWG\Tag(
 *   name="user",
 *   description="用户相关操作 Операции связанные с пользователем",
 *   @SWG\ExternalDocumentation(
 *     description="Find out more about our store Узнайте больше о моем магазине",
 *     url="http://swagger.io"
 *   )
 * )
 */

/**
 * @SWG\Definition(
 *   @SWG\Xml(name="##default")
 * )
 */
class ApiResponse
{
    /**
     * @SWG\Property(format="int32", description = "code of result")
     * @var int
     */
    public $code;
    /**
     * @SWG\Property
     * @var string
     */
    public $type;
    /**
     * @SWG\Property
     * @var string
     */
    public $message;
    /**
     * @SWG\Property(format = "int64", enum = {1, 2})
     * @var integer
     */
    public $status;
}