 
			
			<div class="main-header clearfix">
				<div class="page-title">
					<h3 class="no-margin">Dashboard</h3>
					<span>Welcome back Mr.John Doe</span>
				</div><!-- /page-title -->
				
				<ul class="page-stats">
			    	<li>
			    		<div class="value">
			    			<span>New visits</span>
			    			<h4>4256</h4>
			    		</div>
						<span id="visits" class="sparkline"></span>
			    	</li>
			    	<li>
			    		<div class="value">
			    			<span>My balance</span>
			    			<h4>$32153</h4>
			    		</div>
			    		<span id="balances" class="sparkline"></span>
			    	</li>
			    </ul><!-- /page-stats -->
			</div><!-- /main-header -->
			
			<div class="grey-container shortcut-wrapper">
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-bar-chart-o"></i>
					</span>
					<span class="text">Statistic</span>
				</a>
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-envelope-o"></i>
						<span class="shortcut-alert">
							5
						</span>	
					</span>
					<span class="text">Messages</span>
				</a>
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-user"></i>
					</span>
					<span class="text">New Users</span>
				</a>
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-globe"></i>
						<span class="shortcut-alert">
							7
						</span>	
					</span>
					<span class="text">Notification</span>
				</a>
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-list"></i>
					</span>
					<span class="text">Activity</span>
				</a>
				<a href="#" class="shortcut-link">
					<span class="shortcut-icon">
						<i class="fa fa-cog"></i></span>
					<span class="text">Setting</span>
				</a>
			</div><!-- /grey-container -->
			
			<div class="padding-md">
				<div class="row">
					<div class="col-lg-8">
						<div class="panel panel-default">
							<div class="panel-body p-top-sm">
								<div class="inline-block m-top-xs">
									<span class="badge badge-danger">4321</span><strong class="m-left-xs m-right-sm"> Visits</strong>
								</div>
								<div class="inline-block m-top-xs">
									<span class="badge badge-success">5190</span><strong class="m-left-xs m-right-sm"> Sales</strong>
								</div>
								<div class="inline-block m-top-xs">
									<span class="badge badge-info">8123</span><strong class="m-left-xs m-right-sm"> Orders</strong>
								</div>
								<div class="inline-block m-top-xs">
									<span class="badge badge-warning">2351</span><strong class="m-left-xs m-right-sm"> Users</strong>
								</div>
							</div>
						</div><!-- /panel -->
									
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-bar-chart-o fa-lg"></i> Website Traffic
							</div>
							<div class="panel-body">
								<div id="overviewChart" style="height: 250px;"></div>
							</div>
						</div><!-- /panel -->
								
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-default panel-stat1 bg-success">
									<div class="panel-body">
										<div class="value">99</div>
										<div class="title">
											<i class="fa fa-usd"></i>
											<span class="m-left-xs">Sales</span>
										</div>
									</div>
								</div><!-- /panel -->
							</div><!-- /.col -->
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-default panel-stat2 bg-warning">
									<div class="panel-body">
										<span class="stat-icon">
											<i class="fa fa-bar-chart-o"></i>
										</span>
										<div class="pull-right text-right">
											<div class="value">58</div>
											<div class="title">New Visits</div>
										</div>
									</div>
								</div><!-- /panel -->
							</div><!-- /.col -->
							<div class="col-md-4 col-sm-4">
								<div class="panel panel-default panel-stat2 bg-info">
									<div class="panel-body">
										<span class="stat-icon">
											<i class="fa fa-envelope"></i>
										</span>
										<div class="pull-right text-right">
											<div class="value">41</div>
											<div class="title">Emails</div>
										</div>
									</div>
								</div><!-- /panel -->
							</div><!-- /.col -->
						</div><!-- /.row -->
						<div class="panel panel-default">
							<div class="panel-heading">
								Work Progress
								<span class="badge badge-info pull-right">	
									4 left
								</span>
							</div>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Task</th>
										<th>Progress</th>
										<th></th>
										<th>Time</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Bug Fixes</td>
										<td>
											<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
												<div class="progress-bar" style="width: 45%">
													<span class="sr-only">45% Complete</span>
												</div>
											</div>
										</td>
										<td>45%</td>
										<td><span class="badge badge-info">2hr</span></td>
									</tr>
									<tr>
										<td>Mobile Development</td>
										<td>
											<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
												<div class="progress-bar progress-bar-success" style="width: 61%">
													<span class="sr-only">61% Complete</span>
												</div>
											</div>
										</td>
										<td>61%</td>
										<td><span class="badge badge-info">1hr</span></td>
									</tr>
									<tr>
										<td>Unit Testing</td>
										<td>
											<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
												<div class="progress-bar progress-bar-danger" style="width: 97%">
													<span class="sr-only">97% Complete</span>
												</div>
											</div>
										</td>
										<td>97%</td>
										<td><span class="badge badge-info">5m</span></td>
									</tr>
									<tr>
										<td>New frontend layout</td>
										<td>
											<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
												<div class="progress-bar progress-bar-warning" style="width: 18%">
													<span class="sr-only">18% Complete</span>
												</div>
											</div>
										</td>
										<td>18%</td>
										<td><span class="badge badge-info">12hr</span></td>
									</tr>
								</tbody>
							</table>
						</div><!-- /panel -->
								
						<div class="section-header">
							<hr class="left visible-lg">
							<span>
								Timeline
							</span>
							<hr class="right visible-lg">
						</div>
								
						<div class="timeline-wrapper">
							<div class="timeline-start">
								<div class="panel">
									<div class="panel-body">
										<a href="#" class="pull-left avatar"> 
											<img src="img/user.jpg" class="img-circle" alt="User Avatar"> 
										</a>
										<div class="pull-left m-left-sm">
											<strong class="font-14">
												John Doe
											</strong><br/>
											<small class="text-muted">John_Doe@email.com</small>
											<div class="seperator"></div>
											<a href="profile.html" class="btn btn-xs btn-primary">View Profile</a>
											<a href="#" class="btn btn-xs btn-success">Chat</a>
										</div>
									</div>
								</div><!-- /panel -->
							</div>
							<div class="timeline-item">
								<div class="timeline-info">
									<div class="timeline-icon bg-grey">
										<i class="fa fa-file-text-o"></i>
									</div>
									<div class="time">
										06:50 Am
									</div>
								</div>
								<div class="panel panel-default timeline-panel">
									<div class="panel-heading">
										John Doe created a new article
										<span class="pull-right">
											<i class="fa fa-clock-o"></i> 5m ago
										</span>
									</div>
									<div class="panel-body">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus. Mauris vitae justo non felis pulvinar rhoncus. In quis massa ut risus sagittis luctus.
										</p>
										<a class="btn btn-xs btn-default">Read more</a>
										<a class="btn btn-xs btn-default"><i class="fa fa-reply"></i> Reply</a>
									</div>
								</div><!-- /panel -->
							</div><!-- /timeline-item -->
							<div class="timeline-item">
								<div class="timeline-info">
									<div class="timeline-icon bg-grey">
										<i class="fa fa-picture-o"></i>
									</div>
									<div class="time">
										07:15 Am
									</div>
								</div>
								<div class="panel panel-default timeline-panel">
									<div class="panel-heading">
										John Doe Added photos to the album <a href="#">NewPhoto</a>
									</div>
									<div class="panel-body">
										<a class="timeline-img" href="img/gallery2.jpg">
											<img src="img/gallery2.jpg" alt="Timeline Photo">
										</a>
										<a class="timeline-img" href="img/gallery7.jpg">
											<img src="img/gallery7.jpg" alt="Timeline Photo">
										</a>
									</div>
								</div><!-- /panel -->
							</div><!-- /timeline-item -->
							<div class="timeline-item">
								<div class="timeline-info">
									<div class="timeline-icon bg-warning">
										<i class="fa fa-briefcase"></i>
									</div>
									<div class="time">
										08:30 Am
									</div>
								</div>
								<div class="panel panel-default timeline-panel">
									<div class="panel-heading">
										Meeting 
										<span class="label label-danger m-left-xs">IMPORTANT</span>
									</div>
									<div class="panel-body">
										<h4>My office</h4> 
										<span>08:30 Am</span>
										<div class="seperator"></div>
										<div class="seperator"></div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus. Mauris vitae justo non felis pulvinar rhoncus. In quis massa ut risus sagittis luctus.</p>
									</div>
								</div><!-- /panel -->
							</div><!-- /timeline-item -->
							<div class="timeline-item">
								<div class="timeline-info">
									<div class="timeline-icon bg-success">
										<i class="fa fa-comment"></i>
									</div>
									<div class="time">
										10:49 Am
									</div>
								</div>
								<div class="panel panel-default timeline-panel">
									<div class="panel-heading">
										<span class="label label-success m-right-xs">NEW</span> John Doe comments on your post <a href="#">#1211</a>
									</div>
									<div class="panel-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus.</p>
										<div class="seperator"></div>
										<a class="btn btn-xs btn-info">Reply</a>
										<a class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
									</div>
								</div><!-- /panel -->
							</div><!-- /timeline-item -->
									
							<div class="timeline-date">
								3 Oct 2013
							</div>
							
							<div class="timeline-item">
								<div class="timeline-info">
									<div class="timeline-icon bg-warning">
										<i class="fa fa-plane"></i>
									</div>
									<div class="time">
										3:05 Pm
									</div>
								</div>
								<div class="panel panel-default timeline-panel">
									<div class="panel-heading">
										Fly to <strong class="font-14">London</strong>
									</div>
									<div class="panel-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor suscipit lobortis. Sed quis ipsum risus.</p>
									</div>
								</div><!-- /panel -->
							</div><!-- /timeline-item -->
							<div class="timeline-item clearfix">
								<div class="timeline-info">
									<div class="timeline-icon bg-grey">
										<i class="fa fa-pencil"></i>
									</div>
								</div>
							</div><!-- /timeline-item -->
						</div><!-- /timeline-wrapper-->
					</div><!-- /.col -->
					<div class="col-lg-4">
						<div class="panel bg-info">
							<div class="panel-body">
								<div id="lineChart" style="height: 150px;"></div>
								<div class="pull-right text-right">
									<strong class="font-14">Balance $3210</strong><br/>
									<span><i class="fa fa-shopping-cart"></i> Total Sales 867</span>
									<div class="seperator"></div>
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-xs-4">
										Sales in June
										<strong class="font=14 block">$664</strong>
									</div><!-- /.col -->
									<div class="col-xs-4">
										Sales in July
										<strong class="font=14 block">$731</strong>
									</div><!-- /.col -->
									<div class="col-xs-4">
										Sales in August
										<strong class="font=14 block">$912</strong>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div>
						</div><!-- /panel -->
								
						<div class="panel bg-success">
							<div class="panel-body">
								<div id="barChart" style="height: 150px;"></div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-xs-6">
										<h4 class="no-margin">Total Earnings</h4>
									</div><!-- /.col -->
									<div class="col-xs-6 text-right">
										<h4 class="no-margin">$17,531</h4>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div>
						</div><!-- /panel -->
								
						<div class="panel bg-danger">
							<div class="panel-body">
								<h4>Database Migration</h4>
								<div class="progress progress-striped active" style="height:8px; margin:5px 0 0 0;">
									<div class="progress-bar progress-bar-danger" style="width: 65%">
										<span class="sr-only">65% Complete</span>
									</div>
								</div>
								<strong class="pull-left m-top-xs">65% Complete</strong>
								<strong class="pull-right m-top-xs">1hr left</strong>
							</div>
						</div><!-- /panel -->
						<div class="panel panel-default">
							<div class="panel-heading">To Do List <span class="text-success m-left-xs"><i class="fa fa-check"></i></span></div>
							<ul class="list-group task-list">
								<li class="list-group-item selected">
									<label class="label-checkbox inline">
										 <input type="checkbox" class="task-finish" checked>
										 <span class="custom-checkbox"></span>
									</label>
									SEO Optimisation
									<span class="pull-right">
										<a href="#" class="task-del"><i class="fa fa-trash-o fa-lg text-danger"></i></a>
									</span>
								</li>
								<li class="list-group-item">
									<label class="label-checkbox inline">
										 <input type="checkbox" class="task-finish">
										 <span class="custom-checkbox"></span>
									</label>
									Unit Testing
									<span class="pull-right">
										<a href="#" class="task-del"><i class="fa fa-trash-o fa-lg text-danger"></i></a>
									</span>
								</li>
								<li class="list-group-item">
									<label class="label-checkbox inline">
										 <input type="checkbox" class="task-finish">
										 <span class="custom-checkbox"></span>
									</label>
									Mobile Development 
									<span class="pull-right">
										<a href="#" class="task-del"><i class="fa fa-trash-o fa-lg text-danger"></i></a>
									</span>
									<span class="badge badge-success m-right-xs">3</span>
								</li>
								<li class="list-group-item">
									<label class="label-checkbox inline">
										 <input type="checkbox" class="task-finish">
										 <span class="custom-checkbox"></span>
									</label>
									Database Migration
									<span class="pull-right">
										<a href="#" class="task-del"><i class="fa fa-trash-o fa-lg text-danger"></i></a>
									</span>
								</li>
								<li class="list-group-item">
									<label class="label-checkbox inline">
										 <input type="checkbox" class="task-finish">
										 <span class="custom-checkbox"></span>
									</label>
									New Frontend Layout <span class="label label-warning m-left-xs">PENDING</span>
									<span class="pull-right">
										<a href="#" class="task-del"><i class="fa fa-trash-o fa-lg text-danger"></i></a>
									</span>
								</li>
								<li class="list-group-item">
									<label class="label-checkbox inline">
										 <input type="checkbox" class="task-finish">
										 <span class="custom-checkbox"></span>
									</label>
									Bug Fixes <span class="label label-danger m-left-xs">IMPORTANT</span>
									<span class="pull-right">
										<a href="#" class="task-del"><i class="fa fa-trash-o fa-lg text-danger"></i></a>
									</span>
								</li>
							</ul><!-- /list-group -->
						</div><!-- /panel -->
								
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="#" class="pull-left avatar"> 
									<img src="img/user.jpg" class="img-circle" alt="User Avatar"> 
								</a>
								<div class="pull-left" style="margin-left:15px;">
									<strong class="font-16">John Doe</strong><br/>
									<span class="grey">John@email.com</span>
								</div>
							</div>
							<div class="list-group">
								<a class="list-group-item">
									<i class="fa fa-bar-chart-o fa-lg grey"></i>
									<span class="m-left-xs">Overview</span>
									<span class="badge badge-warning">3</span>
								</a>
								<a class="list-group-item">
									<i class="fa fa-shopping-cart fa-lg grey"></i>
									<span class="m-left-xs">Sales</span>
									<span class="badge badge-danger">14</span>
								</a>
								<a class="list-group-item">
									<i class="fa fa-envelope fa-lg"></i>
									<span class="m-left-xs">Inbox</span>
									<span class="badge badge-info">7</span>
								</a>
								<a class="list-group-item">
									<i class="fa fa-usd fa-lg"></i>	
									<span class="m-left-xs">Balance</span>
									<span class="badge">$3216</span>	
								</a>
							</div><!-- /list-group -->
						</div><!-- /panel -->
						<div class="panel panel-default">
							<div class="panel-body">
								<div id="donutChart" style="height: 250px;"></div>
								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													IN-STORE Sales
													<span class="badge badge-success pull-right">75%</span>
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse">
											<div class="panel-body">
												Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. 
											</div>
										</div>
									</div><!-- panel -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
													DOWMLOAD Sales
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse">
											<div class="panel-body">
												Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. 
											</div>
										</div>
									</div><!-- panel -->
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
													MAIL-ORDER Sales 
													<span class="badge badge-danger pull-right"><i class="fa fa-arrow-down"></i> 3%</span>
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body">
												Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. 
											</div>
										</div>
									</div><!-- panel -->
								</div><!-- panel-group -->
							</div>
						</div><!-- /panel -->
						<div class="panel panel-default">	
							<div class="panel-heading">
								Feeds
								<ul class="panel-toolbar">
									<li>
										<a href="#"><i class="fa fa-refresh"></i></a>
									</li>
								</ul>
							</div>
									
							<ul class="list-group">
								<li class="list-group-item clearfix">
									<div class="activity-icon small">
										<i class="fa fa-camera"></i>
									</div>
									<div class="pull-left m-left-sm">
										<span>John Doe Add a new photo.</span><br/>
										<small class="text-muted"><i class="fa fa-clock-o"></i> 2m ago</small>
									</div>
								</li>
								<li class="list-group-item clearfix">
									<div class="activity-icon bg-success small">
										<i class="fa fa-usd"></i>
									</div>
									<div class="pull-left m-left-sm">
										<span>2 items sold.</span><br/>
										<small class="text-muted"><i class="fa fa-clock-o"></i> 30m ago</small>
									</div>	
								</li>
								<li class="list-group-item clearfix">
									<div class="activity-icon bg-info small">
										<i class="fa fa-comment"></i>
									</div>
									<div class="pull-left m-left-sm">
										<span>John Doe commented on <a href="#">This Article</a></span><br/>
										<small class="text-muted"><i class="fa fa-clock-o"></i> 1hr ago</small>
									</div>
								</li>
								<li class="list-group-item clearfix">
									<div class="activity-icon bg-success small">
										<i class="fa fa-usd"></i>
									</div>
									<div class="pull-left m-left-sm">
										<span>3 items sold.</span><br/>
										<small class="text-muted"><i class="fa fa-clock-o"></i> 2days ago</small>
									</div>	
								</li>
							</ul><!-- /list-group -->	
							<div class="panel-footer text-right">										
								<a href="#" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> View more</a>
							</div>
						</div><!-- /panel -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.padding-md -->
		