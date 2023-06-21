<?php

//Setting up connection
$servername="localhost";
$username ="root";
$password = "";

$conn= mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}else{
    echo "Conection was esatablished succesfully. <br>";
}

//Creating database bank
$sql= "CREATE DATABASE Bank";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to create database. <br>";
}else{
    echo "DATABASE Created Successfully.<br>";
}

//Creating table customers
 $sql = "CREATE TABLE `bank`.`customers` ( `Cust_ID` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `Email` VARCHAR(20) NOT NULL , `Amount` FLOAT(30) NOT NULL , PRIMARY KEY (`Cust_ID`)) ";

 $result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to create table.<br>";
}else{
    echo "Customer Table Created Successfully.<br>";
}

//Adding 10 dummey data into table customers
$sql ="INSERT INTO `bank`.`customers` (`Cust_ID`, `Name`, `Email`, `Amount`) VALUES ('20117903', 'Mr. Jatin', 'jatinyuhu@gmail.com', '30000.00'), ('20116807', 'Mr. Akshat sharma', 'Akshatwhy@gmail.com', '12830.00'), ('20114501', 'Ms. Nandini', 'nanduji@yahooo.com', '5027.00'), ('20119021, 'Mr. Aman Rathore', 'rathore.aman@hotmail.com', '150344.00'), ('21015698', 'Mrs. Reeta Kumari', 'kumariji@gmail.com', '20024.00'), ('20515609', 'Mr. kunal Kamra', 'Kamrapvt@comedy.com', '3500.00'), ('20335610', 'Mrs. lois lane', 'wifeofsuperman@yahoo.com', '122340.00'), ('12784567', 'Ms. Shreya', 'Ghoshalshreya12@singer.com', '304370.00'), ('20151237', 'Mr. Chandan', 'richkid@gmail.com', '2303432.00'), ('20118702', 'Mr. Kanak Sharma', 'sharmakan@gmail.com', '40000.00')";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to add entries to table. <br>";
}else{
    echo "Entries added to table Successfully.<br>";
}

//Creating transaction table customers
$sql = "CREATE TABLE `bank`.`transaction` ( `Tran_ID` INT NOT NULL AUTO_INCREMENT , `From` VARCHAR(11) NOT NULL , `To` VARCHAR(11) NOT NULL , `Amount` DECIMAL NOT NULL , PRIMARY KEY (`Tran_ID`))";

$result = mysqli_query($conn,$sql);

if(!$result){
   echo "Sorry we failed to create table.<br>";
}else{
   echo "Transaction Table Created Successfully.<br>";
}

?>