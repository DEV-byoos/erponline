## erponlineERP web-based by codeIgniter 3.1.10 and PHP 7.3  auth BCRYP build to ERPonline version 2.0  BYOOS solutions  http://byoos.net
use  php 7.3 - auth  BCRYPT - codeIgniter 3.1.10 - rewrite  sessions - Mysqli - translate in French language
gbobard@gmail.com   2019


# [ERPonline](http://erponline.com) 
ERPonline – A Free E.R.P powered by CodeIgniter
This free software comes from the fusion of several sources including NodCMS_v2, InvoicePlane, Stock_master_v2 and bian others in the future....
Good use

### Welcome to my GitHub Repository

ERPonline+ is a free, Multi-Language, simple and powerful E.R.P powered by CodeIgniter.

More information can be found at [erponline.com](http://erponline.com/).

Frontend Demo: [demo.erponline.com](http://demo.erponline.com/)

Backend Demo: [demo.erponline.com/admin](http://demo.erponline.com/admin)
Username: demo
Password: demo

## Download ##
You can download it directly as a ZIP file: [GitHub Download](https://github.com/DEV-byoos/erponline/archive/master.zip)!

## Installation ##

ERPonline have a auto installation, but the installer is not powerful and doesn't work in all version of XAMPPs
Make sure the installer will change in the near future.

If you cannot install erponline automatic with wizard form, please try the manual way to install your ERPonline
### Manual installation:

1. Create a new empty database on your MySQL server(Set "Collation" on utf8_general_ci)
2. Import the erponline.sql file `application/install/installer/masks/erponline.sql` from in your database
3. Rename the file `database_manual.php` to `database.php` in `application/config/`
4. Inter your database name in line 81 of `database.php` between the last two quotation marks (`'database' => 'YOUR DATABASE NAME',`)
5. Set your host username on line 79 instead of root(`'username' => 'root',`)
6. Inter your password in line 80 between the last two quotation marks.(`'password' => 'YOUR PASSWORD',`)


After install, you can access the admin side on this URL www.your-domain.com/admin

#### Default administrator:

username: <strong>admin@admin.com</strong>

password: <strong>123456</strong>

## Bugs ##
If you find an issue, let us know [here](https://github.com/DEV-byoos/erponline/issues/new)!


There are various ways you can contribute:

1. Raise an [Issue](https://github.com/DEV-byoos/erponline/issues) on GitHub
2. Send us a Pull Request with your bug fixes and/or new features
3. Translate erponline into [Languages files in GitHub](https://www.github.com/DEV-byoos/erponline/tree/master/frontend/language)

dev ERPonline
prefix database table
fo_  forum
stk_  stocks
ip_   invoices
