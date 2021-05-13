<?php

$sqlData = "CREATE DATABASE IF NOT EXISTS SDQ_practicas DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci";

$con->query($sqlData) or $errors[] = $con->error;

$con->select_db("SDQ_practicas");

$sqlTable = "START TRANSACTION;

CREATE TABLE IF NOT EXISTS peliculas (
  id int(11) NOT NULL AUTO_INCREMENT,
  ranking decimal(4,1) NOT NULL,
  titulo varchar(100) NOT NULL,
  director varchar(30) NOT NULL,
  protagonista varchar(30) NOT NULL,
  fecha date NOT NULL,
  nominaciones int(11) NOT NULL,
  mejor_pelicula tinyint(1) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO peliculas (id, ranking, titulo, director, protagonista, fecha, nominaciones, mejor_pelicula) VALUES
(1, '9.2', 'The Shawshank Redemption', 'Frank Darabont', 'Tim Robbins', '1994-10-14', 7, 0),
(2, '9.2', 'The Godfather', 'Francis Ford Coppola', 'Marlon Brando', '1972-03-24', 11, 1),
(3, '9.0', 'The Godfather: Part II', 'Francis Ford Coppola', 'Al Pacino', '1974-12-20', 11, 1),
(4, '9.0', 'The Dark Knight', 'Christopher Nolan', 'Christian Bale', '2008-07-18', 8, 0),
(5, '8.9', '12 Angry Men', 'Sidney Lumet', 'Henry Fonda', '1957-04-16', 3, 0),
(6, '8.9', 'Schindler\'s List', 'Steven Spielberg', 'Liam Neeson', '1993-02-04', 12, 1),
(7, '8.9', 'Pulp Fiction', 'Quentin Tarantino', 'John Travolta', '1994-10-04', 7, 0),
(8, '8.9', 'The Lord of the Rings: The Return of the King', 'Peter Jackson', 'Elijah Wood', '2012-12-17', 11, 1),
(9, '8.8', 'The Good, the Bad and the Ugly', 'Sergio Leone', 'Clint Eastwood', '1966-12-29', 0, 0),
(10, '8.8', 'Fight Club', 'David Fincher', 'Brad Pitt', '1999-10-15', 1, 0),
(11, '8.8', 'The Lord of the Rings: The Fellowship of the Ring', 'Peter Jackson', 'Elijah Wood', '2001-12-19', 13, 0),
(12, '8.7', 'Forrest Gump', 'Robert Zemeckis', 'Tom Hanks', '1994-07-06', 13, 1),
(13, '8.7', 'Star Wars: Episode V - The Empire Strikes Back', 'Irvin Kershner', 'Mark Hamill', '1980-06-20', 4, 0),
(14, '8.7', 'Inception', 'Christopher Nolan', 'Leonardo DiCaprio', '2010-07-16', 8, 0),
(15, '8.7', 'The Lord of the Rings: The Two Towers', 'Peter Jackson', 'Elijah Wood', '2002-12-18', 6, 0),
(16, '8.7', 'One Flew Over the Cuckoo\'s Nest', 'Milos Forman', 'Jack Nicholson', '1975-11-19', 9, 1),
(17, '8.7', 'Goodfellas', 'Martin Scorsese', 'Robert De Niro', '1990-09-21', 6, 0),
(18, '8.7', 'The Matrix', 'The Wachowski Brothers', 'Keanu Reeves', '1999-03-31', 4, 0),
(19, '8.6', 'Seven Samurai', 'Akira Kurosawa', 'Toshirô Mifune', '1954-11-19', 2, 0),
(20, '8.6', 'Star Wars: Episode IV - A New Hope', 'George Lucas', 'Mark Hamill', '1977-05-25', 11, 0),
(21, '8.6', 'City of God', 'Fernando Meirelles', 'Alexandre Rodrigues', '2002-02-13', 4, 0),
(22, '8.6', 'Se7en', 'David Fincher', 'Morgan Freeman', '1995-09-22', 1, 0),
(23, '8.6', 'The Silence of the Lambs', 'Jonathan Demme', 'Jodie Foster', '1991-02-14', 7, 1),
(24, '8.6', 'It\'s a Wonderful Life', 'Frank Capra', 'James Stewart', '1946-01-07', 5, 0),
(25, '8.6', 'Life Is Beautiful', 'Roberto Benigni', 'Roberto Benigni', '1999-02-12', 7, 0),
(26, '8.6', 'The Usual Suspects', 'Bryan Singer', 'Kevin Spacey', '1995-09-15', 2, 0),
(27, '8.5', 'Léon: The Professional', 'Luc Besson', 'Jean Reno', '1994-11-18', 5, 0),
(28, '8.5', 'Saving Private Ryan', 'Steven Spielberg', 'Tom Hanks', '1998-07-24', 11, 0),
(29, '8.5', 'Spirited Away', 'Hayao Miyazaki', 'Daveigh Chase', '2003-03-28', 1, 0),
(30, '8.5', 'American History X', 'Tony Kaye', 'Edward Norton', '1998-11-20', 1, 0),
(31, '8.5', 'Once Upon a Time in the West', 'Sergio Leone', 'Henry Fonda', '1968-07-04', 0, 0),
(32, '8.5', 'Interstellar', 'Henry Fonda', 'Matthew McConaughey', '2014-11-07', 5, 0),
(33, '8.5', 'The Green Mile', 'Frank Darabont', 'Tom Hanks', '1999-12-10', 4, 0),
(34, '8.5', 'Psycho', 'Alfred Hitchcock', 'Anthony Perkins', '1960-09-08', 4, 0),
(35, '8.5', 'Casablanca', 'Michael Curtiz', 'Humphrey Bogart', '1943-01-23', 8, 1),
(36, '8.5', 'City Lights', 'Charles Chaplin', 'Charles Chaplin', '1931-03-07', 0, 0),
(37, '8.5', 'The Intouchables', 'Olivier Nakache', 'François Cluzet', '2011-11-02', 0, 0),
(38, '8.5', 'Modern Times', 'Charles Chaplin', 'Charles Chaplin', '1936-02-25', 0, 0),
(39, '8.5', 'Coco', 'Lee Unkrich', 'Anthony Gonzalez', '2017-11-21', 0, 0),
(40, '8.5', 'The Pianist', 'Roman Polanski', 'Adrien Brody', '2003-03-28', 7, 0),
(41, '8.5', 'Raiders of the Lost Ark', 'Steven Spielberg', 'Harrison Ford', '1981-06-12', 9, 0),
(42, '8.5', 'The Departed', 'Martin Scorsese', 'Leonardo DiCaprio', '2006-10-06', 5, 0),
(43, '8.5', 'Rear Window', 'Alfred Hitchcock', 'James Stewart', '1954-09-01', 4, 0),
(44, '8.5', 'Terminator 2', 'James Cameron', 'Arnold Schwarzenegger', '1991-07-03', 6, 0),
(45, '8.5', 'Back to the Future', 'Robert Zemeckis', 'Michael J. Fox', '1985-06-03', 4, 0),
(46, '8.5', 'Whiplash', 'Damien Chazelle', 'Miles Teller', '2014-10-15', 5, 0),
(47, '8.5', 'Gladiator', 'Ridley Scott', 'Russell Crowe', '2000-05-05', 12, 1),
(48, '8.5', 'The Prestige', 'Christopher Nolan', 'Christian Bale', '2006-10-20', 2, 0),
(49, '8.5', 'The Lion King', 'Roger Allers', 'Matthew Broderick', '1994-06-24', 4, 0),
(50, '8.5', 'Memento', 'Christopher Nolan', 'Guy Pearce', '2001-05-25', 2, 0);

COMMIT;";

$con->multi_query($sqlTable) or $errors[] = $con->error;

while(mysqli_more_results($con)){

	 mysqli_next_result($con);

}

?>