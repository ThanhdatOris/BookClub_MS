<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250319193346 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_1483A5E9CB944F1A ON users');
        $this->addSql('ALTER TABLE users ADD roles JSON NOT NULL, DROP role, DROP status, DROP class_id, DROP faculty, DROP contact_info, DROP created_at, DROP updated_at, DROP google_id, CHANGE student_id student_id VARCHAR(20) DEFAULT NULL, CHANGE email email VARCHAR(180) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD role VARCHAR(255) NOT NULL, ADD status VARCHAR(50) NOT NULL, ADD class_id VARCHAR(50) DEFAULT NULL, ADD faculty VARCHAR(255) DEFAULT NULL, ADD contact_info LONGTEXT DEFAULT NULL, ADD created_at DATETIME DEFAULT NULL, ADD updated_at DATETIME DEFAULT NULL, ADD google_id VARCHAR(255) DEFAULT NULL, DROP roles, CHANGE email email VARCHAR(255) NOT NULL, CHANGE student_id student_id VARCHAR(20) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9CB944F1A ON users (student_id)');
    }
}
