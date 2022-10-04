<!DOCTYPE html>
<html>

<head>
    <title>GAJI KARYAWAN</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='{{asset("css/bootstrap.min.css")}}' rel='stylesheet'>
    <script src='{{asset("js/jquery.min.js")}}'></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top">
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <div class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('/profil')}}">PROFIL PEGAWAI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/gaji')}}">GAJI PEGAWAI</a>
                </li>
            </div>
        </div>
    </nav>
    @php
        $pegawai = 
        [['pegawai' => '2022001', 'nama'=>'Kurt Cobain', 'kode'=>'D'],
            ['pegawai' => '2022007', 'nama'=>'Eddy Vender', 'kode'=>'M'],
            ['pegawai' => '2022008', 'nama'=>'Sid Vicious', 'kode'=>'S'],
            ['pegawai' => '2022010', 'nama'=>'Anthony Kiedis', 'kode'=>'S']];
    @endphp 
    
    <div class="container-fluid" style="margin-top: 80px;">
        <h3>PROFIL PEGAWAI PT UJUNG KULON</h3>
        
        <table class="table table-striped table-hover">
            <thead class="table-success">
                <tr>
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Kode</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $p)
                <tr>
                    <td>{{$p['pegawai']}}</td>
                    <td>{{$p['nama']}}</td>
                    <td>{{$p['kode']}}</td>
                </tr>
                @endforeach
        </table>
    </div>
</body>

</html>