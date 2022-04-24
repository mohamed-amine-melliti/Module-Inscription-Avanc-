<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220302100123 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE co_gerant CHANGE nom_cogerant nom_cogerant VARCHAR(255) DEFAULT NULL, CHANGE prenom_cogerant prenom_cogerant VARCHAR(255) DEFAULT NULL, CHANGE participation participation VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE excercice CHANGE date_ouverture date_ouverture VARCHAR(255) NOT NULL, CHANGE date_cloture date_cloture VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE co_gerant CHANGE nom_cogerant nom_cogerant VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom_cogerant prenom_cogerant VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE participation participation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE dossier CHANGE nom_dossier nom_dossier VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE raison_sociale raison_sociale VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE forme_juridique forme_juridique VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE capital_social capital_social VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nb_associes nb_associes VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adress_siege_social adress_siege_social LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE code_postale code_postale VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE ville ville VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE numero_tel numero_tel VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adress_mail adress_mail VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE siret siret VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE franchise_en_base_tva franchise_en_base_tva VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE numero_tvaintracommunaitre numero_tvaintracommunaitre VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_imposition type_imposition VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE regime_micro regime_micro VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE categorie_imposition categorie_imposition VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE regime_independants regime_independants VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom_gerant nom_gerant VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom_gerant prenom_gerant VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE secteur_activite secteur_activite VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE excercice CHANGE date_ouverture date_ouverture DATE NOT NULL, CHANGE date_cloture date_cloture DATE NOT NULL, CHANGE regime_tva regime_tva VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE testes CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:json)\', CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE mode_paiement_choisi mode_paiement_choisi VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
