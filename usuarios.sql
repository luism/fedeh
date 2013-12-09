# Insertamos unos roles que deben ir por defecto. Estos son necesario por el modulo Auth
INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.'),
(3, 'participant', 'Participants');

# Agregamos el usuario 'admin' y la contraseña 'password' (sin comillas)
INSERT INTO `users` (`username`, `email`, `password`) VALUES
('admin', 'admin@example.com','3aa4b899cda42cb4079f07ad4f84dec0f790f67735c61cab192fd7507b6f05ee');