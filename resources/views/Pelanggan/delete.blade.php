<h2 style="margin-bottom: 16px;">Yakin ingin menghapus Pelanggan ini?</h2>

<div style="margin-bottom: 20px;">
    <p>Nama Pelanggan : <strong>{{ $pelanggan['Nama'] }}</strong></p>
    <p>email pelanggan : {{ $pelanggan['Email'] }}</p>
</div>

<button disabled style="margin-right: 10px;">Ya, hapus (dummy)</button>
<a href="/pelanggan/{{ $pelanggan['Id_Pelanggan'] }}">Batal</a>

