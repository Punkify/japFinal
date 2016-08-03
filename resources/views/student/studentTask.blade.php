  @extends('layouts.studentLayout')

   @section('studentContent')
      
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                                <div class="col-lg-9 main-chart">
                  <article class="icon-box"><br><br><br><br>


      
            
                       
              <ul class="nav nav-tabs left-navi">
            
              <li class="active"><a href="#lD" data-toggle="tab"> <span class="fa fa-user bg-aqua"></span> TASKS</a></li>
              </ul>

                 <div class="tab-content">

                 <article class="tab-pane active" id="lD">

                 <div class="two_third">

                 <table class="table table-striped table-advance table-hover">
                            
                            
                              <thead>
                              <tr>
                                  <th><i class="fa fa-user bg-aqua"></i>ID</th>
                                  <th class="hidden-phone"> <span class="glyphicon glyphicon-eye-open"></span> Task</th>
                                  <th class="hidden-phone"> <span class="glyphicon glyphicon-eye-open"></span> Description</th>

                                  
                                  <th class="hidden-phone"> <span class="glyphicon glyphicon-eye-open"></span>Deadline</th>
                                  <th class="hidden-phone"> <span class="glyphicon glyphicons-scissors-alt"></span>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td><a href="#">ANMOL CHALISE</a></td>
                                  <td ><b>22 DAYS</b></td>
                                 <td><a href="index.html#">
                                    <div class="task-info">
                                   
                                       
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <div class="percent">80%</div>
                                        </div>
                                    </div>
                                </a></td>
                               <td>

                                      <button class="btn btn-success btn-xs" style="padding: 1px 5px;"><span class="label label-success">ACTIVE</span></button>
                                      <button class="btn btn-danger btn-xs" style="padding: 1px 5px;"><span class="label label-danger">INACTIVE</span></button>
                                      <button class="btn btn-warning btn-flat" style="padding: 1px 5px;"><span class="label label-warning">PENDING</span></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td><a href="#">RAVI KARKI </a></td>
                                  <td ><b>20 DAYS</b></td>
                                  <td><a href="index.html#">
                                    <div class="task-info">
                                   
                                       
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <div class="percent">80%</div>
                                        </div>
                                    </div>
                                </a></td>
                                <td>

                                      <button class="btn btn-success btn-xs" style="padding: 1px 5px;"><span class="label label-success">ACTIVE</span></button>
                                      <button class="btn btn-danger btn-xs" style="padding: 1px 5px;"><span class="label label-danger">INACTIVE</span></button>
                                      <button class="btn btn-warning btn-flat" style="padding: 1px 5px;"><span class="label label-warning">PENDING</span></button>
                                  </td>
                                  
                              </tr>
                             <tr>
                                  <td><a href="#">DIPESH SHRESTHA</a></td>
                                  <td ><b>20 DAYS</b></td>
                                  <td><a href="index.html#">
                                    <div class="task-info">
                                   
                                       
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <div class="percent">80%</div>
                                        </div>
                                    </div>
                                </a></td>

                               <td>

                                      <button class="btn btn-success btn-xs" style="padding: 1px 5px;"><span class="label label-success">ACTIVE</span></button>
                                      <button class="btn btn-danger btn-xs" style="padding: 1px 5px;"><span class="label label-danger">INACTIVE</span></button>
                                      <button class="btn btn-warning btn-flat" style="padding: 1px 5px;"><span class="label label-warning">PENDING</span></button>
                                  </td>  
                              </tr>
                            <tr>
                                  <td><a href="#">ASHIM GURUNG</a></td>
                                 <td ><b>40 DAYS</b></td>
                                  <td><a href="index.html#">
                                    <div class="task-info">
                                   
                                       
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <div class="percent">80%</div>
                                        </div>
                                    </div>
                                </a></td>
                               <td>

                                      <button class="btn btn-success btn-xs" style="padding: 1px 5px;"><span class="label label-success">ACTIVE</span></button>
                                      <button class="btn btn-danger btn-xs" style="padding: 1px 5px;"><span class="label label-danger">INACTIVE</span></button>
                                      <button class="btn btn-warning btn-flat" style="padding: 1px 5px;"><span class="label label-warning">PENDING</span></button>
                                  </td>
                              </tr>

                             </tbody>
                           </table>
                                     
                   
         </div>
         
               </article>
               <!-- // The student tab ends here -->
<section class="wrapper site-min-height">
          
           
      
    </section>
      
           </div>
         </div>
        

                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->   
   

                  
                      <div class="col-lg-3 ds">

                    <!--COMPLETED ACTIONS DONUTS CHART-->
                    <h3>NOTIFICATIONS</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>2 Minutes Ago</muted><br/>
                             <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                          </p>
                        </div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>3 Hours Ago</muted><br/>
                             <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                          </p>
                        </div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>7 Hours Ago</muted><br/>
                             <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                          </p>
                        </div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>11 Hours Ago</muted><br/>
                             <a href="#">Mark Twain</a> commented your post.<br/>
                          </p>
                        </div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>18 Hours Ago</muted><br/>
                             <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                          </p>
                        </div>
                      </div>

                      
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
              
          </section>
      </section>
 @endsection
