<?php include("./header.php") ?>
  <div id="content" class="search-result">
    <section class="search-result-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
          <!-- Sidebar -->
            <div class="sidebar">
              <!-- Location finder -->
              <div class="location-finder">
                <span class="location-label">Location</span>
                <div class="location-finder-wrapper">
                  <select class="location-select form-control">
                    <option value="Bali">Bali</option>
                    <option value="Canggu">Canggu</option>
                    <option value="Koh Samui">Koh Samui</option>
                  </select>
                </div>
              </div>

              <div class="sidebar-button">

                <div class="search-button-wrapper">
                  <a href="#" class="button update-search">
                    Search
                  </a>                  
                </div>

                <div class="search-button-wrapper">
                  <a href="#" class="button clear-search">
                    Clear
                  </a>
                </div>
              </div>

              <!-- Price per night -->
              <div class="price-per-night">
                <h5>Price Per Night</h5>
                <div class="price-range-label">
                  <div class="lowest-price pull-left">USD$<span class="leftLabel">0</span></div>
                  <div class="highest-price pull-right">USD$<span class="rightLabel">0</span> +</div>
                </div>
                <div class="price-range">
                  <div class="nstSlider" data-range_min="0" data-range_max="1500" 
                                         data-cur_min="20"    data-cur_max="500">

                      <div class="bar"></div>
                      <div class="leftGrip"></div>
                      <div class="rightGrip"></div>
                  </div>
                </div>
              </div>

              <!-- Search filter -->
              <div class="search-filter">

                <!-- Bedroom -->
                <div class="filter-bedroom filter-item">
                  <a class="filter-anchor" data-toggle="collapse" href="#filter-bedroom" aria-controls="filter-bedroom">Bedroom</a>
                  <div class="collapse in" id="filter-bedroom">
                    <div class="row">
                      <div class="col-xs-6">
                        <div class="checkbox">
                            <input id="checkbox-bedroom-1" type="checkbox" checked="">
                            <label for="checkbox-bedroom-1">1</label>
                        </div>

                        <div class="checkbox">
                            <input id="checkbox-bedroom-2" type="checkbox" />
                            <label for="checkbox-bedroom-2">2</label>
                        </div>

                        <div class="checkbox">
                            <input id="checkbox-bedroom-3" type="checkbox" />
                            <label for="checkbox-bedroom-3">3</label>
                        </div>

                        <div class="checkbox">
                            <input id="checkbox-bedroom-4" type="checkbox" />
                            <label for="checkbox-bedroom-4">4</label>
                        </div>

                        <div class="checkbox">
                            <input id="checkbox-bedroom-5" type="checkbox" />
                            <label for="checkbox-bedroom-5">5</label>
                        </div>                        
                      </div>
                      <div class="col-xs-6">
                        <div class="checkbox">
                            <input id="checkbox-bedroom-6" type="checkbox" />
                            <label for="checkbox-bedroom-6">6</label>
                        </div>

                        <div class="checkbox">
                            <input id="checkbox-bedroom-7" type="checkbox" />
                            <label for="checkbox-bedroom-7">7</label>
                        </div>

                        <div class="checkbox">
                            <input id="checkbox-bedroom-8" type="checkbox" />
                            <label for="checkbox-bedroom-8">8</label>
                        </div>

                        <div class="checkbox">
                            <input id="checkbox-bedroom-9" type="checkbox" />
                            <label for="checkbox-bedroom-9">9</label>
                        </div>

                        <div class="checkbox">
                            <input id="checkbox-bedroom-10" type="checkbox" />
                            <label for="checkbox-bedroom-10">10</label>
                        </div>                                                
                      </div>
                    </div>                  
                  </div>
                </div>

                <!-- Region -->
                <div class="filter-region filter-item">
                  <a class="filter-anchor collapsed" data-toggle="collapse" href="#filter-region" aria-expanded="false" aria-controls="filter-region">Region</a>
                  <div class="collapse" id="filter-region">
                      <div class="checkbox">
                          <input id="checkbox-region-1" type="checkbox" />
                          <label for="checkbox-region-1">Region 1</label>
                      </div>
                  
                      <div class="checkbox">
                          <input id="checkbox-region-2" type="checkbox" />
                          <label for="checkbox-region-2">Region 2</label>
                      </div>
                  </div>
                </div>

                <!-- Experiences -->
                <div class="filter-experiences filter-item">
                  <a class="filter-anchor" data-toggle="collapse" href="#filter-experiences" aria-expanded="false" aria-controls="filter-experiences">Experiences</a>
                  <div class="collapse in" id="filter-experiences">
                      <div class="checkbox">
                          <input id="checkbox-experience-1" type="checkbox" checked="" />
                          <label for="checkbox-experience-1">Beachfront</label>
                      </div>
                  
                      <div class="checkbox">
                          <input id="checkbox-experience-2" type="checkbox" />
                          <label for="checkbox-experience-2">Ocean View</label>
                      </div>
                      <div class="checkbox">
                          <input id="checkbox-experience-3" type="checkbox" />
                          <label for="checkbox-experience-3">Beach Walking distance</label>
                      </div>
                  
                      <div class="checkbox">
                          <input id="checkbox-experience-4" type="checkbox" />
                          <label for="checkbox-experience-4">Wedding</label>
                      </div>

                      <div class="checkbox">
                          <input id="checkbox-experience-5" type="checkbox" />
                          <label for="checkbox-experience-5">Surfing</label>
                      </div>
                  
                      <div class="checkbox">
                          <input id="checkbox-experience-6" type="checkbox" />
                          <label for="checkbox-experience-6">Child Friendly</label>
                      </div>
                      <div class="checkbox">
                          <input id="checkbox-experience-7" type="checkbox" />
                          <label for="checkbox-experience-7">Partly</label>
                      </div>
                  </div>
                </div>

                <!-- Facilities -->
                <div class="filter-facilities filter-item">
                  <a class="filter-anchor collapsed" data-toggle="collapse" href="#filter-facilities" aria-expanded="false" aria-controls="filter-facilities">Facilities</a>
                  <div class="collapse" id="filter-facilities">
                    <div class="checkbox">
                        <input id="checkbox-facilities-1" type="checkbox" />
                        <label for="checkbox-facilities-1">Facilities 1</label>
                    </div>
                                    
                    <div class="checkbox">
                        <input id="checkbox-facilities-2" type="checkbox" />
                        <label for="checkbox-facilities-2">Facilities 2</label>
                    </div>
                    
                  </div>
                </div>

                <!-- Property Type -->
                <div class="filter-property-type filter-item">
                  <a class="filter-anchor collapsed" data-toggle="collapse" href="#filter-property-type" aria-expanded="false" aria-controls="filter-property-type">Property Type</a>
                  <div class="collapse" id="filter-property-type">
                  
                    <div class="checkbox">
                        <input id="checkbox-property-1" type="checkbox" />
                        <label for="checkbox-property-1">Property 1</label>
                    </div>    

                    <div class="checkbox">
                        <input id="checkbox-property-2" type="checkbox" />
                        <label for="checkbox-property-2">Property 2</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /// Search filter -->
            </div>
          </div>
          <div class="col-md-8">
            <div class="content">

              <!-- Top filter -->
              <div class="top-filter">
                <div class="header">
                  <div class="pull-left">
                    All Villas In Villalet
                  </div>
                  <div class="pull-right">
                    1758 Villas
                  </div>
                </div>

                <ul class="list-inline">
                  <li><a href="#">Indonesia</a></li>
                  <li><a href="#">Thailand</a></li>
                  <li><a href="#">Sri Langka</a></li>
                  <li><a href="#">Fiji</a></li>
                  <li><a href="#">Malaysia</a></li>
                  <li><a href="#">Philiphines</a></li>
                  <li><a href="#">Australia</a></li>
                  <li><a href="#">Switzerland</a></li>
                </ul>
              </div>

              <!-- Content tab -->
              <div class="tabs">
                <ul class="nav nav-tabs pull-left" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#list" aria-controls="list" role="tab" data-toggle="tab">
                      <i class="icon-list-ul"></i> List
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#map" aria-controls="map" role="tab" data-toggle="tab">
                      <i class="icon-map-marker"></i> Map
                    </a>
                  </li>
                </ul>

                <select name="" id="" class="pull-right">
                  <option value="#">Featured</option>
                  <option value="#">Popular</option>
                  <option value="#">Name</option>
                </select>
              </div>

              <!-- Content -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="list">
                  <!-- Search result list -->
                  
                  <!-- Item 1 -->
                  <div class="search-item">
                    <!-- Item -->
                    <div class="villa-label">
                      Long stay discount
                    </div>

                    <div class="image">
                      <div class="image-bg" style="background-image: url(./images/search-1.jpg)"></div>
                      <div class="overlay">
                        <div class="villa-name pull-left">
                          Villa Atas Ombak <span>Uluwatu, Bali, Indonesia</span>
                        </div>
                        <div class="count pull-right">
                          <i class="icon-bed"></i> <span>3</span>
                          <i class="icon-bath"></i> <span>4</span>
                        </div>
                      </div>
                    </div>

                    <div class="details">
                        <div class="col-md-8">
                          <!-- Villa name -->
                          <div class="villa-detail">
                            <div class="name">
                              <!-- Name -->
                              <h3 class="pull-left">
                                <a href="#">Grand Cliff Front Residence</a>
                              </h3>

                              <!-- Add to shortlist -->
                              <div class="add-to-list pull-right">
                                  <span>Add to Shortlist</span> 
                                  <i class="icon-star"></i>
                              </div>
                            </div>  
                            <p>Imagine a spectacular cliff top at the edge of the world. Imagine an endless blue on blue panorama of tropical sea and sky. Imagine the most opulent residence in Bali.</p>    
                          </div>                          
                        </div>
                        <div class="col-md-4">
                          <!-- Villa booking price -->
                          <div class="price">
                            <div class="per-night-label">
                              Per Night <span>From</span>
                            </div>
                            <div class="price-label">
                              USD <span>11,288</span>
                            </div>
                            <div class="fee-label">
                              Including tax & services fees
                            </div>
                            <a href="./check-availability.html" class="button">View Detail</a>
                          </div>                          
                        </div>
                    </div>
                  </div>       

                  <!-- Item 2 -->
                  <div class="search-item">
                    <!-- Item -->
                    <div class="villa-label">
                      Long stay discount
                    </div>

                    <div class="image">
                      <div class="image-bg" style="background-image: url(./images/search-2.jpg)"></div>
                      <div class="overlay">
                        <div class="villa-name pull-left">
                          Villa Atas Ombak <span>Uluwatu, Bali, Indonesia</span>
                        </div>
                        <div class="count pull-right">
                          <i class="icon-bed"></i> <span>3</span>
                          <i class="icon-bath"></i> <span>4</span>
                        </div>
                      </div>
                    </div>

                    <div class="details">
                        <div class="col-md-8">
                          <!-- Villa name -->
                          <div class="villa-detail">
                            <div class="name">
                              <!-- Name -->
                              <h3 class="pull-left">
                                <a href="#">Grand Cliff Front Residence</a>
                              </h3>

                              <!-- Add to shortlist -->
                              <div class="add-to-list pull-right">
                                  <span>Add to Shortlist</span> 
                                  <i class="icon-star"></i>
                              </div>
                            </div>  
                            <p>Imagine a spectacular cliff top at the edge of the world. Imagine an endless blue on blue panorama of tropical sea and sky. Imagine the most opulent residence in Bali.</p>    
                          </div>                          
                        </div>
                        <div class="col-md-4">
                          <!-- Villa booking price -->
                          <div class="price">
                            <div class="per-night-label">
                              Per Night <span>From</span>
                            </div>
                            <div class="price-label">
                              USD <span>11,288</span>
                            </div>
                            <div class="fee-label">
                              Including tax & services fees
                            </div>
                            <a href="./check-availability.html" class="button">View Detail</a>
                          </div>                          
                        </div>
                    </div>
                  </div>  

                  <!-- Item 3 -->
                  <div class="search-item">
                    <!-- Item -->
                    <div class="villa-label">
                      Long stay discount
                    </div>

                    <div class="image">
                      <div class="image-bg" style="background-image: url(./images/search-3.jpg)"></div>
                      <div class="overlay">
                        <div class="villa-name pull-left">
                          Villa Atas Ombak <span>Uluwatu, Bali, Indonesia</span>
                        </div>
                        <div class="count pull-right">
                          <i class="icon-bed"></i> <span>3</span>
                          <i class="icon-bath"></i> <span>4</span>
                        </div>
                      </div>
                    </div>

                    <div class="details">
                        <div class="col-md-8">
                          <!-- Villa name -->
                          <div class="villa-detail">
                            <div class="name">
                              <!-- Name -->
                              <h3 class="pull-left">
                                <a href="#">Grand Cliff Front Residence</a>
                              </h3>

                              <!-- Add to shortlist -->
                              <div class="add-to-list pull-right">
                                  <span>Add to Shortlist</span> 
                                  <i class="icon-star"></i>
                              </div>
                            </div>  
                            <p>Imagine a spectacular cliff top at the edge of the world. Imagine an endless blue on blue panorama of tropical sea and sky. Imagine the most opulent residence in Bali.</p>    
                          </div>                          
                        </div>
                        <div class="col-md-4">
                          <!-- Villa booking price -->
                          <div class="price">
                            <div class="per-night-label">
                              Per Night <span>From</span>
                            </div>
                            <div class="price-label">
                              USD <span>11,288</span>
                            </div>
                            <div class="fee-label">
                              Including tax & services fees
                            </div>
                            <a href="./check-availability.html" class="button">View Detail</a>
                          </div>                          
                        </div>
                    </div>
                  </div>

                  <!-- Pagination -->
                  <div class="pagination">
                    <a href="#"class="first">First</a>
                    <a href="#"class="prev">Prev</a>
                    <a href="#" class="page">1</a>
                    <a href="#" class="page">2</a>
                    <a href="#" class="page">3</a>
                    <a href="#" class="page">4</a>
                    <a href="#" class="page">5</a>
                    <span class="current">6</span>
                    <a href="#" class="page">7</a>
                    <a href="#" class="page">8</a>
                    <a href="#" class="page">9</a>
                    <a href="#" class="page">10...</a>
                    <a href="#" class="page">90</a>
                    <a href="#"class="next">Next</a>
                    <a href="#"class="last">Last</a>
                  </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="map">
                  <div class="search-map-wrapper">
                    <div class="search-map"></div>
                  </div>

                  <section class="browse-wrapper browse-by-experience">
                      <h4>Browse by Experience:</h4>
                      <ul>
                        <li><a href="#">Bars / Nightlife area</a></li>
                        <li><a href="#">Wedding</a></li>
                        <li><a href="#">Cultural/Traditional</a></li>
                        <li><a href="#">Surfing beachfront</a></li>
                        <li><a href="#">Ocean View</a></li>
                        <li><a href="#">Beach Walking Distance</a></li>
                        <li><a href="#">Shopping</a></li>
                        <li><a href="#">Restaurant Area</a></li>
                        <li><a href="#">Family</a></li>
                        <li><a href="#">Child Friendly</a></li>
                        <li><a href="#">Off the beaten track</a></li>
                        <li><a href="#">Retreat</a></li>
                        <li><a href="#">Party</a></li>
                      </ul>
                  </section>

                  <section class="browse-wrapper browse-by-experience">
                      <h4>Browse by Number of Bedrooms:</h4>
                      <ul>
                        <li><a href="#">1 Bedroom</a></li>
                        <li><a href="#">2 Bedrooms</a></li>
                        <li><a href="#">3 Bedrooms</a></li>
                        <li><a href="#">4 Bedrooms</a></li>
                        <li><a href="#">5 Bedrooms</a></li>
                        <li><a href="#">6 Bedrooms</a></li>
                        <li><a href="#">7 Bedrooms</a></li>
                        <li><a href="#">8 Bedrooms</a></li>
                        <li><a href="#">9 Bedrooms</a></li>
                        <li><a href="#">10+ Bedrooms</a></li>
                      </ul>
                  </section>

                  <section class="browse-wrapper browse-by-type">
                      <h4>Browse by Property Type:</h4>
                      <ul>
                        <li><a href="#">Private Villa</a></li>
                        <li><a href="#">Villa Complex</a></li>
                      </ul>
                  </section>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php include("./footer.php") ?> 
