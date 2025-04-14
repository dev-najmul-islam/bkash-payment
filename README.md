
# Laravel bKash Payment Integration

A Laravel package to easily integrate bKash payment gateway into your application.  
Built and maintained by **Najmul**.

---

## 📦 Installation

Install the package via Composer:

```bash

composer require najmul/bkash-payment:^1.0

⚙️ Configuration
If you're using Laravel 5.5+ with package auto-discovery, you're good to go.

Otherwise, manually register the service provider in config/app.php:

php

'providers' => [
    Najmul\BkashPayment\BkashServiceProvider::class,
];
🛠️ Environment Setup
Add the following to your .env file:

env

SANDBOX=true
BKASH_USERNAME=your_username
BKASH_PASSWORD=your_password
BKASH_APP_KEY=your_app_key
BKASH_APP_SECRET=your_app_secret

🚀 Usage
Once installed, the following routes are available in your Laravel application.

🔹 User Routes
Route	Description
/bkash-pay	Display payment form
/bkash-create	Create bKash payment
/bkash-callback	Handle payment callback
🔹 Admin Routes
Route	Description
/bkash-refund	View refund form
/bkash-refund (POST)	Process refund
/bkash-search	View transaction search form
/bkash-search (POST)	Search transaction
/bkash-query/{paymentID}	Query payment status by ID

📂 Views
The package includes basic Blade views for:

bkash.pay — Payment Form

bkash.success — Payment Success

bkash.fail — Payment Failed

bkash.refund — Refund Form

bkash.search — Search Form

To customize them, publish the views:

bash

php artisan vendor:publish --provider="Najmul\BkashPayment\BkashServiceProvider"
Views will be published to:


resources/views/vendor/bkash/
🧠 How It Works
Token is fetched and stored in the bkash_token DB table.

Uses cURL to interact with bKash API endpoints.

Token refresh & caching are handled automatically.

Supports sandbox and live mode via .env.

✅ Testing
Enable sandbox mode in .env:

env

SANDBOX=true
Then simulate transactions using bKash's sandbox credentials.

📜 License
This package is open-sourced software licensed under the MIT license.

🙌 Author
Najmul Islam
GitHub: dev-najmul-islam
Email: devnajmulislam52@gmail.com
Laravel ❤️ bKash

