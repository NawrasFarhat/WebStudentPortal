
# ProjectWeb - Student Course Management Website

This is a PHP + MySQL-based web application that allows users (students) to:

- 🔐 Register and log in
- 📚 Add and view courses
- 📧 Submit and view contact information
- 👥 Display student lists

---

## 📄 Pages Included

- `1.html` — Home page with navigation menu
- `login.php` — Login functionality using MySQL
- `newUser.php` — Registration page (adds user to DB)
- `courses.php` — Add/view courses (only after login)
- `about_us.php` — Displays student list from DB
- `contact.php` — Shows emails of students
- `view_courses.php` — Displays all courses

---

## 🗄️ Database

Database name: `webproject`

Includes:
- `users` — login credentials
- `course` — course list
- `email` — student contact info

SQL schema provided in: `webproject.sql`

---

## 🛠️ Technologies Used

- **Frontend**: HTML5, CSS3
- **Backend**: PHP
- **Database**: MySQL (phpMyAdmin)

---

## ▶️ How to Run the Project

1. Install [XAMPP](https://www.apachefriends.org/) or similar
2. Copy the `ProjectWeb` folder to `htdocs`
3. Start Apache & MySQL from XAMPP
4. Open `phpMyAdmin` and create a database named `webproject`
5. Import `webproject.sql` to populate tables
6. Open your browser and go to:  
   `http://localhost/ProjectWeb/1.html`

---

## ⚠️ Disclaimer

This project is for **educational purposes only**.  
It does not implement password encryption or security best practices.

---

## 👨‍💻 Author

Developed by **[NawrasFarhat](https://github.com/NawrasFarhat)**
