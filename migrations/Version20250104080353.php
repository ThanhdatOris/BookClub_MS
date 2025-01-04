<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250104080353 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activities (id INT AUTO_INCREMENT NOT NULL, created_by_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, act_descr LONGTEXT DEFAULT NULL, date DATE NOT NULL, time TIME DEFAULT NULL, place VARCHAR(255) DEFAULT NULL, status ENUM(\'planned\', \'completed\', \'cancelled\'), INDEX IDX_B5F1AFE5B03A8386 (created_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE attendance (id INT AUTO_INCREMENT NOT NULL, activity_id_id INT NOT NULL, checked_in TINYINT(1) NOT NULL, checked_in_time DATETIME DEFAULT NULL, remarks LONGTEXT DEFAULT NULL, INDEX IDX_6DE30D916146A8E4 (activity_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE attendance_members (attendance_id INT NOT NULL, members_id INT NOT NULL, INDEX IDX_42673CFD163DDA15 (attendance_id), INDEX IDX_42673CFDBD01F5ED (members_id), PRIMARY KEY(attendance_id, members_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fund_transactions (id INT AUTO_INCREMENT NOT NULL, executed_by_id INT DEFAULT NULL, amount NUMERIC(10, 3) NOT NULL, fund_descr LONGTEXT DEFAULT NULL, date DATETIME NOT NULL, INDEX IDX_3DBA1C778B35AB5C (executed_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE members (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, student_id VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, phone VARCHAR(12) DEFAULT NULL, join_date DATE DEFAULT NULL, birth_day DATE DEFAULT NULL, UNIQUE INDEX UNIQ_45A0D2FF9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(128) NOT NULL, password VARCHAR(255) NOT NULL, role ENUM(\'admin\', \'member\'), email VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', update_at DATETIME NOT NULL, is_active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activities ADD CONSTRAINT FK_B5F1AFE5B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE attendance ADD CONSTRAINT FK_6DE30D916146A8E4 FOREIGN KEY (activity_id_id) REFERENCES activities (id)');
        $this->addSql('ALTER TABLE attendance_members ADD CONSTRAINT FK_42673CFD163DDA15 FOREIGN KEY (attendance_id) REFERENCES attendance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE attendance_members ADD CONSTRAINT FK_42673CFDBD01F5ED FOREIGN KEY (members_id) REFERENCES members (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fund_transactions ADD CONSTRAINT FK_3DBA1C778B35AB5C FOREIGN KEY (executed_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE members ADD CONSTRAINT FK_45A0D2FF9D86650F FOREIGN KEY (user_id_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activities DROP FOREIGN KEY FK_B5F1AFE5B03A8386');
        $this->addSql('ALTER TABLE attendance DROP FOREIGN KEY FK_6DE30D916146A8E4');
        $this->addSql('ALTER TABLE attendance_members DROP FOREIGN KEY FK_42673CFD163DDA15');
        $this->addSql('ALTER TABLE attendance_members DROP FOREIGN KEY FK_42673CFDBD01F5ED');
        $this->addSql('ALTER TABLE fund_transactions DROP FOREIGN KEY FK_3DBA1C778B35AB5C');
        $this->addSql('ALTER TABLE members DROP FOREIGN KEY FK_45A0D2FF9D86650F');
        $this->addSql('DROP TABLE activities');
        $this->addSql('DROP TABLE attendance');
        $this->addSql('DROP TABLE attendance_members');
        $this->addSql('DROP TABLE fund_transactions');
        $this->addSql('DROP TABLE members');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
