<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // добавляем разрешение "createPost"
        $create = $auth->createPermission('create');
        $create->description = 'Create';
        $auth->add($create);

        // добавляем разрешение "updatePost"
        $update = $auth->createPermission('update');
        $update->description = 'Update';
        $auth->add($update);

        // добавляем роль "user" и даём роли разрешение "createPost"
        $user = $auth->createRole('user');
        $auth->add($user);
        $auth->addChild($user, $create);

        // добавляем роль "admin" и даём роли разрешение "updatePost"
        // а также все разрешения роли "user"
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $update);
        $auth->addChild($admin, $user);

        // Назначение ролей пользователям. 1 и 2 это IDs возвращаемые IdentityInterface::getId()
        // обычно реализуемый в модели User.
        $auth->assign($user, 101);
        $auth->assign($admin, 100);
    }
}