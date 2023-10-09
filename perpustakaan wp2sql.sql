CREATE DATABASE perpustakaan_19221229;
USE perpustakaan_19221229;

CREATE TABLE tb_anggota(
	id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
	email VARCHAR(225) NOT NULL,
	katasandi VARCHAR(64),
	namalengkap VARCHAR(80) NOT NULL,
	alamat VARCHAR(225),
	UNIQUE(email)
	)ENGINE=INNODB;

CREATE TABLE tb_pengguna(
	id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
	email VARCHAR(225) NOT NULL,
	nama_lengkap VARCHAR(80) NOT NULL,
	tingkat ENUM('ADM', 'PUS') DEFAULT 'PUS',
	katasandi VARCHAR(64),
	UNIQUE(email)
	)ENGINE=INNODB;

CREATE TABLE tb_kategori(
	id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
	kategori VARCHAR(225) NOT NULL,
	kode_ddc VARCHAR(10),
	UNIQUE(kode_ddc)
	)ENGINE=INNODB;

CREATE TABLE tb_penerbit(
	id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
	penerbit VARCHAR(50) NOT NULL,
	kota VARCHAR(50)
	)ENGINE=INNODB;

CREATE TABLE tb_buku(
	id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
	judul VARCHAR(512) NOT NULL,
	edisi VARCHAR(10),
	cetakan VARCHAR(10),
	sinopsis TEXT,
	tb_kategori_id INT UNSIGNED,
	tb_penerbit_id INT UNSIGNED,
	isbn VARCHAR(20),
	penulis VARCHAR(100),
	FOREIGN KEY(tb_kategori_id) REFERENCES tb_kategori(id) ON UPDATE CASCADE,
	FOREIGN KEY(tb_penerbit_id) REFERENCES tb_penerbit(id) ON UPDATE CASCADE
	)ENGINE=INNODB;

CREATE TABLE tb_koleksibuku(
	id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
	tb_buku_id INT UNSIGNED,
	nomor_koleksi INT,
	status_koleksi ENUM('A','P','H','R') DEFAULT 'A',
	FOREIGN KEY(tb_buku_id) REFERENCES tb_buku(id)
	      ON DELETE CASCADE ON UPDATE CASCADE
	)ENGINE=INNODB;
	
CREATE TABLE tb_pemimjaman(
        id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
        tgl_peminjaman DATETIME NOT NULL,
        tgl_harus_kembali DATETIME NOT NULL,
        tgl_kembali DATETIME,
        tb_pengguna_id_peminjaman INT UNSIGNED,
        tb_pengguna_id_pengembalian INT UNSIGNED,
        tb_anggota_id INT UNSIGNED,
        tb_koleksibuku_id INT UNSIGNED,
        denda DOUBLE,
        
        FOREIGN KEY(tb_anggota_id) REFERENCES tb_anggota(id) ON UPDATE CASCADE,
        FOREIGN KEY(tb_pengguna_id_peminjaman) REFERENCES tb_pengguna(id)ON UPDATE CASCADE,
        FOREIGN KEY(tb_pengguna_id_pengembalian) REFERENCES tb_pengguna(id)ON UPDATE CASCADE,
        FOREIGN KEY (tb_koleksibuku_id) REFERENCES tb_koleksibuku(id) ON UPDATE CASCADE  
	)ENGINE=INNODB;
