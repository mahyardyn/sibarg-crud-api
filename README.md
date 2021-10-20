# Sibarg CRUD REST API (Tip)
 This is REST API created with laravel 8

# Requirements
 PHP 8.x <br>
 Composer
 
# Usage
Setup the repository
```
git clone git@github.com:mahyardyn/sibarg-crud-api.git
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear 
php artisan serve 
```

# Database Setup
We are going to pull in data from the database so make sure that you have your database setup
```
mysql;
create database sibarg_crud;
exit;
```
Setup your database credentials in the .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sibarg_crud
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```
Migrate the tables

```
php artisan migrate
```

# HTTP Methods
Available HTTP methods on a resource


<table>
<thead>
<tr>
<th><strong>Verb</strong></th>
<th><strong>Path</strong></th>
<th><strong>Action</strong></th>
<th><strong>Route Name</strong></th>
<th><strong>Description</strong></th>
</tr>
</thead>
<tbody>
    
<tr>
<td>GET</td>
<td>/Tips</td>
<td>index</td>
<td>Tips.index</td>
<td>Get all Tips</td>
</tr>
    
<tr>
<td>GET</td>
<td>/Tips/{Tip}</td>
<td>show</td>
<td>Tips.show</td>
<td>Get data of specific Tip</td>
</tr>

    
<tr>
<td>POST</td>
<td>/Tips</td>
<td>store</td>
<td>Tips.store</td>
<td>Create a new Tip</td>
</tr>


    
<tr>
<td>PUT</td>
<td>/Tips/{Tip}</td>
<td>update</td>
<td>Tips.update</td>
<td>Update a specific Tips</td>
</tr>
    
<tr>
<td>DELETE</td>
<td>/Tips/{Tip}</td>
<td>destroy</td>
<td>Tips.destroy</td>
<td>Delete a specific Tip</td>
</tr>
</tbody>
</table>

# JSON Api Specification
Let’s go over the structure of a JSON file in this repository
<pre>
{
    "data": {
        "Guid": 1,
        "title": "1st Title",
        "description": "this is test description",
        "created_at": "2021-10-20T12:53:24.000000Z",
        "updated_at": "2021-10-20T12:59:00.000000Z"
    }
}
</pre>



