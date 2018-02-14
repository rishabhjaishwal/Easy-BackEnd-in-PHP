# Easy-BackEnd-in-PHP
BackEnd for content creation and editing and deleting files of website without visiting to hosting BackEnd Panel(Using own website Admin Panel)<br>
Step 1: Place all the file as it is in htdoc or www folder <br>
Step 2: Create a new database of any name<br>
Step 3: Find all connect.php and connect with your database name , password and username.<br>
Step 4: Create a table in your database of name login with column name as    <br>    
            Sno             int          auto_increment primary key,<br>
            username        varchar(200) not null,<br>
            name            varchar(200) not null,<br>
            password        varchar(200) not null,
            creation_date   date,
            modified_date   date,
            email           varchar(200),
            phonenumber     int,      
       
        Note: Login table is for login as admin temporarily into BackPanel afterwards you can change accordingly(add one login detail                     before login)
 
 Step 5: Create another table in your database of name fileaddress with column name as
            Sno               int           auto_increment primary key,
            filename          varchar(200)  not null,
            samefoldaddr      varchar(200),
            parentfolderaddr  varchar(200),
            outertoinneraddr  varchar(200),
            modified_date     date,
       
       Note: Fileaddress table is for view all the file which was created using create command and this table is also used for deleting 
             files.
Step 6: How to create or open a file
             a) Open admin.php in your browser
             b) Write your file name with extension in input field (name of file) which You want to create or open then click on button                   create
     Example: 1) If you enter a file name "page1.php" in input field (name of file) then 
                      if file is present at the location of "admin.php" then it just open that file 
                      otherwise if file is not present then it will create a new empty file
              
              2) When you want to create file in where your index.php is placed then just used ("../") before page1.php it will create                          file outside adminpanel folder ("../page1.php" or "../page1.txt" or "../page1.css" or any other file extension)
              
              3)If you want to create a file in a specific folder then just use path as ("../folder1/page1.php" or "folder1/page1.php")
      
      
      If You are facing any problem on implementing this basic BackPanel or CMS Panel then
      You can drop a mail to me on : rishabhjaishwal7@gmail.com
      Author : Rishabh Jaishwal
      Version : Version 1.0
     
