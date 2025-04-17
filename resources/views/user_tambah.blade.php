<body>
    <h1>Add Data Use Formr</h1>
    <a href="{{route('/user')}}">Back</a>
    <form method="POST" action="{{route('/user/tambah_simpan')}}">
    {{csrf_field()}}
    <label>Username</label>
    <input type="text" name="username" placeholder="Masukkan Username">
    <br>
    <label>Name</label>
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Masukkan Password">
    <br>
    <label>Level ID</label>
    <input type="number" name="level_id">
    <br>
    
    <input type="submit" name="btn btn-success" value="Simpan">
    </form>
</body>