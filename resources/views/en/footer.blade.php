    <!-- Footer | START -->
    <footer>
        <div id="footer">
            <div class="centre">
                <!-- Subscribe / Social | START -->
                <div class="news">
                    <div class="title"><span>Newsletter</span></div>
                    <div class="subscribe">
                        {!! Form::open(['route' => 'newsletterIngles', 'id' => '', '', 'enctype'=>'multipart/form-data', 'class' => '']) !!}                 
                            <input name="str_email" type="email" placeholder="Email Address" required/>
                            <button><span data-hover="Subscribe">Subscribe</span></button>
                            {!! csrf_field() !!} 
                            
                         {!! Form::close() !!}
                    </div>
                    <div class="social">
                        <a target="_blank" href="https://es-la.facebook.com/Hippocampus-Vacation-Club-210418352330415/" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/HippocampusVC" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://www.instagram.com/hippocampusvc/" title="Instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <!-- Subscribe / Social | END -->
                <!-- Contact Details | START -->
            	<div class="contact">
                	<p>
                		<strong class="phone"> <i class="fa fa-phone-square"></i> +58 (295) 331.13.00</strong><br />              	
                    	<i class="fa fa-map-marker"></i> Street of Christ, building Hippocampus complex, neighborhood Caranta.<br /> Margarita Island. Venezuela
                	</p>
                </div>
                <!-- Contact Details | END -->

                <div class="dark"></div>
            </div>
        </div>
        <!-- Footer Links | START -->
        <div id="footerlinks">
            <div class="centre">
                <span>
                    &copy; 
                    <script>
                        var d = new Date(); document.write(d.getFullYear());
                    </script> 
                    <strong>Hippocampus Vacation Club</strong>
                </span>
                <a href="{{ route('homeIngles')}}">
                    <i class="fa fa-home" aria-hidden="true"></i> Home
                </a>
                <a href="#">
                    Sitemap
                </a>

                <a href="https://www.behance.net/ezebarazar16c8" target="_blank" title="Web Developer"> <i class="fa fa-code"></i> Neil Barazarte</a> 

            </div>
        </div>
        <!-- Footer Links | END -->
    </footer>
    <!-- Footer | END -->