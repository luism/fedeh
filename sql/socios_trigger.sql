-- Trigger DDL Statements
DELIMITER $$

USE `fedeh`$$

DROP TRIGGER IF EXISTS fedeh.socio_insert$$

CREATE
DEFINER=`root`@`localhost`
TRIGGER `fedeh`.`socio_alta`
AFTER INSERT ON `fedeh`.`socios`
FOR EACH ROW
BEGIN
  -- Insertamos en tabla historial
  INSERT INTO historial (accion,ficha_id,socio_id,fecha)

  VALUES('asigna',NEW.numero_ficha,NEW.id,NOW());

END$$

DROP TRIGGER IF EXISTS fedeh.socio_update$$

CREATE
DEFINER=`root`@`localhost`
TRIGGER `fedeh`.`socio_update`
AFTER UPDATE ON `fedeh`.`socios`
FOR EACH ROW
BEGIN
  -- Verificamos si se deshabilitó
  IF NEW.deshabilitado THEN
    INSERT INTO historial (accion,numero_ficha,socio_id,fecha)

    VALUES('desasigna',NEW.numero_ficha,NEW.id,NOW());
  END IF;

END$$