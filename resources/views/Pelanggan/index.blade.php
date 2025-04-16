<h2 style="margin-bottom: 16px;">Daftar Pelanggan</h2>

<ul style="line-height: 1.8;">
@foreach ($Pelanggan as $p)
    <li><a href="/pelanggan/{{ $p['Id_Pelanggan'] }}">{{ $p['Nama'] }}</a></li>
@endforeach
</ul>

<a href="/pelanggan/create" style="display: inline-block; margin-top: 20px;">+ Tambah Pelanggan</a>
<br><br>
