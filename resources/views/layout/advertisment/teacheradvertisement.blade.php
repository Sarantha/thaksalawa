<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/custom.css">
    <title>Show Advertisement</title>
    @include('heads.heads')
    
</head>
<body>
        @include('heads.innernavibar')
        <div class="container">
            <form action="" method="POST">
                @csrf
                <div class="field has-addons searchagain">
                    <p class="control has-icons-left is-expanded">
                        <input class="input is-medium inputsearchbox" type="text" placeholder="Search by City,Postal Code" id="search" name="searchquery">
                        <span class="icon is-small is-left">
                            <i class="fas fa-search"></i>
                        </span>
                    </p>
                    <div class="control">
                        <button class="button inputsearchbox is-black is-medium"><span class="subtitle is-6 has-text-white">Search</span></button>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-2">
                        <div class="field">
                            <div class="control">
                                <div class="select is-black">
                                    <select>
                                      <option>Select Stream</option>
                                      <option>Ordinary Level</option>
                                      <option>Advance Level</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-2">
                        <div class="field">
                            <div class="control">
                                <div class="select is-black">
                                    <select>
                                      <option>Select Medium</option>
                                      <option>Sinhala Medium</option>
                                      <option>Tamil Medium</option>
                                      <option>English Medium</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                    </div>
                    <div class="column is-2">
                        <div class="field">
                            <div class="control">
                                <div class="select is-black">
                                    <select>
                                      <option>Select Subject</option>
                                      <option></option>
                                      <option></option>
                                      <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="column is-6"></div>
                    <div class="container">

                    </div>
                    
                          

                </div>

            </form>
            <div class="my-5"></div>
            <div class="columns">
              @foreach ($ShowAds as $item)
  
                 
              <div class="column is-4">
                  <div class="card">
                          <div class="card-image">
                            <figure class="image is-4by3">
                              <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                            </figure>
                          </div>
                          <div class="card-content">
                            <div class="media">
                              <div class="media-left">
                                <figure class="image is-48x48">
                                  <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                                </figure>
                              </div>
                              <div class="media-content">
                                <p class="title is-4">{{$item->name}}</p>
                                <p class="subtitle is-6">{{$item->email}}</p>
                              </div>
                            </div>
                        
                            <div class="content"> 
                              <br>             
                              <h4>{{$item->subject}}</h4>
                              <h5>{{$item->language}}</h5>
                              <a>{{$item->institude}}</a>
                              <br>
                              <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                              <button class="button is-success is-pulled-right">See more</button>
                            </div>
                          </div>
                        </div>
              </div>
              @endforeach
              </div> 
            <div class="columns">

            </div>
        </div>
</body>
</html>