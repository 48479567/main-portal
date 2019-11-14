-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- SET AUTOCOMMIT = 0;
-- START TRANSACTION;
-- SET time_zone = "+00:00";

-- CREATE TABLE `image` (
--   `id` int(150) NOT NULL,
--   `src` varchar(400) DEFAULT NULL,
--   `idsection` int(4) NOT NULL,
--   `title` varchar(100) DEFAULT NULL,
--   `subtitle` varchar(150) DEFAULT NULL,
--   `description` varchar(300) DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- CREATE TABLE `section` (
--   `id` int(4) NOT NULL,
--   `name` varchar(40) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERT INTO `section` (`id`, `name`) VALUES
-- (1, 'banner'),
-- (2, 'gallery');

-- ALTER TABLE `image`
--   ADD PRIMARY KEY (`id`),
--   ADD KEY `sectionid` (`idsection`);


-- ALTER TABLE `section`
--   ADD PRIMARY KEY (`id`);

-- ALTER TABLE `image`
--   MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

-- ALTER TABLE `section`
--   MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
-- COMMIT;

