<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230128014213 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE food_planning (id INT AUTO_INCREMENT NOT NULL, repas1_id INT NOT NULL, repas2_id INT NOT NULL, week_number INT NOT NULL, year INT NOT NULL, INDEX IDX_FCD498B4E072440F (repas1_id), INDEX IDX_FCD498B4F2C7EBE1 (repas2_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE food_planning ADD CONSTRAINT FK_FCD498B4E072440F FOREIGN KEY (repas1_id) REFERENCES recette (id)');
        $this->addSql('ALTER TABLE food_planning ADD CONSTRAINT FK_FCD498B4F2C7EBE1 FOREIGN KEY (repas2_id) REFERENCES recette (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE food_planning DROP FOREIGN KEY FK_FCD498B4E072440F');
        $this->addSql('ALTER TABLE food_planning DROP FOREIGN KEY FK_FCD498B4F2C7EBE1');
        $this->addSql('DROP TABLE food_planning');
    }
}
