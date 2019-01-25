<footer class="footer">
    <div class="footer-body">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-logo">
                        <span>{{ config('app.name')}}</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-services">
                        <span>SERVICES</span>
                        <ul>
                            <li><a href="#">Services A</a></li>
                            <li><a href="#">Services B</a></li>
                            <li><a href="#">Services C</a></li>
                            <li><a href="#">Services D</a></li>
                            <li><a href="#">Services E</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-company">
                        <span>COMPANY</span>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-help">
                        <span>HELP</span>
                        <ul>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-foot bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 my-md-auto my-2">
                    <div class="social-media">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
                        <a href="mailto:laravue@outlook.com"><i class="fas fa-envelope"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=6287883653918" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-md-4 my-md-auto my-2">
                    <div class="google-play">
                        <span>Download our Android App</span>
                        <a href="#" target="_blank" class="btn btn-primary px-0 py-0 mx-2"><img src="{{ asset('img/google-play.png') }}" height="30px"></a>
                    </div>
                </div>
                <div class="col-md-4 my-md-auto my-2">
                    <div class="copyright">
                        <span>Copyright &copy; 2019 {{ config('app.name') }} | All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
