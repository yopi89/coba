mysql> #1
mysql> create database warung_baca_xyz;
Query OK, 1 row affected (0.04 sec)

mysql> #2
mysql> create table pelanggan(
    -> id_pelanggan varchar(5) not null primary key,
    -> nama varchar(30) not null,
    -> alamat varchar(45),
    -> no_telp varchar(15)
    -> );
ERROR 1046 (3D000): No database selected
mysql> use warung_baca_xyz;
Database changed
mysql> create table pelanggan(
    -> id_pelanggan varchar(5) not null primary key,
    -> nama varchar(30) not null,
    -> alamat varchar(45),
    -> no_telp varchar(15)
    -> );
Query OK, 0 rows affected (0.26 sec)

mysql> create table buku(
    -> id_buku varchar(7) not null primary key,
    -> judul_buku varchar(45) not null,
    -> penerbit varchar(25),
    -> tahun smallint(3)
    -> );
Query OK, 0 rows affected, 1 warning (0.02 sec)

mysql> create table pinjam(
    -> id_pinjam varchar(5) not null primary key,
    -> id_pelanggan varchar(5) not null,
    -> tgl_pinjam date not null
    -> );
Query OK, 0 rows affected (0.02 sec)

mysql> create table detail_pinjam(
    -> id_pinjam varchar(5) not null,
    -> id_buku varchar(7) not null,
    -> lama_pinjam smallint(3) not null
    -> );
Query OK, 0 rows affected, 1 warning (0.03 sec)

mysql> #3
mysql> show databases;
+-------------------------+
| Database                |
+-------------------------+
| akademik                |
| balai_pengobatan        |
| belajar                 |
| db_sekolah              |
| db_ukt                  |
| dokter_hewan            |
| information_schema      |
| kuliah                  |
| library                 |
| manajemenproduk         |
| modul3_pbd              |
| modul3_pbd_prak         |
| modul3_pbd_praktambahan |
| modul4                  |
| modul7                  |
| modul_5                 |
| modul_6                 |
| mydb                    |
| mydbpdo                 |
| mysql                   |
| opensid                 |
| performance_schema      |
| pethouse                |
| prak_modul3             |
| puskesmas               |
| pweb2_oop_tugas_2       |
| rental_mobil_def        |
| sys                     |
| warung_baca_xyz         |
| yopi                    |
+-------------------------+
30 rows in set (0.14 sec)

mysql> desc pelanggan;
+--------------+-------------+------+-----+---------+-------+
| Field        | Type        | Null | Key | Default | Extra |
+--------------+-------------+------+-----+---------+-------+
| id_pelanggan | varchar(5)  | NO   | PRI | NULL    |       |
| nama         | varchar(30) | NO   |     | NULL    |       |
| alamat       | varchar(45) | YES  |     | NULL    |       |
| no_telp      | varchar(15) | YES  |     | NULL    |       |
+--------------+-------------+------+-----+---------+-------+
4 rows in set (0.07 sec)

mysql> desc buku;
+------------+-------------+------+-----+---------+-------+
| Field      | Type        | Null | Key | Default | Extra |
+------------+-------------+------+-----+---------+-------+
| id_buku    | varchar(7)  | NO   | PRI | NULL    |       |
| judul_buku | varchar(45) | NO   |     | NULL    |       |
| penerbit   | varchar(25) | YES  |     | NULL    |       |
| tahun      | smallint    | YES  |     | NULL    |       |
+------------+-------------+------+-----+---------+-------+
4 rows in set (0.00 sec)

mysql> desc pinjam;
+--------------+------------+------+-----+---------+-------+
| Field        | Type       | Null | Key | Default | Extra |
+--------------+------------+------+-----+---------+-------+
| id_pinjam    | varchar(5) | NO   | PRI | NULL    |       |
| id_pelanggan | varchar(5) | NO   |     | NULL    |       |
| tgl_pinjam   | date       | NO   |     | NULL    |       |
+--------------+------------+------+-----+---------+-------+
3 rows in set (0.00 sec)

mysql> desc detail_pinjam;
+-------------+------------+------+-----+---------+-------+
| Field       | Type       | Null | Key | Default | Extra |
+-------------+------------+------+-----+---------+-------+
| id_pinjam   | varchar(5) | NO   |     | NULL    |       |
| id_buku     | varchar(7) | NO   |     | NULL    |       |
| lama_pinjam | smallint   | NO   |     | NULL    |       |
+-------------+------------+------+-----+---------+-------+
3 rows in set (0.00 sec)

mysql> show tables;
+---------------------------+
| Tables_in_warung_baca_xyz |
+---------------------------+
| buku                      |
| detail_pinjam             |
| pelanggan                 |
| pinjam                    |
+---------------------------+
4 rows in set (0.03 sec)

mysql> insert into pelanggan
    -> values
    -> ('P001','Nobita','Jl.Dr. Soetomo no.01 Cilacap','5678901'),
    -> ('P002','Sizuka','Jl. Rinjani no.05 Cilacap','8765432'),
    -> ('P003','Suneo','Jl. Gatot Subroto no.10 Cilacap','5654535'),
    -> ('P004','Giant','Jl. Katamso no.20 Cilacap','789765');
Query OK, 4 rows affected (0.03 sec)
Records: 4  Duplicates: 0  Warnings: 0

mysql> insert into buku
    -> values
    -> ('B10001','Doraemon','Elex Media','1997'),
    -> ('B10002','Detektif Conan','Elex Media','1999'),
    -> ('B10003','Crayon Shincan','Rajawali Grafiti','2000'),
    -> ('B20001','Candy-candy','Gramedia','1997'),
    -> ('B20002','Sailor Moon','Gramedia','1997');
Query OK, 5 rows affected (0.00 sec)
Records: 5  Duplicates: 0  Warnings: 0

mysql> insert into pinjam
    -> values
    -> ('T.001','P001','2015-05-01'),
    -> ('T.002','P003','2015-05-02'),
    -> ('T.003','P002','2015-05-07'),
    -> ('T.004','P005','2015-05-09');
Query OK, 4 rows affected (0.01 sec)
Records: 4  Duplicates: 0  Warnings: 0

mysql> insert into detail_pinjam
    -> values
    -> ('T.001','B10001',3),
    -> ('T.001','B10002',3),
    -> ('T.001','B20001',3),
    -> ('T.002','B10002',3),
    -> ('T.002','B10003',3),
    -> ('T.003','B20002',3),
    -> ('T.004','B10003',3),
    -> ('T.004','B20002',3);
Query OK, 8 rows affected (0.01 sec)
Records: 8  Duplicates: 0  Warnings: 0

mysql> #6
mysql> select*from pelanggan;
+--------------+--------+---------------------------------+---------+
| id_pelanggan | nama   | alamat                          | no_telp |
+--------------+--------+---------------------------------+---------+
| P001         | Nobita | Jl.Dr. Soetomo no.01 Cilacap    | 5678901 |
| P002         | Sizuka | Jl. Rinjani no.05 Cilacap       | 8765432 |
| P003         | Suneo  | Jl. Gatot Subroto no.10 Cilacap | 5654535 |
| P004         | Giant  | Jl. Katamso no.20 Cilacap       | 789765  |
+--------------+--------+---------------------------------+---------+
4 rows in set (0.07 sec)

mysql> select*from buku;
+---------+----------------+------------------+-------+
| id_buku | judul_buku     | penerbit         | tahun |
+---------+----------------+------------------+-------+
| B10001  | Doraemon       | Elex Media       |  1997 |
| B10002  | Detektif Conan | Elex Media       |  1999 |
| B10003  | Crayon Shincan | Rajawali Grafiti |  2000 |
| B20001  | Candy-candy    | Gramedia         |  1997 |
| B20002  | Sailor Moon    | Gramedia         |  1997 |
+---------+----------------+------------------+-------+
5 rows in set (0.01 sec)

mysql> select*from pinjam;
+-----------+--------------+------------+
| id_pinjam | id_pelanggan | tgl_pinjam |
+-----------+--------------+------------+
| T.001     | P001         | 2015-05-01 |
| T.002     | P003         | 2015-05-02 |
| T.003     | P002         | 2015-05-07 |
| T.004     | P005         | 2015-05-09 |
+-----------+--------------+------------+
4 rows in set (0.00 sec)

mysql> select*from detail_pinjam;
+-----------+---------+-------------+
| id_pinjam | id_buku | lama_pinjam |
+-----------+---------+-------------+
| T.001     | B10001  |           3 |
| T.001     | B10002  |           3 |
| T.001     | B20001  |           3 |
| T.002     | B10002  |           3 |
| T.002     | B10003  |           3 |
| T.003     | B20002  |           3 |
| T.004     | B10003  |           3 |
| T.004     | B20002  |           3 |
+-----------+---------+-------------+
8 rows in set (0.00 sec)

mysql> #7
mysql> select * from buku
    -> where penerbit='Elex Media' and tahun=1997;
+---------+------------+------------+-------+
| id_buku | judul_buku | penerbit   | tahun |
+---------+------------+------------+-------+
| B10001  | Doraemon   | Elex Media |  1997 |
+---------+------------+------------+-------+
1 row in set (0.04 sec)

mysql> #8
mysql> select * from pelanggan
    -> where nama like 'S%';
+--------------+--------+---------------------------------+---------+
| id_pelanggan | nama   | alamat                          | no_telp |
+--------------+--------+---------------------------------+---------+
| P002         | Sizuka | Jl. Rinjani no.05 Cilacap       | 8765432 |
| P003         | Suneo  | Jl. Gatot Subroto no.10 Cilacap | 5654535 |
+--------------+--------+---------------------------------+---------+
2 rows in set (0.01 sec)

mysql> select nama from pelanggan
    -> where nama like 'S%';
+--------+
| nama   |
+--------+
| Sizuka |
| Suneo  |
+--------+
2 rows in set (0.00 sec)

mysql> #9
mysql> select * from pelanggan
    -> where nama not like '%A';
+--------------+-------+---------------------------------+---------+
| id_pelanggan | nama  | alamat                          | no_telp |
+--------------+-------+---------------------------------+---------+
| P003         | Suneo | Jl. Gatot Subroto no.10 Cilacap | 5654535 |
| P004         | Giant | Jl. Katamso no.20 Cilacap       | 789765  |
+--------------+-------+---------------------------------+---------+
2 rows in set (0.00 sec)

mysql> select nama from pelanggan
    -> where nama not like '%A';
+-------+
| nama  |
+-------+
| Suneo |
| Giant |
+-------+
2 rows in set (0.00 sec)

mysql> #10
mysql> select * from pelanggan
    -> limit 1,3;
+--------------+--------+---------------------------------+---------+
| id_pelanggan | nama   | alamat                          | no_telp |
+--------------+--------+---------------------------------+---------+
| P002         | Sizuka | Jl. Rinjani no.05 Cilacap       | 8765432 |
| P003         | Suneo  | Jl. Gatot Subroto no.10 Cilacap | 5654535 |
| P004         | Giant  | Jl. Katamso no.20 Cilacap       | 789765  |
+--------------+--------+---------------------------------+---------+
3 rows in set (0.01 sec)

mysql> #11
mysql> select penerbit, count(*) as jumlah_buku from buku
    -> group by penerbit;
+------------------+-------------+
| penerbit         | jumlah_buku |
+------------------+-------------+
| Elex Media       |           2 |
| Rajawali Grafiti |           1 |
| Gramedia         |           2 |
+------------------+-------------+
3 rows in set (0.03 sec)

mysql> #12
mysql> select * from pelanggan
    -> order by nama asc;
+--------------+--------+---------------------------------+---------+
| id_pelanggan | nama   | alamat                          | no_telp |
+--------------+--------+---------------------------------+---------+
| P004         | Giant  | Jl. Katamso no.20 Cilacap       | 789765  |
| P001         | Nobita | Jl.Dr. Soetomo no.01 Cilacap    | 5678901 |
| P002         | Sizuka | Jl. Rinjani no.05 Cilacap       | 8765432 |
| P003         | Suneo  | Jl. Gatot Subroto no.10 Cilacap | 5654535 |
+--------------+--------+---------------------------------+---------+
4 rows in set (0.15 sec)

mysql> #13
mysql> select * from buku
    -> where tahun between 1995 and 2000;
+---------+----------------+------------------+-------+
| id_buku | judul_buku     | penerbit         | tahun |
+---------+----------------+------------------+-------+
| B10001  | Doraemon       | Elex Media       |  1997 |
| B10002  | Detektif Conan | Elex Media       |  1999 |
| B10003  | Crayon Shincan | Rajawali Grafiti |  2000 |
| B20001  | Candy-candy    | Gramedia         |  1997 |
| B20002  | Sailor Moon    | Gramedia         |  1997 |
+---------+----------------+------------------+-------+
5 rows in set (0.03 sec)

mysql> #14
mysql> select sum(lama_pinjam)
    -> from detail_pinjam;
+------------------+
| sum(lama_pinjam) |
+------------------+
|               24 |
+------------------+
1 row in set (0.05 sec)

mysql> #15
mysql> select avg(lama_pinjam) from detail_pinjam;
+------------------+
| avg(lama_pinjam) |
+------------------+
|           3.0000 |
+------------------+
1 row in set (0.01 sec)

mysql> #16
mysql> select * from buku
    -> order by tahun ASC limit 1;
+---------+------------+------------+-------+
| id_buku | judul_buku | penerbit   | tahun |
+---------+------------+------------+-------+
| B10001  | Doraemon   | Elex Media |  1997 |
+---------+------------+------------+-------+
1 row in set (0.04 sec)

mysql> #17
mysql> select * from buku
    -> order by tahun DESC limit 1;
+---------+----------------+------------------+-------+
| id_buku | judul_buku     | penerbit         | tahun |
+---------+----------------+------------------+-------+
| B10003  | Crayon Shincan | Rajawali Grafiti |  2000 |
+---------+----------------+------------------+-------+
1 row in set (0.00 sec)

mysql> #18
mysql> select p.nama, p.alamat, p.no_telp from pelanggan p, pinjam q where p.id_pelanggan=q.id_pelanggan and tgl_pinjam between '2015-05-01' and '2015-05-05';
+--------+---------------------------------+---------+
| nama   | alamat                          | no_telp |
+--------+---------------------------------+---------+
| Nobita | Jl.Dr. Soetomo no.01 Cilacap    | 5678901 |
| Suneo  | Jl. Gatot Subroto no.10 Cilacap | 5654535 |
+--------+---------------------------------+---------+
2 rows in set (0.07 sec)

mysql> #19
mysql> select p* from pelanggan p, pinjam q where p.id_pelanggan=q.id_pelanggan and q.id_pinjam='T.003';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'from pelanggan p, pinjam q where p.id_pelanggan=q.id_pelanggan and q.id_pinjam='' at line 1
mysql> select p.* from pelanggan p, pinjam q where p.id_pelanggan=q.id_pelanggan and q.id_pinjam='T.003';
+--------------+--------+---------------------------+---------+
| id_pelanggan | nama   | alamat                    | no_telp |
+--------------+--------+---------------------------+---------+
| P002         | Sizuka | Jl. Rinjani no.05 Cilacap | 8765432 |
+--------------+--------+---------------------------+---------+
1 row in set (0.00 sec)

mysql> #20
mysql> select b.judul_buku, b.penerbit, b.tahun from buku b, detail_pinjam dp where dp.id_buku = b.id_buku and dp.id_pinjam = 'T.002';
+----------------+------------------+-------+
| judul_buku     | penerbit         | tahun |
+----------------+------------------+-------+
| Detektif Conan | Elex Media       |  1999 |
| Crayon Shincan | Rajawali Grafiti |  2000 |
+----------------+------------------+-------+
2 rows in set (0.04 sec)

mysql> #21
mysql> select b.* from buku b, detail_pinjam dp, pinjam q
    -> where dp.id_pinjam=q.id_pinjam and b.id_buku=dp.id_buku and q.tgl_pinjam='2015-05-09';
+---------+----------------+------------------+-------+
| id_buku | judul_buku     | penerbit         | tahun |
+---------+----------------+------------------+-------+
| B10003  | Crayon Shincan | Rajawali Grafiti |  2000 |
| B20002  | Sailor Moon    | Gramedia         |  1997 |
+---------+----------------+------------------+-------+
2 rows in set (0.06 sec)

mysql> #22
mysql> select count(*) from buku where penerbit = 'Gramedia';
+----------+
| count(*) |
+----------+
|        2 |
+----------+
1 row in set (0.03 sec)

mysql> #23
mysql> select p.nama, p.alamat, p.no_telp, q.tgl_pinjam from pelanggan p inner join pinjam q on q.id_pelanggan = p.id_pelanggan;
+--------+---------------------------------+---------+------------+
| nama   | alamat                          | no_telp | tgl_pinjam |
+--------+---------------------------------+---------+------------+
| Nobita | Jl.Dr. Soetomo no.01 Cilacap    | 5678901 | 2015-05-01 |
| Suneo  | Jl. Gatot Subroto no.10 Cilacap | 5654535 | 2015-05-02 |
| Sizuka | Jl. Rinjani no.05 Cilacap       | 8765432 | 2015-05-07 |
+--------+---------------------------------+---------+------------+
3 rows in set (0.17 sec)

mysql> #24
mysql> select p.nama, p.alamat, p.no_telp, q.tgl_pinjam
    -> from pelanggan p
    -> left join pinjam q on q.id_pelanggan = p.id_pelanggan;
+--------+---------------------------------+---------+------------+
| nama   | alamat                          | no_telp | tgl_pinjam |
+--------+---------------------------------+---------+------------+
| Nobita | Jl.Dr. Soetomo no.01 Cilacap    | 5678901 | 2015-05-01 |
| Sizuka | Jl. Rinjani no.05 Cilacap       | 8765432 | 2015-05-07 |
| Suneo  | Jl. Gatot Subroto no.10 Cilacap | 5654535 | 2015-05-02 |
| Giant  | Jl. Katamso no.20 Cilacap       | 789765  | NULL       |
+--------+---------------------------------+---------+------------+
4 rows in set (0.04 sec)

mysql> #25
mysql> select p.nama, p.alamat, p.no_telp, q.tgl_pinjamv
    -> from pelanggan p
    -> right join pinjam q on q.id_pelanggan = p.id_pelanggan;
ERROR 1054 (42S22): Unknown column 'q.tgl_pinjamv' in 'field list'
mysql> select p.nama, p.alamat, p.no_telp, q.tgl_pinjam
    -> from pelanggan p
    -> right join pinjam q on q.id_pelanggan = p.id_pelanggan;
+--------+---------------------------------+---------+------------+
| nama   | alamat                          | no_telp | tgl_pinjam |
+--------+---------------------------------+---------+------------+
| Nobita | Jl.Dr. Soetomo no.01 Cilacap    | 5678901 | 2015-05-01 |
| Suneo  | Jl. Gatot Subroto no.10 Cilacap | 5654535 | 2015-05-02 |
| Sizuka | Jl. Rinjani no.05 Cilacap       | 8765432 | 2015-05-07 |
| NULL   | NULL                            | NULL    | 2015-05-09 |
+--------+---------------------------------+---------+------------+
4 rows in set (0.00 sec)

mysql> #26
mysql> select p.*, i.* from pelanggan p cross join pinjam i;
+--------------+--------+---------------------------------+---------+-----------+--------------+------------+
| id_pelanggan | nama   | alamat                          | no_telp | id_pinjam | id_pelanggan | tgl_pinjam |
+--------------+--------+---------------------------------+---------+-----------+--------------+------------+
| P004         | Giant  | Jl. Katamso no.20 Cilacap       | 789765  | T.001     | P001         | 2015-05-01 |
| P003         | Suneo  | Jl. Gatot Subroto no.10 Cilacap | 5654535 | T.001     | P001         | 2015-05-01 |
| P002         | Sizuka | Jl. Rinjani no.05 Cilacap       | 8765432 | T.001     | P001         | 2015-05-01 |
| P001         | Nobita | Jl.Dr. Soetomo no.01 Cilacap    | 5678901 | T.001     | P001         | 2015-05-01 |
| P004         | Giant  | Jl. Katamso no.20 Cilacap       | 789765  | T.002     | P003         | 2015-05-02 |
| P003         | Suneo  | Jl. Gatot Subroto no.10 Cilacap | 5654535 | T.002     | P003         | 2015-05-02 |
| P002         | Sizuka | Jl. Rinjani no.05 Cilacap       | 8765432 | T.002     | P003         | 2015-05-02 |
| P001         | Nobita | Jl.Dr. Soetomo no.01 Cilacap    | 5678901 | T.002     | P003         | 2015-05-02 |
| P004         | Giant  | Jl. Katamso no.20 Cilacap       | 789765  | T.003     | P002         | 2015-05-07 |
| P003         | Suneo  | Jl. Gatot Subroto no.10 Cilacap | 5654535 | T.003     | P002         | 2015-05-07 |
| P002         | Sizuka | Jl. Rinjani no.05 Cilacap       | 8765432 | T.003     | P002         | 2015-05-07 |
| P001         | Nobita | Jl.Dr. Soetomo no.01 Cilacap    | 5678901 | T.003     | P002         | 2015-05-07 |
| P004         | Giant  | Jl. Katamso no.20 Cilacap       | 789765  | T.004     | P005         | 2015-05-09 |
| P003         | Suneo  | Jl. Gatot Subroto no.10 Cilacap | 5654535 | T.004     | P005         | 2015-05-09 |
| P002         | Sizuka | Jl. Rinjani no.05 Cilacap       | 8765432 | T.004     | P005         | 2015-05-09 |
| P001         | Nobita | Jl.Dr. Soetomo no.01 Cilacap    | 5678901 | T.004     | P005         | 2015-05-09 |
+--------------+--------+---------------------------------+---------+-----------+--------------+------------+
16 rows in set (0.01 sec)

mysql> #27
mysql> SELECT * FROM pelanggan WHERE id_pelanggan IN ('P.002', 'P.004') UNION SELECT * FROM rental WHERE id_pelanggan IN ('P.002', 'P.004');
ERROR 1146 (42S02): Table 'warung_baca_xyz.rental' doesn't exist
mysql> (select p.*, q.* from pelanggan p join pinjam q on p.id_pelanggan=q.id_pelanggan where p.id_pelanggan='P.002')
    -> union
    -> (select p.*, q.* from pelanggan p join pinjam q on p.id_pelanggan=q.id_pelanggan where p.id_pelanggan='P.004');
Empty set (0.16 sec)

mysql> #28
mysql> truncate pelanggan, buku, pinjam, detail_pinjam;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ', buku, pinjam, detail_pinjam' at line 1
mysql> truncate pelanggan;
Query OK, 0 rows affected (0.28 sec)

mysql> truncate buku;
Query OK, 0 rows affected (0.02 sec)

mysql> truncate pinjam;
Query OK, 0 rows affected (0.02 sec)

mysql> truncate detail_pinjam;
Query OK, 0 rows affected (0.02 sec)

mysql> select*from pelanggan;
Empty set (0.05 sec)

mysql> select*from buku;
Empty set (0.00 sec)

mysql> select*from pinjam;
Empty set (0.00 sec)

mysql> select*from detail_pinjam;
Empty set (0.00 sec)

mysql> #29
mysql> drop table pelanggan;
Query OK, 0 rows affected (0.02 sec)

mysql> drop table buku;
Query OK, 0 rows affected (0.01 sec)

mysql> drop table pinjam;
Query OK, 0 rows affected (0.01 sec)

mysql> drop table detail_pinjam;
Query OK, 0 rows affected (0.01 sec)

mysql> show tables;
Empty set (0.08 sec)

mysql> #30
mysql> drop database warung_baca_xyz;
Query OK, 0 rows affected (0.04 sec)

mysql> show databases;
+-------------------------+
| Database                |
+-------------------------+
| akademik                |
| balai_pengobatan        |
| belajar                 |
| db_sekolah              |
| db_ukt                  |
| dokter_hewan            |
| information_schema      |
| kuliah                  |
| library                 |
| manajemenproduk         |
| modul3_pbd              |
| modul3_pbd_prak         |
| modul3_pbd_praktambahan |
| modul4                  |
| modul7                  |
| modul_5                 |
| modul_6                 |
| mydb                    |
| mydbpdo                 |
| mysql                   |
| opensid                 |
| performance_schema      |
| pethouse                |
| prak_modul3             |
| puskesmas               |
| pweb2_oop_tugas_2       |
| rental_mobil_def        |
| sys                     |
| yopi                    |
+-------------------------+
29 rows in set (0.03 sec)

mysql> Terminal close -- exit!
