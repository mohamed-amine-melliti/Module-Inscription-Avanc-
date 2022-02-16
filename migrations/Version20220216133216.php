<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220216133216 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE co_gerant (id INT AUTO_INCREMENT NOT NULL, dossier_id INT NOT NULL, nom_cogerant VARCHAR(255) NOT NULL, prenom_cogerant VARCHAR(255) NOT NULL, participation VARCHAR(255) NOT NULL, INDEX IDX_3FA77F55611C0C56 (dossier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dossier (id INT AUTO_INCREMENT NOT NULL, nom_dossier VARCHAR(255) NOT NULL, raison_sociale VARCHAR(255) NOT NULL, forme_juridique VARCHAR(255) NOT NULL, capital_social VARCHAR(255) NOT NULL, nb_associes VARCHAR(255) NOT NULL, adress_siege_social LONGTEXT NOT NULL, code_postale VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, numero_tel VARCHAR(255) NOT NULL, indicatif_pays_tel VARCHAR(255) NOT NULL, adress_mail VARCHAR(255) NOT NULL, siret VARCHAR(255) NOT NULL, franchise_en_base_tva VARCHAR(255) NOT NULL, numero_tvaintracommunaitre VARCHAR(255) DEFAULT NULL, type_imposition VARCHAR(255) NOT NULL, regime_micro VARCHAR(255) NOT NULL, categorie_imposition VARCHAR(255) NOT NULL, regime_independants VARCHAR(255) NOT NULL, nom_gerant VARCHAR(255) NOT NULL, prenom_gerant VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE co_gerant ADD CONSTRAINT FK_3FA77F55611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE co_gerant DROP FOREIGN KEY FK_3FA77F55611C0C56');
        $this->addSql('DROP TABLE co_gerant');
        $this->addSql('DROP TABLE dossier');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE testes CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:json)\', CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
