@extends('user.app')
@section('content')
<div class="d-flex justify-content-center">.
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0">
                    <?php /* <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> */ ?><strong
                        class="text-black">ABOUT US</strong></div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="site-blocks-cover aos-init aos-animate" style="background-image: url(images/about/DSC03689.JPG);"
        data-aos="fade">
        <div class="container">
            <div class="row align-items-start align-items-md-center justify-content-end">
                <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                    <h1 class="mb-2"><p style="color:brown">UNIK DAN NATURAL</p>
                    </h1>
                    <div class="intro-text text-center text-md-left">
                        <p class="mb-4" style="color:brown"><strong>Seluruh produk woodenware kami terbuat dari bahan kayu jati alami, dihadirkan
                            untuk memenuhi kebutuhan sehari-hari, diproduksi dengan penuh ketulusan dari pengrajin lokal
                            Indonesia. Sempurna menambah keunikan isi rumahmu.</strong>
                        </p>
                        <!-- <p>
                            <a href="http://127.0.0.1:8000/produk" class="btn btn-sm btn-primary">Belanja Sekarang</a>
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="site-section block-8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-5 text-center pl-md-5">
                        <h2>SEDIKIT CERITA TENTANG KAYU JATI</h2>
                        <br>
                        <p align="justify">
                            Kayu jati tergolong kayu dengan kelas awet pertama dibandingkan dengan kayu lainnya.
                            Memiliki daya tahan yang kuat terhadap jamur karena udara lembab atau serangan serangga.
                        </p>
                        <br>
                        <p align="justify">
                            Kayu jati juga memiliki daya tahan yang baik terhadap cuaca dan perubahan suhu. Selain itu,
                            karakter serat dan warnanya memiliki ciri khas yang indah.
                        </p>

                    </div>
                    <div class="col-md-12 col-lg-7 mb-5">
                        <a href="#"><img src="images/about/DSC03073.JPG" alt="Image placeholder"
                                class="img-fluid rounded" data-pagespeed-url-hash="2922651310"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-7 mb-5">
                    <a href="#"><img src="images/about/DSC03858.JPG" alt="Image placeholder" class="img-fluid rounded"
                            data-pagespeed-url-hash="2922651310"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                </div>
                <div class="col-md-12 col-lg-5 text-center pl-md-5">
                    <h2>BAGAIMANA KAYU JATI BISA AMAN DIGUNAKAN?
                    </h2>
                    <br>
                    <p align="justify">
                        Kami telah menambahkan Finishing Beeswax dan Biovarnish Waterbased pada seluruh produk
                        woodenware, terjamin food grade, sehingga aman digunakan untuk kebutuhan sehari-hari.
                    </p>
                </div>
            </div>
        </div>

    </div>


    <div class="site-section">
        <div class="site-blocks-cover aos-init aos-animate" style="background-image: url(images/about/DSC03721.JPG);"
            width="1500" data-aos="fade" 
        </div> 
            
        <div class="top-left">AYO DUKUNG PRODUK LOKAL</div>
        <div class="top-right">
            Terima kasih telah senantiasa bersama kami untuk mendukung <br>para pengrajin lokal untuk
            lebih tumbuh dan berkembang.
        </div>
        <div class="top-right2">
            Yuk bangga memakai produk lokal!
        </div>
    </div>



    @endsection
