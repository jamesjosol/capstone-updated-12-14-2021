
<div class="card mb-5 mt-5" id="cardss">
    <div class="card-header" style="height:65px;">
        <h1><i class="fas fa-key"></i> Change Password</h1>
        
    </div>
    <div class="card-body">
        <div class="mb-3 form-group @error('old-password') has-error @enderror">
            {!! Form::label('old-password','Old Password',[],false) !!}
            {!! Form::text('old-password', null, ['class'=>'form-control', 'id'=>'old-password']) !!}
            <span class="errspan" id="errspan">{{ $errors->first('old-password') }}</span>
        </div>
        <div class="mb-3 form-group @error('new-password') has-error @enderror">
            {!! Form::label('new-password','New Password',[],false) !!}
            {!! Form::text('new-password', null, ['class'=>'form-control', 'id'=>'new-password']) !!}
            <span class="errspan" id="errspan">{{ $errors->first('new-password') }}</span>
        </div>

        <div class="mb-3 form-group @error('confirm-password') has-error @enderror">
            {!! Form::label('confirm-password','Confirm Password',[],false) !!}
            {!! Form::text('confirm-password', null, ['class'=>'form-control', 'id'=>'confirm-password']) !!}
            <span class="errspan" id="errspan">{{ $errors->first('confirm-password') }}</span>
        </div>

        <div class="form-group">
            <button class="btn btn-primary form-control"><i class="fas fa-check"></i> Save</button> 
        </div>
        
    </div>
    
</div>


