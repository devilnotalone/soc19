@extends('layouts.page')
@section('content')
<div class="container-fluid">
    <div class="row m-4">
        <div class="col-md-12 col-sm-12 mb-3 col-lg-9">
            @if ($count_course != 1)
            <div class="accordion" id="accordionSoc">
                @php
                $i = 0;
                @endphp
                @foreach ($course as $list )
                @php
                ++$i;
                @endphp

                <div class="card shadow-none bordered">
                    <div class="card-header" id="heading{{$i}}">
                        <span class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">
                                <h5 class="h5-responsive"><i class="fas fa-book"></i>{{ " ".$list->thai_name}}</h5>
                            </button>
                        </span>
                    </div>
                    <div id="collapse{{$i}}" class="collapse @if ($i == $get_i) show @endif"
                        aria-labelledby="heading{{$i}}" data-parent="#accordionSoc">
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row" width="15%">ชื่อหลักสูตร</th>
                                        <td>{{ $list->thai_name}} <br>
                                            {{ $list->eng_name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ชื่อปริญญา</th>
                                        <td>{{ $list->thai_degree}} <br>
                                            {{ $list->eng_degree}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">รายละเอียด</th>
                                        <td>{!! $list->detail !!}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">งานที่รองรับ</th>
                                        <td>{!! $list->jobs !!}</td>
                                    </tr>
                                    @isset($list->file)
                                    @foreach(json_decode($list->file) as $file)
                                    <tr>
                                        <th scope="row">ดาวน์โหลด</th>
                                        <td><a class="black-text"
                                                href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}"
                                                target="_blank">
                                                {{ "เอกสารหลักสูตร".$list->thai_degree ?: '' }}
                                            </a></td>
                                    </tr>
                                    @endforeach
                                    @endisset
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            @else
            @foreach ($course as $list )
            <div class="card shadow-none bordered">
                <div class="card-header">
                    <span class="mb-0">
                        <button class="btn btn-link" type="button">
                            <h5 class="h5-responsive"><i class="fas fa-book"></i>{{ " ".$list->thai_name}}</h5>
                        </button>
                    </span>
                </div>
                 <div class="card-body">
                     <table class="table">
                         <tbody>
                             <tr>
                                 <th scope="row" width="15%">ชื่อหลักสูตร</th>
                                 <td>{{ $list->thai_name}} <br>
                                     {{ $list->eng_name}}
                                 </td>
                             </tr>
                             <tr>
                                 <th scope="row">ชื่อปริญญา</th>
                                 <td>{{ $list->thai_degree}} <br>
                                     {{ $list->eng_degree}}
                                 </td>
                             </tr>
                             <tr>
                                 <th scope="row">รายละเอียด</th>
                                 <td>{!! $list->detail !!}</td>
                             </tr>
                             <tr>
                                 <th scope="row">งานที่รองรับ</th>
                                 <td>{!! $list->jobs !!}</td>
                             </tr>
                             @isset($list->file)
                             @foreach(json_decode($list->file) as $file)
                             <tr>
                                 <th scope="row">ดาวน์โหลด</th>
                                 <td><a class="black-text"
                                         href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}"
                                         target="_blank">
                                         {{ "เอกสารหลักสูตร".$list->thai_degree ?: '' }}
                                     </a></td>
                             </tr>
                             @endforeach
                             @endisset
                         </tbody>
                     </table>
                 </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="col-md-12 col-sm-12 col-lg-3">
            <div class="card  bg-primary mb-3">
                <div class="card-header">
                    <h5 class="text-right text-white">บริการหลักสูตร</h5>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ url('course/1/1')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "."ระดับปริญญาตรี" }}</a>
                   {{--  <a href="{{ url('course/2/1')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "."ระดับปริญญาโท" }}</a> --}}
                    <a href="{{ url('course/3/1')}}" class="list-group-item list-group-item-action"><i
                            class="fas fa-angle-right text-primary"></i>{{" "."ระดับปริญญาเอก" }}</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
