<div class="section-modal modal fade" id="feature-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Our Awesome Feature</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-magic"></i>
                                <div class="feature-content">
                                    <h4>Web Design</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-gift"></i>
                                <div class="feature-content">
                                    <h4>Graphics Design</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-wordpress"></i>
                                <div class="feature-content">
                                    <h4>Wordpress Theme</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-plug"></i>
                                <div class="feature-content">
                                    <h4>Wordpress Plugin</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-joomla"></i>
                                <div class="feature-content">
                                    <h4>Joomla Template</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-cube"></i>
                                <div class="feature-content">
                                    <h4>Joomla Extension</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-css3"></i>
                                <div class="feature-content">
                                    <h4>HTML 5 & CSS3</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-android"></i>
                                <div class="feature-content">
                                    <h4>Android Apps</h4>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor. reprehenderit</p>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>


        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'nim' => 'required|numeric',
            'makan' =>'min:4',
            'total' => 'required|numeric'
        ],$messages);