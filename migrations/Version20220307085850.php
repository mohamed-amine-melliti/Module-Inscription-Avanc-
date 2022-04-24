<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220307085850 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
//        // this up() migration is auto-generated, please modify it to your needs
//        $this->addSql('CREATE TABLE co_gerant (id INT AUTO_INCREMENT NOT NULL, dossier_id INT NOT NULL, nom_cogerant VARCHAR(255) DEFAULT NULL, prenom_cogerant VARCHAR(255) DEFAULT NULL, participation VARCHAR(255) DEFAULT NULL, INDEX IDX_3FA77F55611C0C56 (dossier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
//        $this->addSql('CREATE TABLE dossier (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom_dossier VARCHAR(255) NOT NULL, raison_sociale VARCHAR(255) NOT NULL, forme_juridique VARCHAR(255) NOT NULL, capital_social VARCHAR(255) NOT NULL, nb_associes VARCHAR(255) NOT NULL, adress_siege_social LONGTEXT NOT NULL, code_postale VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, numero_tel VARCHAR(255) NOT NULL, adress_mail VARCHAR(255) NOT NULL, siret VARCHAR(255) NOT NULL, franchise_en_base_tva VARCHAR(255) NOT NULL, numero_tvaintracommunaitre VARCHAR(255) DEFAULT NULL, type_imposition VARCHAR(255) NOT NULL, regime_micro VARCHAR(255) NOT NULL, categorie_imposition VARCHAR(255) NOT NULL, regime_independants VARCHAR(255) NOT NULL, nom_gerant VARCHAR(255) NOT NULL, prenom_gerant VARCHAR(255) NOT NULL, secteur_activite VARCHAR(255) NOT NULL, capital DOUBLE PRECISION DEFAULT NULL, INDEX IDX_3D48E037A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
//        $this->addSql('CREATE TABLE excercice (id INT AUTO_INCREMENT NOT NULL, date_ouverture VARCHAR(255) NOT NULL, date_cloture VARCHAR(255) NOT NULL, regime_tva VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
//        $this->addSql('CREATE TABLE testes (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
//        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, accept_offres_commericiales TINYINT(1) DEFAULT NULL, acceptation TINYINT(1) DEFAULT NULL, mode_paiement_choisi VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
//        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
//        $this->addSql('ALTER TABLE co_gerant ADD CONSTRAINT FK_3FA77F55611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id)');
//        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E037A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
//        // this down() migration is auto-generated, please modify it to your needs
//        $this->addSql('ALTER TABLE co_gerant DROP FOREIGN KEY FK_3FA77F55611C0C56');
//        $this->addSql('ALTER TABLE dossier DROP FOREIGN KEY FK_3D48E037A76ED395');
//        $this->addSql('DROP TABLE co_gerant');
//        $this->addSql('DROP TABLE dossier');
//        $this->addSql('DROP TABLE excercice');
//        $this->addSql('DROP TABLE testes');
//        $this->addSql('DROP TABLE user');
//        $this->addSql('DROP TABLE messenger_messages');
    }
}
