@extends('layouts.master')
@section('title','View Userprofile')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon"><i class="fa fa-user-circle-o"></i></div>
        <div class="header-title">
            <h1>Profile</h1>
            <small>Showing user data in Hatirpal</small>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="card">
                <div class="card-header">
                    <div class="card-header-headshot"></div>
                </div>
                <div class="card-content">
                    <div class="card-content-member text-center">
                        <h4 class="m-t-0">{{auth()->user()->name}}</h4>
                        <p class="m-t-0">{{auth()->user()->country_name}}</p>
                    </div>
                    <div class="card-content-languages">
                        <div class="card-content-languages-group">
                            <div><h4>City:</h4></div>
                            <div>
                                <ul><li>{{auth()->user()->city_name}}</li></ul>
                            </div>
                        </div>
                        <div class="card-content-languages-group">
                            <div><h4>Phone:</h4></div>
                            <div>
                                <ul><li>{{auth()->user()->phone}}</li></ul>
                            </div>
                        </div>
                        <div class="card-content-languages-group">
                            <div><h4>Email:</h4></div>
                            <div>
                                <ul><li> {{auth()->user()->email}}</li></ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-content-summary">
                        {{-- <p>Specialties are Creative UI, HTML5, CSS3, Semantic Web, Responsive Layouts, Web Standards Compliance, Performance Optimization, Cross Device Troubleshooting.</p> --}}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="card-footer-stats">
                        <div>
                            <p>PROJECTS:</p>
                            {{-- <i class="fa fa-users"></i><span>241</span> --}}
                        </div>
                        <div>
                            <p>MESSAGES:</p>
                            {{-- <i class="fa fa-coffee"></i><span>350</span> --}}
                        </div>
                        <div>
                            <p>Last online</p>
                            {{-- <span class="stats-small">3 days ago</span> --}}
                        </div>
                    </div>
                    <div class="card-footer-message">
                        <h4>
                            {{-- <i class="fa fa-comments"></i> --}}
                            <div class="fb-messengermessageus"
                            messenger_app_id="451585265723432"
                            page_id="105488687708483"
                            color="blue"
                            size="large" >
                          </div>
                        </h4>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="rating-block">
                        <h4>Average user rating</h4>
                        <h2 class="m-b-20">4.3 <small>/ 5</small></h2>
                        <button type="button" class="btn btn-rating btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-rating btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-rating btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                        <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <h4 class="m-t-0">Rating breakdown</h4>
                    <div class="pull-left">
                        <div class="review-number">
                            <div>5 <span class="glyphicon glyphicon-star"></span></div>
                        </div>
                        <div class="review-progress">
                            <div class="progress">
                            <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 90%">
                                <span class="sr-only">90% Complete (danger)</span>
                            </div>
                            </div>
                        </div>
                        <div class="progress-number">1</div>
                    </div>
                    <div class="pull-left">
                        <div class="review-number">
                            <div>4 <span class="glyphicon glyphicon-star"></span></div>
                        </div>
                        <div class="review-progress">
                            <div class="progress">
                            <div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                            </div>
                        </div>
                        <div class="progress-number">1</div>
                    </div>
                    <div class="pull-left">
                        <div class="review-number">
                            <div>3 <span class="glyphicon glyphicon-star"></span></div>
                        </div>
                        <div class="review-progress">
                            <div class="progress">
                            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 70%">
                                <span class="sr-only">70% Complete (danger)</span>
                            </div>
                            </div>
                        </div>
                        <div class="progress-number">0</div>
                    </div>
                    <div class="pull-left">
                        <div class="review-number">
                            <div>2 <span class="glyphicon glyphicon-star"></span></div>
                        </div>
                        <div class="review-progress">
                            <div class="progress">
                            <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                <span class="sr-only">60% Complete (danger)</span>
                            </div>
                            </div>
                        </div>
                        <div class="progress-number">0</div>
                    </div>
                    <div class="pull-left">
                        <div class="review-number">
                            <div>1 <span class="glyphicon glyphicon-star"></span></div>
                        </div>
                        <div class="review-progress">
                            <div class="progress">
                            <div class="progress-bar progress-bar-violet progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 50%">
                                <span class="sr-only">50% Complete (danger)</span>
                            </div>
                            </div>
                        </div>
                        <div class="progress-number">0</div>
                    </div>
                </div>
                </div>
                <div class="review-block">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="review-block-img">
                            <img src="assets/dist/img/avatar.png" class="img-rounded" alt="">
                        </div>
                        <div class="review-block-name"><a href="#">nktailor</a></div>
                        <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                    </div>
                    <div class="col-sm-9">
                        <div class="review-block-rate">
                            <button type="button" class="btn btn-rating btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-rating btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-rating btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="review-block-title">this was nice in buy</div>
                        <div class="review-block-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="review-block-img">
                            <img src="assets/dist/img/avatar2.png" class="img-rounded" alt="">
                        </div>
                        <div class="review-block-name"><a href="#">nktailor</a></div>
                        <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                    </div>
                    <div class="col-sm-9">
                        <div class="review-block-rate">
                            <button type="button" class="btn btn-rating btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-rating btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-rating btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="review-block-title">this was nice in buy</div>
                        <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="review-block-img">
                            <img src="assets/dist/img/avatar3.png" class="img-rounded" alt="">
                        </div>
                        <div class="review-block-name"><a href="#">nktailor</a></div>
                        <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
                    </div>
                    <div class="col-sm-9">
                        <div class="review-block-rate">
                            <button type="button" class="btn btn-rating btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-rating btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-rating btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="review-block-title">this was nice in buy</div>
                        <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
