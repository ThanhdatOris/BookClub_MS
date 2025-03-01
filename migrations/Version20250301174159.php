<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250301174159 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activities_members (activities_id INT NOT NULL, members_id INT NOT NULL, INDEX IDX_4DD2F6D82A4DB562 (activities_id), INDEX IDX_4DD2F6D8BD01F5ED (members_id), PRIMARY KEY(activities_id, members_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activities_members ADD CONSTRAINT FK_4DD2F6D82A4DB562 FOREIGN KEY (activities_id) REFERENCES activities (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activities_members ADD CONSTRAINT FK_4DD2F6D8BD01F5ED FOREIGN KEY (members_id) REFERENCES members (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activities_members DROP FOREIGN KEY FK_4DD2F6D82A4DB562');
        $this->addSql('ALTER TABLE activities_members DROP FOREIGN KEY FK_4DD2F6D8BD01F5ED');
        $this->addSql('DROP TABLE activities_members');
    }
}
