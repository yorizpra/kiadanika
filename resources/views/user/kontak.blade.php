@extends('user.app')
@section('content')
<div class="d-flex justify-content-center">.
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><?php /* <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> */ ?><strong class="text-black">ABOUT US</strong></div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="site-blocks-cover aos-init aos-animate" style="background-image: url(http://127.0.0.1:8000/shopper/images/hero_1.jpg);" data-aos="fade">
        <div class="container">
            <div class="row align-items-start align-items-md-center justify-content-end">
                <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                    <h1 class="mb-2">UNIK DAN NATURAL
                    </h1>
                    <div class="intro-text text-center text-md-left">
                        <p class="mb-4">Seluruh produk woodenware kami terbuat dari bahan kayu jati alami, dihadirkan untuk memenuhi kebutuhan sehari-hari, diproduksi dengan penuh ketulusan dari pengrajin lokal Indonesia. Sempurna menambah keunikan isi rumahmu.
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
        <div class="row">
            <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Get In Touch</h2>
            </div>
            <div class="col-md-7">

                <form action="#" method="post">

                    <div class="p-3 p-lg-5 border">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_fname" name="c_fname">
                            </div>
                            <div class="col-md-6">
                                <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="c_lname" name="c_lname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_subject" class="text-black">Subject </label>
                                <input type="text" class="form-control" id="c_subject" name="c_subject">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_message" class="text-black">Message </label>
                                <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5 ml-auto">
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">New York</span>
                    <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">London</span>
                    <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
                <div class="p-4 border mb-3">
                    <span class="d-block text-primary h6 text-uppercase">Canada</span>
                    <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection