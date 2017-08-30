<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170718193220 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE productos CHANGE proveedor proveedor INT DEFAULT NULL');
        $this->addSql('ALTER TABLE productos ADD CONSTRAINT FK_767490E616C068CE FOREIGN KEY (proveedor) REFERENCES proveedores (id)');
        $this->addSql('CREATE INDEX IDX_767490E616C068CE ON productos (proveedor)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE productos DROP FOREIGN KEY FK_767490E616C068CE');
        $this->addSql('DROP INDEX IDX_767490E616C068CE ON productos');
        $this->addSql('ALTER TABLE productos CHANGE proveedor proveedor INT NOT NULL');
    }
}
