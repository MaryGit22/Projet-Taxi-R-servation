<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230405143040 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking_detail DROP FOREIGN KEY FK_959C446DA76ED395');
        $this->addSql('ALTER TABLE booking_detail DROP FOREIGN KEY FK_959C446D3301C60');
        $this->addSql('DROP TABLE booking_detail');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE booking_detail (id INT AUTO_INCREMENT NOT NULL, booking_id INT DEFAULT NULL, user_id INT DEFAULT NULL, INDEX IDX_959C446D3301C60 (booking_id), INDEX IDX_959C446DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE booking_detail ADD CONSTRAINT FK_959C446DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE booking_detail ADD CONSTRAINT FK_959C446D3301C60 FOREIGN KEY (booking_id) REFERENCES booking (id)');
    }
}
