<!-- Footer -->
<footer id="charity-footer" class="charity-footer-one">
@guest()

    <!-- Footer Newslatter -->
        <div class="charity-newslatter">
            <div class="container">
                <div class="row">
                    <aside class="col-md-6">
                        <h2>Sign up for newslatter</h2>
                        <p>Submit your email and stay in tuch by notify our news and stay with us</p>
                    </aside>
                    <aside class="col-md-6">
                        <form>
                            <input type="text" placeholder="Enter Your Email">
                            <label>
                                <input type="submit" value="Subscribe Now">
                                <i class="far fa-paper-plane"></i>
                            </label>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
        <!-- Footer Newslatter -->
    @endguest


    <!-- Footer Widget -->
    <div class="charity-footer-widget">
        <div class="container">
            <div class="row">



            </div>



            <!-- CopyRight -->
            <div class="charity-copyright">
                <a href="#" class="back-top charity-bgcolor"><i class="fa fa-angle-up"></i></a>
                @if (Date('m') == 01 || Date('m') == 02 ||Date('m') == 03 ||Date('m') == 04 ||Date('m') == 05 || Date('m') == 06 )
                <p> Copyright © {{ Date('Y')-1  }}-{{ Date('Y') }} Rotaract District 9125, Nigeria.   All Right
                    Reserved -  Developed by <a href="https://waterways.i.ng" class="text-danger">WATERWAYS</a></p>
                @else
                <p> Copyright © {{ Date('Y')  }}-{{ Date('Y')+1 }} Rotaract District 9110, Nigeria. All Right
                    Reserved - Developed by <a href="https://waterways.i.ng">WATERWAYS</a> </p>
                @endif
                <ul>
                    <li><a href="404.html">Terms and conditions</a></li>
                    <li><a href="404.html">Privacy policy</a></li>
                </ul>
            </div>
            <!-- CopyRight -->
        </div>
    </div>
    <!-- Footer Widget -->

</footer>
<!-- Footer -->

<!-- Search Modal -->
<div class="modal fade searchmodal" id="searchModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <a href="#" class="charity-close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                <form>
                    <input type="text" value="Type Your Keyword" onblur="if(this.value == '') { this.value ='Type Your Keyword'; }" onfocus="if(this.value =='Type Your Keyword') { this.value = ''; }">
                    <input type="submit" value="">
                    <i class="fa fa-search"></i>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- jQuery -->

