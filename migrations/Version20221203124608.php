<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221203124608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_C7AE7FE2FF7747B4 ON manifs');
        $this->addSql('DROP INDEX IDX_C7AE7FE2835033F8 ON manifs');
        $this->addSql('DROP INDEX IDX_C7AE7FE26DE44026 ON manifs');
        $this->addSql('CREATE FULLTEXT INDEX IDX_C7AE7FE2FF7747B4835033F86DE44026 ON manifs (titre, genre, description)');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('DROP INDEX IDX_C7AE7FE2FF7747B4835033F86DE44026 ON manifs');
        $this->addSql('CREATE FULLTEXT INDEX IDX_C7AE7FE2FF7747B4 ON manifs (titre)');
        $this->addSql('CREATE FULLTEXT INDEX IDX_C7AE7FE2835033F8 ON manifs (genre)');
        $this->addSql('CREATE FULLTEXT INDEX IDX_C7AE7FE26DE44026 ON manifs (description)');
    }
}
