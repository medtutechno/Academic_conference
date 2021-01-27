<div class='row'>

  <div class='offset-md-3 col-md-4'>

    <h4>ลงทะเบียนเข้าร่วมประชุมวิชาการ</h4>  

  </div>
    
</div>





<div class='row mt-3'>

  <div class='offset-md-3 col-md-6 border p-3' style='background:#fff;'>

    <form>

      <div class='form-row'>  
        <div class='col-auto my-1'>
          <label>คำนำหน้า</label>
          <select ng-options='prefix.prefix_id as prefix.prefix for prefix in dataPrefix' ng-model='sel_prefix' ng-change='addPrefix()' class='custom-select mr-sm-2 rounded-0'></select>
        </div>

        <div class='col-auto my-1'>
            <label>ชื่อ</label>
            <input class='form-control col-form-label-sm rounded-0' type='text' placeholder='ชื่อ' ng-model='name' id='name' required>
        </div>

        <div class='col-auto my-1'>
          <label>นามสกุล</label>
          <input class='form-control col-form-label-sm rounded-0' type='text' placeholder='นามสกุล' ng-model='lastname' id='lastname' required>
        </div> 
      </div>

      <div class='form-row'>
        <div class='col-auto my-1'>
          <label>เลขที่ใบประกอบ</label>
          <input type='text' class='form-control col-form-label-sm rounded-0' placeholder='เลขที่ใบประกอบ' ng-model='numberCerf'>
        </div>

        <div class='col-auto my-1'>
          <label>e-mail</label>
            <input type='email' class='form-control col-form-label-sm rounded-0' placeholder='e-mail' ng-model='mail' id='mail' required>
        </div>
      </div>

      <div class='form-row'>
        <div class='col-auto my-1'>
          <label>ประเภทบุคลากร</label>
          <select ng-options='type.idtype_reg as type.type_reg for type in typeReg' ng-model='sel_type'  class='custom-select mr-sm-2 rounded-0'></select>
        </div>


      </div>

      <div class='form-row'>
        <div class='col-auto my-1'>
            <label>สถานที่ทำงาน</label>
            <input type='text' class='form-control col-form-label-sm rounded-0' placeholder='สถานที่ทำงาน' ng-model='place'>
        </div>
        <div class='col-auto my-1'>
          <label>เบอร์โทรติดต่อ</label>
          <input type='text' class='form-control col-form-label-sm' placeholder='เบอร์โทรติดต่อ' ng-model='tel' id='tel' required>
        </div>
      </div>
      <div class='form-row mt-3'>
        <div class='col-md-3 offset-md-5'>
        <button type='button' ng-click='btnReg()' class='btn btn-outline-success rounded-0'> ลงทะเบียน</button> 
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

   





    



















