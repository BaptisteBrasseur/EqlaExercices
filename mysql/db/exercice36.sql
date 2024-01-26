USE Ventes;
DELIMITER $$
DROP FUNCTION IF EXISTS remove_tvac;
CREATE FUNCTION remove_tvac(prix_tvac FLOAT(5,2), taux_tva FLOAT(5,2)) RETURNS FLOAT(5,2)
BEGIN
DECLARE remove_tvac FLOAT(5,2);
SET remove_tvac=prix_tvac/(taux_tva+1);
RETURN remove_tvac;
END;
$$
DELIMITER ;
SELECT remove_tvac(80,0.21);