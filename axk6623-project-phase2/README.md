CSE5335
#Alok Kumar
#Net Id: axk6623


Step 1: I used VMPlayer 7 as my virtual machine with Ubuntu server as the operating system.

Step 2: I used MySQL and MongoDB as MySQL and NoSQL data source in my project.

Step 3: I used PHP as a server side framework to perofrm queries on SQL and NoSQL.

Step 4: Extra Credit: Uploaded the JSON file with 10,000 records both on MySQL and MongoDB using PHP Script.

	-used nano editor to write the PHP script.
	- For MySQl created file using the command "nano alok_sql.php"
	- For Mongo created file using the command "nano alok_mongo.php"
	- To run the script:
         -> used php5 ./alok_sql.php
         -> used php5 ./alok_mongo.php

Step 5: Again Created 2 scripts to perform given queries on MySQL and MongoDB.

Answers to the questions:

(a) I used MySQL as a SQL framework because MySQL is most widely used open source relational database management systems. It 
is popular choice of database in web development and I found it easy to work upon it.

(b) I used MongoDB as a NOSQL framework because MongoDB is a cross platfrom document oriented database and it is easy to 
upload the JSON file on MongoDB because it supports BSON format means Binary JSON.

(c) I used PHP as a server framework because PHP community is large and I found PHP very easy for uploading the JSON file on MYSQL and MongoDB.

(d) I found the MongoDB more easy than MySQL while connecting and uploading he JSON file because 
in MySQl I got stuck while parsing the data in the JSON file.

(e) I found the parsing part more difficult while uploading the data on MySQL beacuse I didn;t know how to parse that file in to upload on MySQL.

(f) Other than SQL, NoSQL, and server framework, I installed apache2 server for MongoDB.

(g) The following ubuntu commands are used to deploy and run the server:
	- sudo apt-get install php5-cli
	- sudo apt-get install php5-mysql
	- sudo apt-get install mysql-server mysql-client
	- sudo apt-get install php5-mongo
        - sudo pecl install mongo
	- sudo apt-get install apache2
         



References:

(1) http://docs.mongodb.org/manual/tutorial/install-mongodb-enterprise-on-ubuntu/
(2) http://www.w3schools.com/
(3) http://www.w3schools.com/php/php_mysql_create_table.asp
(4) http://us1.php.net/json_decode
(5) http://docs.mongodb.org/manual/tutorial/getting-started/
(6) http://www.tutorialspoint.com/mongodb/mongodb_php.htm
 
