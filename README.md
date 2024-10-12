# Data Analysis Application

## Description
A Laravel-based application for importing, processing, and analyzing data with visualization of results. Allows uploading data from CSV/Excel files, generating reports, and displaying them using interactive charts.

## Features
- **Import Data:** Upload data from CSV and Excel files.
- **Data Management:** Store and manage data in the database.
- **Report Generation:** Create reports with filtering and aggregation.
- **Data Visualization:** Interactive charts and graphs using Chart.js.
- **User Authentication:** Secure user login and registration.
- **Administrative Panel:** Manage data and reports efficiently.

## Installation

### 1. Clone the Repository

### 2. Install Dependencies

composer install
npm install
npm run dev

### 3. Configure Environment

Copy the example environment file and generate an application key:
cp .env.example .env

php artisan key:generate

Fill in your database connection details in the `.env` file.

### 4. Run Migrations and Seeders

php artisan migrate --seed


### 5. Start the Application

php artisan serve

## Usage

### 1. Register and Login
- Register a new account or log in to access the application features.

### 2. Import Data
- Navigate to the "Data" section and select "Import Data."
- Upload a CSV or Excel file containing your data.

### 3. View Data
- View the imported data in a paginated table format.
- Click on "View" to see detailed information about each data record.

### 4. Generate Reports
- Go to the "Reports" section and create a new report by selecting the desired parameters.
- Generate and view reports based on your selected criteria.

### 5. Visualization
- Access the main dashboard to view interactive charts and graphs that visualize your data insights.

## Testing
Run the test suite using the following command:

php artisan test

## Technologies
- **Backend:** PHP, Laravel
- **Frontend:** Blade, JavaScript, Chart.js
- **Database:** MySQL/PostgreSQL
- **Data Import:** Laravel Excel
- **Visualization:** Laravel Charts, Chart.js

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact
- **Email:** ourdarkchemistry@gmail.com
- **GitHub:** https://github.com/ourdarkchemistry
