DROP TABLE IF EXISTS sections;

DROP TABLE IF EXISTS medias;

DROP TABLE IF EXISTS posters;

DROP TABLE IF EXISTS users;

CREATE TABLE IF NOT EXISTS users (
  id SERIAL PRIMARY KEY,
  username VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  x VARCHAR(255),
  truth_social VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS posters (
  id SERIAL PRIMARY KEY,
  user_id INTEGER NOT NULL,
  author VARCHAR(255) NOT NULL,
  creation_date DATE NOT NULL,
  headline VARCHAR(255) NOT NULL,
  meta_data TEXT NOT NULL,
  CONSTRAINT fk_user FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS medias (
  id SERIAL PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  alt VARCHAR(255) NOT NULL,
  path TEXT NOT NULL,
  size INTEGER NOT NULL,
  type VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS sections (
  id SERIAL PRIMARY KEY,
  poster_id INTEGER NOT NULL,
  headline VARCHAR(255) NOT NULL,
  text TEXT NOT NULL,
  media_id INTEGER,
  section_index INTEGER,
  CONSTRAINT fk_poster FOREIGN KEY (poster_id) REFERENCES posters (id) ON DELETE CASCADE,
  CONSTRAINT fk_media FOREIGN KEY (media_id) REFERENCES medias (id) ON DELETE RESTRICT
);
