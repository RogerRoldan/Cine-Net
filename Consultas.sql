-- Valor total de las ventas del dia

select SUM(pago_total) as Venta_del_dia FROM tiquete WHERE fecha_función=current_date;

-- Ordenar las películas de mas vistas a menos vistas

SELECT nomb_pelicula, COUNT(*) as vista FROM peliculas p
JOIN cartelera c ON p.cod_pelicula = c.cod_pelicula
JOIN salas s ON c.cod_sala = s.cod_sala
JOIN tiquete t ON s.cod_sala = t.cod_sala
WHERE 

-- Ver las sillas disponibles de la sala n

SELECT num_silla FROM sillas
WHERE num_silla NOT IN (SELECT num_silla FROM tiquete WHERE fecha_función='11/10/2020' AND hora_función='14:00:00');

-- Comprobar si la silla n de las sala n está disponible 



-- Visualizar las compras realizadas por el usuario n


