<p align="center"><img src="http://capacitacion.center/applogo.png"></p>



# About Mi Condominio Online

Condominio.Plus it’s a Mexican company that will be conformed as a subsidiary of Soluciones Gubernamentales y Corporativas (SGC), company that was stablished in 2008; it started operations in Queretaro and now, it’s looking forward to expand the business operations to the rest of the country. 
Using the “JUST & SIGN” trademark nowadays the company its involved in projects that embrace both legal and technologic aspects. 

In the same approach, now the company is building a new solution for offering condos an integral grasp for the problems they face.
Through the time SGC has acquired experience about the problems that a condominium administration faces during the daily operation, contributing with decisions and statements that have been valued positively.

Due to a research done by the company about the different administration services, alongside with the investigation, testing and evaluation of web platforms in the market, SGC has determined to launch Condominio.Plus trademark together with the development of a system that help the operations.

- [More about SGC](https://justsign.mx).


# Instalation

## Pre-requirements

For running he application, please notice to comply all the pre-requisits.
> Download and install  [COMPOSER](https://getcomposer.org/).

> Download and install  [XAMPP](https://www.apachefriends.org/es/index.html).

**IMPORTANT NOTES:** 
- Make sure that you install also the **MySQL** package when installing **XAMPP**.
- Please use the code that is published in the master branch
- Keep the whole route for the folder, so you will need it for further usage in the PHP setup.
- Follow the whole installation guide, **do not** miss **any** step.


## Step 1 - Downloading repo
Download the latest version of the project from the github repository, this is important to be downloaded in the final destination where the app will be executing.

```bash
git clone https://github.com/hugodelarosa/MiCondominioOnline.git
```

## Step 2 - Installing Dependencies

Navigate with the CMD or bash to the instalation root.

```cmd
cd /.../.../.../MiCondominioOnline/
```
Run the following command to download all the dependencies and needed libraries

```cmd
php composer update
```

## Step 3 - Modifing the .env file

When download is finished, go to the root (app) directory and open the .env file. Once in there you will need to add the information for your local instance of DB.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= **your_db**
DB_USERNAME= **your_username**
DB_PASSWORD= **your_usernema_password**

```

## Step 4 - Creating the database

Navigate with the CMD or bash to the instalation root.

```cmd
cd /.../.../.../MiCondominioOnline/
```

Run the following command to run the migrations scripts for generating database.

```cmd
php artisan migrate
```

## Step 5.A - Running the aplication (php artisan serve)
If you want to use artisan default settings for running the application, go ahead and navigate with the CMD or bash to the instalation root, and type the following command.

```cmd
php artisan serve
```

Remember that the aplication will run in the equivalent to *http://localhost:8000*

## Step 5.B - Running the aplication (XAMPP apache instance)

If you want to use the XAMPP control panel for running the aplication.
1. Open the XAMPP control panel and click on the **APACHE** config option.

2. Select the **_httpd.conf_** file to edit it. (It will be opened in the default editor)

3. Look for the **_DocumentRoot_** Tag, that would look like:
```
DocumentRoot "C:/xampp/htdocs"
```

4. Replace the default route with the one where you downloaded the project. **IMPORTANT :** make it all the way to public folder.

```
DocumentRoot "C:/route/to/project/MiCondominioOnline/public/"
```

5. Look for the **_<Directory>_** tag, that would look like (notice the route is the same from the tag before) :

```
<Directory "C:/xampp/htdocs">

```

6. Replace the default route with the one where you downloaded the project. **IMPORTANT :** make it all the way to public folder.

<Directory "C:/route/to/project/MiCondominioOnline/public/">

**REMEMBER** the application would be running in something like *http://localhost* if the por config, and listen config have not been changed.