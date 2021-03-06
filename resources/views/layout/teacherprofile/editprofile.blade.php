<div class="column displaybox">
        {{-- @include('profile.navprofile') --}}
        <nav class="breadcrumb has-arrow-separator profileback breadcrumbcss" aria-label="breadcrumbs">
          <ul>
            <li><a href="/profile">Profile</a></li>
            <li class="is-active"><a href="/profile">Edit Profile</a></li>
          </ul>
        </nav>
        <div class="columns is-mobile is-centered">
            <div class="column is-half">
                {{-- @include('layouts.errors')  --}}
                @if(session()->has('message'))
                <div class="notification is-success">
                    <button class="delete"></button>
                    <h1 class="is-size-7"><b> {{ session()->get('message') }}</b></h1>
                </div>
                @endif
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                        $notification = $delete.parentNode;
                        $delete.addEventListener('click', () => {
                            $notification.parentNode.removeChild($notification);
                        });
                    });
                });
            </script>
        </div>
        <div class="card cardmargin">
                  <h1 class="title has-text-centered">Edit Your Account</h1>
                  <div class="centerinputbox">
                    <form action="" method="post">
                      @csrf
                        <div class="field">
                          <label class="label">Name</label>                      
                        <input class="input" type="text" value="{{Auth::user()->name}}" placeholder="Your Name" name="name">                                 
                        </div>
                        <div class="field">
                            <label class="label">Email</label>
                            <input class="input" type="email" value="{{Auth::user()->email}}" placeholder="Your Email" name="email">
                        </div>
                        <div class="field">
                          <label class="label">NIC</label>
                          <input class="input" type="text" value="{{$details->NIC}}" placeholder="NIC" name="nic">
                        </div>
                        <div class="field">                  
                           <label class="label">Medium</label>                                                              
                            <div class="field has-centered">
                                <div class="select is-success is-full is-7">
                                    <select name="medium">                                       
                                        <option value="Sinhala"
                                            @if ((Auth::user()->medium)=='sinhala')
                                            selected
                                                
                                            @endif
                                        >Sinhala</option>
                                        <option value="English"
                                            @if ((Auth::user()->medium)=='English')
                                            selected
                                                
                                            @endif
                                        >English</option>
                                        <option value="Tamil"
                                            @if ((Auth::user()->medium)=='Tamil')
                                            selected
                                                
                                            @endif
                                        >Tamil</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="field">                  
                                <label class="label">Stream</label>                                                              
                                 <div class="field has-centered">
                                     <div class="select is-success is-full is-7">
                                         <select name="medium">                                       
                                             <option value="">Ordinary Level</option>
                                             <option value="">Advance Level</option>
                                         </select>
                                     </div>
                                 </div>
                             </div>
                        <div class="field">
                            <label class="label">Address</label>                   
                            <input class="input" type="text" value="" placeholder="Address" name="address">
                        </div>
                        <div class="field">
                            <label class="label">City</label>
                            <input class="input" type="text" value="" placeholder="City" name="city">
                        </div>
                        <div class="field">
                            <label class="label">Phone No</label>                 
                            <input class="input" type="text" value="" placeholder="Phone No" name="phoneno">
                        </div>
                        <div class="field">
                            <label class="label">Qulifications</label>                 
                            <input class="input" type="text" value="" placeholder="qulifications" name="descrption">
                        </div>
                        <div class="field">
                            <p class="control has-text-centered">
                                <button type="submit" class="button is-success">
                                      <span class="buttonspace">Save Change</span>
                                </button>
                            </p>
                        </div>
                      </form>
                </div>
                     
                </div>
            </div>
            </div>