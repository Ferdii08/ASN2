<h2 style="margin-bottom: 16px;">Edit Data Pelanggan</h2>

<form style="line-height: 2;">
    <label>Nama: <input type="text" value="{{ $Pelanggan['Nama'] }}"></label><br>
    <label>Alamat: <input type="text" value="{{ $Pelanggan['Alamat'] }}"></label><br>
    <label>Nomor Telepon: <input type="Number" value="{{ $Pelanggan['Nomor_Telepon'] }}"></label><br>
    <label>Email: <input type="email" value="{{ $Pelanggan['Email'] }}"></label><br>
    <label>Riwayat Pembelian: <input type="text" value="{{ $Pelanggan['Riwayat_Pembelian'] }}"></label><br>
    <button disabled style="margin-top: 10px;">Simpan (dummy)</button>
</form>

<a href="/pelanggan/{{ $Pelanggan['Id_Pelanggan'] }}" style="display: inline-block; margin-top: 20px;">← Kembali ke detail</a>