@extends("master")
@section("center")

<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Product</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ URL('create') }}">
                        {{ csrf_field() }}
						
						<!--   sku ==========================================================-->
		
                        <div class="form-group{{ $errors->has('sku') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">sku</label>

                            <div class="col-md-6">
                                <input id="sku" type="text" class="form-control" name="sku" value="{{ old('sku') }}" required autofocus>

                                @if ($errors->has('sku'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sku') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<!--   name ==========================================================-->
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<!--   description ==========================================================-->
						<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<!--   regular_price ==========================================================-->
						<div class="form-group{{ $errors->has('regular_price') ? ' has-error' : '' }}">
                            <label for="regular_price" class="col-md-4 control-label">regular price</label>

                            <div class="col-md-6">
                                <input id="regular_price" type="text" class="form-control" name="regular_price" value="{{ old('regular_price') }}" required autofocus>

                                @if ($errors->has('regular_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('regular_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

					 	<!--   discount_price ==========================================================-->
						<div class="form-group{{ $errors->has('discount_price') ? ' has-error' : '' }}">
                            <label for="discount_price" class="col-md-4 control-label">discount_price</label>

                            <div class="col-md-6">
                                <input id="discount_price" type="text" class="form-control" name="discount_price" value="{{ old('discount_price') }}" required autofocus>

                                @if ($errors->has('discount_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('discount_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<!--   quantity ==========================================================-->
						<div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            <label for="quantity" class="col-md-4 control-label">quantity</label>

                            <div class="col-md-6">
                                <input id="quantity" type="text" class="form-control" name="quantity" value="{{ old('quantity') }}" required autofocus>

                                @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<!--   taxable ==========================================================-->
						<div class="form-group{{ $errors->has('taxable') ? ' has-error' : '' }}">
                            <label for="taxable" class="col-md-4 control-label">taxable</label>

                            <div class="col-md-6">
                                <input id="taxable" type="text" class="form-control" name="taxable" value="{{ old('taxable') }}" required autofocus>

                                @if ($errors->has('taxable'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('taxable') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

					 <!--
						 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

	
@endsection