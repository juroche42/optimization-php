<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250201221017 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE directus_files ALTER storage DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER filename_disk DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER filename_download DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER title DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER type DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER folder DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER uploaded_by DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER created_on DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER modified_by DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER modified_on DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER charset DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER filesize DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER width DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER height DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER duration DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER embed DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER description DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER location DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER tags DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER metadata DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER focal_point_x DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER focal_point_y DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER tus_id DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER tus_data DROP NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER uploaded_on DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE directus_files ALTER storage SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER filename_disk SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER filename_download SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER title SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER type SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER folder SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER uploaded_by SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER created_on SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER modified_by SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER modified_on SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER charset SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER filesize SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER width SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER height SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER duration SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER embed SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER description SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER location SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER tags SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER metadata SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER focal_point_x SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER focal_point_y SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER tus_id SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER tus_data SET NOT NULL');
        $this->addSql('ALTER TABLE directus_files ALTER uploaded_on SET NOT NULL');
    }
}
