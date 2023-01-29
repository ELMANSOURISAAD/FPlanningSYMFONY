<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230128222718 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE food_planning ADD repas3_id INT NOT NULL, ADD repas4_id INT NOT NULL, ADD repas5_id INT NOT NULL, ADD repas6_id INT NOT NULL, ADD repas7_id INT NOT NULL');
        $this->addSql('ALTER TABLE food_planning ADD CONSTRAINT FK_FCD498B44A7B8C84 FOREIGN KEY (repas3_id) REFERENCES recette (id)');
        $this->addSql('ALTER TABLE food_planning ADD CONSTRAINT FK_FCD498B4D7ACB43D FOREIGN KEY (repas4_id) REFERENCES recette (id)');
        $this->addSql('ALTER TABLE food_planning ADD CONSTRAINT FK_FCD498B46F10D358 FOREIGN KEY (repas5_id) REFERENCES recette (id)');
        $this->addSql('ALTER TABLE food_planning ADD CONSTRAINT FK_FCD498B47DA57CB6 FOREIGN KEY (repas6_id) REFERENCES recette (id)');
        $this->addSql('ALTER TABLE food_planning ADD CONSTRAINT FK_FCD498B4C5191BD3 FOREIGN KEY (repas7_id) REFERENCES recette (id)');
        $this->addSql('CREATE INDEX IDX_FCD498B44A7B8C84 ON food_planning (repas3_id)');
        $this->addSql('CREATE INDEX IDX_FCD498B4D7ACB43D ON food_planning (repas4_id)');
        $this->addSql('CREATE INDEX IDX_FCD498B46F10D358 ON food_planning (repas5_id)');
        $this->addSql('CREATE INDEX IDX_FCD498B47DA57CB6 ON food_planning (repas6_id)');
        $this->addSql('CREATE INDEX IDX_FCD498B4C5191BD3 ON food_planning (repas7_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE food_planning DROP FOREIGN KEY FK_FCD498B44A7B8C84');
        $this->addSql('ALTER TABLE food_planning DROP FOREIGN KEY FK_FCD498B4D7ACB43D');
        $this->addSql('ALTER TABLE food_planning DROP FOREIGN KEY FK_FCD498B46F10D358');
        $this->addSql('ALTER TABLE food_planning DROP FOREIGN KEY FK_FCD498B47DA57CB6');
        $this->addSql('ALTER TABLE food_planning DROP FOREIGN KEY FK_FCD498B4C5191BD3');
        $this->addSql('DROP INDEX IDX_FCD498B44A7B8C84 ON food_planning');
        $this->addSql('DROP INDEX IDX_FCD498B4D7ACB43D ON food_planning');
        $this->addSql('DROP INDEX IDX_FCD498B46F10D358 ON food_planning');
        $this->addSql('DROP INDEX IDX_FCD498B47DA57CB6 ON food_planning');
        $this->addSql('DROP INDEX IDX_FCD498B4C5191BD3 ON food_planning');
        $this->addSql('ALTER TABLE food_planning DROP repas3_id, DROP repas4_id, DROP repas5_id, DROP repas6_id, DROP repas7_id');
    }
}
