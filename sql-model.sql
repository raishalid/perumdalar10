
CREATE TABLE `sales_deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent_id` bigint(20) NOT NULL,
  `tr_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tr_type` varchar(25) NULL,
  `tr_amount` DECIMAL(20, 2) NULL DEFAULT 0,
  `remarks` TEXT NULL,
  `verified_at` TIMESTAMP NULL DEFAULT NULL,
  `verified_by` varchar(255) NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `sales_deposits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_index` (`id`);

ALTER TABLE `sales_deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;


CREATE TABLE `vendors` (
  `id` bigint(10) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `address` TEXT,
  `phone` VARCHAR(20),
  `email` VARCHAR(255),
 `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
);


CREATE TABLE `product_parents` (
  `id` bigint(10) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `description` TEXT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `product_categories` (
  `id` bigint(10) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NULL,
  `description` TEXT,
  `parent_id` bigint(10),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  
)  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `product_brands` (
  `id` bigint(10) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NULL,
  `description` TEXT,
  `label` VARCHAR(255) NULL,
  `vendor_id` bigint(10) UNSIGNED,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (`vendor_id`) REFERENCES `vendors`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NULL,
  `description` TEXT,
  `sku` VARCHAR(50) UNIQUE,
  `barcode` VARCHAR(255),
  `category_id` bigint(10),
  `brand_id` bigint(10),
  `price` DECIMAL(20, 2),
  `cost` DECIMAL(20, 2),
  `quantity` DECIMAL(20, 2),
  `weight` DECIMAL(10, 2),
  `active` TINYINT(1) DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (`category_id`) REFERENCES `product_categories`(`id`),
  FOREIGN KEY (`brand_id`) REFERENCES `product_brands`(`id`)
);