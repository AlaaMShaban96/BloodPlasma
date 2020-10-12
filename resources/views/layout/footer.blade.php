<footer class="container-fluid" id="gtco-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" id="contact">
                <form action="{{url('/send')}}" method="post">
                    @csrf
                    <h4> Contact Us </h4>
                    <input  type="text" name="name" class="form-control" placeholder="Full Name" required>
                    <input type="email" name="email"  class="form-control" placeholder="Email Address" required>
                    <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                    <input type="submit" class="submit-button" value="Send">
                </form>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6">
                        <h4>Company</h4>
                        <ul class="nav flex-column company-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="#">News</a></li> --}}
                            {{-- <li class="nav-item"><a class="nav-link" href="#">FAQ's</a></li> --}}
                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        </ul>
                        <h4 class="mt-5">Fllow Us</h4>
                        <ul class="nav follow-us-nav">
                            <li class="nav-item"><a class="nav-link pl-0" href="https://www.facebook.com/NanoTechgroup"><i class="fa fa-facebook"  aria-hidden="true"></i></a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/NanoTechgroup"><i class="fa fa-twitter"  aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/NanoTechgroup"><i class="fa fa-google"  aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/NanoTechgroup"><i class="fa fa-linkedin"  aria-hidden="true"></i></a></li> --}}
                        </ul>
                    </div>
                    <div class="col-6">
                        <h4>Services</h4>
                        <ul class="nav flex-column services-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Web Design</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Web developer</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Graphics Design</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">App Design</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">SEO</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Marketing</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Analytic</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </div>
                </div>
            </div>
        </div>
    </div>
</footer>