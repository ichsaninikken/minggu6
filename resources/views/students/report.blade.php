<!DOCTYPE html> 
<html> 
    <head> 
        <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title> 
    </head> 
    <body> 
        <style type="text/css"> table tr td, table tr th{ font-size: 9pt; } </style> 
        <h4 align="center">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h4> 
        <center>
                <b>KARTU HASIL STUDI (KHS)</b>
        </center>

        <br><br><br>
        <b>Name</b> : {{ $student->name }} <br> 
        <b>NIM</b> : {{ $student->nim }} <br> 
        <b>Class</b> : {{ $student->kelas->class_name }} <br>
        <b>Department</b> : {{ $student->department }} 
        <br><br><br> 
        
        <center>
        <table align="center">
            <tr align="center" bgcolor="grey">
                <th width="110"><b>Mata Kuliah</th>
                <th width="100"><b>SKS</th>
                <th width="100"><b>Semester</th>
                <th width="100"><b>Nilai</th>
            </tr>
            @foreach ($student->courses as $sc) 
            <tr align="center">
                <td>{{ $sc->course_name }}</td>
                <td>{{ $sc->sks }}</td>
                <td>{{ $sc->semester }}</td>
                <td>{{$sc->pivot->nilai}}</td>
            </tr>
            @endforeach 
        </table>
        </center> 
        
    </body> 
</html>