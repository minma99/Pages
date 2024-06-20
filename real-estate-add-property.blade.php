@extends('Front_Layout.index')
@section('FrontContent')

<div class="container mt-5 mb-md-4 py-5">
        <div class="row">
          <!-- Page content-->
          <div class="col-lg-8">
            <!-- Breadcrumb-->
            <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add property</li>
              </ol>
            </nav>
            <!-- Title-->
            <div class="mb-4">
              <h1 class="h2 mb-0">Add property</h1>
              <div class="d-lg-none pt-3 mb-2">65% content filled</div>
              <div class="progress d-lg-none mb-4" style="height: .25rem;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <!-- Basic info-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
              <h2 class="h4 mb-4"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2"></i>Basic info</h2>
              <div class="mb-3">
                <label class="form-label" for="ap-title">Title <span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="ap-title" placeholder="Title for your property" value="Pine Apartments" required><span class="form-text">48 characters left</span>
              </div>
              <div class="row">
                <div class="col-sm-6 mb-3">
                  <label class="form-label" for="ap-category">Category <span class="text-danger">*</span></label>
                  <select class="form-select" id="ap-category" required>
                    <option value="" disabled hidden>Choose category</option>
                    <option value="Rent">For rent</option>
                    <option value="Sell">For sale</option>
                  </select>
                </div>
                <div class="col-sm-6 mb-3">
                  <label class="form-label" for="ap-type">Property type <span class="text-danger">*</span></label>
                  <select class="form-select" id="ap-type" required>
                    <option value="" disabled hidden>Choose property type</option>
                    <option value="Apartment">Apartment</option>
                    <option value="House">House</option>
                    <option value="Commercial">Commercial</option>
                    <option value="Commercial">Daily rental</option>
                    <option value="New building">New building</option>
                  </select>
                </div>
              </div>
              <div class="form-label fw-bold pt-3 pb-2">Are you listing on Finder as part of a company?</div>
              <div class="form-check">
                <input class="form-check-input" type="radio" id="ap-company" name="ap-business-type">
                <label class="form-check-label" for="ap-company">I am a registered business</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" id="ap-individual" name="ap-business-type" checked>
                <label class="form-check-label" for="ap-individual">I am a private seller</label>
              </div>
            </section>
            <!-- Location-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="location">
              <h2 class="h4 mb-4"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>Location</h2>
              <div class="row">
                <div class="col-sm-6 mb-3">
                  <label class="form-label" for="ap-country">Country / region <span class="text-danger">*</span></label>
                  <select class="form-select" id="ap-country" required>
                    <option value="" disabled>Choose country</option>
                    <option value="Australia">Australia</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Canada">Canada</option>
                    <option value="Germany">Germany</option>
                    <option value="United States" selected>United States</option>
                  </select>
                </div>
                <div class="col-sm-6 mb-3">
                  <label class="form-label" for="ap-city">City <span class="text-danger">*</span></label>
                  <select class="form-select" id="ap-city" required>
                    <option value="" disabled>Choose city</option>
                    <option value="Chicago">Chicago</option>
                    <option value="Dallas">Dallas</option>
                    <option value="Los Angeles">Los Angeles</option>
                    <option value="New York" selected>New York</option>
                    <option value="San Diego">San Diego</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8 mb-3">
                  <label class="form-label" for="ap-district">District <span class="text-danger">*</span></label>
                  <select class="form-select" id="ap-district" required>
                    <option value="" disabled>Choose district</option>
                    <option value="Brooklyn">Brooklyn</option>
                    <option value="Manhattan">Manhattan</option>
                    <option value="Staten Island">Staten Island</option>
                    <option value="The Bronx">The Bronx</option>
                    <option value="Queens" selected>Queens</option>
                  </select>
                </div>
                <div class="col-sm-4 mb-3">
                  <label class="form-label" for="ap-zip">Zip code  <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="ap-zip" placeholder="Enter Zip code" value="67234" required>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="ap-address">Street address <span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="ap-address" value="28 Jackson Avenue" required>
              </div>
              <div class="form-label fw-bold pt-3 pb-2">Display on the map</div>
              <div class="interactive-map rounded-3" data-map-options="{&quot;mapLayer&quot;: &quot;https://api.maptiler.com/maps/pastel/{z}/{x}/{y}.png?key=5vRQzd34MMsINEyeKPIs&quot;, &quot;coordinates&quot;: [40.7447, -73.9485], &quot;zoom&quot;: 13, &quot;scrollWheelZoom&quot;: false, &quot;markers&quot;: [{&quot;coordinates&quot;: [40.7447, -73.9485], &quot;className&quot;: &quot;custom-marker-dot&quot;, &quot;popup&quot;: &quot;&lt;div class='p-3'&gt;&lt;h6 class='fs-base'&gt;Pine Apartments&lt;/h6&gt;&lt;p class='fs-xs text-muted pt-1 mt-n3 mb-0'&gt;28 Jackson Ave Long Island City, NY&lt;/p&gt;&lt;/div&gt;&quot;}]}" style="height: 250px;"></div>
            </section>
            <!-- Property details-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="details">
              <h2 class="h4 mb-4"><i class="fi-edit text-primary fs-5 mt-n1 me-2"></i>Property details</h2>
              <div class="mb-4" style="max-width: 25rem;">
                <label class="form-label" for="ap-area">Total area, sq.m</label>
                <input class="form-control" type="number" id="ap-area" min="20" placeholder="Enter your area" value="56" required>
              </div>
              <div class="mb-4">
                <label class="form-label d-block fw-bold mb-2 pb-1">Bedrooms</label>
                <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bedrooms">
                  <input class="btn-check" type="radio" id="studio" name="bedrooms">
                  <label class="btn btn-outline-secondary fw-normal" for="studio">Studio</label>
                  <input class="btn-check" type="radio" id="bedrooms-1" name="bedrooms">
                  <label class="btn btn-outline-secondary fw-normal" for="bedrooms-1">1</label>
                  <input class="btn-check" type="radio" id="bedrooms-2" name="bedrooms">
                  <label class="btn btn-outline-secondary fw-normal" for="bedrooms-2">2</label>
                  <input class="btn-check" type="radio" id="bedrooms-3" name="bedrooms">
                  <label class="btn btn-outline-secondary fw-normal" for="bedrooms-3">3</label>
                  <input class="btn-check" type="radio" id="bedrooms-4" name="bedrooms" checked>
                  <label class="btn btn-outline-secondary fw-normal" for="bedrooms-4">4</label>
                  <input class="btn-check" type="radio" id="bedrooms-5" name="bedrooms">
                  <label class="btn btn-outline-secondary fw-normal" for="bedrooms-5">5+</label>
                </div>
              </div>
              <div class="mb-4">
                <label class="form-label d-block fw-bold mb-2 pb-1">Bathrooms</label>
                <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bathrooms">
                  <input class="btn-check" type="radio" id="bathrooms-1" name="bathrooms">
                  <label class="btn btn-outline-secondary fw-normal" for="bathrooms-1">1</label>
                  <input class="btn-check" type="radio" id="bathrooms-2" name="bathrooms" checked>
                  <label class="btn btn-outline-secondary fw-normal" for="bathrooms-2">2</label>
                  <input class="btn-check" type="radio" id="bathrooms-3" name="bathrooms">
                  <label class="btn btn-outline-secondary fw-normal" for="bathrooms-3">3</label>
                  <input class="btn-check" type="radio" id="bathrooms-4" name="bathrooms">
                  <label class="btn btn-outline-secondary fw-normal" for="bathrooms-4">4</label>
                </div>
              </div>
              <div class="mb-4">
                <label class="form-label d-block fw-bold mb-2 pb-1">Parking spots</label>
                <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of parking spots">
                  <input class="btn-check" type="radio" id="parking-1" name="parking">
                  <label class="btn btn-outline-secondary fw-normal" for="parking-1">1</label>
                  <input class="btn-check" type="radio" id="parking-2" name="parking" checked>
                  <label class="btn btn-outline-secondary fw-normal" for="parking-2">2</label>
                  <input class="btn-check" type="radio" id="parking-3" name="parking">
                  <label class="btn btn-outline-secondary fw-normal" for="parking-3">3</label>
                  <input class="btn-check" type="radio" id="parking-4" name="parking">
                  <label class="btn btn-outline-secondary fw-normal" for="parking-4">4</label>
                </div>
              </div>
              <div class="mb-4">
                <label class="form-label d-block fw-bold mb-2 pb-1">Amenities</label>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="wifi" checked>
                      <label class="form-check-label" for="wifi">WiFi</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="air-condition" checked>
                      <label class="form-check-label" for="air-condition">Air conditioning</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="balcony">
                      <label class="form-check-label" for="balcony">Balcony</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="garage">
                      <label class="form-check-label" for="garage">Garage</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gym">
                      <label class="form-check-label" for="gym">Gym</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="free-parking" checked>
                      <label class="form-check-label" for="free-parking">Free parking</label>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="pets-friendly">
                      <label class="form-check-label" for="pets-friendly">Pets-friendly</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="pool">
                      <label class="form-check-label" for="pool">Pool</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="bar">
                      <label class="form-check-label" for="bar">Bar</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="tv" checked>
                      <label class="form-check-label" for="tv">TV</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="linens" checked>
                      <label class="form-check-label" for="linens">Linens</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="heating" checked>
                      <label class="form-check-label" for="heating">Heating</label>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="dishwasher">
                      <label class="form-check-label" for="dishwasher">Dishwasher</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="iron" checked>
                      <label class="form-check-label" for="iron">Iron</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="hair-dryer" checked>
                      <label class="form-check-label" for="hair-dryer">Hair dryer</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="kitchen" checked>
                      <label class="form-check-label" for="kitchen">Kitchen</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="breakfast">
                      <label class="form-check-label" for="breakfast">Breakfast</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="security-cameras">
                      <label class="form-check-label" for="security-cameras">Security cameras</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-4">
                <label class="form-label d-block fw-bold mb-2 pb-1">Pets</label>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="allow-cats">
                      <label class="form-check-label" for="allow-cats">Cats allowed</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="allow-dogs">
                      <label class="form-check-label" for="allow-dogs">Dogs allowed</label>
                    </div>
                  </div>
                </div>
              </div>
              <label class="form-label" for="ap-description">Description </label>
              <textarea class="form-control" id="ap-description" rows="5" placeholder="Describe your property"></textarea><span class="form-text">1500 characters left</span>
            </section>
            <!-- Price-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="price">
              <h2 class="h4 mb-4"><i class="fi-cash text-primary fs-5 mt-n1 me-2"></i>Price</h2>
              <label class="form-label" for="ap-price">Price <span class="text-danger">*</span></label>
              <div class="d-sm-flex">
                <select class="form-select w-25 me-2 mb-2">
                  <option value="usd">&#36;</option>
                  <option value="eur">&#8364;</option>
                  <option value="gbp">&#163;</option>
                  <option value="jpy">&#165;</option>
                </select>
                <input class="form-control w-100 me-2 mb-2" type="number" id="ap-price" min="200" step="50" required>
                <select class="form-select w-50 mb-2">
                  <option value="day">per day</option>
                  <option value="week">per week</option>
                  <option value="month" selected>per month</option>
                  <option value="year">per year</option>
                </select>
              </div>
            </section>
            <!-- Photos / video-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="photos">
              <h2 class="h4 mb-4"><i class="fi-image text-primary fs-5 mt-n1 me-2"></i>Photos / video</h2>
              <div class="alert alert-info mb-4" role="alert">
                <div class="d-flex"><i class="fi-alert-circle me-2 me-sm-3"></i>
                  <p class="fs-sm mb-1">The maximum photo size is 8 MB. Formats: jpeg, jpg, png. Put the main picture first.<br>The maximum video size is 10 MB. Formats: mp4, mov.</p>
                </div>
              </div>
              <input class="file-uploader file-uploader-grid" type="file" multiple data-max-file-size="10MB" accept="image/png, image/jpeg, video/mp4, video/mov" data-label-idle="&lt;div class=&quot;btn btn-primary mb-3&quot;&gt;&lt;i class=&quot;fi-cloud-upload me-1&quot;&gt;&lt;/i&gt;Upload photos / video&lt;/div&gt;&lt;br&gt;or drag them in">
            </section>
            <!-- Contacts-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="contacts">
              <h2 class="h4 mb-4"><i class="fi-phone text-primary fs-5 mt-n1 me-2"></i>Contacts</h2>
              <div class="row">
                <div class="col-sm-6 mb-3">
                  <label class="form-label" for="ap-fn">First name <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="ap-fn" value="Annette" placeholder="Enter your first name" required>
                </div>
                <div class="col-sm-6 mb-3">
                  <label class="form-label" for="ap-sn">Second name <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="ap-sn" value="Black" placeholder="Enter your second name" required>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 mb-3">
                  <label class="form-label" for="ap-email">Email<span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="ap-email" value="annette_black@email.com" placeholder="Enter your email">
                </div>
                <div class="col-sm-6 mb-3">
                  <label class="form-label" for="ap-phone">Phone number <span class="text-danger">*</span></label>
                  <input class="form-control" type="tel" id="ap-phone" data-format="custom" data-delimiter="-" data-blocks="3 3 4" value="302-555-0107" placeholder="000-000-0000">
                </div>
              </div>
              <label class="form-label" for="ap-company-name">Company</label>
              <input class="form-control" type="text" id="ap-company-name" placeholder="Enter company name">
            </section>
            <!-- Action buttons -->
            <section class="d-sm-flex justify-content-between pt-2"><a class="btn btn-outline-primary btn-lg d-block mb-3 mb-sm-2" href="#preview-modal" data-bs-toggle="modal"><i class="fi-eye-on ms-n1 me-2"></i>Preview</a><a class="btn btn-primary btn-lg d-block mb-2" href="real-estate-property-promotion.html">Save and continue</a></section>
          </div>
          <!-- Progress of completion-->
          <aside class="col-lg-3 offset-lg-1 d-none d-lg-block">
            <div class="sticky-top pt-5">
              <h6 class="pt-5 mt-3 mb-2">65% content filled</h6>
              <div class="progress mb-4" style="height: .25rem;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <ul class="list-unstyled">
                <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#basic-info" data-scroll data-scroll-offset="20">Basic info</a></li>
                <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#location" data-scroll data-scroll-offset="20">Location</a></li>
                <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#details" data-scroll data-scroll-offset="20">Property details</a></li>
                <li class="d-flex align-items-center"><i class="fi-check text-muted me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#price" data-scroll data-scroll-offset="20">Price</a></li>
                <li class="d-flex align-items-center"><i class="fi-check text-muted me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#photos" data-scroll data-scroll-offset="20">Photos / video</a></li>
                <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#contacts" data-scroll data-scroll-offset="20">Contacts</a></li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
  @endsection
