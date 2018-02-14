# Easy-BackEnd-in-PHP
BackEnd for content creation and editing and deleting files of website without visiting to hosting BackEnd Panel(Using own website Admin Panel)<br><br>
Step 1: &nbspPlace all the file as it is in htdoc or www folder <br>
Step 2: &nbspCreate a new database of any name<br>
Step 3: &nbspFind all connect.php and connect with your database name , password and username.<br>
Step 4: &nbspCreate a table in your database of name login with column name as    <br>    
            Sno &nbsp &nbsp&nbsp           int &nbsp&nbsp         auto_increment &nbsp&nbsp primary key,<br>
            username &nbsp&nbsp&nbsp       varchar(200) &nbsp&nbspnot null,<br>
            name &nbsp&nbsp&nbsp           varchar(200)&nbsp&nbsp not null,<br>
            password &nbsp&nbsp&nbsp       varchar(200)&nbsp&nbsp not null,<br>
            creation_date&nbsp&nbsp&nbsp   date,<br>
            modified_date&nbsp&nbsp&nbsp   date,<br>
            email &nbsp&nbsp&nbsp&nbsp          varchar(200),<br>
            phonenumber &nbsp&nbsp&nbsp    int,<br>      
   <br><br>    
   Note:&nbsp Login table is for login as admin temporarily into BackPanel afterwards you can change accordingly(add one login detail                     before login)<br><br><br>
 
 Step 5:&nbsp Create another table in your database of name fileaddress with column name as <br>
            Sno &nbsp&nbsp&nbsp              int &nbsp&nbsp          auto_increment&nbsp&nbsp primary key,<br>
            filename &nbsp&nbsp&nbsp         varchar(200)&nbsp&nbsp  not null,<br>
            samefoldaddr&nbsp&nbsp&nbsp      varchar(200),<br>
            parentfolderaddr &nbsp&nbsp&nbsp varchar(200),<br>
            outertoinneraddr &nbsp&nbsp&nbsp varchar(200),<br>
            modified_date   &nbsp&nbsp&nbsp  date,<br>
       <br><br><br>
       Note: Fileaddress table is for view all the file which was created using create command and this table is also used for deleting 
             files.<br><br>
Step 6: How to create or open a file<br>
           &nbsp&nbsp&nbsp&nbsp  a) Open admin.php in your browser<br>
            &nbsp&nbsp&nbsp&nbsp b) Write your file name with extension in input field (name of file) which You want to create or open then click on button                   create<br><br><br>
     Example:&nbsp 1) If you enter a file name "page1.php" in input field (name of file) then<br> 
                      if file is present at the location of "admin.php" then it just open that file<br> 
                      otherwise if file is not present then it will create a new empty file<br><br>
             &nbsp&nbsp 2) When you want to create file in where your index.php is placed then just used ("../") before page1.php it will create                          file outside adminpanel folder ("../page1.php" or "../page1.txt" or "../page1.css" or any other file extension)<br><br>
              3)If you want to create a file in a specific folder then just use path as ("../folder1/page1.php" or "folder1/page1.php")
      <br><br>  
      If You are facing any problem on implementing this basic BackPanel or CMS Panel then<br>
      You can drop a mail to me on &nbsp: &nbsprishabhjaishwal7@gmail.com<br>
      Author :&nbsp Rishabh Jaishwal<br>
      Version :&nbsp Version 1.0<br>
     
