<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250426222156 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activities DROP FOREIGN KEY FK_B5F1AFE5B03A8386');
        $this->addSql('DROP INDEX IDX_B5F1AFE5B03A8386 ON activities');
        $this->addSql('ALTER TABLE activities CHANGE created_by_id created_by INT DEFAULT NULL');
        $this->addSql('ALTER TABLE activities ADD CONSTRAINT FK_B5F1AFE5DE12AB56 FOREIGN KEY (created_by) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_B5F1AFE5DE12AB56 ON activities (created_by)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activities DROP FOREIGN KEY FK_B5F1AFE5DE12AB56');
        $this->addSql('DROP INDEX IDX_B5F1AFE5DE12AB56 ON activities');
        $this->addSql('ALTER TABLE activities CHANGE created_by created_by_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE activities ADD CONSTRAINT FK_B5F1AFE5B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_B5F1AFE5B03A8386 ON activities (created_by_id)');
    }
}
