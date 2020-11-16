<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201116095153 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categoria (id INT AUTO_INCREMENT NOT NULL, usa LONGTEXT DEFAULT NULL, europe LONGTEXT DEFAULT NULL, asia LONGTEXT DEFAULT NULL, no LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE products ADD categotiia_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5AFE225398 FOREIGN KEY (categotiia_id) REFERENCES categoria (id)');
        $this->addSql('CREATE INDEX IDX_B3BA5A5AFE225398 ON products (categotiia_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5AFE225398');
        $this->addSql('DROP TABLE categoria');
        $this->addSql('DROP INDEX IDX_B3BA5A5AFE225398 ON products');
        $this->addSql('ALTER TABLE products DROP categotiia_id');
    }
}
