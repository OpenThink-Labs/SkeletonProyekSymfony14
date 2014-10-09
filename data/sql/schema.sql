CREATE TABLE r_cara_bayar (kode_cara_bayar INT, cara_bayar VARCHAR(10) NOT NULL, PRIMARY KEY(kode_cara_bayar)) ENGINE = INNODB;
CREATE TABLE r_fasilitas (kode_fasilitas INT, fasilitas VARCHAR(50) NOT NULL, PRIMARY KEY(kode_fasilitas)) ENGINE = INNODB;
CREATE TABLE r_jenis_kelamin (id BIGINT AUTO_INCREMENT, kode_jenis_kelamin VARCHAR(1) NOT NULL, jenis_kelamin TEXT NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE r_jenis_proyek (kode_jenis_proyek INT, jenis_proyek TEXT NOT NULL, PRIMARY KEY(kode_jenis_proyek)) ENGINE = INNODB;
CREATE TABLE r_jenis_unit (kode_jenis_unit INT, jenis_unit TEXT NOT NULL, lebar_unit INT NOT NULL, PRIMARY KEY(kode_jenis_unit)) ENGINE = INNODB;
CREATE TABLE r_kartu_identitas (kode_kartu_identitas INT, kartu_identitas TEXT NOT NULL, PRIMARY KEY(kode_kartu_identitas)) ENGINE = INNODB;
CREATE TABLE r_pekerjaan (kode_pekerjaan INT, pekerjaan TEXT NOT NULL, PRIMARY KEY(kode_pekerjaan)) ENGINE = INNODB;
CREATE TABLE r_status_konsumen (kode_status_konsumen INT, status_konsumen TEXT NOT NULL, PRIMARY KEY(kode_status_konsumen)) ENGINE = INNODB;
CREATE TABLE r_status_lantai (id BIGINT AUTO_INCREMENT, kode_status_lantai INT NOT NULL, status_lantai VARCHAR(30) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE r_status_pesanan (kode_status_pesanan INT, status_pesanan TEXT NOT NULL, PRIMARY KEY(kode_status_pesanan)) ENGINE = INNODB;
CREATE TABLE r_status_unit (kode_status_unit INT, status_unit VARCHAR(15) NOT NULL, kode_warna VARCHAR(6) NOT NULL, PRIMARY KEY(kode_status_unit)) ENGINE = INNODB;
CREATE TABLE r_sumber_informasi (kode_sumber_informasi INT, sumber_informasi TEXT NOT NULL, PRIMARY KEY(kode_sumber_informasi)) ENGINE = INNODB;
CREATE TABLE r_sumber_pembiayaan (id BIGINT AUTO_INCREMENT, kode_sumber_pembiayaan INT NOT NULL, sumber_pembiayaan TEXT NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE r_tujuan_pembelian (id BIGINT AUTO_INCREMENT, kode_tujuan_pembelian INT NOT NULL, tujuan_pembelian TEXT NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE t_fasilitas (id BIGINT AUTO_INCREMENT, kode_proyek INT NOT NULL, kode_fasilitas INT NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE t_harga (id BIGINT AUTO_INCREMENT, kode_proyek VARCHAR(2) NOT NULL, kode_tower VARCHAR(1) NOT NULL, type_unit INT NOT NULL, harga_unit INT NOT NULL, berlaku_mulai DATE NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE t_konsumen (kode_status_konsumen INT NOT NULL, kode_konsumen INT, nama_lengkap_konsumen TEXT NOT NULL, tempat_lahir_konsumen TEXT NOT NULL, tanggal_lahir_konsumen DATE NOT NULL, kode_jenis_kelamin VARCHAR(1) NOT NULL, kode_identitas INT NOT NULL, no_identitas VARCHAR(30) NOT NULL, nama_jalan VARCHAR(35) NOT NULL, rt VARCHAR(3) NOT NULL, rw VARCHAR(3) NOT NULL, kode_kelurahan INT NOT NULL, kode_kecamatan INT NOT NULL, kode_kabupaten INT NOT NULL, kode_pos VARCHAR(5) NOT NULL, kode_propinsi INT NOT NULL, kode_area VARCHAR(4) NOT NULL, telpon_rumah VARCHAR(8) NOT NULL, no_hp VARCHAR(15) NOT NULL, no_hp2 VARCHAR(15) NOT NULL, email1 VARCHAR(30) NOT NULL, email2 VARCHAR(30) NOT NULL, kode_pekerjaan INT NOT NULL, PRIMARY KEY(kode_konsumen)) ENGINE = INNODB;
CREATE TABLE t_pembayaran (kode_pembayaran INT, kode_pemesanan INT NOT NULL, kode_cara_bayar INT NOT NULL, tanggal_pembayaran DATE NOT NULL, amount INT NOT NULL, no_referensi VARCHAR(30) NOT NULL, approval_kasir INT NOT NULL, tanggal_approval_kasir DATETIME NOT NULL, approval_manager_penjualan INT NOT NULL, tanggal_approval_manager DATE NOT NULL, PRIMARY KEY(kode_pembayaran)) ENGINE = INNODB;
CREATE TABLE t_pesanan (status_pesanan INT NOT NULL, kode_pesanan INT, kode_unit VARCHAR(7) NOT NULL, kode_konsumen INT NOT NULL, kode_sales INT NOT NULL, tanggal_pesan DATE NOT NULL, list_price INT NOT NULL, discount INT NOT NULL, harga_kontrak INT NOT NULL, kode_sumber_info INT NOT NULL, kode_pembiayaan INT NOT NULL, kode_tujuan_pembelian INT NOT NULL, kode_event INT NOT NULL, tanggal_jatuh_tempo DATE NOT NULL, status_pembayaran INT NOT NULL, PRIMARY KEY(kode_pesanan)) ENGINE = INNODB;
CREATE TABLE t_proyek (kode_proyek VARCHAR(2), nama_proyek TEXT NOT NULL, jenis_proyek INT NOT NULL, nama_jalan TEXT NOT NULL, kode_kelurahan INT NOT NULL, kode_kecamatan INT NOT NULL, kode_kabupaten_kota INT NOT NULL, kode_pos VARCHAR(5) NOT NULL, kode_propinsi INT NOT NULL, PRIMARY KEY(kode_proyek)) ENGINE = INNODB;
CREATE TABLE t_riwayat_harga (id BIGINT AUTO_INCREMENT, kode_proyek VARCHAR(2) NOT NULL, kode_tower VARCHAR(1) NOT NULL, type_unit INT NOT NULL, harga_unit INT NOT NULL, berlaku_mulai DATE NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE t_sales (kode_sales INT, nama_sales TEXT NOT NULL, kode_unit_sales INT NOT NULL, kode_atasan INT NOT NULL, PRIMARY KEY(kode_sales)) ENGINE = INNODB;
CREATE TABLE t_tower (kode_proyek VARCHAR(2) NOT NULL, kode_tower VARCHAR(1), nama_tower VARCHAR(15) NOT NULL, PRIMARY KEY(kode_tower)) ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;