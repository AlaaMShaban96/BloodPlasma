<footer class="container-fluid" id="gtco-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" id="contact">
                <form action="{{url('/send')}}" method="post">
                    @csrf
                    <h4> {{__('index/index.Contact_Us')}}</h4>
                    <input  type="text" name="name" class="form-control" placeholder="{{__('index/index.full_name')}}" required>
                    <input type="email" name="email"  class="form-control" placeholder="{{__('index/index.email')}}" required>
                    <textarea class="form-control" name="message" placeholder="{{__('index/index.message')}}" required></textarea>
                    <input type="submit" class="submit-button" value="Send">
                </form>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6">
                        <h4>{{__('index/index.links')}}</h4>
                        <ul class="nav flex-column company-nav">
                            <li class="nav-item"><span class="nav-link" >{{__('index/index.email')}} : info@nano-tech.ly</span></li>
                            <li class="nav-item"><span class="nav-link" >{{__('index/index.phone')}} : +218927780208 </span></li>
                            <li class="nav-item"><span class="nav-link" >{{__('index/index.loction')}} : {{__('index/index.tripoli')}}</span></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="#">News</a></li> --}}
                            {{-- <li class="nav-item"><a class="nav-link" href="#">FAQ's</a></li> --}}
                        </ul>
                        <h4 class="mt-5">{{__('index/index.fllow_us')}}</h4>
                        <ul class="nav follow-us-nav">
                            <li class="nav-item"><a class="nav-link pl-0" href="https://www.facebook.com/NanoTechgroup"><i class="fa fa-facebook"  aria-hidden="true"></i></a></li>
                           <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/NanoTechgroup"><i class="fa fa-twitter"  aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/NanoTechgroup"><i class="fa fa-google"  aria-hidden="true"></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/NanoTechgroup"><i class="fa fa-linkedin"  aria-hidden="true"></i></a></li> 
                        </ul>
                    </div>
                    <div class="col-6">
                        <h4>{{__('index/index.services')}}</h4>
                        <ul class="nav flex-column services-nav">
                            <li class="nav-item"><span class="nav-link" >Web Design</span></li>
                            <li class="nav-item"><span class="nav-link" >Web developer</span></li>
                            <li class="nav-item"><span class="nav-link" >Graphics Design</span></li>
                            <li class="nav-item"><span class="nav-link" >App Design</span></li>
                            <li class="nav-item"><span class="nav-link" >SEO</span></li>
                            <li class="nav-item"><span class="nav-link" >Marketing</span></li>
                            <li class="nav-item"><span class="nav-link" >Analytic</span></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </div>
                </div>
            </div>
        </div>
    </div>
</footer>