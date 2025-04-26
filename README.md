# 🎓 University Informative Website

## 📌 Overview
This is a **university website** built using **PHP (OOP, MVC)** and **MySQL**. It is designed for both general users (visitors) and students, providing features such as secure authentication, content management, course listings, event registration, student feedback, and more. Visitors can view university news, announcements, and events, while students have access to additional features such as managing their profiles, registering for courses and events, purchasing textbooks, and leaving feedback. Admins can manage the website content, users, and all features.

## 🚀 Features

### 🔑 Authentication (Auth)
- **User Registration & Login**:
  - Role-based access control (RBAC) for:
    - **Admins**: Full control over content and user management.
    - **Students**: Limited access, but with the ability to manage their profile, register for courses and events, purchase textbooks, and leave feedback.
    - **General Users/Visitors**: Can view news, events, and announcements but cannot interact with course registration or provide feedback.
- **Admin Dashboard**:
  - Manage users, posts, events, courses, and faculty profiles.
- **Student Dashboard**:
  - Students can access events, courses, and bookstore features, and manage their own profiles.
  - **Profile Management**: Students can view and edit their personal information, such as name, email, and other contact details.

### 📂 Content Management (CRUD)
- **News & Announcements**: Admins can create, edit, and delete updates and announcements.
- **Events**: Admins can create and manage events, while students can register for them.
- **Faculty Profiles**: Admins can create and manage detailed faculty profiles.

### 🎓 Course & Faculty Management
- Display **academic programs** and faculty details & staff.
- Students can view course information and faculty details for their enrolled courses.

### 📢 Announcements & Events
- **News & Announcements**: Admins can post updates and news about the university.
- **Event Registration**: Students can register for events directly from the website.

### 📚 Bookstore (Student-Exclusive Feature)
- **Student Bookstore**: Students can purchase textbooks and other required materials directly from the website.

### 🧑‍💻 Student Feedback & Reviews
- **Feedback Section**: Students can leave feedback about their courses and overall university experience.
- Admins can moderate and manage student reviews and feedback.

### ✉️ Contact Form (Bonus Feature)
- **Inquiry Form**: Users can submit their inquiries, which are either stored in the database or sent to the admin's email for prompt responses.

## 🏗️ Tech Stack

| Technology  | Usage |
|-------------|--------------------------------|
| **PHP (OOP, MVC)** | Backend and business logic |
| **MySQL** | Database management |
| **HTML, CSS, JavaScript (Bootstrap)** | Frontend design |
| **Apache/Nginx** | Web server |
| **Bcrypt** | Password hashing & security |

## ©️ Copyright

Copyright © 2025 **Abdullah Mohamed El-sayed Mohamed Fathallah** (ID: 2320365). All rights reserved.
