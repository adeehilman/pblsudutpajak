
// Fungsi untuk menyimpan data ke MySQL
function insertData(message) {
    const query = 'INSERT INTO tb_entry VALUES (?)'; // Sesuaikan dengan struktur tabel dan kolom Anda
    connection.query(query, [message], (err, result) => {
      if (err) {
        console.error('Gagal menyimpan data ke MySQL:', err);
        return;
      }
      console.log('Data berhasil disimpan ke MySQL');
    });
  }