USE fedeh;
DROP PROCEDURE IF EXISTS sp_socios_debe;
DELIMITER $$
CREATE PROCEDURE sp_socios_debe()
BEGIN
    DECLARE debe_total FLOAT;
    SELECT SUM(debe) INTO debe_total FROM personas p JOIN socios s
    ON p.id = s.persona_id
    JOIN plan_de_cuenta pc
    ON p.id = pc.persona_id
    JOIN lineas_ctas_corrientes lcc
    ON pc.id = lcc.plan_de_cuenta_id
    WHERE lcc.tipo_cuenta_corriente_id=1;
    SELECT debe_total;
END$$
DELIMITER ;
DROP PROCEDURE IF EXISTS sp_socios_haber;
DELIMITER $$
CREATE PROCEDURE sp_socios_haber()
BEGIN
    DECLARE haber_total FLOAT;
    SELECT SUM(haber) INTO haber_total FROM personas p JOIN socios s
    ON p.id = s.persona_id
    JOIN plan_de_cuenta pc
    ON p.id = pc.persona_id
    JOIN lineas_ctas_corrientes lcc
    ON pc.id = lcc.plan_de_cuenta_id
    WHERE lcc.tipo_cuenta_corriente_id=2;
    SELECT haber_total;
END$$
DELIMITER ;
DROP PROCEDURE IF EXISTS sp_socios_total;
DELIMITER $$
CREATE PROCEDURE sp_socios_total()
BEGIN
    DECLARE total FLOAT;
    SELECT SUM(haber)+SUM(debe) INTO total FROM personas p JOIN socios s
    ON p.id = s.persona_id
    JOIN plan_de_cuenta pc
    ON p.id = pc.persona_id
    JOIN lineas_ctas_corrientes lcc
    ON pc.id = lcc.plan_de_cuenta_id;
    SELECT total;
END$$
DELIMITER ;
DROP PROCEDURE IF EXISTS sp_socios_balance;
DELIMITER $$
CREATE PROCEDURE sp_socios_balance()
BEGIN
DECLARE debe_total FLOAT;
DECLARE haber_total FLOAT;
DECLARE total FLOAT;
DECLARE balance;
    SELECT SUM(debe) INTO debe_total FROM personas p JOIN socios s
    ON p.id = s.persona_id
    JOIN plan_de_cuenta pc
    ON p.id = pc.persona_id
    JOIN lineas_ctas_corrientes lcc
    ON pc.id = lcc.plan_de_cuenta_id
    WHERE lcc.tipo_cuenta_corriente_id=1;
    SELECT debe_total;
    SELECT SUM(haber) INTO debe_total FROM personas p JOIN socios s
    ON p.id = s.persona_id
    JOIN plan_de_cuenta pc
    ON p.id = pc.persona_id
    JOIN lineas_ctas_corrientes lcc
    ON pc.id = lcc.plan_de_cuenta_id
    WHERE lcc.tipo_cuenta_corriente_id=2;
    SELECT haber_total;
    SELECT SUM(haber)+SUM(debe) INTO debe_total FROM personas p JOIN socios s
    ON p.id = s.persona_id
    JOIN plan_de_cuenta pc
    ON p.id = pc.persona_id
    JOIN lineas_ctas_corrientes lcc
    ON pc.id = lcc.plan_de_cuenta_id;
    SELECT debe_total,haber_total,total;
END$$



