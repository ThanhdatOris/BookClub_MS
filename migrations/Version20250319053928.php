<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250319053928 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activities (id INT AUTO_INCREMENT NOT NULL, created_by_id_id INT DEFAULT NULL, created_by_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, descriptiton LONGTEXT DEFAULT NULL, date DATE DEFAULT NULL, time TIME DEFAULT NULL, location VARCHAR(255) DEFAULT NULL, status VARCHAR(50) NOT NULL, created_at VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_B5F1AFE5555BB088 (created_by_id_id), INDEX IDX_B5F1AFE5B03A8386 (created_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activity_participant (id INT AUTO_INCREMENT NOT NULL, activity_id_id INT NOT NULL, user_id_id INT NOT NULL, joined_at DATETIME NOT NULL, INDEX IDX_D911011D6146A8E4 (activity_id_id), INDEX IDX_D911011D9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE attendances (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, activity_id_id INT NOT NULL, marked_by_id INT NOT NULL, status VARCHAR(50) NOT NULL, remark LONGTEXT DEFAULT NULL, marked_at DATETIME NOT NULL, INDEX IDX_9C6B8FD49D86650F (user_id_id), INDEX IDX_9C6B8FD46146A8E4 (activity_id_id), INDEX IDX_9C6B8FD461703BF (marked_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE funds (id INT AUTO_INCREMENT NOT NULL, created_by_id INT NOT NULL, transaction_type VARCHAR(255) NOT NULL, amount NUMERIC(10, 3) NOT NULL, date DATE NOT NULL, description LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_6654D51B03A8386 (created_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proposals (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, type VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, status VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_A5BA3A8F9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, student_id VARCHAR(20) NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, status VARCHAR(50) NOT NULL, class_id VARCHAR(50) DEFAULT NULL, faculty VARCHAR(255) DEFAULT NULL, contact_info LONGTEXT DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activities ADD CONSTRAINT FK_B5F1AFE5555BB088 FOREIGN KEY (created_by_id_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE activities ADD CONSTRAINT FK_B5F1AFE5B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE activity_participant ADD CONSTRAINT FK_D911011D6146A8E4 FOREIGN KEY (activity_id_id) REFERENCES activities (id)');
        $this->addSql('ALTER TABLE activity_participant ADD CONSTRAINT FK_D911011D9D86650F FOREIGN KEY (user_id_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE attendances ADD CONSTRAINT FK_9C6B8FD49D86650F FOREIGN KEY (user_id_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE attendances ADD CONSTRAINT FK_9C6B8FD46146A8E4 FOREIGN KEY (activity_id_id) REFERENCES activities (id)');
        $this->addSql('ALTER TABLE attendances ADD CONSTRAINT FK_9C6B8FD461703BF FOREIGN KEY (marked_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE funds ADD CONSTRAINT FK_6654D51B03A8386 FOREIGN KEY (created_by_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE proposals ADD CONSTRAINT FK_A5BA3A8F9D86650F FOREIGN KEY (user_id_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activities DROP FOREIGN KEY FK_B5F1AFE5555BB088');
        $this->addSql('ALTER TABLE activities DROP FOREIGN KEY FK_B5F1AFE5B03A8386');
        $this->addSql('ALTER TABLE activity_participant DROP FOREIGN KEY FK_D911011D6146A8E4');
        $this->addSql('ALTER TABLE activity_participant DROP FOREIGN KEY FK_D911011D9D86650F');
        $this->addSql('ALTER TABLE attendances DROP FOREIGN KEY FK_9C6B8FD49D86650F');
        $this->addSql('ALTER TABLE attendances DROP FOREIGN KEY FK_9C6B8FD46146A8E4');
        $this->addSql('ALTER TABLE attendances DROP FOREIGN KEY FK_9C6B8FD461703BF');
        $this->addSql('ALTER TABLE funds DROP FOREIGN KEY FK_6654D51B03A8386');
        $this->addSql('ALTER TABLE proposals DROP FOREIGN KEY FK_A5BA3A8F9D86650F');
        $this->addSql('DROP TABLE activities');
        $this->addSql('DROP TABLE activity_participant');
        $this->addSql('DROP TABLE attendances');
        $this->addSql('DROP TABLE funds');
        $this->addSql('DROP TABLE proposals');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
