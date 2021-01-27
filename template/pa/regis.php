<div class='container-fluid' style='background: #fff;'>
	<div class='row' style='height: 100vh;'>
		<div class='col-md-6' style='background:url("../../img/8328.jpg") no-repeat; color:#fff;'>
			<div class='jumbotron' style='background: none;'>
				<h4 class='display-4'>ภาควิชาการพยาธิวิทยา</h4>
				<h4 class='display-6'>คณะแพทยศาสตร์ มหาวิทยาลัยธรรมศาสตร์</h4>
				<p> 
					ขอเชิญผู้สนใจ เข้าร่วมประชุมเชิงปฏิบัติการเซลล์วิทยา ครั้งที่ 13
					<br>เรื่อง Update cervical cancer screening guideline in Thailand
					<br>วันที่ 15-16 สิงหาคม 2562 ณ ห้องประชุมสโมสร ชั้น 4 อาคารคุณากร
					คณะแพทยศาสตร์ มหาวิทยาลัยธรรมศาสตร์ ศูนย์รังสิต
				</p>
			</div>
		</div>
		<div class='col-md-5 offset-md-1' style='padding-top:50px;'>
			<h4>ลงทะเบียน</h4>
			<form>
				<div class='form-group'>
					<div class='row'>
						<div class='col-md-3'>
							<input type='text' class='form-control' placeholder='ชื่อ' ng-model='name' ng-change='chkValname(name)' disabled>
							<small class='form-text' style='color:red;' ng-hide='staname'>
								กรุณากรอกชื่อ
							</small>
						</div>
						<div class='col-md-3'>
							<input type='text' class='form-control' placeholder='นามสกุล' ng-model='lname' ng-change='chkVallname(lname)' disabled>
							<small class='form-text' style='color:red;' ng-hide='stalname'>
								กรุณากรอกนามสกุล
							</small>
						</div>
						<div class='col-md-3'>
							<input type='text' class='form-control' placeholder='ตำแหน่ง' ng-model='posit' ng-change='chkValposit(posit)' disabled>
							<small class='form-text' style='color:red;' ng-hide='staposit'>
								กรุณากรอกตำแหน่ง
							</small>
						</div>
					</div>
				</div>
				<div class='form-group'>
					<div class='row'>
						<div class='col-md-10'>
							<input type='text' class='form-control' placeholder="หน่วยงาน" ng-model='sect' ng-change='chkValsect(sect)' disabled>
							<small class='form-text' style='color:red;' ng-hide='stasect'>
								กรุณากรอกหน่วยงาน
							</small>
						</div>
					</div>
				</div>
				<div class='form-group'>
					<div class='row'>
						<div class='col-md-10'>
							<label>ที่อยู่</label>
							<textarea class='form-control' row='3' ng-model='addr' ng-change='chkValaddr(addr)'></textarea>
							<small class='form-text' style='color:red;' ng-hide='staaddr' disabled>
								กรุณากรอกที่อยู่
							</small>
						</div>
					</div>
				</div>
				<div class='form-group'>
					<div class='row'>
						<div class='col-md-5'>
							<input type='text' class='form-control' placeholder='เบอร์โทรศัพท์' ng-model='tel' ng-change='chkValtel(tel)' disabled>
							<small class='form-text' style='color:red;' ng-hide='statel'>
								กรุณากรอกเบอร์โทรศัพท์
							</small>
						</div>
						<div class='col-md-5'>
							<input type='text' class='form-control' placeholder='โทรสาร' ng-model='fax' ng-change='chkValfax(fax)' disabled>
							<small class='form-text' style='color:red;' ng-hide='stafax'>
								กรุณากรอกโทรสาร
							</small>
						</div>
					</div>
				</div>
				<div class='form-group'>
					<div class='row'>
						<div class='col-md-10'>
							<input type='text' class='form-control' placeholder='E-mail' ng-model='mail' ng-change='chkValmail(mail)' disabled>
							<small class='form-text' style='color:red;' ng-hide='stamail'>
								กรุณากรอก E-mail
							</small>
						</div>
					</div>
					<div class='row'>
						<small class='form-text' style='color:red;'>
							* ลงทะเบียน Free ผู้เข้าร่วมอบรมจะได้รับ CME 12 หน่วยกิตพร้อมใบประกาศนียบัตร
						</small>
						<small class='form-text' style='color:red;'>
							* ระบบจะทำการส่ง e-mail อัตโนมัติเพื่อบอกว่าท่านได้ลงทะเบียนได้สำเร็จ
						</small>
					</div>
				</div>
				<div class='form-group'>
					<div class='row'>
						<div class='col-md-3'>
							<button class='btn btn-primary' ng-click='btnSendData()' disabled>ที่นั่งเต็ม</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>