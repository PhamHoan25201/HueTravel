@extends('layouts.admin')

{{$n = 1}} 
@section('content')
<div class="page-title">
  <h3>{{ trans('tpl.advertisement.index.title') }}</h3>
</div>
<div class="section">
  <div class="row">
      <div class="col-12">
          <table class='table table-striped' id="table1" width="100%" cellspacing="0">
                   <thead>
                      <tr>
                          <th>#</th>
                          <th>{{ trans('tpl.advertisement.index.url1') }}</th>
                          <th>{{ trans('tpl.advertisement.index.url2') }}</th>
                          <th>{{ trans('tpl.advertisement.index.startdate') }}</th>
                          <th>{{ trans('tpl.advertisement.index.enddate') }}</th>
                          <th>{{ trans('tpl.advertisement.index.description') }}</th>
                          
                      </tr>
                  </thead>

               @foreach($listAdvertisement as $advertisement)
                <tr>
                  <th>{{ $n++ }}</th>
                  <td><a href="{{ route('advertisement.show', $advertisement->id) }}">{{ $advertisement->url_img1 }}</a></td>
                  <td><a href="{{ route('advertisement.show', $advertisement->id) }}">{{ $advertisement->url_img2 }}</a></td>
                  <td><a href="{{ route('advertisement.show', $advertisement->id) }}">{{ $advertisement->start_date }}</a></td>
                  <td><a href="{{ route('advertisement.show', $advertisement->id) }}">{{ $advertisement->end_date }}</a></td>
                  <td><a href="{{ route('advertisement.show', $advertisement->id) }}">{{ $advertisement->description }}</a></td>
                  
                  
                  <td><a href="{{ route('advertisement.edit', $advertisement->id)}}">{{ trans('tpl.category.index.edit') }}</a></td>
                  <td>
                    <form action="{{ route('advertisement.destroy',$advertisement->id)}}" method="POST">
                      {{method_field('DELETE')}}
                      {{csrf_field()}}
                      <input type="submit" class="btn btn-danger" value="{{ trans('tpl.category.index.delete') }}"/>
                    </form>
                  </td>
                </tr>
              @endforeach
          </table>
      </div>
  </div>
</div> 
@endsection