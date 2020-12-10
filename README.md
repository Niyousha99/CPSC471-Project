# ViVi-Art-Gallery-DBMS

## Final project for CPSC 471 - Data Base Management Systems at the University of Calgary


Access to the ViVi Art Gallery database requires installation of XAMPP, Apache Server, and mySQL Server on the C: drive. After running the latter two servers on the XAMPP Control Panel, a new database must be imported on localhost/phpmyadmin which may be loaded on any browser. There are two options for which file to import to the new database:

InitTables.sql creates empty tables.
“InitTablesWithData.sql”creates tables and populates them with sample data.

Next, all necessary php files must be saved in the “htdocs” folder located under the “xampp” folder on the C: drive. The php files are categorized in three directories:

The “config” directory contains one file, “Database.php”, which is responsible for configuring the database. 
The “models” directory contains a file for each entity which is responsible for all the business logic associated with constructing tables and executing queries.
The “api” directory serves as the microservice directory whose naming corresponds to “models” and contains multiple folders for each entity that it interacts with (e.g., Art_item, Customer, Shipment, etc.). Each of these folders contains a file for every general query: GET, GET_SINGLE, POST, PUT, and DELETE.

All testing and management of API requests has been done with the Postman API platform. 

