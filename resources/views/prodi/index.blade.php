<h1>Data Prodi</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
    <th>Nama Prodi</th>
    <th>Singkatan</th>
    <th>Kaprodi</th>
    <th>Fakultas</th>
    </tr>
    
    @foreach ($prodis as $key => $prodi)
    <tr>
        <tr>{{$key + 1}}</tr>
        <tr>{{$prodi->nama_prodi}}</tr>
        <tr>{{$prodi->singkatan}}</tr>
        <tr>{{$prodi->kaprodi}}</tr>
        <tr>{{$prodi->fakultas->nama_fakultas ?? '-'}}</tr>
    </tr>
        
    @endforeach
</table>