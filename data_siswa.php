<?php
    require_once('class_mahasiswa.php');
    $mahasiswa = new Mahasiswa (010101,"Dikky Garcia",3);
    echo $mahasiswa->predikat_ipk();
    echo $mahasiswa->nim;
    echo $mahasiswa->nama;
?>