@extends('layouts.templateAdmin')

@extends('layouts.admin.formeheader')
@section('content')

            <div class="panel-body">
              <form class="form-horizontal " method="PATCH" action="{{ route('profile.update') }}">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nome:</label>
                  <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Email:</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2">
                      <button type="submit" class="btn btn-info btn-lg">Gravar</button>
                  </div>
                   </div>
                </div>
              </form>
            </div>
          </section>

@endsection