-- Trigger DDL Statements
USE `fedeh`;

DELIMITER $$

DROP TRIGGER IF EXISTS fedeh.socio_alta$$

USE `fedeh`$$

CREATE
DEFINER=`root`@`localhost`
TRIGGER `fedeh`.`socio_alta`
AFTER INSERT ON `fedeh`.`socios`
FOR EACH ROW
BEGIN
  -- Insertamos en tabla historial
  INSERT INTO historial (accion,ficha_id,socio_id,fecha)

  VALUES('asigna',NEW.ficha_id,NEW.id,NOW());

END$$

DELIMITER $$

DROP TRIGGER IF EXISTS fedeh.socio_update$$

CREATE
DEFINER=`root`@`localhost`
TRIGGER `fedeh`.`socio_update`
AFTER UPDATE ON `fedeh`.`socios`
FOR EACH ROW
BEGIN
  -- Verificamos si se deshabilitó
  IF NEW.deshabilitado THEN
    INSERT INTO historial (accion,ficha_id,socio_id,fecha)

    VALUES('desasigna',OLD.ficha_id,NEW.id,NOW());
  END IF;

END$$

USE `fedeh`;

DELIMITER $$

DROP TRIGGER IF EXISTS fedeh.socio_update$$
USE `fedeh`$$


CREATE
DEFINER=`root`@`localhost`
TRIGGER `fedeh`.`socio_update`
AFTER UPDATE ON `fedeh`.`socios`
FOR EACH ROW
BEGIN
  -- Verificamos si se deshabilitó
  IF NEW.deshabilitado THEN
    INSERT INTO historial (accion,ficha_id,socio_id,fecha)

    VALUES('desasigna.',OLD.ficha_id,NEW.id,NOW());
  END IF;

END$$
DELIMITER ;
