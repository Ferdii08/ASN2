<h2 style="margin-bottom: 16px;">Yakin ingin menghapus Pelanggan ini?</h2>

<div style="margin-bottom: 20px;">
    <p>Nama Pelanggan : <strong>{{ $Pelanggan['Nama'] }}</strong></p>
    <p>email pelanggan : {{ $Pelanggan['Email'] }}</p>
</div>

<button disabled style="margin-right: 10px;">Ya, hapus (dummy)</button>
<a href="/pelanggan/{{ $Pelanggan['Id_Pelanggan'] }}">Batal</a>
