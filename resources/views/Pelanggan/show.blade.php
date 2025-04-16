<h2 style="margin-bottom: 16px;">Detail Pelanggan</h2>

<div style="line-height: 1.8; margin-bottom: 20px;">
    <p><strong>Nama:</strong> {{ $Pelanggan['Nama'] }}</p>
    <p><strong>Alamat:</strong> {{ $Pelanggan['Alamat'] }}</p>
    <p><strong>Nomor Telepon:</strong> {{ $Pelanggan['Nomor_Telepon'] }}</p>
    <p><strong>Email:</strong> {{ $Pelanggan['Email'] }}</p>
    <p><strong>Riwayat Pembelian:</strong> {{ $Pelanggan['Riwayat_Pembelian'] }}</p>
</div>

<a href="/pelanggan/{{ $Pelanggan['Id_Pelanggan'] }}/edit" style="margin-right: 10px;">✏ Edit</a>
<a href="/pelanggan/{{ $Pelanggan['Id_Pelanggan'] }}/delete" style="margin-right: 10px;">🗑 Hapus</a>
<a href="/pelanggan">← Kembali ke daftar</a>