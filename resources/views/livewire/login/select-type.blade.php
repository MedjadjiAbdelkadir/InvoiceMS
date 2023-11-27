<div class="col-sm-12 col-md-12 col-lg-7 pt-sm-1 pp-sm-1 pt-md-5 pb-md-5">
    <div class="select-type">
        <div class="row mt-2">
            <div class="col-sm-12 col-md-4 mb-2 ">
                <button class="btn btn-info btn-lg btn-block" style="height: 120px"
                    type="button"
                    wire:click="changeType(1)"
                >
                    <div style="height: 70px">
                        <img src="{{ asset('images/UnitManagerAvatar.png') }}" width="100%" height="100%"  alt="" srcset="">
                    </div>
                    <div>
                        {{ trans('pages/login.unit_manager')  }}
                    </div>
                </button>   
            </div>
            <div class="col-sm-12 col-md-4 mb-2 ">
                <button class="btn btn-info btn-lg btn-block" style="height: 120px"
                    type="button"
                    wire:click="changeType(2)"
                >
                    <div style="height: 70px">
                        <img src="{{ asset('images/UnitManagerAvatar.png') }}" width="100%" height="100%"  alt="" srcset="">

                    </div>
                    <div>
                        {{ trans('pages/login.branch_manager')  }}
                    </div>
                </button>   
            </div>
            <div class="col-sm-12 col-md-4 mb-2 ">
                <button class="btn btn-info btn-lg btn-block" style="height: 120px"
                    type="button"
                    wire:click="changeType(3)"
                >
                    <div style="height: 70px">
                        <img src="{{ asset('images/UnitManagerAvatar.png') }}" width="100%" height="100%"  alt="" srcset="">
                    </div>
                    <div>
                        {{ trans('pages/login.region_manager')  }}
                    </div>
                </button>   
            </div>
        </div>
    </div>
    
    @php
        
    // if(auth('region_manager')->check()){
    //     dd(auth('region_manager' )->user()) ;
    // }
    @endphp
    @if ($errorMessage)
        <div class="alert alert-danger" id="success-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $errorMessage }}
        </div>
    @endif
    <div class="form-section">
        <form action="" method="POST" >
            @csrf
            <h2>{{ trans('pages/login.title_form') }} 
                @if ($selectType == 1)
                {{ trans('pages/login.unit_manager')  }}
                @elseif($selectType == 2)
                {{ trans('pages/login.branch_manager')  }}
                @elseif($selectType == 3)
                {{ trans('pages/login.region_manager')  }}
                @endif
            </h2>
            <div class="form-group">
                <label for="exampleInputEmail1" class="mb-0 pb-0">{{ trans('pages/login.email_label')  }}</label>
                <input type="email" name="email" class="form-control mt-1 @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"
                wire:model="email"
                >
                @error('email')
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                <div class="text-danger">{{ $message }}</div>
                @enderror
                {{-- @error('Email')
                <small class="text-danger d-block">
                  {{ $message }}
                </small>
                @enderror --}}
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="mb-0 pb-0">{{ trans('pages/login.password_label')  }}</label>
                <input type="password" class="form-control mt-1 @error('password') is-invalid @enderror" id="exampleInputPassword1"
                wire:model="password"
                
                >
                @error('password')
                {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                <div class="text-danger">{{ $message }}</div>
                @enderror
                {{-- @error('Password')
                <small class="text-danger d-block">
                  {{ $message }}
                </small>
                @enderror --}}
            </div>
            <a href="" class="text-right "><h6>{{ trans('pages/login.forget_password')  }}</h6></a>

            {{-- <button class="btn btn-success btn-sm nextBtn btn-lg pull-right"
               type="button">{{trans('Parent_trans.Next')}}
            </button> --}}

            <button type="button" class="btn btn-primary btn-md btn-block mb-3"
            wire:click="login"
            >{{ trans('pages/login.login_btn')  }}</button>   
        </form>                        
    </div>  
</div>