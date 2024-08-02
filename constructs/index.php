<?php
// abstract key words removes the ability to instantiate the class directly, it's a template of sorts.
// we can have abstract classes and methods. Abstract methods are a requirements so if the class is extended it must be included.

abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())). '.png';
    }

    abstract public function qualifier($user);
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {

    }
} 

class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {

    }
}

$achievement = new FirstThousandPoints();
echo $achievement->name(); 
echo $achievement->icon(); 
