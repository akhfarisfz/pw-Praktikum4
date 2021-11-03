<?php
abstract class Atribut{
    public $nama;
    public $ttl;
    public $Gender;
    public $Level;
    public $Status;
    public $Gaji;

    public function __construct($Nama,$ttl,$Gender,$Level,$Status)
    {
        $this->Nama=$Nama;
        $this->ttl=$ttl;
        $this->Gender=$Gender;
        $this->Level=$Level;
        $this->Status=$Status;
    }

    abstract public function kalkulasigaji();
}

    
    class Fulltime extends Atribut{
        public function kalkulasigaji(){
        if($this->Level=='Junior')
            {
                $this->Gaji=2000000;
                return $this->Gaji;
            }
            else if($this->Level=='Amateur'){
                $this->Gaji=3500000;
                return $this->Gaji;
            }
            else if($this->Level=='Senior'){
                $this->Gaji=5000000;
                return $this->Gaji;
            };
        }
    }
    class PartTime extends Atribut{ 
        public function kalkulasigaji(){
            if($this->Level=='Junior')
                {
                    $this->Gaji=2000000/2;
                    return $this->Gaji;
                }
                else if($this->Level=='Amateur'){
                    $this->Gaji=3500000/2;
                    return $this->Gaji;
                }
                else if($this->Level=='Senior'){
                    $this->Gaji=5000000/2;
                    return $this->Gaji;
                };
            }
    }


// $Nama,$ttl,$Gender,$Level,$Status
    $Pegawai[0]= new Fulltime('Faris','Surabaya,17 Feb 2001','Laki-laki','Senior','Fulltime');
    $Pegawai[1]= new Fulltime('Odin','Bali,23 Jan 2002','Laki-laki','Amateur','Fulltime');
    $Pegawai[2]= new PartTime('Litfi','Kalimantan,12 Mar 2000','Laki-laki','Junior','Parttime');
    $Pegawai[3]= new PartTime('Godiva','Kalbar,1 Feb 2003','Laki-laki','Senior','Parttime');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Konversi gaji</title>
</head>
<body>
    <h1 class = "judul" align="center">Tabel Konversi Gaji<h1>
    <table border="1" cellspacing="0" cellpadding="50" align="center">
        
        <tr align="center" bgcolor="#1fe5d5">
        <td>No</td>
        <td>Nama</td>
        <td>Tempat Tanggal Lahir</td>
        <td>Jenis Kelamin</td>
        <td>Level Karyawan</td>
        <td>Status</td>
        <td>Gaji Karyawan</td>
        </tr>
        <?php for($i=0;$i<4;$i++){?>
        <tr bgcolor ='antiquewhite';>
            <td><?php echo $i+1; ?></td>
            <td><?php echo $Pegawai[$i]->Nama ?></td>
            <td><?php echo $Pegawai[$i]->ttl?></td>
            <td><?php echo $Pegawai[$i]->Gender?></td>
            <td><?php echo $Pegawai[$i]->Level?></td>
            <td><?php echo $Pegawai[$i]->Status?></td>
            <td><?php echo $Pegawai[$i]->kalkulasigaji()?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>