
@extends('admin.layouts.app')

@section('content')

  <div id="jobs">
    <div class="col-lg-8" class="data_table">
      <h1>Jobs</h1>

      <ul class="nav nav-pills mb-2 mt-4" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Your jobs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Open jobs</a>
        </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row">
              @foreach ($userJobs as $job)
                @if($job->status == "pending")
                <div class="col-sm-4 mt-4">
                  <div class="card border-warning md-4 ">
                    <div class="card-body">
                      <h5 class="card-title">Active <span class="float-right"><i>{{$job->ticket}}</i></span></h5>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Rank from:</b> <i>{{$job['order']['info']['rankFrom']->rank}}</i></li>
                        <li class="list-group-item"><b>Rank to:</b> <i>{{$job['order']['info']['rankTo']->rank}}</i></li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                      <p class="card-text mt-2 "><small class="text-muted">Created {{ $job->created_at->diffForHumans()}}</small></p>
                      <div class="mt-2">
                        <a href="#" class="card-link">Job</a>
                        <a href="#" class="card-link">Order</a>
                      </div>

                    </div>
                  </div>
                </div>
                @endif
                @if($job->status == "closed")
                <div class="col-sm-4 mt-4">
                  <div class="card border-light md-4">
                    <div class="card-body">
                      <h5 class="card-title">Closed <span class="float-right"><i>{{$job->ticket}}</i></span></h5>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Rank from:</b> <i>{{$job['order']['info']['rankFrom']->rank}}</i></li>
                        <li class="list-group-item"><b>Rank to:</b> <i>{{$job['order']['info']['rankTo']->rank}}</i></li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                      <p class="card-text mt-2 "><small class="text-muted">Created {{ $job->created_at->diffForHumans()}}</small></p>
                      <div class="mt-2">
                        <a href="#" class="card-link">Job</a>
                        <a href="#" class="card-link">Order</a>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
              @endforeach
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row">
              @foreach ($openJobs as $job)
                <div class="col-sm-4 mt-4">
                  <div class="card border-success md-4">
                    <div class="card-body">
                      <h5 class="card-title">Open <span class="float-right"><i>{{$job->ticket}}</i></span></h5>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Rank from:</b> <i>{{$job['order']['info']['rankFrom']->rank}}</i></li>
                        <li class="list-group-item"><b>Rank to:</b> <i>{{$job['order']['info']['rankTo']->rank}}</i></li>
                        <li class="list-group-item">Vestibulum at eros</li>
                      </ul>
                      <p class="card-text"><small class="text-muted">Created {{ $job->created_at->diffForHumans()}}</small></p>
                      <form action="/admin/jobs/{{$job->id}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <button type="submit" class="btn btn-success">Accept job</button>
                      </form>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
    </div>
  </div>

@endsection
