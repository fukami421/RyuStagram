## 詰まったとこ
>  Illuminate\Database\QueryException  : SQLSTATE[42S01]: Base table or view already exists: 1050 Table 'users' already exists (SQL: create table `users` (`id` bigint unsigned not null auto_increment primary key, `name` varchar(255) not null, `profile` varchar(128) not null default '', `created_at` timestamp null, `updated_at` timestamp null))

こんな感じのエラーが出たら、既にmigrateした事のあるmigrateファイルの、up()の中身をコメントアウトすれば良い。  

その他のエラーは大体config/database.phpの設定が悪い。  
