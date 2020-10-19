-- Consultar compras realizadas por un usuario
select cod_tiquete from tiquete
where cod_usuario=(select cod_usuario from usuarios 
where nomb_usuario='Maria Luisa Rebollo');

-- pago total por las funciones de un intervalo de tiempo
select sum(pago_total) from tiquete
where fecha_funcion>='11/10/2020' and fecha_funcion<='15/10/2020';

-- cartelera en un dia en especifico
select  p.nomb_pelicula,c.horario as hora from peliculas p
join cartelera c on p.cod_pelicula=c.cod_pelicula
where c.fecha='11/10/2020';

-- paricipacion de una persona en una pelicula
select p.nomb_pelicula,r.nomb_persona,t.participacion from reparto r
join tiene t on t.cod_persona=r.cod_persona
join peliculas p on p.cod_pelicula=t.cod_pelicula
where r.cod_persona=(select cod_persona from reparto 
where nomb_persona='Tony Burton');

-- peliculas en fecha actual y despues de hora actual
select  p.nomb_pelicula,c.horario as hora from peliculas p
join cartelera c on p.cod_pelicula=c.cod_pelicula
where c.fecha=current_date and horario>=current_time;

-- sala,fecha y hora de presentacion de una pelicula
select s.nomb_sala,p.nomb_pelicula,c.horario,c.fecha from salas s
join cartelera c on s.cod_sala=c.cod_sala
join peliculas p on p.cod_pelicula=c.cod_pelicula
where p.nomb_pelicula='Los Croods';

-- sillas disponibles
SELECT num_silla FROM sillas
WHERE num_silla NOT IN (SELECT num_silla FROM tiquete WHERE fecha_funcion='11/10/2020' AND hora_funcion='14:00:00');

-- peliculas mas vistas
SELECT p.nomb_pelicula, COUNT(*) as vistas FROM peliculas p
join tiquete t on p.cod_pelicula=t.cod_pelicula
group by (p.cod_pelicula)
order by (vistas) desc;

-- cuantas compras se han pagado con tarjeta y efectivo.
select tipo_pago, count(*) as cantidad from tiquete
group by (tipo_pago);

-- 10 primeros usuarios que mas han ido a cine
select u.nomb_usuario, count(*) as cantidad from tiquete t
join usuarios u on u.cod_usuario=t.cod_usuario
group by (u.cod_usuario)
order by (cantidad) desc
limit 10;

-- comprobar si una silla de una sala a una hora, fecha esta disponible
select cod_tiquete from tiquete
where num_silla='11' and cod_sala='s1' and fecha_funcion='11/10/2020' and hora_funcion='14:00:00';






















