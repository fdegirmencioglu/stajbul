@extends('login_master')

@section('content2')

<div class="row">
	 <div class="large-12 columns">
        <div class="content">
 
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="login-form" data-abide method="POST" action="/auth/register">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="row">
							<div class="large-12 columns">
		            <div class="adi-field">
		                <label>Adı <small>*</small>
		                	<input type="text" class="form-control" name="adi" value="{{ old('adi') }}" required pattern="[a-zA-Z]+">
		                </label>
		                <small class="error">Doldurulması zorunlu alan. Lütfen yazı giriniz.</small>
		            </div>
		          </div>
		        </div>

            <div class="row">
            	<div class="large-12 columns">
		            <div class="soyadi-field">
		                <label>Soyadı <small>*</small>
		                	<input type="text" class="form-control" name="soyadi" value="{{ old('soyadi') }}" required pattern="[a-zA-Z]+">
		                </label>
		                <small class="error">Doldurulması zorunlu alan. Lütfen yazı giriniz.</small>
		            </div>
							</div>
						</div>

            <div class="row">
            	<div class="large-12 columns">
		            <div class="email-field">
		                <label>E-posta Adresi <small>*</small>
		                	<input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
		                </label>
		                <small class="error">Doldurulması zorunlu alan. Geçerli bir e-posta adresi giriniz.</small>
		            </div>
		          </div>
		        </div>

 						<div class="row">
 							<div class="large-12 columns">
		            <div class="password-field">
		                <label>Şifre <small>*</small>
		                	<input type="password" id="password" class="form-control" name="password" required>
		                </label>
		                <small class="error">Doldurulması zorunlu alan.</small>
		            </div>
		          </div>
		        </div>

            <div class="row">
            	<div class="large-12 columns">
		            <div class="password-confirmation-field">
		                <label>Şifre (tekrar)<small>*</small>
		                	<input type="password" class="form-control" name="password_confirmation" required data-equalto="password">
		                </label>
		                <small class="error">Doldurulması zorunlu alan. Uyumsuz şifre.</small>
		            </div>
		          </div>
		        </div>
  
 
					  <div class="row">
					    <div class="large-12 columns">
					      <label>Roller
					        <select name="tbl_tnm_rol_id" value="{{ old('tbl_tnm_rol_id') }}">
					          <option value="1">Yönetici</option>
					          <option value="2">Akademisyen</option>
					          <option value="3">Firma</option>
					          <option value="4">Öğrenci</option>
					        </select>
					      </label>
					    </div>
					  </div>

					  <br>
 
 						<div class="row">
	            <div class="large-12 columns">
	              <button type="submit" class="radius button right">Kayıt Ol</button>
							</div>
						</div>
  
					</form>



				</div>
			</div>
		</div> 
@endsection
