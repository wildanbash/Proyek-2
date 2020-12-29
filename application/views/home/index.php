<main id="main">

	<!-- About -->
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="<?= base_url(); ?>/assets/static/masjid.jpg" style="width: 520px;">
                </div>
                <div class="col-lg-6 content">
					<h2>Profile</h2>
					<p>Masjid Raya Ar-Raudlah, merupakan masjid yang dibangun dan terletak di Kraksaan-Probolinggo. Mempunyai 2 lantai untuk ibadah dan memberi akses parkir yang luas untuk pengunjung.</p>
                </div>
            </div>
        </div>
	</section>
	
    <!-- Artikel -->
    <section id="services" class="mt-4">
        <div class="container">
            <div class="section-header">
                <h2>Artikel</h2>
                <p>Beberapa artikel yang kami tulis.</p>
			</div>
            <div class="row">
                <?php foreach ($artikel as $art) { ?>
                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><i class="fas fa-newspaper"></i></div>
                            <h4 class="title"><a href=""><?php echo $art['title']; ?></a></h4>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

	<!-- Kegiatan -->
    <section id="portfolio" class="wow fadeInUp mt-4">
        <div class="container">
            <div class="section-header">
                <h2>Kegiatan</h2>
                <p>Kegiatan yang diadakan di Masjid Raya Ar-Raudlah.</p>
            </div>
        </div>

        <div class="container">
            <div class="row no-gutters">
                <?php foreach ($dokumentasi as $d) { ?>
                    <div class="col m-2"> 
                        <div class="portfolio-item wow fadeInUp">
                            <a href="<?= base_url('');?> class=" portfolio-popup>
							<img src="<?= base_url('assets/upload/dokumentasi/'.$d['content_images']);?>"  alt="">
                                <div class=" portfolio-overlay">
                                    <div class="portfolio-info">
                                        <h2 class="wow fadeInUp"><?php echo $d['nama']; ?></h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
	</section>

    <!-- Lokasi -->
    <section id="contact" class="wow fadeInUp mt-4">
        <div class="container">
            <div class="section-header">
				<h2>Hubungi Kami</h2>
				<p>Untuk pengadaan kegiatan di Masjid, maupun yang lainnya.</p>
            </div>
            
            <div class="row contact-info">
                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>Jl. Rengganis No 01, Kec Kraksaan, Probolinggo, Jawa Timur 67282</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel: 082257125415">082257125415</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:septiandareza07@gmail.com">septiandareza07@gmail.com</a></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="container mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.27757357069!2d113.41316281432607!3d-7.760358679111327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7005a358c77ad%3A0x7b254168791831a9!2sMasjid%20Agung%20Ar-Raudloh!5e0!3m2!1sid!2sid!4v1602522056928!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="container">
            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <?= $this->session->flashdata('pesan') ?>
                <form action="<?= base_url('home/kirim') ?>" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit" name="send_message">Send Message</button></div>
                </form>
            </div>

        </div>
    </section>
</main>