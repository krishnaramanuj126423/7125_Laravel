<html>
<body>


    <h1> The Fruit Program </h1>
<?php

class Fruit
{
    // Properties
    public $name;
    public $color;

    // Method
    public function set_name($name)
    {
        $this->name = $name;
    }

    // Method
    public function get_name()
    {
        return $this->name;
    }
}

?>

</body>
</html>