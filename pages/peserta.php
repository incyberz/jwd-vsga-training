<?php
$s = "SELECT * FROM tb_peserta";
$q = mysqli_query($cn,$s) or die(mysqli_error($cn));
$pesertas = div_alert('danger', 'Belum ada data peserta.');
if(mysqli_num_rows($q)){
  $pesertas = '';
  while ($d=mysqli_fetch_assoc($q)) {
    $pesertas .= "
      <div class='swiper-slide'>
        <div class='testimonial-wrap'>
          <div class='testimonial-item'>
            <img src='assets/img/peserta/peserta-$d[id].jpg' class='testimonial-img'>
            <h3>$d[nama]</h3>
            <h4>$d[pekerjaan]</h4>
            <p>
              <i class='bx bxs-quote-alt-left quote-icon-left'></i>
              $d[testimoni]
              <i class='bx bxs-quote-alt-right quote-icon-right'></i>
            </p>
          </div>
        </div>
      </div>
    ";
  }
}
?>
<section id="peserta" class="peserta section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Peserta</h2>
      <p>Kami adalah para pelajar Web Developer calon pembangun website yang handal.</p>
    </div>

    <div class="peserta-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
        <?=$pesertas?>
      </div>
      <div class="swiper-pagination">zzz</div>
    </div>

  </div>
</section>