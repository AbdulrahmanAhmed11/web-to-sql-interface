# web-to-sql-interface
A dynamic full-stack web application integrating HTML, PHP, and MySQL to manage and toggle states.

# 🎛️ Web-to-SQL Interface (Dynamic State Manager)

## 📌 Overview
This repository showcases a full-stack web application designed to demonstrate dynamic data handling and real-time state management. It serves as a foundational prototype for IoT dashboards, allowing users to input data and seamlessly toggle digital states (0 or 1) via a MySQL database. 

Understanding this web-to-database communication logic is a critical stepping stone for actuating remote hardware components, controlling microcontrollers, and building centralized web interfaces for complex robotic systems.

## 🛠️ Technologies & Tools
* **Frontend:** HTML5, CSS3
* **Backend:** PHP
* **Database:** MySQL (phpMyAdmin)
* **Environment:** InfinityFree Web Hosting


---

## 📸 Project Showcase

### 1. Web Interface (Frontend)
<img width="1010" height="1149" alt="Screenshot 2026-08-01 232649" src="https://github.com/user-attachments/assets/e0a8ada4-0f5d-4004-bdde-435d99672bc0" />


### 2. Database Structure (Backend)
<img width="666" height="574" alt="Screenshot 2026-08-01 232707" src="https://github.com/user-attachments/assets/b4bad712-4b13-4b36-9efe-c9ce36685c71" />

---

## 📋 Step-by-Step Implementation Guide

This project was built systematically by connecting the frontend user interface with a backend server and database. Here is the detailed breakdown of the development process:

### Step 1: User Interface Design (`index.php`)
* Designed a clean, single-line form using **HTML** to capture user input (Name and Age).
* Structured a responsive table to display the retrieved database records dynamically.
* Applied minimal, modern **CSS** to align the form elements and structure the data table clearly.

### Step 2: Database Configuration (MySQL)
* Created a remote database and configured a specific table named `stu`.
* Defined four specific columns: 
  * `ID` (Primary Key, Auto-Increment) for unique record identification.
  * `Name` (VARCHAR) to store text input.
  * `Age` (INT) to store numerical input.
  * `Status` (TINYINT) with a default value of `0` to represent the initial digital state.

### Step 3: Establishing Server Connection (`db.php`)
* Developed a dedicated PHP script using the `mysqli` extension.
* This file securely bridges the application with the InfinityFree MySQL servers by authenticating the host name, username, and password.

### Step 4: Data Insertion Logic (`in.php`)
* Handled the form submission utilizing the HTTP `GET` method.
* Authored an SQL `INSERT` query to capture the form variables and store them as a new row in the database.
* Implemented an automatic `header()` redirect to send the user back to the main interface immediately upon a successful database entry.

### Step 5: Dynamic Display & Real-Time Toggling (`toggle.php`)
* Embedded PHP within the HTML table to execute an SQL `SELECT *` query, iterating through every row and displaying it dynamically.
* Added a functional **Toggle** button mapped to the specific `ID` of each record.
* Created the `toggle.php` script to read the current boolean status (`0` or `1`) of the requested ID.
* Used conditional logic to flip the state and immediately execute an SQL `UPDATE` query, reflecting the new status instantaneously on the frontend dashboard.

---

## 🌐 Live Demo
You can test the live functionality of this data management system here:
**[Click Here to Test the Live Dashboard](https://eng-abdulrahman.kesug.com/web-to-sql-interface/index.php)**

