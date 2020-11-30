 @extends("layouts.main")
@section('content')
    <!-- header area start -->
@include("inc.header")
 <div class="breadcrumb-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">
მთავარი</a></li>
                                <li class="breadcrumb-item active" aria-current="page">კონტაქტი</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- contact us area -->
    <section class="contact-style-2 pt-30 pb-35">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="contact2-title text-center mb-65">
                        <h2>დაგვიკავშირდით</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h3>სათაო ოფისი</h3>
                        ი.გაგარინის 4-4ა, თბილისი
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h3>ტელ.</h3>
                        +995 32 238 17 33
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h3>ელ. ფოსტა</h3>
                        calibergeorgia@gmail.com
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="contact-single-info mb-30 text-center">
                        <div class="contact-icon">
                            <i class="fa fa-skype"></i>
                        </div>
                        <h3>Skype</h3>
                        Caliber.ge
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- contact form two -->
    <div class="contact-two-area pt-60 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="contact2-title text-center mb-60">
                        <h2>მოგვწერეთ</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-message">
                        <form id="contact-form" action="{{ route('message') }}" method="post" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <input name="name" placeholder="სახელი" type="text">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <input name="surname" placeholder="სახელი" type="text">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <input name="mail" placeholder="ელ. ფოსტა" type="text">
                                </div>
                                <div class="col-12">
                                    <div class="contact2-textarea text-center">
                                        <textarea placeholder="შეტყობინების ტექსტი" name="text" class="form-control2"></textarea>
                                    </div>
                                    <div class="contact-btn text-center">
                                        <button type="submit">გაგზავნა</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-style-2 pt-30 pb-35" style="background: #eff7f8;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="iq-card">
                        <div class="iq-card-body text-center">

                            <h4>ი.გაგარინის 4-4ა</h4>


                            <p class="mb-0">ტელ.: +995 32 238 17 33</p>
                            <p class="mb-0">ფილიალი: თბილისი

                            </p>
                            <div class="doc-profile">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2977.437053071277!2d44.768085!3d41.732665!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472e63d832737%3A0x44a0653cf04f8a0c!2s4%2F4a%20Iuri%20Gagarini%20St%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1594015073964!5m2!1sen!2sge"
                                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="iq-card">
                        <div class="iq-card-body text-center">

                            <h4>დ.აღმაშენებლის გამზ. 184</h4>


                            <p class="mb-0">ტელ.: +995511180191</p>
                            <p class="mb-0">ფილიალი: თბილისი

                            </p>
                            <div class="doc-profile">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2977.9735776350767!2d44.787936!3d41.721089!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472d235f9a941%3A0xa9e8fc92fb4c766!2s184%20Davit%20Aghmashenebeli%20Ave%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1594016069363!5m2!1sen!2sge"
                                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="iq-card">
                        <div class="iq-card-body text-center">

                            <h4>ალ. თვალჭრელიძე #2 &quot;ისთ ფოინთი (დომინო)&quot;</h4>


                            <p class="mb-0">ტელ.: +995 599 48 01 09</p>
                            <p class="mb-0">ფილიალი: თბილისი

                            </p>
                            <div class="doc-profile">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5958.578136448842!2d44.895745!3d41.692695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x862408ef503199cb!2sEast%20Point!5e0!3m2!1sen!2sge!4v1594015872708!5m2!1sen!2sge" width="600" height="450"
                                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="iq-card">
                        <div class="iq-card-body text-center">

                            <h4>შავი ზღვის ქუჩა 20</h4>


                            <p class="mb-0">ტელ.: +995 32 274 73 49</p>
                            <p class="mb-0">ფილიალი: თბილისი

                            </p>
                            <div class="doc-profile">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1489.689530217926!2d44.833731!3d41.690752!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440dacb23babab%3A0xd9def651f2495781!2s20%20Lekh%20Kachinski%20St%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1594015953055!5m2!1sen!2sge"
                                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="iq-card">
                        <div class="iq-card-body text-center">

                            <h4>უნივერსიტეტის ქუჩა #2 (არენა)</h4>


                            <p class="mb-0">ტელ.: + 995 577 124062</p>
                            <p class="mb-0">ფილიალი: თბილისი

                            </p>
                            <div class="doc-profile">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5956.140864043489!2d44.744843!3d41.718999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4044737193f5b5bb%3A0x2e95d292003861e2!2s2%20University%20St%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1594016027117!5m2!1sen!2sge"
                                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="iq-card">
                        <div class="iq-card-body text-center">

                            <h4>გორი: თბილისის ქუჩა 70</h4>


                            <p class="mb-0">ტელ.: +995 570 300 678</p>
                            <p class="mb-0">ფილიალი: რეგიონები

                            </p>
                            <div class="doc-profile">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4193.681628062895!2d44.1217033142615!3d41.992104208880725!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40449eabea494855%3A0x8022b17a915da91f!2sGori%20Police%20Station!5e0!3m2!1sen!2sge!4v1594016201395!5m2!1sen!2sge"
                                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="iq-card">
                        <div class="iq-card-body text-center">

                            <h4>სენაკი:რუსთავლის ქუჩა 176</h4>


                            <p class="mb-0">ტელ.: 574926363</p>
                            <p class="mb-0">ფილიალი: რეგიონები

                            </p>
                            <div class="doc-profile">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5904.894152746464!2d42.058791!3d42.268979!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5168e24f20382138!2z4YOh4YOU4YOc4YOQ4YOZ4YOY4YOhIOGDquGDlOGDnOGDouGDoOGDkOGDmuGDo-GDoOGDmCDhg5Hhg5Dhg5bhg5Dhg6Dhg5g!5e0!3m2!1sen!2sus!4v1594016328804!5m2!1sen!2sus"
                                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="iq-card">
                        <div class="iq-card-body text-center">

                            <h4>გურჯაანი:რუსთაველის ქუჩა 1ბ</h4>


                            <p class="mb-0">ტელ.: +995 353 220333</p>
                            <p class="mb-0">ფილიალი: რეგიონები

                            </p>
                            <div class="doc-profile">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5953.454464014192!2d45.796028!3d41.747976!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4046877360d8534b%3A0xae19df193ed940bf!2z4YOg4YOj4YOh4YOX4YOQ4YOV4YOU4YOa4YOY4YOhIOGDpeGDo-GDqeGDkCwgR3VyZHpoYWFuaQ!5e0!3m2!1sen!2sge!4v1594016402882!5m2!1sen!2sge"
                                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="iq-card">
                        <div class="iq-card-body text-center">

                            <h4>ფოთი:მერაბ კოსტავას 10/25</h4>


                            <p class="mb-0">ტელ.: +995 598 758 737</p>
                            <p class="mb-0">ფილიალი: რეგიონები

                            </p>
                            <div class="doc-profile">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d94672.8793032984!2d41.6046810227879!3d42.13899799558517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x405db8f761243629%3A0x8797cfa4fd29f38c!2sPoti!5e0!3m2!1sen!2sge!4v1594016521741!5m2!1sen!2sge"
                                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="iq-card">
                        <div class="iq-card-body text-center">

                            <h4>ბათუმი:რუსთაველის ქუჩა 61</h4>


                            <p class="mb-0">ტელ.: +995 032 249 72 00</p>
                            <p class="mb-0">ფილიალი: რეგიონები

                            </p>
                            <div class="doc-profile">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1490.7481459768098!2d41.620178!3d41.645018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4067866df4b29c91%3A0x9a7b98f030f5309!2s61%20Rustaveli%20Ave%2C%20Batumi%2C%20Georgia!5e0!3m2!1sen!2sus!4v1594016447034!5m2!1sen!2sus"
                                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@include("inc.footer")
@endsection