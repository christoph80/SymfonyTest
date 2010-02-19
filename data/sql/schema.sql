CREATE TABLE content (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, shortdesc VARCHAR(255) NOT NULL, longdesc TEXT NOT NULL, type VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, user_id BIGINT NOT NULL, directive_id BIGINT NOT NULL, fullaccess_id BIGINT, prevaccess_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), INDEX directive_id_idx (directive_id), INDEX prevaccess_id_idx (prevaccess_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE directive (id BIGINT AUTO_INCREMENT, district VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE ranking (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, icon VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE thread (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, content_id BIGINT, topic_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX content_id_idx (content_id), INDEX topic_id_idx (topic_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE topic (id BIGINT AUTO_INCREMENT, title VARCHAR(255) NOT NULL, directive_id BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX directive_id_idx (directive_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE user (id BIGINT AUTO_INCREMENT, directive_id BIGINT NOT NULL, username VARCHAR(255) NOT NULL UNIQUE, password VARCHAR(255) NOT NULL, regkey VARCHAR(255) NOT NULL UNIQUE, role VARCHAR(255) NOT NULL, ranking_id BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX directive_id_idx (directive_id), INDEX ranking_id_idx (ranking_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE content ADD CONSTRAINT content_user_id_user_id FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE;
ALTER TABLE content ADD CONSTRAINT content_prevaccess_id_ranking_id FOREIGN KEY (prevaccess_id) REFERENCES ranking(id);
ALTER TABLE content ADD CONSTRAINT content_directive_id_directive_id FOREIGN KEY (directive_id) REFERENCES directive(id) ON DELETE CASCADE;
ALTER TABLE thread ADD CONSTRAINT thread_topic_id_topic_id FOREIGN KEY (topic_id) REFERENCES topic(id) ON DELETE CASCADE;
ALTER TABLE thread ADD CONSTRAINT thread_content_id_content_id FOREIGN KEY (content_id) REFERENCES content(id) ON DELETE CASCADE;
ALTER TABLE topic ADD CONSTRAINT topic_directive_id_directive_id FOREIGN KEY (directive_id) REFERENCES directive(id) ON DELETE CASCADE;
ALTER TABLE user ADD CONSTRAINT user_ranking_id_ranking_id FOREIGN KEY (ranking_id) REFERENCES ranking(id);
ALTER TABLE user ADD CONSTRAINT user_directive_id_directive_id FOREIGN KEY (directive_id) REFERENCES directive(id) ON DELETE CASCADE;
