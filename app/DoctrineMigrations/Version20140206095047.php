<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140206095047 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE tbl_faq_question (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, is_draft TINYINT(1) NOT NULL, weight INT NOT NULL, title VARCHAR(100) NOT NULL, slug VARCHAR(100) NOT NULL, icon VARCHAR(50) NOT NULL, body LONGTEXT NOT NULL, like_count INT NOT NULL, watch_count INT NOT NULL, comment_count INT NOT NULL, view_count INT NOT NULL, UNIQUE INDEX UNIQ_B406CACF989D9B62 (slug), INDEX IDX_B406CACFA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_faq_question_body_picture (question_id INT NOT NULL, picture_id INT NOT NULL, INDEX IDX_4ADA244E1E27F6BF (question_id), INDEX IDX_4ADA244EEE45BDBF (picture_id), PRIMARY KEY(question_id, picture_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_faq_question_tag (question_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_66A293AC1E27F6BF (question_id), INDEX IDX_66A293ACBAD26311 (tag_id), PRIMARY KEY(question_id, tag_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood (id INT AUTO_INCREMENT NOT NULL, main_picture_id INT DEFAULT NULL, endgrain_id INT DEFAULT NULL, lumber_id INT DEFAULT NULL, tree_id INT DEFAULT NULL, leaf_id INT DEFAULT NULL, bark_id INT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, is_draft TINYINT(1) NOT NULL, title VARCHAR(100) NOT NULL, slug VARCHAR(50) NOT NULL, contributor_count INT NOT NULL, vote_count INT NOT NULL, like_count INT NOT NULL, watch_count INT NOT NULL, comment_count INT NOT NULL, view_count INT NOT NULL, name LONGTEXT DEFAULT NULL, scientificname VARCHAR(50) DEFAULT NULL, englishname VARCHAR(50) DEFAULT NULL, family INT DEFAULT NULL, density INT DEFAULT NULL, availability INT DEFAULT NULL, price INT DEFAULT NULL, origin LONGTEXT DEFAULT NULL, utilization LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_C46318D4989D9B62 (slug), INDEX IDX_C46318D4D6BDC9DC (main_picture_id), INDEX IDX_C46318D4300F528C (endgrain_id), INDEX IDX_C46318D41E57F696 (lumber_id), INDEX IDX_C46318D478B64A2 (tree_id), INDEX IDX_C46318D4AA5C8D06 (leaf_id), INDEX IDX_C46318D4B4D881C2 (bark_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_name (wood_id INT NOT NULL, string_id INT NOT NULL, INDEX IDX_847A7B2E7B2710BE (wood_id), INDEX IDX_847A7B2E4AC2F1F0 (string_id), PRIMARY KEY(wood_id, string_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_scientificname (wood_id INT NOT NULL, string_id INT NOT NULL, INDEX IDX_F89E11E77B2710BE (wood_id), INDEX IDX_F89E11E74AC2F1F0 (string_id), PRIMARY KEY(wood_id, string_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_englishname (wood_id INT NOT NULL, string_id INT NOT NULL, INDEX IDX_AFA41F0C7B2710BE (wood_id), INDEX IDX_AFA41F0C4AC2F1F0 (string_id), PRIMARY KEY(wood_id, string_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_texture (wood_id INT NOT NULL, picture_id INT NOT NULL, INDEX IDX_DBF807E57B2710BE (wood_id), INDEX IDX_DBF807E5EE45BDBF (picture_id), PRIMARY KEY(wood_id, picture_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_endgrain (wood_id INT NOT NULL, picture_id INT NOT NULL, INDEX IDX_66F36D437B2710BE (wood_id), INDEX IDX_66F36D43EE45BDBF (picture_id), PRIMARY KEY(wood_id, picture_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_lumber (wood_id INT NOT NULL, picture_id INT NOT NULL, INDEX IDX_F66F3E237B2710BE (wood_id), INDEX IDX_F66F3E23EE45BDBF (picture_id), PRIMARY KEY(wood_id, picture_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_tree (wood_id INT NOT NULL, picture_id INT NOT NULL, INDEX IDX_6D675BF47B2710BE (wood_id), INDEX IDX_6D675BF4EE45BDBF (picture_id), PRIMARY KEY(wood_id, picture_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_leaf (wood_id INT NOT NULL, picture_id INT NOT NULL, INDEX IDX_1CC605CF7B2710BE (wood_id), INDEX IDX_1CC605CFEE45BDBF (picture_id), PRIMARY KEY(wood_id, picture_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_bark (wood_id INT NOT NULL, picture_id INT NOT NULL, INDEX IDX_E44EE70F7B2710BE (wood_id), INDEX IDX_E44EE70FEE45BDBF (picture_id), PRIMARY KEY(wood_id, picture_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_family (wood_id INT NOT NULL, integer_id INT NOT NULL, INDEX IDX_88D1A1277B2710BE (wood_id), INDEX IDX_88D1A127B7585238 (integer_id), PRIMARY KEY(wood_id, integer_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_density (wood_id INT NOT NULL, integer_id INT NOT NULL, INDEX IDX_9936606D7B2710BE (wood_id), INDEX IDX_9936606DB7585238 (integer_id), PRIMARY KEY(wood_id, integer_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_availability (wood_id INT NOT NULL, integer_id INT NOT NULL, INDEX IDX_AFD8CA3C7B2710BE (wood_id), INDEX IDX_AFD8CA3CB7585238 (integer_id), PRIMARY KEY(wood_id, integer_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_price (wood_id INT NOT NULL, integer_id INT NOT NULL, INDEX IDX_FFA7D3267B2710BE (wood_id), INDEX IDX_FFA7D326B7585238 (integer_id), PRIMARY KEY(wood_id, integer_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_origin (wood_id INT NOT NULL, string_id INT NOT NULL, INDEX IDX_F3C6D6627B2710BE (wood_id), INDEX IDX_F3C6D6624AC2F1F0 (string_id), PRIMARY KEY(wood_id, string_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_wood_value_utilization (wood_id INT NOT NULL, string_id INT NOT NULL, INDEX IDX_47507F847B2710BE (wood_id), INDEX IDX_47507F844AC2F1F0 (string_id), PRIMARY KEY(wood_id, string_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_value_integer (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, parent_entity_type SMALLINT NOT NULL, parent_entity_id INT NOT NULL, parent_entity_field VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, legend VARCHAR(255) DEFAULT NULL, source VARCHAR(255) DEFAULT NULL, positive_vote_score INT NOT NULL, negative_vote_score INT NOT NULL, vote_score INT NOT NULL, comment_count INT NOT NULL, data INT NOT NULL, INDEX IDX_823F367A76ED395 (user_id), UNIQUE INDEX data_unique (data, parent_entity_type, parent_entity_id, parent_entity_field), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_value_integer_vote (integer_id INT NOT NULL, vote_id INT NOT NULL, INDEX IDX_4A2695DAB7585238 (integer_id), INDEX IDX_4A2695DA72DCDAFC (vote_id), PRIMARY KEY(integer_id, vote_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_value_picture (id INT AUTO_INCREMENT NOT NULL, picture_id INT NOT NULL, user_id INT NOT NULL, parent_entity_type SMALLINT NOT NULL, parent_entity_id INT NOT NULL, parent_entity_field VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, legend VARCHAR(255) DEFAULT NULL, source VARCHAR(255) DEFAULT NULL, positive_vote_score INT NOT NULL, negative_vote_score INT NOT NULL, vote_score INT NOT NULL, comment_count INT NOT NULL, INDEX IDX_44F717E5EE45BDBF (picture_id), INDEX IDX_44F717E5A76ED395 (user_id), UNIQUE INDEX data_unique (picture_id, parent_entity_type, parent_entity_id, parent_entity_field), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_value_picture_vote (picture_id INT NOT NULL, vote_id INT NOT NULL, INDEX IDX_E513DA2EE45BDBF (picture_id), INDEX IDX_E513DA272DCDAFC (vote_id), PRIMARY KEY(picture_id, vote_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_value_string (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, parent_entity_type SMALLINT NOT NULL, parent_entity_id INT NOT NULL, parent_entity_field VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, legend VARCHAR(255) DEFAULT NULL, source VARCHAR(255) DEFAULT NULL, positive_vote_score INT NOT NULL, negative_vote_score INT NOT NULL, vote_score INT NOT NULL, comment_count INT NOT NULL, data VARCHAR(100) NOT NULL, INDEX IDX_DA04E81AA76ED395 (user_id), UNIQUE INDEX data_unique (data, parent_entity_type, parent_entity_id, parent_entity_field), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_knowledge_value_string_vote (string_id INT NOT NULL, vote_id INT NOT NULL, INDEX IDX_427096C24AC2F1F0 (string_id), INDEX IDX_427096C272DCDAFC (vote_id), PRIMARY KEY(string_id, vote_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE tbl_core_vote (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, entity_type SMALLINT NOT NULL, entity_id INT NOT NULL, group_name VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, score SMALLINT NOT NULL, INDEX IDX_2D7D29C2A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE tbl_faq_question ADD CONSTRAINT FK_B406CACFA76ED395 FOREIGN KEY (user_id) REFERENCES tbl_core_user (id)");
        $this->addSql("ALTER TABLE tbl_faq_question_body_picture ADD CONSTRAINT FK_4ADA244E1E27F6BF FOREIGN KEY (question_id) REFERENCES tbl_faq_question (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_faq_question_body_picture ADD CONSTRAINT FK_4ADA244EEE45BDBF FOREIGN KEY (picture_id) REFERENCES tbl_core_picture (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_faq_question_tag ADD CONSTRAINT FK_66A293AC1E27F6BF FOREIGN KEY (question_id) REFERENCES tbl_faq_question (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_faq_question_tag ADD CONSTRAINT FK_66A293ACBAD26311 FOREIGN KEY (tag_id) REFERENCES tbl_core_tag (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood ADD CONSTRAINT FK_C46318D4D6BDC9DC FOREIGN KEY (main_picture_id) REFERENCES tbl_core_picture (id)");
        $this->addSql("ALTER TABLE tbl_knowledge_wood ADD CONSTRAINT FK_C46318D4300F528C FOREIGN KEY (endgrain_id) REFERENCES tbl_core_picture (id)");
        $this->addSql("ALTER TABLE tbl_knowledge_wood ADD CONSTRAINT FK_C46318D41E57F696 FOREIGN KEY (lumber_id) REFERENCES tbl_core_picture (id)");
        $this->addSql("ALTER TABLE tbl_knowledge_wood ADD CONSTRAINT FK_C46318D478B64A2 FOREIGN KEY (tree_id) REFERENCES tbl_core_picture (id)");
        $this->addSql("ALTER TABLE tbl_knowledge_wood ADD CONSTRAINT FK_C46318D4AA5C8D06 FOREIGN KEY (leaf_id) REFERENCES tbl_core_picture (id)");
        $this->addSql("ALTER TABLE tbl_knowledge_wood ADD CONSTRAINT FK_C46318D4B4D881C2 FOREIGN KEY (bark_id) REFERENCES tbl_core_picture (id)");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_name ADD CONSTRAINT FK_847A7B2E7B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_name ADD CONSTRAINT FK_847A7B2E4AC2F1F0 FOREIGN KEY (string_id) REFERENCES tbl_knowledge_value_string (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_scientificname ADD CONSTRAINT FK_F89E11E77B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_scientificname ADD CONSTRAINT FK_F89E11E74AC2F1F0 FOREIGN KEY (string_id) REFERENCES tbl_knowledge_value_string (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_englishname ADD CONSTRAINT FK_AFA41F0C7B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_englishname ADD CONSTRAINT FK_AFA41F0C4AC2F1F0 FOREIGN KEY (string_id) REFERENCES tbl_knowledge_value_string (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_texture ADD CONSTRAINT FK_DBF807E57B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_texture ADD CONSTRAINT FK_DBF807E5EE45BDBF FOREIGN KEY (picture_id) REFERENCES tbl_knowledge_value_picture (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_endgrain ADD CONSTRAINT FK_66F36D437B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_endgrain ADD CONSTRAINT FK_66F36D43EE45BDBF FOREIGN KEY (picture_id) REFERENCES tbl_knowledge_value_picture (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_lumber ADD CONSTRAINT FK_F66F3E237B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_lumber ADD CONSTRAINT FK_F66F3E23EE45BDBF FOREIGN KEY (picture_id) REFERENCES tbl_knowledge_value_picture (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_tree ADD CONSTRAINT FK_6D675BF47B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_tree ADD CONSTRAINT FK_6D675BF4EE45BDBF FOREIGN KEY (picture_id) REFERENCES tbl_knowledge_value_picture (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_leaf ADD CONSTRAINT FK_1CC605CF7B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_leaf ADD CONSTRAINT FK_1CC605CFEE45BDBF FOREIGN KEY (picture_id) REFERENCES tbl_knowledge_value_picture (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_bark ADD CONSTRAINT FK_E44EE70F7B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_bark ADD CONSTRAINT FK_E44EE70FEE45BDBF FOREIGN KEY (picture_id) REFERENCES tbl_knowledge_value_picture (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_family ADD CONSTRAINT FK_88D1A1277B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_family ADD CONSTRAINT FK_88D1A127B7585238 FOREIGN KEY (integer_id) REFERENCES tbl_knowledge_value_integer (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_density ADD CONSTRAINT FK_9936606D7B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_density ADD CONSTRAINT FK_9936606DB7585238 FOREIGN KEY (integer_id) REFERENCES tbl_knowledge_value_integer (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_availability ADD CONSTRAINT FK_AFD8CA3C7B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_availability ADD CONSTRAINT FK_AFD8CA3CB7585238 FOREIGN KEY (integer_id) REFERENCES tbl_knowledge_value_integer (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_price ADD CONSTRAINT FK_FFA7D3267B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_price ADD CONSTRAINT FK_FFA7D326B7585238 FOREIGN KEY (integer_id) REFERENCES tbl_knowledge_value_integer (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_origin ADD CONSTRAINT FK_F3C6D6627B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_origin ADD CONSTRAINT FK_F3C6D6624AC2F1F0 FOREIGN KEY (string_id) REFERENCES tbl_knowledge_value_string (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_utilization ADD CONSTRAINT FK_47507F847B2710BE FOREIGN KEY (wood_id) REFERENCES tbl_knowledge_wood (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_utilization ADD CONSTRAINT FK_47507F844AC2F1F0 FOREIGN KEY (string_id) REFERENCES tbl_knowledge_value_string (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_value_integer ADD CONSTRAINT FK_823F367A76ED395 FOREIGN KEY (user_id) REFERENCES tbl_core_user (id)");
        $this->addSql("ALTER TABLE tbl_knowledge_value_integer_vote ADD CONSTRAINT FK_4A2695DAB7585238 FOREIGN KEY (integer_id) REFERENCES tbl_knowledge_value_integer (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_value_integer_vote ADD CONSTRAINT FK_4A2695DA72DCDAFC FOREIGN KEY (vote_id) REFERENCES tbl_core_vote (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_value_picture ADD CONSTRAINT FK_44F717E5EE45BDBF FOREIGN KEY (picture_id) REFERENCES tbl_core_picture (id)");
        $this->addSql("ALTER TABLE tbl_knowledge_value_picture ADD CONSTRAINT FK_44F717E5A76ED395 FOREIGN KEY (user_id) REFERENCES tbl_core_user (id)");
        $this->addSql("ALTER TABLE tbl_knowledge_value_picture_vote ADD CONSTRAINT FK_E513DA2EE45BDBF FOREIGN KEY (picture_id) REFERENCES tbl_knowledge_value_picture (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_value_picture_vote ADD CONSTRAINT FK_E513DA272DCDAFC FOREIGN KEY (vote_id) REFERENCES tbl_core_vote (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_value_string ADD CONSTRAINT FK_DA04E81AA76ED395 FOREIGN KEY (user_id) REFERENCES tbl_core_user (id)");
        $this->addSql("ALTER TABLE tbl_knowledge_value_string_vote ADD CONSTRAINT FK_427096C24AC2F1F0 FOREIGN KEY (string_id) REFERENCES tbl_knowledge_value_string (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_knowledge_value_string_vote ADD CONSTRAINT FK_427096C272DCDAFC FOREIGN KEY (vote_id) REFERENCES tbl_core_vote (id) ON DELETE CASCADE");
        $this->addSql("ALTER TABLE tbl_core_vote ADD CONSTRAINT FK_2D7D29C2A76ED395 FOREIGN KEY (user_id) REFERENCES tbl_core_user (id)");
		$this->addSql("CREATE INDEX IDX_DAA1645434FFA69A ON tbl_wonder_creation_howto (creation_id)");
        $this->addSql("DROP INDEX idx_cad1c2db34ffa69a ON tbl_wonder_creation_howto");
        $this->addSql("ALTER TABLE tbl_core_comment DROP is_deleted");
        $this->addSql("ALTER TABLE tbl_input_finish CHANGE `label` `label` VARCHAR(50) NOT NULL");
        $this->addSql("DROP INDEX uniq_7345d26989d9b62 ON tbl_input_finish");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_122E18D3989D9B62 ON tbl_input_finish (slug)");
        $this->addSql("ALTER TABLE tbl_input_skill CHANGE `label` `label` VARCHAR(50) NOT NULL, CHANGE slug slug VARCHAR(50) NOT NULL");
        $this->addSql("DROP INDEX uniq_61ff8f06989d9b62 ON tbl_input_skill");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_61A2CC5B989D9B62 ON tbl_input_skill (slug)");
        $this->addSql("ALTER TABLE tbl_input_tool CHANGE `label` `label` VARCHAR(50) NOT NULL");
        $this->addSql("DROP INDEX uniq_d80d3f08989d9b62 ON tbl_input_tool");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_ADDCF77989D9B62 ON tbl_input_tool (slug)");
        $this->addSql("ALTER TABLE tbl_input_wood CHANGE `label` `label` VARCHAR(50) NOT NULL");
        $this->addSql("DROP INDEX uniq_c46318d4989d9b62 ON tbl_input_wood");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_16B3E8AB989D9B62 ON tbl_input_wood (slug)");
        $this->addSql("ALTER TABLE tbl_core_user ADD new_vote_email_notification_enabled TINYINT(1) DEFAULT NULL, ADD positive_vote_count INT DEFAULT NULL, ADD negative_vote_count INT DEFAULT NULL, ADD proposal_count INT DEFAULT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE tbl_faq_question_body_picture DROP FOREIGN KEY FK_4ADA244E1E27F6BF");
        $this->addSql("ALTER TABLE tbl_faq_question_tag DROP FOREIGN KEY FK_66A293AC1E27F6BF");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_name DROP FOREIGN KEY FK_847A7B2E7B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_scientificname DROP FOREIGN KEY FK_F89E11E77B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_englishname DROP FOREIGN KEY FK_AFA41F0C7B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_texture DROP FOREIGN KEY FK_DBF807E57B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_endgrain DROP FOREIGN KEY FK_66F36D437B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_lumber DROP FOREIGN KEY FK_F66F3E237B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_tree DROP FOREIGN KEY FK_6D675BF47B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_leaf DROP FOREIGN KEY FK_1CC605CF7B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_bark DROP FOREIGN KEY FK_E44EE70F7B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_family DROP FOREIGN KEY FK_88D1A1277B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_density DROP FOREIGN KEY FK_9936606D7B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_availability DROP FOREIGN KEY FK_AFD8CA3C7B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_price DROP FOREIGN KEY FK_FFA7D3267B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_origin DROP FOREIGN KEY FK_F3C6D6627B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_utilization DROP FOREIGN KEY FK_47507F847B2710BE");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_family DROP FOREIGN KEY FK_88D1A127B7585238");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_density DROP FOREIGN KEY FK_9936606DB7585238");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_availability DROP FOREIGN KEY FK_AFD8CA3CB7585238");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_price DROP FOREIGN KEY FK_FFA7D326B7585238");
        $this->addSql("ALTER TABLE tbl_knowledge_value_integer_vote DROP FOREIGN KEY FK_4A2695DAB7585238");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_texture DROP FOREIGN KEY FK_DBF807E5EE45BDBF");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_endgrain DROP FOREIGN KEY FK_66F36D43EE45BDBF");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_lumber DROP FOREIGN KEY FK_F66F3E23EE45BDBF");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_tree DROP FOREIGN KEY FK_6D675BF4EE45BDBF");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_leaf DROP FOREIGN KEY FK_1CC605CFEE45BDBF");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_bark DROP FOREIGN KEY FK_E44EE70FEE45BDBF");
        $this->addSql("ALTER TABLE tbl_knowledge_value_picture_vote DROP FOREIGN KEY FK_E513DA2EE45BDBF");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_name DROP FOREIGN KEY FK_847A7B2E4AC2F1F0");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_scientificname DROP FOREIGN KEY FK_F89E11E74AC2F1F0");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_englishname DROP FOREIGN KEY FK_AFA41F0C4AC2F1F0");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_origin DROP FOREIGN KEY FK_F3C6D6624AC2F1F0");
        $this->addSql("ALTER TABLE tbl_knowledge_wood_value_utilization DROP FOREIGN KEY FK_47507F844AC2F1F0");
        $this->addSql("ALTER TABLE tbl_knowledge_value_string_vote DROP FOREIGN KEY FK_427096C24AC2F1F0");
        $this->addSql("ALTER TABLE tbl_knowledge_value_integer_vote DROP FOREIGN KEY FK_4A2695DA72DCDAFC");
        $this->addSql("ALTER TABLE tbl_knowledge_value_picture_vote DROP FOREIGN KEY FK_E513DA272DCDAFC");
        $this->addSql("ALTER TABLE tbl_knowledge_value_string_vote DROP FOREIGN KEY FK_427096C272DCDAFC");
        $this->addSql("DROP TABLE tbl_faq_question");
        $this->addSql("DROP TABLE tbl_faq_question_body_picture");
        $this->addSql("DROP TABLE tbl_faq_question_tag");
        $this->addSql("DROP TABLE tbl_knowledge_wood");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_name");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_scientificname");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_englishname");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_texture");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_endgrain");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_lumber");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_tree");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_leaf");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_bark");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_family");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_density");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_availability");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_price");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_origin");
        $this->addSql("DROP TABLE tbl_knowledge_wood_value_utilization");
        $this->addSql("DROP TABLE tbl_knowledge_value_integer");
        $this->addSql("DROP TABLE tbl_knowledge_value_integer_vote");
        $this->addSql("DROP TABLE tbl_knowledge_value_picture");
        $this->addSql("DROP TABLE tbl_knowledge_value_picture_vote");
        $this->addSql("DROP TABLE tbl_knowledge_value_string");
        $this->addSql("DROP TABLE tbl_knowledge_value_string_vote");
        $this->addSql("DROP TABLE tbl_core_vote");
        $this->addSql("ALTER TABLE tbl_core_comment ADD is_deleted TINYINT(1) DEFAULT NULL");
        $this->addSql("ALTER TABLE tbl_core_user DROP new_vote_email_notification_enabled, DROP positive_vote_count, DROP negative_vote_count, DROP proposal_count");
        $this->addSql("ALTER TABLE tbl_input_finish CHANGE `label` `label` VARCHAR(50) DEFAULT '' NOT NULL");
        $this->addSql("DROP INDEX uniq_122e18d3989d9b62 ON tbl_input_finish");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_7345D26989D9B62 ON tbl_input_finish (slug)");
        $this->addSql("ALTER TABLE tbl_input_skill CHANGE `label` `label` VARCHAR(100) DEFAULT '' NOT NULL, CHANGE slug slug VARCHAR(40) NOT NULL");
        $this->addSql("DROP INDEX uniq_61a2cc5b989d9b62 ON tbl_input_skill");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_61FF8F06989D9B62 ON tbl_input_skill (slug)");
        $this->addSql("ALTER TABLE tbl_input_tool CHANGE `label` `label` VARCHAR(50) DEFAULT '' NOT NULL");
        $this->addSql("DROP INDEX uniq_addcf77989d9b62 ON tbl_input_tool");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_D80D3F08989D9B62 ON tbl_input_tool (slug)");
        $this->addSql("ALTER TABLE tbl_input_wood CHANGE `label` `label` VARCHAR(50) DEFAULT '' NOT NULL");
        $this->addSql("DROP INDEX uniq_16b3e8ab989d9b62 ON tbl_input_wood");
        $this->addSql("CREATE UNIQUE INDEX UNIQ_C46318D4989D9B62 ON tbl_input_wood (slug)");
        $this->addSql("DROP INDEX idx_daa1645434ffa69a ON tbl_wonder_creation_howto");
        $this->addSql("CREATE INDEX IDX_CAD1C2DB34FFA69A ON tbl_wonder_creation_howto (creation_id)");
    }
}