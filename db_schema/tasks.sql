create table tasks(
    id int auto_increment primary key,
    tasks_name varchar(50) not null,
    tasks_details varchar(200),
    active boolean default true,
    created_at date not null,
    updated_at date);


ALTER TABLE tasks
    MODIFY COLUMN created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    MODIFY COLUMN Updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;



describe tasks;
+---------------+--------------+------+-----+---------------------+-------------------------------+
| Field         | Type         | Null | Key | Default             | Extra                         |
+---------------+--------------+------+-----+---------------------+-------------------------------+
| id            | int(11)      | NO   | PRI | NULL                | auto_increment                |
| tasks_name    | varchar(50)  | NO   |     | NULL                |                               |
| tasks_details | varchar(200) | YES  |     | NULL                |                               |
| active        | tinyint(1)   | YES  |     | 1                   |                               |
| created_at    | timestamp    | YES  |     | current_timestamp() |                               |
| Updated_at    | timestamp    | YES  |     | current_timestamp() | on update current_timestamp() |
+---------------+--------------+------+-----+---------------------+-------------------------------+
