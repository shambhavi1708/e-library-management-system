# 📚 Library Management System

An efficient and user-friendly online library management system designed to streamline the process of book cataloging, user management, borrowing, and returns.

## 🌟 Features

- **Book Management**: Add, update, delete, and search books by title, author, genre, or ISBN
- **User Management**: Register, update, and manage library member accounts
- **Borrowing System**: Check out, reserve, and return books with automated due date calculations
- **Fine Management**: Automatic calculation of overdue fines
- **Responsive Design**: Works seamlessly on desktop and mobile devices
- **Search Functionality**: Advanced search with filters and sorting options

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Development Environment**: XAMPP
- **Server**: Apache
- **Authentication**: PHP Sessions

## 📋 Prerequisites

-XAMPP (with PHP 7.0 or higher)
-Web browser (Chrome, Firefox, Edge, etc.)

## ⚙️ Installation

1. Clone the repository:
```bash
git clone https://github.com/shambhavi1708/e-library-management-system.git
```

2. Move the project folder to your XAMPP htdocs directory:
```bash
mv e-library-management-system/path/to/xampp/htdocs/
```

3. 'Start Apache and MySQL services from the XAMPP control panel
Import the database:

Open your web browser and navigate to http://localhost/phpmyadmin
Create a new database named library_db
Select the newly created database
Go to the "Import" tab
Choose the SQL file from database/library_db.sql
Click "Go" to import the database structure


Configure the database connection:

Open config/db_config.php
Update the database credentials if needed:

phpCopy$host = "localhost";
$username = "root";
$password = "";
$database = "library_db";

Access the application by navigating to:

Copyhttp://localhost/library-management-system

## 🧩 Project Structure

```
library-management-system/
├── client/                  # Frontend React application
│   ├── public/              # Static files
│   ├── src/                 # React source files
│   │   ├── components/      # Reusable components
│   │   ├── pages/           # Page components
│   │   ├── services/        # API services
│   │   └── utils/           # Utility functions
├── server/                  # Backend Node.js application
│   ├── config/              # Configuration files
│   ├── controllers/         # Request handlers
│   ├── models/              # Database models
│   ├── routes/              # API routes
│   ├── services/            # Business logic
│   └── utils/               # Utility functions
├── .env                     # Environment variables
├── .gitignore               # Git ignore file
├── docker-compose.yml       # Docker configuration
├── package.json             # Project dependencies
└── README.md                # Project documentation
```

## 🚀 Usage

### Admin Portal

1. **Login**: Access the admin dashboard using admin credentials
2. **Manage Books**: Add, edit, remove books from the library catalog
3. **Manage Users**: Create, update, or deactivate user accounts
4. **View Reports**: Access circulation statistics and analytical reports

### User Portal

1. **Search Books**: Browse and search the library catalog
2. **Account Management**: View borrowed books, history, and fines
3. **Book Borrowing**: Place holds on books and manage returns

## 📝 API Documentation

API endpoints are available at `/api/v1/` and include:

- **Authentication**
  - `POST /api/v1/auth/register` - Register a new user
  - `POST /api/v1/auth/login` - User login

- **Books**
  - `GET /api/v1/books` - Get all books
  - `GET /api/v1/books/:id` - Get a specific book
  - `POST /api/v1/books` - Add a new book
  - `PUT /api/v1/books/:id` - Update a book
  - `DELETE /api/v1/books/:id` - Delete a book

- **Users**
  - `GET /api/v1/users` - Get all users
  - `GET /api/v1/users/:id` - Get a specific user
  - `PUT /api/v1/users/:id` - Update a user
  - `DELETE /api/v1/users/:id` - Delete a user

- **Transactions**
  - `POST /api/v1/transactions/borrow` - Borrow a book
  - `POST /api/v1/transactions/return` - Return a book
  - `GET /api/v1/transactions/user/:id` - Get user's transactions

## 🧪 Testing

Run tests using:
```bash
npm test
# or
yarn test
```

## 🔄 Deployment

### Using Docker

```bash
docker-compose up -d
```

### Manual Deployment

1. Build the frontend:
```bash
cd client
npm run build
```

2. Start the production server:
```bash
npm start
```

## 👥 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📜 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 🙏 Acknowledgements

- [MongoDB Documentation](https://docs.mongodb.com/)
- [Express.js Documentation](https://expressjs.com/)
- [React Documentation](https://reactjs.org/docs/getting-started.html)
- [Node.js Documentation](https://nodejs.org/en/docs/)

## 📞 Contact

Project Link: [https://github.com/yourusername/library-management-system](https://github.com/yourusername/library-management-system)

---

Made with ❤️ for book lovers everywhere
