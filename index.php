<?php
            require_once 'Book.php';
            require_once 'Movie.php';
            require_once 'Album.php';
            require_once 'Song.php';
            require_once 'Artist.php';

            // Livre
            $book = new Book("Harry Potter à l'école des sorciers", "J.K. Rowling", 309);
            $book->toggleCheckOutStatus();
            $book->addRating(5);
            $book->addRating(4);
            $book->addRating(3);
            echo "<p>" . $book->getTitle() . " est " . ($book->getIsCheckedOut() ? "emprunté" : "disponible") . " avec une note moyenne de " . $book->getAverageRating() . ".</p>";

            // Film
            $movie = new Movie("Avengers: Endgame", "Marvel Studios", 181);
            $movie->toggleCheckOutStatus();
            $movie->addRating(5);
            $movie->addRating(5);
            $movie->addRating(4);
            echo "<p>" . $movie->getTitle() . " est " . ($movie->getIsCheckedOut() ? "emprunté" : "disponible") . " avec une note moyenne de " . $movie->getAverageRating() . ".</p>";

            // Album 
            $artist = new Artist("PNL");
            $song1 = new Song("Au DD", $artist->getName(), 242);
            $song2 = new Song("91's", $artist->getName(), 297);
            $album = new Album("Deux frères", $artist->getName(), [$song1, $song2]);
            $album->toggleCheckOutStatus();
            $album->addRating(4);
            $album->addRating(4);
            $album->addRating(5);
            echo "<p>" . $album->getTitle() . " par " . $artist->getName() . " est " . ($album->getIsCheckedOut() ? "emprunté" : "disponible") . " avec une note moyenne de " . $album->getAverageRating() . ".</p>";
            ?>