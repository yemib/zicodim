@if(!session('admin'))
<script>
    window.location = '/admin_signin'

</script>
@endif

<?php
use App\client;
use App\vendor_list;
use App\add_category;
use App\add_product;
use App\slider;
use App\page_content;
use App\pickup;
use App\order_list;
use App\user_admin;

?>

@extends('admin_dashboar')



@section('contenth')


<?php
		
		function list_dashboard($src , $content , $number  ){
			?>

<a href="{{$src}}">
    <div class=" btn cartbutton  col-sm-3 " style=" color: rgba(51,51,51,1.00); margin: 10px ; height: 100px ; overflow: auto; width: 30%">

        <div class="">

            <p>

                <strong>{{$number}}</strong>
                <br />

                <strong> {{ $content }} </strong> </p>

        </div>


    </div>

</a>
<?php
			
		}
		
		?>

<!--   dashboard-->
<span> </span>

<br />




    <div id="manual_settings_area" class="section">
        <h2 id="hdrManualSettings">Mail Client Manual Settings</h2>
        
       {{--      <p id="descManualSettings" class="description">
                If you do not see an auto-configuration script for your client in the list above, you can manually configure your mail client using the settings below.
                We recommend that you use <abbr title="Internet Message Access Protocol" class="initialism">IMAP</abbr> and <abbr title="Simple Mail Transfer Protocol">SMTP</abbr> for your email account rather than ActiveSync unless you are on Android and need calendar and contacts support or push updates.
            </p> --}}
        
        <div class="row">

         <div class="col-md-6">
          <div id="ssl_settings_area" class="preferred-selection panel panel-primary">
               <div class="panel-heading">
                Secure <abbr title="Secure Sockets Layer">SSL</abbr>/<abbr title="Transport Layer Security">TLS</abbr> Settings
                (Recommended)
              </div>
              <table class="table manual_settings_table">
                  <tbody><tr>
                      <td id="lblSSLSettingsAreaUsername">Email :</td>
                      <td id="valSSLSettingsAreaUsername" class="data wrap-text">info@zicodimmono.com.ng</td>
                  </tr>
                  <tr>
                      <td id="lblSettingsAreaPassword">Password:</td>
                      <td id="valSettingsAreaPassword" class="escape-note"> <input  class="form-control"  value="Zicodim24!@" />   </td>
                  </tr>
                  <tr>
                      <td id="lblSettingsAreaIncomingServer">Incoming Server:</td>
                      <td id="valSettingsAreaIncomingServer" class="data">mail.zicodimmono.com.ng
                          <ul class="port_list list-inline">
                              <li><abbr title="Internet Message Access Protocol" class="initialism">IMAP</abbr> Port: 993</li>
                              
                              <li><abbr title="Post Office Protocol 3" class="initialism">POP3</abbr> Port: 995</li>
                              
                          </ul>
                      </td>
                  </tr>
                  
                  <tr>
                      <td id="lblSettingsAreaOutgoingServer">Outgoing Server:</td>
                      <td id="valSettingsAreaOutGoingServer" class="data">mail.zicodimmono.com.ng
                          <ul class="port_list list-inline">
                              <li><abbr title="Simple Mail Transfer Protocol">SMTP</abbr> Port: 465</li>
                          </ul>
                      </td>
                  </tr>
                  
                  <tr>
                      <td colspan="2" class="notes">
                                                    
                                                                                <div id="lblSettingsAreaSmallNote1" class="small_note">IMAP, POP3, and SMTP require authentication.</div>
                      </td>
                  </tr>
              </tbody></table>
          </div>
         </div>




         <div class="col-md-6">
            <div id="ssl_settings_area" class="preferred-selection panel panel-primary">
                 <div class="panel-heading">
                  Secure <abbr title="Secure Sockets Layer">SSL</abbr>/<abbr title="Transport Layer Security">TLS</abbr> Settings
                  (Recommended)
                </div>
                <table class="table manual_settings_table">
                    <tbody><tr>
                        <td id="lblSSLSettingsAreaUsername">Username:</td>
                        <td id="valSSLSettingsAreaUsername" class="data wrap-text">
                            zicodim@zicodimmono.com.ng</td>
                    </tr>
                    <tr>
                        <td id="lblSettingsAreaPassword">Password:</td>
                        <td id="valSettingsAreaPassword" class="escape-note"> <input  class="form-control"  value="Zicodim24!@" /> </td>
                    </tr>
                    <tr>
                        <td id="lblSettingsAreaIncomingServer">Incoming Server:</td>
                        <td id="valSettingsAreaIncomingServer" class="data">mail.zicodimmono.com.ng
                            <ul class="port_list list-inline">
                                <li><abbr title="Internet Message Access Protocol" class="initialism">IMAP</abbr> Port: 993</li>
                                
                                <li><abbr title="Post Office Protocol 3" class="initialism">POP3</abbr> Port: 995</li>
                                
                            </ul>
                        </td>
                    </tr>
                    
                    <tr>
                        <td id="lblSettingsAreaOutgoingServer">Outgoing Server:</td>
                        <td id="valSettingsAreaOutGoingServer" class="data">mail.zicodimmono.com.ng
                            <ul class="port_list list-inline">
                                <li><abbr title="Simple Mail Transfer Protocol">SMTP</abbr> Port: 465</li>
                            </ul>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" class="notes">
                                                      
                                                                                  <div id="lblSettingsAreaSmallNote1" class="small_note">IMAP, POP3, and SMTP require authentication.</div>
                        </td>
                    </tr>
                </tbody></table>
            </div>
           </div>
  
      </div>
        


      <div class="col-md-12">
        <div  align="center"> 

            <a     href="https://zicodimmono.com.ng:2096"  class="btn btn-sm  btn-info"  target="_blank">  Login To  Email  </a>
        </div>

      </div>
       
        

      

    </div>





@endsection
