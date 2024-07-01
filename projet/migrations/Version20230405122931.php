<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230405122931 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking ADD services_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDEAEF5A6C1 FOREIGN KEY (services_id) REFERENCES taxis (id)');
        $this->addSql('CREATE INDEX IDX_E00CEDDEAEF5A6C1 ON booking (services_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDEAEF5A6C1');
        $this->addSql('DROP INDEX IDX_E00CEDDEAEF5A6C1 ON booking');
        $this->addSql('ALTER TABLE booking DROP services_id');
    }
}
