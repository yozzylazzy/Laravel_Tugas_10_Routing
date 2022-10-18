<!DOCTYPE html>
<html>

<head>
    <title>GAJI KARYAWAN</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='{{ asset('css/bootstrap.min.css') }}' rel='stylesheet'>
    <script src='{{ asset('js/jquery.min.js') }}'></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top">
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <div class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">PROFIL PEGAWAI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/gaji') }}">GAJI PEGAWAI</a>
                </li>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="margin-top: 80px;">
        <h3>DAFTAR GAJI PT UJUNG KULON</h3>

        <div class="container">

        </div>
        <table class="table table-striped table-hover">
            <thead class="table-success">
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Jabatan</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan</th>
                    <th>Gaji Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $p)
                    @php
                        $jabatan = '';
                        $tunjangan = 0;
                        $total = 0;
                        $gaji = 0;
                        if ($p['kode'] == 'D') {
                            $jabatan = $data[0]['kode'];
                            $gaji = $data[0]['gaji'];
                            $tunjangan = $data[0]['gaji'] * 0.6;
                            $total = $data[0]['gaji'] + $data[0]['gaji'] * 0.6;
                        } elseif ($p['kode'] == 'M') {
                            $jabatan = $data[1]['kode'];
                            $gaji = $data[1]['gaji'];
                            $tunjangan = $data[1]['gaji'] * 0.6;
                            $total = $data[1]['gaji'] + $data[1]['gaji'] * 0.6;
                        } else {
                            $jabatan = $data[2]['kode'];
                            $gaji = $data[2]['gaji'];
                            $tunjangan = $data[2]['gaji'] * 0.6;
                            $total = $data[2]['gaji'] + $data[2]['gaji'] * 0.6;
                        } 
                    @endphp
                        
                    <tr>
                        <td>{{ $p['nama'] }}</td>
                        <td>{{$jabatan}}</td>
                        <td>{{'Rp ' . number_format($gaji, 0, '.', ',')}} 
                        </td>
                        <td>{{'Rp ' . number_format($tunjangan, 0, '.', ',')}} 
                        </td>
                        <td>{{'Rp ' . number_format($total, 0, '.', ',')}}
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
</body>

</html>
