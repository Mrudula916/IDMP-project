# IDMP-project

1. Introduction
 
Resorts are a place that people choose to go on vacations for relaxing and spending quality time with their families and friends.  Some people also prefer to participate in certain activities like camping, bird-watching, etc. on their vacations, which help them get through their stressful lives and relax. Resorts are also places where people like to celebrate the most memorable moments of their lives like weddings, birthdays, etc. Food is a very important part of a resort. Tasty and healthy food is a top priority for customers while they book their stay in a resort. 
	A few decades ago, making reservations was a tedious process for both the customers and the resort staff. They require telephone calls or physical bookings which had to be done and recorded manually. This made room for a lot of human errors such as loss of data, inaccurate data entries, etc. In today's scenario, the available technology, like a resort management system makes it easier and faster for both parties, with higher levels of accuracy. Data collection previously was also manual and done through surveys and was costly. Using this system will make it easier for data collection, visualisation, and analytics.

Altheda is a basic website for resort management, which has two main modules: User and Admin.

I. User module: Users can login/ register to the website using their email and password. This will further enable them to book rooms, register for events and activities, and order food. Each of these modules are explained below.
	i. Accommodation: This a room booking module, where users can view the different types of rooms - Standard room, Deluxe room, and Royal room. Each room has a description of the facilities that will be provided, along with the price of the room per night. Users can book their desired rooms.
	ii. Events and Activities: People can choose Altheda to celebrate events like birthday parties, weddings, etc in dedicated venues for the same. A registration is required, in order to select the date of the event, book seats for their guests, etc.
	Activities are a part of the resort entertainment and leisure. They include bird watching, camping, indoor games, etc. Users need to book the activities to facilitate the management of the resort to group people with the same interests and conduct the activities smoothly.
	iii. Dining: The restaurant in a resort is one of its main attractions. A resort is incomplete without tasty and healthy food. Altheda provides its customers with a variety of delicious food items under different categories like starters, main course, desserts and mock-tails. Customers can choose all their favourite items and also select their desired quantity for each item. The favourite dish as chosen by customers will also be recommended to the other viewers of the website.
	
II. Admin module: This module helps the managers keep track of the employee engagement and also analyse the demographics of booking.
	i. Employee engagement: The admin can keep track of the employees, their salary, etc. 
 	ii. Analytics: The admin can view the profit/loss of the resort, employees by department, available rooms, etc. 

3. Database Description
The dataset has 17 tables. The data to the tables have been manually inserted, and hence no cleaning or pre-processing was required as the necessary validations were done on the website to ensure users do not enter inappropriate values.
The following schema describes the tables in the database:
1. Customer (customer_id, username, first name, last name, gender, email, date_of_birth, nationality, address, phone)
2. customer_login (email, username, password)
3. Booking (booking_id, username, room_type, no_of_rooms, check_in, check_out, adult_no, children_no)
4.room(room_number, room_type, price, available)
5. checkin (customer_id, booking_id, room_number, 		advance_amt)
6. checkout(customer_id, booking_id, room_tariff, 			food_amount, total_amount)
7. Events (event_id, username, date, s_time, e_time, 			event_type, venue)
8. budget(item_id, item_name, category, price)
9. restaurant(item_id, item_name, price, item_description, category)
10. activity(activity_id, activity_name)
11. Cashless (customer_id, booking_id, amount)
12. activity_registration (customer_id, activity_id, 				no_people, date, time_slot)
13. food_order( username, item_id, quantity)
14. Profit_loss(_date_, profit_loss)
15. Employee(employee_id, username, last name, gender, Address, phone, email, department)
16. demographics(customer_id, age, nationality, family_size, period_of_stay, date_of_arrival)
17. timesheet(employee_id, number_of_hours, compensation_per_hour, date_of_entry)

3.1 Normalisation Procedures

Normalisation is the process of organising data in a database. It includes creating tables and inserting values into them by abiding to the rules of normalisation, which is reducing redundancy, maintaining integrity, and also keeping the database flexible for use. 
In this project, 3 of the basic normalisation rules or normal forms were used to ensure validity of the data.
1NF: Tables in the database are all identified by primary keys/candidate keys. Each table has atomic values and no value is a group or list of values. Thus, the tables satisfy 1NF.
Example: the food order table takes multiple orders by the same customer. Thus, instead of taking all the items as a list, both the username and item_id columns have been made as a primary key together. This ensures atomicity of values and also each of the value can be identified independently using the primary keys.
2NF: Tables with related set of values are separated into different tables to avoid redundancy and are related using foreign keys.
Example: The activities table has a list of all activities with the ids and names. When the user registers for a particular activity, the registration happens in the activity registration table, to avoid redundancy. This prevents activity ids and activity names from repetition. These tables are connected using foreign key.
3NF:   No fields exist that do not depend on the key. There are also no tables that have transitive relations. Thus the database satisfies 3NF.

4. Query optimisation
The queries in this project are optimised to the best of our abilities. During optimisation, the following points were taken care of:
i. Implicit/Explicit type conversions: The datatypes were not converted anywhere in the query. All the data was entered according to the actual datatype. 
ii. Sub-queries: In possible cases, sub-queries were avoided. Minimal amount of sub-queries were used only in inevitable situations.
iii. WHERE statement was used instead of HAVING to specify conditions, as WHERE is evaluated before HAVING as per the order of operations.
iv. In Stored procedures, LIMIT statements were used to constraint the amount of items displayed, especially in cases of food recommendations, etc.
v. Only required fields were queried using the SELECT statement instead of SELECT *, which was used only in rare situations.

5. Application Description
5.1 Features of the application:
The following are the main features of the application:
I. Main page:
Login/Registration : The user can register once he/she visits the website. An already registered user can login when they visit the website.
Food Recommendation: The main page shows a recommendation of the most ordered food.
Activity Recommendation: The main page also shows a recommendation of the most chosen activities. 
Note: Both the food recommendation and activity 
recommendation modules use stored procedures to 
update data.

II. User Module: 
Accommodation: User can login and book their desired room. The form takes in the checkin date, checkout date, and details of the user. An optional advance amount is charged while the room is booked. A trigger is used to update the number of available rooms when users checkin and checkout of their respective rooms.
Events/Activities: Users will be provided with a form for registering to events and activities. A cashless transaction facility is provided to the users. A card will be given to the users with an initial credit amount that will be added to the final bill.
 Dining: A food menu is provided to the users. They can choose food items from the menu along with the quantity for each of the item. 
Payment Gateway:  The total bill is calculated, which is the summation of the room tariff, food bill, cashless transaction amount, and the advance amount is subtracted from it. 

III. Admin Module:
 Reports: The admin can view the reports of available rooms, employee count by department, demographics report, and the profit/loss report of the resort.
Employee details: Admin can also view the details of the employee. A table displaying the working hours of the employees and the hourly compensation for the employees is also present.

5.2 UI Components

The UI components are made using HTML, CSS, PHP and Javascript.
The UI components include:
Main page: It consists of Login/Registration, food recommendation, and activity recommendation. The admin can also login from the main page.
Accommodation: Users can book the rooms from the form provided. The form provides different types of rooms, check in dates, check out dates, number of adults, number of children, etc.
Events/Activities: The users can choose different kinds of activities  and events from the list provided in the form. The date, venues and time for the activities /events, number of people can also be entered.
Dining: A food menu is presented to the users with a check box corresponding to each item. They can also update the quantity of each item they choose. 
Payment Gateway: It displays the total bill using a stored procedure. The users can choose their payment methods and enter their details to make the payment.
Reports: It displays the available rooms to the admin. It consists of a list of employees by their department. It also shows an analysis of the demographics of people coming to the resort. The profit/loss of the resort is also displayed to the admin.
Employee details: The admin can see the details of the employees. A table also displays the number of hours the employees worked along with their hourly compensation. The employee salary is calculated using stored procedure.

5.3 Storing and retrieval of data

Data storage into the tables is being done from the website. As the users fill the forms, the data gets updated at the backend. The application-program interface (API) used for this PHP. SQL queries were used in the php code to be able to store data.
For retrieving data, a few methods were used:
SQL queries: Basic sql queries were used to extract the necessary data and was presented on the website.
Stored procedures: For tasks such as total bill calculation recommendations, etc., stored procedures were called and the data was updated at the front-end.
Functions: For places where single values were supposed to be returned, functions were called from php.
Views: For displaying  only certain information relevant to the user, views were used.

5.4 Triggers, Stored Procedures, Functions, and Views

Triggers:
a. Demographics trigger: This trigger is used to call the stored procedure, Demographics calculator, when the users check out from their rooms.
Stored Procedures:
a. activity_recommender: This procedure recommends the most preferred activity among all the customers on the main page.
b. demographic_data_collector: This procedure is called by the demographics trigger. Once the check out table is filled, it calculates the number of people visiting the resort from various parts of the world.
c. food_recommender: Based on the number of orders placed per food item, the most preferred food item is recommended to the customers.
d. profit_loss_calc: Using the budget table, which consists of the total budget of the resort, and the sum of all the customer bills, the daily profit/loss of the resort is calculated.
e. employee_salary_calculator: This procedure multiplies the number of hours each employee worked for with the hourly compensation given to them, to calculate their final salary.

Functions:
a. cashless_calc: This procedure calculates the amount of cashless transactions done by the users for the activities and events.
b. total_bill: this function reads the room tariff, advance amount paid (which is 30% of the room rent), amount in the cashless transactions, and food bill to calculate the total bill using the following formula:
Total = room_tariff + food_bill + cashless_transaction - advance_amount.
Views:
a. employee_by_dept: This view is used on the admin side to display the number of employees in each department.
b. room_availability: This view shows the number of rooms available in each type of rooms (eg. Royal, Deluxe, Standard) to the admin.


System Requirements:

For the front end: Any text editor
For the backend: MQSQL
Localhost: PHP MYADMIN (XAMPP, WAMP, LAMPP)

All the php and html files should be placed in the htdocs folder (for XAMPP) or www folder (for WAMP).
All the css files should be placed in a folder named css inside the htdocs or www folder.

