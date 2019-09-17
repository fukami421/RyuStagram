# RyuStagram  
<img width="1440" alt="スクリーンショット 2019-09-17 23 07 34" src="https://user-images.githubusercontent.com/41050625/65049498-cdaa5e00-d9a0-11e9-9197-a22632cddcfd.png">

[リンク先](https://team-lab.github.io/skillup/step2/03-laravel-demo.html)で書かれているような内容を元にlaravelの勉強がてら何か作ってみます。   

# Laravel  
## Execution command  
### local server start
```command line
$ php artisan serve  
```
http://127.0.0.1:8000/

### make Controller  
```commandline  
$ php artisan make:controller <ControllerName>
```

### make migration file  
```command line
$ php artisan make:migration create_users_table
```

### make seeder file  
```command line  
$ php artisan make:seeder UsersTableSeeder
```  

### create & insert table
```command line  
# migrate  
$ php artisan migrate  
$ php artisan db:seed  
```

### make common parts  
[参考](https://qiita.com/kotsuban-teikin/items/f977c4edcb85d7e9faff)  

# Bootstrap4.3.1  
## Setup  
```command line
# if you install boostrap4.3.1  
$ composer require twbs/bootstrap:4.3.1  
$ npm install
$ npm install popper.js
```
add to html file
```html
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
```
