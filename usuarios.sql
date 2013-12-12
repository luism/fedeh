# Insertamos unos roles que deben ir por defecto. Estos son necesario por el modulo Auth
INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.'),
(3, 'participant', 'Participants');

# Agregamos el usuario 'admin' y la contraseña 'password' (sin comillas)
INSERT INTO `users` (`username`, `email`, `password`) VALUES
('admin', 'admin@example.com','3aa4b899cda42cb4079f07ad4f84dec0f790f67735c61cab192fd7507b6f05ee');

# Agrego unos roles por defecto a el usuario admin.
# En principio el user_id debe ser 1 ya que el primer usuario que debería
# ser creado es el admin. En caso de que no sea así debe ser el user_id
# correspondiente al admin.
INSERT INTO `fedeh`.`roles_users` (`user_id`,`role_id`)
VALUES (4,1), (4,3);