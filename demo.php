<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
  </head>
    <body>
    <script src = "https://code.jquery.com/jquery-3.6.1.min.js"
    integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin = "anonymous">
    </script>
        <p class="tema">
            Prodi :
            <select onchange="Pilihprodi(value)">
            <option value="Pilih Program Studi">Pilih Program Studi</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
          </select>
        </p>
        <h1 id="Prodi"></h1>
        <table border="1">
        <tr>
            <th rowspan="2">No </th>
            <th rowspan="2">NIM</th>
            <th rowspan="2">Nama </th>
            <th colspan="2">Program Studi</th>
        </tr>
        </table>
    </body>
</html>