<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250201215639 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE galaxy_id_seq CASCADE');
        $this->addSql('ALTER TABLE galaxy ALTER id TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE galaxy ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE galaxy ALTER user_updated DROP NOT NULL');
        $this->addSql('ALTER TABLE galaxy ALTER date_updated DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE galaxy_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('ALTER TABLE galaxy ALTER id TYPE INT');
        $this->addSql('CREATE SEQUENCE galaxy_id_seq');
        $this->addSql('SELECT setval(\'galaxy_id_seq\', (SELECT MAX(id) FROM galaxy))');
        $this->addSql('ALTER TABLE galaxy ALTER id SET DEFAULT nextval(\'galaxy_id_seq\')');
        $this->addSql('ALTER TABLE galaxy ALTER user_updated SET NOT NULL');
        $this->addSql('ALTER TABLE galaxy ALTER date_updated SET NOT NULL');
    }
}
