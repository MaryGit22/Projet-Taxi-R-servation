<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230405135548 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking_detail_booking DROP FOREIGN KEY FK_1CAC96FB3301C60');
        $this->addSql('ALTER TABLE booking_detail_booking DROP FOREIGN KEY FK_1CAC96FB4BE2C8B8');
        $this->addSql('ALTER TABLE booking_detail_user DROP FOREIGN KEY FK_5D5DE50F4BE2C8B8');
        $this->addSql('ALTER TABLE booking_detail_user DROP FOREIGN KEY FK_5D5DE50FA76ED395');
        $this->addSql('DROP TABLE booking_detail');
        $this->addSql('DROP TABLE booking_detail_booking');
        $this->addSql('DROP TABLE booking_detail_user');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE booking_detail (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE booking_detail_booking (booking_detail_id INT NOT NULL, booking_id INT NOT NULL, INDEX IDX_1CAC96FB3301C60 (booking_id), INDEX IDX_1CAC96FB4BE2C8B8 (booking_detail_id), PRIMARY KEY(booking_detail_id, booking_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE booking_detail_user (booking_detail_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_5D5DE50FA76ED395 (user_id), INDEX IDX_5D5DE50F4BE2C8B8 (booking_detail_id), PRIMARY KEY(booking_detail_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE booking_detail_booking ADD CONSTRAINT FK_1CAC96FB3301C60 FOREIGN KEY (booking_id) REFERENCES booking (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE booking_detail_booking ADD CONSTRAINT FK_1CAC96FB4BE2C8B8 FOREIGN KEY (booking_detail_id) REFERENCES booking_detail (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE booking_detail_user ADD CONSTRAINT FK_5D5DE50F4BE2C8B8 FOREIGN KEY (booking_detail_id) REFERENCES booking_detail (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE booking_detail_user ADD CONSTRAINT FK_5D5DE50FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }
}
