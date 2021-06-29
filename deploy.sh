# Run Database Migrations
php artisan migrate

#Commit 26/06/21
#Uso de Cupones y Procesos generales

ALTER TABLE `cupons` ADD UNIQUE(`codigo`);
ALTER TABLE `user_cupons` CHANGE `fecha_uso` `fecha_uso` TIMESTAMP NULL DEFAULT NULL;



#Commit 17/06/21
# Configuración de Variables => destacados

ALTER TABLE `configurations` CHANGE `created_at` `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP, CHANGE `updated_at` `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP;

INSERT INTO `configurations` (`id`, `campo`, `valor_numerico`, `valor_caracter`, `created_at`, `updated_at`) VALUES (NULL, 'home_agendacita_imagen', '1', 'bg_promo2.jpg', current_timestamp(), current_timestamp()), (NULL, 'home_inferior_buscalotuyo_imagen', '1', 'home-style-bg.jpg', current_timestamp(), current_timestamp());

INSERT INTO `configurations` (`id`, `campo`, `valor_numerico`, `valor_caracter`, `created_at`, `updated_at`) VALUES (NULL, 'nosotros_tienda_imagen', '1', 'bg_promo.jpg', current_timestamp(), current_timestamp()), (NULL, 'nosotros_inferior_imagen', '1', 'bg_video-870x490.jpg', current_timestamp(), current_timestamp());

INSERT INTO `configurations` (`id`, `campo`, `valor_numerico`, `valor_caracter`, `created_at`, `updated_at`) VALUES (NULL, 'nosotros_inferior_urlvideo', '1', 'https://player.vimeo.com/video/21709803?autoplay=1', current_timestamp(), current_timestamp());

INSERT INTO `configurations` (`id`, `campo`, `valor_numerico`, `valor_caracter`, `created_at`, `updated_at`) VALUES (NULL, 'destacados_encuentra_estilo_url', '1', 'http://127.0.0.1:8000/shop/1rqoBxhYEH4JTLOPLWCbSmRnjjE2nkSSwfXLnT63', current_timestamp(), current_timestamp());

INSERT INTO `configurations` (`id`, `campo`, `valor_numerico`, `valor_caracter`, `created_at`, `updated_at`) VALUES (NULL, 'destacados_encuentra_estilo_titulo', '1', 'Back<br/>to<br/>Black', NULL, NULL), (NULL, 'destacados_encuentra_estilo_descripcion', '1', 'It’s the sultriest<br/>shade of seduction', NULL, NULL);

INSERT INTO `configurations` (`id`, `campo`, `valor_numerico`, `valor_caracter`, `created_at`, `updated_at`) VALUES (NULL, 'destacados_encuentra_estilo_imagen', '1', 'promo.png', NULL, NULL);

# Gift Cards With products
ALTER TABLE `gift_cards` ADD `id_producto` INT NULL AFTER `id`, ADD INDEX (`id_producto`);

#Database Changes
• Importar Tabla "app_paises.sql"

#Commit 27/05/21
• ALTER TABLE `user_pedidos` ADD `estadoPedido` VARCHAR(50) NOT NULL DEFAULT 'En Verificación' COMMENT '• En Verificación\r\n• Aceptado\r\n• Rechazado\r\n-------------------\r\n• En Proceso Envió\r\n• Enviado\r\n• Entregado\r\n• No pudo ser Entregado\r\n• Devuelto' AFTER `estado`;

• CREATE TABLE `audit_user_pedidos` (
  `id` int(11) NOT NULL,
  `id_user_pedido` int(11) NOT NULL,
  `estadoAnterior` varchar(50) COLLATE utf8_bin NOT NULL,
  `estadoNuevo` varchar(50) COLLATE utf8_bin NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

• CREATE TRIGGER `Auditoria_user_pedidos` AFTER UPDATE ON `user_pedidos` FOR EACH ROW IF NEW.estadoPedido != OLD.estadoPedido THEN INSERT INTO audit_user_pedidos(id_user_pedido,estadoAnterior,estadoNuevo) VALUES(OLD.id,OLD.estadoPedido,NEW.estadoPedido); END IF;
