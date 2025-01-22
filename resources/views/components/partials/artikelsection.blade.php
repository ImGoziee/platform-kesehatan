<section class="search mb-[40px]">
    <div class="container">
        <div class="row">
            <div class="search">
                <div class="search-container">
                    <input type="text" class="search-input"
                        placeholder="Cari Artikel Berdasarkan judul, Kategori, topik">
                    <button class="search-button">
                        Cari
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  -->

<div class="container artikel-wrapper">

    <section class="top-ter">
        <div class="container">
            <h2>Topik Terkini</h2>
            <div class="row">
                <div class="top">
                    <span>Kesehatan Mental</span>
                    <span>Kehamilan</span>
                    <span>Diet dan Nutrisi</span>
                </div>
            </div>
        </div>
    </section>

    <section class="slider-artikel">
        <div class="container">
            <h2>Daftar Artikel Favorit</h2>
            <div class="row">
                @foreach (range(1, 3) as $index)
                    <div class="col-md-4">
                        <div class="card border border-gray-300">
                            <div class="card-image">
                                <img src="https://www.medius.co.jp/assets/2024/08/shutterstock_2425703833.jpg"
                                    alt="">
                            </div>
                            <div class="card-body">
                                <h3 class="!font-medium !text-lg">Lorem Ipsum Judul</h3>
                                <span class="category">Kategori</span>
                                <p class="!text-lg !font-medium">Lorem ipsum Desk Singkat</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="artikelpop">
        <div class="container">
            <h2>Artikel Terpopuler</h2>
            <div class="row d">
                <div class="col-md-6"
                    style="background-image:url('https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/10/06045528/cek-fakta-benarkah-keramas-pakai-kopi-mampu-atasi-rambut-rontok-halodoc.jpg.webp');">
                    <div class="big-art">
                        <h3>Lorem, ipsum dolor.</h3>
                        <span>Kategori</span>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row e">
                        <div class="col-md-5"
                            style="background-image:url('https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/10/06045528/cek-fakta-benarkah-keramas-pakai-kopi-mampu-atasi-rambut-rontok-halodoc.jpg.webp');">
                        </div>
                        <div class="col-md-7">
                            <div class="minicard">
                                <h3>Lorem, ipsum dolor.</h3>
                                <p>Lorem ipsum dolor sit.</p>
                                <span>kategori</span>
                            </div>
                        </div>
                    </div>
                    <div class="row e">
                        <div class="col-md-5"
                            style="background-image:url('https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/10/06045528/cek-fakta-benarkah-keramas-pakai-kopi-mampu-atasi-rambut-rontok-halodoc.jpg.webp');">
                        </div>
                        <div class="col-md-7">
                            <div class="minicard">
                                <h3>Lorem, ipsum dolor.</h3>
                                <p>Lorem ipsum dolor sit.</p>
                                <span>kategori</span>
                            </div>
                        </div>
                    </div>
                    <div class="row e">
                        <div class="col-md-5"
                            style="background-image:url('https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/10/06045528/cek-fakta-benarkah-keramas-pakai-kopi-mampu-atasi-rambut-rontok-halodoc.jpg.webp');">
                        </div>
                        <div class="col-md-7">
                            <div class="minicard">
                                <h3>Lorem, ipsum dolor.</h3>
                                <p>Lorem ipsum dolor sit.</p>
                                <span>kategori</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="art-pop">
    <div class="container popular-wrapper">
        <section class="popular">
            <h2>Artikel Terbaru</h2>
            <div class="row">
                @foreach (range(1, 3) as $index)
                    <div class="col-md-4">
                        <div class="card border border-gray-300">
                            <div class="card-image">
                                <img src="https://www.medius.co.jp/assets/2024/08/shutterstock_2425703833.jpg"
                                    alt="">
                            </div>
                            <div class="card-body">
                                <h3>Lorem Ipsum Judul</h3>
                                <span class="category">Kategori</span>
                                <p>Lorem ipsum Desk Singkat</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                @foreach (range(1, 3) as $index)
                    <div class="col-md-4">
                        <div class="card border border-gray-300">
                            <div class="card-image">
                                <img src="https://www.medius.co.jp/assets/2024/08/shutterstock_2425703833.jpg"
                                    alt="">
                            </div>
                            <div class="card-body">
                                <h3>Lorem Ipsum Judul</h3>
                                <span class="category">Kategori</span>
                                <p>Lorem ipsum Desk Singkat</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="next">Selanjutnya</button>
    </div>
</section>
