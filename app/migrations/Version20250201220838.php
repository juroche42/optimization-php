<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250201220838 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE directus_files_id_seq CASCADE');
        $this->addSql('ALTER TABLE directus_files ADD filename_disk VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD filename_download VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD title VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD type VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD folder VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD uploaded_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD created_on VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD modified_by VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD modified_on VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD charset VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD filesize VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD width VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD height VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD duration VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD embed VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD location VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD tags VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD metadata VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD focal_point_x VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD focal_point_y VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD tus_id VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD tus_data VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ADD uploaded_on VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER id TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE directus_files ALTER id DROP DEFAULT');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE directus_files_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('ALTER TABLE directus_files DROP filename_disk');
        $this->addSql('ALTER TABLE directus_files DROP filename_download');
        $this->addSql('ALTER TABLE directus_files DROP title');
        $this->addSql('ALTER TABLE directus_files DROP type');
        $this->addSql('ALTER TABLE directus_files DROP folder');
        $this->addSql('ALTER TABLE directus_files DROP uploaded_by');
        $this->addSql('ALTER TABLE directus_files DROP created_on');
        $this->addSql('ALTER TABLE directus_files DROP modified_by');
        $this->addSql('ALTER TABLE directus_files DROP modified_on');
        $this->addSql('ALTER TABLE directus_files DROP charset');
        $this->addSql('ALTER TABLE directus_files DROP filesize');
        $this->addSql('ALTER TABLE directus_files DROP width');
        $this->addSql('ALTER TABLE directus_files DROP height');
        $this->addSql('ALTER TABLE directus_files DROP duration');
        $this->addSql('ALTER TABLE directus_files DROP embed');
        $this->addSql('ALTER TABLE directus_files DROP description');
        $this->addSql('ALTER TABLE directus_files DROP location');
        $this->addSql('ALTER TABLE directus_files DROP tags');
        $this->addSql('ALTER TABLE directus_files DROP metadata');
        $this->addSql('ALTER TABLE directus_files DROP focal_point_x');
        $this->addSql('ALTER TABLE directus_files DROP focal_point_y');
        $this->addSql('ALTER TABLE directus_files DROP tus_id');
        $this->addSql('ALTER TABLE directus_files DROP tus_data');
        $this->addSql('ALTER TABLE directus_files DROP uploaded_on');
        $this->addSql('ALTER TABLE directus_files ALTER id TYPE INT');
        $this->addSql('CREATE SEQUENCE directus_files_id_seq');
        $this->addSql('SELECT setval(\'directus_files_id_seq\', (SELECT MAX(id) FROM directus_files))');
        $this->addSql('ALTER TABLE directus_files ALTER id SET DEFAULT nextval(\'directus_files_id_seq\')');
    }
}
