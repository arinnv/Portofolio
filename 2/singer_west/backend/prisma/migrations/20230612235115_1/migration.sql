-- CreateTable
CREATE TABLE `singer` (
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `profil` VARCHAR(191) NOT NULL,
    `nama` VARCHAR(191) NOT NULL,
    `lahir` VARCHAR(191) NOT NULL,
    `genre` VARCHAR(191) NOT NULL,
    `instrument` VARCHAR(191) NOT NULL,
    `tahun_aktif` VARCHAR(191) NOT NULL,
    `artis_terkait` VARCHAR(191) NOT NULL,

    PRIMARY KEY (`id`)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
