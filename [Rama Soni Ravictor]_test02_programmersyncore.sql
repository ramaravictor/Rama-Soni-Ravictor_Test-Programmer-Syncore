/* 1. Menampilkan data member yang berada pada provinsi sumatera utara dan dalam satu kabupaten */
SELECT * FROM mst_member
JOIN mst_kabupaten ON mst_kabupaten.id_kabupaten = mst_member.id_kabupaten
JOIN mst_provinsi ON mst_provinsi.kode_propinsi = mst_kabupaten.kode_propinsi
WHERE mst_provinsi.nama_propinsi = 'Sumatera Utara' AND mst_kabupaten.nama_kabupaten = 'Kabupaten X';

/* 2. Menampilkan data provinsi yang tidak ada dalam data member */
SELECT * FROM mst_provinsi
WHERE id_propinsi NOT IN (SELECT DISTINCT id_provinsi FROM mst_member);

/* 3. Menampilkan data kabupaten yang tidak ada dalam data member */
SELECT kabupaten.nama_kabupaten 
FROM mst_kabupaten kabupaten 
LEFT JOIN mst_kecamatan kecamatan ON kabupaten.id_kabupaten = kecamatan.kode_kabupaten 
LEFT JOIN mst_instansi instansi ON kecamatan.id_kecamatan = instansi.id_kecamatan 
LEFT JOIN mst_member member ON instansi.id_instansi = member.id_instansi 
WHERE member.id_member IS NULL;

/* 4. Menampilkan data kecamatan yang tidak ada dalam data member */
SELECT kecamatan.nama_kecamatan 
FROM mst_kecamatan kecamatan 
LEFT JOIN mst_instansi instansi ON kecamatan.id_kecamatan = instansi.kode_kecamatan 
LEFT JOIN mst_member member ON instansi.id_instansi = member.id_instansi 
WHERE member.id_member IS NULL;

/* 5. Menampilkan nama member yang terdapat di Kab. Simalungun */
SELECT member.nama_member 
FROM mst_member member 
INNER JOIN mst_instansi instansi ON member.kode_instansi = instansi.kode_instansi 
INNER JOIN mst_kecamatan kecamatan ON instansi.kode_kecamatan = kecamatan.kode_kecamatan 
INNER JOIN mst_kabupaten kabupaten ON kecamatan.kode_kabupaten = kabupaten.kode_kabupaten 
WHERE kabupaten.nama_kabupaten = 'Simalungun';

/* 6. Menampilkan jumlah data instansi pada Kab. Bireuen dan Kab. Bener Meriah */
SELECT kabupaten.nama_kabupaten, COUNT(instansi.id_instansi) as jumlah_instansi
FROM mst_instansi instansi 
INNER JOIN mst_kecamatan kecamatan ON instansi.kode_kecamatan = kecamatan.kode_kecamatan 
INNER JOIN mst_kabupaten kabupaten ON kecamatan.kode_kabupaten = kabupaten.kode_kabupaten 
WHERE kabupaten.nama_kabupaten IN ('Bireuen', 'Bener Meriah')
GROUP BY kabupaten.nama_kabupaten;

/* 7. Menampilkan data member yang berawalan huruf “M” */
SELECT * FROM mst_member WHERE nama LIKE 'M%';

/* 8. Menampilkan alamat email yang mempunyai karakter “no” dan terdapat di provinsi Sumatera Utara */
SELECT member.email 
FROM mst_member member 
INNER JOIN mst_instansi instansi ON member.id_instansi = instansi.id_instansi 
INNER JOIN mst_kecamatan kecamatan ON instansi.id_kecamatan = kecamatan.id_kecamatan 
INNER JOIN mst_kabupaten kabupaten ON kecamatan.id_kabupaten = kabupaten.id_kabupaten 
INNER JOIN mst_provinsi provinsi ON kabupaten.id_provinsi = provinsi.id_provinsi 
WHERE provinsi.nama_provinsi = 'Sumatera Utara' AND member.email LIKE '%no%';

/* 9.Menampilkan data member yang mempunyai kode instansi “2004” */
SELECT * FROM mst_member WHERE id_instansi = '2004';

/* 10.Menampilkan data member yang mempunyai karakter kode kecamatan “.08.” */
SELECT member.* 
FROM mst_member member 
INNER JOIN mst_instansi instansi ON member.id_instansi = instansi.id_instansi 
INNER JOIN mst_kecamatan kecamatan ON instansi.id_kecamatan = kecamatan.id_kecamatan 
WHERE kecamatan.kode_kecamatan LIKE '%.08.%';

