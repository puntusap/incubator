# incubator
db.php //подкючение к БД
index.php //главная страница сайта
calc.php // обработка добавления "пасты" в БД
search.php // страница поиска по "пастам"
calc_search.php // обработка поиска
register.php // страница регистрации пользователя
calc_reg.php // обработка регистрации
auth.php // страница входа в личный кабинет
calc_auth.php // обработка входа
lk.php // страница личного кабинета
allmypaste.php // страница всех "паст" пользователя
logout.php // обработка выхода из ЛК
cron.php // задача для чистки от истекших по сроку паст,время по выставлять по надобности 
 
 СТРУТУРА БД(incubator)
 таблица- paste
 1. id (int(11))
 2. text (text)
 3. time (datetime)
 4. access (varchar(8))
 5. title (varchar(30))
 6. hash (text)
 7. user (int(11))
 таблица- user
 1. id (int(11))
 2. login (varchar(16))
 3. pass(varchar(16))
