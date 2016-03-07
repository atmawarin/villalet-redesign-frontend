<?php include("./header.php") ?>
  <div id="content" class="check-availability">
    <div class="container">
      <section class="availability-box page-box">
        <h2>Check Availability</h2>
        <div class="row">
          <div class="col-md-7">
            <div class="image">
              <img src="./images/availability-image-placeholder.png" alt="">
            </div>
            <ul class="features">
              <li>Direct booking with the property manager</li>
              <li>Best price guarantee</li>
              <li>Secure payment via credit card</li>              
            </ul>
          </div>
          <div class="col-md-5">
            <h3 class="villa-name">Villalet Villa</h3>
            <div class="title-label">Please choose departure and arrival date and number of guest.</div>
            
            <!-- Form -->
            <form action=""> 
              <div class="row">
                <!-- Checkin & checkout -->
                <div class="col-md-6">
                  <label for="checkin">Checkin</label>
                  <input type="text" name="checkin" class="form-control arrivaldate" position="top" placeholder="dd/mm/yy" />
                </div>
                <div class="col-md-6">
                  <label for="checkout">Checkout</label>
                  <input type="text" name="checkout" class="form-control departuredate" position="top" placeholder="dd/mm/yy" />                
                </div>

                <!-- Adult -->
                <div class="col-md-4">
                  <label for="adult">Adult</label>
                  <select name="adult" class="form-control">
                    <option value="1">1</option>
                    <option value="2" selected="">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>

                <!-- Child -->
                <div class="col-md-4">
                  <label for="child">Child</label>
                  <select name="child" class="form-control">
                    <option value="1">1</option>
                    <option value="2" selected="">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>                  
                </div>

                <!-- Infant -->
                <div class="col-md-4">
                  <label for="infant">Infant</label>
                  <select name="infant" class="form-control">
                    <option value="1">1</option>
                    <option value="2" selected="">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>                  
                </div>

                <!-- Firmdate checkbox -->
                <div class="col-md-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">I don't have firms date
                    </label>
                  </div>                  
                </div>

                <!-- First name and last name -->
                <div class="col-md-6">
                  <label for="first-name">First Name</label>
                  <input type="text" name="first-name" class="form-control" placeholder="First Name" />
                </div>
                <div class="col-md-6">
                  <label for="last-name"></label>
                  <input type="text" name="last-name" class="form-control" placeholder="Last Name" />                  
                </div>

                <!-- Your Email -->
                <div class="col-md-12">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Email" />                  
                </div>
                
                <!-- Buttons -->
                <div class="buttons">
                  <div class="col-md-7">
                    <button class="button request-info">Request Information</button>
                  </div>
                  <div class="col-md-5">
                    <button class="button enquire-now">Enquire Now</button>
                  </div>
                  <div class="col-md-12 text-right">
                    <a href="#" class="cancel">Cancel</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
<?php include("./footer.php") ?>  
