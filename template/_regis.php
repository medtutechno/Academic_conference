<div class='columns'>
  <div class='column is-4'>
    <p class='title is-5'>ลงทะเบียนเข้าร่วมประชุมวิชาการ</p>  
  </div>
  <div class='column is-2 is-offset-6'>
    <a class='button is-success is-outlined is-pulled-right' ng-click='btnReg()' disabled> ลงทะเบียน</a>  
  </div>
</div>

<div class='columns'>
  <div class='column is-6'>

    <div class='field is-horizontal'>
      <div class='field-body'>

        <div class='field has-addons '>
          <p class='control'>
            <span class='select'>
              <select ng-options='prefix.prefix_id as prefix.prefix for prefix in dataPrefix' ng-model='sel_prefix' ng-change='addPrefix()'></select>
            </span>
          </p>

          <p class='control has-icons-left'>
            <input class='input' type='text' placeholder='ชื่อ' ng-model='name' id='name' required disabled>
            <span class='icon is-small is-left'>
              <i class='fas fa-user'></i>
            </span>
          </p>
        </div>

      </div>
    </div>

    <div class='field is-horizontal'>
      <div class='field-body'>

        <div class='field'>
          <p class='control has-icons-left'>
            <input class='input' type='text' placeholder='นามสกุล' ng-model='lastname' id='lastname' required disabled>
            <span class='icon is-small is-left'>
              <i class='fas fa-user'></i>
            </span>
          </p>
        </div>

      </div>
    </div>

    <div  class='field is-horizontal'>
      <div class='field-body'>
        <div class='field'>
          <p class='control has-icons-left'>
            <input type='text' class='input' placeholder='เลขที่ใบประกอบ' ng-model='numberCerf' disabled>
            <span class='icon is-small is-left'>
              <i class='fas fa-address-card'></i>
            </span>    
          </p>
        </div>

        <div class='field'>
          <p class='control has-icons-left'>
            <input type='email' class='input' placeholder='e-mail' ng-model='mail' id='mail' required disabled>
            <span class='icon is-small is-left'>
              <i class='fas fa-address-card'></i>
            </span>    
          </p>
        </div>

      </div>
    </div>

    <div  class='field is-horizontal'>
      <div class='field-body'>
        <div class='field'>
          <div class='control has-icons-left'>
            <div class='select'>
              <select ng-options='type.idtype_reg as type.type_reg for type in typeReg' ng-model='sel_type' disabled></select>
            </div>
            <div class='icon is-small is-left'>
              <i class='fas fa-id-badge'></i>
            </div>    
          </div>
        </div>
      </div>
    </div>

        <div  class='field is-horizontal'>
      <div class='field-body'>
        <div class='field'>
          <p class='control has-icons-left'>
            <input type='text' class='input' placeholder='สถานที่ทำงาน' ng-model='place' disabled>
            <span class='icon is-small is-left'>
              <i class='fas fa-hotel'></i>
            </span>    
          </p>
        </div>
      </div>
    </div>

    <div  class='field is-horizontal'>
      <div class='field-body'>
        <div class='field'>
          <div class='control has-icons-left'>
            <div class='select'>
              <select ng-options='food.idfood as food.food for food in dataFood' ng-model='sel_food' disabled></select>
            </div>
            <div class='icon is-small is-left'>
              <i class='fas fa-utensils'></i>
            </div>    
          </div>
        </div>
        <div class='field'>
          <p class='control has-icons-left'>
            <input type='text' class='input' placeholder='เบอร์โทรติดต่อ' ng-model='tel' id='tel' required disabled>
            <span class='icon is-small is-left'>
              <i class='fas fa-mobile-alt'></i>
            </span>    
          </p>
        </div>
      </div>
    </div>

    

  </div>
  <div class='column is-6'>
    <article class='message'>
      <div class='message-header'>
        <p>เข้าร่วมประชุมหัวข้อ</p>
      </div>
      <div class='message-body'>
        <div class='columns'>
            <div class='column is-9'>หัวข้อ</div>
            <div class='column is-3 is-pulled-right'>จำนวนคงเหลือ</div>
          </div>
        <div class='scrollbar'>

          <div ng-repeat='session in dataSession'>
            <div class='field'>
              <div ng-if='session.session_amonut-session.session_bookking>0'>
                <label class='checkbox'>
                  <input type='checkbox' ng-model='selSession[$index+1]' disabled> {{session.session}} 
                </label>
                <span class='tag is-success is-pulled-right'>{{session.session_amonut-session.session_bookking}}</span>
              </div>
              <div ng-if='session.session_amonut-session.session_bookking==0'>
                <label class='checkbox'>
                  <input type='checkbox' disabled> {{session.session}} 
                </label>
                <span class='tag is-danger is-pulled-right'>{{session.session_amonut-session.session_bookking}}</span>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </article>  
      
  </div>
</div>

