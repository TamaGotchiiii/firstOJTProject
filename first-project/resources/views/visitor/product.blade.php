@extends('master')

@section('content')

    <div class="main-container">
        <div class="container">
            <div class="row">
                <!-- this (.mobile-filter-sidebar) part will be position fixed in mobile version -->
                <div class="col-sm-3 page-sidebar mobile-filter-sidebar">
                    @component('visitor.component.categoryselector')
                    ini komponen pemilihan kategori
                    @endcomponent
                </div>
                <!--/.page-side-bar-->
                <div class="col-sm-9 page-content col-thin-left">

                    <div class="category-list">
                        <div class="tab-box ">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs add-tabs" role="tablist">
                                <li class="active"><a href="#allAds" role="tab" data-toggle="tab">Semua Barang <span
                                        class="badge">228,705</span></a></li>
                            </ul>
                            <div class="tab-filter">
                                <select class="selectpicker" data-style="btn-select" data-width="auto">
                                    <option>Urutkan dari</option>
                                    <option>Murah ke Mahal</option>
                                    <option>Mahal ke Murah</option>
                                </select>
                            </div>
                        </div>
                        <!--/.tab-box-->

                        <div class="listing-filter">
                            <div class="pull-right col-xs-12 text-right listing-view-action"><span
                                    class="list-view active"><i class="  icon-th"></i></span>
                                    <span class="grid-view "><i class=" icon-th-large "></i></span></div>
                            <div style="clear:both"></div>
                        </div>
                        <!--/.listing-filter-->

                        <!-- Mobile Filter bar-->
                        <div class="mobile-filter-bar col-lg-12  ">
                            <ul class="list-unstyled list-inline no-margin no-padding">
                                <li class="filter-toggle">
                                    <a class="">
                                        <i class="  icon-th-list"></i>
                                        Filters
                                    </a>
                                </li>
                                <li>


                                    <div class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle"><i class="caret "></i> Short
                                            by </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="" rel="nofollow">Relevance</a></li>
                                            <li><a href="" rel="nofollow">Date</a></li>
                                            <li><a href="" rel="nofollow">Company</a></li>
                                        </ul>
                                    </div>

                                </li>
                            </ul>
                        </div>
                        <div class="menu-overly-mask"></div>
                        <!-- Mobile Filter bar End-->


                        <div class="adds-wrapper property-list">
                            <div class="item-list">


                                <div class="col-sm-3 no-padding photobox">
                                    <div class="add-image"> <a href="property-details.html"><img
                                            class="thumbnail no-margin" src="images/house/thumb/2.jpeg"
                                            alt="img"></a></div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-6 add-desc-box">
                                    <div class="add-details">
                                        <h5 class="add-title"><a href="property-details.html">
                                            Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                        <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i
                                                class="fa fa-map-marker"></i> Map</a>  </span> </span>

                                    </div>
                                </div>
                                <!--/.add-desc-box-->
                                <div class="col-sm-3 text-right  price-box">


                                           <a class="btn btn-border-thin  btn-save"   title="Tambahkan ke List Belanja" data-placement="left">
                                        <i class="glyphicon glyphicon-list-alt"></i>
                                    </a>


                                    <h3 class="item-price "> <strong>$2400 - $4260 </strong></h3>
                                     <div style="clear: both"></div>

                                    <a class="btn btn-success btn-sm bold" href="property-details.html">
                                        Tambahkan ke Cart <i class="fa fa-shopping-cart"></i>
                                    </a>


                                </div>
                                <!--/.add-desc-box-->
                            </div>
                            <!--/.item-list-->


                            <!--/.item-list-->


                        </div>
                        <!--/.adds-wrapper-->

                        <div class="tab-box  save-search-bar text-center"><a href=""> <i class=" icon-star-empty"></i>
                            Save Search </a></div>
                    </div>
                    <div class="pagination-bar text-center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"> ...</a></li>
                            <li><a class="pagination-btn" href="#">Next &raquo;</a></li>
                        </ul>
                    </div>
                    <!--/.pagination-bar -->

                    <!-- <div class="post-promo text-center">
                        <h2> Do you get anything for sell ? </h2>
                        <h5>Sell your products online FOR FREE. It's easier than you think !</h5>
                        <a href="post-ads.html" class="btn btn-lg btn-border btn-post btn-danger">Post a Free Ad </a>
                    </div> -->
                    <!--/.post-promo-->

                </div>
                <!--/.page-content-->

            </div>
        </div>
    </div>


@endsection

@section('searchbar')
<div class="search-row-wrapper">
        <div class="container text-center">
            <div class="col-sm-6">
                <input class="form-control keyword" type="text" placeholder="Masukkan keyword pencarian...">
            </div>
            <div class="col-sm-3">
                <select class="form-control" name="category" id="search-category">
                    <option selected="selected" value="">Semua Kategori</option>
                    <option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
                        Vehicles -
                    </option>
                    <option value="Cars"> Cars</option>
                    <option value="Commercial vehicles"> Commercial vehicles</option>
                    <option value="Motorcycles"> Motorcycles</option>
                    <option value="Motorcycle Equipment"> Car &amp; Motorcycle Equipment</option>
                    <option value="Boats"> Boats</option>
                    <option value="Vehicles"> Other Vehicles</option>
                    <option value="House" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
                        House and Children -
                    </option>
                    <option value="Appliances"> Appliances</option>
                    <option value="Inside"> Inside</option>
                    <option value="Games"> Games and Clothing</option>
                    <option value="Garden"> Garden</option>
                    <option value="Multimedia" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
                        Multimedia -
                    </option>
                    <option value="Telephony"> Telephony</option>
                    <option value="Image"> Image and sound</option>
                    <option value="Computers"> Computers and Accessories</option>
                    <option value="Video"> Video games and consoles</option>
                    <option value="Real" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Real
                        Estate -
                    </option>
                    <option value="Apartment"> Apartment</option>
                    <option value="Home"> Home</option>
                    <option value="Vacation"> Vacation Rentals</option>
                    <option value="Commercial"> Commercial offices and local</option>
                    <option value="Grounds"> Grounds</option>
                    <option value="Houseshares"> Houseshares</option>
                    <option value="Other real estate"> Other real estate</option>
                    <option value="Services" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
                        Services -
                    </option>
                    <option value="Jobs"> Jobs</option>
                    <option value="Job application"> Job application</option>
                    <option value="Services"> Services</option>
                    <option value="Price"> Price</option>
                    <option value="Business"> Business and goodwill</option>
                    <option value="Professional"> Professional equipment</option>
                    <option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> -
                        Extra -
                    </option>
                    <option value="Other"> Other</option>
                </select>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-block btn-primary  "><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
@endsection