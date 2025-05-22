-- все пользователи
SELECT * 
FROM users;

-- все заказы клиентов с фамилией 'Иванов'
SELECT orders.* 
FROM orders
JOIN users ON orders.user_id = users.id
WHERE users.name LIKE 'Иванов %';

-- id и имя клиентов, где есть минимум один заказ
SELECT users.id, users.name
FROM users
JOIN orders ON users.id = orders.user_id;

-- пользователь, который сделал последний заказ, информация о заказе
SELECT users.*, orders.* 
FROM orders
JOIN users ON orders.user_id = users.id
ORDER BY orders.created_at DESC 
LIMIT 1;

-- все заказы, сделанные не позже 31.03.2023
SELECT * 
FROM orders
WHERE created_at <= '2023-03-31';