<div class="tab-pane fade" id="v-pills-address" role="tabpanel"
aria-labelledby="v-pills-address-tab">
<div class="fp_dashboard_body address_body">
    <h3>address <a class="dash_add_new_address"><i class="far fa-plus"></i> add new
        </a>
    </h3>
    <div class="fp_dashboard_address">
        <div class="fp_dashboard_existing_address">
            <div class="row">
                <div class="col-md-6">
                    <div class="fp__checkout_single_address">
                        <div class="form-check">
                            <label class="form-check-label">
                                <span class="icon"><i class="fas fa-home"></i>
                                    home</span>
                                <span class="address">house# 22, road# 10, block# G,
                                    Basundhara
                                    Residential Area.</span>
                            </label>
                        </div>
                        <ul>
                            <li><a class="dash_edit_btn"><i
                                        class="far fa-edit"></i></a></li>
                            <li><a class="dash_del_icon"><i
                                        class="fas fa-trash-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fp__checkout_single_address">
                        <div class="form-check">
                            <label class="form-check-label">
                                <span class="icon"><i
                                        class="far fa-car-building"></i>
                                    office</span>
                                <span class="address">house# 22, road# 10, block# G,
                                    Basundhara
                                    Residential Area.</span>
                            </label>
                        </div>
                        <ul>
                            <li><a class="dash_edit_btn"><i
                                        class="far fa-edit"></i></a></li>
                            <li><a class="dash_del_icon"><i
                                        class="fas fa-trash-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="fp_dashboard_new_address ">
            <form action="{{ route('address.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <h4>add new address</h4>
                    </div>

                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="fp__check_single_form">
                            <select id="select_js3" name="aria">
                                <option value="">Slelect Area</option>
                                @foreach ($deliveryAreas as $area)
                                <option value="{{ $area->id }}">{{ $area->area_name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <input type="text" placeholder="First Name" name="first_name">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <input type="text" placeholder="Last Name" name="last_name">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <input type="text" placeholder="Phone" name="phone">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <input type="text" placeholder="Email" name="email">
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="fp__check_single_form">
                            <textarea cols="3" rows="4"
                                placeholder="Address" name="address"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="fp__check_single_form check_area">
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    name="type" id="flexRadioDefault1" value="home">
                                <label class="form-check-label"
                                    for="flexRadioDefault1">
                                    home
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    name="type" id="flexRadioDefault2" value="office">
                                <label class="form-check-label"
                                    for="flexRadioDefault2">
                                    office
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="button"
                            class="common_btn cancel_new_address">cancel</button>
                        <button type="submit" class="common_btn">save
                            address</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="fp_dashboard_edit_address ">
            <form>
                <div class="row">
                    <div class="col-12">
                        <h4>edit address </h4>
                    </div>

                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <input type="text" placeholder="First Name">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <input type="text" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="fp__check_single_form">
                            <input type="text"
                                placeholder="Company Name (Optional)">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <select id="select_js4">
                                <option value="">select country</option>
                                <option value="">bangladesh</option>
                                <option value="">nepal</option>
                                <option value="">japan</option>
                                <option value="">korea</option>
                                <option value="">thailand</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <input type="text" placeholder="Street Address *">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <input type="text"
                                placeholder="Apartment, suite, unit, etc. (optional)">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <input type="text" placeholder="Town / City *">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <input type="text" placeholder="State *">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <input type="text" placeholder="Zip *">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <input type="text" placeholder="Phone *">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                        <div class="fp__check_single_form">
                            <input type="email" placeholder="Email *">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="fp__check_single_form">
                            <textarea cols="3" rows="4"
                                placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="fp__check_single_form check_area">
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    name="flexRadioDefault2"
                                    id="flexRadioDefault12">
                                <label class="form-check-label"
                                    for="flexRadioDefault12">
                                    home
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio"
                                    name="flexRadioDefault2"
                                    id="flexRadioDefault22">
                                <label class="form-check-label"
                                    for="flexRadioDefault22">
                                    office
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="button"
                            class="common_btn cancel_edit_address">cancel</button>

                        <button type="submit" class="common_btn">update
                            address</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
