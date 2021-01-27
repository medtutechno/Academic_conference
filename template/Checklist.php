<div class='row'>
	<div class='col-md-6'>
		<form>

			<div class='row'>
			    <div class='col-md-5'>
			      <div class="input-group mb-2 mr-sm-2">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><i class='fas fa-user'></i></div>
			        </div>
			          <input class='form-control col-form-label-sm ' type='text' placeholder='ชื่อ' ng-model='name' id='name' required ng-enter='btnChk()'> 
			      </div>
			      <small class="form-text text-danger" ng-hide='emptyName'>
			          	กรุณากรอกชื่อ
			      </small>
			    </div>
			    <div class='col-md-5'>
		          <div class="input-group mb-2 mr-sm-2">
		            <div class="input-group-prepend">
		              <div class="input-group-text" ><i class='fas fa-user'></i></div>
		            </div>
		            <input class='form-control col-form-label-sm ' type='text' placeholder='นามสกุล' ng-model='lastname' id='lastname' required ng-enter='btnChk()'>
		          </div>
		          <small class="form-text text-danger" ng-hide='emptyLname'>
			          	กรุณากรอกนามสกุล
			      </small>
		        </div>
		        <div class='col-md-2'>
		        	<button type='button' class='btn btn-outline-success btn-sm' ng-click='btnChk()' ng-keypress=''> ค้นหา</button>
		        </div>
			</div>

			<div class='form-row align-item-center'>
				<span ng-hide='nodata'><h5 class='text-danger'>ไม่พบข้อมูล</h5></span>
				<div div ng-repeat='regis in RegisData'>
					<div class='row'>
						<div class='col-md-9'>
							<div class="input-group mb-2 mr-sm-2">
				        		<div class="input-group-prepend">
				          			<div class="input-group-text col-form-label-sm"><i class='fas fa-user'></i></div>
				        		</div>
								<input type='text' disabled value='{{regis.type_reg}}' class='form-control'>
							</div>
						</div>
						<div class='col-md-3'>
							<div class="input-group mb-2 mr-sm-2">
				        		<div class="input-group-prepend">
				          			<div class="input-group-text col-form-label-sm"><i class='fas fa-utensils'></i></div>
				        		</div>
								<input type='text' disabled value='{{regis.food}}' class='form-control'>
							</div>
						</div>
					</div>
					<div class='row'>
						<div class='col-md-6'>
							<div class="input-group mb-2 mr-sm-2">
				        		<div class="input-group-prepend">
				          			<div class="input-group-text col-form-label-sm"><i class='fas fa-envelope'></i></div>
				        		</div>
								<input type='mail' value='{{regis.email}}' class='form-control'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class="input-group mb-2 mr-sm-2">
				        		<div class="input-group-prepend">
				          			<div class="input-group-text col-form-label-sm"><i class='fas fa-mobile'></i></div>
				        		</div>
								<input type='text' value='{{regis.tel}}' class='form-control'>
							</div>
						</div>
					</div>
					<div class='row'>
						<div class='col-md-6'>
							<div class="input-group mb-2 mr-sm-2">
				        		<div class="input-group-prepend">
				          			<div class="input-group-text col-form-label-sm"><i class='fas fa-id-card'></i></div>
				        		</div>
								<input type='mail' value='{{regis.number_cert}}' class='form-control'>
							</div>
						</div>
						<div class='col-md-6'>
							<div class="input-group mb-2 mr-sm-2">
				        		<div class="input-group-prepend">
				          			<div class="input-group-text col-form-label-sm"><i class='fas fa-hotel'></i></div>
				        		</div>
								<input type='text' value='{{regis.workplace}}' class='form-control'>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</form>
	</div>

  <!--<div class='col-md-6'>
    <ul class='list-group'>
      <li class='list-group-item' style='background: #4a4a4a; color:#fff;'>
        <h6>เข้าร่วมประชุมหัวข้อ</h6>
      </li>
      <li class='list-group-item'>
          <div class='scrollbar'>
            <div ng-repeat='session in dataSession'>
              <div class='field'>
                <div ng-if='session.session_amonut-session.session_bookking>0'>
                  <label class='checkbox'>
                    <input type='checkbox' ng-model='selSession[$index+1]'> {{session.session}} 
                  </label>
                  <span class='badge badge-success float-right'>{{session.session_amonut-session.session_bookking}}</span>
                </div>
                <div ng-if='session.session_amonut-session.session_bookking==0'>
                  <label class='checkbox'>
                    <input type='checkbox' disabled> {{session.session}} 
                  </label>
                  <span class='badge badge-danger float-right'>{{session.session_amonut-session.session_bookking}}</span>
                </div>
              </div>
            </div>
          </div>
      </li>
    </ul>
  </div>-->
</div>