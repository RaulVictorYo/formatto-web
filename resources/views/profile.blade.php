@extends('layouts.templateAdmin')

@section('content')

<section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_document_alt"></i>Forms</li>
            <li><i class="fa fa-file-text-o"></i>Form elements</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Form Elements
            </header>
            <div class="panel-body">
              <form class="form-horizontal " method="get">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Default</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Help text</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                    <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rounder</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control round-input">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Input focus</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Disabled</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Placeholder</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="placeholder">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Static control</label>
                  <div class="col-lg-10">
                    <p class="form-control-static">email@example.com</p>
                  </div>
                </div>
              </form>
            </div>
          </section>

@endsection