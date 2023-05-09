<?php
require_once('databaseCon.php');
  if ($conn-> query("use ems") === TRUE) 
		{
		/*Create Tables */
			$tableField = array("Admin (AdminId INTEGER primary key NOT NULL AUTO_INCREMENT, First_Name varchar(50) NOT NULL,Last_Name varchar(50) NOT NULL,Email varchar(50) NOT NULL UNIQUE, Password varchar(300) NOT NULL,ProfileImage varchar(1000),JoinDate datetime default now())",
			"Employees(EmpId INTEGER primary key   AUTO_INCREMENT, First_Name varchar(50) NOT NULL,Last_Name varchar(50) NOT NULL,Email varchar(50) NOT NULL UNIQUE, Password varchar(300) NOT NULL,ProfileImage varchar(1000),JoinDate datetime default now(),UpdateDate datetime default now())AUTO_INCREMENT = 1001",
			"User(UserId INTEGER primary key   AUTO_INCREMENT, First_Name varchar(50) NOT NULL,Last_Name varchar(50) NOT NULL,Email varchar(50) NOT NULL UNIQUE, Password varchar(300) NOT NULL,ProfileImage varchar(1000),JoinDate datetime default now(),UpdateDate datetime default now())AUTO_INCREMENT = 500",
			"EmployeeTasks(EmpTaskId INTEGER primary key  AUTO_INCREMENT, EmpId INTEGER , Task_Name varchar(80),EST varchar(30),ActualTime varchar(30),status varchar(30))"	
		);

			foreach($tableField as $table){
			
				if ($conn-> query("Create Table IF NOT EXISTS ".$table) === TRUE) {
						// echo "Table create Successfully";
					}
				else {
				//  echo "Something wrong". $conn->error;
				}
			}
    /*End Tables */
	
		}
?>
