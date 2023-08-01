<?php

 $fileName= "G:\\Ostad\\Practice\\php file\\f2.txt";

 $students=array(
    array(
        'firstName'=>'Syed',
        'lastName'=>'Hasan',
        'class'=>7,
        'roll'=>1
    ),
    array(
        'firstName'=>'Syed',
        'lastName'=>'Muid',
        'class'=>8,
        'roll'=>3
    ),
    array(
        'firstName'=>'Syed',
        'lastName'=>'Enar',
        'class'=>9,
        'roll'=>6
    )

    );

 /*$fp = fopen($fileName,"w");

 foreach($students as $student){

    $data=sprintf("Name: %s %s\n He reads in class %s\n His roll number is %s \n ", $student['firstName'],$student['lastName'],$student['class'],$student['roll']);

    fwrite($fp,$data);

 }
 fclose($fp);*/

 /*$fp=fopen($fileName,"r");

 while($data=fgets($fp)){

    $student= explode(" ", $data);

    printf ("Name: %s %s \n  Class: %s \n  Roll: %s", $student[0],$student[1],$student[2],$student[3]);

 }
 $fp = fopen($fileName,"w");

 foreach($students as $student){

    fputcsv($fp,$student);
    //fwrite($fp,$data);

 }
 fclose($fp);
 */
$fp=fopen($fileName,"r");

while($student=fgetcsv($fp)){
    printf("Name: %s %s <br>  Class: %s <br> Roll: %s<br>", $student[0], $student[1], $student[1], $student[3]);
}

