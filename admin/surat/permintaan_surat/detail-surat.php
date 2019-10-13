<?php
    include('../../../config/koneksi.php');
 
    if($_POST['id_surat']) {
        $id = $_POST['id_surat'];
        $qTampil = "SELECT penduduk.*, surat_keterangan.* FROM penduduk LEFT JOIN surat_keterangan ON surat_keterangan.nik = penduduk.nik WHERE surat_keterangan.id_sk='$id'
        UNION SELECT penduduk.*, surat_keterangan_berkelakuan_baik.* FROM penduduk LEFT JOIN surat_keterangan_berkelakuan_baik ON surat_keterangan_berkelakuan_baik.nik = penduduk.nik WHERE surat_keterangan_berkelakuan_baik.id_skbb='$id'
        UNION SELECT penduduk.*, surat_keterangan_domisili.* FROM penduduk LEFT JOIN surat_keterangan_domisili ON surat_keterangan_domisili.nik = penduduk.nik WHERE surat_keterangan_domisili.id_skd='$id'
        UNION SELECT penduduk.*, surat_keterangan_usaha.* FROM penduduk LEFT JOIN surat_keterangan_usaha ON surat_keterangan_usaha.nik = penduduk.nik WHERE surat_keterangan_usaha.id_sku='$id'";
        $tampil = $connect->query($qTampil);
        foreach ($tampil as $row) { 
?> 
            <div align="center" style="font-size:20px;"><i class="fas fa-id-card"></i> <b>DETAIL INFORMASI SURAT</b></div><hr width="97%">
                <div class="row">
                    <div class="col-sm-8">
                        <table>
                            <tr>
                                <td width="40%"><b>NIK</b></td>
                                <td width="7%">:</td>
                                <td width="100%"><?php echo $row['nik']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama</b></td>
                                <td>:</td>
                                <td><?php echo $row['nama']; ?></td>
                            </tr>
                            <?php
                                $tgl_lhr = date($row['tgl_lahir']);
                                $tgl = date('d ', strtotime($tgl_lhr));
                                $bln = date('F', strtotime($tgl_lhr));
                                $thn = date(' Y', strtotime($tgl_lhr));
                                $blnIndo = array(
                                    'January' => 'Januari',
                                    'February' => 'Februari',
                                    'March' => 'Maret',
                                    'April' => 'April',
                                    'May' => 'Mei',
                                    'June' => 'Juni',
                                    'July' => 'Juli',
                                    'August' => 'Agustus',
                                    'September' => 'September',
                                    'October' => 'Oktober',
                                    'November' => 'November',
                                    'December' => 'Desember'
                                );
                            ?>
                            <tr>
                                <td><b>Tempat, Tgl Lahir</b></td>
                                <td>:</td>
                                <td><?php echo $row['tempat_lahir'] . ", " . $tgl . $blnIndo[$bln] . $thn; ?></td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelamin</b></td>
                                <td>:</td>
                                <td><?php echo $row['jenis_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td>:</td>
                                <td><?php echo 'Dsn. ', $row['dusun'], ", RT", $row['rt'], "/RW", $row['rw']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Agama</b></td>
                                <td>:</td>
                                <td><?php echo $row['agama']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan</b></td>
                                <td>:</td>
                                <td><?php echo $row['pekerjaan']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Kewarganegaraan</b></td>
                                <td>:</td>
                                <td><?php echo $row['kewarganegaraan']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Keperluan</b></td>
                                <td>:</td>
                                <td><?php echo $row['keperluan']; ?></td>
                            </tr>
                        </table>
                    </div>
            <!-- <table>
                <?php
                    $tgl_lhr = date($row['tgl_lahir']);
                    $tgl = date('d ', strtotime($tgl_lhr));
                    $bln = date('F', strtotime($tgl_lhr));
                    $thn = date(' Y', strtotime($tgl_lhr));
                    $blnIndo = array(
                        'January' => 'Januari',
                        'February' => 'Februari',
                        'March' => 'Maret',
                        'April' => 'April',
                        'May' => 'Mei',
                        'June' => 'Juni',
                        'July' => 'Juli',
                        'August' => 'Agustus',
                        'September' => 'September',
                        'October' => 'Oktober',
                        'November' => 'November',
                        'December' => 'Desember'
                    );
                ?>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><?php echo $row['nik']; ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $row['nama']; ?></td>
                </tr>
                <tr>
                    <td>Tempat, Tgl Lahir</td>
                    <td>:</td>
                    <td><?php echo $row['tempat_lahir'] . ", " . $tgl . $blnIndo[$bln] . $thn; ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo "Dusun. " . $row['dusun'] . ", RT" . $row['rt'] . "/RW" . $row['rw']; ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?php echo $row['agama']; ?></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?php echo $row['pekerjaan']; ?></td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td><?php echo $row['kewarganegaraan']; ?></td>
                </tr>
                <tr>
                    <td>Keperluan</td>
                    <td>:</td>
                    <td><?php echo $row['keperluan']; ?></td>
                </tr>
            </table> -->
<?php
        }
    }
?>