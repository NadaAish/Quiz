<?php

class SchoolSingleton
{
    private static $schoolName;
    private static $schoolAdd;
    private static $singleInstance;

    private function __construct($name, $add)
    {
        self::$schoolName = $name;
        self::$schoolAdd = $add;
    }

    public static function getInstance($name, $add)
    {
        if(!(self::$singleInstance instanceof self))
        {
            self::$singleInstance = new self($name, $add);
        }

        return self::$singleInstance;
    }

    public static function getSchoolName()
    {
        return self::$schoolName;
    }

    public static function getSchoolAdd()
    {
        return self::$schoolAdd;
    }

    private function __clone()
    {

    }
}

$object1 = SchoolSingleton::getInstance('schoolName1', 'schoolAdd1');

echo $object1->getSchoolName() . ' ' . $object1->getSchoolAdd();

$object1 = SchoolSingleton::getInstance('schoolName2', 'schoolAdd2');

echo $object1->getSchoolName() . ' ' . $object1->getSchoolAdd();
