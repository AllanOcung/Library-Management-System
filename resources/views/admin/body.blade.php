

            <!-- Main Content -->
            <div id="content">             

                <!-- Begin Page Content -->
                <div class="container-fluid">                    

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4" style="border: 1px solid rgba(22, 99, 211, 0.8);">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: rgba(22, 99, 211, 0.8);">
                                    <h6 class="m-0 font-weight-bold text-white">Number of Books Borrowed Over Time</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4" style="border: 1px solid rgba(22, 99, 211, 0.8);">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: rgba(22, 99, 211, 0.8);">
                                    <h6 class="m-0 font-weight-bold text-white">Inventory Statistics</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Total Books
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Borrowed Books
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Returned Books
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Key Performance Indicators (KPIs)</h6>
                                </div>
                                <div class="card-body">

                                <ul style="list-style-type: disc; padding-left: 10px;">
                                    <li>Monthly Active Users (MAU)</li>
                                    <li>New User Sign-ups</li>
                                    <li>Total Books Added</li>
                                    <li>Books Borrowed Per Month</li>
                                    <li>Return Rate</li>
                                    <li>Library Visits</li>
                                    <li>User Satisfaction (measured through surveys or ratings)</li>
                                </ul>
                                    
                                </div>
                            </div>

                            

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Strategies for Growth</h6>
                                </div>
                                <div class="card-body">
                                    <ul style="list-style-type: disc; padding-left: 10px;">
                                    <li><b>Marketing Campaigns</b>: Plan and execute marketing campaigns to promote the library system to new users and encourage existing users to explore more features.</li>
                                    <li><b>Partnerships</b>: Collaborate with publishers, authors, educational institutions, or other organizations to expand the library's content offerings and reach new audiences.</li>
                                    <li><b>Product Enhancements</b>: Continuously improve the platform by adding new features, optimizing performance, and addressing user feedback to enhance the overall user experience.</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Books</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <img class="card-img-bottom" src="{{asset('assets\images\book1.webp')}}" alt="Book Image" style="width: 100%;">
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <img class="card-img-bottom" src="{{asset('assets\images\book2.webp')}}" alt="Book Image" style="width: 100%;">
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <img class="card-img-bottom" src="{{asset('assets\images\book3.webp')}}" alt="Book Image" style="width: 100%;">
                                                
                                            </div>
                                            <a href="{{url('show_book')}}" class="btn btn-primary mt-2 d-block">Show more...</a>
                                        </div>
                                    </div>
                                    </div>


                            

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            

        </div>