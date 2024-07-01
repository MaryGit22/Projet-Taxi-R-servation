<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230717204423 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE detail_booking DROP FOREIGN KEY FK_87C36D0B3301C60');
        $this->addSql('ALTER TABLE detail_booking DROP FOREIGN KEY FK_87C36D0BD8D003BB');
        $this->addSql('ALTER TABLE detail_user DROP FOREIGN KEY FK_7AC63EC6D8D003BB');
        $this->addSql('ALTER TABLE detail_user DROP FOREIGN KEY FK_7AC63EC6A76ED395');
        $this->addSql('DROP TABLE detail');
        $this->addSql('DROP TABLE detail_booking');
        $this->addSql('DROP TABLE detail_user');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE detail (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE detail_booking (detail_id INT NOT NULL, booking_id INT NOT NULL, INDEX IDX_87C36D0B3301C60 (booking_id), INDEX IDX_87C36D0BD8D003BB (detail_id), PRIMARY KEY(detail_id, booking_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE detail_user (detail_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_7AC63EC6D8D003BB (detail_id), INDEX IDX_7AC63EC6A76ED395 (user_id), PRIMARY KEY(detail_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE detail_booking ADD CONSTRAINT FK_87C36D0B3301C60 FOREIGN KEY (booking_id) REFERENCES booking (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE detail_booking ADD CONSTRAINT FK_87C36D0BD8D003BB FOREIGN KEY (detail_id) REFERENCES detail (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE detail_user ADD CONSTRAINT FK_7AC63EC6D8D003BB FOREIGN KEY (detail_id) REFERENCES detail (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE detail_user ADD CONSTRAINT FK_7AC63EC6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }
}
