<?php

class ParentClass
{
    public string $parentSurName;
    public string $height;

    public function __construct($surName)
    {
        $this->parentSurName = $surName;
    }

    public function talking():void
    {
        echo "Parents can talk";
    }

    public function walking():void
    {
        echo "Parents can walk";
    }
}


class ChildClass extends ParentClass
{
    public function __construct(string $surName)
    {
        parent::__construct($surName);
    }

    public function printChildName():void
    {
        echo $this->parentSurName;
    }
}

$myParents = new ParentClass('Madduma Patabendige');

$childInstance = new ChildClass('Madduma Patabendige');

$childInstance->printChildName();

