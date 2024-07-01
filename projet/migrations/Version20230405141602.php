<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230405141602 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE4BE2C8B8');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6494BE2C8B8');
        $this->addSql('DROP TABLE booking_detail');
        $this->addSql('DROP INDEX IDX_E00CEDDE4BE2C8B8 ON booking');
        $this->addSql('ALTER TABLE booking DROP booking_detail_id');
        $this->addSql('DROP INDEX IDX_8D93D6494BE2C8B8 ON user');
        $this->addSql('ALTER TABLE user DROP booking_detail_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE booking_detail (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE booking ADD booking_detail_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE4BE2C8B8 FOREIGN KEY (booking_detail_id) REFERENCES booking_detail (id)');
        $this->addSql('CREATE INDEX IDX_E00CEDDE4BE2C8B8 ON booking (booking_detail_id)');
        $this->addSql('ALTER TABLE user ADD booking_detail_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6494BE2C8B8 FOREIGN KEY (booking_detail_id) REFERENCES booking_detail (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6494BE2C8B8 ON user (booking_detail_id)');
    }
}
