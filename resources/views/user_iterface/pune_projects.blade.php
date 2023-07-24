@include('user_iterface.layouts.header')
<section class="pune-banner">
  <div class="pune-bnr-con">
    <span>
      <img src="{{url('user_interface/image/pune-banner.webp')}}">
    </span>

    <div class="pune-bnr-txt">
      <p class="pune-sb-hdng">Documenting, Mapping & Conserving</p>
      <h1 class="pune-hdng">The Heritage Temples of India</h1>
    </div>
  </div>
</section>


<!-- -----------------main-section-start--------------- -->


<section class="main-box">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="side-bar">
            <aside>
              <h2 class="side-bar-hdng">Category</h2>
               <div class="fltr-btn-bx" id="show-bttn">
                <div class="btn-flx">
                  <div>
                 <a href="#" class="fltr-btn"><i class="fa-solid fa-xmark"></i></a>
                 </div>
                 <div><p>Filter</p></div>
               </div>
               </div>
            <div class="visible-menu" id="show-fltr">
              <div class="side-bx">
               <p class="side-sub">Featured</p>
                <div class="radio-btn">
                  <div class="chk">
                    <input type="checkbox">
                  </div>
                  <div class="ftr"><p>Featured</p></div>
                  <div><p>(5)</p></div>
                </div>
              </div>

              <div class="side-bx">
               <p class="side-sub">Temples At Risk</p>
                <div class="radio-btn">
                  <div class="chk">
                    <input type="checkbox">
                  </div>
                  <div class="ftr"><p>Temples At Risk</p></div>
                  <div><p>(21)</p></div>
                </div>
              </div>

              <div class="side-bx">
               <p class="side-sub">Deity</p>
                <div class="radio-btn">
                  <div class="chk">
                    <input type="checkbox">
                  </div>
                  <div class="ftr"><p>Shiva</p></div>
                  <div><p>(78)</p></div>
                </div>
                <div class="radio-btn">
                  <div class="chk">
                    <input type="checkbox">
                  </div>
                  <div class="ftr"><p>Vishnu</p></div>
                  <div><p>(8)</p></div>
                </div>
                <div class="radio-btn">
                  <div class="chk">
                    <input type="checkbox">
                  </div>
                  <div class="ftr"><p>Devi</p></div>
                  <div><p>(8)</p></div>
                </div>
                <div class="radio-btn">
                  <div class="chk">
                    <input type="checkbox">
                  </div>
                  <div class="ftr"><p>Ganesh</p></div>
                  <div><p>(4)</p></div>
                </div>
                <div class="radio-btn">
                  <div class="chk">
                    <input type="checkbox">
                  </div>
                  <div class="ftr"><p>Maruti</p></div>
                  <div><p>(6)</p></div>
                </div>
                <div class="radio-btn">
                  <div class="chk">
                    <input type="checkbox">
                  </div>
                  <div class="ftr"><p>Saints & Yogis</p></div>
                  <div><p>(12)</p></div>
                </div>
                <div class="radio-btn">
                  <div class="chk">
                    <input type="checkbox">
                  </div>
                  <div class="ftr"><p>Tridal</p></div>
                  <div><p>(3)</p></div>
                </div>
              </div>

              <div class="side-bx">
               <p class="side-sub">Time Period</p>
                <div class="radio-btn">
                  <div class="chk">
                    <input type="checkbox">
                  </div>
                  <div class="ftr"><p>3rd-13th centuruy</p></div>
                  <div><p>(19)</p></div>
                </div>
                <div class="radio-btn">
                  <div class="chk">
                    <input type="checkbox">
                  </div>
                  <div class="ftr"><p>14th-16th century</p></div>
                  <div><p>(50)</p></div>
                </div>
                <div class="radio-btn">
                  <div class="chk">
                    <input type="checkbox">
                  </div>
                  <div class="ftr"><p>18th-19th century</p></div>
                  <div><p>(38)</p></div>
                </div>
              </div>
            </div>
            </aside>
        </div>
      </div>



      
      <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Kal-bhairavanath Temple, Mukhai</h5>
                    <p class="card-sub">May 21st 1612 CE | Mukhai</p>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Vitthal Temple, Daund</h5>
                    <p class="card-sub">c. 13th Century CE | Daund</p>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Panchaling Mahadev Temple, Junnar</h5>
                    <p class="card-sub">18th Century CE | Junnar</p>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Other temples, Narayangaon</h5>
                    <p class="card-sub">18th and 19th centuries | Narayangaon</p>
                  </div>

                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Haribaba Samadhi Temple, Narayangaon</h5>
                    <p class="card-sub">18th and 19th centuries | Narayangaon</p>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Haribaba Samadhi Temple, Narayangaon</h5>
                    <p class="card-sub">1777 CE to 28th March 1808 CE | Narayangaon </p>
                  </div>
                  <div class="tag">
                    Featured
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Other Temples, Pimple-Jagtap</h5>
                    <p class="card-sub">18th and 19th centuries | Pimple-Jagtap</p>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Dharmanath Temple, Pimple-Jagtap</h5>
                    <p class="card-sub">24th August, 1779 CE | Pimple-Jagtap</p>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Siddheshvar Temple, Sasvad</h5>
                    <p class="card-sub">13th and 18th centuries | Sasvad</p>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Kukadeshvar Temple, Pur</h5>
                    <p class="card-sub">c. 12th-13th century CE | Pur</p>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Saradeshvar Temple, (Vishnu Temple), Palasdev</h5>
                    <p class="card-sub">1157 CE | Palasdev</p>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Palasanath temple, Palasdev</h5>
                    <p class="card-sub">c.13th century CE | Palasdev</p>
                  </div>
                  <div class="tag-1">
                    Yes
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Ramayana Temple, Palasdev</h5>
                    <p class="card-sub">13th century | Palasdev</p>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="blog">
              <a href="#">
                <div class="card">
                  <img src="{{url('user_interface/assets/image/pune-2.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-hdng">Siddheshvar Temple, Korhale Budruk</h5>
                    <p class="card-sub">13th century CE | Korhale Budruk</p>
                  </div>
                </div>
              </a>
              </div>
            </div>
        </div>
      </div>


    </div>
  </div>
</section>


@include('user_iterface.layouts.footer')
