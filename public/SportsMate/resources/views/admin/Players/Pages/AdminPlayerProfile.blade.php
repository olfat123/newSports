@extends('admin.index')
@section('content')

<!------ start Profile Content---------->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ trans('admin.UserProfile') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
							<img class="profile-user-img img-responsive img-circle" 
										@if (empty($User->user_img))
											src="{{ url('/') }}/design/AdminLTE/dist/img/user.png"
										@else
											src="{{ Storage::url($User->user_img) }}"
										@endif 
										alt="{{ $User->name }}"
							>

              <h3 class="profile-username text-center">{{ $User->name }}</h3>

              <p class="text-muted text-center">{{ trans('admin.UserPlayer') }}</p>
              <p class="text-muted text-center">
	              {{ trans('admin.MemberSince') }}  @php  echo date('d-m-Y', strtotime($User->created_at)) ; @endphp
							</p>
							@php 
									//$creatorRate=willvincent\Rateable\Rating::where('rateable_id', $user->playerProfile['id'])->get() 
									$Rate = $User->playerProfile->averageRating()
							@endphp	
							<p class="text-muted text-center">
									<span>
											@for ($i = 0; $i < 5; $i++)
													@if (round($Rate) > $i)
															<i style="color:#ffb300" class="fa fa-star"  aria-hidden="true"></i>
													@else
															<i style="color:#eee" class="fa fa-star"  aria-hidden="true"></i>
													@endif
											@endfor
									</span>
							</p>	

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>{{ trans('admin.playerSports') }}</b> <a class="pull-right">{{ $User->sports()->count() }}</a>
                </li>
                <li class="list-group-item">
                  <b>{{ trans('admin.createdEvents') }}</b> <a class="pull-right">{{ $User->createdEvents()->count() }}</a>
                </li>
                <li class="list-group-item">
                  <b>{{ trans('admin.createdChallenges') }}</b> <a class="pull-right">{{ $User->createdChallenges()->count() }}</a>
                </li>
                <li class="list-group-item">
                  <b>{{ trans('admin.appliedEvents') }}</b> <a class="pull-right">{{ $User->appliedEvents()->count() }}</a>
                </li>
                <li class="list-group-item">
                  <b>{{ trans('admin.candidatedEvents') }}</b> <a class="pull-right">{{ $User->candidatedEvents()->count() }}</a>
                </li>
                <li class="list-group-item">
                  <b>{{ trans('admin.challenged') }}</b> <a class="pull-right">{{ $User->challengeEvents()->count() }}</a>
                </li>
                <li class="list-group-item">
                  <b>Candidated Events</b> <a class="pull-right">{{ $User->candidatedEvents()->count() }}</a>
                </li>
              </ul>

                    {!! Form::open(['url' => aurl('Player/changeActivationStatus/'), 'method' => 'POST']) !!}
                    {!! Form::hidden( 'target', $User->id ) !!}
                    @if($User->our_is_active == 1)
                        {!! Form::hidden( 'status', 0 ) !!}
                        {!! Form::submit(trans('admin.deactivate'), ['class' => 'btn btn-danger btn-block']) !!}
                    @elseif ($User->our_is_active == 0)
                        {!! Form::hidden( 'status', 1 ) !!}
                        {!! Form::submit(trans('admin.activate'), ['class' => 'btn btn-success btn-block']) !!}
                    @endif

                    {!! Form::close() !!}

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


        </div>

		 <div class="col-md-8">
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-venus-mars custom"></i></i>  Gender</strong>

              <p class="text-muted">
               @if($User->playerprofile->p_gender == 1)
               		Male
               @elseif($User->playerprofile->p_gender == 2)
               		Female
               @else
               		Not Determind
               @endif
              </p>

              <hr>

              <strong><i class="fa fa-venus-mars custom"></i></i>  Preferred Gender</strong>

              <p class="text-muted">
               @if($User->playerprofile->p_preferred_gender == 1)
               		Male
               @elseif($User->playerprofile->p_preferred_gender == 2)
               		Female
               @else
               		Not Determind
               @endif
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">
              	{{$User->playerProfile->country->c_en_name}},
                {{$User->playerProfile->governorate->g_en_name}}
                {{$User->playerProfile->area->a_en_name}}
              </p>

              <hr>

              <strong><i class="fa fa-soccer-ball-o margin-r-5"></i> Sports</strong>

              <p>
              	@foreach ($User->sports as $sport)

									<span class="label {{ randomClasses() }}" style="margin: 10px;" >
										@if (direction() == 'ltr')
											{{$sport->en_sport_name}}
										@else
											{{$sport->ar_sport_name}}
										@endif
									</span>
			     @endforeach

              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

         <div class="col-md-12">

        </div>
        <!--/.col -->
      </div>
      <!-- /.row -->

    </section>

  <!------ End Profile Content ------------->

@endsection
