@include('errors.error_validator')

<link href="{!! asset('assets/css/bootstrap.css') !!}" media="all" rel="stylesheet" type="text/css"/>

<h1 class="page-header" style="background-color:#222222; color:#DEDEDE; text-align:center">
    {!! Html::image('./img/logo.jpg', 'alt', array( 'width' => 50, 'height' => 50 )) !!} Online Presence User
    Registration
</h1>


{!! Form::open(array('url' => '/auth/student_registration', 'class' => 'form-horizontal','role'=>'form')) !!}

    <!-- previous submission of registration data is re-encoded again as form element -->
    {!! csrf_field() !!}

<div class="form-group center-block">
    <label class="control-label col-sm-6" for="nrg">
        No. Registrasi:
    </label>
    <div class="col-sm-2    ">
        <input type="text" name="Noreg" value='' class="form-control" placeholder="enter registration id">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-6" for="name">
        Nama:
    </label>
    <div class="col-sm-2">
        <input type="text" name="nama" value={!! $reg_name !!} class="form-control" placeholder="enter name">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-6" for="prodi">
        Prodi:
    </label>
    <div class="col-sm-2">
        {!!Form::select('Prodi_Id', $prodis, 0, array('class' => 'form-control'))!!}
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-6" for="alamat">
        Alamat:
    </label>
    <div class="col-sm-2">
        <input type="text" name="alamat" value="" class="form-control" placeholder="enter address">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-6" for="telephone">
        Phone:
    </label>
    <div class="col-sm-2">
        <input type="text" name="telepon" value="" class="form-control" placeholder="enter phone">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-6" for="semester">
        Semester Masuk:
    </label>
    <div class="col-sm-2">
        <input type="text" name="semester" value="" class="form-control" placeholder="enter semester">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-6" for="semester">
        MAC Address:
    </label>
    <div class="col-sm-2">
        <input type="text" name="Mac" value="" class="form-control" placeholder="enter mac address">
    </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-6" for="btn_reg">

    </label>
    <div class="col-sm-2">
        <button type="submit" class="btn btn-info">Register</button>
    </div>
</div>

{!! Form::close() !!}

{!! Form::open(array('url' => '/home', 'class' => 'form-horizontal','method'=>'get')) !!}
<button type="submit" class="btn btn-default btn-block"><b>Cancel Registration</b></button>
{!! Form::close() !!}

</div>