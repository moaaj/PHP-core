<?php


if(isset($GET["stu_name"]) && isset($_GET["stu_age"]) && isset($_GET["stu_weight"]))
{
    $name= _GET["stu_name"];
    $age = _GET["stu_age"];
    $weight=_GET["stu_weight"];

    IF(!EMPTY($name) && !empty($age) && !empty($weight))
    {
        echo 'Name:' .$_GET["stu_name"].'<br>';
        echo 'Age:' .$_GET["stu_age"].'<br>';
        echo 'Wright' .$_GET["stu_weight"].'<br>';
    }
}

else{
    echo "Please enter all fields";
}



    
    


?>