CREATE TABLE `artist` (
    `id_artist` int(10),
    `artist_name` varchar(50),
    `artist_details` varchar(500),
    `artist_achievement` varchar(500),
    `category_id` int(10),
    `id_album` int(10),
    PRIMARY KEY (`id_artist`)
);

CREATE TABLE `user` (
    `id_user` int(10),
    `email` varchar(50),
    `password` varchar(200),
    `level` tinyint(1),
    PRIMARY KEY (`id_user`)
);

CREATE TABLE `song` (
    `id_song` int(100),
    `category_id` int(10),
    `id_artist` int(10),
    `song_name` varchar(20),
    `song_date` datetime,
    `image` varchar(200),
    `song_lyric` varchar(500),
    `song_download_count` int(10) NULL,
    PRIMARY KEY (`id_song`)
);

CREATE TABLE `music category` (
    `category_id` int(10),
    `category_name` varchar(20),
    `Parent` int(10),
    PRIMARY KEY (`category_id`)
);

CREATE TABLE `instruments` (
    `id_instrument` int(10),
    `instrument_name` varchar(20),
    PRIMARY KEY (`id_instrument`)
);

CREATE TABLE `instruments` (
    `id_instrument` int(10),
    `instrument_name` varchar(20),
    PRIMARY KEY (`id_instrument`)
);

CREATE TABLE `album` (
    `id_album` int(10),
    `album_name` varchar(20),
    `album_desc` text,
    `album_img` varchar(200),
    `id_artist` int(10),
    `album_date` datetime,
    `album_download_count` int (19),
    PRIMARY KEY (`id_album`)
);

CREATE TABLE `song_album` (
    `id_album` int(10),
    `id_song` int(100),
    PRIMARY KEY (`id_album`, `id_song`)
);

CREATE TABLE `music category_instruments` (
    `id_instrument` int(10),
    `category_id` int(10),
    PRIMARY KEY (`id_instrument`, `category_id`)
);

ALTER TABLE song
ADD CONSTRAINT FK_CategorySong
FOREIGN KEY (category_id) REFERENCES
);