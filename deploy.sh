# Run Database Migrations
php artisan migrate

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
