<?php

namespace App\Infrastructure\Persistence\Yii\Model\Traits;

use App\Infrastructure\Persistence\Yii\Model\Call;
use App\Infrastructure\Persistence\Yii\Model\Customer;
use App\Infrastructure\Persistence\Yii\Model\Fax;
use App\Infrastructure\Persistence\Yii\Model\Sms;
use App\Infrastructure\Persistence\Yii\Model\Task;
use App\Infrastructure\Persistence\Yii\Model\User;

trait ObjectNameTrait
{
    public static $classes = [
        Customer::class,
        Sms::class,
        Task::class,
        Call::class,
        Fax::class,
        User::class,
    ];

    /**
     * @param $name
     * @param bool $throwException
     * @return mixed
     */
    public function getRelation($name, $throwException = true)
    {
        $getter = 'get' . $name;
        $class = self::getClassNameByRelation($name);

        if (!method_exists($this, $getter) && $class) {
            return $this->hasOne($class, ['id' => 'object_id']);
        }

        return parent::getRelation($name, $throwException);
    }

    /**
     * @param $className
     * @return mixed
     */
    public static function getObjectByTableClassName($className)
    {
        if (method_exists($className, 'tableName')) {
            return str_replace(['{', '}', '%'], '', $className::tableName());
        }

        return $className;
    }

    /**
     * @param $relation
     * @return string|null
     */
    public static function getClassNameByRelation($relation)
    {
        foreach (self::$classes as $class) {
            if (self::getObjectByTableClassName($class) == $relation) {
                return $class;
            }
        }
        return null;
    }
}