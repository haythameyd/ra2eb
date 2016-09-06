@extends('app')
@section('title')
<title>راقب | تقييم المشروعات</title>
@stop
@section('body')

<!-- Rating
================================================== -->
<a name='about' id='about' class='anchor'></a>
<div class='row' style='padding-top:120px;'>
  <div class='col-md-2'>
    <h3 style='color:#777777;'>&nbsp;تقييم المشاريع</h3>
    <img class='' src='../img/underline_main.png' alt='underline' height='3' width='52'>
  </div>
  <div class='col-md-3 text-center'>
    <h2 style='color:#777777;'>اختر محافظتك</h2><hr>
    <form method='post' action=''{!url('')!}''>
    <div class='input-group img-center' style='font-size:10pt; width:70%;'>
      <select class='form-control' name='city_name' style='padding-top:2px;'>";
        @foreach ($cities_res as $cities)
          @if($cities->name_eng==$city)
          <option selected> {{$cities->name}} </option>
          @else
          <option> {{$cities->name}} </option>
          @endif
        @endforeach
      </select>
      <span class='input-group-btn'>
      <button type='submit' class='btn btn-default'><span class='glyphicon glyphicon-search' style='font-size:10pt;color:#22993a;'></span></button>
      </span>
      </div>
      </form>
  </div>
  <div class='col-md-6'> <h1 style='color:#777777;' class='text-center'>مشاريع محافظة {{$city_ar}}</h1><hr>
    @foreach ($proj_res as $projects)
        <div class='col-md-4' style="height:350px;">
          <div class='thumbnail text-center'>
            <img src='{{$projects->icon}}' alt='{{$projects->prj_name}}' class='img-rounded img-responsive' height='200' width='300'>
            <div class='caption'>
            <h4>{{substr($projects->prj_name, 0,140)}}</h4>
            <p>{{substr($projects->long_desc, 0,140)}}</p>
              <!-- show_rev_simple($row['rating_count'],$row['rating_total']); -->
            <button class='btn btn-success' data-toggle='modal' data-target='#Modal_{{$projects->proj_id}}'>قيم المشروع</button>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class='modal fade bs-example-modal-sm text-center' id='Modal_{{$projects->proj_id}}' tabindex='-1' role='dialog' aria-labelledby='myModalLabel{{$projects->proj_id}}' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
              <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
              <h4 class='modal-title' id='myModalLabel{{$projects->proj_id}}'>مشروع {{$projects->prj_name}}"</h4>
              </div>
              <div class='modal-body'>
              <img class='img-responsive img-center img-rounded' src='{{$projects->icon}}' alt='{{substr($projects->prj_name, 0,20)}}' height='200' width='300'>
              <p>{{$projects->long_desc}}</p>
                <!--show_rev_simple($row['rating_count'],$row['rating_total']); -->
              <div class='pull-left' style='font-size:10pt;'><span class='glyphicon glyphicon-paperclip' style='font-size:10pt;color:#f0ad4e;'></span>&nbsp
              @if($projects->attach==="")

                لا يوجد تقارير

              @else

                <a href='{{$projects->attach}}' target='_blank'>تفاصيل المشروع</a>

              @endif
              </div>
            <br>

              <hr>
              <form action='review.php' method='post'>
                <p>قم بتقييم الخدمات المقدمة من المشروع من 1-5 حسب: جودة الخدمة, ملائمة الخدمه, سهولة الوصول اليها</p>
                <br>

                <p>
                  <input type='radio' name='rating' id='optionsRadios{{$projects->proj_id}}_1' value='1' required>
                  مستاء
                  <input type='radio' name='rating' id='optionsRadios{{$projects->proj_id}}_2' value='2' required>
                  غير راضي
                  <input type='radio' name='rating' id='optionsRadios{{$projects->proj_id}}_3' value='3' required>
                  محايد
                  <input type='radio' name='rating' id='optionsRadios{{$projects->proj_id}}_4' value='4' required>
                  راضي
                  <input type='radio' name='rating' id='optionsRadios{{$projects->proj_id}}_5' value='5' required>
                  راضي جدا
                </p>

                <textarea class='form-control animated' cols='50' id='comment_{{$projects->proj_id}}' name='comment' placeholder='التفاصيل ...' rows='2'></textarea>
                <input type='hidden' name='user_id' value='".$user_id."'>
                <input type='hidden' name='proj_id' value='{{$projects->proj_id}}'>
                <input type='hidden' name='city_name' value='{{$projects->city}}'>
            <input type='hidden' name='rating_total' value='{{$projects->rating_total}}'>
            <input type='hidden' name='rating_count' value='{{$projects->rating_count}}'>
                </div>
                  <div class='modal-footer'>
                  <button type='button' class='btn btn-default' data-dismiss='modal'>اغلاق</button>
                  <button type='submit' class='btn btn-success'>قــيم</button>
                </form>
              </div>
            </div>
          </div>
        </div>

    @endforeach
    </div>
@stop
