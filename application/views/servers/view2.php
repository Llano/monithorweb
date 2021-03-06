<div class="main-content">
          <div class="container">
                    
            <div class="row">
              <div class="col-md-8">
                <!-- Home chart widget -->
                <div class="widget">
                  <div class="widget-head br-lblue">
                    <h3 class="pull-left"><i class="fa fa-bar-chart-o"></i> Latest Report</h3>
                    <div class="pull-right">
                      <!-- Nav tabs -->
                      <ul>
                        <li><a href="#c-one" data-toggle="tab" class="btn btn-default btn-xs">Visitors</a>&nbsp;</li>
                        <li><a href="#c-two" data-toggle="tab" class="btn btn-default btn-xs">Revenue</a>&nbsp;</li>
                        <li><a href="#c-three" data-toggle="tab" class="btn btn-default btn-xs">FPS</a></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget-body">
                  
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane fade" id="c-one">
                        <!-- Chart one --> 
                        <div class="chart-one">
                          <!-- Line chart placeholder -->
                          <div id="m-line-chart"></div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="c-two">                        
                        <!-- Chart two -->
                        <div class="chart-two">
                          <!-- Bar chart placeholder -->
                          <div id="m-bar-chart"></div>
                        </div>
                      </div>
                      <div class="tab-pane active in fade" id="c-three">
                        <!-- Chart three -->
                        <div class="chart-three">
                          <!-- Real time chart placeholder -->
                          <div id="m-real-chart"></div>
                          <hr />
                          <!-- Update interval for realtime chart -->
                          Update Interval : <input id="updateInterval" type="text" class="form-control input-sm" value="">
                          
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>          
              </div>
              <div class="col-md-4">
                <!-- Main area chart -->
                <div class="widget">
                  <div class="widget-head br-red">
                    <h3><i class="fa fa-desktop"></i> Latest Updates</h3>
                  </div>
                  <div class="widget-body">
                    <!-- Sparkline chart -->
                    <div class="m-spark-chart text-center">
                      <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-6">
                          <div id="spark1"></div>
                          <!-- Chart details -->
                          <h5>1200 Visitors</h5>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6">
                          <div id="spark2"></div>
                          <!-- Chart details -->
                          <h5>5000 Members</h5>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                          <div id="spark3"></div>
                          <!-- Chart details -->
                          <h5>8000 Bounce </h5>
                        </div>
                      </div>
                    </div>
                    <hr />
                    <!-- Pie chart -->
                    <div class="m-pie-chart">
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <!-- Pie chart placeholder -->
                          <div id="m-pie-chart"></div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <!-- Pie chart info -->
                          <ul class="list-unstyled">
                            <li><span class="badge badge-danger">5</span> &nbsp; <strong>Today's Revenue</strong></li>
                            <li><span class="badge badge-success">8</span> &nbsp; <strong>Yesterday's Profit</strong></li>
                            <li><span class="badge badge-info">4</span> &nbsp; <strong>Monday's Visitors</strong></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
              </div>
            </div>
        
            <div class="knobs text-center">
              <div class="row">
                <div class="col-md-2 col-sm-6 col-xs-6 col-mob">
                  <!-- Knob item -->
                  <div class="knob-item">
                    <!-- Heading -->
                    <h4>CPU usage</h4>
                    <!-- Knob circle -->
                    <input id="cpu-knob" type="text" value="0" class="knob" data-readOnly=true data-fgColor="#f75353" data-angleArc="250" data-min="0" data-max="100" data-angleOffset="-125" data-bgColor="#e8e8e8" data-width="110" data-thickness=".1">
                  </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6 col-mob">
                  <div class="knob-item">
                    <h4>RAM usage</h4>
                    <input id="ram-knob" type="text" value="0" class="knob" data-readOnly=true data-fgColor="#32c8de" data-min="0" data-max="<?php echo $server->row()->maxRam; ?>" data-angleArc="250" data-angleOffset="-125" data-bgColor="#e8e8e8" data-width="110" data-thickness=".1">
                  </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6 col-mob">
                  <div class="knob-item">
                    <h4>Bounce Rate</h4>
                    <input type="text" value="35" class="knob" data-fgColor="#51d466" data-angleArc="250" data-angleOffset="-125" data-bgColor="#e8e8e8" data-width="110" data-thickness=".1">
                  </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6 col-mob">
                  <div class="knob-item">
                    <h4>Total Members</h4>
                    <input type="text" value="75" class="knob" data-fgColor="#cb79e6" data-angleArc="250" data-angleOffset="-125" data-bgColor="#e8e8e8" data-width="110" data-thickness=".1">
                  </div>
                </div>
                <div class="col-md-4">

                  <!-- Current status -->
                  <div class="current-status">
                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-xs-6">
                        <!-- Current status item -->
                        <div class="current-status-item">
                          <!-- Icon 
                          <i class="fa fa-user lblue"></i> -->
                          <!-- Heading -->
                          <h6>Profit</h6>
                          <h3>$50,000 <span class="fa fa-arrow-circle-up green"></span></h3>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-6">
                        <!-- Current status item -->
                        <div class="current-status-item">
                          <!-- Icon 
                          <i class="fa fa-bar-chart-o lblue"></i> -->
                          <!-- Heading -->
                          <h6>Revenue</h6>
                          <h3>55.89% <span class="fa fa-arrow-circle-down red"></span></h3>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- Current status item -->
                        <div class="current-status-item">
                          <!-- Heading -->
                          <h6>Customers</h6>
                          <h3>11,000 <span class="fa fa-arrow-circle-up lblue"></span></h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-xs-6">
                        <!-- Current status item -->
                        <div class="current-status-item">
                          <!-- Icon 
                          <i class="fa fa-user lblue"></i> -->
                          <!-- Heading -->
                          <h6>Bounce Rate</h6>
                          <h3>30.07% <span class="fa fa-arrow-circle-down lblue"></span></h3>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-6">
                        <!-- Current status item -->
                        <div class="current-status-item">
                          <!-- Icon 
                          <i class="fa fa-bar-chart-o lblue"></i> -->
                          <!-- Heading -->
                          <h6>Visitors</h6>
                          <h3>25,000 <span class="fa fa-arrow-circle-up green"></span></h3>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- Current status item -->
                        <div class="current-status-item">
                          <!-- Heading -->
                          <h6>Orders</h6>
                          <h3>5,000 <span class="fa fa-arrow-circle-down red"></span></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                
                </div>
              </div>
            </div>
            
            
            
            <div class="row">
              <div class="col-md-4">
                
                <!-- Project widget -->
                <div class="widget projects-widget">
                  
                  <div class="widget-head br-green">
                    <h3><i class="fa fa-desktop"></i> Command</h3>
                  </div>
                  
                  <div class="widget-body no-padd">
                    
                    <ul class="list-unstyled">

                      <li>
                        <p>
                        <!-- Checkbox -->
                        <input value="check1" type="checkbox">
                        <!-- Name -->
                        <strong>Hospital Management System</strong>
                        </p>

                        <p class="p-meta">
                        <!-- Due date & % Completed -->
                        <span>Due : 26/2/2012 - 80% Done</span> 
                        </p>
                        
                        <!-- Progress bar -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                          <span class="sr-only">90% Complete</span>
                          </div>
                        </div>
                      </li>


                      <li>
                        <p>
                        <!-- Checkbox -->
                        <input value="check1" type="checkbox">
                        <!-- Name -->
                        <strong>School Download System</strong>
                        </p>

                        <p class="p-meta">
                        <!-- Due date & % Completed -->
                        <span>Due : 26/2/2012 - 80% Done</span> 
                        </p>

                         <!-- Progress bar -->
                      <div class="progress">
                          <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </li>

                      <li>
                        <p>
                        <!-- Checkbox -->
                        <input value="check1" type="checkbox">
                        <!-- Name -->
                        <strong>Question and Answers Script</strong>
                        </p>

                        <p class="p-meta">
                        <!-- Due date & % Completed -->
                        <span>Due : 26/2/2012 - 80% Done</span> 
                        </p>

                        <!-- Progress bar -->
                        <div class="progress">
                          <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                          <span class="sr-only">70% Complete</span>
                          </div>
                        </div>
                      </li>

                      <li>
                        <p>
                        <!-- Checkbox -->
                        <input value="check1" type="checkbox">
                        <!-- Name -->
                        <strong>Software Downloads Script</strong>
                        </p>

                        <p class="p-meta">
                        <!-- Due date & % Completed -->
                        <span>Due : 26/2/2012 - 80% Done</span> 
                        </p>

                         <!-- Progress bar -->
                         <div class="progress">
                          <div class="progress-bar progress-bar-warning"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                          <span class="sr-only">50% Complete</span>
                          </div>
                        </div>
                      </li>
                      
                    </ul>
                    
                  </div>
                  
                  
                  <div class="widget-foot">
                    <span class="pull-left"><i class="fa fa-time"></i> Last Update - 55 mins ago</span>
                    <a href="#" class="btn btn-success btn-xs pull-right">Refresh</a>
                    <div class="clearfix"></div>
                  </div>
                  
                </div>
                
              </div>
              
              <div class="col-md-4">
                
                <!-- Chat widget -->
                <div class="widget tasks-widget">
                  
                  <div class="widget-head br-red">
                    <h3><i class="fa fa-tasks"></i> Chat</h3>
                  </div>
                  
                  <div class="widget-body no-padd scroll">
                    
                    <ul>
                       <!-- Checkbox - Task - Flag -->
                       <li class="task-important"> <span>Lorem dolor sit sit amet dolor feugiat sit consur.</span> </li>
                       <li class="task-normal"><span>Duis dolor sit eut purus dolor feugiat sit ineuis.</span> </li>
                       <li class="task-pending"><span>Mauris dolor sit adiin ipsum dolor feugiat posuere.</span> </li>
                       <li class="task-important"><span>Ut non dolor sit feu sit amet dolor feugiat sit cquat.</span> </li>
                       <li class="task-normal"> <span>Duis dolor sit eut purus dolor feugt interum euis.</span> </li>
                       <li class="task-pending"><span>Nullam dolor sit pla augue dolor feuiat comodo.</span> </li>
                       <li class="task-important"><span>Vivamus dolor sit ali ondntum dolor feugiat sit ittis.</span> </li>
                       <li class="task-normal"> <span>Duis dolor sit eut purus dolor  sit interum euis.</span> </li>
                       <li class="task-pending"><span>Duis dolor sit eut purus  feugiat sit interum euis.</span> </li>
                    </ul>
                    
                  </div>
                  
                  <div class="widget-foot">
                    <form class="form-inline" role="form">
                      <div class="form-group">
                      <input type="text" class="form-control" placeholder="Enter message..">
                      </div>

                      <button type="submit" class="btn btn-info btn-sm">Send</button>
                    </form>
                  </div>
                  
                </div>
                
              </div>
              
              <div class="col-md-4">
                
                <!-- Tasks widget -->
                <div class="widget tasks-widget">
                  
                  <div class="widget-head br-lblue">
                    <h3><i class="fa fa-tasks"></i> Events</h3>
                  </div>
                  
                  <div class="widget-body no-padd scroll">
                    
                    <ul>
                       <!-- Checkbox - Task - Flag -->
                       <li class="task-important"> <span>Lorem dolor sit sit amet dolor feugiat sit consur.</span> </li>
                       <li class="task-normal"><span>Duis dolor sit eut purus dolor feugiat sit ineuis.</span> </li>
                       <li class="task-pending"><span>Mauris dolor sit adiin ipsum dolor feugiat posuere.</span> </li>
                       <li class="task-important"><span>Ut non dolor sit feu sit amet dolor feugiat sit cquat.</span> </li>
                       <li class="task-normal"> <span>Duis dolor sit eut purus dolor feugt interum euis.</span> </li>
                       <li class="task-pending"><span>Nullam dolor sit pla augue dolor feuiat comodo.</span> </li>
                       <li class="task-important"><span>Vivamus dolor sit ali ondntum dolor feugiat sit ittis.</span> </li>
                       <li class="task-normal"> <span>Duis dolor sit eut purus dolor  sit interum euis.</span> </li>
                       <li class="task-pending"><span>Duis dolor sit eut purus  feugiat sit interum euis.</span> </li>
                    </ul>
                    
                  </div>
                  
                  <div class="widget-foot">
                    <form class="form-inline" role="form">
                      <div class="form-group">
                      <input type="text" class="form-control" placeholder="Enter Task Here...">
                      </div>
                      <button type="submit" class="btn btn-info btn-sm">Add Task</button>
                    </form>
                  </div>
                  
                </div>
                                
              </div>
                            
            </div>
            
            <div class="row">
            
              <div class="col-md-7">
                <!-- Pages widget -->
                <div class="widget pages-widget">
                  
                  <div class="widget-head br-red">
                    <h3><i class="fa fa-file"></i> Players</h3>
                  </div>
                  
                  <div class="widget-body no-padd">
                    
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <!-- Table heading -->
                        <tr> 
                          <th><input type="checkbox"></th>
                          <th>Page Title</th>
                          <th>File Size</th>
                          <th>Status</th>
                          <th>Sort</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <!-- Check box -->
                          <td><input type="checkbox"></td>
                          <!-- Page name -->
                          <td><a href="#">About Us</a></td>
                          <!-- Page size -->
                          <td>253.4 KB</td>
                          <!-- Status -->
                          <td><span class="badge badge-danger">R</span></td>
                          <!-- Sort -->
                          <td><a href="#"><i class="fa fa-chevron-up green"></i></a></td>
                          <!-- Actions -->
                          <td>
                            <a href="#"><i class="fa fa-edit lblue"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-share-square-o green"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-trash-o red"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td><a href="#">Contact Us</a></td>
                          <td>213 KB</td>
                          <td><span class="badge badge-success">A</span></td>
                          <td><a href="#"><i class="fa fa-chevron-down red"></i></a></td>
                          <td>
                            <a href="#"><i class="fa fa-edit lblue"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-share-square-o green"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-trash-o red"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td><a href="#">Dashboard</a></td>
                          <td>1.24 MB</td>
                          <td><span class="badge badge-warning">P</span></td>
                          <td><a href="#"><i class="fa fa-chevron-up green"></i></a></td>
                          <td>
                            <a href="#"><i class="fa fa-edit lblue"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-share-square-o green"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-trash-o red"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td><a href="#">Download</a></td>
                          <td>30.00 MB</td>
                          <td><span class="badge badge-danger">R</span></td>
                          <td><a href="#"><i class="fa fa-chevron-down red"></i></a></td>
                          <td>
                            <a href="#"><i class="fa fa-edit lblue"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-share-square-o green"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-trash-o red"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td><a href="#">Portfolio</a></td>
                          <td>140 MB</td>
                          <td><span class="badge badge-success">A</span></td>
                          <td><a href="#"><i class="fa fa-chevron-up green"></i></a></td>
                          <td>
                            <a href="#"><i class="fa fa-edit lblue"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-share-square-o green"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-trash-o red"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td><a href="#">Contact Us</a></td>
                          <td>213 KB</td>
                          <td><span class="badge badge-warning">P</span></td>
                          <td><a href="#"><i class="fa fa-chevron-down red"></i></a></td>
                          <td>
                            <a href="#"><i class="fa fa-edit lblue"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-share-square-o green"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-trash-o red"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td><a href="#">Dashboard</a></td>
                          <td>1.24 MB</td>
                          <td><span class="badge badge-danger">R</span></td>
                          <td><a href="#"><i class="fa fa-chevron-up green"></i></a></td>
                          <td>
                            <a href="#"><i class="fa fa-edit lblue"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-share-square-o green"></i></a> &nbsp; 
                            <a href="#"><i class="fa fa-trash-o red"></i></a>
                          </td>
                        </tr>
                      </table>
                    </div>
                    
                  </div>
                  
                  <div class="widget-foot">
                    <span class="pull-left">
                      <a href="#" class="btn btn-default btn-sm">Add New Page</a> &nbsp; 
                      <a href="#" class="btn btn-danger btn-sm">Delete All</a>
                    </span>
                    <div class="pull-right">
                      <!-- Pagination -->
                      <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  
                </div>
              
              </div>
              
              <div class="col-md-5">
                <!-- Contacts widget -->
                <div class="widget report-widget">
                    
                    <div class="widget-head br-lblue">
                      <h3><i class="fa fa-bar-chart-o"></i> Report Widget</h3>
                    </div>
                    
                    <div class="widget-body no-padd">
                      <div class="table-responsive">
                        <!-- Table with icon and details -->
                        <table class="table table-bordered">
                          <tbody><tr>
                            <!-- Icon -->
                            <td class="text-center"><i class="fa fa-globe"></i></td>
                            <td>Domain</td>
                            <td>sitedomain.com</td>
                            <!-- Sort -->
                            <td class="text-center red"><i class="fa fa-chevron-up"></i></td>
                          </tr> 
                          <tr>
                            <td class="text-center"><i class="fa fa-desktop"></i></td>
                            <td>IP Address</td>
                            <td>192.425.2.4</td>
                          </tr> 
                          <tr>
                            <td class="text-center"><i class="fa fa-hdd-o"></i></td>
                            <td>Disk Space</td>
                            <td>600GB / 600TB</td>
                          </tr> 
                          <tr>
                            <td class="text-center"><i class="fa fa-envelope"></i></td>
                            <td>Email Accounts</td>
                            <td>5 / 20</td>
                          </tr>
                          <tr>
                            <td class="text-center"><i class="fa fa-plane"></i></td>
                            <td>Bandwidth</td>
                            <td>1000GB / 200TB</td>
                          </tr> 
                          <tr>
                            <td class="text-center"><i class="fa fa-cloud"></i></td>
                            <td>PHP Version</td>
                            <td>5.1.1</td>
                          </tr> 
                          <tr>
                            <td class="text-center"><i class="fa fa-file"></i></td>
                            <td>Expenses</td>
                            <td>$26,00,000</td>
                          </tr>  
                          <tr>
                            <td class="text-center"><i class="fa fa-globe"></i></td>
                            <td>Income</td>
                            <td>$40,00,000</td>
                          </tr>                             
                        </tbody></table>
                      </div>
                    </div>
                    
                    <div class="widget-foot">
                      <span class="pull-left">Latest Update 24 Mins Ago</span>
                      <a href="#" class="btn btn-xs pull-right btn-info">Refresh</a>
                      <div class="clearfix"></div>
                    </div>
                    
                  </div>
              
              </div>
            
            </div>
            
            
            
          </div>
        </div>

        
    <script src="/assets/js/jquery.flot.min.js"></script>     
        <script src="/assets/js/jquery.flot.stack.min.js"></script>
        <script src="/assets/js/jquery.flot.pie.min.js"></script>
        <script src="/assets/js/jquery.flot.resize.min.js"></script>
   <script type="text/javascript">
         <!-- Main line chart -->
         $(document).ready(function() {

            /* Chart data #1 */
            var d1 = [[0, 4], [1, 3.5], [2, 4.2], [3, 5.5],[4, 4.9], [5, 5], [6, 5.3], [7, 6],[8, 5.3], [9, 4], [10, 4], [11, 4.5],[12, 5], [13, 4]];
            /* Chart data #2 */
            var d2 = [[0, 2], [1, 1.5], [2, 2.2], [3, 3.5],[4, 2.9], [5, 3], [6, 3.3], [7, 4],[8, 3.3], [9, 2], [10, 2], [11, 2.5],[12, 3], [13, 2]];
            var options = {
               series: {
                  lines: {
                     show: true, fill: true, lineWidth:1, fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.15}] }
                  },
                  points: {
                     show: true, fill: true, lineWidth:2, radius:3, fillColor: "#fff"
                  },
                  shadowSize: 0
               },
               colors :["#32c8de","#51d466"],
               grid: {
                  hoverable: true, color: "#bbb", backgroundColor:"#fff" ,borderWidth:1, borderColor:"#e8e8e8", labelMargin:10
               },
               xaxis: {
                  ticks:12,
                  font: {
                        size: 11,
                        color: "#aaa"
                    }
               },
               yaxis: {
                  ticks: 4,
                  font: {
                        size: 11,
                        color: "#aaa"
                    }
               },
               legend: {
                  backgroundOpacity:0,
                  noColumns:2,
                  labelBoxBorderColor: "#fff"
               }
            };
            
            $("<div id='tooltip'></div>").css({
                position: "absolute",
                display: "none",
                "border-radius":"5px",
                padding: "0px 5px",
                color:"#999",
                "font-size":"11px",
                "background-color": "#fff",
                "border":"1px solid #ccc"
            }).appendTo("body");

            $("#m-line-chart").bind("plothover", function (event, pos, item) {
                    if (item) {
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                        $("#tooltip").html(x + ", " + y)
                            .css({top: item.pageY+5, left: item.pageX+5})
                            .fadeIn(200);
                    } else {
                        $("#tooltip").hide();
                    }
            });

            
            <!-- Actual plotting -->
            $.plot("#m-line-chart", [ { data: d1, label: "Revenue"},{ data: d2, label: "Profit"}], options);
         });
         
         <!-- Line chart ends -->
         
         <!-- Bar chart starts -->
         
         $(function() {

            var data1 = [];
            for (var i = 0; i <= 20; i += 1) {
                data1.push([i, parseInt(Math.random() * 30)]);
            }

            var data2 = [];
            for (var i = 0; i <= 20; i += 1)
            data2.push([i, parseInt(Math.random() * 30)]);
        
            var stack = 0,
                bars = true,
                lines = false,
                steps = false;

            function plotWithOptions() {
                $.plot("#m-bar-chart", [ data1, data2 ], {
                    series: {
                        stack : stack,
                        bars: {
                            show: bars,
                            barWidth: 0.6,
                            lineWidth: 1,
                            fill: true,
                            fillColor: { colors: [ { opacity: 0.9 }, { opacity: 0.5}] }
                        }
                    },
                    colors: ["#3FB8CA", "#2BB3C7"],
                    grid: {
                         hoverable: true, color: "#bbb", backgroundColor:"#fff" ,borderWidth:1, borderColor:"#e8e8e8", labelMargin:15
                    },
                    xaxis: {
                        ticks:8,
                        font: {
                            size: 11,
                            color: "#aaa"
                        }
                    },
                    yaxis: {
                        ticks: 4,
                        font: {
                            size: 11,
                            color: "#aaa"
                        }
                    }
                });
            }

            plotWithOptions();

        });

        <!-- Bar chart ends -->
        
        
        <!-- Realtime chart starts -->
        $(function () {
            // we use an inline data source in the example, usually data would
            // be fetched from a server
            var data = [], totalPoints = 100;
            function getRandomData() {
                if (data.length > 0)
                    data = data.slice(1);

                // do a random walk
                while (data.length < totalPoints) {
                    var prev = data.length > 0 ? data[data.length - 1] : 0;
                    var y = fps;
                    data.push(y);
                }

                // zip the generated y values with the x values
                var res = [];
                for (var i = 0; i < data.length; ++i)
                    res.push([i, data[i]])
                return res;
            }

            // setup control widget
            var updateInterval = 1000;
            $("#updateInterval").val(updateInterval).change(function () {
                var v = $(this).val();
                if (v && !isNaN(+v)) {
                    updateInterval = +v;
                    if (updateInterval < 1)
                        updateInterval = 1;
                    if (updateInterval > 2000)
                        updateInterval = 2000;
                    $(this).val("" + updateInterval);
                }
            });

            // setup plot
            var options = {
                series: { shadowSize: 0 }, // drawing is faster without shadows
                lines: {fill: true, lineWidth:1},
                colors: ["#51d466"],
                grid: {
                    hoverable: false, color: "#bbb", backgroundColor:"#fff" ,borderWidth:1, borderColor:"#e8e8e8", labelMargin:15
                },
                xaxis: {
                    ticks:8,
                    font: {
                        size: 11,
                            color: "#aaa"
                    }
                },
                yaxis: {
                    ticks: 4,
                    font: {
                        size: 11,
                        color: "#aaa"
                    },
                    max:100,
                    min:0
                }
            };
            var plot = $.plot($("#m-real-chart"), [ getRandomData() ], options);
            function update() {
                plot.setData([ getRandomData() ]);
                // since the axes don't change, we don't need to call plot.setupGrid()
                plot.draw();
                
                setTimeout(update, updateInterval);
            }
            update();
            
        });

        <!-- Realtime charts ends -->
        
        <!-- Pie chart start -->
        
        $(function () {
        
            var data = [],
            series = 3;

            for (var i = 0; i < series; i++) {
                data[i] = {
                    data: Math.floor((Math.random()*10)+1) + 1
                }
            }

            var placeholder = $("#m-pie-chart");

            placeholder.unbind();
                
            $.plot(placeholder, data, {
                series: {
                    pie: { 
                        show: true,
                        innerRadius:0.6,
                        label: {
                            show: false
                        }
                    }
                },
                colors: ["#f75353","#51d466","#32c8de"],
                grid: {hoverable: false},
                legend: {
                    show: false
                }
            });


        });
        <!-- Pie chart ends -->
        
        /* ****************************************** */
        /* Main area sparkline */
        /* ****************************************** */

        $("#spark1").sparkline([8,11,9,12,10,9,13,11,12,11,10,12,11,], {
            type: 'bar',
            height: '30',
            barWidth: 4,
            barColor: '#f75353'});

        $("#spark2").sparkline([8,11,9,12,10,9,13,11,12,11,10,12,11,], {
            type: 'bar',
            height: '30',
            barWidth: 4,
            barColor: '#51d466'});
            
        $("#spark3").sparkline([8,11,9,12,10,9,13,11,12,11,10,12,11,], {
            type: 'bar',
            height: '30',
            barWidth: 4,
            barColor: '#32c8de'});  

        $( document ).ready(function() {

          var serverArray = [<?php echo json_encode($server->row()) ?>];


          window.addEventListener('onSignalROnline', function (e) {
            
          });

          pollServers(serverArray);

          window.addEventListener('onGameServerOffline', function (e) {
            fps = 0;
            setCpuUsage(0);
            setRamUsage(0);
          });

          window.addEventListener('onGameServerOnline', function (e) {

          });
          window.addEventListener('onMessageReceived', function (e) {
            var json = JSON.parse(e.detail.message);
            fps = json.fps;
            $('#cpu-knob')
                .val(json.cpuWork)
                .trigger('change');

            $('#ram-knob')
                .val(json.usedRam)
                .trigger('change');
          });



        });
        
        </script>