@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
        <div class="wrapper">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form action="{{url('/users')}}" id="wizard" method="post">
                @csrf
        		<!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="form-content" >
							<div class="form-header">
								<h3>Registration</h3>
							</div>
							<p>Please fill with your details</p>
                            <div class="row row-wrap">
                                <div class="col">
                                    <input type="text" name="company_name" class="form-control" placeholder="Company name">
                                </div>
                                <div class="col">
                                    <input type="text" name="company_reg_year" class="form-control" placeholder="Company reg year">
                                </div>
                                <div class="col">
                                    <input type="text" name="company_reg_num" class="form-control" placeholder="Company reg num">
                                </div>
                            </div>
                            <div class="row row-wrap">
                                <div class="col">
                                    <input type="text" name="company_phone" class="form-control" placeholder="Company phone">
                                </div>
                                <div class="col">
                                    <input type="text" name="company_reg_doc" class="form-control" placeholder="Company reg doc">
                                </div>
                                <div class="col">
                                    <input type="text" name="company_nu_molding_machines" class="form-control" placeholder="Company nu molding machines">
                                </div>
                            </div>
                            <div class="row row-wrap">
                                <div class="col">
                                    <input type="text" name="companey_nu_sites" class="form-control" placeholder="Company nu sites">
                                </div>
                            </div>
						</div>
					</div>
                </section>

				<!-- SECTION 2 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="form-content">
							<div class="form-header">
								<h3>Registration</h3>
							</div>
							<p>Please fill with additional info</p>
							<div class="row row-wrap">
								<div class="col">
									<input type="text" name="company_address_line_1" placeholder="Address Line 1" class="form-control">
								</div>
                                <div class="col">
                                    <input type="text" name="company_address_line_2" class="form-control" placeholder="Company address line 2">
                                </div>
                                <div class="col">
                                    <input type="text" name="companey_address_zip" class="form-control" placeholder="Company zip code">
                                </div>
							</div>
                            <div class="row row-wrap">
								<div class="col">
									<input type="text" name="companey_address_city" placeholder="Company city" class="form-control">
								</div>
                                <div class="col">
                                    <input type="text" name="companey_address_state" class="form-control" placeholder="Company state">
                                </div>
                                <div class="col">
                                    <input type="text" name="companey_address_contry" class="form-control" placeholder="Company country">
                                </div>
							</div>
						</div>
					</div>
                </section>

                <!-- SECTION 3 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="form-content">
							<div class="form-header">
								<h3>Registration</h3>
							</div>
							<p>Send an optional message</p>
							<div class="row row-wrap">
								<div class="col">
									<input type="text" name="first_name" placeholder="First name" class="form-control">
								</div>
                                <div class="col">
                                    <input type="text" name="middle_name" class="form-control" placeholder="Middle Name">
                                </div>
                                <div class="col">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                </div>
							</div>
                            <div class="row row-wrap">
								<div class="col">
									<input type="text" name="designation" placeholder="Designation" class="form-control">
								</div>
                                <div class="col">
                                    <input type="text" name="phone_nu" class="form-control" placeholder="User phone Number">
                                </div>
                                <div class="col">
                                    <input type="text" name="email" class="form-control" placeholder="User email">
                                </div>
							</div>
						</div>
                        
					</div>
                </section>
                <input type="submit" style="display:none" id="user_submit_button">  
            </form>
		</div>
        </div>

@endsection

@section('javascript')

@endsection