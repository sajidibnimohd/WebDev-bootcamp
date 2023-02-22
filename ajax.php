Index.php:
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ajax Save Datas</title>
        <style>
            <div class="FormStyle">
            {
                text-align:center;
            }
            .NameStyle
            {
                font-size:22px;
                color:red;
                font-family:arial;
                font-weight:bold;
                padding:10px;
            }            
            .TextStyle
            {
                padding:3px 5px;
                font-size:15px;
                width:200px;
            }
            .ButtonStyle
            {
                padding:5px 10px;
                background-image:linear-gradient(yellowgreen,green);
                color:white;
                font-size:18px;
                border:1px solid green;
                border-radius:2px;
                font-weight:bold;
            }
        </style>
    </head>
    <body>
        <form class="FormStyle">
        <center>
            <h2 style="color:blue;font-size:30px;font-family:arial;">AJAX SAVE DATAS</h2><br>
            <label class="NameStyle">Name</label>
            <input type="text" id="name" class="TextStyle"><br><br>
            <label style="padding:20px;" class="NameStyle">City</label>
            <input type="text" id="city" class="TextStyle"><br><br>
            <button onclick="saveDatas()" class="ButtonStyle">Save Data</button>
        </center>
        </form>
        <script>
            function saveDatas()
            {
                if(window.XMLHttpRequest)
                {
                    a=new XMLHttpRequest();
                }
                else
                {
                    a=new ActiveXObject("Microsoft.XMLHTTP");
                }
                a.onreadystatechange=function()
                {
                    if(a.readyState==4 && a.status==200)
                    {
                        alert(a.responseText);
                    }
                }
                var name=document.getElementById("name").value;
                var city=document.getElementById("city").value;
                var url="save.php";
                var val="name="+name+"&city="+city;
                a.open("POST",url,true);
                a.setRequestHeader("content-type","application/x-www-form-urlencoded");
                a.setRequestHeader("content-type",val.length);
                a.setRequestHeader("connection","close");
                a.send(val);
            }
        </script>
    </body>
</html>

Save.php:
<?php
    $con=new mysqli("localhost","root","pwd","DATA");
    $name=$_POST["name"];
    $city=$_POST["city"];
    $sql="INSERT INTO USERS(name,city)VALUES('{$name}','{$city}')";
    if($con->query($sql))
    {
        echo"DATA SAVED";
    }
    else{
        echo"ERROR IN SAVING DATA";
    }
?>

SQL QUERY:
CREATE DATABASE DATA;
USE DATA;
CREATE TABLE `users`(
Name varchar(50) not null primary key,
City varchar(300) not null
);