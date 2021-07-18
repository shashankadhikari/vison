@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@section('content')
    <div class="container mb-5">

        <div class="container">
            <form method="POST" action="{{ route('share.store') }}">
                @csrf
                <h2 class="mb-4">Detail Information for share purchase</h2>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Applicant Name</label>
                            <input name="app_name" type="text" class="form-control" placeholder="Enter your Name" id="name"
                                required>
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">

                    </div>
                    <!--  col-md-6   -->
                </div>

                <hr>

                <h4>Permanent Address</h4>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="company">District</label>
                            <input name="app_district" type="text" class="form-control" placeholder="" id="company"
                                required>
                        </div>


                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="phone">Municipality / VDC</label>
                            <input name="app_mun" type="text" class="form-control" id="" placeholder="Your municipality/vdc"
                                required>
                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>
                <!--  row   -->
                <div class="row mb-4">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="ward">Ward No.</label>
                            <input name="app_ward" type="text" class="form-control" placeholder="Ward No" required>
                        </div>
                    </div>
                    <!--  col-md-6   -->

                    <div class="col-md-6">


                    </div>
                    <!--  col-md-6   -->
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ward">Citizenship No.</label>
                            <input name="app_cit" type="text" class="form-control" placeholder="Citizenship no" required>
                        </div>
                    </div>
                    <!--  col-md-6   -->
                    <div class="col-md-6">
                    </div>
                    <!--  col-md-6   -->
                </div>
                <!--  row   -->


                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mobile no">Mobile No.</label>
                            <input name="app_mob" type="tel" class="form-control" placeholder="Mobile no" required>
                        </div>
                    </div>
                    <!--  col-md-6   -->


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phone no">Phone No.</label>
                            <input name="app_ph" type="tel" class="form-control" placeholder="Phone no" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="app_email" type="email" class="form-control" placeholder="Email address" required>
                        </div>
                    </div>
                </div>
                <!--  col-md-6   -->


                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fathername">Father's Name</label>
                            <input name="app_father" type="text" class="form-control" placeholder="Enter your Father's Name"
                                required>
                        </div>
                    </div>
                    <!--  col-md-6   -->
                    <div class="col-md-6">
                    </div>
                    <!--  col-md-6   -->
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Grandfathername">GrandFather's Name</label>
                            <input name="app_grandf" type="text" class="form-control"
                                placeholder="Enter your GrandFather's Name" required>
                        </div>
                    </div>
                    <!--  col-md-6   -->
                    <div class="col-md-6">
                    </div>
                    <!--  col-md-6   -->
                </div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Husband/Wifename"> Husband/Wife's Name</label>
                            <input name="app_hw" type="text" class="form-control"
                                placeholder="Enter your Husband/Wife's Name">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                    <div class="col-md-6">
                    </div>
                    <!--  col-md-6   -->
                </div>

                <hr>
                <h4>If applicant is company</h4>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="CEO/MD/Chairperson"> CEO/MD/Chairperson</label>
                            <input name="app_ceo" type="text" class="form-control" placeholder="Enter CEO/MD/Chairperson">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                    <div class="col-md-6">
                    </div>
                    <!--  col-md-6   -->
                </div>

                <hr>
                <h4>(Incase of minor)</h4>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=" Gaurdain's Name"> Gaurdain's Name</label>
                            <input name="app_gaurdian" type="text" class="form-control"
                                placeholder="Enter  Gaurdain's Name">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                    <div class="col-md-6">
                    </div>
                    <!--  col-md-6   -->
                </div>

                <hr>
                <h4>About Nominee</h4>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=" Name"> Name</label>
                            <input name="nom_name" type="text" class="form-control" placeholder="Enter  Name">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="relation">Relation</label>
                            <input name="nom_rln" type="text" class="form-control" placeholder="Enter your relation">
                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="district">District</label>
                            <input name="nom_district" type="text" class="form-control" placeholder="Enter your district">
                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>

                <hr>

                <h2 class="mb-4">Share Detail</h2>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=" Name"> Applied Kitta</label>
                            <input id="one" type="number" name="app_kitta" class="form-control " placeholder="Applied Kitta"
                                required />

                        </div>
                    </div>
                    <!--  col-md-6   -->
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="relation">Total Amount</label>
                            <input name="app_total" type="text" class="form-control" placeholder="Total Amount" id="result"
                                disabled>
                            <p></p>

                        </div>
                    </div>
                    <!--  col-md-6   -->
                </div>







        </div>


        <!--  row   -->





        <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    </div>

    <script>
        $("#one").keyup(function() {
            if ($('#one').val() != "") {
                var result = parseInt($('#one').val()) * 100;
                $('#result').val(result);
            }
        });
    </script>
@endsection
